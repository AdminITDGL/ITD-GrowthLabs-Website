#!/usr/bin/env python3
"""Update all-blogs.php and sitemap.xml with the 100 new blog posts."""
import os, re

BASE_DIR = os.path.dirname(os.path.abspath(__file__))

# Blog data: (filename, title, category)
BLOGS = [
    ("Logistics_App_Development_Cost_in_India_2026.php", "Logistics App Development Cost in India 2026 — Complete Pricing Guide", "App Development"),
    ("Courier_Management_Software_Features_Benefits_ROI.php", "Courier Management Software: Features, Benefits & ROI", "App Development"),
    ("Fleet_Management_App_Development_Guide_2026.php", "Fleet Management App Development: Complete Guide for 2026", "App Development"),
    ("How_to_Build_a_Delivery_Tracking_App_Complete_Guide.php", "How to Build a Delivery Tracking App — Step-by-Step Guide", "App Development"),
    ("Best_Logistics_App_Development_Company_in_India.php", "Best Logistics App Development Company in India", "App Development"),
    ("Custom_Warehouse_Management_App_Development.php", "Custom Warehouse Management App Development", "App Development"),
    ("Ecommerce_App_Development_Cost_and_Timeline_2026.php", "E-Commerce App Development Cost and Timeline in 2026", "App Development"),
    ("SaaS_App_Development_MVP_to_Scale_Guide.php", "SaaS App Development: From MVP to Scale", "App Development"),
    ("Healthcare_App_Development_Compliance_Guide.php", "Healthcare App Development: Compliance Guide", "App Development"),
    ("Fintech_App_Development_Security_Compliance.php", "Fintech App Development: Security & Compliance", "App Development"),
    ("Real_Estate_App_Development_Features_That_Drive_Leads.php", "Real Estate App Development: Features That Drive Leads", "App Development"),
    ("Education_App_Development_LMS_Platform_Guide.php", "Education App Development: LMS Platform Guide", "App Development"),
    ("Website_Development_Cost_in_India_2026_Complete_Guide.php", "Website Development Cost in India 2026 — Complete Guide", "Website Development"),
    ("WordPress_vs_Custom_Website_Which_Is_Better.php", "WordPress vs Custom Website: Which Is Better?", "Website Development"),
    ("Ecommerce_Website_Development_Guide_D2C_Brands.php", "E-Commerce Website Development Guide for D2C Brands", "Website Development"),
    ("Corporate_Website_Redesign_Checklist_2026.php", "Corporate Website Redesign Checklist for 2026", "Website Development"),
    ("Website_Development_Company_Mumbai_How_to_Choose.php", "Website Development Company in Mumbai — How to Choose", "Website Development"),
    ("Best_CMS_for_Business_Websites_2026.php", "Best CMS for Business Websites in 2026", "Website Development"),
    ("Website_Speed_Optimization_Complete_Guide.php", "Website Speed Optimization: Complete Guide", "Website Development"),
    ("Landing_Page_Design_That_Converts_Best_Practices.php", "Landing Page Design That Converts: Best Practices", "Website Development"),
    ("B2B_Website_Design_Lead_Generation_Focused.php", "B2B Website Design: Lead Generation Focused", "Website Development"),
    ("Website_Maintenance_Why_It_Matters_for_SEO.php", "Website Maintenance: Why It Matters for SEO", "Website Development"),
    ("Website_Development_for_Startups_MVP_Approach.php", "Website Development for Startups: MVP Approach", "Website Development"),
    ("Website_Cost_USA_UK_India_Comparison.php", "Website Cost: USA vs UK vs India Comparison", "Website Development"),
    ("Digital_Marketing_Agency_Mumbai_What_to_Look_For.php", "Digital Marketing Agency in Mumbai: What to Look For", "Digital Marketing"),
    ("SEO_vs_PPC_Which_Is_Better_for_B2B.php", "SEO vs PPC: Which Is Better for B2B Companies?", "Digital Marketing"),
    ("Local_SEO_Guide_Businesses_India.php", "Local SEO Guide for Businesses in India", "Digital Marketing"),
    ("Google_Ads_Management_Reducing_Cost_Per_Lead.php", "Google Ads Management: Reducing Cost Per Lead", "Digital Marketing"),
    ("Social_Media_Marketing_ROI_Measuring_What_Matters.php", "Social Media Marketing ROI: Measuring What Matters", "Digital Marketing"),
    ("Content_Marketing_Strategy_B2B_Companies.php", "Content Marketing Strategy for B2B Companies", "Digital Marketing"),
    ("LinkedIn_Marketing_B2B_Lead_Generation.php", "LinkedIn Marketing for B2B Lead Generation", "Digital Marketing"),
    ("SEO_Audit_Checklist_2026.php", "SEO Audit Checklist for 2026", "Digital Marketing"),
    ("Digital_Marketing_for_Startups_on_a_Budget.php", "Digital Marketing for Startups on a Budget", "Digital Marketing"),
    ("How_to_Choose_Digital_Marketing_Company_India.php", "How to Choose a Digital Marketing Company in India", "Digital Marketing"),
    ("Email_Marketing_Automation_Complete_Guide.php", "Email Marketing Automation: Complete Guide", "Digital Marketing"),
    ("Digital_Transformation_Logistics_Industry_Guide.php", "Digital Transformation in the Logistics Industry", "App Development"),
    ("Courier_Management_Technology_India.php", "How Technology Is Reshaping Courier Management in India", "App Development"),
    ("Supply_Chain_Visibility_Software_Solutions.php", "Supply Chain Visibility: Software Solutions That Work", "App Development"),
    ("Route_Optimization_Software_Delivery.php", "Route Optimization Software for Delivery Companies", "App Development"),
    ("Last_Mile_Delivery_Technology_Trends_2026.php", "Last-Mile Delivery Technology Trends for 2026", "App Development"),
    ("Logistics_Company_Website_Essential_Features.php", "Logistics Company Website: Essential Features", "Website Development"),
    ("How_Logistics_Companies_Generate_Leads_Online.php", "How Logistics Companies Generate Leads Online", "Digital Marketing"),
    ("Warehouse_Management_System_Build_vs_Buy.php", "Warehouse Management System: Build vs Buy", "App Development"),
    ("Healthcare_Website_Design_Best_Practices.php", "Healthcare Website Design: Best Practices", "Website Development"),
    ("Fintech_Website_Compliance_Checklist.php", "Fintech Website Compliance Checklist", "Website Development"),
    ("Ecommerce_SEO_Strategy_D2C_Brands.php", "E-Commerce SEO Strategy for D2C Brands", "Digital Marketing"),
    ("Real_Estate_Digital_Marketing_Lead_Generation.php", "Real Estate Digital Marketing: Lead Generation Guide", "Digital Marketing"),
    ("Education_Website_Design_Student_Enrollment.php", "Education Website Design for Student Enrollment", "Website Development"),
    ("Manufacturing_Company_Digital_Presence.php", "Manufacturing Company Digital Presence Guide", "Website Development"),
    ("SaaS_Marketing_Content_Strategy.php", "SaaS Marketing: Content Strategy That Works", "Digital Marketing"),
    ("Professional_Services_Website_Design.php", "Professional Services Website Design", "Website Development"),
    ("Startup_Digital_Strategy_Budget.php", "Startup Digital Strategy on a Budget", "Digital Marketing"),
    ("Restaurant_Website_Ordering_App_Guide.php", "Restaurant Website and Ordering App Guide", "Website Development"),
    ("Retail_Digital_Transformation_Guide.php", "Retail Digital Transformation Guide", "Website Development"),
    ("BFSI_Digital_Marketing_Compliance.php", "BFSI Digital Marketing: Compliance Strategies", "Digital Marketing"),
    ("Hospitality_Industry_Digital_Marketing.php", "Hospitality Industry Digital Marketing", "Digital Marketing"),
    ("Construction_Company_Website_Essentials.php", "Construction Company Website Essentials", "Website Development"),
    ("Automotive_Industry_Digital_Marketing.php", "Automotive Industry Digital Marketing", "Digital Marketing"),
    ("AgriTech_App_Development_Opportunities.php", "AgriTech App Development Opportunities", "App Development"),
    ("Travel_Tourism_Website_App_Development.php", "Travel and Tourism Website & App Development", "Website Development"),
    ("Website_Development_Company_USA_Complete_Guide.php", "Website Development Company in USA — Complete Guide", "Website Development"),
    ("App_Development_Company_UK_What_to_Expect.php", "App Development Company in UK — What to Expect", "App Development"),
    ("Digital_Marketing_Agency_Dubai_UAE.php", "Digital Marketing Agency in Dubai UAE", "Digital Marketing"),
    ("Best_Website_Development_Company_Australia.php", "Best Website Development Company in Australia", "Website Development"),
    ("IT_Outsourcing_India_Guide_US_Companies.php", "IT Outsourcing to India: Guide for US Companies", "App Development"),
    ("Website_Development_Company_Delhi_NCR.php", "Website Development Company in Delhi NCR", "Website Development"),
    ("App_Development_Company_Bangalore.php", "App Development Company in Bangalore", "App Development"),
    ("Digital_Marketing_Agency_Hyderabad.php", "Digital Marketing Agency in Hyderabad", "Digital Marketing"),
    ("Website_Development_Company_Pune.php", "Website Development Company in Pune", "Website Development"),
    ("Best_Software_Development_Company_Mumbai.php", "Best Software Development Company in Mumbai", "App Development"),
    ("Web_Development_Outsourcing_India_vs_Philippines.php", "Web Development Outsourcing: India vs Philippines", "Website Development"),
    ("Mobile_App_Development_Company_USA.php", "Mobile App Development Company in USA", "App Development"),
    ("Digital_Marketing_UK_Businesses_India_Partner.php", "Digital Marketing for UK Businesses: India Partner", "Digital Marketing"),
    ("SEO_Services_Australian_Businesses.php", "SEO Services for Australian Businesses", "Digital Marketing"),
    ("App_Development_Cost_USA_vs_India.php", "App Development Cost: USA vs India Comparison", "App Development"),
    ("Website_Development_Company_Africa_Nigeria_Kenya.php", "Website Development for African Businesses", "Website Development"),
    ("Digital_Marketing_Trends_Middle_East_2026.php", "Digital Marketing Trends in the Middle East 2026", "Digital Marketing"),
    ("Hire_Dedicated_Developers_India_Guide.php", "Hire Dedicated Developers in India — Guide", "App Development"),
    ("Offshore_Software_Development_India_Advantages.php", "Offshore Software Development in India", "App Development"),
    ("IT_Services_Company_Mumbai_Full_Guide.php", "IT Services Company in Mumbai — Full Guide", "App Development"),
    ("How_AI_Is_Changing_Website_Development_2026.php", "How AI Is Changing Website Development in 2026", "Website Development"),
    ("ChatGPT_for_Business_Practical_Use_Cases.php", "ChatGPT for Business: Practical Use Cases", "Digital Marketing"),
    ("What_Is_GEO_Why_Businesses_Need_It.php", "What Is GEO and Why Your Business Needs It", "Digital Marketing"),
    ("Future_of_Mobile_Apps_Trends_2026_2027.php", "Future of Mobile Apps: Trends for 2026-2027", "App Development"),
    ("Headless_CMS_When_Why_Use_It.php", "Headless CMS: When and Why to Use It", "Website Development"),
    ("Progressive_Web_Apps_vs_Native_Apps.php", "Progressive Web Apps vs Native Apps", "App Development"),
    ("API_First_Development_Business_Benefits.php", "API-First Development: Business Benefits", "App Development"),
    ("How_to_Measure_Website_ROI.php", "How to Measure Website ROI", "Website Development"),
    ("Digital_Marketing_KPIs_Every_CEO_Should_Track.php", "Digital Marketing KPIs Every CEO Should Track", "Digital Marketing"),
    ("What_Makes_a_Great_Business_App_Case_Study.php", "What Makes a Great Business App: Case Study", "App Development"),
    ("Why_Businesses_Fail_Online_Common_Mistakes.php", "Why Businesses Fail Online: Common Mistakes", "Digital Marketing"),
    ("Website_Redesign_When_You_Need_It.php", "Website Redesign: When You Actually Need It", "Website Development"),
    ("Cost_of_Not_Having_Mobile_App.php", "The Cost of NOT Having a Mobile App", "App Development"),
    ("How_to_Build_Digital_Marketing_Team.php", "How to Build a Digital Marketing Team", "Digital Marketing"),
    ("Outsourcing_vs_Inhouse_Development.php", "Outsourcing vs In-House Development", "App Development"),
    ("How_SEO_Content_Marketing_Work_Together.php", "How SEO and Content Marketing Work Together", "Digital Marketing"),
    ("UX_Design_Conversion_Rate_Optimization.php", "UX Design and Conversion Rate Optimization", "Website Development"),
    ("Website_Security_Business_Reputation.php", "Website Security and Business Reputation", "Website Development"),
    ("Prepare_Business_AI_Search_Engines.php", "How to Prepare Your Business for AI Search Engines", "Digital Marketing"),
    ("Voice_Search_Optimization_Content.php", "Voice Search Optimization for 2026", "Digital Marketing"),
]

