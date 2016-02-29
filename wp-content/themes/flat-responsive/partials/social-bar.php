<?php

/**
 * Social bar group
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<?php if( get_theme_mod( 'hide_social' ) == '') { ?>
		<?php $options = get_theme_mods();						
			echo '<div id="social-icons"><ul>';										
			if (!empty($options['twitter_uid'])) echo '<li><a title=" '. esc_attr('Twitter', 'flat-responsive').' " href="' . esc_url($options['twitter_uid']) . '" target="_blank"><div id="twitter" class="icomoon icon-twitter"></div></a></li>';
			if (!empty($options['facebook_uid'])) echo '<li><a title="'. esc_attr('Facebook', 'flat-responsive').'" href="' . esc_url($options['facebook_uid']) . '" target="_blank"><div id="facebook" class="icomoon icon-facebook3"></div></a></li>';
			if (!empty($options['google_uid'])) echo '<li><a title="'. esc_attr('Google+', 'flat-responsive').'" href="' . esc_url($options['google_uid']) . '" target="_blank"><div id="google" class="icomoon icon-google-plus2"></div></a></li>';			
			if (!empty($options['linkedin_uid'])) echo '<li><a title="'. esc_attr('Linkedin', 'flat-responsive').'" href="' . esc_url($options['linkedin_uid']) . '" target="_blank"><div id="linkedin" class="icomoon icon-linkedin"></div></a></li>';
			if (!empty($options['pinterest_uid'])) echo '<li><a title="'. esc_attr('Pinterest', 'flat-responsive').'" href="' . esc_url($options['pinterest_uid']) . '" target="_blank"><div id="pinterest" class="icomoon icon-pinterest"></div></a></li>';
			if (!empty($options['flickr_uid'])) echo '<li><a title="'. esc_attr('Flickr', 'flat-responsive').'" href="' . esc_url($options['flickr_uid']) . '" target="_blank"><div id="flickr" class="icomoon icon-flickr"></div></a></li>';
			if (!empty($options['youtube_uid'])) echo '<li><a title="'. esc_attr('Youtube', 'flat-responsive').'" href="' . esc_url($options['youtube_uid']) . '" target="_blank"><div id="youtube" class="icomoon icon-youtube"></div></a></li>';
			if (!empty($options['vimeo_uid'])) echo '<li><a title="'. esc_attr('Vimeo', 'flat-responsive').'" href="' . esc_url($options['vimeo_uid']) . '" target="_blank"><div id="vimeo" class="icomoon icon-vimeo2"></div></a></li>';		
			if (!empty($options['instagram_uid'])) echo '<li><a title="'. esc_attr('Instagram', 'flat-responsive').'" href="' . esc_url($options['instagram_uid']) . '" target="_blank"><div id="instagram" class="icomoon icon-instagram"></div></a></li>';		
			if (!empty($options['reddit_uid'])) echo '<li><a title="'. esc_attr('Reddit', 'flat-responsive').'" href="' . esc_url($options['reddit_uid']) . '" target="_blank"><div id="reddit" class="icomoon icon-reddit"></div></a></li>';
			if (!empty($options['picassa_uid'])) echo '<li><a title="'. esc_attr('Picassa', 'flat-responsive').'" href="' . esc_url($options['picassa_uid']) . '" target="_blank"><div id="picassa" class="icomoon icon-picassa2"></div></a></li>';
			if (!empty($options['stumbleupon_uid'])) echo '<li><a title="'. esc_attr('stumbleupon', 'flat-responsive').'" href="' . esc_url($options['stumbleupon_uid']) . '" target="_blank"><div id="stumbleupon" class="icomoon icon-stumbleupon2"></div></a></li>';	
			if (!empty($options['wp_uid'])) echo '<li><a title="'. esc_attr('WordPress', 'flat-responsive').'" href="' . esc_url($options['wp_uid']) . '" target="_blank"><div id="wordpress" class="icomoon icon-wordpress2"></div></a></li>';	
			if (!empty($options['github_uid'])) echo '<li><a title="'. esc_attr('Github', 'flat-responsive').'" href="' . esc_url($options['github_uid']) . '" target="_blank"><div id="github" class="icomoon icon-github3"></div></a></li>';
			if (!empty($options['dribbble_uid'])) echo '<li><a title="'. esc_attr('Dribble', 'flat-responsive').'" href="' . esc_url($options['dribbble_uid']) . '" target="_blank"><div id="dribbble" class="icomoon icon-dribbble"></div></a></li>';		
			if (!empty($options['rss_uid'])) echo '<li><a title="'. esc_attr('Rss', 'flat-responsive').'" href="' . esc_url($options['rss_uid']) . '" target="_blank"><div id="rss" class="icomoon icon-feed2"></div></a></li>';	
	        if (!empty($options['cart_uid'])) echo '<li><a title="'. esc_attr('Cart', 'flat-responsive').'" href="' . esc_url($options['cart_uid']) . '" target="_blank"><div id="cart" class="icomoon icon-cart"></div></a></li>';	
			if (!empty($options['email_uid'])) echo '<li><a title="'. esc_attr('Email', 'flat-responsive').'" href="' . esc_url($options['email_uid']) . '"><div id="email" class="icomoon icon-envelope"></div></a></li>';		 
		echo '</ul></div>';		
}
?>