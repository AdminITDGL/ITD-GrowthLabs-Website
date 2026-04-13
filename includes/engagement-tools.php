<!-- ============================================= -->
<!-- ITD GrowthLabs Engagement Tools -->
<!-- WhatsApp Chat Widget + Exit-Intent Popup + Newsletter -->
<!-- ============================================= -->

<!-- Floating WhatsApp Chat Button -->
<a href="https://wa.me/918450978544?text=Hi%20ITD%20GrowthLabs%2C%20I%27d%20like%20to%20discuss%20a%20project."
   target="_blank"
   id="whatsapp-float"
   aria-label="Chat on WhatsApp"
   style="position:fixed;bottom:25px;right:25px;z-index:9999;background:#25D366;width:60px;height:60px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,0.25);transition:transform 0.3s ease,box-shadow 0.3s ease;text-decoration:none;">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="white">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
</a>
<style>
    #whatsapp-float:hover { transform: scale(1.1); box-shadow: 0 6px 20px rgba(37,211,102,0.5); }
    @media (max-width: 768px) { #whatsapp-float { bottom: 15px; right: 15px; width: 52px; height: 52px; } #whatsapp-float svg { width: 28px; height: 28px; } }
</style>

<!-- Exit-Intent Popup (Newsletter + Free Consultation) -->
<div id="exit-intent-overlay" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.6);z-index:10000;backdrop-filter:blur(3px);">
    <div id="exit-intent-popup" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);background:#fff;border-radius:16px;max-width:520px;width:90%;padding:0;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.3);animation:exitPopupSlide 0.4s ease;">
        <!-- Header -->
        <div style="background:linear-gradient(135deg,#1565c0 0%,#0d47a1 100%);padding:30px 35px 25px;position:relative;">
            <button onclick="closeExitPopup()" style="position:absolute;top:12px;right:15px;background:none;border:none;color:rgba(255,255,255,0.8);font-size:24px;cursor:pointer;padding:5px;line-height:1;" aria-label="Close">&times;</button>
            <h3 style="color:#fff;margin:0 0 8px;font-size:22px;font-weight:700;">Wait! Before You Go...</h3>
            <p style="color:rgba(255,255,255,0.9);margin:0;font-size:14px;line-height:1.5;">Get a <strong>FREE project consultation</strong> worth Rs. 5,000 — no strings attached.</p>
        </div>
        <!-- Body -->
        <div style="padding:25px 35px 30px;">
            <div style="display:flex;flex-direction:column;gap:12px;">
                <div style="display:flex;align-items:center;gap:10px;font-size:14px;color:#333;">
                    <span style="color:#25D366;font-size:18px;">&#10003;</span> Custom project roadmap and cost estimate
                </div>
                <div style="display:flex;align-items:center;gap:10px;font-size:14px;color:#333;">
                    <span style="color:#25D366;font-size:18px;">&#10003;</span> Technology recommendation for your use case
                </div>
                <div style="display:flex;align-items:center;gap:10px;font-size:14px;color:#333;">
                    <span style="color:#25D366;font-size:18px;">&#10003;</span> Timeline and team structure plan
                </div>
            </div>
            <div style="margin-top:20px;display:flex;flex-direction:column;gap:10px;">
                <a href="contact-us.php" style="display:block;text-align:center;background:linear-gradient(135deg,#1565c0,#0d47a1);color:#fff;padding:14px 24px;border-radius:8px;font-weight:600;font-size:15px;text-decoration:none;transition:opacity 0.3s;">
                    Get My Free Consultation <span style="margin-left:5px;">&#8594;</span>
                </a>
                <a href="https://wa.me/918450978544?text=Hi%2C%20I%27d%20like%20a%20free%20project%20consultation." target="_blank" style="display:block;text-align:center;background:#25D366;color:#fff;padding:12px 24px;border-radius:8px;font-weight:600;font-size:14px;text-decoration:none;transition:opacity 0.3s;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="white" style="vertical-align:middle;margin-right:6px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Chat on WhatsApp Instead
                </a>
            </div>
            <p style="text-align:center;margin:15px 0 0;font-size:12px;color:#999;">
                <span style="font-weight:600;color:#333;">300+ projects delivered</span> &bull; <span style="font-weight:600;color:#333;">97% client retention</span> &bull; We respond within 24 hours
            </p>
        </div>
    </div>
</div>

<style>
    @keyframes exitPopupSlide {
        from { opacity: 0; transform: translate(-50%, -45%); }
        to { opacity: 1; transform: translate(-50%, -50%); }
    }
    #exit-intent-popup a:hover { opacity: 0.9; }
</style>

<script>
(function() {
    var exitShown = false;
    var SESSION_KEY = 'itdgl_exit_shown';

    // Don't show if already shown this session
    if (sessionStorage.getItem(SESSION_KEY)) return;

    // Exit intent detection (desktop: mouse leaves viewport top)
    document.addEventListener('mouseout', function(e) {
        if (e.clientY < 10 && !exitShown) {
            showExitPopup();
        }
    });

    // Mobile: show after 45 seconds of inactivity or scroll up
    var mobileTimer = null;
    if (window.innerWidth < 768) {
        mobileTimer = setTimeout(function() {
            if (!exitShown) showExitPopup();
        }, 45000);
    }

    window.showExitPopup = function() {
        if (exitShown) return;
        // Don't show on contact page (user is already converting)
        if (window.location.pathname.indexOf('contact') !== -1) return;
        if (window.location.pathname.indexOf('thankyou') !== -1) return;

        exitShown = true;
        sessionStorage.setItem(SESSION_KEY, '1');
        document.getElementById('exit-intent-overlay').style.display = 'block';
        document.body.style.overflow = 'hidden';
    };

    window.closeExitPopup = function() {
        document.getElementById('exit-intent-overlay').style.display = 'none';
        document.body.style.overflow = '';
    };

    // Close on overlay click
    document.getElementById('exit-intent-overlay').addEventListener('click', function(e) {
        if (e.target === this) closeExitPopup();
    });

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeExitPopup();
    });
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
    // Store locally (replace with actual email service integration)
    var subscribers = JSON.parse(localStorage.getItem('itdgl_subscribers') || '[]');
    subscribers.push({ email: email, date: new Date().toISOString() });
    localStorage.setItem('itdgl_subscribers', JSON.stringify(subscribers));

    document.getElementById('newsletter-form').style.display = 'none';
    document.getElementById('newsletter-success').style.display = 'block';

    // Track in GA4
    if (typeof gtag === 'function') {
        gtag('event', 'newsletter_signup', { email_domain: email.split('@')[1] });
    }
    return false;
}
</script>
