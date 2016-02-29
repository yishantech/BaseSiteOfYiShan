<?php get_template_part('banner','strip'); ?>
<div class="container">
	<div class="row-fluid">
			<!-- Call Function sidebar Check -->
			<div class="<?php  rambo_post_layout_class(); ?> Blog_main">
			<div class="blog_single_post">
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post();
			
			// call the post featured image / thumbnail
			rambo_post_thumbnail('blog_section2_img'); 
			?>
			<!-- Call permalink with excerpt -->
			<?php rambo_post_parmalink_excerpt(); ?>
			
			<!-- Call post meta Part -->
	        <?php rambo_post_meta_content(); ?>	
	
			<?php endwhile; ?>
			<?php else : ?>
			<h2><?php _e( "Nothing Found", 'rambo' ); ?></h2>
			<div class="">
			<p><?php _e( "Sorry, but nothing matched your search criteria. Please try again with some different keywords.", 'rambo' ); ?>
			</p>
			<?php get_search_form(); ?>
			</div><!-- .blog_con_mn -->
			<?php endif; ?>
            </div>
		</div>
		<?php get_sidebar();?>
	</div>
</div>
<?php  get_footer() ?>
