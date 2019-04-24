<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Harmonium
 */

get_header(); ?>

	<main id="main" class="site-main">
		<div class="rev-ContentWrapper">
			<div class="rev-Content">
				<section class="error-404 not-found container">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Sorry, this page doesn\'t exist.', 'harmonium' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">

						<p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'harmonium' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div><!-- end rev-Content -->
		</div><!-- end rev-ContentWrapper -->
	</main><!-- #main -->

<?php get_footer(); ?>
