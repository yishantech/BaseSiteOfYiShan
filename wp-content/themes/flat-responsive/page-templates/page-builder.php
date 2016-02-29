<?php
/**
 * 
   Template Name: Page Builder
 *
 * @package flat-responsive
 * @since 1.0.0
 */

get_header(); ?>


<section id="fr-content-area" class="fr-contents" role="main">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">        
		
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		
            </div>                  
    	</div><!-- .row -->
	</div><!-- .container -->
</section>


<?php
get_footer();
