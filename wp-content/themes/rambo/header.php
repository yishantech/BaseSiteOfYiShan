<?php
  /**
  * @Theme Name	:	rambo
  * @file         :	header.php
  * @package      :	rambo
  * @author       :	webriti
  * @license      :	license.txt
  * @filesource   :	wp-content/themes/rambo/header.php
  */
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="欢迎来到北京市移山科技有限公司主页，公司专注：IT咨询 • 全面解决方案 • 企业信息化建设 • 软件设计和开发 • IT外包和服务 • 互联网 • 移动互联网。联系方式：info@yishan-tech.com , QQ: 1524792906 ">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php 	
	$rambo_theme_options = theme_data_setup();
   $rambo_current_options = wp_parse_args(  get_option( 'rambo_theme_options', array() ), $rambo_theme_options );
	if($rambo_current_options['upload_image_favicon']!='')
      	{ ?>
    <link rel="shortcut icon" href="<?php  echo esc_url($rambo_current_options['upload_image_favicon']); ?>" />
    <?php } ?>	
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!--Menu Wrapper-->
    <div class="container">
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <!-------custom logo and custom test and defualt logo text-------->
            <a href="<?php echo esc_url(home_url('/')) ; ?>" class="brand">
            <?php if($rambo_current_options['rambo_texttitle'] ==true) { ?>
            <?php $blogname = get_bloginfo( );
              $blogname1 = substr($blogname,0,1);
              $blogname2 = substr($blogname,1);
              ?>
            <span class="logo-title"><?php echo ucfirst($blogname1); ?><small><?php echo $blogname2; ?></small></span>
            <?php } else if($rambo_current_options['upload_image_logo']!='')
              { ?><img id="logo_image" src="<?php echo $rambo_current_options['upload_image_logo']; ?>"  /><?php
              } ?>
            </a>
            <!------ end of logo -------->
            <div class="nav-collapse collapse navbar-responsive-collapse ">
              <?php	wp_nav_menu( array(  
                'theme_location' => 'primary',
                'container'  => 'nav-collapse collapse navbar-inverse-collapse',
                'menu_class' => 'nav',
                'fallback_cb' => 'rambo_fallback_page_menu',
                'walker' => new rambo_nav_walker()
                )
                );	?>                    
            </div>
            <!-- /.nav-collapse -->
          </div>
        </div>
        <!-- /navbar-inner -->
      </div>
    </div>
    <style type="text/css">
      #logo_image{height:<?php if($rambo_current_options['height']!='') { echo $rambo_current_options['height']; }  else { "50"; } ?>px; width:<?php if($rambo_current_options['width']!='') { echo $rambo_current_options['width']; }  else { "150"; } ?>px;}
    </style>
