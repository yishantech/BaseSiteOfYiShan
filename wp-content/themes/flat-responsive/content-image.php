<?php
/**
 * Post Format Image
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php edit_post_link( __( 'Edit', 'flat-responsive' ), '<span class="edit-link">', '</span>' ); ?><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="entry-content">
		<?php
			the_content( __( 'See More...', 'flat-responsive' ) );
		?>
		<footer class="entry-meta">
		<span class="post-format">
				<i class="fa fa-file-image-o"></i>&nbsp;<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'image' ) ); ?>"><?php echo get_post_format_string( 'image' ); ?></a>
			</span>
                <?php flat_responsive_posted_on(); ?>
        </footer>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
