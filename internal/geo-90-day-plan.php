<?php
/**
 * ITD GrowthLabs — 90-day GEO (Generative Engine Optimization) Action Plan
 * -----------------------------------------------------------------------
 * Internal strategy doc. Prepared 2026-07-06.
 * Goal: rank on ChatGPT / Gemini / Perplexity / AI Overviews for
 * commercial "top X in Y" queries within 90 days on niche keywords,
 * lay foundation for hero keywords in months 3-9.
 *
 * NOT indexed. Internal team reference only.
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>ITD GrowthLabs — 90-Day GEO Action Plan (Internal)</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root{
    --bg:#ffffff; --paper:#fafbfc;
    --line:#e5e7eb; --line-2:#d1d5db;
    --brand:#0f2543; --accent:#1e40af; --accent-2:#1d4ed8; --accent-soft:#dbeafe;
    --text:#0f2543; --text-2:#334155; --text-3:#4b5563; --text-4:#6b7280; --text-mute:#9ca3af;
    --red:#b91c1c; --red-soft:#fee2e2;
    --green:#059669; --green-soft:#d1fae5;
    --gold:#b45309; --gold-soft:#fef3c7;
    --purple:#7c3aed; --purple-soft:#ede9fe;
}
*,*::before,*::after{ box-sizing:border-box; }
html,body{ margin:0; padding:0; }
body{ font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
      font-size:16px; line-height:1.65; color:var(--text-2); background:var(--paper);
      -webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale; }
h1,h2,h3,h4,h5,h6{ font-family:'Inter',sans-serif; font-weight:700; letter-spacing:-0.02em;
      color:var(--text); margin:0; line-height:1.2; }
p{ margin:0 0 12px; color:var(--text-3); }
a{ color:var(--accent-2); text-decoration:none; }
a:hover{ text-decoration:underline; }
.mono{ font-family:'JetBrains Mono','Menlo',monospace; }
::selection{ background:var(--accent-soft); color:var(--accent-2); }

/* Layout */
.page{ max-width:1180px; margin:0 auto; padding:40px 28px 80px; }
.doc-head{ margin-bottom:44px; padding-bottom:32px; border-bottom:2px solid var(--brand); }
.doc-head__ribbon{ display:inline-flex; align-items:center; gap:10px; padding:6px 12px;
      background:var(--red-soft); color:var(--red); border-radius:20px;
      font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; margin-bottom:20px; }
.doc-head__ribbon::before{ content:''; width:6px; height:6px; border-radius:50%; background:var(--red); }
.doc-head h1{ font-size:clamp(30px,4.5vw,44px); line-height:1.1; margin-bottom:14px; letter-spacing:-0.03em; }
.doc-head .lead{ font-size:17px; color:var(--text-3); max-width:800px; line-height:1.55; }
.doc-head__meta{ margin-top:22px; display:flex; gap:24px; flex-wrap:wrap;
      font-family:'JetBrains Mono',monospace; font-size:11.5px; color:var(--text-4);
      letter-spacing:0.08em; text-transform:uppercase; }
.doc-head__meta span strong{ color:var(--brand); font-weight:700; }

/* TOC */
.toc{ background:var(--bg); border:1px solid var(--line); border-radius:14px;
      padding:22px 26px; margin-bottom:44px; }
.toc h4{ font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:700;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-4); margin-bottom:14px; }
.toc__list{ display:grid; grid-template-columns:repeat(3,1fr); gap:8px 20px; }
.toc__list a{ font-size:13.5px; padding:4px 0; color:var(--text-2); display:flex; gap:8px; }
.toc__list a:hover{ color:var(--accent-2); }
.toc__list a .n{ font-family:'JetBrains Mono',monospace; color:var(--text-mute); font-size:11px;
      padding-top:2px; }
@media (max-width:900px){ .toc__list{ grid-template-columns:1fr; } }

/* Section */
.section{ margin-bottom:56px; }
.section__num{ font-family:'JetBrains Mono',monospace; font-size:12px; font-weight:600;
      letter-spacing:0.16em; color:var(--accent); text-transform:uppercase; margin-bottom:10px;
      display:flex; align-items:center; gap:12px; }
.section__num::before{ content:''; width:32px; height:1px; background:var(--accent); }
.section > h2{ font-size:clamp(24px,3.4vw,32px); line-height:1.18; margin-bottom:14px; letter-spacing:-0.025em; }
.section > .lead{ font-size:15.5px; color:var(--text-3); max-width:840px; margin-bottom:24px; line-height:1.6; }

/* Phase card */
.phase-card{ background:var(--bg); border:1px solid var(--line); border-radius:16px;
      margin-bottom:22px; overflow:hidden; }
.phase-card__head{ padding:22px 26px; background:var(--brand); color:#fff;
      display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px; }
