<?php
function rambo_post_slug_customizer( $wp_customize ) {

//Contact Page
class rambo_Customize_slug_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Post Type Slug','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3>  
		<?php
		}
	}
//Post type slug setting
$wp_customize->add_section(
        'post_slug_setting',
        array(
            'title' => __('Post Type Slug Setting','rambo'),
            'description' => '',
			'priority'   => 500,
			)
    );
	
$wp_customize->add_setting( 'rambo_theme_options[slug_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_slug_upgrade(
		$wp_customize,
		'rambo_theme_options[slug_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'post_slug_setting',
				'settings'				=> 'rambo_theme_options[slug_upgrade]',
			)
		)
	);	

//Slider Slug
	$wp_customize->add_setting(
    'rambo_pro_theme_options[rambo_slider_slug]',
    array(
        'default' => __('rambo_slider','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('rambo_pro_theme_options[rambo_slider_slug]',array(
    'label'   => __('Slider Slug','rambo'),
    'section' => 'post_slug_setting',
	 'type' => 'text',
	 'input_attrs'=>array('disabled'=>'disabled'),
	 )  );
	 
 //Service Slug
	$wp_customize->add_setting(
    'rambo_pro_theme_options[rambo_service_slug]',
    array(
        'default' => __('rambo_service','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',));	
	$wp_customize->add_control('rambo_pro_theme_options[rambo_service_slug]',array(
    'label'   => __('Service Slug','rambo'),
    'section' => 'post_slug_setting',
	 'type' => 'text',
	 'input_attrs'=>array('disabled'=>'disabled'),
	 )  );

//Testimonial Slug
	$wp_customize->add_setting(
    'rambo_pro_theme_options[rambo_testimonial_slug]',
    array(
        'default' => __('rambo_testimonial','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('rambo_pro_theme_options[rambo_testimonial_slug]',array(
    'label'   => __('Testimonial Slug','rambo'),
    'section' => 'post_slug_setting',
	 'type' => 'text',
	 'input_attrs' => array('disabled'=>'disabled'),
	 )  );

//Portfolio/Project Slug
$wp_customize->add_setting(
    'rambo_pro_theme_options[rambo_portfolio_slug]',
    array(
        'default' => __('rambo_project','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('rambo_pro_theme_options[rambo_portfolio_slug]',array(
    'label'   => __('Portfolio/Project Slug','rambo'),
    'section' => 'post_slug_setting',
	 'type' => 'text',
	 'input_attrs' => array('disabled'=>'disabled'),
	 )  );	

//Team Slug
$wp_customize->add_setting(
    'rambo_pro_theme_options[rambo_team_slug]',
    array(
        'default' => __('rambo_team','rambo'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('rambo_pro_theme_options[rambo_team_slug]',array(
    'label'   => __('Our Team Slug','rambo'),
    'section' => 'post_slug_setting',
	 'type' => 'text',
	 'input_attrs' => array('disabled' => 'disabled'),
	 )  );
	 }
	 add_action('customize_register','rambo_post_slug_customizer');