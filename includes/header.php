<?php include(__DIR__ . "/mobile_nav_overlay.php"); ?>

   <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/geo_ribbon.php'; ?>
<style>
/* Industry flyout — nested dropdown inside the App Development column of the
   Services mega-menu. Hovering "By Industry / Use Case →" reveals the
   9 vertical pages in a sub-panel to the right. */
.itdgl-has-flyout {
    position: relative;
}
.itdgl-has-flyout > a:hover {
    background: rgba(30, 64, 175, 0.06);
    border-radius: 6px;
}
.itdgl-flyout-menu {
    list-style: none;
    margin: 0;
    padding: 8px 0;
    position: absolute;
    left: calc(100% + 6px);
    top: -8px;
    min-width: 280px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    box-shadow: 0 18px 50px rgba(15, 23, 42, 0.18);
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transform: translateX(-6px);
    transition: opacity .18s ease, transform .18s ease, visibility .18s;
    pointer-events: none;
}
.itdgl-has-flyout:hover > .itdgl-flyout-menu,
.itdgl-has-flyout:focus-within > .itdgl-flyout-menu {
    opacity: 1;
    visibility: visible;
    transform: translateX(0);
    pointer-events: auto;
}
.itdgl-flyout-menu li {
    list-style: none;
    margin: 0;
}
.itdgl-flyout-menu li a {
    display: flex;
    align-items: center;
    padding: 9px 16px;
    font-size: 13.5px;
    font-weight: 500;
    color: #0f172a;
    text-decoration: none;
    transition: background .12s ease, color .12s ease;
    border-radius: 0;
}
.itdgl-flyout-menu li a:hover {
    background: rgba(30, 64, 175, 0.06);
    color: #1e40af;
}
/* On mobile (when the mega-menu collapses to the hamburger), show the
   flyout as an inline sub-list rather than a hover-triggered popup. */
