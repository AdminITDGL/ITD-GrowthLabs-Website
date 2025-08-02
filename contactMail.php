<?php


// require __DIR__ . '/PHPMailerAutoload.php';

// function handleError($message)
// {
//     error_log($message);
//     header("Location: thankyou.php");
//     exit;
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['subject'], $_POST['g-recaptcha-response'])) {
//     $name = trim($_POST['name']);
//     $email = trim($_POST['email']);
//     $mobile = trim($_POST['phone']);
//     $msg_subject = trim($_POST['subject']);

//     $subject = "ITD GROWTHLABS ENQUIRY";
//     $body = "<table bgcolor='#fafafa' style=' width: 100%!important; height: 100%; background-color: #fafafa; padding: 20px; font-family: \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif;  font-size: 100%; line-height: 1.6;'>
//     <tr>
//     <td></td>
//     <td bgcolor='#FFFFFF' style='border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;'><div style='padding:20px; max-width:600px; margin:0 auto; display:block;'>
//     <table style='width: 100%;'>
//     <tr>
//     <td><h1 style='text-align: center; display: block;  padding-bottom:20px;  margin-bottom:20px; border-bottom:1px solid #dddddd;'>$subject</h1>
//     <h2 style='font-weight: 200; font-size: 22px; margin: 20px 0 30px 0; color: #333333;'>$name Wants to contact us.</h2>
//     <p style='margin-bottom: 10px; font-weight: normal; font-size:16px; color: #333333;'>Name : $name</p>
//     <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Email ID : $email </h2>
//     <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Mobile No. : $mobile </h2>
//     <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Message : $msg_subject </h2>
//     </tr>
//     </table>
//     </div></td>
//     <td></td>
//     </tr>
//     </table>";

// // --- reCAPTCHA Verification ---
// $secretKey = "6Lez7pMqAAAAAAp8c0AZUQqbYAqv8mAVaHMSYieK";
// $response = $_POST['g-recaptcha-response'];

// // Use cURL for better error handling and to avoid file_get_contents issues
// $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
// $data = [
//     'secret' => $secretKey,
//     'response' => $response
// ];

// $ch = curl_init($recaptcha_url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_TIMEOUT, 10);
// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
// $verify = curl_exec($ch);

// if ($verify === false) {
//     curl_close($ch);
//     handleError('Captcha verification failed (cURL error).');
// }

// $captcha_success = json_decode($verify);
// curl_close($ch);

// if (!$captcha_success || empty($captcha_success->success)) {
//     handleError('Captcha error found!');
// }

// // --- PHPMailer Setup ---
// try {
//     $mail = new PHPMailer(true);
//     $mail->isSMTP();
//     $mail->Host = "smtp.gmail.com";
//     $mail->Port = 465; // Use 465 for SSL, 587 for TLS
//     $mail->SMTPAuth = true;
//     $mail->SMTPSecure = "ssl";
//     $mail->Username = 'info@itdgrowthlabs.com';
//     $mail->Password = 'zjmdpezeqzcvsooc';
//     $mail->setFrom('info@itdgrowthlabs.com', $subject);
//     $mail->addAddress($email);
//     $mail->addAddress("info@itdgrowthlabs.com");
//     $mail->addBCC("ashish@itdservices.in");
//     $mail->addBCC("loy@itdservices.in");
//     $mail->addBCC("suraj@itdservices.in");
//     $mail->isHTML(true);
//     $mail->Subject = $subject;
//     $mail->Body = $body;
//     $mail->AltBody = strip_tags($body);

//     // $mail->Timeout = 50; // seconds

//     if ($mail->send()) {
//         header("Location: thankyou.php");
//         exit;
//     } else {
//         handleError('Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
//     }
// } catch (Exception $e) {
//     handleError('Mailer Exception: ' . $e->getMessage());
//     echo "<script>window.location.href='thankyou.php'</script>";
// }

//     $post_data['html_body'] = $body;
//     $post_data['subject'] = $subject;
//     $post_data['email_config_id'] = 9;
//     $post_data['add_email'] = 'info@itdgrowthlabs.com';
//     $post_data['cc_email'] = 'info@itdgrowthlabs.com,ashish@itdservices.in,loy@itdservices.in,kushalk@itdservices.in';
//     $docket_request_json = json_encode($post_data);

//     $docket_url = 'https://test.itdservices.in/api/website_api/send_email_for_website?api_company_id=2';
//     $ch1 = curl_init();
//     curl_setopt($ch1, CURLOPT_URL,  $docket_url);
//     curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "POST");
//     curl_setopt($ch1, CURLOPT_POSTFIELDS, $docket_request_json);
//     curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
//         'Content-Type: application/json',
//         'Accept: application/json'
//     ));

//     $response_json = curl_exec($ch1);
//     curl_close($ch1);
//     $response_data = json_decode($response_json, true);

//     $secretKey = "6Lez7pMqAAAAAAp8c0AZUQqbYAqv8mAVaHMSYieK";
//     $response = $_POST['g-recaptcha-response'];

//     $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $response;
//     $verify = file_get_contents($url);
//     $captcha_success = json_decode($verify);
//     if (!$captcha_success->success) {
//         echo "<script>alert('Captcha error found!');</script>";
//         echo "<script>window.location.href='index.php'</script>";
//         exit;
//     } else {
//         if (isset($response_data['success']) && $response_data['success'] == 1) {
//             echo "<script>alert('Message has been sent!');</script>";
//             echo "<script>window.location.href='thankyou.php'</script>";
//             exit;
//         } else {
//             echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
//             echo "<script>window.location.href='index.php'</script>";
//             exit;
//         }
//     }
// } else {
//     handleError('Invalid request.');
// }


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require __DIR__ . '/PHPMailerAutoload.php';

function loadEnv($file)
{
    if (!file_exists($file)) {
        throw new Exception("File not found: " . $file);
    }
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        list($key, $value) = explode('=', $line, 2);
        putenv(trim($key) . '=' . trim($value));
    }
}

