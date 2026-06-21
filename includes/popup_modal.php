<?php
/**
 * ITD GrowthLabs – Per-page Calendly booking popup
 * ------------------------------------------------
 * Two-column modal:
 *   LEFT  → per-page pitch (eyebrow, headline, subcopy, benefits, trust).
 *   RIGHT → Calendly inline widget — user picks a slot, books a 30-min call.
 *
 * The per-page config drives the LEFT column copy + accent colour + source
 * tracking. The RIGHT column always loads the same Calendly event so booking
 * routes to the right senior lead via Calendly's own routing.
 *
 * Same modal ID (`imagePopupModal`) and same auto-show timing so existing
 * pages don't need to change — drop the include and it adapts.
 */

// ── Resolve current page and base path for assets / links ────────────────────
$itdgl_path = $_SERVER['PHP_SELF'] ?? '';
$itdgl_key  = ltrim($itdgl_path, '/'); // e.g. "services/App-Development.php"

$itdgl_in_subdir = (
    strpos($itdgl_path, '/services/')     !== false ||
    strpos($itdgl_path, '/resources/')    !== false ||
    strpos($itdgl_path, '/products/')     !== false ||
    strpos($itdgl_path, '/industries/')   !== false ||
    strpos($itdgl_path, '/case-studies/') !== false ||
    strpos($itdgl_path, '/compare/')      !== false ||
    preg_match('#^/(usa|uk|uae|australia|africa|mumbai|bangalore|delhi|chennai|hyderabad|ahmedabad)/#', $itdgl_path)
);
$itdgl_base = $itdgl_in_subdir ? '../' : '';

