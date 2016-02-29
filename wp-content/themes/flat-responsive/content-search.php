<?php
/**
 * Search content
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="search_results">
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php flat_responsive_posted_on(); ?>            
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link">
				<?php 
                    echo '<span class="entry-comments">';
                    _e( 'Comments: ', 'flat-responsive' );
                    comments_popup_link( __( 'Leave a comment', 'flat-responsive' ), __( '1 Comment', 'flat-responsive' ), __( '% Comments', 'flat-responsive' ) ); 
                endif; ?> 
            </span>       
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-meta"></footer><!-- .entry-meta -->
	</div>
</article><!-- #post-## -->
