<!-- Call banner Part -->
<?php get_template_part('banner','strip'); ?>
<div class="container">
<!-- Blog Section Content -->
<div class="row-fluid">
<!-- Blog Main -->
 <!-- Call Function sidebar Check -->
<div class="<?php  rambo_post_layout_class(); ?> Blog_main">
	 
	<?php // index post loop starts here 				
	while(have_posts()):the_post();
	global $more;
	$more = 0; 
	
	// check the format of post
		
		get_template_part('content','');
		
	 endwhile; 
	 // index post loop end's here
	 ?>
	 
	 <?php rambo_post_pagination(); // call post pagination ?>
		
</div>
	<?php get_sidebar();?>
</div>
</div>
<?php get_footer();?>