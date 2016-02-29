<?php
/**
* @Theme Name	:	rambo
* @file         :	scripts.php
* @package      :	rambo
* @author       :	webriti
* @license      :	license.txt
*/
function rambo_scripts()
{	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
	/*Template Color Scheme CSs*/
	/*Font Awesome CSS*/
	wp_enqueue_style ('rambo-font-awesome',WEBRITI_TEMPLATE_DIR_URI .'/font-awesome/css/font-awesome.css');	
		
	wp_enqueue_style ('rambo-style-media',WEBRITI_TEMPLATE_DIR_URI .'/css/style-media.css'); //Style-Media
	wp_enqueue_style ('rambo-bootstrap',WEBRITI_TEMPLATE_DIR_URI.'/css/bootstrap.css');		//bootstrap css
	wp_enqueue_style ('rambo-bootstrap-responsive',WEBRITI_TEMPLATE_DIR_URI .'/css/bootstrap-responsive.css'); //boot rsp css
	wp_enqueue_style ('rambo-docs',WEBRITI_TEMPLATE_DIR_URI .'/css/docs.css'); //docs css
	
	/*Default CSS*/
	wp_enqueue_style ('rambo-default-css',WEBRITI_TEMPLATE_DIR_URI .'/css/default.css');
	
	//Template Color Scheme Js
	wp_enqueue_script('rambo-bootstrap',WEBRITI_TEMPLATE_DIR_URI.'/js/menu/bootstrap.min.js',array('jquery'));
	wp_enqueue_script('rambo-menu',WEBRITI_TEMPLATE_DIR_URI.'/js/menu/menu.js'); 
	wp_enqueue_script('rambo-Bootstrap-transtiton',WEBRITI_TEMPLATE_DIR_URI.'/js/bootstrap-transition.js');
	}
	add_action( 'wp_enqueue_scripts', 'rambo_scripts' );
	
	add_action( 'admin_enqueue_scripts', 'admin_enqueue_script_function' );
	function admin_enqueue_script_function()
	{
	wp_enqueue_style( 'jquery-ui' );
	wp_enqueue_style('rambo-drag-drop',WEBRITI_TEMPLATE_DIR_URI.'/css/drag-drop.css');
	}
	add_action('wp_head','head_enqueue_custom_css');
	function head_enqueue_custom_css()
	{
	$rambo_theme_options = theme_data_setup();
	$rambo_current_options = wp_parse_args(  get_option( 'rambo_theme_options', array() ), $rambo_theme_options );
	if($rambo_current_options['rambo_custom_css']!='') {  ?>
	<style type="text/css">
	<?php echo htmlspecialchars_decode($rambo_current_options['rambo_custom_css']); ?>
	</style>
	<?php } }?>