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
    <meta name="description" content="Case study: food delivery vendor operations system we built. 180+ restaurant partners, multi-aggregator unified inbox (Swiggy + Zomato), 22% rejection drop. NestJS + Postgres + WebSockets.">
    <title>Food Delivery Vendor Operations System — Centralised Console for 180+ Restaurant Partners | ITD GrowthLabs</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <link rel="alternate" hreflang="en-in" href="https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php">
    <link rel="alternate" hreflang="en-us" href="https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php">
    <link rel="alternate" hreflang="en-gb" href="https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php">
    <link rel="alternate" hreflang="en-au" href="https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php">
    <link rel="alternate" hreflang="en-ae" href="https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php">
    <link rel="alternate" hreflang="x-default" href="https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php">

    <meta property="og:title" content="Food Delivery Vendor Operations System — Centralised Console for 180+ Restaurant Partners | ITD GrowthLabs">
    <meta property="og:description" content="How we built a unified vendor operations console for 180+ restaurant partners — pulling Swiggy + Zomato + own-channel into one screen.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php">
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">
    <meta property="og:image:alt" content="Food Delivery Vendor Ops System case study by ITD GrowthLabs">
    <meta property="og:site_name" content="ITD GrowthLabs">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Food Delivery Vendor Ops System — ITD GrowthLabs Case Study">
    <meta name="twitter:description" content="Multi-aggregator order ingestion, KOT routing, menu sync, payout reconciliation. 180+ restaurants, 22% rejection drop.">

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
  "headline": "Food Delivery Vendor Operations System — Centralised Console for 180+ Restaurant Partners",
  "description": "Case study: food delivery vendor operations system we built. 180+ restaurant partners, multi-aggregator unified inbox (Swiggy + Zomato), 22% rejection drop. NestJS + Postgres + WebSockets.",
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
  "mainEntityOfPage": "https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php",
  "about": "Restaurant operations management software development",
  "keywords": "restaurant operations software, multi-aggregator console, Swiggy Zomato integration, KOT routing software, menu sync platform, restaurant SaaS, cloud kitchen software"
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
      "name": "Food Delivery Vendor Ops System",
      "item": "https://itdgrowthlabs.com/case-studies/food-delivery-vendor-operations-system.php"
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
            <span class="now">Food Delivery Vendor Ops System</span>
        </div>
        <span class="cs-eyebrow"><i class="fas fa-concierge-bell" style="margin-right:6px;"></i>Food &amp; Restaurant · Operations · Multi-Channel</span>
        <h1 class="cs-title">Food Delivery Vendor Operations System — Centralised Console for 180+ Restaurant Partners</h1>
        <p class="cs-subtitle">A cloud-kitchen and restaurant aggregator wanted a single console that pulled Swiggy + Zomato + own-channel orders for 180+ partner restaurants — with KOT routing, menu sync, and payout reconciliation. We delivered it in five months.</p>
    </div>
</section>

