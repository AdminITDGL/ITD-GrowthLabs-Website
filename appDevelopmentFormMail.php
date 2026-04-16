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

    $full_name   = isset($_POST['full_name'])   ? htmlspecialchars($_POST['full_name'])                   : '';
    $email       = isset($_POST['email'])       ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)       : '';
    $phone       = isset($_POST['phone'])       ? htmlspecialchars($_POST['phone'])                        : '';
    $budget      = isset($_POST['budget'])      ? htmlspecialchars($_POST['budget'])                       : '';
    $requirement = isset($_POST['requirement']) ? htmlspecialchars($_POST['requirement'])                  : '';

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
        $mail->addReplyTo($email, $full_name);
        $mail->isHTML(true);
        $mail->Subject = "New App Dev Enquiry: {$full_name}" . ($phone ? " ({$phone})" : '') . ($budget ? " — Budget: {$budget}" : '');
        $mail->Body    = itdgl_internal_email(
            'App Development Enquiry',
            ['Full Name' => $full_name, 'Email' => $email, 'Phone' => $phone, 'Budget' => $budget, 'Requirement' => $requirement],
            $phone
        );

        if ($mail->send()) {
            // ── 2. Confirmation email to the user ─────────────────────────
            $mail->clearAddresses();
            $mail->clearReplyTos();
            $mail->addAddress($email, $full_name);
            $mail->Subject = 'Your App Development Brief is With Our Team — ITD GrowthLabs';
            $mail->Body    = itdgl_user_email($full_name, ['form_type' => 'app_development']);
            $mail->send();
        }
    } catch (Exception $e) {
        error_log("appDevelopmentFormMail Error: " . $e->getMessage());
        echo json_encode(['status' => 'error', 'message' => 'Mail sending failed: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
