<?php
function rambo_template_customizer( $wp_customize ) {
//About
class rambo_Customize_about_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add About us Template Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3>  
		<?php
		}
	}
	
//Service page
class rambo_Customize_service_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Service Page Template Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3>  
		<?php
		}
	} 

//Google maps
class rambo_Customize_google_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Google maps Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3>  
		<?php
		}
	}

//Contact Page
class rambo_Customize_contact_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Contact Page Template Setting Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3>  
		<?php
		}
	} 	

//Template panel 
	$wp_customize->add_panel( 'rambo_template', array(
		'priority'       => 400,
		'capability'     => 'edit_theme_options',
		'title'      => __('Template Settings', 'rambo'),
	) );
	
	
// add section to manage About us tPage
	$wp_customize->add_section(
        'about_us_setting',
        array(
            'title' => __('About Page Setting','rambo'),
			'panel'  => 'rambo_template',
			
			)
    );
	
	$wp_customize->add_setting( 'rambo_theme_options[about_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_about_upgrade(
		$wp_customize,
		'rambo_theme_options[about_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'about_us_setting',
				'settings'				=> 'rambo_theme_options[about_upgrade]',
			)
		)
	);
	
//Enable about us content with Featured image.
	$wp_customize->add_setting(
		'rambo_pro_theme_options[aboutus_content_with_image]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[aboutus_content_with_image]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable About Us content with Featured Image and social media links on About Us Page','rambo'),
			'section' => 'about_us_setting',
		)
	);
	
// About us page Temm heading one
	$wp_customize->add_setting(
		'rambo_pro_theme_options[about_page_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Meet Our','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[about_page_title]',
		array(
			'type' => 'text',
			'label' => __('About Page Title','rambo'),
			'section' => 'about_us_setting',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);
	
//About Team Section
$wp_customize->add_setting(
		'rambo_pro_theme_options[aboutus_our_team_enabled]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[aboutus_our_team_enabled]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Our team section','rambo'),
			'section' => 'about_us_setting',
		)
	);	
//About Us Page Team Heading Two
	$wp_customize->add_setting(
		'rambo_pro_theme_options[our_team_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Meet the Team','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[our_team_title]',
		array(
			'type' => 'text',
			'label' => __('Our Team Title','rambo'),
			'section' => 'about_us_setting',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);
	
//Add Team setting
	class WP_team_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=rambopro_team" class="button"  target="_blank"><?php _e( 'Click Here To Add Team Member', 'rambo' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'team',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_team_Customize_Control( $wp_customize, 'team', array(	
		'section' => 'about_us_setting',
    ))
);

//Testimonial
$wp_customize->add_setting(
		'rambo_pro_theme_options[aboutus_testimonial_enabled]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[aboutus_testimonial_enabled]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable testmonials section on about us page.','rambo'),
			'section' => 'about_us_setting',
		)
	);	
	
//Testimonial Title
	$wp_customize->add_setting(
		'rambo_pro_theme_options[testimonials_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Testimonials','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[testimonials_title]',
		array(
			'type' => 'text',
			'label' => __('Testimonials Title','rambo'),
			'section' => 'about_us_setting',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);	
	
//Add Testimonial setting
	class WP_testimonial_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=rambopro_testimonial" class="button"  target="_blank"><?php _e( 'Click Here To Add Testimonial', 'rambo' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'testimonial',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_testimonial_Customize_Control( $wp_customize, 'testimonial', array(	
		'section' => 'about_us_setting',
    ))
);	


//Client Strip enable
$wp_customize->add_setting(
		'rambo_pro_theme_options[aboutus_client_strip_enabled]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[aboutus_client_strip_enabled]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable client strip on About us page','rambo'),
			'section' => 'about_us_setting',
		)
	);

