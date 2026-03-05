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
           max-height: 60px;
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
   <style>
       /* Your existing styles remain the same, adding mobile improvements below */

       /* Enhanced Mobile Styles */
       @media (max-width: 991px) {

           /* Country flags - stack vertically for better mobile UX */
           .country-flags-container {
               justify-content: center;
               gap: 8px;
               padding: 8px 0;
           }

           .country-flag-item {
               font-size: 12px;
               padding: 8px 12px;
               flex: 1;
               min-width: 90px;
               justify-content: center;
           }

           /* Navbar mobile improvements */
           .navbar.validnavs {
               padding: 0;
           }

           .navbar-toggle {
               border: none;
               padding: 8px 12px;
           }

           .navbar-toggle .icon-bar {
               background-color: #111827;
               height: 2px;
               margin: 3px 0;
               transition: 0.3s;
           }

           /* Navbar collapse full height overlay */
           .navbar-collapse {
               position: fixed;
               top: 0;
               left: 0;
               width: 100%;
               height: 100vh;
               background: rgba(255, 255, 255, 0.98);
               backdrop-filter: blur(10px);
               z-index: 9999;
               padding: 80px 20px 20px;
               overflow-y: auto;
               transform: translateX(100%);
               transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
           }

           .navbar-collapse.in {
               transform: translateX(0);
           }

           /* Hide overlay screen if present */
           .overlay-screen {
               display: none !important;
           }

           /* Mobile nav items - full width, larger touch targets */
           .nav.navbar-nav.navbar-center {
               margin: 0;
           }

           .nav.navbar-nav.navbar-center>li {
               width: 100%;
               margin-bottom: 2px;
           }

           .nav.navbar-nav.navbar-center>li>a {
               padding: 18px 20px;
               font-size: 16px;
               font-weight: 600;
               border-radius: 12px;
               margin: 4px 0;
               background: rgba(26, 115, 232, 0.02);
               border: 1px solid rgba(26, 115, 232, 0.1);
               display: block;
               color: #111827;
           }

           .nav.navbar-nav.navbar-center>li>a:hover,
           .nav.navbar-nav.navbar-center>li>a:focus {
               background: rgba(26, 115, 232, 0.1);
               color: #1a73e8;
               transform: translateX(8px);
           }

           /* Mobile dropdown toggle styling */
           .dropdown-toggle::after {
               position: absolute;
               right: 20px;
               top: 50%;
               transform: translateY(-50%);
               transition: transform 0.3s;
               color: #6b7280;
               font-size: 14px;
           }

           .dropdown.open .dropdown-toggle::after {
               transform: translateY(-50%) rotate(180deg);
           }

           /* Mobile dropdown menu - stacked vertically */
           .dropdown-menu {
               position: static;
               float: none;
               width: 100%;
               margin-top: 0;
               background: transparent;
               border: none;
               box-shadow: none;
               padding: 12px 0 0 40px;
               max-height: none;
           }

           .dropdown-menu li a {
               padding: 14px 20px;
               font-size: 15px;
               color: #4b5563;
               border-radius: 10px;
               margin: 4px 0;
               background: rgba(248, 250, 252, 0.8);
               border: 1px solid rgba(229, 231, 235, 0.5);
           }

           .dropdown-menu li a:hover {
               background: rgba(26, 115, 232, 0.15);
               color: #1a73e8;
               border-color: rgba(26, 115, 232, 0.3);
           }

           /* Mega menu mobile - convert to simple expandable list */
           .megamenu-content {
               padding: 0 !important;
               margin: 0;
               background: transparent;
               border: none;
               box-shadow: none;
           }

           .megamenu-content .row {
               display: block;
               margin: 0;
           }

           .col-menu {
               width: 100% !important;
               padding: 0 !important;
               margin-bottom: 20px;
               border-bottom: 1px solid rgba(229, 231, 235, 0.5);
               padding-bottom: 16px;
           }

           .title {
               font-size: 15px !important;
               margin-bottom: 12px !important;
               position: static !important;
           }

           .title::after {
               display: none !important;
           }

           .menu-col {
               padding-left: 0;
           }

           .menu-col li a {
               padding: 12px 16px;
               font-size: 14px;
               border: 1px solid rgba(229, 231, 235, 0.3);
               background: rgba(255, 255, 255, 0.7);
               margin: 3px 0;
               border-radius: 8px;
           }

           /* Search improvements */
           .top-search {
               position: relative;
               z-index: 10000;
           }

           .form-control {
               font-size: 16px;
               padding: 12px 20px;
               border-radius: 25px;
           }

           /* CTA button mobile */
           .attr-nav .button a {
               padding: 12px 24px;
               font-size: 15px;
               font-weight: 600;
               border-radius: 25px;
               background: linear-gradient(135deg, #1a73e8, #0d5aa4);
               color: white !important;
               box-shadow: 0 4px 12px rgba(26, 115, 232, 0.3);
           }

           /* Backdrop close */
           .navbar-collapse.in~.attr-right::before {
               content: '';
               position: fixed;
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               background: rgba(0, 0, 0, 0.3);
               z-index: -1;
           }
       }

       /* Improve existing mobile styles */
       @media (max-width: 768px) {
           .country-flags-container {
               flex-direction: column;
               gap: 6px;
           }

           .country-flag-item {
               min-width: auto;
               width: 140px;
           }

           .container {
               padding-left: 15px;
               padding-right: 15px;
           }
       }
   </style>
   <div class="country-flags-header">
       <div class="container">
           <div class="country-flags-container">
               <a href="uae/index.php" class="country-flag-item">
                   <img src="assets/img/uae.png" alt="UAE Flag">
                   <span>UAE</span>
               </a>
               <a href="africa/index.php" class="country-flag-item">
                   <img src="assets/img/africa.png" alt="Africa Flag">
                   <span>Africa</span>
               </a>
               <a href="australia/index.php" class="country-flag-item">
                   <img src="assets/img/australia.png" alt="Australia Flag">
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
                   <a class="navbar-brand" href="index.php">
                       <img src="assets/img/logo.jpg" class="logo" alt="Logo">
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
                                               <li><a href="./lp/website-design-development.php">Business Website Development</a></li>
                                               <li><a href="./lp/website-design-development.php">Corporate Website Development</a></li>
                                               <li><a href="./lp/website-design-development.php">Custom Website Development</a></li>
                                               <li><a href="./lp/website-design-development.php">WordPress Website Development</a></li>
                                               <li><a href="./lp/website-design-development.php">E-Commerce Website Development</a></li>
                                               <li><a href="./lp/website-design-development.php">Landing Page Design</a></li>
                                               <li><a href="./lp/website-design-development.php">Website Maintenance</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 2 -->
                                       <div class="col-menu col-lg-2">
                                           <h6 class="title">App Development</h6>
                                           <ul class="menu-col">
                                               <li><a href="./lp/app-development.php">Android App Development</a></li>
                                               <li><a href="./lp/app-development.php">iOS App Development</a></li>
                                               <li><a href="./lp/app-development.php">Hybrid App Development</a></li>
                                               <li><a href="./lp/app-development.php">Flutter App Development</a></li>
                                               <li><a href="./lp/app-development.php">Web Application Development</a></li>
                                               <li><a href="./lp/app-development.php">SaaS Development</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 3 -->
                                       <div class="col-menu col-lg-2">
                                           <h6 class="title">Digital Marketing</h6>
                                           <ul class="menu-col">
                                               <li><a href="./services/seo-auditing-services.php">Search Engine Optimization (SEO)</a></li>
                                               <li><a href="./services/seo-articles-writing.php">Local SEO Services</a></li>
                                               <li><a href="./services/google-search-ads-services.php">Google Ads (PPC)</a></li>
                                               <li><a href="./services/technical-content-writing.php">Meta Ads Management</a></li>
                                               <li><a href="./services/content-marketing-services.php">LinkedIn Ads</a></li>
                                               <li><a href="./services/social-media-marketing.php">Social Media Marketing</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 4 -->
                                       <div class="col-menu col-lg-2">
                                           <h6 class="title">Content & eLearning</h6>
                                           <ul class="menu-col">
                                               <li><a href="./services/website-content-writing.php">Website Content Writing</a></li>
                                               <li><a href="./services/technical-content-writing.php">Technical Content Writing</a></li>
                                               <li><a href="./services/seo-articles-writing.php">SEO Content Writing</a></li>
                                               <li><a href="./services/custom-elearning-development.php">eLearning Content Development</a></li>
                                               <li><a href="./services/onboarding-videos.php">Instructional Design</a></li>
                                               <li><a href="./services/logistics-content-marketing.php">LMS Development</a></li>
                                           </ul>
                                       </div>

                                       <!-- Column 5 -->
                                       <div class="col-menu col-lg-2">
                                           <h6 class="title">AI & Intelligent Automation</h6>
                                           <ul class="menu-col">
                                               <li><a href="./services/whatsapp-marketing-and-automation.php">WhatsApp Automation</a></li>
                                               <li><a href="./services/case-study-website-development.php">AI Chatbot Development</a></li>
                                               <li><a href="./services/IT-Outsourcing-Services.php">Business Process Automation</a></li>
                                               <li><a href="./services/partner-enablement.php">AI Marketing Automation</a></li>
                                               <li><a href="./services/content-team-outsourcing.php">CRM Automation</a></li>
                                               <li><a href="./services/compliance-automation.php">Data Annotation Services</a></li>
                                               <li><a href="./services/logistics-content-marketing.php">AI Data Labeling</a></li>
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
                               <li><a href="./services/logistics-content-marketing.php">Logistics & Supply Chain</a></li>
                               <li><a href="./services/Industries-We-Serve-Manufacturing.php">Manufacturing</a></li>
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
                           <a href="./resources/all-blogs.php">Case Studies</a>
                       </li>

                       <!-- CONTACT -->
                       <li>
                           <a href="/contact-us.php">Contact Us</a>
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