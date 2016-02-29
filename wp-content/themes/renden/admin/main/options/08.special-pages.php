<?php
/**
 * Special pages functions.
 *
 * @package ThinkUpThemes
 */


/* ----------------------------------------------------------------------------------
	404 - CUSTOM CONTENT
---------------------------------------------------------------------------------- */

function thinkup_input_404content() {

		echo	'<div class="entry-content title-404">',
			'<h2><i class="fa fa-ban"></i>404</h2>',
			'<p>' . __( 'Sorry, we could not find the page you are looking for.', 'renden' ) . '<br/>' . __( 'Please try using the search function.', 'renden' ) . '</p>',
			get_search_form(),
			'</div>';
}


?>