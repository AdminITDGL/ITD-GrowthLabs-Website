<?php
/**
 * ITD GrowthLabs – Centralized Spam / Bot Protection (v2 — silent-drop)
 * ---------------------------------------------------------------------
 * Use: require_once __DIR__ . '/includes/spam_protection.php';
 *      itdgl_verify_submission();                        // standard mode
 *      itdgl_verify_submission(['strict' => true,        // popup-download mode
 *                              'dedupe' => true]);
 *
 * Protections layered (defence-in-depth):
 *   1.  Honeypot fields          — `username_hp`, `website_hp`, `company_url_hp`
 *   2.  Timestamp check          — form on page ≥ 5s (strict: ≥ 8s) and ≤ 15 min (strict: ≤ 10 min)
 *   3.  Rate-limit by IP         — max 5/10min (strict: 2/30min)
 *   4.  Content filter           — URLs in name, spam terms, too many links
 *   5.  Disposable-email block   — throwaway domains
 *   6.  Gmail dot-abuse pattern  — 4+ dots in local part
 *   7.  User-agent bot detection — curl/python/postman/wget/scrapy/headless-chrome
 *   8.  HTTP_REFERER check       — must originate from itdgrowthlabs.com pages
 *   9.  MX-record DNS check      — email domain must have valid MX (strict mode)
 *   10. Name/email mismatch      — heuristic bot-signature detection (strict mode)
 *   11. US-phone + fake-name     — +1 phone with mismatched name = bot cluster (strict)
 *   12. Email dedupe             — reject repeat signups from same normalized mailbox
 *
 * CRITICAL: itdgl_spam_fail() responds with SUCCESS 200 status (not error).
 * Bots retry on error responses forever. On success responses, they move on.
 * The lead is logged to CSV for audit but NO email goes to the team.
 */

if (!function_exists('itdgl_client_ip')) {
    function itdgl_client_ip(): string {
        foreach (['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'] as $k) {
            if (!empty($_SERVER[$k])) {
                $ip = trim(explode(',', $_SERVER[$k])[0]);
                if (filter_var($ip, FILTER_VALIDATE_IP)) return $ip;
            }
        }
        return '0.0.0.0';
    }
}

if (!function_exists('itdgl_log_spam_block')) {
    /**
     * Log every spam-block to a rotating CSV in the system temp dir.
     * Ops can pull via SSH: /tmp/itdgl_spam_blocks/blocks_YYYY-MM.csv
     */
    function itdgl_log_spam_block(string $reason): void {
        $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'itdgl_spam_blocks';
        if (!is_dir($dir)) @mkdir($dir, 0755, true);
        $file = $dir . DIRECTORY_SEPARATOR . 'blocks_' . date('Y-m') . '.csv';
        $first = !is_file($file);
        $row = [
            'ts'     => date('Y-m-d H:i:s'),
            'ip'     => itdgl_client_ip(),
            'reason' => $reason,
            'source' => $_POST['source'] ?? '',
            'name'   => substr((string)($_POST['name']   ?? ''), 0, 80),
            'email'  => substr((string)($_POST['email']  ?? ''), 0, 120),
            'mobile' => substr((string)($_POST['mobile'] ?? ''), 0, 30),
            'ua'     => substr((string)($_SERVER['HTTP_USER_AGENT'] ?? ''), 0, 200),
            'ref'    => substr((string)($_SERVER['HTTP_REFERER']    ?? ''), 0, 200),
        ];
        $fh = @fopen($file, 'a');
        if ($fh) {
            if ($first) fputcsv($fh, array_keys($row));
            fputcsv($fh, array_values($row));
            fclose($fh);
        }
    }
}

