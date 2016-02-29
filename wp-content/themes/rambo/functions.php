<?php 
  /**
  * @Theme Name	:	rambo
  * @file         :	functions.php
  * @package      :	rambo
  * @author       :	webriti
  * @license      :	license.txt
  * @filesource   :	wp-content/themes/rambo/functions.php
  */
  	/**Includes reqired resources here**/
  	define('WEBRITI_TEMPLATE_DIR_URI',get_template_directory_uri());
  	define('WEBRITI_TEMPLATE_DIR',get_template_directory());
  	define('WEBRITI_THEME_FUNCTIONS_PATH',WEBRITI_TEMPLATE_DIR.'/functions');
	require_once('theme_setup_data.php');
  	require( WEBRITI_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php' ); // for Default Menus
  	require( WEBRITI_THEME_FUNCTIONS_PATH . '/menu/rambo_nav_walker.php' ); // for Custom Menus	
  	
  	require( WEBRITI_THEME_FUNCTIONS_PATH . '/scripts/scripts.php' ); // all js and css file for rambo-pro	
  	
  	require( WEBRITI_THEME_FUNCTIONS_PATH . '/commentbox/comment-function.php' ); //for comments
  	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/custom-sidebar.php' ); //for widget register
	
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/template-tags.php' ); //for post meta content
	
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/font/font.php' ); //for post meta content
	
	//Customizer
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_theme_color.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_header.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_home_page.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_typography.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_post_slug.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_template.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_layout.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_socila_link.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-pro.php');
	
  	//wp title tag starts here
  	function rambo_head( $title, $sep )
  	{	global $paged, $page;		
  		if ( is_feed() )
  			return $title;
  		// Add the site name.
  		$title .= get_bloginfo( 'name' );
  		// Add the site description for the home/front page.
  		$site_description = get_bloginfo( 'description' );
  		if ( $site_description && ( is_home() || is_front_page() ) )
  			$title = "$title $sep $site_description";
  		// Add a page number if necessary.
  		if ( $paged >= 2 || $page >= 2 )
  			$title = "$title $sep " . sprintf( _e( 'Page', 'rambo' ), max( $paged, $page ) );
  		return $title;
  	}	
  	add_filter( 'wp_title', 'rambo_head', 10,2 );
  	
  	add_action( 'after_setup_theme', 'rambo_setup' ); 	
  	function rambo_setup()
  	{
		//content width
		if ( ! isset( $content_width ) ) $content_width = 770;
		// Load text domain for translation-ready
  		load_theme_textdomain( 'rambo', WEBRITI_THEME_FUNCTIONS_PATH . '/lang' );
  		add_theme_support( 'post-thumbnails' ); //supports featured image
  		add_theme_support( 'automatic-feed-links' ); //feed links enabled
  		add_image_size('blog1_section_img',270,260,true);
  		add_image_size('blog2_section_img',770,300,true);		
  		// This theme uses wp_nav_menu() in one location.
  		//register_nav_menu( 'primary', __( 'Primary Menu', 'rambo' ) );
  		register_nav_menus(
  			array(
   				'primary' => __('Primary Menu', 'rambo' ),
  			)		
  		);
  	}
	
  	function rambo_excerpt_more( $more ) {
  	return '';
  	}
  	add_filter( 'excerpt_more', 'rambo_excerpt_more' );
  	
  	
  	/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'rambo_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function rambo_register_required_plugins() {
 
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
 
       
 
       
 
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Custom Instagram Feed',
            'slug'      => 'easy-instagram-feed',
            'required'  => false,
        ),
 
    );
 
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Recommended Plugins', 'rambo' ),
            'menu_title'                      => __( 'Install Plugins', 'rambo' ),
            'installing'                      => __( 'Installing Plugin: %s', 'rambo' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'rambo' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.','rambo' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.','rambo' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','rambo' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.','rambo' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.','rambo' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','rambo' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.','rambo' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.','rambo' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins','rambo' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins','rambo' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'rambo' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'rambo' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'rambo' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
 
    tgmpa( $plugins, $config );
 
}
  	
  ?>