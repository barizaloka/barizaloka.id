<?php
/**
 * Komunitas Section
 */
$komunitas = [
    [
        'icon' => '🌙',
        'name' => 'Astro Falak',
        'tag' => '🔭 Komunitas Belajar Falak',
        'desc' => 'Belajar ilmu falak dan astronomi bersama agar memahami bagaimana ulama memandang waktu—dari hilal hingga arah kiblat.',
        'items' => ['🌙 Pengamatan Hilal & Kalender', '⭐ Ilmu Falak & Astronomi Islam', '🧭 Arah Kiblat & Waktu Shalat'],
        'link' => 'https://astrofalak.my.id/',
        'link_label' => '🌙 Kunjungi Astro Falak',
        'coming' => false,
    ],
    [
        'icon' => '🌍',
        'name' => 'Astraloka',
        'tag' => '🌱 Usaha Peduli Alam',
        'desc' => 'Membangun kesadaran lingkungan melalui edukasi daur ulang, aksi sosial, dan program pengelolaan sampah berkelanjutan.',
        'items' => ['♻️ Edukasi Daur Ulang', '🤝 Aksi Sosial Lingkungan', '🗑️ Program Pengelolaan Sampah'],
        'link' => 'https://astraloka.my.id',
        'link_label' => '🌍 Kunjungi Astraloka',
        'coming' => false,
    ],
    [
        'icon' => '💻',
        'name' => 'Baricode',
        'tag' => '🖥️ Usaha Teknologi & IT',
        'desc' => 'Ruang belajar mandiri dan kolaboratif bagi developer—dari pemula hingga profesional yang ingin terus berkembang.',
        'items' => ['📚 Belajar Mandiri & Terstruktur', '🚀 Proyek Kolaboratif', '🌐 Jaringan Developer'],
        'link' => 'https://app.baricode.org',
        'link_label' => '💻 Kunjungi Baricode',
        'coming' => false,
    ],
    [
        'icon' => '📿',
        'name' => 'Self Reminder',
        'tag' => '🕌 Pengingat Diri Menuju Akhirat',
        'desc' => 'Ruang refleksi spiritual yang menyediakan pengingat harian, muhasabah diri, dan wawasan untuk perjalanan menuju akhirat.',
        'items' => ['🌙 Pengingat Spiritual Harian', '💭 Muhasabah & Refleksi Diri', '📊 Pantauan Progres Ibadah'],
        'link' => '',
        'link_label' => '',
        'coming' => true,
    ],
];
?>

<section class="bzk-komunitas bzk-section" id="komunitas">
    <div class="bzk-container">
        <div class="bzk-section-header">
            <h2>🏘️ <?php esc_html_e('Ekosistem Kami', 'barizaloka'); ?> — <?php esc_html_e('Empat Pilar Utama', 'barizaloka'); ?></h2>
            <p><?php esc_html_e('Setiap pilar memiliki fokus yang berbeda namun bersatu dalam satu tujuan: dampak nyata yang positif.', 'barizaloka'); ?></p>
        </div>

        <div class="bzk-cards">
            <?php foreach ($komunitas as $item) { ?>
            <div class="bzk-card">
                <?php if ($item['coming']) { ?>
                <span class="bzk-card__badge-coming">📿 <?php esc_html_e('Segera Hadir', 'barizaloka'); ?></span>
                <?php } ?>
                <div class="bzk-card__icon"><?php echo $item['icon']; ?></div>
                <h3><?php echo esc_html($item['name']); ?></h3>
                <div class="bzk-card__tag"><?php echo esc_html($item['tag']); ?></div>
                <p class="bzk-card__desc"><?php echo esc_html($item['desc']); ?></p>
                <ul class="bzk-card__features">
                    <?php foreach ($item['items'] as $feat) { ?>
                    <li><?php echo esc_html($feat); ?></li>
                    <?php } ?>
                </ul>
                <?php if ($item['link']) { ?>
                <a href="<?php echo esc_url($item['link']); ?>" class="bzk-btn bzk-btn--outline-green" target="_blank" rel="noopener">
                    <?php echo esc_html($item['link_label']); ?>
                </a>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
