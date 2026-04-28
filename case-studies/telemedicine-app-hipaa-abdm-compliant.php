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
    <meta name="description" content="Case study: HIPAA + ABDM compliant telemedicine app we built. 80,000 patient records, 14,000 monthly consults, 320 doctors. React Native + Node.js stack.">
    <title>Telemedicine App with HIPAA & ABDM Compliance — From Pilot to 80,000 Patient Records | ITD GrowthLabs</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <link rel="alternate" hreflang="en-in" href="https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php">
    <link rel="alternate" hreflang="en-us" href="https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php">
    <link rel="alternate" hreflang="en-gb" href="https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php">
    <link rel="alternate" hreflang="en-au" href="https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php">
    <link rel="alternate" hreflang="en-ae" href="https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php">
    <link rel="alternate" hreflang="x-default" href="https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php">

    <meta property="og:title" content="Telemedicine App with HIPAA & ABDM Compliance — From Pilot to 80,000 Patient Records | ITD GrowthLabs">
    <meta property="og:description" content="How we built a HIPAA + ABDM-compliant telemedicine platform with 80,000 patient records, 14,000 monthly consults, and 320 doctors.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php">
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg">
    <meta property="og:image:alt" content="Telemedicine App case study by ITD GrowthLabs">
    <meta property="og:site_name" content="ITD GrowthLabs">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Telemedicine App — ITD GrowthLabs Case Study">
    <meta name="twitter:description" content="Patient app, doctor app, EHR. HIPAA + ABDM compliant. React Native + Node + AWS HIPAA-eligible. 14,000 monthly consults.">

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
  "headline": "Telemedicine App with HIPAA & ABDM Compliance — From Pilot to 80,000 Patient Records",
  "description": "Case study: HIPAA + ABDM compliant telemedicine app we built. 80,000 patient records, 14,000 monthly consults, 320 doctors. React Native + Node.js stack.",
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
  "mainEntityOfPage": "https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php",
  "about": "Healthcare app development",
  "keywords": "telemedicine app development, HIPAA compliance, ABDM integration, healthcare app India, EHR system, doctor consultation app, React Native healthcare"
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
      "name": "Telemedicine App",
      "item": "https://itdgrowthlabs.com/case-studies/telemedicine-app-hipaa-abdm-compliant.php"
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
            <span class="now">Telemedicine App</span>
        </div>
        <span class="cs-eyebrow"><i class="fas fa-stethoscope" style="margin-right:6px;"></i>Healthcare · Mobile App · Compliance-Heavy</span>
        <h1 class="cs-title">Telemedicine App with HIPAA &amp; ABDM Compliance — From Pilot to 80,000 Patient Records</h1>
        <p class="cs-subtitle">A primary-care telehealth startup needed a platform that satisfied HIPAA (US) and ABDM (India) on day one — not an after-thought. We delivered a patient app, doctor app, and EHR core that now holds 80,000 patient records and processes 14,000 consults a month.</p>
    </div>
</section>

