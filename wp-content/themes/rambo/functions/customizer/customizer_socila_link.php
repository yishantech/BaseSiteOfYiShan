<?php
function rambo_social_link_customizer( $wp_customize ) {

//Header social Icon

	$wp_customize->add_section(
        'header_social_icon',
        array(
            'title' => 'Social Link Settings ',
           'priority'    => 300,
        )
    );

//Show and hide Social Icons
	$wp_customize->add_setting(
	'rambo_theme_options[footer_social_media_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[footer_social_media_enabled]',
    array(
        'label' => __('Enable Social media icon footer section.','rambo'),
        'section' => 'header_social_icon',
        'type' => 'checkbox',
    )
	);
	//twitter link
	$wp_customize->add_setting(
    'rambo_theme_options[social_media_twitter_link]',
    array(
        'default' => '#',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'rambo_theme_options[social_media_twitter_link]',
    array(
        'label' => __('Twitter Link:','rambo'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);
	
	//Linkdin link
	
	$wp_customize->add_setting(
	'rambo_theme_options[social_media_linkedin_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'rambo_theme_options[social_media_linkedin_link]',
    array(
        'label' => __('Linkedin Links:','rambo'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);
	
	// Facebook link
	$wp_customize->add_setting(
    'rambo_theme_options[social_media_facebook_link]',
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'rambo_theme_options[social_media_facebook_link]',
    array(
        'label' => __('Facebook Links:','rambo'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);
	//Google plus
	
	$wp_customize->add_setting(
	'rambo_theme_options[social_media_google_plus]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'rambo_theme_options[social_media_google_plus]',
    array(
        'label' => __('Google Plus Links:','rambo'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);
	}
	add_action( 'customize_register', 'rambo_social_link_customizer' );