<?php
/**
 * Main content 
 * @package flat-responsive
 * @since 1.0.1
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php if(the_title( '', '', false ) !='') the_title(); else _e('Untitled', 'flat-responsive'); ?> </a>
            <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                    <span class="featured-post">
                        <?php _e( '<i class="fa fa-bolt"></i> Featured', 'flat-responsive' ); ?>
                    </span>
                <?php endif; ?>	
		          <?php flat_responsive_posted_on(); ?>        
                    <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                    <span class="comments-link">
                        <?php 
                            echo '<span class="entry-comments">';
                            _e( '<i class="fa fa-comment"></i> ', 'flat-responsive' );
                            comments_popup_link( __( 'Comment', 'flat-responsive' ), __( '1 Comment', 'flat-responsive' ), __( '% Comments', 'flat-responsive' ) ); 
                        endif; ?> 
                    </span>
                    <?php if( get_theme_mod( 'hide_edit' ) == '') { ?>
                        <?php edit_post_link( __( 'Edit', 'flat-responsive' ), '<span class="edit-link">', '</span>' ); ?>
                    <?php } ?> 
            </div><!-- .entry-meta -->
		<?php endif; ?>
        </h2>
        
	</header><!-- .entry-header -->
<div class="entry-content clearfix">
	<?php if ( has_post_thumbnail()) :
        $featuredimage = get_theme_mod( 'featured_image', 'big' );
            switch ($featuredimage) {
                case "big" :
                echo '<div class="post-thumbnail fr-images-flip">';
                    the_post_thumbnail('big');
                echo '</div>';
            break;
                case "small" : 
                echo '<div class="post-thumbnail alignleft fr-images-flip1">';
                    the_post_thumbnail('medium');
                echo '</div>';
            break;
        } 		
    endif; ?>
 		<?php 
			$excon = get_theme_mod( 'excerpt_content', 'excerpt' );
			$excerpt = get_theme_mod( 'excerpt_limit', '50' );
				 switch ($excon) {
					case "content" :
						the_content(__('Continue Reading...', 'flat-responsive'));
					break;
					case "excerpt" : 
						echo '<p>' . the_excerpt() . '</p>' ;
						echo '<p class="more-link"><a class="btn btn-sm" href="' . esc_url(get_permalink()) . '">' . __('Continue Reading...', 'flat-responsive') . '</a>' ;
					break;
			}
		?>   
 		
	</div><!-- .entry-content -->

	<footer class="summary-entry-meta">
		<?php flat_responsive_multi_pages(); ?>
    </footer><!-- .entry-meta -->
    
</article><!-- #post-## -->

