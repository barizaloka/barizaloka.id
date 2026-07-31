<?php
/**
 * Hero Section dengan pattern geometris islami
 */
$tagline = get_theme_mod('bzk_hero_tagline', 'Menghubungkan Komunitas, Membangun Solusi');
$desc = get_theme_mod('bzk_hero_desc', 'Ekosistem teknologi inovatif yang mendukung komunitas peduli dampak 🌍 lingkungan, 💻 teknologi, dan ✨ spiritual yang positif.');
$ig_url = get_theme_mod('bzk_instagram_url', 'https://instagram.com/namaku.ahla');
?>

<section class="bzk-hero" id="beranda">

    <!-- Pattern geometris islami (SVG inline) -->
    <svg class="bzk-hero__pattern" viewBox="0 0 900 480" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs>
            <pattern id="islamicStar" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                <g fill="none" stroke="#ffffff" stroke-width="0.8">
                    <polygon points="40,10 44.5,26 60,26 47.5,36 52,52 40,43 28,52 32.5,36 20,26 35.5,26"/>
                    <rect x="29" y="29" width="22" height="22" transform="rotate(45,40,40)"/>
                    <line x1="0" y1="0" x2="20" y2="26"/>
                    <line x1="80" y1="0" x2="60" y2="26"/>
                    <line x1="0" y1="80" x2="20" y2="54"/>
                    <line x1="80" y1="80" x2="60" y2="54"/>
                    <circle cx="0"  cy="0"  r="2.5" fill="#ffffff" stroke="none"/>
                    <circle cx="80" cy="0"  r="2.5" fill="#ffffff" stroke="none"/>
                    <circle cx="0"  cy="80" r="2.5" fill="#ffffff" stroke="none"/>
                    <circle cx="80" cy="80" r="2.5" fill="#ffffff" stroke="none"/>
                    <circle cx="40" cy="40" r="3" fill="rgba(255,255,255,.4)" stroke="none"/>
                </g>
                <g fill="rgba(255,255,255,0.25)" stroke="none">
                    <ellipse cx="40" cy="34" rx="2" ry="3.5"/>
                    <ellipse cx="40" cy="46" rx="2" ry="3.5" transform="rotate(180,40,40)"/>
                    <ellipse cx="34" cy="40" rx="3.5" ry="2"/>
                    <ellipse cx="46" cy="40" rx="3.5" ry="2"/>
                </g>
            </pattern>
            <pattern id="leafVine" x="0" y="0" width="140" height="140" patternUnits="userSpaceOnUse">
                <g fill="rgba(93,202,165,0.18)" stroke="rgba(93,202,165,0.35)" stroke-width="1">
                    <path d="M15,70 Q40,20 70,15 Q45,55 15,70Z"/>
                    <path d="M125,70 Q100,20 70,15 Q95,55 125,70Z"/>
                    <path d="M15,70 Q40,120 70,125 Q45,85 15,70Z"/>
                    <path d="M125,70 Q100,120 70,125 Q95,85 125,70Z"/>
                </g>
                <line x1="70" y1="15" x2="50" y2="70" stroke="rgba(93,202,165,.2)" stroke-width="1" fill="none"/>
                <line x1="70" y1="15" x2="90" y2="70" stroke="rgba(93,202,165,.2)" stroke-width="1" fill="none"/>
            </pattern>
            <radialGradient id="heroVignette" cx="50%" cy="50%" r="70%">
                <stop offset="0%" stop-color="#0D5C46" stop-opacity="0"/>
                <stop offset="100%" stop-color="#0D5C46" stop-opacity="0.65"/>
            </radialGradient>
        </defs>
        <rect width="100%" height="100%" fill="url(#islamicStar)"/>
        <rect width="100%" height="100%" fill="url(#leafVine)" opacity="0.5"/>
        <rect width="100%" height="100%" fill="url(#heroVignette)"/>
    </svg>

    <div class="bzk-hero__vignette"></div>

    <div class="bzk-container">
        <div class="bzk-hero__inner">

            <div class="bzk-hero__badge">
                🌟 <?php esc_html_e('Ekosistem Digital Aktif', 'barizaloka'); ?>
            </div>

            <h1><?php echo esc_html($tagline); ?></h1>

            <p class="bzk-hero__desc"><?php echo esc_html($desc); ?></p>

            <div class="bzk-hero__buttons">
                <a href="#komunitas" class="bzk-btn bzk-btn--white">
                    🚀 <?php esc_html_e('Jelajahi Ekosistem', 'barizaloka'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/solusi')); ?>" class="bzk-btn bzk-btn--outline-white">
                    💡 <?php esc_html_e('Lihat Solusi Kami', 'barizaloka'); ?>
                </a>
                <a href="#layanan" class="bzk-btn bzk-btn--outline-white">
                    ✨ <?php esc_html_e('Lihat Layanan', 'barizaloka'); ?>
                </a>
            </div>

            <p class="bzk-hero__founded">
                🏡 <?php esc_html_e('Didirikan oleh Pemuda Desa — Kecamatan Sedan, Kabupaten Rembang 🌾', 'barizaloka'); ?>
            </p>

        </div>
    </div>
</section>
