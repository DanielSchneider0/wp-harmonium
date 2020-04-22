<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Harmonium
 */

get_header(); ?>

	<main id="main" class="site-main">
		<div class="rev-ContentWrapper">
			<div class="rev-Content">
				<div class="rev-Row">
					<div class="rev-Col rev-Col--small9">

						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<?php
									the_archive_title( '<h1 class="page-title">', '</h1>' );
									the_archive_description( '<div class="archive-description">', '</div>' );
								?>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							harmonium_display_numeric_pagination();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
						</div><!-- rev-Col -->
						<div class="rev-Col rev-Col--small3">
							<?php get_sidebar(); ?>
						</div><!-- rev-Col -->
					</div><!-- rev-Row -->
				</div>
			</div>
		</div>
	</main><!-- #main -->
				

	</main><!-- #main -->
<?php get_footer(); ?>
