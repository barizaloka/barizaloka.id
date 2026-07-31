<?php
/**
 * Mitra Section
 */
$mitra_query = new WP_Query([
    'post_type' => 'mitra',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
]);

if (! $mitra_query->have_posts()) {
    return;
}
?>
<section class="section section-alt" id="mitra">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">🏆 Kepercayaan</span>
            <h2 class="section-title"><?php esc_html_e('Dipercaya Oleh Mitra & Klien Kami', 'barizaloka'); ?></h2>
        </div>
        <div class="mitra-list">
            <?php while ($mitra_query->have_posts()) {
                $mitra_query->the_post();
                $url = get_post_meta(get_the_ID(), '_mitra_url', true);
                $ikon = get_post_meta(get_the_ID(), '_mitra_ikon', true);
                $desc = get_post_meta(get_the_ID(), '_mitra_deskripsi', true);
                $tag = $url ? 'a' : 'div';
                $attr = $url ? sprintf('href="%s" target="_blank" rel="noopener"', esc_url($url)) : '';
                ?>
            <<?php echo $tag; ?> <?php echo $attr; ?> class="mitra-badge">
                <?php if ($ikon) { ?>
                    <span class="mitra-icon"><?php echo esc_html($ikon); ?></span>
                <?php } ?>
                <div class="mitra-badge-info">
                    <strong><?php the_title(); ?></strong>
                    <?php if ($desc) { ?>
                        <span><?php echo esc_html($desc); ?></span>
                    <?php } ?>
                </div>
            </<?php echo $tag; ?>>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</section>
