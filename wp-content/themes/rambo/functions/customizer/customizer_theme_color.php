<?php
function rambo_pro_theme_color_customizer( $wp_customize ) {

//Theme color
class WP_color_Customize_Control extends WP_Customize_Control {
public $type = 'new_menu';

       function render_content()
	   { ?>
	   <h3><?php _e('Want To add More Styling and Theme Color Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a>
	   <h3>
	   <?php
	   echo '<h3>Predefined Background Color Skins</h3>';
		  $name = '_customize-color-radio-' . $this->id; 
		  foreach($this->choices as $key => $value ) {
            ?>
               <label>
				<input type="radio" value="<?php echo $key; ?>" name="<?php echo esc_attr( $name ); ?>" data-customize-setting-link="<?php echo esc_attr( $this->id ); ?>" <?php if($this->value() == $key){ echo 'checked="checked"'; } ?>>
				<img <?php if($this->value() == $key){ echo 'class=""'; } ?> src="<?php echo get_template_directory_uri(); ?>/images/bg-patterns/<?php echo $value; ?>" alt="<?php echo esc_attr( $value ); ?>" />
				</label>
				
            <?php
		  }
       }
}
/* Header Section */
	$wp_customize->add_section( 'header_image' , array(
		'title'      => __('Theme Color Schemes Settings ', 'rambo'),
		'priority'   => 200,
   	) );
	$wp_customize->add_setting(
	'rambo_pro_theme_options[rambopro_stylesheet]', array(
        'default'        => 'default.css',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    
	$wp_customize->add_control(new WP_color_Customize_Control($wp_customize,'rambo_pro_theme_options[rambopro_stylesheet]',
	array(
        'label'   => __('Predefined Colors', 'rambo'),
        'section' => 'header_image',
		'type' => 'radio',
		'choices' => array(
			'default.css' => 'default.png',
            'blue.css' => 'blue.png',
            'green.css' => 'green.png',
			'orange.css'=>'orange.png',
			'pink.css'=>'pink.png',
    )
	
	)));
	
	
	$wp_customize->add_setting(
    'rambo_pro_theme_options[theme_color_enable]',
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'rambo_pro_theme_options[theme_color_enable]',
    array(
        'label' => __('Skin Color Enable','rambo'),
        'section' => 'header_image',
        'type' => 'checkbox',
    )
	);
	
	$wp_customize->add_setting(
	'rambo_pro_theme_options[theme_color]', array(
	'capability'     => 'edit_theme_options',
	'default' => '#31A3DD',
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
    ));
	
	$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
	$wp_customize, 
	'rambo_pro_theme_options[theme_color]', 
	array(
		'label'      => __( 'Skin Color', 'rambo' ),
		'section'    => 'header_image',
		'settings'   => 'rambo_pro_theme_options[theme_color]',
	) ) );
	
	
	$wp_customize->add_setting(
    'rambo_pro_theme_options[layout_selector]',
    array(
        'default' => __('wide','rambo'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'rambo_pro_theme_options[layout_selector]',
    array(
        'type' => 'select',
        'label' => __('Slide direction','rambo'),
        'section' => 'header_image',
		'choices' => array('wide'=>__('wide', 'rambo'), 'boxed'=>__('boxed', 'rambo')),
	));
	
	
	}
	add_action( 'customize_register', 'rambo_pro_theme_color_customizer' );
	?>