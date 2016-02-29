<?php
function rambo_header_customizer( $wp_customize ) {
/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority'       => 220,
		'capability'     => 'edit_theme_options',
		'title'      => __('Header Settings', 'rambo'),
	) );
	
	
	/* favicon option */
    $wp_customize->add_section( 'front_page_setting' , array(
      'title'       => __( 'Front Page Setting', 'rambo' ),
      'priority'    => 50,
	  'panel'  => 'header_options',
    ) );
	
	$wp_customize->add_setting(
	'rambo_theme_options[front_page]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[front_page]',
    array(
        'label' => __('Enable Home on front page.','rambo'),
        'section' => 'front_page_setting',
        'type' => 'checkbox',
    )
	);
	
	
	/* favicon option */
    $wp_customize->add_section( 'rambo_favicon' , array(
      'title'       => __( 'Site favicon', 'rambo' ),
      'priority'    => 300,
      'description' => __( 'Upload a favicon', 'rambo' ),
	  'panel'  => 'header_options',
    ) );
    
    $wp_customize->add_setting('rambo_theme_options[upload_image_favicon]', array(
      'sanitize_callback' => 'esc_url_raw',
	   'capability'     => 'edit_theme_options',
	   'type' => 'option', 
    ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'rambo_theme_options[upload_image_favicon]', array(
      'label'    => __( 'Choose your favicon (ideal width and height is 16x16 or 32x32)', 'rambo' ),
      'section'  => 'rambo_favicon',
    ) ) );
	
//Header logo setting
	$wp_customize->add_section( 'header_logo' , array(
		'title'      => __('Header Logo setting', 'rambo'),
		'panel'  => 'header_options',
		'priority'   => 300,
   	) );
	$wp_customize->add_setting(
		'rambo_theme_options[upload_image_logo]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'rambo_theme_options[upload_image_logo]',
			   array(
				   'label'          => __( 'Upload a 150x150 for Logo Image', 'rambo' ),
				   'section'        => 'header_logo',
				   'priority'   => 50,
			   )
		   )
	);
	
	//Enable/Disable logo text
	$wp_customize->add_setting(
    'rambo_theme_options[rambo_texttitle]',array(
	'default'    => true,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	));

	$wp_customize->add_control(
    'rambo_theme_options[rambo_texttitle]',
    array(
        'type' => 'checkbox',
        'label' => __('Enable/Disabe Text Logo','rambo'),
        'section' => 'header_logo',
		'priority'   => 100,
    )
	);
	
	
	//Logo width
	
	$wp_customize->add_setting(
    'rambo_theme_options[width]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 150,
	'type' => 'option',
	
	));

	$wp_customize->add_control(
    'rambo_theme_options[width]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Width','rambo'),
        'section' => 'header_logo',
		'priority'   => 400,
    )
	);
	
	//Logo Height
	$wp_customize->add_setting(
    'rambo_theme_options[height]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 50,
	'type'=>'option',
	
	));

	$wp_customize->add_control(
    'rambo_theme_options[height]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Height','rambo'),
        'section' => 'header_logo',
		'priority'   =>410,
    )
	);
	
	//Custom css
	$wp_customize->add_section( 'custom_css' , array(
		'title'      => __('Custom css', 'rambo'),
		'panel'  => 'header_options',
		'priority'   => 100,
   	) );
	$wp_customize->add_setting(
	'rambo_theme_options[rambo_custom_css]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'rambo_theme_options[rambo_custom_css]', array(
        'label'   => __('Custom css snippet:', 'rambo'),
        'section' => 'custom_css',
        'type' => 'textarea',
    ));
	}
	add_action( 'customize_register', 'rambo_header_customizer' );
	?>