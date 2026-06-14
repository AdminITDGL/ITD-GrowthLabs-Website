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

/* ============================================================
   Mobile grid collapse — targets inline grid-template-columns
   so the many `style="display:grid;grid-template-columns:repeat(N,1fr)"`
   blocks in our pages stack cleanly on phones without per-grid edits.
   ============================================================ */
@media (max-width: 991px) {
    [style*="grid-template-columns:repeat(5"],
    [style*="grid-template-columns: repeat(5"],
    [style*="grid-template-columns:repeat(6"],
    [style*="grid-template-columns: repeat(6"] {
        grid-template-columns: repeat(3, 1fr) !important;
    }
    [style*="grid-template-columns:repeat(4"],
    [style*="grid-template-columns: repeat(4"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    [style*="grid-template-columns:repeat(3"],
    [style*="grid-template-columns: repeat(3"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}
@media (max-width: 575px) {
    [style*="grid-template-columns:repeat(5"],
    [style*="grid-template-columns: repeat(5"],
    [style*="grid-template-columns:repeat(6"],
    [style*="grid-template-columns: repeat(6"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    [style*="grid-template-columns:repeat(4"],
    [style*="grid-template-columns: repeat(4"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    [style*="grid-template-columns:repeat(3"],
    [style*="grid-template-columns: repeat(3"] {
        grid-template-columns: 1fr !important;
    }
    [style*="grid-template-columns:repeat(2"],
    [style*="grid-template-columns: repeat(2"] {
        grid-template-columns: 1fr !important;
    }
}

/* ============================================================
   Mobile container + section spacing fixes
   ============================================================ */
@media (max-width: 575px) {
    /* Container — tighter side padding */
    .container { padding-left: 16px !important; padding-right: 16px !important; }

    /* Modern section padding tightened */
    .md-sec { padding: 44px 0 !important; }
    .md-sec-head { margin-bottom: 28px !important; }
    .md-sec h2 { font-size: 22px !important; line-height: 1.22 !important; }

    /* Modern hero stats — already had this; reinforce */
    .md-hero-stats__grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 14px !important;
    }
    .md-hero-stats__num { font-size: 26px !important; }
    .md-hero-stats__lbl { font-size: 12.5px !important; }

    /* Modern hero CTAs stack full width */
    .md-hero__ctas { flex-direction: column !important; align-items: stretch !important; gap: 10px !important; }
    .md-hero__ctas .md-cta-primary,
    .md-hero__ctas .md-cta-secondary { width: 100%; justify-content: center; text-align: center; }

    /* Trust pills wrap nicely */
    .md-trust-pills { gap: 10px !important; font-size: 12px !important; }
    .md-trust-pills span { padding: 5px 10px !important; }

    /* Final CTA buttons full width */
    .md-final-cta .md-cta-primary,
    .md-final-cta .md-cta-secondary { width: 100%; justify-content: center; text-align: center; max-width: 360px; }

    /* Footer columns stack */
    footer .col-lg-3, footer .col-md-3, footer .col-lg-4, footer .col-md-4,
    footer .col-lg-6, footer .col-md-6 { width: 100% !important; max-width: 100%; flex: 0 0 100%; }
    footer { padding: 36px 0 24px !important; }

    /* Popup modal width safety */
    .modal-dialog { margin: 14px !important; max-width: calc(100vw - 28px) !important; }
}

/* Tablet polish (576–767px) — two columns instead of one for some grids */
@media (min-width: 576px) and (max-width: 767px) {
    .md-hero-stats__grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

/* ============================================================
   Calendly + WhatsApp float cluster — safe-area + scroll behaviour
   ============================================================ */
@media (max-width: 768px) {
    #itdgl-float-cluster {
        bottom: max(14px, env(safe-area-inset-bottom, 14px)) !important;
        right: 14px !important;
    }
    #itdgl-float-cluster a {
        width: 48px !important;
        height: 48px !important;
        font-size: 20px !important;
    }
}
</style>

<!-- Mobile menu reveal CSS (the navbar-toggle button uses legacy Bootstrap 3
     attributes that Bootstrap 5 doesn't bind. We add an explicit reveal state
     plus a vanilla-JS toggle below.) -->
<style>
@media (max-width: 991px) {
    /* Hide menu by default on mobile */
    #navbar-menu { display: none; padding: 0 0 14px; }
    /* Reveal when toggled */
    #navbar-menu.is-open { display: block; background: #ffffff; box-shadow: 0 14px 32px rgba(15,23,42,0.10); border-top: 1px solid #eef1f5; }
    /* Make sure the top-level nav stacks cleanly */
    #navbar-menu .navbar-nav { display: flex; flex-direction: column; width: 100%; }
    #navbar-menu .navbar-nav > li { width: 100%; border-bottom: 1px solid #eef1f5; }
    #navbar-menu .navbar-nav > li:last-child { border-bottom: none; }
    /* Top-level link styling for mobile */
    #navbar-menu .navbar-nav > li > a { font-size: 15.5px; font-weight: 600; color: #0f172a !important; }
    /* Dropdown caret visibility */
    #navbar-menu .navbar-nav > li.dropdown > a::after {
        content: '\f078'; font-family: 'Font Awesome 6 Free'; font-weight: 900;
        font-size: 11px; margin-left: auto; transition: transform .25s ease;
        color: #94a3b8;
    }
    #navbar-menu .navbar-nav > li.dropdown.is-open > a::after { transform: rotate(180deg); }
    /* Dropdown menu reveal — accordion style on mobile.
       Use !important to win against validnavs.js inline display: none. */
    #navbar-menu .dropdown-menu { display: none !important; position: static !important; box-shadow: none; padding: 0 0 8px; background: #f8fafc; border: none; opacity: 1 !important; visibility: visible !important; transform: none !important; float: none !important; width: 100%; min-width: 0; }
    #navbar-menu .dropdown.is-open > .dropdown-menu { display: block !important; }
    /* Megamenu collapses cleanly on mobile */
    #navbar-menu .megamenu-content { padding: 0; }
    #navbar-menu .megamenu-content .row { display: block; margin: 0; }
    #navbar-menu .megamenu-content .col-menu,
    #navbar-menu .megamenu-content [class*="col-"] { float: none; width: 100% !important; max-width: 100%; }
    /* Dropdown caret on right edge */
    #navbar-menu .navbar-nav > li.dropdown > a { position: relative; padding-right: 44px !important; }
    #navbar-menu .navbar-nav > li.dropdown > a::after {
        position: absolute; right: 16px; top: 50%; transform: translateY(-50%); margin-left: 0;
    }
    #navbar-menu .navbar-nav > li.dropdown.is-open > a::after { transform: translateY(-50%) rotate(180deg); }
}
</style>

