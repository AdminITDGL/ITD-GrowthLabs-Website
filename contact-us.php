<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dilabs - Creative Digital Agency Template">
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
    <!-- ========== Page Title ========== -->
    <title>Contact Us | GrowthLabs Digital Marketing Company</title>

    <!-- ========== Favicon Icon ========== -->
    <?php include("./includes/header_script.php") ?>
    <style>
        #showMessage {
            display: none;
            margin-top: 15px;
            font-weight: bold;
            transition: opacity 0.5s;
        }

        #showMessage.success_msg {
            color: green;
        }

        #showMessage.error_msg {
            color: red;
        }
    </style>

</head>

<body>

    <!-- Preloader Start -->
    <!-- <div class="se-pre-con"></div> -->
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <?php include("./includes/header.php") ?>
    <!-- End Header -->


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray bg-cover" style="background-image: url(assets/img/shape/banner-3.jpg);">
        <div class="container">
            <div class="breadcrumb-item">
                <div class="breadcrum-shape">
                    <img src="assets/img/shape/16.png" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </nav>
                        <h1>Get in touch with us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-area contact-page bg-gray overflow-hidden default-padding" style="background-image: url(assets/img/shape/map.png);">
        <div class="shape-right-bottom">
            <img src="assets/img/shape/18.png" alt="Shape">
        </div>
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-lg-6">
                    <div class="contact-form-style-one">
                        <form id="contactForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control" placeholder="Mobile No. *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject *" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea name="message" class="form-control" placeholder="Tell Us About Project *" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6Lez7pMqAAAAAEW9ugHXssmeVZdvo2jSYXMH98FB"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-12 alert-notification">
                            <div id="showMessage" class="alert-msg"></div>
                        </div>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 offset-lg-1 mt--80 mt-md-50 mt-xs-50">
                    <div class="contact-style-one-info">
                        <div class="mb-40">
                            <h2>Ready to grow your business online?</h2>
                            <p>
                                We help with SEO, website development, eLearning, WhatsApp automation, digital tech solutions, and social media marketing.
                            </p>
                            <p><i class="fa-solid fa-phone"></i> <a href="https://wa.me/918450978544" target="_blank" style="color:#6d6d6d">Phone:+91 8450978544</a></p>
                            <p><i class="fa fa-envelope"></i> <a href="mailto:info@itdgrowthlabs.com" style="color:#6d6d6d"> Email: info@itdgrowthlabs.com </a></p>
                            <p><i class="fa fa-globe"> </i> <a href="https://itdgrowthlabs.com/" style="color:#6d6d6d"> Website: www.itdgrowthlabs.com </a></p>
                        </div>
                        <ul class="contact-address">
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="info">
                                    <h4 class="title">Location</h4>
                                    <p>
                                        Gundecha Onclave, Mumbai, Maharashtra 400072
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="info">
                                    <h4 class="title">Official Email</h4>
                                    <a href="mailto:info@itdgrowthlabs.com">info@itdgrowthlabs</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <!-- Calendly inline widget begin -->

    <div class="calendly-inline-widget" data-url="https://calendly.com/itdgrowthlabs-info/30min?hide_gdpr_banner=1" style="min-width:320px;height:700px;"></div>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <!-- Calendly inline widget end -->
    <?php include("./includes/footer.php") ?>
    <?php include("./includes/footer_script.php") ?>
    <script>
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            const $showMessage = $('#showMessage').show().html('<i class="fas fa-spinner fa-spin"></i> Sending...');
            const formData = new FormData(this);
            const showMessage = (msg, cls) => {
                $showMessage.removeClass().addClass(cls).html(msg).show();
            };
            $.ajax({
                url: 'contactMail.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    let success = false;
                    let message = data;
                    try {
                        const res = JSON.parse(data);
                        message = res.message || data;
                        success = res.success || false;
                    } catch (e) {
                        if (data.toLowerCase().includes('sent')) success = true;
                    }
                    $('#contactForm')[0].reset();
                    if (typeof grecaptcha !== 'undefined') grecaptcha.reset();
                    showMessage(message, success ? 'success_msg' : 'error_msg');
                    if (success) {
                        setTimeout(() => window.location.href = 'thankyou.php', 2000);
                    }
                },
                error: function() {
                    showMessage('<i class="fas fa-exclamation-triangle"></i> Something went wrong!', 'error_msg');
                }
            });
        });
    </script>