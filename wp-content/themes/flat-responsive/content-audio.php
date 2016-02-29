<?php
/**
 * Post Format audio
 * @package flat-responsive
 * @since 1.0.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
    
   
   <div class="entry-content"> 
        <header>
        <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php if(the_title( '', '', false ) !='') the_title(); else _e('Untitled', 'flat-responsive'); ?> </a>
                <div class="entry-meta">
			<span class="post-format">
				<span class="icon-forward post-format-icon"></span><a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'audio' ) ); ?>"><?php echo get_post_format_string( 'audio' ); ?></a>
			</span>

			<?php flat_responsive_posted_on(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'flat-responsive' ), __( '1 Comment', 'flat-responsive' ), __( '% Comments', 'flat-responsive' ) ); ?></span>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'flat-responsive' ), '<span class="edit-link">', '</span>' ); ?>

		</div><!-- .entry-meta -->   
        </h2>


	</header>
		<?php 
			if ( has_post_thumbnail()) :
				echo '<div class="audio-thumbnail">';
					the_post_thumbnail('big');
				echo '</div>';
			endif; 
		?>
		<?php the_content(); ?>
	</div><!-- .entry-content -->
    
	<footer class="entry-meta"></footer>
    
</article><!-- #post-## -->

<div class="article-separator"></div>
