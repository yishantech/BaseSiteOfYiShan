<style type="text/css">
body {
	font-size: <?php echo esc_html(get_theme_mod('body_fontsize', '100')); ?>%; 
	background-color:<?php echo esc_html(get_theme_mod('bodyback_bg'));?>; 
}
h1, 
h1 a {
	color: <?php echo esc_html(get_theme_mod('h1_fontcolor')); ?>;
	font-size: <?php echo esc_html(get_theme_mod('h1_fontsize')); ?>;
}
h2,
h2 a {
	color: <?php echo esc_html(get_theme_mod('h2_fontcolor')); ?>; 
	font-size: <?php echo esc_html(get_theme_mod('h2_fontsize')); ?>;
}
h3,
h3 a {
	color: <?php echo esc_html(get_theme_mod('h3_fontcolor')); ?>; 
	font-size: <?php echo esc_html(get_theme_mod('h3_fontsize')); ?>;
}
h4,
h4 a {
	color: <?php echo esc_html(get_theme_mod('h4_fontcolor')); ?>; 
	font-size: <?php echo esc_html(get_theme_mod('h4_fontsize')); ?>;
}
h5,
h5 a {
	color: <?php echo esc_html(get_theme_mod('h5_fontcolor')); ?>; 
	font-size: <?php echo esc_html(get_theme_mod('h5_fontsize')); ?>;
}
h6,
h6 a {
	color: <?php echo esc_html(get_theme_mod('h6_fontcolor')); ?>; 
	font-size: <?php echo esc_html(get_theme_mod('h6_fontsize')); ?>;
}
p, 
p a {
	color: <?php echo esc_html(get_theme_mod('p_fontcolor')); ?>; 
	font-size: <?php echo esc_html(get_theme_mod('p_fontsize')); ?>;
}
a {
	color: <?php echo esc_html(get_theme_mod('a_fontcolor')); ?>; 
	font-size: <?php echo esc_html(get_theme_mod('a_fontsize')); ?>;
}
a:hover, 
a:focus,
a:visited {
	color: <?php echo esc_html(get_theme_mod('ahover_fontcolor'));?>;
}
li {
	color: <?php echo esc_html(get_theme_mod('li_fontcolor')); ?>; 
	font-size: <?php echo esc_html(get_theme_mod('li_fontsize')); ?>;
}
.btn,
.btn1,
.btn1, 
.btn a {
	color: <?php echo esc_html(get_theme_mod('btn_color')); ?>!important; 
	background-color: <?php echo esc_html(get_theme_mod('btn_bg_color')); ?>;
}
.btn:hover, 
.btn:focus, 
.btn a:hover, 
.btn a:focus, 
.btn a:visited {
	color: <?php echo esc_html(get_theme_mod('btnhover_color')); ?>; 
	background-color: <?php echo esc_html(get_theme_mod('btnhover_bg_color')); ?>;
}
.btn1:hover, 
.btn1:focus, 
.btn1 a:hover, 
.btn1 a:focus, 
.btn1 a:visited {
	color: <?php echo esc_html(get_theme_mod('btnhover_color')); ?>; 
	background-color: <?php echo esc_html(get_theme_mod('btnhover_bg_color')); ?>;
}
/*
=================================================
Header Top Customizer Color
=================================================
*/
.flat_responsive_top {
	background-color:<?php echo esc_html(get_theme_mod('styletop_bg')); ?>; 
	color:<?php echo esc_html(get_theme_mod('styletop_text')); ?>;
}
#social-icons ul li a,
#social-icons ul li a,
#social-icons ul li a,
#social-icons ul li a {
	background-color:<?php echo esc_html(get_theme_mod('header_social_icons_bgcolor')); ?>!important; 
	color:<?php echo esc_html(get_theme_mod('header_social_icons_color')); ?>!important; 
}
#social-icons ul li a:hover,
#social-icons ul li a:hover,
#social-icons ul li a:hover,
#social-icons ul li a:hover {
	background-color:<?php echo esc_html(get_theme_mod('header_social_icons_hoverbgcolor')); ?>!important; 
	color:<?php echo esc_html(get_theme_mod('header_social_icons_hovercolor')); ?>!important; 
}
.secondary_menu,
.secondary_menu_middle {
	background-color:<?php echo esc_html(get_theme_mod('header_secondary_bg')); ?>; 
}
/*
=================================================
Menu Coloring
=================================================
*/
ul.navmenu  > li >  a,
ul.navmenu1  > li >  a, 
ul.navmenu2 > li >  a,
ul.mobilemenu > li > a {
	background-color:<?php echo esc_html(get_theme_mod('menu_link_bg'));?>; 
	color:<?php echo esc_html(get_theme_mod('menu_link'));?>; 
}
ul.navmenu > li > a:hover, 
ul.navmenu > li > a:focus, 
ul.navmenu > li > a:active, 
ul.navmenu1 > li > a:hover, 
ul.navmenu1 > li > a:focus, 
ul.navmenu1 > li > a:active, 
ul.navmenu2 > li > a:hover, 
ul.navmenu2 > li > a:focus, 
ul.navmenu2 > li > a:active, 
ul.mobilemenu > li > a:hover,	
ul.mobilemenu > li > a:focus, 
ul.mobilemenu > li > a:active {
	background-color:<?php echo esc_html(get_theme_mod('menu_hover'));?>; 
	color:<?php echo esc_html(get_theme_mod('menu_hover_text'));?>; 
}
.navmenu .current_page_item > a, 
.navmenu .current_page_ancestor > a, 
.navmenu .current-menu-item > a, 
.navmenu .current-menu-ancestor > a,
.navmenu1 .current_page_item > a, 
.navmenu1 .current_page_ancestor > a, 
.navmenu1 .current-menu-item > a, 
.navmenu1 .current-menu-ancestor > a,
.navmenu2 .current_page_item > a, 
.navmenu2 .current_page_ancestor > a, 
.navmenu2 .current-menu-item > a, 
.navmenu2 .current-menu-ancestor > a,
.mobilemenu .current_page_item > a, 
.mobilemenu .current_page_ancestor > a, 
.mobilemenu .current-menu-item > a, 
.mobilemenu .current-menu-ancestor > a {
	background-color: <?php echo esc_html(get_theme_mod( 'menu_active')); ?>; 
	color: <?php echo esc_html(get_theme_mod('menu_active_text')); ?>;
}
ul.navmenu ul.sub-menu,
ul.navmenu1 ul.sub-menu,
ul.navmenu2 ul.sub-menu, 
ul.mobilemenu ul.sub-menu {
	background-color: <?php echo esc_html(get_theme_mod( 'submenu_bg_color')); ?>; 
	border-bottom-color:<?php echo esc_html(get_theme_mod('submenu_border'));?>;
	border-right-color:<?php echo esc_html(get_theme_mod('submenu_border'));?>;
	border-left-color:<?php echo esc_html(get_theme_mod('submenu_border'));?>;
}
ul.navmenu ul.sub-menu:before,
ul.navmenu1 ul.sub-menu:before,
ul.navmenu2 ul.sub-menu:before {
	border-bottom-color: <?php echo esc_html(get_theme_mod( 'submenu_bg_color')); ?>; 
	border-top-color: <?php echo esc_html(get_theme_mod( 'menu_hover')); ?>
}
ul.navmenu ul.sub-menu > li,
ul.navmenu1 ul.sub-menu > li,
ul.navmenu2 ul.sub-menu > li {
	border-bottom-color: <?php echo esc_html(get_theme_mod( 'submenu_border')); ?>; 
}
ul.navmenu > li:hover > a,
ul.navmenu1 > li:hover > a,
ul.navmenu2 > li:hover > a {
	background-color: <?php echo esc_html(get_theme_mod( 'menu_hover')); ?>;
}
ul.navmenu ul.sub-menu > li > a,
ul.navmenu1 ul.sub-menu > li > a,
ul.navmenu2 ul.sub-menu > li > a, 
ul.mobilemenu ul.sub-menu > li > a {
	color:<?php echo esc_html(get_theme_mod('submenu_link_color'));?>;
}
ul.navmenu ul.sub-menu .current_page_item > a, 
ul.navmenu ul.sub-menu .current_page_ancestor > a, 
ul.navmenu ul.sub-menu .current-menu-item > a, 
ul.navmenu ul.sub-menu .current-menu-ancestor > a, 
ul.navmenu1 ul.sub-menu .current_page_item > a, 
ul.navmenu1 ul.sub-menu .current_page_ancestor > a, 
ul.navmenu1 ul.sub-menu .current-menu-item > a, 
ul.navmenu1 ul.sub-menu .current-menu-ancestor > a, 
ul.navmenu2 ul.sub-menu .current_page_item > a, 
ul.navmenu2 ul.sub-menu .current_page_ancestor > a, 
ul.navmenu2 ul.sub-menu .current-menu-item > a, 
ul.navmenu2 ul.sub-menu .current-menu-ancestor > a,  
ul.mobilemenu ul.sub-menu .current_page_item > a, 
ul.mobilemenu ul.sub-menu .current_page_ancestor > a, 
ul.mobilemenu ul.sub-menu .current-menu-item > a, 
ul.mobilemenu ul.sub-menu .current-menu-ancestor > a {
	background-color:<?php echo esc_html(get_theme_mod('submenu_active_bg')); ?>!important; 
	color:<?php echo esc_html(get_theme_mod('submenu_active'));?>;
}
ul.navmenu ul.sub-menu > li > a:hover,
ul.navmenu ul.sub-menu > li > a:focus, 
ul.navmenu ul.sub-menu > li > a:active, 
ul.navmenu1 ul.sub-menu > li > a:hover, 
ul.navmenu1 ul.sub-menu > li > a:focus, 
ul.navmenu1 ul.sub-menu > li > a:active, 
ul.navmenu2 ul.sub-menu > li > a:hover, 
ul.navmenu2 ul.sub-menu > li > a:focus, 
ul.navmenu2 ul.sub-menu > li > a:active, 
ul.navmenu3 ul.sub-menu > li > a:hover, 
ul.navmenu3 ul.sub-menu > li > a:focus, 
ul.navmenu3 ul.sub-menu > li > a:active, 
ul.navmenu4 ul.sub-menu > li > a:hover, 
ul.navmenu4 ul.sub-menu > li > a:focus, 
ul.navmenu4 ul.sub-menu > li > a:active, 
ul.mobilemenu ul.sub-menu > li > a:hover, 
ul.mobilemenu ul.sub-menu > li > a:focus,
ul.mobilemenu ul.sub-menu > li > a:active {
	background-color:<?php echo esc_html(get_theme_mod('submenu_hover'));?>!important; 
	color:<?php echo esc_html(get_theme_mod('submenu_hover_text'));?>;
}
ul.navmenu ul.sub-menu > li  {
	border-bottom-color:<?php echo esc_html(get_theme_mod('submenu_divider')); ?>;
}

