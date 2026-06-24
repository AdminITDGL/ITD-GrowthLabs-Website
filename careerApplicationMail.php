<?php
/**
 * ITD GrowthLabs — Career Application Mail Handler
 * ------------------------------------------------
 * Receives application form POST + CV file upload, runs spam protections,
 * then emails the application + CV attachment to info@itdgrowthlabs.com
 * via Brevo SMTP (PHPMailer).
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/includes/spam_protection.php';
require_once __DIR__ . '/includes/smtp_config.php';

// JSON responder
header('Content-Type: application/json');

function respond_error($msg) {
    echo json_encode(['status' => 'error', 'message' => $msg]);
    exit;
}

function respond_success($msg) {
    echo json_encode(['status' => 'success', 'message' => $msg]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond_error('Invalid request method.');
}

// 1. Centralised bot / spam protection (honeypot + timestamp + content filter + rate-limit)
itdgl_verify_submission();

// 2. Math captcha verification (HMAC-signed so the (a,b) pair can't be tampered)
$captcha_secret = 'itdgl_career_captcha_secret_2026_X1f5jK';
$captcha_a    = isset($_POST['captcha_a'])    ? (int)$_POST['captcha_a']    : -1;
$captcha_b    = isset($_POST['captcha_b'])    ? (int)$_POST['captcha_b']    : -1;
$captcha_hmac = isset($_POST['captcha_hmac']) ? (string)$_POST['captcha_hmac'] : '';
$captcha_user = isset($_POST['captcha_answer']) ? (int)$_POST['captcha_answer'] : -2;
if ($captcha_a < 0 || $captcha_b < 0 || $captcha_user < 0) {
    respond_error('Please answer the math question.');
}
$expected = $captcha_a + $captcha_b;
$expected_hmac = hash_hmac('sha256', (string)$expected, $captcha_secret);
if (!hash_equals($expected_hmac, $captcha_hmac)) {
    respond_error('Form integrity check failed. Please reload the page and try again.');
}
if ($captcha_user !== $expected) {
    respond_error('Incorrect answer to the math question. Please try again.');
}

// 3. Collect & sanitise form fields
$name         = isset($_POST['name'])         ? trim((string)$_POST['name'])         : '';
$email        = isset($_POST['email'])        ? trim((string)$_POST['email'])        : '';
$phone        = isset($_POST['phone'])        ? trim((string)$_POST['phone'])        : '';
$position_type = isset($_POST['position_type']) ? trim((string)$_POST['position_type']) : '';
$experience   = isset($_POST['experience'])   ? trim((string)$_POST['experience'])   : '';
$linkedin     = isset($_POST['linkedin'])     ? trim((string)$_POST['linkedin'])     : '';
$cover_letter = isset($_POST['cover_letter']) ? trim((string)$_POST['cover_letter']) : '';
$job_slug     = isset($_POST['job_slug'])     ? trim((string)$_POST['job_slug'])     : 'unspecified';
$job_title    = isset($_POST['job_title'])    ? trim((string)$_POST['job_title'])    : 'Unspecified Position';

// Basic validation
if ($name === '' || strlen($name) > 80)      respond_error('Please enter a valid name.');
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) respond_error('Please enter a valid email address.');
if ($phone === '' || strlen($phone) > 25)    respond_error('Please enter a valid mobile / WhatsApp number.');
if (!in_array($position_type, ['Full-Time', 'Internship'], true)) respond_error('Please select Full-Time or Internship.');
if ($experience === '' || strlen($experience) > 30) respond_error('Please enter your years of experience.');
if (strlen($linkedin) > 200)                 respond_error('LinkedIn URL is too long.');
if (strlen($cover_letter) > 1500)            respond_error('Cover letter is too long.');
if (strlen($job_slug)  > 80)                 respond_error('Invalid job reference.');
if (strlen($job_title) > 120)                respond_error('Invalid job title.');

// 4. CV upload validation
if (!isset($_FILES['cv']) || $_FILES['cv']['error'] === UPLOAD_ERR_NO_FILE) {
    respond_error('Please attach your CV (PDF, DOC or DOCX).');
}
if ($_FILES['cv']['error'] !== UPLOAD_ERR_OK) {
    respond_error('CV upload failed. Please try again.');
}
$cv_size  = (int)$_FILES['cv']['size'];
$cv_tmp   = (string)$_FILES['cv']['tmp_name'];
$cv_orig  = (string)$_FILES['cv']['name'];
if ($cv_size <= 0 || $cv_size > 5 * 1024 * 1024) {
    respond_error('CV file must be 1 byte to 5 MB.');
}
$allowed_mime_ext = [
    'application/pdf' => 'pdf',
    'application/msword' => 'doc',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
];
$detected_mime = '';
if (function_exists('finfo_open')) {
    $fi = finfo_open(FILEINFO_MIME_TYPE);
    if ($fi) {
        $detected_mime = (string)finfo_file($fi, $cv_tmp);
        finfo_close($fi);
    }
}
$ext = strtolower(pathinfo($cv_orig, PATHINFO_EXTENSION));
$allowed_exts = ['pdf', 'doc', 'docx'];
if (!in_array($ext, $allowed_exts, true)) {
    respond_error('Unsupported CV format. Please upload PDF, DOC or DOCX.');
}
if ($detected_mime !== '' && !array_key_exists($detected_mime, $allowed_mime_ext)) {
    respond_error('Detected file type is not allowed.');
}

// Safe filename
$safe_name_for_file = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $name);
$attachment_name = $safe_name_for_file . '_CV.' . $ext;

// 5. Build email
$to_email   = 'info@itdgrowthlabs.com';
$subject    = '[Career Application] ' . $job_title . ' — ' . $name;

$linkedin_safe   = $linkedin !== '' ? htmlspecialchars($linkedin) : '<em>not provided</em>';
$cover_html      = $cover_letter !== '' ? nl2br(htmlspecialchars($cover_letter)) : '<em>not provided</em>';
$applied_at      = date('Y-m-d H:i:s') . ' IST';
$client_ip       = itdgl_client_ip();
$user_agent_safe = htmlspecialchars($_SERVER['HTTP_USER_AGENT'] ?? 'unknown');

$body_html = '
<div style="font-family:Arial,sans-serif;color:#0f172a;line-height:1.6;max-width:680px;">
  <div style="background:linear-gradient(135deg,#1e1b4b 0%,#1e293b 100%);color:#fff;padding:20px 24px;border-radius:12px 12px 0 0;">
    <h2 style="margin:0 0 4px;font-size:20px;">New Career Application</h2>
    <p style="margin:0;font-size:14px;color:rgba(255,255,255,0.85);">' . htmlspecialchars($job_title) . ' &middot; ' . htmlspecialchars($position_type) . '</p>
  </div>
  <div style="background:#fff;border:1px solid #e2e8f0;border-top:none;padding:22px 24px;border-radius:0 0 12px 12px;">
    <table style="width:100%;border-collapse:collapse;font-size:14px;">
      <tr><td style="padding:8px 0;width:35%;color:#64748b;font-weight:600;">Name</td><td style="padding:8px 0;">' . htmlspecialchars($name) . '</td></tr>
      <tr><td style="padding:8px 0;color:#64748b;font-weight:600;">Email</td><td style="padding:8px 0;"><a href="mailto:' . htmlspecialchars($email) . '" style="color:#1e40af;">' . htmlspecialchars($email) . '</a></td></tr>
      <tr><td style="padding:8px 0;color:#64748b;font-weight:600;">Mobile / WhatsApp</td><td style="padding:8px 0;"><a href="https://wa.me/' . preg_replace('/[^0-9]/', '', $phone) . '" style="color:#1e40af;">' . htmlspecialchars($phone) . '</a></td></tr>
      <tr><td style="padding:8px 0;color:#64748b;font-weight:600;">Applying for</td><td style="padding:8px 0;">' . htmlspecialchars($job_title) . '</td></tr>
      <tr><td style="padding:8px 0;color:#64748b;font-weight:600;">Position type</td><td style="padding:8px 0;">' . htmlspecialchars($position_type) . '</td></tr>
      <tr><td style="padding:8px 0;color:#64748b;font-weight:600;">Experience</td><td style="padding:8px 0;">' . htmlspecialchars($experience) . '</td></tr>
      <tr><td style="padding:8px 0;color:#64748b;font-weight:600;">LinkedIn / Portfolio</td><td style="padding:8px 0;">' . ($linkedin !== '' ? '<a href="' . $linkedin_safe . '" style="color:#1e40af;" target="_blank" rel="noopener">' . $linkedin_safe . '</a>' : $linkedin_safe) . '</td></tr>
    </table>

    <h3 style="margin:22px 0 8px;font-size:15px;color:#0f172a;">Why they are a good fit</h3>
    <div style="background:#f8fafc;border-left:4px solid #1e40af;padding:12px 16px;border-radius:6px;font-size:14px;line-height:1.65;color:#0f172a;">' . $cover_html . '</div>

    <p style="margin:22px 0 0;font-size:13px;color:#64748b;">CV is attached as <strong>' . htmlspecialchars($attachment_name) . '</strong>.</p>

    <hr style="border:none;border-top:1px solid #e2e8f0;margin:22px 0 12px;">
    <p style="margin:0;font-size:12px;color:#94a3b8;">
      Submitted: ' . $applied_at . '<br>
      IP: ' . htmlspecialchars($client_ip) . '<br>
      UA: ' . $user_agent_safe . '<br>
      Job slug: ' . htmlspecialchars($job_slug) . '
    </p>
  </div>
</div>';

$body_text = "New Career Application\n" .
    "----------------------\n" .
    "Position: $job_title ($position_type)\n" .
    "Name: $name\n" .
    "Email: $email\n" .
    "Phone: $phone\n" .
    "Experience: $experience\n" .
    "LinkedIn: " . ($linkedin !== '' ? $linkedin : '(not provided)') . "\n\n" .
    "Why they are a good fit:\n" .
    ($cover_letter !== '' ? $cover_letter : '(not provided)') . "\n\n" .
    "CV attached as $attachment_name\n" .
    "----------------------\n" .
    "Submitted: $applied_at\n" .
    "IP: $client_ip\n" .
    "Job slug: $job_slug\n";

// 6. Send email via Brevo SMTP
try {
    $mail = new PHPMailer(true);
    itdgl_configure_smtp($mail);
    $mail->setFrom('info@itdgrowthlabs.com', 'ITD GrowthLabs Careers');
    $mail->addAddress($to_email, 'ITD GrowthLabs');
    $mail->addReplyTo($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body    = $body_html;
    $mail->AltBody = $body_text;
    $mail->addAttachment($cv_tmp, $attachment_name);
    $mail->send();
} catch (Exception $e) {
    error_log('[ITDGL-CAREER-MAIL] PHPMailer error: ' . $mail->ErrorInfo . ' | applicant=' . $email . ' | job=' . $job_slug);
    respond_error('We had trouble delivering your application. Please email info@itdgrowthlabs.com directly with your CV attached and we will reply within 24 hours.');
}

respond_success('Application received. We review every CV personally and will reply within 5 business days.');
