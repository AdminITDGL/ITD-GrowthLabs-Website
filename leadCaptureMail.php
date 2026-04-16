<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/includes/spam_protection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Centralised bot / spam protection (honeypot + timestamp + content filter + rate-limit)
    itdgl_verify_submission();

    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $mobile = isset($_POST['mobile']) ? htmlspecialchars($_POST['mobile']) : '';
    $source = isset($_POST['source']) ? htmlspecialchars($_POST['source']) : 'unknown';

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email']);
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
        $mail->Password = 'qaze srft zxyy dfgy';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info@itdgrowthlabs.com', 'ITD GrowthLabs');
        $mail->addAddress('info@itdgrowthlabs.com', 'ITD GrowthLabs');
        $mail->addAddress('kushal@itdservices.in', 'ITD GrowthLabs');
        $mail->addReplyTo($email, $name);
        $mail->isHTML(true);

        $sourceLabel = 'Unknown';
        if ($source === 'popup_profile_download') $sourceLabel = 'Company Profile Download (Popup)';
        elseif ($source === 'newsletter_bar') $sourceLabel = 'Newsletter Subscription';
        else $sourceLabel = ucwords(str_replace('_', ' ', $source));

        $mail->Subject = "New Lead: $sourceLabel — $name" . ($mobile ? " ($mobile)" : "");
        $mail->Body = "
            <div style='font-family:Arial,sans-serif;max-width:600px;margin:0 auto;'>
                <div style='background:#1565c0;color:#fff;padding:20px 25px;border-radius:8px 8px 0 0;'>
                    <h2 style='margin:0;font-size:18px;'>New Lead Captured</h2>
                    <p style='margin:5px 0 0;font-size:13px;opacity:0.9;'>Source: $sourceLabel</p>
                </div>
                <div style='padding:25px;border:1px solid #e0e0e0;border-top:none;border-radius:0 0 8px 8px;'>
                    <table style='width:100%;border-collapse:collapse;'>
                        <tr><td style='padding:8px 0;font-weight:bold;color:#333;width:100px;'>Name:</td><td style='padding:8px 0;color:#555;'>$name</td></tr>
                        <tr><td style='padding:8px 0;font-weight:bold;color:#333;'>Email:</td><td style='padding:8px 0;color:#555;'><a href='mailto:$email'>$email</a></td></tr>
                        <tr><td style='padding:8px 0;font-weight:bold;color:#333;'>Mobile:</td><td style='padding:8px 0;color:#555;'>" . ($mobile ? "<a href='tel:$mobile'>$mobile</a>" : "—") . "</td></tr>
                        <tr><td style='padding:8px 0;font-weight:bold;color:#333;'>Source:</td><td style='padding:8px 0;color:#555;'>$sourceLabel</td></tr>
                        <tr><td style='padding:8px 0;font-weight:bold;color:#333;'>Date:</td><td style='padding:8px 0;color:#555;'>" . date('d M Y, h:i A') . " IST</td></tr>
                    </table>
                    <hr style='border:none;border-top:1px solid #eee;margin:15px 0;'>
                    <p style='font-size:13px;color:#999;margin:0;'>This lead was captured from the ITD GrowthLabs website.</p>
                </div>
            </div>
        ";

        $mail->send();
    } catch (Exception $e) {
        error_log("Lead Capture Mailer Error: " . $e->getMessage());
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
