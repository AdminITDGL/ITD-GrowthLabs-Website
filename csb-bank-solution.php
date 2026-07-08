<?php
/**
 * ITD Services — Solution Consulting Session for CSB Bank (v2)
 * ------------------------------------------------------------
 * 19-slide deck, 20-min presentation format.
 * Slide 1 = ITD Services introduction (not the invoice solution).
 * Slide 2 = Agenda / What we'll cover.
 * Approach 1 (OCR) + Approach 2 (Agreement-based automation).
 * Companion mobile speaker notes at /internal/csb-bank-speaker-notes.php
 * Confidential. Prepared for CSB Bank Procurement / IT / Ops / Senior Mgmt.
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="Solution consulting session for CSB Bank — ITD Services introduction, rent & vendor invoice automation, two approaches. 20-minute presentation format.">
    <meta name="robots" content="noindex, nofollow">
    <title>CSB Bank | Solution Consulting Session — ITD Services</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root{
    --bg:#ffffff; --surface-1:#fafbfc; --surface-2:#f4f6f8; --surface-3:#eef1f5;
    --line:#e5e7eb; --line-2:#d1d5db;
    --brand:#0f2543; --brand-2:#1e3a8a;
    --text:#0f2543; --text-2:#334155; --text-3:#4b5563; --text-4:#6b7280; --text-mute:#9ca3af; --text-dim:#d1d5db;
    --accent:#1e3a8a; --accent-2:#1d4ed8; --accent-soft:#dbeafe;
    --red:#b91c1c; --red-soft:#fee2e2;
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

.chrome-top{ position:fixed; top:0; left:0; right:0; height:var(--chrome-top);
      padding:0 24px; display:flex; justify-content:space-between; align-items:center;
      z-index:50; background:rgba(255,255,255,0.94);
      backdrop-filter:saturate(180%) blur(12px); -webkit-backdrop-filter:saturate(180%) blur(12px);
      border-bottom:1px solid var(--line); }
.brand{ display:flex; align-items:center; gap:10px; font-weight:600; font-size:14px; color:var(--text); }
.brand__mark{ width:48px; height:30px; background:var(--bg); border:2px solid var(--brand);
      color:var(--brand); font-weight:900; font-size:12px; letter-spacing:0.04em;
      display:flex; align-items:center; justify-content:center; font-family:'Inter',sans-serif; }
.brand__txt{ display:flex; flex-direction:column; line-height:1.1; }
.brand__txt strong{ font-size:14px; font-weight:700; letter-spacing:-0.01em; }
.brand__txt small{ font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:500;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-mute); margin-top:1px; }
.slide-title{ flex:1; text-align:center; font-size:13px; font-weight:600; color:var(--text);
      letter-spacing:-0.01em; padding:0 16px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; }
.counter{ font-family:'JetBrains Mono',monospace; font-size:12px; font-weight:500;
      color:var(--text-4); letter-spacing:0.1em; display:flex; align-items:center; gap:10px; }
.counter__bar{ width:60px; height:2px; background:var(--surface-3); border-radius:1px; overflow:hidden; }
.counter__fill{ display:block; height:100%; background:var(--text); width:0;
      transition:width .5s cubic-bezier(0.77,0,0.18,1); }
@media (max-width:700px){
    .chrome-top{ padding:0 16px; }
    .brand__txt{ display:none; }
    .slide-title{ font-size:12px; }
    .counter__bar{ width:40px; }
}

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
.nav-btn:hover{ border-color:var(--text); transform:translateY(-1px); }
.nav-btn:disabled{ opacity:0.3; cursor:not-allowed; transform:none; }
.nav-btn:disabled:hover{ border-color:var(--line-2); }
.dots{ display:flex; gap:5px; align-items:center; justify-content:center;
      flex:1; max-width:74%; flex-wrap:wrap; padding:0 12px; }
.dot{ width:6px; height:6px; border-radius:50%; background:var(--text-dim);
      cursor:pointer; border:none; padding:0; transition:background .2s ease, width .25s ease; }
.dot.active{ background:var(--text); width:18px; border-radius:3px; }
.dot:hover:not(.active){ background:var(--text-mute); }
@media (max-width:700px){
    .chrome-bottom{ padding:0 16px; }
    .nav-btn{ width:40px; height:40px; font-size:13px; }
    .dot{ width:5px; height:5px; }
    .dot.active{ width:14px; }
}

.notes-btn{ position:fixed; right:24px; top:calc(var(--chrome-top) + 12px); z-index:60;
      padding:6px 12px; border-radius:20px; background:var(--surface-2);
      border:1px solid var(--line-2); color:var(--text-3);
      font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:600;
      letter-spacing:0.14em; text-transform:uppercase; cursor:pointer;
      display:inline-flex; align-items:center; gap:6px;
      transition:background .2s ease, color .2s ease, border-color .2s ease;
      text-decoration:none; }
.notes-btn:hover{ background:var(--brand); color:#fff; border-color:var(--brand); }
.notes-btn::before{ content:''; display:inline-block; width:6px; height:6px; border-radius:50%; background:var(--gold); }
.notes-btn:hover::before{ background:#fff; }
@media (max-width:700px){ .notes-btn{ right:16px; top:calc(var(--chrome-top) + 8px); padding:5px 10px; font-size:9.5px; } }

.label{ display:inline-flex; align-items:center; gap:10px; font-family:'JetBrains Mono',monospace;
      font-size:11px; font-weight:500; letter-spacing:0.16em; text-transform:uppercase;
      color:var(--text-4); margin-bottom:20px; }
.label::before{ content:''; width:24px; height:1px; background:var(--text-mute); }
.label.accent{ color:var(--accent); }
.label.accent::before{ background:var(--accent); }
.label.gold{ color:var(--gold); }
.label.gold::before{ background:var(--gold); }
.label.red{ color:var(--red); }
.label.red::before{ background:var(--red); }
.label.green{ color:var(--green); }
.label.green::before{ background:var(--green); }
.label.purple{ color:var(--purple); }
.label.purple::before{ background:var(--purple); }

.display-1{ font-size:clamp(36px,7.5vw,72px); line-height:1.02; letter-spacing:-0.035em; font-weight:700; }
.display-2{ font-size:clamp(26px,4.6vw,48px); line-height:1.1; letter-spacing:-0.03em; font-weight:700; }
.display-3{ font-size:clamp(20px,3vw,32px); line-height:1.22; letter-spacing:-0.02em; font-weight:700; }
.lead{ font-size:clamp(15px,1.35vw,17px); line-height:1.65; color:var(--text-3); font-weight:400; max-width:720px; }

/* Cover — ITD Services intro */
.cover{ background:linear-gradient(180deg,#ffffff 0%,#fafbfc 100%); }
.cover .slide-inner{ text-align:center; align-items:center; }
.cover__pill{ display:inline-flex; align-items:center; gap:10px; padding:6px 14px; border-radius:30px;
      background:var(--bg); border:1px solid var(--line);
      font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:500;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-4); margin-bottom:32px; }
.cover__pill__dot{ width:6px; height:6px; border-radius:50%; background:var(--green);
      box-shadow:0 0 8px rgba(5,150,105,0.4); }
.cover h1{ margin-bottom:16px; }
.cover h1 .sub{ display:block; font-size:0.38em; font-weight:500; color:var(--text-3);
      letter-spacing:-0.015em; margin-top:14px; }
.cover__meta{ display:grid; grid-template-columns:repeat(5,auto); justify-content:center;
      gap:26px 40px; margin-top:44px; }
.cover__meta-item{ display:flex; flex-direction:column; gap:4px;
      font-family:'JetBrains Mono',monospace; text-align:left; }
.cover__meta-item small{ font-size:9.5px; font-weight:500; letter-spacing:0.18em;
      text-transform:uppercase; color:var(--text-mute); }
.cover__meta-item strong{ font-size:13px; font-weight:600; color:var(--text); letter-spacing:0; }
@media (max-width:900px){ .cover__meta{ grid-template-columns:repeat(3,auto); gap:22px 32px; margin-top:34px; } }
@media (max-width:520px){ .cover__meta{ grid-template-columns:repeat(2,auto); } }
.cover__conf{ margin-top:36px; font-family:'JetBrains Mono',monospace; font-size:10.5px;
      color:var(--text-mute); letter-spacing:0.14em; text-transform:uppercase; }

/* Section head */
.head-row{ display:grid; grid-template-columns:auto 1fr; gap:24px; align-items:end; margin-bottom:32px; }
.head-row .num{ font-family:'JetBrains Mono',monospace; font-size:13px;
      letter-spacing:0.14em; color:var(--text-mute); }
.head-row .lead{ margin-top:14px; }
@media (max-width:700px){ .head-row{ grid-template-columns:1fr; gap:10px; } }

/* Agenda */
.agenda{ display:grid; grid-template-columns:repeat(2,1fr); gap:14px; margin-top:12px; }
.agenda__item{ display:flex; gap:14px; padding:16px 18px; background:var(--surface-1);
      border:1px solid var(--line); border-radius:12px; }
.agenda__num{ font-family:'JetBrains Mono',monospace; font-size:22px; font-weight:700;
      color:var(--brand); line-height:1; min-width:34px; }
.agenda__txt strong{ display:block; font-size:14.5px; font-weight:600; color:var(--text); margin-bottom:4px; }
.agenda__txt small{ font-size:12.5px; color:var(--text-4); font-family:'JetBrains Mono',monospace; }
.agenda__txt p{ font-size:13.5px; color:var(--text-3); margin-top:6px; }
@media (max-width:800px){ .agenda{ grid-template-columns:1fr; } }

/* Capability tiles */
.caps{ display:grid; grid-template-columns:repeat(4,1fr); gap:12px; margin-top:12px; }
.cap{ background:var(--bg); border:1px solid var(--line); border-radius:11px;
      padding:16px 14px; min-height:104px; display:flex; flex-direction:column; }
.cap__icon{ width:32px; height:32px; border-radius:8px; background:var(--surface-2);
      border:1px solid var(--line); display:flex; align-items:center; justify-content:center;
      font-size:13px; color:var(--brand); margin-bottom:10px; }
.cap__name{ font-size:13px; font-weight:600; color:var(--text); margin-bottom:4px; letter-spacing:-0.01em; }
.cap__desc{ font-size:11.5px; color:var(--text-4); line-height:1.45; }
@media (max-width:900px){ .caps{ grid-template-columns:repeat(3,1fr); } }
@media (max-width:600px){ .caps{ grid-template-columns:repeat(2,1fr); } }

/* Requirement list */
.reqs{ display:grid; grid-template-columns:1fr 1fr; gap:32px; margin-top:12px; }
.reqs h4{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:500;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-4); margin-bottom:14px; }
.reqs ul{ padding:0; margin:0; list-style:none; }
.reqs li{ padding:9px 0; border-bottom:1px solid var(--line);
      font-size:14px; color:var(--text-2); display:flex; align-items:center; gap:10px; }
