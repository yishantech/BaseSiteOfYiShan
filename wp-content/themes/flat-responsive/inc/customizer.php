<?php
/*
=================================================
FLAT RESPONSIVE THEME CUSTOMIZER
=================================================
*/


/**
 * Lets create a customizable theme and begin with some pre-setup
*/ 
    add_action('customize_register', 'flat_responsive_theme_customize');
    function flat_responsive_theme_customize($wp_customize) {
    $wp_customize->remove_section( 'colors');
	
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
    
function flat_responsive_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
add_action( 'customize_register', 'flat_responsive_customize_register' );

/**
     *  Testimonials Page Note
     */
    class flat_responsive_note extends WP_Customize_Control {
        public function render_content() {
            echo __( 'This feature is available in the <a href="http://styledthemes.com/flat-responsive-pro" title="premium version" target="_blank">Premium version</a>.', 'flat-responsive' );

        }
    }

/*
=================================================
HEADER TOP CUSTOMIZER SETTINGS
=================================================
*/	
	$wp_customize->add_panel( 'header_top_bar', array(// Header Panel
	    'priority'       => 1,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Header Top Bar', 'flat-responsive'),
	    'description'    => __('Top Bar portion of your theme', 'flat-responsive'),
	));


	$wp_customize->add_section( 'header_top_settings', array(
		'title'          => __( 'Top Bar Display', 'flat-responsive' ),
		'description'	 => __('Header Top Represents the top position ahead of Menu', 'flat-responsive'),	
		'priority'       => 5,
		'panel'			 => 'header_top_bar',	
	) );
	

	// Hide the Top bar
	$wp_customize->add_setting( 'hide_styletop', array(
		'default'        => '1',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );
	
	$wp_customize->add_control('hide_styletop', array(
		'label'   => __( 'Hide Top Bar', 'flat-responsive' ),
		'section' => 'header_top_settings',
		'settings'   => 'hide_styletop',
		'priority' => 1,
		'type'    => 'checkbox',
	));

	// Hide the Announcement on the Top Menu
	$wp_customize->add_setting( 'hide_announcement', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );
	
	$wp_customize->add_control('hide_announcement', array(
		'label'   => __( 'Hide Announcement', 'flat-responsive' ),
		'section' => 'header_top_settings',
		'settings'   => 'hide_announcement',
		'priority' => 2,
		'type'    => 'checkbox',
	));

	// Hide the Social Icons on the Top Menu
	$wp_customize->add_setting( 'hide_social_icons', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );
	
	$wp_customize->add_control('hide_social_icons', array(
		'label'   => __( 'Hide Social Icons', 'flat-responsive' ),
		'section' => 'header_top_settings',
		'settings'   => 'hide_social_icons',
		'priority' => 3,
		'type'    => 'checkbox',
	));	

	$wp_customize->add_section( 'style_announcement_text', array(
		'title'          => __( 'Small Announcement Content', 'flat-responsive' ),
		'description'	 => __('Small Announcement will display the content in the top bar', 'flat-responsive'),	
		'priority'       => 5,
		'panel'			 => 'header_top_bar',	
	) );

	// Setting for showing the Announcement
    $wp_customize->add_setting( 'style_announcement', array(
        'default'        => '',
        'sanitize_callback' => 'flat_responsive_sanitize_text',
    ) );


    $wp_customize->add_control( 'style_announcement', array(
        'label' => __( 'Short Announcement', 'flat-responsive' ),
        'type' => 'text',
        'section' => 'style_announcement_text',
        'setting' => 'style_announcement',
        'priority' => 4,
    ) );
    
  
    $wp_customize->add_section( 'top_bar_coloring', array(
		'title'          => __( 'Top Bar Colouring Options', 'flat-responsive' ),
		'description'	 => __('Enable you to Color the Top Bar on Your Choice', 'flat-responsive'),	
		'priority'       => 5,
		'panel'			 => 'header_top_bar',	
	) );

  	// Social Icons Colors

    $wp_customize->add_setting( 'styletop_bg', array(
        'default'        => '#5cb8e7',
        'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'styletop_bg', array(
        'label'   => __( 'Top Bar Background', 'flat-responsive' ),
        'section' => 'top_bar_coloring',
        'settings'   => 'styletop_bg',
        'priority' => 5,            
    ) ) );

    // Top Bar Text Color
    $wp_customize->add_setting( 'styletop_text', array(
        'default'        => '#ffffff',
        'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'styletop_text', array(
        'label'   => __( 'Top Bar Text Color', 'flat-responsive' ),
        'section' => 'top_bar_coloring',
        'settings'   => 'styletop_text',
        'priority' => 6,            
    ) ) );

    


   /*
=================================================
Header Settings Customizer
=================================================
*/
//$wp_customize->get_section('nav')->panel = 'header_settings_panel'; 
	
	$wp_customize->add_panel( 'header_settings_panel', array(// Header Panel
	    'priority'       => 2,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Header Settings', 'flat-responsive'),
	    'description'    => __('Changes the Settings For Your Header', 'flat-responsive'),
	));

	$wp_customize->add_section( 'choose_header_style', array(
		'title'          => __( 'Header Style', 'flat-responsive' ),
		'description'	 => __('You Can Choose Various Header Styles From this part.', 'flat-responsive'),	
		'priority'       => 5,
		'panel'			=> 'header_settings_panel',
	) );

	// Header Style
	$wp_customize->add_setting( 'header_style', array(
		'default'        => 'one',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );
	
	$wp_customize->add_control('header_style', array(
		'label'   => __( 'Header Style', 'flat-responsive' ),
		'section' => 'choose_header_style',
		'settings'   => 'header_style',
		'type'    => 'radio',
                'choices' => array(
                    'one' => __( 'Header Style 1', 'flat-responsive' ),
                    'two' => __( 'Header Style 2', 'flat-responsive' ),	
                ),
        'priority'       => 1,
    ));	
    $wp_customize->add_setting( 'flat_responsive_header_style', array(
            'sanitize_callback' =>  'flat_responsive_sanitize_text'
        ) );
	 $wp_customize->add_control( new flat_responsive_note ( $wp_customize,'flat_responsive_header_style', array(
            'section'  => 'choose_header_style'
     ) ) );


	$wp_customize->add_section( 'choose_header_color', array(
		'title'          => __( 'Header Color Settings', 'flat-responsive' ),
		'description'	 => __('You Can Choose Various Header Colors From this part.', 'flat-responsive'),	
		'priority'       => 5,
		'panel'			=> 'header_settings_panel',
	) );
   // Header background
	$wp_customize->add_setting( 'header_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg', array(
		'label'   => __( 'Header Background', 'flat-responsive' ),
		'section' => 'choose_header_color',
		'settings'   => 'header_bg',
		'priority' => 2,			
	) ) );

	    // Header background
	$wp_customize->add_setting( 'header_secondary_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_secondary_bg', array(
		'label'   => __( 'Secondary Menu Background', 'flat-responsive' ),
		'section' => 'choose_header_color',
		'settings'   => 'header_secondary_bg',
		'priority' => 3,			
	) ) );

	$wp_customize->add_setting( 'flat_responsive_header_color', array(
            'sanitize_callback' =>  'flat_responsive_sanitize_text'
        ) );
	 $wp_customize->add_control( new flat_responsive_note ( $wp_customize,'flat_responsive_header_color', array(
            'section'  => 'choose_header_color'
     ) ) );

	$wp_customize->add_section( 'choose_search_icon', array(
		'title'          => __( 'Search Icon', 'flat-responsive' ),
		'description'	 => __('Search Icon Settings ', 'flat-responsive'),	
		'priority'       => 5,
		'panel'			=> 'header_settings_panel',
	) );

	$wp_customize->add_setting( 'flat_responsive_search', array(
            'sanitize_callback' =>  'flat_responsive_sanitize_text'
        ) );
	 $wp_customize->add_control( new flat_responsive_note ( $wp_customize,'flat_responsive_search', array(
            'section'  => 'choose_search_icon',
            'priority' => 1,
     ) ) );


	$wp_customize->add_setting( 'search_icon_hide', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );


	$wp_customize->add_control('search_icon_hide', array(
		'label'   => __( 'Search Icon Hide', 'flat-responsive' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_hide',
		'priority' => 5,
		'type' => 'checkbox',			
	 ) );

	$wp_customize->add_setting( 'search_icon_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );


	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_icon_color', array(
		'label'   => __( 'Search Icon Color', 'flat-responsive' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_color',
		'priority' => 5,			
	) ) );

	$wp_customize->add_setting( 'search_icon_background', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_icon_background', array(
		'label'   => __( 'Search Background', 'flat-responsive' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_background',
		'priority' => 6,			
	) ) );

	$wp_customize->add_setting( 'search_icon_line', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_icon_line', array(
		'label'   => __( 'Search Icon Line', 'flat-responsive' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_line',
		'priority' => 7,			
	) ) );

	$wp_customize->add_setting( 'search_icon_height', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control('search_icon_height', array(
		'label'   => __( 'Search Form Height', 'flat-responsive' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_height',
		'priority' => 8,			
	) );
	$wp_customize->add_setting( 'search_icon_margin', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control('search_icon_margin', array(
		'label'   => __( 'Search Form Margin', 'flat-responsive' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_margin',
		'priority' => 9,			
	) );



	$wp_customize->add_section( 'choose_nav_style', array(
		'title'          => __( 'Choose Navigation Style', 'flat-responsive' ),
		'description'	 => __('', 'flat-responsive'),	
		'priority'       => 5,
		'panel'			=> 'header_settings_panel',
	) );

	$wp_customize->add_setting( 'flat_responsive_nav_style', array(
            'sanitize_callback' =>  'flat_responsive_sanitize_text'
        ) );
	 $wp_customize->add_control( new flat_responsive_note ( $wp_customize,'flat_responsive_nav_style', array(
            'section'  => 'choose_nav_style',
            'priority' => 1,
     ) ) );
    
	$wp_customize->add_setting( 'nav_style', array(
		'default'        => 'navmenu',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );

	$wp_customize->add_control( 'nav_style', array(
		'label'   => __( 'Primary Navigation Style', 'flat-responsive' ),
		'section' => 'choose_nav_style',
		'settings'   => 'nav_style',
		'type'     => 'radio',
		'choices'	=> array(
			'navmenu' => 'Style1',
			'navmenu1' => 'Style2',
			'navmenu2' => 'Style3',
			'navmenu3' => 'Style4',
			'navmenu4' => 'Style5',
			),
		'priority' => 20,			
	) );

	//make menu sticky

	$wp_customize->add_section( 'choose_sticky_style', array(
		'title'          => __( 'Sticky Menu', 'flat-responsive' ),
		'description'	 => __(' ', 'flat-responsive'),	
		'priority'       => 5,
		'panel'			=> 'header_settings_panel',
	) );

    $wp_customize->add_setting( 'flat_responsive_sticky_menu_pro', array(
            'sanitize_callback' =>  'flat_responsive_sanitize_text'
    ) );

	$wp_customize->add_control( new flat_responsive_note ( $wp_customize,'flat_responsive_sticky_menu_pro', array(
            'section'  => 'choose_sticky_style',
            'priority' => 2,
     ) ) );

	$wp_customize->add_setting( 'nav_position_scrolltop', array(
            'default' => '',
            'sanitize_callback' => 'flat_responsive_sanitize_checkbox',
    ) );
        
    $wp_customize->add_control( 'nav_position_scrolltop', array(
        'label'   => __( 'Sticky Menu', 'flat-responsive' ),
        'section' => 'choose_sticky_style',
        'settings' => 'nav_position_scrolltop',
        'type'    => 'checkbox',
            'choices' => array(
                'scrolltop' => __( 'Sticky Menu', 'flat-responsive' ),
                              
        ),
       'priority'       => 1,  
    ));

	$wp_customize->add_setting( 'nav_position_scrolltop_val', array(
            'default' => '180',
            'sanitize_callback' => 'flat_responsive_sanitize_number',
        ) );
        
    $wp_customize->add_control( 'nav_position_scrolltop_val', array(
        'label'   => __( 'Sticky Menu Offset', 'flat-responsive' ),
        'section' => 'choose_sticky_style',
        'settings' => 'nav_position_scrolltop_val',
        'type' => 'text',
        'priority'       => 3,  
    ));

    $wp_customize->add_section( 'navigation_colours', array(
		'title'          => __( 'Navigation Colours', 'flat-responsive' ),
		'description'	 => __(' ', 'flat-responsive'),	
		'priority'       => 5,
		'panel'			=> 'header_settings_panel',
	) );


	// Menu 1st level link color
	$wp_customize->add_setting( 'menu_link', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link', array(
		'label'   => __( 'Menu Link Color', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_link',
		'priority' => 23,			
	) ) );

	$wp_customize->add_setting( 'menu_link_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link_bg', array(
		'label'   => __( 'Menu Link Background', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_link_bg',
		'priority' => 24,			
	) ) );
		

	// Menu 1st level link color on hover and acive
	$wp_customize->add_setting( 'menu_active', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_active', array(
		'label'   => __( 'Menu Active Background', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_active',
		'priority' => 25,			
	) ) );

	$wp_customize->add_setting( 'menu_active_text', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_active_text', array(
		'label'   => __( 'Menu Active Text Color', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_active_text',
		'priority' => 26,			
	) ) );
	
	$wp_customize->add_setting( 'menu_hover', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover', array(
		'label'   => __( 'Menu Hover Background', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_hover',
		'priority' => 27,			
	) ) );

	$wp_customize->add_setting( 'menu_hover_text', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_text', array(
		'label'   => __( 'Menu Hover Text', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_hover_text',
		'priority' => 28,			
	) ) );
	
	$wp_customize->add_setting( 'submenu_bg_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_bg_color', array(
		'label'   => __( 'Submenu Background Color', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_bg_color',
		'priority' => 29,			
	) ) );

	$wp_customize->add_setting( 'submenu_link_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_link_color', array(
		'label'   => __( 'Submenu Link Color', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_link_color',
		'priority' => 30,			
	) ) );


	$wp_customize->add_setting( 'submenu_active', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_active', array(
		'label'   => __( 'Submenu Active Text', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_active',
		'priority' => 31,			
	) ) );

	$wp_customize->add_setting( 'submenu_active_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_active_bg', array(
		'label'   => __( 'Submenu Active Background', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_active_bg',
		'priority' => 32,			
	) ) );


	$wp_customize->add_setting( 'submenu_hover', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_hover', array(
		'label'   => __( 'Submenu Hover Background', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_hover',
		'priority' => 33,			
	) ) );

	$wp_customize->add_setting( 'submenu_hover_text', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_hover_text', array(
		'label'   => __( 'Submenu Hover Text', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_hover_text',
		'priority' => 34,			
	) ) );


	// Submenu bottom border
	$wp_customize->add_setting( 'submenu_border', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_border', array(
		'label'   => __( 'Submenu Bottom Border', 'flat-responsive' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_border',
		'priority' => 35,			
	) ) );
    // Submenu Divider border
    $wp_customize->add_setting( 'submenu_divider', array(
        'default'        => '',
        'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_divider', array(
        'label'   => __( 'Submenu Link Divider', 'flat-responsive' ),
        'section' => 'navigation_colours',
        'settings'   => 'submenu_divider',
        'priority' => 35,           
    ) ) );

