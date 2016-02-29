<?php
function rambo_home_page_customizer( $wp_customize ) {

class rambo_Customize_slider_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add More Slides and Animation Effect Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3>  
		<?php
		}
	}

class rambo_Customize_side_intro_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Site Intro Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3> 
		<?php
		}
	}	

//News
class rambo_Customize_news_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Latest News Section Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3> 
		<?php
		}
	}

//Footer callout
//News
class rambo_Customize_footer_callout_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Footer callout Section Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3> 
		<?php
		}
	}	

/* Header Section */
	$wp_customize->add_panel( 'home_page_setting', array(
		'capability'     => 'edit_theme_options',
		'priority'   => 250,
		'title'      => __('Home Page Settings', 'rambo'),
	) );

	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Slider Setting','rambo'),
            'description' => '',
			'priority'   => 50,
			'panel'  => 'home_page_setting',)
    );
	
	//Hide slider
	
	$wp_customize->add_setting(
    'rambo_theme_options[home_banner_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_banner_enabled]',
    array(
        'label' => __('Enable slider on front page','rambo'),
        'section' => 'slider_section_settings',
        'type' => 'checkbox',
    ));
	
	$wp_customize->add_setting( 'rambo_theme_options[home_custom_image]',array('default' => get_template_directory_uri().'/images/default/slide/slide.jpg',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',
	));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'rambo_theme_options[home_custom_image]',
			array(
				'type'        => 'upload',
				'label' => __('Image Upload','rambo'),
				'section' => 'example_section_one',
				'settings' =>'rambo_theme_options[home_custom_image]',
				'section' => 'slider_section_settings',
				
			)
		)
	);
	
	//Slider Title
	$wp_customize->add_setting(
	'rambo_theme_options[home_image_title]', array(
        'default'        => __('Theme Feature Goes Here!','rambo'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[home_image_title]', array(
        'label'   => __('Banner Title', 'rambo'),
        'section' => 'slider_section_settings',
		'type' => 'text',
    ));
	
	//Slider Banner discription
	$wp_customize->add_setting(
	'rambo_theme_options[home_image_description]', array(
        'default'        => __('Rambo makes content easy to view on any device with any resolution. You may check this with resizing. Fully Responsive Theme Amazing Design.','rambo'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[home_image_description]', array(
        'label'   => __('Banner Description', 'rambo'),
        'section' => 'slider_section_settings',
		'type' => 'textarea',
    ));
	
	$wp_customize ->add_setting (
	'rambo_theme_options[read_more_text]',
	array( 
	'default' => __('Read More','rambo'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) 
	);

	$wp_customize->add_control (
	'rambo_theme_options[read_more_text]',
	array (  
	'label' => __('Read More Button text','rambo'),
	'section' => 'slider_section_settings',
	'type' => 'text',
	) );

	$wp_customize ->add_setting (
	'rambo_theme_options[read_more_button_link]',
	array( 
	'default' => __('#','rambo'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=> 'option',
	) );

	$wp_customize->add_control (
	'rambo_theme_options[read_more_button_link]',
	array (  
	'label' => __('Read More Button Link','rambo'),
	'section' => 'slider_section_settings',
	'type' => 'text',
	) );

	$wp_customize->add_setting(
		'rambo_theme_options[read_more_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default' => true,
		));

	$wp_customize->add_control(
		'rambo_theme_options[read_more_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','rambo'),
			'section' => 'slider_section_settings',
		)
	);
	
	$wp_customize->add_setting( 'rambo_theme_options[cleint_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_slider_upgrade(
		$wp_customize,
		'rambo_theme_options[cleint_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'slider_section_settings',
				'settings'				=> 'rambo_theme_options[cleint_upgrade]',
			)
		)
	);
	//Slider animation
	$wp_customize->add_setting(
    'rambo_pro_theme_options[animation]',
    array(
        'default' => __('slide','rambo'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'rambo_pro_theme_options[animation]',
    array(
        'type' => 'select',
        'label' => __('Select slider Animation','rambo'),
        'section' => 'slider_section_settings',
		'priority'   => 200,
		 'choices' => array('slide'=>__('slide', 'rambo'), 'fade'=>__('fade', 'rambo')),
		));
		
		
	 //Slider animation
	
	$wp_customize->add_setting(
    'rambo_pro_theme_options[slide_direction]',
    array(
        'default' => __('slide','rambo'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'rambo_pro_theme_options[slide_direction]',
    array(
        'type' => 'select',
        'label' => __('Slide direction','rambo'),
        'section' => 'slider_section_settings',
		'priority'   => 250,
		 'choices' => array('horizontal'=>__('horizontal', 'rambo'), 'vertical'=>__('vertical', 'rambo')),
		));	
		
	$wp_customize->add_setting(
    'rambo_pro_theme_options[slideshowSpeed]',
    array(
        'default' => __('2000','rambo'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'rambo_pro_theme_options[slideshowSpeed]',
    array(
        'type' => 'select',
        'label' => __('Animation speed','rambo'),
        'section' => 'slider_section_settings',
		'priority'   => 300,
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000' => '2.0','2500' => '2.5' ,'3000' =>'3.0' , '3500' => '3.5', '4000' => '4.0','4500' => '4.5' ,'5000' => '5.0' , '5500' => '5.5' )));	
		 
	// Slide show speed
	$wp_customize->add_setting(
    'rambo_pro_theme_options[slideshowSpeed]',
    array(
        'default' => __('2500','rambo'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'rambo_pro_theme_options[slideshowSpeed]',
    array(
        'type' => 'select',
        'label' => __('Slideshow speed','rambo'),
        'section' => 'slider_section_settings',
		'priority'   => 300,
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000' => '2.0','2500' => '2.5' ,'3000' =>'3.0' , '3500' => '3.5', '4000' => '4.0','4500' => '4.5' ,'5000' => '5.0' , '5500' => '5.5' )));	
	
	//Add Slider setting
	class WP_slider_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="#" class="button"><?php _e( 'Click Here To Add Slider', 'rambo' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'slider',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_slider_Customize_Control( $wp_customize, 'slider', array(	
		'section' => 'slider_section_settings',
		'priority'   => 500,
    ))
);

$wp_customize->add_section( 'site_intro' , array(
		'title'      => __('Site Intro ', 'rambo'),
		'panel'  => 'home_page_setting',
		'priority'   => 100,
   	) );
	
$wp_customize->add_setting( 'rambo_theme_options[site_intro_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_side_intro_upgrade(
		$wp_customize,
		'rambo_theme_options[site_intro_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'site_intro',
				'settings'				=> 'rambo_theme_options[site_intro_upgrade]',
			)
		)
	);	
	
	$wp_customize->add_setting(
    'rambo_pro_theme_options[site_intro_descritpion]',
    array(
        'default' => __('Rambo is a clean and fully responsive Template.','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_pro_theme_options[site_intro_descritpion]',
    array(
        'label' => __('Intro description','rambo'),
        'section' => 'site_intro',
        'type' => 'text',
		'input_attrs' => array('disabled' => 'disabled'),
    )
	);
	
	//Site intro call now
	$wp_customize->add_setting(
    'rambo_pro_theme_options[site_intro_button_text]',
    array(
        'default' => __('Purchase Now','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_pro_theme_options[site_intro_button_text]',
    array(
        'label' => __('Intro button text','rambo'),
        'section' => 'site_intro',
        'type' => 'text',
		'input_attrs' => array('disabled' => 'disabled'),
    )
	);
	
	//Button Link
	$wp_customize ->add_setting (
	'rambo_pro_theme_options[site_intro_button_link]',
	array( 
	'default' => __('#','rambo'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) );
	
	$wp_customize->add_control (
	'rambo_pro_theme_options[site_intro_button_link]',
	array (  
	'label' => __('Intro button link','rambo'),
	'section' => 'site_intro',
	'type' => 'text',
	'input_attrs' => array('disabled' => 'disabled'),
	) );

	$wp_customize->add_setting(
		'rambo_pro_theme_options[intro_button_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[intro_button_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','rambo'),
			'section' => 'site_intro',
		)
	);
//Service
$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Service Setting ', 'rambo'),
		'panel'  => 'home_page_setting',
		'priority'   => 150,
   	) );
	

//Show and hide Service section
	$wp_customize->add_setting(
	'rambo_theme_options[home_service_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_service_enabled]',
    array(
        'label' => __('Enable Service Section On HOME Page','rambo'),
        'section' => 'service_section_head',
        'type' => 'checkbox',
    )
	);	
	
	$wp_customize->add_setting(
		'rambo_theme_options[home_service_one_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa-tachometer',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'rambo_theme_options[home_service_one_icon]', array(
        'label'   => __('Service Icon One', 'rambo'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));		
		
	$wp_customize->add_setting(
    'rambo_theme_options[home_service_one_title]',
    array(
        'default' => __('Service One','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_service_one_title]',
    array(
        'label' => __('Service Title One','rambo'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'rambo_theme_options[home_service_one_description]',
    array(
        'default' => __('This is service one, reliable to user and comfortable to operate. You can easily manage all sub services using one instance.','rambo'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_service_one_description]',
    array(
        'label' => __('Service Description One','rambo'),
        'section' => 'service_section_head',
        'type' => 'textarea',	
    )
);
	
//Service Two
$wp_customize->add_setting(
		'rambo_theme_options[home_service_two_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa-film',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'rambo_theme_options[home_service_two_icon]', array(
        'label'   => __('Service Icon Two', 'rambo'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));		
		
	$wp_customize->add_setting(
    'rambo_theme_options[home_service_two_title]',
    array(
        'default' => __('Service Two','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_service_two_title]',
    array(
        'label' => __('Service Title Two','rambo'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'rambo_theme_options[home_service_two_description]',
    array(
        'default' => __('This is service one, reliable to user and comfortable to operate. You can easily manage all sub services using one instance.','rambo'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_service_two_description]',
    array(
        'label' => __('Service Description Two','rambo'),
        'section' => 'service_section_head',
        'type' => 'textarea',	
    )
);	

//Service Three
$wp_customize->add_setting(
		'rambo_theme_options[home_service_three_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa-tachometer',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'rambo_theme_options[home_service_three_icon]', array(
        'label'   => __('Service Icon Three', 'rambo'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));		
		
	$wp_customize->add_setting(
    'rambo_theme_options[home_service_three_title]',
    array(
        'default' => __('Service Three','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_service_three_title]',
    array(
        'label' => __('Service Title Three','rambo'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'rambo_theme_options[home_service_three_description]',
    array(
        'default' => __('This is service one, reliable to user and comfortable to operate. You can easily manage all sub services using one instance.','rambo'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_service_three_description]',
    array(
        'label' => __('Service Description Three','rambo'),
        'section' => 'service_section_head',
        'type' => 'textarea',	
    )
);

//Service Four
$wp_customize->add_setting(
		'rambo_theme_options[home_service_fourth_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa-flag-checkered',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'rambo_theme_options[home_service_fourth_icon]', array(
        'label'   => __('Service Icon Four', 'rambo'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));		
		
	$wp_customize->add_setting(
    'rambo_theme_options[home_service_fourth_title]',
    array(
        'default' => __('Service Four','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_service_fourth_title]',
    array(
        'label' => __('Service Title Four','rambo'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'rambo_theme_options[home_service_fourth_description]',
    array(
        'default' => __('This is service one, reliable to user and comfortable to operate. You can easily manage all sub services using one instance.','rambo'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_service_fourth_description]',
    array(
        'label' => __('Service Description Four','rambo'),
        'section' => 'service_section_head',
        'type' => 'textarea',	
    )
);

class WP_service_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
     <div class="pro-vesrion">
	 <P><?php _e('Want to add more services, than upgrade to pro version','rambo');?></P>
	 </div>
	  <div class="pro-box">
	 <a href="<?php echo esc_url( __('http://webriti.com/rambo/', 'rambo'));?>" target="_blank" class="service" id="review_pro"><?php _e( 'UPGRADE TO PRO','rambo' ); ?></a>
	 <div>
    <?php
    }
}

$wp_customize->add_setting(
    'service_pro',
    array(
        'default' =>'',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_service_Customize_Control( $wp_customize, 'service_pro', array(	
		'label' => __('Discover rambo Pro','rambo'),
        'section' => 'service_section_head',
		'setting' => 'service_pro',
    ))
);

//Portfolio setting
$wp_customize->add_section(
        'project_section_settings',
        array(
            'title' => __('Project Setting','rambo'),
            'description' => '',
			'priority'   => 200,
			'panel'  => 'home_page_setting',)
    );

//Show and hide Portfolio section
	$wp_customize->add_setting(
	'rambo_theme_options[home_projects_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[home_projects_enabled]',
    array(
        'label' => __('Enable Project Section On HOME Page','rambo'),
        'section' => 'project_section_settings',
        'type' => 'checkbox',
    )
	);	
	
	//Project Title
	$wp_customize->add_setting(
    'rambo_theme_options[project_heading_one]',
    array(
        'default' => __('Featured Portfolio Project','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('rambo_theme_options[project_heading_one]',array(
    'label'   => __('Project title','rambo'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );	
	 
	//Project Description 
	 $wp_customize->add_setting(
    'rambo_theme_options[project_tagline]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit lorem ipsum dolor sit amet','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'rambo_theme_options[project_tagline]',array(
    'label'   => __('Project Description','rambo'),
    'section' => 'project_section_settings',
	 'type' => 'textarea',)  );
	 
	 //Project one setting
	 $wp_customize->add_setting(
	'rambo_theme_options[project_one_title]', array(
        'default'        => 'Lorem Ipsum',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[project_one_title]', array(
        'label'   => __('Project One Title', 'rambo'),
        'section' => 'project_section_settings',
		'type' => 'text',
    ));
	
	//Project one image
	$wp_customize->add_setting( 'rambo_theme_options[project_one_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'rambo_theme_options[project_one_thumb]',
			array(
				'label' => 'Project One Thumbnail',
				'settings' =>'rambo_theme_options[project_one_thumb]',
				'section' => 'project_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	$wp_customize->add_setting(
	'rambo_theme_options[project_one_text]', array(
        'sanitize_callback' => 'sanitize_text_field',
		'default'        => __('A set of pieces of creative work collected to be shown to potential customers or employers; "the artist had put together a portfolio of his work','rambo'),
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[project_one_text]', array(
        'label'   => __('Project One Description', 'rambo'),
        'section' => 'project_section_settings',
		'type' => 'textarea',));
		
	//Project Two 
	$wp_customize->add_setting(
	'rambo_theme_options[project_two_title]', array(
        'sanitize_callback' => 'sanitize_text_field',
		'default'        => __('Product two','rambo'),
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[project_two_title]', array(
        'label'   => __('Project Two Title', 'rambo'),
        'section' => 'project_section_settings',
		'type' => 'text',
    ));
	
	//Project two image
	$wp_customize->add_setting( 'rambo_theme_options[project_two_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb1.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'rambo_theme_options[project_two_thumb]',
			array(
				'label' => __('Project Two Thumbnail','rambo'),
				'settings' =>'rambo_theme_options[project_two_thumb]',
				'section' => 'project_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	$wp_customize->add_setting(
	'rambo_theme_options[project_two_text]', array(
        'sanitize_callback' => 'sanitize_text_field',
		'default'        => __('A set of pieces of creative work collected to be shown to potential customers or employers; "the artist had put together a portfolio of his work','rambo'),
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[project_two_text]', array(
        'label'   => __('Project Two Description', 'rambo'),
        'section' => 'project_section_settings',
		'type' => 'textarea',));
		
	
	//Project Three
	$wp_customize->add_setting(
	'rambo_theme_options[project_three_title]', array(
        'sanitize_callback' => 'sanitize_text_field',
		'default'        => 'Product three',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[project_three_title]', array(
        'label'   => __('Project Three Title', 'rambo'),
        'section' => 'project_section_settings',
		'type' => 'text',
    ));
	
	//Project three image
	$wp_customize->add_setting( 'rambo_theme_options[project_three_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb2.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'rambo_theme_options[project_three_thumb]',
			array(
				'label' => __('Project Three Thumbnail','rambo'),
				'settings' =>'rambo_theme_options[project_three_thumb]',
				'section' => 'project_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	$wp_customize->add_setting(
	'rambo_theme_options[project_three_text]', array(
		'sanitize_callback' => 'sanitize_text_field',       
	   'default'        => __('A set of pieces of creative work collected to be shown to potential customers or employers; "the artist had put together a portfolio of his work','rambo'),
        'capability'     => 'edit_theme_options',
		
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[project_three_text]', array(
        'label'   => __('Project Three Description', 'rambo'),
        'section' => 'project_section_settings',
		'type' => 'textarea',));
		
		
	//Project Four
	
	$wp_customize->add_setting(
	'rambo_theme_options[project_four_title]', array(
        'sanitize_callback' => 'sanitize_text_field',
		'default'        => __('Product Four','rambo'),
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[project_four_title]', array(
        'label'   => __('Project Four Title', 'rambo'),
        'section' => 'project_section_settings',
		'type' => 'text',
    ));
	
	//Project Four image
	$wp_customize->add_setting( 'rambo_theme_options[project_four_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb3.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'rambo_theme_options[project_four_thumb]',
			array(
				'label' => __('Project four Thumbnail','rambo'),
				'settings' =>'rambo_theme_options[project_four_thumb]',
				'section' => 'project_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	$wp_customize->add_setting(
	'rambo_theme_options[project_four_text]', array(
        'sanitize_callback' => 'sanitize_text_field',
		'default'        => __('A set of pieces of creative work collected to be shown to potential customers or employers; "the artist had put together a portfolio of his work','rambo'),
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
    $wp_customize->add_control('rambo_theme_options[project_four_text]', array(
        'label'   => __('Project Four Description', 'rambo'),
        'section' => 'project_section_settings',
		'type' => 'textarea',));
	
	
	class WP_project_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
     <div class="pro-vesrion">
	 <P><?php _e('Want to add more Project, than upgrade to pro version','rambo');?></P>
	 </div>
	  <div class="pro-box">
	 <a href="<?php echo esc_url( __('http://webriti.com/rambo/', 'rambo'));?>" target="_blank" class="service" id="review_pro"><?php _e( 'UPGRADE TO PRO','rambo' ); ?></a>
	 <div>
    <?php
    }
}

$wp_customize->add_setting(
    'project_pro',
    array(
        'default' =>'',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_project_Customize_Control( $wp_customize, 'project_pro', array(	
		'label' => __('Discover rambo Pro','rambo'),
        'section' => 'project_section_settings',
		'setting' => 'project_pro',
    ))
);
	
	//Recent News setting
	$wp_customize->add_section(
        'recent_news_settings',
        array(
            'title' => __('Recent News Setting','rambo'),
            'description' => '',
			'priority'   => 250,
			'panel'  => 'home_page_setting',)
    );
$wp_customize->add_setting( 'rambo_theme_options[news_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_news_upgrade(
		$wp_customize,
		'rambo_theme_options[news_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'recent_news_settings',
				'settings'				=> 'rambo_theme_options[news_upgrade]',
			)
		)
	);	
$wp_customize->add_setting(
    'rambo_pro_theme_options[home_latest_news_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_pro_theme_options[home_latest_news_enabled]',
    array(
        'label' => __('Enable Latest News Section','rambo'),
        'section' => 'recent_news_settings',
        'type' => 'checkbox',
    ));	
// //News Title
	$wp_customize->add_setting(
    'rambo_pro_theme_options[blog_section_head]',
    array(
        'default' => __('Recent News','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		
		)
	);	
	$wp_customize->add_control('rambo_pro_theme_options[blog_section_head]',array(
    'label'   => __('Recent News Section Heading','rambo'),
    'section' => 'recent_news_settings',
	 'type' => 'text',
	 'input_attrs' => array('disabled' => 'disabled'),
	 )  );	

//Footer call-out setting
$wp_customize->add_section(
        'footer_callout_setting',
        array(
            'title' => __('Footer Call Out Area Setting','rambo'),
            'description' => '',
			'priority'   => 300,
			'panel'  => 'home_page_setting',)
    );


$wp_customize->add_setting( 'rambo_theme_options[footer_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_footer_callout_upgrade(
		$wp_customize,
		'rambo_theme_options[footer_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'footer_callout_setting',
				'settings'				=> 'rambo_theme_options[footer_upgrade]',
			)
		)
	);
	
//Footer callout text
	
	 
	 //Site intro
	
	$wp_customize->add_setting(
    'rambo_pro_theme_options[site_info_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_pro_theme_options[site_info_enabled]',
    array(
        'label' => __('Enable Site Intro','rambo'),
        'section' => 'footer_callout_setting',
        'type' => 'checkbox',
    ));
	 
	 $wp_customize ->add_setting (
	'rambo_pro_theme_options[site_info_title]',
	array( 
	'default' => __('Rambo is a clean and fully responsive Template.','rambo'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) 
	);

	$wp_customize->add_control (
	'rambo_pro_theme_options[site_info_title]',
	array (  
	'label' => __('Footer call out title','rambo'),
	'section' => 'footer_callout_setting',
	'type' => 'text',
	'input_attrs' => array('disabled'=>'disabled'),
	) );
	
	$wp_customize ->add_setting (
	'rambo_pro_theme_options[site_info_descritpion]',
	array( 
	'default' => __('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat.','rambo'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) 
	);

	$wp_customize->add_control (
	'rambo_pro_theme_options[site_info_descritpion]',
	array (  
	'label' => __('Footer call out description','rambo'),
	'section' => 'footer_callout_setting',
	'type' => 'text',
	'input_attrs' => array('disabled'=>'disabled'),
	) );
	
	$wp_customize ->add_setting (
	'rambo_pro_theme_options[site_info_button_text]',
	array( 
	'default' => __('Purchase Now','rambo'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) 
	);

	$wp_customize->add_control (
	'rambo_pro_theme_options[site_info_button_text]',
	array (  
	'label' => __('Footer call out button text	','rambo'),
	'section' => 'footer_callout_setting',
	'type' => 'text',
	'input_attrs' => array('disabled'=>'disabled')
	) );
	
	
	
	$wp_customize ->add_setting (
	'rambo_pro_theme_options[site_info_button_link]',
	array( 
	'default' => __('#','rambo'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) );

	$wp_customize->add_control (
	'rambo_pro_theme_options[site_info_button_link]',
	array (  
	'label' => __('Call Out Button Link','rambo'),
	'section' => 'footer_callout_setting',
	'type' => 'text',
	'input_attrs' => array('disabled'=>'disabled')
	) );

	$wp_customize->add_setting(
		'rambo_pro_theme_options[site_info_button_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default' => true,
		));

	$wp_customize->add_control(
		'rambo_pro_theme_options[site_info_button_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','rambo'),
			'section' => 'footer_callout_setting',
		)
	);
	
	$wp_customize->add_section(
        'footer_copyright_setting',
        array(
            'title' => __('Footer Copyright Custmization ','rambo'),
            'description' => '',
			'priority'   => 350,
			'panel'  => 'home_page_setting',)
    );
	
	$wp_customize->add_setting(
    'rambo_theme_options[footer_widgets_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_theme_options[footer_widgets_enabled]',
    array(
        'label' => __('Enable Footer widgets in all pages.','rambo'),
        'section' => 'footer_copyright_setting',
        'type' => 'checkbox',
    ));
	

	$wp_customize->add_setting(
    'rambo_theme_options[rambo_copy_rights_text]',
    array(
		'sanitize_callback' => 'sanitize_text_field',
        'default' => __('&copy;2014&nbsp;ALL Rights Reserved','rambo'),
		'type' =>'option',
    ));
	$wp_customize->add_control(
    'rambo_theme_options[rambo_copy_rights_text]',
    array(
        'label' => __('Copy Rights Text','rambo'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'rambo_theme_options[rambo_designed_by_head]',
    array(
	'sanitize_callback' => 'sanitize_text_field',
        'default' => __('Designed By','rambo'),
		'type' =>'option',
    ));
	$wp_customize->add_control(
    'rambo_theme_options[rambo_designed_by_head]',
    array(
        'label' => __('Designed By Head','rambo'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'rambo_theme_options[rambo_designed_by_text]',
    array(
		'sanitize_callback' => 'sanitize_text_field',
        'default' => __('Webriti','rambo'),
		'type' =>'option',
    ));
	$wp_customize->add_control(
    'rambo_theme_options[rambo_designed_by_text]',
    array(
        'label' => __('Designed By Name','rambo'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'rambo_theme_options[rambo_designed_by_link]',
    array(
		'sanitize_callback' => 'rambo_copyright_sanitize_text',
        'default' => __('http://www.webriti.com','rambo'),
		'type' =>'option',
    ));
	$wp_customize->add_control(
    'rambo_theme_options[rambo_designed_by_link]',
    array(
        'label' => __('Designed By Link','rambo'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	function rambo_copyright_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

	}

	function rambo_copyright_sanitize_html( $input ) {

    return force_balance_tags( $input );

	}
	}
	add_action( 'customize_register', 'rambo_home_page_customizer' );
	?>