try {
    // Load environment variables
    loadEnv(__DIR__ . '/.env');

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        throw new Exception("Invalid request method");
    }

    // Verify reCAPTCHA
    $recaptcha_secret = "6Lez7pMqAAAAAAp8c0AZUQqbYAqv8mAVaHMSYieK";
    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $response);
    $response_keys = json_decode($response, true);

    if (!$response_keys["success"]) {
        throw new Exception("reCAPTCHA verification failed");
    }

    // Sanitize input data
    $name = filter_var($_POST['name']);
    $email = filter_var($_POST['email']);
    $mobile = filter_var($_POST['mobile']);
    $msg_subject = filter_var($_POST['msg_subject']);
    $message = filter_var($_POST['message']);

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 3;
    $mail->Debugoutput = function ($str, $level) {
        error_log("PHPMailer Debug: $str");
    };
    $mail->Username = 'info@itdgrowthlabs.com';
    $mail->Password = 'zjmdpezeqzcvsooc';
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Timeout = 60;
    $mail->SMTPKeepAlive = true;

    // Test SMTP connection
    try {
        if (!$mail->smtpConnect()) {
            throw new Exception("SMTP connection failed");
        }
    } catch (Exception $e) {
        error_log("SMTP Connection Error: " . $e->getMessage());
        throw new Exception("Could not connect to SMTP server: " . $e->getMessage());
    }

    // Set email content
    $mail->setFrom('info@itdgrowthlabs.com', $name);
    $mail->addReplyTo($email, $name);
    // $mail->addAddress('kushalk@itdservices.in');
    $mail->addAddress('govind@itdservices.in');
    // $mail->addBCC('ashish@itdservices.in');
    // $mail->addBCC('loy@itdservices.in');

    $mail->isHTML(true);
    $mail->Subject = 'ITD GROWTHLABS ENQUIRY';

    // Email body
    $body = "<p>ITD GROWTHLABS  Contact Us</p>
    <table style='border: 1px solid #eee; border-collapse: collapse; padding: 5px; font-family: sans-serif;'>
        <tr>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Name</td>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$name</td>
        </tr>
        <tr>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Email</td>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$email</td>
        </tr>
        <tr>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Mobile</td>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$mobile</td>
        </tr>
        <tr>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Message Subject</td>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$msg_subject</td>
        </tr>
        <tr>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>Message</td>
            <td style='border: 1px solid #eee; border-collapse: collapse; padding: 5px;'>$message</td>
        </tr>
    </table>";

    $mail->Body = $body;
    $mail->AltBody = strip_tags($body);

    //   echo "<pre>Mail: ";print_r($mail);exit;
    // Send email
    if ($mail->send()) {
        echo "<script>
            alert('Your Mail Has Been Sent Successfully!');
            window.location.href = 'index.php';
        </script>";
    } else {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        throw new Exception("Email could not be sent. Error: " . $mail->ErrorInfo);
    }
} catch (Exception $e) {
    error_log("Exception in contactMail.php: " . $e->getMessage());
    http_response_code(500);
    echo "error: " . $e->getMessage();
}