/*
=================================================
Basic Settings
=================================================
*/
	$wp_customize->add_panel( 'basic_settings_panel', array(// Header Panel
	    'priority'       => 5,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Basic Settings', 'flat-responsive'),
	    'description'    => __('Organize Your Basis Settings', 'flat-responsive'),
	));


    $wp_customize->add_section( 'site_layout', array(
        'title'          => __( 'Site Layout', 'flat-responsive' ),
        'priority'       => 1,
        'panel'			=> 'basic_settings_panel'
    ) );

    // Setting for page width
	$wp_customize->add_setting( 'page_width', array(
            'default' => 'default',
            'sanitize_callback' => 'flat_responsive_sanitize_pagewidth',
	) );
    // Control for page width	
	$wp_customize->add_control( 'page_width', array(
            'label'   => __( '', 'flat-responsive' ),
            'section' => 'site_layout',
            'type'    => 'radio',
                'choices' => array(
                    'default' => __( 'Full Width', 'flat-responsive' ),
                    'boxedmedium' => __( 'Boxed Medium 1200px', 'flat-responsive' ),
                    'boxedsmall' => __( 'Boxed Small 1000px', 'flat-responsive' ),
                ),
                'priority'       => 1,	
        ));

	$wp_customize->add_section( 'blog_layout', array(
        'title'          => __( 'Blog Layout', 'flat-responsive' ),
        'priority'       => 2,
        'panel'			=> 'basic_settings_panel'
    ) );
	// Default content hide option
	$wp_customize->add_section('default_content_setting', array(
    	'title'		=> __('Default Content Setting', 'flat-responsive'),
    	 'priority'	=>  3,
    	 'panel'	=>	'basic_settings_panel'
    ));
    // hide default content from theme
	$wp_customize->add_setting( 'hide_default_content', array(
		'default' => 0,
	'sanitize_callback' => 'flat_responsive_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_default_content', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide default content from theme', 'flat-responsive' ),
        'section' => 'default_content_setting',
		'priority' => 13,
    ) );

    // Setting for blog layout
	$wp_customize->add_setting( 'blog_style', array(
            'default' => 'blogright',
            'sanitize_callback' => 'flat_responsive_sanitize_blogstyle',
	) );
    // Control for blog layout	
	$wp_customize->add_control( 'blog_style', array(
            'label'   => __( '', 'flat-responsive' ),
            'section' => 'blog_layout',
                'priority' => 2,
            'type'    => 'radio',
                'choices' => array(
                    'blogright' => __( 'Blog with Right Sidebar', 'flat-responsive' ),
                                'blogleft' => __( 'Blog with Left Sidebar', 'flat-responsive' ),
                                'blogleftright' => __( 'Blog with Left &amp; Right Sidebar', 'flat-responsive' ),
                                'blogwide' => __( 'Blog with Full Width &amp; no Sidebars', 'flat-responsive' ),
                ),
    ));	

	$wp_customize->add_section( 'blog_settings', array(
        'title'          => __( 'Blog Settings', 'flat-responsive' ),
        'priority'       => 3,
        'panel'			=> 'basic_settings_panel'
    ) );

    // Setting for featured image
	$wp_customize->add_setting( 'featured_image', array(
            'default' => 'big',
            'sanitize_callback' => 'flat_responsive_sanitize_featured_image',
	) );
    // Control for featured image
	$wp_customize->add_control( 'featured_image', array(
            'label'   => __( 'Featured Image', 'flat-responsive' ),
            'section' => 'blog_settings',
                'priority' => 4,
            'type'    => 'radio',
                'choices' => array(
                    'big' => __( 'Wide Featured Image', 'flat-responsive' ),
                                'small' => __( 'Small Featured Image', 'flat-responsive' ),
                ),
            ));
        
    // hide featured image on single
	$wp_customize->add_setting( 'hide_featured', array(
	'sanitize_callback' => 'flat_responsive_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_featured', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Full Post Featured Image', 'flat-responsive' ),
        'section' => 'blog_settings',
		'priority' => 5,
    ) );

    // Setting for content or excerpt
	$wp_customize->add_setting( 'excerpt_content', array(
            'default' => 'content',
            'sanitize_callback' => 'flat_responsive_sanitize_excerpt',
	) );
        
    // Control for Content or excerpt
	$wp_customize->add_control( 'excerpt_content', array(
            'label'   => __( 'Content or Excerpt', 'flat-responsive' ),
            'section' => 'blog_settings',
            'type'    => 'radio',
                'choices' => array(
                    'content' => __( 'Content', 'flat-responsive' ),
                    'excerpt' => __( 'Excerpt', 'flat-responsive' ),	
                ),
                'priority'       => 6,
            ));

    // Setting group for a excerpt
	$wp_customize->add_setting( 'excerpt_limit', array(
		'default'        => '50',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );
	$wp_customize->add_control( 'excerpt_limit', array(
		'settings' => 'excerpt_limit',
		'label'    => __( 'Excerpt Length', 'flat-responsive' ),
		'section'  => 'blog_settings',
		'type'     => 'text',
		'priority'       => 7,
	) );
	
    // hide single footer meta
	$wp_customize->add_setting( 'hide_postinfo', array(
	'sanitize_callback' => 'flat_responsive_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_postinfo', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Post Footer Info', 'flat-responsive' ),
        'section' => 'blog_settings',
		'priority' => 8,
    ) );	
    // hide single post nav
	$wp_customize->add_setting( 'hide_postnav', array(
	'sanitize_callback' => 'flat_responsive_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_postnav', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Post Navigation', 'flat-responsive' ),
        'section' => 'blog_settings',
		'priority' => 9,
    ) );	
    // hide page titles
    $wp_customize->add_section( 'page_settings', array(
        'title'          => __( 'Page Settings', 'flat-responsive' ),
        'priority'       => 3,
        'panel'			=> 'basic_settings_panel'
    ) );
	$wp_customize->add_setting( 'hide_title', array(
	'sanitize_callback' => 'flat_responsive_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_title', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Page Titles', 'flat-responsive' ),
        'section' => 'page_settings',
		'priority' => 10,
    ) );
    // hide page title dotline
	$wp_customize->add_setting( 'hide_title_dotline', array(
	'sanitize_callback' => 'flat_responsive_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_title_dotline', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Page Title Dotline', 'flat-responsive' ),
        'section' => 'page_settings',
		'priority' => 11,
    ) );
        
    // hide page title dotline
	$wp_customize->add_setting( 'hide_edit', array(
	'sanitize_callback' => 'flat_responsive_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_edit', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Edit Button', 'flat-responsive' ),
        'section' => 'blog_settings',
		'priority' => 12,
    ) );	

	$wp_customize->add_section( 'move_top_top', array(
        'title'          => __( 'Move To Top', 'flat-responsive' ),
        'priority'       => 4,
        'panel'			=> 'basic_settings_panel'
    ) );

    $wp_customize->add_setting( 'flat_responsive_move_top', array(
            'sanitize_callback' =>  'flat_responsive_sanitize_text'
        ) );
    $wp_customize->add_setting( 'movetotop', array(
		'default'        => '1',
		'sanitize_callback' => 'flat_responsive_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'movetotop', array(
		'settings' => 'movetotop',
		'label'    => __( 'Enable Move To Top', 'flat-responsive' ),
		'section'  => 'move_top_top',		
		'type'     => 'checkbox',
		'priority' => 14,
	) );

$wp_customize->get_section('title_tagline')->panel = 'site_title_and_taglines';
	$wp_customize->add_panel( 'site_title_and_taglines', array(// Header Panel
	    'priority'       => 1,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Site Title & Taglines', 'flat-responsive'),
	    'description'    => __('Deals with the Site Title settings of your theme', 'flat-responsive'),
	));
	


    // Setting group for selecting logo title
        $wp_customize->add_setting( 'logo_style', array(
            'default' => 'default',
            'sanitize_callback' => 'flat_responsive_sanitize_logo_style',
	) );
			
	$wp_customize->add_control( 'logo_style', array(
            'label'     => __( 'Logo Style', 'flat-responsive' ),
            'section'   => 'title_tagline',
            'priority'  => 10,
            'type'      => 'radio',
                'choices' => array(
                    'default'   => __( 'Default Logo', 'flat-responsive' ),
                    'custom'    => __( 'Your Logo', 'flat-responsive' ),
                    'logotext'  => __( 'Logo with Title and Tagline', 'flat-responsive' ),
                    'text'      => __( 'Text Title', 'flat-responsive' ),
                ),
            ));
	
    // Setting group for uploading logo
        $wp_customize->add_setting('my_logo', array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'type'              => 'option',
            'sanitize_callback' => 'flat_responsive_sanitize_upload',
        ));
	
        $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'my_logo', array(
            'label'    => __('Your Logo', 'flat-responsive'),
            'section'  => 'title_tagline',
            'settings' => 'my_logo',
                    'priority' => 11,
        ))); 
        
       // site title color
	$wp_customize->add_setting( 'sitetitle', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sitetitle', array(
		'label'   => __( 'Site Title Color', 'flat-responsive' ),
		'section' => 'title_tagline',
		'settings'   => 'sitetitle',
		'priority' => 12,			
	) ) );