.reqs li:last-child{ border-bottom:0; }
.reqs li::before{ content:''; width:5px; height:5px; border-radius:50%; background:var(--brand); flex-shrink:0; }
.reqs li strong{ color:var(--text); font-weight:600; }
@media (max-width:800px){ .reqs{ grid-template-columns:1fr; gap:20px; } }

/* Two-approach */
.paths{ display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-top:16px; }
.path{ background:var(--surface-1); border:1px solid var(--line); border-radius:16px;
      padding:26px; display:flex; flex-direction:column; }
.path--recommended{ background:linear-gradient(180deg,#f0f7ff 0%,#f8fbff 100%); border-color:var(--accent-2); }
.path__tag{ display:inline-flex; align-items:center; gap:8px; padding:4px 10px;
      border-radius:14px; background:var(--bg); border:1px solid var(--line-2);
      font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:600;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-4);
      align-self:flex-start; margin-bottom:12px; }
.path--recommended .path__tag{ background:var(--accent-2); color:#fff; border-color:var(--accent-2); }
.path h3{ font-size:20px; line-height:1.25; margin-bottom:10px; }
.path__sub{ font-size:13.5px; color:var(--text-3); line-height:1.5; margin-bottom:14px; }
.path__body{ flex:1; }
.path__body ul{ margin:0; padding-left:16px; }
.path__body li{ font-size:13px; color:var(--text-3); padding:3px 0; }
.path__foot{ margin-top:14px; padding-top:12px; border-top:1px dashed var(--line-2);
      font-family:'JetBrains Mono',monospace; font-size:11px; color:var(--text-4); letter-spacing:0.06em; }
@media (max-width:800px){ .paths{ grid-template-columns:1fr; } }

/* Flow diagrams */
.flow{ display:flex; flex-wrap:wrap; align-items:stretch; gap:8px; margin-top:14px; }
.flow__step{ flex:1; min-width:150px; padding:14px; background:var(--bg);
      border:1px solid var(--line); border-radius:10px; display:flex; flex-direction:column; }
.flow__step__num{ font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.14em;
      color:var(--text-mute); text-transform:uppercase; margin-bottom:8px; }
.flow__step h5{ font-size:13px; margin-bottom:4px; letter-spacing:-0.01em; }
.flow__step p{ font-size:12px; color:var(--text-4); line-height:1.45; }
.flow__step.is-manual{ background:var(--red-soft); border-color:var(--red); }
.flow__step.is-manual .flow__step__num{ color:var(--red); }
.flow__step.is-auto{ background:var(--green-soft); border-color:var(--green); }
.flow__step.is-auto .flow__step__num{ color:var(--green); }
.flow__step.is-brand{ background:var(--surface-1); border-color:var(--brand-2); }
.flow__step.is-brand .flow__step__num{ color:var(--brand); }
.flow__arrow{ align-self:center; color:var(--text-mute); font-size:15px; padding:0 2px; }
@media (max-width:700px){ .flow__step{ min-width:100%; } .flow__arrow{ display:none; } }

/* Pain point tiles */
.pains{ display:grid; grid-template-columns:repeat(4,1fr); gap:12px; margin-top:14px; }
.pain{ background:var(--red-soft); border:1px solid #fca5a5; border-radius:11px; padding:14px 14px 12px; }
.pain__ico{ width:28px; height:28px; border-radius:6px; background:#fff;
      display:flex; align-items:center; justify-content:center; color:var(--red);
      font-size:12px; margin-bottom:8px; border:1px solid #fca5a5; }
.pain h5{ font-size:13px; color:var(--brand); margin-bottom:4px; }
.pain p{ font-size:11.5px; line-height:1.45; color:var(--text-3); }
@media (max-width:900px){ .pains{ grid-template-columns:repeat(2,1fr); } }
@media (max-width:520px){ .pains{ grid-template-columns:1fr; } }

/* Architecture layer stack */
.arch{ display:grid; grid-template-columns:1fr; gap:8px; margin-top:14px;
      background:var(--surface-2); border:1px solid var(--line); border-radius:14px; padding:14px; }
.arch__row{ background:var(--bg); border:1px solid var(--line); border-radius:10px;
      padding:14px 18px; display:grid; grid-template-columns:180px 1fr; gap:16px; align-items:center; }
.arch__row h5{ font-size:13.5px; letter-spacing:-0.01em; }
.arch__row small{ font-family:'JetBrains Mono',monospace; font-size:10px;
      color:var(--text-mute); letter-spacing:0.14em; text-transform:uppercase; display:block; margin-top:3px; }
.arch__row p{ font-size:12.5px; color:var(--text-3); line-height:1.5; }
.arch__row.accent{ border-color:var(--accent-2); background:#f0f7ff; }
@media (max-width:700px){ .arch__row{ grid-template-columns:1fr; gap:6px; } }

/* Table */
.tbl{ width:100%; border-collapse:separate; border-spacing:0; margin-top:14px;
      background:var(--bg); border:1px solid var(--line); border-radius:12px; overflow:hidden; font-size:13px; }
.tbl th, .tbl td{ padding:11px 14px; text-align:left; border-bottom:1px solid var(--line); vertical-align:top; }
.tbl th{ background:var(--surface-2); font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; color:var(--text-4); font-family:'JetBrains Mono',monospace; }
.tbl tr:last-child td{ border-bottom:0; }
.tbl td.mono{ font-family:'JetBrains Mono',monospace; font-size:12px; color:var(--text-2); }
.tbl td strong{ color:var(--text); font-weight:600; }
.tbl .pill{ display:inline-block; padding:2px 8px; border-radius:10px;
      font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:600;
      background:var(--accent-soft); color:var(--accent-2); letter-spacing:0.06em; }

/* Split panels */
.split{ display:grid; grid-template-columns:1fr 1fr; gap:14px; margin-top:14px; }
.split__panel{ background:var(--bg); border:1px solid var(--line); border-radius:14px; padding:22px; }
.split__panel h4{ font-size:16px; margin-bottom:12px; }
.split__panel ul{ margin:0; padding-left:16px; }
.split__panel li{ font-size:13px; color:var(--text-3); padding:4px 0; line-height:1.5; }
.split__panel.chal{ background:var(--red-soft); border-color:#fca5a5; }
.split__panel.chal h4{ color:var(--brand); }
.split__panel.chal li{ color:var(--brand); }
@media (max-width:800px){ .split{ grid-template-columns:1fr; } }

/* Dashboard */
.dash{ display:grid; grid-template-columns:2fr 1fr; gap:12px; margin-top:14px; }
.dash__panel{ background:var(--surface-1); border:1px solid var(--line); border-radius:12px; padding:16px 18px; }
.dash__panel h5{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:500;
      letter-spacing:0.14em; text-transform:uppercase; color:var(--text-4); margin-bottom:12px; }
.dash__panel p, .dash__panel li{ font-size:12.5px; color:var(--text-3); line-height:1.55; }
.dash__panel ul{ margin:0; padding-left:16px; }
@media (max-width:800px){ .dash{ grid-template-columns:1fr; } }

/* Question hero */
.question{ display:flex; flex-direction:column; align-items:flex-start; }
.question__q{ font-size:clamp(28px,5vw,52px); line-height:1.12; letter-spacing:-0.03em;
      color:var(--brand); font-weight:700; max-width:900px; }
.question__q em{ font-style:normal; color:var(--accent-2); }
.question__a{ margin-top:20px; font-size:15.5px; line-height:1.65; color:var(--text-3); max-width:780px; }

/* Comparison matrix */
.matrix{ margin-top:16px; overflow-x:auto; }
.matrix table{ width:100%; border-collapse:separate; border-spacing:0; font-size:13px;
      background:var(--bg); border:1px solid var(--line); border-radius:12px; overflow:hidden; }
.matrix th, .matrix td{ padding:12px 14px; text-align:left; border-bottom:1px solid var(--line); vertical-align:top; }
.matrix th{ background:var(--surface-2); font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; color:var(--text-4); font-family:'JetBrains Mono',monospace; }
.matrix th.recommend{ background:var(--accent-soft); color:var(--accent-2); }
.matrix td.recommend{ background:#f0f7ff; }
.matrix tr:last-child td{ border-bottom:0; }
.matrix .verdict{ background:var(--brand); color:#fff; padding:14px; border-radius:12px;
      margin-top:14px; font-size:14px; line-height:1.55; }
.matrix .verdict strong{ color:#fff; display:block; margin-bottom:4px;
      font-family:'JetBrains Mono',monospace; font-size:10.5px; letter-spacing:0.14em; text-transform:uppercase; }

/* Security tiles */
.sec-grid{ display:grid; grid-template-columns:repeat(4,1fr); gap:10px; margin-top:14px; }
.sec-tile{ background:var(--surface-1); border:1px solid var(--line); border-radius:11px; padding:14px 14px; }
.sec-tile__ico{ color:var(--brand); font-size:16px; margin-bottom:8px; }
.sec-tile h6{ font-size:12.5px; margin-bottom:2px; letter-spacing:-0.01em; }
.sec-tile small{ font-size:11px; color:var(--text-4); }
@media (max-width:800px){ .sec-grid{ grid-template-columns:repeat(2,1fr); } }
@media (max-width:520px){ .sec-grid{ grid-template-columns:1fr; } }

/* Asks */
.asks{ display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-top:14px; }
.ask{ padding:14px 16px; background:var(--gold-soft); border:1px solid #fcd34d; border-radius:10px; }
.ask__num{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; color:var(--gold); text-transform:uppercase; margin-bottom:4px; }
.ask p{ font-size:13px; color:var(--brand); line-height:1.45; }
@media (max-width:700px){ .asks{ grid-template-columns:1fr; } }

/* Final */
.final{ background:linear-gradient(180deg,#fafbfc 0%,#f0f7ff 100%); }
.final .slide-inner{ text-align:center; align-items:center; }
.final .display-2{ max-width:820px; margin:0 auto; }
.contact-block{ margin-top:34px; display:grid; grid-template-columns:repeat(3,1fr);
      gap:20px; max-width:820px; margin-inline:auto; }
.contact-item{ background:var(--bg); border:1px solid var(--line); border-radius:12px;
      padding:20px 18px; text-align:left; }
.contact-item h6{ font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:500;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-mute); margin-bottom:6px; }
.contact-item strong{ font-size:14.5px; font-weight:600; color:var(--text); display:block;
      letter-spacing:-0.01em; margin-bottom:2px; }
.contact-item small{ font-size:12px; color:var(--text-4); }
@media (max-width:800px){ .contact-block{ grid-template-columns:1fr; } }

.kbd-hint{ position:fixed; bottom:14px; left:50%; transform:translateX(-50%);
      z-index:40; font-family:'JetBrains Mono',monospace; font-size:9.5px; letter-spacing:0.14em;
      color:var(--text-mute); text-transform:uppercase; opacity:0.7; pointer-events:none; }
@media (max-width:700px){ .kbd-hint{ display:none; } }
</style>
</head>
<body>

<header class="chrome-top">
    <div class="brand">
        <div class="brand__mark">ITD</div>
        <div class="brand__txt">
            <strong>ITD Services</strong>
            <small>Solution Consulting</small>
        </div>
    </div>
    <div class="slide-title" id="slideTitle">ITD Services</div>
    <div class="counter">
        <span id="counterN">01</span> / 19
        <span class="counter__bar"><span class="counter__fill" id="counterFill"></span></span>
    </div>
</header>

<a href="/internal/csb-bank-speaker-notes.php" target="_blank" rel="noopener" class="notes-btn" title="Open speaker notes on your phone">Notes</a>

<main class="deck">
<div class="deck__track" id="deckTrack">

<!-- ============ S01 — ITD SERVICES INTRODUCTION ============ -->
<section class="slide cover" data-title="ITD Services">
    <div class="slide-inner">
        <span class="cover__pill"><span class="cover__pill__dot"></span>Confidential &middot; Solution Consulting &middot; CSB Bank &middot; Meeting 02</span>
        <h1 class="display-1">ITD Services
            <span class="sub">Enterprise software engineering &middot; digital transformation &middot; banking-aligned capabilities.</span></h1>
        <div class="cover__meta">
            <div class="cover__meta-item"><small>Established</small><strong>2018</strong></div>
            <div class="cover__meta-item"><small>HQ</small><strong>Mumbai</strong></div>
            <div class="cover__meta-item"><small>Team</small><strong>30+ Professionals</strong></div>
            <div class="cover__meta-item"><small>Enterprise Clients</small><strong>300+</strong></div>
            <div class="cover__meta-item"><small>Group</small><strong>ITD Group</strong></div>
        </div>
        <div class="cover__conf">Confidential &middot; For CSB Bank internal use only</div>
    </div>
</section>

<!-- ============ S02 — AGENDA (20 MIN) ============ -->
<section class="slide" data-title="Agenda">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">02 / 19</div>
            <div>
                <span class="label">Session Agenda &middot; 20 Minutes</span>
                <h2 class="display-2">What we&rsquo;ll cover in the next 20 minutes.</h2>
                <p class="lead">Six sections. Front-loaded on the two approaches so we have time to discuss questions and next steps at the end.</p>
            </div>
        </div>
        <div class="agenda">
            <div class="agenda__item">
                <span class="agenda__num">01</span>
                <div class="agenda__txt"><strong>ITD Services &mdash; who we are</strong><small>2 min</small>
                    <p>Company snapshot &amp; relevant capabilities for this engagement.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">02</span>
                <div class="agenda__txt"><strong>Our understanding of the requirement</strong><small>3 min</small>
                    <p>Playback of scope captured from meeting 01, to confirm alignment.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">03</span>
                <div class="agenda__txt"><strong>Approach 1 &mdash; AI-OCR Invoice Processing</strong><small>5 min</small>
                    <p>The solution CSB Bank asked for. Architecture, workflow, review, dashboards.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">04</span>
                <div class="agenda__txt"><strong>Approach 2 &mdash; Agreement-Based Automation</strong><small>5 min</small>
                    <p>Our recommendation for rent invoices. Why it&rsquo;s better, and where it&rsquo;s harder.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">05</span>
                <div class="agenda__txt"><strong>Comparison &amp; security posture</strong><small>3 min</small>
                    <p>Side-by-side, recommended hybrid, security &amp; compliance overview.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">06</span>
                <div class="agenda__txt"><strong>Questions for CSB &amp; next steps</strong><small>2 min</small>
                    <p>Assumptions to validate, decisions we need help with, immediate next actions.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ============ S03 — OUR UNDERSTANDING ============ -->
<section class="slide" data-title="Our Understanding of the Requirement">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">03 / 19</div>
            <div>
                <span class="label">Understanding</span>
                <h2 class="display-2">What CSB Bank asked us to solve.</h2>
                <p class="lead">Our playback of the scope captured from meeting 01. If anything here is inaccurate or incomplete, please stop us &mdash; the approach on the following slides is built on this understanding.</p>
            </div>
        </div>
        <div class="reqs">
            <div>
                <h4>Functional Scope</h4>
                <ul>
                    <li><strong>Rent</strong> invoice management</li>
                    <li><strong>Vendor</strong> invoice management</li>
                    <li>OCR-based invoice extraction</li>
                    <li>GST computation &amp; validation</li>
                    <li>Approval workflows (role-based, multi-level)</li>
                    <li>ERP integration</li>
                    <li>Dashboards &amp; reports</li>
                    <li>Immutable audit trail</li>
                    <li>Notifications (email + WhatsApp)</li>
                </ul>
            </div>
            <div>
                <h4>OCR &mdash; Fields to Capture (12)</h4>
                <ul>
                    <li>Vendor Name</li>
                    <li>GSTIN</li>
                    <li>Invoice Number &middot; Invoice Date</li>
                    <li>Invoice Value &middot; Taxable Amount</li>
                    <li>CGST &middot; SGST &middot; IGST</li>
                    <li>Due Date &middot; Purchase Order (PO)</li>
                    <li>Cost Center</li>
                </ul>
                <h4 style="margin-top:18px;">Non-Functional</h4>
                <ul>
                    <li>Role-based access control</li>
                    <li>GST compliance (India, current regime)</li>
                    <li>Audit trail &amp; regulator-ready reports</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ S04 — CAPABILITIES RECAP ============ -->
<section class="slide" data-title="Relevant Capabilities">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">04 / 19</div>
            <div>
                <span class="label">Capabilities Recap</span>
                <h2 class="display-2">The capabilities we&rsquo;re bringing to this engagement.</h2>
                <p class="lead">Only what&rsquo;s directly relevant to invoice automation. Full company profile was shared post meeting 01 &mdash; happy to revisit anything.</p>
            </div>
        </div>
        <div class="caps">
            <div class="cap"><div class="cap__icon"><i class="fas fa-code"></i></div>
                <div class="cap__name">Enterprise Software Dev</div><div class="cap__desc">Custom platforms built to scale, 300+ enterprise clients delivered.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-brain"></i></div>
                <div class="cap__name">AI &amp; Machine Learning</div><div class="cap__desc">In-house data-science team; production ML pipelines.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-file-image"></i></div>
                <div class="cap__name">OCR &amp; Doc Intelligence</div><div class="cap__desc">LayoutLM + template models, 95%+ field-level accuracy.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-diagram-project"></i></div>
                <div class="cap__name">Workflow Automation</div><div class="cap__desc">Config-driven approval engines, exception handling.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-plug"></i></div>
                <div class="cap__name">ERP Integration</div><div class="cap__desc">Finacle, SAP, Oracle, custom &mdash; REST / SFTP / MQ.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-calculator"></i></div>
                <div class="cap__name">GST Computation</div><div class="cap__desc">Rate tables, HSN, ITC eligibility, e-invoicing.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <div class="cap__name">Invoice Management</div><div class="cap__desc">End-to-end lifecycle, exception queues, aging.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-handshake"></i></div>
                <div class="cap__name">Vendor Management</div><div class="cap__desc">Master data, onboarding, agreement repository.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-university"></i></div>
                <div class="cap__name">Banking &amp; FS</div><div class="cap__desc">Enterprise software capabilities aligned with banking workflows.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-cloud"></i></div>
                <div class="cap__name">Enterprise SaaS</div><div class="cap__desc">Multi-tenant, RBAC, tenant isolation, audit-first design.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-shield-halved"></i></div>
                <div class="cap__name">Security</div><div class="cap__desc">Encryption at rest + in transit, VAPT, DR/BCP-ready.</div></div>
            <div class="cap"><div class="cap__icon"><i class="fas fa-list-check"></i></div>
                <div class="cap__name">Audit Trails &amp; APIs</div><div class="cap__desc">Immutable logs, tamper-evident, regulator-ready.</div></div>
        </div>
    </div>
</section>

<!-- ============ S05 — TWO APPROACHES ============ -->
<section class="slide" data-title="Two Solution Approaches">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">05 / 19</div>
            <div>
                <span class="label">Solution Overview</span>
                <h2 class="display-2">Two approaches, side by side.</h2>
                <p class="lead">Approach 1 is what CSB Bank asked for. Approach 2 is what we recommend for rent specifically. We suggest a hybrid where each approach handles the invoice type it&rsquo;s best suited for.</p>
            </div>
        </div>
        <div class="paths">
            <div class="path">
                <span class="path__tag">Approach 01 &middot; As Requested</span>
                <h3>AI-Powered OCR Invoice Processing</h3>
                <p class="path__sub">Ingest invoice PDFs / images, extract the 12 fields via OCR, validate against masters, route through role-based approval, post to ERP.</p>
                <div class="path__body">
                    <ul>
                        <li>Works for <strong>any</strong> invoice type &mdash; vendor, rent, utility, capex</li>
                        <li>Lower change management &mdash; mirrors current workflow</li>
                        <li>Human-in-the-loop for exceptions</li>
                    </ul>
                </div>
                <div class="path__foot">Recommended for &rarr; Vendor invoices (heterogeneous, ad-hoc)</div>
            </div>
            <div class="path path--recommended">
                <span class="path__tag">Approach 02 &middot; Our Recommendation</span>
                <h3>Agreement-Based Invoice Automation</h3>
                <p class="path__sub">Contract-driven automation for recurring rent. System reads the agreement, generates monthly invoices, handles GST, routes approvals, posts to ERP.</p>
                <div class="path__body">
                    <ul>
                        <li>Eliminates the monthly invoice-collection cycle</li>
                        <li>Contract-driven &mdash; audit-perfect by design</li>
                        <li>Escalations, GST changes, renewals handled by config</li>
                    </ul>
                </div>
                <div class="path__foot">Recommended for &rarr; Rent invoices (contractual, recurring)</div>
            </div>
        </div>
    </div>
</section>

<!-- ============ S06 — APPROACH 1 OVERVIEW ============ -->
<section class="slide" data-title="Approach 1 — Overview">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">06 / 19 &middot; Approach 01</div>
            <div>
                <span class="label accent">Approach 01 &middot; Overview</span>
                <h2 class="display-2">AI-Powered OCR Invoice Processing.</h2>
                <p class="lead">The client&rsquo;s current challenges and the business outcomes we&rsquo;ll deliver. Architecture on the next slide.</p>
            </div>
        </div>
        <div class="split">
            <div class="split__panel chal">
                <h4><i class="fas fa-triangle-exclamation" style="color:var(--red);margin-right:6px;"></i>Client Challenges</h4>
                <ul>
                    <li><strong>No standard invoice format</strong> followed by landlords &mdash; PDFs, images, WhatsApp screenshots all mixed in.</li>
                    <li><strong>Invoices are often not received on time</strong> &mdash; monthly cycle depends on 500+ landlords remembering to send.</li>
                    <li><strong>Compliance and validation challenges</strong> &mdash; GSTIN accuracy, ITC eligibility, PO match, duplicate check &mdash; all manual today.</li>
                </ul>
            </div>
            <div class="split__panel">
                <h4>Business outcomes</h4>
                <ul>
                    <li><strong>~80% reduction</strong> in manual data entry effort</li>
                    <li><strong>95%+ OCR accuracy</strong> on the 12 fields after 6-week training window</li>
                    <li><strong>&lt;24-hour</strong> invoice-to-approval cycle for standard invoices</li>
                    <li><strong>Zero GSTIN mismatch</strong> penalties &mdash; validated at capture</li>
                    <li><strong>100% audit coverage</strong> &mdash; every field change logged</li>
                    <li>Ops team redeployed from data entry to exception handling &amp; supplier engagement</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ S07 — CURRENT STATE ============ -->
<section class="slide" data-title="Current State — Invoice Process">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">07 / 19 &middot; Approach 01</div>
            <div>
                <span class="label red">Current State</span>
                <h2 class="display-2">How invoice processing likely works today.</h2>
                <p class="lead">Our best-guess current-state model. Red steps are manual, error-prone, and don&rsquo;t scale. We&rsquo;ll validate this in the discovery phase.</p>
            </div>
        </div>
        <div class="flow">
            <div class="flow__step is-manual"><div class="flow__step__num">01 &middot; Manual</div>
                <h5>Vendor/Landlord sends invoice</h5><p>Email attachment, physical courier, or WhatsApp. No standard format.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-manual"><div class="flow__step__num">02 &middot; Manual</div>
                <h5>Ops team reads &amp; enters</h5><p>Manually keys 12 fields into spreadsheet or ERP. Typos, missed fields.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-manual"><div class="flow__step__num">03 &middot; Manual</div>
                <h5>GST validation</h5><p>Analyst checks GSTIN, computes GST manually, catches mismatch.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-manual"><div class="flow__step__num">04 &middot; Manual</div>
                <h5>Approval loop</h5><p>Emails, forwards, paper trails. No SLA tracking. Bottleneck at senior approvers.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step"><div class="flow__step__num">05 &middot; System</div>
                <h5>ERP posting</h5><p>Approved invoice manually posted or batch-uploaded to ERP.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step"><div class="flow__step__num">06 &middot; Manual</div>
                <h5>Payment &amp; filing</h5><p>Payment released, physical file archived. Audit trail scattered.</p></div>
        </div>
    </div>
</section>

<!-- ============ S08 — PAIN POINTS ============ -->
<section class="slide" data-title="Pain Points in the Current State">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">08 / 19 &middot; Approach 01</div>
            <div>
                <span class="label red">Pain Points</span>
                <h2 class="display-2">Where today&rsquo;s process breaks down.</h2>
                <p class="lead">Eight recurring failure modes we see in banks running manual invoice processes. Please tell us if we&rsquo;re missing any &mdash; or which of these hurts most.</p>
            </div>
        </div>
        <div class="pains">
            <div class="pain"><div class="pain__ico"><i class="fas fa-keyboard"></i></div>
                <h5>Manual entry errors</h5><p>Typos in amounts, GSTIN, PO numbers. Recovery is expensive.</p></div>
            <div class="pain"><div class="pain__ico"><i class="fas fa-percent"></i></div>
                <h5>GST mismatch penalties</h5><p>Wrong GSTIN or ITC ineligibility only caught at reconciliation.</p></div>
            <div class="pain"><div class="pain__ico"><i class="fas fa-hourglass-half"></i></div>
                <h5>Approval bottlenecks</h5><p>Senior approvers as single point of failure. Ageing invoices.</p></div>
            <div class="pain"><div class="pain__ico"><i class="fas fa-magnifying-glass"></i></div>
                <h5>No audit trail</h5><p>Field-level changes untracked. Audit reconstructions cost weeks.</p></div>
            <div class="pain"><div class="pain__ico"><i class="fas fa-arrows-to-dot"></i></div>
                <h5>ERP entry backlog</h5><p>Ops team overloaded, invoices sit unprocessed for days.</p></div>
            <div class="pain"><div class="pain__ico"><i class="fas fa-copy"></i></div>
                <h5>Duplicate / lost invoices</h5><p>No cross-checks. Same invoice paid twice or never paid.</p></div>
            <div class="pain"><div class="pain__ico"><i class="fas fa-eye-slash"></i></div>
                <h5>Zero live visibility</h5><p>No dashboard. Ops team can&rsquo;t answer &ldquo;where&rsquo;s my invoice?&rdquo;</p></div>
            <div class="pain"><div class="pain__ico"><i class="fas fa-triangle-exclamation"></i></div>
                <h5>Exceptions handled ad-hoc</h5><p>No SLA, no queue, no escalation matrix.</p></div>
        </div>
    </div>
</section>

<!-- ============ S09 — FUTURE STATE ARCHITECTURE ============ -->
<section class="slide" data-title="Future State — Solution Architecture">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">09 / 19 &middot; Approach 01</div>
            <div>
                <span class="label accent">Future State &middot; Architecture</span>
                <h2 class="display-2">Six architectural layers &mdash; modular, extensible, auditable.</h2>
                <p class="lead">Every layer is independently evolvable. Deployable on-prem inside CSB&rsquo;s data centre or on a private cloud tenant.</p>
            </div>
        </div>
        <div class="arch">
            <div class="arch__row">
                <div><h5>01 &middot; Ingestion Layer</h5><small>Portal &middot; Scan</small></div>
                <p>Branch upload portal &middot; scanner integration. Files auto-tagged with source, timestamp, branch, batch.</p>
            </div>
            <div class="arch__row">
                <div><h5>02 &middot; OCR Extraction</h5><small>AI + Layout Models</small></div>
                <p>Fine-tuned document AI (LayoutLMv3 + OCR engine) captures 12 fields with confidence scoring. Template detection for standard vendors, ML fallback for the rest.</p>
            </div>
            <div class="arch__row accent">
                <div><h5>03 &middot; Validation &amp; Exception</h5><small>Rules + Human-in-Loop</small></div>
                <p>GSTIN lookup, HSN check, PO match, duplicate check, GST math. Low-confidence fields routed to a review queue with SLA. Every review corrects the model.</p>
            </div>
            <div class="arch__row">
                <div><h5>04 &middot; Approval Workflow</h5><small>RBAC &middot; Multi-Level</small></div>
                <p>Config-driven threshold-based routing. Different rules for rent vs vendor. Email + WhatsApp + in-app notifications. SLA tracking + auto-escalation.</p>
            </div>
            <div class="arch__row">
                <div><h5>05 &middot; ERP Integration</h5><small>REST / SFTP / MQ</small></div>
                <p>Adapter pattern &mdash; Finacle, SAP, Oracle, custom. Real-time posting or batch, per CSB&rsquo;s operational preference. Retry + reconciliation.</p>
            </div>
            <div class="arch__row">
                <div><h5>06 &middot; Dashboards, Reports, Audit</h5><small>Reg-Ready</small></div>
                <p>Live dashboard by branch / vendor / status. Monthly rent register, vendor aging, GST recon, exception report. Immutable append-only audit log.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ S10 — HUMAN IN THE LOOP ============ -->
<section class="slide" data-title="Human-in-the-Loop Review">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">10 / 19 &middot; Approach 01</div>
            <div>
                <span class="label accent">Exception Handling</span>
                <h2 class="display-2">Humans handle the 5%. The model learns from every correction.</h2>
                <p class="lead">The automation isn&rsquo;t magic. Low-confidence extractions get a purpose-built review queue with SLA. Every correction becomes a training signal.</p>
            </div>
        </div>
        <div class="flow">
            <div class="flow__step is-brand"><div class="flow__step__num">01</div>
                <h5>OCR runs</h5><p>All 12 fields extracted with per-field confidence scores.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-brand"><div class="flow__step__num">02</div>
                <h5>Confidence gate</h5><p>Field-level thresholds. All-fields-clear invoices auto-progress.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-manual"><div class="flow__step__num">03</div>
                <h5>Review queue</h5><p>Any below-threshold field routes to reviewer with suggested value.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-brand"><div class="flow__step__num">04</div>
                <h5>Reviewer confirms/corrects</h5><p>Purpose-built UI, one-click accept or edit. 30-60s per invoice.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-auto"><div class="flow__step__num">05</div>
                <h5>Model learns</h5><p>Correction feeds nightly retrain. Exception rate drops week over week.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-auto"><div class="flow__step__num">06</div>
                <h5>Invoice progresses</h5><p>Confirmed record enters approval workflow &mdash; no manual re-entry.</p></div>
        </div>
        <div class="split" style="margin-top:18px;">
            <div class="split__panel"><h4>What we track</h4>
                <ul>
                    <li>Field-level confidence distribution</li>
                    <li>Weekly exception rate by vendor / template</li>
                    <li>Reviewer throughput and correction time</li>
                    <li>Vendors driving disproportionate exceptions</li>
                </ul>
            </div>
            <div class="split__panel"><h4>Expected trajectory</h4>
                <ul>
                    <li>Week 1&ndash;2: 25% exception rate (baseline)</li>
                    <li>Week 3&ndash;6: 12% (model + template tuning)</li>
                    <li>Week 7&ndash;12: 5&ndash;7% (production steady state)</li>
                    <li>Ops effort: ~2 FTE for CSB&rsquo;s estimated volume</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ S11 — DASHBOARD, REPORTS, AUDIT ============ -->
<section class="slide" data-title="Dashboard, Reports & Audit Trail">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">11 / 19 &middot; Approach 01</div>
            <div>
                <span class="label accent">Visibility &amp; Audit</span>
                <h2 class="display-2">Live dashboards, scheduled reports, immutable audit trail.</h2>
                <p class="lead">Three views of the same platform &mdash; ops, finance, audit &mdash; each getting exactly what they need with role-appropriate access.</p>
            </div>
        </div>
        <div class="dash">
            <div class="dash__panel">
                <h5>Live Ops Dashboard</h5>
                <p>Invoice pipeline by stage &middot; exception queue with SLA countdown &middot; branch-level status &middot; vendor-level aging &middot; approval bottleneck heatmap &middot; auto-refresh every 30 s.</p>
                <p style="margin-top:10px;"><strong style="color:var(--text);">KPIs displayed:</strong> Total in-flight &middot; approved today &middot; SLA breach count &middot; exception rate &middot; avg cycle time &middot; ERP posting queue depth.</p>
            </div>
            <div class="dash__panel">
                <h5>Scheduled Reports</h5>
                <ul>
                    <li>Monthly rent register (by branch)</li>
                    <li>Vendor payment aging</li>
                    <li>GST reconciliation (GSTR-2B match)</li>
                    <li>Approval SLA compliance</li>
                    <li>Exception root-cause analysis</li>
                    <li>Cost center wise spend</li>
                    <li>Custom &mdash; SQL builder for finance team</li>
                </ul>
            </div>
        </div>
        <div class="split" style="margin-top:14px;">
            <div class="split__panel"><h4><i class="fas fa-shield-halved" style="color:var(--brand);margin-right:6px;"></i>Immutable Audit Trail</h4>
                <ul>
                    <li>Every field-level change captured: user, timestamp, IP, before/after value, reason</li>
                    <li>Append-only log &mdash; no records ever modified in-place</li>
                    <li>Cryptographic hash chain &mdash; tampering detectable</li>
                    <li>Retention: 8 years default (RBI norm), configurable</li>
                    <li>Auditor read-only role with time-boxed access grants</li>
                </ul>
            </div>
            <div class="split__panel"><h4><i class="fas fa-file-lines" style="color:var(--brand);margin-right:6px;"></i>Regulator-Ready Exports</h4>
                <ul>
                    <li>One-click export by invoice, vendor, or period</li>
                    <li>Source document + extracted fields + audit log</li>
                    <li>Signed export packages (SHA-256 manifest)</li>
                    <li>Watermarked PDFs with export purpose &amp; recipient</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ S12 — APPROACH 2: BIGGER QUESTION ============ -->
<section class="slide" data-title="Approach 2 — The Bigger Question">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">12 / 19 &middot; Approach 02</div>
            <div>
                <span class="label purple">Approach 02 &middot; Our Recommendation</span>
            </div>
        </div>
        <div class="question">
            <div class="question__q">What if you never had to <em>collect</em> a rent invoice again?</div>
            <p class="question__a">Rent is contractual and recurring. The agreement locks the amount, the escalation clause, the payment date, the GST treatment. Everything the invoice contains is already known the day the lease is signed. So the agreement <strong style="color:var(--brand);">is</strong> the invoice.</p>
            <p class="question__a" style="margin-top:14px;">Approach 2 recommends we invert the flow: the system reads the agreement, and every monthly invoice is generated automatically &mdash; GST computed, approval routed, ERP posted. No collection cycle. No re-entry. Audit is contract-perfect by design.</p>
        </div>
    </div>
</section>

<!-- ============ S13 — CURRENT RENT PROCESS ============ -->
<section class="slide" data-title="Current Rent Process — What Really Happens">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">13 / 19 &middot; Approach 02</div>
            <div>
                <span class="label red">Current Rent Process</span>
                <h2 class="display-2">Every month, the same ritual.</h2>
                <p class="lead">The rent invoice cycle repeats identically each month across every branch. Most of the effort is coordination overhead, not decision-making.</p>
            </div>
        </div>
        <div class="flow">
            <div class="flow__step is-manual"><div class="flow__step__num">01 &middot; Manual</div>
                <h5>Ops chases 500+ landlords</h5><p>Email, WhatsApp, call. Some landlords rural / low-tech.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-manual"><div class="flow__step__num">02 &middot; Manual</div>
                <h5>Invoices arrive haphazardly</h5><p>PDF, image, paper, WhatsApp screenshot. No standard format.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-manual"><div class="flow__step__num">03 &middot; Manual</div>
                <h5>Data entry + GST validation</h5><p>Same amount as last month usually. Same GSTIN. Same PO. Re-keyed anyway.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-manual"><div class="flow__step__num">04 &middot; Manual</div>
                <h5>Approval loop</h5><p>Contract already approved. Payment approval is a duplicate of contract approval.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step"><div class="flow__step__num">05 &middot; System</div>
                <h5>ERP + payment</h5><p>Post to ERP, release payment, file paper. Repeat next month.</p></div>
        </div>
        <div style="margin-top:22px; padding:18px 22px; background:var(--red-soft); border:1px solid #fca5a5; border-radius:12px;">
            <strong style="color:var(--red); font-family:'JetBrains Mono',monospace; font-size:11px; letter-spacing:0.14em; text-transform:uppercase;">The cost of this ritual</strong>
            <p style="margin-top:6px; font-size:14px; color:var(--brand);">Estimated 40&ndash;60% of rent-ops cycle time is spent on invoice collection &amp; re-entry. Nothing that couldn&rsquo;t be derived from the signed agreement.</p>
        </div>
    </div>
</section>

<!-- ============ S14 — APPROACH 2 FUTURE STATE ============ -->
<section class="slide" data-title="Approach 2 — Future State">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">14 / 19 &middot; Approach 02</div>
            <div>
                <span class="label green">Future State &middot; Approach 02</span>
                <h2 class="display-2">Agreement once. Invoices every month, automatically.</h2>
                <p class="lead">The agreement is the contract. The contract is the source of truth for every future invoice.</p>
            </div>
        </div>
        <div class="flow">
            <div class="flow__step is-brand"><div class="flow__step__num">Day 0</div>
                <h5>Agreement in system</h5><p>Signed agreement in encrypted repository. Versioned, access-controlled.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-brand"><div class="flow__step__num">Day 0</div>
                <h5>Term extraction</h5><p>System reads rent, escalation, GST, period, cost center. Reviewer confirms.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-auto"><div class="flow__step__num">Monthly &middot; Auto</div>
                <h5>Invoice generated</h5><p>On scheduled date, invoice auto-generated with correct amount + GST.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-auto"><div class="flow__step__num">Monthly &middot; Auto</div>
                <h5>Approval workflow</h5><p>Same RBAC engine as Approach 1. Contract-backed, one-click approve.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-auto"><div class="flow__step__num">Monthly &middot; Auto</div>
                <h5>ERP posting + Notify</h5><p>Posted to ERP, landlord notified via email + WhatsApp with copy of invoice.</p></div>
        </div>
        <div class="split" style="margin-top:18px;">
            <div class="split__panel"><h4>What Approach 2 removes</h4>
                <ul>
                    <li>Monthly chase-the-landlord loop &mdash; gone</li>
                    <li>Re-entry of the same static fields month after month &mdash; gone</li>
                    <li>Format inconsistency, missing GSTIN, illegible scans &mdash; gone</li>
                    <li>Reconciliation between agreed rent and invoiced rent &mdash; gone</li>
                    <li>Rework when invoice is late or wrong &mdash; gone</li>
                </ul>
            </div>
            <div class="split__panel"><h4>What Approach 2 gives you</h4>
                <ul>
                    <li>Contract-perfect invoicing &mdash; matches agreement by design</li>
                    <li>Live view of rent liability across all branches</li>
                    <li>Escalation calendar (annual, biannual, CPI-linked)</li>
                    <li>Renewal alerts 60 days before lease expiry</li>
                    <li>Landlord relationship handled by portal + notification, not chase</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ S15 — APPROACH 2 SOLUTION FLOW ============ -->
<section class="slide" data-title="Approach 2 — Solution Flow (Detailed)">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">15 / 19 &middot; Approach 02</div>
            <div>
                <span class="label purple">Detailed Architecture</span>
                <h2 class="display-2">Six-layer architecture. Only one layer touches AI.</h2>
                <p class="lead">Term extraction on Day 0 is the only AI-dependent step. Everything downstream is deterministic rule engine.</p>
            </div>
        </div>
        <div class="arch">
            <div class="arch__row">
                <div><h5>01 &middot; Agreement Repository</h5><small>Encrypted &middot; Versioned</small></div>
                <p>Signed agreement in encrypted repository. Versioned, tamper-evident. Access-controlled by branch + role.</p>
            </div>
            <div class="arch__row accent">
                <div><h5>02 &middot; Term Extraction</h5><small>LLM + Reviewer</small></div>
                <p>System extracts: rent amount, escalation clause, escalation frequency, GST, payment date, term period, cost center, variable charges. Reviewer confirms once. Term-set locked to agreement version.</p>
            </div>
            <div class="arch__row">
                <div><h5>03 &middot; Invoice Generation Engine</h5><small>Scheduled &middot; Rule-Based</small></div>
                <p>On payment date, engine reads active term-set, applies escalation if due, computes GST, generates invoice PDF with CSB-branded template. Rule engine only &mdash; no LLM at runtime.</p>
            </div>
            <div class="arch__row">
                <div><h5>04 &middot; Variable Charges Channel</h5><small>Optional Line Items</small></div>
                <p>Utilities, maintenance, one-off charges captured per branch. Linked to invoice as separate line items with independent approval.</p>
            </div>
            <div class="arch__row">
                <div><h5>05 &middot; Approval &amp; ERP</h5><small>Shared With Approach 1</small></div>
                <p>Same approval workflow engine + ERP integration as Approach 1. Contract-backed approvals can be one-click if under threshold.</p>
            </div>
            <div class="arch__row">
                <div><h5>06 &middot; Landlord Notify &amp; Sign-Back</h5><small>Email + WhatsApp</small></div>
                <p>Landlord receives invoice via email + WhatsApp. Optional digital acknowledgement (link click, OTP confirmation, or Aadhaar eSign for legal weight).</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ S16 — APPROACH 2 BUSINESS CASE ============ -->
<section class="slide" data-title="Approach 2 — Business Case">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">16 / 19 &middot; Approach 02</div>
            <div>
                <span class="label green">Business Case</span>
                <h2 class="display-2">Where Approach 2 wins for rent, specifically.</h2>
                <p class="lead">Seven dimensions of comparison. Approach 2 delivers a compounding advantage &mdash; each cycle is cheaper than the last.</p>
            </div>
        </div>
        <table class="tbl">
            <thead><tr><th>Dimension</th><th>Current Process</th><th>Approach 2</th><th>Delta</th></tr></thead>
            <tbody>
                <tr><td><strong>Ops effort (rent)</strong></td><td>~40&ndash;60% of team cycle</td><td>~5% (exception only)</td><td><span class="pill">-90%</span></td></tr>
                <tr><td><strong>Error rate</strong></td><td>3&ndash;8% (typo, mismatch)</td><td>&lt; 0.5% (rule-driven)</td><td><span class="pill">-95%</span></td></tr>
                <tr><td><strong>Landlord experience</strong></td><td>Monthly ask/chase</td><td>Auto-delivery + notify</td><td><span class="pill">Zero touch</span></td></tr>
                <tr><td><strong>Audit trail</strong></td><td>Scattered per invoice</td><td>Contract &rarr; invoice chain</td><td><span class="pill">Contract-perfect</span></td></tr>
                <tr><td><strong>GST accuracy</strong></td><td>Depends on landlord invoice</td><td>System-computed</td><td><span class="pill">Deterministic</span></td></tr>
                <tr><td><strong>Escalation handling</strong></td><td>Manual, easily missed</td><td>Calendar engine, auto-applied</td><td><span class="pill">Zero misses</span></td></tr>
                <tr><td><strong>Scalability</strong></td><td>Linear with headcount</td><td>Flat with volume</td><td><span class="pill">10x branches, 0 new FTE</span></td></tr>
            </tbody>
        </table>
    </div>
</section>

<!-- ============ S17 — COMPARISON MATRIX ============ -->
<section class="slide" data-title="Approach 1 vs 2 — Side-by-Side">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">17 / 19 &middot; Comparison</div>
            <div>
                <span class="label">Approach 01 vs Approach 02</span>
                <h2 class="display-2">Where each approach wins.</h2>
                <p class="lead">Neither is universally better. Our recommendation: run both, each on the invoice type it&rsquo;s built for. Same platform, shared infrastructure.</p>
            </div>
        </div>
        <div class="matrix">
        <table>
            <thead><tr><th>Dimension</th><th>Approach 01 &mdash; AI-OCR</th><th class="recommend">Approach 02 &mdash; Agreement-Based</th></tr></thead>
            <tbody>
                <tr><td><strong>Fit for vendor invoices</strong></td><td>Best fit &mdash; heterogeneous invoices</td><td class="recommend">Not applicable</td></tr>
                <tr><td><strong>Fit for rent invoices</strong></td><td>Works but leaves value on the table</td><td class="recommend">Best fit &mdash; contractual, recurring</td></tr>
                <tr><td><strong>Ops effort reduction</strong></td><td>~80%</td><td class="recommend">~90%+ for rent</td></tr>
                <tr><td><strong>Audit posture</strong></td><td>Strong (immutable log)</td><td class="recommend">Contract-perfect</td></tr>
                <tr><td><strong>Change management</strong></td><td>Low &mdash; mirrors current process</td><td class="recommend">Moderate &mdash; landlord onboarding</td></tr>
                <tr><td><strong>ERP integration</strong></td><td>Same adapter pattern</td><td class="recommend">Same adapter pattern</td></tr>
                <tr><td><strong>Long-term ROI</strong></td><td>Linear savings</td><td class="recommend">Compounding &mdash; better each cycle</td></tr>
                <tr><td><strong>Scalability</strong></td><td>Linear with volume</td><td class="recommend">Flat &mdash; 10&times; landlords, 0 new FTE</td></tr>
                <tr><td><strong>Landlord experience</strong></td><td>Same as today</td><td class="recommend">Zero-touch, portal-driven</td></tr>
            </tbody>
        </table>
        <div class="verdict">
            <strong>Our Recommendation</strong>
            Run <strong style="text-decoration:underline;">both</strong> approaches on a shared platform. Approach 01 for vendor invoices (heterogeneous, ad-hoc). Approach 02 for rent invoices (contractual, recurring). Same infrastructure, same team, same audit trail. Small incremental investment, disproportionate long-term value.
        </div>
        </div>
    </div>
</section>

<!-- ============ S18 — SECURITY, COMPLIANCE, AUDIT ============ -->
<section class="slide" data-title="Security, Compliance, Audit">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">18 / 19 &middot; Non-Functional</div>
            <div>
                <span class="label">Security &middot; Compliance &middot; Audit</span>
                <h2 class="display-2">Bank-grade non-functionals.</h2>
                <p class="lead">The layer the CISO team will pay closest attention to. All items below are baseline; specific frameworks (RBI IT Framework, DPDP) can be extended in Phase 1.</p>
            </div>
        </div>
        <div class="sec-grid">
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-lock"></i></div>
                <h6>Encryption at rest</h6><small>AES-256, per-tenant keys</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-arrow-right-arrow-left"></i></div>
                <h6>Encryption in transit</h6><small>TLS 1.3, mutual auth</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-key"></i></div>
                <h6>RBAC &amp; SoD</h6><small>Fine-grained; separation of duties</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-user-shield"></i></div>
                <h6>SSO &amp; MFA</h6><small>SAML / OIDC + TOTP mandatory</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-shield-halved"></i></div>
                <h6>VAPT</h6><small>Pre-go-live + annual + on-change</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-clipboard-check"></i></div>
                <h6>ISO 27001-aligned</h6><small>Controls mapped, audit-ready</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-scale-balanced"></i></div>
                <h6>DPDP &amp; RBI-ready</h6><small>Consent, purpose limitation, DSR</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-globe"></i></div>
                <h6>India data residency</h6><small>All storage &amp; compute in India</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-clock-rotate-left"></i></div>
                <h6>Immutable audit log</h6><small>Append-only, hash-chained</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-server"></i></div>
                <h6>On-prem or cloud</h6><small>Deploy on CSB DC or private tenant</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-life-ring"></i></div>
                <h6>DR &amp; BCP</h6><small>Multi-AZ, RTO&lt;4h, RPO&lt;15min</small></div>
            <div class="sec-tile"><div class="sec-tile__ico"><i class="fas fa-file-signature"></i></div>
                <h6>Digital sign / eSign</h6><small>Aadhaar eSign, DSC support</small></div>
        </div>
    </div>
</section>

<!-- ============ S19 — QUESTIONS + NEXT STEPS ============ -->
<section class="slide final" data-title="Questions for CSB + Next Steps">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">19 / 19 &middot; Close</div>
            <div>
                <span class="label gold">Questions &amp; Next Steps</span>
                <h2 class="display-2">What we need from CSB. What happens next.</h2>
                <p class="lead">Eight questions we need answered to convert this session into a signed SoW. Three concrete next steps &mdash; happy to start any of them this week.</p>
            </div>
        </div>
        <div class="asks">
            <div class="ask"><div class="ask__num">Question 01</div><p><strong>ERP.</strong> Which ERP does CSB use for AP posting &mdash; Finacle, SAP, Oracle, custom?</p></div>
            <div class="ask"><div class="ask__num">Question 02</div><p><strong>Volume.</strong> Approximate monthly volume &mdash; rent invoices vs vendor invoices?</p></div>
            <div class="ask"><div class="ask__num">Question 03</div><p><strong>DoA matrix.</strong> Can we get the current Delegation of Authority matrix?</p></div>
            <div class="ask"><div class="ask__num">Question 04</div><p><strong>Agreements.</strong> Rent agreement templates &mdash; standardised or many variants?</p></div>
            <div class="ask"><div class="ask__num">Question 05</div><p><strong>Integration.</strong> Preferred ERP integration protocol &mdash; REST / SFTP / MQ?</p></div>
            <div class="ask"><div class="ask__num">Question 06</div><p><strong>Deployment.</strong> On-premise inside CSB DC, or private cloud tenant (India region)?</p></div>
            <div class="ask"><div class="ask__num">Question 07</div><p><strong>Timeline.</strong> When would CSB want MVP live &mdash; end of Q3 FY26 or later?</p></div>
            <div class="ask"><div class="ask__num">Question 08</div><p><strong>Pilot scope.</strong> If Approach 2, which 2&ndash;3 branches would pilot &amp; what volume?</p></div>
        </div>
        <div class="contact-block" style="margin-top:36px;">
            <div class="contact-item"><h6>Immediate Next Steps</h6><strong>Technical workshop</strong><small>1-week deep-dive with your IT / ops / finance teams</small></div>
            <div class="contact-item"><h6>Formal Response</h6><strong>SoW &amp; Commercial</strong><small>Draft ready 5 business days post-workshop</small></div>
            <div class="contact-item"><h6>Kick-Off</h6><strong>Phase 1 launch</strong><small>Discovery within 2 weeks of sign-off</small></div>
        </div>
        <div style="margin-top:32px; padding:22px 26px; background:var(--bg); border:1px solid var(--line-2); border-radius:14px; text-align:left; max-width:820px; margin-inline:auto;">
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px; font-size:13.5px;">
                <div>
                    <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.16em; text-transform:uppercase; color:var(--text-mute); margin-bottom:6px;">Primary Contact</div>
                    <strong style="font-size:14.5px; color:var(--text); display:block;">Loy Thomas</strong>
                    <small style="color:var(--text-4);">Co-Founder &amp; Solution Architect</small><br>
                    <a href="mailto:loy@itdservices.in" style="color:var(--accent-2); font-family:'JetBrains Mono',monospace; font-size:12px;">loy@itdservices.in</a><br>
                    <span style="font-family:'JetBrains Mono',monospace; font-size:12px; color:var(--text-3);">+91 96996 66088</span>
                </div>
                <div>
                    <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.16em; text-transform:uppercase; color:var(--text-mute); margin-bottom:6px;">Alternate</div>
                    <strong style="font-size:14.5px; color:var(--text); display:block;">ITD Services Team</strong>
                    <small style="color:var(--text-4);">Business Response Desk</small><br>
                    <a href="mailto:info@itdgrowthlabs.com" style="color:var(--accent-2); font-family:'JetBrains Mono',monospace; font-size:12px;">info@itdgrowthlabs.com</a><br>
                    <a href="https://wa.me/919699666088" target="_blank" rel="noopener" style="font-family:'JetBrains Mono',monospace; font-size:12px; color:var(--text-3);">WhatsApp &rarr; +91 96996 66088</a>
                </div>
            </div>
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

<div class="kbd-hint">Use &larr; &rarr; keys, click dots, or swipe &middot; Notes on your phone</div>

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
