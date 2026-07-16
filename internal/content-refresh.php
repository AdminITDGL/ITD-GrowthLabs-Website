<?php
/**
 * ITD GrowthLabs — Content Refresh Scanner (internal)
 * ---------------------------------------------------
 * Grep-based audit: finds pages with stale-year references, missing schema,
 * missing meta description, no canonical, or last-modified filesystem time
 * older than N months. Ranks pages by refresh priority.
 * Token-gated. Not indexed.
 */

$TOKEN = 'itdgl-refresh-2026-audit';
$authorized = hash_equals($TOKEN, $_GET['token'] ?? '');

if (!$authorized) {
    echo '<!doctype html><meta name="robots" content="noindex,nofollow"><title>Access</title>';
    echo '<body style="font-family:system-ui;max-width:640px;margin:60px auto;padding:20px;color:#334155;">';
    echo '<h1 style="color:#0f172a;">Access</h1>';
    echo '<p>This tool is admin-only. Add <code style="background:#e2e8f0;padding:2px 6px;border-radius:4px;">?token=...</code> to unlock. Ask the tech lead for the token.</p></body>';
    exit;
}

$ROOT = realpath(__DIR__ . '/..');
$STALE_YEARS = ['2023', '2024', '2025']; // reject these in copy in 2026+
$CURRENT_YEAR = '2026';

// Which subdirectories to scan
$SCAN_DIRS = ['', 'compare', 'services', 'industries', 'resources', 'faqs',
    'mumbai', 'bangalore', 'delhi', 'chennai', 'hyderabad', 'ahmedabad',
    'pune', 'kolkata', 'jaipur', 'indore', 'lucknow', 'chandigarh',
    'usa', 'uk', 'uae', 'australia', 'africa'];

$SKIP_FILES = [
    // Files where stale-year references are intentional (e.g. historical case studies)
    'sitemap.xml', 'llms.txt', 'llms-full.txt', 'robots.txt', 'thankyou.php',
];

// Params
$dir_filter  = $_GET['dir'] ?? '';
$year_filter = $_GET['year'] ?? 'stale';
$limit       = min(200, max(10, (int)($_GET['limit'] ?? 50)));

// Collect files
$files = [];
foreach ($SCAN_DIRS as $sub) {
    $d = $ROOT . ($sub ? '/' . $sub : '');
    if (!is_dir($d)) continue;
    if ($dir_filter && $sub !== $dir_filter) continue;
    foreach (@scandir($d) as $f) {
        if ($f[0] === '.' || in_array($f, $SKIP_FILES, true)) continue;
        if (!preg_match('/\.(php|html)$/', $f)) continue;
        $files[] = ['dir' => $sub, 'name' => $f, 'path' => $d . '/' . $f];
    }
}

// Analyse each file
$reports = [];
foreach ($files as $f) {
    $src = @file_get_contents($f['path']);
    if ($src === false) continue;

    $lines_len = strlen($src);
    if ($lines_len < 200) continue;

    // Check for stale-year references (only in visible/textual content, not URLs)
    $stale_hits = [];
    foreach ($STALE_YEARS as $yr) {
        // Count text references outside of href="..." and URL-like patterns
        $stripped = preg_replace('/(href|src|url|content)\s*=\s*"[^"]*"/i', '', $src);
        $stripped = preg_replace('/https?:\/\/\S+/', '', $stripped);
        $count = substr_count($stripped, $yr);
        if ($count > 0) $stale_hits[$yr] = $count;
    }

    $has_current = substr_count($src, $CURRENT_YEAR) > 0;

    // Basic schema/meta checks
    $has_title       = preg_match('/<title>[^<]+<\/title>/i', $src);
    $has_desc        = preg_match('/name="description"[^>]*content="[^"]{40,}"/i', $src);
    $has_canonical   = preg_match('/rel="canonical"/i', $src);
    $has_og          = preg_match('/property="og:title"/i', $src);
    $has_schema      = preg_match('/@type"\s*:\s*"[A-Z]/i', $src);
    $has_breadcrumb  = strpos($src, '"BreadcrumbList"') !== false;
    $has_faq         = strpos($src, '"FAQPage"') !== false;

    // Filesystem age
    $mtime = @filemtime($f['path']);
    $days_old = $mtime ? (int)floor((time() - $mtime) / 86400) : null;

    // Priority score (higher = worse)
    $score = 0;
    if ($stale_hits) $score += array_sum($stale_hits) * 3;
    if (!$has_current) $score += 5;
    if (!$has_desc) $score += 4;
    if (!$has_canonical) $score += 2;
    if (!$has_og) $score += 2;
    if (!$has_schema) $score += 5;
    if (!$has_breadcrumb) $score += 1;
    if ($days_old !== null && $days_old > 180) $score += (int)($days_old / 60);

    // Apply filter
    if ($year_filter === 'stale' && !$stale_hits && $has_current) continue;
    if ($year_filter === 'missing-desc' && $has_desc) continue;
    if ($year_filter === 'missing-schema' && $has_schema) continue;
    if ($year_filter === 'old' && ($days_old === null || $days_old < 180)) continue;
    // 'all' — no filter

    $reports[] = [
        'path_display' => ($f['dir'] ? $f['dir'] . '/' : '') . $f['name'],
        'stale_hits'   => $stale_hits,
        'has_current'  => $has_current,
        'has_title'    => (bool)$has_title,
        'has_desc'     => (bool)$has_desc,
        'has_canonical'=> (bool)$has_canonical,
        'has_og'       => (bool)$has_og,
        'has_schema'   => (bool)$has_schema,
        'has_breadcrumb' => $has_breadcrumb,
        'has_faq'      => $has_faq,
        'days_old'     => $days_old,
        'size'         => $lines_len,
        'score'        => $score,
    ];
}

