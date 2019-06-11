<?php
/**
 * The template used for displaying a CTA block.
 *
 * @package Harmonium
 */

// Set up fields.
$block_title = get_sub_field( 'title' );
$text        = get_sub_field( 'text' );

// Start a <container> with possible block options.
harmonium_display_block_options(
	array(
		'container' => 'aside', // Any HTML5 container: section, div, etc...
		'class'     => 'rev-home-hero rev-Row' // Container class.
	)
);
?>
	<div class="container rev-Row rev-Row--flex rev-Row--justifyCenter <?php echo esc_attr( harmonium_get_animation_class() ); ?>">
		<div class="rev-Row rev-Row--flex">
			<div class="rev-Col rev-Col--medium6 rev-Col--small12">
				<?php if ( $block_title ) : ?>
					<h1 class="cta-title"><?php echo esc_html( $block_title ); ?></h1>
				<?php endif; ?>

				<?php if ( $text ) : ?>
					<h2 class="cta-text"><?php echo esc_html( $text ); ?></h2>
				<?php endif; ?>
			</div><!-- .rev-Col -->
		
			<div class="rev-Col rev-Col--alignCenter rev-Col--medium6 rev-Col--small12">
				<?php
				harmonium_display_link(
					array(
						'button' => true,
						'class'  => 'button-cta',
					)
				);
				?>
			</div><!-- .rev-Col -->
		</div><!-- .rev-Row -->
	</div><!-- .container -->
</aside><!-- .cta-block -->
