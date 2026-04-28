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
    <meta name="description" content="Case study: online fish delivery marketplace app we built. 240+ vendors, same-day cold-chain, 9,000+ orders/month, 18-min average delivery. Flutter + Node + Firebase stack.">
    <title>Online Fish Delivery Marketplace — Same-Day Cold-Chain App for Coastal India | ITD GrowthLabs</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <link rel="alternate" hreflang="en-in" href="https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php">
    <link rel="alternate" hreflang="en-us" href="https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php">
    <link rel="alternate" hreflang="en-gb" href="https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php">
    <link rel="alternate" hreflang="en-au" href="https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php">
    <link rel="alternate" hreflang="en-ae" href="https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php">
    <link rel="alternate" hreflang="x-default" href="https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php">

    <meta property="og:title" content="Online Fish Delivery Marketplace — Same-Day Cold-Chain App for Coastal India | ITD GrowthLabs">
    <meta property="og:description" content="How we built a same-day fish + seafood marketplace app with cold-chain ops, vendor app, and 240+ onboarded fishermen + retailers.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php">
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">
    <meta property="og:image:alt" content="Online Fish Delivery Marketplace case study by ITD GrowthLabs">
    <meta property="og:site_name" content="ITD GrowthLabs">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Online Fish Delivery Marketplace — ITD GrowthLabs Case Study">
    <meta name="twitter:description" content="Customer + vendor + rider apps. Cold-chain SLA, 240+ vendors, 18-min delivery. Flutter + Node + Firebase.">

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
  "headline": "Online Fish Delivery Marketplace — Same-Day Cold-Chain App for Coastal India",
  "description": "Case study: online fish delivery marketplace app we built. 240+ vendors, same-day cold-chain, 9,000+ orders/month, 18-min average delivery. Flutter + Node + Firebase stack.",
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
  "mainEntityOfPage": "https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php",
  "about": "Hyperlocal cold-chain marketplace app development",
  "keywords": "fish delivery app, seafood marketplace, cold chain delivery, hyperlocal marketplace, vendor app, Flutter marketplace, Node.js backend"
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
      "name": "Online Fish Delivery Marketplace",
      "item": "https://itdgrowthlabs.com/case-studies/online-fish-delivery-marketplace-app.php"
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
            <span class="now">Online Fish Delivery Marketplace</span>
        </div>
        <span class="cs-eyebrow"><i class="fas fa-fish" style="margin-right:6px;"></i>Marketplace · Cold-Chain · Hyperlocal</span>
        <h1 class="cs-title">Online Fish Delivery Marketplace — Same-Day Cold-Chain App for Coastal India</h1>
        <p class="cs-subtitle">A coastal-India seafood brand wanted to take fresh fish from the boat to the customer's door in under 90 minutes — without owning the entire supply chain. We built a marketplace app with cold-chain SLAs, vendor onboarding, and rider-network integration that hit 9,000 monthly orders by month seven.</p>
    </div>
</section>