// Sort by priority
usort($reports, function($a, $b){ return $b['score'] <=> $a['score']; });
$reports = array_slice($reports, 0, $limit);

// Summary counts
$summary = [
    'scanned'         => count($files),
    'flagged'         => count($reports),
    'stale_yr'        => count(array_filter($reports, function($r){ return !empty($r['stale_hits']); })),
    'missing_desc'    => count(array_filter($reports, function($r){ return !$r['has_desc']; })),
    'missing_schema'  => count(array_filter($reports, function($r){ return !$r['has_schema']; })),
    'old_180d'        => count(array_filter($reports, function($r){ return $r['days_old'] !== null && $r['days_old'] > 180; })),
];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Content Refresh Scanner (Internal)</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root{ --bg:#f7fafc; --panel:#fff; --line:#e2e8f0; --line-2:#cbd5e1;
    --ink:#0f172a; --text:#334155; --text-2:#475569; --text-3:#64748b; --text-mute:#94a3b8;
    --blue:#1e3a8a; --accent:#3b82f6;
    --green:#059669; --green-soft:#d1fae5; --red:#dc2626; --red-soft:#fee2e2;
    --gold:#b45309; --gold-soft:#fef3c7; }
*,*::before,*::after{ box-sizing:border-box; }
html,body{ margin:0; padding:0; background:var(--bg); }
body{ font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
    font-size:14px; line-height:1.55; color:var(--text); }
h1,h2,h3{ font-family:'Inter',sans-serif; color:var(--ink); margin:0; letter-spacing:-0.02em; }
.mono{ font-family:'JetBrains Mono',monospace; }
a{ color:var(--accent); text-decoration:none; }

.hdr{ background:linear-gradient(135deg,#0f172a 0%,#1e3a8a 100%); color:#fff; padding:24px 20px; }
.hdr__inner{ max-width:1200px; margin:0 auto; }
.hdr__ribbon{ display:inline-flex; padding:5px 12px; background:rgba(255,255,255,0.14);
    border-radius:14px; font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
    letter-spacing:0.14em; text-transform:uppercase; color:#fff; margin-bottom:12px; }
.hdr h1{ color:#fff; font-size:26px; letter-spacing:-0.025em; margin-bottom:6px; }
.hdr p{ color:rgba(255,255,255,0.72); font-size:13.5px; margin:0; }

.page{ max-width:1200px; margin:0 auto; padding:22px 18px; }

.summary{ display:grid; grid-template-columns:repeat(5,1fr); gap:10px; margin-bottom:20px; }
@media (max-width:800px){ .summary{ grid-template-columns:repeat(2,1fr); } }
.summary__card{ background:#fff; border:1px solid var(--line); border-radius:12px; padding:16px 18px;
    box-shadow:0 2px 8px rgba(15,23,42,0.03); }
.summary__card small{ font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:700;
    letter-spacing:0.16em; text-transform:uppercase; color:var(--text-mute); }
.summary__card strong{ display:block; font-size:28px; font-weight:800; letter-spacing:-0.03em;
    color:var(--blue); margin-top:4px; }
.summary__card.warn strong{ color:var(--gold); }
.summary__card.bad strong{ color:var(--red); }

.filters{ background:#fff; border:1px solid var(--line); border-radius:12px; padding:14px 18px;
    margin-bottom:16px; display:flex; gap:10px; flex-wrap:wrap; align-items:center; }
.filters .lbl{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
    letter-spacing:0.14em; color:var(--text-3); text-transform:uppercase; }
.filters a{ padding:5px 12px; border-radius:14px; background:var(--bg); border:1px solid var(--line-2);
    font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:700;
    letter-spacing:0.06em; text-transform:uppercase; color:var(--text-2); }
.filters a.active{ background:var(--blue); color:#fff; border-color:var(--blue); }

.tbl{ background:#fff; border:1px solid var(--line); border-radius:14px; overflow:hidden;
    box-shadow:0 2px 8px rgba(15,23,42,0.03); }
.tbl__row{ display:grid; grid-template-columns:60px 1.5fr repeat(7,60px) 1fr; gap:8px;
    padding:12px 16px; border-bottom:1px solid var(--line); align-items:center; font-size:12.5px; }
.tbl__row.head{ background:#f1f5f9; font-family:'JetBrains Mono',monospace; font-size:9.5px;
    font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:var(--text-3); }
.tbl__row:last-child{ border-bottom:0; }
.tbl__row .path{ font-family:'JetBrains Mono',monospace; font-size:12px; color:var(--ink); font-weight:600;
    overflow:hidden; text-overflow:ellipsis; white-space:nowrap; }
.tbl__row .score{ font-family:'JetBrains Mono',monospace; font-size:14px; font-weight:800;
    padding:4px 10px; border-radius:8px; text-align:center; }
.score.hi{ background:var(--red-soft); color:var(--red); }
.score.md{ background:var(--gold-soft); color:var(--gold); }
.score.lo{ background:var(--green-soft); color:var(--green); }
.check{ text-align:center; font-size:12px; }
.check.y{ color:var(--green); }
.check.n{ color:var(--red); }
.stale{ font-family:'JetBrains Mono',monospace; font-size:11px; color:var(--red); font-weight:700; }
.days{ text-align:center; font-family:'JetBrains Mono',monospace; font-size:11.5px; color:var(--text-3); }

@media (max-width:1000px){
    .tbl__row{ grid-template-columns:1fr; padding:14px 18px; }
    .tbl__row.head{ display:none; }
    .tbl__row > *{ display:inline-flex; margin-right:8px; align-items:center; gap:4px; }
    .tbl__row > *::before{ font-family:'JetBrains Mono',monospace; font-size:9px; letter-spacing:0.12em;
        text-transform:uppercase; color:var(--text-mute); margin-right:4px; }
    .tbl__row .path::before{ content:''; }
    .tbl__row .score::before{ content:'Score:'; }
    .tbl__row .stale::before{ content:'Stale:'; }
    .tbl__row .days::before{ content:'Age:'; }
}

.help{ background:#fff; border:1px solid var(--line); border-radius:12px; padding:20px 24px;
    margin-top:20px; font-size:13.5px; }
.help h3{ font-size:15px; margin-bottom:10px; }
.help ul{ margin:0; padding-left:20px; }
.help li{ padding:3px 0; }
</style>
</head>
<body>

<header class="hdr">
    <div class="hdr__inner">
        <div class="hdr__ribbon">Confidential &middot; Internal Audit Tool</div>
        <h1><i class="fas fa-microscope" style="margin-right:8px;"></i>Content Refresh Scanner</h1>
        <p>Grep-based audit of PHP files. Finds stale-year references, missing schema, missing meta description, or filesystem age &gt; 180 days. Priority score ranks pages by refresh urgency.</p>
    </div>
</header>

<div class="page">

<!-- SUMMARY -->
<div class="summary">
    <div class="summary__card"><small>Files Scanned</small><strong><?php echo $summary['scanned']; ?></strong></div>
    <div class="summary__card"><small>Flagged</small><strong><?php echo $summary['flagged']; ?></strong></div>
    <div class="summary__card warn"><small>Stale-year hits</small><strong><?php echo $summary['stale_yr']; ?></strong></div>
    <div class="summary__card bad"><small>Missing schema</small><strong><?php echo $summary['missing_schema']; ?></strong></div>
    <div class="summary__card warn"><small>&gt; 180 days old</small><strong><?php echo $summary['old_180d']; ?></strong></div>
</div>

<!-- FILTERS -->
<div class="filters">
    <span class="lbl">Filter:</span>
    <?php
    $filters = [
        'stale'          => 'Stale year',
        'missing-desc'   => 'Missing description',
        'missing-schema' => 'Missing schema',
        'old'            => 'Older than 180 days',
        'all'            => 'Show all',
    ];
    foreach ($filters as $k => $v):
        $url = '?token=' . urlencode($TOKEN) . '&year=' . urlencode($k) . ($dir_filter ? '&dir=' . urlencode($dir_filter) : '');
    ?>
        <a href="<?php echo $url; ?>" class="<?php echo $year_filter === $k ? 'active' : ''; ?>"><?php echo $v; ?></a>
    <?php endforeach; ?>
</div>

<!-- RESULTS TABLE -->
<div class="tbl">
    <div class="tbl__row head">
        <div>Score</div>
        <div>Path</div>
        <div>Title</div>
        <div>Desc</div>
        <div>Canon</div>
        <div>OG</div>
        <div>Schema</div>
        <div>BC</div>
        <div>FAQ</div>
        <div>Age/Stale</div>
    </div>
    <?php if (empty($reports)): ?>
        <div class="tbl__row" style="justify-content:center; grid-template-columns:1fr; color:var(--text-mute);">
            All good — no pages match this filter.
        </div>
    <?php else: foreach ($reports as $r):
        $tier = $r['score'] >= 12 ? 'hi' : ($r['score'] >= 6 ? 'md' : 'lo');
    ?>
        <div class="tbl__row">
            <div class="score <?php echo $tier; ?>"><?php echo $r['score']; ?></div>
            <div class="path"><a href="https://itdgrowthlabs.com/<?php echo htmlspecialchars($r['path_display']); ?>" target="_blank" rel="noopener"><?php echo htmlspecialchars($r['path_display']); ?></a></div>
            <div class="check <?php echo $r['has_title']?'y':'n'; ?>"><?php echo $r['has_title'] ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>'; ?></div>
            <div class="check <?php echo $r['has_desc']?'y':'n'; ?>"><?php echo $r['has_desc'] ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>'; ?></div>
            <div class="check <?php echo $r['has_canonical']?'y':'n'; ?>"><?php echo $r['has_canonical'] ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>'; ?></div>
            <div class="check <?php echo $r['has_og']?'y':'n'; ?>"><?php echo $r['has_og'] ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>'; ?></div>
            <div class="check <?php echo $r['has_schema']?'y':'n'; ?>"><?php echo $r['has_schema'] ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>'; ?></div>
            <div class="check <?php echo $r['has_breadcrumb']?'y':'n'; ?>"><?php echo $r['has_breadcrumb'] ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>'; ?></div>
            <div class="check <?php echo $r['has_faq']?'y':'n'; ?>"><?php echo $r['has_faq'] ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>'; ?></div>
            <div>
                <?php if ($r['stale_hits']): ?>
                    <span class="stale"><?php foreach ($r['stale_hits'] as $yr => $c) echo $yr.':'.$c.' '; ?></span>
                <?php endif; ?>
                <?php if ($r['days_old'] !== null): ?>
                    <span class="days"><?php echo $r['days_old']; ?>d</span>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; endif; ?>
</div>

<!-- HOW TO USE -->
<div class="help">
    <h3><i class="fas fa-circle-info" style="color:var(--accent); margin-right:6px;"></i>How to use</h3>
    <ul>
        <li><strong>Score column</strong> — higher is worse. 12+ = high priority refresh. 6-11 = medium. 0-5 = fine.</li>
        <li><strong>Stale column</strong> — count of visible references to 2023/2024/2025 (excludes URLs). If the page copy says &ldquo;in 2025 we...&rdquo; that&rsquo;s a candidate for update to 2026.</li>
        <li><strong>Age column</strong> — days since last file modification. Pages older than 180 days without any 2026 reference are candidates for a light refresh even if content is timeless.</li>
        <li><strong>Column checks</strong> — Title, Desc(ription), Canon(ical), OG(open graph), Schema(.org), BC(breadcrumb), FAQ &mdash; each is either present or missing.</li>
        <li><strong>What to do next</strong> — Take the top 10 flagged pages. Update any &ldquo;2025&rdquo; references to &ldquo;2026&rdquo;. Add a fresh paragraph or updated statistic near the top. Update the file (this shifts mtime, resets the age clock).</li>
    </ul>
</div>

</div>
</body>
</html>
