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

    $name    = isset($_POST['name'])    ? htmlspecialchars($_POST['name'])                       : '';
    $email   = isset($_POST['email'])   ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)     : '';
    $mobile  = isset($_POST['mobile'])  ? htmlspecialchars($_POST['mobile'])                     : '';
    $service = isset($_POST['service']) ? htmlspecialchars($_POST['service'])                    : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message'])                    : '';

    $secretKey = "6Lcm0hosAAAAAO-sjX64qw9HYhBf-tpFkT_RUdqy";
    $response = $_POST['g-recaptcha-response'] ?? '';
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $response;
    $verify = file_get_contents($url);
    $captcha_success = json_decode($verify);

    if (!$captcha_success->success || $captcha_success->score < 0.5) {
        echo json_encode(['status' => 'error', 'message' => 'Captcha verification failed!']);
        exit;
    }

    echo json_encode(['status' => 'success']);
    if (function_exists('fastcgi_finish_request')) fastcgi_finish_request();

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
        error_log("contactMail Error: " . $e->getMessage());
        echo json_encode(['status' => 'error', 'message' => 'Mail sending failed: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
