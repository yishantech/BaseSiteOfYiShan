<?php
/**
 * Social media functions.
 *
 * @package ThinkUpThemes
 */


/* ----------------------------------------------------------------------------------
	SEARCH - DISABLE SEARCH
---------------------------------------------------------------------------------- */
function thinkup_input_headersearch() {
global $thinkup_header_searchswitch;

	if ( $thinkup_header_searchswitch == '1' ) {
		echo '<div id="header-search">',
			 '<a><div class="fa fa-search"></div></a>',
		     get_search_form(),
		     '</div>';
	}
}

/* ----------------------------------------------------------------------------------
	SOCIAL MEDIA - DISPLAY MESSAGE
---------------------------------------------------------------------------------- */

/* Message Settings */
function thinkup_input_socialmessage(){
global $thinkup_header_socialmessage;
global $thinkup_header_facebookswitch;
global $thinkup_header_twitterswitch;
global $thinkup_header_googleswitch;
global $thinkup_header_linkedinswitch;
global $thinkup_header_flickrswitch;
global $thinkup_header_pinterestswitch;
global $thinkup_header_lastfmswitch;
global $thinkup_header_rssswitch;
global $thinkup_header_diggswitch;

	if ( empty( $thinkup_header_facebookswitch ) and empty( $thinkup_header_twitterswitch ) and empty( $thinkup_header_googleswitch ) and empty( $thinkup_header_linkedinswitch ) and empty( $thinkup_header_flickrswitch ) and empty( $thinkup_header_pinterestswitch ) and empty( $thinkup_header_lastfmswitch ) and empty( $thinkup_header_rssswitch ) and empty( $thinkup_header_diggswitch ) ) {	
		return '';
	} else if ( ! empty( $thinkup_header_socialmessage ) ) {	
		return esc_html( $thinkup_header_socialmessage );
	} else if ( empty( $thinkup_header_socialmessage ) ) {
		return '';
	}
}


/* ----------------------------------------------------------------------------------
	SOCIAL MEDIA - CUSTOM ICONS
---------------------------------------------------------------------------------- */

/* Facebook - Custom Icon */
function thinkup_input_facebookicon(){
global $thinkup_header_facebookiconswitch;
global $thinkup_header_facebookcustomicon;

	$output = NULL;

	if ( $thinkup_header_facebookiconswitch == '1' and ! empty( $thinkup_header_facebookcustomicon ) ) {
		$output .= '#pre-header-social li.facebook a,';
		$output .= '#pre-header-social li.facebook a:hover {';
		$output .= 'background: url("' . $thinkup_header_facebookcustomicon . '") no-repeat center;';
		$output .= 'background-size: 25px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#pre-header-social li.facebook i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";
	}
	return $output;
}

/* Twitter - Custom Icon */
function thinkup_input_twittericon(){
global $thinkup_header_twittericonswitch;
global $thinkup_header_twittercustomicon;

	$output = NULL;

	if ( $thinkup_header_twittericonswitch == '1' and ! empty( $thinkup_header_twittercustomicon ) ) {
		$output .= '#pre-header-social li.twitter a,';
		$output .= '#pre-header-social li.twitter a:hover {';
		$output .= 'background: url("' . $thinkup_header_twittercustomicon . '") no-repeat center;';
		$output .= 'background-size: 25px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#pre-header-social li.twitter i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";
	}
	return $output;
}

/* Google+ - Custom Icon */
function thinkup_input_googleicon(){
global $thinkup_header_googleiconswitch;
global $thinkup_header_googlecustomicon;

	$output = NULL;

	if ( $thinkup_header_googleiconswitch == '1' and ! empty( $thinkup_header_googlecustomicon ) ) {
		$output .= '#pre-header-social li.google-plus a,';
		$output .= '#pre-header-social li.google-plus a:hover {';
		$output .= 'background: url("' . $thinkup_header_googlecustomicon . '") no-repeat center;';
		$output .= 'background-size: 25px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#pre-header-social li.google-plus i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";
	}
	return $output;
}

/* LinkedIn - Custom Icon */
function thinkup_input_linkedinicon(){
global $thinkup_header_linkediniconswitch;
global $thinkup_header_linkedincustomicon;

	$output = NULL;

	if ( $thinkup_header_linkediniconswitch == '1' and ! empty( $thinkup_header_linkedincustomicon ) ) {
		$output .= '#pre-header-social li.linkedin a,';
		$output .= '#pre-header-social li.linkedin a:hover {';
		$output .= 'background: url("' . $thinkup_header_linkedincustomicon . '") no-repeat center;';
		$output .= 'background-size: 25px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#pre-header-social li.linkedin i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";
	}
	return $output;
}

