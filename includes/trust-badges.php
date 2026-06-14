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
            <a class="tb-card tb-clutch" href="https://clutch.co/profile/itd-growthlabs" target="_blank" rel="noopener nofollow"
               onclick="if(typeof gtag==='function')gtag('event','trust_click',{platform:'clutch',source:'<?php echo htmlspecialchars($tb_source ?? 'unknown', ENT_QUOTES); ?>'});">
                <div class="tb-card-icon"><i class="fas fa-shield-check"></i></div>
                <div class="tb-card-body">
                    <div class="tb-brand">Clutch</div>
                    <div class="tb-label">Verified B2B agency profile</div>
                    <div class="tb-meta">See ratings &amp; reviews <span class="tb-arrow">&rarr;</span></div>
                </div>
            </a>

            <a class="tb-card tb-designrush" href="https://www.designrush.com/submit/review/itd-growthlabs" target="_blank" rel="noopener nofollow"
               onclick="if(typeof gtag==='function')gtag('event','trust_click',{platform:'designrush',source:'<?php echo htmlspecialchars($tb_source ?? 'unknown', ENT_QUOTES); ?>'});">
                <div class="tb-card-icon"><i class="fas fa-trophy"></i></div>
                <div class="tb-card-body">
                    <div class="tb-brand">DesignRush</div>
                    <div class="tb-label">Listed B2B agency</div>
                    <div class="tb-meta">View profile &amp; reviews <span class="tb-arrow">&rarr;</span></div>
                </div>
            </a>

            <a class="tb-card tb-linkedin" href="https://www.linkedin.com/company/itd-growthlabs/" target="_blank" rel="noopener nofollow"
               onclick="if(typeof gtag==='function')gtag('event','trust_click',{platform:'linkedin',source:'<?php echo htmlspecialchars($tb_source ?? 'unknown', ENT_QUOTES); ?>'});">
                <div class="tb-card-icon"><i class="fab fa-linkedin-in"></i></div>
                <div class="tb-card-body">
                    <div class="tb-brand">LinkedIn</div>
                    <div class="tb-label">Company page &amp; team</div>
                    <div class="tb-meta">Posts &amp; activity <span class="tb-arrow">&rarr;</span></div>
                </div>
            </a>

            <a class="tb-card tb-calendly js-book-call" href="https://calendly.com/itdgrowthlabs-info/30min" target="_blank" rel="noopener"
               onclick="if(typeof gtag==='function')gtag('event','trust_click',{platform:'calendly',source:'<?php echo htmlspecialchars($tb_source ?? 'unknown', ENT_QUOTES); ?>'});">
                <div class="tb-card-icon"><i class="fas fa-calendar-check"></i></div>
                <div class="tb-card-body">
                    <div class="tb-brand">Book a Call</div>
                    <div class="tb-label">Free 30-min consultation</div>
                    <div class="tb-meta">Talk to our team <span class="tb-arrow">&rarr;</span></div>
                </div>
            </a>
        </div>
    </div>
</section>

<style>
.tb-strip { padding: 56px 0; background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%); border-top: 1px solid #eef1f5; border-bottom: 1px solid #eef1f5; }
.tb-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
.tb-card { display: flex; align-items: center; gap: 16px; background: #fff; border: 1px solid #e8ecf1; border-radius: 14px; padding: 22px 20px; text-decoration: none; color: #0a1629; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease; position: relative; overflow: hidden; }
.tb-card::after { content: ''; position: absolute; left: 0; right: 0; top: 0; height: 3px; background: var(--tb-accent, #0a66c2); opacity: 0; transition: opacity .25s ease; }
.tb-card:hover { transform: translateY(-3px); box-shadow: 0 14px 32px rgba(10,22,41,0.10); border-color: var(--tb-accent, #d4dae3); color: #0a1629; }
.tb-card:hover::after { opacity: 1; }
.tb-card:hover .tb-arrow { transform: translateX(4px); }

.tb-card-icon { flex: 0 0 54px; width: 54px; height: 54px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #fff; background: var(--tb-accent, #0a66c2); transition: transform .25s ease; }
.tb-card:hover .tb-card-icon { transform: scale(1.05); }
.tb-card-body { flex: 1; min-width: 0; }
.tb-brand { font-size: 17px; font-weight: 800; color: #0a1629; line-height: 1.2; margin-bottom: 4px; letter-spacing: -0.2px; }
.tb-label { font-size: 13px; font-weight: 600; color: #475569; line-height: 1.35; margin-bottom: 4px; }
.tb-meta { font-size: 12.5px; color: #64748b; line-height: 1.4; display: flex; align-items: center; gap: 5px; }
.tb-arrow { display: inline-block; transition: transform .25s ease; color: var(--tb-accent, #0a66c2); font-weight: 700; }

/* Per-brand accent colours */
.tb-clutch     { --tb-accent: #ee2e26; }
.tb-designrush { --tb-accent: #1c64f2; }
.tb-linkedin   { --tb-accent: #0a66c2; }
.tb-calendly   { --tb-accent: #006bff; }

@media (max-width: 992px) { .tb-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 520px) {
    .tb-grid { grid-template-columns: 1fr; gap: 12px; }
    .tb-card { padding: 18px; }
    .tb-card-icon { flex: 0 0 48px; width: 48px; height: 48px; font-size: 22px; }
    .tb-brand { font-size: 16px; }
}
</style>