<!-- KPI bar -->
<section class="cs-kpi-bar" aria-label="Headline results">
    <div class="container">
        <div class="cs-kpi-grid">
                <div><span class="cs-kpi-num">80,000+</span><span class="cs-kpi-label">Patient Records</span></div>
                <div><span class="cs-kpi-num">14,000+</span><span class="cs-kpi-label">Monthly Consults</span></div>
                <div><span class="cs-kpi-num">320+</span><span class="cs-kpi-label">Onboarded Doctors</span></div>
                <div><span class="cs-kpi-num">4.8 <i class="fas fa-star" style="font-size:14px;"></i></span><span class="cs-kpi-label">Patient Rating</span></div>
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
                        <dt>Industry</dt><dd>Healthcare · primary-care telemedicine</dd>
                        <dt>Scope</dt><dd>Patient app (iOS + Android), doctor app, EHR / admin web</dd>
                        <dt>Compliance</dt><dd>HIPAA (US) + ABDM (India) + DPDP Act 2023</dd>
                        <dt>Team size</dt><dd>11 engineers + 1 PM + 1 compliance lead</dd>
                        <dt>Timeline</dt><dd>6 months to ABDM sandbox certification · 9 months to v1</dd>
                        <dt>Status</dt><dd>Live · ITD on long-term partnership for clinical-feature roadmap</dd>
                    </dl>
                </div>

                <div class="cs-block">
                    <h2>The client &amp; the problem</h2>
                    <p>Indian telehealth has a trust ceiling. Patients won't book a video consult unless they trust the credentials, the prescription is honored at a pharmacy, and the data does not end up on a billboard. The client wanted to build a clinic-grade telehealth product — not a glorified video-call app.</p>
                    <ul>
                        <li><strong>Compliance was non-optional:</strong> ABDM (Ayushman Bharat Digital Mission) integration was needed to issue ABHA-linked prescriptions. HIPAA was needed to serve the US-NRI cohort. DPDP for India consumer data.</li>
                        <li><strong>Doctor onboarding latency:</strong> Verifying a doctor's MCI/NMC registration manually took 5-7 days, blocking supply-side growth.</li>
                        <li><strong>Prescription credibility:</strong> Pharmacy partners refused to honor prescriptions without ABDM signature. No ABDM = no prescription fulfilment = no revenue.</li>
                        <li><strong>EHR &amp; data handoff:</strong> Patients move between providers; without portable health records, every consult re-asks the same 12 questions.</li>
                        <li><strong>Audit trail:</strong> Every clinical action — prescription issued, drug dispensed, data accessed — needed an immutable audit log for regulators.</li>
                    </ul>
                </div>

                <div class="cs-block">
                    <h2>The solution</h2>
                    <p>We split the platform into three products plus a compliance-aware data layer. The non-obvious choice was making compliance a service (the audit + consent layer) instead of a checklist; everything that touches patient data routes through it.</p>
                    <h3>1. Patient app (React Native)</h3>
                    <p>Symptom checker, doctor search by specialty + language + price, video consult, prescription view + share, lab booking, pharmacy fulfillment, appointment history, family profiles. ABHA linking on first launch (with skip-for-now).</p>
                    <h3>2. Doctor app (React Native)</h3>
                    <p>Schedule view, queue, video call, ICD-10 prescription builder, voice-to-text notes, e-signature, payout dashboard. The prescription builder is the core daily-use surface — we iterated on it five times.</p>
                    <h3>3. EHR / admin web (React)</h3>
                    <p>Patient record view (FHIR-compliant), consent log, audit trail explorer, MCI/NMC verification queue, payout reconciliation, ABDM consent-manager dashboard, support desk.</p>
                    <h3>4. Compliance-aware data layer</h3>
                    <p>Every read/write to patient data goes through a service that enforces consent, encrypts at rest with KMS, redacts PHI in logs, and writes to an immutable audit table. Penetration-tested by a third-party CERT-In auditor.</p>
                    <h3>5. Backend (Node.js + PostgreSQL on AWS HIPAA-eligible)</h3>
                    <p>TypeScript-first, FHIR-compliant patient model, ABDM HIE-CM + HIP integration, encrypted-at-rest with KMS, encrypted-in-transit, BAA-signed AWS region (Mumbai), DLP-monitored logs.</p>
                </div>

                <div class="cs-block">
                    <h2>Tech stack &amp; why</h2>
                    <p>We picked the stack for fit, performance under realistic load, and operational simplicity. Here is the breakdown:</p>
                    <div style="margin-bottom: 16px;">
                        <span class="tech-chip">React Native</span>
                        <span class="tech-chip">Node.js (NestJS)</span>
                        <span class="tech-chip">TypeScript</span>
                        <span class="tech-chip">PostgreSQL</span>
                        <span class="tech-chip">AWS (BAA)</span>
                        <span class="tech-chip">AWS KMS</span>
                        <span class="tech-chip">AWS WAF</span>
                        <span class="tech-chip">ABDM HIE-CM</span>
                        <span class="tech-chip">FHIR R4</span>
                        <span class="tech-chip">Twilio Programmable Video</span>
                        <span class="tech-chip">Razorpay</span>
                        <span class="tech-chip">Datadog</span>
                        <span class="tech-chip">GitHub Actions</span>
                        <span class="tech-chip">Sentry</span>
                    </div>
                    <p><strong>NestJS over Express:</strong> the dependency-injection + module pattern made the consent-and-audit middleware actually clean. Healthcare code where every layer needs an audit log is exactly where Express becomes a maintenance liability.</p>
                    <p><strong>FHIR R4 from day one:</strong> not because the client asked, but because retrofitting FHIR is misery. Every patient record is FHIR-compliant; integrating with a hospital partner six months in took three days, not three months.</p>
                    <p><strong>AWS HIPAA-eligible region:</strong> we ran in Mumbai with a BAA signed. Every service we used (RDS, S3, KMS, CloudFront) is on the BAA-eligible list. This is the part most Indian dev shops get wrong — it is not enough that AWS supports HIPAA; you have to use only the eligible services.</p>
                </div>

                <div class="cs-block">
                    <h2>The hardest technical problem we solved</h2>
                    <p><strong>ABDM consent-manager flow.</strong></p>
