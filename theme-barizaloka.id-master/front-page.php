<?php
/**
 * Front Page template - Landing Page Barizaloka
 */
get_header();
?>

<!-- ===== HERO ===== -->
<section id="hero">
  <svg class="hero-pattern" viewBox="0 0 900 600" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <pattern id="islamicPat" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
        <g fill="none" stroke="#fff" stroke-width="0.8">
          <polygon points="40,10 44.5,25 59,25 47.5,34 52,49 40,40 28,49 32.5,34 21,25 35.5,25"/>
          <rect x="29" y="29" width="22" height="22" transform="rotate(45,40,40)"/>
          <line x1="0" y1="0" x2="21" y2="25"/><line x1="80" y1="0" x2="59" y2="25"/>
          <line x1="0" y1="80" x2="21" y2="55"/><line x1="80" y1="80" x2="59" y2="55"/>
          <circle cx="0" cy="0" r="2.5" fill="#fff" stroke="none"/>
          <circle cx="80" cy="0" r="2.5" fill="#fff" stroke="none"/>
          <circle cx="0" cy="80" r="2.5" fill="#fff" stroke="none"/>
          <circle cx="80" cy="80" r="2.5" fill="#fff" stroke="none"/>
        </g>
        <g fill="rgba(255,255,255,0.25)">
          <ellipse cx="40" cy="35" rx="2" ry="3.5"/>
          <ellipse cx="40" cy="45" rx="2" ry="3.5" transform="rotate(180,40,40)"/>
          <ellipse cx="35" cy="40" rx="3.5" ry="2"/>
          <ellipse cx="45" cy="40" rx="3.5" ry="2"/>
        </g>
      </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#islamicPat)"/>
  </svg>
  <div class="hero-gradient"></div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-badge">🌟 Ekosistem Digital Aktif</div>
      <h1 class="hero-title" id="hero-rotating-title">
        Jasa Pembuatan Website,<br>
        <span>Solusi Digital untuk Bisnis Anda</span>
      </h1>
      <div class="hero-title-dots" aria-hidden="true">
        <span class="hero-dot active"></span>
        <span class="hero-dot"></span>
      </div>
      <p class="hero-desc">Ekosistem teknologi inovatif yang mendukung dampak 🌍 lingkungan, 💻 teknologi, dan ✨ spiritual yang positif.</p>
      <div class="hero-btns">
        <a href="#komunitas" class="btn-primary">🚀 Jelajahi Ekosistem</a>
        <a href="#layanan" class="btn-secondary">💡 Lihat Solusi Kami</a>
        <a href="#layanan" class="btn-secondary">✨ Lihat Layanan</a>
      </div>
      <p class="hero-founded">🏡 Didirikan oleh Pemuda Desa — Kecamatan Sedan dan Sarang, Kabupaten Rembang 🌾</p>
    </div>
  </div>
</section>

<!-- ===== LAYANAN KAMI ===== -->
<section id="layanan-kami" class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-eyebrow">🛠️ Layanan Kami</span>
      <h2 class="section-title">Solusi Digital Lengkap<br>untuk Bisnis Anda</h2>
      <p class="section-desc">Dari strategi hingga eksekusi, semua yang Anda butuhkan untuk sukses di era digital ada di sini.</p>
    </div>

    <div class="solusi-grid">
      <div class="solusi-card">
        <span class="solusi-card-icon">💻</span>
        <h3 class="solusi-card-title">Web Development</h3>
        <p class="solusi-card-desc">Website profesional yang cepat, responsif, dan dioptimalkan untuk konversi bisnis Anda.</p>
        <ul class="solusi-card-features">
          <li>✅ Custom Design</li>
          <li>✅ Responsive Mobile-First</li>
          <li>✅ SEO Optimized</li>
          <li>✅ CMS Integration</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ===== STATS ===== -->
<section id="stats">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">4</div>
        <div class="stat-label">🏘️ Pilar Aktif</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">200+</div>
        <div class="stat-label">👥 Anggota Bergabung</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">∞</div>
        <div class="stat-label">🌟 Dampak Positif</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== KOMUNITAS ===== -->