.phase-card__head h3{ color:#fff; font-size:20px; letter-spacing:-0.02em; }
.phase-card__head .wk{ font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:600;
      letter-spacing:0.14em; opacity:0.75; text-transform:uppercase; }
.phase-card__objective{ padding:16px 26px; background:var(--accent-soft); color:var(--accent-2);
      font-size:14px; font-weight:600; border-bottom:1px solid var(--line); }
.phase-card__body{ padding:24px 26px 20px; }
.phase-card__metric{ margin-top:6px; padding:14px 20px; background:var(--green-soft);
      border-top:1px solid var(--line);
      font-size:13.5px; color:var(--brand); display:flex; gap:10px; align-items:flex-start; }
.phase-card__metric strong{ font-family:'JetBrains Mono',monospace; font-size:10.5px;
      font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:var(--green);
      flex-shrink:0; padding-top:2px; }

/* Action item */
.action{ padding:14px 0; border-bottom:1px solid var(--line); }
.action:last-child{ border-bottom:0; }
.action__title{ display:flex; align-items:baseline; gap:12px; margin-bottom:6px; }
.action__num{ font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:700;
      color:var(--text-mute); letter-spacing:0.1em; min-width:34px; }
.action__title h4{ font-size:15px; letter-spacing:-0.01em; color:var(--text); }
.action__desc{ font-size:13.5px; color:var(--text-3); line-height:1.55;
      margin:0 0 8px 46px; }
.action__meta{ margin-left:46px; display:flex; gap:14px; flex-wrap:wrap;
      font-family:'JetBrains Mono',monospace; font-size:10.5px;
      letter-spacing:0.08em; text-transform:uppercase; color:var(--text-4); }
.action__meta span strong{ color:var(--brand); font-weight:700; }
.action__meta .owner-marketing strong{ color:var(--purple); }
.action__meta .owner-seo      strong{ color:var(--accent); }
.action__meta .owner-founder  strong{ color:var(--gold); }
.action__meta .owner-content  strong{ color:var(--green); }
.action__meta .owner-tech     strong{ color:var(--red); }
@media (max-width:600px){
    .action__desc, .action__meta{ margin-left:0; }
}

/* Table */
.tbl{ width:100%; border-collapse:separate; border-spacing:0; margin:12px 0 20px;
      background:var(--bg); border:1px solid var(--line); border-radius:12px; overflow:hidden;
      font-size:13.5px; }
.tbl th, .tbl td{ padding:11px 14px; text-align:left; border-bottom:1px solid var(--line);
      vertical-align:top; }
.tbl th{ background:var(--paper); font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; color:var(--text-4);
      font-family:'JetBrains Mono',monospace; }
.tbl tr:last-child td{ border-bottom:0; }
.tbl .pill{ display:inline-block; padding:2px 8px; border-radius:10px;
      font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:600;
      letter-spacing:0.06em; }
.pill.h{ background:var(--red-soft); color:var(--red); }
.pill.m{ background:var(--gold-soft); color:var(--gold); }
.pill.l{ background:var(--green-soft); color:var(--green); }

/* KPI grid */
.kpi{ display:grid; grid-template-columns:repeat(4,1fr); gap:12px; margin:12px 0 24px; }
.kpi__item{ background:var(--bg); border:1px solid var(--line); border-radius:12px; padding:16px 18px; }
.kpi__label{ font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:500;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-mute); margin-bottom:6px; }
.kpi__value{ font-size:24px; font-weight:700; color:var(--brand); letter-spacing:-0.02em; line-height:1.05; }
.kpi__unit{ font-size:14px; color:var(--text-4); font-weight:500; }
.kpi__delta{ font-family:'JetBrains Mono',monospace; font-size:11px; color:var(--green);
      margin-top:2px; letter-spacing:0.06em; }
@media (max-width:800px){ .kpi{ grid-template-columns:repeat(2,1fr); } }

/* Callout */
.callout{ padding:16px 22px; border-radius:12px; margin:16px 0 24px;
      border-left:4px solid var(--accent); background:var(--accent-soft); }
.callout__label{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; color:var(--accent); margin-bottom:6px; }
.callout p{ font-size:14px; color:var(--brand); margin:0; }
.callout.warning{ border-color:var(--red); background:var(--red-soft); }
.callout.warning .callout__label{ color:var(--red); }
.callout.success{ border-color:var(--green); background:var(--green-soft); }
.callout.success .callout__label{ color:var(--green); }

/* Priority hero */
.priority-hero{ margin:20px 0 32px; padding:26px 30px;
      background:linear-gradient(135deg,var(--brand) 0%,var(--accent) 100%); color:#fff;
      border-radius:16px; }
