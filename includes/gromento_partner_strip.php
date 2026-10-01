<?php
/**
 * Gromento real-estate partnership strip.
 *
 * - Shows "Real Estate Partner of Gromento" with Gromento's wordmark.
 * - No outbound link to gromento.com — all leads must come to ITD.
 * - Expects an optional Gromento logo asset at assets/img/partners/gromento.png
 *   (if the file is missing, fallback is a text-only wordmark that still looks finished).
 *
 * Include at the top of real-estate landing pages and the homepage banner.
 */
$itdgl_gromento_logo_rel = 'assets/img/partners/gromento.png';
$itdgl_gromento_logo_abs = __DIR__ . '/../' . $itdgl_gromento_logo_rel;
$itdgl_gromento_has_logo = is_file($itdgl_gromento_logo_abs);
?>
<style>
  .itdgl-partner-strip{background:linear-gradient(90deg,#fffbeb 0%,#ffffff 50%,#fffbeb 100%);border-top:1px solid #fde68a;border-bottom:1px solid #fde68a;padding:12px 18px;text-align:center;font-size:14px;color:#0f1e3d;line-height:1.5;}
  .itdgl-partner-strip .ps-tag{display:inline-block;background:#0f1e3d;color:#fde68a;padding:3px 10px;border-radius:99px;font-size:10.5px;font-weight:800;letter-spacing:0.5px;text-transform:uppercase;margin-right:10px;vertical-align:middle;}
  .itdgl-partner-strip .ps-brand{font-weight:800;color:#c89b3c;letter-spacing:0.3px;margin:0 4px;font-size:15px;vertical-align:middle;}
  .itdgl-partner-strip .ps-logo{height:22px;width:auto;vertical-align:middle;margin:-2px 2px 0 2px;}
  .itdgl-partner-strip .ps-note{color:#64748b;margin-left:6px;font-size:12.5px;}
  @media (max-width:640px){.itdgl-partner-strip{font-size:12.5px;padding:10px 14px;}.itdgl-partner-strip .ps-note{display:block;margin:4px 0 0;}}
</style>
<div class="itdgl-partner-strip">
  <span class="ps-tag">Partnership</span>
  Real Estate Partner of
  <?php if ($itdgl_gromento_has_logo): ?>
    <img src="/<?php echo htmlspecialchars($itdgl_gromento_logo_rel, ENT_QUOTES); ?>" alt="Gromento" class="ps-logo">
  <?php else: ?>
    <span class="ps-brand">Gromento</span>
  <?php endif; ?>
  <span class="ps-note">NRI + luxury real estate campaigns</span>
</div>
