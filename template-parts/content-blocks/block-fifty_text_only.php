<?php
/**
 *  The template used for displaying fifty/fifty text/text.
 *
 * @package Harmonium
 */

// Set up fields.
$text_primary   = get_sub_field( 'text_primary' );
$text_secondary = get_sub_field( 'text_secondary' );

// Start a <container> with a possible media background.
harmonium_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'rev-home-hero rev-Row' // Container class.
	)
);
?>
	<div class="rev-Row rev-Row--flex rev-Row--justifyCenter display-flex container<?php echo esc_attr( harmonium_get_animation_class() ); ?>">
		<div class="rev-Row">
			<div class="rev-Col rev-Col--medium6">
				<?php echo harmonium_get_the_content( $text_primary ); // WPCS: XSS OK. ?>
			</div>

			<div class="rev-Col rev-Col--medium6">
				<?php echo harmonium_get_the_content( $text_secondary ); // WPCS: XSS OK. ?>
			</div>
		</div><!-- .rev-Row -->
	</div><!-- .container -->
</section><!-- .fifty-text-only -->
