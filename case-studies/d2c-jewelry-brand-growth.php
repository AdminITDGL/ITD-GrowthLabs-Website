<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-M4XDB2GZ');</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="How we built a systematic ad engine for a D2C jewelry brand. Shopify + AR + BIS/HUID display + Google Shopping + Instagram + WhatsApp + calendar-aware campaigns.">
    <title>D2C Jewelry Brand &mdash; Full-Stack Growth Across India + GCC Prep &mdash; Case Study | ITD GrowthLabs</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/case-studies/d2c-jewelry-brand-growth.php">
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/elegant-icons.css" rel="stylesheet">
    <link href="../assets/css/flaticon-set.css" rel="stylesheet">
    <link href="../assets/css/magnific-popup.css" rel="stylesheet">
    <link href="../assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/validnavs.css" rel="stylesheet">
    <link href="../assets/css/helper.css" rel="stylesheet">
    <link href="../assets/css/unit-test.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17674012925"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','AW-17674012925');</script>

    <meta property="og:title" content="D2C Jewelry Brand &mdash; Full-Stack Growth Across India + GCC Prep | ITD GrowthLabs">
    <meta property="og:description" content="3.8x ROAS, 4x Shopify sessions, 15% AOV uplift, 80% festive-season revenue lift. Fine + fashion + occasion jewelry case study.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://itdgrowthlabs.com/case-studies/d2c-jewelry-brand-growth.php">
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="D2C Jewelry Brand &mdash; Full-Stack Growth Across India + GCC Prep | ITD GrowthLabs">
    <meta name="twitter:description" content="3.8x ROAS, 4x Shopify sessions, 15% AOV uplift, 80% festive-season revenue lift. Fine + fashion + occasion jewelry case study.">

    <!-- Article + Case Study schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "D2C Jewelry Brand -- Full-Stack Growth Across India + GCC Prep",
        "description": "3.8x ROAS, 4x Shopify sessions, 15% AOV uplift, 80% festive-season revenue lift. Fine + fashion + occasion jewelry case study.",
        "image": "https://itdgrowthlabs.com/assets/img/logo.jpg",
        "author": {
            "@type": "Organization",
            "name": "ITD GrowthLabs",
            "url": "https://itdgrowthlabs.com"
        },
        "publisher": {
            "@type": "Organization",
            "name": "ITD GrowthLabs",
            "logo": { "@type": "ImageObject", "url": "https://itdgrowthlabs.com/assets/img/logo.jpg" }
        },
        "datePublished": "2026-10-11",
        "dateModified": "2026-10-11"
    }
    </script>

    <style>
        :root { --cs-primary: #f59e0b; --cs-dark: #92400e; --cs-bg: #fffbeb; }
        .d2c-hero { background: linear-gradient(135deg, var(--cs-dark) 0%, var(--cs-primary) 100%); color: #fff; padding: 120px 0 70px; }
        .d2c-hero .breadcrumb-row { font-size: 13px; opacity: 0.75; margin-bottom: 14px; }
        .d2c-hero .breadcrumb-row a { color: #fff; opacity: 0.9; text-decoration: none; }
        .d2c-hero .breadcrumb-row a:hover { text-decoration: underline; }
        .d2c-hero .industry-pill { display: inline-block; padding: 6px 14px; background: rgba(255,255,255,0.14); border-radius: 20px; font-size: 13px; font-weight: 600; margin-bottom: 18px; }
        .d2c-hero h1 { color: #fff; font-size: 40px; font-weight: 800; line-height: 1.25; margin: 0 0 14px; }
        .d2c-hero .subhead { font-size: 18px; opacity: 0.9; max-width: 720px; line-height: 1.6; margin-bottom: 20px; }
        .d2c-hero .nda-strip { display: inline-flex; align-items: center; gap: 8px; background: rgba(0,0,0,0.22); padding: 8px 16px; border-radius: 8px; font-size: 13px; opacity: 0.92; }
        .d2c-section { padding: 60px 0; }
        .d2c-section.alt { background: var(--cs-bg); }
        .d2c-section-head { margin-bottom: 24px; }
        .d2c-eyebrow { display: inline-block; font-size: 12px; font-weight: 800; color: var(--cs-primary); letter-spacing: 1px; text-transform: uppercase; margin-bottom: 10px; padding: 4px 12px; background: var(--cs-bg); border-radius: 20px; }
        .d2c-h2 { font-size: 30px; font-weight: 800; color: #0f1e3d; margin: 0 0 14px; line-height: 1.3; }
        .d2c-section p, .d2c-section li { font-size: 16px; line-height: 1.75; color: #334155; }
        .d2c-section ul { padding-left: 20px; }
        .d2c-section li { margin-bottom: 10px; }
        .d2c-did-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 16px; margin-top: 10px; }
        .d2c-did-item { background: #fff; border: 1px solid #e8ecf1; border-left: 4px solid var(--cs-primary); border-radius: 10px; padding: 18px 20px; }
        .d2c-did-item h4 { font-size: 16px; font-weight: 700; color: #0f1e3d; margin: 0 0 8px; }
        .d2c-did-item p { font-size: 14px; margin: 0; color: #475569; line-height: 1.65; }
        .d2c-numbers { display: grid; grid-template-columns: repeat(auto-fit, minmax(170px, 1fr)); gap: 14px; margin-top: 24px; }
        .d2c-num-item { background: #fff; border-radius: 12px; padding: 24px 18px; text-align: center; box-shadow: 0 4px 16px rgba(15, 30, 61, 0.08); }
        .d2c-num-val { display: block; font-size: 36px; font-weight: 900; color: var(--cs-primary); line-height: 1; margin-bottom: 8px; letter-spacing: -0.5px; }
        .d2c-num-label { display: block; font-size: 13px; color: #64748b; line-height: 1.5; font-weight: 500; }
        .d2c-meta-row { display: flex; flex-wrap: wrap; gap: 24px; padding: 20px 0; border-top: 1px solid #e8ecf1; border-bottom: 1px solid #e8ecf1; margin: 30px 0; font-size: 14px; color: #475569; }
        .d2c-meta-row span i { color: var(--cs-primary); margin-right: 6px; }
        .d2c-nda-callout { background: #fffbeb; border-left: 4px solid #f59e0b; border-radius: 10px; padding: 20px 24px; margin: 30px 0; }
        .d2c-nda-callout h4 { color: #78350f; margin: 0 0 6px; font-size: 16px; font-weight: 700; }
        .d2c-nda-callout p { color: #78350f; margin: 0; font-size: 14px; }
        .d2c-cta-block { background: linear-gradient(135deg, var(--cs-dark) 0%, var(--cs-primary) 100%); color: #fff; border-radius: 16px; padding: 44px 36px; text-align: center; margin-top: 30px; }
        .d2c-cta-block h3 { color: #fff; font-size: 26px; font-weight: 800; margin: 0 0 10px; }
        .d2c-cta-block p { color: rgba(255,255,255,0.9); font-size: 16px; margin: 0 0 24px; }
        .d2c-cta-btn { display: inline-block; padding: 14px 32px; background: #fff; color: var(--cs-dark) !important; border-radius: 8px; font-weight: 700; font-size: 15px; text-decoration: none; transition: transform 0.2s ease; }
        .d2c-cta-btn:hover { transform: translateY(-2px); }
        .d2c-related { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 14px; margin-top: 20px; }
        .d2c-related a { display: block; padding: 18px 20px; background: #fff; border: 1px solid #e8ecf1; border-radius: 10px; color: #0f1e3d; text-decoration: none; font-weight: 600; transition: all 0.2s ease; }
        .d2c-related a:hover { border-color: var(--cs-primary); color: var(--cs-primary); transform: translateY(-2px); box-shadow: 0 8px 20px rgba(15, 30, 61, 0.08); }
        @media (max-width: 768px) {
            .d2c-hero { padding: 90px 0 50px; }
            .d2c-hero h1 { font-size: 28px; }
            .d2c-hero .subhead { font-size: 16px; }
            .d2c-h2 { font-size: 24px; }
            .d2c-num-val { font-size: 28px; }
            .d2c-cta-block { padding: 32px 20px; }
        }
    </style>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4XDB2GZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
</head>

<body>
    <?php include(__DIR__ . "/../includes/header.php"); ?>

    <!-- Hero -->
    <section class="d2c-hero">
        <div class="container">
            <div class="breadcrumb-row"><a href="/">Home</a> &nbsp;&rsaquo;&nbsp; <a href="/case-studies.php">Case Studies</a> &nbsp;&rsaquo;&nbsp; <span>D2C - Jewelry</span></div>
            <span class="industry-pill"><i class="fas fa-gem"></i> &nbsp;D2C &middot; Jewelry</span>
            <h1>D2C Jewelry Brand</h1>
            <p class="subhead">Full-stack growth across India with GCC on the roadmap</p>
            <span class="nda-strip"><i class="fas fa-shield-alt"></i> Named reference under NDA &middot; Numbers are real</span>
        </div>
    </section>

    <!-- Who they are + The challenge -->
    <section class="d2c-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d2c-section-head">
                        <span class="d2c-eyebrow">Who they are</span>
                        <h2 class="d2c-h2">The client</h2>
                    </div>
                    <p>A D2C jewelry brand working across fine, fashion and occasion-wear sub-verticals. BIS + HUID certified, Shopify-based, India-first with GCC expansion planned. Strong brand aesthetic and photography but underpowered growth engine when we started.</p>
                </div>
                <div class="col-lg-6">
                    <div class="d2c-section-head">
                        <span class="d2c-eyebrow">The challenge</span>
                        <h2 class="d2c-h2">What was broken</h2>
                    </div>
                    <ul>
                        <li>Great photography, no systematic ad engine &mdash; everything ran on intuition</li>
                        <li>Wedding + festive season spend was uncoordinated across platforms</li>
                        <li>Instagram follower growth without matching revenue</li>
                        <li>Low repeat on fashion jewelry (sub-20% in a category where 35%+ is possible)</li>
                        <li>Zero cross-channel attribution &mdash; could not tell D2C ROAS from Myntra ROAS</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- What we did -->
    <section class="d2c-section alt">
        <div class="container">
            <div class="d2c-section-head" style="text-align:center; max-width:720px; margin:0 auto 30px;">
                <span class="d2c-eyebrow">What we did</span>
                <h2 class="d2c-h2">The work &mdash; in 8 moves</h2>
                <p style="color:#475569; font-size:16px;">No fluff. Each move came with its own KPI + attribution trail.</p>
            </div>
            <div class="d2c-did-grid">
                <div class="d2c-did-item"><h4>Discovery + strategy workshop</h4><p>3-week brand + audience + sub-vertical workshop. Clear persona + occasion maps. 30-page diagnostic + 90-day plan.</p></div>
                <div class="d2c-did-item"><h4>Shopify + AR + video consult</h4><p>AR try-on module, video consultation booking, improved PDP, bundling, shipping insurance.</p></div>
                <div class="d2c-did-item"><h4>BIS + HUID + certification display</h4><p>Trust lift on every PDP + homepage. Addresses the #1 jewelry buyer objection.</p></div>
                <div class="d2c-did-item"><h4>Google Shopping + PMax + Meta Advantage+</h4><p>Full stack rebuild with jewelry-specific feed + audience + Click-to-WhatsApp.</p></div>
                <div class="d2c-did-item"><h4>Instagram organic velocity 3x</h4><p>12 posts + 8 Reels per week vs 4 + 2 before. Pinterest boards added.</p></div>
                <div class="d2c-did-item"><h4>WhatsApp Cloud API + Klaviyo</h4><p>Reviews flow, abandoned cart, winback, VIP cohort flows.</p></div>
                <div class="d2c-did-item"><h4>Calendar-aware campaigns</h4><p>Akshaya Tritiya, Dhanteras, wedding season, Diwali, Valentine. Pre-planned creative + budget 6 weeks before each window.</p></div>
                <div class="d2c-did-item"><h4>Creator programme</h4><p>10-15 micro-creator collabs per month with Branded Content Partner tagging.</p></div>
            </div>
        </div>
    </section>

    <!-- The numbers -->
    <section class="d2c-section">
        <div class="container">
            <div class="d2c-section-head" style="text-align:center; max-width:720px; margin:0 auto 10px;">
                <span class="d2c-eyebrow">The numbers</span>
                <h2 class="d2c-h2">What changed</h2>
                <p style="color:#475569; font-size:16px;">Measured against baseline, verified in CRM + attribution infrastructure.</p>
            </div>
            <div class="d2c-numbers">
                <div class="d2c-num-item"><span class="d2c-num-val">3.8x</span><span class="d2c-num-label">Blended ROAS at steady state</span></div>
                <div class="d2c-num-item"><span class="d2c-num-val">4x</span><span class="d2c-num-label">Monthly Shopify sessions</span></div>
                <div class="d2c-num-item"><span class="d2c-num-val">15%</span><span class="d2c-num-label">AOV uplift from bundling + certification trust</span></div>
                <div class="d2c-num-item"><span class="d2c-num-val">80%</span><span class="d2c-num-label">Festive-season revenue above baseline month</span></div>
                <div class="d2c-num-item"><span class="d2c-num-val">30%</span><span class="d2c-num-label">Instagram-attributed revenue (from 8%)</span></div>
                <div class="d2c-num-item"><span class="d2c-num-val">3x</span><span class="d2c-num-label">Click-to-WhatsApp conversation volume</span></div>
            </div>

            <div class="d2c-meta-row">
                <span><i class="fas fa-clock"></i><strong>Duration:</strong> 12-month engagement, ongoing</span>
                <span><i class="fas fa-users"></i><strong>Team:</strong> 4-person ITD pod (strategy, performance, Instagram, WhatsApp)</span>
                <span><i class="fas fa-shield-alt"></i><strong>Confidentiality:</strong> Named reference under NDA</span>
            </div>

            <div class="d2c-nda-callout">
                <h4><i class="fas fa-user-shield" style="margin-right:6px;"></i>Why is the brand name withheld?</h4>
                <p>Most of our D2C clients prefer confidentiality &mdash; especially while they are still scaling. On a 30-minute discovery call we can share the brand name, named references, and additional metrics under NDA.</p>
            </div>
        </div>
    </section>

    <!-- Related case studies -->
    <section class="d2c-section alt">
        <div class="container">
            <div class="d2c-section-head" style="text-align:center; max-width:720px; margin:0 auto 20px;">
                <span class="d2c-eyebrow">More like this</span>
                <h2 class="d2c-h2">Related D2C case studies</h2>
            </div>
            <div class="d2c-related">
                <a href="/case-studies/d2c-skincare-brand-scale.php"><i class="fas fa-arrow-right" style="margin-right:8px;color:var(--cs-primary);"></i>D2C Skincare Brand</a>
                <a href="/case-studies/d2c-fashion-brand-growth.php"><i class="fas fa-arrow-right" style="margin-right:8px;color:var(--cs-primary);"></i>D2C Fashion Brand</a>
                <a href="/case-studies/d2c-beauty-brand-scale.php"><i class="fas fa-arrow-right" style="margin-right:8px;color:var(--cs-primary);"></i>D2C Beauty Brand</a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="d2c-section">
        <div class="container">
            <div class="d2c-cta-block">
                <h3>Scaling a D2C brand? Let us look at your numbers.</h3>
                <p>30 minutes. Your attribution, ROAS, repeat rate, retention funnel &mdash; we will tell you what we would do first.</p>
                <a href="https://calendly.com/itdgrowthlabs-info/30min" class="js-book-call d2c-cta-btn" data-source="d2c_case_study_d2c-jewelry-brand-growth" target="_blank" rel="noopener">Book a 30-min Call <i class="fas fa-arrow-right" style="margin-left: 6px;"></i></a>
            </div>
        </div>
    </section>

    <?php include(__DIR__ . "/../includes/footer.php"); ?>

    <!-- scripts -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.appear.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/modernizr.custom.13711.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/progress-bar.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/count-to.js"></script>
    <script src="../assets/js/jquery.scrolla.min.js"></script>
    <script src="../assets/js/YTPlayer.min.js"></script>
    <script src="../assets/js/TweenMax.min.js"></script>
    <script src="../assets/js/validnavs.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/custom.js"></script>

<?php include(__DIR__ . "/../includes/popup_modal.php"); ?>
<?php include(__DIR__ . "/../includes/engagement-tools.php"); ?>
</body>
</html>
