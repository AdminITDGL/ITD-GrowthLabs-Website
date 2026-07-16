<?php
/**
 * ITD GrowthLabs — IndexNow manual submission console (internal)
 * -------------------------------------------------------------
 * Admin-triggered submission. Requires ?token=... to run.
 * Not indexed. Internal use only.
 *
 * Two modes:
 *   1. ?mode=urls&urls=<comma-separated>  — submit specific URLs
 *   2. ?mode=sitemap                      — submit every URL in sitemap.xml
 *   3. ?mode=recent&days=<n>              — submit URLs modified in last N days (best-effort)
 */
require_once __DIR__ . '/../includes/indexnow.php';

// Shared-secret gate. Change value here to rotate. Passed as ?token=...
$ADMIN_TOKEN = 'itdgl-indexnow-2026-admin-a3f8b2e1';

$submitted = null;
$mode = $_GET['mode'] ?? '';
$token = $_GET['token'] ?? '';
$authorized = hash_equals($ADMIN_TOKEN, $token);

if ($authorized && $mode) {
    $urls = [];
    if ($mode === 'urls' && !empty($_GET['urls'])) {
        $urls = array_filter(array_map('trim', explode(',', $_GET['urls'])));
    } elseif ($mode === 'sitemap') {
        $urls = itdgl_indexnow_urls_from_sitemap();
    } elseif ($mode === 'recent') {
        $days = max(1, (int)($_GET['days'] ?? 7));
        $all = itdgl_indexnow_urls_from_sitemap();
        // Naive filter: read sitemap.xml lastmod, keep URLs newer than N days
        $sitemap = @simplexml_load_file(__DIR__ . '/../sitemap.xml');
        if ($sitemap) {
            $cutoff = time() - ($days * 86400);
            $urls = [];
            foreach ($sitemap->url as $u) {
                $loc = trim((string)$u->loc);
                $mod = strtotime((string)$u->lastmod);
                if ($loc && $mod && $mod >= $cutoff && stripos($loc, 'https://itdgrowthlabs.com/') === 0) {
                    $urls[] = $loc;
                }
            }
        }
    }
    if ($urls) {
        $submitted = itdgl_indexnow_submit($urls);
        $submitted['count'] = count($urls);
        $submitted['sample'] = array_slice($urls, 0, 5);
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>IndexNow Submission Console (Internal)</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
:root{ --bg:#f7fafc; --panel:#ffffff; --line:#e2e8f0; --line-2:#cbd5e1;
    --ink:#0f172a; --text:#334155; --text-2:#64748b; --text-mute:#94a3b8;
    --brand:#1e3a8a; --accent:#3b82f6; --accent-2:#1d4ed8;
    --green:#059669; --green-soft:#d1fae5; --red:#dc2626; --red-soft:#fee2e2;
    --gold:#b45309; --gold-soft:#fef3c7; }
*,*::before,*::after{ box-sizing:border-box; }
html,body{ margin:0; padding:0; background:var(--bg); }
body{ font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
    font-size:15.5px; line-height:1.6; color:var(--text); padding:32px 20px 80px; }
h1,h2,h3,h4{ font-family:'Inter',sans-serif; color:var(--ink); margin:0; letter-spacing:-0.02em; }
.mono{ font-family:'JetBrains Mono',monospace; }
.page{ max-width:900px; margin:0 auto; }
.doc-head{ margin-bottom:32px; padding-bottom:24px; border-bottom:2px solid var(--brand); }
.doc-head .ribbon{ display:inline-flex; align-items:center; gap:8px; padding:5px 12px;
    background:var(--red-soft); color:var(--red); border-radius:14px;
    font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
    letter-spacing:0.14em; text-transform:uppercase; margin-bottom:14px; }
.doc-head h1{ font-size:32px; font-weight:800; margin-bottom:8px; letter-spacing:-0.03em; }
.doc-head p{ font-size:15px; color:var(--text-2); }
.card{ background:var(--panel); border:1px solid var(--line); border-radius:14px;
    padding:24px 26px; margin-bottom:18px; box-shadow:0 2px 8px rgba(15,23,42,0.03); }
.card h3{ font-size:16px; font-weight:800; margin-bottom:12px; color:var(--ink); }
.card p{ margin:0 0 10px; }
.actions{ display:grid; grid-template-columns:repeat(3,1fr); gap:10px; margin-top:12px; }
@media (max-width:640px){ .actions{ grid-template-columns:1fr; } }
.actions a{ padding:12px 16px; border-radius:10px; background:var(--brand); color:#fff;
    text-decoration:none; font-family:'JetBrains Mono',monospace; font-size:11.5px; font-weight:700;
    letter-spacing:0.10em; text-transform:uppercase; text-align:center;
    display:inline-flex; align-items:center; justify-content:center; gap:8px;
    transition:transform .15s ease, box-shadow .15s ease; }
.actions a:hover{ transform:translateY(-2px); box-shadow:0 8px 20px rgba(30,58,138,0.24); }
.actions a.g{ background:var(--green); }
.actions a.o{ background:var(--gold); }
.callout{ padding:14px 18px; border-radius:10px; margin:12px 0;
    border-left:4px solid var(--accent); background:#eff6ff; font-size:14px; color:var(--brand); }
.callout.success{ border-color:var(--green); background:var(--green-soft); color:#064e3b; }
.callout.error{ border-color:var(--red); background:var(--red-soft); color:#7f1d1d; }
pre{ background:#0f172a; color:#e2e8f0; padding:16px 20px; border-radius:10px;
    font-size:12.5px; overflow-x:auto; line-height:1.55; }
code{ background:var(--line); padding:1px 6px; border-radius:4px; font-size:13px; }
ol li{ margin-bottom:6px; }
.pill{ display:inline-block; padding:2px 8px; border-radius:10px;
    font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:700;
    letter-spacing:0.10em; }
.pill.ok{ background:var(--green-soft); color:var(--green); }
.pill.fail{ background:var(--red-soft); color:var(--red); }
</style>
</head>
<body>
<div class="page">

<header class="doc-head">
    <span class="ribbon">Confidential &middot; Internal Tool</span>
    <h1>IndexNow Submission Console</h1>
    <p>Push URLs to Bing / ChatGPT web-search / Copilot / Yandex / Naver / Seznam. Indexing usually happens within minutes-to-hours instead of days.</p>
</header>

<?php if (!$authorized): ?>
    <div class="card">
        <h3>Access</h3>
        <p>This tool is admin-only. Add <code>?token=...</code> to the URL to unlock actions. Token lives in the file &mdash; ask the tech lead if you need it.</p>
    </div>
<?php else: ?>

<?php if ($submitted): ?>
    <div class="callout <?php echo $submitted['ok'] ? 'success' : 'error'; ?>">
        <strong><?php echo $submitted['ok'] ? 'Submitted successfully' : 'Submission failed'; ?></strong> &middot;
        <span class="pill <?php echo $submitted['ok'] ? 'ok' : 'fail'; ?>">HTTP <?php echo $submitted['status']; ?></span>
        &middot; <?php echo $submitted['count']; ?> URLs sent
        <?php if (!empty($submitted['sample'])): ?>
        <details style="margin-top:10px;">
            <summary style="cursor:pointer; font-size:13px;">Show first 5 URLs</summary>
            <pre style="margin-top:8px;"><?php echo htmlspecialchars(implode("\n", $submitted['sample'])); ?></pre>
        </details>
        <?php endif; ?>
        <?php if (!empty($submitted['body'])): ?>
        <details style="margin-top:10px;">
            <summary style="cursor:pointer; font-size:13px;">Show response body</summary>
            <pre style="margin-top:8px;"><?php echo htmlspecialchars($submitted['body']); ?></pre>
        </details>
        <?php endif; ?>
    </div>
<?php endif; ?>

<div class="card">
    <h3>Quick actions</h3>
    <p>All buttons submit to the IndexNow API immediately. Each returns the HTTP status + first 5 URLs sent.</p>
    <div class="actions">
        <a href="?token=<?php echo urlencode($ADMIN_TOKEN); ?>&mode=recent&days=7" class="g">
            &Uparrow; Submit last 7 days
        </a>
        <a href="?token=<?php echo urlencode($ADMIN_TOKEN); ?>&mode=recent&days=30">
            &Uparrow; Submit last 30 days
        </a>
        <a href="?token=<?php echo urlencode($ADMIN_TOKEN); ?>&mode=sitemap" class="o"
           onclick="return confirm('This will submit the entire sitemap (hundreds of URLs). Continue?');">
            &Uparrow; Submit ALL from sitemap
        </a>
    </div>
</div>

<div class="card">
    <h3>Submit specific URLs</h3>
    <form method="get">
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($ADMIN_TOKEN); ?>">
        <input type="hidden" name="mode" value="urls">
        <p style="margin:0 0 10px;">Comma-separated absolute URLs on <code>itdgrowthlabs.com</code>. Max 10,000 per submission.</p>
        <textarea name="urls" rows="3" style="width:100%; padding:12px; border:1px solid var(--line-2); border-radius:8px; font-family:'JetBrains Mono',monospace; font-size:12.5px;"
                  placeholder="https://itdgrowthlabs.com/new-page.php, https://itdgrowthlabs.com/another.php"></textarea>
        <button type="submit" style="margin-top:12px; padding:12px 20px; border:none; border-radius:10px;
                background:var(--brand); color:#fff; font-family:'JetBrains Mono',monospace;
                font-size:11.5px; font-weight:700; letter-spacing:0.10em; text-transform:uppercase; cursor:pointer;">
            Submit URLs
        </button>
    </form>
</div>

<?php endif; ?>

<div class="card">
    <h3>How IndexNow ranking impact works</h3>
    <ol>
        <li><strong>You publish a new page</strong> (e.g. a new /compare/ or niche expertise page).</li>
        <li><strong>Come here + click a submit button</strong> (or the auto-submitter picks it up on the next daily run).</li>
        <li><strong>Bing crawls within minutes-to-hours</strong> instead of days. Index appears in Bing SERP.</li>
        <li><strong>ChatGPT web-search + Microsoft Copilot cite the page</strong> via Bing&rsquo;s live index. Faster AI-search visibility.</li>
        <li><strong>Yandex, Naver, Seznam</strong> also crawl (same IndexNow request pushes to all 5 engines).</li>
    </ol>
    <p style="margin-top:12px;"><strong>Key file:</strong> <code>https://itdgrowthlabs.com/a3f8b2e1c5d9f7a4e6b0c8d2f5a7e9b1c3d5f7a8.txt</code> (this is what IndexNow verifies ownership against).</p>
</div>

<div class="card">
    <h3>Bing Webmaster Tools setup (one-time)</h3>
    <ol>
        <li>Sign in to <a href="https://www.bing.com/webmasters" target="_blank" rel="noopener">Bing Webmaster Tools</a> with the Microsoft account you want to own the site.</li>
        <li>Add site: <code>https://itdgrowthlabs.com</code>. Bing will offer 3 verification options:
            <ul>
                <li><strong>Import from Google Search Console</strong> &mdash; easiest if the site is already verified in GSC.</li>
                <li><strong>Add an XML file to the root</strong> &mdash; download <code>BingSiteAuth.xml</code>, upload to site root.</li>
                <li><strong>Add a meta tag</strong> &mdash; paste into <code>&lt;head&gt;</code> of the homepage.</li>
            </ul>
        </li>
        <li>Submit sitemap: <code>https://itdgrowthlabs.com/sitemap.xml</code></li>
        <li>Verify IndexNow key file is reachable: <a href="/a3f8b2e1c5d9f7a4e6b0c8d2f5a7e9b1c3d5f7a8.txt" target="_blank">/a3f8b2e1c5d9f7a4e6b0c8d2f5a7e9b1c3d5f7a8.txt</a></li>
        <li>In Bing WMT &rarr; <strong>Settings &rarr; API Access &rarr; IndexNow</strong>, confirm the key we&rsquo;re using: <code>a3f8b2e1c5d9f7a4e6b0c8d2f5a7e9b1c3d5f7a8</code></li>
    </ol>
</div>

<div class="card">
    <h3>Cron / automation (optional)</h3>
    <p>Curl this endpoint from a nightly cron to auto-submit recently modified pages:</p>
    <pre>curl -sS "https://itdgrowthlabs.com/internal/indexnow-submit.php?token=<?php echo htmlspecialchars($ADMIN_TOKEN); ?>&amp;mode=recent&amp;days=1"</pre>
    <p style="margin-top:10px; font-size:13px; color:var(--text-mute);">Runs safely if there are no recent URLs (returns success with 0 count).</p>
</div>

</div>
</body>
</html>
