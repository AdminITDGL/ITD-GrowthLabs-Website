<?php

require __DIR__ . '/PHPMailerAutoload.php';
// require __DIR__ . '/.env';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Honeypot check (add hidden field named "website" in your HTML)
    if (!empty($_POST['website'])) {
        exit("Bot detected.");
    }

    // Check required fields
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['subject'])) {
        echo "<script>alert('Please fill all required fields.');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    }

    // Google reCAPTCHA verification
    $secretKey = "6Lez7pMqAAAAAAp8c0AZUQqbYAqv8mAVaHMSYieK";
    $response = $_POST['g-recaptcha-response'];

    if (empty($response)) {
        echo "<script>alert('Captcha missing.');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    }

    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response");
    $captcha_success = json_decode($verify);

    if (!$captcha_success->success) {
        echo "<script>alert('Captcha verification failed!');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    }

    // Input sanitization
    $txtName = htmlspecialchars(trim($_POST['name']));
    $txtMobileNo = htmlspecialchars(trim($_POST['phone']));
    $txtEmailID = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $txtQuery = htmlspecialchars(trim($_POST['subject']));

    if (!$txtEmailID) {
        echo "<script>alert('Invalid email address.');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    }

    $name = $txtName;
    $email = $txtEmailID;
    $mobile = $txtMobileNo;
    $msg_subject = htmlspecialchars(trim($_POST['subject']));
    $messages = $txtQuery;
    $msg_list = explode(' ', strtolower($messages));

    $bad_words = array('porrn', 'free', 'hd', 'brazzers', 'girl', 'hot', 'baby', 'boobs', 'boob', 'sussex', 'sexy', 'fucked', 'fucking', 'fuck', 'sites', 'site', 'xx', 'xxx', 'pornvideo', 'pornvideos', 'porn', 'porno', 'sex', 'sexcam', 'sexo', 'sexual', 'sexuality', 'sexually', 'sexy', 'video', 'videos', 'venice', 'sexvideo', 'sexvideos', 'dargs');
    for ($i = 0; $i < count($msg_list); ++$i) {
        $word = $msg_list[$i];
        $chk_word = strtolower($msg_list[$i]);
        foreach ($bad_words as $bad_word) {
            if (strpos($chk_word, $bad_word) !== false) {
                $msg_list[$i] = '***';
                break;
            }
        }
    }

    $message = implode(' ', $msg_list);

    $subject = "GROWTHLABS Mail - Lead Enquiry";
    $body = "<table bgcolor='#fafafa' style=' width: 100%!important; height: 100%; background-color: #fafafa; padding: 20px; font-family: \"Helvetica Neue\", \"Helvetica\", Helvetica, Arial, \"Lucida Grande\", sans-serif;  font-size: 100%; line-height: 1.6;'>
    <tr>
    <td></td>
    <td bgcolor='#FFFFFF' style='border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;'><div style='padding:20px; max-width:600px; margin:0 auto; display:block;'>
    <table style='width: 100%;'>
    <tr>
    <td><p style='text-align: center; display: block;  padding-bottom:20px;  margin-bottom:20px; border-bottom:1px solid #dddddd;'>$subject</p>
    <h1 style='font-weight: 200; font-size: 28px; margin: 20px 0 30px 0; color: #333333;'>$name Wants to contact us.</h1>
    <p style='margin-bottom: 10px; font-weight: normal; font-size:16px; color: #333333;'>Name : $name</p>
    <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Email ID : $email </h2>
    <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Mobile No. : $mobile </h2>
    <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Subject : $msg_subject </h2>
    <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Message : $message </h2>
    <p style='text-align: center; display: block; padding-top:20px; font-weight: bold; margin-top:30px; color: #bc2d1d; border-top:1px solid #dddddd;'>BOMBINO EXPRESS</p></td>
    </tr>
    </table>
    </div></td>
    <td></td>
    </tr>
    </table>";

    // // Send email using PHPMailer
    // $mail = new PHPMailer;
    // $mail->isSMTP();
    // $mail->Host = $smtp_host; // from credential.php
    // $mail->SMTPAuth = true;
    // $mail->Username = $smtp_username; // from credential.php
    // $mail->Password = $smtp_password; // from credential.php
    // $mail->SMTPSecure = 'tls';
    // $mail->Port = $smtp_port; // from credential.php

    // $mail->setFrom($smtp_username, 'Bombino Website');
    // $mail->addAddress('info@bombinoexp.com');
    // // Add CCs
    // $cc_emails = array(
    //     'palvesha@bombinoexp.com',
    //     'ghanshyam@bombinoexp.com',
    //     'taukeer@bombinoexp.com',
    //     'suraj@itdservices.in',
    //     'kushalk@itdservices.in'
    // );
    // foreach ($cc_emails as $cc) {
    //     $mail->addCC($cc);
    // }
    // $mail->addReplyTo($email, $name);

    // $mail->isHTML(true);
    // $mail->Subject = $subject;
    // $mail->Body    = $body;

    // // Try to send the email and check for errors
     $post_data = [
        'html_body' => $body,
        'subject' => $subject,
        'add_email' => 'info@itdgrowthlabs.com',
        'cc_email' => 'info@itdgrowthlabs.com,ashish@itdservices.in,loy@itdservices.in,kushalk@itdservices.in'
    ];

    $docket_request_json = json_encode($post_data);

    $docket_url = 'https://test.itdservices.in/api/website_api/send_mail_for_website?api_company_id=2';
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_URL, $docket_url);
    curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch1, CURLOPT_POSTFIELDS, $docket_request_json);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Accept: application/json'
    ));

    $response_json = curl_exec($ch1);
    curl_close($ch1);
    $response_data = json_decode($response_json, true);

    if (isset($response_data) && $response_data != "") {
        echo "<script>alert('Message has been sent!');</script>";
        echo "<script>window.location.href='thankyou.php'</script>";
        exit;
    } else {
        // Log the error for debugging
        error_log('Mailer Error: ' . $mail->ErrorInfo);
        echo "<script>alert('Message could not be sent. Mailer Error: " . addslashes($mail->ErrorInfo) . "');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    }
}
