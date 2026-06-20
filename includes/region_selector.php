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

// Inline SVG flags — render crisply everywhere, no HTTP requests, no
// emoji-font dependency. Each is a 3:2 ratio that fits inside the 20px
// pill / 18px menu slot.
$itdgl_flag_svg = [
    'in' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="13.33" y="0" fill="#FF9933"/><rect width="60" height="13.34" y="13.33" fill="#FFFFFF"/><rect width="60" height="13.33" y="26.67" fill="#138808"/><circle cx="30" cy="20" r="3.5" fill="none" stroke="#000080" stroke-width="0.6"/><circle cx="30" cy="20" r="0.8" fill="#000080"/></svg>',
    'us' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="40" fill="#B22234"/><g fill="#FFFFFF"><rect width="60" height="3.08" y="3.08"/><rect width="60" height="3.08" y="9.23"/><rect width="60" height="3.08" y="15.38"/><rect width="60" height="3.08" y="21.54"/><rect width="60" height="3.08" y="27.69"/><rect width="60" height="3.08" y="33.85"/></g><rect width="24" height="21.54" fill="#3C3B6E"/></svg>',
    'gb' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#FFFFFF" stroke-width="6"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="3"/><path d="M30,0 L30,40 M0,20 L60,20" stroke="#FFFFFF" stroke-width="10"/><path d="M30,0 L30,40 M0,20 L60,20" stroke="#C8102E" stroke-width="6"/></svg>',
    'ae' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="13.33" y="0" fill="#00732F"/><rect width="60" height="13.34" y="13.33" fill="#FFFFFF"/><rect width="60" height="13.33" y="26.67" fill="#000000"/><rect width="15" height="40" fill="#FF0000"/></svg>',
    'au' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><rect width="30" height="20" fill="#012169"/><path d="M0,0 L30,20 M30,0 L0,20" stroke="#FFFFFF" stroke-width="2.5"/><path d="M0,0 L30,20 M30,0 L0,20" stroke="#C8102E" stroke-width="1.2"/><path d="M15,0 L15,20 M0,10 L30,10" stroke="#FFFFFF" stroke-width="4"/><path d="M15,0 L15,20 M0,10 L30,10" stroke="#C8102E" stroke-width="2.5"/><g fill="#FFFFFF"><circle cx="45" cy="10" r="1.6"/><circle cx="50" cy="20" r="1.8"/><circle cx="40" cy="22" r="1.4"/><circle cx="48" cy="30" r="1.6"/><circle cx="55" cy="28" r="1.2"/></g></svg>',
    'af' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="40" fill="#fff7ed"/><path d="M28 6 c-3 0 -6 1 -8 3 c-2 2 -3 5 -2 7 c0 2 -1 4 -1 6 c-1 2 0 5 1 7 c1 3 3 5 6 6 c2 1 5 2 7 1 c2 -1 4 -2 5 -4 c1 -2 2 -4 3 -6 c1 -3 2 -5 1 -8 c-1 -3 -2 -5 -4 -7 c-2 -3 -5 -5 -8 -5 z" fill="#ff6b00"/></svg>',
];