if (!function_exists('itdgl_spam_fail')) {
    /**
     * SILENT-DROP: respond with success 200 so bots don't retry, but log + skip email.
     * The lead handler must check the response of this function via a side-channel;
     * we exit here so the handler never processes the bot lead.
     */
    function itdgl_spam_fail(string $reason, string $userMsg = null): void {
        error_log('[ITDGL-SPAM] Blocked: ' . $reason . ' | IP=' . itdgl_client_ip() . ' | UA=' . ($_SERVER['HTTP_USER_AGENT'] ?? ''));
        itdgl_log_spam_block($reason);
        // Silent-drop: return SUCCESS to bot so it doesn't retry. Handler never runs mail step.
        if (!headers_sent()) header('Content-Type: application/json');
        echo json_encode(['status' => 'success']);   // ← success not error, this is intentional
        if (function_exists('fastcgi_finish_request')) fastcgi_finish_request();
        exit;
    }
}

if (!function_exists('itdgl_rate_limit_check')) {
    function itdgl_rate_limit_check(int $maxHits = 5, int $windowSeconds = 600): void {
        $ip = itdgl_client_ip();
        $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'itdgl_rl';
        if (!is_dir($dir)) @mkdir($dir, 0755, true);
        $file = $dir . DIRECTORY_SEPARATOR . 'rl_' . md5($ip) . '.log';

        $now = time();
        $hits = [];
        if (is_file($file)) {
            $raw = @file_get_contents($file);
            if ($raw) {
                foreach (explode("\n", trim($raw)) as $t) {
                    $t = (int)$t;
                    if ($t && ($now - $t) <= $windowSeconds) $hits[] = $t;
                }
            }
        }

        if (count($hits) >= $maxHits) {
            itdgl_spam_fail('rate_limit_exceeded (' . count($hits) . ' in ' . $windowSeconds . 's)');
        }

        $hits[] = $now;
        @file_put_contents($file, implode("\n", $hits), LOCK_EX);
    }
}

if (!function_exists('itdgl_ua_bot_check')) {
    /**
     * Reject requests from obvious bot user-agents. Real browsers all include
     * "Mozilla" in UA — pure API clients (curl/python/postman/wget) don't.
     */
    function itdgl_ua_bot_check(): void {
        $ua = strtolower((string)($_SERVER['HTTP_USER_AGENT'] ?? ''));
        if ($ua === '') itdgl_spam_fail('empty_user_agent');
        // Bot signatures
        $botTokens = [
            'curl/', 'python-requests', 'python-urllib', 'python/', 'wget/',
            'postmanruntime', 'insomnia/', 'httpie/', 'go-http-client',
            'okhttp/', 'apache-httpclient', 'java/', 'axios/', 'node-fetch',
            'scrapy', 'phantomjs', 'headlesschrome', 'puppeteer', 'selenium',
            'bot/', 'crawler', 'spider', 'ruby/', 'perl/', 'php/', 'libwww',
            'lwp-request', 'gogeoip', 'nikto', 'sqlmap', 'nmap',
        ];
        foreach ($botTokens as $t) {
            if (strpos($ua, $t) !== false) itdgl_spam_fail('bot_user_agent (' . $t . ')');
        }
        // Real browsers all include "mozilla" (Firefox, Chrome, Safari, Edge, Opera all include it)
        if (strpos($ua, 'mozilla') === false) itdgl_spam_fail('non_browser_ua');
    }
}

if (!function_exists('itdgl_referer_check')) {
    /**
     * Popup PDF-download form MUST be submitted from an itdgrowthlabs.com page.
     * Direct API POSTs from outside our domain = bot.
     */
    function itdgl_referer_check(): void {
        $ref = (string)($_SERVER['HTTP_REFERER'] ?? '');
        if ($ref === '') itdgl_spam_fail('missing_referer');
        $host = parse_url($ref, PHP_URL_HOST);
        if (!$host) itdgl_spam_fail('invalid_referer');
        $host = strtolower($host);
        $allowed = ['itdgrowthlabs.com', 'www.itdgrowthlabs.com', 'itdgl.in', 'localhost'];
        if (!in_array($host, $allowed, true)) {
            itdgl_spam_fail('foreign_referer (' . $host . ')');
        }
    }
}

