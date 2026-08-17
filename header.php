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
    <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
    </a>
</header>

<header class="site-header">
        <div class="announcement">
            <a class="announcement__link" href="#" aria-label="View other Renert programs">
                <span class="announcement__text">Other RENERT Programs</span>
                <img class="announcement__icon" src="assets/icons/arrow-down.svg" alt="">
            </a>
        </div>

        <nav class="nav" aria-label="Main navigation">
            <a class="nav__brand" href="#" aria-label="Renert Bright Minds home">
                <img class="nav__logo" src="assets/images/logo.png" alt="Renert Bright Minds">
            </a>

            <button class="nav__toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
                <span class="nav__toggle-line"></span>
                <span class="nav__toggle-line"></span>
                <span class="nav__toggle-line"></span>
                <span class="nav__toggle-label">Menu</span>
            </button>

            <div class="nav__menu" id="primary-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a class="nav__link active" href="<?php echo esc_url(home_url('/'))?>">Home</a></li>
                    <li class="nav__item"><a class="nav__link" href="<?php echo esc_url(home_url('/schedule'))?>">Schedule</a></li>
                    <li class="nav__item"><a class="nav__link" href="contact.html">Contact</a></li>
                    <li class="nav__item"><a class="nav__link" href="faq.html">FAQs</a></li>
                </ul>
                <a class="nav__portal" href="#">Parent Portal</a>
            </div>
        </nav>
    </header>