<!-- KPI bar -->
<section class="cs-kpi-bar" aria-label="Headline results">
    <div class="container">
        <div class="cs-kpi-grid">
                <div><span class="cs-kpi-num">180+</span><span class="cs-kpi-label">Restaurant Partners</span></div>
                <div><span class="cs-kpi-num">22%</span><span class="cs-kpi-label">Order-Rejection Drop</span></div>
                <div><span class="cs-kpi-num">3</span><span class="cs-kpi-label">Channels Unified</span></div>
                <div><span class="cs-kpi-num">99.9%</span><span class="cs-kpi-label">Order-Sync Success Rate</span></div>
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
                        <dt>Industry</dt><dd>Cloud kitchen + restaurant operations partner</dd>
                        <dt>Scope</dt><dd>Multi-channel order console, KOT routing, menu sync, payout reconciliation</dd>
                        <dt>Team size</dt><dd>8 engineers + 1 PM + 1 ops consultant</dd>
                        <dt>Timeline</dt><dd>5 months to v1 · 7 months to 180 partners live</dd>
                        <dt>Regions</dt><dd>Mumbai + Delhi NCR + Bengaluru</dd>
                        <dt>Status</dt><dd>Live · ITD on retainer for new aggregator integrations</dd>
                    </dl>
                </div>

                <div class="cs-block">
                    <h2>The client &amp; the problem</h2>
                    <p>Cloud-kitchens and aggregator-partners run on 15+ tablets per outlet — one for Swiggy, one for Zomato, one for own-channel, one for the POS, one for the KDS. Staff miss orders. Menus drift between channels. Reconciliation is a weekly nightmare. The client wanted one screen, period — and they wanted it to work for 180+ partners on day-one of cut-over.</p>
                    <ul>
                        <li><strong>Tablet sprawl:</strong> Average outlet had 4-7 aggregator tablets; missed-order rate was 6%.</li>
                        <li><strong>Menu inconsistency:</strong> Item names, prices, customisations drifted between Swiggy + Zomato + own-channel; customer disputes were frequent.</li>
                        <li><strong>KOT chaos:</strong> Three printers per outlet, three different formats; kitchen staff misread tickets daily.</li>
                        <li><strong>Payout reconciliation hell:</strong> Weekly settlement files from each aggregator in different formats; matching to orders was a 12-hour ops job.</li>
                        <li><strong>Aggregator-API instability:</strong> Every aggregator API breaks differently; failures had to be detected and replayed.</li>
                    </ul>
                </div>

                <div class="cs-block">
                    <h2>The solution</h2>
                    <p>A central console that ingests orders from all aggregators via their APIs (Swiggy POS API, Zomato Saathi, own-channel webhook), normalises them to a single schema, routes KOTs to one printer, and reconciles payouts.</p>
                    <h3>1. Order console (web on tablet)</h3>
                    <p>Single inbox of all orders across all channels, color-coded by source + status, prep-time tracking, accept / reject / re-prep workflow, customer notes, allergen alerts.</p>
                    <h3>2. KOT routing engine</h3>
                    <p>One printer per outlet (or kitchen station). All orders, regardless of source, print to the same KOT with a unified format. Source-aware (Swiggy / Zomato / own) for kitchen psychology.</p>
                    <h3>3. Menu sync hub (React admin)</h3>
                    <p>One master menu per restaurant. Map to each channel; push updates with one click. Out-of-stock toggles propagate to all channels in 30 seconds.</p>
                    <h3>4. Payout reconciliation engine</h3>
                    <p>Daily ingestion of aggregator settlement files, automated matching to orders, exception queue for ops, daily P&amp;L per outlet per channel.</p>
                    <h3>5. Backend (NestJS + Postgres + Kafka)</h3>
                    <p>Aggregator-API integrations as Kafka producers (with retry + DLQ), orders normalised to a unified schema, WebSockets to push to the console in real-time, BullMQ for menu-sync jobs.</p>
                </div>

                <div class="cs-block">
                    <h2>Tech stack &amp; why</h2>
                    <p>We picked the stack for fit, performance under realistic load, and operational simplicity. Here is the breakdown:</p>
                    <div style="margin-bottom: 16px;">
                        <span class="tech-chip">NestJS</span>
                        <span class="tech-chip">TypeScript</span>
                        <span class="tech-chip">PostgreSQL</span>
                        <span class="tech-chip">Kafka</span>
                        <span class="tech-chip">Redis</span>
                        <span class="tech-chip">BullMQ</span>
                        <span class="tech-chip">WebSockets</span>
                        <span class="tech-chip">React 18</span>
                        <span class="tech-chip">ESC/POS protocol</span>
                        <span class="tech-chip">AWS EC2 + RDS</span>
                        <span class="tech-chip">GitHub Actions</span>
                        <span class="tech-chip">Sentry</span>
                        <span class="tech-chip">Datadog</span>
                    </div>
                    <p><strong>Kafka for aggregator integration:</strong> aggregator APIs fail in creative ways. Kafka with consumer groups + DLQ handles retries cleanly. We replayed 14 days of historical orders during the Swiggy API revamp last December without losing data.</p>
                    <p><strong>WebSockets, not polling:</strong> the console updates in real-time as orders arrive; staff don't refresh, don't miss, don't double-confirm. WebSocket reconnect logic was a 2-week investment that paid back in week three.</p>
                    <p><strong>ESC/POS direct over vendor SDK:</strong> we wrote ESC/POS bytes ourselves so any 80mm thermal printer worked. Saved on per-outlet hardware procurement.</p>
                </div>

                <div class="cs-block">
                    <h2>The hardest technical problem we solved</h2>
                    <p><strong>Aggregator API instability + idempotency.</strong></p>
