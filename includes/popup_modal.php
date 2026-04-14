<style>
    .btn-close:after { display: none; }
    #profile-form-section input { width: 100%; padding: 10px 14px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 14px; outline: none; transition: border-color 0.3s; }
    #profile-form-section input:focus { border-color: #1565c0; }
    #profile-download-success { display: none; text-align: center; padding: 15px 0; }
</style>

<div class="modal fade" id="imagePopupModal" tabindex="-1" aria-labelledby="imagePopupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background: #fff; border: none; position: relative; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.3);">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 12px; right: 15px; z-index: 1051; background: #fff; border-radius: 50%; width: 36px; height: 36px; opacity: 1; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 8px; font-size: 18px; line-height: 1; display: flex; align-items: center; justify-content: center; border: none; cursor: pointer;">
                <span style="color: #333; font-weight: bold;">&times;</span>
            </button>

            <!-- Banner Image -->
            <div style="width: 100%;">
                <a href="<?php echo (strpos($_SERVER['PHP_SELF'], '/services/') !== false) ? '../contact-us.php' : 'contact-us.php'; ?>">
                    <img src="<?php echo (strpos($_SERVER['PHP_SELF'], '/services/') !== false) ? '../assets/img/BlackBlueBizBanner.jpg' : 'assets/img/BlackBlueBizBanner.jpg'; ?>" alt="ITD GrowthLabs — Custom App Development & Digital Solutions" class="img-fluid" style="width: 100%; height: auto; display: block;">
                </a>
            </div>

            <!-- CTA Buttons + Lead Capture -->
            <div style="padding: 20px 30px 24px; display: flex; flex-direction: column; gap: 10px;">
                <!-- Primary CTAs -->
                <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                    <a href="<?php echo (strpos($_SERVER['PHP_SELF'], '/services/') !== false) ? '../contact-us.php' : 'contact-us.php'; ?>" style="flex: 1; min-width: 200px; display: block; text-align: center; background: linear-gradient(135deg, #1565c0, #0d47a1); color: #fff; padding: 13px 20px; border-radius: 8px; font-weight: 600; font-size: 15px; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                        Get a Free Consultation &#8594;
                    </a>
                    <a href="https://wa.me/918450978544?text=Hi%20ITD%20GrowthLabs%2C%20I%27d%20like%20to%20discuss%20a%20project." target="_blank" style="flex: 1; min-width: 200px; display: block; text-align: center; background: #25D366; color: #fff; padding: 13px 20px; border-radius: 8px; font-weight: 600; font-size: 15px; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="white" style="vertical-align: middle; margin-right: 6px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Chat on WhatsApp
                    </a>
                </div>

                <!-- Company Profile Lead Capture Form -->
                <div id="profile-form-section" style="background: #f8f9fb; border: 2px solid #e8ecf1; border-radius: 10px; padding: 16px 18px;">
                    <p style="margin: 0 0 10px; font-size: 14px; font-weight: 700; color: #1a237e;">
                        &#128196; Download Our Company Profile
                    </p>
                    <form id="profile-download-form" onsubmit="return handleProfileDownload(event)" style="display: flex; flex-direction: column; gap: 8px;">
                        <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                            <input type="text" id="profile-lead-name" placeholder="Your Name" required style="flex: 1; min-width: 140px;">
                            <input type="email" id="profile-lead-email" placeholder="Work Email" required style="flex: 1; min-width: 180px;">
                        </div>
                        <button type="submit" style="background: linear-gradient(135deg, #1565c0, #0d47a1); color: #fff; border: none; padding: 11px 20px; border-radius: 8px; font-weight: 600; font-size: 14px; cursor: pointer; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                            Download Company Profile (PDF) &#8595;
                        </button>
                    </form>
                </div>
                <div id="profile-download-success">
                    <p style="color: #25D366; font-weight: 700; font-size: 15px; margin: 0 0 8px;">&#10003; Thank you! Your download is starting...</p>
                    <a id="profile-download-link" href="<?php echo (strpos($_SERVER['PHP_SELF'], '/services/') !== false) ? '../assets/ITD-GrowthLabs-Company-Profile.pdf' : 'assets/ITD-GrowthLabs-Company-Profile.pdf'; ?>" download style="display: inline-block; background: #1565c0; color: #fff; padding: 10px 24px; border-radius: 8px; font-weight: 600; font-size: 14px; text-decoration: none;">
                        Click here if download didn't start
                    </a>
                </div>

                <p style="text-align: center; margin: 5px 0 0; font-size: 12px; color: #999;">
                    <strong style="color: #333;">300+ projects</strong> &bull; <strong style="color: #333;">97% client retention</strong> &bull; <strong style="color: #333;">10+ years experience</strong>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
        var name = document.getElementById('profile-lead-name').value;
        var email = document.getElementById('profile-lead-email').value;

        // Store lead locally (replace with actual CRM/email service integration)
        var leads = JSON.parse(localStorage.getItem('itdgl_profile_leads') || '[]');
        leads.push({ name: name, email: email, date: new Date().toISOString(), source: 'popup_profile_download' });
        localStorage.setItem('itdgl_profile_leads', JSON.stringify(leads));

        // Track in GA4
        if (typeof gtag === 'function') {
            gtag('event', 'generate_lead', {
                lead_source: 'company_profile_download',
                email_domain: email.split('@')[1]
            });
        }

        // Show success and trigger download
        document.getElementById('profile-form-section').style.display = 'none';
        document.getElementById('profile-download-success').style.display = 'block';

        // Auto-trigger download
        var link = document.getElementById('profile-download-link');
        link.click();

        return false;
    }
</script>
