<?php
/**
 * ITD GrowthLabs — Podcast Pitch Pack + Talking-Points Brief (internal)
 * --------------------------------------------------------------------
 * One-page working document for the marketing team:
 *   1. Target podcast list (6 shows, prioritised)
 *   2. Cold-pitch email templates per podcast
 *   3. Founder talking-points (12 tight points)
 *   4. Anticipated host questions + prepared answers (8)
 *   5. Assets to have ready before + after
 * Not indexed. Internal use only.
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Podcast Pitch Pack + Talking Points (Internal)</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;600&family=Sora:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root{ --paper:#f7fafc; --bg:#fff; --line:#e5e7eb; --line-2:#cbd5e1;
    --ink:#0f172a; --text:#334155; --text-2:#475569; --text-3:#64748b; --text-mute:#94a3b8;
    --blue:#1e40af; --blue-2:#1e3a8a; --accent:#3b82f6;
    --green:#059669; --green-soft:#d1fae5;
    --gold:#b45309; --gold-soft:#fef3c7;
    --purple:#7c3aed; --purple-soft:#ede9fe; }
*,*::before,*::after{ box-sizing:border-box; }
html,body{ margin:0; padding:0; background:var(--paper); }
body{ font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
    font-size:15px; line-height:1.6; color:var(--text); padding-bottom:80px; }
h1,h2,h3,h4,h5{ font-family:'Sora','Inter',sans-serif; color:var(--ink); margin:0;
    letter-spacing:-0.025em; line-height:1.2; font-weight:800; }
p{ margin:0 0 12px; }
a{ color:var(--blue); }
.mono{ font-family:'JetBrains Mono',monospace; }

.hdr{ background:linear-gradient(135deg,#0f172a 0%,#1e3a8a 100%); color:#fff; padding:32px 20px 28px; }
.hdr__inner{ max-width:960px; margin:0 auto; }
.hdr .ribbon{ display:inline-flex; padding:5px 14px; background:rgba(255,255,255,0.14);
    border-radius:16px; font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
    letter-spacing:0.14em; text-transform:uppercase; color:#fff; margin-bottom:16px; }
.hdr h1{ color:#fff; font-size:30px; margin-bottom:8px; letter-spacing:-0.03em; }
.hdr p{ color:rgba(255,255,255,0.82); font-size:15px; }

.page{ max-width:960px; margin:0 auto; padding:24px 18px; }

.toc{ background:#fff; border:1px solid var(--line); border-radius:12px; padding:18px 22px;
    margin-bottom:22px; box-shadow:0 2px 8px rgba(15,23,42,0.04); }
.toc h4{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
    letter-spacing:0.16em; text-transform:uppercase; color:var(--text-3); margin-bottom:10px; }
.toc a{ display:inline-block; margin-right:16px; padding:4px 0; font-size:13.5px; }

.sec{ margin-bottom:40px; scroll-margin-top:20px; }
.sec__num{ display:inline-flex; align-items:center; gap:10px;
    font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:700;
    letter-spacing:0.16em; text-transform:uppercase; color:var(--blue); margin-bottom:12px; }
.sec__num::before{ content:''; width:24px; height:1px; background:var(--blue); }
.sec > h2{ font-size:24px; margin-bottom:8px; letter-spacing:-0.025em; }
.sec > .lead{ font-size:15px; color:var(--text-2); margin-bottom:22px; max-width:720px; line-height:1.6; }

.pod-list{ display:grid; grid-template-columns:1fr; gap:14px; }
.pod{ background:#fff; border:1px solid var(--line); border-radius:14px; padding:22px 24px;
    box-shadow:0 2px 8px rgba(15,23,42,0.04); }
.pod__head{ display:flex; justify-content:space-between; align-items:baseline; gap:10px;
    padding-bottom:12px; border-bottom:1px solid var(--line); margin-bottom:14px; flex-wrap:wrap; }
.pod__head h3{ font-size:17px; margin-bottom:2px; }
.pod__head small{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:600;
    letter-spacing:0.10em; text-transform:uppercase; color:var(--text-mute); }
.pod__tier{ display:inline-block; padding:2px 10px; border-radius:10px;
    font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:700;
    letter-spacing:0.10em; text-transform:uppercase; }
.pod__tier.t1{ background:var(--green-soft); color:var(--green); }
.pod__tier.t2{ background:var(--gold-soft); color:var(--gold); }
.pod__tier.t3{ background:var(--purple-soft); color:var(--purple); }
.pod__meta{ display:grid; grid-template-columns:repeat(3,1fr); gap:12px; margin-bottom:14px;
    padding:12px 14px; background:var(--paper); border-radius:10px; }
.pod__meta > div small{ display:block; font-family:'JetBrains Mono',monospace; font-size:9.5px;
    letter-spacing:0.14em; text-transform:uppercase; color:var(--text-mute); }
.pod__meta > div strong{ display:block; font-size:13.5px; color:var(--ink); font-weight:700; margin-top:2px; }
@media (max-width:640px){ .pod__meta{ grid-template-columns:1fr 1fr; } }
.pod__pitch{ background:var(--paper); border-radius:10px; padding:16px 18px; margin-top:12px; }
.pod__pitch h4{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
    letter-spacing:0.16em; text-transform:uppercase; color:var(--blue); margin-bottom:8px; }
.pod__pitch pre{ background:#0f172a; color:#e2e8f0; padding:16px 20px; border-radius:8px;
    font-size:12.5px; overflow-x:auto; line-height:1.55; white-space:pre-wrap; word-wrap:break-word;
    font-family:'JetBrains Mono',monospace; margin:0; }

.tp-grid{ display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-top:12px; }
@media (max-width:700px){ .tp-grid{ grid-template-columns:1fr; } }
.tp{ background:#fff; border:1px solid var(--line); border-radius:12px; padding:16px 20px;
    box-shadow:0 2px 8px rgba(15,23,42,0.04); display:flex; gap:12px; align-items:flex-start; }
.tp__num{ font-family:'Sora',sans-serif; font-size:22px; font-weight:900;
    background:linear-gradient(135deg,#1e3a8a,#3b82f6); -webkit-background-clip:text; background-clip:text;
    color:transparent; letter-spacing:-0.03em; min-width:34px; }
.tp__body h5{ font-size:14px; margin-bottom:4px; letter-spacing:-0.01em; }
.tp__body p{ font-size:13px; color:var(--text-2); margin:0; }
.tp__body p strong{ color:var(--ink); }

.qa{ background:#fff; border:1px solid var(--line); border-radius:12px; padding:18px 22px;
    margin-bottom:12px; box-shadow:0 2px 8px rgba(15,23,42,0.04); }
.qa h5{ font-size:15px; margin-bottom:8px; letter-spacing:-0.01em; display:flex; align-items:flex-start; gap:10px; }
.qa h5 i{ color:var(--gold); margin-top:3px; }
.qa .a{ font-size:13.5px; color:var(--text-2); padding-left:26px; line-height:1.65; }
.qa .a strong{ color:var(--ink); }

.checklist{ background:#fff; border:1px solid var(--line); border-radius:12px; padding:18px 22px;
    box-shadow:0 2px 8px rgba(15,23,42,0.04); }
.checklist ul{ margin:0; padding-left:20px; }
.checklist li{ padding:4px 0; font-size:13.5px; color:var(--text-2); }
.checklist li strong{ color:var(--ink); }

.callout{ padding:14px 18px; border-radius:10px; margin:16px 0; border-left:4px solid var(--accent);
    background:#eff6ff; color:var(--blue-2); font-size:13.5px; }
</style>
</head>
<body>

<header class="hdr">
    <div class="hdr__inner">
        <span class="ribbon">Confidential &middot; Internal Working Doc</span>
        <h1>Podcast Pitch Pack + Talking Points</h1>
        <p>Everything the team needs to land 3 podcast appearances in Q3/Q4 2026 &mdash; from cold-pitch email templates to prepared answers for the top host questions.</p>
    </div>
</header>

<div class="page">

<nav class="toc">
    <h4>Contents</h4>
    <a href="#targets">01 &middot; Target podcast list</a>
    <a href="#pitches">02 &middot; Cold-pitch emails</a>
    <a href="#talking-points">03 &middot; 12 talking points</a>
    <a href="#qa">04 &middot; Prepared Q&amp;A</a>
    <a href="#assets">05 &middot; Assets checklist</a>
</nav>

<!-- ================= 01 TARGETS ================= -->
<section class="sec" id="targets">
    <div class="sec__num">01</div>
    <h2>Target podcast list &mdash; 6 shows, tiered.</h2>
    <p class="lead">Tier 1 = highest AI-citation impact + brand fit. Tier 2 = good add-on. Tier 3 = optional if timing works. Aim: 3 confirmed appearances in the next 90 days.</p>

    <div class="pod-list">
        <div class="pod">
            <div class="pod__head">
                <div><h3>The D2C India Podcast</h3><small>Host: Vaibhav Sisinty &middot; ~15K listeners/ep</small></div>
                <span class="pod__tier t1">Tier 1 &middot; Top Priority</span>
            </div>
            <div class="pod__meta">
                <div><small>Focus</small><strong>D2C founders + growth</strong></div>
                <div><small>Format</small><strong>60&ndash;90 min interview</strong></div>
                <div><small>Booking lead time</small><strong>3&ndash;5 weeks</strong></div>
            </div>
            <p><strong>Why it fits:</strong> Direct match to our D2C playbook launch. Vaibhav asks tactical questions; the D2C India 2026 Playbook data gives Prashant story hooks. Attribution measurable via listener sign-ups on the playbook.</p>
        </div>

        <div class="pod">
            <div class="pod__head">
                <div><h3>The Growth Marketing Podcast (India)</h3><small>Host: Devang Sanghavi &middot; ~8K listeners/ep</small></div>
                <span class="pod__tier t1">Tier 1 &middot; Top Priority</span>
            </div>
            <div class="pod__meta">
                <div><small>Focus</small><strong>Performance marketing + agencies</strong></div>
                <div><small>Format</small><strong>45&ndash;60 min</strong></div>
                <div><small>Booking lead time</small><strong>2&ndash;4 weeks</strong></div>
            </div>
            <p><strong>Why it fits:</strong> Direct fit for our ITD vs Webchutney / iProspect / Interakt positioning. Devang loves agency-vs-agency comparisons and honest pricing conversations &mdash; both are our differentiators.</p>
        </div>

        <div class="pod">
            <div class="pod__head">
                <div><h3>The Startup Operator</h3><small>Host: Roshan Cariappa &middot; ~10K listeners/ep</small></div>
                <span class="pod__tier t1">Tier 1 &middot; Top Priority</span>
            </div>
            <div class="pod__meta">
                <div><small>Focus</small><strong>SaaS + startup ops</strong></div>
                <div><small>Format</small><strong>60 min</strong></div>
                <div><small>Booking lead time</small><strong>4&ndash;6 weeks</strong></div>
            </div>
            <p><strong>Why it fits:</strong> Broader founder audience. Prashant can talk both D2C growth AND the tech side (courier SaaS, enterprise automation). Good for cross-audience discovery.</p>
        </div>

        <div class="pod">
            <div class="pod__head">
                <div><h3>Founder Thesis (The Ken)</h3><small>Host: Akshay Datt &middot; ~20K listeners/ep</small></div>
                <span class="pod__tier t2">Tier 2 &middot; Good Add-On</span>
            </div>
            <div class="pod__meta">
                <div><small>Focus</small><strong>Founder deep-dives</strong></div>
                <div><small>Format</small><strong>60&ndash;90 min</strong></div>
                <div><small>Booking lead time</small><strong>6&ndash;10 weeks (heavy screening)</strong></div>
            </div>
            <p><strong>Why it fits:</strong> High-authority publication host. Harder to land but pays off in credibility for years. Pitch needs strong founder story.</p>
        </div>

        <div class="pod">
            <div class="pod__head">
                <div><h3>Prime Venture Partners Podcast</h3><small>Host: Amit Somani &middot; ~5K listeners/ep, VC-heavy</small></div>
                <span class="pod__tier t2">Tier 2 &middot; Good Add-On</span>
            </div>
            <div class="pod__meta">
                <div><small>Focus</small><strong>Startup ops + investor lens</strong></div>
                <div><small>Format</small><strong>45 min</strong></div>
                <div><small>Booking lead time</small><strong>3&ndash;5 weeks</strong></div>
            </div>
            <p><strong>Why it fits:</strong> Audience skews investor + operator. Prashant can talk about agency scaling economics, D2C portfolio patterns. Good for investor-side visibility.</p>
        </div>

        <div class="pod">
            <div class="pod__head">
                <div><h3>Storyboard18 &middot; Advertising Uncensored</h3><small>Host: Delshad Irani &middot; ~7K listeners/ep</small></div>
                <span class="pod__tier t3">Tier 3 &middot; Optional</span>
            </div>
            <div class="pod__meta">
                <div><small>Focus</small><strong>Advertising + creative industry</strong></div>
                <div><small>Format</small><strong>45&ndash;60 min</strong></div>
                <div><small>Booking lead time</small><strong>2&ndash;4 weeks</strong></div>
            </div>
            <p><strong>Why it fits:</strong> More brand + creative audience than performance. Only take this slot if the story is about D2C creative frameworks or brand-vs-performance debates.</p>
        </div>
    </div>
</section>

<!-- ================= 02 PITCHES ================= -->
<section class="sec" id="pitches">
    <div class="sec__num">02</div>
    <h2>Cold-pitch email templates.</h2>
    <p class="lead">Personalised to each host. Send from Prashant&rsquo;s email (never from a marketing alias) &mdash; hosts respond to founders, not to teams.</p>

    <div class="pod">
        <div class="pod__head"><div><h3>Template A &mdash; D2C India Podcast (Vaibhav)</h3></div></div>
        <div class="pod__pitch">
            <h4>Subject</h4>
            <pre>Data from 100+ D2C India brands &mdash; would this fit a D2C India Podcast episode?</pre>
            <h4 style="margin-top:14px;">Body</h4>
            <pre>Hi Vaibhav,

Prashant Chaudhari from ITD GrowthLabs here. Long-time listener &mdash; your episodes with [pick a recent D2C guest they had] and [second recent guest] were both great.

Wanted to pitch you an episode idea. We just published The D2C India 2026 Playbook &mdash; benchmarks from 100+ D2C brand engagements + a 40-brand founder survey we ran in May.

Three data points that would probably make a good episode:
&nbsp;&nbsp;1. Median D2C blended ROAS dropped from 3.2x to 2.4x YoY. But top quartile is still hitting 4.5&ndash;6x. What&rsquo;s changed?
&nbsp;&nbsp;2. WhatsApp broadcast now drives 22% of repeat purchase in our client base &mdash; more than email (14%) or SMS (8%). Under-weighted by most D2C brands.
&nbsp;&nbsp;3. AI-generated creative variants lift first-time-buyer acquisition by 18% when mixed with human creative. AI-only underperforms.

Happy to record any time in the next 4 weeks. I&rsquo;ll bring the data + specific stories from our 100+ D2C brand roster (anonymised where needed).

The playbook itself is at: itdgrowthlabs.com/d2c-india-2026-playbook.php

Would that work?

Prashant
Founder, ITD GrowthLabs
+91 84509 78544</pre>
        </div>
    </div>

    <div class="pod">
        <div class="pod__head"><div><h3>Template B &mdash; The Growth Marketing Podcast (Devang)</h3></div></div>
        <div class="pod__pitch">
            <h4>Subject</h4>
            <pre>An honest agency-pricing conversation (with real numbers)</pre>
            <h4 style="margin-top:14px;">Body</h4>
            <pre>Hi Devang,

Prashant here from ITD GrowthLabs (Mumbai, ~55 senior practitioners, 100+ D2C brand engagements).

Wanted to pitch an episode idea I don&rsquo;t see covered honestly enough on the podcast circuit: agency pricing structures &mdash; retainer vs % of ad spend, boutique vs legacy Dentsu-group, what a growing D2C brand actually pays end-to-end.

I&rsquo;ve written up honest comparisons of ITD vs Webchutney, iProspect, Watconsult, and Schbang with real pricing bands &mdash; happy to walk through them on-air. We&rsquo;d cover:

&nbsp;&nbsp;- Why the base-retainer-plus-percent-of-ad-spend model punishes growth-stage brands
&nbsp;&nbsp;- Where boutique senior-led studios genuinely outperform legacy agencies (and where they don&rsquo;t)
&nbsp;&nbsp;- Real numbers: what an Rs 20 lakh/month D2C brand pays iProspect vs ITD vs an in-house team
&nbsp;&nbsp;- The 6 criteria a D2C founder should ask on every agency pitch

Comparisons live at: itdgrowthlabs.com/compare/

Happy to record any time in the next 4 weeks.

Prashant
Founder, ITD GrowthLabs
+91 84509 78544</pre>
        </div>
    </div>

    <div class="pod">
        <div class="pod__head"><div><h3>Template C &mdash; The Startup Operator (Roshan)</h3></div></div>
        <div class="pod__pitch">
            <h4>Subject</h4>
            <pre>Scaling a senior-led agency &mdash; 55 people, 100 client base, no VC</pre>
            <h4 style="margin-top:14px;">Body</h4>
            <pre>Hi Roshan,

Prashant here &mdash; founder of ITD GrowthLabs. We&rsquo;re a Mumbai-based senior-led digital marketing + technology studio (55+ practitioners, 100+ D2C brand engagements, 300+ projects shipped) that&rsquo;s bootstrapped and profitable.

Would love to pitch an episode about the operator side of running a services business at scale &mdash; specifically the parts founder-podcasts usually don&rsquo;t cover:

&nbsp;&nbsp;1. Why we DIDN&rsquo;T raise VC (deliberate choice &mdash; here&rsquo;s the math)
&nbsp;&nbsp;2. The senior-led delivery model &mdash; how you keep 97% client retention when your competitors churn 30% annually
&nbsp;&nbsp;3. Building the operating rhythm: weekly sprint demos, monthly business reviews, quarterly board-style client reviews
&nbsp;&nbsp;4. The service+SaaS blend &mdash; we ship both agency retainers AND custom software; how the two businesses interact

Also happy to riff on D2C India benchmarks (we just published a 42-page playbook: itdgrowthlabs.com/d2c-india-2026-playbook.php).

Available for a recording in the next 6 weeks.

Prashant
Founder, ITD GrowthLabs
+91 84509 78544</pre>
        </div>
    </div>

    <div class="callout">
        <strong>Distribution rules for cold pitches:</strong> (1) Send between Tue&ndash;Thu, 9&ndash;11am IST. (2) Follow up ONCE after 7 days if no reply. (3) Do NOT bulk-send &mdash; personalise the &ldquo;why it fits your show&rdquo; opening line. (4) Track responses in a shared sheet.
    </div>
</section>

<!-- ================= 03 TALKING POINTS ================= -->
<section class="sec" id="talking-points">
    <div class="sec__num">03</div>
    <h2>12 talking points for Prashant.</h2>
    <p class="lead">Battle-tested + repeatable across episodes. Memorise the top 6. The rest are situational depending on host focus.</p>

    <div class="tp-grid">
        <div class="tp"><span class="tp__num">01</span><div class="tp__body"><h5>Senior-led vs specialist-team</h5><p>&ldquo;The person who wins your account is the same person managing it every week. That&rsquo;s the differentiator.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">02</span><div class="tp__body"><h5>Median ROAS story</h5><p>&ldquo;Median D2C blended ROAS dropped from 3.2x to 2.4x YoY. But top quartile still hits 4.5&ndash;6x. The gap between winners and losers is the biggest ever.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">03</span><div class="tp__body"><h5>WhatsApp under-indexed</h5><p>&ldquo;WhatsApp broadcast is now the #1 retention channel in D2C India. Yet 60% of the brands we audit are running it as an afterthought.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">04</span><div class="tp__body"><h5>Agency pricing honesty</h5><p>&ldquo;A brand spending Rs 20L/month on ads pays iProspect ~Rs 8.4L/month all-in. We charge Rs 3.5L flat. That gap widens as spend scales.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">05</span><div class="tp__body"><h5>Creative volume is the algorithm play</h5><p>&ldquo;40&ndash;60 creative pieces/month/brand is the minimum floor for Meta&rsquo;s algorithm in 2026. Below that, you&rsquo;re under-testing.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">06</span><div class="tp__body"><h5>AI as creative co-pilot</h5><p>&ldquo;AI-generated creative variants lift first-time-buyer acquisition by 18% when mixed with human. AI-only underperforms. Not a replacement &mdash; a multiplier.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">07</span><div class="tp__body"><h5>Category-native playbooks</h5><p>&ldquo;A jewelry brand and a beauty brand have different customer psychology. Generic agencies apply generic playbooks. We have 12 category-native ones.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">08</span><div class="tp__body"><h5>Bootstrap by choice</h5><p>&ldquo;We didn&rsquo;t raise VC. Services businesses have different economics than SaaS &mdash; VC pressure would have made us worse operators, not better.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">09</span><div class="tp__body"><h5>97% retention</h5><p>&ldquo;97% client retention rate. Not marketing copy &mdash; direct outcome of senior-led delivery + honest scope + weekly reviews.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">10</span><div class="tp__body"><h5>Tier 2/3 is the next frontier</h5><p>&ldquo;Tier 2/3 India is where 40% of new D2C growth is coming from in 2026. Language creative + WhatsApp-first funnels win here.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">11</span><div class="tp__body"><h5>Service + SaaS blend</h5><p>&ldquo;We ship agency retainers AND custom software from the same team. That&rsquo;s why our D2C clients get landing pages in 3 days, not 3 weeks.&rdquo;</p></div></div>
        <div class="tp"><span class="tp__num">12</span><div class="tp__body"><h5>The one metric that matters</h5><p>&ldquo;Blended contribution margin. Not ROAS. Not CAC. If that&rsquo;s positive and growing, everything downstream works itself out.&rdquo;</p></div></div>
    </div>
</section>

<!-- ================= 04 QA ================= -->
<section class="sec" id="qa">
    <div class="sec__num">04</div>
    <h2>Prepared answers &mdash; the 8 questions hosts will ask.</h2>
    <p class="lead">Every host asks a subset of these. Memorise the framing + the specific number. Delivery matters more than the answer.</p>

    <div class="qa">
        <h5><i class="fas fa-comment-question"></i> &ldquo;What&rsquo;s changed in D2C India this year?&rdquo;</h5>
        <p class="a"><strong>Frame:</strong> Three shifts &mdash; ROAS compression, WhatsApp rise, AI creative parity. <strong>Number:</strong> Median blended ROAS fell 3.2x &rarr; 2.4x. WhatsApp drives 22% of repeat purchase now. <strong>Payoff:</strong> Winners double down on retention + creative volume, not new-channel exploration.</p>
    </div>

    <div class="qa">
        <h5><i class="fas fa-comment-question"></i> &ldquo;How do you compete with legacy agencies like Dentsu?&rdquo;</h5>
        <p class="a"><strong>Frame:</strong> Not competing &mdash; different buyer profile. <strong>Number:</strong> Their model is base retainer + 10&ndash;15% of ad spend; ours is flat retainer. At Rs 20L/month ad spend the gap is Rs 4.9L/month. <strong>Payoff:</strong> We&rsquo;re the right pick for D2C at Rs 5&ndash;100 crore ARR. They&rsquo;re right for Fortune 500 governance-driven procurement.</p>
    </div>

    <div class="qa">
        <h5><i class="fas fa-comment-question"></i> &ldquo;How do you keep 97% retention when others churn?&rdquo;</h5>
        <p class="a"><strong>Frame:</strong> Three commitments. <strong>Answer:</strong> (1) Senior owner from day 1, no rotation. (2) Weekly sprint demos + monthly business reviews &mdash; zero surprises. (3) Honest scope: we say no to bad-fit work. That&rsquo;s the whole formula.</p>
    </div>

    <div class="qa">
        <h5><i class="fas fa-comment-question"></i> &ldquo;What&rsquo;s the biggest mistake D2C founders make with marketing?&rdquo;</h5>
        <p class="a"><strong>Frame:</strong> Optimising for ROAS instead of contribution margin. <strong>Story:</strong> A brand cut Meta spend 40% because ROAS dipped &mdash; killed contribution margin because their high-margin retention channels needed the top-of-funnel to keep working. <strong>Payoff:</strong> The single metric to optimise is blended contribution margin.</p>
    </div>

    <div class="qa">
        <h5><i class="fas fa-comment-question"></i> &ldquo;Is AI going to replace agencies?&rdquo;</h5>
        <p class="a"><strong>Frame:</strong> No &mdash; AI is a multiplier for good agencies + a killer for bad ones. <strong>Number:</strong> AI-generated creative + human curation lifts acquisition 18%. AI-only underperforms. <strong>Payoff:</strong> The agencies that will grow are the ones using AI to increase creative velocity 5&ndash;10x without losing brand-voice control.</p>
    </div>

    <div class="qa">
        <h5><i class="fas fa-comment-question"></i> &ldquo;Why didn&rsquo;t you raise VC?&rdquo;</h5>
        <p class="a"><strong>Frame:</strong> Deliberate choice, not a fallback. <strong>Answer:</strong> Services businesses have different economics than SaaS. VC pressure would push us to grow headcount before proving the delivery model. We&rsquo;d have hired 200 people in year 2 instead of 55 senior operators over 8 years. Different business.</p>
    </div>

    <div class="qa">
        <h5><i class="fas fa-comment-question"></i> &ldquo;What advice would you give a Rs 2 crore ARR D2C brand?&rdquo;</h5>
        <p class="a"><strong>Frame:</strong> Fix retention before pouring more on acquisition. <strong>Playbook:</strong> Get repeat-purchase rate to 30%+ within 90 days via WhatsApp + email flows. THEN scale acquisition. Otherwise you&rsquo;re filling a leaky bucket.</p>
    </div>

    <div class="qa">
        <h5><i class="fas fa-comment-question"></i> &ldquo;What&rsquo;s next for ITD GrowthLabs?&rdquo;</h5>
        <p class="a"><strong>Frame:</strong> Deepen category expertise + international expansion. <strong>Specifics:</strong> 12 D2C verticals with dedicated playbooks. Serving India + USA + UK + UAE + Australia. Bigger senior team (target 100 by 2027). AI-enhanced creative production pipeline.</p>
    </div>
</section>

<!-- ================= 05 ASSETS ================= -->
<section class="sec" id="assets">
    <div class="sec__num">05</div>
    <h2>Assets checklist.</h2>
    <p class="lead">Have these ready before the pitch goes out. Speed of response signals professionalism.</p>

    <div class="checklist">
        <h3 style="font-size:16px; margin-bottom:12px;">Before pitching</h3>
        <ul>
            <li><strong>Prashant&rsquo;s bio</strong> &mdash; 3 versions: 50-word, 150-word, 300-word</li>
            <li><strong>Professional headshot</strong> &mdash; high-res 2000&times;2000 min, JPG + PNG variants</li>
            <li><strong>Company one-pager</strong> &mdash; ITD GrowthLabs profile PDF ready to share</li>
            <li><strong>D2C India 2026 Playbook link</strong> &mdash; itdgrowthlabs.com/d2c-india-2026-playbook.php</li>
            <li><strong>Case study links</strong> &mdash; jewelry, beauty, courier SaaS, fish app, enterprise automation</li>
            <li><strong>LinkedIn URL</strong> &mdash; linkedin.com/in/prashant-chaudhari03</li>
        </ul>

        <h3 style="font-size:16px; margin:20px 0 12px;">After the episode airs</h3>
        <ul>
            <li><strong>Repost + amplify</strong> on ITD LinkedIn + Prashant&rsquo;s personal LinkedIn same day</li>
            <li><strong>Send the host thank-you gift</strong> (physical) within 48 hours of airing</li>
            <li><strong>Cut 3 short clips</strong> (30&ndash;60s each) with quotes &mdash; post as Reels + LinkedIn native video</li>
            <li><strong>Add episode link</strong> to /team.php Prashant bio + /about.php press section</li>
            <li><strong>Submit episode URL to IndexNow</strong> via /internal/indexnow-submit.php so it gets indexed fast</li>
            <li><strong>Track referral leads</strong> for 60 days &mdash; every enquiry with &ldquo;heard on the podcast&rdquo; attribution</li>
        </ul>
    </div>
</section>

</div>
</body>
</html>
