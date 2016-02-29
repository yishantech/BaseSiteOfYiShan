<?php
/**
 * The Header for our theme
 * @package flat_responsive
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php
    /*
    =================================================
    Fr Wrapper Choose
    =================================================
    */
    
    do_action('flat_responsive_wrapper_choose','flat-responsive');
    /*
    =================================================
    Top Bar Customizer
    =================================================
    */

    do_action('flat_responsive_social_icons_top', 'flat-responsive');

    /*
    =======================================================
    Fr Header Display with logo and Menu and Search Icons
    =======================================================
    */
    
    do_action('flat_responsive_header','flat-responsive');
    
if ( has_header_image() || is_active_sidebar( 'banner' )) { ?>
    <aside id="fr-banner" class="fr_responsive_banner" style="background-color: <?php echo esc_html(get_theme_mod( 'banner_bg', '#c6b274' )); ?>; <?php if ( get_header_image() ) : ?>background-image: url(<?php header_image(); ?>);<?php endif; ?><?php if( get_post_meta($post->ID, 'header_background', true) ) { ?> background-image: url(<?php echo esc_url(the_field('header_background')); ?>); <?php } ?> color: <?php echo esc_html(get_theme_mod( 'banner_text_colour', '#ffffff' )); ?>;">
        <?php get_sidebar( 'banner' ); ?>
    </aside>
<?php } ?>

<!--End of Style Store Banner-->
<?php if (!is_front_page()) { ?>
    <div class="fr-breadcrumbs-wrapper">
        <div class="container">
            <?php
    	        if(! is_front_page() ) :
                    if(function_exists('bcn_display')) {
                        ?>
                        <div class="fr-breadcrumbs-wrappers"> <?php
        	               bcn_display();
                        ?></div><?php
                    }
    		endif;
            ?>
        </div>
    </div>
    
    <?php } 
   ?>
<?php get_sidebar( 'cta' ); ?>