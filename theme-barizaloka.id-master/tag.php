<?php
/**
 * Tag Archive template
 */
get_header();

$tag_obj = get_queried_object();
$tag_desc = get_the_archive_description();
?>

<!-- ===== TAG HERO ===== -->
<section class="blog-hero">
  <svg class="blog-hero-pattern" viewBox="0 0 900 300" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <pattern id="tagPat" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
        <g fill="none" stroke="#fff" stroke-width="0.6">
          <polygon points="30,8 33.5,20 45,20 36,27 39.5,39 30,32 20.5,39 24,27 15,20 26.5,20"/>
          <rect x="22" y="22" width="16" height="16" transform="rotate(45,30,30)"/>
        </g>
      </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#tagPat)"/>
  </svg>
  <div class="blog-hero-overlay"></div>
  <div class="container">
    <div class="blog-hero-content">
      <span class="section-eyebrow" style="background:rgba(255,255,255,.15);color:#c8f0e2;border:1px solid rgba(255,255,255,.2);">🏷️ Tag</span>
      <h1 class="blog-hero-title"><?php echo esc_html($tag_obj->name); ?></h1>
      <?php if ($tag_desc) { ?>
        <p class="blog-hero-desc"><?php echo wp_kses_post($tag_desc); ?></p>
      <?php } else { ?>
        <p class="blog-hero-desc">Artikel dengan tag <strong><?php echo esc_html($tag_obj->name); ?></strong>.</p>
      <?php } ?>
    </div>
  </div>
</section>

<!-- ===== TAG CONTENT ===== -->
<section class="blog-section">
  <div class="container">

    <?php if (have_posts()) { ?>

      <div class="blog-grid-header">
        <h2 class="blog-grid-title">Artikel</h2>
        <div class="blog-grid-line"></div>
        <a href="<?php echo esc_url(home_url('/blog')); ?>" style="font-size:.82rem;color:var(--text-muted);white-space:nowrap;">← Semua Artikel</a>
      </div>

      <div class="blog-grid">
        <?php while (have_posts()) {
            the_post(); ?>

          <article class="blog-card" id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink(); ?>" class="blog-card-img-wrap">
              <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('medium', ['class' => 'blog-card-img', 'alt' => get_the_title()]); ?>
              <?php } else { ?>
                <div class="blog-card-img-placeholder"><span>✍️</span></div>
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
                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="post-tag post-tag-sm<?php echo ($tag->term_id === $tag_obj->term_id) ? ' post-tag-active' : ''; ?>"><?php echo esc_html($tag->name); ?></a>
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

      <div class="blog-empty">
        <div class="blog-empty-icon">🏷️</div>
        <h2 class="blog-empty-title">Belum Ada Artikel</h2>
        <p class="blog-empty-desc">Belum ada artikel dengan tag ini.</p>
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn-cta">← Semua Artikel</a>
      </div>

    <?php } ?>

    <!-- ===== TAG CLOUD ===== -->
    <?php
    $all_tags = get_tags(['orderby' => 'count', 'order' => 'DESC', 'number' => 30]);
if ($all_tags) {
    ?>
      <div class="tag-cloud-section">
        <div class="blog-grid-header" style="margin-top:3rem;">
          <h2 class="blog-grid-title">Jelajahi Tag Lainnya</h2>
          <div class="blog-grid-line"></div>
        </div>
        <div class="tag-cloud-wrap">
          <?php foreach ($all_tags as $t) { ?>
            <a href="<?php echo esc_url(get_tag_link($t->term_id)); ?>"
               class="tag-cloud-item<?php echo ($t->term_id === $tag_obj->term_id) ? ' tag-cloud-item--active' : ''; ?>"
               title="<?php echo esc_attr($t->count); ?> artikel">
              <?php echo esc_html($t->name); ?>
              <span class="tag-cloud-count"><?php echo esc_html($t->count); ?></span>
            </a>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

  </div>
</section>

<?php get_footer(); ?>