// tagline color
	$wp_customize->add_setting( 'tagline', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tagline', array(
		'label'   => __( 'Tagline Color', 'flat-responsive' ),
		'section' => 'title_tagline',
		'settings'   => 'tagline',
		'priority' => 13,			
	) ) );
// logo title margin
	$wp_customize->add_setting( 'titlemargin', array(
		'default'        => '0 0 0 0',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );
	$wp_customize->add_control( 'titlemargin', array(
		'settings' => 'titlemargin',
		'label'    => __( 'Site Title Margins', 'flat-responsive' ),
		'section'  => 'title_tagline',
		'type'     => 'text',
		'priority'       => 14,
	) );

	// logo title padding
	$wp_customize->add_setting( 'titlepadding', array(
		'default'        => '20px 0px 15px 0px',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );
	$wp_customize->add_control( 'titlepadding', array(
		'settings' => 'titlepadding',
		'label'    => __( 'Site Title padding', 'flat-responsive' ),
		'section'  => 'title_tagline',
		'type'     => 'text',
		'priority'       => 15,
	) );






/**
 * This is a custom section called Typography
 * which contains settings for typography
 */

	$wp_customize->add_panel( 'typography_settings', array(// Header Panel
	    'priority'       => 6,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Typography Settings', 'flat-responsive'),
	    'description'    => __('Deals with the Typography settings of your theme', 'flat-responsive'),
	));

	$wp_customize->add_section( 'typography', array(
		'title'          => __( 'Typography', 'flat-responsive' ),
		'priority'       => 6,
		'panel' => 'typography_settings',
	) );
        
        
        $wp_customize->add_setting( 'body_fontsize', array(
		'default'        => '100%',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );
	
	$wp_customize->add_control( 'body_fontsize', array(
		'label'   => __( 'Body Base Text Size', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'body_fontsize',
		'type'     => 'text',
		'priority' => 1,			
	) );

        
        //text size and color selection 
        $wp_customize->add_setting('h1_fontsize', array(
            'default'           => '1.75em',
            'sanitize_callback' => 'flat_responsive_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h1_fontsize', array(
		'label'     => __( 'H1 Font-Size', 'flat-responsive' ),
		'section'   => 'typography',
		'settings'  => 'h1_fontsize',
		'priority' => 2,			
	) );
        
        $wp_customize->add_setting( 'h1_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h1_fontcolor', array(
		'label'   => __( 'H1 Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'h1_fontcolor',
		'priority' => 3,			
	) ) );
        
        $wp_customize->add_setting('h2_fontsize', array(
            'default'           => '1.6em',
            'sanitize_callback' => 'flat_responsive_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h2_fontsize', array(
		'label'     => __( 'H2 Font-Size', 'flat-responsive' ),
		'section'   => 'typography',
		'settings'  => 'h2_fontsize',
		'priority' => 4,			
	) );
        
        $wp_customize->add_setting( 'h2_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h2_fontcolor', array(
		'label'   => __( 'H2 Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'h2_fontcolor',
		'priority' => 5,			
	) ) );
        
        $wp_customize->add_setting('h3_fontsize', array(
            'default'           => '1.40em',
            'sanitize_callback' => 'flat_responsive_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h3_fontsize', array(
		'label'     => __( 'H3 Font-Size', 'flat-responsive' ),
		'section'   => 'typography',
		'settings'  => 'h3_fontsize',
		'priority' => 6,			
	) );
        
        $wp_customize->add_setting( 'h3_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h3_fontcolor', array(
		'label'   => __( 'H3 Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'h3_fontcolor',
		'priority' => 7,			
	) ) );
        
        $wp_customize->add_setting('h4_fontsize', array(
            'default'           => '1.3em',
            'sanitize_callback' => 'flat_responsive_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h4_fontsize', array(
		'label'     => __( 'H4 Font-Size', 'flat-responsive' ),
		'section'   => 'typography',
		'settings'  => 'h4_fontsize',
		'priority' => 8,			
	) );
        
        $wp_customize->add_setting( 'h4_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h4_fontcolor', array(
		'label'   => __( 'H4 Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'h4_fontcolor',
		'priority' => 9,			
	) ) );
        
        $wp_customize->add_setting('h5_fontsize', array(
            'default'           => '1.2em',
            'sanitize_callback' => 'flat_responsive_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h5_fontsize', array(
		'label'     => __( 'H5 Font-Size', 'flat-responsive' ),
		'section'   => 'typography',
		'settings'  => 'h5_fontsize',
		'priority' => 10,			
	) );
        
        $wp_customize->add_setting( 'h5_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h5_fontcolor', array(
		'label'   => __( 'H5 Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'h5_fontcolor',
		'priority' => 11,			
	) ) );
        
        $wp_customize->add_setting('h6_fontsize', array(
            'default'           => '1em',
            'sanitize_callback' => 'flat_responsive_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h6_fontsize', array(
		'label'     => __( 'H6 Font-Size', 'flat-responsive' ),
		'section'   => 'typography',
		'settings'  => 'h6_fontsize',
		'priority' => 12,			
	) );
        
        $wp_customize->add_setting( 'h6_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h6_fontcolor', array(
		'label'   => __( 'H6 Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'h6_fontcolor',
		'priority' => 13,			
	) ) );
        
        $wp_customize->add_setting('p_fontsize', array(
            'default'           => '1.2em',
            'sanitize_callback' => 'flat_responsive_sanitize_text',
        ));
        
        $wp_customize->add_control( 'p_fontsize', array(
		'label'     => __( 'Paragraph Font-Size', 'flat-responsive' ),
		'section'   => 'typography',
		'settings'  => 'p_fontsize',
		'priority' => 14,			
	) );
        
        $wp_customize->add_setting( 'p_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p_fontcolor', array(
		'label'   => __( 'Paragraph Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'p_fontcolor',
		'priority' => 15,			
	) ) );
        
        $wp_customize->add_setting('a_fontsize', array(
            'default'           => '1em',
            'sanitize_callback' => 'flat_responsive_sanitize_text',
        ));
        
        $wp_customize->add_control( 'a_fontsize', array(
		'label'     => __( 'Anchor Font-Size', 'flat-responsive' ),
		'section'   => 'typography',
		'settings'  => 'a_fontsize',
		'priority' => 16,			
	) );
        
        $wp_customize->add_setting( 'a_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'a_fontcolor', array(
		'label'   => __( 'Anchor Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'a_fontcolor',
		'priority' => 17,			
	) ) );
        
        $wp_customize->add_setting( 'ahover_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ahover_fontcolor', array(
		'label'   => __( 'Anchor Hover Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'ahover_fontcolor',
		'priority' => 18,			
	) ) );
        
        $wp_customize->add_setting('li_fontsize', array(
            'default'           => '1em',
            'sanitize_callback' => 'flat_responsive_sanitize_text',
        ));
        
        $wp_customize->add_control( 'li_fontsize', array(
		'label'     => __( 'Link Font-Size', 'flat-responsive' ),
		'section'   => 'typography',
		'settings'  => 'li_fontsize',
		'priority' => 19,			
	) );
        $wp_customize->add_setting( 'li_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'li_fontcolor', array(
		'label'   => __( 'Link Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'li_fontcolor',
		'priority' => 20,			
	) ) );

	    $wp_customize->add_setting( 'lihov_fontcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lihov_fontcolor', array(
		'label'   => __( 'Link Hover Color', 'flat-responsive' ),
		'section' => 'typography',
		'settings'   => 'lihov_fontcolor',
		'priority' => 21,			
	) ) );


/**
 * This is a section called Colors
 * This is for the primary colors
 */
	
	$wp_customize->add_panel( 'color_settings', array(// Header Panel
	    'priority'       => 6,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Color Settings', 'flat-responsive'),
	    'description'    => __('Deals with the color settings of your theme', 'flat-responsive'),
	));
	

	$wp_customize->add_section( 'colors', array(
		'title'          => __( 'Colors', 'flat-responsive' ),
		'priority'       => 5,
		'panel'			=> 'color_settings',
	) );
        

	 
        // Body background
	$wp_customize->add_setting( 'bodyback_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bodyback_bg', array(
		'label'   => __( 'Body Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'bodyback_bg',
		'priority' => 2,			
	) ) );
        
   
        
         // Banner background
	$wp_customize->add_setting( 'banner_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'banner_bg', array(
		'label'   => __( 'Banner Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'banner_bg',
		'priority' => 3,			
	) ) );
        
	$wp_customize->add_section( 'breadcumb_colors', array(
		'title'          => __( 'Breadcumb Colors', 'flat-responsive' ),
		'priority'       => 5,
		'panel'			=> 'color_settings',
	) );

    // BreadCumb background
	$wp_customize->add_setting( 'breadcumb_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcumb_bg', array(
		'label'   => __( 'Breadcrumb Background', 'flat-responsive' ),
		'section' => 'breadcumb_colors',
		'settings'   => 'breadcumb_bg',
		'priority' => 4,			
	) ) );
        
        // Breadcrumbs text
	$wp_customize->add_setting( 'breadcrumbs_text', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_text', array(
		'label'   => __( 'Breadcrumbs Text', 'flat-responsive' ),
		'section' => 'breadcumb_colors',
		'settings'   => 'breadcrumbs_text',
		'priority' => 37,			
	) ) );
        // Breadcrumbs text link 
	$wp_customize->add_setting( 'breadcrumbs_link', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_link', array(
		'label'   => __( 'Breadcrumbs Link Color', 'flat-responsive' ),
		'section' => 'breadcumb_colors',
		'settings'   => 'breadcrumbs_link',
		'priority' => 38,			
	) ) );	
        // Breadcrumbs text link on hover
	$wp_customize->add_setting( 'breadcrumbs_link_hov', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_link_hov', array(
		'label'   => __( 'Breadcrumbs Link Hover', 'flat-responsive' ),
		'section' => 'breadcumb_colors',
		'settings'   => 'breadcrumbs_link_hov',
		'priority' => 39,			
	) ) );
        
        
        // Call to Action background
	$wp_customize->add_setting( 'cta_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_bg', array(
		'label'   => __( 'Call to Action Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'cta_bg',
		'priority' => 4,			
	) ) );
        
        // Top Widget background
	$wp_customize->add_setting( 'top_widget_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_widget_bg', array(
		'label'   => __( 'Top Widget Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'top_widget_bg',
		'priority' => 5,			
	) ) );
        
        // Inset Top Widget background
	$wp_customize->add_setting( 'insettop_widget_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insettop_widget_bg', array(
		'label'   => __( 'Inset Top Widget Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'insettop_widget_bg',
		'priority' => 6,			
	) ) );
    
        
              
        // Left Sidebar background
	$wp_customize->add_setting( 'leftsidebar_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leftsidebar_bg', array(
		'label'   => __( 'Left Sidebar Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'leftsidebar_bg',
		'priority' => 8,			
	) ) );
        
        // Left Sidebar Heading
	$wp_customize->add_setting( 'leftsidebar_heading', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leftsidebar_heading', array(
		'label'   => __( 'Left Sidebar Heading Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'leftsidebar_heading',
		'priority' => 8,			
	) ) );
        
        // Left Sidebar Dotline
	$wp_customize->add_setting( 'leftsidebar_dotline', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leftsidebar_dotline', array(
		'label'   => __( 'Left Sidebar Dotline Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'leftsidebar_dotline',
		'priority' => 8,			
	) ) );
        
         // Left Sidebar text
	$wp_customize->add_setting( 'leftsidebar_text', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leftsidebar_text', array(
		'label'   => __( 'Left Sidebar Text Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'leftsidebar_text',
		'priority' => 8,			
	) ) );
        
        // Left Sidebar link
	$wp_customize->add_setting( 'leftsidebar_link', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leftsidebar_link', array(
		'label'   => __( 'Left Sidebar Link Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'leftsidebar_link',
		'priority' => 8,			
	) ) );
        
        // Left Sidebar link Hover
	$wp_customize->add_setting( 'leftsidebar_linkhover', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leftsidebar_linkhover', array(
		'label'   => __( 'Left Sidebar Link Hover', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'leftsidebar_linkhover',
		'priority' => 8,			
	) ) );
        
        
        // Content background
	$wp_customize->add_setting( 'content_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_bg', array(
		'label'   => __( 'Content Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'content_bg',
		'priority' => 9,			
	) ) );
        
        // Content Heading
	$wp_customize->add_setting( 'content_heading_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_heading_color', array(
		'label'   => __( 'Content Heading Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'content_heading_color',
		'priority' => 9,			
	) ) );
        
        // Content Dotline background
	$wp_customize->add_setting( 'content_dot_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_dot_bg', array(
		'label'   => __( 'Content Divider Line color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'content_dot_bg',
		'priority' => 10,			
	) ) );
        
        // Content Text Color
	$wp_customize->add_setting( 'content_text_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_text_color', array(
		'label'   => __( 'Content Text Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'content_text_color',
		'priority' => 9,			
	) ) );
        
        // Content Link Color
	$wp_customize->add_setting( 'content_link_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_link_color', array(
		'label'   => __( 'Content Link Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'content_link_color',
		'priority' => 9,			
	) ) );
        
        
        
        // Right Sidebar background
	$wp_customize->add_setting( 'rightsidebar_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rightsidebar_bg', array(
		'label'   => __( 'Right Sidebar Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'rightsidebar_bg',
		'priority' => 11,			
	) ) );
        
        
        
        // Left Sidebar Heading
	$wp_customize->add_setting( 'rightsidebar_heading', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rightsidebar_heading', array(
		'label'   => __( 'Right Sidebar Heading Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'rightsidebar_heading',
		'priority' => 8,			
	) ) );
        
        // Right Sidebar Dotline
	$wp_customize->add_setting( 'rightsidebar_dotline', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rightsidebar_dotline', array(
		'label'   => __( 'Right Sidebar Dotline Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'rightsidebar_dotline',
		'priority' => 8,			
	) ) );
        
         // Right Sidebar text
	$wp_customize->add_setting( 'rightsidebar_text', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rightsidebar_text', array(
		'label'   => __( 'Right Sidebar Text Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'rightsidebar_text',
		'priority' => 8,			
	) ) );
        
        // Right Sidebar link
	$wp_customize->add_setting( 'rightsidebar_link', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rightsidebar_link', array(
		'label'   => __( 'Right Sidebar Link Color', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'rightsidebar_link',
		'priority' => 8,			
	) ) );
        
        // Right Sidebar link Hover
	$wp_customize->add_setting( 'rightsidebar_linkhover', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rightsidebar_linkhover', array(
		'label'   => __( 'Right Sidebar Link Hover', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'rightsidebar_linkhover',
		'priority' => 8,			
	) ) );
        
         
        // Inset Bottom Widget background
        $wp_customize->add_setting( 'insetbottom_widget_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insetbottom_widget_bg', array(
		'label'   => __( 'Inset Bottom Widget Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'insetbottom_widget_bg',
		'priority' => 12,			
	) ) );
        
        
        
        // Content Bottom  Widget background
        $wp_customize->add_setting( 'contentbottom_widget_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contentbottom_widget_bg', array(
		'label'   => __( 'Content Bottom Widget Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'contentbottom_widget_bg',
		'priority' => 14,			
	) ) );
        
        //Bottom  Widget background
        $wp_customize->add_setting( 'bottom_widget_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_widget_bg', array(
		'label'   => __( 'Bottom Widget Background', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'bottom_widget_bg',
		'priority' => 15,			
	) ) );

    //Bottom  Widget Heading
        $wp_customize->add_setting( 'bottom_widget_heading', array(
        'default'        => '',
        'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_widget_heading', array(
        'label'   => __( 'Bottom Widget Background', 'flat-responsive' ),
        'section' => 'colors',
        'settings'   => 'bottom_widget_heading',
        'priority' => 15,           
    ) ) );
        
        //Bottom  Widget Text
        $wp_customize->add_setting( 'bottom_widget_text', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_widget_text', array(
		'label'   => __( 'Bottom Widget Text', 'flat-responsive' ),
		'section' => 'colors',
		'settings'   => 'bottom_widget_text',
		'priority' => 15,			
	) ) );
        

	$wp_customize->add_section( 'button_colors', array(
		'title'          => __( 'Button Colors', 'flat-responsive' ),
		'priority'       => 5,
		'panel'			=> 'color_settings',
	) );

     $wp_customize->add_setting( 'btn_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_color', array(
		'label'   => __( 'Button Color', 'flat-responsive' ),
		'section' => 'button_colors',
		'settings'   => 'btn_color',
		'priority' => 17,			
	) ) );
        $wp_customize->add_setting( 'btn_bg_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_bg_color', array(
		'label'   => __( 'Button Background', 'flat-responsive' ),
		'section' => 'button_colors',
		'settings'   => 'btn_bg_color',
		'priority' => 18,			
	) ) );
        $wp_customize->add_setting( 'btnhover_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btnhover_color', array(
		'label'   => __( 'Button Hover Color', 'flat-responsive' ),
		'section' => 'button_colors',
		'settings'   => 'btn_color',
		'priority' => 19,			
	) ) );
        $wp_customize->add_setting( 'btnhover_bg_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btnhover_bg_color', array(
		'label'   => __( 'Button Hover Background', 'flat-responsive' ),
		'section' => 'button_colors',
		'settings'   => 'btnhover_bg_color',
		'priority' => 20,			
	) ) );


	$wp_customize->add_panel( 'footer_panel', array(// Header Panel
	    'priority'       => 6,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Footer Settings', 'flat-responsive'),
	    'description'    => __('Deals with the Footer portion of your theme', 'flat-responsive'),
	));

	$wp_customize->add_section( 'copyright', array(
		'title'          => __( 'Copyright Text', 'flat-responsive' ),
		'priority'       => 50,
		'panel'          => 'footer_panel',
	) );

	// Setting group for a Copyright
	$wp_customize->add_setting( 'copyright', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );

	$wp_customize->add_control( 'copyright', array(
		'settings' => 'copyright',
		'label'    => __( 'Your Copyright Notice', 'flat-responsive' ),
		'section'  => 'copyright',		
		'type'     => 'text',
		'priority' => 13,
	) );

	$wp_customize->add_section( 'social_settings', array(
		'title'          => __( 'Display Social', 'flat-responsive' ),
		'priority'       => 50,
		'panel'          => 'footer_panel',
	) );

	$wp_customize->add_setting( 'flat_responsive_display_social', array(
            'sanitize_callback' =>  'flat_responsive_sanitize_text'
        ) );
	 $wp_customize->add_control( new flat_responsive_note ( $wp_customize,'flat_responsive_display_social', array(
            'section'  => 'social_settings',
            'priority' => 1,
     ) ) );
	// Setting group for a Copyright
	$wp_customize->add_setting( 'footer_social_display', array(
		'default'        => 'Your Name',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );

	$wp_customize->add_control( 'footer_social_display', array(
		'settings' => 'footer_social_display',
		'label'    => __( 'Display Social Icons on Footer', 'flat-responsive' ),
		'section'  => 'social_settings',		
		'type'     => 'checkbox',
		'priority' => 13,
	) );

	$wp_customize->add_section( 'footer_color', array(
		'title'          => __( 'Color Settings', 'flat-responsive' ),
		'priority'       => 50,
		'panel'          => 'footer_panel',
	) );

        //Footer background
        
        $wp_customize->add_setting( 'footer_bg', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'   => __( 'Footer Background', 'flat-responsive' ),
		'section' => 'footer_color',
		'settings'   => 'footer_bg',
		'priority' => 16,			
	) ) );
        
        //Footer text
        
        $wp_customize->add_setting( 'footer_text', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
		'label'   => __( 'Footer Text ', 'flat-responsive' ),
		'section' => 'footer_color',
		'settings'   => 'footer_text',
		'priority' => 16,			
	) ) );


	










        
        
        
