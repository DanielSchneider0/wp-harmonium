<?php
/**
 * Template Name: Full Page
 *
 * This template has no side bars and also removes the default
 * page title from being displayed in order to let pages have
 * content that bumps right up against the header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Harmonium
 */

get_header(); ?>

	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'full-page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_footer(); ?>
