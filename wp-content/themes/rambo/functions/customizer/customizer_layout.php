<?php
//Pro Button
function rambo_layout_customizer( $wp_customize ) {

class rambo_Customize_layout_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Theme layout Feature Then','rambo'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/rambo' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','rambo'); ?> </a></h3>  
		<?php
		}
	}
class WP_layout_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
		
	$rambo_pro_theme_options=theme_data_setup(); 
	$current_options = wp_parse_args(  get_option( 'rambo_pro_theme_options', array() ), $rambo_pro_theme_options );
	$data_enable = explode(",",$current_options['front_page_data']);
	$defaultenableddata=array('Theme-Introduction-Top','Service Section','Project Portfolio','Latest News','Call Out Area');
	$layout_disable=array_diff($defaultenableddata,$data_enable);
	?>
 <h3><?php _e('Enable','rambo'); ?></h3>
  <ul class="sortable customizer_layout" id="enable">
  <?php if( !empty($data_enable[0]) )    { foreach( $data_enable as $value ){ ?>
  <li class="ui-state" id="<?php echo $value; ?>"><?php echo $value; ?></li>
  <?php } } ?>
  </ul>
  
  
 <h3>Disable</h3> 
 <ul class="sortable customizer_layout" id="disable">
 <?php if(!empty($layout_disable)){ foreach($layout_disable as $val){ ?>
  <li class="ui-state" id="<?php echo $val; ?>"><?php echo $val; ?></li>
  <?php } } ?>
 </ul>
 <div class="section">
		<p> <b><?php _e('Slider section always top on the home page','rambo'); ?></b></p>
		<p> <b><?php _e('Note:','rambo'); ?> </b> <?php _e('By default all the section are enable on homepage. If you do not want to display any section just drag that section to the disabled box.','rambo'); ?><p>
</div>
<?php
    }
}
$wp_customize->add_section( 'rambo_layout_section' , array(
		'title'      => __('Theme Layout Manager', 'rambo'),
		'priority'       => 1000,
   	) );

$wp_customize->add_setting( 'rambo_theme_options[layout_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new rambo_Customize_layout_upgrade(
		$wp_customize,
		'rambo_theme_options[layout_upgrade]',
			array(
				'label'					=> __('Rambo Upgrade','rambo'),
				'section'				=> 'rambo_layout_section',
				'settings'				=> 'rambo_theme_options[layout_upgrade]',
			)
		)
	);
	
$wp_customize->add_setting(
    'rambo_pro_theme_options[layout_manager]',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		
    )	
);
$wp_customize->add_control( new WP_layout_Customize_Control( $wp_customize, 'rambo_pro_theme_options[layout_manager]', array(
		'label' => __('Discover rambo Pro','rambo'),
        'section' => 'rambo_layout_section',
		'setting' => 'rambo_pro_theme_options[layout_manager]',
    ))
);

$wp_customize->add_setting(
    'rambo_pro_theme_options[front_page_data]',
    array(
        'default' =>'Theme-Introduction-Top,Service Section,Project Portfolio,Latest News,Call Out Area',
		'type'=>'option',
		'sanitize_callback' => 'sanitize_text_field',
    )
	
);
$wp_customize->add_control(
    'rambo_pro_theme_options[front_page_data]',
    array(
        'label' => __('Enable','rambo'),
        'section' => 'rambo_layout_section',
        'type' => 'text',
		));
		
	
$wp_customize->add_setting(
    'rambo_pro_theme_options[layout_textbox_disable]',
    array(
        'default' => '',
		'type'=>'option',
		'sanitize_callback' => 'sanitize_text_field',
    )
	
);
$wp_customize->add_control(
    'rambo_pro_theme_options[layout_textbox_disable]',
    array(
        'label' => __('Disable','rambo'),
        'section' => 'rambo_layout_section',
        'type' => 'text',
		));	


}
add_action( 'customize_register', 'rambo_layout_customizer' );
?>