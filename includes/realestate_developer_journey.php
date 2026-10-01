<?php
/**
 * Real Estate — Developer + Builder journey block.
 *
 * Three sections designed for easy scan by major developer + builder teams:
 *   1. Who is it for?
 *   2. Why is it for them?
 *   3. All services (every capability we deliver, grouped)
 * + Sticky "Talk to our Real Estate Team" CTA.
 */
?>
<style>
  .itdgl-reb-wrap{background:#ffffff;color:#0f1e3d;padding:70px 20px;}
  .itdgl-reb-wrap.alt{background:#f8fafc;}
  .itdgl-reb-container{max-width:1180px;margin:0 auto;}
  .itdgl-reb-eyebrow{display:inline-flex;align-items:center;gap:8px;background:rgba(200,155,60,0.14);color:#8a6520;padding:5px 14px;border-radius:99px;font-size:11.5px;font-weight:800;letter-spacing:0.6px;text-transform:uppercase;margin-bottom:12px;border:1px solid rgba(200,155,60,0.28);}
  .itdgl-reb-wrap h2{color:#0f1e3d;font-size:32px;margin:0 0 10px;font-weight:800;line-height:1.28;}
  .itdgl-reb-wrap p.sub{color:#475569;font-size:16px;margin:0 0 28px;max-width:800px;line-height:1.7;}

  /* Who is it for — persona cards */
  .itdgl-reb-personas{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px;}
  .itdgl-reb-persona{background:#fff;border:1px solid #e2e8f0;border-left:5px solid #c89b3c;border-radius:10px;padding:22px 24px;transition:transform .18s,box-shadow .18s;}
  .itdgl-reb-persona:hover{transform:translateY(-2px);box-shadow:0 10px 24px rgba(15,30,61,0.08);}
  .itdgl-reb-persona h4{color:#0f1e3d;font-size:17px;margin:0 0 6px;font-weight:800;}
  .itdgl-reb-persona p{color:#475569;font-size:14px;margin:0;line-height:1.6;}

  /* Why — value grid */
  .itdgl-reb-whys{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;}
  .itdgl-reb-why{background:#fff;border:1px solid #e2e8f0;border-radius:10px;padding:20px 22px;}
  .itdgl-reb-why .ico{font-size:22px;color:#c89b3c;margin-bottom:8px;display:block;}
  .itdgl-reb-why h4{color:#0f1e3d;font-size:15.5px;margin:0 0 6px;font-weight:800;}
  .itdgl-reb-why p{color:#64748b;font-size:13.5px;margin:0;line-height:1.6;}

  /* All services — grouped grid */
  .itdgl-reb-groups{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:20px;}
  .itdgl-reb-group{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:24px 26px;}
  .itdgl-reb-group h4{color:#0f1e3d;font-size:17px;margin:0 0 12px;font-weight:800;padding-bottom:10px;border-bottom:2px solid #c89b3c;display:inline-block;}
  .itdgl-reb-group ul{list-style:none;padding:0;margin:0;}
  .itdgl-reb-group li{padding:8px 0 8px 24px;position:relative;color:#334155;font-size:14px;line-height:1.5;border-bottom:1px solid #f1f5f9;}
  .itdgl-reb-group li:last-child{border-bottom:none;}
  .itdgl-reb-group li::before{content:"\\f00c";font-family:"Font Awesome 6 Free";font-weight:900;position:absolute;left:0;top:9px;color:#059669;font-size:13px;}

  /* Easy user journey — sticky CTA */
  .itdgl-reb-journey{background:linear-gradient(135deg,#0f1e3d,#1e3a8a);color:#fff;padding:40px 24px;border-radius:14px;margin:0 auto;max-width:1180px;display:grid;grid-template-columns:1.4fr 1fr;gap:28px;align-items:center;}
  .itdgl-reb-journey h3{color:#fff;font-size:24px;margin:0 0 10px;font-weight:800;line-height:1.3;}
  .itdgl-reb-journey p{color:#dbeafe;font-size:14.5px;margin:0 0 16px;line-height:1.7;}
  .itdgl-reb-journey ol{margin:0;padding:0 0 0 18px;color:#dbeafe;font-size:13.5px;line-height:1.7;}
  .itdgl-reb-journey ol li{padding:3px 0;}
  .itdgl-reb-journey ol li strong{color:#c89b3c;}
  .itdgl-reb-journey-cta{text-align:center;}
  .itdgl-reb-journey-cta a.btn-c{background:#c89b3c;color:#0f1e3d;padding:14px 24px;border-radius:8px;text-decoration:none;font-weight:800;font-size:15px;display:block;margin-bottom:10px;}
  .itdgl-reb-journey-cta a.btn-w{background:#25d366;color:#fff;padding:14px 24px;border-radius:8px;text-decoration:none;font-weight:800;font-size:15px;display:block;margin-bottom:10px;}
  .itdgl-reb-journey-cta a.btn-ct{background:#ffffff;color:#0f1e3d;padding:14px 24px;border-radius:8px;text-decoration:none;font-weight:800;font-size:15px;display:block;}

  @media (max-width:720px){
    .itdgl-reb-wrap h2{font-size:22px;}
    .itdgl-reb-journey{grid-template-columns:1fr;padding:28px 22px;}
    .itdgl-reb-journey h3{font-size:19px;}
  }
</style>

<!-- Section 1: Who is it for? -->
<section class="itdgl-reb-wrap">
  <div class="itdgl-reb-container">
    <div class="itdgl-reb-eyebrow"><i class="fas fa-users"></i> Who is it for</div>
    <h2>Built for Developers, Builders, Brokers &amp; Channel Partners</h2>
    <p class="sub">Our real estate practice is purpose-built for teams that already understand sales, broker commissions, and site visits &mdash; and now need serious digital infrastructure to feed the sales floor consistently.</p>
    <div class="itdgl-reb-personas">
      <div class="itdgl-reb-persona">
        <h4><i class="fas fa-building" style="color:#c89b3c;margin-right:6px;"></i>Developers &amp; Builders</h4>
        <p>Mid to large developers running 1-20 live projects. Need owned-channel pipeline that doesn't rely only on brokers + listing portals.</p>
      </div>
      <div class="itdgl-reb-persona">
        <h4><i class="fas fa-city" style="color:#c89b3c;margin-right:6px;"></i>Luxury &amp; Premium Projects</h4>
        <p>Rs 2 Cr - 50 Cr ticket projects needing concierge-grade creative + NRI campaigns + private previews + referral programmes.</p>
      </div>
      <div class="itdgl-reb-persona">
        <h4><i class="fas fa-globe" style="color:#c89b3c;margin-right:6px;"></i>NRI-Focused Projects</h4>
        <p>Projects targeting GCC / UK / USA / Singapore / Canada investors. Multi-timezone + virtual walkthroughs + Arabic creative.</p>
      </div>
      <div class="itdgl-reb-persona">
        <h4><i class="fas fa-rocket" style="color:#c89b3c;margin-right:6px;"></i>Pre-Launch Projects</h4>
        <p>Teams 60-120 days from launch who need an EOI pipeline, private-preview campaigns, and launch-day sales momentum.</p>
      </div>
      <div class="itdgl-reb-persona">
        <h4><i class="fas fa-boxes-stacked" style="color:#c89b3c;margin-right:6px;"></i>Inventory-Clearing Projects</h4>
        <p>Final wings / last 20-40 units needing urgency campaigns + broker mobilisation + loan-partner marketing.</p>
      </div>
      <div class="itdgl-reb-persona">
        <h4><i class="fas fa-handshake" style="color:#c89b3c;margin-right:6px;"></i>Channel Partners &amp; Brokers</h4>
        <p>Large broker networks + franchise brokerages that need lead-flow + marketing collateral + co-branded campaigns.</p>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: Why is it for them? -->
<section class="itdgl-reb-wrap alt">
  <div class="itdgl-reb-container">
    <div class="itdgl-reb-eyebrow"><i class="fas fa-lightbulb"></i> Why is it for you</div>
    <h2>Why Major Developers Choose ITD GrowthLabs</h2>
    <p class="sub">Six reasons developer teams move their marketing + lead-gen to us &mdash; shared across every discovery call we run.</p>
    <div class="itdgl-reb-whys">
      <div class="itdgl-reb-why"><span class="ico"><i class="fas fa-infinity"></i></span><h4>End-to-End, Not Point Solutions</h4><p>Branding, performance ads, content, CRM, WhatsApp, websites, inside-sales &mdash; one team, one contract, one accountable partner.</p></div>
      <div class="itdgl-reb-why"><span class="ico"><i class="fas fa-shield-halved"></i></span><h4>MahaRERA + RERA Compliance First</h4><p>Every creative, ad, and landing page is pre-reviewed against RERA + MahaRERA 2017/2023 rules before publish.</p></div>
      <div class="itdgl-reb-why"><span class="ico"><i class="fas fa-chart-line"></i></span><h4>Attribution You Can Trust</h4><p>Meta CAPI + Google Enhanced Conversions + offline conversion upload + cohort LTV &mdash; 85-95% attribution accuracy end-to-end.</p></div>
      <div class="itdgl-reb-why"><span class="ico"><i class="fas fa-receipt"></i></span><h4>Zero Markup on Ad Spend</h4><p>Meta + Google bill you directly or we pass through at exact platform rate. No hidden margin.</p></div>
      <div class="itdgl-reb-why"><span class="ico"><i class="fas fa-globe"></i></span><h4>NRI + India + GCC Coverage</h4><p>GCC + North America + UK + Singapore campaigns + Arabic + regional-language creative built in.</p></div>
      <div class="itdgl-reb-why"><span class="ico"><i class="fas fa-user-tie"></i></span><h4>Senior Partner On Every Account</h4><p>Prashant + senior real-estate leads attend discovery + quarterly QBRs. Not handed to junior AMs post-signing.</p></div>
    </div>
  </div>
</section>

<!-- Section 3: All services -->
<section class="itdgl-reb-wrap">
  <div class="itdgl-reb-container">
    <div class="itdgl-reb-eyebrow"><i class="fas fa-list-check"></i> Full capability</div>
    <h2>All Real Estate Marketing Services &mdash; Under One Roof</h2>
    <p class="sub">Pick any single capability or buy the full stack. Below is everything our real estate team delivers for developers, builders, and channel partners across India + GCC.</p>
    <div class="itdgl-reb-groups">
      <div class="itdgl-reb-group">
        <h4>Branding &amp; Positioning</h4>
        <ul>
          <li>Developer brand strategy + positioning</li>
          <li>Project naming + sub-brand identity</li>
          <li>Brand book + collateral + sample flat styling</li>
          <li>PR + thought-leadership programme</li>
          <li>Awards + certifications submission calendar</li>
        </ul>
      </div>
      <div class="itdgl-reb-group">
        <h4>Performance Marketing</h4>
        <ul>
          <li>Meta ads (Instagram + FB + Reels + CTWA)</li>
          <li>Google Ads (Search + PMax + YouTube + Discovery)</li>
          <li>Snapchat + TikTok Middle East (GCC)</li>
          <li>Housing / 99acres / MagicBricks premium placements</li>
          <li>Meta CAPI + Google Enhanced Conversions + offline upload</li>
          <li>LTV / CAC / cohort attribution dashboard</li>
        </ul>
      </div>
      <div class="itdgl-reb-group">
        <h4>Lead Generation + Sales</h4>
        <ul>
          <li>Multi-source lead capture + distribution</li>
          <li>BLTD qualification (Budget / Location / Timeline / Decision-maker)</li>
          <li>Inside-sales SLA (15-min response, business hours)</li>
          <li>Site-visit booking + no-show recovery</li>
          <li>Closing + negotiation playbook + bank-partner intro</li>
        </ul>
      </div>
      <div class="itdgl-reb-group">
        <h4>WhatsApp + CRM</h4>
        <ul>
          <li>WhatsApp Business API + Cloud API + Interakt / AiSensy</li>
          <li>Click-to-WhatsApp (CTWA) campaigns + flows</li>
          <li>LeadSquared / Zoho CRM Plus setup + sequences</li>
          <li>Call tracking + dynamic number swap</li>
          <li>7-day WhatsApp + email + call nurture cadence</li>
        </ul>
      </div>
      <div class="itdgl-reb-group">
        <h4>Content &amp; Creative</h4>
        <ul>
          <li>Project walkthroughs (video + drone + 3D)</li>
          <li>Instagram Reels + YouTube Shorts (8-15 / month)</li>
          <li>Social calendar + daily Stories + posts</li>
          <li>Blog + SEO + AI Overview optimised articles</li>
          <li>Sample-flat photography + lifestyle shoots</li>
          <li>Buyer-testimonial video production (with consent)</li>
        </ul>
      </div>
      <div class="itdgl-reb-group">
        <h4>Websites + Landing Pages</h4>
        <ul>
          <li>Developer master-site + project micro-sites</li>
          <li>Project-specific lead-capture micro-funnels</li>
          <li>Core Web Vitals optimised (LCP / INP / CLS green)</li>
          <li>WhatsApp + Call + Site-visit CTAs on every page</li>
          <li>MahaRERA number + brochure + floor-plan integration</li>
        </ul>
      </div>
      <div class="itdgl-reb-group">
        <h4>NRI + International</h4>
        <ul>
          <li>GCC + UK + USA + Singapore + Canada campaigns</li>
          <li>Arabic + regional-language creative</li>
          <li>Virtual walkthrough + video-call site visits</li>
          <li>NRI financing + ICICI / HDFC / Axis NRI partner intros</li>
          <li>GCC event activations (Dubai, Riyadh, Doha)</li>
        </ul>
      </div>
      <div class="itdgl-reb-group">
        <h4>Launch Operations</h4>
        <ul>
          <li>Pre-launch EOI campaigns (60-120 days)</li>
          <li>Private-preview invite-only campaigns</li>
          <li>Launch-day multi-channel blitz</li>
          <li>Broker mobilisation + commission transparency + MLS feeds</li>
          <li>Inventory-clearing + last-wing urgency campaigns</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: Easy user journey — sticky CTA -->
<section class="itdgl-reb-wrap alt" style="padding-top:0;">
  <div class="itdgl-reb-container">
    <div class="itdgl-reb-journey">
      <div>
        <h3>Easiest Way to Start &mdash; 3 Steps, 5 Working Days</h3>
        <p>Designed for busy developer and builder teams. No RFP, no decks, no 90-day sales cycle. Three steps:</p>
        <ol>
          <li><strong>Day 1:</strong> You fill a 90-second enquiry form or WhatsApp us. We respond within 24 hours.</li>
          <li><strong>Day 2-3:</strong> Free 30-min discovery call with Prashant or senior real estate lead. We audit your current GMB + ads + CRM + site.</li>
          <li><strong>Day 4-5:</strong> Scoped proposal + 90-day roadmap delivered. You approve + we start WABA / ad accounts / site setup within same week.</li>
        </ol>
      </div>
      <div class="itdgl-reb-journey-cta">
        <a class="btn-c" href="#pkg-form">Fill 90-Sec Enquiry Form &rarr;</a>
        <a class="btn-w" href="https://wa.me/919920707644?text=Hi%20ITD%2C%20I%20am%20a%20real%20estate%20developer%20and%20want%20to%20discuss%20marketing%20for%20my%20project." target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp Our RE Team</a>
        <a class="btn-ct" href="https://calendly.com/itdgrowthlabs-info/30min" target="_blank" rel="noopener">Book Calendly (30 min)</a>
      </div>
    </div>
  </div>
</section>