/* Flickr - Custom Icon */
function thinkup_input_flickricon(){
global $thinkup_header_flickriconswitch;
global $thinkup_header_flickrcustomicon;

	$output = NULL;

	if ( $thinkup_header_flickriconswitch == '1' and ! empty( $thinkup_header_flickrcustomicon ) ) {
		$output .= '#pre-header-social li.flickr a,';
		$output .= '#pre-header-social li.flickr a:hover {';
		$output .= 'background: url("' . $thinkup_header_flickrcustomicon . '") no-repeat center;';
		$output .= 'background-size: 25px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#pre-header-social li.flickr i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";
	}
	return $output;
}

/* Pinterest - Custom Icon */
function thinkup_input_pinteresticon(){
global $thinkup_header_pinteresticonswitch;
global $thinkup_header_pinterestcustomicon;

	$output = NULL;

	if ( $thinkup_header_pinteresticonswitch == '1' and ! empty( $thinkup_header_pinterestcustomicon ) ) {
		$output .= '#pre-header-social li.pinterest a,';
		$output .= '#pre-header-social li.pinterest a:hover {';
		$output .= 'background: url("' . $thinkup_header_pinterestcustomicon . '") no-repeat center;';
		$output .= 'background-size: 25px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#pre-header-social li.pinterest i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";
	}
	return $output;}

/* YouTube - Custom Icon */
function thinkup_input_youtubeicon(){
global $thinkup_header_youtubeiconswitch;
global $thinkup_header_youtubecustomicon;

	$output = NULL;

	if ( $thinkup_header_youtubeiconswitch == '1' and ! empty( $thinkup_header_youtubecustomicon ) ) {
		$output .= '#pre-header-social li.youtube a,';
		$output .= '#pre-header-social li.youtube a:hover {';
		$output .= 'background: url("' . $thinkup_header_youtubecustomicon . '") no-repeat center;';
		$output .= 'background-size: 25px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#pre-header-social li.youtube i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";
	}
	return $output;
}

/* RSS - Custom Icon */
function thinkup_input_rssicon(){
global $thinkup_header_rssiconswitch;
global $thinkup_header_rsscustomicon;

	$output = NULL;

	if ( $thinkup_header_rssiconswitch == '1' and ! empty( $thinkup_header_rsscustomicon ) ) {
		$output .= '#pre-header-social li.rss a,';
		$output .= '#pre-header-social li.rss a:hover {';
		$output .= 'background: url("' . $thinkup_header_rsscustomicon . '") no-repeat center;';
		$output .= 'background-size: 25px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#pre-header-social li.rss i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";
	}
	return $output;
}

/* Input Custom Social Media Icons */
function thinkup_input_socialicon(){

	$output = NULL;

	$output .= thinkup_input_facebookicon();
	$output .= thinkup_input_twittericon();
	$output .= thinkup_input_googleicon();
	$output .= thinkup_input_linkedinicon();
	$output .= thinkup_input_flickricon();
	$output .= thinkup_input_pinteresticon();
	$output .= thinkup_input_youtubeicon();
	$output .= thinkup_input_rssicon();

	if ( ! empty( $output ) ) {
		echo    '<style type="text/css">' . "\n" . $output . '</style>';
	}
}
add_action( 'wp_head', 'thinkup_input_socialicon', 13 );


/* ----------------------------------------------------------------------------------
	SOCIAL MEDIA - OUTPUT SOCIAL MEDIA SELECTIONS (HEADER) (ADD IN LATER)
---------------------------------------------------------------------------------- */

function thinkup_input_socialmediaheader() {
global $thinkup_header_socialswitch;
global $thinkup_header_socialmessage;
global $thinkup_header_facebookswitch;
global $thinkup_header_facebooklink;
global $thinkup_header_twitterswitch;
global $thinkup_header_twitterlink;
global $thinkup_header_googleswitch;
global $thinkup_header_googlelink;
global $thinkup_header_linkedinswitch;
global $thinkup_header_linkedinlink;
global $thinkup_header_flickrswitch;
global $thinkup_header_flickrlink;
global $thinkup_header_pinterestswitch;
global $thinkup_header_pinterestlink;
global $thinkup_header_youtubeswitch;
global $thinkup_header_youtubelink;
global $thinkup_header_rssswitch;
global $thinkup_header_rsslink;

// Reset count values used in foreach loop
$i = 0;
$j = 0;

	if ( $thinkup_header_socialswitch == '1' ) {
	
		// Assign social media link to an array
		$social_links = array( 
			array( 'social' => 'Facebook',    'toggle' => $thinkup_header_facebookswitch, 'link' => $thinkup_header_facebooklink ),
			array( 'social' => 'Twitter',     'toggle' => $thinkup_header_twitterswitch,  'link' => $thinkup_header_twitterlink ),
			array( 'social' => 'Google-plus', 'toggle' => $thinkup_header_googleswitch,   'link' => $thinkup_header_googlelink ),
			array( 'social' => 'LinkedIn',    'toggle' => $thinkup_header_linkedinswitch, 'link' => $thinkup_header_linkedinlink ),
			array( 'social' => 'Flickr',      'toggle' => $thinkup_header_flickrswitch,   'link' => $thinkup_header_flickrlink ),
			array( 'social' => 'Pinterest',   'toggle' => $thinkup_header_pinterestswitch,'link' => $thinkup_header_pinterestlink ),
			array( 'social' => 'YouTube',     'toggle' => $thinkup_header_youtubeswitch,  'link' => $thinkup_header_youtubelink ),
			array( 'social' => 'RSS',         'toggle' => $thinkup_header_rssswitch,      'link' => $thinkup_header_rsslink ),
		);

		// Output social media links if any link is set
		foreach( $social_links as $social ) {	
			if ( ! empty( $social['link'] ) and $j == 0 ) {
				echo '<div id="pre-header-social"><ul>'; $j = 1;

				if ( ! empty ( $thinkup_header_socialmessage ) ) {
					echo '<li class="social message">' . esc_html( thinkup_input_socialmessage() ) . '</li>';
				}
			}

			if ( ! empty( $social['link'] ) and $social['toggle'] == '1' ) {
			echo '<li class="social ' . strtolower( $social['social'] ) . '">',
				 '<a href="' . esc_url( $social['link'] ) . '" data-tip="bottom" data-original-title="' . str_replace( '-plus', '+', $social['social'] ) . '" target="_blank">',
				 '<i class="fa fa-' . strtolower( $social['social'] ) . '"></i>',
				 '</a>',
				 '</li>';
			}
		}

		// Close list output of social media links if any link is set
		if ( $j !== 0 ) echo '</ul></div>';
	}
}