<section id="komunitas" class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-eyebrow">🏘️ Pilar Utama</span>
      <h2 class="section-title">Ekosistem Kami</h2>
      <p class="section-desc">Setiap pilar memiliki fokus yang berbeda namun bersatu dalam satu tujuan: dampak nyata yang positif.</p>
    </div>
    <div class="komunitas-grid">

      <div class="komunitas-card falak">
        <span class="card-emoji">🌙</span>
        <h3 class="card-title">Astro Falak</h3>
        <div class="card-subtitle">🔭 Komunitas Belajar Falak</div>
        <p class="card-desc">Belajar ilmu falak dan astronomi bersama agar memahami bagaimana ulama memandang waktu—dari hilal hingga arah kiblat.</p>
        <ul class="card-features">
          <li>🌙 Pengamatan Hilal &amp; Kalender</li>
          <li>⭐ Ilmu Falak &amp; Astronomi Islam</li>
          <li>🧭 Arah Kiblat &amp; Waktu Shalat</li>
        </ul>
      </div>

      <div class="komunitas-card astraloka">
        <span class="card-emoji">🌍</span>
        <h3 class="card-title">Astraloka</h3>
        <div class="card-subtitle">🌱 Usaha Peduli Alam</div>
        <p class="card-desc">Membangun kesadaran lingkungan melalui edukasi daur ulang, aksi sosial, dan program pengelolaan sampah yang berkelanjutan.</p>
        <ul class="card-features">
          <li>♻️ Edukasi Daur Ulang</li>
          <li>🤝 Aksi Sosial Lingkungan</li>
          <li>🗑️ Program Pengelolaan Sampah</li>
        </ul>
        <a href="https://astraloka.my.id" class="card-link" target="_blank" rel="noopener">🌍 Kunjungi Astraloka</a>
      </div>

      <div class="komunitas-card baricode">
        <span class="card-emoji">💻</span>
        <h3 class="card-title">Baricode</h3>
        <div class="card-subtitle">🖥️ Usaha Teknologi & IT</div>
        <p class="card-desc">Ruang belajar mandiri dan kolaboratif bagi para developer—dari pemula hingga profesional yang ingin terus berkembang.</p>
        <ul class="card-features">
          <li>📚 Belajar Mandiri &amp; Terstruktur</li>
          <li>🚀 Proyek Kolaboratif</li>
          <li>🌐 Jaringan Developer</li>
        </ul>
        <a href="https://app.baricode.org" class="card-link" target="_blank" rel="noopener">💻 Kunjungi Baricode</a>
      </div>

      <div class="komunitas-card self-reminder">
        <span class="card-emoji">📿</span>
        <h3 class="card-title">Self Reminder</h3>
        <div class="card-subtitle">🕌 Pengingat Diri Menuju Akhirat</div>
        <p class="card-desc">Ruang refleksi spiritual yang menyediakan pengingat harian, muhasabah diri, dan wawasan untuk perjalanan menuju akhirat.</p>
        <ul class="card-features">
          <li>🌙 Pengingat Spiritual Harian</li>
          <li>💭 Muhasabah &amp; Refleksi Diri</li>
          <li>📊 Pantauan Progres Ibadah</li>
        </ul>
        <a href="https://selfreminder.org" class="card-link" target="_blank" rel="noopener">📿 Kunjungi Self Reminder</a>
      </div>

    </div>
  </div>
</section>

