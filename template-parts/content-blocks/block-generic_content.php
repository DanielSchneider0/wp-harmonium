<?php
/**
 * The template used for displaying a generic content block.
 *
 * @package Harmonium
 */

// Set up fields.
$block_title = get_sub_field( 'title' );
$content     = get_sub_field( 'content' );

// Start a <container> with possible block options.
harmonium_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'rev-home-hero rev-Row' // Container class.
	)
);
?>
	<div class="rev-Row rev-Row--flex rev-Row--justifyCenter display-flex container<?php echo esc_attr( harmonium_get_animation_class() ); ?>">
		<div class="rev-Row">
			<div class="rev-Col">
				<?php if ( $block_title ) : ?>
					<h2 class="generic-content-title"><?php echo esc_html( $block_title ); ?></h2>
				<?php endif; ?>

				<?php echo harmonium_get_the_content( $content ); // WP XSS OK. ?>
			</div><!-- .rev-Col -->
		</div><!-- .rev-Row -->
	</div><!-- .container -->
</section><!-- .generic-content -->
