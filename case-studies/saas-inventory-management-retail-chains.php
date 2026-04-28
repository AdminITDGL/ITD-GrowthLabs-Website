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
    <meta name="description" content="Case study: multi-tenant SaaS inventory management for retail chains we built. 60+ stores live, 45% stockout reduction, real-time sync, barcode scanner integration. Node + Postgres + Flutter.">
    <title>SaaS Inventory Management for Retail Chains — One Source of Truth Across 60+ Stores | ITD GrowthLabs</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <link rel="alternate" hreflang="en-in" href="https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php">
    <link rel="alternate" hreflang="en-us" href="https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php">
    <link rel="alternate" hreflang="en-gb" href="https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php">
    <link rel="alternate" hreflang="en-au" href="https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php">
    <link rel="alternate" hreflang="en-ae" href="https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php">
    <link rel="alternate" hreflang="x-default" href="https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php">

    <meta property="og:title" content="SaaS Inventory Management for Retail Chains — One Source of Truth Across 60+ Stores | ITD GrowthLabs">
    <meta property="og:description" content="How we built a multi-tenant SaaS inventory management platform powering 60+ retail stores with real-time sync and 45% stockout reduction.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php">
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">
    <meta property="og:image:alt" content="SaaS Inventory Management case study by ITD GrowthLabs">
    <meta property="og:site_name" content="ITD GrowthLabs">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SaaS Inventory Management — ITD GrowthLabs Case Study">
    <meta name="twitter:description" content="Multi-tenant SaaS, 60+ stores live, barcode scanning, real-time sync. Node + Postgres + Flutter. 45% stockout reduction.">

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
  "headline": "SaaS Inventory Management for Retail Chains — One Source of Truth Across 60+ Stores",
  "description": "Case study: multi-tenant SaaS inventory management for retail chains we built. 60+ stores live, 45% stockout reduction, real-time sync, barcode scanner integration. Node + Postgres + Flutter.",
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
  "mainEntityOfPage": "https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php",
  "about": "SaaS inventory management software development",
  "keywords": "SaaS inventory management, retail chain software, multi-tenant SaaS, barcode scanning app, stock management system, retail POS, Flutter scanner, Node SaaS"
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
      "name": "SaaS Inventory Management",
      "item": "https://itdgrowthlabs.com/case-studies/saas-inventory-management-retail-chains.php"
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
            <span class="now">SaaS Inventory Management</span>
        </div>
        <span class="cs-eyebrow"><i class="fas fa-boxes" style="margin-right:6px;"></i>SaaS · Inventory · Multi-Tenant</span>
        <h1 class="cs-title">SaaS Inventory Management for Retail Chains — One Source of Truth Across 60+ Stores</h1>
        <p class="cs-subtitle">A retail-chain operator wanted to productise their internal inventory tooling and resell it to peer chains. We rebuilt it as a multi-tenant SaaS platform — and shipped to 60+ retail stores across four customer chains in seven months.</p>
    </div>
</section>

