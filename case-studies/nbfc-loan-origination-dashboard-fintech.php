<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M4XDB2GZ');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Case study: NBFC loan origination dashboard we built. Same-day disbursal, 14,000+ monthly applications, 9 underwriting policies, RBI-compliant audit trail. Java + React + KYC stack.">
    <title>NBFC Loan Origination Platform — From 22-Day TAT to Same-Day Disbursal at Scale | ITD GrowthLabs</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <link rel="alternate" hreflang="en-in" href="https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php">
    <link rel="alternate" hreflang="en-us" href="https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php">
    <link rel="alternate" hreflang="en-gb" href="https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php">
    <link rel="alternate" hreflang="en-au" href="https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php">
    <link rel="alternate" hreflang="en-ae" href="https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php">
    <link rel="alternate" hreflang="x-default" href="https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php">

    <meta property="og:title" content="NBFC Loan Origination Platform — From 22-Day TAT to Same-Day Disbursal at Scale | ITD GrowthLabs">
    <meta property="og:description" content="How we built a loan origination platform for an NBFC that compressed turn-around time from 22 days to same-day disbursal at scale.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php">
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">
    <meta property="og:image:alt" content="NBFC Loan Origination Platform case study by ITD GrowthLabs">
    <meta property="og:site_name" content="ITD GrowthLabs">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NBFC Loan Origination Platform — ITD GrowthLabs Case Study">
    <meta name="twitter:description" content="Borrower app, agent app, underwriting console. Java Spring + React + KYC + bureau integrations. 14,000+ monthly applications.">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/elegant-icons.css" rel="stylesheet">
    <link href="/assets/css/flaticon-set.css" rel="stylesheet">
    <link href="/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="/assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/validnavs.css" rel="stylesheet">
    <link href="/assets/css/helper.css" rel="stylesheet">
    <link href="/assets/css/unit-test.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17674012925"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-17674012925');
    </script>

    <!-- Schema: Article + BreadcrumbList -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "NBFC Loan Origination Platform — From 22-Day TAT to Same-Day Disbursal at Scale",
  "description": "Case study: NBFC loan origination dashboard we built. Same-day disbursal, 14,000+ monthly applications, 9 underwriting policies, RBI-compliant audit trail. Java + React + KYC stack.",
  "image": "https://itdgrowthlabs.com/assets/img/logo.jpg",
  "datePublished": "2026-04-27",
  "dateModified": "2026-04-27",
  "author": {
    "@type": "Organization",
    "name": "ITD GrowthLabs",
    "url": "https://itdgrowthlabs.com"
  },
  "publisher": {
    "@type": "Organization",
    "name": "ITD GrowthLabs",
    "logo": {
      "@type": "ImageObject",
      "url": "https://itdgrowthlabs.com/assets/img/logo.jpg"
    }
  },
  "mainEntityOfPage": "https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php",
  "about": "Loan origination platform development",
  "keywords": "NBFC software, loan origination system, LOS development, fintech app development, KYC integration, credit bureau API, RBI digital lending, underwriting automation"
}
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://itdgrowthlabs.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Case Studies",
      "item": "https://itdgrowthlabs.com/case-studies.php"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "NBFC Loan Origination Platform",
      "item": "https://itdgrowthlabs.com/case-studies/nbfc-loan-origination-dashboard-fintech.php"
    }
  ]
}
    </script>

    <style>
        :root { --cs-primary: #ff6b00; --cs-heading: #0a1629; --cs-body: #4a5568; }
        .cs-hero { background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); color: #fff; position: relative; overflow: hidden; padding: 120px 0 80px; }
        .cs-hero::before { content: ''; position: absolute; inset: 0; background: url(/assets/img/shape/banner-3.jpg) center/cover no-repeat; opacity: 0.12; }
        .cs-hero .container { position: relative; z-index: 2; }
        .cs-crumb { font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 22px; }
        .cs-crumb a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .cs-crumb a:hover { color: #fff; }
        .cs-crumb .sep { color: rgba(255,255,255,0.35); margin: 0 8px; }
        .cs-crumb .now { color: var(--cs-primary); font-weight: 600; }
        .cs-eyebrow { display: inline-block; padding: 6px 14px; background: rgba(255,107,0,0.15); color: var(--cs-primary); border: 1px solid rgba(255,107,0,0.3); border-radius: 30px; font-size: 12px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 18px; }
        .cs-title { font-size: 42px; font-weight: 800; line-height: 1.2; margin-bottom: 18px; }
        .cs-subtitle { font-size: 17px; line-height: 1.8; opacity: 0.88; max-width: 720px; }

        .cs-kpi-bar { background: #fff; padding: 28px 0; border-bottom: 1px solid #eef1f5; }
        .cs-kpi-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center; }
        .cs-kpi-num { display: block; font-size: 30px; font-weight: 800; color: var(--cs-primary); line-height: 1; margin-bottom: 6px; }
        .cs-kpi-label { font-size: 13px; color: #555; font-weight: 500; letter-spacing: 0.3px; }
        @media (max-width: 768px) { .cs-kpi-grid { grid-template-columns: repeat(2, 1fr); gap: 18px; } .cs-kpi-num { font-size: 24px; } }

        .cs-body-wrap { padding: 70px 0; }
        .cs-block { margin-bottom: 50px; }
        .cs-block h2 { font-size: 28px; font-weight: 800; color: var(--cs-heading); margin-bottom: 18px; line-height: 1.3; }
        .cs-block h3 { font-size: 20px; font-weight: 700; color: var(--cs-heading); margin: 24px 0 12px; }
        .cs-block p { font-size: 16px; line-height: 1.85; color: var(--cs-body); margin-bottom: 16px; }
        .cs-block ul { padding-left: 22px; margin-bottom: 18px; }
        .cs-block ul li { font-size: 16px; line-height: 1.85; color: var(--cs-body); margin-bottom: 8px; }
        .cs-block ul li strong { color: var(--cs-heading); }

        .cs-facts { background: #f8fafc; border: 1px solid #eef1f5; border-left: 4px solid var(--cs-primary); border-radius: 10px; padding: 22px 26px; margin-bottom: 40px; }
        .cs-facts h4 { font-size: 13px; letter-spacing: 1.5px; text-transform: uppercase; color: var(--cs-primary); font-weight: 700; margin-bottom: 14px; }
        .cs-facts dl { display: grid; grid-template-columns: 180px 1fr; gap: 10px 20px; margin: 0; }
        .cs-facts dt { font-weight: 700; color: var(--cs-heading); font-size: 14px; }
        .cs-facts dd { margin: 0; color: var(--cs-body); font-size: 14px; }
        @media (max-width: 580px) { .cs-facts dl { grid-template-columns: 1fr; gap: 2px 0; } .cs-facts dd { margin-bottom: 10px; } }

        .tech-chip { display: inline-block; padding: 6px 14px; background: #f5f7fa; color: var(--cs-heading); font-size: 13px; font-weight: 500; border: 1px solid #e8ecf1; border-radius: 6px; margin: 3px 4px; }

        .result-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-top: 20px; }
        .result-card { background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%); border-radius: 12px; padding: 22px 18px; text-align: center; border: 1px solid #eef1f5; }
        .result-card .rn { display: block; font-size: 28px; font-weight: 800; color: var(--cs-primary); line-height: 1.1; margin-bottom: 6px; }
        .result-card .rl { font-size: 13px; color: var(--cs-body); }

        .cs-testimonial-card { background: linear-gradient(135deg, #f8fafc, #fff); border: 1px solid #eef1f5; border-left: 5px solid var(--cs-primary); border-radius: 12px; padding: 30px; margin: 40px 0; }
        .cs-testimonial-card .q { font-size: 17px; line-height: 1.8; color: var(--cs-heading); font-style: italic; margin-bottom: 16px; }
        .cs-testimonial-card .a { font-size: 14px; font-weight: 700; color: var(--cs-heading); }
        .cs-testimonial-card .r { font-size: 13px; color: #777; }

        .cs-cta { background: linear-gradient(135deg, var(--cs-primary), #e65100); border-radius: 16px; padding: 40px; color: #fff; margin-top: 40px; }
        .cs-cta h3 { color: #fff; font-size: 26px; font-weight: 800; margin-bottom: 10px; }
        .cs-cta p { color: rgba(255,255,255,0.92); margin-bottom: 24px; font-size: 16px; }
        .cs-cta-btn { display: inline-block; background: #fff; color: var(--cs-primary); padding: 13px 30px; border-radius: 30px; font-weight: 700; text-decoration: none; font-size: 15px; transition: transform .25s ease, box-shadow .25s ease; }
        .cs-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.25); color: var(--cs-primary); }

        .cs-related { background: #f8fafc; padding: 60px 0; }
        .cs-related h3 { font-size: 22px; font-weight: 800; color: var(--cs-heading); margin-bottom: 24px; }
        .cs-related-card { background: #fff; border: 1px solid #eef1f5; border-radius: 12px; padding: 22px; transition: all .25s ease; height: 100%; }
        .cs-related-card:hover { transform: translateY(-3px); box-shadow: 0 8px 25px rgba(0,0,0,0.07); }
        .cs-related-card h4 { font-size: 16px; font-weight: 700; color: var(--cs-heading); margin-bottom: 8px; }
        .cs-related-card p { font-size: 14px; color: var(--cs-body); margin-bottom: 14px; line-height: 1.6; }
        .cs-related-card a { color: var(--cs-primary); font-weight: 600; font-size: 14px; text-decoration: none; }
        .cs-related-card a:hover { text-decoration: underline; }

        @media (max-width: 768px) {
            .cs-title { font-size: 30px; }
            .cs-hero { padding: 90px 0 60px; }
        }
    </style>
</head>

<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4XDB2GZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<?php include(__DIR__ . "/../includes/header.php"); ?>

<!-- Hero -->
<section class="cs-hero">
    <div class="container">
        <div class="cs-crumb">
            <a href="/index.php">Home</a><span class="sep">/</span>
            <a href="/case-studies.php">Case Studies</a><span class="sep">/</span>
            <span class="now">NBFC Loan Origination Platform</span>
        </div>
        <span class="cs-eyebrow"><i class="fas fa-money-check-alt" style="margin-right:6px;"></i>Fintech · NBFC · Loan Origination</span>
        <h1 class="cs-title">NBFC Loan Origination Platform — From 22-Day TAT to Same-Day Disbursal at Scale</h1>
        <p class="cs-subtitle">An NBFC was disbursing personal loans on a 22-day turn-around — competitive death in a sector where neo-banks promise same-day. We delivered an LOS (loan origination system) with KYC, bureau, and underwriting automation that compressed TAT to under 24 hours for 78% of applications.</p>
    </div>
</section>

<!-- KPI bar -->
<section class="cs-kpi-bar" aria-label="Headline results">
    <div class="container">
        <div class="cs-kpi-grid">
                <div><span class="cs-kpi-num">&lt;24h</span><span class="cs-kpi-label">TAT for 78% of Loans</span></div>
                <div><span class="cs-kpi-num">14,000+</span><span class="cs-kpi-label">Monthly Applications</span></div>
                <div><span class="cs-kpi-num">9</span><span class="cs-kpi-label">Underwriting Policies</span></div>
                <div><span class="cs-kpi-num">100%</span><span class="cs-kpi-label">RBI Audit Compliance</span></div>
        </div>
    </div>
</section>

<!-- Body -->
<section class="cs-body-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="cs-facts">
                    <h4>Project at a glance</h4>
                    <dl>
                        <dt>Industry</dt><dd>Fintech · NBFC · personal &amp; SME loans</dd>
                        <dt>Scope</dt><dd>Borrower mobile app, agent app, underwriting console, ops dashboard</dd>
                        <dt>Compliance</dt><dd>RBI digital lending guidelines, DPDP Act 2023, audit trail</dd>
                        <dt>Team size</dt><dd>13 engineers + 1 PM + 2 compliance + 1 risk consultant</dd>
                        <dt>Timeline</dt><dd>8 months to v1 · 11 months to multi-product</dd>
                        <dt>Status</dt><dd>Live · processing Rs 320 Cr/month gross disbursal</dd>
                    </dl>
                </div>

                <div class="cs-block">
                    <h2>The client &amp; the problem</h2>
                    <p>The NBFC had 80,000 customers, Rs 1,200 Cr book, and a 22-day average disbursal time on a stack stitched from two legacy LOS vendors and Excel. Every fintech competitor was promising same-day approval. The board mandated &lt;24-hour TAT or shut down the personal-loan vertical. We had nine months.</p>
                    <ul>
                        <li><strong>Manual KYC:</strong> Three different KYC vendors, no orchestration; agents re-keyed data into the system.</li>
                        <li><strong>Bureau pull at the end, not the start:</strong> Credit bureaus were pulled by underwriters manually after document collection — 4-day delay built in.</li>
                        <li><strong>Policy in code, not configuration:</strong> Every underwriting rule was hard-coded; policy iteration meant a code release.</li>
                        <li><strong>No mobile-first borrower flow:</strong> Borrowers visited a branch or called an agent. Drop-off was 64%.</li>
                        <li><strong>Audit-trail gaps:</strong> RBI's digital lending guidelines (Sept 2022) require an immutable audit trail; existing system had partial logging.</li>
                    </ul>
                </div>

                <div class="cs-block">
                    <h2>The solution</h2>
                    <p>We rebuilt the LOS from the ground up: a borrower-first app, a configurable rules engine, orchestrated KYC + bureau integrations, and an immutable audit layer. The platform supports nine product policies (personal, SME, gold, two-wheeler, etc.) without a code change.</p>
                    <h3>1. Borrower app (React Native)</h3>
                    <p>Apply-in-minutes flow: phone OTP, PAN + Aadhaar OTP-based KYC, occupation + income capture, bank statement upload (or AA-fetch), bureau consent, offer screen, e-mandate, e-NACH or e-sign, disbursal notification.</p>
                    <h3>2. Agent app (React Native)</h3>
                    <p>DSA / branch-agent flow: walk-in customers, lead capture, application initiation on borrower's behalf, document scanning, video-KYC initiation, status tracking, commission view.</p>
                    <h3>3. Underwriting console (React web)</h3>
                    <p>Application work-queue, full applicant view (KYC docs, bureau report, AA data, statement parser output), policy override flow with reason capture, four-eyes-check workflow, decision audit trail, ops dashboard.</p>
                    <h3>4. Configurable rules engine</h3>
                    <p>Policy = JSON (with a no-code editor for risk team). Each new product is a JSON definition. Auto-decision &gt; X score, manual review between X-Y, auto-decline &lt; Y. Override capture is mandatory and logged.</p>
                    <h3>5. Backend (Java Spring + Postgres)</h3>
                    <p>Java Spring Boot for the core LOS, Postgres for transactional data (point-in-time recovery enabled), Kafka for event-driven KYC + bureau orchestration, immutable audit table with cryptographic chaining, AWS Mumbai with BCP region.</p>
                </div>

                <div class="cs-block">
                    <h2>Tech stack &amp; why</h2>
                    <p>We picked the stack for fit, performance under realistic load, and operational simplicity. Here is the breakdown:</p>
                    <div style="margin-bottom: 16px;">
                        <span class="tech-chip">Java 17</span>
                        <span class="tech-chip">Spring Boot 3</span>
                        <span class="tech-chip">PostgreSQL</span>
                        <span class="tech-chip">Kafka</span>
                        <span class="tech-chip">Redis</span>
                        <span class="tech-chip">React Native</span>
                        <span class="tech-chip">React 18</span>
                        <span class="tech-chip">AWS (Mumbai + BCP)</span>
                        <span class="tech-chip">AWS KMS</span>
                        <span class="tech-chip">AWS WAF</span>
                        <span class="tech-chip">Sentry</span>
                        <span class="tech-chip">Datadog</span>
                        <span class="tech-chip">ELK</span>
                        <span class="tech-chip">GitHub Actions</span>
                    </div>
                    <p><strong>Java Spring for the LOS core:</strong> not glamorous, deeply boring, exactly right. Banking integrations come with Java SDKs by default, transactional integrity is first-class, the talent pool is wide. We picked the unsexy choice and shipped on time.</p>
                    <p><strong>Kafka for KYC + bureau orchestration:</strong> KYC has 6+ async steps (OTP, PAN, Aadhaar, video, DigiLocker, bank statement) any of which can fail and need retry. Kafka with consumer groups handled this cleanly; we'd have built a worse Kafka in 8 months otherwise.</p>
                    <p><strong>Immutable audit table with hash chaining:</strong> each row stores hash(prev_row_hash + this_row_data). Tamper detection is provable. RBI auditors loved it; the audit got cleared in one pass.</p>
                </div>

                <div class="cs-block">
                    <h2>The hardest technical problem we solved</h2>
                    <p><strong>Account Aggregator (AA) integration.</strong></p>
<p>India's Account Aggregator framework is the single most important piece of plumbing in modern lending — and the most under-documented. Pull a borrower's last 6 months of bank statements directly via AA in 90 seconds, eliminate fraudulent uploaded PDFs, get a 30% lift in approval accuracy.</p><p>We integrated with two AAs (Sahamati network — OneMoney + CAMSFinserv) for fall-back redundancy. The orchestration layer normalises the FIP-by-FIP differences in response shape, retries on failure, and maps to our internal statement schema.</p><p>AA-pulled statements are now used in 84% of approvals. Approval-decision time on AA-flow applications is 4 minutes vs 18 hours on uploaded-PDF flow. This single integration is what made same-day disbursal mathematically possible.</p>
                </div>

                <div class="cs-block">
                    <h2>Go-to-market &amp; ramp</h2>
                    <p>We launched the personal-loan product first — single product, single channel (own borrower app), three branches as fall-back. 90 days of double-running with the legacy system before we cut over. Discrepancies caught: 14, all minor, all traced to legacy data quality.</p><p>Multi-product expansion was a configuration exercise. Adding gold loan: 6 weeks (UI tweaks + asset-valuation flow). Two-wheeler loan: 4 weeks. The rules engine paid for itself by product three.</p>
                </div>

                <div class="cs-block">
                    <h2>Results</h2>
                    <div class="result-grid">
                        <div class="result-card"><span class="rn">&lt;24h</span><span class="rl">TAT for 78% of Loans (was 22 days)</span></div>
                        <div class="result-card"><span class="rn">14,000+</span><span class="rl">Monthly Applications</span></div>
                        <div class="result-card"><span class="rn">9</span><span class="rl">Active Underwriting Policies</span></div>
                        <div class="result-card"><span class="rn">100%</span><span class="rl">RBI DLG Compliance</span></div>
                        <div class="result-card"><span class="rn">Rs 320 Cr</span><span class="rl">Monthly Gross Disbursal</span></div>
                        <div class="result-card"><span class="rn">84%</span><span class="rl">Apps via AA-Statement Flow</span></div>
                        <div class="result-card"><span class="rn">Zero</span><span class="rl">Audit Findings in 12 Months</span></div>
                        <div class="result-card"><span class="rn">36%</span><span class="rl">Approval-Rate Lift</span></div>
                    </div>
                </div>

                <div class="cs-testimonial-card">
                    <p class="q">&ldquo;ITD treated this like a banking platform, not a website. Audit trail, four-eyes flows, AA integration — they got the boring stuff right. The user-facing stuff was the easy half.&rdquo;</p>
                    <p class="a">Chief Technology Officer</p>
                    <p class="r">NBFC · Mumbai · Rs 1,200 Cr book</p>
                </div>

                <div class="cs-block">
                    <h2>What we would do differently</h2>
                    <p>Bring the risk team into the rules-engine design from week one, not week ten. We built the engine, then asked the risk team if it modelled their policies. They said 'almost' — which cost us a month of refactoring. Co-design or refactor; pick one.</p>
                </div>

                <div class="cs-cta">
                    <h3>Building a fintech / NBFC platform?</h3>
                    <p>Lending platforms live or die on compliance, integrations, and turn-around time. We've shipped LOS platforms processing thousands of crore in disbursal. Talk to engineers who have built it.</p>
                    <a href="/contact-us.php" class="cs-cta-btn">Get a Free Consultation <i class="fas fa-arrow-right" style="margin-left:6px;"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Related case studies & services -->
<section class="cs-related">
    <div class="container">
        <h3>Related reads</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Telemedicine App Case Study</h4>
                    <p>HIPAA + ABDM compliant healthcare platform.</p>
                    <a href="telemedicine-app-hipaa-abdm-compliant.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Custom Software Development</h4>
                    <p>Bespoke platforms when off-the-shelf isn't enough.</p>
                    <a href="../services/custom-software-development.php">See service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Industry: Banking &amp; Finance</h4>
                    <p>How we partner with NBFCs and fintechs.</p>
                    <a href="../industries/banking-finance.php">See industry page <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>App Development Service</h4>
                    <p>End-to-end mobile + web app development.</p>
                    <a href="../services/App-Development.php">See service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Real-Estate CRM Case Study</h4>
                    <p>WhatsApp automation + CRM for nine properties.</p>
                    <a href="real-estate-crm-whatsapp-automation.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>EdTech LMS Platform</h4>
                    <p>Live-class platform with 60,000 students.</p>
                    <a href="edtech-lms-live-classes-platform.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__ . "/../includes/footer.php"); ?>

<script src="/assets/js/jquery-3.6.0.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery.appear.js"></script>
<script src="/assets/js/jquery.easing.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/modernizr.custom.13711.js"></script>
<script src="/assets/js/swiper-bundle.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/progress-bar.min.js"></script>
<script src="/assets/js/circle-progress.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/count-to.js"></script>
<script src="/assets/js/jquery.scrolla.min.js"></script>
<script src="/assets/js/YTPlayer.min.js"></script>
<script src="/assets/js/TweenMax.min.js"></script>
<script src="/assets/js/validnavs.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/custom.js"></script>

<?php include(__DIR__ . "/../includes/popup_modal.php"); ?>

</body>

</html>
