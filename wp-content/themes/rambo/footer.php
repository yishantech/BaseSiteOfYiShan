<?php
  /**
  * @Theme Name	:	rambo
  * @file         :	footer.php
  * @package      :	rambo
  * @author       :	webriti
  * @license      :	license.txt
  * @filesource   :	wp-content/themes/rambo/footer.php
  */ 
  $rambo_theme_options = theme_data_setup();
  $current_options = wp_parse_args(  get_option( 'rambo_theme_options', array() ), $rambo_theme_options );
  ?>
<?php if($current_options['footer_widgets_enabled']==true) { ?>
<div class="hero-widgets-section">
  <div class="container">
    <div class="row">
      <?php if ( is_active_sidebar( 'footer-widget-area' ) )
        {?>
      <div class="">
        <?php dynamic_sidebar( 'footer-widget-area' ); ?>
      </div>
      <?php }?>
    </div>
  </div>
</div>
<?php } ?>
<!-- Footer Section -->
<div class="footer-section">
  <div class="container">
    <div class="row">
      <div class="span8">
        <p><?php _e('Powered By ','rambo');?> <a target="_blank" href="<?php echo esc_url ( 'http://wordpress.org/') ; ?>"> <?php _e('WordPress','rambo');?></a>&nbsp;&nbsp;<?php if($current_options['rambo_designed_by_head']!=''){ echo ($current_options['rambo_designed_by_head']); } ?>
		<?php if(is_home()) {?>
          <a rel="nofollow" target="_blank" href="<?php if($current_options['rambo_designed_by_link']!='') { echo esc_url($current_options['rambo_designed_by_link']);} ?>"><?php if($current_options['rambo_designed_by_text']!='') { ?>
          <?php  echo ($current_options['rambo_designed_by_text']); } ?></a>&nbsp;&nbsp;<?php if($current_options['rambo_copy_rights_text']!='') { ?>
          <?php  echo ($current_options['rambo_copy_rights_text']); } ?>
		  <?php  } else { ?>
		  <?php if($current_options['rambo_designed_by_text']!='') { ?>
          <?php  echo ($current_options['rambo_designed_by_text']); } ?></a>&nbsp;&nbsp;<?php if($current_options['rambo_copy_rights_text']!='') { ?>
          <?php  echo ($current_options['rambo_copy_rights_text']); } ?><?php }?>
        </p>
      </div>
      <?php if($current_options['footer_social_media_enabled']==true) { ?>
      <div class="span4">
        <div class="footer_social pull-right">
          <a href="<?php if($current_options['social_media_facebook_link']!='') { echo esc_url($current_options['social_media_facebook_link']); } else { echo "#"; } ?>" class="facebook">&nbsp;</a>
          <a href="<?php if($current_options['social_media_twitter_link']!='') { echo esc_url($current_options['social_media_twitter_link']); } else { echo "#"; } ?>" class="twitter">&nbsp;</a>
          <a href="<?php if($current_options['social_media_linkedin_link']!='') { echo esc_url($current_options['social_media_linkedin_link']); } else { echo "#"; } ?>" class="linked-in">&nbsp;</a>
          <a href="<?php if($current_options['social_media_google_plus']!='') { echo esc_url($current_options['social_media_google_plus']); } else { echo "#"; } ?>" class="google_plus">&nbsp;</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>