<p>ABDM's HIE-CM (Health Information Exchange &amp; Consent Manager) flow is the hardest engineering problem in the whole stack — and the most rewarding once it works, because that is what makes prescriptions credible at any partner pharmacy and lab.</p><p>The challenge: a consent request is asynchronous, multi-party, and revocable. The patient initiates, the consent manager (a trusted third party) verifies, the requester (us) waits, the provider (us, in a different role) responds, and the entire trail is signed.</p><p>We modelled it as a state machine with 11 states and 23 transitions, persisted to Postgres with optimistic locking and replayed via a job queue. Every state change is appended to an immutable audit table with a digital signature.</p><p>Time to first consent in production: 6 weeks. Time to ABDM-sandbox-pass: 4 months. Worth it: this is the moat. Competitors who skip ABDM cannot get prescription revenue. Period.</p>
                </div>

                <div class="cs-block">
                    <h2>Go-to-market &amp; ramp</h2>
                    <p>We piloted with 12 hand-picked doctors in two specialties (general medicine and dermatology) for eight weeks. The product looked nothing like v0.4 by the time we expanded supply.</p><p>Specialty rollout post-pilot was driven by a config-first specialty engine: adding a specialty is a JSON file plus a custom intake form. Six new specialties shipped in seven weeks, two of them (mental health, paediatrics) needed bespoke flows we had not anticipated.</p>
                </div>

                <div class="cs-block">
                    <h2>Results</h2>
                    <div class="result-grid">
                        <div class="result-card"><span class="rn">80,000+</span><span class="rl">Patient Records</span></div>
                        <div class="result-card"><span class="rn">14,000+</span><span class="rl">Monthly Consults</span></div>
                        <div class="result-card"><span class="rn">320+</span><span class="rl">MCI/NMC-Verified Doctors</span></div>
                        <div class="result-card"><span class="rn">4.8 ★</span><span class="rl">Patient App Rating</span></div>
                        <div class="result-card"><span class="rn">100%</span><span class="rl">ABDM-Compliant Prescriptions</span></div>
                        <div class="result-card"><span class="rn">47 sec</span><span class="rl">Doctor Verification (from 5-7 days)</span></div>
                        <div class="result-card"><span class="rn">Zero</span><span class="rl">Compliance Incidents in 12 Months</span></div>
                        <div class="result-card"><span class="rn">18%</span><span class="rl">MoM Patient Growth (steady-state)</span></div>
                    </div>
                </div>

                <div class="cs-testimonial-card">
                    <p class="q">&ldquo;ITD got the boring stuff right — the consent flow, the audit trail, the BAA region. That is what investor diligence cares about. The fact that the patient app is also one of the best-rated in the category was a bonus.&rdquo;</p>
                    <p class="a">Founder &amp; Chief Medical Officer</p>
                    <p class="r">Telemedicine Platform · India</p>
                </div>

                <div class="cs-block">
                    <h2>What we would do differently</h2>
                    <p>Invest in clinical-content review earlier. We launched the symptom-checker copy with a paid panel of generalists; the dermatology vertical's content needed dermatology-specific review, which we discovered in user testing post-launch. Specialist content review at v1 = no embarrassing moments at v1.5.</p>
                </div>

                <div class="cs-cta">
                    <h3>Building a healthcare or telehealth product?</h3>
                    <p>Compliance is not a checklist; it is the architecture. We have shipped HIPAA + ABDM + DPDP-compliant healthcare platforms — patient apps, EHRs, hospital integrations. Talk to an engineer who has done it.</p>
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
                    <h4>Healthcare App Cost in India (HIPAA + ABDM)</h4>
                    <p>Detailed pricing and compliance breakdown for Indian healthcare apps in 2026.</p>
                    <a href="../resources/Healthcare_App_Development_Cost_India_HIPAA_ABDM_2026.php">Read guide <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Telemedicine App Development Guide</h4>
                    <p>Cost, features, and compliance architecture for telemedicine apps.</p>
                    <a href="../resources/Telemedicine_App_Development_Guide_2026.php">Read guide <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Doctor Appointment Booking App Guide</h4>
                    <p>How to build a Practo-style appointment booking app.</p>
                    <a href="../resources/Doctor_Appointment_Booking_App_Development_Guide.php">Read guide <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>App Development Service</h4>
                    <p>End-to-end mobile + web app development across iOS, Android, and React Native.</p>
                    <a href="../services/App-Development.php">See service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Industry: Healthcare</h4>
                    <p>How we partner with healthcare brands and provider networks.</p>
                    <a href="../industries/healthcare.php">See industry page <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="cs-related-card">
                    <h4>Pharmacy Delivery App (1mg / PharmEasy Style)</h4>
                    <p>Building a pharmacy fulfillment app with regulatory and prescription handling.</p>
                    <a href="../resources/Pharmacy_Delivery_App_Development_1mg_PharmEasy_Style.php">Read guide <i class="fas fa-arrow-right"></i></a>
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
