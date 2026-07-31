<?php get_header(); ?>
<main class="container" style="padding: 6rem 1.5rem 3rem;">
  <?php while (have_posts()) {
      the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
  <?php } ?>
</main>
<?php get_footer(); ?>