/**
 * This is a custom section called Social Networking
 * which contains settings for social networking icons and links
 */
	$wp_customize->add_panel( 'social_networking_panel', array(// Header Panel
	    'priority'       => 6,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Social Networking', 'flat-responsive'),
	    'description'    => __('Deals with the social networking of your theme', 'flat-responsive'),
	));

	$wp_customize->add_section( 'social_networking', array(
		'title'          => __( 'Social Networking Links', 'flat-responsive' ),
		'priority'       => 1,
		'panel'          => 'social_networking_panel',
	) );

	// Setting group for Twitter
	$wp_customize->add_setting( 'twitter_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'twitter_uid', array(
		'settings' => 'twitter_uid',
		'label'    => __( 'Twitter', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 2,
	) );	
	
// Setting group for Facebook
	$wp_customize->add_setting( 'facebook_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'facebook_uid', array(
		'settings' => 'facebook_uid',
		'label'    => __( 'Facebook', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 3,
	) );	
	
// Setting group for Google+
	$wp_customize->add_setting( 'google_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'google_uid', array(
		'settings' => 'google_uid',
		'label'    => __( 'Google+', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 4,
	) );	
	
// Setting group for Linkedin
	$wp_customize->add_setting( 'linkedin_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'linkedin_uid', array(
		'settings' => 'linkedin_uid',
		'label'    => __( 'Linkedin', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 5,
	) );	
	
