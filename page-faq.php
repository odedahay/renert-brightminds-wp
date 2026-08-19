<?php
get_header();

$cbm_faq_asset = static function ($path) {
    return esc_url(get_theme_file_uri('/' . ltrim($path, '/')));
};

$cbm_faq_contact_url = esc_url(home_url('/contact/'));
$cbm_faq_categories = get_terms(array(
    'taxonomy' => 'faq_category',
    'hide_empty' => false,
));

$cbm_faq_category_icons = array(
    'assessments' => 'faq-assessments.png',
    'assessments-placement' => 'faq-assessments.png',
    'getting-started' => 'faq-getting-started.png',
    'programs' => 'faq-programs.png',
    'programs-classes' => 'faq-programs.png',
    'registration' => 'faq-registration.png',
    'registration-fees' => 'faq-registration.png',
    'scheduling' => 'faq-scheduling.png',
    'scheduling-attendance' => 'faq-scheduling.png',
    'started' => 'faq-getting-started.png',
);
?>

<?php while (have_posts()) {
    the_post();
} ?>

<main class="faq-page">
    <section class="faq-hero" aria-labelledby="faq-hero-title">
        <div class="faq-hero__content">
            <h1 class="faq-hero__title" id="faq-hero-title">Frequently<br>Asked<br>Questions</h1>
        </div>

        <aside class="faq-hero__card" aria-labelledby="faq-contact-title">
            <div class="faq-hero__card-content">
                <h2 class="faq-hero__card-title" id="faq-contact-title">Still have questions?</h2>
                <p class="faq-hero__card-copy">Contact us to learn more about our programs, schedules, and registrations.</p>
                <a class="button button--primary" href="<?php echo $cbm_faq_contact_url; ?>">Contact Us</a>
            </div>
        </aside>
    </section>
    <section class="faq-search" aria-labelledby="faq-search-title">

        <div class="faq-search__inner">
            <header class="faq-search__header">
                <h2 class="faq-search__title" id="faq-search-title">How can we help you?</h2>
                <label class="faq-search__bar">
                    <span class="sr-only">Search for a question</span>
                    <input class="faq-search__input" type="search" placeholder="Search for a question..." autocomplete="off">
                    <img class="faq-search__icon" src="<?php echo $cbm_faq_asset('assets/icons/faq-search.png'); ?>" alt="">
                </label>
               
            </header>

            <?php if (!is_wp_error($cbm_faq_categories) && $cbm_faq_categories) : ?>
                <div class="faq-categories" aria-label="FAQ categories">
                    <?php foreach ($cbm_faq_categories as $category) :
                        $category_icon = $cbm_faq_category_icons[$category->slug] ?? 'faq-programs.png';
                    ?>
                        <button class="faq-category" type="button" data-faq-category="<?php echo esc_attr($category->slug); ?>">
                            <img class="faq-category__icon" src="<?php echo $cbm_faq_asset('assets/icons/' . $category_icon); ?>" alt="">
                            <h3 class="faq-category__title"><?php echo esc_html($category->name); ?></h3>
                        </button>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="faq-search__inner_reset">
                <button class="faq-search__reset" type="button" data-faq-reset aria-label="Reset FAQ filters">
                    <span aria-hidden="true">
                        <img class="faq-search__reset-icon" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/refresh-line.svg')); ?>" alt="">
                    </span>
                    <span class="faq-search__reset-label">Reset</span>
                </button>
            </div>

        </div>
    </section>

    <section class="faq-accordion" id="faqs" aria-label="Frequently asked questions">
        <div class="faq-accordion__list">
            <?php
            $faqs = new WP_Query(array(
                'post_type' => 'faq',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => array(
                    'menu_order' => 'ASC',
                    'date' => 'DESC'
                ),
            ));

            if ($faqs->have_posts()) :
                while ($faqs->have_posts()) :
                    $faqs->the_post();

                    $terms = get_the_terms(get_the_ID(), 'faq_category');
                    $tags = (!is_wp_error($terms) && $terms) ? implode(' ', wp_list_pluck($terms, 'slug')) : '';
            ?>
                    <article class="faq-item" data-faq-tags="<?php echo esc_attr($tags); ?>">
                        <button class="faq-item__trigger" type="button" aria-expanded="false">
                            <span><?php the_title(); ?></span>
                            <img class="faq-item__icon" src="<?php echo $cbm_faq_asset('assets/icons/arrow-down.svg'); ?>" alt="">
                        </button>
                        <div class="faq-item__panel">
                            <?php the_content(); ?>
                        </div>
                    </article>
            <?php
                endwhile;
            endif;

            wp_reset_postdata();
            ?>
        </div>
        <p class="faq-accordion__empty" role="status">No matching questions found.</p>
    </section>

    <section class="cta faq-cta" id="assessment" aria-labelledby="cta-title">
        <div class="cta__panel faq-cta__panel">
            <h2 class="cta__title" id="cta-title">Ready to build your child's academic muscle?</h2>
            <div class="faq-cta__actions">
                <a class="button button--primary" href="#enrol">Enrol Now</a>
                <a class="button button--secondary" href="<?php echo esc_url(home_url('/schedule/')); ?>">View Schedule</a>
            </div>
        </div>
    </section>
</main>



<?php get_footer(); ?>