.flat_responsive_footer {background-color:<?php echo esc_html(get_theme_mod('footer_bg')); ?>; color: <?php echo esc_html(get_theme_mod('footer_text'));?>;}
.flat_responsive_footer p {color: <?php echo esc_html(get_theme_mod('footer_text'));?>;}
.bottom_widget {background-color:<?php echo esc_html(get_theme_mod('bottom_widget_bg')); ?>; color:<?php echo esc_html(get_theme_mod('bottom_widget_text'));?>;}
.bottom_widget a, .bottom_widget h3, .bottom_widget h1, .bottom_widget h2, .bottom_widget h4, .bottom_widget h5, .bottom_widget h6, .bottom_widget p, .bottom_widget li, .bottom_widget div, .bottom_widget span {color:<?php echo esc_html(get_theme_mod('bottom_widget_text'));?>;}
.content_bottom {background-color:<?php echo esc_html(get_theme_mod('contentbottom_widget_bg')); ?>;}
.widget_inset_bottom {background-color:<?php echo esc_html(get_theme_mod('insetbottom_widget_bg')); ?>;}
.widget_inset_bottom1 {background-color:<?php echo esc_html(get_theme_mod('insetbottom1_widget_bg')); ?>;}
.left_sidebar {background-color:<?php echo esc_html(get_theme_mod('leftsidebar_bg')); ?>;}
.right_sidebar {background-color:<?php echo esc_html(get_theme_mod('rightsidebar_bg')); ?>;}
.fr-content {background-color:<?php echo esc_html(get_theme_mod('content_bg')); ?>;}
.flat_responsive_widgets_insettop1 {background-color:<?php echo esc_html(get_theme_mod('insettop1_widget_bg')); ?>;}
.fr_widgets_insettop {background-color:<?php echo esc_html(get_theme_mod('insettop_widget_bg')); ?>;}
.flat_responsive_top_widgets {background-color:<?php echo esc_html(get_theme_mod('top_widget_bg')); ?>;}
.fr_widgets_cta {background-color:<?php echo esc_html(get_theme_mod('cta_bg')); ?>;}
.fr-breadcrumbs-wrapper {background-color:<?php echo esc_html(get_theme_mod('breadcumb_bg')); ?>;}
/*.flat_responsive_header {background-color:<?php echo esc_html(get_theme_mod('header_bg')); ?>; }*/

