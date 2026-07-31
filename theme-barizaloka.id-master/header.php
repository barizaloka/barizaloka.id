<?php
/**
 * Header template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header">
  <div class="container">
    <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e('Menu Utama', 'barizaloka'); ?>">

      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <?php if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
          <span class="brand-dot"></span>
          <?php bloginfo('name'); ?>
        <?php } ?>
      </a>

      <div class="navbar-nav">

        <div class="nav-dropdown">
          <button class="nav-dropdown-trigger" aria-expanded="false" aria-haspopup="true">
            Tentang Kami <svg class="nav-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <div class="nav-dropdown-menu" role="menu">
            <a href="https://barizaloka.id/#komunitas" role="menuitem">
              <span class="nav-dropdown-icon">🌐</span>
              <span class="nav-dropdown-text">
                <strong>Ekosistem</strong>
                <small>Komunitas & jaringan kami</small>
              </span>
            </a>
            <a href="https://barizaloka.id/#nilai" role="menuitem">
              <span class="nav-dropdown-icon">✦</span>
              <span class="nav-dropdown-text">
                <strong>Nilai Kami</strong>
                <small>Prinsip & budaya Barizaloka</small>
              </span>
            </a>
            <a href="https://barizaloka.id/#mitra" role="menuitem">
              <span class="nav-dropdown-icon">🤝</span>
              <span class="nav-dropdown-text">
                <strong>Mitra</strong>
                <small>Partner & kolaborator</small>
              </span>
            </a>
          </div>
        </div>

        <a href="https://barizaloka.id/#layanan">Layanan</a>
        <a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
        <a href="https://shop.barizaloka.id" target="_blank" rel="noopener">Toko Kami</a>
        <a href="https://instagram.com/namaku.ahla" class="btn-nav-cta" target="_blank" rel="noopener">Hubungi Kami</a>

      </div>

      <button class="navbar-toggle" aria-label="Toggle menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </nav>
  </div>
</header>
