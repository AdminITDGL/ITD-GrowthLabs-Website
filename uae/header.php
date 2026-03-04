   <style>
       /* Country flags bar */
       .country-flags-header {
           background: linear-gradient(180deg, #fafbfc 0%, #f3f4f6 100%);
           padding: 10px 0;
           border-bottom: 1px solid rgba(0, 0, 0, 0.06);
       }

       .country-flags-container {
           display: flex;
           justify-content: flex-start;
           align-items: center;
           gap: 16px;
           flex-wrap: wrap;
       }

       .country-flag-item {
           display: inline-flex;
           align-items: center;
           gap: 8px;
           text-decoration: none;
           color: #4b5563;
           font-size: 13px;
           font-weight: 500;
           transition: color 0.2s ease, background 0.2s ease, transform 0.15s ease;
           padding: 6px 12px;
           border-radius: 999px;
       }

       .country-flag-item:hover {
           background: #ffffff;
           color: #1a73e8;
           text-decoration: none;
           box-shadow: 0 1px 4px rgba(15, 23, 42, 0.14);
       }

       .country-flag-item img {
           width: 22px;
           height: 16px;
           object-fit: cover;
           border-radius: 4px;
           box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12);
       }

       /* Navbar shell */
       .navbar.validnavs {
           background-color: #ffffff;
           border-bottom: 1px solid rgba(15, 23, 42, 0.06);
           box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
       }

       .navbar.validnavs .navbar-brand {
           padding: 8px 0;
       }

       .navbar.validnavs .navbar-brand .logo {
           max-height: 40px;
           width: auto;
           height: auto;
           object-fit: contain;
       }

       /* Top-level nav items */
       .navbar.validnavs .nav.navbar-nav>li>a {
           font-size: 15px;
           font-weight: 500;
           letter-spacing: 0.02em;
           text-transform: none;
           padding: 18px 16px;
           color: #111827;
           transition: color 0.2s ease, background 0.2s ease;
       }

       .navbar.validnavs .nav.navbar-nav>li>a:hover,
       .navbar.validnavs .nav.navbar-nav>li>a:focus {
           color: #1a73e8;
           background-color: rgba(26, 115, 232, 0.06);
       }

       .navbar.validnavs .nav.navbar-nav>li.dropdown.open>a {
           color: #1a73e8;
           background-color: rgba(26, 115, 232, 0.06);
       }

       /* Mega menu dropdown container */
       .navbar.validnavs .dropdown-menu.megamenu-content {
           padding: 22px 20px 18px;
           border-radius: 10px;
           border: 1px solid rgba(15, 23, 42, 0.06);
           box-shadow: 0 8px 24px rgba(15, 23, 42, 0.14);
           min-width: 100%;
       }

       /* Make all five columns share full width, no empty space on right */
       .navbar.validnavs .megamenu-content .row {
           margin-left: 0;
           margin-right: 0;
           display: flex;
       }

       .navbar.validnavs .megamenu-content .col-menu {
           padding: 0 18px;
           flex: 1 1 0;
           max-width: none;
       }

       .navbar.validnavs .megamenu-content .col-menu:first-child {
           padding-left: 0;
       }

       /* Mega menu section titles – make them stand out */
       .megamenu-content .title {
           font-size: 14px;
           font-weight: 700;
           text-transform: uppercase;
           letter-spacing: 0.12em;
           color: #1a73e8;
           /* blue headings */
           margin-bottom: 10px;
           position: relative;
           display: inline-block;
       }

       .megamenu-content .title::after {
           content: "";
           position: absolute;
           left: 0;
           bottom: -6px;
           width: 36px;
           height: 2px;
           background: #1a73e8;
           border-radius: 999px;
           transition: width 0.25s ease;
       }

       .megamenu-content .title:hover::after {
           width: 100%;
       }

       /* Mega menu links */
       .megamenu-content .menu-col {
           list-style: none;
           margin: 0;
           padding: 0;
       }

       .megamenu-content .menu-col li a {
           display: block;
           padding: 6px 0;
           font-size: 13px;
           color: #6b7280;
           /* softer grey */
           border-bottom: 1px solid #f3f4f6;
           transition: color 0.2s ease, padding-left 0.2s ease;
       }

       .megamenu-content .menu-col li:last-child a {
           border-bottom: none;
       }

       .megamenu-content .menu-col li a:hover {
           color: #1a73e8;
           padding-left: 6px;
       }

       /* Regular dropdown (Industries) */
       .navbar.validnavs .navbar-nav>li.dropdown:not(.megamenu-fw) .dropdown-menu {
           min-width: 240px;
           border-radius: 10px;
           border: 1px solid rgba(15, 23, 42, 0.06);
           box-shadow: 0 8px 30px rgba(15, 23, 42, 0.14);
           padding: 8px 0;
       }

       .navbar.validnavs .navbar-nav>li.dropdown:not(.megamenu-fw) .dropdown-menu li a {
           font-size: 13px;
           padding: 9px 18px;
           color: #6b7280;
           /* same softer grey */
           transition: color 0.2s ease, background 0.2s ease;
       }

       .navbar.validnavs .navbar-nav>li.dropdown:not(.megamenu-fw) .dropdown-menu li a:hover {
           color: #1a73e8;
           background-color: rgba(26, 115, 232, 0.06);
       }

       @media (max-width: 768px) {
           .country-flags-container {
               gap: 10px;
           }

           .country-flag-item {
               font-size: 12px;
               padding: 5px 10px;
           }
       }
   </style>
   <div class="country-flags-header">
       <div class="container">
           <div class="country-flags-container">
               <a href="uae/index.php" class="country-flag-item">
                   <img src="../assets/img/uae.png" alt="UAE Flag">
                   <span>UAE</span>
               </a>
               <a href="../africa/index.php" class="country-flag-item">
                   <img src="../assets/img/africa.png" alt="Africa Flag">
                   <span>Africa</span>
               </a>
               <a href="australia/index.php" class="country-flag-item">
                   <img src="../assets/img/australia.png" alt="Australia Flag">
                   <span>Australia</span>
               </a>
           </div>
       </div>
   </div>
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
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                       <i class="fa fa-bars"></i>
                   </button>
                   <a class="navbar-brand" href="../index.php">
                       <img src="../assets/img/logo.jpg" class="logo" alt="Logo">
                   </a>
               </div>
               <!-- End Header Navigation -->

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-menu">
                   <ul class="nav navbar-nav navbar-center">

                       <!-- SOLUTIONS MEGA MENU -->
                       <li class="dropdown megamenu-fw">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solutions</a>
                           <ul class="dropdown-menu megamenu-content" role="menu">
                               <li>
                                   <div class="row">

                                       <!-- Column 1 -->
                                       <div class="col-menu col-lg-2">
                                           <h6 class="title">Website Development</h6>
                                           <ul class="menu-col">
                                               <li><a href="../lp/website-design-development.php">Business Website Development</a></li>
                                               <li><a href="../lp/website-design-development.php">Corporate Website Development</a></li>
                                               <li><a href="../lp/website-design-development.php">Custom Website Development</a></li>
                                               <li><a href="../lp/website-design-development.php">WordPress Website Development</a></li>
                                               <li><a href="../lp/website-design-development.php">E-Commerce Website Development</a></li>
                                               <li><a href="../lp/website-design-development.php">Landing Page Design</a></li>
                                               <li><a href="../lp/website-design-development.php">Website Maintenance</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 2 -->
                                       <div class="col-menu col-lg-2">
                                           <h6 class="title">App Development</h6>
                                           <ul class="menu-col">
                                               <li><a href="../lp/app-development.php">Android App Development</a></li>
                                               <li><a href="../lp/app-development.php">iOS App Development</a></li>
                                               <li><a href="../lp/app-development.php">Hybrid App Development</a></li>
                                               <li><a href="../lp/app-development.php">Flutter App Development</a></li>
                                               <li><a href="../lp/app-development.php">Web Application Development</a></li>
                                               <li><a href="../lp/app-development.php">SaaS Development</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 3 -->
                                       <div class="col-menu col-lg-2">
                                           <h6 class="title">Digital Marketing</h6>
                                           <ul class="menu-col">
                                               <li><a href="../services/seo-auditing-services.php">Search Engine Optimization (SEO)</a></li>
                                               <li><a href="../services/seo-articles-writing.php">Local SEO Services</a></li>
                                               <li><a href="../services/google-search-ads-services.php">Google Ads (PPC)</a></li>
                                               <li><a href="../services/technical-content-writing.php">Meta Ads Management</a></li>
                                               <li><a href="../services/content-marketing-services.php">LinkedIn Ads</a></li>
                                               <li><a href="../services/social-media-marketing.php">Social Media Marketing</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 4 -->
                                       <div class="col-menu col-lg-2">
                                           <h6 class="title">Content & eLearning</h6>
                                           <ul class="menu-col">
                                               <li><a href="../services/website-content-writing.php">Website Content Writing</a></li>
                                               <li><a href="../services/technical-content-writing.php">Technical Content Writing</a></li>
                                               <li><a href="../services/seo-articles-writing.php">SEO Content Writing</a></li>
                                               <li><a href="../services/custom-elearning-development.php">eLearning Content Development</a></li>
                                               <li><a href="../services/onboarding-videos.php">Instructional Design</a></li>
                                               <li><a href="../services/logistics-content-marketing.php">LMS Development</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 5 -->
                                       <div class="col-menu col-lg-2">
                                           <h6 class="title">AI & Intelligent Automation</h6>
                                           <ul class="menu-col">
                                               <li><a href="../services/whatsapp-marketing-and-automation.php">WhatsApp Automation</a></li>
                                               <li><a href="../services/case-study-website-development.php">AI Chatbot Development</a></li>
                                               <li><a href="../services/IT-Outsourcing-Services.php">Business Process Automation</a></li>
                                               <li><a href="../services/partner-enablement.php">AI Marketing Automation</a></li>
                                               <li><a href="../services/content-team-outsourcing.php">CRM Automation</a></li>
                                               <li><a href="../services/compliance-automation.php">Data Annotation Services</a></li>
                                               <li><a href="../services/logistics-content-marketing.php">AI Data Labeling</a></li>
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
                               <li><a href="../services/logistics-content-marketing.php">Logistics & Supply Chain</a></li>
                               <li><a href="../services/Industries-We-Serve-Manufacturing.php">Manufacturing</a></li>
                               <li><a href="#">Healthcare</a></li>
                               <li><a href="#">Real Estate</a></li>
                               <li><a href="#">Education & EdTech</a></li>
                               <li><a href="#">E-Commerce & D2C</a></li>
                               <li><a href="#">Finance & FinTech</a></li>
                               <li><a href="#">IT & SaaS</a></li>
                               <li><a href="#">Professional Services</a></li>
                               <li><a href="#">Startups</a></li>
                           </ul>
                       </li>

                       <!-- CASE STUDIES -->
                       <li>
                           <a href="../resources/all-blogs.php">Case Studies</a>
                       </li>

                       <!-- CONTACT -->
                       <li>
                           <a href="../contact-us.php">Contact Us</a>
                       </li>

                   </ul>
               </div>

               <div class="attr-right">
                   <!-- Start Atribute Navigation -->
                   <div class="attr-nav">
                       <ul>
                           <li class="button">
                               <a href="https://calendly.com/itdgrowthlabs-info/30min">Book a Call</a>
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