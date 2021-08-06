<?php
function slate_scripts_styles() {
	$in_footer = true;
	wp_enqueue_script( 'slate-script', get_template_directory_uri() . '/js/jquery.main.js', array( 'jquery' ), '', $in_footer );
	wp_enqueue_style( 'slate-style', get_stylesheet_uri(), array() );
}
add_action( 'wp_enqueue_scripts', 'slate_scripts_styles' );
