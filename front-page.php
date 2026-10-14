<?php get_header(); ?>

<main>
    <section class="hero" aria-labelledby="hero-title">
        <picture>
            <source media="(max-width: 860px)" srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/hero-banner-m.png')); ?>">
            <img class="hero__image" src="<?php echo esc_url(get_theme_file_uri('/assets/images/hero-banner.png')); ?>" alt="Renert Bright Minds students learning math and writing">
        </picture>
        <div class="hero__content">
            <p class="hero__eyebrow">
                <img class="hero__eyebrow-dot" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/enrolment-dot.svg')); ?>" alt="">
                <span>ACCEPTING ENROLMENTS</span>
            </p>
            <h1 class="hero__title" id="hero-title">Kids Are Smart</h1>
            <p class="hero__copy">Renert Bright Minds believes kids are capable of more than we expect. Our afterschool Math and Writing programs give them the challenge and space to discover what they can do. Weekly classes are available online or in person.</p>
            <div class="hero__action">
                <a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Our Team</a>
                <!-- <p class="hero__note">Free 30-minute assessment · Ages 5+</p> -->
            </div>
        </div>
    </section>

    <div class="enroll-sticky-region">
        <section class="enroll-strip" id="schedule" aria-label="Enrollment availability">
            <div class="enroll-strip__inner">
                <h2 class="enroll-strip__title">Limited spaces available</h2>
                <a class="button button--light" href="<?php echo esc_url(home_url('/contact/')); ?>">Inquire Now</a>
            </div>
        </section>

        <?php
        $homepage_slides = new WP_Query(array(
            'post_type' => 'homepage_slide',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => array('menu_order' => 'ASC', 'date' => 'ASC'),
            'no_found_rows' => true,
        ));
        ?>
        <?php if ($homepage_slides->have_posts()) : ?>
            <section class="split-section about" aria-label="About Renert Bright Minds">
                <div class="about-carousel swiper" aria-roledescription="carousel" aria-label="Discover Bright Minds">
                    <div class="swiper-wrapper">
                        <?php while ($homepage_slides->have_posts()) : $homepage_slides->the_post(); ?>
                            <div class="about-carousel__slide swiper-slide">
                                <div class="split-section__inner">
                                    <div class="split-section__content">
                                        <h2 class="section-title" id="about-title-<?php the_ID(); ?>"><?php the_title(); ?></h2>
                                        <div class="split-section__copy"><?php the_content(); ?></div>
                                        <a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Our Team</a>
                                    </div>
                                    <div class="split-section__media">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('large', array('class' => 'split-section__image', 'loading' => 'lazy')); ?>
                                        <?php else : ?>
                                            <img class="split-section__image" src="<?php echo esc_url(get_theme_file_uri('/assets/images/renert-school-building.jpg')); ?>" alt="Renert School campus building" loading="lazy">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php if ($homepage_slides->post_count > 1) : ?>
                        <div class="about-carousel__controls">
                            <button class="about-carousel__previous" type="button" aria-label="Previous slide"><span aria-hidden="true">
                                <!-- &#8592;</span> -->
                               <img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/arrow-left-s-line.svg')); ?>" />
                            </button>
                            <div class="about-carousel__pagination"></div>
                            <button class="about-carousel__next" type="button" aria-label="Next slide">
                                 <img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/arrow-right-s-line.svg')); ?>" />
                                <!-- <span aria-hidden="true">
                                &#8594;</span> -->
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <section class="programs" aria-labelledby="programs-title">
        <div class="programs__header">
            <h2 class="section-title programs__title" id="programs-title">Our Programs</h2>
            <p class="programs__copy">Our Math and Writing programs give students the challenge and support to keep growing.</p>
        </div>

        <div class="programs__grid programs__grid-2-column">
            <article class="program-card program-card--blue">
                <span class="program-card__number">Math</span>
                <!-- <h3 class="program-card__title">Math</h3> -->
                <p class="program-card__copy">Created by Aaron and Moses Renert, two of Western Canada's leading mathematics educators, our after-school math program in Calgary combines Singapore Math, Russian Mathematics, Harvard Math Circles, mental math, and multiplication tables to build strong problem-solving skills. </p>
            </article>

            <article class="program-card program-card--green">
                <span class="program-card__number">Writing</span>
                <!-- <h3 class="program-card__title">Writing</h3> -->
                <p class="program-card__copy">Our English Writing program builds strong writing skills through engaging narratives, informative writing, and a structured approach that makes writing fun.</p>
            </article>

            <!-- <article class="program-card program-card--red">
                <span class="program-card__number">3</span>
                <h3 class="program-card__title">Harvard<br>Math Circle</h3>
                <p class="program-card__copy">Introduces students to advanced, discussion-based math explorations that encourage curiosity, discovery, and higher-level thinking.</p>
            </article> -->
        </div>
    </section>
    <section class="process" aria-labelledby="process-title">
        <div class="process__inner">
            <div class="process__header">
                <h2 class="section-title process__title" id="process-title">Our Process</h2>
                <p class="process__intro">Getting started is easy.<br>Scroll down to explore each step.</p>
            </div>

            <ol class="process__steps">
                <li class="process__step process__step--learn">
                    <span class="process__icon">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/process-learn.svg')); ?>" alt="" width="117" height="117" loading="lazy">
                    </span>
                    <h3 class="process__step-title">Learn</h3>
                    <p class="process__copy">First, contact our team to learn about our programs. If you’re interested in moving forward, we’ll continue with an assessment.</p>
                </li>
                <li class="process__step">
                    <span class="process__icon">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/process-assess.svg')); ?>" alt="" width="117" height="117" loading="lazy">
                    </span>
                    <h3 class="process__step-title">Assess</h3>
                    <p class="process__copy">Next, your child completes an assessment to determine their level in Math and/or Writing. We’ll also help you find a class time that fits your family’s schedule.</p>
                </li>
                <li class="process__step">
                    <span class="process__icon">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/process-register.svg')); ?>" alt="" width="117" height="117" loading="lazy">
                    </span>
                    <h3 class="process__step-title">Register</h3>
                    <p class="process__copy">Finally, complete registration and payment. Once enrolled, you’ll receive your child’s class information and materials.</p>
                </li>
            </ol>

            <a class="button button--primary process__button" href="<?php echo esc_url(home_url('/contact/')); ?>">Inquire Now</a>
        </div>
    </section>

    <section class="testimonials" aria-labelledby="testimonials-title">
        <h2 class="section-title testimonials__title" id="testimonials-title">Why Families Choose Bright Minds</h2>
        <div class="testimonials__viewport swiper" aria-label="Family testimonials">
            <div class="testimonials__track swiper-wrapper">

                <?php
                $testimonials = new WP_Query(array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                ));
                ?>
                <?php if ($testimonials->have_posts()) : ?>
                    <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                        <?php
                        $location = get_post_meta(get_the_ID(), '_cbm_testimonial_location', true) ?: 'Calgary, Canada';
                        $rating = get_post_meta(get_the_ID(), '_cbm_testimonial_rating', true) ?: 5;
                        $verified = get_post_meta(get_the_ID(), '_cbm_testimonial_verified', true);
                        $avatar = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?: get_theme_file_uri('/assets/icons/avatar-circle.svg');
                        $review_text = wp_strip_all_tags(get_post_field('post_content', get_the_ID()));
                        ?>
                        <article class="review-card swiper-slide">
                            <div class="review-card__profile">
                                <!-- <img class="review-card__avatar" src="<?php //echo esc_url($avatar); ?>" alt="<?php //the_title(); ?>"> -->
                                <div class="review-card__identity">
                                    <div class="review-card__name-row">
                                        <h3 class="review-card__name"><?php the_title(); ?></h3>
                                        <?php if ('1' === $verified) : ?>
                                            <img class="review-card__badge" src="<?php echo esc_url(get_theme_file_uri('/assets/images/review-badge.png')) ?>" alt="Verified Review">
                                        <?php endif; ?>
                                    </div>
                                    <p class="review-card__location"><?php echo esc_html($location); ?></p>
                                </div>
                            </div>
                            <div class="review-card__stars" aria-label="<?php echo esc_attr($rating); ?> out of 5 stars">
                                <?php for ($i = 1; $i <= (int) $rating; $i++) : ?>
                                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="<?php echo esc_attr($rating); ?> out of 5 stars">
                                <?php endfor; ?>
                               
                            </div>
                            <p class="review-card__copy" data-review-copy><?php echo esc_html($review_text); ?></p>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                <?php endif; ?>
                
            </div>
            <div class="testimonials__pagination swiper-pagination"></div>
        </div>
    </section>

    <section class="results" aria-labelledby="results-title">
        <h2 class="section-title results__title" id="results-title">Proven Results</h2>
        <dl class="results__list">
            <div class="results__item">
                <dt class="results__label">Students enriched in Math &amp; Writing</dt>
                <dd class="results__value"><span class="odometer results__odometer" data-count="25000">0</span><span class="results__suffix">+</span></dd>
            </div>
            <div class="results__item">
                <dt class="results__label">Families served yearly</dt>
                <dd class="results__value"><span class="odometer results__odometer" data-count="1300">0</span><span class="results__suffix">+</span></dd>
            </div>
            <!--<div class="results__item">
                <dt class="results__label">Renert-developed materials</dt>
                <dd class="results__value"><span class="odometer results__odometer" data-count="100">0</span><span class="results__suffix">%</span></dd>
            </div>-->
            <div class="results__item">
                <dt class="results__label">Homework Help sessions</dt>
                <dd class="results__value">Unlimited</dd>
            </div>
        </dl>
    </section>

    <?php get_template_part('template-parts/section', 'cta'); ?>
</main>

<?php get_footer(); ?>
