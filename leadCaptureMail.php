<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/includes/spam_protection.php';
require_once __DIR__ . '/includes/email_templates.php';
require_once __DIR__ . '/includes/lead_log.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $source = isset($_POST['source']) ? htmlspecialchars($_POST['source']) : 'unknown';
    $isNewsletter = ($source === 'newsletter_bar');

    // Centralised bot / spam protection (honeypot + timestamp + content filter + rate-limit).
    // Newsletter signups also get dedupe to block dot-abuse bot farms.
    itdgl_verify_submission($isNewsletter ? ['dedupe' => true] : []);

    $name   = isset($_POST['name'])   ? htmlspecialchars($_POST['name'])                   : '';
    $email  = isset($_POST['email'])  ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $mobile = isset($_POST['mobile']) ? htmlspecialchars($_POST['mobile'])                 : '';

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email']);
        exit;
    }

    echo json_encode(['status' => 'success']);
    if (function_exists('fastcgi_finish_request')) fastcgi_finish_request();

    $isDownload = ($source === 'popup_profile_download');

    $sourceLabel = 'Unknown';
    if ($isDownload)       $sourceLabel = 'Company Profile Download (Popup)';
    elseif ($isNewsletter) $sourceLabel = 'Newsletter Subscription';
    else                   $sourceLabel = ucwords(str_replace('_', ' ', $source));

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
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'info@itdgrowthlabs.com';
                $mail->Password   = 'qaze srft zxyy dfgy';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;
                $mail->CharSet    = 'UTF-8';
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
    ]);

    // ── Real leads (download / contact / etc): email the team as before ─────
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@itdgrowthlabs.com';
        $mail->Password   = 'qaze srft zxyy dfgy';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8';

        // ── 1. Internal notification to the team ──────────────────────────
        $mail->setFrom('info@itdgrowthlabs.com', 'ITD GrowthLabs Website');
        $mail->addAddress('info@itdgrowthlabs.com', 'ITD GrowthLabs');
        $mail->addAddress('kushal@itdservices.in',  'ITD GrowthLabs');
        $mail->addReplyTo($email, $name);
        $mail->isHTML(true);
        $mail->Subject = "New Lead: {$sourceLabel} — {$name}" . ($mobile ? " ({$mobile})" : '');
        $mail->Body    = itdgl_internal_email(
            "Lead Captured: {$sourceLabel}",
            ['Name' => $name, 'Email' => $email, 'Mobile' => $mobile, 'Source' => $sourceLabel],
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
