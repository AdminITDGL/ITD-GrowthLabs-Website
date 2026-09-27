<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/includes/spam_protection.php';
require_once __DIR__ . '/includes/email_templates.php';
require_once __DIR__ . '/includes/lead_log.php';
require_once __DIR__ . '/includes/smtp_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $source = isset($_POST['source']) ? htmlspecialchars($_POST['source']) : 'unknown';
    $isNewsletter = ($source === 'newsletter_bar');

    // High-abuse sources get STRICT + dedupe protection:
    //   - popup_marketing_brochure_download: attracted a bot flood 2026-09
    //   - popup_profile_download: same PDF-gate risk pattern
    //   - newsletter_bar: bot farms use dot-abuse aliases
    $strictSources = ['popup_marketing_brochure_download', 'popup_profile_download'];
    $useStrict     = in_array($source, $strictSources, true);
    $useDedupe     = $useStrict || $isNewsletter;

    // Centralised bot / spam protection. On failure, itdgl_verify_submission()
    // SILENT-DROPS: bot receives 200 success response but nothing is emailed.
    // Bots that get 'error' retry forever with new payloads; on 'success' they stop.
    itdgl_verify_submission([
        'strict' => $useStrict,
        'dedupe' => $useDedupe,
    ]);

    $name   = isset($_POST['name'])   ? htmlspecialchars($_POST['name'])                   : '';
    $email  = isset($_POST['email'])  ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $mobile = isset($_POST['mobile']) ? htmlspecialchars($_POST['mobile'])                 : '';

    // Optional extra fields (used by LinkedIn Personal Branding package selection + other forms)
    $package       = isset($_POST['package'])        ? htmlspecialchars($_POST['package'])        : '';
    $roleIndustry  = isset($_POST['role_industry'])  ? htmlspecialchars($_POST['role_industry'])  : '';
    $city          = isset($_POST['city'])           ? htmlspecialchars($_POST['city'])           : '';
    $message       = isset($_POST['message'])        ? htmlspecialchars($_POST['message'])        : '';

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email']);
        exit;
    }

    echo json_encode(['status' => 'success']);
    if (function_exists('fastcgi_finish_request')) fastcgi_finish_request();

    $isDownload          = ($source === 'popup_profile_download');
    $isMarketingDownload = ($source === 'popup_marketing_brochure_download');

    $sourceLabel = 'Unknown';
    if ($isMarketingDownload) $sourceLabel = 'Marketing Profile Download (Popup)';
    elseif ($isDownload)      $sourceLabel = 'Company Profile Download (Popup)';
    elseif ($isNewsletter)    $sourceLabel = 'Newsletter Subscription';
    else                      $sourceLabel = ucwords(str_replace('_', ' ', $source));

    // Treat marketing-brochure downloads as a download for the user confirmation flow.
    $isDownload = $isDownload || $isMarketingDownload;

    // ── Newsletter signups: log silently, DO NOT email the team ─────────────
    // Prior behavior flooded the team inbox with bot signups. Newsletter subs
    // now go to a dated CSV outside the web root that ops can pull via SSH.
    // Location: sys_get_temp_dir()/itdgl_newsletter/subscribers_YYYY-MM.csv
    if ($isNewsletter) {
        // 1. Log to CSV (still no team email — see comment above re: bot flood)
        try {
            $logDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'itdgl_newsletter';
            if (!is_dir($logDir)) @mkdir($logDir, 0755, true);
            $csv = $logDir . DIRECTORY_SEPARATOR . 'subscribers_' . date('Y-m') . '.csv';
            $isNew = !is_file($csv);
            $fh = @fopen($csv, 'a');
            if ($fh) {
                if ($isNew) fputcsv($fh, ['timestamp_iso', 'email', 'name', 'ip', 'user_agent', 'referer']);
                fputcsv($fh, [
                    date('c'),
                    $email,
                    $name,
                    itdgl_client_ip(),
                    substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200),
                    substr($_SERVER['HTTP_REFERER']    ?? '', 0, 200),
                ]);
                fclose($fh);
            }
        } catch (Exception $e) {
            error_log("Newsletter log error: " . $e->getMessage());
        }

        // 2. Send a welcome email to the subscriber so they have proof of signup.
        //    Anti-bot middleware (itdgl_verify_submission with dedupe) already ran above.
        if (!empty($email)) {
            try {
                $mail = new PHPMailer(true);
                // SMTP transport configured in includes/smtp_config.php (gitignored).
                itdgl_configure_smtp($mail);
                $mail->setFrom('info@itdgrowthlabs.com', 'ITD GrowthLabs');
                $mail->addAddress($email, $name ?: 'Subscriber');
                $mail->isHTML(true);
                $mail->Subject = 'Welcome to ITD GrowthLabs — You\'re Subscribed';
                $mail->Body    = itdgl_user_email($name ?: 'there', ['form_type' => 'newsletter']);
                $mail->send();
            } catch (Exception $e) {
                error_log("Newsletter welcome email error: " . $e->getMessage());
            }
        }
        exit;
    }

    // STOPGAP: outbound SMTP is blocked from this droplet (see includes/lead_log.php)
    // Persist every download/popup lead to a private CSV BEFORE attempting SMTP.
    itdgl_log_lead('leadCapture_' . $source, [
        'name' => $name, 'email' => $email, 'mobile' => $mobile,
        'source' => $source, 'source_label' => $sourceLabel,
        'package' => $package, 'role_industry' => $roleIndustry,
        'city' => $city, 'message' => $message,
    ]);

    // ── Real leads (download / contact / etc): email the team as before ─────
    try {
        $mail = new PHPMailer(true);
        // SMTP transport configured in includes/smtp_config.php (gitignored).
        itdgl_configure_smtp($mail);

        // ── 1. Internal notification to the team ──────────────────────────
        $mail->setFrom('info@itdgrowthlabs.com', 'ITD GrowthLabs Website');
        $mail->addAddress('info@itdgrowthlabs.com', 'ITD GrowthLabs');
        $mail->addAddress('kushal@itdservices.in',  'ITD GrowthLabs');
        // IMPORTANT: Reply-To must be our own domain to prevent Gmail's
        // "This message appears to be sent from your account but Gmail couldn't
        //  verify this" warning. Setting Reply-To to the submitter's email
        //  triggers that anti-spoofing warning + damages sender reputation.
        //  Submitter's contact details are in the body; team clicks Email/Call
        //  buttons in the email template to respond.
        $mail->addReplyTo('info@itdgrowthlabs.com', 'ITD GrowthLabs');
        $mail->isHTML(true);
        $pkgTag        = $package ? " — [{$package}]" : '';
        $mail->Subject = "New Lead: {$sourceLabel}{$pkgTag} — {$name}" . ($mobile ? " ({$mobile})" : '');

        // Build fields array — include package + role + city + message if present
        $fields = ['Name' => $name, 'Email' => $email, 'Mobile' => $mobile, 'Source' => $sourceLabel];
        if (!empty($package))      $fields['Package Selected'] = $package;
        if (!empty($roleIndustry)) $fields['Role + Industry']  = $roleIndustry;
        if (!empty($city))         $fields['City']             = $city;
        if (!empty($message))      $fields['Message']          = $message;

        $mail->Body = itdgl_internal_email(
            "Lead Captured: {$sourceLabel}" . ($package ? " — {$package}" : ''),
            $fields,
            $mobile
        );
        $mail->send();

        // ── 2. Confirmation email to the user ──
        if (!empty($email)) {
            $mail->clearAddresses();
            $mail->clearReplyTos();
            $mail->addAddress($email, $name);
            $mail->Subject = $isDownload
                ? 'Your ITD GrowthLabs Company Profile is Ready — Plus, Let\'s Talk'
                : 'Thank You for Your Interest — ITD GrowthLabs';
            $mail->Body = itdgl_user_email($name, [
                'form_type'   => 'profile_download',
                'is_download' => $isDownload,
            ]);
            $mail->send();
        }

    } catch (Exception $e) {
        itdgl_log_mail_failure('leadCapture_' . $source, $e->getMessage(), ['name' => $name, 'email' => $email]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
