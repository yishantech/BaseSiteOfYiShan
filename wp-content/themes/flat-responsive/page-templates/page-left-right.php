<?php
/**
 *
   Template Name: Page Left &amp; Right Column
 *
 * Description: A page template with equal width columns (left, content, right)
 * @package flat-responsive
 * @since 1.0.0
 */

get_header(); ?>


<?php get_sidebar( 'top' ); ?>
<?php get_sidebar( 'inset-top' ); ?>

<section id="fr-content-area" class="fr-contents" role="main">
    <div class="container">
        <div class="row">
        	<div class="col-md-3 left_sidebar">
                <aside id="fr-left" role="complementary">
                    <?php get_sidebar( 'left' ); ?>
                </aside>
            </div>    
			<div class="col-md-6 fr-content-inside">
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
        	<div class="col-md-3 right_sidebar">
                <aside id="fr-right" role="complementary">
                    <?php get_sidebar( 'right' ); ?>
                </aside>
            </div>                  
    	</div><!-- .row -->
	</div><!-- .container -->
</section>

<?php get_footer(); ?>