<?php
/**
 * Single Post template
 */
get_header();
?>

<?php while (have_posts()) {
    the_post(); ?>

<?php
    $cats = get_the_category();
    $read_time = ceil(str_word_count(strip_tags(get_the_content())) / 200);
    $read_time = max(1, $read_time);
    ?>

<!-- ===== POST HERO ===== -->
<section class="post-hero <?php echo has_post_thumbnail() ? 'post-hero--has-img' : 'post-hero--no-img'; ?>">
  <?php if (has_post_thumbnail()) { ?>
    <div class="post-hero-bg-img" style="background-image:url('<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>')"></div>
    <div class="post-hero-overlay"></div>
  <?php } else { ?>
    <svg class="post-hero-pattern" viewBox="0 0 900 400" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <pattern id="postPat" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
          <g fill="none" stroke="#fff" stroke-width="0.6">
            <polygon points="30,8 33.5,20 45,20 36,27 39.5,39 30,32 20.5,39 24,27 15,20 26.5,20"/>
            <rect x="22" y="22" width="16" height="16" transform="rotate(45,30,30)"/>
          </g>
        </pattern>
      </defs>
      <rect width="100%" height="100%" fill="url(#postPat)"/>
    </svg>
    <div class="post-hero-gradient"></div>
  <?php } ?>

  <div class="container">
    <div class="post-hero-content">

      <!-- Breadcrumb -->
      <nav class="post-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
        <span>›</span>
        <a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
        <?php if ($cats) { ?>
          <span>›</span>
          <a href="<?php echo esc_url(get_category_link($cats[0]->term_id)); ?>"><?php echo esc_html($cats[0]->name); ?></a>
        <?php } ?>
      </nav>

      <!-- Categories -->
      <?php if ($cats) { ?>
        <div class="post-hero-cats">
          <?php foreach (array_slice($cats, 0, 3) as $cat) { ?>
            <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="blog-cat-tag post-hero-cat"><?php echo esc_html($cat->name); ?></a>
          <?php } ?>
        </div>
      <?php } ?>

      <!-- Title -->
      <h1 class="post-hero-title"><?php the_title(); ?></h1>

      <!-- Meta -->
      <div class="post-hero-meta">
        <span>📅 <?php echo esc_html(get_the_date('j F Y')); ?></span>
        <span class="post-meta-sep">·</span>
        <span>👤 <?php the_author(); ?></span>
        <span class="post-meta-sep">·</span>
        <span>⏱️ <?php echo esc_html($read_time); ?> menit baca</span>
      </div>

    </div>
  </div>
</section>

<!-- ===== POST BODY ===== -->
<div class="post-body-wrap">
  <div class="container">
    <div class="post-layout">

      <!-- Main Content -->
      <main class="post-main">
        <div class="post-content entry-content">
          <?php the_content(); ?>
        </div>

        <!-- Tags -->
        <?php
            $tags = get_the_tags();
    if ($tags) {
        ?>
          <div class="post-tags">
            <span class="post-tags-label">Tag:</span>
            <?php foreach ($tags as $tag) { ?>
              <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="post-tag"><?php echo esc_html($tag->name); ?></a>
            <?php } ?>
          </div>
        <?php } ?>

        <!-- Post Navigation -->
        <nav class="post-nav" aria-label="Navigasi Artikel">
          <?php
          $prev = get_previous_post();
    $next = get_next_post();
    ?>
          <?php if ($prev) { ?>
            <a href="<?php echo esc_url(get_permalink($prev)); ?>" class="post-nav-item post-nav-prev">
              <span class="post-nav-dir">← Sebelumnya</span>
              <span class="post-nav-item-title"><?php echo esc_html(get_the_title($prev)); ?></span>
            </a>
          <?php } else { ?>
            <div></div>
          <?php } ?>

          <?php if ($next) { ?>
            <a href="<?php echo esc_url(get_permalink($next)); ?>" class="post-nav-item post-nav-next">
              <span class="post-nav-dir">Selanjutnya →</span>
              <span class="post-nav-item-title"><?php echo esc_html(get_the_title($next)); ?></span>
            </a>
          <?php } ?>
        </nav>

        <div style="text-align:center;margin-top:1.5rem;">
          <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn-cta" style="display:inline-flex;">← Kembali ke Blog</a>
        </div>
      </main>

      <!-- Sidebar -->
      <aside class="post-sidebar">

        <!-- Author Card -->
        <div class="post-sidebar-card">
          <div class="post-author-avatar">
            <?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', ['class' => 'post-author-img']); ?>
          </div>
          <div class="post-author-info">
            <div class="post-author-label">Penulis</div>
            <div class="post-author-name"><?php the_author(); ?></div>
            <?php
      $bio = get_the_author_meta('description');
    if ($bio) {
        ?>
              <p class="post-author-bio"><?php echo esc_html($bio); ?></p>
            <?php } ?>
          </div>
        </div>

        <!-- Post Info Card -->
        <div class="post-sidebar-card post-info-card">
          <div class="post-sidebar-title">Tentang Artikel</div>
          <ul class="post-info-list">
            <li>
              <span class="post-info-icon">📅</span>
              <div>
                <div class="post-info-label">Diterbitkan</div>
                <div class="post-info-val"><?php echo esc_html(get_the_date('j F Y')); ?></div>
              </div>
            </li>
            <?php if (get_the_modified_date() !== get_the_date()) { ?>
            <li>
              <span class="post-info-icon">✏️</span>
              <div>
                <div class="post-info-label">Diperbarui</div>
                <div class="post-info-val"><?php echo esc_html(get_the_modified_date('j F Y')); ?></div>
              </div>
            </li>
            <?php } ?>
            <li>
              <span class="post-info-icon">⏱️</span>
              <div>
                <div class="post-info-label">Waktu Baca</div>
                <div class="post-info-val"><?php echo esc_html($read_time); ?> menit</div>
              </div>
            </li>
            <?php if ($cats) { ?>
            <li>
              <span class="post-info-icon">🗂️</span>
              <div>
                <div class="post-info-label">Kategori</div>
                <div class="post-info-val post-info-cats">
                  <?php foreach ($cats as $cat) { ?>
                    <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="blog-cat-tag blog-cat-tag-sm"><?php echo esc_html($cat->name); ?></a>
                  <?php } ?>
                </div>
              </div>
            </li>
            <?php } ?>
            <?php $sidebar_tags = get_the_tags();
    if ($sidebar_tags) { ?>
            <li>
              <span class="post-info-icon">🏷️</span>
              <div>
                <div class="post-info-label">Tag</div>
                <div class="post-info-val post-info-cats">
                  <?php foreach ($sidebar_tags as $tag) { ?>
                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="post-tag post-tag-sm"><?php echo esc_html($tag->name); ?></a>
                  <?php } ?>
                </div>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>

        <!-- Related Posts -->
        <?php
        $related_args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__not_in' => [get_the_ID()],
            'orderby' => 'rand',
            'ignore_sticky_posts' => 1,
        ];
    $post_tag_ids = wp_get_post_tags(get_the_ID(), ['fields' => 'ids']);
    if ($post_tag_ids) {
        $related_args['tag__in'] = $post_tag_ids;
    } elseif ($cats) {
        $related_args['category__in'] = [$cats[0]->term_id];
    }
    $related = new WP_Query($related_args);
    if (! $related->have_posts() && $post_tag_ids && $cats) {
        $related_args['tag__in'] = [];
        $related_args['category__in'] = [$cats[0]->term_id];
        $related = new WP_Query($related_args);
    }
    if ($related->have_posts()) {
        ?>
          <div class="post-sidebar-card">
            <div class="post-sidebar-title">Artikel Terkait</div>
            <ul class="post-related-list">
              <?php while ($related->have_posts()) {
                  $related->the_post(); ?>
                <li class="post-related-item">
                  <?php if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>" class="post-related-thumb">
                      <?php the_post_thumbnail('thumbnail', ['class' => 'post-related-img']); ?>
                    </a>
                  <?php } else { ?>
                    <a href="<?php the_permalink(); ?>" class="post-related-thumb post-related-thumb-ph">
                      <span>✍️</span>
                    </a>
                  <?php } ?>
                  <div class="post-related-info">
                    <a href="<?php the_permalink(); ?>" class="post-related-title"><?php the_title(); ?></a>
                    <span class="post-related-date"><?php echo esc_html(get_the_date('j M Y')); ?></span>
                  </div>
                </li>
              <?php } wp_reset_postdata(); ?>
            </ul>
          </div>
        <?php } ?>

        <!-- Back Button -->
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="post-sidebar-back">← Semua Artikel</a>

      </aside>

    </div>
  </div>
</div>

<?php } ?>

<?php get_footer(); ?>
