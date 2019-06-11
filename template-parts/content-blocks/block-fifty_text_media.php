<?php
/**
 *  The template used for displaying fifty/fifty text/media.
 *
 * @package Harmonium
 */

// Set up fields.
$image_data = get_sub_field( 'media_right' );
$text       = get_sub_field( 'text_primary' );

// Start a <container> with a possible media background.
harmonium_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'rev-Row' // Container class.
	)
);
?>
	<div class="rev-Row rev-Row--flex rev-Row--justifyCenter display-flex container<?php echo esc_attr( harmonium_get_animation_class() ); ?>">
		<div class="rev-Row">
			<div class="rev-Col rev-Col--medium6">
				<?php echo harmonium_get_the_content( $text ); // WPCS: XSS OK. ?>
			</div>

			<div class="rev-Col rev-Col--medium6">
				<img class="fifty-media-image" src="<?php echo esc_url( $image_data['url'] ); ?>" alt="<?php echo esc_html( $image_data['alt'] ); ?>">
			</div>
		</div><!-- .rev-Row -->
	</div><!-- .container -->
</section><!-- .fifty-text-media -->