// Setting group for Pinterest
	$wp_customize->add_setting( 'pinterest_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'pinterest_uid', array(
		'settings' => 'pinterest_uid',
		'label'    => __( 'Pinterest', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 6,
	) );

// Setting group for Flickr
	$wp_customize->add_setting( 'flickr_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'flickr_uid', array(
		'settings' => 'flickr_uid',
		'label'    => __( 'Flickr', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 7,
	) );
// Setting group for Youtube
	$wp_customize->add_setting( 'youtube_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'youtube_uid', array(
		'settings' => 'youtube_uid',
		'label'    => __( 'Youtube', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 8,
	) );	
// Setting group for Vimeo
	$wp_customize->add_setting( 'vimeo_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'vimeo_uid', array(
		'settings' => 'vimeo_uid',
		'label'    => __( 'Vimeo', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 9,
	) );
// Setting group for Instagram
	$wp_customize->add_setting( 'instagram_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'instagram_uid', array(
		'settings' => 'instagram_uid',
		'label'    => __( 'Instagram', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 10,
	) );	
	
	
// Setting group for Reddit
	$wp_customize->add_setting( 'reddit_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'reddit_uid', array(
		'settings' => 'reddit_uid',
		'label'    => __( 'Reddit', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 11,
	) );	
// Setting group for Picassa
	$wp_customize->add_setting( 'picassa_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'picassa_uid', array(
		'settings' => 'picassa_uid',
		'label'    => __( 'Picassa', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 12,
	) );	
