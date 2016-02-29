<?php 

/**
 * Theme Widget positions
 * @package flat-responsive
 * @since 1.0.0
 */

 
/**
 * Registers our main widget area and the front page widget areas.
 */
 
function flat_responsive_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Blog Right Sidebar', 'flat-responsive' ),
		'id' => 'blogright',
		'description' => __( 'This is the right sidebar column that appears on the blog but not the pages.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Blog Left Sidebar', 'flat-responsive' ),
		'id' => 'blogleft',
		'description' => __( 'This is the left sidebar column that appears on the blog but not the pages.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Page Right Sidebar', 'flat-responsive' ),
		'id' => 'pageright',
		'description' => __( 'This is the right sidebar column that appears on pages, but not part of the blog', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Left Sidebar', 'flat-responsive' ),
		'id' => 'pageleft',
		'description' => __( 'This is the left sidebar column that appears on pages, but not part of the blog', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Banner Wide', 'flat-responsive' ),
		'id' => 'banner-wide',
		'description' => __( 'This is a full width showcase banner for images or media sliders that can display on your pages.', 'flat-responsive' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Top 1', 'flat-responsive' ),
		'id' => 'top1',
		'description' => __( 'This is the 1st top widget position located just below the banner area.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Top 2', 'flat-responsive' ),
		'id' => 'top2',
		'description' => __( 'This is the 2nd top widget position located just below the banner area.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Top 3', 'flat-responsive' ),
		'id' => 'top3',
		'description' => __( 'This is the 3rd top widget position located just below the banner area.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Top 4', 'flat-responsive' ),
		'id' => 'top4',
		'description' => __( 'This is the 4th top widget position located just below the banner area.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );
	

	
	register_sidebar( array(
		'name' => __( 'Bottom 1', 'flat-responsive' ),
		'id' => 'bottom1',
		'description' => __( 'This is the first bottom widget position located in a coloured background area just above the footer.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 2', 'flat-responsive' ),
		'id' => 'bottom2',
		'description' => __( 'This is the second bottom widget position located in a coloured background area just above the footer.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 3', 'flat-responsive' ),
		'id' => 'bottom3',
		'description' => __( 'This is the third bottom widget position located in a coloured background area just above the footer.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 4', 'flat-responsive' ),
		'id' => 'bottom4',
		'description' => __( 'This is the fourth bottom widget position located in a coloured background area just above the footer.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Call to Action', 'flat-responsive' ),
		'id' => 'cta',
		'description' => __( 'This is a call to action which is normally used to make a message stand out just above the main content.', 'flat-responsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'flat_responsive_widgets_init' );

/**
 * Count the number of widgets to enable resizable widgets
 */

// lets setup the inset top group 
function flat_responsive_topgroup() {
	$count = 0;
	if ( is_active_sidebar( 'top1' ) )
		$count++;
	if ( is_active_sidebar( 'top2' ) )
		$count++;
	if ( is_active_sidebar( 'top3' ) )
		$count++;		
	if ( is_active_sidebar( 'top4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-md-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo $class;
}


// lets setup the bottom group 
function flat_responsive_bottomgroup() {
	$count = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$count++;
	if ( is_active_sidebar( 'bottom2' ) )
		$count++;
	if ( is_active_sidebar( 'bottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-md-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}