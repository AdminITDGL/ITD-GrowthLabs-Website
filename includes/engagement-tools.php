<!-- ============================================= -->
<!-- ITD GrowthLabs Engagement Tools -->
<!-- Calendly + WhatsApp + Newsletter Bar -->
<!-- ============================================= -->

<!-- Calendly popup widget (lazy-loaded, ~6 KB) -->
<link rel="stylesheet" href="https://assets.calendly.com/assets/external/widget.css">
<script src="https://assets.calendly.com/assets/external/widget.js" async></script>

<!-- Floating CTA cluster: Country/Region + Calendly + WhatsApp -->
<?php
// Derive current region label from URL path so the region button reflects where
// the visitor is browsing (India by default, otherwise the country hub they're on).
$itdgl_curr_path = $_SERVER['PHP_SELF'] ?? '';
$itdgl_region_map = [
    'usa'       => ['flag'=>'&#127482;&#127480;', 'label'=>'USA',       'url'=>'/usa/index.php'],
    'uk'        => ['flag'=>'&#127468;&#127463;', 'label'=>'UK',        'url'=>'/uk/index.php'],
    'uae'       => ['flag'=>'&#127462;&#127466;', 'label'=>'UAE',       'url'=>'/uae/index.php'],
    'australia' => ['flag'=>'&#127462;&#127482;', 'label'=>'Australia', 'url'=>'/australia/index.php'],
    'africa'    => ['flag'=>'&#127487;&#127462;', 'label'=>'Africa',    'url'=>'/africa/index.php'],
];
$itdgl_current_region = ['flag'=>'&#127470;&#127475;', 'label'=>'India', 'url'=>'/'];
foreach ($itdgl_region_map as $slug => $meta) {
    if (strpos($itdgl_curr_path, '/' . $slug . '/') === 0) { $itdgl_current_region = $meta; break; }
}
?>
<div id="itdgl-float-cluster" style="position:fixed;bottom:25px;right:25px;z-index:9999;display:flex;flex-direction:column;gap:12px;align-items:flex-end;">

    <!-- Region / Country selector -->
    <button type="button" id="itdgl-region-btn" aria-haspopup="true" aria-expanded="false" aria-controls="itdgl-region-panel"
            aria-label="Change country or region"
            style="background:#fff;border:1px solid #cbd5e1;padding:9px 15px 9px 12px;border-radius:50px;display:inline-flex;align-items:center;gap:8px;box-shadow:0 3px 12px rgba(15,23,42,0.10);color:#0f172a;font-weight:700;font-size:13.5px;cursor:pointer;transition:transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;line-height:1;">
        <span style="font-size:18px;line-height:1;" aria-hidden="true"><?php echo $itdgl_current_region['flag']; ?></span>
        <span class="region-label" style="letter-spacing:0.02em;"><?php echo $itdgl_current_region['label']; ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="opacity:0.6;"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </button>

    <!-- Region overlay panel -->
    <div id="itdgl-region-panel" role="menu" aria-labelledby="itdgl-region-btn"
         style="display:none;position:absolute;bottom:calc(100% + 12px);right:0;min-width:220px;background:#fff;border:1px solid #e2e8f0;border-radius:14px;box-shadow:0 20px 50px rgba(15,23,42,0.18);padding:8px 6px;z-index:10000;">
        <div style="font-family:'JetBrains Mono',monospace;font-size:9.5px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#94a3b8;padding:8px 12px 6px;">Switch region</div>
        <?php
        $itdgl_all_regions = array_merge(
            ['india' => ['flag'=>'&#127470;&#127475;', 'label'=>'India', 'url'=>'/']],
            $itdgl_region_map
        );
        foreach ($itdgl_all_regions as $slug => $r):
            $is_current = ($r['label'] === $itdgl_current_region['label']);
        ?>
        <a href="<?php echo $r['url']; ?>" role="menuitem"
           style="display:flex;align-items:center;gap:11px;padding:9px 12px;border-radius:8px;text-decoration:none;color:#0f172a;font-size:14px;font-weight:600;transition:background 0.15s ease;<?php echo $is_current ? 'background:#eff6ff;' : ''; ?>"
           onmouseover="this.style.background='#f1f5f9'" onmouseout="this.style.background='<?php echo $is_current ? "#eff6ff" : "transparent"; ?>'">
            <span style="font-size:18px;line-height:1;" aria-hidden="true"><?php echo $r['flag']; ?></span>
            <span style="flex:1;"><?php echo $r['label']; ?></span>
            <?php if ($is_current): ?><span style="font-family:'JetBrains Mono',monospace;font-size:9px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#1e40af;">Here</span><?php endif; ?>
        </a>
        <?php endforeach; ?>
    </div>

    <!-- Book a Call (Calendly) — plain anchor, opens in new tab. No JS-only triggers
         (widget.js popup mode caused a "10-15 clicks needed" bug because the async
          widget wasn't ready on early clicks; target="_blank" is deterministic). -->
    <a href="https://calendly.com/itdgrowthlabs-info/30min"
       onclick="if(typeof gtag==='function')gtag('event','calendly_open',{source:'float_button'});"
       target="_blank"
       rel="noopener"
       id="calendly-float"
       data-source="float_button"
       aria-label="Book a free 30-minute consultation"
       style="background:linear-gradient(135deg,#1565c0,#0d47a1);color:#fff;padding:14px 22px;border-radius:50px;display:flex;align-items:center;gap:10px;box-shadow:0 4px 14px rgba(13,71,161,0.35);text-decoration:none;font-weight:700;font-size:14px;letter-spacing:0.2px;transition:transform 0.25s ease, box-shadow 0.25s ease;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="3"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><circle cx="12" cy="16" r="1.5" fill="currentColor"/></svg>
        <span class="cta-label">Book Free Call</span>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/918450978544?text=Hi%20ITD%20GrowthLabs%2C%20I%27d%20like%20to%20discuss%20a%20project."
       target="_blank"
       id="whatsapp-float"
       onclick="if(typeof gtag==='function')gtag('event','whatsapp_open',{source:'float_button'});"
       aria-label="Chat on WhatsApp"
       style="background:#25D366;width:58px;height:58px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,0.25);text-decoration:none;transition:transform 0.25s ease, box-shadow 0.25s ease;">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="white">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>
</div>

<style>
    #calendly-float:hover { transform: translateY(-2px); box-shadow: 0 8px 22px rgba(13,71,161,0.5); color:#fff; }
    #whatsapp-float:hover { transform: scale(1.08); box-shadow: 0 6px 20px rgba(37,211,102,0.5); }
    #itdgl-region-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 18px rgba(15,23,42,0.16); border-color: #1e40af; }
    #itdgl-region-btn.is-open { border-color: #1e40af; background: #f0f7ff; }
    @media (max-width: 768px) {
        #itdgl-float-cluster { bottom: 15px; right: 15px; gap: 10px; }
        #calendly-float { padding: 11px 16px; font-size: 13px; }
        #calendly-float .cta-label { display: inline; }
        #whatsapp-float { width: 50px; height: 50px; }
        #whatsapp-float svg { width: 26px; height: 26px; }
        /* Mobile: collapse region button to flag-only circle, no "India" text or chevron */
        #itdgl-region-btn { width: 50px; height: 50px; padding: 0; border-radius: 50%; justify-content: center; }
        #itdgl-region-btn .region-label { display: none; }
        #itdgl-region-btn svg { display: none; }
        #itdgl-region-panel { right: 0; min-width: 200px; }
    }
    @media (max-width: 380px) {
        #calendly-float .cta-label { display: none; }
        #calendly-float { padding: 12px; border-radius: 50%; }
    }
    /* Region panel enter animation */
    #itdgl-region-panel.is-open {
        display: block !important;
        animation: itdgl-region-in 0.18s ease-out both;
    }
    @keyframes itdgl-region-in {
        from { opacity: 0; transform: translateY(6px); }
        to   { opacity: 1; transform: translateY(0); }
    }
