<?php
/**
 * Default template for pages without a more specific template.
 */
defined('ABSPATH') || exit;

get_header();
?>


<main id="primary" class="event-detail-page">
    <?php while (have_posts()) : the_post(); ?>
        <section class="event-detail" aria-labelledby="page-title-<?php echo absint(get_the_ID()); ?>">
            <div class="event-detail__inner">
                <header class="event-detail__header">
                    <h1 class="event-detail__title" id="page-title-<?php echo absint(get_the_ID()); ?>"><?php echo esc_html(get_the_title()); ?></h1>
                </header>

                <div class="event-detail__layout event-detail__layout-one-col">
                    <article id="post-<?php echo absint(get_the_ID()); ?>" <?php post_class('event-detail__main'); ?>>
                        <?php
                        // Preserve WordPress blocks, shortcodes, and password protection.
                        the_content();

                        if (!post_password_required()) {
                            wp_link_pages(array(
                                'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page sections', 'calgarybrightminds-theme') . '">',
                                'after' => '</nav>',
                            ));
                        }
                        ?>
                    </article>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</main>


<?php get_footer(); ?>
