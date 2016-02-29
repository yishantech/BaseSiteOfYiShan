<?php
/**
 * Description: 404 error page
 * @package flat-responsive
 * @since 1.0.0
 */

get_header(); ?>

<section id="fr-content-area"  class="fr-content" role="main">
    <div class="container">
        <div class="row">    
			<div class="col-md-12">
            
       		  <div class="entry-content error-content">
				
                	<header class="page-header">
                        <h1 class="heading1"><?php _e( 'Page Not Found', 'flat-responsive' ); ?></h1>
                        <h2 class="heading2"><?php _e( 'Well this does not look good.<br />It appears this page is missing or was removed.', 'flat-responsive' ); ?></h2>						
					</header>
			
					<p><?php _e( 'If what you were looking for is not found, you may want to try searching with keywords relevant to what you were looking for.', 'flat-responsive' ); ?></p>
                 <div class="input-group-box">
                    <?php get_search_form(); ?>
                </div>
			    </div><!-- .page-content -->
                                
			</div>
    	</div><!-- #main -->
	</div><!-- #primary -->
</section>


<?php
get_footer();