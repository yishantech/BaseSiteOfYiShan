<?php
/**
 * Post Format gallery
 * @package flat-responsive
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<header class="entry-header">
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>

		<div class="entry-meta">
			<span class="post-format">
				<i class="fa fa-picture-o"></i>&nbsp;<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'gallery' ) ); ?>"><?php echo get_post_format_string( 'gallery' ); ?></a>
			</span>

			<?php flat_responsive_posted_on(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'flat-responsive' ), __( '1 Comment', 'flat-responsive' ), __( '% Comments', 'flat-responsive' ) ); ?></span>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'flat-responsive' ), '<span class="edit-link">', '</span>' ); ?>

		</div><!-- .entry-meta -->
		</h2>


	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'flat-responsive' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat-responsive' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->

<div class="article-separator"></div>
