<?php 
  /**
  * @Theme Name	:	rambo
  * @file         :	index-banner.php
  * @package      :	rambo
  * @author       :	webriti
  * @license      :	license.txt
  * @filesource   :	wp-content/themes/rambo/index-banner.php
  */
  $rambo_theme_options = theme_data_setup();
  $current_options = wp_parse_args(  get_option( 'rambo_theme_options', array() ), $rambo_theme_options );
  if($current_options['home_banner_enabled']==true)
  { 	
  ?>
<div class="front_banner">
  <div class="banner">
    <li>
      <img  class="banner_img webrit_slides" src="<?php if($current_options['home_custom_image']!='') { echo $current_options['home_custom_image']; } ?>">
      <div class="banner_con">
        <h2><?php if(isset($current_options['home_image_title']))	{ echo $current_options['home_image_title']; } else { _e('Theme Feature Goes Here !','rambo'); } ?></h2>
        <h5 class="banner-title"><span><?php if(isset($current_options['home_image_description']))	{ echo $current_options['home_image_description']; } else { _e('This is Dummy Text. This is Dummy Text. This is Dummy Text.  I repeat.. This is Dummy Text.','rambo'); } ?></span></h5>
		<?php } if($current_options['read_more_text'] != '') { ?>
		<a href="<?php echo $current_options['read_more_button_link']; ?>" <?php if( $current_options['read_more_link_target'] == 1 ) { echo "target='_blank'"; } ?> class="flex_btn"><?php echo $current_options['read_more_text']; ?></a>
      </div>
    </li>
  </div>
</div>
<?php } ?>