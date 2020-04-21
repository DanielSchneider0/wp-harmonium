<?php
/**
 *  The template used for displaying fifty/fifty text/media.
 *
 * @package Harmonium
 */

// Set up fields.
global $fifty_block, $fifty_alignment, $fifty_classes;
$image_data = get_field( 'media_right' );
$text       = get_field( 'text_primary' );

// Start a <container> with a possible media background.
harmonium_display_block_options(
	array(
		'block'     => $fifty_block,
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'rev-Row content-block grid-container fifty-fifty-block fifty-text-media' . esc_attr( $fifty_alignment . $fifty_classes ), // Container class.
	)
);
?>
	<div class="rev-Row rev-Row--flex rev-Row--justifyCenter display-flex container">
		<div class="rev-Row">
			<div class="rev-Col rev-Col--medium6 half">
				<?php echo harmonium_get_the_content( $text ); // WPCS: XSS OK. ?>
			</div>

			<div class="rev-Col rev-Col--medium6 half">
				<?php
				if ( $image_data ) :
					echo wp_get_attachment_image( $image_data['ID'], 'full', true, array( 'class' => 'fifty-image' ) );
				endif;
				?>
			</div>
		</div><!-- end rev-Row -->
	</div>
</section>
