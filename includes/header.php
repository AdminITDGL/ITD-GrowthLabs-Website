<?php include(__DIR__ . "/mobile_nav_overlay.php"); ?>
   
   <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/geo_ribbon.php'; ?>
<header>
       <!-- Start Navigation -->
       <nav class="navbar mobile-sidenav navbar-default validnavs dark on menu-center no-full">

           <!-- Start Top Search -->
           <div class="top-search">
               <div class="container">
                   <form action="#">
                       <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-search"></i></span>
                           <input type="text" class="form-control" placeholder="Search">
                           <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                       </div>
                   </form>
               </div>
           </div>
           <!-- End Top Search -->

           <div class="container d-flex justify-content-between align-items-center">
               <!-- Start Header Navigation -->
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false" aria-controls="navbar-menu">
                       <i class="fa fa-bars"></i>
                   </button>
                   <a class="navbar-brand" href="/index.php">
                       <img src="/assets/img/logo.jpg" class="logo" alt="Logo">
                   </a>
               </div>
               <!-- End Header Navigation -->

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-menu">
                   <ul class="nav navbar-nav navbar-center">

                       <!-- SERVICES MEGA MENU (focus: 5 core services) -->
                       <li class="dropdown megamenu-fw">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                           <ul class="dropdown-menu megamenu-content" role="menu">
                               <li>
                                   <div class="row">

                                       <!-- Column 1: Website Development -->
                                       <div class="col-menu col-lg-3">
                                           <h6 class="title"><a href="/website_development.php">Website Development</a></h6>
                                           <ul class="menu-col">
                                               <li><a href="/services/Custom-Website-Development.php">Custom Website Development</a></li>
                                               <li><a href="/services/website-development-company.php">Business Website Development</a></li>
                                               <li><a href="/services/E-commerce-Website-Development.php">E-Commerce Website Development</a></li>
                                               <li><a href="/services/WordPress-Website-Development.php">WordPress Website Development</a></li>
                                               <li><a href="/lp/landing_page.php">Landing Page Design</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 2: App Development by service type + by industry -->
                                       <div class="col-menu col-lg-3">
                                           <h6 class="title"><a href="/app_development.php">App &amp; Software Development</a></h6>
                                           <p style="font-size:10.5px;font-weight:800;letter-spacing:1.2px;color:#94a3b8;text-transform:uppercase;margin:6px 0 4px;">By service type</p>
                                           <ul class="menu-col">
                                               <li><a href="/services/App-Development.php">Custom Mobile App Development</a></li>
                                               <li><a href="/services/web_app_development.php">Custom Web Application Development</a></li>
                                               <li><a href="/services/saas_developement.php">SaaS Development</a></li>
                                               <li><a href="/services/custom-software-development.php">Custom Software Development</a></li>
                                           </ul>
                                           <p style="font-size:10.5px;font-weight:800;letter-spacing:1.2px;color:#94a3b8;text-transform:uppercase;margin:14px 0 4px;">By industry / use case</p>
                                           <ul class="menu-col" style="font-size:13.5px;">
                                               <li><a href="/services/food-delivery-app-development.php">Food Delivery</a></li>
                                               <li><a href="/services/grocery-quick-commerce-app-development.php">Grocery / Quick Commerce</a></li>
                                               <li><a href="/services/fish-meat-delivery-app-development.php">Fish &amp; Meat Delivery</a></li>
                                               <li><a href="/services/pharmacy-app-development.php">Pharmacy / e-Pharmacy</a></li>
                                               <li><a href="/services/liquor-delivery-app-development.php">Liquor / Beverage</a></li>
                                               <li><a href="/services/dairy-subscription-app-development.php">Dairy / Subscriptions</a></li>
                                               <li><a href="/services/hyperlocal-services-app-development.php">Hyperlocal Services</a></li>
                                               <li><a href="/services/b2b-wholesale-ordering-app-development.php">B2B Wholesale Ordering</a></li>
                                               <li><a href="/services/logistics-courier-app-development.php">Logistics / Courier</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 3: Digital Marketing (lead-gen-first ordering) -->
                                       <div class="col-menu col-lg-3">
                                           <h6 class="title"><a href="/digital_marketing.php">Digital Marketing</a></h6>
                                           <ul class="menu-col">
                                               <li><a href="/services/ready-to-buy-lead-generation.php"><strong>Ready-to-Buy Lead Generation</strong></a></li>
                                               <li><a href="/services/seo-auditing-services.php">Search Engine Optimization (SEO)</a></li>
                                               <li><a href="/services/google-search-ads-services.php">Google Ads (PPC)</a></li>
                                               <li><a href="/services/meta_ads.php">Meta Ads Management</a></li>
                                               <li><a href="/services/social-media-marketing.php">Social Media Marketing</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 4: Ready-to-deploy apps (productised) -->
                                       <div class="col-menu col-lg-3">
                                           <h6 class="title" style="color:#1e40af;">Ready-to-Deploy Apps</h6>
                                           <ul class="menu-col">
                                               <li><a href="/products/courier-management-software.php"><strong>Courier Management Software</strong><br><span style="font-size:11.5px;color:#888;">Ready-to-deploy SaaS</span></a></li>
                                               <li><a href="/products/logistics-mobile-app.php"><strong>Custom Logistics Mobile App</strong><br><span style="font-size:11.5px;color:#888;">Branded delivery app</span></a></li>
                                               <li><a href="/products/multi-vendor-marketplace-app.php"><strong>Multi-Vendor Marketplace App</strong><br><span style="font-size:11.5px;color:#888;">Any vertical &middot; food, grocery, B2B</span></a></li>
                                           </ul>
                                       </div>

                                   </div>
                               </li>
                           </ul>
                       </li>

                       <!-- INDUSTRIES -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Industries</a>
                           <ul class="dropdown-menu">
                               <li><a href="/industries/logistics.php">Logistics & Supply Chain</a></li>
                               <li><a href="/industries/manufacturing.php">Manufacturing</a></li>
                               <li><a href="/industries/healthcare.php">Healthcare</a></li>
                               <li><a href="/industries/realestate.php">Real Estate</a></li>
                               <li><a href="/industries/education.php">Education & EdTech</a></li>
                               <li><a href="/industries/ecommerce.php">E-Commerce & D2C</a></li>
                               <li><a href="/industries/finance.php">Finance & FinTech</a></li>
                               <li><a href="/industries/information_tech.php">IT & SaaS</a></li>
                               <li><a href="/industries/professional_services.php">Professional Services</a></li>
                               <li><a href="/industries/startups.php">Startups</a></li>
                           </ul>
                       </li>
                       <!-- PRODUCTS -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products</a>
                           <ul class="dropdown-menu">
                               <li>
                                   <a href="/products/courier-management-software.php">
                                       <strong>Courier Management Software</strong><br>
                                       <span style="font-size:12px;color:#888;">SaaS platform for courier &amp; logistics ops</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="/products/logistics-mobile-app.php">
                                       <strong>Logistics Mobile App</strong><br>
                                       <span style="font-size:12px;color:#888;">Custom-built delivery app for your brand</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="/products/multi-vendor-marketplace-app.php">
                                       <strong>Multi-Vendor Marketplace App</strong><br>
                                       <span style="font-size:12px;color:#888;">Food, grocery, fish, pharmacy, hyperlocal &amp; B2B</span>
                                   </a>
                               </li>
                           </ul>
                       </li>



                       <!-- CASE STUDIES -->
                       <li>
                           <a href="/case-studies.php">Case Studies</a>
                       </li>

                       <!-- COMPANY -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company</a>
                           <ul class="dropdown-menu">
                               <li><a href="/about.php">About Us</a></li>
                               <li><a href="/resources/all-blogs.php">Blog</a></li>
                               <li><a href="/careers.php">Careers</a></li>
                               <li><a href="/contact-us.php">Contact Us</a></li>
                           </ul>
                       </li>

                   </ul>
               </div>

               <div class="attr-right">
                   <!-- Start Atribute Navigation -->
                   <div class="attr-nav">
                       <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/region_selector.php'; ?>
                       <ul>
                           <li class="button">
                               <a href="https://calendly.com/itdgrowthlabs-info/30min" class="js-book-call" data-source="nav_book_call" target="_blank" rel="noopener">Book a Call</a>
                           </li>
                       </ul>
                   </div>
                   <!-- End Atribute Navigation -->

                   <!-- Overlay screen for menu -->
                   <div class="overlay-screen"></div>
                   <!-- End Overlay screen for menu -->
               </div>

           </div>
       </nav>
       <!-- End Navigation -->
   </header>
