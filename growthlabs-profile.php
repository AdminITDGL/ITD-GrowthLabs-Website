<?php
/**
 * ITD GrowthLabs — Digital Company Profile
 * ----------------------------------------
 * 10-slide horizontal deck. Client-shareable URL.
 * Reuses the same slide-deck framework as /company-profile.php (ITD Services)
 * and /csb-bank-solution.php. Branded in ITD GrowthLabs orange+red palette.
 * Print-friendly. Mobile-responsive. SEO-optimised.
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-M4XDB2GZ');</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="ITD GrowthLabs — digital marketing + technology studio for D2C and B2B brands. 55+ senior practitioners, 300+ projects, ₹8Cr+ ad spend managed, 100+ D2C brands served. Established 2018 · Mumbai. Web · Apps · SaaS · SEO · Paid Ads · Social · Branding · AI.">
    <title>ITD GrowthLabs | Company Profile — Digital Marketing &amp; Technology Studio</title>
    <link rel="canonical" href="https://itdgrowthlabs.com/growthlabs-profile.php" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <meta property="og:title" content="ITD GrowthLabs | Company Profile" />
    <meta property="og:description" content="Digital marketing + technology studio. 55+ senior practitioners, 300+ projects, 100+ D2C brands. Est 2018 · Mumbai." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://itdgrowthlabs.com/growthlabs-profile.php" />
    <meta property="og:image" content="https://itdgrowthlabs.com/assets/img/logo.jpg" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17674012925"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){gtag.q=gtag.q||[];gtag.q.push(arguments);}gtag('js',new Date());gtag('config','AW-17674012925');</script>

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"Organization",
      "name":"ITD GrowthLabs",
      "url":"https://itdgrowthlabs.com/growthlabs-profile.php",
      "logo":"https://itdgrowthlabs.com/assets/img/logo.jpg",
      "foundingDate":"2018",
      "description":"Digital marketing + technology studio for D2C and B2B brands. Web, apps, SaaS, SEO, paid ads, social, branding, AI. Established 2018 in Mumbai.",
      "numberOfEmployees":{"@type":"QuantitativeValue","minValue":55},
      "address":{"@type":"PostalAddress","streetAddress":"Andheri","addressLocality":"Mumbai","addressRegion":"Maharashtra","postalCode":"400053","addressCountry":"IN"},
      "contactPoint":[{"@type":"ContactPoint","contactType":"sales","email":"info@itdgrowthlabs.com","telephone":"+91-8450978544","availableLanguage":["English","Hindi"]}],
      "sameAs":["https://www.linkedin.com/company/itd-growthlabs/"]
    }
    </script>

<style>
:root{
    --bg:#ffffff; --surface-1:#fafbfc; --surface-2:#f4f6f8; --surface-3:#eef1f5;
    --line:#e5e7eb; --line-2:#d1d5db;
    --brand:#0f172a; --brand-blue:#1e40af;
    --text:#0f172a; --text-2:#334155; --text-3:#4b5563; --text-4:#6b7280; --text-mute:#9ca3af; --text-dim:#d1d5db;
    --orange:#ea580c; --orange-2:#c2410c; --orange-soft:#ffedd5;
    --red:#dc2626; --red-2:#b91c1c; --red-soft:#fee2e2;
    --accent:var(--orange); --accent-2:var(--orange-2); --accent-soft:var(--orange-soft);
    --green:#059669; --green-soft:#d1fae5;
    --gold:#b45309; --gold-soft:#fef3c7;
    --purple:#7c3aed; --purple-soft:#ede9fe;
    --chrome-top:64px; --chrome-bottom:84px;
}
@media (max-width:700px){ :root{ --chrome-top:56px; --chrome-bottom:76px; } }

*,*::before,*::after{ box-sizing:border-box; }
html,body{ margin:0; padding:0; height:100%; overflow:hidden; }
body{ font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
      font-size:16px; line-height:1.55; color:var(--text-2); background:var(--bg);
      -webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale; }
h1,h2,h3,h4,h5,h6{ font-family:'Inter',sans-serif; font-weight:700; letter-spacing:-0.025em; color:var(--text); margin:0; line-height:1.15; }
p{ margin:0; color:var(--text-3); }
.mono{ font-family:'JetBrains Mono','Menlo',monospace; }
::selection{ background:var(--accent-soft); color:var(--accent-2); }

/* Deck */
.deck{ position:fixed; inset:0; overflow:hidden; background:var(--bg); }
.deck__track{ display:flex; height:100%; will-change:transform; transition:transform .55s cubic-bezier(0.77,0,0.18,1); }
.slide{ flex:0 0 100vw; height:100vh; overflow-y:auto; overflow-x:hidden; -webkit-overflow-scrolling:touch;
      padding:calc(var(--chrome-top) + 24px) 28px calc(var(--chrome-bottom) + 24px);
      background:var(--bg); scrollbar-width:thin; scrollbar-color:var(--line-2) transparent; }
.slide::-webkit-scrollbar{ width:6px; }
.slide::-webkit-scrollbar-thumb{ background:var(--line-2); border-radius:3px; }
.slide-inner{ width:100%; max-width:1200px; margin:0 auto;
      min-height:calc(100vh - var(--chrome-top) - var(--chrome-bottom) - 48px);
      display:flex; flex-direction:column; justify-content:center;
      opacity:0; transform:translateY(14px); transition:opacity .5s ease .1s, transform .5s ease .1s; }
.slide.is-active .slide-inner{ opacity:1; transform:translateY(0); }
@media (max-width:700px){ .slide{ padding:calc(var(--chrome-top) + 16px) 18px calc(var(--chrome-bottom) + 16px); } }
@media (min-width:1024px){ .slide{ padding:calc(var(--chrome-top) + 32px) 56px calc(var(--chrome-bottom) + 32px); } }

/* Top chrome */
.chrome-top{ position:fixed; top:0; left:0; right:0; height:var(--chrome-top);
      padding:0 24px; display:flex; justify-content:space-between; align-items:center;
      z-index:50; background:rgba(255,255,255,0.94);
      backdrop-filter:saturate(180%) blur(12px); -webkit-backdrop-filter:saturate(180%) blur(12px);
      border-bottom:1px solid var(--line); }
.brand{ display:flex; align-items:center; gap:10px; font-weight:600; font-size:14px; color:var(--text); }
.brand__mark{ width:52px; height:30px; background:linear-gradient(135deg,var(--orange) 0%,var(--red) 100%);
      color:#fff; font-weight:900; font-size:11px; letter-spacing:0.04em;
      display:flex; align-items:center; justify-content:center; font-family:'Inter',sans-serif;
      border-radius:6px; }
.brand__txt{ display:flex; flex-direction:column; line-height:1.1; }
.brand__txt strong{ font-size:14px; font-weight:700; letter-spacing:-0.01em; }
.brand__txt small{ font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:500;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-mute); margin-top:1px; }
.slide-title{ flex:1; text-align:center; font-size:13px; font-weight:600; color:var(--text);
      letter-spacing:-0.01em; padding:0 16px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; }
.counter{ font-family:'JetBrains Mono',monospace; font-size:12px; font-weight:500;
      color:var(--text-4); letter-spacing:0.1em; display:flex; align-items:center; gap:10px; }
.counter__bar{ width:60px; height:2px; background:var(--surface-3); border-radius:1px; overflow:hidden; }
.counter__fill{ display:block; height:100%; background:linear-gradient(90deg,var(--orange),var(--red)); width:0;
      transition:width .5s cubic-bezier(0.77,0,0.18,1); }