// ── Per-page popup configs ───────────────────────────────────────────────────
// Each entry drives the LEFT pitch column. The RIGHT column is always Calendly.
// `pdf_url` (optional) shows a secondary "Or grab the PDF" link in the alt-CTA
// row so the PDF download flow isn't lost even without a gated form.
$itdgl_popups = [

    'services/App-Development.php' => [
        'eyebrow'   => 'App Development Portfolio',
        'headline'  => 'Talk to a Senior App Engineer &mdash; Free 30-min Call',
        'subcopy'   => '200+ iOS, Android, Flutter and cross-platform apps shipped across logistics, fintech, healthcare, D2C and SaaS. Bring your idea, get a scoped INR estimate + stack recommendation.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Company-Profile.pdf',
        'pdf_label' => 'Or grab the portfolio PDF',
        'source'    => 'popup_app_dev_calendly',
        'accent'    => '#1565c0',
        'stats'     => '200+ apps shipped &bull; 4.6&starf; avg rating &bull; 10+ yrs experience',
    ],
    'app_development.php' => [
        'eyebrow'   => 'App Development',
        'headline'  => 'Talk to a Senior App Engineer &mdash; Free 30-min Call',
        'subcopy'   => 'See the 200+ apps we&rsquo;ve shipped, the stacks we recommend, realistic timelines and the business metrics that actually moved. No SDRs, no sales pitch.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Company-Profile.pdf',
        'pdf_label' => 'Or grab the portfolio PDF',
        'source'    => 'popup_app_hub_calendly',
        'accent'    => '#1565c0',
        'stats'     => '200+ apps shipped &bull; 4.6&starf; avg rating &bull; 10+ yrs experience',
    ],

    'services/logistics-app-development.php' => [
        'eyebrow'   => 'Free Logistics App Consultation',
        'headline'  => 'Talk to a Logistics App Engineer &mdash; Free 30-min Call',
        'subcopy'   => 'Planning a courier, fleet or last-mile app? Get a scoped estimate and honest tech-stack advice from an engineer who has shipped platforms handling 50M+ shipments.',
        'source'    => 'popup_logistics_calendly',
        'accent'    => '#1e40af',
        'stats'     => '50M+ shipments &bull; 5,000+ daily bookings &bull; 14 hubs live',
    ],

    'services/Custom-Website-Development.php' => [
        'eyebrow'   => 'Free Website Strategy Call',
        'headline'  => 'Free 30-min Website Strategy Call',
        'subcopy'   => 'Planning a new website or a redesign? Get a tailored walk-through of scope, stack and timeline from a senior engineer &mdash; no sales pitch.',
        'source'    => 'popup_custom_web_calendly',
        'accent'    => '#1565c0',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
    ],
    'services/website-development-company.php' => [
        'eyebrow'   => 'Free Website Strategy Call',
        'headline'  => 'Free 30-min Call with a Senior Web Engineer',
        'subcopy'   => 'Scoping a website project? Get a clear picture of cost, stack and timeline from a senior engineer in a 30-minute call &mdash; no sales pitch.',
        'source'    => 'popup_web_company_calendly',
        'accent'    => '#1565c0',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
    ],
    'services/E-commerce-Website-Development.php' => [
        'eyebrow'   => 'Free E-commerce Strategy Call',
        'headline'  => 'Free 30-min E-commerce Planning Call',
        'subcopy'   => 'Planning a D2C store, marketplace or checkout rebuild? Get an honest walk-through of stack, timeline and conversion essentials.',
        'source'    => 'popup_ecommerce_calendly',
        'accent'    => '#1e40af',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
    ],
    'services/WordPress-Website-Development.php' => [
        'eyebrow'   => 'Free WordPress Consultation',
        'headline'  => 'Free 30-min WordPress Strategy Call',
        'subcopy'   => 'Rebuilding a WordPress site or starting fresh? Get honest advice on theming, performance, and security from a senior engineer.',
        'source'    => 'popup_wordpress_calendly',
        'accent'    => '#1565c0',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
    ],
    'website_development.php' => [
        'eyebrow'   => 'Free Website Strategy Call',
        'headline'  => 'Talk to a Senior Web Engineer &mdash; Free 30-min Call',
        'subcopy'   => 'Planning a new build or a redesign? Get a scoped estimate and honest advice on stack, CMS, and performance &mdash; no sales pitch.',
        'source'    => 'popup_web_hub_calendly',
        'accent'    => '#1565c0',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
    ],

    'services/social-media-marketing.php' => [
        'eyebrow'   => 'Free Marketing Strategy Call',
        'headline'  => 'Talk to a Senior Marketing Strategist &mdash; Free 30-min Call',
        'subcopy'   => 'Scaling D2C, B2B SaaS, or service-business marketing? Get a custom plan covering paid + organic, ad-creative direction, and realistic ROAS expectations.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_social_marketing_calendly',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; 200+ campaigns &bull; 10+ yrs',
    ],
    'services/google_ads.php' => [
        'eyebrow'   => 'Free Google Ads Consultation',
        'headline'  => 'Talk to a Senior Google Ads Strategist &mdash; Free 30-min Call',
        'subcopy'   => 'Get an honest read on your current Google Ads account, the wins we&rsquo;d action this month, and a realistic ROAS / CPL forecast for your category.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_google_ads_calendly',
        'accent'    => '#4285f4',
        'stats'     => 'Rs 8Cr+ ad spend managed &bull; 100+ brands &bull; 10+ yrs',
    ],
    'services/meta_ads.php' => [
        'eyebrow'   => 'Free Meta Ads Consultation',
        'headline'  => 'Talk to a Senior Meta Ads Strategist &mdash; Free 30-min Call',
        'subcopy'   => 'Scaling Meta Ads (FB + IG) past &#8377;5L/mo? Get a creative-velocity audit, incrementality framework and an honest scaling roadmap.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_meta_ads_calendly',
        'accent'    => '#1877f2',
        'stats'     => 'Rs 8Cr+ ad spend managed &bull; 100+ brands &bull; 10+ yrs',
    ],
    'services/seo-article-writing.php' => [
        'eyebrow'   => 'Free SEO Strategy Call',
        'headline'  => 'Free 30-min SEO Strategy Call',
        'subcopy'   => 'Get an honest view of your SEO position, top gaps, and the fastest wins in a 30-minute call with a senior SEO strategist.',
        'source'    => 'popup_seo_article_calendly',
        'accent'    => '#00b894',
        'stats'     => '500+ SEO projects delivered &bull; 10+ yrs experience',
    ],
    'services/seo-auditing-services.php' => [
        'eyebrow'   => 'Free SEO Audit',
        'headline'  => 'Free SEO Audit &mdash; Talk to a Senior Strategist',
        'subcopy'   => 'Get a free top-line SEO audit flagging the issues holding your rankings back, and a priority fix-list you can action this month.',
        'source'    => 'popup_seo_audit_calendly',
        'accent'    => '#00b894',
        'stats'     => '500+ SEO audits done &bull; 10+ yrs experience',
    ],
    'services/local_seo_services.php' => [
        'eyebrow'   => 'Free Local SEO Audit',
        'headline'  => 'Free Local SEO Audit for Your Business',
        'subcopy'   => 'Get a 30-min review of your Google Business Profile, local citations, and on-page local signals with a clear priority list.',
        'source'    => 'popup_local_seo_calendly',
        'accent'    => '#00b894',
        'stats'     => 'Local SEO for 200+ businesses &bull; 10+ yrs',
    ],
    'digital_marketing.php' => [
        'eyebrow'   => 'Free Marketing Strategy Call',
        'headline'  => 'Talk to a Senior Marketing Strategist &mdash; Free 30-min Call',
        'subcopy'   => 'Get an honest read on your current funnel &mdash; paid, SEO, content, lead-gen &mdash; and a realistic 90-day growth roadmap with INR ranges.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_marketing_hub_calendly',
        'accent'    => '#e91e63',
        'stats'     => 'Rs 8Cr+ spend managed &bull; 100+ brands &bull; 500+ SEO projects',
    ],

    'services/content-marketing-services.php' => [
        'eyebrow'   => 'Free Content Strategy Call',
        'headline'  => 'Free 30-min Content Strategy Call',
        'subcopy'   => 'Planning a content programme that ranks + converts? Get a topic-cluster blueprint, monthly velocity recommendation, and INR budget framework.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_content_marketing_calendly',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; 500+ SEO projects &bull; 10+ yrs',
    ],

    // Regional digital-marketing pages — Calendly works globally
    'usa/digital-marketing-services.php' => [
        'eyebrow'   => 'Free Marketing Strategy Call',
        'headline'  => 'Free 30-min Marketing Strategy Call (EST/PST aligned)',
        'subcopy'   => 'Get an honest read on your US-market funnel and a realistic 90-day growth roadmap. EST/PST aligned account management.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_usa_marketing_calendly',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; EST/PST aligned &bull; 10+ yrs',
    ],
    'uk/digital-marketing-services.php' => [
        'eyebrow'   => 'Free Marketing Strategy Call',
        'headline'  => 'Free 30-min Marketing Strategy Call (GMT aligned)',
        'subcopy'   => 'Get an honest read on your UK funnel and a 90-day growth roadmap. GMT-aligned account management.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_uk_marketing_calendly',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; GMT aligned &bull; 10+ yrs',
    ],
    'uae/digital-marketing-services.php' => [
        'eyebrow'   => 'Free Marketing Strategy Call',
        'headline'  => 'Free 30-min Marketing Strategy Call (GST/Dubai-time)',
        'subcopy'   => 'Get an honest read on your UAE / GCC funnel and a 90-day growth roadmap. Dubai-timezone account management.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_uae_marketing_calendly',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; Dubai-time support &bull; 10+ yrs',
    ],
    'australia/digital-marketing-services.php' => [
        'eyebrow'   => 'Free Marketing Strategy Call',
        'headline'  => 'Free 30-min Marketing Strategy Call (AEDT aligned)',
        'subcopy'   => 'Get an honest read on your AU funnel and a 90-day growth roadmap. AEDT-aligned account management.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_au_marketing_calendly',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; AEDT aligned &bull; 10+ yrs',
    ],
    'africa/digital-marketing-services.php' => [
        'eyebrow'   => 'Free Marketing Strategy Call',
        'headline'  => 'Free 30-min Marketing Strategy Call (Pan-African)',
        'subcopy'   => 'Get an honest read on your African market funnel and a 90-day growth roadmap. Pan-African delivery experience.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_af_marketing_calendly',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; Pan-African delivery &bull; 10+ yrs',
    ],

    'services/ready-to-buy-lead-generation.php' => [
        'eyebrow'   => 'Free Lead-Gen Strategy Call',
        'headline'  => 'Talk to a Senior Lead-Gen Strategist &mdash; Free 30-min Call',
        'subcopy'   => 'Inside the call: our managed lead-generation system, AI-filtering for quality, real-time delivery, and the engagement model behind the ready-to-buy delivery promise.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'pdf_label' => 'Or grab the marketing profile PDF',
        'source'    => 'popup_leadgen_calendly',
        'accent'    => '#1e40af',
        'stats'     => 'AI-filtered &bull; Real-time delivery &bull; Quality over quantity',
    ],

    'products/courier-management-software.php' => [
        'eyebrow'   => 'Free Product Demo',
        'headline'  => 'See Our Courier Management Software Live',
        'subcopy'   => 'Get a 30-minute live demo with a logistics expert. See 21+ features in action &mdash; pickup, hub, manifest, billing, tracking &mdash; walked through on your real use case.',
        'source'    => 'popup_cms_demo_calendly',
        'accent'    => '#1e40af',
        'stats'     => 'Used across 14+ hubs &bull; 50,000+ shipments/mo &bull; 99% scan visibility',
    ],
    'products/logistics-mobile-app.php' => [
        'eyebrow'   => 'Free Product Demo',
        'headline'  => 'See Our Logistics Mobile App Live',
        'subcopy'   => 'Get a 30-minute demo of our field apps &mdash; pickup, hub in-scan, delivery POD, COD &mdash; walked through for your operation.',
        'source'    => 'popup_logistics_app_demo_calendly',
        'accent'    => '#1e40af',
        'stats'     => '5,000+ daily bookings &bull; 200+ riders &bull; 4.6&starf; rated',
    ],
    'products/multi-vendor-marketplace-app.php' => [
        'eyebrow'   => 'Free Marketplace Strategy Call',
        'headline'  => 'Plan Your Multi-Vendor Marketplace &mdash; Free 30-min Call',
        'subcopy'   => 'Food, grocery, fish, pharmacy, hyperlocal or B2B aggregator? Get a fixed-scope quote, vertical-fit blueprint and timeline from a senior marketplace engineer.',
        'source'    => 'popup_marketplace_calendly',
        'accent'    => '#ff6b35',
        'stats'     => '4 apps in package &bull; 8&ndash;14 wk launch &bull; 100% source-code ownership',
    ],

    'case-studies.php' => [
        'eyebrow'   => 'Build Something Similar?',
        'headline'  => 'Planning a Build Like These? Free 30-min Call',
        'subcopy'   => 'Every case study on this page started as a 30-minute scoping call. Tell us what you&rsquo;re planning &mdash; we&rsquo;ll share what worked and what we&rsquo;d do differently.',
        'source'    => 'popup_case_studies_calendly',
        'accent'    => '#1e40af',
        'stats'     => '300+ projects &bull; 50M+ shipments &bull; 97% client retention',
    ],
    'case-studies/on-demand-courier-booking-app.php' => [
        'eyebrow'   => 'Build an On-Demand Courier App?',
        'headline'  => 'Planning a Similar Courier App? Free 30-min Call',
        'subcopy'   => 'Get a candid walk-through of what worked, what we&rsquo;d do differently, and what a build like this would cost in your market.',
        'source'    => 'popup_courier_app_case_calendly',
        'accent'    => '#1e40af',
        'stats'     => '5,000+ daily bookings &bull; 200+ riders &bull; 4.6&starf; rated',
    ],
    'case-studies/smart-logistics-saas-platform.php' => [
        'eyebrow'   => 'Build a Logistics SaaS?',
        'headline'  => 'Planning a Multi-Carrier Platform? Free 30-min Call',
        'subcopy'   => 'Talk to the engineers who built this &mdash; tech stack, carrier integration gotchas, and realistic timelines for your roadmap.',
        'source'    => 'popup_saas_case_calendly',
        'accent'    => '#1e40af',
        'stats'     => '50,000+ monthly shipments &bull; 15+ carriers &bull; ~20% savings',
    ],
    'case-studies/courier-management-system.php' => [
        'eyebrow'   => 'Build a Courier CMS?',
        'headline'  => 'Replacing Excel With a Real Courier System? Free 30-min Call',
        'subcopy'   => 'Talk to the team that built this &mdash; rollout playbook, integration points with your existing hubs, realistic timelines and cost.',
        'source'    => 'popup_cms_case_calendly',
        'accent'    => '#1e40af',
        'stats'     => '14 hubs live &bull; 70% less manual entry &bull; Zero billing errors',
    ],

    'compare/shipsy-loginext-alternative.php' => [
        'eyebrow'   => 'Build vs Buy &mdash; Free Strategy Call',
        'headline'  => 'Stuck Between Shipsy / LogiNext and a Custom Build?',
        'subcopy'   => 'Get a 30-min call with a senior logistics engineer. We&rsquo;ll look at your volume, workflow and contracts and give you an honest recommendation &mdash; even if it&rsquo;s &ldquo;stay on SaaS.&rdquo; No slide deck.',
        'source'    => 'popup_compare_shipsy_calendly',
        'accent'    => '#1e40af',
        'stats'     => '50M+ shipments shipped &bull; 14 hubs live &bull; 10+ yrs',
    ],
    'compare/custom-vs-white-label-courier-software.php' => [
        'eyebrow'   => 'Build vs Buy &mdash; Free Strategy Call',
        'headline'  => 'Custom Build, White-Label, or Hybrid? Free 30-min Call',
        'subcopy'   => 'Tell us your volume, workflow and 18-month plan. We&rsquo;ll show you the path with the lowest 5-year TCO &mdash; even if it&rsquo;s &ldquo;go white-label first.&rdquo; No sales pitch.',
        'source'    => 'popup_compare_custom_calendly',
        'accent'    => '#1e40af',
        'stats'     => '50M+ shipments shipped &bull; 14 hubs live &bull; 10+ yrs',
    ],

    'team.php' => [
        'eyebrow'   => 'Talk to a Senior Lead',
        'headline'  => 'Routed to the Right Senior Lead &mdash; Free 30-min Call',
        'subcopy'   => 'Tell us what you&rsquo;re scoping. We&rsquo;ll route the call to the senior engineer or strategist who runs that track. First reply within one business day.',
        'source'    => 'popup_team_calendly',
        'accent'    => '#1e40af',
        'stats'     => '55+ senior team &bull; 300+ projects &bull; 97% retention',
    ],

    // Default / fallback
    'default' => [
        'eyebrow'   => 'Free 30-min Discovery Call',
        'headline'  => 'Talk to a Senior Lead &mdash; Free 30-min Call',
        'subcopy'   => 'Get a scoped INR estimate, honest tech-stack advice and a realistic timeline in a 30-minute call. No SDRs, no sales pitch.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Company-Profile.pdf',
        'pdf_label' => 'Or grab the company profile PDF',
        'source'    => 'popup_default_calendly',
        'accent'    => '#1565c0',
        'stats'     => '300+ projects &bull; 97% client retention &bull; 12+ yrs avg team exp',
    ],
];