</style>

<!-- Region floating button — open/close panel on click, close on outside-click + Escape -->
<script>
(function(){
    var btn   = document.getElementById('itdgl-region-btn');
    var panel = document.getElementById('itdgl-region-panel');
    if (!btn || !panel) return;
    function setOpen(open){
        panel.classList.toggle('is-open', open);
        btn.classList.toggle('is-open', open);
        btn.setAttribute('aria-expanded', open ? 'true' : 'false');
        panel.style.display = open ? 'block' : 'none';
    }
    btn.addEventListener('click', function(e){
        e.stopPropagation();
        setOpen(!panel.classList.contains('is-open'));
        if (typeof gtag === 'function') gtag('event', 'region_selector_open', { source: 'float_button' });
    });
    document.addEventListener('click', function(e){
        if (!panel.contains(e.target) && e.target !== btn) setOpen(false);
    });
    document.addEventListener('keydown', function(e){
        if (e.key === 'Escape') setOpen(false);
    });
})();
</script>

<!-- Sitewide Calendly click tracking — analytics ONLY, never preventDefault.
     Every Calendly CTA on the site uses target="_blank" + a plain href, so clicks
     always open Calendly in a new tab. We just fire the GA4 event for tracking.

     Rationale: the previous version tried to hijack desktop clicks into a popup
     widget, which caused a "10-15 clicks needed" bug — Calendly's widget.js
     loads async so early clicks fired before window.Calendly existed, and even
     when loaded initPopupWidget had visible-latency issues. Plain anchors are
     deterministic. -->
