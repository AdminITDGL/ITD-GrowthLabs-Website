<?php
/**
 * ITD Services × CSB Bank — Speaker Notes (Mobile Companion)
 * ----------------------------------------------------------
 * Designed to open on a phone during the 20-min pitch.
 * Companion to /csb-bank-solution.php
 * Per-slide: talking points, questions to ask, follow-ups,
 * technical + business discussion, assumptions to confirm.
 * Not indexed. Internal use only.
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#0f2543">
    <title>CSB Bank Pitch · Speaker Notes (Internal)</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root{
    --bg:#ffffff; --paper:#f6f7fb; --panel:#ffffff;
    --line:#e5e7eb; --line-2:#d1d5db;
    --brand:#0f2543; --accent:#1e40af; --accent-soft:#dbeafe;
    --text:#0f2543; --text-2:#334155; --text-3:#4b5563; --text-4:#6b7280; --text-mute:#9ca3af;
    --tp:#0f766e; --tp-soft:#ccfbf1;      /* Talking Points — teal */
    --qa:#b45309; --qa-soft:#fef3c7;      /* Questions to Ask — gold */
    --fu:#7c3aed; --fu-soft:#ede9fe;      /* Follow-ups — purple */
    --tech:#1d4ed8; --tech-soft:#dbeafe;  /* Technical — blue */
    --biz:#059669; --biz-soft:#d1fae5;    /* Business — green */
    --asm:#b91c1c; --asm-soft:#fee2e2;    /* Assumptions — red */
}
*,*::before,*::after{ box-sizing:border-box; }
html,body{ margin:0; padding:0; background:var(--paper); }
body{ font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
      font-size:16px; line-height:1.6; color:var(--text-2);
      -webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale;
      padding-bottom:88px; }
h1,h2,h3,h4,h5{ font-family:'Inter',sans-serif; font-weight:700; color:var(--text); margin:0; letter-spacing:-0.02em; line-height:1.2; }
p{ margin:0 0 10px; color:var(--text-3); }
.mono{ font-family:'JetBrains Mono','Menlo',monospace; }
a{ color:var(--accent); text-decoration:none; }

/* Sticky top header */
.hdr{ position:sticky; top:0; z-index:20; background:#0f2543; color:#fff;
      padding:12px 16px 12px; border-bottom:1px solid #1e293b;
      box-shadow:0 6px 20px rgba(15,37,67,0.14); }
.hdr__row1{ display:flex; align-items:center; justify-content:space-between; gap:12px; }
.hdr__brand{ font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:600;
      letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.7); }