<!-- ===== NILAI ===== -->
<section id="nilai" class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-eyebrow">💎 Filosofi Kami</span>
      <h2 class="section-title">Nilai Kami</h2>
      <p class="section-desc">Kami percaya bahwa perubahan nyata lahir dari kolaborasi yang tulus dan niat yang ikhlas.</p>
    </div>
    <div class="nilai-grid">
      <div class="nilai-item">
        <div class="nilai-icon">🤝</div>
        <h3>Kolaboratif</h3>
        <p>Setiap anggota berkontribusi dan saling menguatkan dalam ekosistem yang inklusif.</p>
      </div>
      <div class="nilai-item">
        <div class="nilai-icon">💡</div>
        <h3>Inovatif</h3>
        <p>Teknologi adalah alat, bukan tujuan. Kami memanfaatkannya secara kreatif untuk memecahkan masalah nyata.</p>
      </div>
      <div class="nilai-item">
        <div class="nilai-icon">🌱</div>
        <h3>Berdampak</h3>
        <p>Setiap langkah yang kami ambil memiliki tujuan yang jelas: dampak positif bagi lingkungan, ilmu, dan spiritual.</p>
      </div>
      <div class="nilai-item">
        <div class="nilai-icon">🏆</div>
        <h3>Dipercaya</h3>
        <p>Dipercaya oleh mitra &amp; klien, termasuk Masjid Syatho Sedan, Rembang, Jawa Tengah.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== MITRA ===== -->
<?php get_template_part('template-parts/home/mitra'); ?>

