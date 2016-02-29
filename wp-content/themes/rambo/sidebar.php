<?php
  /**
  * @Theme Name	:	rambo
  * @file         :	sidebar.php
  * @package      :	rambo
  * @author       :	webriti
  * @license      :	license.txt
  * @filesource   :	wp-content/themes/rambo/sidebar.php
  */
  ?>
  
  <?php if(is_active_sidebar('sidebar-primary')):?>
<div class="span4 sidebar">	
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-primary') ) : ?> 
  <?php endif;?>
</div>
<?php endif;?>