@media (max-width: 1199px) {
    .itdgl-flyout-menu {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        pointer-events: auto;
        box-shadow: none;
        border: none;
        background: transparent;
        padding: 4px 0 4px 16px;
        min-width: 0;
    }
    .itdgl-has-flyout > a > .fa-chevron-right {
        display: none;
    }
}
</style>
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

                                       <!-- Column 2: App Development — 4 service types + nested flyout for 9 verticals -->
                                       <div class="col-menu col-lg-3">
                                           <h6 class="title"><a href="/app_development.php">App &amp; Software Development</a></h6>
                                           <ul class="menu-col">
                                               <li><a href="/services/App-Development.php">Custom Mobile App Development</a></li>
                                               <li><a href="/services/web_app_development.php">Custom Web Application Development</a></li>
                                               <li><a href="/services/saas_developement.php">SaaS Development</a></li>
                                               <li><a href="/services/custom-software-development.php">Custom Software Development</a></li>
                                               <li class="itdgl-has-flyout">
                                                   <a href="#" onclick="return false;" style="display:flex;align-items:center;justify-content:space-between;gap:8px;color:#1e40af;font-weight:700;">
                                                       <span>By Industry / Use Case</span>
                                                       <i class="fas fa-chevron-right" style="font-size:10px;opacity:0.7;"></i>
                                                   </a>
                                                   <ul class="itdgl-flyout-menu">
                                                       <li><a href="/services/food-delivery-app-development.php"><i class="fas fa-utensils" style="color:#ef4444;margin-right:8px;width:14px;"></i>Food Delivery</a></li>
                                                       <li><a href="/services/grocery-quick-commerce-app-development.php"><i class="fas fa-basket-shopping" style="color:#16a34a;margin-right:8px;width:14px;"></i>Grocery / Quick Commerce</a></li>
                                                       <li><a href="/services/fish-meat-delivery-app-development.php"><i class="fas fa-fish" style="color:#0891b2;margin-right:8px;width:14px;"></i>Fish &amp; Meat Delivery</a></li>
                                                       <li><a href="/services/pharmacy-app-development.php"><i class="fas fa-prescription-bottle-medical" style="color:#2563eb;margin-right:8px;width:14px;"></i>Pharmacy / e-Pharmacy</a></li>
                                                       <li><a href="/services/liquor-delivery-app-development.php"><i class="fas fa-wine-bottle" style="color:#7c3aed;margin-right:8px;width:14px;"></i>Liquor / Beverage</a></li>
                                                       <li><a href="/services/dairy-subscription-app-development.php"><i class="fas fa-cow" style="color:#0ea5e9;margin-right:8px;width:14px;"></i>Dairy / Subscriptions</a></li>
                                                       <li><a href="/services/hyperlocal-services-app-development.php"><i class="fas fa-people-roof" style="color:#ec4899;margin-right:8px;width:14px;"></i>Hyperlocal Services</a></li>
                                                       <li><a href="/services/b2b-wholesale-ordering-app-development.php"><i class="fas fa-boxes-stacked" style="color:#0f766e;margin-right:8px;width:14px;"></i>B2B Wholesale Ordering</a></li>
                                                       <li><a href="/services/logistics-courier-app-development.php"><i class="fas fa-truck" style="color:#1e40af;margin-right:8px;width:14px;"></i>Logistics / Courier</a></li>
                                                   </ul>
                                               </li>
                                           </ul>
                                       </div>

                                       <!-- Column 3: Digital Marketing (lead-gen-first ordering) -->
                                       <div class="col-menu col-lg-3">
                                           <h6 class="title"><a href="/digital_marketing.php">Digital Marketing</a></h6>
                                           <ul class="menu-col">
                                               <li><a href="/services/ready-to-buy-lead-generation.php"><strong>Ready-to-Buy Lead Generation</strong></a></li>
                                               <li class="itdgl-has-flyout">
                                                   <a href="/services/d2c-digital-marketing.php" style="color:#be185d;">
                                                       <strong>D2C Digital Marketing</strong>
                                                       <span class="itdgl-flyout-arrow" aria-hidden="true">&rsaquo;</span>
                                                       <br><span style="font-size:11.5px;color:#888;font-weight:500;">Brand growth &middot; 12 industries</span>
                                                   </a>
                                                   <ul class="itdgl-flyout-menu" aria-label="D2C industries">
                                                       <li><a href="/services/d2c-digital-marketing.php"><i class="fas fa-th-large" style="color:#ec4899;margin-right:8px;font-size:11px;"></i><strong>All D2C industries (overview)</strong></a></li>
                                                       <li><a href="/services/d2c/jewellery-digital-marketing.php"><i class="fas fa-gem" style="color:#d4af37;margin-right:8px;font-size:11px;"></i>Jewellery Brands</a></li>
                                                       <li><a href="/services/d2c/fashion-clothing-digital-marketing.php"><i class="fas fa-shirt" style="color:#ec4899;margin-right:8px;font-size:11px;"></i>Fashion &amp; Clothing</a></li>
                                                       <li><a href="/services/d2c/food-beverage-digital-marketing.php"><i class="fas fa-mug-saucer" style="color:#16a34a;margin-right:8px;font-size:11px;"></i>Food &amp; Beverage</a></li>
                                                       <li><a href="/services/d2c/hotels-hospitality-digital-marketing.php"><i class="fas fa-hotel" style="color:#0891b2;margin-right:8px;font-size:11px;"></i>Hotels &amp; Hospitality</a></li>
                                                       <li><a href="/services/d2c/cosmetics-beauty-digital-marketing.php"><i class="fas fa-wand-magic-sparkles" style="color:#ec4899;margin-right:8px;font-size:11px;"></i>Cosmetics &amp; Beauty</a></li>
                                                       <li><a href="/services/d2c/skincare-digital-marketing.php"><i class="fas fa-pump-soap" style="color:#f97316;margin-right:8px;font-size:11px;"></i>Skincare &amp; Personal Care</a></li>
                                                       <li><a href="/services/d2c/healthcare-digital-marketing.php"><i class="fas fa-stethoscope" style="color:#0ea5e9;margin-right:8px;font-size:11px;"></i>Healthcare Brands</a></li>
                                                       <li><a href="/services/d2c/fmcg-digital-marketing.php"><i class="fas fa-basket-shopping" style="color:#16a34a;margin-right:8px;font-size:11px;"></i>FMCG &amp; Consumer Goods</a></li>
                                                       <li><a href="/services/d2c/home-decor-digital-marketing.php"><i class="fas fa-couch" style="color:#a855f7;margin-right:8px;font-size:11px;"></i>Home &amp; D&eacute;cor</a></li>
                                                       <li><a href="/services/d2c/electronics-digital-marketing.php"><i class="fas fa-headphones" style="color:#1e40af;margin-right:8px;font-size:11px;"></i>Electronics &amp; Consumer Products</a></li>
                                                       <li><a href="/services/d2c/lifestyle-brands-digital-marketing.php"><i class="fas fa-suitcase" style="color:#6366f1;margin-right:8px;font-size:11px;"></i>Lifestyle Brands</a></li>
                                                       <li><a href="/services/d2c/ecommerce-d2c-digital-marketing.php"><i class="fas fa-cart-shopping" style="color:#ec4899;margin-right:8px;font-size:11px;"></i>E-commerce &amp; Other D2C</a></li>
                                                   </ul>
                                               </li>
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
                               <li><a href="/faqs.php">FAQs</a></li>
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
