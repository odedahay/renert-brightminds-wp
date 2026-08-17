<?php get_header(); ?>



<main class="contact-page">
    <section class="contact-main" id="contact-form" aria-labelledby="contact-title">
        <div class="contact-intro">
            <p class="contact-pill">
                <img class="contact-pill__icon" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/enrolment-dot.svg')); ?>" alt="ENROLMENT NOW OPEN">
                <span>ENROLMENT NOW OPEN</span>
            </p>

            <h1 class="contact-title" id="contact-title">Speak with<br>our team</h1>
            <p class="contact-copy">Tell us about your child, and we'll match them with a program tailored to their pace and goals.</p>

            <div class="contact-info" aria-label="Contact details">
                <article class="contact-info-card">
                    <span class="contact-info-card__icon-wrap">
                        <img class="contact-info-card__icon" src="<?php echo esc_url(get_theme_file_uri('assets/icons/contact-phone.png')); ?>" alt="">
                    </span>
                    <div>
                        <h2 class="contact-info-card__label">CALL US</h2>
                        <a class="contact-info-card__value" href="tel:15873921115">587-392-1115</a>
                    </div>
                </article>

                <article class="contact-info-card">
                    <span class="contact-info-card__icon-wrap">
                        <img class="contact-info-card__icon" src="<?php echo esc_url(get_theme_file_uri('assets/icons/contact-email.png')); ?>" alt="">
                    </span>
                    <div>
                        <h2 class="contact-info-card__label">EMAIL</h2>
                        <a class="contact-info-card__value" href="mailto:tutoring@renert.com">tutoring@renert.com</a>
                    </div>
                </article>

                <article class="contact-hours">
                    <div class="contact-hours__header">
                        <span class="contact-hours__icon-wrap">
                            <img class="contact-hours__icon" src="<?php echo esc_url(get_theme_file_uri('assets/icons/contact-clock.png')); ?>" alt="">
                        </span>
                        <div>
                            <h2 class="contact-hours__eyebrow">SUMMER 2026</h2>
                            <p class="contact-hours__range">JUNE 16 - SEPT 7</p>
                        </div>
                    </div>
                    <dl class="contact-hours__list">
                        <div class="contact-hours__row">
                            <dt>Monday - Thursday</dt>
                            <dd>4:00 - 7:00 PM</dd>
                        </div>
                        <div class="contact-hours__row">
                            <dt>Friday - Saturday</dt>
                            <dd>Closed</dd>
                        </div>
                        <div class="contact-hours__row">
                            <dt>Statutory Holidays</dt>
                            <dd>Closed</dd>
                        </div>
                    </dl>
                </article>

                <article class="contact-help">
                    <img class="contact-help__icon" src="<?php echo esc_url(get_theme_file_uri('assets/icons/contact-help.png')); ?>" alt="">
                    <p class="contact-help__text">Ask about our Math and Writing programs!</p>
                </article>
            </div>
        </div>
        <!-- Form Start -->

        <div class="contact-form-shell">
                <?php echo do_shortcode('[contact-form-7 id="d875d90" title="Contact form 1" html_class="contact-form"]'); ?>
                <p class="contact-form__privacy">We keep your information private and only use it to get in touch with you.</p>
        </div>

        <!-- <div class="contact-form-shell">
            <form class="contact-form" data-contact-form data-current-step="2" data-thank-you-url="thank-you.html" action="thank-you.html" method="get">
                <div class="contact-form__stepper" aria-label="Form progress">
                    <span class="contact-form__step contact-form__step--complete" data-step-indicator="1">
                        <span class="contact-form__step-number">1</span>
                        <img class="contact-form__step-check" src="<?php echo esc_url(get_theme_file_uri('assets/icons/contact-step-check.png')); ?>" alt="">
                    </span>
                    <span class="contact-form__step-line"></span>
                    <span class="contact-form__step contact-form__step--active" data-step-indicator="2" aria-current="step">
                        <span class="contact-form__step-number">2</span>
                    </span>
                </div>

                <section class="contact-form__section contact-form__panel" data-form-step="1" aria-labelledby="parent-contact-title" hidden>
                    <header class="contact-form__header">
                        <p class="contact-form__eyebrow">STEP 1 OF 2</p>
                        <h2 class="contact-form__title" id="parent-contact-title">Primary Parent Contact</h2>
                        <p class="contact-form__copy">Please enter the primary parent or guardian's contact information carefully, as we'll use it for future communication.</p>
                    </header>

                    <div class="contact-form__grid">
                        <label class="form-field">
                            <span class="form-field__label">First name *</span>
                            <input class="form-field__control" type="text" name="parent_first_name" autocomplete="given-name" placeholder="First name" required disabled>
                        </label>
                        <label class="form-field">
                            <span class="form-field__label">Last name *</span>
                            <input class="form-field__control" type="text" name="parent_last_name" autocomplete="family-name" placeholder="Last Name" required disabled>
                        </label>
                        <label class="form-field form-field--wide">
                            <span class="form-field__label">Email address *</span>
                            <input class="form-field__control" type="email" name="email" autocomplete="email" placeholder="name@example.com" required disabled>
                        </label>
                        <label class="form-field form-field--wide">
                            <span class="form-field__label">Phone number *</span>
                            <input class="form-field__control" type="tel" name="phone" autocomplete="tel" placeholder="(403)000-0000" required disabled>
                        </label>
                    </div>
                </section>

                <section class="contact-form__section contact-form__panel is-active" data-form-step="2" aria-labelledby="student-info-title">
                    <header class="contact-form__header">
                        <p class="contact-form__eyebrow">STEP 2 OF 2</p>
                        <h2 class="contact-form__title" id="student-info-title">Student Information</h2>
                        <p class="contact-form__copy">Tell us about your child so we can find the right program.</p>
                    </header>

                    <div class="contact-form__grid">
                        <label class="form-field">
                            <span class="form-field__label">Student first name *</span>
                            <input class="form-field__control" type="text" name="student_first_name" placeholder="First name" required>
                        </label>
                        <label class="form-field">
                            <span class="form-field__label">Student last name *</span>
                            <input class="form-field__control" type="text" name="student_last_name" placeholder="Last Name" required>
                        </label>
                        <label class="form-field form-field--select">
                            <span class="form-field__label">Current grade *</span>
                            <select class="form-field__control" name="grade" required>
                                <option value="">Select your child's grade</option>
                                <option>Kindergarten</option>
                                <option>Grade 1</option>
                                <option>Grade 2</option>
                                <option>Grade 3</option>
                                <option>Grade 4</option>
                                <option>Grade 5</option>
                                <option>Grade 6</option>
                                <option>Grade 7</option>
                                <option>Grade 8</option>
                                <option>Grade 9</option>
                                <option>Grade 10</option>
                                <option>Grade 11</option>
                                <option>Grade 12</option>
                            </select>
                        </label>
                        <label class="form-field form-field--select">
                            <span class="form-field__label">Program of interest *</span>
                            <select class="form-field__control" name="program" required>
                                <option value="">Select a program</option>
                                <option>Math</option>
                                <option>Writing</option>
                                <option>Math and Writing</option>
                                <option>Assessment</option>
                            </select>
                        </label>
                        <label class="form-field form-field--wide">
                            <span class="form-field__label">Comments</span>
                            <textarea class="form-field__control form-field__control--textarea" name="comments" placeholder="List additional information here and any comments you would like to add. We will contact you soon!" rows="4"></textarea>
                        </label>
                    </div>
                </section>

                <div class="contact-form__actions">
                    <button class="contact-form__back" type="button" data-previous-step>
                        <img class="contact-form__back-icon" src="<?php echo esc_url(get_theme_file_uri('assets/icons/contact-step-back-arrow.svg')); ?>" alt="">
                        <span>Back</span>
                    </button>
                    <button class="button button--primary contact-form__next" type="button" data-next-step>Continue</button>
                    <button class="button button--primary contact-form__submit" type="submit">Send Inquiry</button>
                    <p class="contact-form__status" role="status" aria-live="polite"></p>
                </div>
            </form>

            <p class="contact-form__privacy">We keep your information private and only use it to get in touch with you.</p>
        </div> -->
        <!-- /Form End -->
    </section>
</main>


<?php get_footer(); ?>