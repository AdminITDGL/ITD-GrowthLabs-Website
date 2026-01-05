<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['username_hp'])) {
        exit("Spam detected! Submission blocked.");
    }

    $full_name = isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : '';
    $company_name = isset($_POST['company_name']) ? htmlspecialchars($_POST['company_name']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $target_industry = isset($_POST['target_industry']) ? htmlspecialchars($_POST['target_industry']) : '';
    $ad_budget = isset($_POST['ad_budget']) ? htmlspecialchars($_POST['ad_budget']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

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
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@itdgrowthlabs.com';
        $mail->Password = 'znll urby tlye yrsh';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info@itdgrowthlabs.com', 'ITD Growth Labs');
        $mail->addAddress('info@itdgrowthlabs.com', 'ITD Growth Labs');
        $mail->addReplyTo($email, $full_name);
        $mail->isHTML(true);
        $mail->Subject = "New Enquiry Form Submission";
        $mail->Body = "<p>Hi Team,</p><p>We have received a new enquiry through the website form with the following details:</p><ul><li><strong>Full Name:</strong> $full_name</li><li><strong>Company Name:</strong> $company_name</li><li><strong>Email:</strong> $email</li><li><strong>Phone:</strong> $phone</li><li><strong>Target Industry / Audience:</strong> $target_industry</li><li><strong>Monthly Ad Budget:</strong> $ad_budget</li><li><strong>Message / Campaign Goal:</strong> $message</li></ul><p><strong>Next Steps:</strong><br>Please call the client on the provided mobile number to understand their requirements and discuss further details.</p><p>Thanks,<br>Web Team</p>";
        if ($mail->send()) {
            $mail->clearAddresses();
            $mail->addAddress($email, $full_name);
            $mail->Subject = 'Thank You for Contacting ITD Growthlabs';
            $mail->Body = "<p>Hello $full_name,</p><p>Thank you for contacting ITD Growthlabs for your technology and marketing solutions. One of our team members will get back to you soon.</p><p>In the meantime, feel free to explore our website to learn more about our services:<br>👉 <a href='https://itdgrowthlabs.com/' target='_blank'>https://itdgrowthlabs.com/</a></p><p>Best regards,<br>Team ITD Growthlabs</p>";
            $mail->send();
            echo json_encode(['status' => 'success']);
            exit;
        }
    } catch (Exception $e) {
        error_log("Mailer Error: " . $e->getMessage());
        echo json_encode([
            'status' => 'error',
            'message' => 'Mail sending failed: ' . $e->getMessage()
        ]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}