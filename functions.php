<?php

// Default settings
include( get_template_directory() . '/inc/default.php' );

// Theme functions
include( get_template_directory() . '/inc/theme_functions.php' );

// Theme thumbnails
include( get_template_directory() . '/inc/thumbnails.php' );

// Theme menus
include( get_template_directory() . '/inc/menus.php' );

// Theme css & js
include( get_template_directory() . '/inc/scripts.php' );

// Disable stuff to optimize WP
include( get_template_directory() . '/inc/optimize.php' );

// Theme logo
include( get_template_directory() . '/inc/custom_logo.php' );

//ACF
// Theme logo
include( get_template_directory() . '/inc/acf.php' );

//Remove notification for ACF plugin
function remove_update_notifications( $value ) {

    if ( isset( $value ) && is_object( $value ) ) {
        unset( $value->response[ 'advanced-custom-fields-pro/acf.php' ] );
    }

    return $value;
}
add_filter( 'site_transient_update_plugins', 'remove_update_notifications' );
//end


function my_acf_options_page_settings( $settings )
{
	$settings['title'] = 'Global';
	$settings['pages'] = array('Header', 'Sidebar', 'Footer');

	return $settings;
}

add_filter('acf/options_page/settings', 'my_acf_options_page_settings');


class WPSE_78121_Sublevel_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='sub-menu-wrap uk-navbar-dropdown'><ul class='sub-menu uk-nav uk-navbar-dropdown-nav'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}


function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 100 );

function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '...',
            get_permalink( get_the_ID() ),
            __( '...', 'textdomain' )
        );
    }

    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );