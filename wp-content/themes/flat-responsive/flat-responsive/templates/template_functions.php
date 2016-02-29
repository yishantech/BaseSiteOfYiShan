<?php
/*
=================================================
Move to Top Function
@Action: flat_responsive_move_to_top
=================================================
*/
function flat_responsive_move_to_top_fnc() {
	$move_to_top_check = get_theme_mod('movetotop');
		if ($move_to_top_check) { ?>
			<div class="flat_responsive_move_to_top"> 
				<i class="fa fa-arrow-up"></i>
			</div>  
		<?php }
}

/*
=================================================
Social Icons on Top of Header
=================================================
*/
function flat_responsive_social_icons_top_fnc() {
        $hide_top_bar = get_theme_mod('hide_styletop','1');
        if ($hide_top_bar) {
            //do nothing which will eventually not load any content on top bar
        }
        else {
        ?>
        <div class="flat_responsive_top">
                <div class="container">
                    <div class="row">
                    <?php 

                        $hide_small_details = get_theme_mod('hide_announcement'); 
                        $hide_social_icons = get_theme_mod('hide_social_icons'); 
                        if (empty($hide_social_icons) && empty($hide_small_details)) { ?>
                            <div class="col-md-6" style="padding:0.6rem 1.4rem;">
                                <?php echo esc_attr(get_theme_mod('style_announcement')); ?>
                            </div>
                            <div class="col-md-6 header_social_iconns <?php echo esc_attr(get_theme_mod('styletop_style')); ?>">      
                                <?php get_template_part('partials/social-bar'); ?>
                        </div>
                        <?php }
                        else {
                            if (!empty($hide_social_icons) && !empty($hide_small_details)) {

                            }
                            else {
                            if ($hide_small_details) { ?>
                                <div class="col-md-12 header_social_icons" style="text-align:center; display:inline-block;">      
                                    <?php get_template_part('partials/social-bar'); ?>
                                </div>
                            <?php }
                            if ($hide_social_icons) { ?>
                                <div class="col-md-12" style="padding:0.6rem 1.4rem; text-align:center;">
                                    <i class="fa fa-bullhorn"></i>&nbsp;<?php echo esc_attr(get_theme_mod('style_announcement')); ?>
                                </div>
                            <?php }
                            }
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        <?php  
    }
}
/*
=================================================
Wrapper Chooser Function
@Action: flat_responsive_wrapper_choose
=================================================
*/
function flat_responsive_wrapper_choose_fnc() {
	$pagewidth = get_theme_mod( 'page_width', 'default' );
		switch ($pagewidth) {
            case "default" :
                echo '<div id="fr-wrapper" style="border-color:';
                echo esc_html(get_theme_mod( 'topborder', '#000000' )) . ';">';
            	break;
            case "boxedmedium" :
                echo '<div id="fr-wrapper-boxed-medium" style="border-color:';
                echo esc_html(get_theme_mod( 'topborder', '#000000' )) . '; background-color:#fff;">';
        		break;
            case "boxedsmall" :
                echo '<div id="fr-wrapper-boxed-small" style="border-color:';
                echo esc_html(get_theme_mod( 'topborder', '#000000' )) . '; background-color:#fff;">';
        	break;
	}
}


/*
=================================================
Header Main Display Functions
=================================================
*/
function flat_responsive_header_fnc() {
	$header_type = 'class="flat_responsive_header header_one" style="background-color:'. esc_html(get_theme_mod('header_bg')).';"'; ?>
        <div <?php echo $header_type; ?>><!--Header Starts Here-->
            <div class="container">
                <?php flat_responsive_logo_output(); ?>
                <?php flat_responsive_menu_output();?>
            </div>
                <?php flat_responsive_responsive_menu_output(); ?>
        </div>
   </div>     
                <?php			
		
	}

function flat_responsive_logo_output() {
    ?>
    <div class="flat_responsive_logo"><!--Logo Starts Here -->
        <?php get_template_part( 'partials/logo-group' ); ?>
    </div><!--End of Logo Here -->
    <?php
}


function flat_responsive_menu_output() {
	?>  
    <div class="flat_responsive_menus">
            <div class="flat_responsive_menu"><!--Primary Navigation Starts Here -->
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'navmenu', 'fallback_cb' => 'wp_page_menu') ); ?>
            </div>
            
            <?php
}
function flat_responsive_responsive_menu_output() {
    ?>
    <a class="toggle_button_flat_responsive_menu"></a>
    <div style="background-color:#fff">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'mobilemenu', 'fallback_cb' => 'false' ) ); ?>
    </div>
    <?php
}
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>