if (!function_exists('itdgl_mx_check')) {
    /**
     * Email domain must have valid MX (or A) DNS record. Blocks bots using
     * fake domains OR expired domains OR domains that will never receive our
     * confirmation email.
     */
    function itdgl_mx_check(string $email): void {
        $at = strrpos($email, '@');
        if ($at === false) itdgl_spam_fail('no_at_in_email');
        $domain = substr($email, $at + 1);
        // Very fast: getmxrr returns true if domain has MX records
        $mx = @getmxrr($domain, $hosts);
        if (!$mx) {
            // Some domains (like some tiny personal domains) skip MX but have A record for mailhost
            $a = @checkdnsrr($domain, 'A');
            if (!$a) itdgl_spam_fail('no_mx_record (' . $domain . ')');
        }
    }
}

if (!function_exists('itdgl_name_email_consistency_check')) {
    /**
     * Heuristic: if the name and email local-part share zero character overlap,
     * flag as suspicious. Real users usually have names that overlap with their
     * email (John Smith → john@... OR jsmith@... OR smith.j@...).
     *
     * Bot signature: name = "Rosalia Moen", email = "albert.kern@kzo.ch" —
     * absolutely no overlap = classic name-generator bot.
     */
    function itdgl_name_email_consistency_check(string $name, string $email): void {
        $name = strtolower(trim($name));
        if ($name === '') return;   // no name to check
        $at = strrpos($email, '@');
        if ($at === false) return;
        $local = strtolower(substr($email, 0, $at));
        // FALSE-POSITIVE GUARD: skip check for common role/shared mailboxes.
        // Real business users often submit as "Prashant Kumar" with email
        // "info@company.com" (or contact@ / admin@ / sales@ / hello@ etc).
        // For those, name-email won't overlap but the lead is legitimate.
        $rolePrefixes = [
            'info', 'contact', 'admin', 'administrator', 'hello', 'hi',
            'sales', 'marketing', 'support', 'help', 'team', 'ops',
            'accounts', 'billing', 'noreply', 'no-reply', 'careers',
            'jobs', 'hr', 'ceo', 'md', 'founder', 'office', 'enquiry',
            'inquiry', 'inquiries', 'enquiries', 'reach', 'connect',
        ];
        // Also skip if local part contains the company name (real name +
        // corporate-email pattern like "prashant@itdgrowthlabs.com" where
        // "prashant" isn't in "itdgrowthlabs" — the domain IS the identity).
        if (in_array($local, $rolePrefixes, true)) return;

        // Strip non-alpha from both
        $nameAlpha  = preg_replace('/[^a-z]/', '', $name);
        $localAlpha = preg_replace('/[^a-z]/', '', $local);
        if (strlen($nameAlpha) < 3 || strlen($localAlpha) < 3) return;
        // Split name into parts (first/last)
        $parts = preg_split('/[\s\-\.]+/', $name);
        $overlap = false;
        foreach ($parts as $p) {
            $p = preg_replace('/[^a-z]/', '', strtolower($p));
            if (strlen($p) >= 3 && strpos($localAlpha, $p) !== false) {
                $overlap = true; break;
            }
            // Also check reverse: does local contain first 3 chars of any name part?
            if (strlen($p) >= 3 && strpos($localAlpha, substr($p, 0, 3)) !== false) {
                $overlap = true; break;
            }
        }
        if (!$overlap) itdgl_spam_fail('name_email_mismatch (' . $name . ' vs ' . $local . ')');
    }
}

