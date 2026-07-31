<?php get_header(); ?>

<main id="page-404">
  <div class="error-404-bg"></div>
  <div class="error-404-glow"></div>

  <div class="container error-404-wrap">

    <div class="error-404-code" aria-hidden="true">404</div>

    <div class="error-404-content">
      <span class="section-eyebrow">Halaman Tidak Ditemukan</span>
      <h1 class="error-404-title">Ups, kamu nyasar nih&hellip;</h1>
      <p class="error-404-desc">Halaman yang kamu cari tidak ada, sudah dipindahkan, atau mungkin belum dibuat. Tapi jangan khawatir &mdash; kamu bisa balik ke jalur yang benar dari sini.</p>

      <div class="error-404-actions">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
          ← Kembali ke Beranda
        </a>
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn-secondary">
          Jelajahi Blog
        </a>
      </div>
    </div>

    <nav class="error-404-links" aria-label="Tautan Populer">
      <p class="error-404-links-label">Atau langsung ke:</p>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/#komunitas')); ?>">🏘️ Ekosistem</a></li>
        <li><a href="<?php echo esc_url(home_url('/#layanan')); ?>">💡 Layanan</a></li>
        <li><a href="https://app.baricode.org" target="_blank" rel="noopener">💻 Baricode</a></li>
        <li><a href="https://astraloka.my.id" target="_blank" rel="noopener">🌍 Astraloka</a></li>
      </ul>
    </nav>

  </div>
</main>

<?php get_footer(); ?>