<!-- KPI bar -->
<section class="cs-kpi-bar" aria-label="Headline results">
    <div class="container">
        <div class="cs-kpi-grid">
                <div><span class="cs-kpi-num">60+</span><span class="cs-kpi-label">Retail Stores Live</span></div>
                <div><span class="cs-kpi-num">4</span><span class="cs-kpi-label">Customer Chains</span></div>
                <div><span class="cs-kpi-num">45%</span><span class="cs-kpi-label">Stockout Reduction</span></div>
                <div><span class="cs-kpi-num">99.95%</span><span class="cs-kpi-label">Platform Uptime</span></div>
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
                        <dt>Industry</dt><dd>Retail · multi-store apparel + lifestyle</dd>
                        <dt>Scope</dt><dd>Multi-tenant SaaS web + Flutter scanner app + retailer admin</dd>
                        <dt>Team size</dt><dd>8 engineers + 1 PM + 1 SaaS-product manager</dd>
                        <dt>Timeline</dt><dd>5 months to v1 · 7 months to four-customer multi-tenancy</dd>
                        <dt>Regions</dt><dd>Pan-India · architecture sized for 500 stores</dd>
                        <dt>Status</dt><dd>Live · operating as ITD-managed SaaS for the founding chain</dd>
                    </dl>
                </div>

                <div class="cs-block">
                    <h2>The client &amp; the problem</h2>
                    <p>The client had 22 stores running on a custom inventory app the founding team had built five years ago in PHP. It worked — barely — for them; it would never sell to anyone else. Two peer chains had asked to license it. The brief: turn the in-house tool into a multi-tenant SaaS that could run any retail chain, not just this one.</p>
                    <ul>
                        <li><strong>Hard-coded business logic:</strong> Pricing rules, GST handling, store-hierarchy, and category trees were all coded for one chain.</li>
                        <li><strong>Single-tenant data model:</strong> No org_id on any table; every retrofit of multi-tenancy was risky.</li>
                        <li><strong>Scanner workflow was deskbound:</strong> Stock take meant printing reports and walking the floor with paper.</li>
                        <li><strong>Real-time sync was wishful thinking:</strong> Cross-store transfers reconciled overnight; weekend stockouts were routine.</li>
                        <li><strong>Onboarding new chains was a 6-week dev project:</strong> Each new chain required code changes — that is not a SaaS.</li>
                    </ul>
                </div>

                <div class="cs-block">
                    <h2>The solution</h2>
                    <p>We rebuilt the platform on a multi-tenant foundation: org_id everywhere, configurable hierarchies, plug-able pricing rules, and a Flutter scanner app for floor-staff. New chains onboard in 3-5 days now instead of 6 weeks.</p>
                    <h3>1. Multi-tenant SaaS web (React)</h3>
                    <p>Org-scoped login, store-hierarchy builder (org → region → cluster → store), category tree editor, master SKU catalog, GRN, transfer, sale, return, stock-take. Each chain sees only their data; the spine is shared.</p>
                    <h3>2. Flutter scanner app</h3>
                    <p>Barcode scan via phone camera (no dedicated hardware needed), GRN flow, transfer-in/out flow, stock-take floor mode, partial-quantity entry, offline-tolerant. Works on a Rs 9,000 phone.</p>
                    <h3>3. Retailer admin (React)</h3>
                    <p>Live store-level inventory, replenishment recommendations (we ship a baseline rule + each customer can override), GST report, sales report, ageing-stock dashboard, SLA dashboard for slow-mover liquidation.</p>
                    <h3>4. Configurable pricing &amp; rules engine</h3>
                    <p>Pricing rules (MRP / sale / VIP / regional / store-override), GST mapping, discount stacking, expiry handling — all data, all editable in the UI. Chain B's '40% off Friday' rule is a config, not a code change.</p>
                    <h3>5. Backend (Node.js + Postgres + Redis)</h3>
                    <p>NestJS multi-tenant API with row-level org_id enforcement, Postgres with per-org connection pools, Redis pub/sub for real-time inventory updates across stores, BullMQ for async (e.g. nightly aging-stock recompute), AWS Mumbai.</p>
                </div>

                <div class="cs-block">
                    <h2>Tech stack &amp; why</h2>
                    <p>We picked the stack for fit, performance under realistic load, and operational simplicity. Here is the breakdown:</p>
                    <div style="margin-bottom: 16px;">
                        <span class="tech-chip">NestJS</span>
                        <span class="tech-chip">TypeScript</span>
                        <span class="tech-chip">PostgreSQL</span>
                        <span class="tech-chip">Redis</span>
                        <span class="tech-chip">BullMQ</span>
                        <span class="tech-chip">React 18</span>
                        <span class="tech-chip">Flutter 3.x</span>
                        <span class="tech-chip">AWS EC2 + RDS</span>
                        <span class="tech-chip">AWS S3</span>
                        <span class="tech-chip">GitHub Actions</span>
                        <span class="tech-chip">Sentry</span>
                        <span class="tech-chip">Datadog</span>
                        <span class="tech-chip">Stripe (international)</span>
                        <span class="tech-chip">Razorpay (India)</span>
                    </div>
                    <p><strong>NestJS multi-tenant guard at the API edge:</strong> every request resolves to an org from the JWT, every Postgres query is scoped to that org via a guard. We tested this with adversarial fuzz tests; in 4M synthetic cross-tenant requests, zero leaks.</p>
                    <p><strong>Postgres row-level security plus app-level guards:</strong> belt-and-braces. RLS catches the 0.001% case where a developer forgets the WHERE org_id; the app guard catches the 99.999% normal flow with better performance.</p>
                    <p><strong>Flutter scanner over native:</strong> any cheap Android phone is now a scanner. Customers don't have to buy Honeywells; staff use their own phones (with a small allowance). Onboarding hardware cost dropped from Rs 8,000/store to zero.</p>
                </div>

                <div class="cs-block">
                    <h2>The hardest technical problem we solved</h2>
                    <p><strong>Real-time inventory sync at 60-store scale.</strong></p>