<!-- ===== JASA WEBSITE CTA ===== -->
<section id="layanan" class="section" style="background: var(--brand-darker); position: relative; overflow: hidden;">
  <svg style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: .08;" viewBox="0 0 900 500" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <pattern id="jasaPat" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
        <g fill="none" stroke="#fff" stroke-width="0.8">
          <polygon points="40,10 44.5,25 59,25 47.5,34 52,49 40,40 28,49 32.5,34 21,25 35.5,25"/>
          <rect x="29" y="29" width="22" height="22" transform="rotate(45,40,40)"/>
        </g>
      </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#jasaPat)"/>
  </svg>
  <div class="container" style="position: relative; z-index: 2;">
    <div class="jasa-cta-grid">

      <div>
        <span style="display: inline-block; background: rgba(255,255,255,.15); color: rgba(255,255,255,.9); font-size: .75rem; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; padding: .4rem 1rem; border-radius: 20px; margin-bottom: 1.5rem;">🛠️ Jasa Pembuatan Website</span>
        <h2 style="font-family: 'Playfair Display', Georgia, serif; font-size: clamp(1.8rem, 3.5vw, 2.75rem); font-weight: 800; color: #fff; line-height: 1.2; margin-bottom: 1.25rem;">
          Website Profesional<br>Mulai <span style="color: var(--brand-gold, #D4A017);">Rp 350.000</span> / Tahun
        </h2>
        <p style="color: rgba(255,255,255,.75); font-size: 1rem; line-height: 1.7; margin-bottom: 2rem;">
          Untuk pesantren, masjid, UMKM, dan komunitas desa. Cepat jadi, desain modern, dan sudah termasuk hosting + SSL.
        </p>
        <ul style="display: flex; flex-direction: column; gap: .85rem; margin-bottom: 2.5rem; list-style: none; padding: 0;">
          <li style="display: flex; align-items: center; gap: .75rem; color: rgba(255,255,255,.85); font-size: .9rem;">
            <span style="background: rgba(255,255,255,.15); border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">⚡</span>
            Selesai dalam 1–7 hari kerja
          </li>
          <li style="display: flex; align-items: center; gap: .75rem; color: rgba(255,255,255,.85); font-size: .9rem;">
            <span style="background: rgba(255,255,255,.15); border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">📱</span>
            Responsif di HP & Desktop
          </li>
          <li style="display: flex; align-items: center; gap: .75rem; color: rgba(255,255,255,.85); font-size: .9rem;">
            <span style="background: rgba(255,255,255,.15); border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">🔒</span>
            SSL, Hosting & Maintenance sudah termasuk
          </li>
          <li style="display: flex; align-items: center; gap: .75rem; color: rgba(255,255,255,.85); font-size: .9rem;">
            <span style="background: rgba(255,255,255,.15); border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">💬</span>
            Konsultasi gratis via WhatsApp
          </li>
        </ul>
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
          <a href="<?php echo esc_url(home_url('/jasa-website/')); ?>" class="btn-primary">💻 Lihat Paket &amp; Harga</a>
          <a href="https://wa.me/6285188158542?text=Halo%20Barizaloka%2C%20saya%20mau%20konsultasi%20website" class="btn-secondary" target="_blank" rel="noopener">💬 Konsultasi Gratis</a>
        </div>
      </div>

      <div style="display: flex; flex-direction: column; gap: 1.25rem;">
        <div style="background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.15); border-radius: var(--radius-xl); padding: 1.75rem; backdrop-filter: blur(4px);">
          <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: .75rem;">
            <span style="font-size: 1.75rem;">🌐</span>
            <div>
              <div style="color: #fff; font-weight: 700; font-size: .95rem;">Paket Landing</div>
              <div style="color: rgba(255,255,255,.6); font-size: .8rem;">1 halaman, langsung online</div>
            </div>
            <div style="margin-left: auto; color: rgba(255,255,255,.9); font-weight: 800; font-size: 1.05rem; white-space: nowrap;">Rp 350rb</div>
          </div>
          <div style="color: rgba(255,255,255,.55); font-size: .8rem; line-height: 1.5;">Cocok untuk profil bisnis, jadwal kajian, atau landing page acara.</div>
        </div>
        <div style="background: rgba(255,255,255,.12); border: 1.5px solid rgba(255,255,255,.3); border-radius: var(--radius-xl); padding: 1.75rem; position: relative; backdrop-filter: blur(4px);">
          <span style="position: absolute; top: -10px; right: 1.25rem; background: var(--brand-gold, #D4A017); color: #fff; font-size: .68rem; font-weight: 700; padding: .3rem .75rem; border-radius: 20px; text-transform: uppercase; letter-spacing: .05em;">Paling Populer</span>
          <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: .75rem;">
            <span style="font-size: 1.75rem;">⚙️</span>
            <div>
              <div style="color: #fff; font-weight: 700; font-size: .95rem;">Paket CMS</div>
              <div style="color: rgba(255,255,255,.6); font-size: .8rem;">Kelola website sendiri</div>
            </div>
            <div style="margin-left: auto; color: rgba(255,255,255,.9); font-weight: 800; font-size: 1.05rem; white-space: nowrap;">Rp 600rb</div>
          </div>
          <div style="color: rgba(255,255,255,.55); font-size: .8rem; line-height: 1.5;">WordPress CMS. Cocok untuk UMKM, masjid, atau organisasi yang aktif update konten.</div>
        </div>
        <a href="<?php echo esc_url(home_url('/jasa-website/')); ?>" style="display: flex; align-items: center; justify-content: center; gap: .5rem; background: transparent; border: 1px dashed rgba(255,255,255,.3); border-radius: var(--radius-md); padding: 1rem; color: rgba(255,255,255,.65); font-size: .85rem; transition: background .2s, color .2s; text-decoration: none;" onmouseover="this.style.background='rgba(255,255,255,.08)'; this.style.color='rgba(255,255,255,.9)'" onmouseout="this.style.background='transparent'; this.style.color='rgba(255,255,255,.65)'">
          Bandingkan paket lengkap →
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ===== CTA FINAL ===== -->
<section id="cta-final">
  <svg class="cta-pattern" viewBox="0 0 700 300" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <pattern id="ctaPat" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
        <g fill="none" stroke="#fff" stroke-width="0.7">
          <polygon points="30,8 33.5,20 45,20 36,27 39.5,39 30,32 20.5,39 24,27 15,20 26.5,20"/>
          <rect x="22" y="22" width="16" height="16" transform="rotate(45,30,30)"/>
        </g>
      </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#ctaPat)"/>
  </svg>
  <div class="container cta-content">
    <h2>🚀 Siap Bergabung dengan Ekosistem Kami?</h2>
    <p>Jadilah bagian dari gerakan positif. Bersama kita bisa menciptakan perubahan yang lebih besar. 💪</p>
    <a href="#komunitas" class="btn-primary">🌍 Jelajahi Ekosistem</a>
  </div>
</section>

<?php get_footer(); ?>
