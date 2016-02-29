<?php
/**
 * Post Format Link
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?>
          <?php if( get_theme_mod( 'hide_title_dotline' ) == '') { ?>          
          <span class="fr-divider-dotline" style="border-color:<?php echo esc_html(get_theme_mod( 'hdg_line', '#e2e5e7' )); ?>;"><span class="fr-dot" style="background-color:<?php echo esc_html(get_theme_mod( 'hdg_dot', '#e2e5e7' )); ?>;"></span></span><?php } ?>
          
          </h1>
        </header><!-- .entry-header -->
    <div class="entry-content clearfix link_post_format">
       <?php the_content( __( 'Continue reading...', 'flat-responsive' ) ); ?>
    </div>
</article><!-- #post-## -->