/* ----------------------------------------------------------------------------------
	SOCIAL MEDIA - OUTPUT SOCIAL MEDIA SELECTIONS (FOOTER)
---------------------------------------------------------------------------------- */

function thinkup_input_socialmediafooter() {
global $thinkup_footer_socialswitch;
global $thinkup_header_socialmessage;
global $thinkup_header_facebookswitch;
global $thinkup_header_facebooklink;
global $thinkup_header_twitterswitch;
global $thinkup_header_twitterlink;
global $thinkup_header_googleswitch;
global $thinkup_header_googlelink;
global $thinkup_header_linkedinswitch;
global $thinkup_header_linkedinlink;
global $thinkup_header_flickrswitch;
global $thinkup_header_flickrlink;
global $thinkup_header_pinterestswitch;
global $thinkup_header_pinterestlink;
global $thinkup_header_youtubeswitch;
global $thinkup_header_youtubelink;
global $thinkup_header_rssswitch;
global $thinkup_header_rsslink;

// Reset count values used in foreach loop
$i = 0;
$j = 0;

	if ( $thinkup_footer_socialswitch == '1' ) {
	
		// Assign social media link to an array
		$social_links = array( 
			array( 'social' => 'Facebook',    'toggle' => $thinkup_header_facebookswitch, 'link' => $thinkup_header_facebooklink ),
			array( 'social' => 'Twitter',     'toggle' => $thinkup_header_twitterswitch,  'link' => $thinkup_header_twitterlink ),
			array( 'social' => 'Google-plus', 'toggle' => $thinkup_header_googleswitch,   'link' => $thinkup_header_googlelink ),
			array( 'social' => 'LinkedIn',    'toggle' => $thinkup_header_linkedinswitch, 'link' => $thinkup_header_linkedinlink ),
			array( 'social' => 'Flickr',      'toggle' => $thinkup_header_flickrswitch,   'link' => $thinkup_header_flickrlink ),
			array( 'social' => 'Pinterest',   'toggle' => $thinkup_header_pinterestswitch,'link' => $thinkup_header_pinterestlink ),
			array( 'social' => 'YouTube',     'toggle' => $thinkup_header_youtubeswitch,  'link' => $thinkup_header_youtubelink ),
			array( 'social' => 'RSS',         'toggle' => $thinkup_header_rssswitch,      'link' => $thinkup_header_rsslink ),
		);

		// Output social media links if any link is set
		foreach( $social_links as $social ) {	
			if ( ! empty( $social['link'] ) and $j == 0 ) {
				echo '<div id="post-footer-social"><ul>'; $j = 1;

				if ( ! empty ( $thinkup_header_socialmessage ) ) {
					echo '<li class="social message">' . esc_html( thinkup_input_socialmessage() ) . '</li>';
				}
			}

			if ( ! empty( $social['link'] ) and $social['toggle'] == '1' ) {
			echo '<li class="social ' . strtolower( $social['social'] ) . '">',
				 '<a href="' . esc_url( $social['link'] ) . '" data-tip="top" data-original-title="' . str_replace( '-plus', '+', $social['social'] ) . '" target="_blank">',
				 '<i class="fa fa-' . strtolower( $social['social'] ) . '"></i>',
				 '</a>',
				 '</li>';
			}
		}

		// Close list output of social media links if any link is set
		if ( $j !== 0 ) echo '</ul></div>';
	}
}

?>