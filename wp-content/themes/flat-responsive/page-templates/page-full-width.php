<?php
/**
 *
   Template Name: Page Full Width
 *
 * Description: A page template without the left or right columns
 * @package flat-responsive
 * @since 1.0.0
 */

get_header(); ?>


<?php get_sidebar( 'top' ); ?>
<?php get_sidebar( 'inset-top' ); ?>
<section id="fr-content-area" class="fr-contents" role="main">
    <div class="container">
        <div class="row"> 
        	<div class="col-md-12">   
        <?php
            while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
            <?php endwhile; // end of the loop. ?>
            </div>
</div>
</div>
</section>
<?php get_footer(); ?>