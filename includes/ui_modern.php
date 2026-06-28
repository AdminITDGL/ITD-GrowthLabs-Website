<?php
/**
 * ITD GrowthLabs — Modern UI components
 *
 * One file, multiple reusable render functions. Pages set a config array and
 * call the renderer. This keeps the design language consistent across pages
 * and means restyling is one edit, not 100.
 *
 * Functions:
 *   itdgl_render_modern_hero($cfg)         — page hero with eyebrow + h1 + sub + CTAs + trust pills
 *   itdgl_render_trust_pills($pills)        — inline trust chip row
 *   itdgl_render_process_steps($steps)      — numbered process visualisation
 *   itdgl_render_outcome_grid($cards)       — 3-col outcome / benefit grid
 *   itdgl_render_faq_accordion($faqs, $heading)  — accessible accordion + FAQPage schema
 *   itdgl_render_final_cta($cfg)            — final-section booking CTA
 *
 * All functions emit HTML directly.  Pages can opt out per-section easily.
 */

// ---------------------------------------------------------------------
// Shared styles for all modern UI components (rendered once per page).
// ---------------------------------------------------------------------
function itdgl_render_modern_styles() {
    static $rendered = false;
    if ($rendered) return;
    $rendered = true;
?>
<style>
:root {
    /* ITD GrowthLabs brand palette — Blue + Orange + Red + Black */
    --md-primary:        #1e40af;       /* rich brand blue */
    --md-primary-dark:   #1e3a8a;       /* deep indigo */
    --md-blue-light:     #3b82f6;       /* bright blue */
    --md-blue-soft:      #60a5fa;       /* light blue (hero accent text) */

    --md-orange:         #ff6b00;       /* brand orange — energy / secondary CTA */
    --md-orange-dark:    #d95800;       /* hover state */
    --md-orange-soft:    #ffd9b8;       /* light orange tint */

    --md-red:            #ef4444;       /* brand red — highlights / urgency */
    --md-red-dark:       #dc2626;
    --md-red-soft:       #fee2e2;

    --md-purple:         #4338ca;       /* indigo-purple — gradient stop */
    --md-purple-light:   #6366f1;

    --md-black:          #0a0a0a;       /* deep black — high contrast */
    --md-heading:        #0f172a;
    --md-body:           #475569;
    --md-muted:          #64748b;
    --md-border:         #e2e8f0;
    --md-soft:           #f8fafc;       /* neutral soft bg */
    --md-soft-blue:      #eff6ff;       /* blue-tinted bg */
    --md-soft-warm:      #fff8f1;       /* warm-tinted bg */

    --md-success:        #16a34a;
    --md-card-shadow:    0 4px 16px rgba(15,23,42,0.06);
    --md-card-shadow-h:  0 14px 36px rgba(15,23,42,0.12);

    /* Reusable gradient tokens */
    --md-grad-primary:   linear-gradient(135deg, #1e40af 0%, #4338ca 100%);
    --md-grad-energy:    linear-gradient(135deg, #ff6b00 0%, #ef4444 100%);
    --md-grad-vibrant:   linear-gradient(135deg, #1e40af 0%, #4338ca 50%, #ff6b00 100%);
    --md-grad-dark:      linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #1e293b 100%);
}

/* HERO --------------------------------------------------------------- */
.md-hero {
    position: relative;
    overflow: hidden;
    padding: 110px 0 70px;
    background: radial-gradient(900px 500px at 80% 0%, rgba(99,102,241,0.22), transparent 70%),
                radial-gradient(700px 400px at 10% 100%, rgba(59,130,246,0.18), transparent 70%),
                linear-gradient(135deg, #0f172a 0%, #1e1b4b 45%, #1e293b 100%);
    color: #fff;
}
.md-hero::before {
    content: '';
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 50px 50px;
    opacity: 0.5;
    pointer-events: none;
}
.md-hero .container { position: relative; z-index: 2; }
.md-hero__crumb { font-size: 13px; color: rgba(255,255,255,0.65); margin-bottom: 18px; }
.md-hero__crumb a { color: rgba(255,255,255,0.65); text-decoration: none; }
.md-hero__crumb a:hover { color: #fff; }
.md-hero__crumb .sep { color: rgba(255,255,255,0.35); margin: 0 8px; }
.md-hero__crumb .now { color: #ffd9b8; font-weight: 600; }
.md-hero__eyebrow {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 6px 14px;
    background: rgba(255,107,0,0.18);
    color: #ffd9b8;
    border: 1px solid rgba(255,107,0,0.40);
    border-radius: 30px;
    font-size: 11.5px; font-weight: 700;
    letter-spacing: 1.4px; text-transform: uppercase;
    margin-bottom: 20px;
}
.md-hero__eyebrow .pulse {
    width: 8px; height: 8px; background: #ffb066; border-radius: 50%;
    box-shadow: 0 0 0 4px rgba(255,176,102,0.30);
    animation: mdPulse 2s infinite;
}
@keyframes mdPulse {
    0%,100% { box-shadow: 0 0 0 4px rgba(255,176,102,0.30); }
    50%     { box-shadow: 0 0 0 8px rgba(255,176,102,0); }
}
.md-hero h1 {
    font-size: 48px; font-weight: 800; line-height: 1.14;
    color: #ffffff !important;
    margin: 0 0 18px;
    max-width: 920px;
}
.md-hero h1 .accent { color: #60a5fa; }
.md-hero__sub {
    font-size: 18px; line-height: 1.7;
    color: rgba(255,255,255,0.85);
    max-width: 760px;
    margin: 0 0 30px;
}
.md-hero__ctas { display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 30px; }
.md-cta-primary {
    background: linear-gradient(135deg, #1e40af 0%, #4338ca 100%);
    color: #fff !important;
    padding: 15px 28px;
    border-radius: 8px;
    font-weight: 700;
    text-decoration: none;
    font-size: 15px;
    box-shadow: 0 6px 20px rgba(30,64,175,0.42);
    transition: transform .25s, box-shadow .25s;
    display: inline-flex; align-items: center; gap: 9px;
}
.md-cta-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(67,56,202,0.55);
    color: #fff !important;
}
.md-cta-secondary {
    background: transparent;
    color: #fff !important;
    padding: 15px 28px;
    border: 2px solid rgba(255,255,255,0.4);
    border-radius: 8px;
    font-weight: 700;
    text-decoration: none;
    font-size: 15px;
    display: inline-flex; align-items: center; gap: 9px;
    transition: border-color .25s, background .25s;
}
.md-cta-secondary:hover {
    border-color: #fff;
    background: rgba(255,255,255,0.06);
    color: #fff !important;
}
.md-trust-pills { display: flex; gap: 22px; flex-wrap: wrap; color: rgba(255,255,255,0.7); font-size: 13.5px; }
.md-trust-pills span { display: inline-flex; align-items: center; gap: 8px; }
.md-trust-pills i { color: #ff9550; }

/* HERO STATS BAR ----------------------------------------------------- */
.md-hero-stats {
    background: #fff;
    padding: 26px 0;
    border-bottom: 1px solid var(--md-border);
}
.md-hero-stats__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    text-align: center;
}
.md-hero-stats__num {
    display: block;
    font-size: 28px; font-weight: 800;
    color: var(--md-primary);
    line-height: 1.1; margin-bottom: 4px;
}
.md-hero-stats__lbl {
    font-size: 13px; color: var(--md-muted);
    font-weight: 500; line-height: 1.4;
}

/* SECTIONS ----------------------------------------------------------- */
.md-sec { padding: 80px 0; }
.md-sec.alt { background: var(--md-soft-blue); }
.md-sec.alt-warm { background: var(--md-soft-warm); }
.md-sec.dark { background: var(--md-grad-dark); color: #ffffff; }
.md-sec.dark .md-sec-eyebrow { color: #ffd9b8; }
.md-sec.dark h2 { color: #ffffff; }
.md-sec.dark h2 .accent { color: #ffb066; }
.md-sec.dark .md-sec-head p { color: rgba(255,255,255,0.78); }
.md-sec-head { text-align: center; max-width: 760px; margin: 0 auto 50px; }
.md-sec-eyebrow {
    font-size: 12px; letter-spacing: 2px; text-transform: uppercase;
    color: var(--md-orange); font-weight: 800;
    margin-bottom: 14px; display: block;
}
.md-sec h2 {
    font-size: 36px; font-weight: 800;
    color: var(--md-heading);
    margin: 0 0 16px; line-height: 1.2;
}
.md-sec h2 .accent { color: var(--md-orange); }
.md-sec-head p {
    font-size: 17px; color: var(--md-body);
    line-height: 1.7; margin: 0;
}

/* PROCESS STEPS ------------------------------------------------------ */
.md-process { display: grid; grid-template-columns: repeat(5, 1fr); gap: 18px; margin-top: 32px; }
.md-process__card {
    background: #fff;
    border: 1px solid var(--md-border);
    border-radius: 14px;
    padding: 26px 20px;
    position: relative;
    transition: transform .25s, box-shadow .25s;
}
.md-process__card:hover {
    transform: translateY(-4px);
    box-shadow: var(--md-card-shadow-h);
    border-color: rgba(255,107,0,0.32);
}
.md-process__num {
    position: absolute; top: -14px; left: 22px;
    width: 36px; height: 36px;
    border-radius: 10px;
    background: var(--md-grad-energy);   /* orange → red — energy moments */
    color: #fff;
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 15px;
    box-shadow: 0 4px 12px rgba(255,107,0,0.32);
}
.md-process__card h4 {
    margin: 14px 0 10px;
    font-size: 17px; font-weight: 700;
    color: var(--md-heading);
}
.md-process__card p {
    font-size: 14px; line-height: 1.65;
    color: var(--md-body); margin: 0;
}

/* OUTCOME GRID ------------------------------------------------------- */
.md-outcomes { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.md-outcomes__card {
    background: #fff;
    border-radius: 14px;
    padding: 32px 28px;
    border: 1px solid var(--md-border);
    transition: transform .25s, box-shadow .25s;
    height: 100%;
}
.md-outcomes__card:hover {
    transform: translateY(-4px);
    box-shadow: var(--md-card-shadow-h);
}
.md-outcomes__icon {
    width: 54px; height: 54px;
    border-radius: 12px;
    background: linear-gradient(135deg, #fff3e6 0%, #ffe2c4 100%);
    color: var(--md-orange-dark);
    display: flex; align-items: center; justify-content: center;
    font-size: 22px;
    margin-bottom: 18px;
}
.md-outcomes__card h4 {
    font-size: 19px; font-weight: 700;
    color: var(--md-heading);
    margin: 0 0 10px;
}
.md-outcomes__card p {
    font-size: 14.5px; line-height: 1.7;
    color: var(--md-body); margin: 0;
}

/* FAQ ACCORDION ------------------------------------------------------ */
.md-faq {
    background: #fff;
    border: 1px solid var(--md-border);
    border-radius: 12px;
    margin-bottom: 14px;
}
.md-faq summary {
    padding: 22px 26px;
    cursor: pointer;
    font-weight: 700;
    color: var(--md-heading);
    font-size: 16px;
    list-style: none;
    display: flex; justify-content: space-between; align-items: center;
    gap: 16px;
}
.md-faq summary::-webkit-details-marker { display: none; }
.md-faq summary::after {
    content: '+'; font-size: 26px;
    color: var(--md-primary);
    font-weight: 400;
    transition: transform .25s;
    flex-shrink: 0;
}
.md-faq[open] summary::after { transform: rotate(45deg); }
.md-faq .a {
    padding: 0 26px 22px;
    color: var(--md-body);
    font-size: 15px; line-height: 1.75;
}

/* FINAL CTA ---------------------------------------------------------- */
.md-final-cta {
    background: linear-gradient(135deg, var(--md-primary) 0%, var(--md-purple) 60%, var(--md-purple-light) 100%);
    padding: 70px 0;
    color: #fff;
    text-align: center;
}
.md-final-cta h2 {
    color: #fff;
    font-size: 36px; font-weight: 800;
    margin: 0 0 14px;
}
.md-final-cta p {
    color: rgba(255,255,255,0.95);
    font-size: 17px;
    max-width: 680px;
    margin: 0 auto 30px;
}
.md-final-cta .md-cta-primary {
    background: #fff;
    color: var(--md-primary) !important;
    box-shadow: 0 8px 24px rgba(0,0,0,0.18);
}
.md-final-cta .md-cta-primary:hover {
    color: var(--md-primary) !important;
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(0,0,0,0.28);
}
.md-final-cta .md-cta-secondary {
    border-color: rgba(255,255,255,0.55);
    color: #fff !important;
}
.md-final-cta .md-cta-secondary:hover { background: rgba(255,255,255,0.10); color: #fff !important; }

/* RESPONSIVE --------------------------------------------------------- */
@media (max-width: 992px) {
    .md-process { grid-template-columns: repeat(2, 1fr); }
    .md-outcomes { grid-template-columns: repeat(2, 1fr); }
    .md-hero-stats__grid { grid-template-columns: repeat(2, 1fr); gap: 18px; }
}
@media (max-width: 768px) {
    .md-hero { padding: 84px 0 56px; }
    .md-hero h1 { font-size: 32px; }
    .md-hero__sub { font-size: 16px; }
    .md-sec { padding: 60px 0; }
    .md-sec h2 { font-size: 28px; }
    .md-final-cta { padding: 56px 0; }
    .md-final-cta h2 { font-size: 26px; }
}
@media (max-width: 576px) {
    .md-process, .md-outcomes { grid-template-columns: 1fr; }
    .md-hero__ctas { flex-direction: column; align-items: stretch; }
    .md-cta-primary, .md-cta-secondary { justify-content: center; }
}
</style>
<?php
}


// ---------------------------------------------------------------------
// Hero
// ---------------------------------------------------------------------
function itdgl_render_modern_hero($cfg) {
    itdgl_render_modern_styles();
    $crumbs   = $cfg['crumbs']   ?? [];     // [['label'=>'Home','url'=>'/'], ...]
    $eyebrow  = $cfg['eyebrow']  ?? '';
    $pulse    = !empty($cfg['pulse']);
    $title    = $cfg['title']    ?? '';     // may include <span class="accent">
    $sub      = $cfg['sub']      ?? '';
    $primary  = $cfg['primary']  ?? ['url' => 'https://calendly.com/itdgrowthlabs-info/30min', 'label' => 'Book Free 30-min Call', 'icon' => 'fas fa-calendar-check', 'js_book_call' => true];
    $secondary= $cfg['secondary']?? null;   // optional
    $pills    = $cfg['pills']    ?? [];     // [['icon'=>'fas fa-shield-check','text'=>'X']]
    $stats    = $cfg['stats']    ?? [];     // optional [['num'=>'300+','lbl'=>'Projects']]
?>
<section class="md-hero">
    <div class="container">
        <?php if ($crumbs): ?>
        <div class="md-hero__crumb">
            <?php $last = count($crumbs) - 1; foreach ($crumbs as $i => $c):
                if ($i > 0) echo '<span class="sep">/</span>';
                if ($i === $last) {
                    echo '<span class="now">' . htmlspecialchars($c['label']) . '</span>';
                } else {
                    echo '<a href="' . htmlspecialchars($c['url']) . '">' . htmlspecialchars($c['label']) . '</a>';
                }
            endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if ($eyebrow): ?>
        <span class="md-hero__eyebrow">
            <?php if ($pulse): ?><span class="pulse"></span><?php endif; ?>
            <?php echo $eyebrow; ?>
        </span>
        <?php endif; ?>

        <h1><?php echo $title; ?></h1>
        <?php if ($sub): ?><p class="md-hero__sub"><?php echo $sub; ?></p><?php endif; ?>

        <div class="md-hero__ctas">
            <?php
            // Auto-add target=_blank rel=noopener on any Calendly/WhatsApp/external URL
            // so the click still works if the Calendly popup widget JS fails to mount.
            $is_external = function ($url) {
                return preg_match('~^https?://(?:[^/]+\.)?(calendly\.com|wa\.me|whatsapp\.com|linkedin\.com|github\.com)/~i', $url) === 1;
            };
            ?>
            <?php if ($primary): ?>
            <?php $pri_blank = !empty($primary['target']) || $is_external($primary['url']); ?>
            <a href="<?php echo htmlspecialchars($primary['url']); ?>"
               class="md-cta-primary <?php echo !empty($primary['js_book_call']) ? 'js-book-call' : ''; ?>"
               data-source="<?php echo htmlspecialchars($primary['source'] ?? 'modern_hero_primary'); ?>"
               <?php if ($pri_blank) echo 'target="_blank" rel="noopener"'; ?>>
                <?php if (!empty($primary['icon'])): ?><i class="<?php echo $primary['icon']; ?>"></i><?php endif; ?>
                <?php echo $primary['label']; ?>
            </a>
            <?php endif; ?>
            <?php if ($secondary): ?>
            <?php $sec_blank = !empty($secondary['target']) || $is_external($secondary['url']); ?>
            <a href="<?php echo htmlspecialchars($secondary['url']); ?>"
               class="md-cta-secondary"
               <?php if ($sec_blank) echo 'target="_blank" rel="noopener"'; ?>>
                <?php if (!empty($secondary['icon'])): ?><i class="<?php echo $secondary['icon']; ?>"></i><?php endif; ?>
                <?php echo $secondary['label']; ?>
            </a>
            <?php endif; ?>
        </div>

        <?php if ($pills): ?>
        <div class="md-trust-pills">
            <?php foreach ($pills as $p): ?>
            <span><?php if (!empty($p['icon'])): ?><i class="<?php echo $p['icon']; ?>"></i><?php endif; ?> <?php echo $p['text']; ?></span>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php if ($stats): ?>
<section class="md-hero-stats">
    <div class="container">
        <div class="md-hero-stats__grid">
            <?php foreach ($stats as $s): ?>
            <div>
                <span class="md-hero-stats__num"><?php echo $s['num']; ?></span>
                <span class="md-hero-stats__lbl"><?php echo $s['lbl']; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php
}


// ---------------------------------------------------------------------
// Section heading helper
// ---------------------------------------------------------------------
function itdgl_render_section_head($eyebrow, $title, $sub = '') {
?>
<div class="md-sec-head">
    <?php if ($eyebrow): ?><span class="md-sec-eyebrow"><?php echo $eyebrow; ?></span><?php endif; ?>
    <h2><?php echo $title; ?></h2>
    <?php if ($sub): ?><p><?php echo $sub; ?></p><?php endif; ?>
</div>
<?php
}


// ---------------------------------------------------------------------
// Process steps
// ---------------------------------------------------------------------
function itdgl_render_process_steps($steps) {
    itdgl_render_modern_styles();
?>
<div class="md-process">
    <?php foreach ($steps as $i => $s): ?>
    <div class="md-process__card">
        <span class="md-process__num"><?php echo $i + 1; ?></span>
        <h4><?php echo $s['title']; ?></h4>
        <p><?php echo $s['desc']; ?></p>
    </div>
    <?php endforeach; ?>
</div>
<?php
}


// ---------------------------------------------------------------------
// Outcome / benefit grid
// ---------------------------------------------------------------------
function itdgl_render_outcome_grid($cards) {
    itdgl_render_modern_styles();
?>
<div class="md-outcomes">
    <?php foreach ($cards as $c): ?>
    <div class="md-outcomes__card">
        <div class="md-outcomes__icon"><i class="<?php echo $c['icon']; ?>"></i></div>
        <h4><?php echo $c['title']; ?></h4>
        <p><?php echo $c['desc']; ?></p>
    </div>
    <?php endforeach; ?>
</div>
<?php
}


// ---------------------------------------------------------------------
// FAQ accordion + FAQPage schema
// ---------------------------------------------------------------------
function itdgl_render_faq_accordion($faqs, $emit_schema = true) {
    itdgl_render_modern_styles();
    if ($emit_schema):
        $schema = [
            '@context' => 'https://schema.org',
            '@type'    => 'FAQPage',
            'mainEntity' => [],
        ];
        foreach ($faqs as $q => $a) {
            $schema['mainEntity'][] = [
                '@type' => 'Question',
                'name'  => strip_tags($q),
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text'  => strip_tags($a),
                ],
            ];
        }
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    endif;
?>
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <?php foreach ($faqs as $q => $a): ?>
        <details class="md-faq">
            <summary><?php echo $q; ?></summary>
            <div class="a"><?php echo $a; ?></div>
        </details>
        <?php endforeach; ?>
    </div>
</div>
<?php
}


// ---------------------------------------------------------------------
// Industry chips — appears on every industry page (cross-linking)
// Pass current slug to exclude it from the grid.
// ---------------------------------------------------------------------
function itdgl_render_industry_chips($current_slug = '') {
    itdgl_render_modern_styles();
    $industries = [
        'logistics'             => ['icon'=>'fas fa-truck',          'lbl'=>'Logistics &amp; Supply Chain'],
        'ecommerce'             => ['icon'=>'fas fa-cart-shopping',  'lbl'=>'E-commerce &amp; D2C'],
        'information_tech'      => ['icon'=>'fas fa-laptop-code',    'lbl'=>'IT &amp; SaaS'],
        'finance'               => ['icon'=>'fas fa-coins',          'lbl'=>'Finance &amp; FinTech'],
        'healthcare'            => ['icon'=>'fas fa-hospital',       'lbl'=>'Healthcare'],
        'manufacturing'         => ['icon'=>'fas fa-industry',       'lbl'=>'Manufacturing'],
        'education'             => ['icon'=>'fas fa-graduation-cap', 'lbl'=>'Education &amp; EdTech'],
        'realestate'            => ['icon'=>'fas fa-house-chimney',  'lbl'=>'Real Estate'],
        'professional_services' => ['icon'=>'fas fa-briefcase',      'lbl'=>'Professional Services'],
        'startups'              => ['icon'=>'fas fa-rocket',         'lbl'=>'Startups'],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(5,1fr);gap:14px;">
    <?php foreach ($industries as $slug => $i):
        $is_current = ($slug === $current_slug);
        if ($is_current) continue;
    ?>
        <a href="/industries/<?php echo $slug; ?>.php" style="background:#fff;border:1px solid var(--md-border);border-radius:10px;padding:18px 14px;text-align:center;text-decoration:none;color:var(--md-heading);transition:transform .2s, border-color .2s, box-shadow .2s;display:block;" onmouseover="this.style.transform='translateY(-3px)';this.style.borderColor='var(--md-orange)';this.style.boxShadow='var(--md-card-shadow)'" onmouseout="this.style.transform='';this.style.borderColor='var(--md-border)';this.style.boxShadow=''">
            <i class="<?php echo $i['icon']; ?>" style="font-size:22px;color:var(--md-orange);margin-bottom:8px;"></i>
            <div style="font-size:13.5px;font-weight:600;color:var(--md-heading);line-height:1.3;"><?php echo $i['lbl']; ?></div>
        </a>
    <?php endforeach; ?>
    </div>
    <?php
}


// ---------------------------------------------------------------------
// Service chips — cross-linking for service hubs
// ---------------------------------------------------------------------
function itdgl_render_service_chips($current_slug = '') {
    itdgl_render_modern_styles();
    $services = [
        'website_development'        => ['icon'=>'fas fa-globe',                'lbl'=>'Website Development', 'sub'=>'Custom, SEO-ready, fast'],
        'app_development'            => ['icon'=>'fas fa-mobile-screen-button', 'lbl'=>'App &amp; Software Development', 'sub'=>'Mobile, Web, SaaS'],
        'digital_marketing'          => ['icon'=>'fas fa-bullseye',             'lbl'=>'Digital Marketing', 'sub'=>'Lead-gen, SEO, Ads, Social'],
    ];
    $products = [
        'products/courier-management-software'  => ['icon'=>'fas fa-truck', 'lbl'=>'Courier Management Software', 'sub'=>'Ready-to-deploy SaaS'],
        'products/logistics-mobile-app'         => ['icon'=>'fas fa-mobile-screen', 'lbl'=>'Custom Logistics Mobile App', 'sub'=>'Branded delivery app'],
        'products/multi-vendor-marketplace-app' => ['icon'=>'fas fa-store', 'lbl'=>'Multi-Vendor Marketplace App', 'sub'=>'Any vertical &middot; 8&ndash;14 wk'],
    ];
    ?>
    <h4 style="font-size:12px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--md-orange);margin-bottom:14px;text-align:center;">Services</h4>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:24px;">
    <?php foreach ($services as $slug => $s):
        if ($slug === $current_slug) continue;
    ?>
        <a href="/<?php echo $slug; ?>.php" style="background:#fff;border:1px solid var(--md-border);border-radius:12px;padding:22px;text-align:center;text-decoration:none;color:var(--md-heading);transition:transform .25s, border-color .25s, box-shadow .25s;display:block;" onmouseover="this.style.transform='translateY(-4px)';this.style.borderColor='var(--md-primary)';this.style.boxShadow='var(--md-card-shadow-h)'" onmouseout="this.style.transform='';this.style.borderColor='var(--md-border)';this.style.boxShadow=''">
            <i class="<?php echo $s['icon']; ?>" style="font-size:28px;color:var(--md-primary);margin-bottom:12px;"></i>
            <div style="font-size:15.5px;font-weight:700;color:var(--md-heading);margin-bottom:4px;"><?php echo $s['lbl']; ?></div>
            <div style="font-size:13px;color:var(--md-muted);"><?php echo $s['sub']; ?></div>
        </a>
    <?php endforeach; ?>
    </div>
    <h4 style="font-size:12px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--md-orange);margin:30px 0 14px;text-align:center;">Ready-to-Deploy Apps</h4>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;">
    <?php foreach ($products as $slug => $p): ?>
        <a href="/<?php echo $slug; ?>.php" style="background:#fff;border:1px solid var(--md-border);border-radius:12px;padding:22px;text-align:center;text-decoration:none;color:var(--md-heading);transition:transform .25s, border-color .25s, box-shadow .25s;display:block;" onmouseover="this.style.transform='translateY(-4px)';this.style.borderColor='var(--md-orange)';this.style.boxShadow='var(--md-card-shadow-h)'" onmouseout="this.style.transform='';this.style.borderColor='var(--md-border)';this.style.boxShadow=''">
            <i class="<?php echo $p['icon']; ?>" style="font-size:28px;color:var(--md-orange);margin-bottom:12px;"></i>
            <div style="font-size:15.5px;font-weight:700;color:var(--md-heading);margin-bottom:4px;"><?php echo $p['lbl']; ?></div>
            <div style="font-size:13px;color:var(--md-muted);"><?php echo $p['sub']; ?></div>
        </a>
    <?php endforeach; ?>
    </div>
    <?php
}


// ---------------------------------------------------------------------
// Final CTA
// ---------------------------------------------------------------------
function itdgl_render_final_cta($cfg) {
    itdgl_render_modern_styles();
    $head     = $cfg['head']     ?? 'Ready to talk?';
    $sub      = $cfg['sub']      ?? '';
    $primary  = $cfg['primary']  ?? ['url' => 'https://calendly.com/itdgrowthlabs-info/30min', 'label' => 'Book a Free 30-min Call', 'icon' => 'fas fa-calendar-check'];
    $secondary= $cfg['secondary']?? ['url' => 'https://wa.me/918450978544', 'label' => 'WhatsApp Us', 'icon' => 'fab fa-whatsapp', 'target' => '_blank'];
    // Auto-add target=_blank rel=noopener on external URLs (Calendly, WhatsApp, etc.)
    // so the click still works if Calendly popup widget JS fails to mount.
    $is_external = function ($url) {
        return preg_match('~^https?://(?:[^/]+\.)?(calendly\.com|wa\.me|whatsapp\.com|linkedin\.com|github\.com)/~i', $url) === 1;
    };
    $pri_blank = !empty($primary['target']) || $is_external($primary['url']);
    $sec_blank = !empty($secondary['target']) || $is_external($secondary['url']);
?>
<section class="md-final-cta">
    <div class="container">
        <h2><?php echo $head; ?></h2>
        <?php if ($sub): ?><p><?php echo $sub; ?></p><?php endif; ?>
        <div style="display:flex;gap:14px;flex-wrap:wrap;justify-content:center;">
            <a href="<?php echo htmlspecialchars($primary['url']); ?>"
               class="md-cta-primary js-book-call"
               data-source="<?php echo htmlspecialchars($primary['source'] ?? 'modern_final_cta'); ?>"
               <?php if ($pri_blank) echo 'target="_blank" rel="noopener"'; ?>>
                <i class="<?php echo $primary['icon']; ?>"></i> <?php echo $primary['label']; ?>
            </a>
            <a href="<?php echo htmlspecialchars($secondary['url']); ?>"
               class="md-cta-secondary"
               <?php if ($sec_blank) echo 'target="_blank" rel="noopener"'; ?>>
                <i class="<?php echo $secondary['icon']; ?>"></i> <?php echo $secondary['label']; ?>
            </a>
        </div>
    </div>
</section>
<?php
}


// ---------------------------------------------------------------------
// Overview block — answers the 6 questions every visitor asks in their
// first 8-10 seconds on a service page:
//   1. What we do        2. Who this is for
//   3. How we work       4. Problems we solve
//   5. Why us            6. Proof
//
// Sits immediately after the hero. Same component across every service
// page so the experience stays consistent and visitors don't have to
// re-learn the layout per page.
//
// Config:
//   'eyebrow' (optional)      — section eyebrow pill text
//   'head' (optional)         — section heading
//   'sub' (optional)          — section subheading
//   'what'                    — string, 1-line description of the service
//   'who'                     — array of strings (3 ICPs)
//   'how'                     — array of ['title' => , 'desc' => ] (3-4 steps)
//   'problems'                — array of strings (3-4 pain points)
//   'why'                     — array of ['icon' => fa-class, 'title' => , 'desc' => ] (3 differentiators)
//   'proof_metric'            — string, headline metric (e.g. "300+ projects · 97% retention")
//   'proof_label' (optional)  — string above the metric
// ---------------------------------------------------------------------
function itdgl_render_overview_block($cfg) {
    itdgl_render_modern_styles();
    $eyebrow = $cfg['eyebrow'] ?? 'At a glance';
    $head    = $cfg['head']    ?? 'What we do, who it&rsquo;s for, and how we work';
    $sub     = $cfg['sub']     ?? 'An 8-second read &mdash; the same six questions every buyer asks, answered up front.';
    $what    = $cfg['what']    ?? '';
    $who     = $cfg['who']     ?? [];
    $how     = $cfg['how']     ?? [];
    $problems= $cfg['problems']?? [];
    $why     = $cfg['why']     ?? [];
    $proof_metric = $cfg['proof_metric'] ?? '300+ projects shipped &middot; 97% client retention &middot; 12+ yrs avg in-category experience';
    $proof_label  = $cfg['proof_label']  ?? 'Track record';
?>
<style>
.md-overview { padding: 60px 0 56px; background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%); }
.md-overview .container { max-width: 1240px; }
.md-overview__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 36px;
}
.md-overview__card {
    background: #fff;
    border: 1px solid var(--md-border);
    border-radius: 16px;
    padding: 26px 24px;
    position: relative;
    transition: transform .25s ease, border-color .25s ease, box-shadow .25s ease;
    display: flex;
    flex-direction: column;
}
.md-overview__card:hover { transform: translateY(-3px); border-color: rgba(255,107,0,0.40); box-shadow: 0 16px 36px rgba(15,23,42,0.10); }
.md-overview__card-label {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 10.5px; font-weight: 800; letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #be185d;
    background: rgba(236,72,153,0.10);
    padding: 5px 11px;
    border-radius: 14px;
    margin-bottom: 14px;
    align-self: flex-start;
}
.md-overview__card-label .num { color: #ec4899; font-weight: 900; }
.md-overview__card-icon {
    width: 44px; height: 44px;
    border-radius: 11px;
    background: linear-gradient(135deg, rgba(255,107,0,0.12), rgba(236,72,153,0.12));
    color: var(--md-orange, #ff6b00);
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
    margin-bottom: 14px;
}
.md-overview__card-title {
    font-size: 16.5px;
    font-weight: 800;
    color: var(--md-heading);
    margin: 0 0 10px;
    line-height: 1.35;
}
.md-overview__card-body { font-size: 14px; line-height: 1.65; color: var(--md-body); flex-grow: 1; }
.md-overview__card-body p { margin: 0 0 8px; }
.md-overview__card-body p:last-child { margin-bottom: 0; }
.md-overview__list { list-style: none; padding: 0; margin: 0; }
.md-overview__list li {
    position: relative;
    padding: 7px 0 7px 24px;
    font-size: 14px;
    line-height: 1.55;
    color: var(--md-body);
    border-bottom: 1px dashed rgba(15,23,42,0.08);
}
.md-overview__list li:last-child { border-bottom: 0; }
.md-overview__list li::before {
    content: '';
    position: absolute;
    left: 0; top: 14px;
    width: 14px; height: 2px;
    background: linear-gradient(90deg, #ec4899, #ff6b00);
    border-radius: 2px;
}
.md-overview__step {
    display: grid;
    grid-template-columns: 28px 1fr;
    gap: 12px;
    padding: 9px 0;
    border-bottom: 1px dashed rgba(15,23,42,0.08);
}
.md-overview__step:last-child { border-bottom: 0; }
.md-overview__step-num {
    width: 26px; height: 26px;
    border-radius: 8px;
    background: linear-gradient(135deg, #ec4899, #f97316);
    color: #fff;
    display: flex; align-items: center; justify-content: center;
    font-size: 11.5px; font-weight: 900;
    margin-top: 1px;
}
.md-overview__step-title { font-size: 14px; font-weight: 800; color: var(--md-heading); margin: 0 0 2px; line-height: 1.35; }
.md-overview__step-desc  { font-size: 12.5px; line-height: 1.55; color: var(--md-muted); margin: 0; }
.md-overview__why {
    display: flex; gap: 12px;
    padding: 10px 0;
    border-bottom: 1px dashed rgba(15,23,42,0.08);
}
.md-overview__why:last-child { border-bottom: 0; }
.md-overview__why i {
    width: 32px; height: 32px;
    border-radius: 9px;
    background: rgba(30,64,175,0.08);
    color: #1e40af;
    display: flex; align-items: center; justify-content: center;
    font-size: 13px;
    flex-shrink: 0;
}
.md-overview__why-title { font-size: 14px; font-weight: 800; color: var(--md-heading); margin: 0 0 2px; line-height: 1.35; }
.md-overview__why-desc  { font-size: 12.5px; line-height: 1.55; color: var(--md-muted); margin: 0; }
.md-overview__proof-metric {
    font-size: 16px;
    font-weight: 800;
    color: var(--md-heading);
    background: linear-gradient(135deg, rgba(30,64,175,0.06), rgba(236,72,153,0.06));
    border: 1px solid rgba(30,64,175,0.12);
    padding: 14px 16px;
    border-radius: 12px;
    line-height: 1.45;
}
.md-overview__proof-label {
    font-size: 11.5px;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: var(--md-muted);
    margin-bottom: 8px;
}

@media (max-width: 1024px) {
    .md-overview__grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
    .md-overview { padding: 44px 0 40px; }
    .md-overview__grid { grid-template-columns: 1fr; gap: 14px; }
    .md-overview__card { padding: 22px 20px; }
    .md-overview__card-title { font-size: 15.5px; }
}
</style>
<section class="md-overview" aria-labelledby="overview-head">
    <div class="container">
        <?php itdgl_render_section_head($eyebrow, $head, $sub); ?>
        <div class="md-overview__grid">
            <!-- 01 What -->
            <div class="md-overview__card">
                <span class="md-overview__card-label"><span class="num">01</span> What we do</span>
                <div class="md-overview__card-icon"><i class="fas fa-bullseye"></i></div>
                <h3 class="md-overview__card-title">The service in one line</h3>
                <div class="md-overview__card-body"><p><?php echo $what; ?></p></div>
            </div>

            <!-- 02 Who -->
            <div class="md-overview__card">
                <span class="md-overview__card-label"><span class="num">02</span> Who it&rsquo;s for</span>
                <div class="md-overview__card-icon"><i class="fas fa-users"></i></div>
                <h3 class="md-overview__card-title">Best fit for</h3>
                <div class="md-overview__card-body">
                    <ul class="md-overview__list">
                        <?php foreach ($who as $w): ?><li><?php echo $w; ?></li><?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- 03 How -->
            <div class="md-overview__card">
                <span class="md-overview__card-label"><span class="num">03</span> How we work</span>
                <div class="md-overview__card-icon"><i class="fas fa-diagram-project"></i></div>
                <h3 class="md-overview__card-title">Our step-by-step process</h3>
                <div class="md-overview__card-body">
                    <?php foreach ($how as $i => $h): ?>
                    <div class="md-overview__step">
                        <span class="md-overview__step-num"><?php echo str_pad($i+1, 2, '0', STR_PAD_LEFT); ?></span>
                        <div>
                            <p class="md-overview__step-title"><?php echo $h['title']; ?></p>
                            <p class="md-overview__step-desc"><?php echo $h['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 04 Problems we solve -->
            <div class="md-overview__card">
                <span class="md-overview__card-label"><span class="num">04</span> Problems we solve</span>
                <div class="md-overview__card-icon"><i class="fas fa-circle-exclamation"></i></div>
                <h3 class="md-overview__card-title">If any of these sound familiar</h3>
                <div class="md-overview__card-body">
                    <ul class="md-overview__list">
                        <?php foreach ($problems as $p): ?><li><?php echo $p; ?></li><?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- 05 Why us -->
            <div class="md-overview__card">
                <span class="md-overview__card-label"><span class="num">05</span> Why us</span>
                <div class="md-overview__card-icon"><i class="fas fa-award"></i></div>
                <h3 class="md-overview__card-title">What makes us different</h3>
                <div class="md-overview__card-body">
                    <?php foreach ($why as $w): ?>
                    <div class="md-overview__why">
                        <i class="<?php echo $w['icon']; ?>"></i>
                        <div>
                            <p class="md-overview__why-title"><?php echo $w['title']; ?></p>
                            <p class="md-overview__why-desc"><?php echo $w['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 06 Proof -->
            <div class="md-overview__card">
                <span class="md-overview__card-label"><span class="num">06</span> Proof</span>
                <div class="md-overview__card-icon"><i class="fas fa-chart-line"></i></div>
                <h3 class="md-overview__card-title">Track record</h3>
                <div class="md-overview__card-body">
                    <p class="md-overview__proof-label"><?php echo $proof_label; ?></p>
                    <div class="md-overview__proof-metric"><?php echo $proof_metric; ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
