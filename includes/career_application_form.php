<?php
/**
 * ITD GrowthLabs — Shared career application form partial
 * Variables expected from the calling page:
 *   $career_job_slug   — e.g. "web-developer"
 *   $career_job_title  — e.g. "Web Developer"
 * Renders a modal trigger button + the modal + the form.
 *
 * Spam protection layered (defence-in-depth):
 *   - Math captcha (server-generated, HMAC-signed so it can't be tampered)
 *   - Honeypot field (`username_hp`)
 *   - form_ts timestamp (validated server-side via itdgl_verify_submission)
 *   - File type whitelist (PDF/DOC/DOCX only)
 *   - File size limit (5MB)
 *   - Rate-limit by IP (5 submissions / 10 min) via itdgl_verify_submission
 */

// Math captcha — generate random pair + HMAC-signed expected answer.
// Server validates by recomputing HMAC over (a + b) — bots can't tamper $a,$b
// without also knowing the secret used for the HMAC.
$itdgl_captcha_secret = 'itdgl_career_captcha_secret_2026_X1f5jK';
$itdgl_captcha_a = random_int(2, 9);
$itdgl_captcha_b = random_int(2, 9);
$itdgl_captcha_expected = $itdgl_captcha_a + $itdgl_captcha_b;
$itdgl_captcha_hmac = hash_hmac('sha256', (string)$itdgl_captcha_expected, $itdgl_captcha_secret);
$itdgl_form_ts = time();
?>
<style>
#careerApplyModal .modal-dialog { max-width: 640px; }
#careerApplyModal .modal-content { border-radius: 16px; border: none; box-shadow: 0 32px 80px rgba(15,23,42,0.32); overflow: hidden; }
#careerApplyModal .modal-header {
    background: linear-gradient(135deg, #1e1b4b 0%, #1e293b 100%);
    color: #fff; padding: 22px 26px; border-bottom: none; position: relative;
}
#careerApplyModal .modal-header h4 { margin: 0; font-size: 19px; font-weight: 800; color: #fff; }
#careerApplyModal .modal-header p { margin: 4px 0 0; font-size: 13.5px; color: rgba(255,255,255,0.78); }
#careerApplyModal .ip-close {
    position: absolute; top: 16px; right: 18px;
    width: 32px; height: 32px; border-radius: 50%;
    background: rgba(255,255,255,0.16); border: none; color: #fff;
    font-size: 20px; line-height: 1; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    transition: transform .2s ease, background .2s ease;
}
#careerApplyModal .ip-close:hover { transform: scale(1.1); background: rgba(255,255,255,0.28); }
#careerApplyModal .modal-body { padding: 26px 28px 30px; }
#careerApplyModal label {
    display: block; font-size: 12.5px; font-weight: 700;
    color: #0f172a; letter-spacing: 0.3px; text-transform: uppercase;
    margin: 0 0 6px;
}
#careerApplyModal input[type="text"],
#careerApplyModal input[type="email"],
#careerApplyModal input[type="tel"],
#careerApplyModal input[type="url"],
#careerApplyModal input[type="number"],
#careerApplyModal select,
#careerApplyModal textarea {
    width: 100%; padding: 11px 14px;
    border: 2px solid #e2e8f0; border-radius: 8px;
    font-size: 14.5px; color: #0f172a; background: #f8fafc;
    outline: none; transition: border-color .25s ease, box-shadow .25s ease;
    font-family: inherit;
}
#careerApplyModal input:focus,
#careerApplyModal select:focus,
#careerApplyModal textarea:focus {
    border-color: #1e40af; background: #fff;
    box-shadow: 0 0 0 4px rgba(30,64,175,0.10);
}
#careerApplyModal textarea { min-height: 90px; resize: vertical; }
#careerApplyModal .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 14px; }
#careerApplyModal .form-field { margin-bottom: 14px; }
#careerApplyModal .cv-upload {
    border: 2px dashed #cbd5e1; border-radius: 10px; padding: 18px 18px;
    background: #f8fafc; text-align: center; cursor: pointer;
    transition: border-color .25s ease, background .25s ease;
}
#careerApplyModal .cv-upload:hover { border-color: #1e40af; background: #f1f5f9; }
#careerApplyModal .cv-upload i { font-size: 28px; color: #1e40af; margin-bottom: 8px; }
#careerApplyModal .cv-upload p { margin: 0; font-size: 14px; font-weight: 700; color: #0f172a; }
#careerApplyModal .cv-upload small { display: block; font-size: 12px; color: #64748b; margin-top: 4px; font-weight: 500; }
#careerApplyModal .cv-upload input[type="file"] { display: none; }
#careerApplyModal .cv-upload.has-file { border-color: #16a34a; background: #f0fdf4; }
#careerApplyModal .cv-upload.has-file p { color: #16a34a; }
#careerApplyModal .captcha-box {
    background: #fff8f1; border-left: 4px solid #ff6b00; border-radius: 8px;
    padding: 14px 18px; margin-bottom: 14px;
    display: flex; align-items: center; gap: 14px;
}
#careerApplyModal .captcha-box label {
    margin: 0 12px 0 0; text-transform: none; letter-spacing: 0;
    font-size: 15px; color: #0f172a; font-weight: 700;
}
#careerApplyModal .captcha-box input { width: 80px; margin: 0; padding: 8px 10px; }
#careerApplyModal .submit-btn {
    width: 100%; padding: 13px 22px;
    background: linear-gradient(135deg, #ff6b00 0%, #ef4444 100%);
    color: #fff; border: none; border-radius: 10px;
    font-size: 15.5px; font-weight: 800; letter-spacing: 0.2px;
    cursor: pointer; box-shadow: 0 6px 20px rgba(255,107,0,0.30);
    transition: transform .2s ease, box-shadow .2s ease;
}
#careerApplyModal .submit-btn:hover { transform: translateY(-2px); box-shadow: 0 12px 30px rgba(255,107,0,0.45); }
#careerApplyModal .submit-btn:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }
#careerApplyModal .form-status { margin-top: 14px; padding: 12px 16px; border-radius: 8px; font-size: 14px; line-height: 1.55; display: none; }
#careerApplyModal .form-status.success { background: #f0fdf4; color: #15803d; border: 1px solid #86efac; display: block; }
#careerApplyModal .form-status.error { background: #fef2f2; color: #b91c1c; border: 1px solid #fca5a5; display: block; }
#careerApplyModal .form-microcopy { font-size: 12px; color: #64748b; margin-top: 10px; display: flex; gap: 14px; flex-wrap: wrap; }
#careerApplyModal .form-microcopy i { color: #16a34a; margin-right: 4px; }
@media (max-width: 768px) {
    #careerApplyModal .form-row { grid-template-columns: 1fr; }
    #careerApplyModal .modal-body { padding: 22px 20px 24px; }
}
</style>