// Setting group for Stumbleupon
	$wp_customize->add_setting( 'stumbleupon_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'stumbleupon_uid', array(
		'settings' => 'stumbleupon_uid',
		'label'    => __( 'Stubmleupon', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 13,
	) );	
// Setting group for WordPress
	$wp_customize->add_setting( 'wp_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'wp_uid', array(
		'settings' => 'wp_uid',
		'label'    => __( 'WordPress', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 14,
	) );
// Setting group forgithub
	$wp_customize->add_setting( 'github_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'github_uid', array(
		'settings' => 'github_uid',
		'label'    => __( 'Github', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 15,
	) );	
// Setting group dribbble
	$wp_customize->add_setting( 'dribbble_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'dribbble_uid', array(
		'settings' => 'dribbble_uid',
		'label'    => __( 'Dribbble', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 16,
	) );	
				
// Setting group for rss
	$wp_customize->add_setting( 'rss_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'rss_uid', array(
		'settings' => 'rss_uid',
		'label'    => __( 'RSS', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 17,
	) );
// Setting group for email
	$wp_customize->add_setting( 'email_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'email_uid', array(
		'settings' => 'email_uid',
		'label'    => __( 'Email', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 18,
	) );	
        // Setting group for email
	$wp_customize->add_setting( 'cart_uid', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_url',
	) );

	$wp_customize->add_control( 'cart_uid', array(
		'settings' => 'cart_uid',
		'label'    => __( 'Cart Icon', 'flat-responsive' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 19,
	) );	

	$wp_customize->add_section( 'social_icons_colors', array(
		'title'          => __( 'Social Icon Colors', 'flat-responsive' ),
		'priority'       => 5,
		'panel'			=> 'social_networking_panel',
	) );
    

     // Icon  Color for Top Bar Social Icons
    $wp_customize->add_setting( 'header_social_icons_color', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'header_social_icons_color', array(
		'label'   => __( 'Social Icon Color', 'flat-responsive' ),
		'section' => 'social_icons_colors',
		'settings'   => 'header_social_icons_color',
		'priority' => 7,			
	) ) );

	//Icon Background Color For Top Bar Social Icons
	$wp_customize->add_setting( 'header_social_icons_bgcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'header_social_icons_bgcolor', array(
		'label'   => __( 'Social Icon Background Color', 'flat-responsive' ),
		'section' => 'social_icons_colors',
		'settings'   => 'header_social_icons_bgcolor',
		'priority' => 8,			
	) ) );

	//Icon Hover Color For Top Bar Social Icons
	$wp_customize->add_setting( 'header_social_icons_hovercolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'header_social_icons_hovercolor', array(
		'label'   => __( 'Social Icon Hover Color', 'flat-responsive' ),
		'section' => 'social_icons_colors',
		'settings'   => 'header_social_icons_hovercolor',
		'priority' => 9,			
	) ) );

	//Icon Hover Background Color For Top Bar Social Icons
	$wp_customize->add_setting( 'header_social_icons_hoverbgcolor', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );
	
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'header_social_icons_hoverbgcolor', array(
		'label'   => __( 'Social Icon Hover Background Color', 'flat-responsive' ),
		'section' => 'social_icons_colors',
		'settings'   => 'header_social_icons_hoverbgcolor',
		'priority' => 10,			
	) ) );
    