.priority-hero h3{ color:#fff; font-size:22px; margin-bottom:8px; }
.priority-hero p{ color:rgba(255,255,255,0.85); font-size:14.5px; }
.priority-hero__row{ display:grid; grid-template-columns:repeat(3,1fr); gap:16px; margin-top:20px; }
.priority-hero__cell{ padding:14px 16px; background:rgba(255,255,255,0.08); border-radius:10px; }
.priority-hero__cell strong{ font-family:'JetBrains Mono',monospace; font-size:10px;
      letter-spacing:0.14em; text-transform:uppercase; opacity:0.7; display:block; margin-bottom:4px; }
.priority-hero__cell span{ font-size:14.5px; color:#fff; font-weight:600; }
@media (max-width:700px){ .priority-hero__row{ grid-template-columns:1fr; } }

/* Ongoing weekly grid */
.weekly{ display:grid; grid-template-columns:repeat(2,1fr); gap:12px; }
.weekly__item{ background:var(--bg); border:1px solid var(--line); border-radius:11px;
      padding:14px 16px; display:flex; gap:12px; align-items:flex-start; }
.weekly__ico{ width:34px; height:34px; border-radius:9px; background:var(--paper);
      border:1px solid var(--line); display:flex; align-items:center; justify-content:center;
      color:var(--brand); font-size:14px; flex-shrink:0; }
.weekly__txt strong{ font-size:14px; color:var(--text); display:block; margin-bottom:2px; }
.weekly__txt p{ font-size:12.5px; color:var(--text-4); margin:0; line-height:1.5; }
@media (max-width:700px){ .weekly{ grid-template-columns:1fr; } }

/* Print helper */
@media print{
    .toc, .doc-head__ribbon{ display:none; }
    body{ background:#fff; font-size:12px; }
    .page{ padding:0; max-width:100%; }
    .section, .phase-card{ page-break-inside:avoid; }
    .priority-hero{ background:var(--brand) !important; -webkit-print-color-adjust:exact; print-color-adjust:exact; }
}
</style>
</head>
<body>
<div class="page">

<!-- =====================================================
     DOC HEAD
     ===================================================== -->
<header class="doc-head">
    <div class="doc-head__ribbon">Confidential &middot; Internal Strategy Doc</div>
    <h1>90-Day GEO Action Plan &mdash; ITD GrowthLabs</h1>
    <p class="lead">A practical roadmap to earn citations on ChatGPT, Gemini, Perplexity and Google AI Overviews for our target commercial keywords &mdash; while laying the foundation for Google organic ranking on the harder hero terms over months 3&ndash;9.</p>
    <div class="doc-head__meta">
        <span>Prepared By <strong>Strategy Team</strong></span>
        <span>Owner <strong>Prashant + Loy</strong></span>
        <span>Effective <strong>2026-07-06</strong></span>
        <span>Review <strong>Weekly &middot; Fridays 4pm IST</strong></span>
        <span>Version <strong>v1.0</strong></span>
    </div>
</header>

<!-- =====================================================
     TABLE OF CONTENTS
     ===================================================== -->
<nav class="toc" aria-label="Table of Contents">
    <h4>Contents</h4>
    <div class="toc__list">
        <a href="#context"><span class="n">01</span> Context &amp; What We're Solving</a>
        <a href="#priority-keywords"><span class="n">02</span> Priority Keywords &mdash; Winnable First</a>
        <a href="#how-ai-ranks"><span class="n">03</span> How AI Platforms Actually Rank</a>
        <a href="#phase-1"><span class="n">04</span> Phase 1 &middot; Weeks 1&ndash;4 &middot; Foundation</a>
        <a href="#phase-2"><span class="n">05</span> Phase 2 &middot; Weeks 5&ndash;8 &middot; Content + Backlinks</a>
        <a href="#phase-3"><span class="n">06</span> Phase 3 &middot; Weeks 9&ndash;12 &middot; Amplification</a>
        <a href="#ongoing"><span class="n">07</span> Ongoing Weekly Rhythm</a>
        <a href="#kpis"><span class="n">08</span> KPIs &amp; What Success Looks Like</a>
        <a href="#owners"><span class="n">09</span> Owners &amp; Governance</a>
    </div>
</nav>

<!-- =====================================================
     01 — CONTEXT
     ===================================================== -->
<section class="section" id="context">
    <div class="section__num">01</div>
    <h2>Context: what we're actually solving.</h2>
    <p class="lead">Google organic is a 12&ndash;24 month game against 10-year-old agencies. AI platforms (ChatGPT, Gemini, Perplexity) are a 60&ndash;90 day game IF we play them right. This plan runs both tracks in parallel &mdash; front-loaded on AI wins because they compound faster.</p>

    <div class="priority-hero">
        <h3>The 90-day thesis</h3>
        <p>Pick 6&ndash;8 <strong style="color:#fff;">winnable</strong> keywords. Own them via aggregator listings + niche content + third-party mentions. Convert those wins into case studies and reviews that attack the harder hero terms in months 3&ndash;9.</p>
        <div class="priority-hero__row">
            <div class="priority-hero__cell"><strong>Track A</strong><span>AI-platform citations</span></div>
            <div class="priority-hero__cell"><strong>Track B</strong><span>Google page 1 (niche)</span></div>
            <div class="priority-hero__cell"><strong>Track C</strong><span>Foundation for hero terms</span></div>
        </div>
    </div>

    <div class="callout warning">
        <div class="callout__label">Do not attempt in 90 days</div>
        <p>&quot;Top Digital Marketing Company in India&quot; is a national query with ₹Cr-scale competition. Any budget or effort spent trying to rank #1 in 90 days will be wasted. This term is a month 12&ndash;24 target &mdash; it needs foundation we haven't built yet.</p>
    </div>
</section>

<!-- =====================================================
     02 — PRIORITY KEYWORDS
     ===================================================== -->
<section class="section" id="priority-keywords">
    <div class="section__num">02</div>
    <h2>Priority keywords &mdash; where to plant our flag.</h2>
    <p class="lead">The 13 keywords we asked about, ranked by realistic 90-day winnability and expected ROI.</p>

    <table class="tbl">
        <thead><tr><th>#</th><th>Keyword</th><th>Winnability</th><th>Google Timeline</th><th>AI Citation Potential</th><th>Priority</th></tr></thead>
        <tbody>
            <tr><td class="mono">01</td><td><strong>Top Jewelry Digital Marketing Agency</strong></td><td><span class="pill l">Winnable</span></td><td>6&ndash;9 mo</td><td>High</td><td><strong>P0</strong></td></tr>
            <tr><td class="mono">02</td><td><strong>Top Beauty Digital Marketing Agency</strong></td><td><span class="pill l">Winnable</span></td><td>6&ndash;9 mo</td><td>High</td><td><strong>P0</strong></td></tr>
            <tr><td class="mono">03</td><td><strong>Top Web Design Agency in Gurgaon</strong></td><td><span class="pill l">Winnable</span></td><td>6&ndash;12 mo</td><td>High</td><td><strong>P0</strong></td></tr>
            <tr><td class="mono">04</td><td>Top Mobile App Development Company in Hyderabad</td><td><span class="pill m">Medium</span></td><td>9&ndash;15 mo</td><td>Medium&ndash;High</td><td>P1</td></tr>
            <tr><td class="mono">05</td><td>Top Mobile App Development Company in Bangalore</td><td><span class="pill m">Medium</span></td><td>9&ndash;15 mo</td><td>Medium</td><td>P1</td></tr>
            <tr><td class="mono">06</td><td>Top Website Design Company in Mumbai</td><td><span class="pill m">Medium</span></td><td>9&ndash;15 mo</td><td>Medium</td><td>P1</td></tr>
            <tr><td class="mono">07</td><td>Top Website Design Company in Bangalore</td><td><span class="pill m">Medium</span></td><td>9&ndash;15 mo</td><td>Medium</td><td>P1</td></tr>
            <tr><td class="mono">08</td><td>Top Website Development Company in Delhi</td><td><span class="pill m">Medium</span></td><td>9&ndash;15 mo</td><td>Medium</td><td>P1</td></tr>
            <tr><td class="mono">09</td><td>Top Mobile App Development Company in Mumbai</td><td><span class="pill m">Medium</span></td><td>9&ndash;15 mo</td><td>Medium</td><td>P1</td></tr>
            <tr><td class="mono">10</td><td>Top Mobile App Development Company in Delhi</td><td><span class="pill m">Medium</span></td><td>9&ndash;15 mo</td><td>Medium</td><td>P1</td></tr>
            <tr><td class="mono">11</td><td>Top 10 Digital Marketing Agencies in Mumbai</td><td><span class="pill h">Hard</span></td><td>18&ndash;24 mo</td><td>Medium (via aggregators)</td><td>P2</td></tr>
            <tr><td class="mono">12</td><td>Best SEO Company in Mumbai</td><td><span class="pill h">Hard</span></td><td>12&ndash;18 mo</td><td>Medium</td><td>P2</td></tr>
            <tr><td class="mono">13</td><td>Top Digital Marketing Company in India</td><td><span class="pill h">Very hard</span></td><td>24+ mo</td><td>Low</td><td>P3 (defer)</td></tr>
        </tbody>
    </table>

    <div class="callout">
        <div class="callout__label">90-day flag</div>
        <p>Focus all P0 firepower on <strong>Jewelry Digital Marketing</strong>, <strong>Beauty Digital Marketing</strong>, and <strong>Web Design Gurgaon</strong>. These three can genuinely convert to #1&ndash;3 Google + AI citations inside 90 days. Everything else is background foundation work.</p>
    </div>
</section>

<!-- =====================================================
     03 — HOW AI PLATFORMS RANK
     ===================================================== -->
<section class="section" id="how-ai-ranks">
    <div class="section__num">03</div>
    <h2>How ChatGPT / Gemini / Perplexity / AI Overviews actually rank.</h2>
    <p class="lead">Not the same as Google. Understanding this changes what we spend time on.</p>

    <table class="tbl">
        <thead><tr><th>Platform</th><th>What it uses</th><th>Signal we can influence</th><th>Fastest lever</th></tr></thead>
        <tbody>
            <tr><td><strong>ChatGPT (with web search)</strong></td><td>Bing SERP + trained knowledge</td><td>Bing indexation + Bing-friendly schema + brand mentions in trained corpora</td><td>Get on Clutch/DesignRush top lists</td></tr>
            <tr><td><strong>Gemini / Google AI Overviews</strong></td><td>Google SERP + Knowledge Graph</td><td>Structured data, E-E-A-T, review signals, brand entity</td><td>AggregateRating schema + Person schema + reviews</td></tr>
            <tr><td><strong>Perplexity</strong></td><td>Multiple search engines + citations of listicles / blogs</td><td>Long-form structured content, comparison pages, forum mentions</td><td>&quot;Top 10&quot; listicles + reddit/quora presence</td></tr>
            <tr><td><strong>Claude (with web search)</strong></td><td>Search + trained corpora</td><td>Similar to ChatGPT + rewards clarity of primary sources</td><td>Clean site + <span class="mono">llms.txt</span> + expert bylines</td></tr>
            <tr><td><strong>Grok / Copilot</strong></td><td>Bing + own crawler</td><td>Same as ChatGPT plus X/social mentions</td><td>Founders active on X + verified accounts</td></tr>
        </tbody>
    </table>

    <div class="callout success">
        <div class="callout__label">The shortcut</div>
        <p>Being ranked <strong>#3 on Clutch's Mumbai Digital Marketing list</strong> is worth 10&times; more for AI citation than being <strong>#1 on our own /digital-marketing-services.php page</strong>. Aggregators are what LLMs quote. Spend most of the &quot;visibility budget&quot; there first.</p>
    </div>
</section>

<!-- =====================================================
     04 — PHASE 1 (Weeks 1-4)
     ===================================================== -->
<section class="section" id="phase-1">
    <div class="section__num">04</div>
    <h2>Phase 1 &middot; Foundation.</h2>
    <p class="lead">Get citable presence live where LLMs already look. Nothing here needs new content &mdash; it's plumbing.</p>

    <div class="phase-card">
        <div class="phase-card__head">
            <h3>Weeks 1&ndash;4 &middot; Foundation</h3>
            <span class="wk">04 weeks &middot; ~120 hours effort</span>
        </div>
        <div class="phase-card__objective">Objective: Every aggregator, GBP, and technical SEO baseline live &amp; healthy.</div>
        <div class="phase-card__body">

            <div class="action">
                <div class="action__title"><span class="action__num">01</span><h4>Clutch India profile &mdash; complete + 10 verified reviews requested</h4></div>
                <p class="action__desc">Full profile with services, industries served, team size, hourly rate range, portfolio. Then request 10 existing clients for reviews (Clutch has a 15-min structured phone interview process for verification). Target 8 completed reviews by end of week 4.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>18h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">02</span><h4>GoodFirms Mumbai profile + 5 reviews</h4></div>
                <p class="action__desc">Second-largest aggregator LLMs cite after Clutch. Free listing, no premium needed for initial visibility. Same 5 clients approached in step 01 can leave GoodFirms reviews too (different UX &mdash; email link).</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>8h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">03</span><h4>DesignRush &mdash; apply to 3 categories</h4></div>
                <p class="action__desc">Categories: Digital Marketing Agency, Web Design Agency, Mobile App Development Company. DesignRush has editorial &quot;top X in Y city&quot; listicles that ChatGPT + Perplexity cite by default. Application requires portfolio + case studies + team profile.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>10h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">04</span><h4>The Manifest + Sortlist + Business of Apps listings</h4></div>
                <p class="action__desc">Three secondary aggregators still cited by LLMs. Free listings with basic profile info. Batch this in one session &mdash; same content repurposed.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>6h</strong></span><span>Priority <strong>P1</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">05</span><h4>Google Business Profile &mdash; Mumbai (primary) + 4 service areas</h4></div>
                <p class="action__desc">Mumbai profile with real Andheri address, hours, phone. Service-area profiles for Bangalore, Delhi, Hyderabad, Gurgaon (no fake addresses &mdash; use &quot;serving [city]&quot; format). Upload 15 photos each: office, team, project screenshots. Post weekly updates.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>12h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">06</span><h4>India directory citations &mdash; JustDial, IndiaMART, Sulekha, UrbanClap Business</h4></div>
                <p class="action__desc">Local citations still matter for LocalBusiness signal. Consistent NAP (Name, Address, Phone) across every citation. Batch entry via a citation-management tool or agency.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>8h</strong></span><span>Priority <strong>P1</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">07</span><h4>Structured data audit + rollout</h4></div>
                <p class="action__desc">Ship Service schema per offering (with areaServed), AggregateRating tied to Clutch/GBP once live, Person schema for team.php leaders (E-E-A-T signal), verify Article schema on all 640+ blogs. Highest LLM-citation lift per hour of engineering time.</p>
                <div class="action__meta"><span class="owner-tech">Owner <strong>Tech / SEO</strong></span><span>Effort <strong>20h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">08</span><h4>Technical SEO baseline</h4></div>
                <p class="action__desc">Sitemap health check (all 800+ URLs), robots.txt clean, canonical tags correct, `llms.txt` + `llms-full.txt` present &amp; current, Core Web Vitals baseline (LCP &lt; 2.5s, CLS &lt; 0.1, INP &lt; 200ms) via CrUX field data.</p>
                <div class="action__meta"><span class="owner-tech">Owner <strong>Tech</strong></span><span>Effort <strong>8h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">09</span><h4>Bing Webmaster Tools + IndexNow setup</h4></div>
                <p class="action__desc">ChatGPT reads Bing's index. Registering with Bing Webmaster Tools + IndexNow protocol pushes every new page to Bing in seconds. Zero cost, high ROI for AI ranking.</p>
                <div class="action__meta"><span class="owner-tech">Owner <strong>Tech</strong></span><span>Effort <strong>3h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">10</span><h4>Founder profiles on X, LinkedIn Sales Navigator, Crunchbase</h4></div>
                <p class="action__desc">Prashant + Loy verified on X (blue check optional but helpful for Grok/Copilot signals). LinkedIn co-founder bylines. Crunchbase company entry with founding date, funding, team. Wikidata entity claim submitted (careful notability requirements).</p>
                <div class="action__meta"><span class="owner-founder">Owner <strong>Founders</strong></span><span>Effort <strong>6h</strong></span><span>Priority <strong>P1</strong></span></div>
            </div>

        </div>
        <div class="phase-card__metric"><strong>Success Metric</strong>
            All 8 aggregator profiles live, 15+ verified reviews across them, GBP for 5 cities live, structured data schemas shipped, Bing indexation confirmed for 500+ pages. <em>End state:</em> LLMs have primary-source data about ITD to cite.
        </div>
    </div>
</section>

<!-- =====================================================
     05 — PHASE 2 (Weeks 5-8)
     ===================================================== -->
<section class="section" id="phase-2">
    <div class="section__num">05</div>
    <h2>Phase 2 &middot; Content + Backlinks.</h2>
    <p class="lead">Publish the content LLMs will cite, earn the backlinks that establish authority, seed the third-party mentions that train future LLM checkpoints.</p>

    <div class="phase-card">
        <div class="phase-card__head">
            <h3>Weeks 5&ndash;8 &middot; Content + Backlinks</h3>
            <span class="wk">04 weeks &middot; ~150 hours effort</span>
        </div>
        <div class="phase-card__objective">Objective: Publish 8 niche expertise pages, land 3 guest posts, ship 3 comparison pages, earn 20+ high-quality backlinks.</div>
        <div class="phase-card__body">

            <div class="action">
                <div class="action__title"><span class="action__num">01</span><h4>Enhance 3 P0 winnable pages with case study + review + FAQ blocks</h4></div>
                <p class="action__desc">Take the existing pages for jewelry, beauty, and Gurgaon web design. Add: 3 case studies (with client permission + real metrics), embedded Clutch/GBP review widget, 20-question FAQ block with FAQPage schema, comparison table vs generic agencies, video (60-90s founder pitch).</p>
                <div class="action__meta"><span class="owner-content">Owner <strong>Content</strong></span><span>Effort <strong>28h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">02</span><h4>Publish 5 new industry expertise pages</h4></div>
                <p class="action__desc">Pages: (a) Top Cosmetics Brand Marketing India, (b) Top D2C Marketing Agency Mumbai, (c) Best SEO for D2C Brands India, (d) Top Ecommerce Development Mumbai, (e) Top Fashion &amp; Apparel Digital Marketing India. Each: 2500+ words, real case study, FAQ schema, LocalBusiness/Service schema, embed on Cluster nav.</p>
                <div class="action__meta"><span class="owner-content">Owner <strong>Content</strong></span><span>Effort <strong>40h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">03</span><h4>3 Competitor comparison pages: ITD vs Webchutney, vs Watconsult, vs Schbang</h4></div>
                <p class="action__desc">Structured for AI citation: feature matrix, pricing transparency, honest &quot;when to pick them vs us&quot; guidance. LLMs love these because they're citable, comparative, primary-source. Add ComparisonSchema markup where valid.</p>
                <div class="action__meta"><span class="owner-content">Owner <strong>Content / SEO</strong></span><span>Effort <strong>24h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">04</span><h4>Guest posts on 5 India publications</h4></div>
                <p class="action__desc">Pitch angles: <em>Inc42</em> &mdash; &quot;State of D2C marketing India 2026&quot;; <em>YourStory</em> &mdash; jewelry brand case study; <em>Storyboard18</em> &mdash; beauty campaign teardown; <em>AfaqS</em> &mdash; D2C playbook; <em>Business Standard</em> &mdash; GST + D2C column. Each gets an author byline linking back to /team.php profile.</p>
                <div class="action__meta"><span class="owner-founder">Owner <strong>Founders + Content</strong></span><span>Effort <strong>36h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">05</span><h4>5 client case studies published with logo + metrics</h4></div>
                <p class="action__desc">Pick 5 recent wins &mdash; 2 in D2C (jewelry/beauty), 1 mobile app, 1 website design, 1 SEO. Each case study: 1500 words, real KPI numbers, client quote, before/after metrics, screenshots. Publish under /case-studies/. Add CaseStudy structured data.</p>
                <div class="action__meta"><span class="owner-content">Owner <strong>Content</strong></span><span>Effort <strong>25h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">06</span><h4>HARO / SourceBottle / Qwoted &mdash; 15 pitches per week</h4></div>
                <p class="action__desc">Journalist-response services. Every quote landed = one high-authority backlink from a publication that LLMs trained on. Aim for 2 published mentions per week (30%+ hit rate on quality pitches).</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>16h</strong></span><span>Priority <strong>P1</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">07</span><h4>Founder LinkedIn content &mdash; 1 post/week each (Prashant + Loy)</h4></div>
                <p class="action__desc">Not marketing posts. Expertise posts: case study micro-teardowns, D2C observations, technical explainers. LinkedIn feeds several LLMs (Copilot especially) and builds founder authority signal (E-E-A-T).</p>
                <div class="action__meta"><span class="owner-founder">Owner <strong>Founders</strong></span><span>Effort <strong>8h</strong></span><span>Priority <strong>P1</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">08</span><h4>Reddit + Quora natural presence</h4></div>
                <p class="action__desc">Answer 5 questions per week on Quora + 3 subreddits (r/IndiaMarketing, r/entrepreneur, r/DigitalMarketing). No spam links &mdash; genuine expertise, occasional mention of ITD when relevant. Perplexity heavily cites these platforms.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>10h</strong></span><span>Priority <strong>P2</strong></span></div>
            </div>

        </div>
        <div class="phase-card__metric"><strong>Success Metric</strong>
            3 guest posts published (bylined, dofollow backlink), 5 case studies live, 3 comparison pages live, 8 niche expertise pages live, 20+ new backlinks earned, LinkedIn founder posts averaging 500+ views. <em>End state:</em> LLMs have citable content to quote when someone asks &quot;top X in Y&quot;.
        </div>
    </div>
</section>

<!-- =====================================================
     06 — PHASE 3 (Weeks 9-12)
     ===================================================== -->
<section class="section" id="phase-3">
    <div class="section__num">06</div>
    <h2>Phase 3 &middot; Amplification.</h2>
    <p class="lead">Convert the foundation + content into visible LLM citations, Google movement, and inbound leads. Prove the play works.</p>

    <div class="phase-card">
        <div class="phase-card__head">
            <h3>Weeks 9&ndash;12 &middot; Amplification</h3>
            <span class="wk">04 weeks &middot; ~130 hours effort</span>
        </div>
        <div class="phase-card__objective">Objective: LLM citations verified, Google page 1 for 4+ niche keywords, inbound leads attributed to organic + AI.</div>
        <div class="phase-card__body">

            <div class="action">
                <div class="action__title"><span class="action__num">01</span><h4>Podcast appearances &mdash; book 3 slots</h4></div>
                <p class="action__desc">Target podcasts: <em>D2C India Podcast</em>, <em>Growth Marketing Podcast</em>, <em>The Startup Operator</em>. Each appearance = show-notes backlink + episode transcript indexed by LLMs. Audio-to-text transcripts get crawled + cited.</p>
                <div class="action__meta"><span class="owner-founder">Owner <strong>Founders</strong></span><span>Effort <strong>18h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">02</span><h4>Original research report &mdash; &quot;State of D2C Marketing India 2026&quot;</h4></div>
                <p class="action__desc">30-page data-driven report with proprietary insights (survey 50+ D2C brands, publish anonymized findings). Gated download + open press release. Every citation of the data becomes a citation of ITD. This is the highest-leverage single asset for authority.</p>
                <div class="action__meta"><span class="owner-content">Owner <strong>Content + Marketing</strong></span><span>Effort <strong>35h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">03</span><h4>Press release &mdash; distribute to 20 India business outlets</h4></div>
                <p class="action__desc">Angles: (a) launch of the D2C research report, (b) major client win, (c) team growth to 30+. Distribute via PR Newswire India, Business Wire India, or dedicated PR agency. Each pickup = branded mention across news sites LLMs crawl.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>10h</strong></span><span>Priority <strong>P1</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">04</span><h4>Client-side case studies &mdash; 5 clients publish on their own blog</h4></div>
                <p class="action__desc">Give each client a co-authored case study draft &mdash; they publish on their blog / LinkedIn. Third-party attestation is worth 10&times; self-published. Clients happy to share their success story, especially D2C brands.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing + Founders</strong></span><span>Effort <strong>15h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">05</span><h4>Review velocity &mdash; reach 30+ across Clutch + GoodFirms + GBP</h4></div>
                <p class="action__desc">Systematic ask every project completion. Google Business Profile reviews are especially high-value (feed AI Overviews directly). Clutch verified reviews trigger &quot;Top Companies&quot; badge which LLMs cite as ranking signal.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>12h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">06</span><h4>Speaking gigs &mdash; 2 industry conferences booked</h4></div>
                <p class="action__desc">Target: D2C Summit India, TIECon, YourStory TechSparks, Nasscom D2C forums. Speaking = LinkedIn buzz + event site listing + attendee mentions. Also good for founder authority signal.</p>
                <div class="action__meta"><span class="owner-founder">Owner <strong>Founders</strong></span><span>Effort <strong>16h</strong></span><span>Priority <strong>P1</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">07</span><h4>LLM citation tracking &mdash; weekly check</h4></div>
                <p class="action__desc">Weekly manual + tool-based check on ChatGPT, Gemini, Perplexity for our 8 P0 keywords. Track: are we cited? At what position? What source is doing the citing? Tools: Otterly.AI, HubSpot AI Search Grader, or manual spreadsheet.</p>
                <div class="action__meta"><span class="owner-seo">Owner <strong>SEO / Marketing</strong></span><span>Effort <strong>8h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">08</span><h4>Wikipedia entity claim &mdash; if notability threshold met</h4></div>
                <p class="action__desc">Only attempt after 3+ major press mentions from Phase 2/3 provide notability. Wikipedia entry for ITD Services (parent) with citations to Business Standard, Inc42, YourStory. Wikipedia entities feed Google Knowledge Graph directly.</p>
                <div class="action__meta"><span class="owner-marketing">Owner <strong>Marketing</strong></span><span>Effort <strong>10h</strong></span><span>Priority <strong>P2</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">09</span><h4>llms-full.txt refresh with case studies + research report</h4></div>
                <p class="action__desc">Update the LLM context file with new case studies, updated stats, D2C research findings, client roster. LLMs training in H2 2026 will pick up this content.</p>
                <div class="action__meta"><span class="owner-content">Owner <strong>Content</strong></span><span>Effort <strong>4h</strong></span><span>Priority <strong>P1</strong></span></div>
            </div>

            <div class="action">
                <div class="action__title"><span class="action__num">10</span><h4>90-day retrospective + phase-4 plan</h4></div>
                <p class="action__desc">Full review of KPIs (see section 08). What worked, what didn't, what to double down on for days 90&ndash;180. Rebalance priorities based on data. Present findings to leadership.</p>
                <div class="action__meta"><span class="owner-founder">Owner <strong>Founders + SEO</strong></span><span>Effort <strong>8h</strong></span><span>Priority <strong>P0</strong></span></div>
            </div>

        </div>
        <div class="phase-card__metric"><strong>Success Metric</strong>
            ITD cited by ChatGPT / Perplexity for at least 3 P0 keywords, Clutch top 20 Mumbai Digital Marketing, Google page 1 for 4+ niche keywords, 5+ inbound leads/month attributed to AI-platform discovery, 30+ verified reviews live. <em>End state:</em> proof the play works &mdash; commit budget for months 4&ndash;9.
        </div>
    </div>
</section>

<!-- =====================================================
     07 — ONGOING WEEKLY RHYTHM
     ===================================================== -->
<section class="section" id="ongoing">
    <div class="section__num">07</div>
    <h2>Ongoing weekly rhythm &mdash; runs alongside the phases.</h2>
    <p class="lead">These are the &quot;always-on&quot; activities that compound. Missing a week doesn't kill the plan &mdash; but missing four in a row does.</p>

    <div class="weekly">
        <div class="weekly__item">
            <div class="weekly__ico"><i class="fas fa-pen-nib"></i></div>
            <div class="weekly__txt"><strong>Publish 2 blog posts / week</strong>
                <p>Alternate BOFU compare posts + informational deep-dives. Every post gets FAQ schema + Article schema + internal linking.</p></div>
        </div>
        <div class="weekly__item">
            <div class="weekly__ico"><i class="fas fa-comments"></i></div>
            <div class="weekly__txt"><strong>5 Quora + 3 Reddit answers / week</strong>
                <p>Genuine expertise on relevant threads. Not spam. Natural mention of ITD only where genuinely helpful.</p></div>
        </div>
        <div class="weekly__item">
            <div class="weekly__ico"><i class="fas fa-magnifying-glass-chart"></i></div>
            <div class="weekly__txt"><strong>Track keyword positions in GSC</strong>
                <p>Weekly Friday review of the 13 target keywords. Movement patterns tell us what content to double down on.</p></div>
        </div>
        <div class="weekly__item">
            <div class="weekly__ico"><i class="fas fa-robot"></i></div>
            <div class="weekly__txt"><strong>Manual AI-platform check &mdash; the 8 P0 queries</strong>
                <p>Weekly: ask ChatGPT / Gemini / Perplexity the 8 P0 queries in fresh sessions. Log citations, sources cited, our position.</p></div>
        </div>
        <div class="weekly__item">
            <div class="weekly__ico"><i class="fas fa-star"></i></div>
            <div class="weekly__txt"><strong>Ask 2 clients for reviews</strong>
                <p>Systematic ask every project delivery + at 90-day mark. Rotation across Clutch / GoodFirms / GBP.</p></div>
        </div>
        <div class="weekly__item">
            <div class="weekly__ico"><i class="fas fa-envelope-open-text"></i></div>
            <div class="weekly__txt"><strong>15 HARO / SourceBottle / Qwoted pitches</strong>
                <p>Journalist responses = high-authority backlinks = LLM training signal. Target 30% response rate.</p></div>
        </div>
        <div class="weekly__item">
            <div class="weekly__ico"><i class="fas fa-signal"></i></div>
            <div class="weekly__txt"><strong>Domain rating check (Ahrefs / Semrush)</strong>
                <p>Weekly DR movement + backlink profile audit. Toxic backlinks disavowed. Growth trajectory tracked.</p></div>
        </div>
        <div class="weekly__item">
            <div class="weekly__ico"><i class="fas fa-people-arrows"></i></div>
            <div class="weekly__txt"><strong>Team sync &mdash; Friday 4pm IST</strong>
                <p>30-min alignment. What shipped, what's stuck, what's next. Founders + SEO + Marketing + Content.</p></div>
        </div>
    </div>
</section>

<!-- =====================================================
     08 — KPIs
     ===================================================== -->
<section class="section" id="kpis">
    <div class="section__num">08</div>
    <h2>KPIs &mdash; what success looks like at day 90.</h2>
    <p class="lead">Every metric here is measurable. Failing on more than half of these means the plan needs recalibration in the day-90 retro.</p>

    <div class="kpi">
        <div class="kpi__item">
            <div class="kpi__label">AI-Platform Citations</div>
            <div class="kpi__value">3<span class="kpi__unit">+ queries</span></div>
            <div class="kpi__delta">ChatGPT / Perplexity / Gemini</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Clutch Position (Mumbai DM)</div>
            <div class="kpi__value">Top 20</div>
            <div class="kpi__delta">from unranked</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Google Page 1 Rankings</div>
            <div class="kpi__value">4<span class="kpi__unit">+ keywords</span></div>
            <div class="kpi__delta">for niche P0 terms</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Verified Reviews</div>
            <div class="kpi__value">30<span class="kpi__unit">+</span></div>
            <div class="kpi__delta">Clutch + GoodFirms + GBP</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Guest Posts Published</div>
            <div class="kpi__value">3<span class="kpi__unit"> outlets</span></div>
            <div class="kpi__delta">bylined, dofollow</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Case Studies Live</div>
            <div class="kpi__value">5</div>
            <div class="kpi__delta">with real metrics + client logo</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">New Backlinks (DR30+)</div>
            <div class="kpi__value">20<span class="kpi__unit">+</span></div>
            <div class="kpi__delta">HARO + PR + guest posts</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Inbound Leads (organic)</div>
            <div class="kpi__value">15<span class="kpi__unit">/ mo</span></div>
            <div class="kpi__delta">by day 90, from &lt;5</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Branded Search Volume</div>
            <div class="kpi__value">+ 40%</div>
            <div class="kpi__delta">GSC month-over-month</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Domain Rating</div>
            <div class="kpi__value">+ 3-5</div>
            <div class="kpi__delta">Ahrefs / Semrush</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Podcast Appearances</div>
            <div class="kpi__value">3</div>
            <div class="kpi__delta">D2C / growth / startup</div>
        </div>
        <div class="kpi__item">
            <div class="kpi__label">Research Report Downloads</div>
            <div class="kpi__value">500<span class="kpi__unit">+</span></div>
            <div class="kpi__delta">D2C India 2026 report</div>
        </div>
    </div>

    <div class="callout success">
        <div class="callout__label">Working definition of 90-day success</div>
        <p>If a decision-maker in a D2C brand asks <em>&quot;what's the best jewelry digital marketing agency in India?&quot;</em> to ChatGPT or Perplexity and gets an answer that includes ITD GrowthLabs in the top 3 with a working link &mdash; we won. Everything in this plan is engineered to make that happen.</p>
    </div>
</section>

<!-- =====================================================
     09 — OWNERS
     ===================================================== -->
<section class="section" id="owners">
    <div class="section__num">09</div>
    <h2>Owners &amp; governance.</h2>
    <p class="lead">Every action item has a single owner. Cross-team collaboration is expected, but only one person is accountable for shipping.</p>

    <table class="tbl">
        <thead><tr><th>Role</th><th>Scope</th><th>Weekly commitment</th><th>Accountable For</th></tr></thead>
        <tbody>
            <tr><td><strong>Founders</strong><br><small>Prashant + Loy</small></td><td>Strategy, LinkedIn thought leadership, podcasts, speaking, press quotes, guest posts</td><td>~6h/week each</td><td>P0 relationships + brand authority signals</td></tr>
            <tr><td><strong>Marketing Lead</strong></td><td>Aggregators, GBP, PR distribution, HARO, review generation, LinkedIn/social scheduling</td><td>~30h/week</td><td>External visibility surfaces</td></tr>
            <tr><td><strong>Content Lead</strong></td><td>Blog posts, expertise pages, case studies, comparison pages, research report, guest post drafts</td><td>~30h/week</td><td>Assets LLMs cite</td></tr>
            <tr><td><strong>SEO Lead</strong></td><td>Technical SEO, structured data, keyword tracking, AI-platform citation monitoring, competitor intel</td><td>~20h/week</td><td>Measurement + technical foundation</td></tr>
            <tr><td><strong>Tech Lead</strong></td><td>Schema rollout, IndexNow, sitemap health, Core Web Vitals, page performance</td><td>~10h/week</td><td>On-site technical implementation</td></tr>
            <tr><td><strong>Weekly Review</strong></td><td>All above + founders</td><td>Friday 4pm IST, 30 min</td><td>Alignment + priority reset</td></tr>
        </tbody>
    </table>

    <div class="callout">
        <div class="callout__label">Escalation path</div>
        <p>Any action item stuck for more than 5 business days gets flagged in the Friday review. If unresolved by the following Friday, owner + founder pair to unblock. No action item allowed to slip beyond 2 review cycles without founder-level attention.</p>
    </div>

    <div class="callout warning">
        <div class="callout__label">What kills this plan</div>
        <p><strong>1.</strong> Chasing &quot;Top Digital Marketing Company in India&quot; &mdash; wastes budget with no 90-day return. <strong>2.</strong> Buying links from cheap directories &mdash; Google penalty risk, AI models learn to distrust the mentions. <strong>3.</strong> Publishing thin content just to hit the 2 posts/week target &mdash; degrades signal. Better to skip a week than publish garbage. <strong>4.</strong> Missing the weekly review 3+ times &mdash; without cadence, this becomes another abandoned strategy doc.</p>
    </div>
</section>

<footer style="margin-top:60px; padding-top:26px; border-top:1px solid var(--line);
      font-family:'JetBrains Mono',monospace; font-size:11px; color:var(--text-mute);
      letter-spacing:0.08em; text-transform:uppercase; text-align:center;">
    ITD GrowthLabs &middot; Internal strategy &middot; v1.0 &middot; Effective 2026-07-06 &middot;
    Next review: 2026-08-08
</footer>

</div>
</body>
</html>
