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
    /* ITD GrowthLabs brand palette */
    --md-primary:        #1e40af;       /* rich blue — wordmark blue */
    --md-primary-dark:   #1e3a8a;       /* deep indigo */
    --md-accent:         #3b82f6;       /* bright blue — inner-arrow accent */
    --md-purple:         #4338ca;       /* indigo-purple */
    --md-purple-light:   #6366f1;       /* lighter purple for hover */
    --md-heading:        #0f172a;
    --md-body:           #475569;
    --md-muted:          #64748b;
    --md-border:         #e2e8f0;
    --md-soft:           #eff6ff;       /* soft blue-tinted bg */
    --md-success:        #16a34a;
    --md-card-shadow:    0 4px 16px rgba(30,64,175,0.08);
    --md-card-shadow-h:  0 14px 36px rgba(30,64,175,0.14);
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
    background: rgba(99,102,241,0.18);
    color: #c7d2fe;
    border: 1px solid rgba(99,102,241,0.42);
    border-radius: 30px;
    font-size: 11.5px; font-weight: 700;
    letter-spacing: 1.4px; text-transform: uppercase;
    margin-bottom: 20px;
}
.md-hero__eyebrow .pulse {
    width: 8px; height: 8px; background: #93c5fd; border-radius: 50%;
    box-shadow: 0 0 0 4px rgba(147,197,253,0.30);
    animation: mdPulse 2s infinite;
}
@keyframes mdPulse {
    0%,100% { box-shadow: 0 0 0 4px rgba(147,197,253,0.30); }
    50%     { box-shadow: 0 0 0 8px rgba(147,197,253,0); }
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
.md-trust-pills i { color: #60a5fa; }

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
.md-sec.alt { background: var(--md-soft); }
.md-sec-head { text-align: center; max-width: 760px; margin: 0 auto 50px; }
.md-sec-eyebrow {
    font-size: 12px; letter-spacing: 2px; text-transform: uppercase;
    color: var(--md-primary); font-weight: 800;
    margin-bottom: 14px; display: block;
}
.md-sec h2 {
    font-size: 36px; font-weight: 800;
    color: var(--md-heading);
    margin: 0 0 16px; line-height: 1.2;
}
.md-sec h2 .accent { color: var(--md-primary); }
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
    border-color: rgba(59,130,246,0.32);
}
.md-process__num {
    position: absolute; top: -14px; left: 22px;
    width: 36px; height: 36px;
    border-radius: 10px;
    background: linear-gradient(135deg, var(--md-primary) 0%, var(--md-purple) 100%);
    color: #fff;
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 15px;
    box-shadow: 0 4px 12px rgba(30,64,175,0.30);
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
    background: linear-gradient(135deg, #dbeafe, #e0e7ff);
    color: var(--md-primary);
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
            <?php if ($primary): ?>
            <a href="<?php echo htmlspecialchars($primary['url']); ?>"
               class="md-cta-primary <?php echo !empty($primary['js_book_call']) ? 'js-book-call' : ''; ?>"
               data-source="<?php echo htmlspecialchars($primary['source'] ?? 'modern_hero_primary'); ?>">
                <?php if (!empty($primary['icon'])): ?><i class="<?php echo $primary['icon']; ?>"></i><?php endif; ?>
                <?php echo $primary['label']; ?>
            </a>
            <?php endif; ?>
            <?php if ($secondary): ?>
            <a href="<?php echo htmlspecialchars($secondary['url']); ?>"
               class="md-cta-secondary <?php echo !empty($secondary['target']) ? '' : ''; ?>"
               <?php if (!empty($secondary['target'])) echo 'target="' . htmlspecialchars($secondary['target']) . '"'; ?>>
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
// Final CTA
// ---------------------------------------------------------------------
function itdgl_render_final_cta($cfg) {
    itdgl_render_modern_styles();
    $head     = $cfg['head']     ?? 'Ready to talk?';
    $sub      = $cfg['sub']      ?? '';
    $primary  = $cfg['primary']  ?? ['url' => 'https://calendly.com/itdgrowthlabs-info/30min', 'label' => 'Book a Free 30-min Call', 'icon' => 'fas fa-calendar-check'];
    $secondary= $cfg['secondary']?? ['url' => 'https://wa.me/918450978544', 'label' => 'WhatsApp Us', 'icon' => 'fab fa-whatsapp', 'target' => '_blank'];
?>
<section class="md-final-cta">
    <div class="container">
        <h2><?php echo $head; ?></h2>
        <?php if ($sub): ?><p><?php echo $sub; ?></p><?php endif; ?>
        <div style="display:flex;gap:14px;flex-wrap:wrap;justify-content:center;">
            <a href="<?php echo htmlspecialchars($primary['url']); ?>"
               class="md-cta-primary js-book-call"
               data-source="<?php echo htmlspecialchars($primary['source'] ?? 'modern_final_cta'); ?>">
                <i class="<?php echo $primary['icon']; ?>"></i> <?php echo $primary['label']; ?>
            </a>
            <a href="<?php echo htmlspecialchars($secondary['url']); ?>"
               class="md-cta-secondary"
               <?php if (!empty($secondary['target'])) echo 'target="' . htmlspecialchars($secondary['target']) . '"'; ?>>
                <i class="<?php echo $secondary['icon']; ?>"></i> <?php echo $secondary['label']; ?>
            </a>
        </div>
    </div>
</section>
<?php
}
