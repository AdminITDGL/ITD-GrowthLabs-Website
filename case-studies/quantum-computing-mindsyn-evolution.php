<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-M4XDB2GZ');</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="How ITD GrowthLabs engineered the production application layer for Mindsyn Evolution&rsquo;s quantum-computing platform &mdash; architecture, web app, API gateway, and the quantum-classical orchestration that ships it to real users.">
    <title>Quantum Computing Application for Mindsyn Evolution — Case Study | ITD GrowthLabs</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/case-studies/quantum-computing-mindsyn-evolution.php">
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

    <meta property="og:title" content="Quantum Computing Application for Mindsyn Evolution — Case Study | ITD GrowthLabs">
    <meta property="og:description" content="Architecting and engineering the production application layer for a quantum-computing platform — frontend, API gateway, quantum-classical orchestration, observability.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://itdgrowthlabs.com/case-studies/quantum-computing-mindsyn-evolution.php">
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Quantum Computing Application for Mindsyn Evolution — Case Study | ITD GrowthLabs">
    <meta name="twitter:description" content="How ITD GrowthLabs engineered the production application layer for a quantum-computing platform.">
    <meta name="twitter:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">

    <link rel="alternate" hreflang="en-in" href="https://itdgrowthlabs.com/case-studies/quantum-computing-mindsyn-evolution.php">
    <link rel="alternate" hreflang="en-us" href="https://itdgrowthlabs.com/case-studies/quantum-computing-mindsyn-evolution.php">
    <link rel="alternate" hreflang="en-gb" href="https://itdgrowthlabs.com/case-studies/quantum-computing-mindsyn-evolution.php">
    <link rel="alternate" hreflang="en-au" href="https://itdgrowthlabs.com/case-studies/quantum-computing-mindsyn-evolution.php">
    <link rel="alternate" hreflang="en-ae" href="https://itdgrowthlabs.com/case-studies/quantum-computing-mindsyn-evolution.php">
    <link rel="alternate" hreflang="x-default" href="https://itdgrowthlabs.com/case-studies/quantum-computing-mindsyn-evolution.php">

    <!-- Article + Case Study schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "Quantum Computing Application for Mindsyn Evolution",
        "description": "Production application engineering for a quantum-computing platform — frontend, API gateway, quantum-classical orchestration, observability.",
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
        "datePublished": "2026-04-30",
        "dateModified": "2026-04-30",
        "about": {
            "@type": "Thing",
            "name": "Quantum Computing Software Engineering"
        },
        "mentions": [
            { "@type": "Organization", "name": "Mindsyn Evolution", "url": "https://mindsynevolution.ai/" }
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://itdgrowthlabs.com/" },
            { "@type": "ListItem", "position": 2, "name": "Case Studies", "item": "https://itdgrowthlabs.com/case-studies.php" },
            { "@type": "ListItem", "position": 3, "name": "Quantum Computing — Mindsyn Evolution" }
        ]
    }
    </script>

    <style>
        :root {
            --cs-primary: #7c3aed;       /* quantum violet */
            --cs-primary-dark: #5b21b6;
            --cs-heading: #1a1a2e;
            --cs-body: #4a5568;
        }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; color: var(--cs-body); }

        .cs-hero { background: radial-gradient(1200px 600px at 20% -10%, #2a1a5a 0%, transparent 60%), linear-gradient(135deg, #0b0820 0%, #1a1240 50%, #2c1670 100%); color: #fff; position: relative; overflow: hidden; padding: 120px 0 80px; }
        .cs-hero::before { content: ''; position: absolute; inset: 0; background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.08) 1px, transparent 0); background-size: 28px 28px; opacity: 0.6; }
        .cs-hero .container { position: relative; z-index: 2; }
        .cs-crumb { font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 22px; }
        .cs-crumb a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .cs-crumb a:hover { color: #fff; }
        .cs-crumb .sep { color: rgba(255,255,255,0.35); margin: 0 8px; }
        .cs-crumb .now { color: #c4b5fd; font-weight: 600; }
        .cs-eyebrow { display: inline-block; padding: 6px 14px; background: rgba(124,58,237,0.18); color: #ddd6fe; border: 1px solid rgba(196,181,253,0.4); border-radius: 30px; font-size: 12px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 18px; }
        .cs-title { font-size: 44px; font-weight: 800; line-height: 1.18; margin-bottom: 18px; }
        .cs-subtitle { font-size: 17px; line-height: 1.8; opacity: 0.88; max-width: 760px; }
        .cs-hero-client { display: flex; align-items: center; gap: 14px; margin-top: 26px; padding: 14px 18px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; max-width: 520px; }
        .cs-hero-client .badge-dot { width: 10px; height: 10px; background: #22c55e; border-radius: 50%; box-shadow: 0 0 0 4px rgba(34,197,94,0.18); }
        .cs-hero-client .cl-l { font-size: 12px; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(255,255,255,0.5); }
        .cs-hero-client .cl-n { font-weight: 700; color: #fff; }
        .cs-hero-client .cl-n a { color: #c4b5fd; text-decoration: none; border-bottom: 1px dashed rgba(196,181,253,0.6); }
        .cs-hero-client .cl-n a:hover { color: #fff; border-bottom-color: #fff; }

        .cs-kpi-bar { background: #fff; padding: 28px 0; border-bottom: 1px solid #eef1f5; }
        .cs-kpi-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center; }
        .cs-kpi-num { display: block; font-size: 26px; font-weight: 800; color: var(--cs-primary); line-height: 1.1; margin-bottom: 6px; }
        .cs-kpi-label { font-size: 13px; color: #555; font-weight: 500; letter-spacing: 0.3px; }
        @media (max-width: 768px) { .cs-kpi-grid { grid-template-columns: repeat(2, 1fr); gap: 18px; } .cs-kpi-num { font-size: 22px; } }

        .cs-body-wrap { padding: 70px 0; background: #fafafa; }
        .cs-block { margin-bottom: 50px; }
        .cs-block h2 { font-size: 30px; font-weight: 800; color: var(--cs-heading); margin-bottom: 18px; line-height: 1.3; }
        .cs-block h3 { font-size: 20px; font-weight: 700; color: var(--cs-heading); margin: 24px 0 12px; }
        .cs-block p { font-size: 16px; line-height: 1.85; color: var(--cs-body); margin-bottom: 16px; }
        .cs-block ul { padding-left: 22px; margin-bottom: 18px; }
        .cs-block ul li { font-size: 16px; line-height: 1.85; color: var(--cs-body); margin-bottom: 8px; }
        .cs-block ul li strong { color: var(--cs-heading); }
        .cs-block a { color: var(--cs-primary-dark); font-weight: 600; }

        .cs-facts { background: #fff; border: 1px solid #eef1f5; border-left: 4px solid var(--cs-primary); border-radius: 10px; padding: 22px 26px; margin-bottom: 40px; }
        .cs-facts h4 { font-size: 13px; letter-spacing: 1.5px; text-transform: uppercase; color: var(--cs-primary-dark); font-weight: 700; margin-bottom: 14px; }
        .cs-facts dl { display: grid; grid-template-columns: 180px 1fr; gap: 10px 20px; margin: 0; }
        .cs-facts dt { font-weight: 700; color: var(--cs-heading); font-size: 14px; }
        .cs-facts dd { margin: 0; color: var(--cs-body); font-size: 14px; }
        @media (max-width: 580px) { .cs-facts dl { grid-template-columns: 1fr; gap: 2px 0; } .cs-facts dd { margin-bottom: 10px; } }

        .tech-chip { display: inline-block; padding: 6px 14px; background: #f3f0ff; color: var(--cs-primary-dark); font-size: 13px; font-weight: 600; border: 1px solid #e9e2ff; border-radius: 6px; margin: 3px 4px; }

        .arch-diagram { background: #fff; border: 1px solid #eef1f5; border-radius: 12px; padding: 28px 22px; margin: 24px 0; }
        .arch-layers { display: grid; grid-template-columns: 1fr; gap: 14px; }
        .arch-layer { padding: 16px 18px; border-radius: 10px; border: 1px solid #eef1f5; background: linear-gradient(135deg, #fafafa, #fff); display: flex; align-items: center; gap: 16px; }
        .arch-layer .lyr-num { flex: 0 0 36px; width: 36px; height: 36px; border-radius: 50%; background: var(--cs-primary); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 14px; }
        .arch-layer .lyr-body { flex: 1; }
        .arch-layer h4 { margin: 0 0 4px; font-size: 15px; font-weight: 700; color: var(--cs-heading); }
        .arch-layer p { margin: 0; font-size: 13.5px; color: var(--cs-body); line-height: 1.6; }

        .cs-testimonial-card { background: #fff; border: 1px solid #eef1f5; border-left: 5px solid var(--cs-primary); border-radius: 12px; padding: 30px; margin: 40px 0; }
        .cs-testimonial-card .q { font-size: 17px; line-height: 1.8; color: var(--cs-heading); font-style: italic; margin-bottom: 16px; }
        .cs-testimonial-card .a { font-size: 14px; font-weight: 700; color: var(--cs-heading); }
        .cs-testimonial-card .r { font-size: 13px; color: #777; }

        .cs-cta { background: linear-gradient(135deg, var(--cs-primary), var(--cs-primary-dark)); border-radius: 16px; padding: 40px; color: #fff; margin-top: 40px; }
        .cs-cta h3 { color: #fff; font-size: 26px; font-weight: 800; margin-bottom: 10px; }
        .cs-cta p { color: rgba(255,255,255,0.92); margin-bottom: 24px; font-size: 16px; }
        .cs-cta-btn { display: inline-block; background: #fff; color: var(--cs-primary-dark); padding: 13px 30px; border-radius: 30px; font-weight: 700; text-decoration: none; font-size: 15px; transition: transform .25s ease, box-shadow .25s ease; margin-right: 10px; margin-bottom: 8px; }
        .cs-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.25); color: var(--cs-primary-dark); }
        .cs-cta-btn.alt { background: transparent; color: #fff; border: 2px solid #fff; }

        .cs-related { background: #fff; padding: 60px 0; border-top: 1px solid #eef1f5; }
        .cs-related h3 { font-size: 22px; font-weight: 800; color: var(--cs-heading); margin-bottom: 24px; }
        .cs-related-card { background: #fafafa; border: 1px solid #eef1f5; border-radius: 12px; padding: 22px; transition: all .25s ease; height: 100%; }
        .cs-related-card:hover { transform: translateY(-3px); box-shadow: 0 8px 25px rgba(124,58,237,0.07); border-color: rgba(124,58,237,0.2); }
        .cs-related-card h4 { font-size: 16px; font-weight: 700; color: var(--cs-heading); margin-bottom: 8px; }
        .cs-related-card p { font-size: 14px; color: var(--cs-body); margin-bottom: 14px; line-height: 1.6; }
        .cs-related-card a { color: var(--cs-primary-dark); font-weight: 600; font-size: 14px; text-decoration: none; }
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
            <a href="../index.php">Home</a><span class="sep">/</span>
            <a href="../case-studies.php">Case Studies</a><span class="sep">/</span>
            <span class="now">Quantum Computing — Mindsyn Evolution</span>
        </div>
        <span class="cs-eyebrow"><i class="fas fa-atom" style="margin-right:6px;"></i>Deep Tech · Quantum &amp; AI · Production Engineering</span>
        <h1 class="cs-title">Shipping a Quantum-Computing Application — From Research Notebook to a Live Product</h1>
        <p class="cs-subtitle">Mindsyn Evolution is building a deep-tech platform that pairs quantum and classical compute to solve problems that don't fit on either alone. We were brought in as the production application partner — to take that research surface and turn it into a working, reliable product that real users could log into, run, and trust.</p>
        <div class="cs-hero-client">
            <span class="badge-dot"></span>
            <div>
                <div class="cl-l">Client</div>
                <div class="cl-n">Mindsyn Evolution &nbsp;&middot;&nbsp; <a href="https://mindsynevolution.ai/" target="_blank" rel="noopener">mindsynevolution.ai</a></div>
            </div>
        </div>
    </div>
</section>

<!-- KPI bar -->
<section class="cs-kpi-bar" aria-label="Engagement highlights">
    <div class="container">
        <div class="cs-kpi-grid">
            <div><span class="cs-kpi-num">Live</span><span class="cs-kpi-label">In production at <a href="https://mindsynevolution.ai/" target="_blank" rel="noopener" style="color:var(--cs-primary);text-decoration:none;">mindsynevolution.ai</a></span></div>
            <div><span class="cs-kpi-num">Quantum + Classical</span><span class="cs-kpi-label">Hybrid orchestration layer</span></div>
            <div><span class="cs-kpi-num">End-to-end</span><span class="cs-kpi-label">UX → API → Compute layer</span></div>
            <div><span class="cs-kpi-num">Long-term</span><span class="cs-kpi-label">Active AMC + roadmap partner</span></div>
        </div>
    </div>
</section>

<!-- Body -->
<section class="cs-body-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="cs-facts">
                    <h4>Engagement at a glance</h4>
                    <dl>
                        <dt>Client</dt><dd>Mindsyn Evolution — deep-tech R&amp;D firm working at the intersection of quantum computing and applied AI</dd>
                        <dt>Domain</dt><dd>Quantum / classical hybrid computing application — productionising research into a usable product</dd>
                        <dt>Scope</dt><dd>Application architecture, web frontend, secure API gateway, quantum-classical orchestration layer, authentication, observability, deployment</dd>
                        <dt>Engagement</dt><dd>Production engineering partner — design, build, deploy, AMC</dd>
                        <dt>Live URL</dt><dd><a href="https://mindsynevolution.ai/" target="_blank" rel="noopener" style="color:var(--cs-primary-dark);">mindsynevolution.ai</a></dd>
                        <dt>Status</dt><dd>Live · Ongoing roadmap engagement</dd>
                    </dl>
                </div>

                <div class="cs-block">
                    <h2>The problem: research that won't survive contact with real users</h2>
                    <p>Quantum-computing work lives, by default, in Jupyter notebooks and CLI scripts. That's fine when you're proving an algorithm. It is fatal the moment you want a customer, an investor, or a partner to actually <em>use</em> the thing — because the surface where they meet your work is a product, not a notebook.</p>
                    <p>Mindsyn Evolution's research team had a working quantum-classical hybrid pipeline. What they needed was the production engineering wrapper around it: a credible application surface, identity and access, a stable API contract between the application layer and the quantum compute backend, deployment, monitoring, and the kind of UX that lets a non-physicist use the system without being scared away.</p>
                    <p>This is the gap where most deep-tech projects die. The research is sound; the production engineering never gets built; the product never ships.</p>
                </div>

                <div class="cs-block">
                    <h2>What we built — and why we drew the line where we did</h2>
                    <p>Our scope was the production application: everything that lives between the user's browser and the boundary of the quantum compute layer. We deliberately did <em>not</em> touch the quantum algorithms themselves — that is Mindsyn's IP and their team's domain. Our job was to make sure the application surrounding the research is the kind that a serious B2B / enterprise user can actually depend on.</p>

                    <div class="arch-diagram">
                        <div class="arch-layers">
                            <div class="arch-layer">
                                <span class="lyr-num">1</span>
                                <div class="lyr-body">
                                    <h4>Application surface (web frontend)</h4>
                                    <p>A modern, fast, accessible web app that lets users sign in, configure runs, submit workloads, observe results, and manage history — without ever seeing the underlying compute complexity.</p>
                                </div>
                            </div>
                            <div class="arch-layer">
                                <span class="lyr-num">2</span>
                                <div class="lyr-body">
                                    <h4>Identity, access, and tenant isolation</h4>
                                    <p>Secure authentication, role-based access, and clean tenant boundaries — because the moment you have more than one customer or more than one workload, this stops being optional.</p>
                                </div>
                            </div>
                            <div class="arch-layer">
                                <span class="lyr-num">3</span>
                                <div class="lyr-body">
                                    <h4>API gateway &amp; orchestration layer</h4>
                                    <p>A stable, versioned API contract between the frontend and the compute backend. Requests are validated, queued, retried, observed, and traced. The quantum backend stops being something the frontend has to know about.</p>
                                </div>
                            </div>
                            <div class="arch-layer">
                                <span class="lyr-num">4</span>
                                <div class="lyr-body">
                                    <h4>Quantum-classical execution bridge</h4>
                                    <p>The thin, well-defined surface where classical orchestration hands off to the quantum compute layer (and receives results). Designed to be swappable — different quantum providers or simulators can sit behind the same contract.</p>
                                </div>
                            </div>
                            <div class="arch-layer">
                                <span class="lyr-num">5</span>
                                <div class="lyr-body">
                                    <h4>Observability, logging, and deployment</h4>
                                    <p>Structured logs, traces, metrics, dashboards. CI/CD that ships safely. Backups, secrets management, environment isolation. The boring, load-bearing things that determine whether a deep-tech product survives its first production incident.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cs-block">
                    <h2>Tech &amp; engineering choices</h2>
                    <p>Quantum work attracts a certain temptation toward exotic stacks. We resisted it. The application layer is built with mainstream, battle-tested choices so that Mindsyn's team — and any future hire — can reason about, debug, and extend the system without learning a new framework every quarter.</p>
                    <div style="margin-bottom: 16px;">
                        <span class="tech-chip">Modern JS frontend</span>
                        <span class="tech-chip">Python application backend</span>
                        <span class="tech-chip">REST + queued APIs</span>
                        <span class="tech-chip">OAuth / JWT auth</span>
                        <span class="tech-chip">PostgreSQL</span>
                        <span class="tech-chip">Redis</span>
                        <span class="tech-chip">Containerised deploy</span>
                        <span class="tech-chip">Structured logging</span>
                        <span class="tech-chip">CI/CD pipelines</span>
                        <span class="tech-chip">Quantum SDK integration</span>
                    </div>
                    <p>The boundary with the quantum layer is explicit and well-typed. The compute backend can be swapped — between simulators, between providers, between local and cloud-hosted quantum hardware — without touching the frontend or the API contract.</p>
                </div>

                <div class="cs-block">
                    <h2>The hardest non-technical problem we solved</h2>
                    <p>It wasn't quantum. It was scoping the line between <em>research code</em> and <em>production code</em>, and holding that line as we built.</p>
                    <p>In every deep-tech engagement, there is pressure — from researchers, from founders, from investors — to "just put the notebook behind a button." That works for a demo. It does not work for a product, because notebooks are read-once, mutable, untyped, untested artifacts that will fail unpredictably the moment a real user touches them.</p>
                    <p>What we agreed early — and stuck to — is that anything user-facing must live behind a stable, typed, tested API. Research notebooks remain the source of algorithmic truth. The production layer calls into vetted modules, not into notebooks. The result: the science can keep evolving without the product breaking.</p>
                </div>

                <div class="cs-testimonial-card">
                    <p class="q">&ldquo;ITD GrowthLabs took the part of the work that we were not going to do well — production engineering — and did it properly. They drew clear boundaries, didn't pretend to be quantum researchers, and built the application around our compute layer in a way that lets us iterate without the product falling over.&rdquo;</p>
                    <p class="a">Mindsyn Evolution &mdash; Founding team</p>
                    <p class="r">Verified engagement &middot; Live at <a href="https://mindsynevolution.ai/" target="_blank" rel="noopener" style="color:var(--cs-primary-dark);">mindsynevolution.ai</a></p>
                </div>

                <div class="cs-block">
                    <h2>What this engagement signals</h2>
                    <p>Most agencies cannot work on deep-tech products. Quantum, AI/ML pipelines, and research-grade systems demand engineers who can read papers, talk to scientists, draw a real boundary between research and product code, and ship the production surface that turns the research into a real business. That's the work we do.</p>
                    <p>If you're a deep-tech, AI, or research-driven founder sitting on a working algorithm but missing the production application layer — frontend, API surface, orchestration, deployment, observability — this is the engagement model we run.</p>
                </div>

                <div class="cs-cta">
                    <h3>Building a deep-tech product? Let's talk.</h3>
                    <p>If you have working research or a working ML / quantum / data pipeline and need the production application layer around it, we'd like to hear what you're building. 30 minutes, free, no pitch.</p>
                    <a href="https://calendly.com/itdgrowthlabs-info/30min" class="js-book-call cs-cta-btn" data-source="case_study_mindsyn">Book a 30-min Call</a>
                    <a href="../contact-us.php" class="cs-cta-btn alt">Send us a brief</a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Related -->
<section class="cs-related">
    <div class="container">
        <h3>Other deep-engineering case studies</h3>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="cs-related-card">
                    <h4>Replacing Excel + WhatsApp with a Real Courier Management System</h4>
                    <p>14 hubs, 35 staff, zero billing errors. Modelling a physical workflow end to end in software.</p>
                    <a href="courier-management-system.php">Read case study &rarr;</a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="cs-related-card">
                    <h4>Cross-Border Courier Platform SaaS</h4>
                    <p>Multi-tenant SaaS, customs and tracking, white-labelled to 3PL operators.</p>
                    <a href="cross-border-courier-platform-saas.php">Read case study &rarr;</a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="cs-related-card">
                    <h4>NBFC Loan Origination Dashboard (Fintech)</h4>
                    <p>Compliance-grade dashboard for a regulated lender — audit trails, risk gates, real-time decisions.</p>
                    <a href="nbfc-loan-origination-dashboard-fintech.php">Read case study &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__ . "/../includes/footer.php"); ?>
<?php include(__DIR__ . "/../includes/footer_script.php"); ?>
</body>
</html>
