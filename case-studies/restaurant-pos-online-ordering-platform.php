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
    <meta name="description" content="Case study: full-stack restaurant POS + online ordering app we built for a 14-outlet QSR chain. Cut aggregator commissions 38%, 28% repeat orders, KOT printer + payment integrations.">
    <title>Restaurant POS & Online Ordering Platform — Cutting Aggregator Commissions for a 14-Outlet Chain | ITD GrowthLabs</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <link rel="alternate" hreflang="en-in" href="https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php">
    <link rel="alternate" hreflang="en-us" href="https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php">
    <link rel="alternate" hreflang="en-gb" href="https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php">
    <link rel="alternate" hreflang="en-au" href="https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php">
    <link rel="alternate" hreflang="en-ae" href="https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php">
    <link rel="alternate" hreflang="x-default" href="https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php">

    <meta property="og:title" content="Restaurant POS & Online Ordering Platform — Cutting Aggregator Commissions for a 14-Outlet Chain | ITD GrowthLabs">
    <meta property="og:description" content="How we built a POS + customer ordering app + delivery engine for a 14-outlet restaurant chain — and cut aggregator commissions 38%.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php">
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">
    <meta property="og:image:alt" content="Restaurant POS & Online Ordering case study by ITD GrowthLabs">
    <meta property="og:site_name" content="ITD GrowthLabs">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Restaurant POS & Online Ordering — ITD GrowthLabs Case Study">
    <meta name="twitter:description" content="POS, KOT printer integration, customer app, kitchen display. Flutter + Node + Postgres. 14 outlets, 38% commission savings.">

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
  "headline": "Restaurant POS & Online Ordering Platform — Cutting Aggregator Commissions for a 14-Outlet Chain",
  "description": "Case study: full-stack restaurant POS + online ordering app we built for a 14-outlet QSR chain. Cut aggregator commissions 38%, 28% repeat orders, KOT printer + payment integrations.",
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
  "mainEntityOfPage": "https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php",
  "about": "Restaurant POS and ordering app development",
  "keywords": "restaurant POS development, online food ordering app, KOT printer integration, restaurant management software, kitchen display system, swiggy commission alternative"
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
      "name": "Restaurant POS & Online Ordering",
      "item": "https://itdgrowthlabs.com/case-studies/restaurant-pos-online-ordering-platform.php"
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
            <span class="now">Restaurant POS & Online Ordering</span>
        </div>
        <span class="cs-eyebrow"><i class="fas fa-utensils" style="margin-right:6px;"></i>Restaurant · POS · Multi-Outlet</span>
        <h1 class="cs-title">Restaurant POS &amp; Online Ordering Platform — Cutting Aggregator Commissions for a 14-Outlet Chain</h1>
        <p class="cs-subtitle">A 14-outlet QSR chain was leaking 25-28% of every order to aggregators. We built a complete POS + customer-app + kitchen-display platform that pulled orders back into their owned channel — and cut aggregator commissions by 38% in five months.</p>
    </div>
</section>

