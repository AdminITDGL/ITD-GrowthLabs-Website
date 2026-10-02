<?php
/**
 * Home — Top mixed trust band.
 * Positioned right after the hero. Mixes Real Estate developer logos +
 * ITD D2C/B2B/Tech clients + headline numbers. First proof visitors see.
 */
$itdgl_mixed_logos = [
  // Real estate developers — surfaced first because the user flagged them as high-priority proof
  ['src'=>'/assets/img/realestate-clients/lodha.png',                   'alt'=>'Lodha',                    'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/godrej-properties.jpg',       'alt'=>'Godrej Properties',        'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/mahindra-lifespaces.png',     'alt'=>'Mahindra Lifespaces',      'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/prestige-group.png',          'alt'=>'Prestige Group',           'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/sobha-realty.png',            'alt'=>'Sobha Realty',             'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/danube-properties.png',       'alt'=>'Danube Properties',        'cat'=>'Real Estate'],
  // ITD direct clients — mixed D2C + B2B + Tech
  ['src'=>'/assets/img/clients/mindsyn.png',                            'alt'=>'MindSyn',                  'cat'=>'Technology'],
  ['src'=>'/assets/img/clients/courierdost.png',                        'alt'=>'CourierDost',              'cat'=>'Logistics / SaaS'],
  ['src'=>'/assets/img/clients/acx.png',                                'alt'=>'ACX',                      'cat'=>'B2B'],
  ['src'=>'/assets/img/clients/transline-cargo.png',                    'alt'=>'Transline Air Cargo',      'cat'=>'Logistics'],
  ['src'=>'/assets/img/clients/nex-navalai.png',                        'alt'=>'NEX Navalai Enterprises',  'cat'=>'B2B'],
  ['src'=>'/assets/img/clients/cariesco-group.png',                     'alt'=>'Cariesco Group',           'cat'=>'B2B'],
  ['src'=>'/assets/img/clients/technocrats.png',                        'alt'=>'Technocrats',              'cat'=>'B2B'],
  ['src'=>'/assets/img/clients/m-four-development.png',                 'alt'=>'M Four Development',       'cat'=>'Real Estate'],
  ['src'=>'/assets/img/clients/caper.png',                              'alt'=>'Caper',                    'cat'=>'D2C'],
  ['src'=>'/assets/img/clients/pruf.jpg',                               'alt'=>'PRUF',                     'cat'=>'D2C'],
  ['src'=>'/assets/img/clients/presidence.png',                         'alt'=>'Presidence',               'cat'=>'B2B'],
  ['src'=>'/assets/img/clients/travelkit.png',                          'alt'=>'TravelKit',                'cat'=>'D2C'],
  // Round out the strip with the remaining RE developers
  ['src'=>'/assets/img/realestate-clients/arihant-superstructures.jpg', 'alt'=>'Arihant Superstructures',  'cat'=>'Real Estate'],
  ['src'=>'/assets/img/realestate-clients/m4-group.png',                'alt'=>'M4 Group',                 'cat'=>'Real Estate'],
];
?>
<style>
  .htb-wrap{background:linear-gradient(135deg,#0f1e3d 0%,#1e3a8a 55%,#4f46e5 100%);color:#fff;padding:46px 20px 36px;position:relative;overflow:hidden;}
  .htb-wrap::before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 85% 20%,rgba(200,155,60,0.22) 0%,transparent 55%);pointer-events:none;}
  .htb-container{max-width:1240px;margin:0 auto;position:relative;}
  .htb-eyebrow{display:inline-flex;align-items:center;gap:8px;background:rgba(200,155,60,0.22);color:#fde68a;padding:5px 14px;border-radius:99px;font-size:11.5px;font-weight:800;letter-spacing:0.6px;text-transform:uppercase;margin-bottom:12px;border:1px solid rgba(200,155,60,0.35);}
  .htb-head{display:grid;grid-template-columns:1.4fr 1fr;gap:30px;align-items:center;margin-bottom:28px;}
  .htb-head h2{color:#fff;font-size:26px;margin:0 0 8px;font-weight:800;line-height:1.3;letter-spacing:-0.01em;}
  .htb-head p{color:#dbeafe;font-size:14.5px;margin:0;line-height:1.6;}
  .htb-nums{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;}
  .htb-num{text-align:center;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.14);padding:14px 8px;border-radius:10px;}
  .htb-num .n{font-size:22px;font-weight:800;color:#fbbf24;line-height:1;letter-spacing:-0.02em;}
  .htb-num .l{font-size:10.5px;color:#dbeafe;margin-top:5px;letter-spacing:0.3px;text-transform:uppercase;font-weight:600;}

  .htb-logos{display:grid;grid-template-columns:repeat(10,1fr);gap:10px;}
  .htb-logo{background:#fff;border-radius:8px;padding:10px 8px;height:66px;display:flex;align-items:center;justify-content:center;transition:transform .18s,box-shadow .18s;position:relative;}
  .htb-logo:hover{transform:translateY(-2px);box-shadow:0 10px 20px rgba(0,0,0,0.25);}
  .htb-logo img{max-width:100%;max-height:44px;width:auto;height:auto;object-fit:contain;}
  .htb-logo .cat-tag{position:absolute;bottom:-6px;left:50%;transform:translateX(-50%);background:#0f1e3d;color:#fde68a;font-size:8.5px;font-weight:800;letter-spacing:0.4px;text-transform:uppercase;padding:1px 6px;border-radius:99px;opacity:0;transition:opacity .18s;white-space:nowrap;}
  .htb-logo:hover .cat-tag{opacity:1;}

  .htb-attr{color:#94a3b8;font-size:11px;max-width:900px;margin:20px auto 0;line-height:1.6;text-align:center;}

  @media (max-width:1100px){
    .htb-logos{grid-template-columns:repeat(5,1fr);}
    .htb-head{grid-template-columns:1fr;gap:18px;}
    .htb-nums{grid-template-columns:repeat(4,1fr);}
  }
  @media (max-width:600px){
    .htb-wrap{padding:36px 16px 30px;}
    .htb-head h2{font-size:20px;}
    .htb-logos{grid-template-columns:repeat(3,1fr);}
    .htb-nums{grid-template-columns:repeat(2,1fr);}
  }
</style>
<section class="htb-wrap" aria-label="Brands we support">
  <div class="htb-container">
    <div class="htb-head">
      <div>
        <div class="htb-eyebrow"><i class="fas fa-trophy"></i> Real estate, D2C, B2B &amp; Technology</div>
        <h2>Trusted by Leading Developers, D2C Brands &amp; B2B Companies &mdash; India &amp; GCC</h2>
        <p>From Lodha, Godrej Properties, Mahindra Lifespaces, Prestige Group to fast-moving D2C and B2B brands &mdash; our team supports marketing programmes through direct engagements and partnership channels.</p>
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
    <p class="htb-attr">All names and logos shown are trademarks of their respective owners and are used solely to indicate the category and scale of brands we support through direct engagements and partnership channels. Logos do not imply endorsement, exclusive representation, or active contractual retainer with ITD GrowthLabs.</p>
  </div>
</section>
