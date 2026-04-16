<?php
/**
 * ITD GrowthLabs — Shared Email Templates
 * ----------------------------------------
 * Two reusable functions used by all mail handlers:
 *   itdgl_internal_email($title, $fields, $callPhone)  → HTML for team notification
 *   itdgl_user_email($name, $context)                  → HTML for user confirmation
 */

if (!function_exists('itdgl_internal_email')) {
    /**
     * Generate a styled internal-notification email for the ITD GrowthLabs team.
     *
     * @param string $title     e.g. "App Development Enquiry"
     * @param array  $fields    Associative: ['Name' => 'John', 'Email' => 'john@...', ...]
     * @param string $callPhone Phone/mobile number for the "Call Client" CTA (empty = omit button)
     * @return string HTML body
     */
    function itdgl_internal_email(string $title, array $fields, string $callPhone = ''): string {
        $date = date('d M Y, h:i A') . ' IST';
        $rows = '';
        foreach ($fields as $label => $value) {
            if ($value === '' || $value === null) continue;
            // Make email addresses and phone numbers clickable
            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $display = "<a href='mailto:{$value}' style='color:#1565c0;'>{$value}</a>";
            } elseif ($label === 'Mobile' || $label === 'Phone') {
                $display = "<a href='tel:{$value}' style='color:#1565c0;font-weight:600;'>{$value}</a>";
            } else {
                $display = htmlspecialchars((string)$value, ENT_QUOTES);
            }
            $rows .= "
                <tr>
                    <td style='padding:10px 12px;font-weight:600;color:#444;background:#f8f9fb;border-bottom:1px solid #eee;width:130px;vertical-align:top;white-space:nowrap;'>{$label}</td>
                    <td style='padding:10px 12px;color:#333;border-bottom:1px solid #eee;'>{$display}</td>
                </tr>";
        }

        $callBtn = $callPhone
            ? "<a href='tel:{$callPhone}' style='display:inline-block;background:#25D366;color:#fff;padding:11px 24px;border-radius:8px;text-decoration:none;font-weight:600;font-size:14px;margin-right:10px;'>&#128222; Call Client</a>"
            : '';

        return "
<!DOCTYPE html>
<html>
<head><meta charset='UTF-8'></head>
<body style='margin:0;padding:0;background:#f0f2f5;font-family:Arial,sans-serif;'>
<div style='max-width:600px;margin:30px auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.08);'>

  <!-- Header -->
  <div style='background:linear-gradient(135deg,#1565c0,#0d47a1);padding:24px 28px;'>
    <p style='margin:0 0 4px;font-size:12px;color:rgba(255,255,255,0.7);letter-spacing:1px;text-transform:uppercase;'>New Enquiry — ITD GrowthLabs Website</p>
    <h1 style='margin:0;font-size:20px;color:#fff;font-weight:700;'>{$title}</h1>
    <p style='margin:6px 0 0;font-size:13px;color:rgba(255,255,255,0.85);'>Received: {$date}</p>
  </div>

  <!-- Lead Details -->
  <div style='padding:24px 28px 20px;'>
    <p style='margin:0 0 14px;font-size:14px;color:#555;'>A new enquiry has been submitted through the website. Please review the details below and follow up promptly.</p>
    <table style='width:100%;border-collapse:collapse;border:1px solid #e8ecf1;border-radius:8px;overflow:hidden;'>
      {$rows}
    </table>
  </div>

  <!-- Action Buttons -->
  <div style='padding:0 28px 24px;'>
    <p style='margin:0 0 12px;font-size:13px;font-weight:600;color:#333;'>&#9889; Quick Actions:</p>
    {$callBtn}
    <a href='https://mail.google.com/mail/?view=cm&to=" . urlencode(isset($fields['Email']) ? $fields['Email'] : '') . "' target='_blank' style='display:inline-block;background:#1565c0;color:#fff;padding:11px 24px;border-radius:8px;text-decoration:none;font-weight:600;font-size:14px;'>&#9993; Reply by Email</a>
  </div>

  <!-- Footer -->
  <div style='background:#f8f9fb;padding:14px 28px;border-top:1px solid #e8ecf1;'>
    <p style='margin:0;font-size:12px;color:#999;'>This notification was sent automatically from the ITD GrowthLabs website contact system. Do not reply to this email directly.</p>
  </div>

</div>
</body>
</html>";
    }
}

