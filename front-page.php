<?php get_header(); ?>

<main>
    <section class="hero" aria-labelledby="hero-title">
        <img class="hero__image" src="<?php echo esc_url(get_theme_file_uri('/assets/images/hero-banner.png')); ?>" alt="Renert Bright Minds students learning math and writing">
        <div class="hero__content">
            <p class="hero__eyebrow">
                <img class="hero__eyebrow-dot" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/enrolment-dot.svg')); ?>" alt="">
                <span>ENROLMENT NOW OPEN</span>
            </p>
            <h1 class="hero__title" id="hero-title">Build academic muscle</h1>
            <p class="hero__copy">After-school math and writing programs that help students become stronger learners. Available online or in person.</p>
            <div class="hero__action">
                <a class="button button--primary" href="#assessment">Book a FREE Assessment</a>
                <p class="hero__note">Free 30-minute assessment · Ages 5+</p>
            </div>
        </div>
    </section>

    <section class="enroll-strip" id="schedule" aria-label="Enrollment availability">
        <div class="enroll-strip__inner">
            <h2 class="enroll-strip__title">Limited spaces available</h2>
            <a class="button button--light" href="#enrol">Enrol Now</a>
        </div>
    </section>

    <section class="split-section about" aria-labelledby="about-title">
        <div class="split-section__inner">
            <div class="split-section__content">
                <h2 class="section-title" id="about-title">What is Renert Bright Minds?</h2>
                <p class="split-section__copy">Renert Bright Minds brings the quality of a Renert education to after-school learning. Designed for students ages 5 and up, our math and writing enrichment programs help build strong academic skills in a supportive, challenging environment. Every child is assessed before entering a program to be matched with the appropriate peer group and instructor.</p>
                <a class="button button--primary" href="#assessment">Book a FREE Assessment</a>
            </div>
            <div class="split-section__media">
                <img class="split-section__image" src="<?php echo esc_url(get_theme_file_uri('/assets/images/renert-school-building.png')); ?>" alt="Renert School campus building">
            </div>
        </div>
    </section>

    <section class="programs" aria-labelledby="programs-title">
        <div class="programs__header">
            <h2 class="section-title programs__title" id="programs-title">Our Programs</h2>
            <p class="programs__copy">Created by Aaron and Moses Renert, two of Western Canada's leading mathematics educators, our after-school math program in Calgary combines Singapore Math, Russian Mathematics, Harvard Math Circles, mental math, and multiplication tables to build strong problem-solving skills. Our English Writing program builds strong communication skills through grammar and structured writing.</p>
        </div>

        <div class="programs__grid">
            <article class="program-card program-card--blue">
                <span class="program-card__number">1</span>
                <h3 class="program-card__title">Singapore<br>Math</h3>
                <p class="program-card__copy">Builds strong number sense and problem-solving skills by helping students understand math visually before moving to abstract concepts.</p>
            </article>

            <article class="program-card program-card--green">
                <span class="program-card__number">2</span>
                <h3 class="program-card__title">Russian<br>Mathematics</h3>
                <p class="program-card__copy">Develops deep mathematical reasoning through challenging problems that help students think logically, creatively, and independently.</p>
            </article>

            <article class="program-card program-card--red">
                <span class="program-card__number">3</span>
                <h3 class="program-card__title">Harvard<br>Math Circle</h3>
                <p class="program-card__copy">Introduces students to advanced, discussion-based math explorations that encourage curiosity, discovery, and higher-level thinking.</p>
            </article>
        </div>
    </section>

    <section class="testimonials" aria-labelledby="testimonials-title">
        <h2 class="section-title testimonials__title" id="testimonials-title">Why Families Choose Bright Minds</h2>
        <div class="testimonials__viewport swiper" aria-label="Family testimonials">
            <div class="testimonials__track swiper-wrapper">
                <article class="review-card swiper-slide">
                    <div class="review-card__profile">
                        <img class="review-card__avatar" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/avatar-circle.svg')); ?>" alt="Avatar">
                        <div class="review-card__identity">
                            <div class="review-card__name-row">
                                <h3 class="review-card__name">Tamar Amit</h3>
                                <img class="review-card__badge" src="<?php echo esc_url(get_theme_file_uri('/assets/images/review-badge.png')) ?>" alt="Verified review">
                            </div>
                            <p class="review-card__location">Calgary, Canada</p>
                        </div>
                    </div>
                    <div class="review-card__stars" aria-label="5 out of 5 stars">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                    </div>
                    <p class="review-card__copy" data-review-copy>We couldn't be happier with the Bright Minds math program at Renert School. Both of our children have benefited tremendously from the program and enjoy attending every week. The teachers are wonderful! Knowledgeable, engaging, and great at making math fun through games and interactive activities. We love that classes are small, allowing for personal attention, and that each child can progress at their own pace and move up as soon as they're ready.</p>
                    <button class="review-card__more" type="button">Continue Reading</button>
                </article>

                <article class="review-card swiper-slide">
                    <div class="review-card__profile">
                        <img class="review-card__avatar" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/avatar-circle.svg')); ?>" alt="">
                        <div class="review-card__identity">
                            <div class="review-card__name-row">
                                <h3 class="review-card__name">Keegan Raines</h3>
                                <img class="review-card__badge" src="<?php echo esc_url(get_theme_file_uri('/assets/images/review-badge.png')); ?>" alt="Verified review">
                            </div>
                            <p class="review-card__location">Calgary, Canada</p>
                        </div>
                    </div>
                    <div class="review-card__stars" aria-label="5 out of 5 stars">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                    </div>
                    <p class="review-card__copy" data-review-copy>We chose Bright Minds because we were moving abroad and the education quality was not the same. Our kids kept motivated, had great instructors, and continued to progress at their own pace. They won math competitions and were labeled human calculators by classmates. The experience and practice gave them strong mental math and confidence as they navigated moving schools.
                        nd that each child can progress at their own pace and move up as soon as they're ready. We love that classes are small, allowing for personal attention, and that each child can progress at their own pace and move up as soon as they're ready
                    </p>
                </article>

                <article class="review-card swiper-slide">
                    <div class="review-card__profile">
                        <img class="review-card__avatar" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/avatar-circle.svg')); ?>" alt="">
                        <div class="review-card__identity">
                            <div class="review-card__name-row">
                                <h3 class="review-card__name">Tara Ikeda</h3>
                                <img class="review-card__badge" src="<?php echo esc_url(get_theme_file_uri('/assets/images/review-badge.png')); ?>" alt="Verified review">
                            </div>
                            <p class="review-card__location">Calgary, Canada</p>
                        </div>
                    </div>
                    <div class="review-card__stars" aria-label="5 out of 5 stars">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                    </div>
                    <p class="review-card__copy" data-review-copy>My son has been enrolled in both math and literacy streams with Bright Minds for the past four years. I can't imagine learning without Bright Minds.</p>
                </article>

                <article class="review-card swiper-slide">
                    <div class="review-card__profile">
                        <img class="review-card__avatar" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/avatar-circle.svg')); ?>" alt="">
                        <div class="review-card__identity">
                            <div class="review-card__name-row">
                                <h3 class="review-card__name">Tara Ikeda</h3>
                                <img class="review-card__badge" src="<?php echo esc_url(get_theme_file_uri('/assets/images/review-badge.png')); ?>" alt="Verified review">
                            </div>
                            <p class="review-card__location">Calgary, Canada</p>
                        </div>
                    </div>
                    <div class="review-card__stars" aria-label="5 out of 5 stars">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                    </div>
                    <p class="review-card__copy" data-review-copy>My son has been enrolled in both math and literacy streams with Bright Minds for the past four years. I can't imagine learning without Bright Minds. Leave the teaching to the experts! The support is top notch, the program is amazing and the teachers are rock stars!</p>
                </article>

                <article class="review-card swiper-slide">
                    <div class="review-card__profile">
                        <img class="review-card__avatar" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/avatar-circle.svg')); ?>" alt="">
                        <div class="review-card__identity">
                            <div class="review-card__name-row">
                                <h3 class="review-card__name">Tara Ikeda</h3>
                                <img class="review-card__badge" src="<?php echo esc_url(get_theme_file_uri('/assets/images/review-badge.png')); ?>" alt="Verified review">
                            </div>
                            <p class="review-card__location">Calgary, Canada</p>
                        </div>
                    </div>
                    <div class="review-card__stars" aria-label="5 out of 5 stars">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/star.png')); ?>" alt="">
                    </div>
                    <p class="review-card__copy" data-review-copy>My son has been enrolled in both math and literacy streams with Bright Minds for the past </p>
                </article>
            </div>
            <div class="testimonials__pagination swiper-pagination"></div>
        </div>
    </section>

    <section class="results" aria-labelledby="results-title">
        <h2 class="section-title results__title" id="results-title">Proven Results</h2>
        <dl class="results__list">
            <div class="results__item">
                <dt class="results__label">Students improved in Math &amp; Writing</dt>
                <dd class="results__value"><span class="odometer results__odometer" data-count="25000">0</span><span class="results__suffix">+</span></dd>
            </div>
            <div class="results__item">
                <dt class="results__label">Families served yearly</dt>
                <dd class="results__value"><span class="odometer results__odometer" data-count="1300">0</span><span class="results__suffix">+</span></dd>
            </div>
            <div class="results__item">
                <dt class="results__label">Parent recommendation rate</dt>
                <dd class="results__value"><span class="odometer results__odometer" data-count="96">0</span><span class="results__suffix">%</span></dd>
            </div>
            <div class="results__item">
                <dt class="results__label">Homework Help sessions</dt>
                <dd class="results__value">Unlimited</dd>
            </div>
        </dl>
    </section>

    <section class="cta" id="assessment" aria-labelledby="cta-title">
        <div class="cta__panel">
            <h2 class="cta__title" id="cta-title">Ready to build your child's academic muscle?</h2>
            <a class="button button--primary " href="#enrol">Enrol Now</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>