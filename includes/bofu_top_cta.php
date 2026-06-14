<?php
/**
 * Top-of-page CTA for bottom-of-funnel comparison blogs.
 *
 * Renders between the blog meta line and the H1 — compact, single-row on
 * desktop, stacked on mobile. Keeps the H1 above the fold.
 *
 * Usage (inside a /resources/ blog body, just before the <h1>):
 *   <?php include(__DIR__ . "/../includes/bofu_top_cta.php"); ?>
 */
?>
<div class="bofu-top-cta">
    <div class="bofu-top-cta__avatar" aria-hidden="true"><i class="fas fa-headset"></i></div>
    <div class="bofu-top-cta__body">
        <div class="bofu-top-cta__eyebrow">Skip the read &middot; Talk to our team</div>
        <div class="bofu-top-cta__headline">Free 30-min strategy call with a <strong>senior practice lead</strong> &mdash; no sales pitch, no SDRs.</div>
    </div>
    <a href="https://calendly.com/itdgrowthlabs-info/30min"
       class="bofu-top-cta__btn js-book-call"
       target="_blank" rel="noopener"
       data-source="blog_bofu_top_cta">
        Book Free Call <span aria-hidden="true">&rarr;</span>
    </a>
</div>

<style>
.bofu-top-cta {
    background: linear-gradient(135deg, #fff8f1 0%, #ffffff 100%);
    border: 1px solid rgba(255, 107, 0, 0.22);
    border-left: 4px solid #1e40af;
    border-radius: 12px;
    padding: 14px 18px;
    margin: 0 0 26px;
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
    box-shadow: 0 2px 8px rgba(255, 107, 0, 0.06);
}
.bofu-top-cta__avatar {
    flex: 0 0 52px;
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ff6b00, #ef4444);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    box-shadow: 0 4px 12px rgba(255, 107, 0, 0.28);
}
.bofu-top-cta__body { flex: 1; min-width: 220px; }
.bofu-top-cta__eyebrow {
    font-size: 11px;
    color: #4338ca;
    font-weight: 800;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    margin-bottom: 4px;
}
.bofu-top-cta__headline {
    font-size: 15px;
    color: #0a1629;
    font-weight: 600;
    line-height: 1.45;
}
.bofu-top-cta__headline strong { color: #0a1629; font-weight: 800; }
.bofu-top-cta__btn {
    background: #1e40af;
    color: #ffffff !important;
    padding: 11px 22px;
    border-radius: 8px;
    font-weight: 700;
    text-decoration: none;
    font-size: 14px;
    white-space: nowrap;
    transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
    box-shadow: 0 4px 12px rgba(255, 107, 0, 0.28);
}
.bofu-top-cta__btn:hover {
    background: #4338ca;
    transform: translateY(-1px);
    box-shadow: 0 6px 16px rgba(255, 107, 0, 0.42);
    color: #ffffff !important;
}
@media (max-width: 640px) {
    .bofu-top-cta { padding: 14px; gap: 12px; }
    .bofu-top-cta__avatar { flex: 0 0 44px; width: 44px; height: 44px; font-size: 16px; }
    .bofu-top-cta__body { min-width: 160px; }
    .bofu-top-cta__headline { font-size: 14px; }
    .bofu-top-cta__btn { padding: 10px 18px; font-size: 13px; width: 100%; text-align: center; }
}
</style>
