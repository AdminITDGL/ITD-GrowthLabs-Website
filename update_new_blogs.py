#!/usr/bin/env python3
"""Update all-blogs.php and sitemap.xml with the 149 new blog entries."""

import json
import os

BASE_DIR = os.path.dirname(os.path.abspath(__file__))

# Load new blog list
with open(os.path.join(BASE_DIR, "new_blog_list.json"), "r") as f:
    new_blogs = json.load(f)

print(f"Processing {len(new_blogs)} new blogs...")

# ============================================
# 1. Update all-blogs.php
# ============================================
all_blogs_path = os.path.join(BASE_DIR, "resources", "all-blogs.php")
with open(all_blogs_path, "r", encoding="utf-8") as f:
    content = f.read()

# Generate blog card entries
cards = []
months = {
    "01": "January 2026", "02": "February 2026", "03": "March 2026", "04": "April 2026"
}

for blog in new_blogs:
    month_key = blog["date"][5:7]
    month_str = months.get(month_key, "2026")

    card = f'''                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="blog-style-one">
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">ITD GrowthLabs</a>
                                    </li>
                                    <li>
                                        {month_str}
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="../resources/{blog["filename"]}">{blog["title"]}</a></h3>
                            <a href="../resources/{blog["filename"]}" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
'''
    cards.append(card)

new_entries = "\n".join(cards)

# Insert before the closing </div> of the row
marker = "                <!-- End Single Item -->\n\n            </div>"
last_idx = content.rfind(marker)
if last_idx != -1:
    insert_point = last_idx + len("                <!-- End Single Item -->\n")
    content = content[:insert_point] + "\n" + new_entries + "\n" + content[insert_point:]
    with open(all_blogs_path, "w", encoding="utf-8") as f:
        f.write(content)
    print(f"✓ Updated all-blogs.php with {len(new_blogs)} new entries")
else:
    print("✗ Could not find insertion point in all-blogs.php")

# ============================================
# 2. Update sitemap.xml
# ============================================
sitemap_path = os.path.join(BASE_DIR, "sitemap.xml")
with open(sitemap_path, "r", encoding="utf-8") as f:
    sitemap = f.read()

# Generate sitemap entries
sitemap_entries = []
for blog in new_blogs:
    entry = f'''  <url>
    <loc>https://itdgrowthlabs.com/resources/{blog["filename"]}</loc>
    <lastmod>2026-04-14</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.60</priority>
  </url>'''
    sitemap_entries.append(entry)

new_sitemap_xml = "\n".join(sitemap_entries)

# Insert before </urlset>
sitemap = sitemap.replace("</urlset>", new_sitemap_xml + "\n</urlset>")

with open(sitemap_path, "w", encoding="utf-8") as f:
    f.write(sitemap)

print(f"✓ Updated sitemap.xml with {len(new_blogs)} new URLs")
print("\nDone!")
