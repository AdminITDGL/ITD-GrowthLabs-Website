<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dilabs - Creative Digital Agency Template">

    <!-- ========== Page Title ========== -->
    <title>Contact Us | GrowthLabs Digital Marketing Company</title>

    <!-- ========== Favicon Icon ========== -->
    <?php include("./includes/header_script.php") ?>

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
                        <form action="contactMail.php" method="POST" class="contact-form2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="message" name="message_msg" placeholder="Tell Us About Project *"></textarea>
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
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 offset-lg-1 mt--80 mt-md-50 mt-xs-50">
                    <div class="contact-style-one-info">
                        <div class="mb-40">
                            <h2>Contact Information</h2>
                            <p>
                                We are here to help your business grow with our digital marketing expertise <br> Whether you have a project in mind or need guidance, we're here to assist you!
                            </p>
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
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <?php include("./includes/footer.php") ?>
    <?php include("./includes/footer_script.php") ?>