<?php
/**
 * The Template for displaying all single posts.
 * @package flat-responsive
 * @since 1.0.0
 */

get_header(); ?>

<section id="fr-content-area" class="fr-contents" role="main">

<?php $singlelayout = get_theme_mod( 'single_layout', 'singleright' );

	switch ($singlelayout) {
		// Right Column
		case "singleright" :
			echo '<div class="container"><div class="row"><div class="col-md-8" role="main">';
			// get the full post
				while ( have_posts() ) : the_post(); 
					get_template_part( 'content', 'single' ); 
					if( get_theme_mod( 'hide_postnav' ) == '') { 
						flat_responsive_post_nav();
					}
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			echo '</div><div class="col-md-4 right_sidebar"><aside id="fr-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';
		break;
		
		
		// Left Column
		case "singleleft" :
			echo '<div class="container"><div class="row"><div class="col-md-4 left_sidebar"><aside id="fr-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';										
			echo '<div class="col-md-8" role="main">';
			// get the full post
				while ( have_posts() ) : the_post(); 
					get_template_part( 'content', 'single' );
					if( get_theme_mod( 'hide_postnav' ) == '') { 
						flat_responsive_post_nav();
					}							
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			echo '</div></div></div>';
		break;		
		
		
		// Left and Right Column
		case "singleleftright" :
			echo '<div class="container"><div class="row"><div class="col-md-3 left_sidebar"><aside id="fr-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';										
			echo '<div class="col-md-4" role="main">';
			// get the full post
				while ( have_posts() ) : the_post(); 
					get_template_part( 'content', 'single' ); 
					if( get_theme_mod( 'hide_postnav' ) == '') { 
						flat_responsive_post_nav();
					}							
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			echo '</div><div class="col-md-3 right_sidebar"><aside id="fr-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';	
		break;	
		
		// Wide Column
		case "singlewide" :									
			echo '<div class="container"><div class="row"><div class="col-md-12" role="main">';
			// get the full post
				while ( have_posts() ) : the_post(); 
					get_template_part( 'content', 'single' ); 
					if( get_theme_mod( 'hide_postnav' ) == '') { 
						flat_responsive_post_nav();
					}							
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			echo '</div></div></div>';
		break;			
		
	}
?>

</section>
<?php get_footer(); ?>