<p>Aggregator APIs are not stable, not well-documented, and not consistent. Same endpoint returns three different JSON shapes depending on order type. Webhooks fire twice for the same order. Retries have no idempotency keys built in.</p><p>We built our own idempotency layer: every inbound message is hashed (sourceId + orderId + status), stored, and de-duped. We replay through Kafka if the console missed a message. We also normalise the three JSON shapes into one schema at ingestion — the console code never has to know which aggregator the order came from.</p><p>This is the part of the platform that is invisible when working — and catastrophic when missing. Order rejection rate dropped 22% just from no-more-missed-orders.</p>
                </div>

                <div class="cs-block">
                    <h2>Go-to-market &amp; ramp</h2>
                    <p>We started with a single restaurant partner in a single city — one Swiggy listing, one Zomato listing, one own-channel — for six weeks of brutal feedback. Every aggregator quirk we hit got encoded into the integration layer.</p><p>180-partner roll-out was outlet-by-outlet over 12 weeks. Each onboarding was a 2-hour playbook by partner #20 — KOT printer config, menu mapping, payout reconciliation setup.</p>
                </div>

                <div class="cs-block">
                    <h2>Results</h2>
                    <div class="result-grid">
                        <div class="result-card"><span class="rn">180+</span><span class="rl">Restaurant Partners</span></div>
                        <div class="result-card"><span class="rn">22%</span><span class="rl">Order-Rejection Drop</span></div>
                        <div class="result-card"><span class="rn">3</span><span class="rl">Aggregator Channels Unified</span></div>
                        <div class="result-card"><span class="rn">99.9%</span><span class="rl">Order-Sync Success Rate</span></div>
                        <div class="result-card"><span class="rn">12 hrs</span><span class="rl">Ops Time Saved Daily</span></div>
                        <div class="result-card"><span class="rn">Zero</span><span class="rl">Missed Orders in 60 Days</span></div>
                        <div class="result-card"><span class="rn">30 sec</span><span class="rl">Out-of-Stock Propagation Time</span></div>
                        <div class="result-card"><span class="rn">&lt;1%</span><span class="rl">Payout Reconciliation Variance</span></div>
                    </div>
                </div>

                <div class="cs-testimonial-card">
                    <p class="q">&ldquo;Tablet sprawl was killing us. One console, one printer, one menu — that was the entire pitch and it has paid off across 180 partners. ITD's integration layer has survived three Swiggy API revamps without us noticing.&rdquo;</p>
                    <p class="a">Operations Director</p>
                    <p class="r">Restaurant Operations Partner · 3 metros</p>
                </div>

                <div class="cs-block">
                    <h2>What we would do differently</h2>
                    <p>Build the menu-sync system before the order-ingest system. We did them in parallel; the menu-sync was always one sprint behind ingest, which meant for the first 8 weeks our partners had inconsistent menus across channels. Menu first, orders second.</p>
                </div>

                <div class="cs-cta">
                    <h3>Building a multi-channel restaurant operations platform?</h3>
                    <p>Aggregator integration, KOT routing, menu sync, payout reconciliation — these are not features, they are infrastructure. We've shipped this for 180+ restaurant partners. Talk to engineers who have built it.</p>
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
                    <p>POS + ordering app cutting aggregator commissions 38%.</p>
                    <a href="restaurant-pos-online-ordering-platform.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Multi-Vendor Marketplace App</h4>
                    <p>Marketplace platform: 12,000 MAU, 320 vendors.</p>
                    <a href="multi-vendor-marketplace-app-food-grocery.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Online Fish Delivery Marketplace</h4>
                    <p>Same-day cold-chain platform.</p>
                    <a href="online-fish-delivery-marketplace-app.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Industry: Food &amp; Restaurant</h4>
                    <p>How we partner with QSR and aggregator-ops.</p>
                    <a href="../industries/food-restaurant.php">See industry page <i class="fas fa-arrow-right"></i></a>
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
                    <h4>Custom Software Development</h4>
                    <p>Bespoke platforms when off-the-shelf isn't enough.</p>
                    <a href="../services/custom-software-development.php">See service <i class="fas fa-arrow-right"></i></a>
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
