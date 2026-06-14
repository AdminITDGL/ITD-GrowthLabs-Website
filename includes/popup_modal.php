<?php
/**
 * ITD GrowthLabs – Per-page lead-capture popup
 * --------------------------------------------
 * One include, but different content per page.
 *
 *   • App Development service page  → Company Profile PDF download (existing flow).
 *   • Other main service / hub / product / case-study pages → "Free consultation with
 *     an expert" form (name + email + mobile) with service-specific headline, sub-copy,
 *     social proof, and GA4 source tag.
 *   • Everything else (home, resources, industries, locations) → falls through to the
 *     original generic Company Profile popup so old includes keep working unchanged.
 *
 * Same modal ID (`imagePopupModal`) and same 10-second auto-show so there is nothing
 * to change in existing pages — drop the include and it adapts to the page it's on.
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
    preg_match('#^/(usa|uk|uae|australia|africa)/#', $itdgl_path)
);
$itdgl_base = $itdgl_in_subdir ? '../' : '';

// ── Popup configs per page ───────────────────────────────────────────────────
//   type = 'pdf'          → name/email/mobile form → success → auto-trigger PDF download
//   type = 'consultation' → name/email/mobile form → success "we'll call within 24h"
$itdgl_popups = [

    // ---- APP DEVELOPMENT service page — keep existing PDF download flow ----
    'services/App-Development.php' => [
        'type'       => 'pdf',
        'eyebrow'    => 'App Development Portfolio',
        'headline'   => 'Download Our App Development Portfolio',
        'subcopy'    => '200+ iOS, Android, Flutter & cross-platform apps shipped across logistics, fintech, healthcare, D2C and SaaS. Get the full portfolio with stack choices, timelines, and real results.',
        'pdf_url'    => 'assets/ITD-GrowthLabs-Company-Profile.pdf',
        'source'     => 'popup_profile_download',
        'accent'     => '#1565c0',
        'stats'      => '200+ apps shipped &bull; 4.6&starf; avg rating &bull; 10+ yrs experience',
        'cta_label'  => 'Download Portfolio (PDF) &#8595;',
    ],
    'app_development.php' => [
        'type'       => 'pdf',
        'eyebrow'    => 'App Development Portfolio',
        'headline'   => 'Download Our App Development Portfolio',
        'subcopy'    => 'See the 200+ apps we\'ve shipped, the stacks we use, timelines, and the real business metrics. No fluff.',
        'pdf_url'    => 'assets/ITD-GrowthLabs-Company-Profile.pdf',
        'source'     => 'popup_profile_download',
        'accent'     => '#1565c0',
        'stats'      => '200+ apps shipped &bull; 4.6&starf; avg rating &bull; 10+ yrs experience',
        'cta_label'  => 'Download Portfolio (PDF) &#8595;',
    ],

    // ---- LOGISTICS APP DEVELOPMENT service page — consultation ----
    'services/logistics-app-development.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Logistics App Consultation',
        'headline'  => 'Talk to a Logistics App Engineer — Free 30-min Call',
        'subcopy'   => 'Planning a courier, fleet or last-mile app? Get a scoped estimate and honest tech-stack advice from an engineer who has shipped platforms handling 50M+ shipments.',
        'source'    => 'popup_logistics_consultation',
        'accent'    => '#1e40af',
        'stats'     => '50M+ shipments &bull; 5,000+ daily bookings &bull; 14 hubs live',
        'cta_label' => 'Book My Free Consultation &#8594;',
        'expert'    => 'Senior Logistics Engineer',
    ],

    // ---- WEBSITE DEVELOPMENT main service pages — consultation ----
    'services/Custom-Website-Development.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Website Strategy Call',
        'headline'  => 'Free 30-min Website Strategy Call',
        'subcopy'   => 'Planning a new website or a redesign? Get a tailored walk-through of scope, stack and timeline from a senior engineer — no sales pitch.',
        'source'    => 'popup_website_consultation',
        'accent'    => '#1565c0',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
        'cta_label' => 'Book My Strategy Call &#8594;',
        'expert'    => 'Senior Web Engineer',
    ],
    'services/website-development-company.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Website Strategy Call',
        'headline'  => 'Free 30-min Call with a Senior Web Engineer',
        'subcopy'   => 'Scoping a website project? Get a clear picture of cost, stack and timeline from a senior engineer in a 30-minute call — no sales pitch.',
        'source'    => 'popup_website_company_consultation',
        'accent'    => '#1565c0',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
        'cta_label' => 'Book My Strategy Call &#8594;',
        'expert'    => 'Senior Web Engineer',
    ],
    'services/E-commerce-Website-Development.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free E-commerce Strategy Call',
        'headline'  => 'Free 30-min E-commerce Planning Call',
        'subcopy'   => 'Planning a D2C store, marketplace or checkout rebuild? Get an honest walk-through of stack, timeline and conversion essentials.',
        'source'    => 'popup_ecommerce_consultation',
        'accent'    => '#1e40af',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
        'cta_label' => 'Book My E-commerce Call &#8594;',
        'expert'    => 'E-commerce Engineer',
    ],
    'services/WordPress-Website-Development.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free WordPress Consultation',
        'headline'  => 'Free 30-min WordPress Strategy Call',
        'subcopy'   => 'Rebuilding a WordPress site or starting fresh? Get honest advice on theming, performance, and security from a senior engineer.',
        'source'    => 'popup_wordpress_consultation',
        'accent'    => '#1565c0',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
        'cta_label' => 'Book My WordPress Call &#8594;',
        'expert'    => 'Senior WordPress Engineer',
    ],
    'website_development.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Website Strategy Call',
        'headline'  => 'Talk to a Senior Web Engineer — Free 30-min Call',
        'subcopy'   => 'Planning a new build or a redesign? Get a scoped estimate and honest advice on stack, CMS, and performance — no sales pitch.',
        'source'    => 'popup_web_hub_consultation',
        'accent'    => '#1565c0',
        'stats'     => '300+ websites shipped &bull; 97% client retention &bull; 10+ yrs',
        'cta_label' => 'Book My Strategy Call &#8594;',
        'expert'    => 'Senior Web Engineer',
    ],

    // ---- DIGITAL MARKETING main service pages — consultation ----
    'services/social-media-marketing.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Get Our Digital Marketing Profile (PDF)',
        'subcopy'   => 'Our full digital marketing services profile — what we run, work samples, industries we&rsquo;ve scaled, our 6-step approach, and how to engage. 200+ campaigns, 100+ brands.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; 200+ campaigns &bull; 10+ yrs',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],
    'services/google_ads.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Get Our Digital Marketing Profile (PDF)',
        'subcopy'   => 'Inside: our Google Ads, Meta Ads, SEO and lead-gen capabilities, work samples, industries we&rsquo;ve scaled, and our managed-services model. The full picture in one PDF.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#4285f4',
        'stats'     => 'Rs 8Cr+ ad spend managed &bull; 100+ brands &bull; 10+ yrs',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],
    'services/meta_ads.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Get Our Digital Marketing Profile (PDF)',
        'subcopy'   => 'Our full marketing capability stack &mdash; paid social, search, SEO, content, branding &mdash; with industries we&rsquo;ve scaled, work samples, and how to engage. All in one PDF.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#1877f2',
        'stats'     => 'Rs 8Cr+ ad spend managed &bull; 100+ brands &bull; 10+ yrs',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],
    'services/seo-article-writing.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free SEO Strategy Call',
        'headline'  => 'Free 30-min SEO Strategy Call',
        'subcopy'   => 'Get an honest view of your SEO position, top gaps, and the fastest wins in a 30-minute call with a senior SEO strategist.',
        'source'    => 'popup_seo_consultation',
        'accent'    => '#00b894',
        'stats'     => '500+ SEO projects delivered &bull; 10+ yrs experience',
        'cta_label' => 'Book My SEO Call &#8594;',
        'expert'    => 'Senior SEO Strategist',
    ],
    'services/seo-auditing-services.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free SEO Audit',
        'headline'  => 'Free SEO Audit — Talk to a Senior Strategist',
        'subcopy'   => 'Get a free top-line SEO audit flagging the issues holding your rankings back, and a priority fix-list you can action this month.',
        'source'    => 'popup_seo_audit',
        'accent'    => '#00b894',
        'stats'     => '500+ SEO audits done &bull; 10+ yrs experience',
        'cta_label' => 'Get My Free SEO Audit &#8594;',
        'expert'    => 'Senior SEO Strategist',
    ],
    'services/local_seo_services.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Local SEO Audit',
        'headline'  => 'Free Local SEO Audit for Your Business',
        'subcopy'   => 'Get a 30-min review of your Google Business Profile, local citations, and on-page local signals with a clear priority list.',
        'source'    => 'popup_local_seo_audit',
        'accent'    => '#00b894',
        'stats'     => 'Local SEO for 200+ businesses &bull; 10+ yrs',
        'cta_label' => 'Get My Local SEO Audit &#8594;',
        'expert'    => 'Local SEO Strategist',
    ],
    'digital_marketing.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Download Our Digital Marketing Profile (PDF)',
        'subcopy'   => 'The full ITD GrowthLabs marketing services profile &mdash; what we do, work samples (motion, social, branding), industries we&rsquo;ve scaled, our 6-step engagement approach, and how to contact us. One PDF.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#e91e63',
        'stats'     => 'Rs 8Cr+ spend managed &bull; 100+ brands &bull; 500+ SEO projects',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],

    // ---- DIGITAL MARKETING content + content-services pages — PDF ----
    'services/content-marketing-services.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Download Our Digital Marketing Profile (PDF)',
        'subcopy'   => 'Content is one part of our managed marketing stack. See the full picture in our company profile: branding, content, SEO, paid, work samples and engagement model.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; 500+ SEO projects &bull; 10+ yrs',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],

    // ---- REGIONAL digital-marketing-services pages — PDF lead magnet ----
    'usa/digital-marketing-services.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Download Our Marketing Services Profile (PDF)',
        'subcopy'   => 'Our complete digital marketing service offering &mdash; what we do, work samples and how we engage with US clients. EST/PST aligned account management.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; EST/PST aligned &bull; 10+ yrs',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],
    'uk/digital-marketing-services.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Download Our Marketing Services Profile (PDF)',
        'subcopy'   => 'Our complete digital marketing service offering for UK businesses &mdash; what we do, work samples and how we engage. GMT-aligned account management.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; GMT aligned &bull; 10+ yrs',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],
    'uae/digital-marketing-services.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Download Our Marketing Services Profile (PDF)',
        'subcopy'   => 'Our complete digital marketing service offering for UAE / GCC businesses &mdash; what we do, work samples and how we engage. Dubai-timezone account management.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; Dubai-time support &bull; 10+ yrs',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],
    'australia/digital-marketing-services.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Download Our Marketing Services Profile (PDF)',
        'subcopy'   => 'Our complete digital marketing service offering for Australian businesses &mdash; what we do, work samples and how we engage. AEDT-aligned account management.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; AEDT aligned &bull; 10+ yrs',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],
    'africa/digital-marketing-services.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Download Our Marketing Services Profile (PDF)',
        'subcopy'   => 'Our complete digital marketing service offering for African businesses &mdash; what we do, work samples and how we engage with brands across the continent.',
        'pdf_url'   => '../assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; Pan-African delivery &bull; 10+ yrs',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],

    // ---- READY-TO-BUY LEAD GEN service page — PDF lead magnet ----
    'services/ready-to-buy-lead-generation.php' => [
        'type'      => 'pdf',
        'eyebrow'   => 'Marketing Company Profile',
        'headline'  => 'Download Our Marketing Services Profile (PDF)',
        'subcopy'   => 'Inside: our managed lead-generation system, work samples, the industries we serve, and the engagement model behind the ready-to-buy delivery promise.',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Marketing-Profile.pdf',
        'source'    => 'popup_marketing_brochure_download',
        'accent'    => '#1e40af',
        'stats'     => 'AI-filtered &bull; Real-time delivery &bull; Quality over quantity',
        'cta_label' => 'Download Marketing Profile (PDF) &#8595;',
    ],

    // ---- PRODUCT pages — consultation / demo ----
    'products/courier-management-software.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Product Demo',
        'headline'  => 'See Our Courier Management Software Live',
        'subcopy'   => 'Get a 30-minute live demo with a logistics expert. See 21+ features in action — pickup, hub, manifest, billing, tracking — walked through on your real use case.',
        'source'    => 'popup_cms_demo',
        'accent'    => '#1e40af',
        'stats'     => 'Used across 14+ hubs &bull; 50,000+ shipments/mo &bull; 99% scan visibility',
        'cta_label' => 'Book a Free Demo &#8594;',
        'expert'    => 'Logistics Product Expert',
    ],
    'products/logistics-mobile-app.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Product Demo',
        'headline'  => 'See Our Logistics Mobile App Live',
        'subcopy'   => 'Get a 30-minute demo of our field apps — pickup, hub in-scan, delivery POD, COD — walked through for your operation.',
        'source'    => 'popup_logistics_app_demo',
        'accent'    => '#1e40af',
        'stats'     => '5,000+ daily bookings &bull; 200+ riders &bull; 4.6&starf; rated',
        'cta_label' => 'Book a Free Demo &#8594;',
        'expert'    => 'Logistics Product Expert',
    ],
    'products/multi-vendor-marketplace-app.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Marketplace Strategy Call',
        'headline'  => 'Plan Your Multi-Vendor Marketplace — Free 30-min Call',
        'subcopy'   => 'Food, grocery, fish, pharmacy, hyperlocal or B2B aggregator? Get a fixed-scope quote, vertical-fit blueprint and timeline from a senior marketplace engineer.',
        'source'    => 'popup_marketplace_consultation',
        'accent'    => '#ff6b35',
        'stats'     => '4 apps in package &bull; 8&ndash;14 wk launch &bull; 100% source-code ownership',
        'cta_label' => 'Book My Marketplace Call &#8594;',
        'expert'    => 'Senior Marketplace Engineer',
    ],

    // ---- CASE STUDIES pages — "build something similar" consultation ----
    'case-studies.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Build Something Similar?',
        'headline'  => 'Planning a Build Like These? Free 30-min Call',
        'subcopy'   => 'Every case study on this page started as a 30-minute scoping call. Tell us what you\'re planning — we\'ll share what worked and what we\'d do differently.',
        'source'    => 'popup_case_studies_consultation',
        'accent'    => '#1e40af',
        'stats'     => '300+ projects &bull; 50M+ shipments &bull; 97% client retention',
        'cta_label' => 'Book My Scoping Call &#8594;',
        'expert'    => 'Senior Solution Engineer',
    ],
    'case-studies/on-demand-courier-booking-app.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Build an On-Demand Courier App?',
        'headline'  => 'Planning a Similar Courier App? Free 30-min Call',
        'subcopy'   => 'Get a candid walk-through of what worked, what we\'d do differently, and what a build like this would cost in your market.',
        'source'    => 'popup_courier_app_case_consultation',
        'accent'    => '#1e40af',
        'stats'     => '5,000+ daily bookings &bull; 200+ riders &bull; 4.6&starf; rated',
        'cta_label' => 'Book My Scoping Call &#8594;',
        'expert'    => 'Logistics App Engineer',
    ],
    'case-studies/smart-logistics-saas-platform.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Build a Logistics SaaS?',
        'headline'  => 'Planning a Multi-Carrier Platform? Free 30-min Call',
        'subcopy'   => 'Talk to the engineers who built this — tech stack, carrier integration gotchas, and realistic timelines for your roadmap.',
        'source'    => 'popup_saas_case_consultation',
        'accent'    => '#1e40af',
        'stats'     => '50,000+ monthly shipments &bull; 15+ carriers &bull; ~20% savings',
        'cta_label' => 'Book My Scoping Call &#8594;',
        'expert'    => 'SaaS Platform Engineer',
    ],
    'case-studies/courier-management-system.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Build a Courier CMS?',
        'headline'  => 'Replacing Excel With a Real Courier System? Free 30-min Call',
        'subcopy'   => 'Talk to the team that built this — rollout playbook, integration points with your existing hubs, realistic timelines and cost.',
        'source'    => 'popup_cms_case_consultation',
        'accent'    => '#1e40af',
        'stats'     => '14 hubs live &bull; 70% less manual entry &bull; Zero billing errors',
        'cta_label' => 'Book My Scoping Call &#8594;',
        'expert'    => 'Logistics Platform Engineer',
    ],

    // ---- COMPARISON pages — build-vs-buy decision support ----
    'compare/shipsy-loginext-alternative.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Build vs Buy — Free Strategy Call',
        'headline'  => 'Stuck Between Shipsy / LogiNext and a Custom Build?',
        'subcopy'   => 'Get a 30-min call with a senior logistics engineer. We\'ll look at your volume, workflow and contracts and give you an honest recommendation — even if it\'s "stay on SaaS." No slide deck.',
        'source'    => 'popup_compare_shipsy_loginext',
        'accent'    => '#1e40af',
        'stats'     => '50M+ shipments shipped &bull; 14 hubs live &bull; 10+ yrs',
        'cta_label' => 'Book My Free Consultation &#8594;',
        'expert'    => 'Senior Logistics Engineer',
    ],
    'compare/custom-vs-white-label-courier-software.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Build vs Buy — Free Strategy Call',
        'headline'  => 'Custom Build, White-Label, or Hybrid? Free 30-min Call',
        'subcopy'   => 'Tell us your volume, workflow and 18-month plan. We\'ll show you the path with the lowest 5-year TCO — even if it\'s "go white-label first." No sales pitch.',
        'source'    => 'popup_compare_custom_whitelabel',
        'accent'    => '#1e40af',
        'stats'     => '50M+ shipments shipped &bull; 14 hubs live &bull; 10+ yrs',
        'cta_label' => 'Book My Free Consultation &#8594;',
        'expert'    => 'Senior Logistics Engineer',
    ],

    // ---- TEAM / AUTHORS page — direct discovery call ----
    'team.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Talk to a Senior Lead',
        'headline'  => 'Routed to the Right Senior Lead — Free 30-min Call',
        'subcopy'   => 'Tell us what you\'re scoping. We\'ll route the call to the senior engineer or strategist who runs that track. First reply within one business day.',
        'source'    => 'popup_team_consultation',
        'accent'    => '#1e40af',
        'stats'     => '55+ senior team &bull; 300+ projects &bull; 97% retention',
        'cta_label' => 'Book My Discovery Call &#8594;',
        'expert'    => 'Senior Solution Engineer',
    ],

    // ---- Default / fallback — existing generic Company Profile popup ----
    'default' => [
        'type'      => 'pdf',
        'eyebrow'   => '',
        'headline'  => 'Download Our Company Profile',
        'subcopy'   => '',
        'pdf_url'   => 'assets/ITD-GrowthLabs-Company-Profile.pdf',
        'source'    => 'popup_profile_download',
        'accent'    => '#1565c0',
        'stats'     => '300+ projects &bull; 97% client retention &bull; 10+ years experience',
        'cta_label' => 'Download Company Profile (PDF) &#8595;',
    ],
];

$itdgl_cfg = $itdgl_popups[$itdgl_key] ?? $itdgl_popups['default'];

// Lock some defaults defensively
$itdgl_cfg['type']      = $itdgl_cfg['type']      ?? 'pdf';
$itdgl_cfg['accent']    = $itdgl_cfg['accent']    ?? '#1565c0';
$itdgl_cfg['eyebrow']   = $itdgl_cfg['eyebrow']   ?? '';
$itdgl_cfg['subcopy']   = $itdgl_cfg['subcopy']   ?? '';
$itdgl_cfg['stats']     = $itdgl_cfg['stats']     ?? '300+ projects &bull; 97% client retention &bull; 10+ years experience';
$itdgl_cfg['source']    = $itdgl_cfg['source']    ?? 'popup_generic';
$itdgl_cfg['cta_label'] = $itdgl_cfg['cta_label'] ?? 'Submit &#8594;';
$itdgl_cfg['expert']    = $itdgl_cfg['expert']    ?? 'Senior Expert';

// Resolve URLs
$itdgl_pdf_url     = $itdgl_base . ($itdgl_cfg['pdf_url'] ?? 'assets/ITD-GrowthLabs-Company-Profile.pdf');
$itdgl_contact_url = $itdgl_base . 'contact-us.php';
$itdgl_banner_url  = $itdgl_base . 'assets/img/BlackBlueBizBanner.jpg';
?>
<style>
/* ============================================================
   ITD GrowthLabs — Modern Popup (2026 redesign)
   Two-column split layout, brand-gradient hero strip on the left
   with eyebrow + headline + sub + trust pills, conversion-engineered
   form on the right with WhatsApp + Calendly fast paths.
   Mobile: stacks vertically, form first.
   ============================================================ */
