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

    $post_data['html_body'] = $body;
    $post_data['subject'] = $subject;
    $post_data['email_config_id'] = 9;
    $post_data['add_email'] = 'info@itdgrowthlabs.com';
    $post_data['cc_email'] = 'info@itdgrowthlabs.com,ashish@itdservices.in,loy@itdservices.in,kushal@itdservices.in';
    $docket_request_json = json_encode($post_data);

    $docket_url = 'https://test.itdservices.in/api/website_api/send_email_for_website?api_company_id=2';
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_URL,  $docket_url);
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

    $secretKey = "6Lez7pMqAAAAAAp8c0AZUQqbYAqv8mAVaHMSYieK";
    $response = $_POST['g-recaptcha-response'];

    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $response;
    $verify = file_get_contents($url);
    $captcha_success = json_decode($verify);

    if (isset($response_data['success']) && $response_data['success'] == 1) {
        echo "<script>alert('Message has been sent!');</script>";
        echo "<script>window.location.href='thankyou.php'</script>";
        exit;
    } else {
        echo "<script>alert('Message could not be sent. Mailer Error:');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    }
} else {
    handleError('Invalid request.');
}
