<?php
get_header();

$cbm_schedule_asset = static function ($path) {
    return esc_url(get_theme_file_uri('/' . ltrim($path, '/')));
};

$cbm_schedule_contact_url = esc_url(home_url('/contact/'));
$cbm_schedule_url = esc_url(home_url('/schedule/'));

?>

<?php while (have_posts()) {
    the_post();
} ?>

<main class="schedule-page">
    <section class="hero" aria-labelledby="schedule-hero-title">
        <img class="hero__image" src="<?php echo $cbm_schedule_asset('assets/images/schedule-hero-banner.png'); ?>" alt="Bright Minds student and parent">
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
                    <h3 class="schedule-calendar__month">August 2026</h3>
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
                    <div class="schedule-calendar__weekday">SUN</div>
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
                    <div class="schedule-calendar__day schedule-calendar__day--muted"><span>5</span></div>
                </div>
            </div>

            <div class="schedule-events" data-schedule-list-view>
                <article class="schedule-event" id="event-aug-4" data-event-date="2026-08-04">
                    <div class="schedule-event__date">
                        <span>AUG</span>
                        <strong>4</strong>
                    </div>
                    <div class="schedule-event__body">
                        <h3 class="schedule-event__title">Math class AM</h3>
                        <p class="schedule-event__teacher">Teacher Sarah</p>
                        <div class="schedule-event__meta">
                            <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-clock.svg'); ?>" alt="">10:00 AM - 12:00 PM</span>
                            <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-location.svg'); ?>" alt="">Main Campus, Calgary AB</span>
                        </div>
                        <a class="schedule-event__link" href="<?php echo $cbm_schedule_contact_url; ?>">Learn More <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg'); ?>" alt=""></a>
                    </div>
                </article>

                <article class="schedule-event" id="event-aug-4-rodel" data-event-date="2026-08-04">
                    <div class="schedule-event__date">
                        <span>AUG</span>
                        <strong>4</strong>
                    </div>
                    <div class="schedule-event__body">
                        <h3 class="schedule-event__title">Math class AM</h3>
                        <p class="schedule-event__teacher">Teacher Rodel</p>
                        <div class="schedule-event__meta">
                            <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-clock.svg'); ?>" alt="">02:00 PM - 04:00 PM</span>
                            <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-location.svg'); ?>" alt="">Main Campus, Calgary AB</span>
                        </div>
                        <a class="schedule-event__link" href="<?php echo $cbm_schedule_contact_url; ?>">Learn More <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg'); ?>" alt=""></a>
                    </div>
                </article>

                <article class="schedule-event" id="event-aug-6" data-event-date="2026-08-06">
                    <div class="schedule-event__date">
                        <span>AUG</span>
                        <strong>6</strong>
                    </div>
                    <div class="schedule-event__body">
                        <h3 class="schedule-event__title">English writing PM</h3>
                        <p class="schedule-event__teacher">Teacher Rodel</p>
                        <div class="schedule-event__meta">
                            <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-clock.svg'); ?>" alt="">10:00 AM - 12:00 PM</span>
                            <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-location.svg'); ?>" alt="">Main Campus, Calgary AB</span>
                        </div>
                        <a class="schedule-event__link" href="<?php echo $cbm_schedule_contact_url; ?>">Learn More <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg'); ?>" alt=""></a>
                    </div>
                </article>

                <article class="schedule-event" id="event-aug-15" data-event-date="2026-08-15">
                    <div class="schedule-event__date">
                        <span>AUG</span>
                        <strong>15</strong>
                    </div>
                    <div class="schedule-event__body">
                        <h3 class="schedule-event__title">Math class AM</h3>
                        <p class="schedule-event__teacher">Teacher Rita</p>
                        <div class="schedule-event__meta">
                            <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-clock.svg'); ?>" alt="">10:00 AM - 12:00 PM</span>
                            <span><img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-location.svg'); ?>" alt="">Zoom online</span>
                        </div>
                        <a class="schedule-event__link" href="<?php echo $cbm_schedule_contact_url; ?>">Learn More <img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg'); ?>" alt=""></a>
                    </div>
                </article>

                <div class="schedule-events__view-more-button">
                    <a class="schedule-event__more-link" href="<?php echo $cbm_schedule_url; ?>">View More Events<img src="<?php echo $cbm_schedule_asset('assets/icons/schedule-arrow-right.svg'); ?>" alt=""></a>
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