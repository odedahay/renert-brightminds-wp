<?php
get_header();

$cbm_schedule_asset = static function ($path) {
    return esc_url(get_theme_file_uri('/' . ltrim($path, '/')));
};

$cbm_schedule_contact_url = esc_url(home_url('/contact/'));

?>

<?php while (have_posts()) {
    the_post();
} ?>

<main class="schedule-page">
    <section class="hero" aria-labelledby="schedule-hero-title">
        <picture>
            <source media="(max-width: 860px)" srcset="<?php echo $cbm_schedule_asset('assets/images/schedule-hero-banner-m.png'); ?>">
            <img class="hero__image" src="<?php echo $cbm_schedule_asset('assets/images/schedule-hero-banner.png'); ?>" alt="Bright Minds student and parent">
        </picture>
        <div class="hero__content">
            <p class="hero__eyebrow">
                <img class="hero__eyebrow-dot" src="<?php echo $cbm_schedule_asset('assets/icons/enrolment-dot.svg'); ?>" alt="">
                <span>ENROLMENT NOW OPEN</span>
            </p>
            <h1 class="hero__title" id="schedule-hero-title">Fits your <br>family’s busy schedule</h1>
            <p class="hero__copy">After-school math and writing programs that help students become stronger learners. Available online or in person.</p>
            <div class="hero__action">
                <a class="button button--primary" href="<?php echo $cbm_schedule_contact_url; ?>">Book a FREE Assessment</a>
                <p class="hero__note">Free 30-minute assessment · Ages 5+</p>
            </div>
        </div>
    </section>

    <section class="schedule-calendar" aria-labelledby="schedule-calendar-title" data-schedule-view="grid">
        <div class="schedule-calendar__view-controls" role="group" aria-label="Schedule view">
            <button class="schedule-calendar__view-button is-active" type="button" data-schedule-view-button="grid" aria-pressed="true">
                <span>Grid</span>
                <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-grid.svg'); ?>" alt="">
            </button>
            <button class="schedule-calendar__view-button" type="button" data-schedule-view-button="list" aria-pressed="false">
                <span>List</span>
                <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-list.svg'); ?>" alt="">
            </button>
        </div>

        <div class="schedule-calendar__inner">
            <h2 class="schedule-calendar__title" id="schedule-calendar-title">Bright Minds 2026-2027 Class Calendar</h2>

            <div class="schedule-calendar__grid-view" data-schedule-grid-view>
                <div class="schedule-calendar__header">
                    <h3 class="schedule-calendar__month">
                        <?php echo esc_html(date_i18n('F Y', current_time('timestamp'))); ?>
                    </h3>
                    <div class="schedule-calendar__arrows">
                        <button class="schedule-calendar__arrow" type="button" data-calendar-prev aria-label="Previous month">
                            <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-prev.svg'); ?>" alt="">
                        </button>
                        <button class="schedule-calendar__arrow" type="button" data-calendar-next aria-label="Next month">
                            <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-next.svg'); ?>" alt="">
                        </button>
                    </div>
                </div>

                <div class="schedule-calendar__table" aria-label="August 2026 calendar">
                    <!-- Run by Dynamic with JS-->
                    <!-- <div class="schedule-calendar__weekday">SUN</div>
                    <div class="schedule-calendar__weekday">MON</div>
                    <div class="schedule-calendar__weekday">TUE</div>
                    <div class="schedule-calendar__weekday">WED</div>
                    <div class="schedule-calendar__weekday">THUR</div>
                    <div class="schedule-calendar__weekday">FRI</div>
                    <div class="schedule-calendar__weekday">SAT</div>

                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>26</span></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>27</span></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>28</span></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>29</span><a href="#event-aug-6">English writing PM</a></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>30</span></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>31</span><a href="#event-aug-15">Math class AM</a><a href="#event-aug-4">Math class AM</a></div>
                    <div class="schedule-calendar__day"><span>1</span></div>

                    <div class="schedule-calendar__day"><span>2</span></div>
                    <div class="schedule-calendar__day"><span>3</span></div>
                    <div class="schedule-calendar__day"><span>4</span><a href="#event-aug-4">Math class AM</a></div>
                    <div class="schedule-calendar__day"><span>5</span></div>
                    <div class="schedule-calendar__day"><span>6</span><a href="#event-aug-6">English writing PM</a></div>
                    <div class="schedule-calendar__day"><span>7</span></div>
                    <div class="schedule-calendar__day"><span>8</span></div>

                    <div class="schedule-calendar__day"><span>9</span></div>
                    <div class="schedule-calendar__day"><span>10</span><a href="#event-aug-4">Math class AM</a></div>
                    <div class="schedule-calendar__day"><span>11</span><a href="#event-aug-15">Math class AM</a><a href="#event-aug-4">Math class PM</a><a href="#event-aug-4">Math class PM</a></div>
                    <div class="schedule-calendar__day"><span>12</span></div>
                    <div class="schedule-calendar__day"><span>13</span></div>
                    <div class="schedule-calendar__day"><span>14</span><a href="#event-aug-15">Math class AM</a></div>
                    <div class="schedule-calendar__day"><span>15</span></div>

                    <div class="schedule-calendar__day"><span>16</span></div>
                    <div class="schedule-calendar__day"><span>17</span></div>
                    <div class="schedule-calendar__day"><span>18</span></div>
                    <div class="schedule-calendar__day"><span>19</span></div>
                    <div class="schedule-calendar__day"><span>20</span><a href="#event-aug-15">Math class AM</a></div>
                    <div class="schedule-calendar__day"><span>21</span></div>
                    <div class="schedule-calendar__day"><span>22</span></div>

                    <div class="schedule-calendar__day"><span>23</span></div>
                    <div class="schedule-calendar__day"><span>24</span><a href="#event-aug-4">Math class AM</a></div>
                    <div class="schedule-calendar__day"><span>25</span></div>
                    <div class="schedule-calendar__day"><span>26</span></div>
                    <div class="schedule-calendar__day"><span>27</span></div>
                    <div class="schedule-calendar__day"><span>28</span><a href="#event-aug-15">Math class AM</a></div>
                    <div class="schedule-calendar__day"><span>29</span></div>

                    <div class="schedule-calendar__day"><span>30</span></div>
                    <div class="schedule-calendar__day"><span>31</span></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>1</span></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>2</span></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>3</span></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>4</span></div>
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>5</span></div> -->
                </div>
            </div>

            <div class="schedule-events" data-schedule-list-view>
                
                <?php
               $today = date('Y-m-d 00:00:00');
               $calendarSchedules = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type'      => 'schedule',
                    'post_status'    => 'publish',
                    'meta_key'       => 'event_date',
                    'orderby'        => 'meta_value',
                    'meta_type'      => 'DATETIME',
                    'order'          => 'ASC',
                ));

                $pageSchedules = new WP_Query(array(
                    'posts_per_page' => 10,
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
              
                <?php
                while ($pageSchedules->have_posts()) {
                    $pageSchedules->the_post();
                ?>
                <!-- <pre>
                    <?php
                    //echo get_the_title() . ' => ';
                    //echo get_post_meta(get_the_ID(), 'event_date', true);
                    ?>
                    </pre> -->

                    <?php
                        $eventDate = new DateTime(get_field('event_date'));
                        $eventDateAttr = $eventDate->format('Y-m-d');
                        ?>
    
                    <article class="schedule-event" id="event-<?php the_ID(); ?>" data-event-date="<?php echo esc_attr($eventDateAttr); ?>">

                        <!-- Yellow Calendar -->
                        <div class="schedule-event__date">
                            <span>
                                <?php $eventDate = new DateTime(get_field('event_date'));
                                    echo $eventDate->format('M')
                                ?>
                            </span>
                            <strong>
                                <?php echo $eventDate->format('d')?>
                            </strong>
                        </div>
                        <!-- /Yellow Calendar -->
                        <div class="schedule-event__body">
                            <h3 class="schedule-event__title"><?php the_title(); ?></h3>
                            <!-- <p class="schedule-event__teacher">Author</p> -->
                            <div class="schedule-event__meta">
                                <!-- Time event -->
                                <span>
                                    <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-clock.svg'); ?>" alt="">10:00 AM - 12:00 PM
                                </span>
                                <!-- /Time event -->
                                <!-- Location event -->
                                <span>
                                    <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-location.svg'); ?>" alt="">Main Campus, Calgary AB
                                </span>
                            </div>
                            <a class="schedule-event__link" href="<?php the_permalink(); ?>">
                                Learn More <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg'); ?>" alt="">
                            </a>
                        </div>
                    </article>
                <?php }

                wp_reset_postdata();
                ?>
                <!-- Calendar Grid -->
                <div hidden data-calendar-events>
                    <?php while ($calendarSchedules->have_posts()) : $calendarSchedules->the_post(); ?>
                        <?php
                        $eventDate = new DateTime(get_field('event_date'));
                        ?>
                        <article
                            class="schedule-event"
                            data-event-date="<?php echo esc_attr($eventDate->format('Y-m-d')); ?>"
                        >
                            <div class="schedule-event__date">
                                <span><?php echo esc_html($eventDate->format('M')); ?></span>
                                <strong><?php echo esc_html($eventDate->format('d')); ?></strong>
                            </div>
                            <div class="schedule-event__body">
                                <h3 class="schedule-event__title"><?php the_title(); ?></h3>
                                <div class="schedule-event__meta">
                                    <span>
                                        <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-clock.svg'); ?>" alt="">10:00 AM - 12:00 PM
                                    </span>
                                    <span>
                                        <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-location.svg'); ?>" alt="">Main Campus, Calgary AB
                                    </span>
                                </div>
                                <a class="schedule-event__link" href="<?php the_permalink(); ?>">
                                    Learn More <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg'); ?>" alt="">
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <!-- / Calendar Grid -->

                <div class="schedule-events__view-more-button">
                    <a href="<?php echo get_post_type_archive_link('schedule'); ?>" class="schedule-event__more-link">View More Events
                        <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg'); ?>" alt="View More Events">
                    </a>
                </div>
            </div>

            <div class="schedule-calendar__cta">
                <p>New students interested in the program should book an assessment to determine the class that best matches their ability, goals, and learning needs.</p>
                <div class="schedule-calendar__actions">
                    <a class="button button--primary button--mid" href="<?php echo $cbm_schedule_contact_url; ?>">Book a FREE Assessment</a>
                    <a class="button button--light button--mid" href="#">Download Calendar PDF</a>
                </div>
            </div>
        </div>
    </section>

    <section class="split-section schedule-tuition" aria-labelledby="schedule-tuition-title">
        <div class="split-section__inner">
            <div class="split-section__content">
                <h2 class="section-title" id="schedule-tuition-title">Tuition</h2>
                <div class="split-section__copy">
                    <p>Program fees vary depending on the class and schedule.</p>
                    <p>Please contact us for current tuition information and available spaces.</p>
                </div>
                <a class="button button--primary" href="<?php echo $cbm_schedule_contact_url; ?>">Contact Us</a>
            </div>
            <div class="split-section__media">
                <img class="split-section__image" src="<?php echo $cbm_schedule_asset('assets/images/schedule-tuition.png'); ?>" alt="Student working in a classroom">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