/*site title */
#fr-site-title a {color:<?php echo esc_html(get_theme_mod('sitetitle')); ?>;}
#fr-logo-group, #fr-text-group {padding: <?php echo esc_html(get_theme_mod('titlepadding', '20px 0px 0px 0px'));?>}
            
/*Navmenu Customizer */



	#secondary-nav .nav-menu li a, #secondary-nav .nav-menu li.home a {color:<?php echo esc_html(get_theme_mod( 'secmenu_link', '#ffffff' )); ?>;}
	#secondary-nav .nav-menu li a:hover {color:<?php echo esc_html(get_theme_mod( 'secmenu_hover_active', '#6c603c' )); ?>;}
	#secondary-nav ul.nav-menu ul a,#secondary-nav .nav-menu ul ul a {color: <?php echo esc_html(get_theme_mod( 'secsubmenu_link', '#ffffff' )); ?>;}
	#secondary-nav ul.nav-menu ul a:hover,#secondary-nav .nav-menu ul ul a:hover,#secondary-nav .nav-menu .current_page_item > a,#secondary-nav .nav-menu .current_page_ancestor > a,#secondary-nav .nav-menu .current-menu-item > a,#secondary-nav .nav-menu .current-menu-ancestor > a {color:<?php echo esc_html(get_theme_mod( 'secmenu_hover_active', '#6c603c' )); ?>;}			
	#secondary-nav ul.sub-menu .current_page_item > a,#secondary-nav ul.sub-menu .current_page_ancestor > a,#secondary-nav ul.sub-menu .current-menu-item > a,#secondary-nav ul.sub-menu .current-menu-ancestor > a {background-color: <?php echo esc_html(get_theme_mod( 'secsubmenu_bg_hover', '#d7c58c' )); ?>;}						
	#secondary-nav ul.nav-menu li:hover > ul,#secondary-nav .nav-menu ul li:hover > ul {background-color: <?php echo esc_html(get_theme_mod( 'secondary_navbg', '#c6b274' )); ?>;border-color:<?php echo esc_html(get_theme_mod( 'secsubmenu_border', '#707070' )); ?>;}			
	#secondary-nav ul.nav-menu li:hover > ul li:hover {background-color: <?php echo esc_html(get_theme_mod( 'secsubmenu_bg_hover', '#d7c58c' )); ?>;}			
	.fr-breadcrumbs-wrapper span {color:<?php echo esc_html(get_theme_mod('breadcrumbs_text'));?>;}
	.fr-breadcrumbs-wrapper span  a {color:<?php echo esc_html(get_theme_mod('breadcrumbs_link'));?>;}
	.fr-breadcrumbs-wrapper span  a:hover {color:<?php echo esc_html(get_theme_mod('breadcrumbs_link_hov'));?>;}
	.wsb_primary {background-color: <?php echo esc_html(get_theme_mod('woocommerce_primary_button_background'));?>!important;}
	
	.wsb_primary:hover, .wsb_primary:focus {background-color: <?php echo esc_html(get_theme_mod('woocommerce_primary_button_hover_background'));?>!important;}
	.added_to_cart:hover, .added_to_cart:focus {background-color: <?php echo esc_html(get_theme_mod('woocommerce_primary_button_hover_background'));?>!important;}
	.wsb_secondary {background-color: <?php echo esc_html(get_theme_mod('woocommerce_secondary_button_background'));?>!important;}
	.wsb_secondary:hover, .wsb_secondary:focus {background-color: <?php echo esc_html(get_theme_mod('woocommerce_secondary_button_hover_background'));?>!important;}
	
	.woocommerce_product_title {color: <?php echo esc_html(get_theme_mod('woocommerce_product_title'));?>!important;}

	
	ul.header_extra ul {height:<?php echo esc_html(get_theme_mod('search_icon_height')); ?>; margin:<?php echo esc_html(get_theme_mod('search_icon_margin')); ?>; background-color:<?php echo esc_html(get_theme_mod('search_icon_background')); ?>;}
	ul.header_extra li {color:<?php echo esc_html(get_theme_mod('search_icon_color')); ?>}
	ul.header_extra ul li .form-control {border-color:<?php echo esc_html(get_theme_mod('search_icon_line')); ?>}
	.flat_responsive_header.center .flat_responsive_menu_secondary {background-color:<?php echo esc_html(get_theme_mod('header_secondary_bg'));?>;}
</style>
