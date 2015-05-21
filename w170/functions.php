<?php

/*Theme name: w170
Author: Jan Talaro
Author:
Description: Demo theme for W170 WP
Version: 1.0
*/
add_theme_support( 'menus' ); 

// Register My Menus
function register_custom_menu() {
	register_nav_menu('main-menu', _('Main Menu'))
}

//
add_action('init', 'register_nav_menu');

//Register_my_Sidebar//
?>