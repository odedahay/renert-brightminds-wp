<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">

        <div class="announcement">
            <div class="announcement__dropdown">
                <button class="announcement__link" type="button" aria-haspopup="true">
                    <span class="announcement__text">Other RENERT Programs</span>
                    <img class="announcement__icon" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/arrow-down.svg')); ?>" alt="">
                </button>
                <ul class="announcement__menu" aria-label="Other RENERT Programs">
                    <li class="announcement__menu-item">
                        <a class="announcement__menu-link" href="https://renertschool.ca/" target="_blank">Renert School</a>
                    </li>
                </ul>
            </div>
        </div>

        <nav class="nav" aria-label="Main navigation">
            <a class="nav__brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Renert Bright Minds home">
                <img class="nav__logo" src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo.png')); ?>" alt="Renert Bright Minds">
            </a>

            <button class="nav__toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
                <span class="nav__toggle-line"></span>
                <span class="nav__toggle-line"></span>
                <span class="nav__toggle-line"></span>
                <span class="nav__toggle-label">Menu</span>
            </button>

            <div class="nav__menu" id="primary-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a class="nav__link <?php echo is_front_page() ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li class="nav__item"><a class="nav__link <?php echo (is_page('schedule') || is_post_type_archive('schedule') || is_singular('schedule')) ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/schedule')); ?>">Schedule</a></li>
                    <li class="nav__item"><a class="nav__link <?php echo is_page('contact') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                    <li class="nav__item"><a class="nav__link <?php echo is_page('faq') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/faq')); ?>">FAQs</a></li>
                </ul>
                <a class="nav__portal" href="<?php echo esc_url('https://register.calgarybrightminds.com/'); ?>" target="_blank">Parent Portal</a>
            </div>
        </nav>
    </header>