# ============================================================
# 1. UPDATE all-blogs.php
# ============================================================
allblogs_path = os.path.join(BASE_DIR, 'resources', 'all-blogs.php')
with open(allblogs_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Generate HTML entries for 100 new blogs
entries_html = ''
for filename, title, category in BLOGS:
    entries_html += f'''                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="blog-style-one">
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">ITD GrowthLabs</a>
                                    </li>
                                    <li>
                                        April 2026
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="../resources/{filename}">{title}</a></h3>
                            <a href="../resources/{filename}" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

'''

# Insert after the first "<!-- Single Item -->" row opening (after <div class="row">)
insert_marker = '                <!-- Single Item -->\n                <div class="col-lg-4 col-md-6 mb-50">'
insert_pos = content.find(insert_marker)
if insert_pos > 0:
    content = content[:insert_pos] + entries_html + content[insert_pos:]
    with open(allblogs_path, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"all-blogs.php: Added {len(BLOGS)} entries")
else:
    print("ERROR: Could not find insertion point in all-blogs.php")

# ============================================================
# 2. UPDATE sitemap.xml
# ============================================================
sitemap_path = os.path.join(BASE_DIR, 'sitemap.xml')
with open(sitemap_path, 'r', encoding='utf-8') as f:
    sitemap = f.read()

# Generate new URL entries
new_urls = ''
for filename, title, category in BLOGS:
    new_urls += f'''  <url>
    <loc>https://itdgrowthlabs.com/resources/{filename}</loc>
    <lastmod>2026-04-11</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.60</priority>
  </url>
'''

# Insert before </urlset>
sitemap = sitemap.replace('</urlset>', new_urls + '</urlset>')
with open(sitemap_path, 'w', encoding='utf-8') as f:
    f.write(sitemap)
print(f"sitemap.xml: Added {len(BLOGS)} URLs")
