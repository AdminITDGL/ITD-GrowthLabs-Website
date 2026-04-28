<?php
/**
 * ITD GrowthLabs — Lead capture stopgap log
 * -----------------------------------------------------------------
 * SITUATION (April 2026): outbound SMTP ports 25/465/587/2525 are
 * firewall-blocked from this DigitalOcean droplet to smtp.gmail.com.
 * That means PHPMailer → Gmail SMTP attempts time out silently and
 * neither the team nor the user receives any email after a form
 * submit. Form submissions still reach this server (they POST fine,
 * the spam middleware accepts them, the JS shows the success modal),
 * but the mail step at the end is failing in the dark.
 *
 * Until an SMTP relay (Brevo / SendGrid / etc.) or DigitalOcean
 * unblock is wired up, EVERY form submission is appended to a
 * dated CSV in /tmp/itdgl_leads/ so the team can pull leads via
 * SSH and nothing is lost.
 *
 * Usage:
 *   require_once __DIR__ . '/includes/lead_log.php';
 *   itdgl_log_lead('contactMail', [
 *       'name' => $name, 'email' => $email, 'mobile' => $mobile,
 *       'service' => $service, 'message' => $message,
 *   ]);
 *
 * To pull leads from prod:
 *   ssh deploy@159.65.154.129 'cat /tmp/itdgl_leads/leads_*.csv'
 */

if (!function_exists('itdgl_log_lead')) {
    function itdgl_log_lead(string $source, array $data): void {
        try {
            $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'itdgl_leads';
            if (!is_dir($dir)) @mkdir($dir, 0755, true);
            $csv = $dir . DIRECTORY_SEPARATOR . 'leads_' . date('Y-m') . '.csv';
            $isNew = !is_file($csv);
            $fh = @fopen($csv, 'a');
            if (!$fh) {
                error_log('[ITDGL-LEAD-LOG] Could not open ' . $csv . ' for writing');
                return;
            }

            // Stable header order; new fields go into a JSON 'extra' column
            $coreCols = ['timestamp_iso', 'source', 'name', 'email', 'mobile', 'service', 'message', 'ip', 'user_agent', 'referer', 'extra'];
            if ($isNew) fputcsv($fh, $coreCols);

            // Pull standard fields, dump anything else into 'extra' as JSON
            $core = [
                'name'    => $data['name']    ?? $data['full_name'] ?? '',
                'email'   => $data['email']   ?? '',
                'mobile'  => $data['mobile']  ?? $data['phone'] ?? '',
                'service' => $data['service'] ?? $data['target_industry'] ?? $data['preferred_platform'] ?? $data['video_type'] ?? $data['budget'] ?? '',
                'message' => $data['message'] ?? $data['requirement'] ?? '',
            ];
            $extra = [];
            foreach ($data as $k => $v) {
                $std = ['name','full_name','email','mobile','phone','service','target_industry','preferred_platform','video_type','budget','message','requirement'];
                if (!in_array($k, $std, true)) $extra[$k] = $v;
            }

            fputcsv($fh, [
                date('c'),
                $source,
                $core['name'],
                $core['email'],
                $core['mobile'],
                $core['service'],
                $core['message'],
                function_exists('itdgl_client_ip') ? itdgl_client_ip() : ($_SERVER['REMOTE_ADDR'] ?? ''),
                substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200),
                substr($_SERVER['HTTP_REFERER']    ?? '', 0, 200),
                $extra ? json_encode($extra, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) : '',
            ]);
            fclose($fh);
        } catch (Throwable $e) {
            error_log('[ITDGL-LEAD-LOG] Exception: ' . $e->getMessage());
        }
    }
}

if (!function_exists('itdgl_log_mail_failure')) {
    function itdgl_log_mail_failure(string $source, string $error, array $data = []): void {
        // High-visibility error_log line for grepping the FPM log
        $name  = $data['name']  ?? $data['full_name'] ?? '';
        $email = $data['email'] ?? '';
        error_log('[ITDGL-MAIL-FAIL] source=' . $source
            . ' email=' . $email
            . ' name=' . $name
            . ' error=' . $error);
    }
}
