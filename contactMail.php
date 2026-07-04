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

    // Centralised bot / spam protection (honeypot + timestamp + content filter + rate-limit)
    itdgl_verify_submission();

    $name    = isset($_POST['name'])    ? htmlspecialchars($_POST['name'])                       : '';
    $email   = isset($_POST['email'])   ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)     : '';
    $mobile  = isset($_POST['mobile'])  ? htmlspecialchars($_POST['mobile'])                     : '';
    $service = isset($_POST['service']) ? htmlspecialchars($_POST['service'])                    : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message'])                    : '';

    // STOPGAP: outbound SMTP is blocked from this droplet (see includes/lead_log.php).
    // Persist every lead to a private CSV BEFORE attempting SMTP so nothing is lost
    // if PHPMailer's connect() times out.
    itdgl_log_lead('contactMail', compact('name', 'email', 'mobile', 'service', 'message'));

    // reCAPTCHA v3 verification with 5s timeout so a slow siteverify never hangs
    // the request. Threshold lowered from 0.5 → 0.3: v3 scores users on behaviour;
    // legit first-time visitors, VPN/privacy-tool users, and mobile users routinely
    // score 0.3–0.4. Anything under 0.3 is confidently bot.
    $secretKey = "6Lcm0hosAAAAAO-sjX64qw9HYhBf-tpFkT_RUdqy";
    $response = $_POST['g-recaptcha-response'] ?? '';
    $captcha_success = null;
    if ($response !== '') {
        $ctx = stream_context_create(['http' => ['timeout' => 5, 'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query(['secret' => $secretKey, 'response' => $response,
                'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''])]]);
        $verify = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $ctx);
        if ($verify !== false) $captcha_success = json_decode($verify);
    }

    // Fail-open on verification errors: if Google's endpoint is unreachable or
    // slow, don't block the user — the honeypot + timestamp + rate-limit in
    // itdgl_verify_submission() already filter bots. Only block when we have a
    // definitive score < 0.3 (confidently bot).
    if ($captcha_success && isset($captcha_success->success) && $captcha_success->success
        && isset($captcha_success->score) && $captcha_success->score < 0.3) {
        error_log('[ITDGL-CAPTCHA] Low score reject: ' . $captcha_success->score . ' IP=' . ($_SERVER['REMOTE_ADDR'] ?? ''));
        echo json_encode(['status' => 'error', 'message' => 'Verification failed. Please refresh and try again.']);
        exit;
    }

    echo json_encode(['status' => 'success']);
    if (function_exists('fastcgi_finish_request')) fastcgi_finish_request();

    try {
        $mail = new PHPMailer(true);
        // SMTP transport (Host/Auth/Username/Password/Port/SMTPSecure/CharSet)
        // is configured in includes/smtp_config.php — gitignored, edited per-env.
        itdgl_configure_smtp($mail);

        // ── 1. Internal notification to the team ──────────────────────────
        $mail->setFrom('info@itdgrowthlabs.com', 'ITD GrowthLabs Website');
        $mail->addAddress('info@itdgrowthlabs.com', 'ITD GrowthLabs');
        $mail->addAddress('kushal@itdservices.in',  'ITD GrowthLabs');
        $mail->addReplyTo($email, $name);
        $mail->isHTML(true);
        $mail->Subject = "New Enquiry: {$name}" . ($service ? " — {$service}" : '') . ($mobile ? " ({$mobile})" : '');
        $mail->Body    = itdgl_internal_email(
            'General Contact Enquiry',
            ['Name' => $name, 'Email' => $email, 'Mobile' => $mobile, 'Service Interested In' => $service, 'Message' => $message],
            $mobile
        );

        if ($mail->send()) {
            // ── 2. Confirmation email to the user ─────────────────────────
            $mail->clearAddresses();
            $mail->clearReplyTos();
            $mail->addAddress($email, $name);
            $mail->Subject = 'We\'ve Received Your Enquiry — ITD GrowthLabs';
            $mail->Body    = itdgl_user_email($name, ['form_type' => 'contact', 'service' => $service]);
            $mail->send();
        }
    } catch (Exception $e) {
        // Lead is already in /tmp/itdgl_leads/leads_YYYY-MM.csv from the call above,
        // so nothing is lost. Surface the SMTP error clearly for log greppers.
        itdgl_log_mail_failure('contactMail', $e->getMessage(), compact('name', 'email', 'mobile'));
        // No echo here: success was already flushed via fastcgi_finish_request earlier.
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
