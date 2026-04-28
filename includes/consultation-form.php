<div class="col-tact-stye-one col-lg-5">
    <div class="contact-form-style-one form-with-profile wow fadeInUp p-0" data-wow-delay="500ms" data-wow-duration="400ms">
        <div class="form-header-orange">
            <div class="profile-images-container">
                <img src="../assets/img/form-profile-image.png" alt="Expert" class="profile-main" oncontextmenu="return false;" draggable="false" ondragstart="return false;">
            </div>
        </div>
        <div class="form-content p-3">
                                <div class="information">
                                    <h4 class="wow fadeInUp mb-30 text-center" data-wow-delay="500ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <b>Get a Free Consultation</b>
                                    </h4>
                                </div>
                                <form id="contactMail">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="hidden" name="username_hp">
                                                <input type="hidden" name="form_ts" value="<?php echo time(); ?>">
                                                <input type="text" name="name" class="form-control" placeholder="Full Name *" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email ID *" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="mobile" class="form-control" placeholder="Mobile Number *" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <select name="service" class="form-control" required="">
                                                    <option value="" disabled="" selected="">Service Interested In *</option>
                                                    <option value="Technology Solutions (Website, App, AI, Database)">Technology Solutions (Website, App, AI, Database)</option>
                                                    <option value="Digital Marketing (Social Media, Branding)">Digital Marketing (Social Media, Branding)</option>
                                                    <option value="Lead Generation – Paid Ads (Meta, Google)">Lead Generation – Paid Ads (Meta, Google)</option>
                                                    <option value="Content &amp; Creative Services (Writing, Video, Media)">Content &amp; Creative Services (Writing, Video, Media)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group comments">
                                                <textarea name="message" class="form-control" placeholder="Tell Us About Your Requirement *" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary w-100">
                                                <i class="fa fa-paper-plane"></i> Submit Now
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
    </div>
</div>