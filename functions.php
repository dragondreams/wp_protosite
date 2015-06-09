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
	register_nav_menu('main-menu', _('Main Menu'));
}

//
add_action('init', 'register_nav_menus');

//Register_my_Sidebar//

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the secondary sidebar. */
	register_sidebar(
		array(
			'id' => 'secondary',
			'name' => __( 'Secondary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	 
	
	
	/* Repeat register_sidebar() code for additional sidebars. */
}
?>