@media (max-width:700px){
    .chrome-top{ padding:0 16px; }
    .brand__txt{ display:none; }
    .slide-title{ font-size:12px; }
    .counter__bar{ width:40px; }
}

/* Bottom chrome */
.chrome-bottom{ position:fixed; bottom:0; left:0; right:0; height:var(--chrome-bottom);
      padding:0 24px; display:flex; justify-content:space-between; align-items:center;
      z-index:50; background:rgba(255,255,255,0.96);
      backdrop-filter:saturate(180%) blur(12px); -webkit-backdrop-filter:saturate(180%) blur(12px);
      border-top:1px solid var(--line); }
.nav-btn{ width:44px; height:44px; border-radius:50%; background:var(--bg);
      border:1px solid var(--line-2); color:var(--text);
      display:flex; align-items:center; justify-content:center; cursor:pointer; font-size:14px;
      transition:transform .2s ease, border-color .2s ease, background .2s ease;
      box-shadow:0 1px 2px rgba(0,0,0,0.04); flex-shrink:0; }
.nav-btn:hover{ border-color:var(--orange); color:var(--orange); transform:translateY(-1px); }
.nav-btn:disabled{ opacity:0.3; cursor:not-allowed; transform:none; }
.nav-btn:disabled:hover{ border-color:var(--line-2); color:var(--text); }
.dots{ display:flex; gap:6px; align-items:center; justify-content:center;
      flex:1; max-width:74%; flex-wrap:wrap; padding:0 12px; }
.dot{ width:6px; height:6px; border-radius:50%; background:var(--text-dim);
      cursor:pointer; border:none; padding:0; transition:background .2s ease, width .25s ease; }
.dot.active{ background:var(--orange); width:22px; border-radius:3px; }
.dot:hover:not(.active){ background:var(--text-mute); }
@media (max-width:700px){
    .chrome-bottom{ padding:0 16px; }
    .nav-btn{ width:40px; height:40px; font-size:13px; }
    .dot{ width:5px; height:5px; }
    .dot.active{ width:16px; }
}

/* Common */
.label{ display:inline-flex; align-items:center; gap:10px; font-family:'JetBrains Mono',monospace;
      font-size:11px; font-weight:500; letter-spacing:0.16em; text-transform:uppercase;
      color:var(--text-4); margin-bottom:20px; }
.label::before{ content:''; width:24px; height:1px; background:var(--text-mute); }
.label.accent{ color:var(--orange); }
.label.accent::before{ background:var(--orange); }
.label.red{ color:var(--red); }
.label.red::before{ background:var(--red); }
.label.blue{ color:var(--brand-blue); }
.label.blue::before{ background:var(--brand-blue); }

.display-1{ font-size:clamp(38px,8vw,80px); line-height:1.02; letter-spacing:-0.035em; font-weight:700; }
.display-2{ font-size:clamp(26px,4.6vw,48px); line-height:1.1; letter-spacing:-0.03em; font-weight:700; }
.display-3{ font-size:clamp(20px,3vw,32px); line-height:1.22; letter-spacing:-0.02em; font-weight:700; }
.lead{ font-size:clamp(15px,1.35vw,17px); line-height:1.65; color:var(--text-3); font-weight:400; max-width:720px; }

/* COVER */
.cover{ background:radial-gradient(1200px 600px at 50% -10%, rgba(234,88,12,0.10) 0%, transparent 70%), linear-gradient(180deg,#ffffff 0%,#fafbfc 100%); }
.cover .slide-inner{ text-align:center; align-items:center; }
.cover__pill{ display:inline-flex; align-items:center; gap:10px; padding:6px 14px; border-radius:30px;
      background:var(--bg); border:1px solid var(--line);
      font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:500;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-4); margin-bottom:36px; }
.cover__pill__dot{ width:6px; height:6px; border-radius:50%; background:var(--green);
      box-shadow:0 0 8px rgba(5,150,105,0.4); }
.cover__logo{ display:inline-flex; align-items:center; gap:14px; margin-bottom:26px; padding:12px 22px;
      background:var(--bg); border:1px solid var(--line); border-radius:16px; box-shadow:0 8px 24px rgba(15,23,42,0.05); }
.cover__logo__mark{ width:60px; height:60px; border-radius:14px; background:linear-gradient(135deg,var(--orange) 0%,var(--red) 100%);
      color:#fff; font-weight:900; font-size:22px; letter-spacing:0.02em;
      display:flex; align-items:center; justify-content:center; }
.cover__logo__txt{ text-align:left; }
.cover__logo__txt strong{ display:block; font-size:22px; font-weight:800; color:var(--brand); letter-spacing:-0.02em; }
.cover__logo__txt small{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:500;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-mute); margin-top:2px; display:block; }
.cover h1{ margin-bottom:16px; }
.cover h1 .sub{ display:block; font-size:0.36em; font-weight:500; color:var(--text-3);
      letter-spacing:-0.015em; margin-top:14px; max-width:820px; margin-inline:auto; }
.cover__meta{ display:grid; grid-template-columns:repeat(5,auto); justify-content:center;
      gap:26px 40px; margin-top:44px; }
.cover__meta-item{ display:flex; flex-direction:column; gap:4px;
      font-family:'JetBrains Mono',monospace; text-align:left; }
.cover__meta-item small{ font-size:9.5px; font-weight:500; letter-spacing:0.18em;
      text-transform:uppercase; color:var(--text-mute); }
.cover__meta-item strong{ font-size:13.5px; font-weight:700; color:var(--brand); letter-spacing:0; }
@media (max-width:900px){ .cover__meta{ grid-template-columns:repeat(3,auto); gap:22px 32px; margin-top:34px; } }
@media (max-width:520px){ .cover__meta{ grid-template-columns:repeat(2,auto); } }
.cover__cta{ margin-top:38px; display:inline-flex; align-items:center; gap:10px;
      padding:14px 28px; border-radius:12px; background:linear-gradient(135deg,var(--orange) 0%,var(--red) 100%);
      color:#fff; text-decoration:none; font-weight:700; font-size:14.5px; letter-spacing:0.01em;
      box-shadow:0 10px 30px rgba(234,88,12,0.35); transition:transform .2s ease, box-shadow .2s ease; }
