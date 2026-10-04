<?php
/**
 * Home — Top mixed trust band.
 * Positioned right after the hero. Mixes D2C + B2B + Technology clients
 * (listed first) with Real Estate developers (listed after) + headline
 * numbers. First proof visitors see.
 *
 * Ordering (per user ask): D2C brands + B2B companies come first, then
 * real estate developers.
 */
$itdgl_mixed_logos = [
  // D2C + B2B + Technology clients first
  ['src'=>'/assets/img/clients/mindsyn.png',                            'alt'=>'MindSyn',                  'cat'=>'Technology'],
  ['src'=>'/assets/img/clients/caper.png',                              'alt'=>'Caper',                    'cat'=>'D2C'],
  ['src'=>'/assets/img/clients/pruf.jpg',                               'alt'=>'PRUF',                     'cat'=>'D2C'],
  ['src'=>'/assets/img/clients/travelkit.png',                          'alt'=>'TravelKit',                'cat'=>'D2C'],
  ['src'=>'/assets/img/clients/courierdost.png',                        'alt'=>'CourierDost',              'cat'=>'Logistics / SaaS'],
  ['src'=>'/assets/img/clients/acx.png',                                'alt'=>'ACX',                      'cat'=>'B2B'],
  ['src'=>'/assets/img/clients/transline-cargo.png',                    'alt'=>'Transline Air Cargo',      'cat'=>'Logistics'],
  ['src'=>'/assets/img/clients/nex-navalai.png',                        'alt'=>'NEX Navalai Enterprises',  'cat'=>'B2B'],
  ['src'=>'/assets/img/clients/cariesco-group.png',                     'alt'=>'Cariesco Group',           'cat'=>'B2B'],
  ['src'=>'/assets/img/clients/technocrats.png',                        'alt'=>'Technocrats',              'cat'=>'B2B'],
  ['src'=>'/assets/img/clients/m-four-development.png',                 'alt'=>'M Four Development',       'cat'=>'Real Estate'],
  ['src'=>'/assets/img/clients/presidence.png',                         'alt'=>'Presidence',               'cat'=>'B2B'],
  // Then real estate developer brands
  ['src'=>'/assets/img/realestate-clients/lodha.png',                   'alt'=>'Lodha',                    'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/godrej-properties.jpg',       'alt'=>'Godrej Properties',        'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/mahindra-lifespaces.png',     'alt'=>'Mahindra Lifespaces',      'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/prestige-group.png',          'alt'=>'Prestige Group',           'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/sobha-realty.png',            'alt'=>'Sobha Realty',             'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/danube-properties.png',       'alt'=>'Danube Properties',        'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/arihant-superstructures.jpg', 'alt'=>'Arihant Superstructures',  'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/m4-group.png',                'alt'=>'M4 Group',                 'cat'=>'Real Estate'],
];
?>
<style>
  .htb-wrap{background:linear-gradient(135deg,#0f1e3d 0%,#1e3a8a 55%,#4f46e5 100%);color:#fff;padding:56px 24px 48px;position:relative;overflow:hidden;}
  .htb-wrap::before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 85% 20%,rgba(200,155,60,0.22) 0%,transparent 55%);pointer-events:none;}
  .htb-container{max-width:1280px;margin:0 auto;position:relative;}
  .htb-eyebrow{display:inline-flex;align-items:center;gap:8px;background:rgba(200,155,60,0.22);color:#fde68a;padding:5px 14px;border-radius:99px;font-size:11.5px;font-weight:800;letter-spacing:0.6px;text-transform:uppercase;margin-bottom:12px;border:1px solid rgba(200,155,60,0.35);}
  .htb-head{display:grid;grid-template-columns:1.4fr 1fr;gap:30px;align-items:center;margin-bottom:34px;}
  .htb-head h2{color:#fff;font-size:28px;margin:0 0 8px;font-weight:800;line-height:1.3;letter-spacing:-0.01em;}
  .htb-head p{color:#dbeafe;font-size:14.5px;margin:0;line-height:1.6;}
  .htb-nums{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;}
  .htb-num{text-align:center;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.14);padding:14px 8px;border-radius:10px;}
  .htb-num .n{font-size:22px;font-weight:800;color:#fbbf24;line-height:1;letter-spacing:-0.02em;}
  .htb-num .l{font-size:10.5px;color:#dbeafe;margin-top:5px;letter-spacing:0.3px;text-transform:uppercase;font-weight:600;}

  /* ---- Logos: fewer columns, taller cells, larger images (per user ask) ---- */
  .htb-logos{display:grid;grid-template-columns:repeat(5,1fr);gap:16px;}
  .htb-logo{background:#fff;border-radius:12px;padding:22px 20px;height:140px;display:flex;align-items:center;justify-content:center;transition:transform .18s,box-shadow .18s;position:relative;}
  .htb-logo:hover{transform:translateY(-3px);box-shadow:0 14px 28px rgba(0,0,0,0.3);}
  .htb-logo img{max-width:100%;max-height:92px;width:auto;height:auto;object-fit:contain;}
  .htb-logo .cat-tag{position:absolute;bottom:-7px;left:50%;transform:translateX(-50%);background:#0f1e3d;color:#fde68a;font-size:9px;font-weight:800;letter-spacing:0.4px;text-transform:uppercase;padding:2px 8px;border-radius:99px;opacity:0;transition:opacity .18s;white-space:nowrap;}
  .htb-logo:hover .cat-tag{opacity:1;}

  .htb-attr{color:#94a3b8;font-size:11px;max-width:900px;margin:26px auto 0;line-height:1.6;text-align:center;}

  @media (max-width:1100px){
    .htb-logos{grid-template-columns:repeat(4,1fr);}
    .htb-head{grid-template-columns:1fr;gap:18px;}
    .htb-nums{grid-template-columns:repeat(4,1fr);}
    .htb-logo{height:120px;padding:18px 16px;}
    .htb-logo img{max-height:78px;}
  }
  @media (max-width:720px){
    .htb-wrap{padding:40px 18px 36px;}
    .htb-head h2{font-size:21px;}
    .htb-logos{grid-template-columns:repeat(3,1fr);gap:12px;}
    .htb-logo{height:108px;padding:14px 12px;}
    .htb-logo img{max-height:72px;}
    .htb-nums{grid-template-columns:repeat(2,1fr);}
  }
  @media (max-width:460px){
    .htb-logos{grid-template-columns:repeat(2,1fr);}
    .htb-logo{height:96px;}
    .htb-logo img{max-height:64px;}
  }
</style>
<section class="htb-wrap" aria-label="Brands we support">
  <div class="htb-container">
    <div class="htb-head">
      <div>
        <div class="htb-eyebrow"><i class="fas fa-trophy"></i> D2C &middot; B2B &middot; Technology &middot; Real Estate</div>
        <h2>Trusted by Leading D2C Brands, B2B Companies &amp; Real Estate Developers &mdash; India &amp; GCC</h2>
        <p>From D2C and B2B scale-ups to leading real estate groups &mdash; our team supports marketing programmes through direct engagements and partnership channels.</p>
      </div>
      <div class="htb-nums">
        <div class="htb-num"><div class="n">300+</div><div class="l">Projects</div></div>
        <div class="htb-num"><div class="n">55+</div><div class="l">Team</div></div>
        <div class="htb-num"><div class="n">97%</div><div class="l">Retention</div></div>
        <div class="htb-num"><div class="n">6</div><div class="l">Countries</div></div>
      </div>
    </div>
    <div class="htb-logos">
      <?php foreach ($itdgl_mixed_logos as $logo): ?>
        <div class="htb-logo" title="<?php echo htmlspecialchars($logo['alt'] . ' — ' . $logo['cat'], ENT_QUOTES); ?>">
          <img src="<?php echo htmlspecialchars($logo['src'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($logo['alt'], ENT_QUOTES); ?>" loading="lazy">
          <span class="cat-tag"><?php echo htmlspecialchars($logo['cat'], ENT_QUOTES); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
    <p class="htb-attr">All names and logos shown are trademarks of their respective owners and are used solely to indicate the category and scale of brands we support through direct engagements, partnership channels and joint-venture projects. Logos do not imply endorsement, exclusive representation, or active contractual retainer with ITD GrowthLabs. Full attribution policy: <a href="/legal/client-logo-usage.php" style="color:#fde68a;border-bottom:1px solid rgba(253,230,138,0.4)">Client Logo &amp; Brand Attribution Policy</a>.</p>
  </div>
</section>
