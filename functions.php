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
