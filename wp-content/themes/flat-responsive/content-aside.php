<?php
/**
 * Post Format Aside
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row" style="margin:0px; padding:0px;">

	<?php if ( has_post_thumbnail()) : ?>
        <div class="col-md-3" style="margin:0px; padding:0px;">  
           <div class="post-thumbnail">
               <?php the_post_thumbnail(); ?>
           </div>      
        </div>
        <div class="col-md-9" style="margin:0px; padding:0px;">
    <?php else : ?>
        <div class="col-md-12" style="margin:0px; padding:0px;">
    <?php endif; ?>
    
	<?php if ( is_single() ) : 
		the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header>' ); 
		endif;	?>
    <div class="entry-content-link">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'flat-responsive' ) ); ?>
	</div>
        
    <footer class="entry-meta">
        <span class="post-format">
        <span class="icon-forward post-format-icon"></span><a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>"><?php echo get_post_format_string( 'aside' ); ?></a>
        </span>
    	<?php flat_responsive_posted_on(); ?>
       
    	<?php edit_post_link( __( 'Edit', 'flat-responsive' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>       
    
  </div>
</div>
			
	
</article>

<div class="article-separator"></div>