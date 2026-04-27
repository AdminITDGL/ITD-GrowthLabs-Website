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
        'accent'    => '#ff6b00',
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
        'accent'    => '#ff6b00',
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
        'type'      => 'consultation',
        'eyebrow'   => 'Free Social Media Audit',
        'headline'  => 'Free Social Media Audit — Talk to a Strategist',
        'subcopy'   => 'Get a 30-minute audit of your current social presence with recommendations on content mix, channels and paid-to-organic blend.',
        'source'    => 'popup_social_audit',
        'accent'    => '#e91e63',
        'stats'     => '100+ brands scaled &bull; 10+ yrs media experience',
        'cta_label' => 'Get My Free Audit &#8594;',
        'expert'    => 'Senior Social Strategist',
    ],
    'services/google_ads.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Google Ads Audit',
        'headline'  => 'Free Google Ads Account Audit',
        'subcopy'   => 'Wasting spend on the wrong keywords, ad copy, or landing pages? Get a line-by-line audit from a Google Ads specialist — free.',
        'source'    => 'popup_google_ads_audit',
        'accent'    => '#4285f4',
        'stats'     => 'Rs 8Cr+ ad spend managed &bull; 10+ yrs PPC experience',
        'cta_label' => 'Get My Free PPC Audit &#8594;',
        'expert'    => 'Google Ads Specialist',
    ],
    'services/meta_ads.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Meta Ads Audit',
        'headline'  => 'Free Meta Ads Audit — Talk to a Paid Social Expert',
        'subcopy'   => 'CAC crept up? CTRs softening? Get a free audit of your Facebook & Instagram ads setup with a clear fix-list.',
        'source'    => 'popup_meta_ads_audit',
        'accent'    => '#1877f2',
        'stats'     => 'Rs 8Cr+ ad spend managed &bull; 10+ yrs paid social experience',
        'cta_label' => 'Get My Free Meta Audit &#8594;',
        'expert'    => 'Paid Social Specialist',
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
        'type'      => 'consultation',
        'eyebrow'   => 'Free Digital Marketing Audit',
        'headline'  => 'Free Digital Marketing Audit — Talk to a Senior Strategist',
        'subcopy'   => 'Get a free top-line audit of your paid, organic and content marketing with the top three priorities to fix this quarter.',
        'source'    => 'popup_digital_marketing_audit',
        'accent'    => '#e91e63',
        'stats'     => 'Rs 8Cr+ spend managed &bull; 500+ SEO projects &bull; 10+ yrs',
        'cta_label' => 'Get My Free Audit &#8594;',
        'expert'    => 'Senior Marketing Strategist',
    ],

    // ---- PRODUCT pages — consultation / demo ----
    'products/courier-management-software.php' => [
        'type'      => 'consultation',
        'eyebrow'   => 'Free Product Demo',
        'headline'  => 'See Our Courier Management Software Live',
        'subcopy'   => 'Get a 30-minute live demo with a logistics expert. See 21+ features in action — pickup, hub, manifest, billing, tracking — walked through on your real use case.',
        'source'    => 'popup_cms_demo',
        'accent'    => '#ff6b00',
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
        'accent'    => '#ff6b00',
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
        'accent'    => '#ff6b00',
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
        'accent'    => '#ff6b00',
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
        'accent'    => '#ff6b00',
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
        'accent'    => '#ff6b00',
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
        'accent'    => '#ff6b00',
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
        'accent'    => '#ff6b00',
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
        'accent'    => '#ff6b00',
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
    /* Keep legacy selectors; scope new ones under #imagePopupModal so we don't leak styles. */
    .btn-close:after { display: none; }
    #imagePopupModal .itdgl-popup-eyebrow { display: inline-block; padding: 4px 12px; background: rgba(255,107,0,0.1); color: <?php echo htmlspecialchars($itdgl_cfg['accent']); ?>; border: 1px solid rgba(255,107,0,0.25); border-radius: 20px; font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 8px; }
    #imagePopupModal .itdgl-popup-headline { margin: 0 0 6px; font-size: 19px; font-weight: 800; color: #0a1629; line-height: 1.25; }
    #imagePopupModal .itdgl-popup-subcopy  { margin: 0 0 12px; font-size: 13.5px; line-height: 1.55; color: #4a5568; }
    #profile-form-section input { width: 100%; padding: 10px 14px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 14px; outline: none; transition: border-color 0.3s; }
    #profile-form-section input:focus { border-color: <?php echo htmlspecialchars($itdgl_cfg['accent']); ?>; }
    #profile-download-success { display: none; text-align: center; padding: 15px 0; }
    #imagePopupModal .itdgl-popup-primary-btn { background: linear-gradient(135deg, <?php echo htmlspecialchars($itdgl_cfg['accent']); ?>, #0d47a1); color: #fff; border: none; padding: 11px 20px; border-radius: 8px; font-weight: 600; font-size: 14px; cursor: pointer; transition: opacity 0.3s; width: 100%; }
    #imagePopupModal .itdgl-popup-primary-btn:hover { opacity: 0.92; }
</style>

<div class="modal fade" id="imagePopupModal" tabindex="-1" aria-labelledby="imagePopupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background: #fff; border: none; position: relative; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.3);">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 12px; right: 15px; z-index: 1051; background: #fff; border-radius: 50%; width: 36px; height: 36px; opacity: 1; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 8px; font-size: 18px; line-height: 1; display: flex; align-items: center; justify-content: center; border: none; cursor: pointer;">
                <span style="color: #333; font-weight: bold;">&times;</span>
            </button>

            <!-- Body -->
            <div style="padding: 48px 30px 24px; display: flex; flex-direction: column; gap: 10px;">

                <?php if ($itdgl_cfg['eyebrow']): ?>
                    <span class="itdgl-popup-eyebrow"><?php echo $itdgl_cfg['eyebrow']; ?></span>
                <?php endif; ?>
                <h3 class="itdgl-popup-headline"><?php echo $itdgl_cfg['headline']; ?></h3>
                <?php if ($itdgl_cfg['subcopy']): ?>
                    <p class="itdgl-popup-subcopy"><?php echo $itdgl_cfg['subcopy']; ?></p>
                <?php endif; ?>

                <!-- Primary CTAs -->
                <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                    <a href="<?php echo htmlspecialchars($itdgl_contact_url); ?>" style="flex: 1; min-width: 200px; display: block; text-align: center; background: linear-gradient(135deg, <?php echo htmlspecialchars($itdgl_cfg['accent']); ?>, #0d47a1); color: #fff; padding: 12px 18px; border-radius: 8px; font-weight: 600; font-size: 14px; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                        Get a Free Consultation &#8594;
                    </a>
                    <a href="https://wa.me/918450978544?text=Hi%20ITD%20GrowthLabs%2C%20I%27d%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener" style="flex: 1; min-width: 200px; display: block; text-align: center; background: #25D366; color: #fff; padding: 12px 18px; border-radius: 8px; font-weight: 600; font-size: 14px; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="white" style="vertical-align: middle; margin-right: 6px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Chat on WhatsApp
                    </a>
                </div>

                <!-- Lead Capture Form -->
                <div id="profile-form-section" style="background: #f8f9fb; border: 2px solid #e8ecf1; border-radius: 10px; padding: 14px 16px;">
                    <p style="margin: 0 0 8px; font-size: 13px; font-weight: 700; color: <?php echo htmlspecialchars($itdgl_cfg['accent']); ?>;">
                        <?php if ($itdgl_cfg['type'] === 'pdf'): ?>
                            &#128196; <?php echo htmlspecialchars($itdgl_cfg['headline']); ?>
                        <?php else: ?>
                            &#128222; Get a call back from a <?php echo htmlspecialchars($itdgl_cfg['expert']); ?> within 24 hours
                        <?php endif; ?>
                    </p>
                    <form id="profile-download-form" onsubmit="return handleProfileDownload(event)" style="display: flex; flex-direction: column; gap: 8px;">
                        <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                            <input type="text" id="profile-lead-name" placeholder="Your Name" required style="flex: 1; min-width: 140px;">
                            <input type="email" id="profile-lead-email" placeholder="Work Email" required style="flex: 1; min-width: 180px;">
                        </div>
                        <input type="tel" id="profile-lead-mobile" placeholder="Mobile Number (e.g. +91 98765 43210)" required pattern="[\+]?[0-9\s\-]{7,18}" title="Enter a valid mobile number">
                        <!-- Honeypot + timestamp for spam protection -->
                        <input type="text" name="username_hp" tabindex="-1" autocomplete="off" style="position:absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden;">
                        <input type="hidden" name="form_ts" id="itdgl-popup-ts" value="<?php echo time(); ?>">
                        <button type="submit" class="itdgl-popup-primary-btn"><?php echo $itdgl_cfg['cta_label']; ?></button>
                    </form>
                </div>

                <div id="profile-download-success">
                    <?php if ($itdgl_cfg['type'] === 'pdf'): ?>
                        <p style="color: #25D366; font-weight: 700; font-size: 15px; margin: 0 0 8px;">&#10003; Thank you! Your download is starting...</p>
                        <a id="profile-download-link" href="<?php echo htmlspecialchars($itdgl_pdf_url); ?>" download style="display: inline-block; background: <?php echo htmlspecialchars($itdgl_cfg['accent']); ?>; color: #fff; padding: 10px 24px; border-radius: 8px; font-weight: 600; font-size: 14px; text-decoration: none;">
                            Click here if download didn't start
                        </a>
                    <?php else: ?>
                        <p style="color: #25D366; font-weight: 700; font-size: 16px; margin: 0 0 8px;">&#10003; Thanks — we'll call you within 24 hours.</p>
                        <p style="color: #555; font-size: 13.5px; margin: 0; line-height: 1.5;">A <?php echo htmlspecialchars($itdgl_cfg['expert']); ?> from our team will be in touch. For anything urgent, <a href="https://wa.me/918450978544" target="_blank" rel="noopener" style="color: <?php echo htmlspecialchars($itdgl_cfg['accent']); ?>; font-weight: 600;">WhatsApp us</a>.</p>
                    <?php endif; ?>
                </div>

                <p style="text-align: center; margin: 2px 0 0; font-size: 12px; color: #999;">
                    <?php echo $itdgl_cfg['stats']; ?>
                </p>
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
