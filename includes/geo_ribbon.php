<?php
/**
 * ITD GrowthLabs — Geo-detect ribbon
 * -----------------------------------
 * If the visitor's IP geolocates to a country that has a localized page
 * (US / UK / UAE / Australia / South Africa / Nigeria / Kenya / Egypt) AND
 * they are NOT already on that page, render a slim dismissable banner
 * inviting them to switch to their local page.
 *
 * Country detection uses Cloudflare's free `CF-IPCountry` request header
 * (set when the site is proxied through Cloudflare). Falls back to no
 * ribbon if the header is absent.
 *
 * Dismissal is remembered via sessionStorage so the visitor only sees the
 * ribbon once per session.
 */

$itdgl_cf_country = strtoupper($_SERVER['HTTP_CF_IPCOUNTRY'] ?? '');
$itdgl_path       = $_SERVER['PHP_SELF'] ?? '';

// Inline SVG flag fragments — same crisp 3:2 ratio as the region pill.
$itdgl_ribbon_flag_us = '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="40" fill="#B22234"/><g fill="#FFFFFF"><rect width="60" height="3.08" y="3.08"/><rect width="60" height="3.08" y="9.23"/><rect width="60" height="3.08" y="15.38"/><rect width="60" height="3.08" y="21.54"/><rect width="60" height="3.08" y="27.69"/><rect width="60" height="3.08" y="33.85"/></g><rect width="24" height="21.54" fill="#3C3B6E"/></svg>';
$itdgl_ribbon_flag_gb = '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#FFFFFF" stroke-width="6"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="3"/><path d="M30,0 L30,40 M0,20 L60,20" stroke="#FFFFFF" stroke-width="10"/><path d="M30,0 L30,40 M0,20 L60,20" stroke="#C8102E" stroke-width="6"/></svg>';
$itdgl_ribbon_flag_ae = '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="13.33" y="0" fill="#00732F"/><rect width="60" height="13.34" y="13.33" fill="#FFFFFF"/><rect width="60" height="13.33" y="26.67" fill="#000000"/><rect width="15" height="40" fill="#FF0000"/></svg>';
$itdgl_ribbon_flag_au = '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><rect width="30" height="20" fill="#012169"/><path d="M0,0 L30,20 M30,0 L0,20" stroke="#FFFFFF" stroke-width="2.5"/><path d="M0,0 L30,20 M30,0 L0,20" stroke="#C8102E" stroke-width="1.2"/><path d="M15,0 L15,20 M0,10 L30,10" stroke="#FFFFFF" stroke-width="4"/><path d="M15,0 L15,20 M0,10 L30,10" stroke="#C8102E" stroke-width="2.5"/><g fill="#FFFFFF"><circle cx="45" cy="10" r="1.6"/><circle cx="50" cy="20" r="1.8"/><circle cx="40" cy="22" r="1.4"/><circle cx="48" cy="30" r="1.6"/><circle cx="55" cy="28" r="1.2"/></g></svg>';
// South Africa flag (used for ZA-detected visitors going to /africa/)
$itdgl_ribbon_flag_za = '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="40" fill="#001489"/><rect width="60" height="20" y="0" fill="#E03C31"/><polygon points="0,0 0,40 18,20" fill="#007749" stroke="#FFFFFF" stroke-width="3"/><polygon points="0,0 0,40 18,20" fill="#007749"/><polygon points="0,4 0,36 14,20" fill="#000000"/></svg>';
// Nigeria
$itdgl_ribbon_flag_ng = '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="20" height="40" fill="#008751"/><rect width="20" height="40" x="20" fill="#FFFFFF"/><rect width="20" height="40" x="40" fill="#008751"/></svg>';
// Kenya
$itdgl_ribbon_flag_ke = '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="40" fill="#FFFFFF"/><rect width="60" height="12" y="0" fill="#000000"/><rect width="60" height="12" y="28" fill="#006B3F"/><rect width="60" height="4" y="12" fill="#FFFFFF"/><rect width="60" height="4" y="24" fill="#FFFFFF"/><rect width="60" height="12" y="14" fill="#BB0000"/></svg>';
// Egypt
$itdgl_ribbon_flag_eg = '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="13.33" y="0" fill="#CE1126"/><rect width="60" height="13.34" y="13.33" fill="#FFFFFF"/><rect width="60" height="13.33" y="26.67" fill="#000000"/></svg>';

