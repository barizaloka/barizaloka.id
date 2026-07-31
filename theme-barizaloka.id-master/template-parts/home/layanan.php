<?php
/**
 * Layanan Section
 */
$ig_url = get_theme_mod('bzk_instagram_url', 'https://instagram.com/namaku.ahla');
?>
<section class="bzk-layanan bzk-section" id="layanan">
    <div class="bzk-container">
        <div class="bzk-section-header">
            <h2>🛠️ <?php esc_html_e('Layanan', 'barizaloka'); ?> — <?php esc_html_e('Butuh Website Profesional?', 'barizaloka'); ?></h2>
            <p><?php esc_html_e('Kami menyediakan jasa pembuatan website profesional yang modern, cepat, dan sesuai kebutuhan bisnis atau organisasi Anda. Dari landing page hingga sistem informasi lengkap.', 'barizaloka'); ?></p>
        </div>
        <div class="bzk-layanan__inner">
            <ul class="bzk-layanan__features">
                <li>🖼️ <?php esc_html_e('Landing page & company profile', 'barizaloka'); ?></li>
                <li>🎨 <?php esc_html_e('Desain modern & responsif', 'barizaloka'); ?></li>
                <li>💬 <?php esc_html_e('Konsultasi & dukungan teknis', 'barizaloka'); ?></li>
            </ul>
            <div class="bzk-layanan__cta-box">
                <h4>💬 <?php esc_html_e('Mulai Konsultasi Gratis', 'barizaloka'); ?></h4>
                <p><?php esc_html_e('Hubungi kami melalui Instagram untuk mendiskusikan kebutuhan website Anda. Kami siap membantu!', 'barizaloka'); ?></p>
                <a href="<?php echo esc_url($ig_url); ?>" class="bzk-btn bzk-btn--primary" target="_blank" rel="noopener">
                    🚀 @barizaloka <?php esc_html_e('di Instagram', 'barizaloka'); ?>
                </a>
            </div>
        </div>
    </div>
</section>
