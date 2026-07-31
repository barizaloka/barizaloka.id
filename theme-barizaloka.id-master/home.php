<?php
/**
 * Blog Index template
 */
get_header();
?>

<!-- ===== BLOG HERO ===== -->
<section class="blog-hero">
  <svg class="blog-hero-pattern" viewBox="0 0 900 300" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <pattern id="blogPat" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
        <g fill="none" stroke="#fff" stroke-width="0.6">
          <polygon points="30,8 33.5,20 45,20 36,27 39.5,39 30,32 20.5,39 24,27 15,20 26.5,20"/>
          <rect x="22" y="22" width="16" height="16" transform="rotate(45,30,30)"/>
        </g>
      </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#blogPat)"/>
  </svg>
  <div class="blog-hero-overlay"></div>
  <div class="container">
    <div class="blog-hero-content">
      <span class="section-eyebrow" style="background:rgba(255,255,255,.15);color:#c8f0e2;border:1px solid rgba(255,255,255,.2);">✍️ Tulisan &amp; Pemikiran</span>
      <h1 class="blog-hero-title">Blog Barizaloka</h1>
      <p class="blog-hero-desc">Catatan perjalanan, wawasan teknologi, refleksi lingkungan, dan kisah dari komunitas yang terus bergerak.</p>
    </div>
  </div>
</section>

<!-- ===== BLOG CONTENT ===== -->
<section class="blog-section">
  <div class="container">

    <?php if (have_posts()) { ?>

      <?php
      $post_count = 0;
        $posts_data = [];
        while (have_posts()) {
            the_post();
            $posts_data[] = get_post();
            $post_count++;
        }
        rewind_posts();
        ?>

      <?php if ($post_count > 0) { ?>

        <!-- Featured Post (first post) -->
        <?php the_post(); ?>
        <article class="blog-featured-post" id="post-<?php the_ID(); ?>">
          <?php if (has_post_thumbnail()) { ?>
            <a href="<?php the_permalink(); ?>" class="blog-featured-img-wrap">
              <?php the_post_thumbnail('large', ['class' => 'blog-featured-img', 'alt' => get_the_title()]); ?>
            </a>
          <?php } else { ?>
            <a href="<?php the_permalink(); ?>" class="blog-featured-img-wrap blog-featured-img-placeholder">
              <div class="blog-img-placeholder-inner">
                <span>✍️</span>
              </div>
            </a>
          <?php } ?>

          <div class="blog-featured-body">
            <div class="blog-featured-meta">
              <span class="blog-featured-badge">📌 Terbaru</span>
              <?php
                $cats = get_the_category();
          if ($cats) {
              foreach (array_slice($cats, 0, 2) as $cat) {
                  ?>
                <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="blog-cat-tag"><?php echo esc_html($cat->name); ?></a>
              <?php }
              }
          $featured_tags = get_the_tags();
          if ($featured_tags) {
              foreach (array_slice($featured_tags, 0, 2) as $tag) { ?>
                  <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="post-tag"><?php echo esc_html($tag->name); ?></a>
              <?php }
              } ?>
            </div>

            <h2 class="blog-featured-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <p class="blog-featured-excerpt">
              <?php echo wp_trim_words(get_the_excerpt(), 28, '...'); ?>
            </p>

            <div class="blog-post-info">
              <span class="blog-post-date">📅 <?php echo esc_html(get_the_date('j F Y')); ?></span>
              <span class="blog-post-author">👤 <?php the_author(); ?></span>
              <?php
              $read_time = ceil(str_word_count(strip_tags(get_the_content())) / 200);
          ?>
              <span class="blog-post-read">⏱️ <?php echo esc_html($read_time); ?> menit baca</span>
            </div>

            <a href="<?php the_permalink(); ?>" class="btn-cta blog-read-btn">
              Baca Selengkapnya <span>→</span>
            </a>
          </div>
        </article>

        <!-- Post Grid -->
        <?php if (have_posts()) { ?>
          <div class="blog-grid-header">
            <h3 class="blog-grid-title">Artikel Lainnya</h3>
            <div class="blog-grid-line"></div>
          </div>
          <div class="blog-grid">
            <?php while (have_posts()) {
                the_post(); ?>

              <article class="blog-card" id="post-<?php the_ID(); ?>">

                <a href="<?php the_permalink(); ?>" class="blog-card-img-wrap">
                  <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('medium', ['class' => 'blog-card-img', 'alt' => get_the_title()]); ?>
                  <?php } else { ?>
                    <div class="blog-card-img-placeholder">
                      <span>✍️</span>
                    </div>
                  <?php } ?>
                </a>

                <div class="blog-card-body">
                  <div class="blog-card-meta">
                    <?php
                        $cats = get_the_category();
                if ($cats) {
                    echo '<a href="'.esc_url(get_category_link($cats[0]->term_id)).'" class="blog-cat-tag blog-cat-tag-sm">'.esc_html($cats[0]->name).'</a>';
                }
                ?>
                    <span class="blog-card-date">📅 <?php echo esc_html(get_the_date('j M Y')); ?></span>
                  </div>
                  <?php
                  $card_tags = get_the_tags();
                if ($card_tags) { ?>
                    <div class="blog-card-tags">
                      <?php foreach (array_slice($card_tags, 0, 3) as $tag) { ?>
                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="post-tag post-tag-sm"><?php echo esc_html($tag->name); ?></a>
                      <?php } ?>
                    </div>
                  <?php } ?>

                  <h3 class="blog-card-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>

                  <p class="blog-card-excerpt">
                    <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                  </p>

                  <div class="blog-card-footer">
                    <span class="blog-card-author">👤 <?php the_author(); ?></span>
                    <a href="<?php the_permalink(); ?>" class="blog-card-link">Baca →</a>
                  </div>
                </div>

              </article>

            <?php } ?>
          </div>
        <?php } ?>

      <?php } ?>

      <!-- Pagination -->
      <div class="blog-pagination">
        <?php
        the_posts_pagination([
            'mid_size' => 2,
            'prev_text' => '← Sebelumnya',
            'next_text' => 'Selanjutnya →',
        ]);
        ?>
      </div>

    <?php } else { ?>

      <!-- Empty State -->
      <div class="blog-empty">
        <div class="blog-empty-icon">✍️</div>
        <h2 class="blog-empty-title">Belum Ada Tulisan</h2>
        <p class="blog-empty-desc">Kami sedang menyiapkan konten yang bermakna untuk Anda. Pantau terus ya!</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-cta">← Kembali ke Beranda</a>
      </div>

    <?php } ?>

  </div>
</section>

<?php get_footer(); ?>
