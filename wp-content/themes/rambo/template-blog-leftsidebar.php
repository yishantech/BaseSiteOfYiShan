<?php //Template Name: Blog-leftsidebar ?>
<!-- Call banner Part -->
<?php get_template_part('banner','strip'); ?>
<div class="container">
<!-- Blog Section Content -->
<div class="row-fluid">
<?php get_sidebar();?>
<!-- Blog Main -->
			<!-- Call Function sidebar Check -->
	<div class="<?php  rambo_post_layout_class(); ?> Blog_main">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post','paged'=>$paged);		
		$post_type_data = new WP_Query( $args );
		while($post_type_data->have_posts()){
		$post_type_data->the_post();
		global $more;
		$more = 0;
		?>		
		<?php get_template_part('content',''); ?>
		<?php } ?>
		<div class="pagination_section">
			<div class="pagination text-center">
				<ul>
					<li><?php previous_posts_link( __('Previous','rambo') ); ?></li>
					<li><?php next_posts_link( __('Next','rambo'), $post_type_data->max_num_pages ); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
<?php get_footer();?>