<p>The customer's biggest pain was: store A has stock, store B has a customer asking for it, the system says no — sale lost. Real-time inventory across 60 stores sounds simple until you actually try.</p><p>We modeled inventory as a stream of immutable events (GRN, sale, transfer-in, transfer-out, adjustment). Aggregations are computed as projections; reads from cached aggregates with sub-second freshness. Writes go to Postgres; Redis pub/sub fans out to the affected stores' UIs.</p><p>Cross-store transfer time dropped from overnight to sub-minute. Stockout rate fell 45%. Saturday-evening rush — the toughest test — went from 'frequent system lag' to imperceptible.</p>
                </div>

                <div class="cs-block">
                    <h2>Go-to-market &amp; ramp</h2>
                    <p>We dogfooded with the founding chain — all 22 stores live first. Three months of running both old and new in parallel before cut-over. Caught seven data-quality bugs in legacy data; would have been silent failures otherwise.</p><p>External customer #1 went live in week 24. The on-boarding playbook was: org-create, hierarchy-import, SKU-import, training, parallel-run for two weeks, cut-over. Week 28: customer #2. Week 31: customers #3 and #4 in parallel.</p>
                </div>

                <div class="cs-block">
                    <h2>Results</h2>
                    <div class="result-grid">
                        <div class="result-card"><span class="rn">60+</span><span class="rl">Retail Stores Live</span></div>
                        <div class="result-card"><span class="rn">4</span><span class="rl">Customer Chains On-boarded</span></div>
                        <div class="result-card"><span class="rn">45%</span><span class="rl">Stockout Reduction</span></div>
                        <div class="result-card"><span class="rn">99.95%</span><span class="rl">Platform Uptime</span></div>
                        <div class="result-card"><span class="rn">3-5 days</span><span class="rl">New Chain Onboarding (was 6 weeks)</span></div>
                        <div class="result-card"><span class="rn">&lt;1 min</span><span class="rl">Cross-Store Transfer Sync</span></div>
                        <div class="result-card"><span class="rn">Rs 8,000</span><span class="rl">Hardware Cost Saved per Store</span></div>
                        <div class="result-card"><span class="rn">Zero</span><span class="rl">Cross-Tenant Data Leaks (4M fuzz tests)</span></div>
                    </div>
                </div>

                <div class="cs-testimonial-card">
                    <p class="q">&ldquo;We turned a five-year-old internal tool into a SaaS we can sell. The multi-tenant rebuild was the hard part — and ITD got the security layer right, which is what matters when you sell to other retailers.&rdquo;</p>
                    <p class="a">Founder &amp; CEO</p>
                    <p class="r">Retail Chain · Founding Customer</p>
                </div>

                <div class="cs-block">
                    <h2>What we would do differently</h2>
                    <p>Decide multi-tenant strategy before line one of code. We started with row-level org_id and pivoted to row-level + RLS in month four. Doable, but cost us 3 weeks of refactoring. Decide RLS-on or RLS-off in week one and stick to it.</p>
                </div>

                <div class="cs-cta">
                    <h3>Building a multi-tenant SaaS or productising internal tooling?</h3>
                    <p>Going from internal tool to sellable SaaS is a different engineering problem than building either alone. Talk to a team that has shipped both.</p>
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
                    <h4>Restaurant POS Platform</h4>
                    <p>Cut aggregator commissions 38% across 14 outlets.</p>
                    <a href="restaurant-pos-online-ordering-platform.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Fleet Management SaaS</h4>
                    <p>3PL platform powering 50,000+ monthly shipments.</p>
                    <a href="fleet-management-saas-3pl-logistics.php">Read case study <i class="fas fa-arrow-right"></i></a>
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
                    <h4>App Development Service</h4>
                    <p>End-to-end mobile + web app development.</p>
                    <a href="../services/App-Development.php">See service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Industry: Retail &amp; E-Commerce</h4>
                    <p>How we partner with retailers and chains.</p>
                    <a href="../industries/retail.php">See industry page <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Cross-Border Courier Platform</h4>
                    <p>Multi-carrier, multi-currency SaaS.</p>
                    <a href="cross-border-courier-platform-saas.php">Read case study <i class="fas fa-arrow-right"></i></a>
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
