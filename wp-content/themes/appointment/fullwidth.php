<?php
/**
Template Name: Fullwidth
*/
get_header();
get_template_part('index','banner');
?>
<div class="blog-section-lg">
	<div class="container">
		<div class="row">
			<!-- Blog Area -->
			<div class="col-md-12">
			<?php if( have_posts()) :  the_post(); ?>		
			<div class="blog-lg-area-left">
					<div class="media">						
						<?php appointment_aside_meta_content(); ?>
						<div class="media-body">
							<?php if ( has_post_thumbnail()) : ?>
							<div class="blog-lg-box">
								<a class ="img-responsive" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<?php appointment_image_thumbnail('blog-area-full','img-responsive'); ?>
								</a>
							</div>
						<?php endif; ?> 
							<?php appointment_post_meta_content(); ?>
							<p> <?php the_content( __( 'Read More' , 'appointment' ) ); ?></p>
							<?php wp_link_pages( ); ?>
							<div class="blog-btn-area-lg"><a class=""></a></div>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php comments_template( '', true ); // show comments ?>
			</div>
			<!-- /Blog Area -->	
		</div>
	</div>
</div>
<!-- /Blog Section with Sidebar -->
<?php get_footer(); ?>