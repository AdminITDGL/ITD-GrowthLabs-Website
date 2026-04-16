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

    $full_name    = isset($_POST['full_name'])    ? htmlspecialchars($_POST['full_name'])                 : '';
    $company_name = isset($_POST['company_name']) ? htmlspecialchars($_POST['company_name'])              : '';
    $email        = isset($_POST['email'])        ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)    : '';
    $phone        = isset($_POST['phone'])        ? htmlspecialchars($_POST['phone'])                     : '';
    $website_type = isset($_POST['website_type']) ? htmlspecialchars($_POST['website_type'])              : '';
    $message      = isset($_POST['message'])      ? htmlspecialchars($_POST['message'])                   : '';

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
        $mail->Subject = "New Website Enquiry: {$full_name}" . ($company_name ? " ({$company_name})" : '') . ($phone ? " — {$phone}" : '');
        $mail->Body    = itdgl_internal_email(
            'Website Design & Development Enquiry',
            ['Full Name' => $full_name, 'Company' => $company_name, 'Email' => $email, 'Phone' => $phone, 'Website Type' => $website_type, 'Message' => $message],
            $phone
        );

        if ($mail->send()) {
            // ── 2. Confirmation email to the user ─────────────────────────
            $mail->clearAddresses();
            $mail->clearReplyTos();
            $mail->addAddress($email, $full_name);
            $mail->Subject = 'Your Website Project Request is Confirmed — ITD GrowthLabs';
            $mail->Body    = itdgl_user_email($full_name, ['form_type' => 'website_development']);
            $mail->send();
        }
    } catch (Exception $e) {
        error_log("websiteDesignFormMail Error: " . $e->getMessage());
        echo json_encode(['status' => 'error', 'message' => 'Mail sending failed: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
