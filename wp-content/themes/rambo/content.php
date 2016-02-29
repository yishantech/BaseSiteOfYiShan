<!-- Check whether block is single or in Blog -->
<div class="<?php if(is_single()) echo "blog_single_post"; else echo "blog_section2";?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
	// call the post featured image / thumbnail
	rambo_post_thumbnail('blog_section2_img'); 	  
?>
	<h2><a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<!-- Call post meta Part -->
	<?php rambo_post_meta_content(); ?>	
	<!-- Check Post Search -->
	<?php if ( is_search() ) 
	{ rambo_post_parmalink_excerpt(); }
	// Call post content part
	else { ?>
	<p><?php  the_content( __( 'Read More' , 'rambo' ) ); ?></p>
	<!-- Call All link pages of post -->
	<?php wp_link_pages( ); ?>						
	<p class="tags_alignment">
	<?php $posttags = get_the_tags(); 
	if ($posttags) { ?>
	<span class="blog_tags"><i class="fa fa-tags"></i><a href="<?php the_permalink(); ?>"><?php the_tags(__('Tags:','rambo'));?></a></span>
	<?php }  ?>
	</p><?php } ?>
</div>