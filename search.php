<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
								<h1 class="page-title"><?php /* translators: the term(s) searched */ printf( esc_html__( 'Search Results for: %s', 'harmonium' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
									* Run the loop for the search to output the results.
									* If you want to overload this in a child theme then include a file
									* called content-search.php and that will be used instead.
									*/
								get_template_part( 'template-parts/content', 'search' );

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
			</div><!-- rev-Content -->
		</div><!-- rev-ContentWrapper -->
	</main><!-- #main -->

<?php get_footer(); ?>
