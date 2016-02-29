<?php
/**
 * Full post content
 * @package flat-responsive
 * @since 1.0.1
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
		<?php the_title(); ?>
       
        </h1>
        <div class="entry-meta">
            <?php flat_responsive_posted_on(); 
            if (get_theme_mod('hide_edit') == '') {
                edit_post_link( __( 'Edit', 'flat-responsive' ), '<span class="edit-link">', '</span>' ); 
            }
            ?>
        </div><!-- .entry-meta -->

		
	</header><!-- .entry-header -->
<div class="entry-content clearfix">

<?php if( get_theme_mod( 'hide_featured' ) == '') { ?>
	<?php // do not show featured image if post is paged
    $paged = get_query_var( 'page' ) ? get_query_var( 'page' ) : false;
       if ( $paged === false ): 
       
       if ( has_post_thumbnail()) :
            $featuredimage = get_theme_mod( 'featured_image', 'big' );
                switch ($featuredimage) {
                    case "big" :
                    echo '<div class="post-thumbnail">';
                        the_post_thumbnail('big');
                    echo '</div>';
                break;
                    case "small" : 
                    echo '<div class="post-thumbnail alignleft">';
                        the_post_thumbnail('medium');
                    echo '</div>';
                break;
            } 		
        endif; 
        
    endif; ?>
<?php } ?>
	
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

	<footer class="entry-meta">	
    <?php if( get_theme_mod( 'hide_postinfo' ) == '') { ?>	
            <div class="footer_meta_top_line">
			<?php the_tags(__('<span class="meta-tagged"><i class="fa fa-tags"></i>&nbsp;<span class="entry-meta-value">', 'flat-responsive') . '',',' , '</span></span>'); ?> 
			<?php printf(__('<span class="meta-posted"><i class="fa fa-folder"></i>&nbsp;<span class="entry-meta-value"> %s', 'flat-responsive'), get_the_category_list(', ')); ?></span></span> 
            <?php printf( __( '<span class="meta-author"><i class="fa fa-user"></i>&nbsp; %s', 'flat-responsive' ), '<span class="vcard entry-meta-value"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span></span>' ); ?> 
            <span class="meta-date"><?php _e('<i class="fa fa-calendar-o"></i>&nbsp; ', 'flat-responsive');?> <span class="entry-meta-value"><?php the_time(get_option('date_format')); ?></span></span>    <?php } ?>
			<?php flat_responsive_multi_pages(); ?>
            </div>
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->
