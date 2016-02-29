<?php
/**
 * Forum template for bbpress
 *
 * Description: A page template without the left or right columns
 *
 * @package flat-responsive
 * @since 1.0.0
 */

get_header(); ?>


<?php //get_sidebar( 'top' ); ?>
<?php //get_sidebar( 'inset-top' ); ?>

<section id="fr-content-area" role="main">
    <div class="container">
        <div class="row">    
			<div class="col-md-12">
            
				<?php while ( have_posts() ) : the_post(); ?>
        
                    <?php get_template_part( 'content', 'page' ); ?>
        
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
        
                <?php endwhile; // end of the loop. ?>
			</div>
           

    	</div><!-- #main -->
	</div><!-- #primary -->
</section>

<?php //get_sidebar( 'inset-bottom' ); ?>


<?php get_footer(); ?>