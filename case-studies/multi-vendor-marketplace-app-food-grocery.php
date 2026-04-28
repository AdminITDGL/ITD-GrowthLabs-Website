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
    <meta name="description" content="Case study: multi-vendor food + grocery marketplace app we built. 12,000 MAU, 320 vendors, 850 daily orders. Flutter + Laravel + AWS stack.">
    <title>Multi-Vendor Marketplace App for Food & Grocery — From Zero to 12,000 MAU in Eight Months | ITD GrowthLabs</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <link rel="alternate" hreflang="en-in" href="https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php">
    <link rel="alternate" hreflang="en-us" href="https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php">
    <link rel="alternate" hreflang="en-gb" href="https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php">
    <link rel="alternate" hreflang="en-au" href="https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php">
    <link rel="alternate" hreflang="en-ae" href="https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php">
    <link rel="alternate" hreflang="x-default" href="https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php">

    <meta property="og:title" content="Multi-Vendor Marketplace App for Food & Grocery — From Zero to 12,000 MAU in Eight Months | ITD GrowthLabs">
    <meta property="og:description" content="How we built a multi-vendor food + grocery marketplace that reached 12,000 MAU and 320 onboarded vendors in 8 months.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php">
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">
    <meta property="og:image:alt" content="Multi-Vendor Marketplace App case study by ITD GrowthLabs">
    <meta property="og:site_name" content="ITD GrowthLabs">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Multi-Vendor Marketplace App — ITD GrowthLabs Case Study">
    <meta name="twitter:description" content="Customer app, vendor app, rider app, admin dashboard. Flutter + Laravel + Firebase. 320+ vendors, 850 daily orders.">

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
  "headline": "Multi-Vendor Marketplace App for Food & Grocery — From Zero to 12,000 MAU in Eight Months",
  "description": "Case study: multi-vendor food + grocery marketplace app we built. 12,000 MAU, 320 vendors, 850 daily orders. Flutter + Laravel + AWS stack.",
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
  "mainEntityOfPage": "https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php",
  "about": "Multi-vendor marketplace app development",
  "keywords": "multi-vendor marketplace app, food delivery app development, grocery delivery app, swiggy clone, instamart clone, Flutter marketplace, Laravel API"
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
      "name": "Multi-Vendor Marketplace App",
      "item": "https://itdgrowthlabs.com/case-studies/multi-vendor-marketplace-app-food-grocery.php"
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
            <span class="now">Multi-Vendor Marketplace App</span>
        </div>
        <span class="cs-eyebrow"><i class="fas fa-store" style="margin-right:6px;"></i>Marketplace · Mobile App · Multi-Vendor</span>
        <h1 class="cs-title">Multi-Vendor Marketplace App for Food &amp; Grocery — From Zero to 12,000 MAU in Eight Months</h1>
        <p class="cs-subtitle">A Tier-2-city food and grocery brand wanted to skip the Swiggy/Instamart commission and run their own multi-vendor app. Eight months later, the platform was live across two cities with 320 vendors, 850 daily orders, and 12,000 monthly active users.</p>
    </div>
</section>

