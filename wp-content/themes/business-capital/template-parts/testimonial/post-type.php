<?php
/**
 * Template part for displaying Post Types Slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Business_Capital
 */

$business_capital_args = business_capital_get_section_args( 'testimonial' );
$business_capital_loop = new WP_Query( $business_capital_args );

if ( $business_capital_loop->have_posts() ) :
	?>
	<div class="testimonial-content-wrapper">
		<div class="row">
			<?php
				while ( $business_capital_loop->have_posts() ) :
					$business_capital_loop->the_post();
					?>
					<div class="testimonial-item ff-grid-6">
						<div class="testimonial-wrapper clear-fix">
							<?php if ( has_post_thumbnail() ) : ?>
							<div class="testimonial-thumb">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'business-capital-portfolio', array( 'class' => 'pull-left' ) ); ?>
								</a>
							</div>
							<?php endif; ?>
							<div class="testimonial-summary">
								<div class="clinet-info">
									<?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h3>'); ?>
								</div>
								<!-- .clinet-info -->

								<?php business_capital_display_content( 'testimonial' ); ?>
							</div>
						</div><!-- .testimonial-wrapper -->
					</div><!-- .testimonial-item -->
				<?php
				endwhile;
			?>
		</div>
	</div><!-- .testimonial-content-wrapper -->
<?php
endif;

wp_reset_postdata();
