<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $mobile = isset($_POST['mobile']) ? htmlspecialchars($_POST['mobile']) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    echo json_encode([
        "message"     => "Thank you for contacting us! Your message has been sent successfully.",
        "showMessage" => "success_msg"
    ]);
    if (function_exists('fastcgi_finish_request')) {
        fastcgi_finish_request();
    } else {
        ignore_user_abort(true);
        ob_start();
        header("Content-Encoding: none");
        header("Connection: close");
        ob_end_flush();
        flush();
    }
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@itdgrowthlabs.com';
        $mail->Password = 'abof avzx trej drvw';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info@itdgrowthlabs.com', 'ITD Growth Labs');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('info@itdgrowthlabs.com', 'ITD Growth Labs');
        $mail->isHTML(true);
        $mail->Subject = "New Enquiry Form Submission";
        $mail->Body = "
            <p>Hi Team,</p>
            <p>We have received a new enquiry through the website form with the following details:</p>
            <ul>
                <li><strong>Name:</strong> $name</li>
                <li><strong>Email:</strong> $email</li>
                <li><strong>Mobile:</strong> $mobile</li>
                <li><strong>Subject:</strong> $subject</li>
                <li><strong>Message:</strong> $message</li>
            </ul>
            <p><strong>Next Steps:</strong><br>
            Please call the client on the provided mobile number to understand their requirements and discuss further details.</p>
            <p>Thanks,<br>Web Team</p>
        ";
        $secretKey = "6Lez7pMqAAAAAAp8c0AZUQqbYAqv8mAVaHMSYieK";
        $response = $_POST['g-recaptcha-response'];
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $response;
        $verify = file_get_contents($url);
        $captcha_success = json_decode($verify);
        if (!$captcha_success->success) {
            echo "<script>alert('Captcha error found!');</script>";
            echo "<script>window.location.href='contact.php'</script>";
            exit;
        }
        if ($mail->send()) {
            $mail->clearAddresses();
            $mail->addAddress($email, $name);
            $mail->Subject = 'Thank You for Contacting ITD Growthlabs';
            $mail->Body = "
                <p>Hello $name,</p>
                <p>Thank you for contacting ITD Growthlabs for your technology and marketing solutions. One of our team members will get back to you soon.</p>
                <p>In the meantime, feel free to explore our website to learn more about our services:<br>
                👉 <a href='https://itdgrowthlabs.com/' target='_blank'>https://itdgrowthlabs.com/</a></p>
                <p>Best regards,<br>Team ITD Growthlabs</p>
            ";
            echo $mail->send() ? "🎉 Thank You, $name!<br> Your message has been sent successfully." : "User Confirmation Error: " . $mail->ErrorInfo;
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Mailer Error: " . $e->getMessage();
    }
}