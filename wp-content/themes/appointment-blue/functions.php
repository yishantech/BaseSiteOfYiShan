<?php
add_action( 'wp_enqueue_scripts', 'appointment_blue_theme_css',999);
function appointment_blue_theme_css() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
	wp_enqueue_style( 'child-menu', get_stylesheet_directory_uri()."/css/theme-menu.css" );
}
?>