<?php
if (! defined('ABSPATH')) {
    exit;
}

function barizaloka_setup()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [
        'height' => 60,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ]);
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    register_nav_menus([
        'primary' => __('Menu Utama', 'barizaloka'),
    ]);
}
add_action('after_setup_theme', 'barizaloka_setup');

function barizaloka_enqueue_scripts()
{
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap',
        [], null
    );
    wp_enqueue_style(
        'barizaloka-main',
        get_template_directory_uri().'/css/main.css',
        [], filemtime(get_template_directory().'/css/main.css')
    );
    wp_enqueue_script(
        'barizaloka-main',
        get_template_directory_uri().'/js/main.js',
        [], filemtime(get_template_directory().'/js/main.js'), true
    );
}
add_action('wp_enqueue_scripts', 'barizaloka_enqueue_scripts');

function barizaloka_widgets_init()
{
    register_sidebar([
        'name' => __('Widget Area', 'barizaloka'),
        'id' => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);
}
add_action('widgets_init', 'barizaloka_widgets_init');

function barizaloka_google_tag()
{
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18096445116"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-18096445116');
    </script>
    <?php
}
add_action('wp_head', 'barizaloka_google_tag');

// =============================================
// CPT: Mitra
// =============================================

function barizaloka_register_cpt_mitra()
{
    register_post_type('mitra', [
        'labels' => [
            'name' => 'Mitra',
            'singular_name' => 'Mitra',
            'add_new' => 'Tambah Mitra',
            'add_new_item' => 'Tambah Mitra Baru',
            'edit_item' => 'Edit Mitra',
            'new_item' => 'Mitra Baru',
            'view_item' => 'Lihat Mitra',
            'search_items' => 'Cari Mitra',
            'not_found' => 'Mitra tidak ditemukan',
            'not_found_in_trash' => 'Tidak ada mitra di tong sampah',
        ],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title', 'page-attributes'],
        'rewrite' => false,
    ]);
}
add_action('init', 'barizaloka_register_cpt_mitra');

function barizaloka_mitra_meta_boxes()
{
    add_meta_box(
        'mitra_details',
        'Detail Mitra',
        'barizaloka_mitra_meta_box_cb',
        'mitra',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'barizaloka_mitra_meta_boxes');

function barizaloka_mitra_meta_box_cb($post)
{
    wp_nonce_field('barizaloka_mitra_save', 'barizaloka_mitra_nonce');
    $url = get_post_meta($post->ID, '_mitra_url', true);
    $ikon = get_post_meta($post->ID, '_mitra_ikon', true);
    $desc = get_post_meta($post->ID, '_mitra_deskripsi', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="mitra_ikon">Ikon / Emoji</label></th>
            <td>
                <input type="text" id="mitra_ikon" name="mitra_ikon" value="<?php echo esc_attr($ikon); ?>" style="width:80px;font-size:1.4rem">
                <p class="description">Masukkan emoji, contoh: 🕌 🚗 🏢</p>
            </td>
        </tr>
        <tr>
            <th><label for="mitra_url">URL Website</label></th>
            <td>
                <input type="url" id="mitra_url" name="mitra_url" value="<?php echo esc_attr($url); ?>" style="width:100%">
                <p class="description">Link ke website mitra (opsional)</p>
            </td>
        </tr>
        <tr>
            <th><label for="mitra_deskripsi">Deskripsi Singkat</label></th>
            <td>
                <input type="text" id="mitra_deskripsi" name="mitra_deskripsi" value="<?php echo esc_attr($desc); ?>" style="width:100%">
                <p class="description">Contoh: 📍 Rembang, Jawa Tengah</p>
            </td>
        </tr>
    </table>
    <?php
}

function barizaloka_mitra_save_meta($post_id)
{
    if (! isset($_POST['barizaloka_mitra_nonce'])) {
        return;
    }
    if (! wp_verify_nonce($_POST['barizaloka_mitra_nonce'], 'barizaloka_mitra_save')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (! current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = [
        '_mitra_url' => 'mitra_url',
        '_mitra_ikon' => 'mitra_ikon',
        '_mitra_deskripsi' => 'mitra_deskripsi',
    ];
    foreach ($fields as $meta_key => $post_key) {
        if (isset($_POST[$post_key])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$post_key]));
        }
    }
}
add_action('save_post_mitra', 'barizaloka_mitra_save_meta');
