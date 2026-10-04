<?php
/**
 * Real estate developers strip.
 *
 * Shows a logo marquee of major developer brands we support.
 *
 * IMPORTANT (framing + legal):
 *  - Positioned as "Real estate developers we support" — not "our clients".
 *  - Trademark attribution printed below the strip.
 *  - If a specific developer gives signed consent to be named as a direct
 *    ITD client, upgrade the framing for that logo individually and remove
 *    them from this generic strip.
 */
$itdgl_re_devs = [
    ['slug' => 'lodha',                    'name' => 'Lodha',                     'file' => 'lodha.png'],
    ['slug' => 'godrej-properties',        'name' => 'Godrej Properties',         'file' => 'godrej-properties.jpg'],
    ['slug' => 'mahindra-lifespaces',      'name' => 'Mahindra Lifespaces',       'file' => 'mahindra-lifespaces.png'],
    ['slug' => 'prestige-group',           'name' => 'Prestige Group',            'file' => 'prestige-group.png'],
    ['slug' => 'sobha-realty',             'name' => 'Sobha Realty',              'file' => 'sobha-realty.png'],
    ['slug' => 'danube-properties',        'name' => 'Danube Properties',         'file' => 'danube-properties.png'],
    ['slug' => 'arihant-superstructures',  'name' => 'Arihant Superstructures',   'file' => 'arihant-superstructures.jpg'],
    ['slug' => 'm4-group',                 'name' => 'M4 Group',                  'file' => 'm4-group.png'],
];
?>
<style>
  .itdgl-redev-strip{background:#f8fafc;padding:46px 20px;text-align:center;border-top:1px solid #e2e8f0;border-bottom:1px solid #e2e8f0;}
  .itdgl-redev-strip .eyebrow{display:inline-flex;align-items:center;gap:8px;background:rgba(200,155,60,0.14);color:#8a6520;padding:5px 14px;border-radius:99px;font-size:11.5px;font-weight:800;letter-spacing:0.6px;text-transform:uppercase;margin-bottom:10px;border:1px solid rgba(200,155,60,0.28);}
  .itdgl-redev-strip h3{color:#0f1e3d;font-size:24px;margin:0 0 8px;font-weight:800;line-height:1.3;}
  .itdgl-redev-strip p.sub{color:#64748b;font-size:14.5px;margin:0 auto 26px;max-width:720px;line-height:1.6;}
  .itdgl-redev-grid{max-width:1180px;margin:0 auto;display:grid;grid-template-columns:repeat(8,1fr);gap:16px;align-items:center;}
  .itdgl-redev-grid .cell{background:#fff;border:1px solid #e2e8f0;border-radius:10px;padding:16px 10px;height:92px;display:flex;align-items:center;justify-content:center;transition:transform .18s,box-shadow .18s;}
  .itdgl-redev-grid .cell:hover{transform:translateY(-2px);box-shadow:0 10px 22px rgba(15,30,61,0.08);}
  .itdgl-redev-grid .cell img{max-width:100%;max-height:60px;width:auto;height:auto;object-fit:contain;filter:grayscale(10%);transition:filter .18s;}
  .itdgl-redev-grid .cell:hover img{filter:grayscale(0%);}
  .itdgl-redev-attr{color:#94a3b8;font-size:11.5px;max-width:900px;margin:22px auto 0;line-height:1.6;}
  @media (max-width:900px){.itdgl-redev-grid{grid-template-columns:repeat(4,1fr);}}
  @media (max-width:520px){.itdgl-redev-grid{grid-template-columns:repeat(2,1fr);gap:12px;}.itdgl-redev-strip h3{font-size:19px;}}
</style>
<section class="itdgl-redev-strip">
  <div class="eyebrow"><i class="fas fa-building"></i> Real Estate Clientele</div>
  <h3>Real Estate Developers We Support</h3>
  <p class="sub">Through direct engagements and partnership channels, our team supports marketing programmes for leading residential and commercial developer brands across India and the GCC.</p>
  <div class="itdgl-redev-grid">
    <?php foreach ($itdgl_re_devs as $dev): ?>
      <div class="cell" title="<?php echo htmlspecialchars($dev['name'], ENT_QUOTES); ?>">
        <img src="/assets/img/realestate-clients/<?php echo htmlspecialchars($dev['file'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($dev['name'], ENT_QUOTES); ?>" loading="lazy">
      </div>
    <?php endforeach; ?>
  </div>
  <p class="itdgl-redev-attr">All developer names and logos shown above are trademarks of their respective owners and are used solely to indicate category and scale of brands we actively support through direct engagements, partnership channels and joint-venture projects. Logos do not imply endorsement, exclusive representation, or active contractual retainer with ITD GrowthLabs. Full attribution policy: <a href="/legal/client-logo-usage.php" style="color:#8a6520;border-bottom:1px solid #c89b3c">Client Logo &amp; Brand Attribution Policy</a>.</p>
</section>
