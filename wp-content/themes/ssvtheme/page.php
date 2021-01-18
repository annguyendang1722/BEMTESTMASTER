<?php get_header(); ?>
	<main class="main-content" role="main">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content( __( 'Content', 'ssvwp' )); ?>
        </article>
        <!-- /article -->

        <?php endwhile; else: ?>

        <!-- article -->
        <article>
            <h1><?php _e( 'Sorry, nothing to display.', 'ssvtheme' ); ?></h3>
        </article>
        <!-- /article -->

        <?php endif; ?>
	</main>
<?php get_footer(); ?>
