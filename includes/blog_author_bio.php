<?php
/**
 * ITD GrowthLabs — Blog Author Bio
 * --------------------------------
 * Renders a team-attributed author card at the bottom of every BOFU blog.
 * Provides the E-E-A-T signal Google ranks on (December 2025 update
 * extended E-E-A-T scoring to all competitive queries, not just YMYL).
 *
 * Attribution strategy: team-led, not founder-led. The blog is by the
 * "ITD GrowthLabs Editorial Team" with a category-specific "Reviewed by"
 * line that names the relevant practice pod.
 *
 * Category is auto-detected from the calling file's basename, so the
 * component works on every blog without per-file configuration.
 */

// ── Detect blog category from the parent script path ───────────────────
$itdgl_caller = isset($_SERVER['SCRIPT_FILENAME']) ? basename($_SERVER['SCRIPT_FILENAME']) : '';
$itdgl_caller_lc = strtolower($itdgl_caller);

// Order matters — most specific industries/technologies first, so
// generic patterns like '_app_' (Mobile) don't eat 'Logistics_App_…'
// or similar before the more specific pod can claim it.
$itdgl_pods = [
    'logistics' => [
        'name'  => 'ITD Logistics Engineering',
        'desc'  => 'Senior engineers behind 50M+ shipments shipped on our courier, fleet and last-mile platforms across 14+ hubs.',
        'tags'  => ['Courier CMS', 'TMS', 'Last-mile', 'Fleet ops', 'Multi-carrier'],
        'match' => ['logistic', 'courier', 'shipping', 'shiprocket', 'shipway', 'fleet', 'last_mile', 'tms_', 'warehouse', 'supply_chain', 'multi_carrier'],
    ],
    'ai' => [
        'name'  => 'ITD AI &amp; Automation',
        'desc'  => 'Senior engineers building AI agents, automation pipelines and intelligent workflows for B2B operators.',
        'tags'  => ['Workflow AI', 'Agents', 'RAG', 'Automation', 'LLM integration'],
        'match' => ['ai_', '_ai_', 'automation', 'chatbot', 'llm', 'gpt', 'genai', 'machine_learning', 'artificial_intelligence'],
    ],
    'saas' => [
        'name'  => 'ITD SaaS Engineering',
        'desc'  => 'Senior backend, infra and product engineers shipping multi-tenant SaaS platforms across fintech, logistics and B2B verticals.',
        'tags'  => ['Multi-tenant', 'Stripe billing', 'RBAC', 'SOC 2', 'Next.js + Node'],
        'match' => ['saas', 'web_app', 'web_application', 'webapp', 'multi_tenant', 'multi-tenant'],
    ],
    'marketing' => [
        'name'  => 'ITD Digital Marketing',
        'desc'  => 'Senior strategists and operators running performance ads, SEO, content and AI-driven lead generation. Rs 8Cr+ in managed spend, 500+ SEO projects.',
        'tags'  => ['SEO', 'Google Ads', 'Meta Ads', 'Content', 'Lead-gen'],
        'match' => ['marketing', 'seo', '_ads_', 'ppc', 'social_media', 'social-media', 'content_writing', 'whatsapp_marketing', 'whatsapp_automation', 'lead_generation', 'lead-generation', 'meta_ads', 'google_ads'],
    ],
    'web' => [
        'name'  => 'ITD Web Engineering',
        'desc'  => 'Senior web engineers shipping high-converting custom sites, WordPress builds and headless storefronts. 300+ websites shipped.',
        'tags'  => ['Custom HTML', 'WordPress', 'Headless', 'Shopify', 'WooCommerce'],
        'match' => ['website', 'web_design', 'wordpress', 'shopify', 'woocommerce', 'ecommerce', 'landing_page', 'd2c'],
    ],
    'mobile' => [
        'name'  => 'ITD Mobile Engineering',
        'desc'  => 'Senior iOS, Android, Flutter and React Native engineers shipping production mobile apps for 200+ B2B and D2C clients.',
        'tags'  => ['iOS', 'Android', 'Flutter', 'React Native', 'Native + Hybrid'],
        'match' => ['mobile', 'ios', 'android', 'flutter', 'app_development', 'app-development', '_app_', '-app-', 'react_native', 'reactnative'],
    ],
    'editorial' => [
        'name'  => 'ITD GrowthLabs Editorial Team',
        'desc'  => 'Senior practitioners across our engineering, design, marketing and operations pods. 300+ projects shipped across India, USA, UK, UAE, Australia and Africa.',
        'tags'  => ['Senior team', '12+ yrs avg exp', 'In-category practitioners'],
        'match' => [],
    ],
];

