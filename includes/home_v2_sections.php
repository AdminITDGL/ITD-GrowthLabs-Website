<?php
/**
 * Home v3 — rethought user journey.
 *
 * Narrative: ITD GrowthLabs is India's marketing-first + technology expert
 * partner for brand idea → brand launch → brand scale, serving D2C, B2B,
 * Technology, Real Estate, and services across India + GCC.
 *
 * Section order (optimized for a founder / marketing manager / technology
 * manager landing cold on this page):
 *
 *   A. Persona + Industry quick-nav
 *   B. Idea-to-execution 4-stage story
 *   C. 9 Core Services grid (user's exact list)
 *   D. Industry showcases (tabbed)
 *   E. Case-metric band
 *   F. Technology + AI capability showcase
 *   G. How we work (4-step)
 *   H. FAQ-for-AI (schema inline)
 *   I. Final CTA + lead form
 *
 * No external JS deps. Mobile-first. Full FAQPage schema for AI Overview.
 */
?>
<style>
  :root{--hx-navy:#0f1e3d;--hx-navy2:#1e3a8a;--hx-ink:#0b1220;--hx-muted:#64748b;--hx-bg:#f8fafc;--hx-line:#e2e8f0;--hx-gold:#c89b3c;--hx-teal:#0d9488;--hx-orange:#ea580c;--hx-emerald:#059669;--hx-indigo:#4f46e5;--hx-purple:#7c3aed}

  .hx-sec{padding:72px 20px;background:#fff}
  .hx-sec.alt{background:#f8fafc}
  .hx-sec.dark{background:#0b1220;color:#fff}
  .hx-container{max-width:1180px;margin:0 auto}
  .hx-container.narrow{max-width:860px}
  .hx-eyebrow{display:inline-flex;align-items:center;gap:8px;background:rgba(200,155,60,0.14);color:#8a6520;padding:5px 14px;border-radius:99px;font-size:11.5px;font-weight:800;letter-spacing:0.6px;text-transform:uppercase;margin-bottom:12px;border:1px solid rgba(200,155,60,0.28)}
  .hx-sec.dark .hx-eyebrow{background:rgba(200,155,60,0.22);color:#fde68a;border-color:rgba(200,155,60,0.35)}
  .hx-sec h2{color:#0f1e3d;font-size:32px;margin:0 0 10px;font-weight:800;line-height:1.25;letter-spacing:-0.01em}
  .hx-sec.dark h2{color:#fff}
  .hx-sec p.sub{color:#475569;font-size:16px;margin:0 0 32px;max-width:780px;line-height:1.7}
  .hx-sec.dark p.sub{color:#cbd5e1}
  .hx-centered{text-align:center}
  .hx-centered h2,.hx-centered p.sub{margin-left:auto;margin-right:auto}

  /* A — Persona + Industry quick-nav */
  .hx-navband{background:linear-gradient(135deg,#eff6ff 0%,#f1f5f9 100%);padding:44px 20px;border-top:1px solid #e2e8f0;border-bottom:1px solid #e2e8f0}
  .hx-navband-wrap{max-width:1180px;margin:0 auto}
  .hx-navband h3{color:#0f1e3d;font-size:22px;margin:0 0 6px;font-weight:800;letter-spacing:-0.01em;text-align:center}
  .hx-navband p{color:#475569;font-size:14.5px;margin:0 0 24px;text-align:center}
  .hx-persona-row{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;max-width:900px;margin:0 auto 22px}
  .hx-persona{background:#fff;border:1.5px solid #e2e8f0;border-radius:12px;padding:20px 22px;text-align:center;cursor:pointer;transition:all .18s;text-decoration:none;color:inherit;display:block}
  .hx-persona:hover{border-color:#1e3a8a;background:#1e3a8a;color:#fff;transform:translateY(-3px);box-shadow:0 12px 28px rgba(30,58,138,0.22)}
  .hx-persona .ico{font-size:28px;color:#c89b3c;margin-bottom:8px;transition:color .18s}
  .hx-persona:hover .ico{color:#fde68a}
  .hx-persona strong{display:block;font-size:16px;font-weight:800;margin-bottom:4px}
  .hx-persona span{display:block;font-size:12.5px;color:#64748b;transition:color .18s;line-height:1.4}
  .hx-persona:hover span{color:#dbeafe}
  .hx-divider{display:flex;align-items:center;color:#94a3b8;font-size:12px;margin:0 auto 16px;max-width:300px;text-transform:uppercase;letter-spacing:1px;font-weight:700}
  .hx-divider::before,.hx-divider::after{content:"";flex:1;height:1px;background:#cbd5e1;margin:0 10px}
  .hx-chips{display:flex;flex-wrap:wrap;gap:8px;justify-content:center}
  .hx-chip{display:inline-flex;align-items:center;gap:6px;background:#fff;border:1.5px solid #e2e8f0;color:#0f1e3d;padding:9px 14px;border-radius:99px;font-size:13px;font-weight:700;text-decoration:none;transition:all .18s;cursor:pointer}
  .hx-chip:hover,.hx-chip.active{border-color:#1e3a8a;background:#1e3a8a;color:#fff}
  .hx-chip i{font-size:12px;color:#c89b3c}
  .hx-chip:hover i,.hx-chip.active i{color:#fde68a}

  /* B — Idea-to-execution story */
  .hx-story{display:grid;grid-template-columns:repeat(4,1fr);gap:0;position:relative;margin-top:14px}
  .hx-story::before{content:"";position:absolute;top:48px;left:12%;right:12%;height:3px;background:linear-gradient(90deg,#c89b3c,#1e3a8a,#4f46e5,#059669);border-radius:3px;z-index:0}
  .hx-stage{text-align:center;padding:0 14px;position:relative;z-index:1}
  .hx-stage .stage-circle{width:84px;height:84px;border-radius:50%;background:#fff;border:4px solid;display:inline-flex;align-items:center;justify-content:center;font-size:26px;font-weight:800;box-shadow:0 8px 22px rgba(15,30,61,0.1);margin-bottom:16px;position:relative}
  .hx-stage:nth-child(1) .stage-circle{border-color:#c89b3c;color:#8a6520}
  .hx-stage:nth-child(2) .stage-circle{border-color:#1e3a8a;color:#1e3a8a}
  .hx-stage:nth-child(3) .stage-circle{border-color:#4f46e5;color:#4f46e5}
  .hx-stage:nth-child(4) .stage-circle{border-color:#059669;color:#059669}
  .hx-stage h4{color:#0f1e3d;font-size:17px;font-weight:800;margin:0 0 8px;letter-spacing:-0.01em}
  .hx-stage p{color:#475569;font-size:13.5px;line-height:1.6;margin:0}

  /* C — 9 Core Services */
  .hx-services{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:14px}
  .hx-service{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:24px;transition:transform .2s,box-shadow .2s,border-color .2s;display:flex;flex-direction:column;position:relative}
  .hx-service:hover{transform:translateY(-3px);box-shadow:0 14px 32px rgba(15,30,61,0.1);border-color:#c89b3c}
  .hx-service .ico{width:46px;height:46px;border-radius:10px;display:inline-flex;align-items:center;justify-content:center;color:#fff;font-size:19px;margin-bottom:14px}
  .hx-service.s-1 .ico{background:linear-gradient(135deg,#c89b3c,#eab308)}
  .hx-service.s-2 .ico{background:linear-gradient(135deg,#1e3a8a,#4f46e5)}
  .hx-service.s-3 .ico{background:linear-gradient(135deg,#0d9488,#059669)}
  .hx-service.s-4 .ico{background:linear-gradient(135deg,#ea580c,#f59e0b)}
  .hx-service.s-5 .ico{background:linear-gradient(135deg,#7c3aed,#4f46e5)}
  .hx-service.s-6 .ico{background:linear-gradient(135deg,#dc2626,#ea580c)}
  .hx-service.s-7 .ico{background:linear-gradient(135deg,#059669,#0d9488)}
  .hx-service.s-8 .ico{background:linear-gradient(135deg,#4f46e5,#7c3aed)}
  .hx-service.s-9 .ico{background:linear-gradient(135deg,#0f1e3d,#1e3a8a)}
  .hx-service h3{color:#0f1e3d;font-size:17.5px;margin:0 0 6px;font-weight:800;line-height:1.3}
  .hx-service p{color:#475569;font-size:13.5px;line-height:1.6;margin:0 0 12px;flex:1}
  .hx-service .s-price{color:#8a6520;font-size:12.5px;font-weight:700;margin-bottom:10px;letter-spacing:0.3px}
  .hx-service a.s-cta{display:inline-flex;align-items:center;gap:6px;color:#1e3a8a;font-size:13.5px;font-weight:800;text-decoration:none;margin-top:auto}
  .hx-service a.s-cta:hover{color:#0f1e3d;gap:10px;transition:gap .18s}

  /* D — Industry showcases tabbed */
  .hx-tabs{display:flex;flex-wrap:wrap;gap:8px;justify-content:center;margin-bottom:28px;border-bottom:1px solid #e2e8f0;padding-bottom:14px}
  .hx-tab{background:transparent;border:1.5px solid #e2e8f0;color:#64748b;padding:10px 18px;border-radius:99px;font-size:13.5px;font-weight:700;cursor:pointer;transition:all .18s}
  .hx-tab:hover{color:#0f1e3d;border-color:#c89b3c}
  .hx-tab.active{background:#0f1e3d;border-color:#0f1e3d;color:#fff}
  .hx-tabpanel{display:none}
  .hx-tabpanel.active{display:block;animation:hxfade .22s ease-out}
  @keyframes hxfade{from{opacity:0;transform:translateY(6px)}to{opacity:1;transform:none}}
  .hx-showcase{display:grid;grid-template-columns:1fr 1fr;gap:28px;align-items:center;background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:34px 32px}
  .hx-showcase .left h3{color:#0f1e3d;font-size:22px;margin:0 0 10px;font-weight:800;line-height:1.3}
  .hx-showcase .left p{color:#475569;font-size:15px;line-height:1.7;margin:0 0 16px}
  .hx-showcase .left ul{list-style:none;padding:0;margin:0 0 18px}
  .hx-showcase .left ul li{padding:6px 0 6px 22px;position:relative;color:#334155;font-size:14px;line-height:1.5}
  .hx-showcase .left ul li::before{content:"\\f061";font-family:"Font Awesome 6 Free";font-weight:900;position:absolute;left:0;top:7px;color:#c89b3c;font-size:11px}
  .hx-showcase .left a.sc-cta{display:inline-block;background:#1e3a8a;color:#fff;padding:11px 20px;border-radius:8px;text-decoration:none;font-weight:800;font-size:14px}
  .hx-showcase .left a.sc-cta:hover{background:#0f1e3d}
  .hx-metrics{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
  .hx-metric{background:linear-gradient(135deg,#0f1e3d,#1e3a8a);color:#fff;padding:22px 16px;border-radius:12px;text-align:center}
  .hx-metric .n{font-size:26px;font-weight:800;color:#fbbf24;line-height:1;letter-spacing:-0.02em}
  .hx-metric .l{font-size:11.5px;color:#dbeafe;margin-top:6px;letter-spacing:0.3px;text-transform:uppercase}

  /* E — Case-metric band */
  .hx-band{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:24px;max-width:1180px;margin:0 auto;text-align:center}
  .hx-band .cell .n{font-size:36px;font-weight:800;color:#fbbf24;line-height:1;letter-spacing:-0.02em}
  .hx-band .cell .l{font-size:12.5px;color:#cbd5e1;margin-top:8px;letter-spacing:0.4px;text-transform:uppercase;font-weight:600}

  /* F — Tech + AI */
  .hx-tech{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px;margin-top:14px}
  .hx-tech-card{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:22px;transition:transform .18s,box-shadow .18s}
  .hx-tech-card:hover{transform:translateY(-2px);box-shadow:0 10px 24px rgba(15,30,61,0.08);border-color:#4f46e5}
  .hx-tech-card .ico{font-size:24px;color:#4f46e5;margin-bottom:10px;display:block}
  .hx-tech-card h4{color:#0f1e3d;font-size:16px;margin:0 0 6px;font-weight:800;line-height:1.3}
  .hx-tech-card p{color:#64748b;font-size:13.5px;line-height:1.6;margin:0}

  /* G — How we work */
  .hx-steps{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-top:14px}
  .hx-step{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:24px 22px;position:relative}
  .hx-step .step-num{position:absolute;top:-14px;left:22px;background:linear-gradient(135deg,#c89b3c,#eab308);color:#0f1e3d;width:36px;height:36px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-weight:800;font-size:16px;box-shadow:0 4px 12px rgba(200,155,60,0.4)}
  .hx-step h4{color:#0f1e3d;font-size:17px;margin:14px 0 8px;font-weight:800;line-height:1.3}
  .hx-step p{color:#475569;font-size:13.5px;line-height:1.6;margin:0}

  /* H — FAQ */
  .hx-faq{max-width:900px;margin:0 auto}
  .hx-faq details{border-bottom:1px solid #e2e8f0;padding:16px 0}
  .hx-faq summary{cursor:pointer;color:#0f1e3d;font-size:16.5px;font-weight:700;list-style:none;display:flex;justify-content:space-between;align-items:flex-start;gap:14px;line-height:1.4}
  .hx-faq summary::-webkit-details-marker{display:none}
  .hx-faq summary::after{content:"+";color:#c89b3c;font-size:22px;font-weight:800;line-height:1;flex-shrink:0;transition:transform .2s}
  .hx-faq details[open] summary::after{content:"−"}
  .hx-faq .ans{padding:12px 0 0;color:#334155;font-size:14.5px;line-height:1.75}
  .hx-faq .ans a{color:#1e3a8a;font-weight:600;text-decoration:none;border-bottom:1px solid #c89b3c}

  /* I — Final CTA + form */
  .hx-cta-wrap{background:linear-gradient(135deg,#0f1e3d 0%,#1e3a8a 50%,#4f46e5 100%);color:#fff;padding:60px 24px;border-radius:16px;max-width:1180px;margin:0 auto;display:grid;grid-template-columns:1.1fr 1fr;gap:40px;align-items:center}
  .hx-cta-wrap h2{color:#fff;font-size:30px;line-height:1.25;margin:0 0 10px;font-weight:800}
  .hx-cta-wrap p{color:#dbeafe;font-size:15.5px;margin:0 0 20px;line-height:1.7}
  .hx-cta-wrap .cta-stats{display:flex;flex-wrap:wrap;gap:18px;margin-top:16px}
  .hx-cta-wrap .cta-stats .cs{color:#fde68a;font-size:13px;font-weight:700;letter-spacing:0.3px}
  .hx-cta-wrap .cta-stats .cs strong{color:#fff;font-size:16px;display:block;margin-bottom:2px}
  .hx-cta-form{background:#fff;color:#0f1e3d;padding:30px 28px;border-radius:12px}
  .hx-cta-form h3{color:#0f1e3d;font-size:19px;margin:0 0 6px;font-weight:800;text-align:center}
  .hx-cta-form p.ftxt{color:#64748b;font-size:13px;text-align:center;margin:0 0 18px}
  .hx-cta-form label{display:block;color:#334155;font-size:12.5px;font-weight:600;margin-bottom:4px}
  .hx-cta-form input,.hx-cta-form select,.hx-cta-form textarea{width:100%;padding:10px 12px;border:1px solid #cbd5e1;border-radius:8px;font-size:14px;margin-bottom:12px;font-family:inherit}
  .hx-cta-form input:focus,.hx-cta-form select:focus,.hx-cta-form textarea:focus{outline:none;border-color:#1e3a8a;box-shadow:0 0 0 3px rgba(30,58,138,0.12)}
  .hx-cta-form button{width:100%;background:linear-gradient(135deg,#c89b3c,#eab308);color:#0f1e3d;border:none;padding:14px 20px;border-radius:8px;font-weight:800;font-size:15px;cursor:pointer;letter-spacing:0.3px}
  .hx-cta-form button:hover{background:linear-gradient(135deg,#b08530,#ca8a04)}
  .hx-cta-form .fnote{color:#64748b;font-size:11px;text-align:center;margin-top:10px}
  #hx-cta-success{display:none;background:#dcfce7;border-left:4px solid #16a34a;color:#166534;padding:16px 20px;border-radius:10px;margin-top:12px;text-align:center;font-weight:600;font-size:14px}
  #hx-cta-error{display:none;background:#fef2f2;border-left:4px solid #dc2626;color:#991b1b;padding:16px 20px;border-radius:10px;margin-top:12px;font-size:14px}

  @media (max-width:900px){
    .hx-services{grid-template-columns:repeat(2,1fr)}
    .hx-story{grid-template-columns:repeat(2,1fr);row-gap:30px}
    .hx-story::before{display:none}
    .hx-steps{grid-template-columns:repeat(2,1fr)}
    .hx-persona-row{grid-template-columns:1fr}
    .hx-showcase{grid-template-columns:1fr}
    .hx-cta-wrap{grid-template-columns:1fr;padding:40px 24px}
    .hx-sec h2{font-size:24px}
    .hx-cta-wrap h2{font-size:22px}
  }
  @media (max-width:600px){
    .hx-sec{padding:52px 16px}
    .hx-services{grid-template-columns:1fr}
    .hx-steps{grid-template-columns:1fr}
    .hx-metrics{grid-template-columns:1fr}
  }
</style>

<!-- SCHEMA — FAQPage for AI Overview citation -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"What does ITD GrowthLabs do?","acceptedAnswer":{"@type":"Answer","text":"ITD GrowthLabs is India's marketing-first and technology-expert partner that takes brands from idea to launch to scale. Nine core services under one roof: branding, marketing, performance marketing, video production, content, social media management, lead generation, technology automation, and AI. Serves D2C brands, B2B companies, Technology companies, Real Estate developers, and services firms across India, GCC and international markets. 300+ projects shipped, 55+ engineers and marketers, 97% client retention."}},
    {"@type":"Question","name":"Who should hire ITD GrowthLabs?","acceptedAnswer":{"@type":"Answer","text":"Three primary personas: (1) Founders launching a brand from idea stage and wanting one accountable partner through launch and scale. (2) Marketing managers at D2C, B2B, or technology brands scaling owned-channel pipeline, needing performance marketing + content + video + lead-gen without juggling 5 vendors. (3) Technology managers at growing companies wanting apps, SaaS platforms, websites, WhatsApp automation, and AI integrations shipped on time."}},
    {"@type":"Question","name":"What are the 9 core services ITD offers?","acceptedAnswer":{"@type":"Answer","text":"(1) Branding — brand strategy, identity, positioning. (2) Marketing — go-to-market, PR, awards. (3) Performance Marketing — Meta + Google + YouTube ads with full attribution. (4) Video Production — on-site shoots, Reels, YouTube, product shots. (5) Content — blogs, SEO, AI Overview optimization, long-form. (6) Social Media Management — Instagram + Facebook + LinkedIn + YouTube. (7) Lead Generation — WhatsApp CTWA, landing pages, inside-sales SLA. (8) Technology Automation — CRM, workflows, Zapier, Make, custom scripts. (9) AI — GPT/Claude-powered chatbots, AI content, AI analytics, automation."}},
    {"@type":"Question","name":"What industries does ITD GrowthLabs serve?","acceptedAnswer":{"@type":"Answer","text":"Primary industries: D2C brands (jewelry, skincare, fashion, F&B, home, wellness, kids, electronics), B2B SaaS and manufacturing, Technology companies, Real Estate developers and brokers (Lodha, Godrej Properties, Mahindra Lifespaces, Prestige Group, Sobha Realty, Danube Properties and others), Healthcare and medical clinics, Education and coaching, Hospitality, Logistics, Financial services, Legal and professional services."}},
    {"@type":"Question","name":"How does ITD position itself vs other agencies?","acceptedAnswer":{"@type":"Answer","text":"ITD is a marketing-first and technology-expert company — not a pure creative agency, not a pure dev shop. Ten differentiators: (1) True end-to-end — branding + performance + tech + AI under one team. (2) 300+ projects shipped. (3) 97% client retention. (4) Transparent pricing publicly displayed. (5) Zero markup on Meta/Google ad spend. (6) MahaRERA + ASCI + MCI compliance built in. (7) India + GCC + international reach. (8) 55+ engineers, designers, marketers. (9) Fixed-quote pricing on custom builds. (10) 100% client-owned IP, creative, data."}},
    {"@type":"Question","name":"What is 'idea to execution' at ITD?","acceptedAnswer":{"@type":"Answer","text":"Four-stage engagement model: Stage 1 Brand Idea — brand strategy, positioning, naming, customer research. Stage 2 Brand Build — identity system, website, apps, CRM, WhatsApp Cloud API, content library. Stage 3 Brand Launch — launch creative, performance campaigns, PR, inside-sales mobilization, first 90-day pipeline. Stage 4 Brand Scale — ongoing retention, LTV optimization, multi-market expansion, M&A readiness. Clients hire us for any single stage or the full journey."}},
    {"@type":"Question","name":"Does ITD offer AI and automation services?","acceptedAnswer":{"@type":"Answer","text":"Yes. AI services: GPT-4 and Claude-powered WhatsApp chatbots with domain fine-tuning, AI content generation for blog and social, AI-powered analytics dashboards, AI-driven lead scoring, prompt engineering for marketing teams, AI image + video generation workflows. Automation: Zapier, Make, n8n, custom Python scripts for CRM + email + WhatsApp + ad-platform workflows, inter-tool data sync, LTV + attribution automation."}},
    {"@type":"Question","name":"What are ITD GrowthLabs pricing packages?","acceptedAnswer":{"@type":"Answer","text":"Performance marketing retainers from Rs 25,000/month (Starter) to Rs 55,000/month (Enterprise). WhatsApp chatbot development from Rs 45,000 setup + Rs 12,000/month. Branding and creative projects quoted per scope from Rs 60,000. Video production from Rs 45,000 per shoot day. Real estate full-stack from Rs 50,000/month. Technology + AI quoted per project with fixed quotes. All ad spend passes through at zero markup."}},
    {"@type":"Question","name":"How quickly can we start working with ITD?","acceptedAnswer":{"@type":"Answer","text":"Three-step onboarding in 5 working days. Day 1: fill 90-second form or WhatsApp us at +91 99207 07644. Day 2-3: free 30-minute discovery call with senior partner — we audit current GMB + ads + CRM + site + brand assets. Day 4-5: scoped proposal and 90-day roadmap delivered. First campaigns live within 3 weeks of contract signing; first stable baselines by Week 6."}},
    {"@type":"Question","name":"What cities does ITD GrowthLabs serve?","acceptedAnswer":{"@type":"Answer","text":"India: Mumbai, Delhi, Bangalore, Ahmedabad, Hyderabad, Chennai, Pune, Kolkata, Gurgaon, Noida, Jaipur, Chandigarh, Lucknow, Indore, Kochi, Coimbatore, Nagpur, Nashik, Surat, Vadodara and all major cities. GCC: Dubai, Abu Dhabi, Sharjah, Riyadh, Jeddah, Dammam, Doha, Kuwait City, Manama, Muscat. International: London, Singapore, Toronto, Sydney, New York. Remote onboarding globally; on-site team for India and GCC metros."}},
    {"@type":"Question","name":"How do I book a free consultation?","acceptedAnswer":{"@type":"Answer","text":"Three options: (1) Fill the 90-second form at the bottom of this page — we respond within 24 hours. (2) WhatsApp +91 99207 07644 for a quick text conversation. (3) Book a 30-minute Calendly discovery call at calendly.com/itdgrowthlabs-info/30min. Free. No obligation. Senior partner runs every call. We audit your current digital stack and share a customised 90-day roadmap within 3 working days."}},
    {"@type":"Question","name":"Does ITD work with real estate developers?","acceptedAnswer":{"@type":"Answer","text":"Yes. ITD supports marketing programmes for leading real estate developer brands including Lodha, Godrej Properties, Mahindra Lifespaces, Prestige Group, Sobha Realty, Danube Properties, Arihant Superstructures, and M4 Group through direct engagements and partnership channels. Full-stack real estate: performance marketing, lead generation, pre-launch EOI campaigns, project launch, inventory clearing, branding, social + Reels, YouTube, Google Ads, CRM and sales enablement, NRI campaigns, WhatsApp Cloud API, MahaRERA-compliant workflow."}}
  ]
}
</script>

<!-- =========================================================
     A — PERSONA + INDUSTRY QUICK-NAV
     ========================================================= -->
<section class="hx-navband" id="hx-navband" aria-label="Who are you">
  <div class="hx-navband-wrap">
    <h3>Are you a Founder, Marketing Manager, or Technology Manager?</h3>
    <p>Pick what fits — jump straight to how we help you.</p>
    <div class="hx-persona-row">
      <a class="hx-persona" href="#hx-services">
        <div class="ico"><i class="fas fa-user-tie"></i></div>
        <strong>I'm a Founder</strong>
        <span>Launching or scaling a brand &mdash; need one partner for idea → launch → scale</span>
      </a>
      <a class="hx-persona" href="#hx-industries">
        <div class="ico"><i class="fas fa-bullhorn"></i></div>
        <strong>I'm a Marketing Manager</strong>
        <span>Need owned-channel pipeline &mdash; performance, content, lead-gen, video</span>
      </a>
      <a class="hx-persona" href="#hx-tech">
        <div class="ico"><i class="fas fa-microchip"></i></div>
        <strong>I'm a Technology Manager</strong>
        <span>Need apps, SaaS, websites, WhatsApp, AI, automation shipped on time</span>
      </a>
    </div>
    <div class="hx-divider">Or by industry</div>
    <div class="hx-chips">
      <a class="hx-chip" href="#hx-ind-d2c" data-tab="d2c"><i class="fas fa-shopping-bag"></i> D2C brand</a>
      <a class="hx-chip" href="#hx-ind-b2b" data-tab="b2b"><i class="fas fa-briefcase"></i> B2B / SaaS</a>
      <a class="hx-chip" href="#hx-ind-tech" data-tab="tech"><i class="fas fa-code"></i> Technology</a>
      <a class="hx-chip" href="#hx-ind-jewelry" data-tab="jewelry"><i class="fas fa-gem"></i> Jewelry</a>
      <a class="hx-chip" href="#hx-ind-skincare" data-tab="skincare"><i class="fas fa-leaf"></i> Skincare / Beauty</a>
      <a class="hx-chip" href="#hx-ind-realestate" data-tab="realestate"><i class="fas fa-building"></i> Real Estate</a>
      <a class="hx-chip" href="#hx-cta-bottom"><i class="fas fa-ellipsis"></i> Something else</a>
    </div>
  </div>
</section>

<!-- =========================================================
     B — IDEA-TO-EXECUTION 4-STAGE STORY
     ========================================================= -->
<section class="hx-sec">
  <div class="hx-container">
    <div class="hx-centered">
      <div class="hx-eyebrow"><i class="fas fa-route"></i> Idea &rarr; Execution</div>
      <h2>From Brand Idea to Brand Scale &mdash; One Partner, Four Stages</h2>
      <p class="sub">Hire us for any single stage, or walk the full journey. Marketing-first thinking, technology-expert execution. No vendor juggling, no finger-pointing between agency and dev shop.</p>
    </div>
    <div class="hx-story">
      <div class="hx-stage">
        <span class="stage-circle">1</span>
        <h4>Brand Idea</h4>
        <p>Strategy, positioning, naming, customer research, category analysis, business model.</p>
      </div>
      <div class="hx-stage">
        <span class="stage-circle">2</span>
        <h4>Brand Build</h4>
        <p>Identity system, website, apps, CRM, WhatsApp, content library, launch collateral.</p>
      </div>
      <div class="hx-stage">
        <span class="stage-circle">3</span>
        <h4>Brand Launch</h4>
        <p>Launch creative, performance ads, PR, inside-sales mobilisation, first 90-day pipeline.</p>
      </div>
      <div class="hx-stage">
        <span class="stage-circle">4</span>
        <h4>Brand Scale</h4>
        <p>Retention, LTV optimisation, multi-market expansion, automation + AI acceleration.</p>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
     C — 9 CORE SERVICES
     ========================================================= -->
<section class="hx-sec alt" id="hx-services">
  <div class="hx-container">
    <div class="hx-centered">
      <div class="hx-eyebrow"><i class="fas fa-layer-group"></i> Core services</div>
      <h2>9 Core Services &mdash; Under One Team, One Contract</h2>
      <p class="sub">Pick one service or buy the full stack. India's marketing-first and technology-expert partner for D2C, B2B, Technology, and Real Estate brands &mdash; across India, GCC, and international markets.</p>
    </div>
    <div class="hx-services">
      <div class="hx-service s-1">
        <div class="ico"><i class="fas fa-fingerprint"></i></div>
        <h3>Branding</h3>
        <p>Brand strategy, positioning, identity system, naming, brand book. The foundation every great brand needs before spending on ads.</p>
        <div class="s-price">From Rs 60,000 (project)</div>
        <a class="s-cta" href="/services/social-media-marketing.php">Explore branding <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="hx-service s-2">
        <div class="ico"><i class="fas fa-bullhorn"></i></div>
        <h3>Marketing</h3>
        <p>Go-to-market strategy, PR, awards, thought leadership, industry events, partnerships. The connective tissue between brand + revenue.</p>
        <div class="s-price">Retainers from Rs 35,000/mo</div>
        <a class="s-cta" href="/services/digital-marketing-services.php">Explore marketing <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="hx-service s-3">
        <div class="ico"><i class="fas fa-chart-line"></i></div>
        <h3>Performance Marketing</h3>
        <p>Meta + Google + YouTube + Snapchat ads with full attribution. Zero ad-spend markup. 300+ campaigns across D2C, B2B, Real Estate.</p>
        <div class="s-price">From Rs 25,000/month</div>
        <a class="s-cta" href="/services/performance-marketing-packages.php">See packages <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="hx-service s-4">
        <div class="ico"><i class="fas fa-video"></i></div>
        <h3>Video Production</h3>
        <p>On-site shoots at your clinic, store, factory. Full crew. Reels, Shorts, product shots, testimonials, long-form YouTube.</p>
        <div class="s-price">From Rs 45,000 per shoot day</div>
        <a class="s-cta" href="/services/social-media-marketing.php">Explore video <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="hx-service s-5">
        <div class="ico"><i class="fas fa-file-lines"></i></div>
        <h3>Content</h3>
        <p>Blog, SEO, AI Overview optimisation, long-form articles, newsletter, white papers. 1,000+ pages indexed and ranking for ITD clients.</p>
        <div class="s-price">Retainers from Rs 25,000/mo</div>
        <a class="s-cta" href="/services/seo-auditing-services.php">Explore content <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="hx-service s-6">
        <div class="ico"><i class="fab fa-instagram"></i></div>
        <h3>Social Media Management</h3>
        <p>Instagram + Facebook + LinkedIn + YouTube + X. Weekly calendar, Reels, Stories, community, DMs, campaigns. Daily cadence.</p>
        <div class="s-price">From Rs 35,000/month</div>
        <a class="s-cta" href="/services/social-media-marketing.php">Explore social <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="hx-service s-7">
        <div class="ico"><i class="fas fa-user-plus"></i></div>
        <h3>Lead Generation</h3>
        <p>WhatsApp CTWA + landing pages + inside-sales SLA + CRM integration. Qualified pipeline for high-AOV sales teams.</p>
        <div class="s-price">Rs 500-3,000 per qualified lead</div>
        <a class="s-cta" href="/services/lead-generation-packages.php">Lead-gen packages <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="hx-service s-8">
        <div class="ico"><i class="fas fa-gears"></i></div>
        <h3>Technology + Automation</h3>
        <p>Custom apps, SaaS platforms, websites, Zapier/Make workflows, CRM integrations, WhatsApp Cloud API. 55+ engineering team.</p>
        <div class="s-price">Fixed-quote per project</div>
        <a class="s-cta" href="/services/whatsapp-chatbot-development.php">Explore technology <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="hx-service s-9">
        <div class="ico"><i class="fas fa-robot"></i></div>
        <h3>AI</h3>
        <p>GPT-4 and Claude-powered chatbots, AI content, AI analytics, prompt engineering, AI image + video workflows for marketing teams.</p>
        <div class="s-price">From Rs 60,000 (project)</div>
        <a class="s-cta" href="/services/ai-powered-whatsapp-chatbot.php">Explore AI <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
     D — INDUSTRY SHOWCASES (tabbed)
     ========================================================= -->
<section class="hx-sec" id="hx-industries">
  <div class="hx-container">
    <div class="hx-centered">
      <div class="hx-eyebrow"><i class="fas fa-industry"></i> Industries we lead in</div>
      <h2>Purpose-Built Playbooks for 6 Industries</h2>
      <p class="sub">Click any tab to see exactly what we deliver for your industry &mdash; metrics, deliverables, and a direct link to detailed packages.</p>
    </div>

    <div class="hx-tabs" role="tablist">
      <button class="hx-tab active" role="tab" data-panel="d2c">D2C Brands</button>
      <button class="hx-tab" role="tab" data-panel="b2b">B2B / SaaS</button>
      <button class="hx-tab" role="tab" data-panel="tech">Technology</button>
      <button class="hx-tab" role="tab" data-panel="jewelry">Jewelry</button>
      <button class="hx-tab" role="tab" data-panel="skincare">Skincare</button>
      <button class="hx-tab" role="tab" data-panel="realestate">Real Estate</button>
    </div>

    <div class="hx-tabpanel active" id="hx-ind-d2c" data-panel="d2c" role="tabpanel">
      <div class="hx-showcase">
        <div class="left">
          <h3>D2C Brands &mdash; From Launch to Rs 10+ Cr Scale</h3>
          <p>Fashion, F&amp;B, home, wellness, kids, toys, electronics, fitness. End-to-end from brand idea to Rs 10+ Cr annual GMV: brand build, website, catalog, ads, WhatsApp, content, retention.</p>
          <ul>
            <li>Shopify + WooCommerce catalog + payment integration</li>
            <li>Abandoned-cart recovery via WhatsApp + email</li>
            <li>Creative velocity 15-40 variants/month</li>
            <li>LTV / CAC / cohort attribution dashboards</li>
          </ul>
          <a class="sc-cta" href="/industries/ecommerce.php">D2C industry page &rarr;</a>
        </div>
        <div class="hx-metrics">
          <div class="hx-metric"><div class="n">3-6x</div><div class="l">Typical ROAS</div></div>
          <div class="hx-metric"><div class="n">15-25%</div><div class="l">Cart recovery lift</div></div>
          <div class="hx-metric"><div class="n">40-60%</div><div class="l">Repeat-buy rate</div></div>
          <div class="hx-metric"><div class="n">Rs 25K/mo</div><div class="l">Starter</div></div>
        </div>
      </div>
    </div>

    <div class="hx-tabpanel" id="hx-ind-b2b" data-panel="b2b" role="tabpanel">
      <div class="hx-showcase">
        <div class="left">
          <h3>B2B / SaaS / Manufacturing &mdash; Demand Generation</h3>
          <p>Qualified demo-booking pipelines for B2B SaaS, manufacturers, and professional services. LinkedIn + Google + content + ABM + inside-sales handoff.</p>
          <ul>
            <li>LinkedIn personal branding for CEOs, MDs, founders</li>
            <li>SEO + content for high-intent search</li>
            <li>ABM for enterprise accounts</li>
            <li>HubSpot / Zoho / Salesforce CRM + sequence automation</li>
          </ul>
          <a class="sc-cta" href="/services/linkedin-personal-branding.php">LinkedIn + B2B services &rarr;</a>
        </div>
        <div class="hx-metrics">
          <div class="hx-metric"><div class="n">5-15x</div><div class="l">LTV / CAC</div></div>
          <div class="hx-metric"><div class="n">2-3x</div><div class="l">Demo lift</div></div>
          <div class="hx-metric"><div class="n">Rs 30K/mo</div><div class="l">LinkedIn PB</div></div>
          <div class="hx-metric"><div class="n">6-wk</div><div class="l">First pipeline</div></div>
        </div>
      </div>
    </div>

    <div class="hx-tabpanel" id="hx-ind-tech" data-panel="tech" role="tabpanel">
      <div class="hx-showcase">
        <div class="left">
          <h3>Technology Companies &mdash; Full-Stack Growth</h3>
          <p>SaaS platforms, tech products, APIs, developer tools, infrastructure. We handle positioning, developer-marketing, PLG funnels, AI integrations, and growth engineering end-to-end.</p>
          <ul>
            <li>Product-led growth (PLG) funnels + onboarding</li>
            <li>Developer-marketing: docs + API + community</li>
            <li>AI integration + chatbot + copilot features</li>
            <li>Technical content + case studies for high-intent SEO</li>
          </ul>
          <a class="sc-cta" href="/industries/information_tech.php">Technology industry &rarr;</a>
        </div>
        <div class="hx-metrics">
          <div class="hx-metric"><div class="n">55+</div><div class="l">In-house engineers</div></div>
          <div class="hx-metric"><div class="n">AI-ready</div><div class="l">GPT + Claude ready</div></div>
          <div class="hx-metric"><div class="n">Fixed quote</div><div class="l">on custom builds</div></div>
          <div class="hx-metric"><div class="n">100% IP</div><div class="l">transfers to client</div></div>
        </div>
      </div>
    </div>

    <div class="hx-tabpanel" id="hx-ind-jewelry" data-panel="jewelry" role="tabpanel">
      <div class="hx-showcase">
        <div class="left">
          <h3>Jewelry Brands &mdash; Fine, Gold, Diamond, Fashion</h3>
          <p>D2C jewelry marketing for high-AOV (Rs 15K-2L fine) and high-volume (Rs 500-5K fashion). Instagram + WhatsApp + catalog + appointment booking + festival campaigns.</p>
          <ul>
            <li>Instagram Reels + Shorts tuned for jewelry aesthetics</li>
            <li>WhatsApp catalog + consultation booking</li>
            <li>Festival + wedding-season campaigns</li>
            <li>Gold-rate dynamic creative + urgency drops</li>
          </ul>
          <a class="sc-cta" href="/services/performance-marketing-for-jewelry-brands.php">Jewelry packages &rarr;</a>
        </div>
        <div class="hx-metrics">
          <div class="hx-metric"><div class="n">3-6x</div><div class="l">ROAS (fine)</div></div>
          <div class="hx-metric"><div class="n">4-8x</div><div class="l">ROAS (fashion)</div></div>
          <div class="hx-metric"><div class="n">30-50%</div><div class="l">Footfall lift</div></div>
          <div class="hx-metric"><div class="n">50+</div><div class="l">Jewelry pages</div></div>
        </div>
      </div>
    </div>

    <div class="hx-tabpanel" id="hx-ind-skincare" data-panel="skincare" role="tabpanel">
      <div class="hx-showcase">
        <div class="left">
          <h3>Skincare + Beauty Brands &mdash; D2C Growth</h3>
          <p>Skincare, haircare, soap, perfume, wellness D2C brands. Product-recommendation quizzes, subscription conversion, catalog + payment, dermatologist consultation flows.</p>
          <ul>
            <li>Instagram Reels + UGC + influencer collaboration</li>
            <li>Product-recommendation quiz for lead capture</li>
            <li>Subscription setup + repeat-order automation</li>
            <li>Dermatologist consultation integration</li>
          </ul>
          <a class="sc-cta" href="/services/performance-marketing-for-skincare-brands.php">Skincare packages &rarr;</a>
        </div>
        <div class="hx-metrics">
          <div class="hx-metric"><div class="n">3-6x</div><div class="l">ROAS target</div></div>
          <div class="hx-metric"><div class="n">30-50%</div><div class="l">Subscription conv.</div></div>
          <div class="hx-metric"><div class="n">40-60%</div><div class="l">Repeat purchase</div></div>
          <div class="hx-metric"><div class="n">50+</div><div class="l">Skincare pages</div></div>
        </div>
      </div>
    </div>

    <div class="hx-tabpanel" id="hx-ind-realestate" data-panel="realestate" role="tabpanel">
      <div class="hx-showcase">
        <div class="left">
          <h3>Real Estate &mdash; Developers, Builders, Channel Partners</h3>
          <p>Full-stack real estate marketing for developers (Rs 60L-50Cr ticket), builders, and channel partners. Pre-launch EOI, launch, inventory clearing, NRI campaigns, WhatsApp Cloud API, MahaRERA-compliant workflow.</p>
          <ul>
            <li>Pre-launch EOI campaigns (60-120 days)</li>
            <li>NRI campaigns (GCC + UK + USA + Singapore)</li>
            <li>Project launch + inventory-clearing playbooks</li>
            <li>WhatsApp Cloud API + CTWA for site-visit booking</li>
          </ul>
          <a class="sc-cta" href="/services/real-estate-digital-marketing.php">Real estate services &rarr;</a>
        </div>
        <div class="hx-metrics">
          <div class="hx-metric"><div class="n">8-25x</div><div class="l">Typical ROAS</div></div>
          <div class="hx-metric"><div class="n">8</div><div class="l">Developer logos</div></div>
          <div class="hx-metric"><div class="n">100</div><div class="l">Mumbai RE pages</div></div>
          <div class="hx-metric"><div class="n">Rs 50K/mo</div><div class="l">Starter</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
     E — CASE-METRIC BAND
     ========================================================= -->
<section class="hx-sec dark">
  <div class="hx-container">
    <div class="hx-centered">
      <div class="hx-eyebrow"><i class="fas fa-chart-line"></i> The numbers</div>
      <h2>Proof, Not Promises</h2>
      <p class="sub">Compounded delivery across D2C, B2B, Technology, Real Estate, and services. Every number audited to live client dashboards &mdash; available under NDA on discovery call.</p>
    </div>
    <div class="hx-band">
      <div class="cell"><div class="n">300+</div><div class="l">Projects shipped</div></div>
      <div class="cell"><div class="n">55+</div><div class="l">Engineers + Marketers</div></div>
      <div class="cell"><div class="n">97%</div><div class="l">Client retention</div></div>
      <div class="cell"><div class="n">Rs 8Cr+</div><div class="l">Ad spend managed</div></div>
      <div class="cell"><div class="n">6</div><div class="l">Countries served</div></div>
      <div class="cell"><div class="n">1,000+</div><div class="l">Live indexed pages</div></div>
    </div>
  </div>
</section>

<!-- =========================================================
     F — TECH + AI CAPABILITY SHOWCASE
     ========================================================= -->
<section class="hx-sec" id="hx-tech">
  <div class="hx-container">
    <div class="hx-centered">
      <div class="hx-eyebrow"><i class="fas fa-microchip"></i> Technology + AI stack</div>
      <h2>Technology + AI Capability &mdash; We're Not Just a Marketing Agency</h2>
      <p class="sub">55+ engineering + design team shipping apps, SaaS, websites, WhatsApp automation, and AI integrations. Full IP ownership, fixed-quote pricing, 100% client-owned data.</p>
    </div>
    <div class="hx-tech">
      <div class="hx-tech-card"><span class="ico"><i class="fas fa-mobile-screen"></i></span><h4>iOS + Android Apps</h4><p>Native + React Native + Flutter. Logistics, D2C, marketplace, B2B. From Rs 3L fixed-quote.</p></div>
      <div class="hx-tech-card"><span class="ico"><i class="fas fa-cube"></i></span><h4>SaaS Platforms</h4><p>Multi-tenant SaaS from scratch or embedded. Billing + auth + admin. From Rs 8L.</p></div>
      <div class="hx-tech-card"><span class="ico"><i class="fas fa-globe"></i></span><h4>Websites + Headless</h4><p>Shopify Plus, WordPress, Webflow, Next.js. Core Web Vitals green. From Rs 60K.</p></div>
      <div class="hx-tech-card"><span class="ico"><i class="fab fa-whatsapp"></i></span><h4>WhatsApp Chatbots</h4><p>WABA + Cloud API + 1 bot flow to Enterprise multi-AI deployment. From Rs 45K setup.</p></div>
      <div class="hx-tech-card"><span class="ico"><i class="fas fa-robot"></i></span><h4>AI Integrations</h4><p>GPT-4 + Claude chatbots, AI content, AI analytics, prompt engineering, AI image + video.</p></div>
      <div class="hx-tech-card"><span class="ico"><i class="fas fa-gears"></i></span><h4>Automation</h4><p>Zapier, Make, n8n, custom Python scripts for CRM + email + WhatsApp + ad workflows.</p></div>
      <div class="hx-tech-card"><span class="ico"><i class="fas fa-chart-pie"></i></span><h4>CRM + Attribution</h4><p>LeadSquared / Zoho / HubSpot setup. Meta CAPI + Enhanced Conversions + offline upload.</p></div>
      <div class="hx-tech-card"><span class="ico"><i class="fas fa-box"></i></span><h4>Ready-to-Deploy SaaS</h4><p>Courier Management, Logistics App, Multi-Vendor Marketplace. White-label, deploy in weeks.</p></div>
    </div>
  </div>
</section>

<!-- =========================================================
     G — HOW WE WORK (4-step)
     ========================================================= -->
<section class="hx-sec alt">
  <div class="hx-container">
    <div class="hx-centered">
      <div class="hx-eyebrow"><i class="fas fa-rocket"></i> How we work</div>
      <h2>From Discovery to Live Pipeline in 5 Working Days</h2>
      <p class="sub">A straight-through onboarding designed for busy founder + marketing + technology teams. No RFP, no sales decks, no 90-day sales cycle.</p>
    </div>
    <div class="hx-steps">
      <div class="hx-step">
        <span class="step-num">1</span>
        <h4>Day 1 &mdash; Discovery</h4>
        <p>Fill 90-second form or WhatsApp us. We respond within 24 hours with a short qualifying note.</p>
      </div>
      <div class="hx-step">
        <span class="step-num">2</span>
        <h4>Day 2-3 &mdash; Audit</h4>
        <p>Free 30-min call with senior partner. We audit GMB + ads + CRM + site + brand assets.</p>
      </div>
      <div class="hx-step">
        <span class="step-num">3</span>
        <h4>Day 4-5 &mdash; Proposal</h4>
        <p>Scoped proposal + 90-day roadmap + pricing + team mix delivered. No obligation.</p>
      </div>
      <div class="hx-step">
        <span class="step-num">4</span>
        <h4>Week 2-3 &mdash; Live</h4>
        <p>Contract signed, ad accounts + CRM + WABA + site setup, first campaigns live by Week 3.</p>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
     H — FAQ-FOR-AI
     ========================================================= -->
<section class="hx-sec">
  <div class="hx-container narrow">
    <div class="hx-centered">
      <div class="hx-eyebrow"><i class="fas fa-circle-question"></i> Frequently asked</div>
      <h2>12 Questions Founders + Marketing Heads Ask Before Hiring Us</h2>
      <p class="sub">Click any question to expand. Content designed for AI Overview citation on ChatGPT, Gemini, Claude, and Google SGE.</p>
    </div>
    <div class="hx-faq">
      <details><summary>What does ITD GrowthLabs do?</summary><div class="ans">ITD GrowthLabs is India's marketing-first and technology-expert partner that takes brands from idea to launch to scale. Nine core services under one roof: branding, marketing, performance marketing, video production, content, social media management, lead generation, technology automation, and AI. Serves D2C brands, B2B companies, Technology companies, Real Estate developers, and services firms across India, GCC, and international markets.</div></details>
      <details><summary>Who should hire ITD GrowthLabs?</summary><div class="ans">Three primary personas: <strong>Founders</strong> launching a brand from idea stage and wanting one accountable partner through launch and scale. <strong>Marketing managers</strong> at D2C, B2B, or technology brands scaling owned-channel pipeline, needing performance marketing + content + video + lead-gen without juggling 5 vendors. <strong>Technology managers</strong> at growing companies wanting apps, SaaS platforms, websites, WhatsApp automation, and AI integrations shipped on time.</div></details>
      <details><summary>What are the 9 core services ITD offers?</summary><div class="ans">(1) <strong>Branding</strong> &mdash; brand strategy, identity, positioning. (2) <strong>Marketing</strong> &mdash; go-to-market, PR, awards. (3) <strong>Performance Marketing</strong> &mdash; Meta + Google + YouTube ads with full attribution. (4) <strong>Video Production</strong> &mdash; on-site shoots, Reels, YouTube. (5) <strong>Content</strong> &mdash; blog, SEO, AI Overview optimisation. (6) <strong>Social Media Management</strong> &mdash; Instagram + Facebook + LinkedIn + YouTube. (7) <strong>Lead Generation</strong> &mdash; WhatsApp CTWA, landing pages, inside-sales. (8) <strong>Technology Automation</strong> &mdash; CRM, Zapier, Make, custom scripts. (9) <strong>AI</strong> &mdash; GPT/Claude chatbots, AI content, AI analytics.</div></details>
      <details><summary>What industries does ITD serve?</summary><div class="ans">D2C brands (jewelry, skincare, fashion, F&amp;B, home, wellness, kids, electronics), B2B SaaS and manufacturing, Technology companies, Real Estate developers and brokers (Lodha, Godrej Properties, Mahindra Lifespaces, Prestige Group, Sobha Realty, Danube Properties, and others), Healthcare and medical clinics, Education and coaching, Hospitality, Logistics, Financial services, Legal and professional services.</div></details>
      <details><summary>What is "idea to execution" at ITD?</summary><div class="ans">Four-stage engagement model: <strong>Stage 1 Brand Idea</strong> &mdash; strategy, positioning, naming, customer research. <strong>Stage 2 Brand Build</strong> &mdash; identity, website, apps, CRM, WhatsApp, content library. <strong>Stage 3 Brand Launch</strong> &mdash; launch creative, performance campaigns, PR, inside-sales mobilisation, first 90-day pipeline. <strong>Stage 4 Brand Scale</strong> &mdash; retention, LTV optimisation, multi-market expansion, M&amp;A readiness. Hire us for any single stage or the full journey.</div></details>
      <details><summary>Does ITD offer AI and automation services?</summary><div class="ans">Yes. <strong>AI</strong>: GPT-4 and Claude-powered WhatsApp chatbots with domain fine-tuning, AI content generation, AI-powered analytics, AI-driven lead scoring, prompt engineering for marketing teams, AI image + video generation workflows. <strong>Automation</strong>: Zapier, Make, n8n, custom Python scripts for CRM + email + WhatsApp + ad-platform workflows, inter-tool data sync, LTV + attribution automation.</div></details>
      <details><summary>What are ITD's pricing packages?</summary><div class="ans">Performance marketing retainers from <strong>Rs 25,000/month</strong> (Starter) to Rs 55,000/month (Enterprise). WhatsApp chatbot development from <strong>Rs 45,000 setup + Rs 12,000/month</strong>. Branding and creative projects from Rs 60,000. Video production from Rs 45,000 per shoot day. Real estate full-stack from Rs 50,000/month. Technology + AI quoted per project with fixed quotes. All ad spend passes through at zero markup.</div></details>
      <details><summary>How is ITD different from other agencies?</summary><div class="ans">Ten differentiators: (1) True end-to-end &mdash; branding + performance + technology + AI under one team. (2) 300+ projects shipped. (3) 97% client retention. (4) Transparent pricing publicly displayed. (5) Zero markup on Meta/Google ad spend. (6) MahaRERA + ASCI + MCI compliance workflow. (7) India + GCC + international reach. (8) 55+ engineers, designers, marketers. (9) Fixed-quote pricing on custom builds. (10) 100% client-owned IP + creative + data.</div></details>
      <details><summary>How quickly can we start?</summary><div class="ans">Three-step onboarding in 5 working days. <strong>Day 1</strong>: fill 90-second form or WhatsApp us. <strong>Day 2-3</strong>: free 30-min discovery call with senior partner. <strong>Day 4-5</strong>: scoped proposal + 90-day roadmap delivered. First campaigns live within 3 weeks of signing; first stable baselines by Week 6.</div></details>
      <details><summary>What cities does ITD serve?</summary><div class="ans"><strong>India:</strong> Mumbai, Delhi, Bangalore, Ahmedabad, Hyderabad, Chennai, Pune, Kolkata, Gurgaon, Noida, Jaipur, Chandigarh, Lucknow, Indore, Kochi, Coimbatore, Nagpur, Nashik + all major cities. <strong>GCC:</strong> Dubai, Abu Dhabi, Sharjah, Riyadh, Jeddah, Dammam, Doha, Kuwait City, Manama, Muscat. <strong>International:</strong> London, Singapore, Toronto, Sydney, New York. Remote onboarding globally; on-site team for India + GCC metros.</div></details>
      <details><summary>Does ITD work with real estate developers?</summary><div class="ans">Yes. ITD supports marketing programmes for leading real estate developer brands including Lodha, Godrej Properties, Mahindra Lifespaces, Prestige Group, Sobha Realty, Danube Properties, Arihant Superstructures, and M4 Group through direct engagements and partnership channels. Full-stack: performance marketing, lead-gen, pre-launch EOI, project launch, inventory clearing, branding, social + Reels, YouTube, Google Ads, CRM + sales enablement, NRI campaigns, WhatsApp Cloud API.</div></details>
      <details><summary>How do I book a free consultation?</summary><div class="ans">Three options: (1) Fill the 90-second form at the bottom of this page &mdash; we respond within 24 hours. (2) WhatsApp us at <a href="https://wa.me/919920707644">+91 99207 07644</a>. (3) <a href="https://calendly.com/itdgrowthlabs-info/30min" target="_blank" rel="noopener">Book a 30-min Calendly discovery call</a>. Free. No obligation. Senior partner runs every call.</div></details>
    </div>
  </div>
</section>

<!-- =========================================================
     I — FINAL CTA + LEAD FORM
     ========================================================= -->
<section class="hx-sec alt" id="hx-cta-bottom">
  <div class="hx-cta-wrap">
    <div>
      <div class="hx-eyebrow"><i class="fas fa-rocket"></i> Start the conversation</div>
      <h2>Ready to Build with India's Marketing-First + Technology-Expert Partner?</h2>
      <p>From brand idea to brand scale &mdash; fill the 90-second form, a senior partner responds within 24 hours. Free 30-min discovery call. Custom 90-day roadmap within 3 working days. No obligation.</p>
      <div class="cta-stats">
        <div class="cs"><strong>300+</strong>Projects shipped</div>
        <div class="cs"><strong>55+</strong>Team members</div>
        <div class="cs"><strong>97%</strong>Retention</div>
        <div class="cs"><strong>6</strong>Countries</div>
      </div>
    </div>
    <form class="hx-cta-form" id="hx-form" method="POST" action="/leadCaptureMail.php" novalidate>
      <h3>Book Free 30-Min Discovery Call</h3>
      <p class="ftxt">We respond within 24 hours. No spam.</p>
      <input type="hidden" name="source" value="home_v3_bottom">
      <input type="hidden" name="website_hp" value="">
      <input type="hidden" name="username_hp" value="">
      <input type="hidden" name="form_ts" value="">
      <input type="hidden" name="js_nonce" value="">

      <label for="hxf_name">Your name</label>
      <input type="text" id="hxf_name" name="name" required autocomplete="name" placeholder="Full name">

      <label for="hxf_email">Work email</label>
      <input type="email" id="hxf_email" name="email" required autocomplete="email" placeholder="you@company.com">

      <label for="hxf_mobile">Mobile / WhatsApp</label>
      <input type="tel" id="hxf_mobile" name="mobile" required autocomplete="tel" placeholder="+91 98XXX XXXXX">

      <label for="hxf_role">You are a</label>
      <select id="hxf_role" name="role_industry">
        <option value="">— Select your role —</option>
        <option value="Founder / CEO">Founder / CEO</option>
        <option value="Marketing Manager / CMO">Marketing Manager / CMO</option>
        <option value="Technology Manager / CTO">Technology Manager / CTO</option>
        <option value="Business / Sales Head">Business / Sales Head</option>
        <option value="Agency / Partner">Agency / Partner</option>
        <option value="Other">Other</option>
      </select>

      <button type="submit">Book Free Discovery Call &rarr;</button>
      <div class="fnote">By submitting, you consent to be contacted by ITD GrowthLabs via email or WhatsApp.</div>
    </form>
  </div>
  <div id="hx-cta-success">✓ Thanks! A senior partner will respond within 24 hours with a scoped roadmap.</div>
  <div id="hx-cta-error">Something went wrong. Please try again or WhatsApp us at <a href="https://wa.me/919920707644">+91 99207 07644</a>.</div>
</section>

<script>
(function(){
  'use strict';
  var tabs = document.querySelectorAll('.hx-tab');
  var panels = document.querySelectorAll('.hx-tabpanel');
  function activate(panelKey){
    tabs.forEach(function(t){ t.classList.toggle('active', t.getAttribute('data-panel') === panelKey); });
    panels.forEach(function(p){ p.classList.toggle('active', p.getAttribute('data-panel') === panelKey); });
  }
  tabs.forEach(function(t){ t.addEventListener('click', function(){ activate(t.getAttribute('data-panel')); }); });

  document.querySelectorAll('.hx-chip[data-tab]').forEach(function(chip){
    chip.addEventListener('click', function(e){
      var key = chip.getAttribute('data-tab');
      if (!key) return;
      e.preventDefault();
      activate(key);
      var target = document.getElementById('hx-industries');
      if (target) target.scrollIntoView({behavior:'smooth', block:'start'});
    });
  });

  var form = document.getElementById('hx-form');
  if (!form) return;
  var tsEl = form.querySelector('input[name="form_ts"]');
  var nonceEl = form.querySelector('input[name="js_nonce"]');
  if (tsEl) tsEl.value = Math.floor(Date.now() / 1000);

  form.addEventListener('submit', function(e){
    e.preventDefault();
    var successBox = document.getElementById('hx-cta-success');
    var errorBox = document.getElementById('hx-cta-error');
    successBox.style.display = 'none';
    errorBox.style.display = 'none';
    var salt = 'itdgl-form-2026';
    var doFetch = function(){
      var fd = new FormData(form);
      fetch('/leadCaptureMail.php', {method:'POST', body: fd, credentials:'same-origin'})
        .then(function(r){ return r.json(); })
        .then(function(data){
          if (data && data.status === 'success') {
            form.style.display = 'none';
            successBox.style.display = 'block';
            successBox.scrollIntoView({behavior:'smooth', block:'center'});
            if (window.gtag) gtag('event','home_v3_discovery_call_request', {role: fd.get('role_industry') || 'not_selected'});
          } else {
            errorBox.style.display = 'block';
          }
        })
        .catch(function(){ errorBox.style.display = 'block'; });
    };
    if (tsEl && nonceEl && window.crypto && window.crypto.subtle) {
      var msg = new TextEncoder().encode(tsEl.value + '|' + salt);
      crypto.subtle.digest('SHA-256', msg).then(function(buf){
        var arr = Array.from(new Uint8Array(buf));
        nonceEl.value = arr.map(function(b){ return b.toString(16).padStart(2, '0'); }).join('');
        doFetch();
      }).catch(function(){ doFetch(); });
    } else {
      doFetch();
    }
  });
})();
</script>