$itdgl_cfg = $itdgl_popups[$itdgl_key] ?? $itdgl_popups['default'];

// Defensive defaults
$itdgl_cfg['accent']    = $itdgl_cfg['accent']    ?? '#1565c0';
$itdgl_cfg['eyebrow']   = $itdgl_cfg['eyebrow']   ?? 'Free 30-min Call';
$itdgl_cfg['subcopy']   = $itdgl_cfg['subcopy']   ?? '';
$itdgl_cfg['stats']     = $itdgl_cfg['stats']     ?? '300+ projects &bull; 97% client retention &bull; 12+ yrs avg team exp';
$itdgl_cfg['source']    = $itdgl_cfg['source']    ?? 'popup_calendly';

$itdgl_has_pdf   = !empty($itdgl_cfg['pdf_url']);
$itdgl_pdf_url   = $itdgl_has_pdf ? $itdgl_base . $itdgl_cfg['pdf_url'] : '';
$itdgl_pdf_label = $itdgl_cfg['pdf_label'] ?? 'Get the PDF';
$itdgl_contact_url = $itdgl_base . 'contact-us.php';

// Calendly URL — hide event-type details + GDPR banner for a compact modal
$itdgl_calendly_url = 'https://calendly.com/itdgrowthlabs-info/30min?hide_event_type_details=1&hide_gdpr_banner=1';
?>
<style>
/* ============================================================
   ITD GrowthLabs — Calendly booking popup (2026)
   Two-column split: per-page pitch on the left, Calendly on the right.
   Mobile: stacks vertically, pitch first.
   ============================================================ */
