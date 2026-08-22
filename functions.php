<?php

function calgarybrightminds_files()
{
    wp_enqueue_style(
        'calgarybrightminds-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
        array(),
        '12'
    );

    wp_enqueue_style(
        'odometer',
        'https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css',
        array(),
        '0.4.8'
    );

    wp_enqueue_style(
        'calgarybrightminds-main',
        get_theme_file_uri('/css/styles.css'),
        array('calgarybrightminds-fonts', 'swiper', 'odometer'),
        filemtime(get_theme_file_path('/css/styles.css'))
    );

    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
        array(),
        '12',
        true
    );

    wp_enqueue_script(
        'odometer',
        'https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js',
        array(),
        '0.4.8',
        true
    );

    wp_enqueue_script(
        'calgarybrightminds-main',
        get_theme_file_uri('/js/scripts.js'),
        array('swiper', 'odometer'),
        filemtime(get_theme_file_path('/js/scripts.js')),
        true
    );
}

add_action('wp_enqueue_scripts', 'calgarybrightminds_files');

function calgarybrightminds_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'calgarybrightminds_features');

function calgarybrightminds_resource_hints($urls, $relation_type)
{
    if ('preconnect' === $relation_type) {
        $urls[] = 'https://fonts.googleapis.com';
        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }

    return $urls;
}

add_filter('wp_resource_hints', 'calgarybrightminds_resource_hints', 10, 2);

function calgarybrightminds_favicons()
{
?>
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/assets/images/cropped-brightminds_favicon-32x32.png')); ?>" sizes="32x32">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/assets/images/cropped-brightminds_favicon-192x192.png')); ?>" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_file_uri('/assets/images/cropped-brightminds_favicon-180x180.png')); ?>">
    <meta name="msapplication-TileImage" content="<?php echo esc_url(get_theme_file_uri('/assets/images/cropped-brightminds_favicon-270x270.png')); ?>">
<?php
}

add_action('wp_head', 'calgarybrightminds_favicons');

// add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_validate_tel*', 'cbm_validate_canadian_phone', 20, 2);
add_filter('wpcf7_validate_tel', 'cbm_validate_canadian_phone', 20, 2);


function cbm_validate_canadian_phone($result, $tag) {
    $field_name = $tag->name;

    if ('parent-phone' !== $field_name) {
        return $result;
    }

    $phone = isset($_POST[$field_name])
        ? sanitize_text_field(wp_unslash($_POST[$field_name]))
        : '';

    $digits = preg_replace('/\D+/', '', $phone);

    if (strlen($digits) === 11 && str_starts_with($digits, '1')) {
        $digits = substr($digits, 1);
    }

    $is_valid = strlen($digits) === 10
        && preg_match('/^[2-9]\d{2}[2-9]\d{6}$/', $digits);

    if (!$is_valid) {
        $result->invalidate($tag, 'Please enter a valid Canadian phone number.');
    }

    return $result;
}
// This accepts formats like:
// 403-555-1234
// (403) 555-1234
// +1 403 555 1234
// 1-403-555-1234

// Testmonials Custom Post Type 

