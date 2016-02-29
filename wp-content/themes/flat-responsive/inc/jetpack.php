<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package flat-responsive 
*/

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function flat_responsive_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'fr-content',
		'footer'    => 'fr-wrapper',
	) );
}
add_action( 'after_setup_theme', 'flat_responsive_jetpack_setup' );