$itdgl_pod_key = 'editorial';
foreach ($itdgl_pods as $key => $pod) {
    if ($key === 'editorial') continue;
    foreach ($pod['match'] as $needle) {
        if (strpos($itdgl_caller_lc, $needle) !== false) {
            $itdgl_pod_key = $key;
            break 2;
        }
    }
}
$itdgl_pod = $itdgl_pods[$itdgl_pod_key];

// ── Article modified date (file mtime — easy + accurate) ──────────────
$itdgl_mtime = isset($_SERVER['SCRIPT_FILENAME']) ? @filemtime($_SERVER['SCRIPT_FILENAME']) : false;
$itdgl_updated = $itdgl_mtime ? date('F j, Y', $itdgl_mtime) : date('F j, Y');
?>
<section class="itdgl-author" style="background:#f8fafc;border-top:1px solid #e2e8f0;border-bottom:1px solid #e2e8f0;padding:36px 0;margin:48px 0 0;">
    <div class="container">
        <div style="max-width:780px;margin:0 auto;background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:28px 30px;box-shadow:0 2px 10px rgba(15,23,42,0.04);">
            <div style="display:flex;gap:18px;align-items:flex-start;flex-wrap:wrap;">
                <div style="flex:0 0 56px;width:56px;height:56px;border-radius:14px;background:linear-gradient(135deg,#1e40af 0%,#ff6b00 100%);color:#fff;display:flex;align-items:center;justify-content:center;font-size:22px;font-weight:800;letter-spacing:-0.5px;box-shadow:0 6px 14px rgba(30,64,175,0.22);" aria-hidden="true">IG</div>
                <div style="flex:1;min-width:240px;">
                    <div style="font-size:11px;letter-spacing:1.4px;text-transform:uppercase;color:#64748b;font-weight:700;margin-bottom:4px;">Written + reviewed by</div>
                    <h3 style="font-size:18px;font-weight:800;color:#0f172a;margin:0 0 4px;line-height:1.25;"><?php echo $itdgl_pod['name']; ?></h3>
                    <div style="font-size:12.5px;color:#64748b;margin-bottom:12px;">at <a href="/about.php" style="color:#1e40af;font-weight:700;text-decoration:none;">ITD GrowthLabs</a> &middot; Last updated <?php echo $itdgl_updated; ?></div>
                    <p style="font-size:14.5px;line-height:1.65;color:#334155;margin:0 0 14px;"><?php echo $itdgl_pod['desc']; ?></p>
                    <div style="display:flex;gap:6px;flex-wrap:wrap;margin-bottom:14px;">
                        <?php foreach ($itdgl_pod['tags'] as $tag): ?>
                        <span style="font-size:11px;background:rgba(30,64,175,0.06);color:#1e40af;font-weight:700;letter-spacing:0.2px;padding:4px 10px;border-radius:14px;border:1px solid rgba(30,64,175,0.10);"><?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div style="display:flex;gap:18px;flex-wrap:wrap;font-size:13px;">
                        <a href="/about.php" style="color:#1e40af;font-weight:700;text-decoration:none;"><i class="fas fa-users" style="margin-right:5px;"></i>About the team</a>
                        <a href="/team.php" style="color:#1e40af;font-weight:700;text-decoration:none;"><i class="fas fa-user-tie" style="margin-right:5px;"></i>Practice leads</a>
                        <a href="https://calendly.com/itdgrowthlabs-info/30min" target="_blank" rel="noopener" class="js-book-call" data-source="blog_author_bio" style="color:#ff6b00;font-weight:700;text-decoration:none;"><i class="fas fa-calendar-check" style="margin-right:5px;"></i>Book a 30-min call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "<?php echo trim(html_entity_decode($itdgl_pod['name'], ENT_QUOTES, 'UTF-8')); ?>",
  "jobTitle": "Practice Team",
  "worksFor": {
    "@type": "Organization",
    "name": "ITD GrowthLabs",
    "url": "https://itdgrowthlabs.com"
  },
  "knowsAbout": <?php echo json_encode(array_map(function($t) { return trim(html_entity_decode($t, ENT_QUOTES, 'UTF-8')); }, $itdgl_pod['tags']), JSON_UNESCAPED_UNICODE); ?>,
  "url": "https://itdgrowthlabs.com/team.php"
}
</script>
