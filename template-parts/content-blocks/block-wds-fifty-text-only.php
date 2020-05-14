<?php
/**
 *  The template used for displaying fifty/fifty text/text.
 *
 * @package Harmonium
 */

// Set up fields.
global $fifty_block, $fifty_alignment, $fifty_classes;
$text_primary   = get_field( 'text_primary' );
$text_secondary = get_field( 'text_secondary' );

// Start a <container> with a possible media background.
harmonium_display_block_options(
	array(
		'block'     => $fifty_block,
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'rev-Row content-block grid-container fifty-fifty-block fifty-text-only' . esc_attr( $fifty_alignment . $fifty_classes ), // The container class.
	)
);
?>
	<div class="rev-Row rev-Row--flex rev-Row--justifyCenter display-flex container">
		<div class="rev-Col rev-Col--medium6 half">
			<?php echo harmonium_get_the_content( $text_primary ); // WPCS: XSS OK. ?>
		</div>

		<div class="rev-Col rev-Col--medium6 half">
			<?php echo harmonium_get_the_content( $text_secondary ); // WPCS: XSS OK. ?>
		</div>
	</div>
</section>
