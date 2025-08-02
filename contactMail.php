<?php

require __DIR__ . '/PHPMailerAutoload.php';

function handleError($message)
{
    error_log($message);
    header("Location: thankyou.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['subject'], $_POST['g-recaptcha-response'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['phone']);
    $msg_subject = trim($_POST['subject']);

    // Verify reCAPTCHA first
    $secretKey = "6Lez7pMqAAAAAAp8c0AZUQqbYAqv8mAVaHMSYieK";
    $response = $_POST['g-recaptcha-response'];
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $response;
    $verify = file_get_contents($url);
    $captcha_success = json_decode($verify);

    if (empty($captcha_success) || empty($captcha_success->success) || $captcha_success->success != 1) {
        echo "<script>alert('reCAPTCHA verification failed. Please try again.');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    }

    // Compose email
    $subject = "ITD GROWTHLABS ENQUIRY";
    $body = "<table bgcolor='#fafafa' style=' width: 100%!important; height: 100%; background-color: #fafafa; padding: 20px; font-family: \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif;  font-size: 100%; line-height: 1.6;'>
    <tr>
    <td></td>
    <td bgcolor='#FFFFFF' style='border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;'><div style='padding:20px; max-width:600px; margin:0 auto; display:block;'>
    <table style='width: 100%;'>
    <tr>
    <td><h1 style='text-align: center; display: block;  padding-bottom:20px;  margin-bottom:20px; border-bottom:1px solid #dddddd;'>$subject</h1>
    <h2 style='font-weight: 200; font-size: 22px; margin: 20px 0 30px 0; color: #333333;'>$name Wants to contact us.</h2>
    <p style='margin-bottom: 10px; font-weight: normal; font-size:16px; color: #333333;'>Name : $name</p>
    <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Email ID : $email </h2>
    <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Mobile No. : $mobile </h2>
    <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Message : $msg_subject </h2>
    </tr>
    </table>
    </div></td>
    <td></td>
    </tr>
    </table>";

    // Use PHPMailer directly instead of external API
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Change as per your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'info@itdgrowthlabs.com'; // Change to your SMTP username
    $mail->Password = 'qomeqbusknveiqls'; // Change to your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('kushalk@itdservices.in', 'ITD Growthlabs Website');
    $mail->addAddress('info@itdgrowthlabs.com');
    $mail->addCC('ashish@itdservices.in');
    $mail->addCC('loy@itdservices.in');
    $mail->addCC('kushal@itdservices.in');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;

    if(!$mail->send()) {
        error_log('Mailer Error: ' . $mail->ErrorInfo);
        echo "<script>alert('Message could not be sent. Mailer Error: " . addslashes($mail->ErrorInfo) . "');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    } else {
        echo "<script>alert('Message has been sent!');</script>";
        echo "<script>window.location.href='thankyou.php'</script>";
        exit;
    }
} else {
    handleError('Invalid request.');
}
