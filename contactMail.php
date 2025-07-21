<?php
ob_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ini_set('max_execution_time', 60);
ini_set('memory_limit', '256M');
ini_set('display_errors', 0); 
error_reporting(E_ALL);

require __DIR__ . '/PHPMailerAutoload.php';

/* ------------------------------------------------------------------
   Central error -> redirect helper
   ------------------------------------------------------------------ */
function handleError($message, $q = 'error') {
    error_log("[CONTACT ERROR] $message");
    // Safe 303 redirect (POST -> GET)
    header("Location: thankyou.php?status=$q", true, 303);
    header("Connection: close");
    // End output cleanly
    $len = ob_get_length();
    if ($len !== false) {
        // Optionally send known Content-Length
        header("Content-Length: $len");
    }
    ob_end_flush();
    flush();
    if (function_exists('fastcgi_finish_request')) {
        fastcgi_finish_request();
    }
    exit;
}

/* ------------------------------------------------------------------
   Validate request + required fields
   ------------------------------------------------------------------ */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    handleError('Non-POST request.', 'invalid');
}

$required = ['name','email','phone','subject','g-recaptcha-response'];
foreach ($required as $f) {
    if (empty($_POST[$f])) {
        handleError("Missing field: $f", 'missing');
    }
}

// Extract & sanitize
$name       = trim($_POST['name']);
$email_in   = trim($_POST['email']);
$mobile     = trim($_POST['phone']);
$msg_subject= trim($_POST['subject']);
$captchaRsp = $_POST['g-recaptcha-response'];

// Basic email validation
if (!filter_var($email_in, FILTER_VALIDATE_EMAIL)) {
    handleError('Invalid email address.', 'invalid_email');
}

// Escape for HTML body
$h = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');

$subject_line = "ITD GROWTHLABS ENQUIRY";

/* ------------------------------------------------------------------
   Build HTML body (keep simple; closing tags balanced)
   ------------------------------------------------------------------ */
$body = "
<table bgcolor='#fafafa' style='width:100%!important; background-color:#fafafa; padding:20px; font-family:\"Helvetica Neue\",Helvetica,Arial,\"Lucida Grande\",sans-serif; font-size:100%; line-height:1.6;'>
  <tr>
    <td></td>
    <td bgcolor='#FFFFFF' style='border:1px solid #eeeeee; background-color:#ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;'>
      <div style='padding:20px; max-width:600px; margin:0 auto; display:block;'>
        <h1 style='text-align:center; padding-bottom:20px; margin-bottom:20px; border-bottom:1px solid #dddddd;'>{$h($subject_line)}</h1>
        <h2 style='font-weight:200; font-size:22px; margin:20px 0 30px 0; color:#333333;'>{$h($name)} wants to contact us.</h2>
        <p style='margin-bottom:10px; font-size:16px; color:#333333;'>Name: {$h($name)}</p>
        <p style='margin-bottom:10px; font-size:16px; color:#333333;'>Email ID: {$h($email_in)}</p>
        <p style='margin-bottom:10px; font-size:16px; color:#333333;'>Mobile No.: {$h($mobile)}</p>
        <p style='margin-bottom:10px; font-size:16px; color:#333333;'>Message: {$h($msg_subject)}</p>
      </div>
    </td>
    <td></td>
  </tr>
</table>";

/* ------------------------------------------------------------------
   reCAPTCHA verification (cURL w/ connect + overall timeouts)
   ------------------------------------------------------------------ */
$secretKey = "6Lez7pMqAAAAAAp8c0AZUQqbYAqv8mAVaHMSYieK"; // TODO move to env var

$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query(['secret' => $secretKey, 'response' => $captchaRsp]),
    CURLOPT_CONNECTTIMEOUT => 5,  // *** added
    CURLOPT_TIMEOUT        => 10, // *** total timeout
]);
$verify = curl_exec($ch);
if ($verify === false) {
    $err = curl_error($ch);
    curl_close($ch);
    handleError('Captcha verification failed (cURL error: ' . $err . ').', 'captcha');
}
$captcha_success = json_decode($verify);
curl_close($ch);

if (!$captcha_success || empty($captcha_success->success)) {
    handleError('Captcha error found!', 'captcha');
}

/* ------------------------------------------------------------------
   SUCCESS PATH: Respond to browser NOW
   (We haven't sent email yet; user doesn't wait.)
   ------------------------------------------------------------------ */
header("Location: thankyou.php?status=ok", true, 303);
header("Connection: close");

// Send minimal response body (optional)
echo ""; // no output; we’ll rely on Content-Length below if buffer > 0

// Make sure client knows length; if buffer has content, declare it
$len = ob_get_length();
if ($len !== false) {
    header("Content-Length: $len");
}
ob_end_flush();
flush();

// Let PHP-FPM detach and continue work
if (function_exists('fastcgi_finish_request')) {
    fastcgi_finish_request();
}

/* ------------------------------------------------------------------
   BACKGROUND SECTION: Send email after response
   ------------------------------------------------------------------ */

try {
    $mail = new PHPMailer(true);
    //$mail->SMTPDebug = 2; // debug only
    $mail->isSMTP();
    $mail->Host       = "smtp.gmail.com";
    $mail->Port       = 465;             // 465=SMTPS, 587=STARTTLS
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'ssl'; // *** safer constant
    $mail->Username   = 'info@itdgrowthlabs.com';    // TODO from env
    $mail->Password   = 'zjmdpezeqzcvsooc';          // TODO rotate + env
    $mail->CharSet    = 'UTF-8';

    // From / To
    $mail->setFrom('info@itdgrowthlabs.com', $subject_line);
    // Send a confirmation to the submitter? (Optional)
    $mail->addAddress($email_in);
    // Always send to site inbox
    $mail->addAddress("info@itdgrowthlabs.com");
    // Internal BCCs
    $mail->addBCC("ashish@itdservices.in");
    $mail->addBCC("loy@itdservices.in");
    $mail->addBCC("suraj@itdservices.in");
    // Good practice: add Reply-To so responses go to submitter
    $mail->addReplyTo($email_in, $name);

    $mail->isHTML(true);
    $mail->Subject = $subject_line;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    // *** Limit network wait
    $mail->Timeout  = 15;        // seconds network I/O
    $mail->SMTPKeepAlive = false;

    if (!$mail->send()) {
        error_log("[CONTACT MAIL ERROR] " . $mail->ErrorInfo);
    }
} catch (Exception $e) {
    error_log("[CONTACT MAIL EXCEPTION] " . $e->getMessage());
}

// Done
exit;
