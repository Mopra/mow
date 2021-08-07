<?php
//theme options tab in appearance
if( function_exists( 'acf_add_options_sub_page' ) && current_user_can( 'theme_options_view' ) ) {
	// add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Options',
		'menu_title' 	=> 'Theme Options',
		'redirect' 		=> false
	));
}