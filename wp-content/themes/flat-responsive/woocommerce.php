<?php
/**
 * Description: A page template with the right column for WooCommerce
 * @package flat-responsive
 * @since 1.0.0
 */

get_header(); ?>

<section id="fr-content-area" class="fr-contents" role="main">
    <div class="container">
        <div class="row">
        	<div class="col-md-9">
        		<?php woocommerce_content(); ?>
        	</div>
        	<div class="col-md-3">
        		<?php get_sidebar( 'right' ); ?>
        	</div>
        </div>  
    </div>
</section>

<?php get_footer(); ?>