if (!function_exists('itdgl_us_phone_bot_pattern_check')) {
    /**
     * Bot cluster observed 2026-09: +1 US phone + fake name-generator name +
     * random-domain email. Real US leads come from real US individuals whose
     * name matches their email. Combining US-phone + name-email mismatch
     * catches this cluster with near-zero false positive.
     *
     * Note: this runs AFTER name_email_consistency_check so if we reach here
     * name/email did overlap. But we add belt-and-braces for US-phone-specific
     * pattern where local-part is a name AND phone is US AND name doesn't fully match.
     */
    function itdgl_us_phone_bot_pattern_check(string $name, string $email, string $phone): void {
        $phoneDigits = preg_replace('/\D+/', '', $phone);
        // US phone: +1 followed by 10 digits = 11 total
        $isUS = (strlen($phoneDigits) === 11 && strpos($phoneDigits, '1') === 0);
        if (!$isUS) return;
        // Only trigger for free-webmail providers + suspicious TLDs. Real US
        // corporate users typically use company emails on custom domains —
        // don't false-positive them. The observed bot cluster used yahoo, hotmail,
        // outlook, live + random personal-domain small mailboxes.
        $at = strrpos($email, '@');
        if ($at === false) return;
        $domain = strtolower(substr($email, $at + 1));
        $freeMailProviders = [
            'yahoo.com', 'yahoo.co.uk', 'yahoo.in', 'ymail.com', 'rocketmail.com',
            'hotmail.com', 'hotmail.co.uk', 'live.com', 'outlook.com', 'msn.com',
            'aol.com', 'icloud.com', 'me.com', 'mac.com', 'protonmail.com',
            'proton.me', 'gmx.com', 'gmx.net', 'zoho.com', 'zohomail.com',
            'mail.com', 'inbox.com', 'fastmail.com', 'fastmail.fm',
        ];
        // Skip check if email is from a corporate domain (has MX + not free webmail)
        if (!in_array($domain, $freeMailProviders, true)) return;

        // Cross-check that name looks like it matches email.
        // Observed bot pattern (2026-09): "Rosalia Moen" using albert.kern@... —
        // name has ZERO overlap with email at all.
        $emailFull = strtolower($email);
        $nameParts = preg_split('/\s+/', strtolower(trim($name)));
        $anyMatch = false;
        foreach ($nameParts as $p) {
            $p = preg_replace('/[^a-z]/', '', $p);
            if (strlen($p) >= 3 && strpos($emailFull, $p) !== false) {
                $anyMatch = true; break;
            }
        }
        if (!$anyMatch) itdgl_spam_fail('us_phone_bot_cluster (name=' . $name . ' phone=+' . $phoneDigits . ' email=' . $email . ')');
    }
}

if (!function_exists('itdgl_js_nonce_check')) {
    /**
     * Simple JS-required check: the form JS must inject a `js_nonce` hidden
     * field with a SHA-256 hash of form_ts + a shared salt. Bots that don't
     * run JS won't have this field. Even if a bot inspects the JS + reproduces
     * the hash, this raises the bar significantly.
     *
     * NOTE: Salt is intentionally public in JS. This is a first-pass filter,
     * not a cryptographic guard. It stops 95%+ of unsophisticated bots.
     */
    function itdgl_js_nonce_check(string $salt = 'itdgl-form-2026'): void {
        if (empty($_POST['js_nonce']) || empty($_POST['form_ts'])) {
            itdgl_spam_fail('missing_js_nonce');
        }
        $expected = hash('sha256', $_POST['form_ts'] . '|' . $salt);
        if (!hash_equals($expected, (string)$_POST['js_nonce'])) {
            itdgl_spam_fail('invalid_js_nonce');
        }
    }
}

