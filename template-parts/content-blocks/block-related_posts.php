<?php
/**
 * The template used for displaying related posts.
 *
 * @package Harmonium
 */

// Set up fields.
$block_title   = get_sub_field( 'title' );
$related_posts = get_sub_field( 'related_posts' );

// Display section if we have any posts.
if ( $related_posts ) :

	// Start a <container> with possible block options.
	harmonium_display_block_options(
		array(
			'container' => 'section', // Any HTML5 container: section, div, etc...
			'class'     => 'rev-Row rev-Row--flex rev-Row--justifyCenter' // Container class.
		)
	);
	?>

		<div class="rev-Row">
			<div class="rev-Col">
				<?php if ( $block_title ) : ?>
					<h2 class="content-block-title"><?php echo esc_html( $block_title ); ?></h2>
				<?php endif; ?>
			</div>
		</div>

		<div class="rev-Row rev-Row--flex <?php echo esc_attr( harmonium_get_animation_class() ); ?>">

			<?php
			// Loop through recent posts.
			foreach ( $related_posts as $key => $post ) :// @codingStandardsIgnoreLine

				// Convert post object to post data.
				setup_postdata( $post );

						// Display a card.
				harmonium_display_card(
					array(
						'title' => get_the_title(),
						'image' => harmonium_get_post_image_url( 'medium' ),
						'text'  => harmonium_get_the_excerpt(
							array(
								'length' => 20,
								'more'   => '...',
							)
						),
						'url'   => get_the_permalink(),
						'class' => 'rev-Col rev-Col--medium4 rev-Col--small12',
					)
				);

			endforeach;
			wp_reset_postdata();
		?>
		</div><!-- .container -->
	</section><!-- .recent-posts -->
<?php endif; ?>
