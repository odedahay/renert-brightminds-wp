<?php

function calgarybrightminds_files() {
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

function calgarybrightminds_resource_hints($urls, $relation_type) {
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