#imagePopupModal { --ip-accent: <?php echo htmlspecialchars($itdgl_cfg['accent']); ?>; }
#imagePopupModal .modal-dialog { max-width: 1040px; }
#imagePopupModal .modal-content { background: #fff; border: none; border-radius: 18px; overflow: hidden; box-shadow: 0 32px 80px rgba(15,23,42,0.32); }
.itdgl-popup-wrap { display: grid; grid-template-columns: minmax(340px, 0.92fr) minmax(420px, 1.08fr); min-height: 640px; }

/* LEFT — pitch column */
.itdgl-popup-pitch {
    position: relative;
    background:
        radial-gradient(700px 380px at 80% 0%, rgba(255,107,0,0.20), transparent 70%),
        linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #1e293b 100%);
    color: #fff;
    padding: 38px 34px;
    display: flex; flex-direction: column;
    overflow: hidden;
}
.itdgl-popup-pitch::before {
    content: ''; position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 40px 40px;
    opacity: 0.5; pointer-events: none;
}
.itdgl-popup-pitch > * { position: relative; z-index: 1; }
.itdgl-popup-eyebrow {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 6px 14px;
    background: rgba(255,107,0,0.18);
    border: 1px solid rgba(255,107,0,0.40);
    color: #ffd9b8;
    border-radius: 30px;
    font-size: 10.5px; font-weight: 800;
    letter-spacing: 1.4px; text-transform: uppercase;
    margin-bottom: 16px; width: fit-content;
}
.itdgl-popup-pitch h3 {
    margin: 0 0 12px; color: #fff;
    font-size: 24px; font-weight: 800; line-height: 1.22;
}
.itdgl-popup-pitch p.itdgl-popup-subcopy {
    margin: 0 0 18px;
    font-size: 14.5px; line-height: 1.65;
    color: rgba(255,255,255,0.86);
}

