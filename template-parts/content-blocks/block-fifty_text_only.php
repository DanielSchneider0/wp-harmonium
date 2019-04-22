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
		'class'     => 'content-block grid-container fifty-fifty fifty-text-only', // The container class.
	)
);
?>
	<div class="display-flex container<?php echo esc_attr( harmonium_get_animation_class() ); ?>">

		<div class="half">
			<?php echo harmonium_get_the_content( $text_primary ); // WPCS: XSS OK. ?>
		</div>

		<div class="half">
			<?php echo harmonium_get_the_content( $text_secondary ); // WPCS: XSS OK. ?>
		</div>

	</div><!-- .container -->
</section><!-- .fifty-text-only -->