<!-- KPI bar -->
<section class="cs-kpi-bar" aria-label="Headline results">
    <div class="container">
        <div class="cs-kpi-grid">
                <div><span class="cs-kpi-num">12,000+</span><span class="cs-kpi-label">Monthly Active Users</span></div>
                <div><span class="cs-kpi-num">320+</span><span class="cs-kpi-label">Onboarded Vendors</span></div>
                <div><span class="cs-kpi-num">850+</span><span class="cs-kpi-label">Daily Orders</span></div>
                <div><span class="cs-kpi-num">4.7 <i class="fas fa-star" style="font-size:14px;"></i></span><span class="cs-kpi-label">Customer Rating</span></div>
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
                        <dt>Industry</dt><dd>Food &amp; grocery · multi-vendor marketplace</dd>
                        <dt>Scope</dt><dd>Customer app, vendor app, delivery-rider app, admin web dashboard</dd>
                        <dt>Team size</dt><dd>9 engineers + 1 PM + 2 designers</dd>
                        <dt>Timeline</dt><dd>5 months to v1 · 8 months to 12,000 MAU</dd>
                        <dt>Regions</dt><dd>Two Tier-2 Indian cities; architecture sized for 6</dd>
                        <dt>Status</dt><dd>Live · ITD on monthly retainer for ops + new features</dd>
                    </dl>
                </div>

                <div class="cs-block">
                    <h2>The client &amp; the problem</h2>
                    <p>The client runs a regional grocery brand with eight physical stores plus 90+ partner vendors (butchers, fish-mongers, fruit-and-veg shops, dairies). Customers were ordering on WhatsApp; reconciliation was a nightmare; and the founder did not want to hand 25% commission to a national aggregator. They needed their own app — but with the operational discipline of a Swiggy and the trust of a neighborhood store.</p>
                    <ul>
                        <li><strong>WhatsApp ordering at scale failed:</strong> 1,200+ daily WhatsApp messages were unreadable; orders slipped, customers complained, the brand reputation took the hit.</li>
                        <li><strong>No vendor inventory sync:</strong> Stock-outs were discovered when the rider reached the store. Cancellation rate was 8%.</li>
                        <li><strong>No rider visibility:</strong> Riders were freelancers with phones and a paper trail. No assignment logic, no proof-of-delivery, no ETA.</li>
                        <li><strong>Commission economics:</strong> National aggregators wanted 22-28% per order. At their margins, that was a money-loser.</li>
                        <li><strong>Trust + retention:</strong> WhatsApp customers churned silently; no notifications, no offers, no profile, no re-order.</li>
                    </ul>
                </div>

                <div class="cs-block">
                    <h2>The solution</h2>
                    <p>We scoped a four-app marketplace: customer, vendor, rider, and admin — sharing one Laravel API and a real-time event layer. The non-obvious decision was building the vendor app first; without vendors keeping inventory honest, no consumer app can survive its first viral week.</p>
                    <h3>1. Customer app (Flutter)</h3>
                    <p>Address-first home screen (so customers see only stores that actually deliver to them), category browse, cart with multiple-vendor support, scheduled delivery slots, multiple payment methods (UPI, COD, wallet), real-time order tracking, ratings, re-order, refer-a-friend, and offer engine.</p>
                    <h3>2. Vendor app (Flutter)</h3>
                    <p>Vendor receives the order on their phone, taps Accept, picks the items, marks ready. Inline catalog management (add/edit products, mark out of stock, set timing), order history, payouts dashboard, and a self-service KYC + bank-detail flow at onboarding.</p>
                    <h3>3. Rider app (Flutter)</h3>
                    <p>FCM push for new pickups, navigation, single-pickup multi-drop support (a rider can carry 3 small orders), proof-of-delivery photo + OTP, daily earnings, weekly payouts, support chat.</p>
                    <h3>4. Admin dashboard (React)</h3>
                    <p>Live ops control: orders board, vendor onboarding queue, rider onboarding queue, dispute desk, pricing &amp; commission rules, reports, push-notification builder, and an offer engine that can target by city, category, or customer cohort.</p>
                    <h3>5. Backend (Laravel + Firebase)</h3>
                    <p>Laravel REST + queue workers, MySQL with read replicas, Redis for cart sessions, Firebase Realtime DB for order-state streaming and rider location pings. Razorpay for payments. Twilio for SMS, FCM for push. CI/CD via GitHub Actions to AWS.</p>
                </div>

                <div class="cs-block">
                    <h2>Tech stack &amp; why</h2>
                    <p>We picked the stack for fit, performance under realistic load, and operational simplicity. Here is the breakdown:</p>
                    <div style="margin-bottom: 16px;">
                        <span class="tech-chip">Flutter 3.x</span>
                        <span class="tech-chip">Laravel 10</span>
                        <span class="tech-chip">PHP 8.2</span>
                        <span class="tech-chip">MySQL 8</span>
                        <span class="tech-chip">Redis</span>
                        <span class="tech-chip">Firebase RTDB</span>
                        <span class="tech-chip">Firebase Cloud Messaging</span>
                        <span class="tech-chip">Google Maps Platform</span>
                        <span class="tech-chip">Razorpay</span>
                        <span class="tech-chip">Twilio</span>
                        <span class="tech-chip">AWS EC2 + RDS</span>
                        <span class="tech-chip">GitHub Actions</span>
                        <span class="tech-chip">Sentry</span>
                    </div>
                    <p><strong>Flutter for all three apps:</strong> we ship one design system, three apps, two stores. The customer + vendor + rider stack would have been 6 native projects otherwise. Build cost dropped ~40% vs three native iOS + three native Android codebases.</p>
                    <p><strong>Laravel for the API:</strong> the team is fluent in it, the ecosystem (Eloquent, Horizon, Telescope, Sanctum) covers 90% of what you need. Performance under load was fine to ~200 RPS; we did the usual cache-and-queue work to handle peak-hour spikes.</p>
                    <p><strong>Firebase only where it earned its place:</strong> realtime order state and live rider tracking. Everything else stayed on Postgres-shaped data in MySQL. This kept the Firebase bill predictable.</p>
                </div>

                <div class="cs-block">
                    <h2>The hardest technical problem we solved</h2>
                    <p><strong>Inventory honesty.</strong></p>