if (!function_exists('itdgl_user_email')) {
    /**
     * Generate a styled confirmation email for the user/lead.
     *
     * @param string $name       First name or full name of the user
     * @param array  $context    Options:
     *   'form_type'   => string  e.g. 'app_development', 'contact', 'digital_marketing', etc.
     *   'service'     => string  Service they selected (optional)
     *   'is_download' => bool    True = company profile download flow
     * @return string HTML body
     */
    function itdgl_user_email(string $name, array $context = []): string {
        $formType   = $context['form_type']   ?? 'contact';
        $service    = $context['service']     ?? '';
        $isDownload = $context['is_download'] ?? false;

        // --- Personalise heading & intro based on form type ---
        $headings = [
            'app_development'     => ['We\'ve Received Your App Development Brief!', 'Our app development team will review your requirements and reach out within 24 hours.'],
            'website_development' => ['Your Website Project Request is Confirmed!',  'Our web development specialists will be in touch within 24 hours.'],
            'digital_marketing'   => ['Your Digital Marketing Brief is With Us!',    'Our growth strategists will review your campaign goals and call you within 24 hours.'],
            'social_media'        => ['Your Social Media Enquiry is Confirmed!',     'Our social media experts will review your brief and contact you within 24 hours.'],
            'lead_generation'     => ['Your Lead Generation Brief is Received!',     'Our performance marketing team will study your goals and reach out within 24 hours.'],
            'video_production'    => ['Your Video Production Request is Logged!',    'Our creative production team will be in touch with you within 24 hours.'],
            'profile_download'    => ['Your Company Profile is on Its Way!',         'Thank you for your interest in ITD GrowthLabs. We\'d love to explore how we can help grow your business.'],
            'contact'             => ['Thank You for Reaching Out!',                 'Our team has received your enquiry and will get back to you within 24 hours.'],
        ];

        [$heading, $intro] = $headings[$formType] ?? $headings['contact'];

        // --- What Happens Next steps ---
        $steps = $isDownload
            ? [
                ['&#10003;', '#25D366', 'Profile Downloaded', 'Your ITD GrowthLabs company profile covers our full range of services, case studies, and technology capabilities.'],
                ['&#128222;', '#1565c0', 'We\'ll Call You Soon', 'Our business development team will reach out to understand your project needs better.'],
                ['&#128640;', '#ff6f00', 'Custom Proposal', 'We\'ll prepare a tailored proposal aligned to your business goals — at no cost.'],
              ]
            : [
                ['&#10003;', '#25D366', 'Enquiry Received',    'We\'ve logged your details and your enquiry is now with our team.'],
                ['&#128222;', '#1565c0', 'Expert Review & Call', 'A senior specialist will review your requirements and call you within 24 business hours.'],
                ['&#128640;', '#ff6f00', 'Tailored Proposal',  'We\'ll share a detailed, no-obligation proposal specific to your business needs.'],
              ];

        $stepsHtml = '';
        foreach ($steps as [$icon, $color, $stepTitle, $stepDesc]) {
            $stepsHtml .= "
            <div style='display:flex;gap:14px;margin-bottom:16px;'>
                <div style='width:38px;height:38px;min-width:38px;background:{$color};border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:16px;color:#fff;text-align:center;line-height:38px;'>{$icon}</div>
                <div>
                    <p style='margin:0 0 3px;font-weight:700;color:#222;font-size:14px;'>{$stepTitle}</p>
                    <p style='margin:0;color:#666;font-size:13px;line-height:1.5;'>{$stepDesc}</p>
                </div>
            </div>";
        }

        // --- Service links ---
        $serviceLinks = [
            ['App Development',       'https://itdgrowthlabs.com/app_development.php',       '#1565c0'],
            ['Website Development',   'https://itdgrowthlabs.com/website_development.php',   '#0d47a1'],
            ['Digital Marketing',     'https://itdgrowthlabs.com/digital_marketing.php',     '#00897b'],
        ];
        $linksHtml = '';
        foreach ($serviceLinks as [$label, $url, $color]) {
            $linksHtml .= "<a href='{$url}' style='display:inline-block;background:{$color};color:#fff;padding:10px 18px;border-radius:8px;text-decoration:none;font-weight:600;font-size:13px;margin:4px 6px 4px 0;'>{$label} &rarr;</a>";
        }

        return "
<!DOCTYPE html>
<html>
<head><meta charset='UTF-8'></head>
<body style='margin:0;padding:0;background:#f0f2f5;font-family:Arial,sans-serif;'>
<div style='max-width:600px;margin:30px auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.08);'>

  <!-- Header -->
  <div style='background:linear-gradient(135deg,#1565c0,#0d47a1);padding:30px 28px;text-align:center;'>
    <p style='margin:0 0 8px;font-size:22px;font-weight:800;color:#fff;letter-spacing:-0.5px;'>ITD GrowthLabs</p>
    <p style='margin:0;font-size:12px;color:rgba(255,255,255,0.75);letter-spacing:1px;'>TECHNOLOGY &bull; APP DEVELOPMENT &bull; DIGITAL MARKETING</p>
  </div>

  <!-- Hero Message -->
  <div style='background:#e8f0fe;padding:24px 28px;border-bottom:3px solid #1565c0;text-align:center;'>
    <h1 style='margin:0 0 8px;font-size:20px;color:#1a237e;font-weight:700;'>{$heading}</h1>
    <p style='margin:0;font-size:14px;color:#555;line-height:1.6;'>{$intro}</p>
  </div>

  <!-- Body -->
  <div style='padding:28px;'>
    <p style='margin:0 0 20px;font-size:15px;color:#333;'>Hi <strong>{$name}</strong>,</p>
    <p style='margin:0 0 24px;font-size:14px;color:#555;line-height:1.7;'>Thank you for contacting <strong>ITD GrowthLabs</strong>. We specialise in custom app development, website design, and result-driven digital marketing — helping 300+ businesses across India, USA, UK, UAE and Australia grow online.</p>

    <!-- What Happens Next -->
    <div style='background:#f8f9fb;border-radius:10px;padding:20px 22px;margin-bottom:24px;'>
      <p style='margin:0 0 16px;font-weight:700;color:#1a237e;font-size:15px;'>&#128338; What Happens Next</p>
      {$stepsHtml}
    </div>

    <!-- Explore Services -->
    <div style='margin-bottom:24px;'>
      <p style='margin:0 0 12px;font-weight:700;color:#333;font-size:14px;'>&#128220; Explore Our Services</p>
      {$linksHtml}
    </div>

    <!-- WhatsApp CTA -->
    <div style='background:#e8f5e9;border-radius:10px;padding:16px 20px;border-left:4px solid #25D366;'>
      <p style='margin:0 0 8px;font-weight:700;color:#1b5e20;font-size:14px;'>&#128172; Prefer to chat right now?</p>
      <p style='margin:0 0 10px;font-size:13px;color:#444;'>Our team is active on WhatsApp — get an instant reply.</p>
      <a href='https://wa.me/918450978544?text=Hi%20ITD%20GrowthLabs%2C%20I%20just%20submitted%20an%20enquiry%20and%20would%20like%20to%20discuss%20further.' style='display:inline-block;background:#25D366;color:#fff;padding:10px 22px;border-radius:8px;text-decoration:none;font-weight:600;font-size:13px;'>Chat on WhatsApp &rarr;</a>
    </div>
  </div>

  <!-- Footer -->
  <div style='background:#1a237e;padding:20px 28px;text-align:center;'>
    <p style='margin:0 0 6px;font-size:13px;color:rgba(255,255,255,0.9);font-weight:600;'>ITD GrowthLabs</p>
    <p style='margin:0 0 6px;font-size:12px;color:rgba(255,255,255,0.65);'>Mumbai, India &bull; Serving Clients Globally</p>
    <p style='margin:0;font-size:12px;'><a href='https://itdgrowthlabs.com' style='color:rgba(255,255,255,0.65);text-decoration:none;'>itdgrowthlabs.com</a> &bull; <a href='mailto:info@itdgrowthlabs.com' style='color:rgba(255,255,255,0.65);text-decoration:none;'>info@itdgrowthlabs.com</a></p>
  </div>

</div>
</body>
</html>";
    }
}
