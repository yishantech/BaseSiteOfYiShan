<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package flat-responsive
 * @since 1.0.0
 */
?>
<section class="not-found">
	<div class="page-content no-results">
    <header class="page-header">
		<h1 class="page-title"><?php _e( 'Our apologies, nothing was found', 'flat-responsive' ); ?></h1>
	</header><!-- .page-header -->

	
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'flat-responsive' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Unfortunately, nothing matched your search terms. Please try again with some different keywords.', 'flat-responsive' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'flat-responsive' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section><!-- .no-results -->