<!-- KPI bar -->
<section class="cs-kpi-bar" aria-label="Headline results">
    <div class="container">
        <div class="cs-kpi-grid">
                <div><span class="cs-kpi-num">38%</span><span class="cs-kpi-label">Aggregator Commissions Cut</span></div>
                <div><span class="cs-kpi-num">14</span><span class="cs-kpi-label">Outlets Live</span></div>
                <div><span class="cs-kpi-num">28%</span><span class="cs-kpi-label">Repeat-Order Rate</span></div>
                <div><span class="cs-kpi-num">4.6 <i class="fas fa-star" style="font-size:14px;"></i></span><span class="cs-kpi-label">App Rating</span></div>
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
                        <dt>Industry</dt><dd>QSR · multi-outlet restaurant chain</dd>
                        <dt>Scope</dt><dd>POS terminal app, customer mobile app, kitchen display, admin web</dd>
                        <dt>Team size</dt><dd>7 engineers + 1 PM + 1 designer + 1 hardware-integration specialist</dd>
                        <dt>Timeline</dt><dd>4 months to v1 · 5 months to all 14 outlets live</dd>
                        <dt>Regions</dt><dd>Three Indian metros · architecture sized for 50 outlets</dd>
                        <dt>Status</dt><dd>Live · ITD on monthly retainer + new outlet on-boarding</dd>
                    </dl>
                </div>

                <div class="cs-block">
                    <h2>The client &amp; the problem</h2>
                    <p>The chain had grown from one outlet to fourteen on the back of Swiggy and Zomato visibility. The economics had stopped working — at 25-28% commission their unit margin was thin, and aggregator-led customers churned to whichever brand had the bigger discount. They needed an owned ordering channel and a POS that did not feel like a downgrade from the legacy system.</p>
                    <ul>
                        <li><strong>Aggregator dependency:</strong> 85% of online orders came from Swiggy/Zomato; commissions ate the margin.</li>
                        <li><strong>POS sprawl:</strong> Different outlets used different POS systems; reconciliation was a weekly nightmare.</li>
                        <li><strong>No customer data:</strong> Aggregator orders were anonymous — no ability to re-target, re-engage, or win loyalty.</li>
                        <li><strong>Kitchen chaos:</strong> Order tickets came on three different printers from three different aggregators; mis-prints were daily.</li>
                        <li><strong>Pricing inconsistency:</strong> Menu prices and offers drifted between outlets and channels.</li>
                    </ul>
                </div>

                <div class="cs-block">
                    <h2>The solution</h2>
                    <p>We delivered a four-product platform: customer ordering app, in-outlet POS terminal, kitchen-display system, and central admin. The hard part was hardware: receipt printers, KOT printers, payment terminals, weight scales — each with its own driver and quirks.</p>
                    <h3>1. Customer ordering app (Flutter)</h3>
                    <p>Outlet locator, menu browse with photos, customisations (size, add-ons, spice level), cart, dine-in / takeaway / delivery toggle, scheduled orders, UPI + cards + COD, order tracking, reorder, loyalty wallet, offer engine.</p>
                    <h3>2. POS terminal (Flutter desktop / Android)</h3>
                    <p>Cashier UI optimised for speed: large tappable buttons, item search, offer codes, bill split, tip handling, table management, customer lookup, KOT print, receipt print. Works offline — orders queue and sync when network returns.</p>
                    <h3>3. Kitchen display system (web on tablet)</h3>
                    <p>Live order queue, color-coded by elapsed time, station-routing (grill / fry / cold), bump-button per station, expediter view. Replaces paper KOTs entirely in three of the 14 outlets.</p>
                    <h3>4. Admin web (React)</h3>
                    <p>Master menu (one source of truth), per-outlet pricing override, offer engine with cohort targeting, sales reports per outlet/category/hour, inventory deduction, payouts, customer database, rider/runner management.</p>
                    <h3>5. Backend (Node.js + Postgres)</h3>
                    <p>TypeScript NestJS, Postgres for transactional data, Redis for live-order pub/sub to KDS terminals, Razorpay + Cashfree for payments, Twilio for SMS. Hosted on AWS Mumbai.</p>
                </div>

                <div class="cs-block">
                    <h2>Tech stack &amp; why</h2>
                    <p>We picked the stack for fit, performance under realistic load, and operational simplicity. Here is the breakdown:</p>
                    <div style="margin-bottom: 16px;">
                        <span class="tech-chip">Flutter 3.x</span>
                        <span class="tech-chip">NestJS</span>
                        <span class="tech-chip">TypeScript</span>
                        <span class="tech-chip">PostgreSQL</span>
                        <span class="tech-chip">Redis</span>
                        <span class="tech-chip">Bull (queues)</span>
                        <span class="tech-chip">Razorpay</span>
                        <span class="tech-chip">Cashfree</span>
                        <span class="tech-chip">ESC/POS printer protocol</span>
                        <span class="tech-chip">Pine Labs API</span>
                        <span class="tech-chip">Twilio</span>
                        <span class="tech-chip">AWS EC2 + RDS</span>
                        <span class="tech-chip">GitHub Actions</span>
                        <span class="tech-chip">Sentry</span>
                    </div>
                    <p><strong>Flutter for POS too:</strong> we ran Flutter on the cashier Android terminal (a rugged Sunmi V2s). One codebase from customer phone to cashier-counter terminal saved real money. Performance was native-class.</p>
                    <p><strong>Postgres + Redis pub/sub for KDS:</strong> a new order writes to Postgres, publishes to a Redis channel; KDS tablets listen and update in 200ms. Simpler than running Kafka and good enough at 14-outlet scale (we'd revisit at 100 outlets).</p>
                    <p><strong>ESC/POS protocol directly:</strong> we skipped vendor-specific SDKs and wrote ESC/POS bytes ourselves. This let us support any 80mm thermal printer the outlets already owned. New outlet setup time dropped from 2 days to 3 hours.</p>
                </div>

                <div class="cs-block">
                    <h2>The hardest technical problem we solved</h2>
                    <p><strong>Offline-tolerant POS.</strong></p>
<p>A POS that goes down when the internet does is a refund magnet. In Indian restaurant outlets, the network drops daily — sometimes for hours. We architected POS as a local-first app: every order is written to a local SQLite first, then synced to the cloud.</p><p>Sync conflicts are the hard part. If two terminals in one outlet take an order while offline, both think they have order #42. We resolve this with outlet-prefixed UUIDs at write time — no central counter, no conflict at sync.</p><p>Result: zero lost orders across 14 outlets in the first 60 days, including a region-wide ISP outage that took down all 14 outlets simultaneously for 90 minutes.</p>
                </div>

                <div class="cs-block">
                    <h2>Go-to-market &amp; ramp</h2>
                    <p>We rolled out outlet-by-outlet, two outlets per week. Each outlet got two days of on-site training plus a hardware kit (printers, terminal, KDS tablet) we pre-configured. By outlet seven, the on-boarding was a documented playbook — outlets 8-14 went live in three weeks.</p><p>The customer app launched after the POS was stable in five outlets. We did not want app-side bugs amplified by POS-side bugs.</p>
                </div>

                <div class="cs-block">
                    <h2>Results</h2>
                    <div class="result-grid">
                        <div class="result-card"><span class="rn">38%</span><span class="rl">Aggregator Commissions Cut</span></div>
                        <div class="result-card"><span class="rn">14</span><span class="rl">Outlets Live (zero failed roll-outs)</span></div>
                        <div class="result-card"><span class="rn">28%</span><span class="rl">Repeat-Order Rate (90-day)</span></div>
                        <div class="result-card"><span class="rn">4.6 ★</span><span class="rl">App Rating · 1,800+ reviews</span></div>
                        <div class="result-card"><span class="rn">0</span><span class="rl">Lost Orders in 60 Days</span></div>
                        <div class="result-card"><span class="rn">3 hrs</span><span class="rl">New Outlet Setup (from 2 days)</span></div>
                        <div class="result-card"><span class="rn">Rs 1.4 Cr</span><span class="rl">Annual Commission Savings</span></div>
                        <div class="result-card"><span class="rn">22 sec</span><span class="rl">Avg Order Punch Time at Counter</span></div>
                    </div>
                </div>

                <div class="cs-testimonial-card">
                    <p class="q">&ldquo;We don't fight aggregators any more — we use them as one channel among many. The POS is the bedrock; the customer app is the flywheel. Our owned-channel revenue is 41% of online and rising.&rdquo;</p>
                    <p class="a">Founder &amp; CEO</p>
                    <p class="r">QSR Chain · 14 outlets · India</p>
                </div>

                <div class="cs-block">
                    <h2>What we would do differently</h2>
                    <p>Hardware-test on the actual outlet printers, not on a clean test-bench printer. Two of the 14 outlets had non-standard 58mm printers we discovered on go-live morning; we rebuilt the layout in a 48-hour scramble. Pre-survey hardware in week one of every roll-out.</p>
                </div>

                <div class="cs-cta">
                    <h3>Building a POS or ownership-channel platform?</h3>
                    <p>Aggregator commissions are the tax on not owning your customer. We've built POS + ordering platforms that pay back in months, not years. Get a costed roadmap from engineers who have shipped this before.</p>
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
                    <h4>On-Demand Courier App</h4>
                    <p>Same-day courier platform: 5,000+ daily bookings.</p>
                    <a href="on-demand-courier-booking-app.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Multi-Vendor Marketplace App</h4>
                    <p>Food + grocery marketplace: 12,000 MAU.</p>
                    <a href="multi-vendor-marketplace-app-food-grocery.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>D2C E-Commerce App Case Study</h4>
                    <p>Shopify-backed Flutter app, 41% repeat rate.</p>
                    <a href="d2c-ecommerce-mobile-app-fashion-brand.php">Read case study <i class="fas fa-arrow-right"></i></a>
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
                    <h4>Industry: Food &amp; Restaurant</h4>
                    <p>How we partner with QSR and restaurant chains.</p>
                    <a href="../industries/food-restaurant.php">See industry page <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Custom Software Development</h4>
                    <p>When productised SaaS isn't enough.</p>
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