<p>A multi-vendor marketplace lives or dies on inventory accuracy. If a customer orders three items and the rider reaches the store and one is out of stock, that customer is gone — and probably tells two more.</p><p>We attacked this in three layers:</p><ul><li><strong>Vendor-side stock toggles:</strong> the vendor app's home tab is a one-tap mark-out-of-stock list, sorted by today's most-ordered SKUs. Takes 30 seconds at the start of each shift.</li><li><strong>Stock-out detection on the customer side:</strong> if an SKU is ordered three times in 30 minutes from a vendor, we auto-flag it for review and show the vendor a nudge.</li><li><strong>Auto-substitute &amp; refund flow:</strong> if a stock-out happens after order acceptance, the customer gets a substitute suggestion (with photo) on the app — accept, reject, or replace with credit. Resolution time dropped from 8 minutes (WhatsApp) to under 90 seconds.</li></ul><p>Cancellations from stock-outs went from 8% to 1.4% in three months.</p>
                </div>

                <div class="cs-block">
                    <h2>Go-to-market &amp; ramp</h2>
                    <p>We launched in a single neighborhood — five vendors, 200 hand-recruited customers, four weeks of bug-bashing under heavy ops involvement. The mistake we did not make: we resisted the pressure to expand earlier. The data from those four weeks reshaped the rider app twice and the vendor app three times.</p><p>City rollout was driven by a configuration-first architecture. Adding a city = creating a city record, defining delivery zones, setting per-category commissions, and onboarding vendors. A new city went live in six working days the third time round.</p>
                </div>

                <div class="cs-block">
                    <h2>Results</h2>
                    <div class="result-grid">
                        <div class="result-card"><span class="rn">12,000+</span><span class="rl">Monthly Active Users</span></div>
                        <div class="result-card"><span class="rn">320+</span><span class="rl">Vendors Onboarded</span></div>
                        <div class="result-card"><span class="rn">850+</span><span class="rl">Daily Orders (steady-state)</span></div>
                        <div class="result-card"><span class="rn">4.7 ★</span><span class="rl">Customer App Rating</span></div>
                        <div class="result-card"><span class="rn">1.4%</span><span class="rl">Cancellation Rate (from 8%)</span></div>
                        <div class="result-card"><span class="rn">Zero</span><span class="rl">Aggregator Commissions Paid</span></div>
                        <div class="result-card"><span class="rn">18 mins</span><span class="rl">Avg Delivery Time</span></div>
                        <div class="result-card"><span class="rn">32%</span><span class="rl">Repeat-Order Rate (90-day)</span></div>
                    </div>
                </div>

                <div class="cs-testimonial-card">
                    <p class="q">&ldquo;We owned our customer relationship for the first time. The aggregator commissions we used to bleed are now in our P&amp;L. The team got the vendor app right — that is the unsexy thing nobody else gets right.&rdquo;</p>
                    <p class="a">Co-Founder &amp; CEO</p>
                    <p class="r">Multi-Vendor Marketplace · Tier-2 India</p>
                </div>

                <div class="cs-block">
                    <h2>What we would do differently</h2>
                    <p>Build the offer engine into v1, not v2. We launched without sophisticated targeting and the first three city marketing campaigns relied on flat 10% promos, which trained the wrong cohort. By v2 we shipped cohort + behaviour targeting; by then we had spent on customers we did not need to.</p>
                </div>

                <div class="cs-cta">
                    <h3>Building a multi-vendor marketplace?</h3>
                    <p>Whether you are replacing aggregator dependence or scaling a regional brand, we ship marketplace v1 in 4-5 months with the operational discipline you actually need. Quotes are scoped against builds like this.</p>
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
                    <p>Same-day courier platform: 5,000+ daily bookings, Flutter + Node + Firebase.</p>
                    <a href="on-demand-courier-booking-app.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Smart Logistics SaaS</h4>
                    <p>Multi-carrier rate comparison and shipment management — 50,000+ shipments monthly.</p>
                    <a href="smart-logistics-saas-platform.php">Read case study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Multi-Vendor Marketplace App (Product)</h4>
                    <p>Pre-built marketplace platform — food, grocery, fish, pharmacy, hyperlocal &amp; B2B.</p>
                    <a href="../products/multi-vendor-marketplace-app.php">See product <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Marketplace App Cost in India 2026</h4>
                    <p>Detailed pricing, features, and architecture — what a marketplace actually costs.</p>
                    <a href="../resources/Multi_Vendor_Marketplace_App_Development_Cost_India_2026.php">Read guide <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>App Development Service</h4>
                    <p>End-to-end mobile + web app development across iOS, Android, and Flutter.</p>
                    <a href="../services/App-Development.php">See service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Industry: E-Commerce &amp; D2C</h4>
                    <p>How we partner with D2C and e-commerce brands building owned platforms.</p>
                    <a href="../industries/ecommerce.php">See industry page <i class="fas fa-arrow-right"></i></a>
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