// Map ISO country code → localized landing page + display name + flag SVG
$itdgl_country_targets = [
    'US' => ['url' => '/usa/index.php',       'name' => 'the United States', 'short' => 'US', 'flag' => $itdgl_ribbon_flag_us],
    'GB' => ['url' => '/uk/index.php',        'name' => 'the United Kingdom','short' => 'UK', 'flag' => $itdgl_ribbon_flag_gb],
    'AE' => ['url' => '/uae/index.php',       'name' => 'the UAE',           'short' => 'UAE','flag' => $itdgl_ribbon_flag_ae],
    'AU' => ['url' => '/australia/index.php', 'name' => 'Australia',         'short' => 'AU', 'flag' => $itdgl_ribbon_flag_au],
    'ZA' => ['url' => '/africa/index.php',    'name' => 'South Africa',      'short' => 'AF', 'flag' => $itdgl_ribbon_flag_za],
    'NG' => ['url' => '/africa/index.php',    'name' => 'Nigeria',           'short' => 'AF', 'flag' => $itdgl_ribbon_flag_ng],
    'KE' => ['url' => '/africa/index.php',    'name' => 'Kenya',             'short' => 'AF', 'flag' => $itdgl_ribbon_flag_ke],
    'EG' => ['url' => '/africa/index.php',    'name' => 'Egypt',             'short' => 'AF', 'flag' => $itdgl_ribbon_flag_eg],
];

$itdgl_show_ribbon = false;
$itdgl_target = null;
if (isset($itdgl_country_targets[$itdgl_cf_country])) {
    $itdgl_target = $itdgl_country_targets[$itdgl_cf_country];
    // Skip if user is already on that target page (or in the same subdir)
    $itdgl_subdir = ltrim(dirname($itdgl_target['url']), '/');
    if (strpos($itdgl_path, '/' . $itdgl_subdir . '/') === false) {
        $itdgl_show_ribbon = true;
    }
}

if ($itdgl_show_ribbon && $itdgl_target):
?>
<style>
.itdgl-geo-ribbon {
    background: linear-gradient(135deg, #fff3e6 0%, #ffe2c4 100%);
    color: #7c2d12;
    border-bottom: 1px solid rgba(255,107,0,0.30);
    font-size: 13px;
    line-height: 1.4;
}
.itdgl-geo-ribbon .container {
    display: flex; align-items: center; justify-content: space-between;
    padding: 9px 0;
    gap: 14px;
    flex-wrap: wrap;
}
.itdgl-geo-ribbon .msg { display: inline-flex; align-items: center; gap: 10px; font-weight: 500; }
.itdgl-geo-ribbon .msg .flag {
    display: inline-block;
    width: 24px; height: 17px;
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 0 0 1px rgba(154,52,18,0.20);
    flex: 0 0 24px;
}
.itdgl-geo-ribbon .msg .flag svg { width: 100%; height: 100%; display: block; }
.itdgl-geo-ribbon .msg strong { color: #9a3412; font-weight: 700; }
.itdgl-geo-ribbon .actions { display: inline-flex; align-items: center; gap: 14px; }
.itdgl-geo-ribbon .actions a {
    color: #7c2d12; text-decoration: none; font-weight: 700;
    border-bottom: 1px dashed #9a3412;
    padding-bottom: 1px;
}
.itdgl-geo-ribbon .actions a:hover { color: #9a3412; border-bottom-style: solid; }
.itdgl-geo-ribbon .dismiss {
    background: transparent; border: none;
    color: #7c2d12; opacity: 0.7;
    font-size: 18px; line-height: 1; cursor: pointer;
    padding: 4px 8px; border-radius: 6px;
}
.itdgl-geo-ribbon .dismiss:hover { opacity: 1; background: rgba(255,107,0,0.10); }
@media (max-width: 575px) {
    .itdgl-geo-ribbon { font-size: 12.5px; }
    .itdgl-geo-ribbon .container { padding: 8px 0; gap: 10px; }
    .itdgl-geo-ribbon .actions { gap: 10px; }
}
</style>
<div class="itdgl-geo-ribbon" id="itdgl-geo-ribbon" role="region" aria-label="Region recommendation">
    <div class="container">
        <span class="msg">
            <span class="flag"><?php echo $itdgl_target['flag']; ?></span>
            Visiting from <strong><?php echo htmlspecialchars($itdgl_target['name']); ?></strong>?
        </span>
        <span class="actions">
            <a href="<?php echo htmlspecialchars($itdgl_target['url']); ?>"
               onclick="if(typeof gtag==='function')gtag('event','geo_ribbon_click',{country:'<?php echo $itdgl_cf_country; ?>'});">
                See our <?php echo htmlspecialchars($itdgl_target['short']); ?> page &rarr;
            </a>
            <button type="button" class="dismiss" id="itdgl-geo-dismiss" aria-label="Dismiss">&times;</button>
        </span>
    </div>
</div>
<script>
(function(){
    var bar = document.getElementById('itdgl-geo-ribbon');
    var btn = document.getElementById('itdgl-geo-dismiss');
    if (!bar || !btn) return;
    // Restore dismissal state from sessionStorage
    try {
        if (sessionStorage.getItem('itdgl_geo_dismissed') === '1') {
            bar.style.display = 'none';
            return;
        }
    } catch (e) { /* sessionStorage disabled — no harm, ribbon stays */ }
    btn.addEventListener('click', function () {
        bar.style.display = 'none';
        try { sessionStorage.setItem('itdgl_geo_dismissed', '1'); } catch (e) {}
        if (typeof gtag === 'function') gtag('event', 'geo_ribbon_dismiss', { country: '<?php echo $itdgl_cf_country; ?>' });
    });
})();
</script>
<?php endif; ?>