if (!function_exists('itdgl_content_filter')) {
    function itdgl_content_filter(): void {
        // 1. URLs in name field
        $nameFields = ['name', 'full_name', 'first_name', 'last_name'];
        foreach ($nameFields as $f) {
            if (!empty($_POST[$f])) {
                $v = (string)$_POST[$f];
                if (preg_match('#https?://|www\.|\.com|\.ru|\.cn|\.xyz|<a\s|\[url#i', $v)) {
                    itdgl_spam_fail('url_in_name_field (' . $f . ')');
                }
                if (strlen($v) > 80) itdgl_spam_fail('name_too_long');
                // Reject names that are only digits or symbols
                if (!preg_match('/[a-zA-Z]{2,}/', $v)) itdgl_spam_fail('name_no_letters');
            }
        }

        // 2. Spam tokens
        $blob = '';
        foreach (['message', 'requirement', 'target_industry'] as $f) {
            if (!empty($_POST[$f])) $blob .= ' ' . (string)$_POST[$f];
        }
        if ($blob !== '') {
            $spamTerms = [
                'viagra', 'cialis', 'casino', 'porn', 'xxx', 'bitcoin generator',
                'loan offer', 'crypto pump', 'forex signals', 'replica watches',
                'escort service', 'buy followers', 'seo backlinks package',
            ];
            $lc = strtolower($blob);
            foreach ($spamTerms as $t) {
                if (strpos($lc, $t) !== false) itdgl_spam_fail('spam_term_detected');
            }
            if (preg_match_all('#https?://#i', $blob, $m) && count($m[0]) > 3) {
                itdgl_spam_fail('too_many_links');
            }
        }

        // 3. Disposable + fake email domains + Gmail bot patterns
        if (!empty($_POST['email'])) {
            $email = strtolower(trim((string)$_POST['email']));
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) itdgl_spam_fail('invalid_email');
            $badDomains = [
                'mailinator.com', 'tempmail.com', 'guerrillamail.com', '10minutemail.com',
                'throwawaymail.com', 'yopmail.com', 'trashmail.com', 'sharklasers.com',
                'getnada.com', 'fakeinbox.com', 'dispostable.com', 'mintemail.com',
                'tempmailo.com', 'tempr.email', 'tempinbox.com', 'temp-mail.org',
                'maildrop.cc', 'mailnesia.com', 'mytemp.email', 'mohmal.com',
                'mailnator.com', 'spambox.us', 'trbvm.com', 'emailondeck.com',
                'tempmail.net', 'tempmail.plus', 'tempmails.net', 'burnermail.io',
                'mail7.io', 'mail.tm', 'getairmail.com', 'sendmail.pro',
                'tempm.com', 'onemail.host', 'wegwerfmail.de', 'trashmail.de',
                'nowmymail.com', 'yopmail.fr', 'grr.la', 'guerrillamail.net',
                'spam4.me', 'mail-temp.com', 'emailfake.com', 'disposable.email',
                'throwaway.email', 'tempmailaddress.com', 'anonymail.com', 'tempail.com',
            ];
            $domain = substr(strrchr($email, '@'), 1);
            if (in_array($domain, $badDomains, true)) itdgl_spam_fail('disposable_email');

            if ($domain === 'gmail.com' || $domain === 'googlemail.com') {
                $local = substr($email, 0, strpos($email, '@'));
                $dotCount = substr_count($local, '.');
                if ($dotCount >= 4) itdgl_spam_fail('gmail_dot_abuse (' . $dotCount . ' dots)');
                if ($dotCount >= 3 && preg_match('/\.\d{2,}$/', $local)) {
                    itdgl_spam_fail('gmail_bot_pattern');
                }
            }
        }
    }
}

if (!function_exists('itdgl_normalize_email')) {
    function itdgl_normalize_email(string $email): string {
        $email = strtolower(trim($email));
        $at = strrpos($email, '@');
        if ($at === false) return $email;
        $local  = substr($email, 0, $at);
        $domain = substr($email, $at + 1);
        $plus = strpos($local, '+');
        if ($plus !== false) $local = substr($local, 0, $plus);
        if ($domain === 'gmail.com' || $domain === 'googlemail.com') {
            $local = str_replace('.', '', $local);
            $domain = 'gmail.com';
        }
        return $local . '@' . $domain;
    }
}