<script>
(function () {
    'use strict';

    // ============================================================
    // 1. Sticky header — adds .scrolled class once page scrolls > 12px
    // ============================================================
    var header = document.querySelector('header');
    if (header) {
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
    }

    // ============================================================
    // 2. Mobile hamburger toggle — fires .is-open on #navbar-menu
    //    (legacy Bootstrap 3 data-toggle attrs don't bind under
    //    Bootstrap 5 / validnavs, so we drive the toggle ourselves)
    // ============================================================
    function initMobileNav() {
        var toggle = document.querySelector('.navbar-toggle');
        var menu   = document.getElementById('navbar-menu');
        if (!toggle || !menu) return;

        // Inline display setter — overrides validnavs.js fadeOut residue
        function setInlineDisplay(el, val) {
            if (el && el.style) el.style.setProperty('display', val, 'important');
        }

        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            menu.classList.toggle('is-open');
            setInlineDisplay(menu, menu.classList.contains('is-open') ? 'block' : 'none');
            toggle.setAttribute('aria-expanded', menu.classList.contains('is-open'));
        });

        // ============================================================
        // 3. Mobile dropdown accordion — tap parent toggles its dropdown,
        //    other open dropdowns close (single-open behaviour).
        //    Only fires under 992 px so desktop hover behaviour is untouched.
        //    On mobile a "Services" parent is normally a trigger, not a link,
        //    so always intercept the click and toggle the submenu. If the user
        //    wants the parent's destination we expose it as a "Services overview"
        //    link inside the submenu instead.
        // ============================================================
        menu.querySelectorAll('li.dropdown > a').forEach(function (parent) {
            parent.addEventListener('click', function (e) {
                if (window.innerWidth >= 992) return; // desktop = let validnavs hover handler work
                var li = parent.parentElement;
                e.preventDefault();
                e.stopPropagation();
                // Close other open dropdowns at the same level (accordion behaviour)
                var siblings = li.parentElement.querySelectorAll(':scope > li.dropdown.is-open');
                siblings.forEach(function (s) {
                    if (s !== li) {
                        s.classList.remove('is-open');
                        var sm = s.querySelector(':scope > .dropdown-menu');
                        setInlineDisplay(sm, 'none');
                    }
                });
                li.classList.toggle('is-open');
                var submenu = li.querySelector(':scope > .dropdown-menu');
                setInlineDisplay(submenu, li.classList.contains('is-open') ? 'block' : 'none');
            }, true /* capture — beat validnavs */);
        });

        // ============================================================
        // 4. Close mobile menu when a real link is tapped (UX)
        // ============================================================
        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                if (window.innerWidth >= 992) return;
                var href = link.getAttribute('href') || '';
                // Don't close on dropdown openers (href="#" or empty)
                if (href === '#' || href === '' || href.charAt(0) === '#') return;
                // Don't close on dropdown-toggle parents (handled above)
                if (link.classList.contains('dropdown-toggle')) return;
                menu.classList.remove('is-open');
                setInlineDisplay(menu, 'none');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });

        // ============================================================
        // 5. Close menu on resize back to desktop width
        // ============================================================
        var resizeTimer;
        window.addEventListener('resize', function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function () {
                if (window.innerWidth >= 992) {
                    menu.classList.remove('is-open');
                    menu.style.removeProperty('display');
                    menu.querySelectorAll('li.dropdown.is-open').forEach(function (li) {
                        li.classList.remove('is-open');
                        var sm = li.querySelector(':scope > .dropdown-menu');
                        if (sm) sm.style.removeProperty('display');
                    });
                }
            }, 150);
        });

        // ============================================================
        // 6. Watchdog — if validnavs.js or another script re-hides an open
        //    dropdown after our toggle fires, re-apply our state on the next
        //    frame. Targeted at the megamenu only so we don't fight the
        //    desktop fade animation.
        // ============================================================
        var mo = new MutationObserver(function (mutations) {
            if (window.innerWidth >= 992) return;
            mutations.forEach(function (m) {
                if (m.type !== 'attributes' || m.attributeName !== 'style') return;
                var el = m.target;
                if (!el.classList || !el.classList.contains('dropdown-menu')) return;
                var li = el.closest('li.dropdown');
                if (!li || !li.classList.contains('is-open')) return;
                if (el.style.display === 'none' || el.style.display === '') {
                    el.style.setProperty('display', 'block', 'important');
                }
            });
        });
        mo.observe(menu, { subtree: true, attributes: true, attributeFilter: ['style'] });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMobileNav);
    } else {
        initMobileNav();
    }
})();
</script>
