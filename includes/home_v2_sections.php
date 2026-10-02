<?php
/**
 * Home v2 — standard redesign sections.
 *
 * Injected into index.php between the existing trust-clients section and
 * the Real Estate developers strip. Renders 7 sections designed for a
 * tight conversion funnel + full SEO/GEO/AEO/AI-Overview coverage.
 *
 *   1. Industry quick-nav ("I'm a…" selector)
 *   2. 3 capability pillars (Branding+Creative, Performance Marketing, Technology)
 *   3. Industry showcases (tabbed — D2C, B2B, Jewelry, Skincare, Real Estate)
 *   4. Case-metric band
 *   5. Tech capability showcase
 *   6. FAQ-for-AI (12 answer-first Q&As + FAQPage schema inline)
 *   7. Final CTA + lead form (posts to /leadCaptureMail.php, source=home_v2_bottom)
 *
 * No external dependencies. Vanilla CSS + JS. Mobile-first.
 */
?>
<style>
  :root{--h2-navy:#0f1e3d;--h2-navy2:#1e3a8a;--h2-ink:#0b1220;--h2-muted:#64748b;--h2-bg:#f8fafc;--h2-line:#e2e8f0;--h2-gold:#c89b3c;--h2-teal:#0d9488;--h2-orange:#ea580c;--h2-emerald:#059669;--h2-indigo:#4f46e5}

  .h2v-sec{padding:72px 20px;background:#fff}
  .h2v-sec.alt{background:#f8fafc}
  .h2v-sec.dark{background:#0b1220;color:#fff}
  .h2v-container{max-width:1180px;margin:0 auto}
  .h2v-container.narrow{max-width:860px}
  .h2v-eyebrow{display:inline-flex;align-items:center;gap:8px;background:rgba(200,155,60,0.14);color:#8a6520;padding:5px 14px;border-radius:99px;font-size:11.5px;font-weight:800;letter-spacing:0.6px;text-transform:uppercase;margin-bottom:12px;border:1px solid rgba(200,155,60,0.28)}
  .h2v-sec.dark .h2v-eyebrow{background:rgba(200,155,60,0.22);color:#fde68a;border-color:rgba(200,155,60,0.35)}
  .h2v-sec h2{color:#0f1e3d;font-size:32px;margin:0 0 10px;font-weight:800;line-height:1.25;letter-spacing:-0.01em}
  .h2v-sec.dark h2{color:#fff}
  .h2v-sec p.sub{color:#475569;font-size:16px;margin:0 0 32px;max-width:780px;line-height:1.7}
  .h2v-sec.dark p.sub{color:#cbd5e1}
  .h2v-centered{text-align:center}
  .h2v-centered h2,.h2v-centered p.sub{margin-left:auto;margin-right:auto}

  /* 1. INDUSTRY QUICK-NAV */
  .h2v-indnav{background:linear-gradient(135deg,#eff6ff 0%,#f1f5f9 100%);padding:44px 20px;border-top:1px solid #e2e8f0;border-bottom:1px solid #e2e8f0}
  .h2v-indnav-wrap{max-width:1100px;margin:0 auto;text-align:center}
  .h2v-indnav h3{color:#0f1e3d;font-size:22px;margin:0 0 6px;font-weight:800;letter-spacing:-0.01em}
  .h2v-indnav p{color:#475569;font-size:14.5px;margin:0 0 20px}
  .h2v-chips{display:flex;flex-wrap:wrap;gap:10px;justify-content:center}
  .h2v-chip{display:inline-flex;align-items:center;gap:8px;background:#fff;border:1.5px solid #e2e8f0;color:#0f1e3d;padding:12px 18px;border-radius:99px;font-size:14px;font-weight:700;text-decoration:none;transition:all .18s;cursor:pointer}
  .h2v-chip:hover,.h2v-chip.active{border-color:#1e3a8a;background:#1e3a8a;color:#fff;transform:translateY(-2px);box-shadow:0 8px 20px rgba(30,58,138,0.22)}
  .h2v-chip i{font-size:13px;color:#c89b3c}
  .h2v-chip:hover i,.h2v-chip.active i{color:#fde68a}

  /* 2. CAPABILITY PILLARS */
  .h2v-pillars{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:10px}
  .h2v-pillar{background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:30px 28px;position:relative;transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column}
  .h2v-pillar:hover{transform:translateY(-3px);box-shadow:0 16px 40px rgba(15,30,61,0.1);border-color:#1e3a8a}
  .h2v-pillar .p-tag{display:inline-block;background:linear-gradient(135deg,#1e3a8a,#4f46e5);color:#fff;padding:4px 10px;border-radius:99px;font-size:10.5px;font-weight:800;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:12px;align-self:flex-start}
  .h2v-pillar.p-gold .p-tag{background:linear-gradient(135deg,#c89b3c,#eab308)}
  .h2v-pillar.p-teal .p-tag{background:linear-gradient(135deg,#0d9488,#059669)}
  .h2v-pillar h3{color:#0f1e3d;font-size:21px;margin:0 0 8px;font-weight:800;line-height:1.3}
  .h2v-pillar p.p-sub{color:#475569;font-size:14.5px;line-height:1.6;margin:0 0 18px}
  .h2v-pillar ul{list-style:none;padding:0;margin:0 0 20px}
  .h2v-pillar ul li{padding:6px 0 6px 24px;position:relative;color:#334155;font-size:13.5px;line-height:1.5}
  .h2v-pillar ul li::before{content:"\\f00c";font-family:"Font Awesome 6 Free";font-weight:900;position:absolute;left:0;top:7px;color:#059669;font-size:12px}
  .h2v-pillar .p-price{color:#8a6520;font-size:13px;font-weight:700;margin-bottom:14px;padding-top:12px;border-top:1px dashed #e2e8f0}
  .h2v-pillar a.p-cta{display:inline-flex;align-items:center;gap:6px;color:#1e3a8a;font-size:14px;font-weight:800;text-decoration:none;margin-top:auto}
  .h2v-pillar a.p-cta:hover{color:#0f1e3d;gap:10px;transition:gap .18s}

  /* 3. INDUSTRY SHOWCASES — tabbed */
  .h2v-tabs{display:flex;flex-wrap:wrap;gap:8px;justify-content:center;margin-bottom:28px;border-bottom:1px solid #e2e8f0;padding-bottom:14px}
  .h2v-tab{background:transparent;border:1.5px solid #e2e8f0;color:#64748b;padding:10px 18px;border-radius:99px;font-size:13.5px;font-weight:700;cursor:pointer;transition:all .18s}
  .h2v-tab:hover{color:#0f1e3d;border-color:#c89b3c}
  .h2v-tab.active{background:#0f1e3d;border-color:#0f1e3d;color:#fff}
  .h2v-tabpanel{display:none}
  .h2v-tabpanel.active{display:block;animation:h2vfade .22s ease-out}
  @keyframes h2vfade{from{opacity:0;transform:translateY(6px)}to{opacity:1;transform:none}}
  .h2v-showcase{display:grid;grid-template-columns:1fr 1fr;gap:28px;align-items:center;background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:34px 32px}
  .h2v-showcase .left h3{color:#0f1e3d;font-size:22px;margin:0 0 10px;font-weight:800;line-height:1.3}
  .h2v-showcase .left p{color:#475569;font-size:15px;line-height:1.7;margin:0 0 16px}
  .h2v-showcase .left ul{list-style:none;padding:0;margin:0 0 18px}
  .h2v-showcase .left ul li{padding:6px 0 6px 22px;position:relative;color:#334155;font-size:14px;line-height:1.5}
  .h2v-showcase .left ul li::before{content:"\\f061";font-family:"Font Awesome 6 Free";font-weight:900;position:absolute;left:0;top:7px;color:#c89b3c;font-size:11px}
  .h2v-showcase .left a.sc-cta{display:inline-block;background:#1e3a8a;color:#fff;padding:11px 20px;border-radius:8px;text-decoration:none;font-weight:800;font-size:14px}
  .h2v-showcase .left a.sc-cta:hover{background:#0f1e3d}
  .h2v-metrics{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
  .h2v-metric{background:linear-gradient(135deg,#0f1e3d,#1e3a8a);color:#fff;padding:22px 16px;border-radius:12px;text-align:center}
  .h2v-metric .n{font-size:26px;font-weight:800;color:#fbbf24;line-height:1;letter-spacing:-0.02em}
  .h2v-metric .l{font-size:11.5px;color:#dbeafe;margin-top:6px;letter-spacing:0.3px;text-transform:uppercase}

  /* 4. CASE-METRIC BAND */
  .h2v-band{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:24px;max-width:1180px;margin:0 auto;text-align:center}
  .h2v-band .cell .n{font-size:36px;font-weight:800;color:#fbbf24;line-height:1;letter-spacing:-0.02em}
  .h2v-band .cell .l{font-size:12.5px;color:#cbd5e1;margin-top:8px;letter-spacing:0.4px;text-transform:uppercase;font-weight:600}

  /* 5. TECH CAPABILITY */
  .h2v-tech{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px;margin-top:14px}
  .h2v-tech-card{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:22px}
  .h2v-tech-card .ico{font-size:24px;color:#4f46e5;margin-bottom:10px;display:block}
  .h2v-tech-card h4{color:#0f1e3d;font-size:16px;margin:0 0 6px;font-weight:800;line-height:1.3}
  .h2v-tech-card p{color:#64748b;font-size:13.5px;line-height:1.6;margin:0}

  /* 6. FAQ */
  .h2v-faq{max-width:900px;margin:0 auto}
  .h2v-faq details{border-bottom:1px solid #e2e8f0;padding:16px 0}
  .h2v-faq summary{cursor:pointer;color:#0f1e3d;font-size:16.5px;font-weight:700;list-style:none;display:flex;justify-content:space-between;align-items:flex-start;gap:14px;line-height:1.4}
  .h2v-faq summary::-webkit-details-marker{display:none}
  .h2v-faq summary::after{content:"+";color:#c89b3c;font-size:22px;font-weight:800;line-height:1;flex-shrink:0;transition:transform .2s}
  .h2v-faq details[open] summary::after{content:"−"}
  .h2v-faq .ans{padding:12px 0 0;color:#334155;font-size:14.5px;line-height:1.75}
  .h2v-faq .ans a{color:#1e3a8a;font-weight:600;text-decoration:none;border-bottom:1px solid #c89b3c}

  /* 7. FINAL CTA + FORM */
  .h2v-cta-wrap{background:linear-gradient(135deg,#0f1e3d 0%,#1e3a8a 50%,#4f46e5 100%);color:#fff;padding:60px 24px;border-radius:16px;max-width:1180px;margin:0 auto;display:grid;grid-template-columns:1.1fr 1fr;gap:40px;align-items:center}
  .h2v-cta-wrap h2{color:#fff;font-size:30px;line-height:1.25;margin:0 0 10px;font-weight:800}
  .h2v-cta-wrap p{color:#dbeafe;font-size:15.5px;margin:0 0 20px;line-height:1.7}
  .h2v-cta-wrap .cta-stats{display:flex;flex-wrap:wrap;gap:18px;margin-top:16px}
  .h2v-cta-wrap .cta-stats .cs{color:#fde68a;font-size:13px;font-weight:700;letter-spacing:0.3px}
  .h2v-cta-wrap .cta-stats .cs strong{color:#fff;font-size:16px;display:block;margin-bottom:2px}
  .h2v-cta-form{background:#fff;color:#0f1e3d;padding:30px 28px;border-radius:12px}
  .h2v-cta-form h3{color:#0f1e3d;font-size:19px;margin:0 0 6px;font-weight:800;text-align:center}
  .h2v-cta-form p.ftxt{color:#64748b;font-size:13px;text-align:center;margin:0 0 18px}
  .h2v-cta-form label{display:block;color:#334155;font-size:12.5px;font-weight:600;margin-bottom:4px}
  .h2v-cta-form input,.h2v-cta-form select,.h2v-cta-form textarea{width:100%;padding:10px 12px;border:1px solid #cbd5e1;border-radius:8px;font-size:14px;margin-bottom:12px;font-family:inherit}
  .h2v-cta-form input:focus,.h2v-cta-form select:focus,.h2v-cta-form textarea:focus{outline:none;border-color:#1e3a8a;box-shadow:0 0 0 3px rgba(30,58,138,0.12)}
  .h2v-cta-form button{width:100%;background:linear-gradient(135deg,#c89b3c,#eab308);color:#0f1e3d;border:none;padding:14px 20px;border-radius:8px;font-weight:800;font-size:15px;cursor:pointer;letter-spacing:0.3px}
  .h2v-cta-form button:hover{background:linear-gradient(135deg,#b08530,#ca8a04)}
  .h2v-cta-form .fnote{color:#64748b;font-size:11px;text-align:center;margin-top:10px}
  #h2v-cta-success{display:none;background:#dcfce7;border-left:4px solid #16a34a;color:#166534;padding:16px 20px;border-radius:10px;margin-top:12px;text-align:center;font-weight:600;font-size:14px}
  #h2v-cta-error{display:none;background:#fef2f2;border-left:4px solid #dc2626;color:#991b1b;padding:16px 20px;border-radius:10px;margin-top:12px;font-size:14px}

  @media (max-width:900px){
    .h2v-pillars{grid-template-columns:1fr}
    .h2v-showcase{grid-template-columns:1fr}
    .h2v-cta-wrap{grid-template-columns:1fr;padding:40px 24px}
    .h2v-sec h2{font-size:24px}
    .h2v-cta-wrap h2{font-size:22px}
  }
  @media (max-width:600px){
    .h2v-sec{padding:52px 16px}
    .h2v-metrics{grid-template-columns:1fr}
  }
</style>

<!-- ============================================================
     SCHEMA — FAQPage for AI Overview citation
     ============================================================ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"What does ITD GrowthLabs do?","acceptedAnswer":{"@type":"Answer","text":"ITD GrowthLabs is an end-to-end technology, branding and marketing company based in India. We serve D2C brands, B2B companies, Jewelry brands, Skincare brands, and Real Estate developers across India, GCC and international markets. Capabilities: branding and advertising, performance marketing (Meta + Google + YouTube), lead generation, WhatsApp chatbots, websites and custom apps, SaaS platforms, video production, CRM and attribution."}},
    {"@type":"Question","name":"Who does ITD GrowthLabs work with?","acceptedAnswer":{"@type":"Answer","text":"300+ projects shipped for D2C brands, B2B SaaS companies, jewelry brands (fine + imitation + gold), skincare and beauty brands, real estate developers and brokers, medical clinics, education and coaching institutes, hotels, logistics, and financial services. Industry mix: 40% D2C, 25% B2B, 20% Real Estate, 15% services and others. Clients across India, UAE, Saudi Arabia, Qatar, Kuwait, Bahrain, Oman, UK, Singapore, USA, Australia."}},
    {"@type":"Question","name":"What are ITD GrowthLabs pricing packages?","acceptedAnswer":{"@type":"Answer","text":"Performance marketing retainers start at Rs 25,000/month (Starter) and scale to Rs 55,000/month (Enterprise). WhatsApp chatbot development starts at Rs 45,000 setup + Rs 12,000/month. Branding and creative projects quoted per scope. Ad spend passes through at zero markup. Fixed-quote pricing available for custom app and SaaS builds. See /services/ for full package detail."}},
    {"@type":"Question","name":"How is ITD different from other marketing agencies in India?","acceptedAnswer":{"@type":"Answer","text":"Ten reasons: (1) True end-to-end — branding + performance + technology + content + video + CRM under one team. (2) 300+ projects shipped with 97% client retention. (3) Transparent pricing publicly displayed. (4) Zero markup on Meta + Google ad spend. (5) MahaRERA + ASCI + MCI compliance workflow built in. (6) India + GCC + international reach with on-site teams. (7) 55+ engineers, designers, and marketers. (8) Fixed-quote pricing on custom builds. (9) 100% client-owned IP + creative + data. (10) Senior partner on every discovery call and quarterly review."}},
    {"@type":"Question","name":"Does ITD work with real estate developers?","acceptedAnswer":{"@type":"Answer","text":"Yes. ITD supports marketing programmes for leading real estate developer brands including Lodha, Godrej Properties, Mahindra Lifespaces, Prestige Group, Sobha Realty, Danube Properties, Arihant Superstructures, and M4 Group through direct engagements and partnership channels. Full-stack real estate marketing: performance marketing, lead generation, pre-launch EOI campaigns, project launch marketing, inventory clearing, branding, social + Reels, YouTube, Google Ads, CRM and sales enablement, NRI campaigns, and WhatsApp Cloud API."}},
    {"@type":"Question","name":"Can ITD build websites and custom apps?","acceptedAnswer":{"@type":"Answer","text":"Yes. ITD runs a 55+ engineering team building custom apps (iOS + Android), SaaS platforms, websites, headless commerce stores, CRM integrations, WhatsApp Cloud API chatbots, and lead-gen funnels. We also deliver ready-to-deploy products: Courier Management Software, Custom Logistics Mobile App, Multi-Vendor Marketplace App. Fixed-quote pricing. Full IP ownership transfers to client."}},
    {"@type":"Question","name":"What industries does ITD specialise in?","acceptedAnswer":{"@type":"Answer","text":"Primary specialisations: Direct-to-Consumer (D2C) brands across jewelry, skincare, beauty, fashion, home, F&B, wellness. B2B SaaS and manufacturing. Real estate developers and brokers. Medical clinics and dermatology. Education and coaching. Hospitality. Logistics and supply chain. We also serve financial services, legal, and professional services firms. Vertical-specific playbooks and compliance workflows for each industry."}},
    {"@type":"Question","name":"What cities does ITD GrowthLabs serve?","acceptedAnswer":{"@type":"Answer","text":"India: Mumbai, Delhi, Bangalore, Ahmedabad, Hyderabad, Chennai, Pune, Kolkata, Gurgaon, Noida, Jaipur, Chandigarh, Lucknow, Indore, Kochi, Coimbatore, Nagpur, Nashik, Surat, Vadodara + all major cities. GCC: Dubai, Abu Dhabi, Sharjah, Riyadh, Jeddah, Dammam, Doha, Kuwait City, Manama, Muscat. International: London, Singapore, Toronto, Sydney, New York. Remote onboarding globally; on-site team available for India + GCC metros."}},
    {"@type":"Question","name":"How quickly can we start?","acceptedAnswer":{"@type":"Answer","text":"Three-step onboarding takes 5 working days. Day 1: fill a 90-second form or WhatsApp us. Day 2-3: free 30-minute discovery call with senior partner, we audit current GMB + ads + CRM + site. Day 4-5: scoped proposal and 90-day roadmap delivered. First campaigns typically live within 3 weeks of contract signing, with first stable performance baselines by Week 6."}},
    {"@type":"Question","name":"Does ITD offer video production and content shoots?","acceptedAnswer":{"@type":"Answer","text":"Yes. On-site photography and video shoots at your clinic, store, factory, or project site. Full crew (photographer + videographer + director + lighting). Deliverables: 4-8 Instagram Reels per shoot day, 40-80 high-res photos, 2-4 long-form testimonial videos, YouTube Shorts, product shots. Equipment: Sony A7 IV, DJI RS 3 gimbal, Rode wireless audio, Amaran lighting. Frequency: quarterly (Growth tier) to weekly (Enterprise)."}},
    {"@type":"Question","name":"Do you handle NRI and international campaigns?","acceptedAnswer":{"@type":"Answer","text":"Yes. GCC + North America + UK + Singapore + Canada campaigns with Arabic + regional-language creative, virtual walkthroughs for real estate, time-zone optimised ad scheduling, and NRI financing partner introductions (ICICI NRI, HDFC NRI, Axis NRI). GCC event activations in Dubai, Riyadh, Doha. Multi-currency reporting (INR + USD + AED + SAR + QAR)."}},
    {"@type":"Question","name":"How do I book a free consultation with ITD?","acceptedAnswer":{"@type":"Answer","text":"Three options: (1) Fill the 90-second form at the bottom of this page — we respond within 24 hours. (2) WhatsApp us at +91 99207 07644. (3) Book a 30-minute Calendly discovery call at https://calendly.com/itdgrowthlabs-info/30min. Free. No obligation. Senior partner runs the call. We audit your current digital stack and share a customised 90-day roadmap within 3 working days."}}
  ]
}
</script>

<!-- ============================================================
     1 — INDUSTRY QUICK-NAV ("I'm a…")
     ============================================================ -->
<section class="h2v-indnav" id="h2v-indnav" aria-label="Industry quick navigation">
  <div class="h2v-indnav-wrap">
    <h3>Which best describes you?</h3>
    <p>Jump straight to what we do for your industry.</p>
    <div class="h2v-chips">
      <a class="h2v-chip" href="#h2v-ind-d2c" data-tab="d2c"><i class="fas fa-shopping-bag"></i> D2C brand</a>
      <a class="h2v-chip" href="#h2v-ind-b2b" data-tab="b2b"><i class="fas fa-briefcase"></i> B2B / SaaS</a>
      <a class="h2v-chip" href="#h2v-ind-jewelry" data-tab="jewelry"><i class="fas fa-gem"></i> Jewelry brand</a>
      <a class="h2v-chip" href="#h2v-ind-skincare" data-tab="skincare"><i class="fas fa-leaf"></i> Skincare / Beauty</a>
      <a class="h2v-chip" href="#h2v-ind-realestate" data-tab="realestate"><i class="fas fa-building"></i> Real Estate</a>
      <a class="h2v-chip" href="#h2v-cta-bottom" data-tab="other"><i class="fas fa-ellipsis"></i> Something else</a>
    </div>
  </div>
</section>

<!-- ============================================================
     2 — CAPABILITY PILLARS (3 pillars for the full offer)
     ============================================================ -->
<section class="h2v-sec">
  <div class="h2v-container">
    <div class="h2v-centered">
      <div class="h2v-eyebrow"><i class="fas fa-layer-group"></i> What we do</div>
      <h2>Three Capability Pillars &mdash; One Team, One Contract</h2>
      <p class="sub">India's end-to-end technology, branding + marketing partner. Pick one pillar or buy the full stack. No vendor juggling, no finger-pointing between agency and tech partner.</p>
    </div>
    <div class="h2v-pillars">

      <div class="h2v-pillar p-gold">
        <span class="p-tag">Pillar 1</span>
        <h3>Branding + Creative + Video</h3>
        <p class="p-sub">Brand strategy + identity + content + on-site video shoots. Build a brand buyers choose over commodity peers.</p>
        <ul>
          <li>Brand positioning + identity system + brand book</li>
          <li>Instagram Reels + YouTube Shorts (6-15/month)</li>
          <li>On-site photography + video shoots (full crew)</li>
          <li>Content marketing + blog + SEO/AI Overview</li>
          <li>PR + awards + thought-leadership programme</li>
        </ul>
        <div class="p-price">Projects from Rs 60,000 &middot; Retainers from Rs 35,000/mo</div>
        <a class="p-cta" href="/services/social-media-marketing.php">Explore Branding + Creative <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="h2v-pillar p-teal">
        <span class="p-tag">Pillar 2 &middot; Most Popular</span>
        <h3>Performance Marketing + Lead Gen</h3>
        <p class="p-sub">Meta + Google + YouTube ads with full attribution. Qualified pipeline on tap. Zero ad-spend markup.</p>
        <ul>
          <li>Meta + Google + YouTube + Snapchat (GCC) ads</li>
          <li>Full attribution: Meta CAPI + Enhanced Conversions</li>
          <li>WhatsApp Cloud API + CTWA campaigns</li>
          <li>CRM integration (Zoho + HubSpot + LeadSquared)</li>
          <li>Inside-sales SLA + call tracking + nurture flows</li>
        </ul>
        <div class="p-price">Starts Rs 25,000/mo &middot; Commission / per-lead / ROAS models available</div>
        <a class="p-cta" href="/services/performance-marketing-packages.php">See Performance Packages <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="h2v-pillar">
        <span class="p-tag">Pillar 3</span>
        <h3>Technology + Apps + Websites</h3>
        <p class="p-sub">55+ engineering team. Custom apps, SaaS platforms, websites, WhatsApp bots. Full IP ownership, fixed-quote pricing.</p>
        <ul>
          <li>Custom iOS + Android apps + SaaS platforms</li>
          <li>Websites (Shopify, WordPress, headless, custom)</li>
          <li>WhatsApp chatbots + Cloud API integration</li>
          <li>Ready-to-deploy: Courier, Logistics, Marketplace apps</li>
          <li>CRM + ERP + analytics + attribution dashboards</li>
        </ul>
        <div class="p-price">WhatsApp bots from Rs 45,000 &middot; Custom apps fixed-quote</div>
        <a class="p-cta" href="/services/whatsapp-chatbot-development.php">Explore Technology <i class="fas fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     3 — INDUSTRY SHOWCASES (tabbed)
     ============================================================ -->
<section class="h2v-sec alt" id="h2v-industries">
  <div class="h2v-container">
    <div class="h2v-centered">
      <div class="h2v-eyebrow"><i class="fas fa-industry"></i> Industries we lead in</div>
      <h2>Purpose-Built Playbooks for 5 Core Industries</h2>
      <p class="sub">Vertical-specific creative, compliance, and attribution refined across 300+ engagements. Click any tab to see exactly what we deliver for your industry.</p>
    </div>

    <div class="h2v-tabs" role="tablist">
      <button class="h2v-tab active" role="tab" data-panel="d2c">D2C Brands</button>
      <button class="h2v-tab" role="tab" data-panel="b2b">B2B / SaaS</button>
      <button class="h2v-tab" role="tab" data-panel="jewelry">Jewelry</button>
      <button class="h2v-tab" role="tab" data-panel="skincare">Skincare / Beauty</button>
      <button class="h2v-tab" role="tab" data-panel="realestate">Real Estate</button>
    </div>

    <div class="h2v-tabpanel active" id="h2v-ind-d2c" data-panel="d2c" role="tabpanel">
      <div class="h2v-showcase">
        <div class="left">
          <h3>D2C Brands &mdash; From Launch to Scale</h3>
          <p>Fashion, apparel, F&amp;B, home, wellness, kids, toys, electronics, fitness &mdash; we scale D2C brands from pre-launch to Rs 10+ Cr annual GMV with Meta + Google + WhatsApp + content + landing-page funnels.</p>
          <ul>
            <li>Shopify + WooCommerce catalog + payment integration</li>
            <li>Abandoned-cart recovery via WhatsApp + email</li>
            <li>Creative velocity 15-40 variants/month</li>
            <li>LTV / CAC / cohort attribution dashboards</li>
          </ul>
          <a class="sc-cta" href="/industries/ecommerce.php">D2C industry page &rarr;</a>
        </div>
        <div class="h2v-metrics">
          <div class="h2v-metric"><div class="n">3-6x</div><div class="l">Typical ROAS</div></div>
          <div class="h2v-metric"><div class="n">15-25%</div><div class="l">Cart recovery lift</div></div>
          <div class="h2v-metric"><div class="n">40-60%</div><div class="l">Repeat-buy rate</div></div>
          <div class="h2v-metric"><div class="n">Rs 25K/mo</div><div class="l">Starter package</div></div>
        </div>
      </div>
    </div>

    <div class="h2v-tabpanel" id="h2v-ind-b2b" data-panel="b2b" role="tabpanel">
      <div class="h2v-showcase">
        <div class="left">
          <h3>B2B / SaaS / Manufacturing &mdash; Demand Generation</h3>
          <p>Qualified demo-booking pipelines for B2B SaaS, manufacturers, and professional services. LinkedIn + Google + content + ABM + inside-sales handoff.</p>
          <ul>
            <li>LinkedIn organic + ads + personal branding for CEOs/MDs</li>
            <li>SEO + content for high-intent search</li>
            <li>Account-Based Marketing (ABM) for enterprise accounts</li>
            <li>HubSpot / Zoho / Salesforce CRM + sequence automation</li>
          </ul>
          <a class="sc-cta" href="/services/linkedin-personal-branding.php">LinkedIn + B2B services &rarr;</a>
        </div>
        <div class="h2v-metrics">
          <div class="h2v-metric"><div class="n">5-15x</div><div class="l">LTV / CAC ratio</div></div>
          <div class="h2v-metric"><div class="n">2-3x</div><div class="l">Demo-booking lift</div></div>
          <div class="h2v-metric"><div class="n">Rs 30K/mo</div><div class="l">LinkedIn personal brand</div></div>
          <div class="h2v-metric"><div class="n">6-wk</div><div class="l">First pipeline live</div></div>
        </div>
      </div>
    </div>

    <div class="h2v-tabpanel" id="h2v-ind-jewelry" data-panel="jewelry" role="tabpanel">
      <div class="h2v-showcase">
        <div class="left">
          <h3>Jewelry Brands &mdash; Fine, Gold, Diamond, Fashion</h3>
          <p>D2C jewelry marketing for high-AOV (Rs 15K-2L fine) and high-volume (Rs 500-5K fashion) categories. Instagram + WhatsApp + catalog + appointment booking + festival campaigns.</p>
          <ul>
            <li>Instagram Reels + Shorts for jewelry aesthetics</li>
            <li>WhatsApp catalog + consultation booking</li>
            <li>Festival + wedding-season campaigns</li>
            <li>Gold-rate dynamic creative + urgency drops</li>
          </ul>
          <a class="sc-cta" href="/services/performance-marketing-for-jewelry-brands.php">Jewelry performance marketing &rarr;</a>
        </div>
        <div class="h2v-metrics">
          <div class="h2v-metric"><div class="n">3-6x</div><div class="l">ROAS (fine)</div></div>
          <div class="h2v-metric"><div class="n">4-8x</div><div class="l">ROAS (fashion)</div></div>
          <div class="h2v-metric"><div class="n">30-50%</div><div class="l">Footfall booking lift</div></div>
          <div class="h2v-metric"><div class="n">50+</div><div class="l">Jewelry blog pieces live</div></div>
        </div>
      </div>
    </div>

    <div class="h2v-tabpanel" id="h2v-ind-skincare" data-panel="skincare" role="tabpanel">
      <div class="h2v-showcase">
        <div class="left">
          <h3>Skincare + Beauty Brands &mdash; D2C Growth</h3>
          <p>Skincare, haircare, soap, perfume, wellness D2C brands. Product-recommendation quizzes, subscription conversion, catalog + payment, skin-consultation flows.</p>
          <ul>
            <li>Instagram Reels + UGC + influencer collaboration</li>
            <li>Product-recommendation quiz for lead capture</li>
            <li>Subscription setup + repeat-order automation</li>
            <li>Dermatologist + skin-consultation integration</li>
          </ul>
          <a class="sc-cta" href="/services/performance-marketing-for-skincare-brands.php">Skincare performance marketing &rarr;</a>
        </div>
        <div class="h2v-metrics">
          <div class="h2v-metric"><div class="n">3-6x</div><div class="l">ROAS target</div></div>
          <div class="h2v-metric"><div class="n">30-50%</div><div class="l">Subscription conv.</div></div>
          <div class="h2v-metric"><div class="n">40-60%</div><div class="l">Repeat purchase rate</div></div>
          <div class="h2v-metric"><div class="n">50+</div><div class="l">Skincare blog pieces</div></div>
        </div>
      </div>
    </div>

    <div class="h2v-tabpanel" id="h2v-ind-realestate" data-panel="realestate" role="tabpanel">
      <div class="h2v-showcase">
        <div class="left">
          <h3>Real Estate &mdash; Developers + Builders + Channel Partners</h3>
          <p>Full-stack real estate marketing for developers (Rs 60L-50Cr ticket), builders, and channel partners across Mumbai + India + GCC. Pre-launch EOI, launch, inventory-clearing, NRI campaigns, WhatsApp Cloud API, MahaRERA-compliant.</p>
          <ul>
            <li>Pre-launch EOI campaigns (60-120 days)</li>
            <li>NRI campaigns (GCC + UK + USA + Singapore)</li>
            <li>Project launch + inventory-clearing playbooks</li>
            <li>WhatsApp Cloud API + CTWA for site-visit booking</li>
          </ul>
          <a class="sc-cta" href="/services/real-estate-digital-marketing.php">Real estate services &rarr;</a>
        </div>
        <div class="h2v-metrics">
          <div class="h2v-metric"><div class="n">8-25x</div><div class="l">Typical ROAS</div></div>
          <div class="h2v-metric"><div class="n">8</div><div class="l">Developer logos displayed</div></div>
          <div class="h2v-metric"><div class="n">100</div><div class="l">Mumbai RE playbook pages</div></div>
          <div class="h2v-metric"><div class="n">Rs 50K/mo</div><div class="l">Starter package</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     4 — CASE-METRIC BAND
     ============================================================ -->
<section class="h2v-sec dark">
  <div class="h2v-container">
    <div class="h2v-centered">
      <div class="h2v-eyebrow"><i class="fas fa-chart-line"></i> The numbers</div>
      <h2>Proof, Not Promises</h2>
      <p class="sub">Six years of compounded delivery across D2C, B2B, Real Estate, and services. Every number audited to live client dashboards &mdash; available under NDA on discovery call.</p>
    </div>
    <div class="h2v-band">
      <div class="cell"><div class="n">300+</div><div class="l">Projects shipped</div></div>
      <div class="cell"><div class="n">55+</div><div class="l">Engineers + Marketers</div></div>
      <div class="cell"><div class="n">97%</div><div class="l">Client retention</div></div>
      <div class="cell"><div class="n">Rs 8Cr+</div><div class="l">Annual ad spend managed</div></div>
      <div class="cell"><div class="n">6</div><div class="l">Countries served</div></div>
      <div class="cell"><div class="n">1,000+</div><div class="l">Live indexed pages</div></div>
    </div>
  </div>
</section>

<!-- ============================================================
     5 — TECHNOLOGY CAPABILITY (we're not just an agency)
     ============================================================ -->
<section class="h2v-sec">
  <div class="h2v-container">
    <div class="h2v-centered">
      <div class="h2v-eyebrow"><i class="fas fa-microchip"></i> Technology stack</div>
      <h2>Technology Capability &mdash; We're Not Just an Agency</h2>
      <p class="sub">55+ engineering + design team shipping custom apps, SaaS platforms, websites, and WhatsApp Cloud API chatbots. Full IP ownership, fixed-quote pricing, 100% client-owned data.</p>
    </div>
    <div class="h2v-tech">
      <div class="h2v-tech-card"><span class="ico"><i class="fas fa-mobile-screen"></i></span><h4>Custom iOS + Android Apps</h4><p>Native + React Native + Flutter. Logistics, D2C, marketplace, B2B apps. From Rs 3L fixed-quote.</p></div>
      <div class="h2v-tech-card"><span class="ico"><i class="fas fa-cube"></i></span><h4>SaaS Platforms</h4><p>Multi-tenant SaaS from scratch or embedded. Billing + auth + admin console. From Rs 8L.</p></div>
      <div class="h2v-tech-card"><span class="ico"><i class="fas fa-globe"></i></span><h4>Websites + Headless</h4><p>Shopify Plus, WordPress, Webflow, custom Next.js. Core Web Vitals green. From Rs 60K.</p></div>
      <div class="h2v-tech-card"><span class="ico"><i class="fab fa-whatsapp"></i></span><h4>WhatsApp Chatbots</h4><p>WABA + Cloud API + 1 bot flow to Enterprise multi-AI deployment. From Rs 45K setup.</p></div>
      <div class="h2v-tech-card"><span class="ico"><i class="fas fa-chart-pie"></i></span><h4>CRM + Attribution</h4><p>LeadSquared / Zoho / HubSpot setup. Meta CAPI + Enhanced Conversions + offline upload.</p></div>
      <div class="h2v-tech-card"><span class="ico"><i class="fas fa-box"></i></span><h4>Ready-to-Deploy SaaS</h4><p>Courier Management, Logistics App, Multi-Vendor Marketplace. White-label, deploy in weeks.</p></div>
    </div>
  </div>
</section>

<!-- ============================================================
     6 — FAQ (schema above head, user-facing accordion here)
     ============================================================ -->
<section class="h2v-sec alt">
  <div class="h2v-container narrow">
    <div class="h2v-centered">
      <div class="h2v-eyebrow"><i class="fas fa-circle-question"></i> Frequently asked</div>
      <h2>12 Answers Founders + Marketing Heads Need Before Hiring Us</h2>
      <p class="sub">Click any question to expand. Content designed for AI Overview citation on ChatGPT, Gemini, Claude, and Google SGE.</p>
    </div>
    <div class="h2v-faq">
      <details><summary>What does ITD GrowthLabs do?</summary><div class="ans">ITD GrowthLabs is an end-to-end technology, branding and marketing company based in India. We serve D2C brands, B2B companies, Jewelry brands, Skincare brands, and Real Estate developers across India, GCC and international markets. Capabilities: branding and advertising, performance marketing (Meta + Google + YouTube), lead generation, WhatsApp chatbots, websites and custom apps, SaaS platforms, video production, CRM and attribution.</div></details>
      <details><summary>Who does ITD GrowthLabs work with?</summary><div class="ans">300+ projects shipped for D2C brands, B2B SaaS, jewelry brands, skincare and beauty brands, real estate developers and brokers, medical clinics, education and coaching institutes, hotels, logistics, and financial services. Industry mix: 40% D2C, 25% B2B, 20% Real Estate, 15% services and others. Clients across India, UAE, Saudi Arabia, Qatar, Kuwait, Bahrain, Oman, UK, Singapore, USA, Australia.</div></details>
      <details><summary>What are ITD GrowthLabs pricing packages?</summary><div class="ans">Performance marketing retainers start at <strong>Rs 25,000/month</strong> (Starter) and scale to Rs 55,000/month (Enterprise). WhatsApp chatbot development starts at <strong>Rs 45,000 setup + Rs 12,000/month</strong>. Branding and creative projects quoted per scope. Ad spend passes through at zero markup. Fixed-quote pricing available for custom app and SaaS builds. See <a href="/services/performance-marketing-packages.php">packages page</a> for full detail.</div></details>
      <details><summary>How is ITD different from other marketing agencies in India?</summary><div class="ans">Ten reasons: (1) True end-to-end &mdash; branding + performance + technology + content + video + CRM under one team. (2) 300+ projects shipped with 97% client retention. (3) Transparent pricing publicly displayed. (4) Zero markup on Meta + Google ad spend. (5) MahaRERA + ASCI + MCI compliance workflow built in. (6) India + GCC + international reach with on-site teams. (7) 55+ engineers, designers, and marketers. (8) Fixed-quote pricing on custom builds. (9) 100% client-owned IP + creative + data. (10) Senior partner on every discovery call and quarterly review.</div></details>
      <details><summary>Does ITD work with real estate developers?</summary><div class="ans">Yes. ITD supports marketing programmes for leading real estate developer brands including Lodha, Godrej Properties, Mahindra Lifespaces, Prestige Group, Sobha Realty, Danube Properties, Arihant Superstructures, and M4 Group through direct engagements and partnership channels. Full-stack: performance marketing, lead generation, pre-launch EOI, project launch, inventory clearing, branding, social + Reels, YouTube, Google Ads, CRM and sales enablement, NRI campaigns, WhatsApp Cloud API.</div></details>
      <details><summary>Can ITD build websites and custom apps?</summary><div class="ans">Yes. 55+ engineering team building custom apps (iOS + Android), SaaS platforms, websites, headless commerce stores, CRM integrations, WhatsApp Cloud API chatbots, and lead-gen funnels. Ready-to-deploy products: Courier Management Software, Custom Logistics Mobile App, Multi-Vendor Marketplace App. Fixed-quote pricing. Full IP ownership transfers to client.</div></details>
      <details><summary>What industries does ITD specialise in?</summary><div class="ans">Primary specialisations: D2C across jewelry, skincare, beauty, fashion, home, F&amp;B, wellness. B2B SaaS and manufacturing. Real estate developers and brokers. Medical clinics and dermatology. Education and coaching. Hospitality. Logistics and supply chain. Also financial services, legal, and professional services firms. Vertical-specific playbooks and compliance workflows per industry.</div></details>
      <details><summary>What cities does ITD GrowthLabs serve?</summary><div class="ans"><strong>India:</strong> Mumbai, Delhi, Bangalore, Ahmedabad, Hyderabad, Chennai, Pune, Kolkata, Gurgaon, Noida, Jaipur, Chandigarh, Lucknow, Indore, Kochi, Coimbatore, Nagpur, Nashik + all major cities. <strong>GCC:</strong> Dubai, Abu Dhabi, Sharjah, Riyadh, Jeddah, Dammam, Doha, Kuwait City, Manama, Muscat. <strong>International:</strong> London, Singapore, Toronto, Sydney, New York. Remote onboarding globally; on-site team for India + GCC metros.</div></details>
      <details><summary>How quickly can we start?</summary><div class="ans">Three-step onboarding takes 5 working days. Day 1: fill the 90-second form below or WhatsApp us. Day 2-3: free 30-minute discovery call with senior partner, we audit current GMB + ads + CRM + site. Day 4-5: scoped proposal and 90-day roadmap delivered. First campaigns typically live within 3 weeks of signing, with first stable baselines by Week 6.</div></details>
      <details><summary>Does ITD offer video production and content shoots?</summary><div class="ans">Yes. On-site photography and video shoots at your clinic, store, factory, or project site. Full crew (photographer + videographer + director + lighting). Deliverables: 4-8 Instagram Reels per shoot day, 40-80 high-res photos, 2-4 long-form testimonial videos, YouTube Shorts, product shots. Equipment: Sony A7 IV, DJI RS 3 gimbal, Rode wireless audio, Amaran lighting. Frequency: quarterly (Growth tier) to weekly (Enterprise).</div></details>
      <details><summary>Do you handle NRI and international campaigns?</summary><div class="ans">Yes. GCC + North America + UK + Singapore + Canada campaigns with Arabic + regional-language creative, virtual walkthroughs for real estate, time-zone optimised ad scheduling, and NRI financing partner introductions. GCC event activations in Dubai, Riyadh, Doha. Multi-currency reporting (INR + USD + AED + SAR + QAR).</div></details>
      <details><summary>How do I book a free consultation with ITD?</summary><div class="ans">Three options: (1) Fill the 90-second form at the bottom of this page &mdash; we respond within 24 hours. (2) WhatsApp us at <a href="https://wa.me/919920707644">+91 99207 07644</a>. (3) <a href="https://calendly.com/itdgrowthlabs-info/30min" target="_blank" rel="noopener">Book a 30-min Calendly discovery call</a>. Free. No obligation. Senior partner runs the call.</div></details>
    </div>
  </div>
</section>

<!-- ============================================================
     7 — FINAL CTA + LEAD FORM
     ============================================================ -->
<section class="h2v-sec" id="h2v-cta-bottom">
  <div class="h2v-cta-wrap">
    <div>
      <div class="h2v-eyebrow"><i class="fas fa-rocket"></i> Start the conversation</div>
      <h2>Ready to Scale with India's End-to-End Tech + Marketing Partner?</h2>
      <p>Fill the 90-second form &mdash; a senior partner responds within 24 hours. Free 30-minute discovery call. Custom 90-day roadmap within 3 working days. No obligation, no sales deck pressure, no 90-day sales cycle.</p>
      <div class="cta-stats">
        <div class="cs"><strong>300+</strong>Projects shipped</div>
        <div class="cs"><strong>55+</strong>Team members</div>
        <div class="cs"><strong>97%</strong>Retention</div>
        <div class="cs"><strong>6</strong>Countries</div>
      </div>
    </div>
    <form class="h2v-cta-form" id="h2v-form" method="POST" action="/leadCaptureMail.php" novalidate>
      <h3>Book Free 30-Min Discovery Call</h3>
      <p class="ftxt">We respond within 24 hours. No spam.</p>
      <input type="hidden" name="source" value="home_v2_bottom">
      <input type="hidden" name="website_hp" value="">
      <input type="hidden" name="username_hp" value="">
      <input type="hidden" name="form_ts" value="">
      <input type="hidden" name="js_nonce" value="">

      <label for="h2vf_name">Your name</label>
      <input type="text" id="h2vf_name" name="name" required autocomplete="name" placeholder="Full name">

      <label for="h2vf_email">Work email</label>
      <input type="email" id="h2vf_email" name="email" required autocomplete="email" placeholder="you@company.com">

      <label for="h2vf_mobile">Mobile / WhatsApp</label>
      <input type="tel" id="h2vf_mobile" name="mobile" required autocomplete="tel" placeholder="+91 98XXX XXXXX">

      <label for="h2vf_role">Industry / vertical</label>
      <select id="h2vf_role" name="role_industry">
        <option value="">— Select your industry —</option>
        <option value="D2C">D2C brand</option>
        <option value="B2B / SaaS">B2B / SaaS</option>
        <option value="Jewelry">Jewelry brand</option>
        <option value="Skincare / Beauty">Skincare / Beauty</option>
        <option value="Real Estate">Real Estate developer / builder</option>
        <option value="Healthcare / Clinic">Healthcare / Clinic</option>
        <option value="Education">Education / Coaching</option>
        <option value="Other">Other</option>
      </select>

      <button type="submit">Book Free Discovery Call &rarr;</button>
      <div class="fnote">By submitting, you consent to be contacted by ITD GrowthLabs via email or WhatsApp.</div>
    </form>
  </div>
  <div id="h2v-cta-success">✓ Thanks! A senior partner will respond within 24 hours with a scoped roadmap.</div>
  <div id="h2v-cta-error">Something went wrong. Please try again or WhatsApp us at <a href="https://wa.me/919920707644">+91 99207 07644</a>.</div>
</section>

<script>
(function(){
  'use strict';
  // --- Tabs ---
  var tabs = document.querySelectorAll('.h2v-tab');
  var panels = document.querySelectorAll('.h2v-tabpanel');
  function activate(panelKey){
    tabs.forEach(function(t){ t.classList.toggle('active', t.getAttribute('data-panel') === panelKey); });
    panels.forEach(function(p){ p.classList.toggle('active', p.getAttribute('data-panel') === panelKey); });
  }
  tabs.forEach(function(t){
    t.addEventListener('click', function(){ activate(t.getAttribute('data-panel')); });
  });

  // Industry quick-nav chips → activate matching tab + smooth scroll to industries block
  document.querySelectorAll('.h2v-chip[data-tab]').forEach(function(chip){
    chip.addEventListener('click', function(e){
      var key = chip.getAttribute('data-tab');
      if (key === 'other') return; // let href handle scroll to CTA
      e.preventDefault();
      activate(key);
      var target = document.getElementById('h2v-industries');
      if (target) target.scrollIntoView({behavior:'smooth', block:'start'});
    });
  });

  // --- Form submit with JS nonce + SHA-256 anti-bot (matches site pattern) ---
  var form = document.getElementById('h2v-form');
  if (!form) return;
  var tsEl = form.querySelector('input[name="form_ts"]');
  var nonceEl = form.querySelector('input[name="js_nonce"]');
  if (tsEl) tsEl.value = Math.floor(Date.now() / 1000);

  form.addEventListener('submit', function(e){
    e.preventDefault();
    var successBox = document.getElementById('h2v-cta-success');
    var errorBox = document.getElementById('h2v-cta-error');
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
            if (window.gtag) gtag('event','home_v2_discovery_call_request', {industry: fd.get('role_industry') || 'not_selected'});
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