<script>
(function(){
    document.addEventListener('click', function(e){
        var a = e.target.closest('a, button');
        if (!a) return;
        var href = a.getAttribute('href') || '';
        var isCalendlyTrigger = a.classList.contains('js-book-call') ||
                                /calendly\.com\/itdgrowthlabs-info/i.test(href);
        if (!isCalendlyTrigger) return;
        if (typeof gtag === 'function') {
            gtag('event', 'calendly_open', { source: a.dataset.source || 'inline_cta' });
        }
    }, false);
})();
</script>

<!-- Newsletter Signup Bar (appears above footer) -->
<div id="newsletter-bar" style="background:linear-gradient(135deg,#f5f7fa 0%,#e8ecf1 100%);padding:40px 0;border-top:1px solid #e0e0e0;">
    <div class="container">
        <div class="row" style="align-items:center;">
            <div class="col-lg-6 col-md-6">
                <h4 style="margin:0 0 5px;font-size:20px;color:#1a237e;font-weight:700;">Get Digital Growth Tips in Your Inbox</h4>
                <p style="margin:0;font-size:14px;color:#666;">Weekly insights on app development, web design, SEO, and marketing. No spam — just actionable advice.</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <form id="newsletter-form" style="display:flex;gap:10px;margin-top:15px;" onsubmit="return handleNewsletterSubmit(event);">
                    <input type="email" id="newsletter-email" placeholder="Enter your email address" required
                        style="flex:1;padding:12px 16px;border:2px solid #ddd;border-radius:8px;font-size:14px;outline:none;transition:border-color 0.3s;"
                        onfocus="this.style.borderColor='#1565c0'" onblur="this.style.borderColor='#ddd'">
                    <button type="submit"
                        style="background:linear-gradient(135deg,#1565c0,#0d47a1);color:#fff;border:none;padding:12px 24px;border-radius:8px;font-weight:600;font-size:14px;cursor:pointer;white-space:nowrap;transition:opacity 0.3s;"
                        onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                        Subscribe
                    </button>
                </form>
                <p id="newsletter-success" style="display:none;margin:10px 0 0;font-size:13px;color:#25D366;font-weight:600;">
                    &#10003; Thank you! You'll receive our next newsletter.
                </p>
                <p style="margin:8px 0 0;font-size:11px;color:#999;">Join 2,500+ business owners. Unsubscribe anytime.</p>
            </div>
        </div>
    </div>
</div>

<script>
function handleNewsletterSubmit(e) {
    e.preventDefault();
    var email = document.getElementById('newsletter-email').value;

    // Send to server
    var formData = new FormData();
    formData.append('name', 'Newsletter Subscriber');
    formData.append('email', email);
    formData.append('source', 'newsletter_bar');
    formData.append('form_ts', window.__itdglPageTs || Math.floor(Date.now()/1000));
    formData.append('username_hp', '');
    fetch('/leadCaptureMail.php', { method: 'POST', body: formData });

    document.getElementById('newsletter-form').style.display = 'none';
    document.getElementById('newsletter-success').style.display = 'block';

    if (typeof gtag === 'function') {
        gtag('event', 'newsletter_signup', { email_domain: email.split('@')[1] });
    }
    return false;
}
</script>

