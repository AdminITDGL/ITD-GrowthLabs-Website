<?php

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

// loadEnv('env');
loadEnv(__DIR__ . '/.env');

$email_id = getenv('EMAIL_USER');
$email_password = getenv('EMAIL_PASSWORD');

if (isset($_POST)) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['phone']);
    // $msg_subject = trim($_POST['subject']);
    $messages = trim($_POST['message']);
    $msg_list = explode(' ', strtolower($messages));

    $bad_words = array('porrn', 'free', 'hd', 'brazzers', 'girl', 'hot', 'baby', 'boobs', 'boob', 'sussex', 'sexy', 'fucked', 'fucking', 'fuck', 'sites', 'site', 'xx', 'xxx', 'pornvideo', 'pornvideos', 'porn', 'porno', 'sex', 'sexcam', 'sexo', 'sexual', 'sexuality', 'sexually', 'sexy', 'video', 'videos', 'venice', 'sexvideo', 'sexvideos', 'dargs');
    for ($i = 0; $i < count($msg_list); ++$i) {
        $word = $msg_list[$i];
        $chk_word = strtolower($msg_list[$i]);
        for ($j = 0; $j < count($bad_words); ++$j) {
            $bad_word = $bad_words[$j];
            if (strpos($chk_word, $bad_word) !== false) {
                $f_char = substr($word, 0, 1);
                $length = strlen($word);
                $index = $length - 1;
                $l_char =  substr($word, $index, 1);
                $msg_list[$i] = '***';
            }
        }
    }
  
    $message = implode(' ', $msg_list);

    $subject = "ITD GROWTHLAB ENQUIRY";
    $body = "<table bgcolor='#fafafa' style=' width: 100%!important; height: 100%; background-color: #fafafa; padding: 20px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, 'Lucida Grande', sans-serif;  font-size: 100%; line-height: 1.6;'>
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
    <h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'> Message : $messages </h2>
    </tr>
    </table>
    </div></td>
    <td></td>
    </tr>
    </table>";

    $mail = new PHPMailer(true);
    // $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Username = $email_id;
    $mail->Password = $email_password;
    $mail->setFrom($email_id, $subject);
    $mail->addAddress("$email");
    $mail->addAddress("info@itdgrowthlabs.com");
    // $mail->addBCC("suraj@itdservices.in");
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody = "";

    $secretKey = "6Lez7pMqAAAAAAp8c0AZUQqbYAqv8mAVaHMSYieK";
    $response = $_POST['g-recaptcha-response'];

    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $response;
    $verify = file_get_contents($url);
    $captcha_success = json_decode($verify);
    if (!$captcha_success->success) {
        echo "<script>alert('Captcha error found!');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    } else {
        if ($mail->send() == true) {
            echo "<script>alert('Message has been sent!');</script>";
            echo "<script>window.location.href='contact-us.php'</script>";
            exit;
        } else {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
            echo "<script>window.location.href='index.php'</script>";
            exit;
        }
    }
}
