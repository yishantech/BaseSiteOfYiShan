<?php	
  /**
  * @Theme Name	:	rambo
  * @file         :	front-rambo.php
  * @package      :	rambo
  * @author       :	webriti
  * @license      :	license.txt
  * @filesource   :	wp-content/themes/rambo/front-rambo.php
  */ 
  		
		$rambo_theme_options = theme_data_setup();
		$current_options = wp_parse_args(  get_option( 'rambo_theme_options', array() ), $rambo_theme_options );
		
  		if ( $current_options['front_page'] != true ) {
  		get_template_part('index');
  		}
  	else {
  	get_header();
  
  	/****** get index banner  ********/
  	get_template_part('index', 'banner') ;
  	
  	/****** get index service  ********/
  	get_template_part('index', 'service') ;
	
	/****** get index Projects  ********/
  	get_template_part('index', 'projects') ;
  	
  	/****** get footer section *********/
  	get_footer(); 
  	}
  ?>