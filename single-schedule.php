<?php get_header(); 

$cbm_schedule_asset = static function ($path) {
    return esc_url(get_theme_file_uri('/' . ltrim($path, '/')));
};

?>


<main class="event-detail-page">
        <section class="event-detail" aria-labelledby="event-detail-title">
            <div class="event-detail__inner">
                <header class="event-detail__header">
                    <h1 class="event-detail__title" id="event-detail-title"><?php the_title(); ?></h1>
                    <a class="event-detail__back-link" href="<?php echo get_post_type_archive_link('schedule'); ?>">
                        <span>Back to Event List</span>
                        <img src="<?php echo $cbm_schedule_asset('assets/icons/event-detail/arrow-right.svg'); ?>" alt="">
                    </a>
                </header>

                <div class="event-detail__layout">
                    <article class="event-detail__main">
                        <p class="event-detail__intro"><?php the_content(); ?></p>

                        <img class="event-detail__image" src="<?php echo $cbm_schedule_asset('assets/images/event-detail/math-class-pm.png'); ?>" alt="Children smiling while using a tablet in class">

                        <section class="event-detail__section" aria-labelledby="event-experience-title">
                            <h2 class="event-detail__section-title" id="event-experience-title">What You'll Experience</h2>
                            <ul class="event-detail__list">
                                <li>Connect &amp; Network with Tech Professional in Calgary</li>
                                <li>Engage in fun games and team activities</li>
                                <li>Share and enjoy homemade dishes brought by community members</li>
                            </ul>
                        </section>

                        <section class="event-detail__section" aria-labelledby="event-attend-title">
                            <h2 class="event-detail__section-title" id="event-attend-title">Who Should Attend</h2>
                            <ul class="event-detail__list">
                                <li>Tech professionals of all levels</li>
                                <li>Student and recent graduates interested in tech</li>
                                <li>Anyone interested in networking within the tech community</li>
                            </ul>
                        </section>
                    </article>

                    <aside class="event-detail__sidebar" aria-label="Event information">
                        <div class="event-detail__sidebar-group">
                            <div class="event-detail__meta-card">
                                <p class="event-detail__meta-row">
                                    <img src="<?php echo $cbm_schedule_asset('assets/icons/event-detail/calendar.svg'); ?>" alt="">
                                    <span>September 1, 2025</span>
                                </p>
                                <p class="event-detail__meta-row">
                                    <img src="<?php echo $cbm_schedule_asset('assets/icons/event-detail/clock.svg'); ?>" alt="">
                                    <span>10:00 AM - 12:00 PM</span>
                                </p>
                                <p class="event-detail__meta-row">
                                    <img src="<?php echo $cbm_schedule_asset('assets/icons/event-detail/location.svg'); ?>" alt="">
                                    <span>Main Campus, Calgary AB</span>
                                </p>
                            </div>

                            <div class="event-detail__author">
                                <span class="event-detail__author-label">By:</span>
                                <span class="event-detail__author-name">
                                    <img src="<?php echo $cbm_schedule_asset('assets/icons/event-detail/user.svg'); ?>" alt="">
                                    <span>Teacher Sarah</span>
                                </span>
                            </div>
                        </div>

                        <div class="event-detail__sidebar-group">
                            <a class="button button--primary button--mid event-detail__button" href="contact.html">Book a FREE Assessment</a>
                            <p class="event-detail__questions">Questions? Reach out to us<br><a href="mailto:tutoring@renert.com">tutoring@renert.com</a></p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>
