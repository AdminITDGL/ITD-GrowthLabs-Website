<?php
/**
 * ITD Services — Solution Consulting Session for CSB Bank
 * -------------------------------------------------------
 * Deck for the SECOND meeting: rent + vendor invoice automation.
 * Two approaches presented consulting-style (not a product pitch):
 *   Approach 1 — AI-OCR Invoice Processing (what CSB asked for)
 *   Approach 2 — Agreement-Based Invoice Automation (our recommendation)
 * Confidential. Prepared for CSB Bank Procurement / IT / Ops / Senior Mgmt.
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="Solution consulting session for CSB Bank — rent & vendor invoice automation. Two approaches: AI-OCR invoice processing (as requested) and agreement-based automation (recommended). Prepared by ITD Services.">
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
h1,h2,h3,h4,h5,h6{ font-family:'Inter',sans-serif; font-weight:700; letter-spacing:-0.025em;
      color:var(--text); margin:0; line-height:1.15; }
p{ margin:0; color:var(--text-3); }
.mono{ font-family:'JetBrains Mono','Menlo',monospace; }
::selection{ background:var(--accent-soft); color:var(--accent-2); }

/* Deck */
.deck{ position:fixed; inset:0; overflow:hidden; background:var(--bg); }
.deck__track{ display:flex; height:100%; will-change:transform;
      transition:transform .55s cubic-bezier(0.77,0,0.18,1); }
.slide{ flex:0 0 100vw; height:100vh; overflow-y:auto; overflow-x:hidden;
      -webkit-overflow-scrolling:touch;
      padding:calc(var(--chrome-top) + 24px) 28px calc(var(--chrome-bottom) + 24px);
      background:var(--bg); scrollbar-width:thin; scrollbar-color:var(--line-2) transparent; }
.slide::-webkit-scrollbar{ width:6px; }
.slide::-webkit-scrollbar-thumb{ background:var(--line-2); border-radius:3px; }
.slide-inner{ width:100%; max-width:1200px; margin:0 auto;
      min-height:calc(100vh - var(--chrome-top) - var(--chrome-bottom) - 48px);
      display:flex; flex-direction:column; justify-content:center;
      opacity:0; transform:translateY(14px);
      transition:opacity .5s ease .1s, transform .5s ease .1s; }
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
.brand__mark{ width:48px; height:30px; background:var(--bg); border:2px solid var(--brand);
      color:var(--brand); font-weight:900; font-size:12px; letter-spacing:0.04em;
      display:flex; align-items:center; justify-content:center; font-family:'Inter',sans-serif; }
.brand__txt{ display:flex; flex-direction:column; line-height:1.1; }
.brand__txt strong{ font-size:14px; font-weight:700; letter-spacing:-0.01em; }
.brand__txt small{ font-family:'JetBrains Mono',monospace; font-size:9.5px; font-weight:500;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--text-mute); margin-top:1px; }
.slide-title{ flex:1; text-align:center; font-size:13px; font-weight:600; color:var(--text);
      letter-spacing:-0.01em; padding:0 16px;
      overflow:hidden; text-overflow:ellipsis; white-space:nowrap; }
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
.nav-btn:hover{ border-color:var(--text); transform:translateY(-1px); }
.nav-btn:disabled{ opacity:0.3; cursor:not-allowed; transform:none; }
.nav-btn:disabled:hover{ border-color:var(--line-2); }
.dots{ display:flex; gap:5px; align-items:center; justify-content:center;
      flex:1; max-width:74%; flex-wrap:wrap; padding:0 12px; }
.dot{ width:6px; height:6px; border-radius:50%; background:var(--text-dim);
      cursor:pointer; border:none; padding:0;
      transition:background .2s ease, width .25s ease; }
.dot.active{ background:var(--text); width:18px; border-radius:3px; }
.dot:hover:not(.active){ background:var(--text-mute); }
@media (max-width:700px){
    .chrome-bottom{ padding:0 16px; }
    .nav-btn{ width:40px; height:40px; font-size:13px; }
    .dot{ width:5px; height:5px; }
    .dot.active{ width:14px; }
}

/* Presenter notes toggle */
.notes-btn{ position:fixed; right:24px; top:calc(var(--chrome-top) + 12px); z-index:60;
      padding:6px 12px; border-radius:20px; background:var(--surface-2);
      border:1px solid var(--line-2); color:var(--text-3);
      font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:600;
      letter-spacing:0.14em; text-transform:uppercase; cursor:pointer;
      display:inline-flex; align-items:center; gap:6px;
      transition:background .2s ease, color .2s ease, border-color .2s ease; }
