<?php
/**
 * ITD GrowthLabs – Centralized Spam / Bot Protection
 * ---------------------------------------------------
 * Use: require_once __DIR__ . '/includes/spam_protection.php';
 *      itdgl_verify_submission();   // returns true OR terminates with JSON error
 *
 * Protections layered (defence-in-depth):
 *   1. Honeypot fields           – `username_hp`, `website_hp` must be empty
 *   2. Timestamp check           – form must have been on page ≥ 3s and ≤ 2h
 *   3. Form-token check          – simple per-session token (optional)
 *   4. Rate-limit by IP          – max 5 submissions / 10 min (file-based)
 *   5. Content filter            – rejects URLs in name field + obvious spam terms
 *   6. Disposable-email block    – rejects common throw-away domains
 *
 * Returns JSON error and exits on failure so the mail handlers stay clean.
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

if (!function_exists('itdgl_spam_fail')) {
    function itdgl_spam_fail(string $reason, string $userMsg = 'Your submission could not be processed. Please try again later.'): void {
        error_log('[ITDGL-SPAM] Blocked: ' . $reason . ' | IP=' . itdgl_client_ip() . ' | UA=' . ($_SERVER['HTTP_USER_AGENT'] ?? ''));
        // Respond 200 with error status (keeps UX quiet; bots don't get a clear signal)
        if (!headers_sent()) header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => $userMsg]);
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
            itdgl_spam_fail('rate_limit_exceeded (' . count($hits) . ' in ' . $windowSeconds . 's)', 'Too many submissions. Please wait a few minutes and try again.');
        }

        $hits[] = $now;
        @file_put_contents($file, implode("\n", $hits), LOCK_EX);
    }
}

if (!function_exists('itdgl_content_filter')) {
    function itdgl_content_filter(): void {
        // 1. URLs in the name field → bot
        $nameFields = ['name', 'full_name', 'first_name', 'last_name'];
        foreach ($nameFields as $f) {
            if (!empty($_POST[$f])) {
                $v = (string)$_POST[$f];
                if (preg_match('#https?://|www\.|\.com|\.ru|\.cn|\.xyz|<a\s|\[url#i', $v)) {
                    itdgl_spam_fail('url_in_name_field (' . $f . ')');
                }
                if (strlen($v) > 80) itdgl_spam_fail('name_too_long');
            }
        }

        // 2. Obvious spam tokens in message/requirement fields
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
            // Too many links in message
            if (preg_match_all('#https?://#i', $blob, $m) && count($m[0]) > 3) {
                itdgl_spam_fail('too_many_links');
            }
        }

        // 3. Email: block disposable / obviously fake
        if (!empty($_POST['email'])) {
            $email = strtolower(trim((string)$_POST['email']));
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) itdgl_spam_fail('invalid_email');
            $badDomains = [
                'mailinator.com', 'tempmail.com', 'guerrillamail.com', '10minutemail.com',
                'throwawaymail.com', 'yopmail.com', 'trashmail.com', 'sharklasers.com',
                'getnada.com', 'fakeinbox.com', 'dispostable.com', 'mintemail.com',
            ];
            $domain = substr(strrchr($email, '@'), 1);
            if (in_array($domain, $badDomains, true)) itdgl_spam_fail('disposable_email');
        }
    }
}

if (!function_exists('itdgl_honeypot_check')) {
    function itdgl_honeypot_check(): void {
        // Any honeypot field populated = bot
        foreach (['username_hp', 'website_hp', 'company_url_hp'] as $f) {
            if (!empty($_POST[$f])) itdgl_spam_fail('honeypot_triggered (' . $f . ')');
        }
    }
}

if (!function_exists('itdgl_timestamp_check')) {
    function itdgl_timestamp_check(int $minSeconds = 3, int $maxSeconds = 7200): void {
        // `form_ts` is rendered into the form as the unix timestamp the form was served.
        // Humans take ≥ 3s to fill a form; bots submit instantly.
        if (empty($_POST['form_ts'])) return;   // tolerate missing (older cached forms)
        $ts = (int)$_POST['form_ts'];
        if ($ts <= 0) itdgl_spam_fail('invalid_form_ts');
        $age = time() - $ts;
        if ($age < $minSeconds) itdgl_spam_fail('submitted_too_fast (' . $age . 's)');
        if ($age > $maxSeconds) itdgl_spam_fail('form_expired (' . $age . 's)');
    }
}

if (!function_exists('itdgl_verify_submission')) {
    /**
     * Run all spam checks. Exits with JSON error on failure.
     */
    function itdgl_verify_submission(): void {
        itdgl_honeypot_check();
        itdgl_timestamp_check();
        itdgl_content_filter();
        itdgl_rate_limit_check();
    }
}