function cbm_register_testimonial_post_type(){
    register_post_type( 'testimonial', array(
        'labels' => array(
            'name'=>'Testimonials',
            'singular_name' => 'Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'view_item' => 'View Testimonial',
            'search_items' => 'Search Testimonials',
            'not_found' => 'No testimonials found',
            'menu_name' => 'Testimonials',
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'testimonial'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'cbm_register_testimonial_post_type');

// Testimonial CPT admin
// CPT for Testimonials

function cbm_add_testimonial_meta_boxes() {
    add_meta_box(
        'cbm_testimonial_details',
        'Testimonial Details',
        'cbm_render_testimonial_meta_box',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'cbm_add_testimonial_meta_boxes');

function cbm_render_testimonial_meta_box($post) {
    wp_nonce_field('cbm_save_testimonial_details', 'cbm_testimonial_nonce');

    $location = get_post_meta($post->ID, '_cbm_testimonial_location', true);
    $rating = get_post_meta($post->ID, '_cbm_testimonial_rating', true);
    $verified = get_post_meta($post->ID, '_cbm_testimonial_verified', true);
    ?>

    <p>
        <label for="cbm_testimonial_location"><strong>Location</strong></label><br>
        <input type="text" id="cbm_testimonial_location" name="cbm_testimonial_location" value="<?php echo esc_attr($location); ?>" style="width:100%;">
    </p>

    <p>
        <label for="cbm_testimonial_rating"><strong>Rating</strong></label><br>
        <select id="cbm_testimonial_rating" name="cbm_testimonial_rating">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <option value="<?php echo esc_attr($i); ?>" <?php selected((int) $rating, $i); ?>>
                    <?php echo esc_html($i); ?> Star<?php echo $i > 1 ? 's' : ''; ?>
                </option>
            <?php endfor; ?>
        </select>
    </p>

    <p>
        <label>
            <input type="checkbox" name="cbm_testimonial_verified" value="1" <?php checked($verified, '1'); ?>>
            Verified review
        </label>
    </p>

    <?php
}

function cbm_save_testimonial_details($post_id) {
    if (!isset($_POST['cbm_testimonial_nonce']) || !wp_verify_nonce($_POST['cbm_testimonial_nonce'], 'cbm_save_testimonial_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    update_post_meta($post_id, '_cbm_testimonial_location', sanitize_text_field($_POST['cbm_testimonial_location'] ?? ''));
    update_post_meta($post_id, '_cbm_testimonial_rating', absint($_POST['cbm_testimonial_rating'] ?? 5));
    update_post_meta($post_id, '_cbm_testimonial_verified', isset($_POST['cbm_testimonial_verified']) ? '1' : '0');
}
add_action('save_post_testimonial', 'cbm_save_testimonial_details');


// FAQ Custom POST Type
function cbm_register_faq_post_type() {
    register_post_type('faq', array(
        'labels' => array(
            'name' => 'FAQs',
            'singular_name' => 'FAQ',
            'add_new_item' => 'Add New FAQ',
            'edit_item' => 'Edit FAQ',
            'new_item' => 'New FAQ',
            'view_item' => 'View FAQ',
            'search_items' => 'Search FAQs',
            'not_found' => 'No FAQs found',
            'menu_name' => 'FAQs',
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-editor-help',
        'supports' => array('title', 'editor', 'author', 'page-attributes'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'faq'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'cbm_register_faq_post_type');


// FAQ Custom POST Type - > Category
function cbm_register_faq_taxonomy() {
    register_taxonomy('faq_category', 'faq', array(
        'labels' => array(
            'name' => 'FAQ Categories',
            'singular_name' => 'FAQ Category',
            'menu_name' => 'FAQ Categories',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'faq-category'),
    ));
}
add_action('init', 'cbm_register_faq_taxonomy');

function cbm_add_faq_order_column($columns) {
    $ordered_columns = array();
    $author_label = $columns['author'] ?? 'Author';
    unset($columns['author']);

    foreach ($columns as $key => $label) {
        $ordered_columns[$key] = $label;

        if ('title' === $key) {
            $ordered_columns['menu_order'] = 'Order';
        }

        if ('taxonomy-faq_category' === $key) {
            $ordered_columns['author'] = $author_label;
        }
    }

    if (!isset($ordered_columns['author'])) {
        $ordered_columns['author'] = $author_label;
    }

    return $ordered_columns;
}
add_filter('manage_faq_posts_columns', 'cbm_add_faq_order_column');

function cbm_render_faq_order_column($column, $post_id) {
    if ('menu_order' !== $column) {
        return;
    }

    echo esc_html(get_post_field('menu_order', $post_id));
}
add_action('manage_faq_posts_custom_column', 'cbm_render_faq_order_column', 10, 2);

function cbm_make_faq_order_column_sortable($columns) {
    $columns['menu_order'] = 'menu_order';

    return $columns;
}
add_filter('manage_edit-faq_sortable_columns', 'cbm_make_faq_order_column_sortable');
