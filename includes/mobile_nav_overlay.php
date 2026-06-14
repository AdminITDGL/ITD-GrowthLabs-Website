<?php
/**
 * Mobile + sticky-header overlay CSS.
 *
 * Loaded from the canonical includes/header.php so it propagates to every page.
 * Improves:
 *   - Sticky header on scroll (saves vertical real estate after first viewport)
 *   - Larger touch targets on mobile (44 × 44 px minimum, WCAG AAA)
 *   - Mega-menu collapses to single column on < 768 px
 *   - Country-flag strip hides on < 576 px (saves header height)
 *   - Mobile menu items get clearer separators + larger padding
 *   - Logo scales down on mobile so it doesn't dominate
 *   - Floating Calendly/WhatsApp cluster nudges up so it doesn't overlap the
 *     mobile bottom-bar / iPhone home indicator
 */
?>
<style>
/* ============================================================
   Sticky header on scroll
   ============================================================ */
header { position: sticky; top: 0; z-index: 999; transition: box-shadow .25s ease, background .25s ease; }
header.scrolled { box-shadow: 0 4px 16px rgba(15,23,42,0.08); background: #ffffff; }

/* The country-flag bar is decorative; let it scroll away naturally */
.country-flags-header { position: relative; z-index: 998; }

/* ============================================================
   Mobile (under 992 px) — touch targets + spacing
   ============================================================ */
@media (max-width: 991px) {
    /* Larger tap targets on every nav link */
    .navbar-nav > li > a { padding: 14px 16px !important; font-size: 15.5px; min-height: 44px; display: flex; align-items: center; }
    .navbar-nav .dropdown-menu li > a { padding: 12px 16px !important; min-height: 44px; }
    .navbar-toggle { padding: 12px 14px; min-width: 44px; min-height: 44px; }
    .navbar-toggle .fa { font-size: 22px; }

    /* Megamenu: collapse the 4-column grid into single column on mobile */
    .megamenu-content .row .col-menu { width: 100% !important; padding: 8px 0; border-bottom: 1px solid #eef1f5; }
    .megamenu-content .row .col-menu:last-child { border-bottom: none; }
    .megamenu-content h6.title { font-size: 13.5px; letter-spacing: 0.4px; text-transform: uppercase; color: #1e40af; margin: 6px 0 4px; padding: 0 16px; }
    .megamenu-content .menu-col li > a { padding: 11px 16px !important; font-size: 14.5px; min-height: 44px; }

    /* "Book a Call" button in attr-nav: full-width, prominent */
    .attr-nav li.button { width: 100%; padding: 0; margin: 12px 0; }
    .attr-nav li.button > a {
        display: block; width: 100%; text-align: center;
        background: linear-gradient(135deg, #1e40af 0%, #4338ca 100%); color: #fff !important;
        padding: 14px 18px; border-radius: 8px;
        font-size: 15px; font-weight: 700; letter-spacing: 0.2px;
        box-shadow: 0 6px 18px rgba(30,64,175,0.25);
    }
    .attr-nav li.button > a:hover { background: #1e3a8a; }
}

/* ============================================================
   Tablet (576–768 px)
   ============================================================ */
@media (max-width: 768px) {
    /* Hide the country flag strip on tablet+ phones (keep on > 768 px for context) */
    .country-flags-header { padding: 6px 0; }
    .country-flag-item span { display: none; }
    .country-flag-item { padding: 0 6px; }

    /* Logo scales down */
    .navbar-brand img.logo { max-height: 40px; width: auto; }
}

/* ============================================================
   Small mobile (under 576 px)
   ============================================================ */
@media (max-width: 575px) {
    /* Hide country flag strip entirely on small phones */
    .country-flags-header { display: none; }

    /* Logo scales down further */
    .navbar-brand img.logo { max-height: 36px; }

    /* Tighter top padding on hero/first sections so content isn't pushed below the fold */
    .md-hero { padding: 70px 0 50px !important; }
    .md-hero h1 { font-size: 28px !important; line-height: 1.18 !important; }
    .md-hero__sub { font-size: 15px !important; }

    /* Tighter section padding */
    .md-sec { padding: 50px 0 !important; }
    .md-sec-head { margin-bottom: 32px !important; }
    .md-sec h2 { font-size: 24px !important; line-height: 1.2 !important; }
}

/* ============================================================
   Floating Calendly + WhatsApp cluster — lift above iOS home indicator
   ============================================================ */
@media (max-width: 768px) {
    #itdgl-float-cluster { bottom: max(12px, env(safe-area-inset-bottom, 12px)) !important; }
}

/* ============================================================
   General mobile UX polish
   ============================================================ */
/* Smooth-scroll for anchor links */
html { scroll-behavior: smooth; }
/* Prevent horizontal scroll bleed from any overflowing block */
body { overflow-x: hidden; }
/* Make all <img> respect container width by default */
img { max-width: 100%; height: auto; }
/* Bigger, more readable form inputs on touch */
@media (max-width: 768px) {
    input[type="text"], input[type="email"], input[type="tel"], input[type="number"],
    input[type="password"], select, textarea {
        font-size: 16px !important; /* prevents iOS zoom on focus */
        min-height: 44px;
    }
}
</style>

<script>
// Sticky header shadow on scroll
(function () {
    var header = document.querySelector('header');
    if (!header) return;
    var ticking = false;
    function update() {
        if (window.scrollY > 12) header.classList.add('scrolled');
        else header.classList.remove('scrolled');
        ticking = false;
    }
    window.addEventListener('scroll', function () {
        if (!ticking) { window.requestAnimationFrame(update); ticking = true; }
    }, { passive: true });
    update();
})();
</script>
