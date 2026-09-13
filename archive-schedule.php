<?php
get_header();

$cbm_schedule_asset = static function ($path) {
    return esc_url(get_theme_file_uri('/' . ltrim($path, '/')));
};


$cbm_schedule_contact_url = esc_url(home_url('/contact/'));
$today = date('Y-m-d 00:00:00');
$cbm_schedule_query = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type'      => 'schedule',
    'post_status'    => 'publish',
    'meta_key'       => 'event_date',
    'orderby'        => 'meta_value',
    'meta_type'      => 'DATETIME',
    'order'          => 'ASC',
    'meta_query'     => array(
                     array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'DATETIME'
                        )
                    )
));
?>

<main class="event-list-page">
        <section class="event-list" aria-labelledby="event-list-title">
            <div class="event-list__inner">
                <header class="event-list__header">
                    <h1 class="event-list__title" id="event-list-title">Class Calendar 2026-2027</h1>
                    <a class="event-list__archive-link" href="schedule.html">
                        <span>Past Event List</span>
                        <img src="<?php echo $cbm_schedule_asset('/assets/icons/schedule-arrow-right.svg'); ?>" alt="">
                    </a>
                </header>

                <div class="schedule-events event-list__events">
                    <?php if($cbm_schedule_query->have_posts()) { ?>

                        <?php while($cbm_schedule_query->have_posts()) {
                            $cbm_schedule_query->the_post(); ?>
                        
                            <article class="schedule-event event-list__event" id="event-list-aug-4-math-am">
                                <div class="schedule-event__date">
                                    <span>
                                        <?php $eventDate = new DateTime(get_field('event_date'));
                                        echo $eventDate->format('M')
                                    ?>
                                </span>
                                    <strong>
                                        <?php  echo $eventDate->format('d') ?>
                                    </strong>
                                </div>
                                <div class="schedule-event__body">
                                    <h2 class="schedule-event__title"><?php the_title(); ?></h2>
                                    <!-- <p class="schedule-event__teacher">Teacher Sarah</p> -->
                                    <div class="schedule-event__meta">
                                        <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-clock.svg'); ?>" alt="">10:00 AM - 12:00 PM</span>
                                        <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-location.svg'); ?>" alt="">Main Campus, Calgary AB</span>
                                    </div>
                                    <a class="schedule-event__link" href="<?php the_permalink();?>">Learn More <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg')?>" alt=""></a>
                                </div>
                            </article>

                        <?php } wp_reset_postdata();?>
                    <?php } else { ?>
                      <p class="schedule-calendar__empty">No schedules found.</p>
                    <?php } ?>
                </div>
                <nav class="event-list__pagination" aria-label="Event list pagination">
                    <?php echo paginate_links(); ?>
                </nav>
                <!-- Pagination -->
                <!-- <nav class="event-list__pagination" aria-label="Event list pagination">
                    <a class="event-list__pagination-link event-list__pagination-link--previous" href="#">
                        <img src="<?php //echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg'); ?>" alt="">
                        <span>Back</span>
                    </a>
                    <ol class="event-list__pagination-pages">
                        <li><a class="event-list__pagination-page is-active" href="#" aria-current="page">1</a></li>
                        <li><a class="event-list__pagination-page" href="#">2</a></li>
                        <li><a class="event-list__pagination-page" href="#">3</a></li>
                        <li><a class="event-list__pagination-page" href="#">4</a></li>
                        <li><a class="event-list__pagination-page" href="#">5</a></li>
                    </ol>
                    <a class="event-list__pagination-link" href="#">
                        <span>Next</span>
                        <img src="<?php //echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg')?>" alt="">
                    </a>
                </nav> -->
            </div>
        </section>
    </main>

<?php get_footer(); ?>