<?php

/*--------------------------------------------------------------------*/
/*     Register Google Fonts
/*--------------------------------------------------------------------*/
function rambo_fonts_url() {
	
    $fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Roboto:100,300,400,500,600,700,900','Philosopher:400');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $fonts_url;
}
function rambo_scripts_styles() {
    wp_enqueue_style( 'rambo-fonts', rambo_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'rambo_scripts_styles' );
?>