//Client Title
	$wp_customize->add_setting(
		'rambo_pro_theme_options[client_strip_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Our Client','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[client_strip_title]',
		array(
			'type' => 'text',
			'label' => __('Client Strip Heading','rambo'),
			'section' => 'about_us_setting',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);

//Number of client display in client strip
$wp_customize->add_setting(
		'rambo_pro_theme_options[number_of_client]',
		array('capability'  => 'edit_theme_options',
		'default' => __('5','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[number_of_client]',
		array(
			'type' => 'text',
			'label' => __('Number of client display in client strip','rambo'),
			'section' => 'about_us_setting',
			'input_attrs' => array('disabled'=>'disabled')
			
		)
	);	
$wp_customize->add_setting(
    'rambo_pro_theme_options[rambo_client_strip_speed]',
    array(
        'default' => __('2000','rambo'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'rambo_pro_theme_options[rambo_client_strip_speed]',
    array(
        'type' => 'select',
        'label' => __('Client strip slide speed','rambo'),
        'section' => 'about_us_setting',
		'choices' => array(1000=>1000,2000=>2000,3000=>3000,4000=>4000,5000=>5000),
		));	
	
//Add Clients setting
	class WP_client_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=rambopro_clientstrip" class="button"  target="_blank"><?php _e( 'Click Here To Add Clients', 'rambo' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'client',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_client_Customize_Control( $wp_customize, 'client', array(	
		'section' => 'about_us_setting',
    ))
);	


	
	// Service Page
	$wp_customize->add_section(
        'Sevice_page',
        array(
            'title' => __('Service Page Setting','rambo'),
			'panel'  => 'rambo_template',
			
			)
    );
	
	$wp_customize->add_setting( 'rambo_theme_options[service_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_service_upgrade(
		$wp_customize,
		'rambo_theme_options[service_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'Sevice_page',
				'settings'				=> 'rambo_theme_options[service_upgrade]',
			)
		)
	);
	
	$wp_customize->add_setting(
		'rambo_pro_theme_options[service_testimonial_enabled]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[service_testimonial_enabled]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable testmonials section on service template.','rambo'),
			'section' => 'Sevice_page',
		)
	);
	
	//Client Strip enable Service Template
	$wp_customize->add_setting(
		'rambo_pro_theme_options[service_client_strip_enabled]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[service_client_strip_enabled]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable client strip on Service Page template.','rambo'),
			'section' => 'Sevice_page',
		)
	);
	
	
	//Add Service setting
	class WP_service_template_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=rambopro_service" class="button"  target="_blank"><?php _e( 'Click Here To Add Service', 'rambo' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'service',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_service_template_Customize_Control( $wp_customize, 'service', array(	
		'section' => 'Sevice_page',
    ))
);
	
