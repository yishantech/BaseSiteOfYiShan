<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package flat-responsive
 * @since 1.0.0
 */

get_header(); ?>

<?php get_sidebar( 'top' ); ?>
<?php get_sidebar( 'inset-top' ); ?>

<section id="fr-content-area" class="fr-contents" role="main">
	<?php $blogstyle = get_theme_mod( 'blog_style', 'blogright' );

	switch ($blogstyle) {
		// Right Column
		case "blogright" :
			echo '<div class="container"><div class="row"><div class="col-md-8 fr-blog-content" role="main">';
			

			$count = 0;
				if (have_posts() ) :  while (have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );					
				endwhile;
				wp_reset_query();
					// get the pagination
					flat_responsive_paging_nav();
				else :
					// if no posts
					get_template_part( 'content', 'none' );					
				endif; 
			echo '</div><div class="col-md-4 right_sidebar"><aside id="fr-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';
		break;		
		
		
		// Left Column
		case "blogleft" :
			echo '<div class="container"><div class="row"><div class="col-md-4 left_sidebar"><aside id="fr-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';										
			echo '<div class="col-md-8 fr-blog-content" role="main">';
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					flat_responsive_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;				
			echo '</div></div></div>';
		break;		
		
		
		// Left and Right Column
		case "blogleftright" :
			echo '<div class="container"><div class="row"><div class="col-md-3 left_sidebar"><aside id="fr-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';										
			echo '<div class="col-md-6 fr-blog-content" role="main">';
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					flat_responsive_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;				
			echo '</div><div class="col-md-3 right_sidebar"><aside id="fr-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';	
		break;			
	
		
		// Wide Column
		case "blogwide" :
												
			echo '<div class="container"><div class="row fr-content" role="main"><div class="col-md-12">';
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					flat_responsive_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;				
			
			echo '</div></div></div>';	
		break;	
			
		
	}
?>

</section>
<?php get_footer(); ?>