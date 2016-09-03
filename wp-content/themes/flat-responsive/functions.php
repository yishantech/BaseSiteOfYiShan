<?php
/**
 * flat_responsive functions and definitions.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * @package flat-responsive
 * @since 1.0.0
 */

/**
 * Sets up the content width value based on the theme's design.
 * @see flat_responsive_content_width() for template-specific adjustments.
 */
if ( ! isset( $content_width ) )
	$content_width = 793;
	
if ( ! function_exists( 'flat_responsive_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 */
function flat_responsive_setup() {

	/*
	 * Makes flat_responsive available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on flat_responsive, use a find and
	 * replace to change 'flat_responsive' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'flat-responsive', get_template_directory() . '/languages' );

	/**
	 * Add callback for custom TinyMCE editor stylesheets. (editor-style.css)
	 * @see http://codex.wordpress.org/Function_Reference/add_editor_style
	 */
	$bootstrap_css_link = get_template_directory_uri() . '/css/bootstrap.min.css';
	$editor_style_link = get_template_directory_uri().'/editor-style.css';
	$main_stylesheet = get_stylesheet_uri();
	add_editor_style(array($main_stylesheet, $bootstrap_css_link, $editor_style_link));

	add_theme_support( 'title-tag' );

	/**
	 * This feature enables post and comment RSS feed links to head.
	 * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Feed_Links
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * This feature enables post-thumbnail support for a theme.
	 * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This feature enables woocommerce support for a theme.
	 * @see http://www.woothemes.com/2013/02/last-call-for-testing-woocommerce-2-0-coming-march-4th/
	 */
	add_theme_support( 'woocommerce' );

	/**
	 * This feature enables custom-menus support for a theme.
	 * @see http://codex.wordpress.org/Function_Reference/register_nav_menus
	 */
	register_nav_menus( array(
		'primary'     => __( 'Primary menu', 'flat-responsive' ),
		'footer'      => __( 'Footer menu', 'flat-responsive' ),
	) );

	/*
	 * Switches default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio',
	) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'flat_responsive_custom_background_args', array(
		'default-color' => '444444',
		'default-image' => '',
	) ) );		
	}
endif; // flat_responsive_setup
add_action( 'after_setup_theme', 'flat_responsive_setup' );

/**
 * Adjusts content_width value for full-width and attachment templates.
 *
 * @return void
 */
	function flat_responsive_content_width() {
		if ( is_page_template( 'page-full-width.php' ) || is_attachment() )
			$GLOBALS['content_width'] = 1140;
	}
	add_action( 'template_redirect', 'flat_responsive_content_width' );


/**
 * Adds customizable styles to your <head>
 */
	function flat_responsive_theme_customize_css()
	{
		get_template_part('inc/customizecss');

	}
	add_action( 'wp_head', 'flat_responsive_theme_customize_css');


/**
 * Enqueues scripts and styles for front end.
 *
 * @return void
 */
	
	
	function flat_responsive_scripts() {
		
		// Loads the Bootstrap stylesheet
		wp_enqueue_style( 'flat_responsive-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array( ), current_time( 'mysql' ), 'all' );
		wp_enqueue_style( 'flat_responsive_font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array( ), current_time( 'mysql' ), 'all' );
		wp_enqueue_style( 'flat_responsive_menu_css', get_template_directory_uri() . '/css/navmenu.css', array( ), current_time( 'mysql' ), 'all' );
		
		// Loads our main stylesheet.
		wp_enqueue_style( 'flat_responsive-style', get_stylesheet_uri(), array(), current_time( 'mysql' ) );
		wp_enqueue_style( 'flat_responsive-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,700,600');
		wp_enqueue_style( 'flat_responsive-lato', '//fonts.googleapis.com/css?family=Lato:400,700,900');
		
		// Loads our scripts.	
		wp_enqueue_script('jquery-ui-accordion');
        wp_enqueue_script('jquery-ui-progressbar');
        wp_enqueue_script('jquery-ui-tabs');
		wp_enqueue_script('woocommerce-zoom', get_template_directory_uri() . '/js/flat_responsive-bootstrap.min.js', array('jquery'), current_time( 'mysql' ), true);
		wp_enqueue_script( 'flat_responsive_extras', get_template_directory_uri() . '/js/flat_responsive_extras.js', array(), current_time( 'mysql' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
				
	}
	add_action( 'wp_enqueue_scripts', 'flat_responsive_scripts' );



/**
 * Move the More Link outside the default content paragraph.
 * Easier to customize
 */
function flat_responsive_new_more_link($link) {
		$link = '<p class="more-link btn">'.$link.'</p>';
		return $link;
	}
add_filter('the_content_more_link', 'flat_responsive_new_more_link');	

/**
 * Special excerpt length per instance ie showcase column excerpts
 * Thanks to http://bavotasan.com/2009/limiting-the-number-of-words-in-your-excerpt-or-content-in-wordpress/
 */ 

function flat_responsive_excerpt($limit) {
	$excerpt = get_theme_mod( 'excerpt_limit', '50' );
    return esc_attr($excerpt);
}
add_filter( 'excerpt_length', 'flat_responsive_excerpt' );


/**
 * Remove the annoying default 10px WP adds to caption images.
 * Many thanks to http://diywpblog.com/ for this solution.
 *
 */

add_filter('img_caption_shortcode', 'flat_responsive_img_caption_filter',10,3);

function flat_responsive_img_caption_filter($val, $attr, $content = null)
{
	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'aligncenter',
		'width'	=> '',
		'caption' => ''
	), $attr));
	
	if ( 1 > (int) $width || empty($caption) )
		return $val;

	$capid = '';
	if ( $id ) {
		$id = esc_attr($id);
		$capid = 'id="figcaption_'. $id . '" ';
		$id = 'id="' . $id . '" aria-labelledby="figcaption_' . $id . '" ';
	}

	return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: '
	. (int) $width . 'px">' . do_shortcode( $content ) . '<figcaption ' . $capid 
	. 'class="wp-caption-text">' . $caption . '</figcaption></figure>';
}


/**
 * Remove the annoying default inline style in the page content for the WP Gallery.
 * Special thanks to: http://wpengineer.com/2352/remove-inline-style-of-wordpress-gallery-shortcode/
 */
add_filter( 'use_default_gallery_style', '__return_false' );


/**
 * Extends the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a featured image.
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
	function flat_responsive_post_classes( $classes ) {
		if ( ! post_password_required() && has_post_thumbnail() )
			$classes[] = 'has-featured-image';
	
		return $classes;
	}
	add_filter( 'post_class', 'flat_responsive_post_classes' );


/**
 * Implement the Custom Header feature.
 */
	require get_template_directory() . '/inc/custom-header.php';

/**
 * Add some extras to the theme.
 */
	require get_template_directory() . '/inc/extras.php';
	
/**
 * Custom template tags for this theme.
 */
	require get_template_directory() . '/inc/template-tags.php';

/**
 * Theme options.
 */
	require get_template_directory() . '/inc/customizer.php';

/**
 * Load theme widgets.
 */
	require get_template_directory() . '/inc/widgets.php';

/**
 * Load Jetpack compatibility file.
 */
	require get_template_directory() . '/inc/jetpack.php';

/*
============================================================
@ FRAMEWORK DEFINE
============================================================
*/

define('FRAMEWORK', get_template_directory().'/flat-responsive');

include(FRAMEWORK.'/init.php');