.hdr__brand strong{ color:#fff; }
.hdr__meta{ font-family:'JetBrains Mono',monospace; font-size:10.5px; letter-spacing:0.14em;
      color:rgba(255,255,255,0.55); text-transform:uppercase; }
.hdr h1{ color:#fff; font-size:19px; letter-spacing:-0.02em; margin-top:6px; }
.hdr__sub{ color:rgba(255,255,255,0.72); font-size:13px; margin-top:2px; }

/* TOC bar (scrollable slide chips) */
.toc{ background:#fff; border-bottom:1px solid var(--line);
      padding:10px 14px; overflow-x:auto; white-space:nowrap;
      position:sticky; top:0; z-index:15;
      -webkit-overflow-scrolling:touch; scrollbar-width:thin; }
.toc__row{ display:inline-flex; gap:8px; }
.toc a{ display:inline-block; padding:7px 12px; border-radius:20px;
      background:var(--paper); border:1px solid var(--line);
      font-family:'JetBrains Mono',monospace; font-size:11.5px; font-weight:600;
      color:var(--text-3); text-decoration:none; letter-spacing:0.06em; }
.toc a:active, .toc a.active{ background:var(--brand); color:#fff; border-color:var(--brand); }
.toc a.closing{ background:var(--qa-soft); color:var(--qa); border-color:#fcd34d; }

/* Slide card */
.slide-card{ background:var(--panel); border:1px solid var(--line); border-radius:14px;
      margin:16px; padding:18px 18px 12px;
      box-shadow:0 6px 20px rgba(15,37,67,0.05); scroll-margin-top:80px; }
.slide-card__pill{ display:inline-flex; align-items:center; gap:8px; padding:3px 10px;
      background:var(--brand); color:#fff; border-radius:14px;
      font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; margin-bottom:10px; }
.slide-card h2{ font-size:19px; margin-bottom:6px; }
.slide-card__sub{ font-size:13.5px; color:var(--text-4); margin-bottom:14px; }

/* Section blocks per slide */
.blk{ padding:12px 14px; border-radius:11px; margin-bottom:10px;
      border-left:4px solid var(--brand); background:var(--paper); }
.blk h4{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; margin-bottom:8px;
      display:inline-flex; align-items:center; gap:8px; }
.blk h4 i{ font-size:11px; }
.blk ul{ margin:0; padding-left:18px; }
.blk li{ font-size:14px; color:var(--text-2); padding:3px 0; line-height:1.55; }
.blk p{ font-size:14px; color:var(--text-2); }
.blk.tp   { border-left-color:var(--tp);   background:var(--tp-soft);   }
.blk.qa   { border-left-color:var(--qa);   background:var(--qa-soft);   }
.blk.fu   { border-left-color:var(--fu);   background:var(--fu-soft);   }
.blk.tech { border-left-color:var(--tech); background:var(--tech-soft); }
.blk.biz  { border-left-color:var(--biz);  background:var(--biz-soft);  }
.blk.asm  { border-left-color:var(--asm);  background:var(--asm-soft);  }
.blk.tp h4   { color:var(--tp); }
.blk.qa h4   { color:var(--qa); }
.blk.fu h4   { color:var(--fu); }
.blk.tech h4 { color:var(--tech); }
.blk.biz h4  { color:var(--biz); }
.blk.asm h4  { color:var(--asm); }
.blk.tp li strong, .blk.qa li strong, .blk.fu li strong, .blk.tech li strong, .blk.biz li strong, .blk.asm li strong{
    color:var(--brand); font-weight:700;
}

/* Bottom sticky nav */
.foot{ position:fixed; bottom:0; left:0; right:0; z-index:20;
      background:#fff; border-top:1px solid var(--line);
      padding:10px 14px; display:flex; justify-content:space-between; align-items:center; gap:10px;
      box-shadow:0 -6px 20px rgba(15,37,67,0.08); }
.foot__btn{ flex:1; padding:11px 14px; border-radius:10px;
      background:var(--brand); color:#fff; text-align:center;
      font-family:'JetBrains Mono',monospace; font-size:11.5px; font-weight:700;
      letter-spacing:0.12em; text-transform:uppercase; text-decoration:none;
      display:inline-flex; align-items:center; justify-content:center; gap:8px; }
.foot__btn.deck{ background:#fff; color:var(--brand); border:1px solid var(--brand); }
.foot__label{ font-family:'JetBrains Mono',monospace; font-size:9.5px; letter-spacing:0.14em;
      color:var(--text-mute); text-transform:uppercase; padding:0 6px; }

/* Closing */
.closing-card{ background:linear-gradient(180deg,#fef3c7 0%,#fef9e7 100%);
      border-left:5px solid var(--qa); margin:16px; padding:20px 18px;
      border-radius:14px; scroll-margin-top:80px; }
.closing-card h2{ font-size:20px; color:var(--brand); margin-bottom:6px; }
.closing-card__pill{ display:inline-flex; padding:3px 10px; background:var(--qa); color:#fff;
      border-radius:14px; font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; margin-bottom:10px; }
.closing-card ol{ margin:0; padding-left:20px; }
.closing-card li{ font-size:14.5px; padding:5px 0; color:var(--brand); line-height:1.55; }
.closing-card li strong{ font-weight:700; }

@media (min-width:800px){
    body{ max-width:820px; margin:0 auto; background:#fff; box-shadow:0 0 40px rgba(15,37,67,0.06); }
    .slide-card{ margin:20px; }
}
</style>
</head>
<body>

<header class="hdr">
    <div class="hdr__row1">
        <span class="hdr__brand"><strong>ITD Services</strong> &middot; Speaker Notes</span>
        <span class="hdr__meta">CSB Bank &middot; Meeting 02</span>
    </div>
    <h1>Speaker Notes &middot; 19 Slides + Closing</h1>
    <div class="hdr__sub">Open on your phone during the 20-min pitch. Tap a slide chip below to jump.</div>
</header>

<nav class="toc" aria-label="Jump to slide">
    <div class="toc__row">
        <a href="#s1">S01</a><a href="#s2">S02</a><a href="#s3">S03</a><a href="#s4">S04</a>
        <a href="#s5">S05</a><a href="#s6">S06</a><a href="#s7">S07</a><a href="#s8">S08</a>
        <a href="#s9">S09</a><a href="#s10">S10</a><a href="#s11">S11</a><a href="#s12">S12</a>
        <a href="#s13">S13</a><a href="#s14">S14</a><a href="#s15">S15</a><a href="#s16">S16</a>
        <a href="#s17">S17</a><a href="#s18">S18</a><a href="#s19">S19</a>
        <a href="#closing" class="closing">Closing Q&amp;A</a>
    </div>
</nav>

<!-- ================= S01 — ITD SERVICES ================= -->
<section class="slide-card" id="s1">
    <span class="slide-card__pill">Slide 01 &middot; 60s</span>
    <h2>ITD Services &mdash; Introduction</h2>
    <p class="slide-card__sub">Set the frame. Introduce ITD Services as a trusted enterprise technology partner.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Thank the CSB team for the productive meeting 01 and for making time again.</li>
        <li>Confirm today&rsquo;s session is a <strong>20-minute solution consulting workshop</strong>, not a sales pitch.</li>
        <li>Introduce ITD Services: established 2018, Mumbai HQ, 30+ in-house professionals, 300+ enterprise clients delivered.</li>
        <li>Highlight our track record: enterprise software engineering, AI + OCR, workflow automation, banking-aligned enterprise SaaS.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Is 20 minutes still comfortable, or would you like us to slow down at any point?</li>
        <li>Any additional stakeholders joining that we should re-frame for?</li>
        <li>Before we dive in &mdash; anything from meeting 01 you want us to revisit first?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they mention a new stakeholder &rarr; ask their role + what they want out of today.</li>
        <li>If they push back on scope &rarr; ask what changed and re-scope on the spot.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Mention we&rsquo;ll cover architecture on slide 9 &mdash; keep tech chatter for that.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Position ITD as a long-term enterprise technology partner &mdash; not a one-off software vendor.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>Attendees include Procurement, IT, Ops, Senior Management (per invite).</li>
    </ul></div>
</section>

<!-- ================= S02 — AGENDA ================= -->
<section class="slide-card" id="s2">
    <span class="slide-card__pill">Slide 02 &middot; 60s</span>
    <h2>Agenda &mdash; 20 Minutes</h2>
    <p class="slide-card__sub">Structure the session. Manage the time budget out loud.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Walk through the 6 sections quickly.</li>
        <li>Emphasise the <strong>two approaches</strong> as the core of the session.</li>
        <li>Note we&rsquo;ll leave 2 minutes at the end for Q&amp;A and next-step decisions.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Does this agenda cover what you were hoping to see today?</li>
        <li>Anything you&rsquo;d like us to spend more or less time on?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they want to skip capabilities recap &rarr; go straight to Slide 5 (the two approaches).</li>
        <li>If they want deeper security discussion &rarr; note it and defer to Slide 18.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>None &mdash; this is a session-navigation slide.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Reinforce we&rsquo;re respecting their time budget.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>20 minutes is the working window; +5-10 min for discussion if they want.</li>
    </ul></div>
</section>

<!-- ================= S03 — UNDERSTANDING ================= -->
<section class="slide-card" id="s3">
    <span class="slide-card__pill">Slide 03 &middot; 90s</span>
    <h2>Our Understanding of the Requirement</h2>
    <p class="slide-card__sub">Play back the scope. Invite corrections BEFORE we spend time on the approach.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Read the functional scope aloud &mdash; pause after each block.</li>
        <li>Explicitly ask: &ldquo;Have we captured this correctly?&rdquo;</li>
        <li>Call out the 12 OCR fields &mdash; ask if any are missing or wrong.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Is anything in this scope inaccurate or incomplete?</li>
        <li>Are there fields beyond the 12 we should also capture?</li>
        <li>What is the <strong>monthly volume</strong> &mdash; rent invoices vs vendor invoices?</li>
        <li>Are rent and vendor invoice processes today run by the same team or different?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If volume is huge &rarr; ask about seasonality and branch distribution.</li>
        <li>If they add a new field &rarr; ask its business criticality and where it comes from (invoice, PO, or master).</li>
        <li>If they mention different processes for rent vs vendor &rarr; probe the current team structure.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Note that OCR accuracy targets in Slide 10 assume a moderate template variety.</li>
        <li>Non-standard invoice formats increase training data need.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Understand which invoice type is priority-one for CSB right now &mdash; rent or vendor.</li>
        <li>Ask about audit / regulatory deadline drivers behind this project.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>Scope is finalised &mdash; no material additions expected between now and SOW.</li>
        <li>India-only entities &mdash; no cross-border invoicing in scope.</li>
    </ul></div>
</section>

<!-- ================= S04 — CAPABILITIES ================= -->
<section class="slide-card" id="s4">
    <span class="slide-card__pill">Slide 04 &middot; 60s</span>
    <h2>ITD Services &mdash; Relevant Capabilities</h2>
    <p class="slide-card__sub">Anchor credibility. Do NOT re-pitch the whole company profile.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Reference full company profile PDF was shared post-meeting 01.</li>
        <li>Highlight ONLY the 3 most relevant: <strong>OCR + Doc Intelligence</strong>, <strong>Enterprise SaaS</strong>, <strong>ERP Integration</strong>.</li>
        <li>Cite proof points on request: 300+ enterprise clients, production-grade OCR, banking-adjacent SaaS platforms.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Any capability you want us to go deeper on before we discuss approaches?</li>
        <li>Would you like reference clients for OCR pipelines in production?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they ask for references &rarr; commit to sharing 2-3 anonymised case studies within 3 business days.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Mention we use LayoutLMv3 + template models with fine-tuning &mdash; but keep it brief.</li>
        <li>Note our workflow engine is Camunda-inspired, config-driven.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Frame our banking-adjacent SaaS as evidence, not as claimed banking work.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>Company profile PDF was reviewed by CSB team before today.</li>
    </ul></div>
</section>

<!-- ================= S05 — TWO APPROACHES ================= -->
<section class="slide-card" id="s5">
    <span class="slide-card__pill">Slide 05 &middot; 60s</span>
    <h2>Two Solution Approaches</h2>
    <p class="slide-card__sub">Pivot slide. Show that we&rsquo;re proposing a hybrid, not just what they asked for.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Approach 1 is the solution CSB Bank asked for &mdash; AI-OCR.</li>
        <li>Approach 2 is our recommendation for rent specifically &mdash; agreement-based.</li>
        <li>Our recommendation is to run <strong>both in a hybrid</strong>: Approach 1 for vendor, Approach 2 for rent.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Are you open to running both approaches in parallel?</li>
        <li>Is there an internal preference to keep everything on a single platform?</li>
        <li>Which invoice type do you consider higher priority?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they only want Approach 1 &rarr; ask what would make them consider Approach 2.</li>
        <li>If they push back on 2 platforms &rarr; clarify it&rsquo;s one shared platform, two workflows.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Both approaches share: approval workflow engine, ERP adapter, dashboard, audit log.</li>
        <li>Only Approach 2 adds: agreement repository + rule-based invoice generation engine.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Approach 2 has higher long-term ROI for rent because it eliminates the collection cycle entirely.</li>
        <li>Change management is the trade-off &mdash; landlord onboarding needed.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>CSB has authority (or ability to get authority) to move rent invoicing to a system-generated model.</li>
        <li>Legal/audit are comfortable with system-generated invoices.</li>
    </ul></div>
</section>

<!-- ================= S06 — APPROACH 1 OVERVIEW ================= -->
<section class="slide-card" id="s6">
    <span class="slide-card__pill">Slide 06 &middot; 60s</span>
    <h2>Approach 1 &mdash; Overview</h2>
    <p class="slide-card__sub">Anchor Approach 1 in CSB&rsquo;s actual pain and the outcomes we&rsquo;ll deliver.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Read the 3 client challenges aloud. Pause after each to validate.</li>
        <li>Move to business outcomes: 80% manual-effort reduction, 95%+ OCR accuracy, &lt;24h cycle.</li>
        <li>Reinforce: outcomes come from architecture + human-in-the-loop, not magic.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Which of these 3 challenges hurts most today?</li>
        <li>Do you have historical data on GSTIN mismatch penalties or ITC losses?</li>
        <li>Is your current invoice-to-approval SLA measured?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they mention a specific penalty case &rarr; ask ballpark rupee cost to build a business case together.</li>
        <li>If SLA is unmeasured &rarr; propose measuring baseline in Phase 1 discovery.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Note that the 95%+ OCR figure assumes a 6-week training window with real CSB invoices.</li>
        <li>Standardising a small subset of vendor templates upfront speeds up training.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>The re-deployment of ops team from data entry to exception handling is a real efficiency dividend, not just automation.</li>
        <li>Attach a rough business case: X FTE saved &times; annual cost = ROI in Y months.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>CSB will share 3-6 months of historical invoices for OCR training corpus.</li>
        <li>Ops team will engage in a UAT + parallel-run window.</li>
    </ul></div>
</section>

<!-- ================= S07 — CURRENT STATE ================= -->
<section class="slide-card" id="s7">
    <span class="slide-card__pill">Slide 07 &middot; 60s</span>
    <h2>Current State &mdash; Invoice Process</h2>
    <p class="slide-card__sub">Show our best-guess current process. Invite corrections.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Walk down the 6 steps. Highlight the 4 red (manual) steps.</li>
        <li>Say explicitly: &ldquo;This is our best-guess &mdash; is this how it actually works today?&rdquo;</li>
        <li>Every bank varies &mdash; we want CSB&rsquo;s specific reality before we architect the future state.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Is this current process broadly accurate for CSB?</li>
        <li>What happens today when an invoice arrives with missing fields or bad GSTIN?</li>
        <li>What&rsquo;s the current cycle time from invoice receipt to ERP posting?</li>
        <li>Who owns the exception handling today?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they describe a very different current state &rarr; redraw the future state around it.</li>
        <li>If cycle time varies widely &rarr; ask about outliers and root cause.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Note if any part is already partly automated &mdash; we build on top, not replace.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>The number of manual touchpoints correlates directly to error rate.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>ERP posting is currently manual or batch-uploaded, not real-time.</li>
        <li>No existing OCR or workflow tool in use today.</li>
    </ul></div>
</section>

<!-- ================= S08 — PAIN POINTS ================= -->
<section class="slide-card" id="s8">
    <span class="slide-card__pill">Slide 08 &middot; 45s</span>
    <h2>Pain Points in the Current State</h2>
    <p class="slide-card__sub">Crystallise the pain. Ask which one hurts most.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Don&rsquo;t belabour &mdash; the CSB team knows these already.</li>
        <li>The point is to signal that we understand their world.</li>
        <li>Ask which of the 8 hurts most &mdash; their answer tells us where to emphasise roadmap.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Which of these pain points is highest priority?</li>
        <li>Any pain we&rsquo;ve missed?</li>
        <li>What&rsquo;s the current annual write-off from invoice errors or missed ITC?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they cite a specific write-off number &rarr; use it as the ROI anchor for the SOW.</li>
        <li>If GST penalty is top &rarr; deep-dive on validation engine in Slide 09.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Each pain maps to a specific architecture layer &mdash; be ready to point when asked.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Quantifiable pain (GST penalties, duplicates) = concrete ROI. Ops effort = softer but real.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>These 8 map to CSB&rsquo;s actual experience &mdash; not just industry generic.</li>
    </ul></div>
</section>

<!-- ================= S09 — FUTURE STATE ARCHITECTURE ================= -->
<section class="slide-card" id="s9">
    <span class="slide-card__pill">Slide 09 &middot; 90s</span>
    <h2>Future State &mdash; Solution Architecture</h2>
    <p class="slide-card__sub">6-layer architecture. This is the technical anchor of Approach 1.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Walk down the layers. Emphasise modular design &mdash; each layer can evolve.</li>
        <li>Highlight the accent-bordered <strong>Validation &amp; Exception</strong> row &mdash; this is where 95%+ accuracy is delivered.</li>
        <li>Note on-prem or cloud is CSB&rsquo;s choice; both supported.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Do you have a preferred cloud provider, or is on-prem mandatory for banking data?</li>
        <li>Do you have any existing OCR engine investment we should evaluate?</li>
        <li>Which of these 6 layers do you want us to expand on?</li>
        <li>What&rsquo;s your ERP &mdash; Finacle, SAP, Oracle, or custom?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they say on-prem &rarr; ask about their DC capacity, hypervisor, network zones.</li>
        <li>If they mention Finacle &rarr; check version and available integration methods.</li>
        <li>If they have existing OCR &rarr; audit the fit vs replace decision.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>LayoutLMv3 + template detection for standard vendors; ML fallback for the rest.</li>
        <li>Adapter pattern for ERP allows swap without touching business logic.</li>
        <li>Immutable audit log via append-only + hash-chain, retention 8 years default.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Modular = future-proof. New invoice types don&rsquo;t require rebuild.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>CSB can share ERP spec (protocols, sandbox access) in Phase 1.</li>
        <li>Deployment location decision (on-prem vs cloud) will be made in Phase 1 discovery.</li>
    </ul></div>
</section>

<!-- ================= S10 — HUMAN IN LOOP ================= -->
<section class="slide-card" id="s10">
    <span class="slide-card__pill">Slide 10 &middot; 60s</span>
    <h2>Human-in-the-Loop Review</h2>
    <p class="slide-card__sub">Trust-building slide. Show we&rsquo;ve engineered the exception path deliberately.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>AI is not 100% &mdash; pretending otherwise loses credibility.</li>
        <li>Every review is a training signal. Model improves over time.</li>
        <li>After 6 weeks of production data, exception rate typically drops below 5%.</li>
        <li>SLA on exceptions ensures they don&rsquo;t become the new bottleneck.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Who from your ops team will be the primary reviewer?</li>
        <li>What&rsquo;s the acceptable exception-handling SLA &mdash; 4h, 24h?</li>
        <li>Do you want us to build the review UI or integrate with an existing tool?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If SLA is tight (&lt;4h) &rarr; ask about staffing coverage and after-hours policy.</li>
        <li>If existing review tool &rarr; check API/webhook compatibility.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Nightly retrain feeds corrections back into the model.</li>
        <li>Confidence threshold is tunable per field &mdash; sensitive fields like GSTIN can be tighter.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Reviewer role evolves from data-entry to exception-handler &mdash; higher-value work.</li>
        <li>Ops effort ~2 FTE for CSB&rsquo;s estimated volume after steady state.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>CSB will assign 1-2 named reviewers during pilot + steady-state.</li>
        <li>Nightly retrain is acceptable &mdash; not required real-time.</li>
    </ul></div>
</section>

<!-- ================= S11 — DASHBOARD, REPORTS, AUDIT ================= -->
<section class="slide-card" id="s11">
    <span class="slide-card__pill">Slide 11 &middot; 60s</span>
    <h2>Dashboard, Reports &amp; Audit Trail</h2>
    <p class="slide-card__sub">Show the visibility layer. Three views for three roles.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Live dashboard for ops. Scheduled reports for finance. Immutable log for audit.</li>
        <li>Every field change is captured: user, timestamp, IP, before/after, reason.</li>
        <li>Retention 8 years default (RBI norm), configurable per document class.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Do you have specific report templates from finance/audit that we should pre-build?</li>
        <li>What&rsquo;s your data retention requirement &mdash; 8 years, 10 years?</li>
        <li>Any specific KPI on the executive dashboard?</li>
        <li>Who signs off on regulator-ready export packages today?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they have existing BI (Tableau/PowerBI) &rarr; offer read-only feed integration.</li>
        <li>If retention &gt; 8 yrs &rarr; note storage cost implications.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Cryptographic hash chain makes tampering detectable.</li>
        <li>Watermarked PDF exports with purpose + recipient traceability.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Regulator-ready design cuts audit reconstruction cost dramatically.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>Finance team can provide top-5 report templates for pre-build.</li>
        <li>Read-only auditor role with time-boxed access is acceptable.</li>
    </ul></div>
</section>

<!-- ================= S12 — BIGGER QUESTION ================= -->
<section class="slide-card" id="s12">
    <span class="slide-card__pill">Slide 12 &middot; 60s</span>
    <h2>Approach 2 &mdash; The Bigger Question</h2>
    <p class="slide-card__sub">Mindset shift. Pause on the question before answering.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Ask the question aloud. Let it hang for 3-5 seconds.</li>
        <li>For rent &mdash; the agreement locks the amount, GST, escalation, payment date.</li>
        <li>Collecting a monthly invoice for known contractual amounts is a ritual, not a necessity.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>How does the concept land initially?</li>
        <li>Is there a legal or audit constraint that requires you to hold a monthly invoice document?</li>
        <li>Are landlords currently required to submit invoices contractually, or is it operational habit?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they say &ldquo;yes, invoice is legally required&rdquo; &rarr; note it. We can generate + landlord signs back.</li>
        <li>If it&rsquo;s habit only &rarr; explore change-management concerns.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Legal validity of system-generated invoices under Indian Evidence Act is well-established.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>This is the mindset flip that unlocks 90% ops effort savings for rent.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>CSB is open to reviewing this concept with legal + audit stakeholders.</li>
    </ul></div>
</section>

<!-- ================= S13 — CURRENT RENT ================= -->
<section class="slide-card" id="s13">
    <span class="slide-card__pill">Slide 13 &middot; 60s</span>
    <h2>Current Rent Process</h2>
    <p class="slide-card__sub">Show the effort dividend we&rsquo;re unlocking.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Every month, the same cycle: chase 500+ landlords, receive varied formats, re-key, chase approvals.</li>
        <li>40&ndash;60% of rent-ops cycle time is coordination overhead, not value-added.</li>
        <li>Approach 2 removes this entire layer.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Is 40&ndash;60% roughly right for your rent-ops team?</li>
        <li>How many landlords do you deal with monthly?</li>
        <li>What percentage of landlords are rural / low-tech?</li>
        <li>Do rural landlords currently receive digital invoices or paper?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If rural is a large %&rarr; deep-dive on WhatsApp + SMS + optional physical mail channel.</li>
        <li>If landlord count is huge &rarr; discuss branch-owner responsibilities in onboarding.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Landlord portal + WhatsApp notify covers 90%+ of landlord communication needs.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Ops FTE savings can be redirected to landlord-relationship + audit-readiness work.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>CSB has enough landlord contact data (phone / email) to onboard majority.</li>
        <li>Branch-level ops teams are willing to help onboard local landlords.</li>
    </ul></div>
</section>

<!-- ================= S14 — APPROACH 2 FUTURE ================= -->
<section class="slide-card" id="s14">
    <span class="slide-card__pill">Slide 14 &middot; 60s</span>
    <h2>Approach 2 &mdash; Future State</h2>
    <p class="slide-card__sub">Show the inverted flow. Agreement in on Day 0. Invoices out every month.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Day 0: agreement in encrypted repository, term extracted.</li>
        <li>Every month: invoice auto-generated, GST computed, approval-routed, ERP posted, landlord notified.</li>
        <li>Amendment / renewal / termination handled by exception paths (not blockers).</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Are you comfortable moving to system-generated invoices legally?</li>
        <li>Would you want landlord digital sign-back on generated invoices?</li>
        <li>Any state-specific stamp or legal requirement we need to encode?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they want sign-back &rarr; discuss Aadhaar eSign vs OTP click-back.</li>
        <li>If state-specific stamp needed &rarr; note state list, encode in Phase 1.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Invoice template can be CSB-branded PDF with configurable line items.</li>
        <li>Escalation calendar engine handles annual / biannual / CPI-linked variants.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Reconciliation between agreed rent and invoiced rent becomes structurally impossible to break.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>CSB accepts system-generated PDFs as valid invoice documents.</li>
        <li>Legal + audit will review the invoice template design in Phase 1.</li>
    </ul></div>
</section>

<!-- ================= S15 — APPROACH 2 FLOW ================= -->
<section class="slide-card" id="s15">
    <span class="slide-card__pill">Slide 15 &middot; 90s</span>
    <h2>Approach 2 &mdash; Solution Flow (Detailed)</h2>
    <p class="slide-card__sub">Technical deep-dive for the IT team.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Walk down 6 layers. Only Layer 2 (term extraction) touches AI.</li>
        <li>Layer 3 (invoice generation engine) is pure rule engine &mdash; deterministic, cheap, auditable.</li>
        <li>Variable charges have their own line-item channel that flows into the same invoice.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Are agreements typically in English or vernacular?</li>
        <li>Do you need to handle variable charges (utilities, maintenance) as separate line items?</li>
        <li>How does CSB currently handle mid-term amendments?</li>
        <li>Any digital sign-back or acknowledgement required by law?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If vernacular agreements &rarr; note LLM needs to handle multi-language.</li>
        <li>If amendment workflow is critical &rarr; discuss versioning + effective-date logic.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>LLM runs ONCE per agreement (upload + review). Zero runtime LLM cost after.</li>
        <li>Amendment path forks the term-set with effective-date, preserving history.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Deterministic runtime = predictable cost + auditability.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>Agreements are primarily English (or predominantly one language).</li>
        <li>Variable charge upload channel is acceptable (portal, not email).</li>
    </ul></div>
</section>

<!-- ================= S16 — BUSINESS CASE ================= -->
<section class="slide-card" id="s16">
    <span class="slide-card__pill">Slide 16 &middot; 60s</span>
    <h2>Approach 2 &mdash; Business Case</h2>
    <p class="slide-card__sub">Concrete before/after benefits.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>7 dimensions of comparison.</li>
        <li>Most compelling: 90% ops effort reduction, contract-perfect audit, zero-touch landlord.</li>
        <li>Scalability: 10x landlords, 0 new FTE.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Do these benefits align with your priorities?</li>
        <li>Which matter most to procurement / IT / ops / audit?</li>
        <li>Any benefit we&rsquo;re overstating?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they push back on a claim &rarr; ask for their view + adjust.</li>
        <li>If ROI is the anchor &rarr; commit to a jointly-owned ROI worksheet.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Deterministic rule engine = &lt;0.5% error rate structurally.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Compounding advantage: each cycle is cheaper than the last.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>Landlord onboarding is achievable in a 6-8 week window per pilot branch.</li>
    </ul></div>
</section>

<!-- ================= S17 — COMPARISON ================= -->
<section class="slide-card" id="s17">
    <span class="slide-card__pill">Slide 17 &middot; 90s</span>
    <h2>Approach 1 vs 2 &mdash; Comparison</h2>
    <p class="slide-card__sub">Land the recommended hybrid.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Walk down 9 rows.</li>
        <li>Approach 1 wins on: vendor fit, change management.</li>
        <li>Approach 2 wins on: rent fit, ops effort, audit posture, long-term ROI.</li>
        <li>Verdict box: recommend <strong>both</strong>. Vendor &rarr; Approach 1; Rent &rarr; Approach 2. Shared platform.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Does the hybrid recommendation feel right for CSB?</li>
        <li>Is procurement / IT comfortable with two workflows on one platform?</li>
        <li>Any preference on which stream to start first?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they want to start with Approach 1 only &rarr; note it and design shared foundation now, Approach 2 later.</li>
        <li>If they want to start with Approach 2 &rarr; discuss pilot branch selection.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Shared components: workflow engine, ERP adapter, dashboard, audit log.</li>
        <li>Approach 2 adds: agreement repo + rule-based generation engine.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Small incremental investment for Approach 2 on top of Approach 1 &mdash; disproportionate long-term value.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>CSB is open to hybrid engagement scope in a single SOW.</li>
    </ul></div>
</section>

<!-- ================= S18 — SECURITY ================= -->
<section class="slide-card" id="s18">
    <span class="slide-card__pill">Slide 18 &middot; 60s</span>
    <h2>Security, Compliance, Audit &amp; Data Residency</h2>
    <p class="slide-card__sub">The CISO team&rsquo;s slide.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>12 tiles. Baseline coverage.</li>
        <li>India data residency by default.</li>
        <li>On-prem or private cloud &mdash; CSB&rsquo;s choice.</li>
        <li>Specific frameworks (RBI IT, DPDP) can be extended in Phase 1.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Which security framework is CSB currently certified under?</li>
        <li>Private-cloud tenant (India region) acceptable, or is on-prem mandatory?</li>
        <li>Do you need a specific VAPT vendor to test our system?</li>
        <li>Who&rsquo;s the CISO or security-approval owner we&rsquo;ll engage?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If specific VAPT vendor required &rarr; coordinate in Phase 4 pre-go-live.</li>
        <li>If CISO not present today &rarr; propose a separate 30-min security-focused session.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>AES-256 at rest with per-tenant keys.</li>
        <li>TLS 1.3 mutual auth.</li>
        <li>Cryptographic hash-chained audit log &mdash; tampering detectable.</li>
        <li>Multi-AZ DR, RTO&lt;4h, RPO&lt;15min.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>Bank-grade non-functionals baked in from Day 1 &mdash; not bolted on later.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>India data residency is mandatory.</li>
        <li>SSO integration with CSB&rsquo;s existing IdP is expected.</li>
    </ul></div>
</section>

<!-- ================= S19 — QUESTIONS + NEXT STEPS ================= -->
<section class="slide-card" id="s19">
    <span class="slide-card__pill">Slide 19 &middot; 120s</span>
    <h2>Questions for CSB + Next Steps</h2>
    <p class="slide-card__sub">Close the loop. Surface the 8 questions and 3 next steps.</p>

    <div class="blk tp"><h4><i class="fas fa-comment"></i>Key talking points</h4><ul>
        <li>Read the 8 questions slowly.</li>
        <li>Ask for a single owner from CSB to coordinate responses.</li>
        <li>Propose 3 concrete next steps: 1-week workshop, SoW in 5 business days after, kick-off in 2 weeks after sign-off.</li>
        <li>Point to the contact block &mdash; Loy is the primary owner.</li>
    </ul></div>

    <div class="blk qa"><h4><i class="fas fa-circle-question"></i>Questions to ask</h4><ul>
        <li>Who from CSB will own the responses to these 8 questions?</li>
        <li>What&rsquo;s the target date for SoW sign-off?</li>
        <li>Any decision-maker not in the room today who should be looped in?</li>
        <li>Would you like to schedule the 1-week workshop right now?</li>
    </ul></div>

    <div class="blk fu"><h4><i class="fas fa-arrow-turn-down"></i>Follow-up questions</h4><ul>
        <li>If they name an owner &rarr; commit to a follow-up meeting in that person&rsquo;s calendar within 3 days.</li>
        <li>If they push for a written SoW without workshop &rarr; propose a hybrid: initial SoW draft + workshop for validation.</li>
        <li>If timeline is aggressive &rarr; discuss what Phase 1 discovery can compress.</li>
    </ul></div>

    <div class="blk tech"><h4><i class="fas fa-microchip"></i>Technical discussion</h4><ul>
        <li>Technical workshop deliverables: ERP integration spec, DoA matrix walkthrough, OCR training-set spec, security architecture review.</li>
    </ul></div>

    <div class="blk biz"><h4><i class="fas fa-chart-line"></i>Business discussion</h4><ul>
        <li>SoW draft ready 5 business days post-workshop.</li>
        <li>Phase 1 kickoff within 2 weeks of sign-off.</li>
    </ul></div>

    <div class="blk asm"><h4><i class="fas fa-question-circle"></i>Assumptions to confirm</h4><ul>
        <li>CSB has procurement channel identified for engagement.</li>
        <li>SOW format expectations known (standard vs custom template).</li>
    </ul></div>
</section>

<!-- ================= CLOSING Q&A ================= -->
<section class="closing-card" id="closing">
    <span class="closing-card__pill">Closing Discussion &middot; 3-5 min buffer</span>
    <h2>Closing Q&amp;A &mdash; anticipated questions</h2>
    <p style="font-size:13.5px; color:var(--brand); margin-bottom:14px;">Prepared answers for the questions we expect after the deck ends. Open floor questions welcome &mdash; parking lot below.</p>
    <ol>
        <li><strong>&ldquo;What&rsquo;s the total investment for the hybrid?&rdquo;</strong> &rarr; SOW-dependent; ballpark shared post-workshop. Not quoted verbally.</li>
        <li><strong>&ldquo;Can you show us a live demo?&rdquo;</strong> &rarr; Yes &mdash; sandbox demo can be arranged after the workshop.</li>
        <li><strong>&ldquo;Do you have banking references?&rdquo;</strong> &rarr; Banking-adjacent enterprise SaaS references + 2-3 case studies within 3 business days.</li>
        <li><strong>&ldquo;What about ongoing support / AMC?&rdquo;</strong> &rarr; AMC retainer 15-20% of build cost / year. Named on-call engineer.</li>
        <li><strong>&ldquo;How does IP / source code ownership work?&rdquo;</strong> &rarr; 100% ownership to CSB, written into the SOW.</li>
        <li><strong>&ldquo;Can you match a specific competitor&rsquo;s price?&rdquo;</strong> &rarr; Not commit verbally. Say we&rsquo;ll scope + quote formally after workshop.</li>
        <li><strong>&ldquo;What&rsquo;s your fallback if OCR accuracy is below target?&rdquo;</strong> &rarr; Human-in-the-loop review + weekly retrain. SLA-backed accuracy commitment in SOW.</li>
        <li><strong>&ldquo;How do you handle scope changes mid-project?&rdquo;</strong> &rarr; Change-request process; small changes absorbed; large changes re-scoped and re-quoted.</li>
        <li><strong>&ldquo;What if CSB&rsquo;s IT team wants to build in-house?&rdquo;</strong> &rarr; We can advise + partner. Standalone advisory engagement is on the table.</li>
        <li><strong>&ldquo;Can we start with a paid pilot?&rdquo;</strong> &rarr; Yes &mdash; paid pilot for 2-3 branches on Approach 2 can start in 6 weeks.</li>
    </ol>
    <p style="font-size:13px; color:var(--text-4); margin-top:16px; font-style:italic;">Parking lot: capture any unresolved questions with a whiteboard photo or note. Commit to written follow-up within 3 business days.</p>
</section>

<footer class="foot">
    <a href="/csb-bank-solution.php" target="_blank" rel="noopener" class="foot__btn deck">
        <i class="fas fa-arrow-up-right-from-square"></i> Open Deck
    </a>
    <span class="foot__label">Speaker Notes v1</span>
    <a href="#closing" class="foot__btn">
        <i class="fas fa-flag-checkered"></i> Closing Q&amp;A
    </a>
</footer>

<script>
// Highlight active slide in TOC based on scroll
(function(){
    var links = document.querySelectorAll('.toc a');
    var sections = document.querySelectorAll('.slide-card, .closing-card');
    function onScroll(){
        var y = window.scrollY + 100;
        var activeId = sections[0].id;
        sections.forEach(function(s){ if (s.offsetTop <= y) activeId = s.id; });
        links.forEach(function(a){
            a.classList.toggle('active', a.getAttribute('href') === '#' + activeId);
        });
        // Auto-scroll TOC to keep active chip in view
        var activeLink = document.querySelector('.toc a.active');
        if (activeLink){
            var toc = document.querySelector('.toc');
            var linkLeft = activeLink.offsetLeft;
            var linkRight = linkLeft + activeLink.offsetWidth;
            var tocScrollLeft = toc.scrollLeft;
            var tocRight = tocScrollLeft + toc.offsetWidth;
            if (linkRight > tocRight - 40) toc.scrollLeft = linkRight - toc.offsetWidth + 40;
            else if (linkLeft < tocScrollLeft + 40) toc.scrollLeft = linkLeft - 40;
        }
    }
    window.addEventListener('scroll', onScroll, {passive:true});
    onScroll();
})();
</script>
</body>
</html>
