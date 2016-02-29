<?php
/*---------------------------------------------------------------------------------*
 * @file           	theme_stup_data.php
 * @package        	Rambo
 * @copyright      	2013 rambo
 * @license        	license.txt
 * @author       	webriti
 * @filesource     	wp-content/themes/rambo-pro/theme_setup_data.php
 *	Admin  & front end default data file 
 *-----------------------------------------------------------------------------------*/ 
function theme_data_setup()
{
	$slide_image_uri =WEBRITI_TEMPLATE_DIR_URI .'/images/default/slide/slide.jpg';
	$project_img1 = WEBRITI_TEMPLATE_DIR_URI .'/images/project_thumb.png';
	$project_img2 = WEBRITI_TEMPLATE_DIR_URI .'/images/project_thumb1.png';
	$project_img3 = WEBRITI_TEMPLATE_DIR_URI .'/images/project_thumb2.png';
	$project_img4 = WEBRITI_TEMPLATE_DIR_URI .'/images/project_thumb3.png';
	return $rambo_theme_options=array(
						
			'front_page' => true,
			'rambo_stylesheet'=>'default.css',			
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'150',
			'rambo_texttitle'=>true,
			'upload_image_favicon'=>'',			
			'rambo_custom_css'=>'',
			
			//Home image section 	
			'home_banner_enabled'=>true,
			'home_custom_image' => $slide_image_uri,								
			'home_image_title' => __('Theme Feature Goes Here!','rambo'),
			'home_image_description' => __('Rambo makes content easy to view on any device with any resolution. You may check this with resizing. Fully Responsive Theme Amazing Design.','rambo'),	
			'read_more_text' => __('Read more','rambo'),
			'read_more_button_link' => '#',
			'read_more_link_target' => true,
			
			// service
			'home_service_enabled'=>true,
			'home_service_one_icon'=>'fa-tachometer',
			'home_service_one_title'=>__('Service One','rambo'),
			'home_service_one_description'=>__('This is service one, reliable to user and comfortable to operate. You can easily manage all sub services using one instance.  ','rambo'),
			
			'home_service_two_icon'=>'fa-film',
			'home_service_two_title'=>__('Service Two','rambo'),
			'home_service_two_description'=>__('This is service two, reliable to user and comfortable to operate. You can easily manage all sub services using one instance.','rambo'),
			
			'home_service_three_icon'=>'fa-fighter-jet',
			'home_service_three_title'=>__('Service Three','rambo'),
			'home_service_three_description'=>__('This is service Three, reliable to user and comfortable to operate. You can easily manage all sub services using one instance.','rambo'),
			
			'home_service_fourth_icon'=>'fa-flag-checkered',
			'home_service_fourth_title'=>__('Service Four','rambo'),
			'home_service_fourth_description'=>__('This is service Four, reliable to user and comfortable to operate. You can easily manage all sub services using one instance.','rambo'),
			
			// footer customization
			'footer_widgets_enabled'=>true,
			'rambo_copy_rights_text'=>__('&copy;2014&nbsp;ALL Rights Reserved','rambo'),			
			'rambo_designed_by_head'=>__('Designed By','rambo'),
			'rambo_designed_by_text'=>__('Webriti','rambo'),
			'rambo_designed_by_link'=>'http://www.webriti.com',			
				
			
			//Social media links
			'footer_social_media_enabled'=>true,
			'social_media_twitter_link' =>"#",
			'social_media_facebook_link' =>"#",
			'social_media_linkedin_link' =>"#",
			'social_media_google_plus' =>"#",
			
			//Projects Section Settings
			'home_projects_enabled' => true,
			'project_heading_one' => __('Featured Portfolio Projects','rambo'),
			'project_tagline' => __('Maecenas sit amet tincidunt elit. Pellentesque habitant morbi tristique senectus et netus et Nulla facilisi.','rambo'),
			'project_one_thumb' => $project_img1,
			'project_one_title' => __('Product one','rambo'),
			'project_one_text' => __('A set of pieces of creative work collected to be shown to potential customers or employers; "the artist had put together a portfolio of his work";','rambo'),
		
		    'project_two_thumb' => $project_img2,
			'project_two_title' => __('Product two','rambo'),
			'project_two_text' => __('A set of pieces of creative work collected to be shown to potential customers or employers; "the artist had put together a portfolio of his work";','rambo'),
			
			'project_three_thumb' => $project_img3,
			'project_three_title' => __('Product Three','rambo'),
			'project_three_text' => __('A set of pieces of creative work collected to be shown to potential customers or employers; "the artist had put together a portfolio of his work";','rambo'),
			
			'project_four_thumb' => $project_img4,
			'project_four_title' => __('Product Four','rambo'),
			'project_four_text' => __('A set of pieces of creative work collected to be shown to potential customers or employers; "the artist had put together a portfolio of his work";','rambo'),
		);
}
?>