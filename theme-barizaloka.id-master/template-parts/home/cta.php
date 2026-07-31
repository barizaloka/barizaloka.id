<?php
/**
 * CTA Banner
 */
?>
<section class="bzk-cta" id="gabung">
    <svg class="bzk-cta__pattern" viewBox="0 0 700 220" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs>
            <pattern id="ctaPattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                <g fill="none" stroke="#ffffff" stroke-width="0.7">
                    <polygon points="30,8 34,22 46,22 36,30 40,44 30,36 20,44 24,30 14,22 26,22"/>
                    <rect x="22" y="22" width="16" height="16" transform="rotate(45,30,30)"/>
                </g>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#ctaPattern)"/>
    </svg>
    <div class="bzk-container">
        <div class="bzk-cta__inner">
            <h2>🚀 <?php esc_html_e('Siap Bergabung dengan Ekosistem Kami?', 'barizaloka'); ?></h2>
            <p><?php esc_html_e('Jadilah bagian dari gerakan positif. Bersama kita bisa menciptakan perubahan yang lebih besar.', 'barizaloka'); ?> 💪</p>
            <a href="#komunitas" class="bzk-btn bzk-btn--white">
                🌍 <?php esc_html_e('Jelajahi Ekosistem', 'barizaloka'); ?>
            </a>
        </div>
    </div>
</section>
