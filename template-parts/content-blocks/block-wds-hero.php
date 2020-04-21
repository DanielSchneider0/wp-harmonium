<?php
/**
 * The template used for displaying a Hero block.
 *
 * @package Harmonium
 */

// Set up fields.
$block_title = get_field( 'title' );
$text        = get_field( 'text' );
$alignment   = harmonium_get_block_alignment( $block );
$classes     = harmonium_get_block_classes( $block );

// Start a <container> with possible block options.
harmonium_display_block_options(
	array(
		'block'     => $block,
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'rev-Row rev-Row--flex rev-Row--alignCenter content-block hero-block' . esc_attr( $alignment . $classes ), // Container class.
	)
);
?>
	<div class="container hero-block-content">
		<?php harmonium_display_hero_heading( $block_title ); ?>
		<div class="rev-Row">
			<div class="rev-Col">
				<?php if ( $text ) : ?>
					<p class="hero-block-description"><?php echo esc_html( $text ); ?></p>
				<?php endif; ?>

				<?php
				harmonium_display_link(
					array(
						'button' => true,
						'class'  => 'button-hero',
					)
				);
				?>
			</div><!-- end rev-Col -->
		</div><!-- end rev-Row -->
	</div>
</section>