.notes-btn:hover{ background:var(--brand); color:#fff; border-color:var(--brand); }
.notes-btn.is-open{ background:var(--brand); color:#fff; border-color:var(--brand); }
.notes-btn::before{ content:''; display:inline-block; width:6px; height:6px; border-radius:50%;
      background:var(--gold); }
.notes-btn.is-open::before{ background:#fff; }
@media (max-width:700px){ .notes-btn{ right:16px; top:calc(var(--chrome-top) + 8px); padding:5px 10px; font-size:9.5px; } }
@media print{ .notes-btn{ display:none !important; } }

/* Notes drawer */
.notes-drawer{ position:fixed; right:16px; bottom:calc(var(--chrome-bottom) + 12px);
      top:calc(var(--chrome-top) + 60px);
      width:min(420px, calc(100vw - 32px)); z-index:55;
      background:var(--bg); border:1px solid var(--line-2); border-radius:14px;
      box-shadow:0 20px 60px rgba(15,37,67,0.16); overflow:hidden;
      display:flex; flex-direction:column;
      transform:translateX(calc(100% + 40px)); opacity:0; pointer-events:none;
      transition:transform .35s ease, opacity .25s ease; }
.notes-drawer.is-open{ transform:translateX(0); opacity:1; pointer-events:auto; }
.notes-drawer__head{ padding:16px 20px; border-bottom:1px solid var(--line);
      display:flex; align-items:center; justify-content:space-between;
      background:var(--surface-1); }
.notes-drawer__head h4{ font-size:12px; font-weight:700; letter-spacing:0.14em;
      text-transform:uppercase; color:var(--text-4);
      font-family:'JetBrains Mono',monospace; }
.notes-drawer__close{ background:none; border:none; color:var(--text-3);
      font-size:16px; cursor:pointer; padding:4px 8px; }
.notes-drawer__body{ padding:18px 20px; overflow-y:auto; flex:1;
      scrollbar-width:thin; scrollbar-color:var(--line-2) transparent; }
.notes-drawer__body::-webkit-scrollbar{ width:5px; }
.notes-drawer__body::-webkit-scrollbar-thumb{ background:var(--line-2); border-radius:3px; }
.notes-block{ margin-bottom:18px; }
.notes-block:last-child{ margin-bottom:0; }
.notes-block h5{ font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:700;
      letter-spacing:0.16em; text-transform:uppercase; color:var(--gold);
      margin-bottom:6px; }
.notes-block p, .notes-block li{ font-size:13px; line-height:1.55; color:var(--text-2); }
.notes-block ul{ padding-left:16px; margin:0; }
.notes-block li{ margin-bottom:4px; }
.notes-block.km h5{ color:var(--accent-2); }
.notes-block.km p{ font-weight:600; color:var(--brand); }

/* Common slide styles */
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
@media (max-width:600px){ .label{ font-size:10px; margin-bottom:16px; } }

.display-1{ font-size:clamp(36px,7.5vw,72px); line-height:1.02; letter-spacing:-0.035em; font-weight:700; }
.display-2{ font-size:clamp(26px,4.6vw,48px); line-height:1.1; letter-spacing:-0.03em; font-weight:700; }
.display-3{ font-size:clamp(20px,3vw,32px); line-height:1.22; letter-spacing:-0.02em; font-weight:700; }
.lead{ font-size:clamp(15px,1.35vw,17px); line-height:1.65; color:var(--text-3); font-weight:400; max-width:720px; }

/* Cover */
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
.cover__meta{ display:grid; grid-template-columns:repeat(4,auto); justify-content:center;
      gap:26px 44px; margin-top:44px; }
.cover__meta-item{ display:flex; flex-direction:column; gap:4px;
      font-family:'JetBrains Mono',monospace; text-align:left; }
.cover__meta-item small{ font-size:9.5px; font-weight:500; letter-spacing:0.18em;
      text-transform:uppercase; color:var(--text-mute); }
.cover__meta-item strong{ font-size:13px; font-weight:600; color:var(--text); letter-spacing:0; }
@media (max-width:700px){ .cover__meta{ grid-template-columns:repeat(2,auto); gap:22px 36px; margin-top:34px; } }
.cover__conf{ margin-top:36px; font-family:'JetBrains Mono',monospace; font-size:10.5px;
      color:var(--text-mute); letter-spacing:0.14em; text-transform:uppercase; }

/* Section head reusable */
.head-row{ display:grid; grid-template-columns:auto 1fr; gap:24px; align-items:end; margin-bottom:32px; }
.head-row .num{ font-family:'JetBrains Mono',monospace; font-size:13px;
      letter-spacing:0.14em; color:var(--text-mute); }
.head-row .lead{ margin-top:14px; }
@media (max-width:700px){ .head-row{ grid-template-columns:1fr; gap:10px; } }

/* Agenda list */
.agenda{ display:grid; grid-template-columns:repeat(2,1fr); gap:14px; margin-top:12px; }
.agenda__item{ display:flex; gap:14px; padding:16px 18px; background:var(--surface-1);
      border:1px solid var(--line); border-radius:12px; }
.agenda__num{ font-family:'JetBrains Mono',monospace; font-size:22px; font-weight:700;
      color:var(--brand); line-height:1; min-width:34px; }
.agenda__txt strong{ display:block; font-size:14.5px; font-weight:600; color:var(--text);
      margin-bottom:4px; }
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

/* Two-approach card comparison */
.paths{ display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-top:16px; }
.path{ background:var(--surface-1); border:1px solid var(--line); border-radius:16px;
      padding:26px; display:flex; flex-direction:column; }
.path--recommended{ background:linear-gradient(180deg,#f0f7ff 0%,#f8fbff 100%);
      border-color:var(--accent-2); }
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
      font-family:'JetBrains Mono',monospace; font-size:11px; color:var(--text-4);
      letter-spacing:0.06em; }
@media (max-width:800px){ .paths{ grid-template-columns:1fr; } }

/* Flow diagrams (horizontal step chain) */
.flow{ display:flex; flex-wrap:wrap; align-items:stretch; gap:8px; margin-top:14px; }
.flow__step{ flex:1; min-width:150px; padding:14px; background:var(--bg);
      border:1px solid var(--line); border-radius:10px;
      display:flex; flex-direction:column; }
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
.pain{ background:var(--red-soft); border:1px solid #fca5a5; border-radius:11px;
      padding:14px 14px 12px; }
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

/* Field table for OCR extraction */
.tbl{ width:100%; border-collapse:separate; border-spacing:0; margin-top:14px;
      background:var(--bg); border:1px solid var(--line); border-radius:12px; overflow:hidden;
      font-size:13px; }
.tbl th, .tbl td{ padding:11px 14px; text-align:left; border-bottom:1px solid var(--line);
      vertical-align:top; }
.tbl th{ background:var(--surface-2); font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; color:var(--text-4);
      font-family:'JetBrains Mono',monospace; }
.tbl tr:last-child td{ border-bottom:0; }
.tbl td.mono{ font-family:'JetBrains Mono',monospace; font-size:12px; color:var(--text-2); }
.tbl td strong{ color:var(--text); font-weight:600; }
.tbl .pill{ display:inline-block; padding:2px 8px; border-radius:10px;
      font-family:'JetBrains Mono',monospace; font-size:10px; font-weight:600;
      background:var(--accent-soft); color:var(--accent-2); letter-spacing:0.06em; }

/* Approval workflow */
.aprv{ display:grid; grid-template-columns:repeat(4,1fr); gap:10px; margin-top:14px; }
.aprv__step{ background:var(--surface-1); border:1px solid var(--line);
      border-radius:12px; padding:16px 14px; text-align:center; }
.aprv__step__lvl{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:600;
      letter-spacing:0.14em; color:var(--brand); text-transform:uppercase; margin-bottom:6px; }
.aprv__step h5{ font-size:13.5px; margin-bottom:4px; }
.aprv__step small{ font-size:11.5px; color:var(--text-4); display:block; }
@media (max-width:800px){ .aprv{ grid-template-columns:repeat(2,1fr); } }
@media (max-width:520px){ .aprv{ grid-template-columns:1fr; } }

/* Split panels */
.split{ display:grid; grid-template-columns:1fr 1fr; gap:14px; margin-top:14px; }
.split__panel{ background:var(--bg); border:1px solid var(--line); border-radius:14px; padding:22px; }
.split__panel h4{ font-size:16px; margin-bottom:12px; }
.split__panel ul{ margin:0; padding-left:16px; }
.split__panel li{ font-size:13px; color:var(--text-3); padding:4px 0; line-height:1.5; }
@media (max-width:800px){ .split{ grid-template-columns:1fr; } }

/* Dashboard wireframe grid */
.dash{ display:grid; grid-template-columns:2fr 1fr; gap:12px; margin-top:14px; }
.dash__panel{ background:var(--surface-1); border:1px solid var(--line);
      border-radius:12px; padding:16px 18px; }
.dash__panel h5{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:500;
      letter-spacing:0.14em; text-transform:uppercase; color:var(--text-4); margin-bottom:12px; }
.dash__panel p, .dash__panel li{ font-size:12.5px; color:var(--text-3); line-height:1.55; }
.dash__panel ul{ margin:0; padding-left:16px; }
@media (max-width:800px){ .dash{ grid-template-columns:1fr; } }

/* Roadmap phases */
.roadmap{ display:grid; grid-template-columns:repeat(4,1fr); gap:12px; margin-top:14px;
      position:relative; }
.roadmap::before{ content:''; position:absolute; left:0; right:0; top:50px; height:2px;
      background:linear-gradient(90deg,transparent 0%,var(--line-2) 8%,var(--line-2) 92%,transparent 100%); z-index:0; }
.phase{ background:var(--bg); border:1px solid var(--line); border-radius:12px;
      padding:18px 16px 20px; position:relative; z-index:1; }
.phase__wk{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:600;
      letter-spacing:0.14em; color:var(--brand); text-transform:uppercase; margin-bottom:6px; }
.phase h5{ font-size:13.5px; margin-bottom:8px; letter-spacing:-0.01em; }
.phase ul{ margin:0; padding-left:15px; }
.phase li{ font-size:11.5px; color:var(--text-4); padding:2px 0; line-height:1.4; }
@media (max-width:900px){ .roadmap{ grid-template-columns:repeat(2,1fr); } .roadmap::before{ display:none; } }
@media (max-width:520px){ .roadmap{ grid-template-columns:1fr; } }

/* Assumption / question list */
.asks{ display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-top:14px; }
.ask{ padding:14px 16px; background:var(--gold-soft); border:1px solid #fcd34d; border-radius:10px; }
.ask__num{ font-family:'JetBrains Mono',monospace; font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; color:var(--gold); text-transform:uppercase; margin-bottom:4px; }
.ask p{ font-size:13px; color:var(--brand); line-height:1.45; }
@media (max-width:700px){ .asks{ grid-template-columns:1fr; } }

/* Big question hero */
.question{ display:flex; flex-direction:column; align-items:flex-start; }
.question__q{ font-size:clamp(28px,5vw,52px); line-height:1.12; letter-spacing:-0.03em;
      color:var(--brand); font-weight:700; max-width:900px; }
.question__q em{ font-style:normal; color:var(--accent-2); }
.question__a{ margin-top:20px; font-size:15.5px; line-height:1.65; color:var(--text-3);
      max-width:780px; }

/* Comparison matrix */
.matrix{ margin-top:16px; overflow-x:auto; }
.matrix table{ width:100%; border-collapse:separate; border-spacing:0; font-size:13px;
      background:var(--bg); border:1px solid var(--line); border-radius:12px; overflow:hidden; }
.matrix th, .matrix td{ padding:12px 14px; text-align:left; border-bottom:1px solid var(--line);
      vertical-align:top; }
.matrix th{ background:var(--surface-2); font-size:10.5px; font-weight:700;
      letter-spacing:0.14em; text-transform:uppercase; color:var(--text-4);
      font-family:'JetBrains Mono',monospace; }
.matrix th.recommend{ background:var(--accent-soft); color:var(--accent-2); }
.matrix td.recommend{ background:#f0f7ff; }
.matrix tr:last-child td{ border-bottom:0; }
.matrix .verdict{ background:var(--brand); color:#fff; padding:14px; border-radius:12px;
      margin-top:14px; font-size:14px; line-height:1.55; }
.matrix .verdict strong{ color:#fff; display:block; margin-bottom:4px;
      font-family:'JetBrains Mono',monospace; font-size:10.5px; letter-spacing:0.14em;
      text-transform:uppercase; }

/* Challenge–solution matrix */
.chal-matrix{ margin-top:14px; }
.chal-row{ display:grid; grid-template-columns:1fr 1fr; gap:0; border:1px solid var(--line);
      border-radius:10px; overflow:hidden; margin-bottom:8px; }
.chal-row__c{ padding:12px 14px; background:var(--red-soft); border-right:1px solid #fca5a5; }
.chal-row__s{ padding:12px 14px; background:var(--green-soft); }
.chal-row__c h6, .chal-row__s h6{ font-family:'JetBrains Mono',monospace; font-size:9.5px;
      font-weight:700; letter-spacing:0.14em; text-transform:uppercase;
      margin-bottom:4px; }
.chal-row__c h6{ color:var(--red); }
.chal-row__s h6{ color:var(--green); }
.chal-row__c strong{ font-size:13px; color:var(--brand); font-weight:600; display:block; margin-bottom:2px; }
.chal-row__s strong{ font-size:13px; color:var(--brand); font-weight:600; display:block; margin-bottom:2px; }
.chal-row p{ font-size:11.5px; color:var(--text-3); line-height:1.45; }
@media (max-width:700px){ .chal-row{ grid-template-columns:1fr; } .chal-row__c{ border-right:0; border-bottom:1px solid #fca5a5; } }

/* Security tiles */
.sec-grid{ display:grid; grid-template-columns:repeat(4,1fr); gap:10px; margin-top:14px; }
.sec-tile{ background:var(--surface-1); border:1px solid var(--line);
      border-radius:11px; padding:14px 14px; }
.sec-tile__ico{ color:var(--brand); font-size:16px; margin-bottom:8px; }
.sec-tile h6{ font-size:12.5px; margin-bottom:2px; letter-spacing:-0.01em; }
.sec-tile small{ font-size:11px; color:var(--text-4); }
@media (max-width:800px){ .sec-grid{ grid-template-columns:repeat(2,1fr); } }
@media (max-width:520px){ .sec-grid{ grid-template-columns:1fr; } }

/* Final CTA / next steps */
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

/* Kbd hint */
.kbd-hint{ position:fixed; bottom:14px; left:50%; transform:translateX(-50%);
      z-index:40; font-family:'JetBrains Mono',monospace; font-size:9.5px; letter-spacing:0.14em;
      color:var(--text-mute); text-transform:uppercase; opacity:0.7;
      pointer-events:none; }
@media (max-width:700px){ .kbd-hint{ display:none; } }
</style>
</head>
<body>

<!-- ============================================================
     TOP CHROME
     ============================================================ -->
<header class="chrome-top">
    <div class="brand">
        <div class="brand__mark">ITD</div>
        <div class="brand__txt">
            <strong>ITD Services</strong>
            <small>Solution Consulting</small>
        </div>
    </div>
    <div class="slide-title" id="slideTitle">Cover</div>
    <div class="counter">
        <span id="counterN">01</span> / 25
        <span class="counter__bar"><span class="counter__fill" id="counterFill"></span></span>
    </div>
</header>

<button type="button" class="notes-btn" id="notesBtn" aria-expanded="false" aria-controls="notesDrawer">
    Notes
</button>

<!-- ============================================================
     PRESENTER NOTES DRAWER
     ============================================================ -->
<aside class="notes-drawer" id="notesDrawer" aria-hidden="true">
    <div class="notes-drawer__head">
        <h4 id="notesTitle">Slide 1 · Notes</h4>
        <button type="button" class="notes-drawer__close" id="notesClose" aria-label="Close notes">&#x2715;</button>
    </div>
    <div class="notes-drawer__body" id="notesBody"><!-- populated by JS --></div>
</aside>

<!-- ============================================================
     DECK
     ============================================================ -->
<main class="deck">
<div class="deck__track" id="deckTrack">

<!-- ============================================================
     S01 — COVER
     ============================================================ -->
<section class="slide cover"
    data-title="Cover"
    data-objective="Set the frame. Position this as a solution consulting workshop for the CSB Bank team — not a product pitch."
    data-notes="Open with a brief acknowledgement of the productive first meeting. Reinforce that this session is entirely focused on the solution approach as requested by CSB. Note that we've prepared two approaches — the one they asked for, and a recommendation we believe delivers greater long-term value. Time budget: 45–60 min presentation + 30 min discussion."
    data-key="This is a working session, not a pitch. Two solution approaches, presented consulting-style."
    data-questions="Do you have any additional stakeholders joining today?|Is 60 minutes still the right time budget for this session?|Is there a specific pain point from the first meeting you'd like us to focus on first?">
    <div class="slide-inner">
        <span class="cover__pill"><span class="cover__pill__dot"></span>Confidential &middot; Solution Consulting Session &middot; 2026</span>
        <h1 class="display-1">Rent &amp; Vendor Invoice Automation
            <span class="sub">A solution consulting session for CSB Bank.</span></h1>
        <div class="cover__meta">
            <div class="cover__meta-item"><small>Prepared By</small><strong>ITD Services</strong></div>
            <div class="cover__meta-item"><small>Prepared For</small><strong>CSB Bank</strong></div>
            <div class="cover__meta-item"><small>Session</small><strong>Meeting 02 &middot; Solution</strong></div>
            <div class="cover__meta-item"><small>Version</small><strong>v1.0 &middot; 2026-07</strong></div>
        </div>
        <div class="cover__conf">Confidential &middot; For CSB Bank internal use only</div>
    </div>
</section>

<!-- ============================================================
     S02 — AGENDA
     ============================================================ -->
<section class="slide"
    data-title="Session Agenda"
    data-objective="Set expectations for what today covers, in what order, and what CSB should be prepared to discuss."
    data-notes="Walk through the agenda quickly. Emphasise that after the recap of our capabilities (5 min max), we'll spend the bulk of the time on the two approaches. Approach 1 is what CSB asked for. Approach 2 is our recommendation — we'll explain why and be honest about challenges. We'll finish with a side-by-side comparison and questions we need CSB to answer to move forward."
    data-key="Structure: Understanding → Two approaches → Comparison → Q&A. Two hours, six sections."
    data-questions="Is the sequence okay, or would you prefer to see Approach 2 (our recommendation) first?|Should we defer the security & compliance discussion to a separate session with your CISO team?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">02 / 25</div>
            <div>
                <span class="label">Session Agenda</span>
                <h2 class="display-2">What we'll cover in the next 60 minutes.</h2>
                <p class="lead">Six sections. Roughly balanced between understanding, the two solution approaches, and the questions we need CSB to help us answer.</p>
            </div>
        </div>
        <div class="agenda">
            <div class="agenda__item">
                <span class="agenda__num">01</span>
                <div class="agenda__txt"><strong>Our understanding of the requirement</strong><small>5 min</small>
                    <p>Playback of the scope we captured from meeting 01, to confirm alignment.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">02</span>
                <div class="agenda__txt"><strong>Relevant capabilities &mdash; brief recap</strong><small>3 min</small>
                    <p>Only the capabilities that matter for this engagement. No re-pitch.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">03</span>
                <div class="agenda__txt"><strong>Approach 1 &mdash; AI-OCR Invoice Processing</strong><small>15 min</small>
                    <p>The solution CSB Bank asked for. Architecture, workflow, integration, roadmap.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">04</span>
                <div class="agenda__txt"><strong>Approach 2 &mdash; Agreement-Based Automation</strong><small>15 min</small>
                    <p>Our recommendation for rent invoices. Why it's better, and where it's harder.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">05</span>
                <div class="agenda__txt"><strong>Side-by-side comparison &amp; recommendation</strong><small>7 min</small>
                    <p>Where each approach wins. Our recommended hybrid.</p></div>
            </div>
            <div class="agenda__item">
                <span class="agenda__num">06</span>
                <div class="agenda__txt"><strong>Questions for CSB Bank &amp; next steps</strong><small>15 min</small>
                    <p>Assumptions we need to validate, decisions we need help with, immediate next actions.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S03 — OUR UNDERSTANDING
     ============================================================ -->
<section class="slide"
    data-title="Our Understanding of the Requirement"
    data-objective="Play back the requirement precisely so CSB can correct anything we've misunderstood before we spend time on the approach."
    data-notes="Read the requirement blocks aloud. Pause between sections and ask 'anything to correct or add?' Explicit playback removes ambiguity later. Note the 12 OCR fields carefully — if any are wrong or missing, we want to know now, not after we've architected around them."
    data-key="Rent + vendor invoice management, OCR extraction of 12 fields, GST computation & validation, RBAC approvals, ERP integration, dashboard, reports, audit trail."
    data-questions="Is the vendor invoice population separate from rent, or should they share the same UX?|Are there any fields beyond the 12 we should also capture?|What's the current monthly volume for rent invoices vs vendor invoices?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">03 / 25</div>
            <div>
                <span class="label">Understanding</span>
                <h2 class="display-2">What CSB Bank asked us to solve.</h2>
                <p class="lead">Our playback of the scope captured from meeting 01. If anything here is inaccurate or incomplete, please stop us — the approach on the following slides is built on this understanding.</p>
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

<!-- ============================================================
     S04 — RELEVANT CAPABILITIES (recap)
     ============================================================ -->
<section class="slide"
    data-title="ITD Services — Relevant Capabilities"
    data-objective="Anchor credibility for the solution that follows — without re-pitching the company profile."
    data-notes="Keep this deliberately short. Reference the company profile PDF shared after meeting 01 for the full picture. These are the ten capabilities relevant to this specific engagement. Highlight OCR + Enterprise SaaS + ERP integration — these carry the most weight for what CSB is asking. If asked for proof points, mention: 300+ enterprise clients, production-grade OCR pipelines, banking-adjacent enterprise SaaS platforms."
    data-key="Ten capabilities on the table. Full profile already shared; we're only reiterating what's directly relevant to invoice automation."
    data-questions="Would you like a deeper walk-through of any specific capability?|Do you want references from clients using our OCR pipelines in production?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">04 / 25</div>
            <div>
                <span class="label">Capabilities Recap</span>
                <h2 class="display-2">The ten capabilities we're bringing to this engagement.</h2>
                <p class="lead">Only what's directly relevant to invoice automation. Full company profile was shared post meeting 01 &mdash; happy to revisit anything.</p>
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

<!-- ============================================================
     S05 — TWO APPROACHES OVERVIEW
     ============================================================ -->
<section class="slide"
    data-title="Two Solution Approaches"
    data-objective="Introduce both approaches side-by-side so the client sees the choice architecture before we deep-dive."
    data-notes="This is the pivot slide. Explain that we heard the requirement clearly, but our job is to propose the best solution, not just the requested one. Approach 1 is straightforward and safe. Approach 2 is more transformative but more work upfront. Tell them explicitly: we recommend running both — Approach 1 for vendor invoices, Approach 2 for rent. Rent is where the automation dividend is highest because the terms are contractual and recurring."
    data-key="We propose BOTH approaches in a hybrid: Approach 1 (AI-OCR) for vendors, Approach 2 (Agreement-based) for rent. Different problems, different solutions."
    data-questions="Are you open to running both approaches in parallel, or would you prefer one before the other?|Is there internal preference from procurement / IT to keep everything on a single platform?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">05 / 25</div>
            <div>
                <span class="label">Solution Overview</span>
                <h2 class="display-2">Two approaches, side by side.</h2>
                <p class="lead">Approach 1 is what CSB Bank asked for. Approach 2 is what we recommend for rent specifically. We suggest a hybrid where each approach handles the invoice type it's best suited for.</p>
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
                        <li>Faster to deliver &mdash; 16-week roadmap</li>
                        <li>Lower change management &mdash; mirrors current workflow</li>
                        <li>Human-in-the-loop for exceptions</li>
                    </ul>
                </div>
                <div class="path__foot">Recommended for &rarr; Vendor invoices (heterogeneous, ad-hoc)</div>
            </div>
            <div class="path path--recommended">
                <span class="path__tag">Approach 02 &middot; Our Recommendation</span>
                <h3>Agreement-Based Invoice Automation</h3>
                <p class="path__sub">Landlord uploads agreement once. System extracts terms, generates monthly invoices automatically, handles GST + approval + ERP posting. No monthly invoice collection.</p>
                <div class="path__body">
                    <ul>
                        <li>Eliminates the monthly invoice-collection cycle</li>
                        <li>Contract-driven &mdash; audit-perfect by design</li>
                        <li>Escalations, GST changes, renewals handled by config</li>
                        <li>Longer roadmap (20 weeks) but higher long-term ROI</li>
                    </ul>
                </div>
                <div class="path__foot">Recommended for &rarr; Rent invoices (contractual, recurring)</div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S06 — APPROACH 1: OVERVIEW
     ============================================================ -->
<section class="slide"
    data-title="Approach 1 — Overview"
    data-objective="Set the frame for the AI-OCR approach — what it does, what business outcome it delivers."
    data-notes="Position this as the pragmatic, low-risk baseline. It mirrors what most banks already do manually, just automated end-to-end. Business goal: 80% reduction in manual data entry, sub-24h invoice-to-approval cycle for standard invoices, 95%+ OCR field accuracy after training period. Note the accuracy comes from human-in-the-loop for exception cases — we don't overpromise 100%."
    data-key="AI-OCR is proven, deliverable in 16 weeks, and gives CSB an 80%+ reduction in manual work with an auditable trail."
    data-questions="What's your current invoice-to-approval SLA?|Do you have historical rejected-invoice data we can use to train the OCR model?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">06 / 25 &middot; Approach 01</div>
            <div>
                <span class="label accent">Approach 01 &middot; Overview</span>
                <h2 class="display-2">AI-Powered OCR Invoice Processing.</h2>
                <p class="lead">Ingest invoices from any channel &mdash; email, portal, physical scan &mdash; extract the 12 fields with AI-OCR, validate against masters, route through role-based approval, post to your ERP. Auditable end-to-end.</p>
            </div>
        </div>
        <div class="split">
            <div class="split__panel">
                <h4>What it does</h4>
                <ul>
                    <li>Ingests invoices from email inbox, upload portal, or scan station</li>
                    <li>Extracts 12 structured fields per invoice via AI-OCR</li>
                    <li>Validates GSTIN, PO, vendor master, duplicate check, GST math</li>
                    <li>Routes exceptions to a human review queue</li>
                    <li>Multi-level, threshold-based, role-based approval</li>
                    <li>Posts approved invoices to your ERP (Finacle / SAP / Oracle / custom)</li>
                    <li>Dashboards, reports, immutable audit trail</li>
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

<!-- ============================================================
     S07 — CURRENT STATE (invoice process)
     ============================================================ -->
<section class="slide"
    data-title="Current State — Invoice Process (Assumed)"
    data-objective="Show our best-guess understanding of the current CSB invoice process — invite corrections."
    data-notes="Walk through the six steps. Highlight the four RED steps as manual and error-prone. Explicitly ask 'is this how it works today?' Every bank has slight variations — we need to hear yours before we architect the future state. Note: we're assuming the current process because we haven't done a formal discovery yet. If we're wrong, better to correct here than later."
    data-key="Today's process has 4 manual touch-points where errors, delays, and rework enter the system."
    data-questions="Is this current process broadly accurate?|What happens when an invoice is missing a field or has bad GSTIN?|What's the current average cycle time from invoice receipt to ERP posting?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">07 / 25 &middot; Approach 01</div>
            <div>
                <span class="label red">Current State</span>
                <h2 class="display-2">How invoice processing likely works today.</h2>
                <p class="lead">Our best-guess current-state model. Red steps are manual, error-prone, and don't scale. We'll validate this in the discovery phase.</p>
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

<!-- ============================================================
     S08 — PAIN POINTS
     ============================================================ -->
<section class="slide"
    data-title="Pain Points in the Current State"
    data-objective="Crystallise the pain that Approach 1 will solve — grounded in what banks like CSB typically experience."
    data-notes="Read each pain concisely. Don't belabour — the client already knows these. The goal is to demonstrate we understand their world. Pause after slide and ask 'which of these is highest priority for you?' Their answer tells us where to place emphasis in the roadmap."
    data-key="Eight pain points, all preventable. The one that hurts most financially is GSTIN mismatch penalties."
    data-questions="Which of these pain points is highest priority for you?|Any pain we've missed?|What's your current annual write-off from invoice errors or missed ITC?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">08 / 25 &middot; Approach 01</div>
            <div>
                <span class="label red">Pain Points</span>
                <h2 class="display-2">Where today's process breaks down.</h2>
                <p class="lead">Eight recurring failure modes we see in banks running manual invoice processes. Please tell us if we're missing any &mdash; or which of these hurts most.</p>
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
                <h5>Zero live visibility</h5><p>No dashboard. Ops team can't answer "where's my invoice?"</p></div>
            <div class="pain"><div class="pain__ico"><i class="fas fa-triangle-exclamation"></i></div>
                <h5>Exceptions handled ad-hoc</h5><p>No SLA, no queue, no escalation matrix.</p></div>
        </div>
    </div>
</section>

<!-- ============================================================
     S09 — FUTURE STATE / SOLUTION ARCHITECTURE
     ============================================================ -->
<section class="slide"
    data-title="Future State — Solution Architecture"
    data-objective="Show the 6-layer solution architecture end to end, with clear boundaries."
    data-notes="Walk down the layers in order. Emphasise that this is a modular architecture — each layer can evolve without breaking the others. Highlight the Exception Handling row (accent border) because that's where we deliver the '95%+ auto' promise: the model handles the easy 95%, humans handle the 5% exceptions, and the model learns from every human decision. On-prem or cloud is a customer choice; both are supported."
    data-key="Six architectural layers. Modular. Every layer has a proven vendor/open-source path. Deployable on-prem or on cloud."
    data-questions="Do you have a preferred cloud provider or is on-prem required for banking data?|Do you have an existing OCR engine investment we should evaluate?|Which of these layers do you want us to expand on?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">09 / 25 &middot; Approach 01</div>
            <div>
                <span class="label accent">Future State &middot; Architecture</span>
                <h2 class="display-2">Six architectural layers &mdash; modular, extensible, auditable.</h2>
                <p class="lead">Every layer is independently evolvable. Deployable on-prem inside CSB's data centre or on a private cloud tenant.</p>
            </div>
        </div>
        <div class="arch">
            <div class="arch__row">
                <div><h5>01 &middot; Ingestion Layer</h5><small>Email &middot; Portal &middot; Scan</small></div>
                <p>Vendor/landlord email inbox monitor &middot; branch upload portal &middot; scanner integration. Files auto-tagged with source, timestamp, branch, batch.</p>
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
                <p>Adapter pattern &mdash; Finacle, SAP, Oracle, custom. Real-time posting or batch, per CSB's operational preference. Retry + reconciliation.</p>
            </div>
            <div class="arch__row">
                <div><h5>06 &middot; Dashboards, Reports, Audit</h5><small>Reg-Ready</small></div>
                <p>Live dashboard by branch / vendor / status. Monthly rent register, vendor aging, GST recon, exception report. Immutable append-only audit log.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S10 — OCR FIELD EXTRACTION TABLE
     ============================================================ -->
<section class="slide"
    data-title="OCR Extraction — 12 Fields with Validation"
    data-objective="Show that we've thought through every field: what accuracy we'll hit, what validation runs, and what happens when we're not confident."
    data-notes="Table-driven — walk through the highest-risk fields (GSTIN, IGST vs CGST/SGST split, PO match). Explain the auto-derive rules briefly. Highlight that low-confidence fields don't get silently accepted — they go to the review queue with a suggested value. This is where 95%+ becomes trustworthy."
    data-key="Every field has a defined confidence threshold, a validation rule, and an exception path. No silent failures."
    data-questions="Are there additional validation rules specific to CSB Bank?|Do you want to enforce PO-existence for every invoice or allow non-PO?|What's your policy on GSTIN mismatch — reject or send back for correction?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">10 / 25 &middot; Approach 01</div>
            <div>
                <span class="label accent">OCR &middot; Field Design</span>
                <h2 class="display-2">Twelve fields. Each with a defined validation contract.</h2>
                <p class="lead">Field-level design so accuracy expectations are quantifiable and low-confidence extractions never silently corrupt the system.</p>
            </div>
        </div>
        <table class="tbl">
            <thead><tr><th>#</th><th>Field</th><th>Target Accuracy</th><th>Validation Rule</th><th>Below Threshold</th></tr></thead>
            <tbody>
                <tr><td class="mono">01</td><td><strong>Vendor Name</strong></td><td><span class="pill">97%</span></td><td>Fuzzy match against vendor master</td><td>Reviewer picks from candidates</td></tr>
                <tr><td class="mono">02</td><td><strong>GSTIN</strong></td><td><span class="pill">99%</span></td><td>Regex + GSTN lookup API + state match</td><td>Reject &mdash; blocking field</td></tr>
                <tr><td class="mono">03</td><td><strong>Invoice Number</strong></td><td><span class="pill">98%</span></td><td>Uniqueness per vendor per FY</td><td>Reviewer confirms; duplicate blocked</td></tr>
                <tr><td class="mono">04</td><td><strong>Invoice Date</strong></td><td><span class="pill">99%</span></td><td>&le; today, &ge; PO date, within FY</td><td>Reviewer confirms</td></tr>
                <tr><td class="mono">05</td><td><strong>Invoice Value</strong></td><td><span class="pill">99%</span></td><td>= Taxable + all tax components</td><td>Reviewer corrects; math mismatch blocks</td></tr>
                <tr><td class="mono">06</td><td><strong>Taxable Amount</strong></td><td><span class="pill">99%</span></td><td>Line-item sum match</td><td>Reviewer corrects</td></tr>
                <tr><td class="mono">07-09</td><td><strong>CGST / SGST / IGST</strong></td><td><span class="pill">99%</span></td><td>Auto-derived from state + rate table; validated</td><td>Auto-correct if math confident</td></tr>
                <tr><td class="mono">10</td><td><strong>Due Date</strong></td><td><span class="pill">96%</span></td><td>Invoice date + payment terms from PO</td><td>Reviewer confirms; auto-suggest</td></tr>
                <tr><td class="mono">11</td><td><strong>PO Number</strong></td><td><span class="pill">97%</span></td><td>Must exist in PO master; amount &le; PO balance</td><td>Reviewer picks from candidates</td></tr>
                <tr><td class="mono">12</td><td><strong>Cost Center</strong></td><td><span class="pill">95%</span></td><td>Derived from PO or vendor default; RBAC-aware</td><td>Reviewer picks; audited</td></tr>
            </tbody>
        </table>
    </div>
</section>

<!-- ============================================================
     S11 — HUMAN-IN-THE-LOOP REVIEW
     ============================================================ -->
<section class="slide"
    data-title="Human-in-the-Loop Review"
    data-objective="Explain how exceptions are handled so the client trusts the automation."
    data-notes="This is the trust-building slide. AI is not 100%, and pretending otherwise loses credibility. Show that we've engineered the exception path deliberately. Every review is a training signal — model gets better over time. After 6 weeks of production data, exception rate should drop below 5%. Note the SLA on exceptions so they don't become the new bottleneck."
    data-key="OCR handles the easy 95%. Reviewers handle the 5% exceptions with a defined SLA. Every review trains the model."
    data-questions="Who from your ops team will be the primary reviewer?|What's the acceptable exception-handling SLA — 4h, 24h?|Do you want us to build the review UI or integrate with an existing tool?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">11 / 25 &middot; Approach 01</div>
            <div>
                <span class="label accent">Exception Handling</span>
                <h2 class="display-2">Humans handle the 5%. The model learns from every correction.</h2>
                <p class="lead">The automation isn't magic. Low-confidence extractions get a purpose-built review queue with SLA. Every correction becomes a training signal.</p>
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
                    <li>Ops effort: ~2 FTE for CSB's estimated volume</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S12 — APPROVAL WORKFLOW
     ============================================================ -->
<section class="slide"
    data-title="Approval Workflow — RBAC + Multi-Level"
    data-objective="Show that approvals are config-driven, threshold-aware, and match how CSB actually operates."
    data-notes="The 4-level RBAC illustration is illustrative — actual matrix will come from CSB's DoA. Emphasise that everything is config-driven, so as thresholds change or reorgs happen, no code deployment is needed. WhatsApp notifications are a differentiator for rural landlord approvals. Escalation on SLA breach is automatic and audited."
    data-key="Approvals are config-driven, not hard-coded. Threshold, level, notification channel, escalation — all managed by CSB admins."
    data-questions="Can you share your current Delegation of Authority (DoA) matrix?|Do you have separate DoA for rent vs vendor invoices?|Any regulatory constraint on approval-level minimums we should encode?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">12 / 25 &middot; Approach 01</div>
            <div>
                <span class="label accent">Approval Workflow</span>
                <h2 class="display-2">Config-driven approval, role-based access, SLA-tracked.</h2>
                <p class="lead">Threshold-based routing that mirrors CSB's Delegation of Authority. Escalation, notifications and audit &mdash; all built in.</p>
            </div>
        </div>
        <div class="aprv">
            <div class="aprv__step"><div class="aprv__step__lvl">L1 &middot; Branch</div>
                <h5>&le; &#8377;25,000</h5><small>Branch Manager<br>Auto-approve after 2 SLA reminders</small></div>
            <div class="aprv__step"><div class="aprv__step__lvl">L2 &middot; Regional</div>
                <h5>&#8377;25k &ndash; &#8377;2 lakh</h5><small>Regional Head + Finance<br>2-of-2 or 1+delegate</small></div>
            <div class="aprv__step"><div class="aprv__step__lvl">L3 &middot; Zonal</div>
                <h5>&#8377;2 &ndash; &#8377;10 lakh</h5><small>Zonal Head + Finance Controller<br>SLA: 24h business</small></div>
            <div class="aprv__step"><div class="aprv__step__lvl">L4 &middot; HO</div>
                <h5>&gt; &#8377;10 lakh</h5><small>CFO or delegated authority<br>Board audit committee copy</small></div>
        </div>
        <div class="split" style="margin-top:18px;">
            <div class="split__panel"><h4>RBAC dimensions</h4>
                <ul>
                    <li>Role (initiator, reviewer, approver, admin, auditor)</li>
                    <li>Branch / region / zone scope</li>
                    <li>Invoice type (rent, vendor, capex, opex)</li>
                    <li>Amount threshold</li>
                    <li>Cost center visibility</li>
                    <li>Separation of duties enforced (no self-approval)</li>
                </ul>
            </div>
            <div class="split__panel"><h4>Notifications</h4>
                <ul>
                    <li>Email &mdash; every approval action + digest</li>
                    <li>WhatsApp &mdash; L1/L2 approvers, landlord confirmations</li>
                    <li>In-app &mdash; live queue with SLA countdown</li>
                    <li>Escalation &mdash; auto-forward on SLA breach</li>
                    <li>Approver-of-approver on prolonged non-response</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S13 — GST VALIDATION + ERP INTEGRATION
     ============================================================ -->
<section class="slide"
    data-title="GST Validation & ERP Integration"
    data-objective="Address the two most technically sensitive parts of the platform: GST compliance and ERP integration."
    data-notes="This is the slide where the IT team will pay closest attention. On GST — we validate at multiple levels: math, GSTIN existence, HSN validity, ITC eligibility, and e-invoice IRN check where applicable. On ERP — adapter pattern; we integrate with Finacle, SAP, Oracle, or custom via REST, SFTP, or MQ. Real-time posting or batch. We handle reconciliation and retry logic."
    data-key="GST is validated at 5 levels. ERP integration is adapter-based — pick the protocol that fits CSB's operational model."
    data-questions="Which ERP is CSB using — Finacle? SAP? Something custom?|What integration protocol does your team prefer — REST / SFTP / MQ?|Do you need e-invoice IRN capture for B2B invoices &ge; threshold?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">13 / 25 &middot; Approach 01</div>
            <div>
                <span class="label accent">GST &amp; ERP</span>
                <h2 class="display-2">GST validated at five levels. ERP integrated on your terms.</h2>
                <p class="lead">The two most technically sensitive layers of the platform. We've built these patterns before &mdash; happy to walk through the integration playbook with your IT team.</p>
            </div>
        </div>
        <div class="split">
            <div class="split__panel">
                <h4><i class="fas fa-calculator" style="color:var(--brand);margin-right:6px;"></i>GST Validation Engine</h4>
                <ul>
                    <li><strong>Math validation</strong> &mdash; CGST + SGST + IGST + taxable = invoice value</li>
                    <li><strong>GSTIN validation</strong> &mdash; regex + GSTN lookup + active status</li>
                    <li><strong>Rate validation</strong> &mdash; HSN/SAC lookup, current rate table with effective-date logic</li>
                    <li><strong>Jurisdiction check</strong> &mdash; state match: same-state &rarr; CGST+SGST, cross-state &rarr; IGST</li>
                    <li><strong>ITC eligibility</strong> &mdash; blocked-credit list, RCM applicability, reverse charge flag</li>
                    <li><strong>e-Invoice check</strong> &mdash; IRN capture &amp; validation for B2B &ge; threshold vendors</li>
                </ul>
            </div>
            <div class="split__panel">
                <h4><i class="fas fa-plug" style="color:var(--brand);margin-right:6px;"></i>ERP Integration</h4>
                <ul>
                    <li><strong>Supported ERPs</strong> &mdash; Finacle, SAP, Oracle, custom banking cores</li>
                    <li><strong>Protocols</strong> &mdash; REST API, SFTP batch, IBM MQ, RabbitMQ, JMS</li>
                    <li><strong>Modes</strong> &mdash; real-time on approval, or scheduled batch (hourly/daily)</li>
                    <li><strong>Field mapping</strong> &mdash; config-driven; add fields without redeploy</li>
                    <li><strong>Retry &amp; DLQ</strong> &mdash; failed postings retried with backoff, dead-letter queue for manual intervention</li>
                    <li><strong>Reconciliation</strong> &mdash; daily 2-way recon report; discrepancies flagged</li>
                    <li><strong>Adapter certification</strong> &mdash; we test against a CSB sandbox before production</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S14 — DASHBOARD + REPORTS + AUDIT TRAIL
     ============================================================ -->
<section class="slide"
    data-title="Dashboard, Reports & Audit Trail"
    data-objective="Show the visibility layer — how CSB stakeholders see the platform in action."
    data-notes="Distinguish the three roles: ops (live dashboard), finance (period reports), auditor (immutable log). Emphasise that every field-level change is captured — user, timestamp, IP, before/after value, reason. This is the difference between 'audit-lite' and true regulator-ready. Also mention retention: 8 years default (RBI norm), configurable."
    data-key="Live dashboard for ops. Scheduled reports for finance. Immutable field-level audit log for regulators."
    data-questions="Do you have specific report templates from finance/audit that we should pre-build?|What's your data retention requirement — 8 years, 10 years?|Do you want any specific KPI on the executive dashboard?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">14 / 25 &middot; Approach 01</div>
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
                    <li>Every field-level change captured: user, timestamp, IP, before/after value, reason (where required)</li>
                    <li>Append-only log &mdash; no records ever modified in-place</li>
                    <li>Cryptographic hash chain &mdash; tampering detectable</li>
                    <li>Retention: 8 years default (RBI norm), configurable per document class</li>
                    <li>Auditor read-only role with time-boxed access grants</li>
                </ul>
            </div>
            <div class="split__panel"><h4><i class="fas fa-file-lines" style="color:var(--brand);margin-right:6px;"></i>Regulator-Ready Exports</h4>
                <ul>
                    <li>One-click export by invoice, vendor, or period</li>
                    <li>Includes source document (original PDF) + extracted fields + audit log</li>
                    <li>Signed export packages (SHA-256 manifest)</li>
                    <li>Watermarked PDFs with export purpose &amp; recipient</li>
                    <li>Access-grant history exportable for auditor review</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S15 — APPROACH 1 ROADMAP
     ============================================================ -->
<section class="slide"
    data-title="Approach 1 — Phased Implementation Roadmap"
    data-objective="Give the client a concrete 16-week roadmap with clear phase deliverables."
    data-notes="Sixteen weeks total, four phases of four weeks. Note that this assumes a moderate integration complexity — if CSB's ERP integration is unusually complex, Phase 1 discovery may extend by 1-2 weeks. Emphasise the parallel-run in Phase 4 — we run the new system alongside the current process for two weeks to build confidence before cutover."
    data-key="16 weeks, four phases. Parallel run before cutover. Go-live end of week 16."
    data-questions="Is a 16-week timeline realistic for your governance cycles?|Which stakeholders need to be part of the parallel-run validation?|Any change-freeze windows we should design around?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">15 / 25 &middot; Approach 01</div>
            <div>
                <span class="label accent">Implementation Roadmap</span>
                <h2 class="display-2">Sixteen weeks. Four phases. Live at week 16.</h2>
                <p class="lead">Phased delivery with parallel-run validation before cutover. No big bang.</p>
            </div>
        </div>
        <div class="roadmap">
            <div class="phase">
                <div class="phase__wk">Week 01&ndash;04</div>
                <h5>Phase 1 &middot; Discover</h5>
                <ul>
                    <li>Requirements deep-dive</li>
                    <li>ERP integration spec</li>
                    <li>DoA matrix capture</li>
                    <li>OCR training corpus</li>
                    <li>Security architecture review</li>
                    <li>Signed SoW &amp; PMO setup</li>
                </ul>
            </div>
            <div class="phase">
                <div class="phase__wk">Week 05&ndash;08</div>
                <h5>Phase 2 &middot; Build Core</h5>
                <ul>
                    <li>Ingestion channels live</li>
                    <li>OCR extraction pipeline</li>
                    <li>Validation engine</li>
                    <li>Review UI</li>
                    <li>Vendor + PO master ingestion</li>
                    <li>Sprint demos every 2 weeks</li>
                </ul>
            </div>
            <div class="phase">
                <div class="phase__wk">Week 09&ndash;12</div>
                <h5>Phase 3 &middot; Workflow</h5>
                <ul>
                    <li>Approval workflow engine</li>
                    <li>Notification channels (email + WhatsApp)</li>
                    <li>ERP integration end-to-end</li>
                    <li>Dashboards &amp; reports</li>
                    <li>Audit log + retention</li>
                    <li>SIT pass</li>
                </ul>
            </div>
            <div class="phase">
                <div class="phase__wk">Week 13&ndash;16</div>
                <h5>Phase 4 &middot; Go-Live</h5>
                <ul>
                    <li>UAT with ops + finance</li>
                    <li>Parallel run (2 wks)</li>
                    <li>Cutover &amp; go-live</li>
                    <li>Hypercare (2 wks post go-live)</li>
                    <li>Model tuning &amp; steady state</li>
                    <li>Handover to L2 support</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S16 — APPROACH 2: THE BIGGER QUESTION
     ============================================================ -->
<section class="slide"
    data-title="Approach 2 — The Bigger Question"
    data-objective="Pivot the client's thinking from 'automate invoice processing' to 'do we even need to collect invoices for recurring rent?'"
    data-notes="This is the mindset-shift slide. Pause before the answer. Let the question hang. For rent — where terms are locked in a signed agreement — collecting a monthly invoice is a ritual, not a business necessity. The agreement is the invoice. This is how modern SaaS billing works. There's no reason banks can't do the same for rental payments."
    data-key="For contractual recurring payments — like rent — the agreement itself is the invoice. Collecting a piece of paper each month is a ritual we can eliminate."
    data-questions="How does the concept land initially?|Is there a legal / audit constraint that requires you to hold a monthly invoice document?|Are landlords currently required to submit invoices contractually, or is it operational habit?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">16 / 25 &middot; Approach 02</div>
            <div>
                <span class="label purple">Approach 02 &middot; Our Recommendation</span>
            </div>
        </div>
        <div class="question">
            <div class="question__q">What if you never had to <em>collect</em> a rent invoice again?</div>
            <p class="question__a">Rent is contractual and recurring. The agreement locks the amount, the escalation clause, the payment date, the GST treatment. Everything the invoice contains is already known the day the lease is signed. So the agreement <strong style="color:var(--brand);">is</strong> the invoice.</p>
            <p class="question__a" style="margin-top:14px;">Approach 2 recommends we invert the flow: upload the agreement once, and the system generates every monthly invoice on time, GST-computed, approval-routed, and ERP-posted. Landlord never chases, ops never chases, audit is contract-perfect by design.</p>
        </div>
    </div>
</section>

<!-- ============================================================
     S17 — CURRENT RENT PROCESS (Approach 2 lens)
     ============================================================ -->
<section class="slide"
    data-title="Current Rent Process — What Really Happens"
    data-objective="Show how much ops effort goes into invoice collection today — effort that Approach 2 makes unnecessary."
    data-notes="For rent specifically. Every month, the same cycle: chase 500+ landlords for their invoices, receive them in wildly different formats, key them in, chase GSTIN, chase approvals. Note the estimate that 40-60% of the ops team's cycle-time is spent on this collection layer, not on any value-added work. That's the effort dividend Approach 2 releases."
    data-key="40-60% of rent-ops effort today is chasing landlords for a piece of paper. Approach 2 eliminates it entirely."
    data-questions="Is 40-60% roughly right for your rent-ops team?|How many landlords do you deal with monthly?|What percentage of landlords are rural / low-tech?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">17 / 25 &middot; Approach 02</div>
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
            <p style="margin-top:6px; font-size:14px; color:var(--brand);">Estimated 40&ndash;60% of rent-ops cycle time is spent on invoice collection &amp; re-entry. Nothing that couldn't be derived from the signed agreement.</p>
        </div>
    </div>
</section>

<!-- ============================================================
     S18 — APPROACH 2 FUTURE STATE
     ============================================================ -->
<section class="slide"
    data-title="Approach 2 — Future State"
    data-objective="Show how the future flow works — agreement uploaded once, invoices generated automatically."
    data-notes="Day 0: landlord uploads the agreement. LLM + reviewer extracts terms. Every month thereafter, on the payment schedule date, the system auto-generates the invoice, computes GST, applies escalations, routes to approval, posts to ERP, notifies landlord. No monthly collection. No re-entry. Contract is the source of truth. Amendment / renewal / termination handled by exception paths."
    data-key="Upload once, invoice forever. Agreement extraction on Day 0, then autonomous monthly generation."
    data-questions="Are you comfortable moving to system-generated invoices legally?|Would you want landlord digital sign-back on system-generated invoices?|Any state-specific stamp/legal requirement we need to encode?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">18 / 25 &middot; Approach 02</div>
            <div>
                <span class="label green">Future State &middot; Approach 02</span>
                <h2 class="display-2">Agreement uploaded once. Invoices generated every month.</h2>
                <p class="lead">The agreement is the contract. The contract is the source of truth for every future invoice.</p>
            </div>
        </div>
        <div class="flow">
            <div class="flow__step is-brand"><div class="flow__step__num">Day 0</div>
                <h5>Agreement upload</h5><p>Landlord or ops uploads signed agreement. Encrypted, versioned.</p></div>
            <div class="flow__arrow">&rarr;</div>
            <div class="flow__step is-brand"><div class="flow__step__num">Day 0</div>
                <h5>Term extraction</h5><p>LLM + rule engine pulls rent, escalation, GST, period, cost center. Reviewer confirms.</p></div>
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

<!-- ============================================================
     S19 — APPROACH 2 SOLUTION FLOW (deeper)
     ============================================================ -->
<section class="slide"
    data-title="Approach 2 — Solution Flow (Detailed)"
    data-objective="Show the deeper architecture — how the agreement moves through the system to become recurring invoices."
    data-notes="This is the technical deep-dive for the IT team. Walk down the layers. Note that the LLM extraction happens once per agreement (upload + review), then the invoice generation engine runs on a scheduler and needs no LLM — pure rule engine. That makes it cheap and deterministic. Amendment path is the exception. Show that variable charges (utilities, maintenance) have their own upload channel that flows into the same invoice."
    data-key="LLM runs once at upload. Invoice generation is pure rule engine — deterministic, cheap, auditable."
    data-questions="Are agreements typically in English or vernacular?|Do we need to handle variable charges (utilities, maintenance) as separate line items?|How does CSB currently handle mid-term amendments?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">19 / 25 &middot; Approach 02</div>
            <div>
                <span class="label purple">Detailed Architecture</span>
                <h2 class="display-2">Agreement in on Day 0. Invoices out every month.</h2>
                <p class="lead">Six-layer architecture. Only the top layer touches AI &mdash; term extraction. Everything downstream is deterministic rule engine.</p>
            </div>
        </div>
        <div class="arch">
            <div class="arch__row">
                <div><h5>01 &middot; Agreement Repository</h5><small>Encrypted &middot; Versioned</small></div>
                <p>Signed agreement uploaded (landlord portal or ops). Encrypted at rest, versioned, tamper-evident. Access-controlled by branch + role.</p>
            </div>
            <div class="arch__row accent">
                <div><h5>02 &middot; Term Extraction</h5><small>LLM + Reviewer</small></div>
                <p>LLM extracts: rent amount, escalation clause, escalation frequency, GST, payment date, term period, cost center, variable charges. Reviewer confirms once. Term-set locked to the agreement version.</p>
            </div>
            <div class="arch__row">
                <div><h5>03 &middot; Invoice Generation Engine</h5><small>Scheduled &middot; Rule-Based</small></div>
                <p>On payment date, engine reads active term-set, applies escalation if due, computes GST, generates invoice PDF with CSB-branded template. Rule engine only &mdash; no LLM at runtime.</p>
            </div>
            <div class="arch__row">
                <div><h5>04 &middot; Variable Charges Channel</h5><small>Optional Line Items</small></div>
                <p>Utilities, maintenance, one-off charges uploaded via landlord portal or branch. Linked to invoice as separate line items with independent approval.</p>
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

<!-- ============================================================
     S20 — APPROACH 2 BUSINESS CASE
     ============================================================ -->
<section class="slide"
    data-title="Approach 2 — Business Case"
    data-objective="Show the concrete before/after benefits of Approach 2 vs the current rent process."
    data-notes="Eight comparison rows. The most compelling row is Ops effort — a 90% reduction is realistic because we've removed the collection layer entirely. Note the audit trail becomes 'contract-perfect' — every invoice traces back to a specific agreement version. Landlord experience improves because they never chase or resend invoices."
    data-key="Approach 2 for rent delivers ~90% ops effort reduction, contract-perfect audit, and a better landlord experience — three wins simultaneously."
    data-questions="Do these business benefits align with your priorities?|Which of these matter most to procurement / IT / ops / audit?|Any benefit we're overstating?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">20 / 25 &middot; Approach 02</div>
            <div>
                <span class="label green">Business Case</span>
                <h2 class="display-2">Where Approach 2 wins for rent, specifically.</h2>
                <p class="lead">Eight dimensions of comparison. Approach 2 delivers a compounding advantage &mdash; each cycle is cheaper than the last.</p>
            </div>
        </div>
        <table class="tbl">
            <thead><tr><th>Dimension</th><th>Current Process</th><th>Approach 2</th><th>Delta</th></tr></thead>
            <tbody>
                <tr><td><strong>Ops effort (rent)</strong></td><td>~40&ndash;60% of team cycle</td><td>~5% (exception only)</td><td><span class="pill">-90%</span></td></tr>
                <tr><td><strong>Invoice-to-payment cycle</strong></td><td>7&ndash;15 days</td><td>Same day of due date</td><td><span class="pill">Same-day</span></td></tr>
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

<!-- ============================================================
     S21 — CHALLENGES & SOLUTIONS
     ============================================================ -->
<section class="slide"
    data-title="Approach 2 — Real-World Challenges & Solutions"
    data-objective="Be honest about the harder-than-it-looks parts of Approach 2, and show that we've anticipated each one with a concrete solution."
    data-notes="This is the trust slide. Every consulting engagement over-promises the happy path and under-plans for exceptions. We're doing the opposite — here are the twelve real-world challenges we've hit or seen, and how we solve each. The most important row is 'Agreement amendments' — this happens frequently and needs a proper workflow, not an afterthought. Also 'Rural landlords' — WhatsApp + SMS + optional physical mail integration."
    data-key="Twelve real-world edge cases. Every one has a defined solution built into the platform — not an afterthought."
    data-questions="Any of these challenges you'd deprioritise?|Any we've missed?|How does CSB currently handle each of these today?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">21 / 25 &middot; Approach 02</div>
            <div>
                <span class="label gold">Honest Challenges</span>
                <h2 class="display-2">Twelve real-world edge cases &mdash; and how we solve each.</h2>
                <p class="lead">The parts of Approach 2 that seem simple but aren't. Each has a defined solution in the platform &mdash; not left to prod firefighting.</p>
            </div>
        </div>
        <div class="chal-matrix">
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 01</h6><strong>Agreement amendments</strong><p>Landlord and CSB renegotiate mid-term.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Amendment workflow + versioning</strong><p>Amendment uploaded, term-set forks with effective-date, approval loop, prior version preserved for audit.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 02</h6><strong>Rent escalation clauses</strong><p>Annual, biannual, CPI-linked, ad-hoc.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Escalation calendar engine</strong><p>Rule-based escalation schedule per agreement. Applies automatically on effective date. Auto-notifies landlord + ops.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 03</h6><strong>Variable charges</strong><p>Electricity, water, maintenance vary monthly.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Line-item upload channel</strong><p>Landlord uploads variable charges via portal; posted as separate invoice lines with independent approval + audit.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 04</h6><strong>GST rate changes</strong><p>Government revises rates mid-year.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Effective-date rate table</strong><p>Rate table with effective-from / effective-to dates. Invoices auto-use the correct rate for each period.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 05</h6><strong>Lease renewals</strong><p>Expiry can catch ops off-guard.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Renewal alert workflow</strong><p>60/30/15 day alerts before expiry. Renewal negotiation record. Auto-suspend generation on expiry until renewed.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 06</h6><strong>Manual overrides</strong><p>Ops needs to change a generated invoice.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Reasoned override + audit</strong><p>Override allowed with mandatory reason + approver. Every override logged with before/after and reviewer sign-off.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 07</h6><strong>Audit requirements</strong><p>Regulators/auditors want traceability.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Contract-to-invoice chain</strong><p>Every invoice links to the exact agreement version + rate table + escalation trigger. Immutable log, exportable, cryptographically hashed.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 08</h6><strong>ERP compatibility</strong><p>Every ERP has its quirks.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Adapter pattern</strong><p>Adapter per ERP (Finacle, SAP, Oracle, custom). Config-driven mapping. Retry + DLQ + reconciliation.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 09</h6><strong>Branch-specific workflows</strong><p>Different regions have different DoA.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Config-driven workflows</strong><p>Approval matrix per branch/region without code change. Admin UI to add rules; audit-tracked.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 10</h6><strong>Rural landlords</strong><p>Low tech literacy, no email.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>WhatsApp-first + fallback</strong><p>WhatsApp + SMS as primary. Optional physical mail integration via 3rd-party post service. Voice-call reminders for critical events.</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 11</h6><strong>Legal &amp; stamp requirements</strong><p>State-wise stamp duty, digital sign.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>State-aware compliance module</strong><p>Stamp duty tracking per state. Digital sign via Aadhaar eSign / DSC as needed. Legally-valid electronic invoice format (per Indian Evidence Act).</p></div></div>
            <div class="chal-row"><div class="chal-row__c"><h6>Challenge 12</h6><strong>Exception handling</strong><p>Real edge cases can't all be automated.</p></div><div class="chal-row__s"><h6>Our Solution</h6><strong>Exception queue with SLA</strong><p>All exceptions in a single queue. SLA countdown. Auto-escalate on breach. Full traceability from exception &rarr; resolution.</p></div></div>
        </div>
    </div>
</section>

<!-- ============================================================
     S22 — APPROACH 2 ROADMAP
     ============================================================ -->
<section class="slide"
    data-title="Approach 2 — Phased Implementation Roadmap"
    data-objective="Give the client a concrete 20-week roadmap for Approach 2."
    data-notes="Twenty weeks total — four weeks longer than Approach 1. The extra weeks are in Phase 1 (agreement schema, escalation rules) and Phase 2 (LLM extraction fine-tuning). Note this is for the rent-only Approach 2. If run in parallel with Approach 1 for vendors, both go live around the same window with a small overlap in Phase 4."
    data-key="20 weeks. Four phases. Slower than Approach 1 due to LLM extraction fine-tune + agreement schema design."
    data-questions="Is a 20-week timeline acceptable for the rent stream?|Should Phase 4 pilot cover only 2-3 branches or all-India?|Any regulatory or audit pre-approval you'd want between phases?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">22 / 25 &middot; Approach 02</div>
            <div>
                <span class="label purple">Approach 02 &middot; Roadmap</span>
                <h2 class="display-2">Twenty weeks. Four phases. Pilot at week 20.</h2>
                <p class="lead">Slightly longer than Approach 1 because agreement schema and LLM extraction need extra rigour up front.</p>
            </div>
        </div>
        <div class="roadmap">
            <div class="phase">
                <div class="phase__wk">Week 01&ndash;05</div>
                <h5>Phase 1 &middot; Design</h5>
                <ul>
                    <li>Agreement corpus review</li>
                    <li>Term-set schema design</li>
                    <li>Escalation rule catalogue</li>
                    <li>Variable-charge model</li>
                    <li>ERP integration spec</li>
                    <li>Legal / audit review</li>
                </ul>
            </div>
            <div class="phase">
                <div class="phase__wk">Week 06&ndash;10</div>
                <h5>Phase 2 &middot; Extraction</h5>
                <ul>
                    <li>Agreement ingestion pipeline</li>
                    <li>LLM extraction &amp; fine-tune</li>
                    <li>Reviewer UI</li>
                    <li>Term-set versioning</li>
                    <li>Landlord portal shell</li>
                    <li>Sprint demos every 2 weeks</li>
                </ul>
            </div>
            <div class="phase">
                <div class="phase__wk">Week 11&ndash;15</div>
                <h5>Phase 3 &middot; Generation</h5>
                <ul>
                    <li>Invoice generation engine</li>
                    <li>GST + escalation logic</li>
                    <li>Approval workflow</li>
                    <li>ERP integration end-to-end</li>
                    <li>Landlord notify (email + WhatsApp)</li>
                    <li>Amendment &amp; renewal workflows</li>
                </ul>
            </div>
            <div class="phase">
                <div class="phase__wk">Week 16&ndash;20</div>
                <h5>Phase 4 &middot; Pilot</h5>
                <ul>
                    <li>Pilot with 2&ndash;3 branches</li>
                    <li>UAT with finance + audit</li>
                    <li>Parallel run (3 wks)</li>
                    <li>Landlord onboarding</li>
                    <li>Cutover to pilot branches</li>
                    <li>Hypercare + scale plan for rollout</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S23 — APPROACH 1 vs 2 COMPARISON MATRIX
     ============================================================ -->
<section class="slide"
    data-title="Approach 1 vs 2 — Side-by-Side Comparison"
    data-objective="Show head-to-head where each approach wins, and land the recommended hybrid."
    data-notes="Walk down the ten rows. Each approach has different strengths. Approach 1 wins on speed and vendor-invoice fit. Approach 2 wins on rent-invoice fit, long-term ROI, and audit posture. Our recommendation, printed at the bottom in blue: run BOTH — Approach 1 for vendor invoices, Approach 2 for rent. Same underlying platform, so shared infra and shared cost."
    data-key="Neither approach dominates. Each fits a different invoice type. Hybrid gives CSB best of both — for a small extra investment."
    data-questions="Does the hybrid recommendation feel right?|Is procurement / IT comfortable with running two workflows on one platform?|Any preference on which stream we start first?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">23 / 25 &middot; Comparison</div>
            <div>
                <span class="label">Approach 01 vs Approach 02</span>
                <h2 class="display-2">Where each approach wins.</h2>
                <p class="lead">Neither is universally better. Our recommendation: run both, each on the invoice type it's built for. Same platform, shared infrastructure.</p>
            </div>
        </div>
        <div class="matrix">
        <table>
            <thead><tr><th>Dimension</th><th>Approach 01 &mdash; AI-OCR</th><th class="recommend">Approach 02 &mdash; Agreement-Based</th></tr></thead>
            <tbody>
                <tr><td><strong>Fit for vendor invoices</strong></td><td>Best fit &mdash; heterogeneous invoices</td><td class="recommend">Not applicable</td></tr>
                <tr><td><strong>Fit for rent invoices</strong></td><td>Works but leaves value on the table</td><td class="recommend">Best fit &mdash; contractual, recurring</td></tr>
                <tr><td><strong>Timeline to go-live</strong></td><td>16 weeks</td><td class="recommend">20 weeks</td></tr>
                <tr><td><strong>Ops effort reduction</strong></td><td>~80%</td><td class="recommend">~90%+ for rent</td></tr>
                <tr><td><strong>Audit posture</strong></td><td>Strong (immutable log)</td><td class="recommend">Contract-perfect</td></tr>
                <tr><td><strong>Change management</strong></td><td>Low &mdash; mirrors current process</td><td class="recommend">Moderate &mdash; landlord onboarding</td></tr>
                <tr><td><strong>ERP integration</strong></td><td>Same adapter pattern</td><td class="recommend">Same adapter pattern</td></tr>
                <tr><td><strong>Long-term ROI</strong></td><td>Linear savings</td><td class="recommend">Compounding &mdash; better each cycle</td></tr>
                <tr><td><strong>Scalability</strong></td><td>Linear with volume</td><td class="recommend">Flat &mdash; 10&times; landlords, 0 new FTE</td></tr>
                <tr><td><strong>Landlord/vendor experience</strong></td><td>Same as today</td><td class="recommend">Zero-touch, portal-driven</td></tr>
            </tbody>
        </table>
        <div class="verdict">
            <strong>Our Recommendation</strong>
            Run <strong style="text-decoration:underline;">both</strong> approaches on a shared platform. Approach 01 for vendor invoices (heterogeneous, ad-hoc). Approach 02 for rent invoices (contractual, recurring). Same infrastructure, same team, same audit trail. Small incremental investment, disproportionate long-term value.
        </div>
        </div>
    </div>
</section>

<!-- ============================================================
     S24 — SECURITY, COMPLIANCE, AUDIT, DATA RESIDENCY
     ============================================================ -->
<section class="slide"
    data-title="Security, Compliance, Audit & Data Residency"
    data-objective="Answer the questions the CISO / risk / audit team will care about."
    data-notes="Twelve tiles. Not exhaustive, but covers the ground the risk team will care about. If a specific regulatory framework matters most to CSB (RBI IT Framework, DPDP Act, ISO 27001 audit), we can extend the scope in Phase 1. Emphasise India data residency — everything runs on servers in India, no data leaves the country. On-prem deployment is fully supported if CSB prefers."
    data-key="Bank-grade security. India data residency by default. On-prem or cloud, CSB's choice."
    data-questions="Which security framework is CSB currently certified under?|Are you okay with a private-cloud tenant (India region) or is on-prem mandatory?|Do you need a specific VAPT vendor to test our system?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">24 / 25 &middot; Non-Functional</div>
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

<!-- ============================================================
     S25 — QUESTIONS FOR CSB + NEXT STEPS
     ============================================================ -->
<section class="slide final"
    data-title="Questions for CSB Bank + Next Steps"
    data-objective="Close the loop — surface the questions we need CSB to answer + define the concrete next steps."
    data-notes="Be direct and specific. These eight questions are what we need to answer before we can put a proper SoW together. Read them slowly. After the last one, pivot to next steps: 1-week technical workshop with IT team, SoW draft, kickoff. Then thank them and open for Q&A. Leave contact block visible for follow-up."
    data-key="Eight decisions we need from CSB. Three next steps we propose. Contact block open for follow-up any time."
    data-questions="Who from CSB will own the responses to these eight questions?|What's the target date for SoW sign-off?|Any decision-maker not in the room today who should be looped in?">
    <div class="slide-inner">
        <div class="head-row">
            <div class="num">25 / 25 &middot; Close</div>
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

<!-- ============================================================
     BOTTOM CHROME
     ============================================================ -->
<footer class="chrome-bottom">
    <button type="button" class="nav-btn" id="prevBtn" aria-label="Previous slide">
        <i class="fas fa-arrow-left"></i>
    </button>
    <div class="dots" id="dots"><!-- dots injected by JS --></div>
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

    var notesBtn    = document.getElementById('notesBtn');
    var notesDrawer = document.getElementById('notesDrawer');
    var notesClose  = document.getElementById('notesClose');
    var notesTitle  = document.getElementById('notesTitle');
    var notesBody   = document.getElementById('notesBody');

    // Build dots
    for (var i = 0; i < totalSlides; i++) {
        var d = document.createElement('button');
        d.className = 'dot' + (i === 0 ? ' active' : '');
        d.setAttribute('data-idx', i);
        d.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        dotsEl.appendChild(d);
    }
    var dots = dotsEl.querySelectorAll('.dot');

    function pad2(n){ return n < 10 ? ('0' + n) : String(n); }

    function renderNotes(slide) {
        var idx      = Array.prototype.indexOf.call(slides, slide);
        var title    = slide.getAttribute('data-title') || 'Notes';
        var objective= slide.getAttribute('data-objective') || '';
        var notes    = slide.getAttribute('data-notes') || '';
        var key      = slide.getAttribute('data-key') || '';
        var qs       = (slide.getAttribute('data-questions') || '').split('|').filter(function(s){ return s.trim().length; });

        notesTitle.textContent = 'Slide ' + (idx + 1) + ' · ' + title;

        var html = '';
        if (objective) html += '<div class="notes-block"><h5>Objective</h5><p>' + objective + '</p></div>';
        if (notes)     html += '<div class="notes-block"><h5>Speaker Notes</h5><p>' + notes + '</p></div>';
        if (key)       html += '<div class="notes-block km"><h5>Key Message</h5><p>' + key + '</p></div>';
        if (qs.length){
            html += '<div class="notes-block"><h5>Expected Client Questions</h5><ul>';
            for (var i = 0; i < qs.length; i++) html += '<li>' + qs[i].trim() + '</li>';
            html += '</ul></div>';
        }
        notesBody.innerHTML = html || '<p style="color:var(--text-mute); font-size:13px;">No notes for this slide.</p>';
    }

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

        renderNotes(slide);

        // Reset scroll of the active slide
        slide.scrollTop = 0;
    }

    // Init active on slide 1
    slides[0].classList.add('is-active');
    renderNotes(slides[0]);
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

    // Keyboard
    document.addEventListener('keydown', function(e){
        // Don't hijack while typing / drawer scroll
        var tag = (e.target && e.target.tagName) || '';
        if (tag === 'INPUT' || tag === 'TEXTAREA' || tag === 'SELECT') return;
        if (e.key === 'ArrowRight' || e.key === 'PageDown') { goTo(current + 1); e.preventDefault(); }
        else if (e.key === 'ArrowLeft' || e.key === 'PageUp') { goTo(current - 1); e.preventDefault(); }
        else if (e.key === 'Home') { goTo(0); e.preventDefault(); }
        else if (e.key === 'End')  { goTo(totalSlides - 1); e.preventDefault(); }
        else if (e.key === 'n' || e.key === 'N') { toggleNotes(); e.preventDefault(); }
        else if (e.key === 'Escape' && notesDrawer.classList.contains('is-open')) { toggleNotes(false); }
    });

    // Touch swipe (horizontal only, ignore vertical scroll)
    var tsx = 0, tsy = 0, tsTime = 0;
    track.addEventListener('touchstart', function(e){
        var t = e.touches[0];
        tsx = t.clientX; tsy = t.clientY; tsTime = Date.now();
    }, {passive:true});
    track.addEventListener('touchend', function(e){
        var t = e.changedTouches[0];
        var dx = t.clientX - tsx, dy = t.clientY - tsy, dt = Date.now() - tsTime;
        if (dt > 500) return;
        if (Math.abs(dx) < 60) return;
        if (Math.abs(dy) > Math.abs(dx) * 0.8) return; // vertical scroll, ignore
        if (dx < 0) goTo(current + 1); else goTo(current - 1);
    }, {passive:true});

    // Presenter notes toggle
    function toggleNotes(force) {
        var open = (typeof force === 'boolean') ? force : !notesDrawer.classList.contains('is-open');
        notesDrawer.classList.toggle('is-open', open);
        notesBtn.classList.toggle('is-open', open);
        notesBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
        notesDrawer.setAttribute('aria-hidden', open ? 'false' : 'true');
    }
    notesBtn.addEventListener('click', function(){ toggleNotes(); });
    notesClose.addEventListener('click', function(){ toggleNotes(false); });

    // Kick off
    goTo(0);
})();
</script>
</body>
</html>