/**
 * This is a custom section called Woocommerce Setting
 * which contains settings for Woocommerce Settings
 */
	$wp_customize->add_panel( 'woo_set', array(// Header Panel
	    'priority'       => 9,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('WooCommerce Settings', 'flat-responsive'),
	    'description'    => __('WooCommerce Settings For Your Site', 'flat-responsive'),
	));
	

	$wp_customize->add_section( 'woocommerce_settings', array(
		'title'          => __( 'Woocommerce Settings', 'flat-responsive' ),
		'priority'		 => 40,
		'panel' => 'woo_set',
	) );

	//settings for woocommerce layout
	$wp_customize->add_setting( 'woocommerce_layout', array(
		'default'        => 'full',
		'sanitize_callback' => 'flat_responsive_sanitize_text',
	) );

	$wp_customize->add_control( 'woocommerce_layout', array(
		'label'   => __( 'Layout of Shop Page: This Feature is only Available in Pro Version', 'flat-responsive' ),
		'section' => 'woocommerce_settings',
		'settings'   => 'woocommerce_layout',
		'type'     => 'radio',
		'choices'	=> array(
			'full'	=> 'Full Width',
			'left'	=> 'Left Sidebar',
			'right'	=> 'Right Sidebar',
			),
		'priority' => 1,			
	) );


	$wp_customize->add_setting( 'woocommerce_product_title', array(
		'default'        => '',
		'sanitize_callback' => 'flat_responsive_sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'woocommerce_product_title', array(
		'label'   => __( 'Product Title Color', 'flat-responsive' ),
		'section' => 'woocommerce_settings',
		'settings'   => 'woocommerce_product_title',
		'priority' => 2,			
	) ) );

	$wp_customize->add_setting( 'flat_responsive_woocommerce_note', array(
            'sanitize_callback' =>  'flat_responsive_sanitize_callback_text'
        ) );
	 $wp_customize->add_control( new flat_responsive_note ( $wp_customize,'flat_responsive_woocommerce_note', array(
            'section'  => 'woocommerce_settings'
     ) ) );


	




    }


