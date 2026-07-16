<?php
/**
 * ITD GrowthLabs — LLM Citation Tracker (internal)
 * ------------------------------------------------
 * Weekly review tool: log which AI platforms (ChatGPT, Gemini, Perplexity,
 * AI Overviews, Copilot, Claude) cite ITD for each P0 keyword.
 *
 * Data persists to a CSV: sys_get_temp_dir()/itdgl_citations/log.csv
 * Format: yyyy-mm-dd,query,platform,cited(0|1),position,source_url,notes
 *
 * Read-only shows: latest week snapshot, historical trend per query.
 * Auth: shared token (?token=...).
 */

$TOKEN = 'itdgl-tracker-2026-loy-prashant';
$authorized = hash_equals($TOKEN, $_GET['token'] ?? $_POST['token'] ?? '');

$DATA_DIR = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'itdgl_citations';
@mkdir($DATA_DIR, 0755, true);
$LOG_FILE = $DATA_DIR . DIRECTORY_SEPARATOR . 'log.csv';

// The 8 P0 queries we're tracking
$QUERIES = [
    'jewelry-in'   => 'Best jewelry digital marketing agency in India',
    'beauty-in'    => 'Best beauty digital marketing agency in India',
    'web-gurgaon'  => 'Top web design agency in Gurgaon',
    'app-hyd'      => 'Top mobile app development company in Hyderabad',
    'app-blr'      => 'Top mobile app development company in Bangalore',
    'dm-mumbai'    => 'Top digital marketing agency in Mumbai',
    'd2c-mumbai'   => 'Top D2C marketing agency Mumbai',
    'seo-d2c'      => 'Best SEO agency for D2C brands India',
];
$PLATFORMS = ['chatgpt' => 'ChatGPT', 'gemini' => 'Gemini', 'perplexity' => 'Perplexity',
              'ai-overviews' => 'AI Overviews', 'copilot' => 'Copilot', 'claude' => 'Claude'];

// Handle POST (log a citation observation)
$flash = null;
if ($authorized && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = date('Y-m-d');
    $q = $_POST['query'] ?? '';
    $p = $_POST['platform'] ?? '';
    $cited = isset($_POST['cited']) ? '1' : '0';
    $pos = (int)($_POST['position'] ?? 0);
    $src = $_POST['source_url'] ?? '';
    $notes = $_POST['notes'] ?? '';
    if (isset($QUERIES[$q]) && isset($PLATFORMS[$p])) {
        $row = [$date, $q, $p, $cited, $pos, $src, str_replace(["\n","\r",","], [' ',' ',';'], $notes)];
        $fh = fopen($LOG_FILE, 'a');
        if ($fh) {
            if (ftell($fh) === 0) {
                fputcsv($fh, ['date','query','platform','cited','position','source_url','notes']);
            }
            fputcsv($fh, $row);
            fclose($fh);
            $flash = 'Logged: ' . htmlspecialchars($QUERIES[$q]) . ' &middot; ' . htmlspecialchars($PLATFORMS[$p]) . ' &middot; ' . ($cited === '1' ? 'CITED' : 'not cited');
        } else {
            $flash = 'Error: could not write log file.';
        }
    }
}

// Read log for display
$rows = [];
if (is_file($LOG_FILE)) {
    $fh = fopen($LOG_FILE, 'r');
    if ($fh) {
        $header = fgetcsv($fh);
        while (($r = fgetcsv($fh)) !== false) {
            if (count($r) >= 4) $rows[] = array_combine(
                ['date','query','platform','cited','position','source_url','notes'],
                array_pad($r, 7, '')
            );
        }
        fclose($fh);
    }
}

// Aggregate: per-query, per-platform latest status
$latest = [];
foreach ($rows as $r) {
    $key = $r['query'] . '|' . $r['platform'];
    if (!isset($latest[$key]) || $r['date'] > $latest[$key]['date']) $latest[$key] = $r;
}