<div class="modal fade" id="careerApplyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="ip-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                <h4>Apply for <?php echo htmlspecialchars($career_job_title); ?></h4>
                <p>Upload your CV (PDF / DOC / DOCX, max 5 MB). We review every application personally.</p>
            </div>
            <div class="modal-body">
                <form id="careerApplicationForm" enctype="multipart/form-data" autocomplete="on">
                    <input type="hidden" name="job_slug"  value="<?php echo htmlspecialchars($career_job_slug); ?>">
                    <input type="hidden" name="job_title" value="<?php echo htmlspecialchars($career_job_title); ?>">
                    <input type="hidden" name="captcha_a" value="<?php echo $itdgl_captcha_a; ?>">
                    <input type="hidden" name="captcha_b" value="<?php echo $itdgl_captcha_b; ?>">
                    <input type="hidden" name="captcha_hmac" value="<?php echo $itdgl_captcha_hmac; ?>">
                    <input type="hidden" name="form_ts" value="<?php echo $itdgl_form_ts; ?>">
                    <input type="text" name="username_hp" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0;">
                    <input type="text" name="website_hp"  tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0;">

                    <div class="form-row">
                        <div>
                            <label for="career_name">Full Name *</label>
                            <input type="text" id="career_name" name="name" required maxlength="80" autocomplete="name">
                        </div>
                        <div>
                            <label for="career_phone">Mobile / WhatsApp *</label>
                            <input type="tel" id="career_phone" name="phone" required pattern="[\+]?[0-9\s\-]{7,18}" autocomplete="tel">
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="career_email">Email *</label>
                        <input type="email" id="career_email" name="email" required maxlength="120" autocomplete="email">
                    </div>

                    <div class="form-row">
                        <div>
                            <label for="career_position_type">Applying for *</label>
                            <select id="career_position_type" name="position_type" required>
                                <option value="">Choose…</option>
                                <option value="Full-Time">Full-Time</option>
                                <option value="Internship">Internship</option>
                            </select>
                        </div>
                        <div>
                            <label for="career_experience">Years of Experience *</label>
                            <input type="text" id="career_experience" name="experience" required maxlength="30" placeholder="e.g. 2 years / 6 months">
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="career_linkedin">LinkedIn / Portfolio URL</label>
                        <input type="url" id="career_linkedin" name="linkedin" maxlength="200" placeholder="https://www.linkedin.com/in/...">
                    </div>

                    <div class="form-field">
                        <label for="career_cover">Why are you a good fit?</label>
                        <textarea id="career_cover" name="cover_letter" maxlength="1200" placeholder="Optional — a few sentences about your relevant work."></textarea>
                    </div>

                    <div class="form-field">
                        <label>Upload CV *</label>
                        <label class="cv-upload" id="careerCvUploadLabel" for="career_cv">
                            <i class="fas fa-file-arrow-up"></i>
                            <p id="careerCvLabelText">Click to upload your CV</p>
                            <small>PDF, DOC or DOCX &middot; max 5 MB</small>
                            <input type="file" id="career_cv" name="cv" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
                        </label>
                    </div>

                    <div class="captcha-box">
                        <label for="career_captcha">Quick check: What is <?php echo $itdgl_captcha_a; ?> + <?php echo $itdgl_captcha_b; ?>?</label>
                        <input type="number" id="career_captcha" name="captcha_answer" required min="0" max="99">
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane" style="margin-right:6px;"></i> Submit Application
                    </button>

                    <div class="form-microcopy">
                        <span><i class="fas fa-lock"></i>Your data goes to info@itdgrowthlabs.com only</span>
                        <span><i class="fas fa-shield-check"></i>No spam, no third-party sharing</span>
                    </div>
                </form>
                <div id="careerFormStatus" class="form-status"></div>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var fileInput = document.getElementById('career_cv');
    var labelText = document.getElementById('careerCvLabelText');
    var uploadLabel = document.getElementById('careerCvUploadLabel');
    fileInput.addEventListener('change', function () {
        if (this.files && this.files[0]) {
            var f = this.files[0];
            if (f.size > 5 * 1024 * 1024) {
                alert('File is larger than 5 MB. Please upload a smaller CV.');
                this.value = '';
                labelText.textContent = 'Click to upload your CV';
                uploadLabel.classList.remove('has-file');
                return;
            }
            labelText.textContent = f.name;
            uploadLabel.classList.add('has-file');
        }
    });

    var form = document.getElementById('careerApplicationForm');
    var statusEl = document.getElementById('careerFormStatus');
    var btn = form.querySelector('.submit-btn');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        statusEl.className = 'form-status';
        statusEl.textContent = '';
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin" style="margin-right:6px;"></i>Submitting…';
        var fd = new FormData(form);
        fetch('/careerApplicationMail.php', { method: 'POST', body: fd })
            .then(function (r) { return r.json(); })
            .then(function (data) {
                if (data && data.status === 'success') {
                    statusEl.className = 'form-status success';
                    statusEl.innerHTML = '<i class="fas fa-check-circle" style="margin-right:6px;"></i>' + (data.message || 'Application received. We’ll review and get back within 5 business days.');
                    form.reset();
                    labelText.textContent = 'Click to upload your CV';
                    uploadLabel.classList.remove('has-file');
                    if (typeof gtag === 'function') {
                        gtag('event', 'generate_lead', {
                            lead_source: 'career_application',
                            lead_type:   'cv_upload',
                            job_slug:    fd.get('job_slug') || ''
                        });
                    }
                } else {
                    statusEl.className = 'form-status error';
                    statusEl.innerHTML = '<i class="fas fa-circle-exclamation" style="margin-right:6px;"></i>' + (data && data.message ? data.message : 'Submission failed. Please try again.');
                }
            })
            .catch(function () {
                statusEl.className = 'form-status error';
                statusEl.innerHTML = '<i class="fas fa-circle-exclamation" style="margin-right:6px;"></i>Network error. Please try again in a moment.';
            })
            .finally(function () {
                btn.disabled = false;
                btn.innerHTML = '<i class="fas fa-paper-plane" style="margin-right:6px;"></i>Submit Application';
            });
    });
})();
</script>
