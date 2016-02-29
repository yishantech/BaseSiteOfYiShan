<?php
/**
 * The template used for displaying page content in page.php
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( get_theme_mod( 'hide_title' ) == '') { ?>
        <header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?>
          <?php if( get_theme_mod( 'hide_title_dotline' ) == '') { ?>          
          <span class="fr-divider-dotline" style="border-color:<?php echo esc_html(get_theme_mod( 'hdg_line', '#e2e5e7' )); ?>;"><span class="fr-dot" style="background-color:<?php echo esc_html(get_theme_mod( 'hdg_dot', '#e2e5e7' )); ?>;"></span></span><?php } ?>
          
          </h1>
        </header><!-- .entry-header -->
        
	<?php } ?>
    
    <?php 
		if ( has_post_thumbnail()) :
			echo '<div class="page-thumbnail">';
				the_post_thumbnail();
			echo '</div>';
		endif; 
	?>
    
	<div class="entry-content">
		<?php the_content(); ?>
        
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'flat-responsive' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'flat-responsive' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
