<?php

/*
=================================================
Move to Top Action Hooks 
=================================================
*/

add_action('fr_move_to_top', 'fr_move_to_top_fnc');
/*
=================================================
Header Box Wrapper Chooser Hooks
=================================================
*/

add_action('flat_responsive_wrapper_choose', 'flat_responsive_wrapper_choose_fnc');

/*
=================================================
Social Icons on Top Display Hooks
=================================================
*/

add_action('flat_responsive_social_icons_top', 'flat_responsive_social_icons_top_fnc');

/*
=================================================
Header Main Display Hooks
=================================================
*/
add_action('flat_responsive_header', 'flat_responsive_header_fnc');

 ?>