<!-- KPI bar -->
<section class="cs-kpi-bar" aria-label="Headline results">
    <div class="container">
        <div class="cs-kpi-grid">
                <div><span class="cs-kpi-num">9,000+</span><span class="cs-kpi-label">Monthly Orders</span></div>
                <div><span class="cs-kpi-num">240+</span><span class="cs-kpi-label">Vendors Onboarded</span></div>
                <div><span class="cs-kpi-num">18 min</span><span class="cs-kpi-label">Avg Delivery Time</span></div>
                <div><span class="cs-kpi-num">4.6 <i class="fas fa-star" style="font-size:14px;"></i></span><span class="cs-kpi-label">Customer Rating</span></div>
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
                        <dt>Industry</dt><dd>Marketplace · seafood · cold-chain hyperlocal</dd>
                        <dt>Scope</dt><dd>Customer app, vendor app, rider app, admin web</dd>
                        <dt>Team size</dt><dd>7 engineers + 1 PM + 1 designer</dd>
                        <dt>Timeline</dt><dd>4 months to v1 · 7 months to scale</dd>
                        <dt>Regions</dt><dd>Coastal Karnataka + Goa; architecture portable to any coastal region</dd>
                        <dt>Status</dt><dd>Live · ITD on monthly retainer</dd>
                    </dl>
                </div>

                <div class="cs-block">
                    <h2>The client &amp; the problem</h2>
                    <p>Selling fresh fish online is two engineering problems: a marketplace (matching customer to vendor), and a cold-chain (getting it there before it spoils). Most aggregators don't bother — fresh-fish is a tiny fraction of grocery orders. The client wanted to own this category in coastal India where fish is a daily-purchase staple.</p>
                    <ul>
                        <li><strong>Cold-chain SLA:</strong> Fish loses 30% perceived quality after 4 hours unrefrigerated; 90-minute door-to-door is the brand promise.</li>
                        <li><strong>Vendor concentration:</strong> Two harbour-front vendors had 60% of supply; concentration risk was existential.</li>
                        <li><strong>Quality variance:</strong> No standard for &quot;A-grade fresh&quot;; customer complaints were judgment-call disputes.</li>
                        <li><strong>Rider economics:</strong> Single-pickup per order made unit economics impossible; multi-pickup hub model needed.</li>
                        <li><strong>Inventory unpredictability:</strong> Daily catch varies; vendor stock turns over completely each day.</li>
                    </ul>
                </div>

                <div class="cs-block">
                    <h2>The solution</h2>
                    <p>Hub-and-spoke model: vendors deliver fresh catch to a refrigerated hub, hub-staff grade + pack + dispatch via rider network. The app coordinates the whole flow with sub-minute updates.</p>
                    <h3>1. Customer app (Flutter)</h3>
                    <p>Catch-of-the-day feed (refreshed twice daily), vendor + rating filter, cart, scheduled delivery slots, 90-min express, order tracking, freshness-guarantee return flow, ratings.</p>
                    <h3>2. Vendor app (Flutter)</h3>
                    <p>Daily catch upload (photo + weight + price), hub-arrival check-in, payout dashboard, return-handling, rating breakdown.</p>
                    <h3>3. Rider app (Flutter)</h3>
                    <p>Hub-pickup-list, multi-drop route (up to 5 orders), cooler-bag scan-in / scan-out, OTP delivery, daily earnings.</p>
                    <h3>4. Admin / hub-ops web (React)</h3>
                    <p>Hub-arrival queue, grading workflow, packing assignment, dispatch board, dispute desk, inventory + pricing override, daily reports, vendor onboarding.</p>
                    <h3>5. Backend (Node + Firebase + Postgres)</h3>
                    <p>NestJS API on Postgres, Firebase RTDB for live order state and rider-location streams, Redis for hub-staff handoffs, Twilio + FCM for notifications, Razorpay for payments.</p>
                </div>

                <div class="cs-block">
                    <h2>Tech stack &amp; why</h2>
                    <p>We picked the stack for fit, performance under realistic load, and operational simplicity. Here is the breakdown:</p>
                    <div style="margin-bottom: 16px;">
                        <span class="tech-chip">Flutter 3.x</span>
                        <span class="tech-chip">NestJS</span>
                        <span class="tech-chip">TypeScript</span>
                        <span class="tech-chip">PostgreSQL</span>
                        <span class="tech-chip">Firebase RTDB</span>
                        <span class="tech-chip">Redis</span>
                        <span class="tech-chip">Razorpay</span>
                        <span class="tech-chip">Twilio</span>
                        <span class="tech-chip">FCM</span>
                        <span class="tech-chip">Google Maps Platform</span>
                        <span class="tech-chip">AWS EC2 + RDS</span>
                        <span class="tech-chip">GitHub Actions</span>
                        <span class="tech-chip">Sentry</span>
                    </div>
                    <p><strong>Postgres for transactional + Firebase for live state:</strong> the split keeps cost manageable (Firebase only for the hot stuff) and makes reporting easy (everything settles to Postgres). The hot data is small; the cold data is huge.</p>
                    <p><strong>Flutter across all three apps:</strong> one design system, one team, three apps in two stores. Build cost was ~40% of doing this in native.</p>
                    <p><strong>Hub-ops web on React, not Flutter:</strong> staff at the hub use desktops with multiple browser tabs. A web app suits that workflow far better than a phone app.</p>
                </div>

                <div class="cs-block">
                    <h2>The hardest technical problem we solved</h2>
                    <p><strong>Daily inventory orchestration.</strong></p>