<!-- ITD GrowthLabs: Site-wide form bot protection (auto-inject honeypot + timestamp) -->
<script>
(function(){
    // Page render timestamp — humans take ≥3s to fill a form, bots submit instantly.
    window.__itdglPageTs = Math.floor(Date.now() / 1000);

    // Only protect forms that submit to our mail handlers
    var MAIL_HANDLERS = /(contactMail|appDevelopmentFormMail|leadGenFormMail|socialMediaFormMail|videoProductionFormMail|websiteDesignFormMail|leadCaptureMail)\.php/i;

    function ensureHidden(form, name, value) {
        var existing = form.querySelector('input[name="' + name + '"]');
        if (existing) { if (value !== undefined) existing.value = value; return existing; }
        var el = document.createElement('input');
        el.type = 'hidden';
        el.name = name;
        if (value !== undefined) el.value = value;
        form.appendChild(el);
        return el;
    }

    function protectForm(form) {
        if (!form || form.__itdglProtected) return;
        var action = (form.getAttribute('action') || '') + ' ' + (form.getAttribute('data-action') || '');
        // Protect if action points to a known handler, OR form has common handler class/id hint
        var isHandlerForm = MAIL_HANDLERS.test(action) ||
                            form.id === 'newsletter-form' ||
                            form.classList.contains('contact-form') ||
                            form.classList.contains('enquiry-form') ||
                            form.classList.contains('lead-form');
        // Fall back: treat ANY form with an email input as a candidate (safe – timestamp check is permissive)
        if (!isHandlerForm && !form.querySelector('input[type="email"]')) return;

        ensureHidden(form, 'form_ts', window.__itdglPageTs);

        // Honeypot: hidden from humans via CSS + autocomplete=off + aria-hidden
        var hp = ensureHidden(form, 'username_hp', '');
        hp.type = 'text';
        hp.setAttribute('autocomplete', 'off');
        hp.setAttribute('tabindex', '-1');
        hp.setAttribute('aria-hidden', 'true');
        hp.style.cssText = 'position:absolute !important;left:-10000px !important;top:-10000px !important;width:1px !important;height:1px !important;opacity:0 !important;pointer-events:none !important;';

        form.__itdglProtected = true;
    }

    function scanAndProtect() {
        var forms = document.querySelectorAll('form');
        for (var i = 0; i < forms.length; i++) protectForm(forms[i]);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', scanAndProtect);
    } else {
        scanAndProtect();
    }

    // Catch dynamically-added forms (popup modals, AJAX-loaded forms)
    if (typeof MutationObserver !== 'undefined') {
        var mo = new MutationObserver(function(muts){
            for (var i = 0; i < muts.length; i++) {
                var m = muts[i];
                if (m.addedNodes) {
                    for (var j = 0; j < m.addedNodes.length; j++) {
                        var n = m.addedNodes[j];
                        if (n.nodeType === 1) {
                            if (n.tagName === 'FORM') protectForm(n);
                            var inner = n.querySelectorAll ? n.querySelectorAll('form') : [];
                            for (var k = 0; k < inner.length; k++) protectForm(inner[k]);
                        }
                    }
                }
            }
        });
        mo.observe(document.documentElement, { childList: true, subtree: true });
    }

    // Also intercept native fetch() calls that send FormData to our mail handlers
    // so programmatic submissions (like the newsletter one) auto-get honeypot + form_ts.
    if (window.fetch) {
        var origFetch = window.fetch;
        window.fetch = function(input, init) {
            try {
                var url = typeof input === 'string' ? input : (input && input.url) || '';
                if (MAIL_HANDLERS.test(url) && init && init.body && init.body instanceof FormData) {
                    if (!init.body.has('form_ts')) init.body.append('form_ts', window.__itdglPageTs);
                    if (!init.body.has('username_hp')) init.body.append('username_hp', '');
                }
            } catch(_) {}
            return origFetch.apply(this, arguments);
        };
    }
})();
</script>