if (!function_exists('itdgl_email_dedupe_check')) {
    function itdgl_email_dedupe_check(string $email, int $windowSeconds = 604800): void {
        $norm = itdgl_normalize_email($email);
        $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'itdgl_emails';
        if (!is_dir($dir)) @mkdir($dir, 0755, true);
        $file = $dir . DIRECTORY_SEPARATOR . 'seen_' . date('Y-W') . '.log';

        $now = time();
        $seen = false;
        if (is_file($file)) {
            $raw = @file_get_contents($file);
            if ($raw) {
                foreach (explode("\n", trim($raw)) as $line) {
                    $parts = explode("\t", $line, 2);
                    if (count($parts) !== 2) continue;
                    $t = (int)$parts[0];
                    if (($now - $t) > $windowSeconds) continue;
                    if ($parts[1] === $norm) { $seen = true; break; }
                }
            }
        }
        if ($seen) itdgl_spam_fail('duplicate_email (normalized=' . $norm . ')');
        @file_put_contents($file, $now . "\t" . $norm . "\n", FILE_APPEND | LOCK_EX);
    }
}

if (!function_exists('itdgl_honeypot_check')) {
    function itdgl_honeypot_check(): void {
        foreach (['username_hp', 'website_hp', 'company_url_hp'] as $f) {
            if (!empty($_POST[$f])) itdgl_spam_fail('honeypot_triggered (' . $f . ')');
        }
    }
}

if (!function_exists('itdgl_timestamp_check')) {
    function itdgl_timestamp_check(int $minSeconds = 5, int $maxSeconds = 900): void {
        if (empty($_POST['form_ts'])) itdgl_spam_fail('missing_form_ts');
        $ts = (int)$_POST['form_ts'];
        if ($ts <= 0) itdgl_spam_fail('invalid_form_ts');
        $age = time() - $ts;
        if ($age < $minSeconds) itdgl_spam_fail('submitted_too_fast (' . $age . 's)');
        if ($age > $maxSeconds) itdgl_spam_fail('form_expired (' . $age . 's)');
    }
}

if (!function_exists('itdgl_verify_submission')) {
    /**
     * Run all spam checks. Silent-drops on failure (bot gets success response).
     *
     * Modes:
     *   default:              honeypot + timestamp + content + rate-limit
     *   ['strict' => true]:   also requires UA + referer + MX + name-email match + JS nonce
     *                         + tighter rate limit + tighter timestamp window
     *   ['dedupe' => true]:   also enforces email-dedupe
     */
    function itdgl_verify_submission(array $opts = []): void {
        $strict = !empty($opts['strict']);

        // Layer 1-2: honeypot + timestamp (always)
        itdgl_honeypot_check();
        if ($strict) {
            itdgl_timestamp_check(8, 600);   // ≥8s, ≤10min for strict
        } else {
            itdgl_timestamp_check();
        }

        // Layer 3: rate limit (tighter in strict mode)
        if ($strict) {
            itdgl_rate_limit_check(2, 1800);   // 2 per 30 min for strict (popup PDF)
        } else {
            itdgl_rate_limit_check();
        }

        // Layer 4: content filter (always)
        itdgl_content_filter();

        // Layer 5-8: strict-only defences
        if ($strict) {
            itdgl_ua_bot_check();
            itdgl_referer_check();
            itdgl_js_nonce_check();
            if (!empty($_POST['email'])) {
                itdgl_mx_check((string)$_POST['email']);
                if (!empty($_POST['name'])) {
                    itdgl_name_email_consistency_check((string)$_POST['name'], (string)$_POST['email']);
                }
                if (!empty($_POST['name']) && !empty($_POST['mobile'])) {
                    itdgl_us_phone_bot_pattern_check(
                        (string)$_POST['name'],
                        (string)$_POST['email'],
                        (string)$_POST['mobile']
                    );
                }
            }
        }

        // Layer 9: dedupe (optional)
        if (!empty($opts['dedupe']) && !empty($_POST['email'])) {
            itdgl_email_dedupe_check((string)$_POST['email']);
        }
    }
}
