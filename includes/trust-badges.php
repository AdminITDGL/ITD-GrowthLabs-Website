<?php
/**
 * Trust badges strip — third-party verification signals.
 *
 * Usage:
 *   <?php $tb_compact = false; include('includes/trust-badges.php'); ?>
 *
 * Set $tb_compact = true to render the horizontal slim row (no heading).
 * Default mode is the full panel with heading.
 */
$tb_compact = isset($tb_compact) ? (bool)$tb_compact : false;
?>
<section class="tb-strip" aria-label="Third-party verification and reviews">
    <div class="container">
        <?php if (!$tb_compact): ?>
        <div style="text-align:center;margin-bottom:26px;">
            <span style="display:inline-block;font-size:11px;letter-spacing:2px;text-transform:uppercase;color:#0a66c2;font-weight:800;background:#e8f0fe;padding:5px 14px;border-radius:18px;">Verified by independent platforms</span>
            <h3 style="font-size:22px;font-weight:800;color:#0a1629;margin-top:14px;margin-bottom:6px;">Don&rsquo;t take our word for it.</h3>
            <p style="font-size:14.5px;color:#5a6473;max-width:560px;margin:0 auto;">Find our verified profile, reviews and project history on the independent platforms that vet B2B technology partners.</p>
        </div>
        <?php endif; ?>

        <div class="tb-grid">
            <a class="tb-card" href="https://clutch.co/profile/itd-growthlabs" target="_blank" rel="noopener nofollow"
               onclick="if(typeof gtag==='function')gtag('event','trust_click',{platform:'clutch',source:'<?php echo htmlspecialchars($tb_source ?? 'unknown', ENT_QUOTES); ?>'});">
                <div class="tb-card-logo" style="background:linear-gradient(135deg,#17313b,#0a1922);">
                    <span style="color:#ff4d3f;font-weight:800;font-size:22px;letter-spacing:0.5px;">Clutch</span>
                </div>
                <div class="tb-card-body">
                    <div class="tb-label">Verified B2B agency profile</div>
                    <div class="tb-meta">See our Clutch profile, ratings &amp; reviews &rarr;</div>
                </div>
            </a>

            <a class="tb-card" href="https://www.designrush.com/submit/review/itd-growthlabs" target="_blank" rel="noopener nofollow"
               onclick="if(typeof gtag==='function')gtag('event','trust_click',{platform:'designrush',source:'<?php echo htmlspecialchars($tb_source ?? 'unknown', ENT_QUOTES); ?>'});">
                <div class="tb-card-logo" style="background:linear-gradient(135deg,#0d47a1,#1565c0);">
                    <span style="color:#fff;font-weight:800;font-size:18px;letter-spacing:0.3px;">DesignRush</span>
                </div>
                <div class="tb-card-body">
                    <div class="tb-label">Listed on DesignRush</div>
                    <div class="tb-meta">See our DesignRush profile &amp; reviews &rarr;</div>
                </div>
            </a>

            <a class="tb-card" href="https://www.linkedin.com/company/itd-growthlabs/" target="_blank" rel="noopener nofollow"
               onclick="if(typeof gtag==='function')gtag('event','trust_click',{platform:'linkedin',source:'<?php echo htmlspecialchars($tb_source ?? 'unknown', ENT_QUOTES); ?>'});">
                <div class="tb-card-logo" style="background:#0a66c2;">
                    <i class="fab fa-linkedin" style="color:#fff;font-size:32px;"></i>
                </div>
                <div class="tb-card-body">
                    <div class="tb-label">LinkedIn Company Page</div>
                    <div class="tb-meta">Team, posts &amp; engagement history &rarr;</div>
                </div>
            </a>

            <a class="tb-card" href="https://mindsynevolution.ai/" target="_blank" rel="noopener nofollow"
               onclick="if(typeof gtag==='function')gtag('event','trust_click',{platform:'mindsyn',source:'<?php echo htmlspecialchars($tb_source ?? 'unknown', ENT_QUOTES); ?>'});">
                <div class="tb-card-logo" style="background:linear-gradient(135deg,#1a1240,#2c1670);">
                    <i class="fas fa-atom" style="color:#c4b5fd;font-size:28px;"></i>
                </div>
                <div class="tb-card-body">
                    <div class="tb-label">Live deep-tech engagement</div>
                    <div class="tb-meta">Mindsyn Evolution &middot; quantum-era data platform &rarr;</div>
                </div>
            </a>
        </div>
    </div>
</section>

<style>
.tb-strip { padding: 50px 0; background: #f8fafc; border-top: 1px solid #eef1f5; border-bottom: 1px solid #eef1f5; }
.tb-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
.tb-card { display: flex; align-items: center; gap: 14px; background: #fff; border: 1px solid #e8ecf1; border-radius: 12px; padding: 16px 18px; text-decoration: none; color: #0a1629; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease; }
.tb-card:hover { transform: translateY(-3px); box-shadow: 0 12px 28px rgba(10,22,41,0.08); border-color: #d4dae3; color: #0a1629; }
.tb-card-logo { flex: 0 0 56px; width: 56px; height: 56px; border-radius: 10px; display: flex; align-items: center; justify-content: center; padding: 4px; }
.tb-card-body { flex: 1; min-width: 0; }
.tb-label { font-size: 14px; font-weight: 700; color: #0a1629; line-height: 1.35; margin-bottom: 2px; }
.tb-meta { font-size: 12.5px; color: #5a6473; line-height: 1.45; }
@media (max-width: 992px) { .tb-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 480px) { .tb-grid { grid-template-columns: 1fr; } .tb-card-logo { flex: 0 0 50px; width: 50px; height: 50px; } }
</style>