// Conatct Google map
	$wp_customize->add_section(
        'contact_page_map',
        array(
            'title' => __('Google Maps','rambo'),
			'panel'  => 'rambo_template',
			)
    );
	
	$wp_customize->add_setting( 'rambo_theme_options[google_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_google_upgrade(
		$wp_customize,
		'rambo_theme_options[google_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'contact_page_map',
				'settings'				=> 'rambo_theme_options[google_upgrade]',
			)
		)
	);
	
	
	//Google Map Enable:
	$wp_customize->add_setting(
		'rambo_pro_theme_options[contact_google_map_enabled]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[contact_google_map_enabled]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Google Map in contact page','rambo'),
			'section' => 'contact_page_map',
		)
	);
	
	//Google map URL
	
	$wp_customize->add_setting(
		'rambo_pro_theme_options[rambo_contact_google_map_url]',
		array('capability'  => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => __('https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kota+Industrial+Area,+Kota,+Rajasthan&amp;aq=2&amp;oq=kota+&amp;sll=25.003049,76.117499&amp;sspn=0.020225,0.042014&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kota+Industrial+Area,+Kota,+Rajasthan&amp;z=13&amp;ll=25.142832,75.879538','rambo'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[rambo_contact_google_map_url]',
		array(
			'type' => 'text',
			'label' => __('Google Map URL:','rambo'),
			'section' => 'contact_page_map',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);
//Conatct Page
	$wp_customize->add_section(
        'contact_page',
        array(
            'title' => __('Contact Page Setting','rambo'),
			'panel'  => 'rambo_template',
			
			)
    );
	
	$wp_customize->add_setting( 'rambo_theme_options[contact_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_contact_upgrade(
		$wp_customize,
		'rambo_theme_options[contact_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'contact_page',
				'settings'				=> 'rambo_theme_options[contact_upgrade]',
			)
		)
	);
	
	
	// Conatct send message heading
	$wp_customize->add_setting(
		'rambo_pro_theme_options[contact_form_heading]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Contact Form','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[contact_form_heading]',
		array(
			'type' => 'text',
			'label' => __('Contact Form Heading:','rambo'),
			'section' => 'contact_page',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);
	
	$wp_customize->add_setting(
    'rambo_pro_theme_options[rambo_get_in_touch_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_pro_theme_options[rambo_get_in_touch_enabled]',
    array(
        'label' => __('Enable Get in touch in contact page.','rambo'),
        'section' => 'contact_page',
        'type' => 'checkbox',
    ));
	
	
	// Conatct Get in Touch Text:
	$wp_customize->add_setting(
		'rambo_pro_theme_options[rambo_get_in_touch]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Get in Touch','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[rambo_get_in_touch]',
		array(
			'type' => 'text',
			'label' => __('Get in Touch Text:','rambo'),
			'section' => 'contact_page',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);

	//Conatct Get in Touch Description:
	$wp_customize->add_setting(
		'rambo_pro_theme_options[rambo_get_in_touch_description]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Lorem ipsum dolor sit amet, usu rebum errem pericula ea, ei alia quaerendum vix. Ea justo tritani sit, odio ignota quo te. Lorem ipsum dolor sit amet.','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[rambo_get_in_touch_description]',
		array(
			'type' => 'text',
			'label' => __('Get in Touch Description','rambo'),
			'section' => 'contact_page',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);
	
	
	//Our Office section
	$wp_customize->add_setting(
    'rambo_pro_theme_options[rambo_our_office_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_pro_theme_options[rambo_our_office_enabled]',
    array(
        'label' => __('Enable our office section in contact page.','rambo'),
        'section' => 'contact_page',
        'type' => 'checkbox',
    ));
	
	// Conatct address one
	$wp_customize->add_setting(
		'rambo_pro_theme_options[rambo_our_office]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Our Office','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[rambo_our_office]',
		array(
			'type' => 'text',
			'label' => __('Our Office Text:','rambo'),
			'section' => 'contact_page',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);
	
	// Conatct address
	$wp_customize->add_setting(
		'rambo_pro_theme_options[rambo_contact_address]',
		array('capability'  => 'edit_theme_options',
		'default' => __('New York City, USA','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[rambo_contact_address]',
		array(
			'type' => 'text',
			'label' => __('Contact Address:','rambo'),
			'section' => 'contact_page',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);
	
	
	// Contact Phone Number:
	$wp_customize->add_setting(
		'rambo_pro_theme_options[rambo_contact_phone_number]',
		array('capability'  => 'edit_theme_options',
		'default' => __('420-300-3850','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[rambo_contact_phone_number]',
		array(
			'type' => 'text',
			'label' => __('Contact Phone Number:','rambo'),
			'section' => 'contact_page',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);
	
	// Conatct Email
	$wp_customize->add_setting(
		'rambo_pro_theme_options[rambo_contact_email]',
		array('capability'  => 'edit_theme_options',
		'default' => __('themes@webriti.com','rambo'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[rambo_contact_email]',
		array(
			'type' => 'text',
			'label' => __('Contact Email:','rambo'),
			'section' => 'contact_page',
			'input_attrs' => array('disabled'=>'disabled'),
		)
	);
	}
	add_action( 'customize_register', 'rambo_template_customizer' );
	?>