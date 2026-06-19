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

// Map ISO country code → localized landing page + display name
$itdgl_country_targets = [
    'US' => ['url' => '/usa/index.php',       'name' => 'the United States', 'short' => 'US', 'flag' => "\xF0\x9F\x87\xBA\xF0\x9F\x87\xB8"],
    'GB' => ['url' => '/uk/index.php',        'name' => 'the United Kingdom','short' => 'UK', 'flag' => "\xF0\x9F\x87\xAC\xF0\x9F\x87\xA7"],
    'AE' => ['url' => '/uae/index.php',       'name' => 'the UAE',           'short' => 'UAE','flag' => "\xF0\x9F\x87\xA6\xF0\x9F\x87\xAA"],
    'AU' => ['url' => '/australia/index.php', 'name' => 'Australia',         'short' => 'AU', 'flag' => "\xF0\x9F\x87\xA6\xF0\x9F\x87\xBA"],
    'ZA' => ['url' => '/africa/index.php',    'name' => 'South Africa',      'short' => 'AF', 'flag' => "\xF0\x9F\x87\xBF\xF0\x9F\x87\xA6"],
    'NG' => ['url' => '/africa/index.php',    'name' => 'Nigeria',           'short' => 'AF', 'flag' => "\xF0\x9F\x87\xB3\xF0\x9F\x87\xAC"],
    'KE' => ['url' => '/africa/index.php',    'name' => 'Kenya',             'short' => 'AF', 'flag' => "\xF0\x9F\x87\xB0\xF0\x9F\x87\xAA"],
    'EG' => ['url' => '/africa/index.php',    'name' => 'Egypt',             'short' => 'AF', 'flag' => "\xF0\x9F\x87\xAA\xF0\x9F\x87\xAC"],
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
.itdgl-geo-ribbon .msg { display: inline-flex; align-items: center; gap: 8px; font-weight: 500; }
.itdgl-geo-ribbon .msg .flag { font-size: 17px; }
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
            <span class="flag" aria-hidden="true"><?php echo $itdgl_target['flag']; ?></span>
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