$itdgl_regions = [
    'in' => ['url' => '/',                     'name' => 'India',           'short' => 'IN', 'flag' => $itdgl_flag_svg['in']],
    'us' => ['url' => '/usa/index.php',        'name' => 'United States',   'short' => 'US', 'flag' => $itdgl_flag_svg['us']],
    'gb' => ['url' => '/uk/index.php',         'name' => 'United Kingdom',  'short' => 'UK', 'flag' => $itdgl_flag_svg['gb']],
    'ae' => ['url' => '/uae/index.php',        'name' => 'UAE',             'short' => 'AE', 'flag' => $itdgl_flag_svg['ae']],
    'au' => ['url' => '/australia/index.php',  'name' => 'Australia',       'short' => 'AU', 'flag' => $itdgl_flag_svg['au']],
    'af' => ['url' => '/africa/index.php',     'name' => 'Africa',          'short' => 'AF', 'flag' => $itdgl_flag_svg['af']],
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
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(15,23,42,0.06);
    border: 1px solid rgba(15,23,42,0.10);
    border-radius: 30px;
    padding: 6px 12px 6px 8px;
    font-size: 12.5px; font-weight: 600;
    color: #0f172a;
    cursor: pointer;
    transition: background .15s, border-color .15s;
    line-height: 1;
}
.itdgl-region__btn:hover { background: rgba(15,23,42,0.10); border-color: rgba(15,23,42,0.18); }
.itdgl-region__btn .flag {
    display: inline-block;
    width: 22px; height: 16px;
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 0 0 1px rgba(15,23,42,0.10);
    flex: 0 0 22px;
}
.itdgl-region__btn .flag svg { width: 100%; height: 100%; display: block; }
.itdgl-region__btn .caret { font-size: 9px; opacity: 0.55; margin-left: 2px; }
.itdgl-region__menu {
    position: absolute; right: 0; top: calc(100% + 8px);
    background: #ffffff;
    border: 1px solid rgba(15,23,42,0.10);
    border-radius: 12px;
    box-shadow: 0 18px 50px rgba(15,23,42,0.18);
    padding: 6px;
    min-width: 260px;
    z-index: 1100;
}
.itdgl-region__menu[hidden] { display: none; }
.itdgl-region__menu .head {
    font-size: 10px; letter-spacing: 1.4px; text-transform: uppercase;
    color: #94a3b8; font-weight: 700;
    padding: 8px 12px 6px;
}
.itdgl-region__item {
    display: flex; align-items: center; gap: 12px;
    padding: 9px 12px;
    border-radius: 8px;
    text-decoration: none;
    color: #0f172a;
    font-size: 13.5px;
    font-weight: 500;
    transition: background .12s;
}
.itdgl-region__item:hover { background: rgba(255,107,0,0.08); color: #0f172a; }
.itdgl-region__item .flag {
    display: inline-block;
    width: 26px; height: 18px;
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 0 0 1px rgba(15,23,42,0.10);
    flex: 0 0 26px;
}
.itdgl-region__item .flag svg { width: 100%; height: 100%; display: block; }
.itdgl-region__item .name { flex: 1; }
.itdgl-region__item .badge { font-size: 10.5px; color: #ff6b00; font-weight: 700; background: rgba(255,107,0,0.10); padding: 3px 8px; border-radius: 10px; }
.itdgl-region__item.is-active { background: rgba(30,64,175,0.06); color: #1e40af; }
.itdgl-region__item.is-active .name { color: #1e40af; }
@media (max-width: 575px) {
    .itdgl-region__btn { padding: 5px 10px 5px 7px; font-size: 12px; }
    .itdgl-region__btn .label { display: none; }
    .itdgl-region__btn .flag { width: 20px; height: 14px; flex-basis: 20px; }
    .itdgl-region__menu { right: -4px; min-width: 240px; }
}
</style>
<div class="itdgl-region">
    <button type="button" class="itdgl-region__btn" id="itdgl-region-btn"
            aria-haspopup="true" aria-expanded="false" aria-controls="itdgl-region-menu">
        <span class="flag"><?php echo $itdgl_current['flag']; ?></span>
        <span class="label"><?php echo htmlspecialchars($itdgl_current['short']); ?> · EN</span>
        <i class="fas fa-chevron-down caret" aria-hidden="true"></i>
    </button>
    <div class="itdgl-region__menu" id="itdgl-region-menu" hidden role="menu">
        <div class="head">Select your region</div>
        <?php foreach ($itdgl_regions as $key => $r): ?>
            <a href="<?php echo htmlspecialchars($r['url']); ?>"
               class="itdgl-region__item <?php echo $key === $itdgl_current_key ? 'is-active' : ''; ?>"
               role="menuitem">
                <span class="flag"><?php echo $r['flag']; ?></span>
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