<p>A fish marketplace is not like a grocery marketplace where SKUs are stable. Every day, vendors arrive with different catches in different quantities at different prices. The customer-facing menu has to refresh twice a day with what is actually available — without breaking carts that are mid-checkout.</p><p>We modeled inventory as time-bucketed (morning catch / evening catch). Vendor uploads create a bucket; customer cart-locks-in a bucket-version; if the bucket changes mid-checkout, the customer sees a substitution-or-refund prompt within 8 seconds.</p><p>Cancellation rate from inventory mismatch dropped to 1.1% — well below the 5% industry default. Daily merchandising (which catch to highlight, which vendor to feature) became data-driven.</p>
                </div>

                <div class="cs-block">
                    <h2>Go-to-market &amp; ramp</h2>
                    <p>Single town launch — Mangaluru — with 12 hand-picked vendors and 200 hand-recruited customers. Six weeks of intensive ops involvement. Then expanded along the coast: Udupi, Karwar, Goa.</p><p>Vendor onboarding was the constraint, not engineering. We built a self-serve KYC + photo-verify flow that cut onboarding from 4 days to 90 minutes.</p>
                </div>

                <div class="cs-block">
                    <h2>Results</h2>
                    <div class="result-grid">
                        <div class="result-card"><span class="rn">9,000+</span><span class="rl">Monthly Orders</span></div>
                        <div class="result-card"><span class="rn">240+</span><span class="rl">Vendors Onboarded</span></div>
                        <div class="result-card"><span class="rn">18 min</span><span class="rl">Avg Delivery Time (express tier)</span></div>
                        <div class="result-card"><span class="rn">4.6 ★</span><span class="rl">Customer App Rating</span></div>
                        <div class="result-card"><span class="rn">1.1%</span><span class="rl">Inventory-Cancellation Rate</span></div>
                        <div class="result-card"><span class="rn">5</span><span class="rl">Coastal Cities Live</span></div>
                        <div class="result-card"><span class="rn">Zero</span><span class="rl">Cold-Chain SLA Failures (90-day)</span></div>
                        <div class="result-card"><span class="rn">36%</span><span class="rl">Repeat-Order Rate (90-day)</span></div>
                    </div>
                </div>

                <div class="cs-testimonial-card">
                    <p class="q">&ldquo;Fish-online is a category most aggregators write off. The platform plus the hub model makes the unit economics work where everyone said they couldn't.&rdquo;</p>
                    <p class="a">Founder</p>
                    <p class="r">Coastal Seafood Marketplace · Karnataka</p>
                </div>

                <div class="cs-block">
                    <h2>What we would do differently</h2>
                    <p>Start with cooler-bag tracking from day one. We treated cold-chain as a process problem first, a tech problem second; turns out the bag-scan flow eliminated 80% of disputes. Should have been week-one, not month-three.</p>
                </div>

                <div class="cs-cta">
                    <h3>Building a hyperlocal or cold-chain marketplace?</h3>
                    <p>Hyperlocal categories that aggregators ignore are the best opportunities — if you have the operational discipline. Talk to a team that has shipped marketplace + cold-chain platforms before.</p>
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
                    <h4>Multi-Vendor Marketplace App</h4>
                    <p>Food + grocery marketplace: 12,000 MAU, 320 vendors.</p>
                    <a href="multi-vendor-marketplace-app-food-grocery.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>On-Demand Courier App</h4>
                    <p>Same-day courier platform: 5,000+ daily bookings.</p>
                    <a href="on-demand-courier-booking-app.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Multi-Vendor Marketplace App (Product)</h4>
                    <p>Pre-built marketplace platform across categories.</p>
                    <a href="../products/multi-vendor-marketplace-app.php">See product <i class="fas fa-arrow-right"></i></a>
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
                    <p>How we partner with food brands and marketplaces.</p>
                    <a href="../industries/food-restaurant.php">See industry page <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>D2C E-Commerce App</h4>
                    <p>Shopify-backed Flutter app for a fashion brand.</p>
                    <a href="d2c-ecommerce-mobile-app-fashion-brand.php">Read case study <i class="fas fa-arrow-right"></i></a>
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