/**
 * adds sanitization callback function : colors
 * @package flat_responsive 
*/
	function flat_responsive_sanitize_hex_color( $color ) {
	if ( $unhashed = sanitize_hex_color_no_hash( $color ) )
		return '#' . $unhashed;

	return $color;
}

/**
 * adds sanitization callback function : text
 * @package flat_responsive 
*/
function flat_responsive_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * adds sanitization callback function : url
 * @package flat_responsive 
*/
	function flat_responsive_sanitize_url( $value) {
		$value = esc_url( $value);
		return $value;
	}

/**
 * adds sanitization callback function : checkbox
 * @package flat_responsive 
*/
function flat_responsive_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}	



/**
 * adds sanitization callback function for the page width : radio
 * @package flat_responsive 
*/
function flat_responsive_sanitize_pagewidth( $input ) {
    $valid = array(
            'default' => __( 'Full Width', 'flat-responsive' ),
            'boxedmedium' => __( 'Boxed Medium', 'flat-responsive' ),
			'boxedsmall' => __( 'Boxed Small', 'flat-responsive' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}
/**
 * adds sanitization callback function for the featured image : radio
 * @package flat_responsive 
*/
function flat_responsive_sanitize_featured_image( $input ) {
    $valid = array(
		'big' => __( 'Wide Featured Image', 'flat-responsive' ),
		'small' => __( 'Small Featured Image', 'flat-responsive' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the excerpt : radio
 * @package flat_responsive 
*/
function flat_responsive_sanitize_excerpt( $input ) {
    $valid = array(
		'content' => __( 'Content', 'flat-responsive' ),
        'excerpt' => __( 'Excerpt', 'flat-responsive' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the layout : radio
 * @package flat_responsive 
*/
function flat_responsive_sanitize_blogstyle( $input ) {
    $valid = array(
		'blogright' => __( 'Blog with Right Sidebar', 'flat-responsive' ),
		'blogleft' => __( 'Blog with Left Sidebar', 'flat-responsive' ),
		'blogleftright' => __( 'Blog with Left &amp; Right Sidebar', 'flat-responsive' ),
		'blogwide' => __( 'Blog with Full Width &amp; no Sidebars', 'flat-responsive' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the logo style : radio
 * @package flat_responsive 
*/
function flat_responsive_sanitize_logo_style( $input ) {
    $valid = array(
            'default' => __( 'Default Logo', 'flat-responsive' ),
            'custom' => __( 'Your Logo', 'flat-responsive' ),
            'logotext' => __( 'Logo with Title and Tagline', 'flat-responsive' ),
			'text' => __( 'Text Title', 'flat-responsive' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for numeric data : number
 * @package flat_responsive 
*/

function flat_responsive_sanitize_number( $value ) {
    $value = (int) $value; // Force the value into integer type.
    return ( 0 < $value ) ? $value : null;
}


/**
 * adds sanitization callback function for uploading : uploader
 * @package flat_responsive * Special thanks to: https://github.com/chrisakelley
 */
add_filter( 'flat_responsive_sanitize_image', 'flat_responsive_sanitize_upload' );
add_filter( 'flat_responsive_sanitize_file', 'flat_responsive_sanitize_upload' );
function flat_responsive_sanitize_upload( $input ) {
        
        $output = '';
        
        $filetype = wp_check_filetype($input);
        
        if ( $filetype["ext"] ) {
        
                $output = $input;
        
        }
        
        return $output;

}


/**
 *  Registers
 */
function flat_responsive_registers() {
    wp_register_script( 'flat_responsive_customizer_script', get_template_directory_uri() . '/js/flat_responsive-customizer.js', array("jquery"), '20120206', true  );
    wp_enqueue_script( 'flat_responsive_customizer_script' );
    wp_localize_script( 'flat_responsive_customizer_script', 'flatresponsive_button', array(
        'pro'              => __( 'View Pro Version', 'flat-responsive' ),
        'review'           => __( 'Rate Us', 'flat-responsive' ),
        'documentation'    => __( 'View Documentation', 'flat-responsive' ),
        
    ) );
}
add_action( 'customize_controls_enqueue_scripts', 'flat_responsive_registers' );

/**
*@Description:  Hooks css on load of page
* @package flat_responsive
*/
add_action('customize_controls_print_styles', 'flat_responsive_add_customizer_css');
	function flat_responsive_add_customizer_css() { ?>
		<style type="text/css">
		 	li#customize-control-nav_position_scrolltop_val label span.customize-control-title {
                font-weight: bold;
            }
            li#customize-control-nav_position_scrolltop {
                margin-bottom: 30px !important;
            }
            li#customize-control-nav_position_scrolltop_val {
                margin-top: 0px;
            }
            input[data-customize-setting-link="nav_position_scrolltop_val"] {
            	font-weight: bold;
            }
            input[data-customize-setting-link="nav_position_scrolltop_val"] {
                background: none !important;
                   
            }
            .wp-full-overlay.expanded.in-sub-panel .wp-full-overlay-sidebar-content a {
				visibility: hidden;
			}
		</style>

<?php }

/**
*adds sticky menu on header
*@package flat_responsive 
*@Description: It hooks the following js to head section
*/
add_action('wp_head', 'flat_responsive_add_customizer_js');
function flat_responsive_add_customizer_js () { ?>
    <script type="text/javascript">
    (function ( $ ) {
        $(document).ready(function() {
            var active = <?php if ( get_theme_mod('nav_position_scrolltop')) { echo "1"; } else { echo "0"; } ?>;
            if (active == 1 ) {
                $(window).scroll(function() {
                    if ($(window).scrollTop() > 180) {
	                    $(".flat_responsive_header").css({
	                    	"position":"fixed", 
	                    	"right":"0px",
	                    	 "left":"0px", 
	                    	 "top": "0px",
	                    	 "z-index":"1080", 
	                    	 'box-shadow': '0.5px 0.5px 0.5px #EAEAEA'
	                    });
	                   

                    } else {
                        $(".flat_responsive_header").css({
                        	"position":"relative"
                        });
                    }

                });
            }
        });
    })(jQuery);;        

    </script> 
<?php }