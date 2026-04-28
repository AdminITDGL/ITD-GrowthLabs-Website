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

    // Centralised bot / spam protection (honeypot + timestamp + content filter + rate-limit)
    itdgl_verify_submission();

    $full_name       = isset($_POST['full_name'])       ? htmlspecialchars($_POST['full_name'])               : '';
    $company_name    = isset($_POST['company_name'])    ? htmlspecialchars($_POST['company_name'])             : '';
    $email           = isset($_POST['email'])           ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)   : '';
    $phone           = isset($_POST['phone'])           ? htmlspecialchars($_POST['phone'])                    : '';
    $target_industry = isset($_POST['target_industry']) ? htmlspecialchars($_POST['target_industry'])          : '';
    $ad_budget       = isset($_POST['ad_budget'])       ? htmlspecialchars($_POST['ad_budget'])                : '';
    $message         = isset($_POST['message'])         ? htmlspecialchars($_POST['message'])                  : '';

    // STOPGAP: outbound SMTP is blocked from this droplet (see includes/lead_log.php)
    itdgl_log_lead('leadGenForm', compact('full_name', 'company_name', 'email', 'phone', 'target_industry', 'ad_budget', 'message'));

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
        $mail->Subject = "New Lead Gen Enquiry: {$full_name}" . ($company_name ? " ({$company_name})" : '') . ($phone ? " — {$phone}" : '');
        $mail->Body    = itdgl_internal_email(
            'Lead Generation / Performance Marketing Enquiry',
            ['Full Name' => $full_name, 'Company' => $company_name, 'Email' => $email, 'Phone' => $phone, 'Target Industry' => $target_industry, 'Monthly Ad Budget' => $ad_budget, 'Campaign Goal / Message' => $message],
            $phone
        );

        if ($mail->send()) {
            // ── 2. Confirmation email to the user ─────────────────────────
            $mail->clearAddresses();
            $mail->clearReplyTos();
            $mail->addAddress($email, $full_name);
            $mail->Subject = 'Your Lead Generation Brief is With Our Team — ITD GrowthLabs';
            $mail->Body    = itdgl_user_email($full_name, ['form_type' => 'lead_generation']);
            $mail->send();
        }
    } catch (Exception $e) {
        itdgl_log_mail_failure('leadGenForm', $e->getMessage(), ['name' => $full_name, 'email' => $email]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
