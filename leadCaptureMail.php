<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/includes/spam_protection.php';
require_once __DIR__ . '/includes/email_templates.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Centralised bot / spam protection (honeypot + timestamp + content filter + rate-limit)
    itdgl_verify_submission();

    $name   = isset($_POST['name'])   ? htmlspecialchars($_POST['name'])                   : '';
    $email  = isset($_POST['email'])  ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $mobile = isset($_POST['mobile']) ? htmlspecialchars($_POST['mobile'])                 : '';
    $source = isset($_POST['source']) ? htmlspecialchars($_POST['source'])                 : 'unknown';

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email']);
        exit;
    }

    echo json_encode(['status' => 'success']);
    if (function_exists('fastcgi_finish_request')) fastcgi_finish_request();

    $isDownload   = ($source === 'popup_profile_download');
    $isNewsletter = ($source === 'newsletter_bar');

    $sourceLabel = 'Unknown';
    if ($isDownload)   $sourceLabel = 'Company Profile Download (Popup)';
    elseif ($isNewsletter) $sourceLabel = 'Newsletter Subscription';
    else $sourceLabel = ucwords(str_replace('_', ' ', $source));

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

        // ── 2. Confirmation email to the user (skip for newsletter-only) ──
        if (!empty($email) && !$isNewsletter) {
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
        error_log("leadCaptureMail Error: " . $e->getMessage());
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
