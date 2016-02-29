<?php get_template_part('banner','strip'); ?>
<!-- Theme Container -->
<div class="container">
  <!-- Blog Section Wrapper -->
  <div class="row-fluid">
    <!-- Blog Single Page -->
    <div class="<?php rambo_post_layout_class(); ?> Blog_main">
		<?php   //start the loop 
				while ( have_posts() ) : the_post();
				
				// call the post content
				get_template_part('content','');
				
				// call the comments form
				comments_template( '', true );
				
				//end of loop
				endwhile;      
		?>
	</div>
	<?php  // call sidebar
	       get_sidebar();?>
  </div>
</div>
<?php 
	// call footer area
	get_footer();
?>