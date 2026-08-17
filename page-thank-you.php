<?php get_header(); ?>

<main class="thank-you-page">
    <section class="thank-you-hero" aria-labelledby="thank-you-title">
        <div class="thank-you-hero__card">
            <div class="thank-you-hero__inner">
                <span class="thank-you-hero__icon-wrap">
                    <img class="thank-you-hero__icon" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/thank-you-check.png')); ?>" alt="">
                </span>

                <h1 class="thank-you-hero__title" id="thank-you-title">Thank you!</h1>
                <p class="thank-you-hero__copy">We've received your inquiry and will reach out within three business days.</p>
            </div>
        </div>
    </section>

    <section class="thank-you-actions" aria-label="Next steps">
        <div class="thank-you-actions__inner">
            <p class="thank-you-actions__copy"><strong>Want to explore more?</strong><br>Browse our site while you wait to hear from us.</p>
            <div class="thank-you-actions__buttons">
                <a class="button button--primary button--mid" href="<?php echo esc_url(home_url('/')); ?>">Back to Home</a>
                <a class="button button--secondary button--mid" href="<?php echo esc_url(home_url('/contact/')); ?>">Submit another inquiry</a>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>