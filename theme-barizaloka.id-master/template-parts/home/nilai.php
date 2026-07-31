<?php
/**
 * Nilai Section
 */
$nilai = [
    ['icon' => '🤝', 'title' => 'Kolaboratif',  'desc' => 'Setiap anggota berkontribusi dan saling menguatkan dalam ekosistem yang inklusif.'],
    ['icon' => '💡', 'title' => 'Inovatif',      'desc' => 'Teknologi adalah alat, bukan tujuan. Kami memanfaatkannya secara kreatif untuk memecahkan masalah nyata di masyarakat.'],
    ['icon' => '🌱', 'title' => 'Berdampak',     'desc' => 'Setiap langkah yang kami ambil memiliki tujuan yang jelas: menciptakan dampak positif bagi lingkungan, ilmu, dan spiritual.'],
    ['icon' => '🏆', 'title' => 'Dipercaya',     'desc' => 'Dipercaya oleh mitra dan klien, termasuk Masjid Syatho Sedan, Rembang, Jawa Tengah.'],
];
?>

<section class="bzk-nilai bzk-section" id="nilai">
    <div class="bzk-container">
        <div class="bzk-section-header">
            <h2>💎 <?php esc_html_e('Nilai Kami', 'barizaloka'); ?> — <?php esc_html_e('Mengapa Bergabung?', 'barizaloka'); ?></h2>
            <p><?php esc_html_e('Kami percaya bahwa perubahan nyata lahir dari kolaborasi yang tulus dan niat yang ikhlas.', 'barizaloka'); ?></p>
        </div>
        <div class="bzk-nilai-grid">
            <?php foreach ($nilai as $item) { ?>
            <div class="bzk-nilai-card">
                <div class="bzk-nilai-card__icon"><?php echo $item['icon']; ?></div>
                <h3><?php echo esc_html($item['title']); ?></h3>
                <p><?php echo esc_html($item['desc']); ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