#imagePopupModal { --ip-accent: <?php echo htmlspecialchars($itdgl_cfg['accent']); ?>; }
#imagePopupModal .modal-dialog { max-width: 920px; }
#imagePopupModal .modal-content { background: #fff; border: none; border-radius: 18px; overflow: hidden; box-shadow: 0 32px 80px rgba(15,23,42,0.32); }
.itdgl-popup-wrap { display: grid; grid-template-columns: 1.05fr 1fr; min-height: 460px; }

/* LEFT — pitch column with brand gradient */
.itdgl-popup-pitch {
    position: relative;
    background:
        radial-gradient(700px 380px at 80% 0%, rgba(255,107,0,0.20), transparent 70%),
        linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #1e293b 100%);
    color: #fff;
    padding: 40px 36px;
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
    margin-bottom: 18px; width: fit-content;
}
.itdgl-popup-pitch h3 {
    margin: 0 0 12px; color: #fff;
    font-size: 26px; font-weight: 800; line-height: 1.2;
}
.itdgl-popup-pitch h3 .accent { color: #ff9550; }
.itdgl-popup-pitch p.itdgl-popup-subcopy {
    margin: 0 0 22px;
    font-size: 14.5px; line-height: 1.65;
    color: rgba(255,255,255,0.86);
}
.itdgl-popup-trust { margin-top: auto; padding-top: 18px; }
.itdgl-popup-trust-row {
    display: flex; flex-wrap: wrap; gap: 14px;
    font-size: 12.5px; color: rgba(255,255,255,0.75);
}
.itdgl-popup-trust-row span { display: inline-flex; align-items: center; gap: 6px; }
.itdgl-popup-trust-row i { color: #ff9550; }

/* Alt-CTA chips (WhatsApp + Contact Us) inside pitch column */
.itdgl-popup-alt-ctas { display: flex; gap: 10px; flex-wrap: wrap; margin: 4px 0 18px; }
.itdgl-popup-alt-ctas a {
    flex: 1; min-width: 140px;
    display: inline-flex; align-items: center; justify-content: center; gap: 8px;
    padding: 11px 16px; border-radius: 8px;
    font-size: 13.5px; font-weight: 700;
    text-decoration: none;
    transition: transform .2s ease, box-shadow .2s ease;
}
.itdgl-popup-alt-ctas a:hover { transform: translateY(-2px); }
.itdgl-popup-alt-ctas a.wa { background: #25D366; color: #fff !important; box-shadow: 0 4px 12px rgba(37,211,102,0.30); }
.itdgl-popup-alt-ctas a.wa:hover { background: #1da856; box-shadow: 0 8px 20px rgba(37,211,102,0.45); }
.itdgl-popup-alt-ctas a.contact { background: rgba(255,255,255,0.08); color: #fff !important; border: 1px solid rgba(255,255,255,0.25); }
.itdgl-popup-alt-ctas a.contact:hover { background: rgba(255,255,255,0.16); }

/* RIGHT — form column */
.itdgl-popup-form-col {
    background: #fff; padding: 40px 36px;
    display: flex; flex-direction: column; gap: 14px;
    position: relative;
}
.itdgl-popup-form-col h4 {
    margin: 0 0 4px;
    font-size: 18px; font-weight: 800; color: #0f172a;
    letter-spacing: -0.2px;
}
.itdgl-popup-form-col p.form-promise {
    margin: 0 0 16px; font-size: 13px; color: #64748b; line-height: 1.5;
}
.itdgl-popup-form-col p.form-promise strong { color: var(--ip-accent); }
#profile-form-section { background: transparent; border: none; padding: 0; }
#profile-form-section input {
    width: 100%; padding: 13px 14px;
    border: 2px solid #e2e8f0; border-radius: 8px;
    font-size: 15px; outline: none;
    transition: border-color .25s ease, box-shadow .25s ease;
    background: #f8fafc; color: #0f172a;
}
#profile-form-section input:focus {
    border-color: var(--ip-accent);
    box-shadow: 0 0 0 4px rgba(30,64,175,0.10);
    background: #ffffff;
}
#profile-form-section input::placeholder { color: #94a3b8; }
#imagePopupModal .itdgl-popup-primary-btn {
    background: linear-gradient(135deg, #ff6b00 0%, #ef4444 100%);
    color: #fff; border: none; padding: 14px 22px; border-radius: 8px;
    font-weight: 800; font-size: 15px; letter-spacing: 0.2px;
    cursor: pointer; width: 100%;
    box-shadow: 0 6px 20px rgba(255,107,0,0.30);
    transition: transform .2s ease, box-shadow .2s ease;
}
#imagePopupModal .itdgl-popup-primary-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(255,107,0,0.45);
}

/* Soft promises below form */
.itdgl-popup-microcopy {
    display: flex; flex-wrap: wrap; gap: 10px 16px;
    font-size: 11.5px; color: #64748b;
    margin-top: 6px;
}
.itdgl-popup-microcopy span { display: inline-flex; align-items: center; gap: 5px; }
.itdgl-popup-microcopy i { color: #16a34a; font-size: 11px; }

/* Success states */
#profile-download-success { display: none; text-align: center; padding: 18px 0 0; }
#profile-download-success p.success-headline { color: #16a34a; font-weight: 800; font-size: 17px; margin: 0 0 8px; }
#profile-download-success p.success-sub { color: #475569; font-size: 14px; line-height: 1.6; margin: 0; }
#profile-download-link {
    display: inline-block; margin-top: 14px;
    background: linear-gradient(135deg, #ff6b00 0%, #ef4444 100%);
    color: #fff !important; padding: 11px 24px; border-radius: 8px;
    font-weight: 700; font-size: 14px; text-decoration: none;
    box-shadow: 0 6px 18px rgba(255,107,0,0.30);
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

/* MOBILE — stack vertically, form first */
@media (max-width: 768px) {
    #imagePopupModal .modal-dialog { max-width: 100%; margin: 12px; }
    .itdgl-popup-wrap { grid-template-columns: 1fr; min-height: 0; }
    .itdgl-popup-pitch { padding: 28px 24px 24px; order: 2; }
    .itdgl-popup-pitch h3 { font-size: 21px; }
    .itdgl-popup-pitch p.itdgl-popup-subcopy { font-size: 14px; margin-bottom: 16px; }
    .itdgl-popup-form-col { padding: 28px 24px 22px; order: 1; }
    .itdgl-popup-trust { padding-top: 8px; }
}
</style>

<div class="modal fade" id="imagePopupModal" tabindex="-1" aria-labelledby="imagePopupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="ip-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>

            <div class="itdgl-popup-wrap">
                <!-- LEFT — pitch column with brand gradient -->
                <div class="itdgl-popup-pitch">
                    <?php if ($itdgl_cfg['eyebrow']): ?>
                        <span class="itdgl-popup-eyebrow"><i class="fas fa-bolt" style="font-size:9px;"></i> <?php echo $itdgl_cfg['eyebrow']; ?></span>
                    <?php endif; ?>
                    <h3><?php echo $itdgl_cfg['headline']; ?></h3>
                    <?php if ($itdgl_cfg['subcopy']): ?>
                        <p class="itdgl-popup-subcopy"><?php echo $itdgl_cfg['subcopy']; ?></p>
                    <?php endif; ?>

                    <div class="itdgl-popup-alt-ctas">
                        <a class="wa" href="https://wa.me/918450978544?text=Hi%20ITD%20GrowthLabs%2C%20I%27d%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener" onclick="if(typeof gtag==='function')gtag('event','whatsapp_open',{source:'popup'});">
                            <i class="fab fa-whatsapp" style="font-size:16px;"></i> WhatsApp
                        </a>
                        <a class="contact" href="<?php echo htmlspecialchars($itdgl_contact_url); ?>">
                            <i class="fas fa-envelope" style="font-size:13px;"></i> Contact form
                        </a>
                    </div>

                    <div class="itdgl-popup-trust">
                        <div class="itdgl-popup-trust-row">
                            <span><i class="fas fa-shield-check"></i> Senior team since 2014</span>
                            <span><i class="fas fa-globe"></i> 6-country delivery</span>
                            <span><i class="fas fa-handshake"></i> 97% retention</span>
                        </div>
                        <p style="margin:14px 0 0;font-size:12px;color:rgba(255,255,255,0.55);"><?php echo $itdgl_cfg['stats']; ?></p>
                    </div>
                </div>

                <!-- RIGHT — form column -->
                <div class="itdgl-popup-form-col">
                    <h4>
                        <?php if ($itdgl_cfg['type'] === 'pdf'): ?>
                            <i class="fas fa-file-pdf" style="color:var(--ip-accent);margin-right:6px;"></i> Get the PDF
                        <?php else: ?>
                            <i class="fas fa-phone-volume" style="color:var(--ip-accent);margin-right:6px;"></i> Talk to a senior expert
                        <?php endif; ?>
                    </h4>
                    <p class="form-promise">
                        <?php if ($itdgl_cfg['type'] === 'pdf'): ?>
                            <strong>Instant download.</strong> Drop your details and the PDF starts immediately.
                        <?php else: ?>
                            <strong>24-hour reply window.</strong> We&rsquo;ll route you to a <?php echo htmlspecialchars($itdgl_cfg['expert']); ?> &mdash; no SDRs, no scripts.
                        <?php endif; ?>
                    </p>

                    <div id="profile-form-section">
                        <form id="profile-download-form" onsubmit="return handleProfileDownload(event)" style="display:flex;flex-direction:column;gap:12px;">
                            <input type="text"   id="profile-lead-name"   placeholder="Your name *" required autocomplete="name">
                            <input type="email"  id="profile-lead-email"  placeholder="Work email *" required autocomplete="email">
                            <input type="tel"    id="profile-lead-mobile" placeholder="Mobile / WhatsApp (e.g. +91 98765 43210) *" required pattern="[\+]?[0-9\s\-]{7,18}" autocomplete="tel">
                            <input type="text" name="username_hp" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;">
                            <input type="hidden" name="form_ts" id="itdgl-popup-ts" value="<?php echo time(); ?>">
                            <button type="submit" class="itdgl-popup-primary-btn"><?php echo $itdgl_cfg['cta_label']; ?></button>
                        </form>
                        <div class="itdgl-popup-microcopy">
                            <span><i class="fas fa-lock"></i> Private &mdash; we never share</span>
                            <span><i class="fas fa-bolt"></i> Reply in 24 hrs</span>
                            <span><i class="fas fa-ban"></i> No spam ever</span>
                        </div>
                    </div>

                    <div id="profile-download-success">
                        <?php if ($itdgl_cfg['type'] === 'pdf'): ?>
                            <p class="success-headline"><i class="fas fa-check-circle"></i> Download starting&hellip;</p>
                            <p class="success-sub">Check your email for the link too &mdash; we&rsquo;ve sent a copy in case you need it later.</p>
                            <a id="profile-download-link" href="<?php echo htmlspecialchars($itdgl_pdf_url); ?>" download>
                                <i class="fas fa-arrow-down" style="margin-right:6px;"></i> If download didn&rsquo;t start, click here
                            </a>
                        <?php else: ?>
                            <p class="success-headline"><i class="fas fa-check-circle"></i> We&rsquo;ll be in touch within 24 hours.</p>
                            <p class="success-sub">A <?php echo htmlspecialchars($itdgl_cfg['expert']); ?> will reply directly. For anything urgent, <a href="https://wa.me/918450978544" target="_blank" rel="noopener" style="color:var(--ip-accent);font-weight:700;text-decoration:none;">WhatsApp us</a> instead.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        // Config injected from PHP — used by the submit handler so the same form
        // can behave differently depending on whether the current popup is a
        // PDF download or a consultation request.
        window.__itdglPopup = {
            type:     <?php echo json_encode($itdgl_cfg['type']); ?>,
            source:   <?php echo json_encode($itdgl_cfg['source']); ?>,
            pdf_url:  <?php echo json_encode($itdgl_pdf_url); ?>
        };
    })();

    document.addEventListener('DOMContentLoaded', function() {
        if (typeof bootstrap === 'undefined' || !bootstrap.Modal) return;
        var popupModal = new bootstrap.Modal(document.getElementById('imagePopupModal'), {
            backdrop: true,
            keyboard: true
        });
        setTimeout(function() {
            popupModal.show();
        }, 10000);
    });

    function handleProfileDownload(e) {
        e.preventDefault();
        var name   = document.getElementById('profile-lead-name').value;
        var email  = document.getElementById('profile-lead-email').value;
        var mobile = document.getElementById('profile-lead-mobile').value;
        var cfg    = window.__itdglPopup || { type:'pdf', source:'popup_profile_download' };

        // Build form data (includes honeypot + form_ts so the spam filter passes)
        var form = document.getElementById('profile-download-form');
        var formData = new FormData(form);
        formData.append('name', name);
        formData.append('email', email);
        formData.append('mobile', mobile);
        formData.append('source', cfg.source);

        // Base path for leadCaptureMail.php — stays at the site root
        var p = window.location.pathname;
        var basePath = (
            p.indexOf('/services/')     !== -1 ||
            p.indexOf('/resources/')    !== -1 ||
            p.indexOf('/products/')     !== -1 ||
            p.indexOf('/industries/')   !== -1 ||
            p.indexOf('/case-studies/') !== -1 ||
            p.match(/^\/(usa|uk|uae|australia|africa)\//)
        ) ? '../' : '';

        fetch(basePath + 'leadCaptureMail.php', { method: 'POST', body: formData });

        // GA4 event — include the specific popup source for granular reporting
        if (typeof gtag === 'function') {
            gtag('event', 'generate_lead', {
                lead_source: cfg.source,
                lead_type:   cfg.type,
                email_domain: (email.indexOf('@') !== -1 ? email.split('@')[1] : '')
            });
        }

        // Flip to success state
        document.getElementById('profile-form-section').style.display = 'none';
        document.getElementById('profile-download-success').style.display = 'block';

        // Only for PDF popups: auto-trigger the download link
        if (cfg.type === 'pdf') {
            var link = document.getElementById('profile-download-link');
            if (link) link.click();
        }

        return false;
    }
</script>