.cover__cta:hover{ transform:translateY(-2px); box-shadow:0 14px 34px rgba(234,88,12,0.45); color:#fff; }

/* SECTION HEAD */
.head-row{ display:grid; grid-template-columns:auto 1fr; gap:24px; align-items:end; margin-bottom:32px; }
.head-row .num{ font-family:'JetBrains Mono',monospace; font-size:13px;
      letter-spacing:0.14em; color:var(--text-mute); }
.head-row .lead{ margin-top:14px; }
@media (max-width:700px){ .head-row{ grid-template-columns:1fr; gap:10px; } }

/* ABOUT — 5-tile grid */
.about-grid{ display:grid; grid-template-columns:repeat(5,1fr); gap:12px; margin-top:12px; }
.about-tile{ background:var(--bg); border:1px solid var(--line); border-radius:14px; padding:20px 18px;
      display:flex; flex-direction:column; }
.about-tile__icon{ width:40px; height:40px; border-radius:10px;
      background:linear-gradient(135deg,var(--orange-soft),var(--red-soft));
      color:var(--red-2); display:flex; align-items:center; justify-content:center;
      font-size:16px; margin-bottom:14px; }
.about-tile h4{ font-size:14.5px; font-weight:700; color:var(--brand); margin-bottom:6px; letter-spacing:-0.01em; }
.about-tile p{ font-size:12.5px; color:var(--text-3); line-height:1.55; }
@media (max-width:1000px){ .about-grid{ grid-template-columns:repeat(3,1fr); } }
@media (max-width:640px){ .about-grid{ grid-template-columns:repeat(2,1fr); } }
@media (max-width:420px){ .about-grid{ grid-template-columns:1fr; } }

/* SERVICES / CARDS grid — 14 items */
.svc-grid{ display:grid; grid-template-columns:repeat(4,1fr); gap:12px; margin-top:12px; }
.svc-card{ background:var(--bg); border:1px solid var(--line); border-radius:12px; padding:16px 15px;
      transition:border-color .2s ease, transform .2s ease, box-shadow .2s ease; display:flex; flex-direction:column; }
.svc-card:hover{ border-color:var(--orange); transform:translateY(-2px); box-shadow:0 10px 20px rgba(234,88,12,0.10); }
.svc-card__icon{ width:36px; height:36px; border-radius:9px;
      background:var(--surface-2); color:var(--orange);
      display:flex; align-items:center; justify-content:center;
      font-size:14px; margin-bottom:10px; }
.svc-card h5{ font-size:13.5px; font-weight:700; color:var(--brand); margin-bottom:4px; letter-spacing:-0.01em; }
.svc-card p{ font-size:11.5px; color:var(--text-4); line-height:1.5; }
@media (max-width:1000px){ .svc-grid{ grid-template-columns:repeat(3,1fr); } }
@media (max-width:700px){ .svc-grid{ grid-template-columns:repeat(2,1fr); } }
@media (max-width:420px){ .svc-grid{ grid-template-columns:1fr; } }

/* INDUSTRIES — 8 tiles */
.ind-grid{ display:grid; grid-template-columns:repeat(4,1fr); gap:12px; margin-top:12px; }
.ind-tile{ background:var(--bg); border:1px solid var(--line); border-radius:14px; padding:20px 18px;
      display:flex; flex-direction:column; gap:10px; }
.ind-tile__icon{ width:48px; height:48px; border-radius:12px;
      background:linear-gradient(135deg,var(--brand) 0%,#1e293b 100%);
      color:#fff; display:flex; align-items:center; justify-content:center; font-size:19px; }
.ind-tile h4{ font-size:14px; font-weight:700; color:var(--brand); letter-spacing:-0.01em; }
.ind-tile p{ font-size:12px; color:var(--text-4); line-height:1.5; }
@media (max-width:1000px){ .ind-grid{ grid-template-columns:repeat(3,1fr); } }
@media (max-width:640px){ .ind-grid{ grid-template-columns:repeat(2,1fr); } }
@media (max-width:420px){ .ind-grid{ grid-template-columns:1fr; } }

/* CLIENTS — logo wall */
.client-wall{ display:grid; grid-template-columns:repeat(4,1fr); gap:14px; margin-top:14px; }
.client-tile{ background:var(--bg); border:1px solid var(--line); border-radius:12px;
      padding:22px 20px; display:flex; align-items:center; justify-content:center;
      min-height:110px; transition:border-color .2s ease, box-shadow .2s ease; }
.client-tile:hover{ border-color:var(--orange); box-shadow:0 8px 18px rgba(234,88,12,0.08); }
.client-tile img{ max-width:100%; max-height:60px; width:auto; object-fit:contain; filter:grayscale(0.15); opacity:0.95; }
.client-caption{ margin-top:18px; display:flex; flex-wrap:wrap; gap:8px; justify-content:center; }
.client-caption span{ padding:5px 12px; background:var(--surface-2); border:1px solid var(--line);
      font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:600;
      color:var(--text-3); border-radius:14px; letter-spacing:0.08em; text-transform:uppercase; }
@media (max-width:900px){ .client-wall{ grid-template-columns:repeat(3,1fr); } }
@media (max-width:600px){ .client-wall{ grid-template-columns:repeat(2,1fr); } }

/* TECH STACK — categorised */
.stack{ display:grid; grid-template-columns:repeat(2,1fr); gap:14px; margin-top:14px; }
.stack__col{ background:var(--surface-1); border:1px solid var(--line); border-radius:14px; padding:18px 20px; }
.stack__col h4{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--orange); margin-bottom:12px; }
.stack__col__row{ display:flex; flex-wrap:wrap; gap:6px; }
.stack__col__row span{ padding:5px 10px; background:var(--bg); border:1px solid var(--line-2);
      border-radius:10px; font-size:12px; color:var(--text-2); font-weight:500; }
.stack__col__row span i{ margin-right:5px; color:var(--brand-blue); font-size:11px; }
@media (max-width:800px){ .stack{ grid-template-columns:1fr; } }

/* CASE STUDIES */
.case-grid{ display:grid; grid-template-columns:repeat(2,1fr); gap:14px; margin-top:14px; }
.case-card{ background:var(--bg); border:1px solid var(--line); border-radius:14px; overflow:hidden;
      display:flex; flex-direction:column; }
.case-card__banner{ padding:18px 20px 14px; background:linear-gradient(135deg,var(--brand) 0%,#1e293b 100%);
      color:#fff; }
.case-card__banner__tag{ display:inline-block; padding:2px 10px; background:rgba(255,255,255,0.12);
      border-radius:10px; font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:600;
      letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.85); margin-bottom:8px; }
.case-card__banner h4{ color:#fff; font-size:17px; font-weight:700; letter-spacing:-0.01em; }
.case-card__body{ padding:16px 20px 18px; flex:1; display:flex; flex-direction:column; }
.case-card__block{ margin-bottom:10px; }
.case-card__block h6{ font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; color:var(--text-mute); margin-bottom:3px; }
.case-card__block p{ font-size:12.5px; color:var(--text-3); line-height:1.5; }
.case-card__results{ margin-top:auto; padding-top:14px; border-top:1px dashed var(--line-2);
      display:flex; gap:12px; flex-wrap:wrap; }
.case-card__metric{ flex:1; min-width:80px; }
.case-card__metric strong{ display:block; font-size:20px; font-weight:800; color:var(--orange); letter-spacing:-0.02em; }
.case-card__metric small{ display:block; font-family:'JetBrains Mono',monospace; font-size:9.5px;
      letter-spacing:0.12em; text-transform:uppercase; color:var(--text-mute); margin-top:2px; }
@media (max-width:800px){ .case-grid{ grid-template-columns:1fr; } }

/* WHY US — 9 tiles */
.why-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:12px; margin-top:12px; }
.why-tile{ background:var(--bg); border:1px solid var(--line); border-radius:12px; padding:18px 16px;
      display:flex; flex-direction:column; gap:8px; }
.why-tile__icon{ width:34px; height:34px; border-radius:9px;
      background:var(--orange-soft); color:var(--orange-2);
      display:flex; align-items:center; justify-content:center; font-size:14px; }
.why-tile h5{ font-size:13.5px; font-weight:700; color:var(--brand); letter-spacing:-0.01em; }
.why-tile p{ font-size:12px; color:var(--text-4); line-height:1.5; }
@media (max-width:900px){ .why-grid{ grid-template-columns:repeat(2,1fr); } }
@media (max-width:520px){ .why-grid{ grid-template-columns:1fr; } }

/* FOUNDER — executive profile */
.founder{ display:grid; grid-template-columns:280px 1fr; gap:36px; margin-top:14px; align-items:center; }
.founder__photo{ background:linear-gradient(135deg,var(--brand) 0%,#1e293b 100%);
      border-radius:22px; padding:34px 24px; text-align:center;
      box-shadow:0 20px 50px rgba(15,23,42,0.15); }
.founder__avatar{ width:120px; height:120px; border-radius:50%; margin:0 auto 18px;
      background:linear-gradient(135deg,var(--orange) 0%,var(--red) 100%);
      color:#fff; font-size:44px; font-weight:800; letter-spacing:-0.02em;
      display:flex; align-items:center; justify-content:center;
      box-shadow:0 12px 28px rgba(234,88,12,0.45); border:4px solid rgba(255,255,255,0.1); }
.founder__photo strong{ display:block; font-size:19px; color:#fff; font-weight:700; letter-spacing:-0.01em; margin-bottom:4px; }
.founder__photo small{ display:block; font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:500;
      letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.65); }
.founder__photo__socials{ margin-top:18px; display:flex; justify-content:center; gap:10px; }
.founder__photo__socials a{ width:34px; height:34px; border-radius:9px;
      background:rgba(255,255,255,0.08); color:#fff;
      display:flex; align-items:center; justify-content:center; font-size:13px;
      transition:background .2s ease; }
.founder__photo__socials a:hover{ background:var(--orange); }
.founder__body__quote{ font-size:19px; font-weight:600; color:var(--brand); line-height:1.4;
      padding-left:18px; border-left:4px solid var(--orange); margin-bottom:16px; letter-spacing:-0.01em; }
.founder__body__grid{ display:grid; grid-template-columns:1fr 1fr; gap:14px 20px; margin-top:14px; }
.founder__body__grid > div h6{ font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:700;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--orange); margin-bottom:4px; }
.founder__body__grid > div p{ font-size:13px; color:var(--text-3); line-height:1.6; }
@media (max-width:800px){ .founder{ grid-template-columns:1fr; gap:22px; }
    .founder__body__grid{ grid-template-columns:1fr; } }

/* CONTACT / FINAL */
.final{ background:radial-gradient(1000px 500px at 50% 100%, rgba(234,88,12,0.10) 0%, transparent 70%),
        linear-gradient(180deg,#fafbfc 0%,#fff5ef 100%); }
.final .slide-inner{ text-align:center; align-items:center; }
.contact-grid{ margin-top:32px; display:grid; grid-template-columns:repeat(3,1fr); gap:14px;
      max-width:900px; margin-inline:auto; width:100%; }
.contact-item{ background:var(--bg); border:1px solid var(--line); border-radius:14px;
      padding:20px 18px; text-align:left; }
.contact-item h6{ font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:600;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--orange); margin-bottom:8px;
      display:flex; align-items:center; gap:8px; }
.contact-item strong{ display:block; font-size:14.5px; font-weight:700; color:var(--brand); letter-spacing:-0.01em; margin-bottom:2px; }
.contact-item small{ font-size:12.5px; color:var(--text-4); display:block; }
.contact-item a{ color:var(--text-3); text-decoration:none; }
.contact-item a:hover{ color:var(--orange); }
@media (max-width:700px){ .contact-grid{ grid-template-columns:1fr; } }
.final__cta-block{ margin-top:40px; padding:36px 40px;
      background:linear-gradient(135deg,var(--brand) 0%,#1e293b 100%);
      color:#fff; border-radius:20px; max-width:900px; margin-inline:auto;
      box-shadow:0 24px 60px rgba(15,23,42,0.18); }
.final__cta-block h3{ color:#fff; font-size:23px; font-weight:800; margin-bottom:10px; letter-spacing:-0.02em; }
.final__cta-block p{ color:rgba(255,255,255,0.82); font-size:15px; margin-bottom:22px; line-height:1.6; }
.final__cta-block a{ display:inline-flex; align-items:center; gap:10px;
      padding:14px 28px; border-radius:12px; text-decoration:none; font-weight:700; font-size:14.5px;
      transition:transform .2s ease, box-shadow .2s ease; }
.final__cta-block .cta-pri{ background:linear-gradient(135deg,var(--orange) 0%,var(--red) 100%);
      color:#fff; box-shadow:0 12px 28px rgba(234,88,12,0.40); }
.final__cta-block .cta-pri:hover{ transform:translateY(-2px); box-shadow:0 16px 34px rgba(234,88,12,0.50); color:#fff; }
.final__cta-block .cta-sec{ background:rgba(255,255,255,0.08); color:#fff; margin-left:12px;
      border:1px solid rgba(255,255,255,0.16); }
.final__cta-block .cta-sec:hover{ background:rgba(255,255,255,0.12); color:#fff; }
@media (max-width:600px){ .final__cta-block a{ display:flex; margin:8px 0; justify-content:center; }
    .final__cta-block .cta-sec{ margin-left:0; } }

/* Kbd hint */
.kbd-hint{ position:fixed; bottom:14px; left:50%; transform:translateX(-50%);
      z-index:40; font-family:'JetBrains Mono',monospace; font-size:9.5px; letter-spacing:0.14em;
      color:var(--text-mute); text-transform:uppercase; opacity:0.7; pointer-events:none; }
@media (max-width:700px){ .kbd-hint{ display:none; } }

/* PRINT (one slide per page, vertical stacking) */
@media print{
    html, body{ overflow:visible !important; height:auto !important; background:#fff !important; }
    .chrome-top, .chrome-bottom, .kbd-hint{ display:none !important; }
    .deck{ position:static !important; height:auto !important; overflow:visible !important; }
    .deck__track{ display:block !important; height:auto !important; transform:none !important; transition:none !important; width:100% !important; }
    .slide{ flex:none !important; width:100% !important; height:auto !important; min-height:100vh !important;
        overflow:visible !important; padding:40px 44px !important; page-break-after:always !important;
        break-after:page !important; page-break-inside:avoid !important; }
    .slide:last-child{ page-break-after:auto !important; }
    .slide-inner{ opacity:1 !important; transform:none !important; min-height:auto !important; }
    @page{ size:A4 landscape; margin:0; }
}
</style>
</head>
<body>

<header class="chrome-top">
    <div class="brand">
        <div class="brand__mark">ITDGL</div>
        <div class="brand__txt">
            <strong>ITD GrowthLabs</strong>
            <small>Company Profile</small>
        </div>
    </div>
    <div class="slide-title" id="slideTitle">ITD GrowthLabs</div>
    <div class="counter">
        <span id="counterN">01</span> / 10
        <span class="counter__bar"><span class="counter__fill" id="counterFill"></span></span>
    </div>
</header>

<main class="deck">
<div class="deck__track" id="deckTrack">

<!-- ============ S01 — COVER ============ -->
<section class="slide cover" data-title="ITD GrowthLabs">
    <div class="slide-inner">
        <span class="cover__pill"><span class="cover__pill__dot"></span>Digital Marketing &amp; Technology Studio &middot; Est 2018 &middot; Mumbai</span>
        <div class="cover__logo">
            <div class="cover__logo__mark">ITD</div>
            <div class="cover__logo__txt">
                <strong>ITD GrowthLabs</strong>
                <small>Digital Growth, Engineered.</small>
            </div>
        </div>
        <h1 class="display-1">Where brands come to <span style="background:linear-gradient(135deg,var(--orange),var(--red)); -webkit-background-clip:text; background-clip:text; color:transparent;">grow</span>.
            <span class="sub">A senior-led digital marketing + technology studio for D2C and B2B brands &mdash; web, apps, SaaS, SEO, paid ads, social, branding, AI. Same team, strategy to launch.</span></h1>
        <div class="cover__meta">
            <div class="cover__meta-item"><small>Established</small><strong>2018</strong></div>
            <div class="cover__meta-item"><small>HQ</small><strong>Mumbai, India</strong></div>
            <div class="cover__meta-item"><small>Team</small><strong>55+ Senior Practitioners</strong></div>
            <div class="cover__meta-item"><small>Projects Shipped</small><strong>300+</strong></div>
            <div class="cover__meta-item"><small>Ad Spend Managed</small><strong>&#8377;8Cr+</strong></div>
        </div>
        <a href="https://calendly.com/itdgrowthlabs-info/30min" target="_blank" rel="noopener" class="cover__cta">
            <i class="fas fa-calendar-check"></i> Book a Free 30-min Consultation
        </a>
    </div>
</section>

<!-- ============ S02 — ABOUT ============ -->
<section class="slide" data-title="About ITD GrowthLabs">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">02 / 10</div>
            <div>
                <span class="label accent">About Us</span>
                <h2 class="display-2">A senior-led studio built for measurable growth.</h2>
                <p class="lead">Not a legacy agency. Not a freelance marketplace. A tight, senior-led team that owns your engagement end-to-end &mdash; from first strategy call through weekly execution and outcomes.</p>
            </div>
        </div>
        <div class="about-grid">
            <div class="about-tile">
                <div class="about-tile__icon"><i class="fas fa-users"></i></div>
                <h4>Who We Are</h4>
                <p>55+ senior digital + tech practitioners with 10&ndash;15 years of category experience. Mumbai HQ. Serving 100+ D2C + B2B brands across 6 countries.</p>
            </div>
            <div class="about-tile">
                <div class="about-tile__icon"><i class="fas fa-rocket"></i></div>
                <h4>Our Mission</h4>
                <p>Help D2C and B2B brands grow faster with a full-stack digital partner &mdash; not five disconnected vendors. Marketing + tech + design under one roof, one senior owner.</p>
            </div>
            <div class="about-tile">
                <div class="about-tile__icon"><i class="fas fa-eye"></i></div>
                <h4>Our Vision</h4>
                <p>The default growth partner for India&rsquo;s next generation of D2C and B2B brands scaling from &#8377;5 crore to &#8377;100 crore ARR &mdash; and beyond.</p>
            </div>
            <div class="about-tile">
                <div class="about-tile__icon"><i class="fas fa-heart"></i></div>
                <h4>Core Values</h4>
                <p>Senior time on account. Measurable outcomes over impressions. Honest scope, honest pricing. Long-term partnership over transactional retainer.</p>
            </div>
            <div class="about-tile">
                <div class="about-tile__icon"><i class="fas fa-star"></i></div>
                <h4>Why Businesses Choose Us</h4>
                <p>One senior owner per account. No junior rotations. Full-stack &mdash; marketing + tech under one contract. 97% client retention rate.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ S03 — SERVICES ============ -->
<section class="slide" data-title="Our Services">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">03 / 10</div>
            <div>
                <span class="label accent">What We Do</span>
                <h2 class="display-2">Full-stack digital under one roof.</h2>
                <p class="lead">Fourteen practice areas. All senior-led. All measured against your business outcomes, not vanity metrics.</p>
            </div>
        </div>
        <div class="svc-grid">
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-globe"></i></div>
                <h5>Website Development</h5><p>Corporate, marketing, brand websites. WordPress, custom, headless.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-code"></i></div>
                <h5>Web Applications</h5><p>Custom SaaS, portals, dashboards, admin platforms. React + Node + Laravel.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-mobile-screen"></i></div>
                <h5>Mobile Apps</h5><p>200+ iOS &amp; Android apps shipped. Flutter + React Native. 4.6&starf; avg store rating.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-cart-shopping"></i></div>
                <h5>E-commerce</h5><p>Shopify, WooCommerce, headless commerce. D2C storefronts that convert.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-magnifying-glass-chart"></i></div>
                <h5>SEO</h5><p>Technical + on-page + content. India + global. 640+ blogs published across client roster.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-share-nodes"></i></div>
                <h5>Social Media Marketing</h5><p>Organic content, community, influencer, growth. Instagram, LinkedIn, YouTube.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-bullseye"></i></div>
                <h5>Performance Marketing</h5><p>Google Ads, Meta Ads, LinkedIn, YouTube. &#8377;8Cr+ ad spend managed.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-palette"></i></div>
                <h5>Branding</h5><p>Brand identity, positioning, guidelines. From logo to full brand system.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-object-group"></i></div>
                <h5>UI / UX Design</h5><p>Product design, mobile, SaaS. Figma-first, prototyping, design systems.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-brain"></i></div>
                <h5>AI Solutions</h5><p>Custom AI agents, RAG systems, OCR, LLM integration for business workflows.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fab fa-whatsapp"></i></div>
                <h5>WhatsApp Automation</h5><p>WhatsApp Business API, chatbots, broadcast campaigns, lead-nurture flows.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-graduation-cap"></i></div>
                <h5>eLearning Solutions</h5><p>Custom LMS, course platforms, interactive learning, mobile-first learning apps.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-video"></i></div>
                <h5>Video Production</h5><p>Explainers, brand films, product demos, social short-form, YouTube long-form.</p></div>
            <div class="svc-card"><div class="svc-card__icon"><i class="fas fa-pen-nib"></i></div>
                <h5>Content Marketing</h5><p>Blogs, thought leadership, case studies, whitepapers, LinkedIn content.</p></div>
        </div>
    </div>
</section>

<!-- ============ S04 — INDUSTRIES ============ -->
<section class="slide" data-title="Industries We Serve">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">04 / 10</div>
            <div>
                <span class="label accent">Industries</span>
                <h2 class="display-2">Category depth across eight verticals.</h2>
                <p class="lead">Not generalists. Dedicated playbooks, KPI benchmarks, and creative frameworks per industry &mdash; because a jewelry brand and a manufacturing platform need different growth engines.</p>
            </div>
        </div>
        <div class="ind-grid">
            <div class="ind-tile"><div class="ind-tile__icon"><i class="fas fa-truck-fast"></i></div>
                <h4>Logistics &amp; Supply Chain</h4><p>Courier, fleet, last-mile, TMS &mdash; 50M+ shipments delivered across production.</p></div>
            <div class="ind-tile"><div class="ind-tile__icon"><i class="fas fa-industry"></i></div>
                <h4>Manufacturing</h4><p>B2B websites, lead-gen, ERP portals, distributor apps for industrial buyers.</p></div>
            <div class="ind-tile"><div class="ind-tile__icon"><i class="fas fa-heart-pulse"></i></div>
                <h4>Healthcare &amp; Pharma</h4><p>Doctor + patient apps, hospital portals, pharma content, HIPAA-aware builds.</p></div>
            <div class="ind-tile"><div class="ind-tile__icon"><i class="fas fa-bag-shopping"></i></div>
                <h4>E-commerce &amp; D2C</h4><p>100+ D2C brands: jewelry, beauty, fashion, food, home decor, cosmetics.</p></div>
            <div class="ind-tile"><div class="ind-tile__icon"><i class="fas fa-microchip"></i></div>
                <h4>Technology &amp; SaaS</h4><p>Product-led growth, developer-marketing, pipeline for B2B SaaS operators.</p></div>
            <div class="ind-tile"><div class="ind-tile__icon"><i class="fas fa-graduation-cap"></i></div>
                <h4>Education &amp; EdTech</h4><p>LMS platforms, course marketing, student-acquisition funnels, mobile learning.</p></div>
            <div class="ind-tile"><div class="ind-tile__icon"><i class="fas fa-seedling"></i></div>
                <h4>Startups</h4><p>MVP to Series-A. Fast website, brand, growth-marketing, product build.</p></div>
            <div class="ind-tile"><div class="ind-tile__icon"><i class="fas fa-building"></i></div>
                <h4>SMEs</h4><p>Owner-run businesses scaling to their first &#8377;10Cr &mdash; growth marketing that fits the budget.</p></div>
        </div>
    </div>
</section>

<!-- ============ S05 — CLIENTS ============ -->
<section class="slide" data-title="Our Clients">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">05 / 10</div>
            <div>
                <span class="label accent">Client Roster</span>
                <h2 class="display-2">Trusted by brands scaling across India + globally.</h2>
                <p class="lead">A cross-section of who we build for &mdash; from logistics operators moving millions of shipments to D2C brands scaling to national reach.</p>
            </div>
        </div>
        <div class="client-wall">
            <div class="client-tile"><img src="assets/img/clients/mindsyn.png" alt="Mindsyn" loading="lazy"></div>
            <div class="client-tile"><img src="assets/img/clients/nex-navalai.png" alt="Nex Navalai" loading="lazy"></div>
            <div class="client-tile"><img src="assets/img/clients/courierdost.png" alt="CourierDost" loading="lazy"></div>
            <div class="client-tile"><img src="assets/img/clients/transline-cargo.png" alt="Transline Cargo" loading="lazy"></div>
            <div class="client-tile"><img src="assets/img/clients/cariesco-group.png" alt="Cariesco Group" loading="lazy"></div>
            <div class="client-tile"><img src="assets/img/clients/daakiyawala.png" alt="Daakiyawala" loading="lazy"></div>
            <div class="client-tile"><img src="assets/img/clients/technocrats.png" alt="Technocrats" loading="lazy"></div>
            <div class="client-tile"><img src="assets/img/clients/m-four-development.png" alt="M Four Development" loading="lazy"></div>
        </div>
        <div class="client-caption">
            <span>Logistics</span><span>Manufacturing</span><span>D2C</span><span>Quantum</span>
            <span>Healthcare</span><span>SaaS</span><span>Real Estate</span><span>Marketplaces</span>
        </div>
    </div>
</section>

<!-- ============ S06 — TECH STACK ============ -->
<section class="slide" data-title="Technology & Marketing Stack">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">06 / 10</div>
            <div>
                <span class="label accent">Our Stack</span>
                <h2 class="display-2">The tools we ship with every engagement.</h2>
                <p class="lead">Battle-tested, enterprise-ready, and paid for by the studio. You never pay for tool licences we bring to the engagement.</p>
            </div>
        </div>
        <div class="stack">
            <div class="stack__col">
                <h4><i class="fas fa-code"></i> &nbsp;Development</h4>
                <div class="stack__col__row">
                    <span><i class="fab fa-php"></i>PHP</span><span><i class="fab fa-laravel"></i>Laravel</span>
                    <span><i class="fab fa-react"></i>React</span><span><i class="fab fa-node-js"></i>Node.js</span>
                    <span><i class="fas fa-mobile-screen"></i>Flutter</span><span><i class="fab fa-html5"></i>HTML5</span>
                    <span><i class="fab fa-css3-alt"></i>CSS3</span><span><i class="fab fa-js"></i>JavaScript</span>
                </div>
            </div>
            <div class="stack__col">
                <h4><i class="fas fa-window-restore"></i> &nbsp;CMS &amp; E-commerce</h4>
                <div class="stack__col__row">
                    <span><i class="fab fa-wordpress"></i>WordPress</span><span><i class="fab fa-shopify"></i>Shopify</span>
                    <span><i class="fas fa-cart-shopping"></i>WooCommerce</span><span><i class="fab fa-magento"></i>Magento</span>
                </div>
            </div>
            <div class="stack__col">
                <h4><i class="fas fa-cloud"></i> &nbsp;Cloud &amp; Hosting</h4>
                <div class="stack__col__row">
                    <span><i class="fab fa-aws"></i>AWS</span><span><i class="fab fa-google"></i>Google Cloud</span>
                    <span><i class="fab fa-microsoft"></i>Azure</span><span><i class="fas fa-server"></i>cPanel</span>
                </div>
            </div>
            <div class="stack__col">
                <h4><i class="fas fa-bullhorn"></i> &nbsp;Performance Marketing</h4>
                <div class="stack__col__row">
                    <span><i class="fab fa-google"></i>Google Ads</span><span><i class="fab fa-meta"></i>Meta Ads</span>
                    <span><i class="fab fa-linkedin"></i>LinkedIn Ads</span><span><i class="fab fa-youtube"></i>YouTube Ads</span>
                </div>
            </div>
            <div class="stack__col">
                <h4><i class="fas fa-magnifying-glass"></i> &nbsp;SEO &amp; Analytics</h4>
                <div class="stack__col__row">
                    <span><i class="fas fa-magnifying-glass"></i>SEO</span><span><i class="fas fa-chart-bar"></i>GA4</span>
                    <span><i class="fas fa-search"></i>Search Console</span><span><i class="fas fa-chart-line"></i>SEMrush</span>
                    <span><i class="fas fa-chart-column"></i>Ahrefs</span>
                </div>
            </div>
            <div class="stack__col">
                <h4><i class="fas fa-gears"></i> &nbsp;CRM &amp; Automation</h4>
                <div class="stack__col__row">
                    <span><i class="fab fa-hubspot"></i>HubSpot</span><span><i class="fas fa-h-square"></i>Zoho</span>
                    <span><i class="fab fa-mailchimp"></i>Mailchimp</span><span><i class="fab fa-whatsapp"></i>WhatsApp Business API</span>
                </div>
            </div>
            <div class="stack__col">
                <h4><i class="fas fa-brain"></i> &nbsp;AI</h4>
                <div class="stack__col__row">
                    <span><i class="fas fa-comments"></i>ChatGPT</span><span><i class="fas fa-comment-dots"></i>Claude</span>
                    <span><i class="fas fa-gem"></i>Gemini</span><span><i class="fas fa-paintbrush"></i>Midjourney</span>
                </div>
            </div>
            <div class="stack__col">
                <h4><i class="fas fa-palette"></i> &nbsp;Design</h4>
                <div class="stack__col__row">
                    <span><i class="fab fa-figma"></i>Figma</span><span><i class="fas fa-object-group"></i>Adobe XD</span>
                    <span><i class="fas fa-image"></i>Photoshop</span><span><i class="fas fa-bezier-curve"></i>Illustrator</span>
                    <span><i class="fas fa-swatchbook"></i>Canva</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ S07 — CASE STUDIES ============ -->
<section class="slide" data-title="Case Studies">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">07 / 10</div>
            <div>
                <span class="label accent">Selected Case Studies</span>
                <h2 class="display-2">Real outcomes for real brands.</h2>
                <p class="lead">Four representative engagements &mdash; industries, challenges, our approach, and the results we delivered together.</p>
            </div>
        </div>
        <div class="case-grid">
            <div class="case-card">
                <div class="case-card__banner">
                    <span class="case-card__banner__tag">Logistics &middot; Courier SaaS</span>
                    <h4>Courier Management Platform &mdash; ₹2Cr ARR SaaS</h4>
                </div>
                <div class="case-card__body">
                    <div class="case-card__block"><h6>Challenge</h6><p>Regional courier operator managing 100K+ monthly shipments on spreadsheets &mdash; no live tracking, manual dispatch, no client dashboard.</p></div>
                    <div class="case-card__block"><h6>Our Solution</h6><p>Full courier management SaaS: real-time tracking, driver mobile app, client dashboard, API integrations, invoice automation.</p></div>
                    <div class="case-card__results">
                        <div class="case-card__metric"><strong>80%</strong><small>Dispatch time cut</small></div>
                        <div class="case-card__metric"><strong>3&times;</strong><small>Shipment capacity</small></div>
                        <div class="case-card__metric"><strong>&#8377;2Cr</strong><small>Client ARR</small></div>
                    </div>
                </div>
            </div>
            <div class="case-card">
                <div class="case-card__banner">
                    <span class="case-card__banner__tag">D2C Fashion &middot; Marketing</span>
                    <h4>D2C Fashion Brand &mdash; 4&times; ROAS in 6 Months</h4>
                </div>
                <div class="case-card__body">
                    <div class="case-card__block"><h6>Challenge</h6><p>Bootstrapped fashion D2C stuck at 1.2&times; ROAS on Meta Ads. Rising CAC. Missed inventory-cycle targets.</p></div>
                    <div class="case-card__block"><h6>Our Solution</h6><p>Rebuilt funnel: landing pages, product bundling, remarketing sequences, creative testing. Ready-to-Buy lead-gen framework.</p></div>
                    <div class="case-card__results">
                        <div class="case-card__metric"><strong>4.2&times;</strong><small>ROAS</small></div>
                        <div class="case-card__metric"><strong>-38%</strong><small>Blended CAC</small></div>
                        <div class="case-card__metric"><strong>&#8377;1.4Cr</strong><small>Attributed revenue</small></div>
                    </div>
                </div>
            </div>
            <div class="case-card">
                <div class="case-card__banner">
                    <span class="case-card__banner__tag">B2B Manufacturing &middot; SEO</span>
                    <h4>Industrial B2B Website &mdash; 12&times; Organic Growth</h4>
                </div>
                <div class="case-card__body">
                    <div class="case-card__block"><h6>Challenge</h6><p>Manufacturing brand with poor organic presence. All leads via cold outreach. Distributor network wanted a portal.</p></div>
                    <div class="case-card__block"><h6>Our Solution</h6><p>Technical SEO audit, product-page reboot, 60 blog articles, distributor portal, WhatsApp lead-capture flow.</p></div>
                    <div class="case-card__results">
                        <div class="case-card__metric"><strong>12&times;</strong><small>Organic traffic</small></div>
                        <div class="case-card__metric"><strong>340</strong><small>Monthly qualified leads</small></div>
                        <div class="case-card__metric"><strong>92%</strong><small>Distributor NPS</small></div>
                    </div>
                </div>
            </div>
            <div class="case-card">
                <div class="case-card__banner">
                    <span class="case-card__banner__tag">Healthcare &middot; App + Marketing</span>
                    <h4>Doctor-Patient App &mdash; 100K Downloads in 12 Months</h4>
                </div>
                <div class="case-card__body">
                    <div class="case-card__block"><h6>Challenge</h6><p>Regional healthcare provider needed doctor-patient booking + telemed platform. No prior digital footprint.</p></div>
                    <div class="case-card__block"><h6>Our Solution</h6><p>iOS + Android app (Flutter), doctor portal, hospital admin dashboard. Multi-channel marketing launch across paid + organic.</p></div>
                    <div class="case-card__results">
                        <div class="case-card__metric"><strong>100K+</strong><small>App downloads</small></div>
                        <div class="case-card__metric"><strong>4.7&starf;</strong><small>Play Store rating</small></div>
                        <div class="case-card__metric"><strong>28K</strong><small>Monthly consults</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ S08 — WHY US ============ -->
<section class="slide" data-title="Why ITD GrowthLabs">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">08 / 10</div>
            <div>
                <span class="label accent">Why Us</span>
                <h2 class="display-2">Nine reasons brands stay with us for years.</h2>
                <p class="lead">97% client retention isn&rsquo;t marketing copy &mdash; it&rsquo;s the outcome of these nine operational commitments we honour on every account.</p>
            </div>
        </div>
        <div class="why-grid">
            <div class="why-tile"><div class="why-tile__icon"><i class="fas fa-diagram-project"></i></div>
                <h5>End-to-End Digital</h5><p>Marketing + tech + design under one contract, one senior owner. No handoffs.</p></div>
            <div class="why-tile"><div class="why-tile__icon"><i class="fas fa-user-tie"></i></div>
                <h5>Experienced Team</h5><p>55+ senior practitioners with 10&ndash;15 years&rsquo; category experience. No junior-only pods.</p></div>
            <div class="why-tile"><div class="why-tile__icon"><i class="fas fa-comments"></i></div>
                <h5>Transparent Communication</h5><p>Weekly sprint demos, Slack-first, monthly business reviews. No surprises.</p></div>
            <div class="why-tile"><div class="why-tile__icon"><i class="fas fa-bolt"></i></div>
                <h5>Agile Development</h5><p>2-week sprints, working software each cycle, priority reshuffles as the business changes.</p></div>
            <div class="why-tile"><div class="why-tile__icon"><i class="fas fa-chart-line"></i></div>
                <h5>Performance-Driven</h5><p>KPIs before deliverables. Every campaign measured against your business metric.</p></div>
            <div class="why-tile"><div class="why-tile__icon"><i class="fas fa-briefcase"></i></div>
                <h5>Business-Focused</h5><p>We ask about revenue targets before creative briefs. Design serves growth, not the other way round.</p></div>
            <div class="why-tile"><div class="why-tile__icon"><i class="fas fa-arrow-up-right-dots"></i></div>
                <h5>Scalable Solutions</h5><p>Everything built to scale &mdash; from your first &#8377;1Cr campaign to your &#8377;10Cr engagement.</p></div>
            <div class="why-tile"><div class="why-tile__icon"><i class="fas fa-handshake"></i></div>
                <h5>Long-Term Partnership</h5><p>Average client engagement is 22 months. Same senior owner from kickoff to Year 3.</p></div>
            <div class="why-tile"><div class="why-tile__icon"><i class="fas fa-square-poll-vertical"></i></div>
                <h5>Measurable ROI</h5><p>Every rupee traceable. Attribution dashboards, weekly reporting, quarterly business reviews.</p></div>
        </div>
    </div>
</section>

<!-- ============ S09 — FOUNDER ============ -->
<section class="slide" data-title="Founder">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">09 / 10</div>
            <div>
                <span class="label accent">Leadership</span>
                <h2 class="display-2">Founder-led. Senior-owned. Client-obsessed.</h2>
                <p class="lead">The person who wins your engagement is the same person accountable for its outcomes.</p>
            </div>
        </div>
        <div class="founder">
            <div class="founder__photo">
                <div class="founder__avatar">PC</div>
                <strong>Prashant Chaudhari</strong>
                <small>Founder &middot; Business Head</small>
                <div class="founder__photo__socials">
                    <a href="https://www.linkedin.com/in/prashant-chaudhari03/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="mailto:info@itdgrowthlabs.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    <a href="https://wa.me/918450978544" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="founder__body">
                <blockquote class="founder__body__quote">
                    &ldquo;The best digital agency for a growth-stage brand is the one whose founder still takes your Slack ping at 9pm. That&rsquo;s the standard we hold ourselves to.&rdquo;
                </blockquote>
                <div class="founder__body__grid">
                    <div>
                        <h6>Vision for ITD GrowthLabs</h6>
                        <p>Build India&rsquo;s most trusted senior-led digital partner &mdash; the default choice for D2C and B2B brands scaling from &#8377;5Cr to &#8377;100Cr ARR who refuse to settle for junior-agency work.</p>
                    </div>
                    <div>
                        <h6>Leadership Philosophy</h6>
                        <p>Radical honesty over polished pitches. Senior time on account over layered management. Business outcomes over vanity dashboards. Long-term partnership over short-term retainer.</p>
                    </div>
                    <div>
                        <h6>Expertise</h6>
                        <p>D2C growth marketing, performance-led paid acquisition, digital transformation for mid-market brands, product-led SaaS growth, and go-to-market strategy for India + global markets.</p>
                    </div>
                    <div>
                        <h6>Background</h6>
                        <p>Business Head + Growth Marketing Lead with 10+ years of hands-on experience across digital marketing, tech product delivery, and multi-channel campaign strategy for 100+ D2C and B2B brands.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ S10 — CONTACT + CTA ============ -->
<section class="slide final" data-title="Let's Build Together">
    <div class="slide-inner">
        <div style="text-align:center; margin-bottom:26px;">
            <span class="label accent" style="justify-content:center;">Contact</span>
            <h2 class="display-2">Let&rsquo;s build your next digital success story.</h2>
            <p class="lead" style="margin:14px auto 0;">Talk to us. 30 minutes, no pitch deck, no sales scripts. Just an honest conversation about what you&rsquo;re trying to grow &mdash; and whether we&rsquo;re the right partner to help you get there.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-item">
                <h6><i class="fas fa-location-dot"></i> Office</h6>
                <strong>Mumbai HQ</strong>
                <small>Andheri, Mumbai, Maharashtra 400053, India</small>
            </div>
            <div class="contact-item">
                <h6><i class="fas fa-envelope"></i> Email</h6>
                <strong><a href="mailto:info@itdgrowthlabs.com">info@itdgrowthlabs.com</a></strong>
                <small>Reply within 24 business hours</small>
            </div>
            <div class="contact-item">
                <h6><i class="fas fa-phone"></i> Phone / WhatsApp</h6>
                <strong><a href="https://wa.me/918450978544" target="_blank" rel="noopener">+91 84509 78544</a></strong>
                <small>Mon &ndash; Sat &middot; 9am to 6pm IST</small>
            </div>
            <div class="contact-item">
                <h6><i class="fas fa-globe"></i> Website</h6>
                <strong><a href="https://itdgrowthlabs.com" target="_blank" rel="noopener">itdgrowthlabs.com</a></strong>
                <small>Full portfolio + case studies</small>
            </div>
            <div class="contact-item">
                <h6><i class="fab fa-linkedin-in"></i> LinkedIn</h6>
                <strong><a href="https://www.linkedin.com/company/itd-growthlabs/" target="_blank" rel="noopener">/company/itd-growthlabs</a></strong>
                <small>Team updates, thought leadership</small>
            </div>
            <div class="contact-item">
                <h6><i class="fas fa-clock"></i> Response SLA</h6>
                <strong>24 business hours</strong>
                <small>Every enquiry reviewed personally</small>
            </div>
        </div>

        <div class="final__cta-block">
            <h3>Ready to talk?</h3>
            <p>Book a free 30-minute strategy consultation. We&rsquo;ll listen to what you&rsquo;re building, tell you honestly if we&rsquo;re the right fit, and share concrete next steps either way.</p>
            <a href="https://calendly.com/itdgrowthlabs-info/30min" target="_blank" rel="noopener" class="cta-pri">
                <i class="fas fa-calendar-check"></i> Book Free Consultation
            </a>
            <a href="/contact-us.php" class="cta-sec">
                <i class="fas fa-envelope"></i> Send an enquiry
            </a>
        </div>
    </div>
</section>

</div>
</main>

<footer class="chrome-bottom">
    <button type="button" class="nav-btn" id="prevBtn" aria-label="Previous slide">
        <i class="fas fa-arrow-left"></i>
    </button>
    <div class="dots" id="dots"></div>
    <button type="button" class="nav-btn" id="nextBtn" aria-label="Next slide">
        <i class="fas fa-arrow-right"></i>
    </button>
</footer>

<div class="kbd-hint">Use &larr; &rarr; keys, click dots, or swipe</div>

<script>
(function(){
    var track       = document.getElementById('deckTrack');
    var slides      = track.querySelectorAll('.slide');
    var totalSlides = slides.length;
    var current     = 0;

    var titleEl   = document.getElementById('slideTitle');
    var counterN  = document.getElementById('counterN');
    var counterF  = document.getElementById('counterFill');
    var prevBtn   = document.getElementById('prevBtn');
    var nextBtn   = document.getElementById('nextBtn');
    var dotsEl    = document.getElementById('dots');

    for (var i = 0; i < totalSlides; i++) {
        var d = document.createElement('button');
        d.className = 'dot' + (i === 0 ? ' active' : '');
        d.setAttribute('data-idx', i);
        d.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        dotsEl.appendChild(d);
    }
    var dots = dotsEl.querySelectorAll('.dot');

    function pad2(n){ return n < 10 ? ('0' + n) : String(n); }

    function goTo(idx) {
        if (idx < 0 || idx >= totalSlides) return;
        current = idx;
        track.style.transform = 'translateX(-' + (idx * 100) + 'vw)';
        for (var i = 0; i < totalSlides; i++) {
            slides[i].classList.toggle('is-active', i === idx);
            dots[i].classList.toggle('active', i === idx);
        }
        var slide = slides[idx];
        titleEl.textContent = slide.getAttribute('data-title') || ('Slide ' + (idx + 1));
        counterN.textContent = pad2(idx + 1);
        counterF.style.width = ((idx + 1) / totalSlides * 100) + '%';
        prevBtn.disabled = (idx === 0);
        nextBtn.disabled = (idx === totalSlides - 1);
        slide.scrollTop = 0;
    }

    slides[0].classList.add('is-active');
    counterF.style.width = (1 / totalSlides * 100) + '%';
    prevBtn.disabled = true;

    prevBtn.addEventListener('click', function(){ goTo(current - 1); });
    nextBtn.addEventListener('click', function(){ goTo(current + 1); });
    dotsEl.addEventListener('click', function(e){
        var t = e.target.closest('.dot');
        if (!t) return;
        var idx = parseInt(t.getAttribute('data-idx'), 10);
        if (!isNaN(idx)) goTo(idx);
    });

    document.addEventListener('keydown', function(e){
        var tag = (e.target && e.target.tagName) || '';
        if (tag === 'INPUT' || tag === 'TEXTAREA' || tag === 'SELECT') return;
        if (e.key === 'ArrowRight' || e.key === 'PageDown') { goTo(current + 1); e.preventDefault(); }
        else if (e.key === 'ArrowLeft' || e.key === 'PageUp') { goTo(current - 1); e.preventDefault(); }
        else if (e.key === 'Home') { goTo(0); e.preventDefault(); }
        else if (e.key === 'End')  { goTo(totalSlides - 1); e.preventDefault(); }
    });

    var tsx = 0, tsy = 0, tsTime = 0;
    track.addEventListener('touchstart', function(e){
        var t = e.touches[0]; tsx = t.clientX; tsy = t.clientY; tsTime = Date.now();
    }, {passive:true});
    track.addEventListener('touchend', function(e){
        var t = e.changedTouches[0];
        var dx = t.clientX - tsx, dy = t.clientY - tsy, dt = Date.now() - tsTime;
        if (dt > 500) return;
        if (Math.abs(dx) < 60) return;
        if (Math.abs(dy) > Math.abs(dx) * 0.8) return;
        if (dx < 0) goTo(current + 1); else goTo(current - 1);
    }, {passive:true});

    goTo(0);
})();
</script>
</body>
</html>
