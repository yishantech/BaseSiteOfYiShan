<?php
/**
 * The template for displaying image attachments
 * @package flat-responsive
 * @since 1.0.0
 */

// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();

get_header();
?>

<section id="fr-content-area" role="main">
    <div class="container">
        <div class="row">    
			<div class="col-md-12">

	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
	?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">

						<span class="entry-date"><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
						<?php echo esc_html( get_the_date() ); ?></time></span>

						<span class="parent-post-link"><a href="<?php echo get_permalink( $post->post_parent ); ?>" rel="gallery">
						<?php echo get_the_title( $post->post_parent ); ?></a></span>
						
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="entry-attachment">
						<div class="attachment">
							<?php flat_responsive_the_attached_image(); ?>
						</div><!-- .attachment -->

						<?php if ( has_excerpt() ) : ?>
						<div class="entry-caption">
							<?php the_excerpt(); ?>
						</div><!-- .entry-caption -->
						<?php endif; ?>
					</div><!-- .entry-attachment -->

					<?php
						the_content();
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat-responsive' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<nav id="image-navigation" class="navigation image-navigation">
				<div class="post-nav-links">
				<?php previous_image_link( false, '<div class="previous-image"><span class="icon-arrow-left"></span></div>' ); ?>
				<?php next_image_link( false, '<div class="next-image"><span class="icon-arrow-right3"></span></div>' ); ?>
		</div><!-- .nav-links -->
			</nav><!-- #image-navigation -->

			<?php //comments_template(); ?>

		<?php endwhile; // end of the loop. ?>
        
			</div>
		</div>
	</div><!-- #content -->
</section><!-- #primary -->

<?php
get_footer();
