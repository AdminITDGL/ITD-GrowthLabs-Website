<?php
/**
 * ITD GrowthLabs — Region selector pill
 * --------------------------------------
 * Renders a compact "Region · Language" dropdown that lives inside the
 * header. Replaces the old flag-row bar above the header.
 *
 * The current region is detected from $_SERVER['PHP_SELF']:
 *   /usa/...        → United States
 *   /uk/...         → United Kingdom
 *   /uae/...        → UAE
 *   /australia/...  → Australia
 *   /africa/...     → Africa
 *   anything else   → India (default)
 */

$itdgl_regions = [
    'in' => ['url' => '/',                     'name' => 'India',           'short' => 'IN', 'flag' => "\xF0\x9F\x87\xAE\xF0\x9F\x87\xB3"], // 🇮🇳
    'us' => ['url' => '/usa/index.php',        'name' => 'United States',   'short' => 'US', 'flag' => "\xF0\x9F\x87\xBA\xF0\x9F\x87\xB8"], // 🇺🇸
    'gb' => ['url' => '/uk/index.php',         'name' => 'United Kingdom',  'short' => 'UK', 'flag' => "\xF0\x9F\x87\xAC\xF0\x9F\x87\xA7"], // 🇬🇧
    'ae' => ['url' => '/uae/index.php',        'name' => 'UAE',             'short' => 'AE', 'flag' => "\xF0\x9F\x87\xA6\xF0\x9F\x87\xAA"], // 🇦🇪
    'au' => ['url' => '/australia/index.php',  'name' => 'Australia',       'short' => 'AU', 'flag' => "\xF0\x9F\x87\xA6\xF0\x9F\x87\xBA"], // 🇦🇺
    'af' => ['url' => '/africa/index.php',     'name' => 'Africa',          'short' => 'AF', 'flag' => "\xF0\x9F\x8C\x8D"],                  // 🌍
];

$itdgl_self = $_SERVER['PHP_SELF'] ?? '';
$itdgl_current_key = 'in';
if (preg_match('#^/usa/#', $itdgl_self))       $itdgl_current_key = 'us';
elseif (preg_match('#^/uk/#', $itdgl_self))    $itdgl_current_key = 'gb';
elseif (preg_match('#^/uae/#', $itdgl_self))   $itdgl_current_key = 'ae';
elseif (preg_match('#^/australia/#', $itdgl_self)) $itdgl_current_key = 'au';
elseif (preg_match('#^/africa/#', $itdgl_self))    $itdgl_current_key = 'af';
$itdgl_current = $itdgl_regions[$itdgl_current_key];
?>
<style>
.itdgl-region { position: relative; display: inline-flex; align-items: center; }
.itdgl-region__btn {
    display: inline-flex; align-items: center; gap: 7px;
    background: rgba(15,23,42,0.06);
    border: 1px solid rgba(15,23,42,0.10);
    border-radius: 30px;
    padding: 6px 12px 6px 10px;
    font-size: 12.5px; font-weight: 600;
    color: #0f172a;
    cursor: pointer;
    transition: background .15s, border-color .15s;
    line-height: 1;
}
.itdgl-region__btn:hover { background: rgba(15,23,42,0.10); border-color: rgba(15,23,42,0.18); }
.itdgl-region__btn .flag { font-size: 14px; }
.itdgl-region__btn .caret { font-size: 9px; opacity: 0.6; margin-left: 1px; }
.itdgl-region__menu {
    position: absolute; right: 0; top: calc(100% + 8px);
    background: #ffffff;
    border: 1px solid rgba(15,23,42,0.10);
    border-radius: 12px;
    box-shadow: 0 18px 50px rgba(15,23,42,0.18);
    padding: 6px;
    min-width: 240px;
    z-index: 1100;
}
.itdgl-region__menu[hidden] { display: none; }
.itdgl-region__menu .head {
    font-size: 10px; letter-spacing: 1.4px; text-transform: uppercase;
    color: #94a3b8; font-weight: 700;
    padding: 8px 12px 6px;
}
.itdgl-region__item {
    display: flex; align-items: center; gap: 10px;
    padding: 9px 12px;
    border-radius: 8px;
    text-decoration: none;
    color: #0f172a;
    font-size: 13.5px;
    font-weight: 500;
    transition: background .12s;
}
.itdgl-region__item:hover { background: rgba(255,107,0,0.08); color: #0f172a; }
.itdgl-region__item .flag { font-size: 16px; flex: 0 0 16px; }
.itdgl-region__item .name { flex: 1; }
.itdgl-region__item .badge { font-size: 11px; color: #ff6b00; font-weight: 700; }
.itdgl-region__item.is-active { background: rgba(30,64,175,0.06); color: #1e40af; }
.itdgl-region__item.is-active .name { color: #1e40af; }
@media (max-width: 575px) {
    .itdgl-region__btn { padding: 5px 10px 5px 9px; font-size: 12px; }
    .itdgl-region__btn .label { display: none; }
    .itdgl-region__menu { right: -4px; min-width: 220px; }
}
</style>
<div class="itdgl-region">
    <button type="button" class="itdgl-region__btn" id="itdgl-region-btn"
            aria-haspopup="true" aria-expanded="false" aria-controls="itdgl-region-menu">
        <span class="flag" aria-hidden="true"><?php echo $itdgl_current['flag']; ?></span>
        <span class="label"><?php echo htmlspecialchars($itdgl_current['short']); ?> · EN</span>
        <i class="fas fa-chevron-down caret" aria-hidden="true"></i>
    </button>
    <div class="itdgl-region__menu" id="itdgl-region-menu" hidden role="menu">
        <div class="head">Select your region</div>
        <?php foreach ($itdgl_regions as $key => $r): ?>
            <a href="<?php echo htmlspecialchars($r['url']); ?>"
               class="itdgl-region__item <?php echo $key === $itdgl_current_key ? 'is-active' : ''; ?>"
               role="menuitem">
                <span class="flag" aria-hidden="true"><?php echo $r['flag']; ?></span>
                <span class="name"><?php echo htmlspecialchars($r['name']); ?></span>
                <?php if ($key === $itdgl_current_key): ?>
                    <span class="badge">Current</span>
                <?php endif; ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<script>
(function(){
    var btn = document.getElementById('itdgl-region-btn');
    var menu = document.getElementById('itdgl-region-menu');
    if (!btn || !menu) return;
    function close() {
        menu.setAttribute('hidden', '');
        btn.setAttribute('aria-expanded', 'false');
    }
    function open() {
        menu.removeAttribute('hidden');
        btn.setAttribute('aria-expanded', 'true');
    }
    btn.addEventListener('click', function (e) {
        e.stopPropagation();
        if (menu.hasAttribute('hidden')) open(); else close();
    });
    document.addEventListener('click', function (e) {
        if (!menu.contains(e.target) && e.target !== btn) close();
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') close();
    });
})();
</script>