// Weekly counts (last 8 weeks)
$weekCounts = [];
foreach ($rows as $r) {
    if (!$r['date']) continue;
    $ts = strtotime($r['date']);
    if (!$ts) continue;
    $wk = date('o-\WW', $ts); // ISO week
    if (!isset($weekCounts[$wk])) $weekCounts[$wk] = ['cited'=>0, 'not'=>0];
    if ($r['cited'] === '1') $weekCounts[$wk]['cited']++;
    else $weekCounts[$wk]['not']++;
}
krsort($weekCounts);
$weekCounts = array_slice($weekCounts, 0, 8, true);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#0f172a">
    <title>LLM Citation Tracker (Internal)</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root{ --bg:#f7fafc; --panel:#fff; --line:#e2e8f0; --line-2:#cbd5e1;
    --ink:#0f172a; --text:#334155; --text-2:#475569; --text-3:#64748b; --text-mute:#94a3b8;
    --brand:#1e3a8a; --accent:#3b82f6; --accent-2:#1d4ed8;
    --green:#059669; --green-soft:#d1fae5; --red:#dc2626; --red-soft:#fee2e2;
    --gold:#b45309; --gold-soft:#fef3c7; }
*,*::before,*::after{ box-sizing:border-box; }
html,body{ margin:0; padding:0; background:var(--bg); }
body{ font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
    font-size:15px; line-height:1.6; color:var(--text); padding-bottom:60px; }
h1,h2,h3,h4{ font-family:'Inter',sans-serif; color:var(--ink); margin:0; letter-spacing:-0.02em; }
.mono{ font-family:'JetBrains Mono',monospace; }
a{ color:var(--accent-2); text-decoration:none; }

.hdr{ background:linear-gradient(135deg,#0f172a 0%,#1e3a8a 100%); color:#fff;
    padding:26px 20px 22px; position:sticky; top:0; z-index:20; box-shadow:0 4px 16px rgba(15,23,42,0.12); }
.hdr__row1{ display:flex; align-items:center; justify-content:space-between; gap:12px;
    max-width:960px; margin:0 auto; }
.hdr__row1 small{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:600;
    letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.72); }
.hdr__row1 small strong{ color:#fff; }
.hdr h1{ color:#fff; font-size:22px; letter-spacing:-0.025em; margin-top:8px; max-width:960px; margin-inline:auto; }
.hdr__sub{ color:rgba(255,255,255,0.72); font-size:13.5px; margin-top:4px; max-width:960px; margin-inline:auto; }

.page{ max-width:960px; margin:0 auto; padding:22px 18px 60px; }
.card{ background:var(--panel); border:1px solid var(--line); border-radius:14px;
    padding:22px 24px; margin-bottom:16px; box-shadow:0 2px 8px rgba(15,23,42,0.03); }
.card h3{ font-size:16px; font-weight:800; margin:0 0 12px; letter-spacing:-0.01em;
    display:flex; align-items:center; gap:10px; }
.card h3 i{ color:var(--accent); font-size:14px; }
.card p{ margin:0 0 12px; }

.flash{ padding:12px 18px; border-radius:10px; margin-bottom:16px; border-left:4px solid var(--green);
    background:var(--green-soft); color:#064e3b; font-size:14px; }
.callout{ padding:12px 16px; border-radius:10px; margin:12px 0; background:var(--gold-soft);
    color:var(--gold); font-size:13.5px; border-left:4px solid var(--gold); }

/* Latest-week matrix */
.matrix{ overflow-x:auto; }
.matrix table{ width:100%; border-collapse:collapse; font-size:13px; min-width:640px; }
.matrix th, .matrix td{ padding:9px 12px; text-align:center; border-bottom:1px solid var(--line);
    vertical-align:middle; }
.matrix th{ background:#f1f5f9; font-family:'JetBrains Mono',monospace; font-size:10px;
    font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:var(--text-3); }
.matrix th:first-child, .matrix td:first-child{ text-align:left; font-weight:600; color:var(--ink); }
.matrix td.q{ font-size:12.5px; line-height:1.35; max-width:240px; }
.pill{ display:inline-block; padding:3px 10px; border-radius:12px;
    font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:700;
    letter-spacing:0.10em; text-transform:uppercase; }
.pill.ok{ background:var(--green-soft); color:var(--green); }
.pill.no{ background:var(--red-soft); color:var(--red); }
.pill.n{ background:#f1f5f9; color:var(--text-mute); }

/* Weekly count chart */
.wk-chart{ display:flex; align-items:flex-end; gap:12px; height:120px; padding:12px 0; }
.wk-chart__bar{ flex:1; display:flex; flex-direction:column; align-items:center; gap:6px; min-width:0; }
.wk-chart__val{ font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:700; color:var(--green); }
.wk-chart__fill{ width:100%; background:linear-gradient(180deg,#3b82f6,#1e3a8a); border-radius:6px 6px 0 0;
    min-height:2px; }
.wk-chart__lbl{ font-family:'JetBrains Mono',monospace; font-size:9.5px; color:var(--text-mute);
    letter-spacing:0.06em; text-align:center; word-break:break-all; }

/* Log form */
form.log{ display:grid; grid-template-columns:1fr 1fr; gap:10px; }
@media (max-width:600px){ form.log{ grid-template-columns:1fr; } }
form.log label{ display:flex; flex-direction:column; gap:4px;
    font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:600;
    letter-spacing:0.10em; text-transform:uppercase; color:var(--text-3); }
form.log input[type=text], form.log input[type=number], form.log input[type=url],
form.log select, form.log textarea{
    padding:11px 13px; border:1px solid var(--line-2); border-radius:9px;
    font-family:'Inter',sans-serif; font-size:14px; color:var(--ink); background:#fff; }
form.log input:focus, form.log select:focus, form.log textarea:focus{
    outline:none; border-color:var(--accent); box-shadow:0 0 0 3px rgba(59,130,246,0.15); }
form.log .full{ grid-column:1/-1; }
form.log .checkbox-row{ display:flex; align-items:center; gap:10px; padding:8px 0;
    font-family:'Inter',sans-serif; text-transform:none; letter-spacing:0; font-size:14px; color:var(--text); }
form.log button{ grid-column:1/-1; padding:13px 20px; border:none; border-radius:10px;
    background:linear-gradient(135deg,#1e3a8a,#2563eb); color:#fff;
    font-family:'Inter',sans-serif; font-weight:700; font-size:14.5px; letter-spacing:0.02em;
    cursor:pointer; box-shadow:0 8px 20px rgba(30,64,175,0.24); transition:transform .15s ease; }
form.log button:hover{ transform:translateY(-2px); }

/* Recent log rows */
.log-rows{ font-family:'JetBrains Mono',monospace; font-size:12px; }
.log-rows > div{ padding:9px 0; border-bottom:1px solid var(--line);
    display:grid; grid-template-columns:80px 1fr 80px 60px; gap:10px; align-items:center; }
.log-rows > div:last-child{ border-bottom:0; }
.log-rows .d{ color:var(--text-mute); }
.log-rows .q{ color:var(--text-2); }
.log-rows .p{ color:var(--brand); font-weight:700; }
@media (max-width:640px){ .log-rows > div{ grid-template-columns:1fr; gap:2px; } }
</style>
</head>
<body>

<header class="hdr">
    <div class="hdr__row1">
        <small><strong>ITD GrowthLabs</strong> &middot; Internal</small>
        <small>v1.0 &middot; <?php echo date('Y-m-d'); ?></small>
    </div>
    <h1><i class="fas fa-radar" style="margin-right:8px; color:#93c5fd;"></i>LLM Citation Tracker</h1>
    <p class="hdr__sub">Log weekly whether our 8 P0 queries cite us on ChatGPT / Gemini / Perplexity / AI Overviews / Copilot / Claude.</p>
</header>

<div class="page">

<?php if (!$authorized): ?>
    <div class="card">
        <h3><i class="fas fa-lock"></i> Access</h3>
        <p>This tool is admin-only. Add <code>?token=...</code> to unlock. Token lives in the file &mdash; ask Prashant or Loy for it.</p>
    </div>
</div></body></html>
<?php exit; endif; ?>

<?php if ($flash): ?>
<div class="flash"><?php echo $flash; ?></div>
<?php endif; ?>

<!-- LATEST STATUS MATRIX -->
<div class="card">
    <h3><i class="fas fa-chart-network"></i> Latest citation status per query &times; platform</h3>
    <p>Green = cited, red = not cited, grey = no data logged yet. Uses most-recent observation per (query &times; platform).</p>
    <div class="matrix">
        <table>
            <thead><tr>
                <th>Query</th>
                <?php foreach ($PLATFORMS as $k => $v): ?>
                    <th><?php echo htmlspecialchars($v); ?></th>
                <?php endforeach; ?>
            </tr></thead>
            <tbody>
                <?php foreach ($QUERIES as $qk => $qtext): ?>
                <tr>
                    <td class="q"><?php echo htmlspecialchars($qtext); ?></td>
                    <?php foreach ($PLATFORMS as $pk => $pv):
                        $r = $latest[$qk.'|'.$pk] ?? null;
                        if (!$r) { echo '<td><span class="pill n">?</span></td>'; }
                        elseif ($r['cited'] === '1') { echo '<td><span class="pill ok">Cited'.($r['position']?' #'.$r['position']:'').'</span></td>'; }
                        else { echo '<td><span class="pill no">No</span></td>'; }
                    endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- WEEKLY COUNTS -->
<div class="card">
    <h3><i class="fas fa-chart-column"></i> Citations logged per week (last 8 ISO weeks)</h3>
    <?php if (empty($weekCounts)): ?>
        <p style="color:var(--text-3);">No data yet. Log your first observation below to see the trend.</p>
    <?php else: ?>
        <?php $max = 0; foreach ($weekCounts as $c) $max = max($max, $c['cited']); ?>
        <div class="wk-chart">
            <?php foreach (array_reverse($weekCounts) as $wk => $c):
                $pct = $max ? ($c['cited'] / $max) * 100 : 0; ?>
                <div class="wk-chart__bar">
                    <span class="wk-chart__val"><?php echo $c['cited']; ?></span>
                    <div class="wk-chart__fill" style="height:<?php echo max(2, (int)$pct); ?>%;"></div>
                    <span class="wk-chart__lbl"><?php echo htmlspecialchars($wk); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<!-- LOG NEW OBSERVATION -->
<div class="card">
    <h3><i class="fas fa-plus-circle"></i> Log a new observation</h3>
    <p>Fill this in as soon as you test a query. Weekly Friday review = go through all 48 combinations (8 queries &times; 6 platforms).</p>
    <form class="log" method="post">
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($TOKEN); ?>">
        <label>Query
            <select name="query" required>
                <option value="">Select a query</option>
                <?php foreach ($QUERIES as $k => $v): ?>
                    <option value="<?php echo $k; ?>"><?php echo htmlspecialchars($v); ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>Platform
            <select name="platform" required>
                <option value="">Select a platform</option>
                <?php foreach ($PLATFORMS as $k => $v): ?>
                    <option value="<?php echo $k; ?>"><?php echo htmlspecialchars($v); ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>Position (if cited)
            <input type="number" name="position" min="1" max="20" placeholder="e.g. 3">
        </label>
        <label>Source URL cited
            <input type="url" name="source_url" placeholder="e.g. https://itdgrowthlabs.com/best-jewelry-...">
        </label>
        <label class="full">Notes (competitive intel — who else cited?)
            <textarea name="notes" rows="2" placeholder="e.g. Also cited: Clutch, Webchutney. AI mentioned we lead on D2C jewelry."></textarea>
        </label>
        <label class="full checkbox-row">
            <input type="checkbox" name="cited" value="1" checked style="width:20px; height:20px;">
            <span><strong>Was ITD cited?</strong> &nbsp; (Uncheck if the answer did NOT mention ITD.)</span>
        </label>
        <button type="submit"><i class="fas fa-check"></i> &nbsp; Log observation</button>
    </form>
</div>

<!-- HOW-TO GUIDE -->
<div class="card">
    <h3><i class="fas fa-book"></i> How to test each platform (30 min every Friday)</h3>
    <ol style="margin:0; padding-left:20px;">
        <li><strong>ChatGPT</strong> &mdash; use ChatGPT with web-search ON. Paste the query. Log whether ITD is cited in "Sources".</li>
        <li><strong>Gemini</strong> &mdash; gemini.google.com. Paste the query. Log whether ITD appears in the answer or the "Sources" panel.</li>
        <li><strong>Perplexity</strong> &mdash; perplexity.ai. Paste the query. Log the citations column on the right.</li>
        <li><strong>AI Overviews</strong> &mdash; google.com, paste the query. If Google shows an AI Overview at the top, check its sources.</li>
        <li><strong>Copilot</strong> &mdash; copilot.microsoft.com. Paste the query. Log sources shown.</li>
        <li><strong>Claude</strong> &mdash; claude.ai (needs Pro for web search). Paste the query. Log citations.</li>
    </ol>
    <div class="callout">
        <strong>Pro tip:</strong> Always test in a private/incognito window and log out of accounts to remove personalization. AI answers can vary by profile.
    </div>
</div>

<!-- RECENT LOG -->
<div class="card">
    <h3><i class="fas fa-clock-rotate-left"></i> Recent 20 observations</h3>
    <?php $recent = array_slice(array_reverse($rows), 0, 20); ?>
    <?php if (empty($recent)): ?>
        <p style="color:var(--text-3);">No observations logged yet.</p>
    <?php else: ?>
        <div class="log-rows">
            <?php foreach ($recent as $r): ?>
            <div>
                <span class="d"><?php echo htmlspecialchars($r['date']); ?></span>
                <span class="q"><?php echo htmlspecialchars($QUERIES[$r['query']] ?? $r['query']); ?></span>
                <span class="p"><?php echo htmlspecialchars($PLATFORMS[$r['platform']] ?? $r['platform']); ?></span>
                <span><span class="pill <?php echo $r['cited'] === '1' ? 'ok' : 'no'; ?>"><?php echo $r['cited'] === '1' ? 'Cited' : 'No'; ?></span></span>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

</div>
</body>
</html>