/* Benefits list — the "why book" pitch */
.itdgl-popup-benefits {
    list-style: none; padding: 0; margin: 0 0 20px;
    display: flex; flex-direction: column; gap: 10px;
}
.itdgl-popup-benefits li {
    display: flex; align-items: flex-start; gap: 10px;
    font-size: 13.5px; line-height: 1.5;
    color: rgba(255,255,255,0.92);
}
.itdgl-popup-benefits i {
    color: #ff9550;
    font-size: 13px;
    margin-top: 3px;
    flex-shrink: 0;
}
.itdgl-popup-benefits strong { color: #fff; font-weight: 700; }

/* Alt-CTA chips (WhatsApp + PDF/contact) */
.itdgl-popup-alt-ctas { display: flex; gap: 8px; flex-wrap: wrap; margin: 0 0 14px; }
.itdgl-popup-alt-ctas a {
    flex: 1; min-width: 130px;
    display: inline-flex; align-items: center; justify-content: center; gap: 6px;
    padding: 9px 12px; border-radius: 8px;
    font-size: 12.5px; font-weight: 700;
    text-decoration: none;
    transition: transform .2s ease, box-shadow .2s ease;
}
.itdgl-popup-alt-ctas a:hover { transform: translateY(-2px); }
.itdgl-popup-alt-ctas a.wa { background: #25D366; color: #fff !important; box-shadow: 0 4px 12px rgba(37,211,102,0.30); }
.itdgl-popup-alt-ctas a.wa:hover { background: #1da856; box-shadow: 0 8px 20px rgba(37,211,102,0.45); }
.itdgl-popup-alt-ctas a.pdf,
.itdgl-popup-alt-ctas a.contact { background: rgba(255,255,255,0.08); color: #fff !important; border: 1px solid rgba(255,255,255,0.25); }
.itdgl-popup-alt-ctas a.pdf:hover,
.itdgl-popup-alt-ctas a.contact:hover { background: rgba(255,255,255,0.16); }

.itdgl-popup-trust { margin-top: auto; padding-top: 16px; }
.itdgl-popup-trust-row {
    display: flex; flex-wrap: wrap; gap: 14px;
    font-size: 12.5px; color: rgba(255,255,255,0.75);
}
.itdgl-popup-trust-row span { display: inline-flex; align-items: center; gap: 6px; }
.itdgl-popup-trust-row i { color: #ff9550; }

/* RIGHT — Calendly column */
.itdgl-popup-calendly-col {
    background: #f8fafc; padding: 18px 16px;
    display: flex; flex-direction: column;
}
.itdgl-popup-calendly-col .col-header {
    padding: 4px 10px 12px;
    border-bottom: 1px solid #e2e8f0;
    margin-bottom: 10px;
}
.itdgl-popup-calendly-col .col-header h4 {
    margin: 0 0 4px; font-size: 16px; font-weight: 800; color: #0f172a;
    display: inline-flex; align-items: center; gap: 8px;
}
.itdgl-popup-calendly-col .col-header h4 i { color: var(--ip-accent); }
.itdgl-popup-calendly-col .col-header p {
    margin: 0; font-size: 12.5px; color: #64748b; line-height: 1.5;
}
.itdgl-popup-calendly-col .calendly-inline-widget {
    min-width: 320px;
    height: 560px !important;
    width: 100%;
    flex: 1;
}
.itdgl-popup-calendly-col .cal-loading {
    flex: 1; display: flex; align-items: center; justify-content: center;
    font-size: 13px; color: #64748b; gap: 8px;
}

/* Close button */
#imagePopupModal .ip-close {
    position: absolute; top: 14px; right: 16px; z-index: 10;
    width: 36px; height: 36px; border-radius: 50%;
    background: rgba(255,255,255,0.95); border: none;
    display: flex; align-items: center; justify-content: center;
    font-size: 22px; line-height: 1; color: #475569;
    box-shadow: 0 4px 12px rgba(0,0,0,0.18);
    cursor: pointer; transition: transform .2s ease;
}
#imagePopupModal .ip-close:hover { transform: scale(1.08); color: #0f172a; }
.btn-close:after { display: none; }

/* MOBILE */
@media (max-width: 768px) {
    #imagePopupModal .modal-dialog { max-width: 100%; margin: 12px; }
    .itdgl-popup-wrap { grid-template-columns: 1fr; min-height: 0; }
    .itdgl-popup-pitch { padding: 26px 22px 22px; order: 1; }
    .itdgl-popup-pitch h3 { font-size: 20px; }
    .itdgl-popup-pitch p.itdgl-popup-subcopy { font-size: 13.5px; margin-bottom: 14px; }
    .itdgl-popup-benefits { margin-bottom: 14px; }
    .itdgl-popup-benefits li { font-size: 13px; }
    .itdgl-popup-calendly-col { padding: 14px 10px; order: 2; }
    .itdgl-popup-calendly-col .calendly-inline-widget { height: 680px !important; }
}
</style>

<div class="modal fade" id="imagePopupModal" tabindex="-1" aria-labelledby="imagePopupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="ip-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>

            <div class="itdgl-popup-wrap">
                <!-- LEFT — per-page pitch column -->
                <div class="itdgl-popup-pitch">
                    <?php if ($itdgl_cfg['eyebrow']): ?>
                        <span class="itdgl-popup-eyebrow"><i class="fas fa-bolt" style="font-size:9px;"></i> <?php echo $itdgl_cfg['eyebrow']; ?></span>
                    <?php endif; ?>
                    <h3><?php echo $itdgl_cfg['headline']; ?></h3>
                    <?php if ($itdgl_cfg['subcopy']): ?>
                        <p class="itdgl-popup-subcopy"><?php echo $itdgl_cfg['subcopy']; ?></p>
                    <?php endif; ?>

                    <ul class="itdgl-popup-benefits">
                        <li><i class="fas fa-check-circle"></i> <strong>Fixed-quote INR SOW in 48 hours</strong> &mdash; no vague ballparks</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Senior practice lead</strong> on the call &mdash; no SDRs, no scripts</li>
                        <li><i class="fas fa-check-circle"></i> Honest tech-stack + timeline assessment</li>
                        <li><i class="fas fa-check-circle"></i> Zero commitment &mdash; walk away with clarity even if we&rsquo;re not the right fit</li>
                    </ul>

                    <div class="itdgl-popup-alt-ctas">
                        <a class="wa" href="https://wa.me/918450978544?text=Hi%20ITD%20GrowthLabs%2C%20I%27d%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener" onclick="if(typeof gtag==='function')gtag('event','whatsapp_open',{source:'popup'});">
                            <i class="fab fa-whatsapp" style="font-size:15px;"></i> WhatsApp
                        </a>
                        <?php if ($itdgl_has_pdf): ?>
                        <a class="pdf" href="<?php echo htmlspecialchars($itdgl_pdf_url); ?>" target="_blank" rel="noopener" onclick="if(typeof gtag==='function')gtag('event','pdf_download',{source:'popup_pdf_secondary',popup_source:<?php echo json_encode($itdgl_cfg['source']); ?>});">
                            <i class="fas fa-file-pdf" style="font-size:13px;"></i> <?php echo htmlspecialchars($itdgl_pdf_label); ?>
                        </a>
                        <?php else: ?>
                        <a class="contact" href="<?php echo htmlspecialchars($itdgl_contact_url); ?>">
                            <i class="fas fa-envelope" style="font-size:13px;"></i> Contact form
                        </a>
                        <?php endif; ?>
                    </div>

                    <div class="itdgl-popup-trust">
                        <div class="itdgl-popup-trust-row">
                            <span><i class="fas fa-shield-check"></i> Senior team &middot; 12+ yrs avg</span>
                            <span><i class="fas fa-handshake"></i> 97% retention</span>
                        </div>
                        <p style="margin:14px 0 0;font-size:11.5px;color:rgba(255,255,255,0.55);"><?php echo $itdgl_cfg['stats']; ?></p>
                    </div>
                </div>

                <!-- RIGHT — Calendly inline widget -->
                <div class="itdgl-popup-calendly-col">
                    <div class="col-header">
                        <h4><i class="fas fa-calendar-check"></i> Pick a 30-min slot</h4>
                        <p>Mon&ndash;Sat 9am&ndash;6pm IST &middot; auto-detects your timezone.</p>
                    </div>
                    <div class="calendly-inline-widget" data-url="<?php echo htmlspecialchars($itdgl_calendly_url); ?>"></div>
                    <noscript>
                        <div class="cal-loading">
                            JavaScript is required to book here. <a href="https://calendly.com/itdgrowthlabs-info/30min" target="_blank" rel="noopener" style="color:var(--ip-accent);font-weight:700;text-decoration:none;margin-left:6px;">Open Calendly &rarr;</a>
                        </div>
                    </noscript>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Calendly widget loader -->
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>

<script>
    (function() {
        window.__itdglPopup = {
            source:        <?php echo json_encode($itdgl_cfg['source']); ?>,
            calendly_url:  <?php echo json_encode($itdgl_calendly_url); ?>
        };
    })();

    document.addEventListener('DOMContentLoaded', function() {
        if (typeof bootstrap === 'undefined' || !bootstrap.Modal) return;
        var modalEl = document.getElementById('imagePopupModal');
        if (!modalEl) return;
        var popupModal = new bootstrap.Modal(modalEl, { backdrop: true, keyboard: true });

        // Per-page auto-show delay
        var delayMs = <?php
            $itdgl_default_delay = 10000;
            if (!empty($itdgl_popup_delay_ms) && is_numeric($itdgl_popup_delay_ms)) {
                echo (int)$itdgl_popup_delay_ms;
            } elseif (in_array($itdgl_key, ['index.php', '', 'home.php'], true)) {
                echo 25000;
            } else {
                echo $itdgl_default_delay;
            }
        ?>;
        setTimeout(function() {
            popupModal.show();
            if (typeof gtag === 'function') {
                gtag('event', 'popup_shown', { source: window.__itdglPopup.source });
            }
        }, delayMs);

        // Ensure Calendly widget renders correctly when modal becomes visible.
        // If widget.js auto-init missed the hidden div, call initInlineWidget on show.
        modalEl.addEventListener('shown.bs.modal', function() {
            var w = modalEl.querySelector('.calendly-inline-widget');
            if (!w || w.dataset.itdglRendered === '1') return;
            // Auto-init from widget.js inserts an <iframe> child — if present, we're done.
            if (w.querySelector('iframe')) {
                w.dataset.itdglRendered = '1';
                return;
            }
            // Otherwise force-init via the Calendly API once it's loaded.
            var tries = 0;
            (function attempt() {
                if (typeof Calendly !== 'undefined' && Calendly.initInlineWidget) {
                    Calendly.initInlineWidget({ url: window.__itdglPopup.calendly_url, parentElement: w });
                    w.dataset.itdglRendered = '1';
                } else if (tries++ < 30) {
                    setTimeout(attempt, 200);
                }
            })();
        });

        // Track successful booking via Calendly's postMessage events
        window.addEventListener('message', function(e) {
            if (!e.data || typeof e.data.event !== 'string') return;
            if (e.data.event.indexOf('calendly.') !== 0) return;
            if (e.data.event === 'calendly.event_scheduled' && typeof gtag === 'function') {
                gtag('event', 'generate_lead', {
                    lead_source: window.__itdglPopup.source,
                    lead_type:   'calendly_booking'
                });
            }
        });
    });
</script>
