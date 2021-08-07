<?php
// Default theme settings

function theme_disable_cheks() {
	$disabled_checks = array( 'TagCheck', 'Plugin_Territory', 'CustomCheck', 'EditorStyleCheck' );
	global $themechecks;
	foreach ( $themechecks as $key => $check ) {
		if ( is_object( $check ) && in_array( get_class( $check ), $disabled_checks ) ) {
			unset( $themechecks[$key] );
		}
	}
}
add_action( 'themecheck_checks_loaded', 'theme_disable_cheks' );

add_theme_support( 'automatic-feed-links' );


if ( !isset( $content_width ) ) {
	$content_width = 960;
}

remove_action( 'wp_head', 'wp_generator' );

function theme_localization () {
	load_theme_textdomain( 'slate', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'theme_localization' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

/*
//Add [email]...[/email] shortcode
function shortcode_email( $atts, $content ) {
	return antispambot( $content );
}
add_shortcode( 'email', 'shortcode_email' );

//Register tag [template-url]
function filter_template_url( $text ) {
	return str_replace( '[template-url]', get_template_directory_uri(), $text );
}
add_filter( 'the_content', 'filter_template_url' );
add_filter( 'widget_text', 'filter_template_url' );

//Register tag [site-url]
function filter_site_url( $text ) {
	return str_replace( '[site-url]', home_url(), $text );
}
add_filter( 'the_content', 'filter_site_url' );
add_filter( 'widget_text', 'filter_site_url' );

if( class_exists( 'acf' ) && !is_admin() ) {
	add_filter( 'acf/load_value', 'filter_template_url' );
	add_filter( 'acf/load_value', 'filter_site_url' );
}

//Replace standard wp menu classes
function change_menu_classes( $css_classes ) {
	return str_replace( array( 'current-menu-item', 'current-menu-parent', 'current-menu-ancestor' ), 'active', $css_classes );
}
add_filter( 'nav_menu_css_class', 'change_menu_classes' );

//Allow tags in category description
$filters = array( 'pre_term_description', 'pre_link_description', 'pre_link_notes', 'pre_user_description' );
foreach ( $filters as $filter ) {
	remove_filter( $filter, 'wp_filter_kses' );
}

function clean_phone( $phone ){
    return preg_replace( '/[^0-9]/', '', $phone );
}

//Make wp admin menu html valid
function wp_admin_bar_valid_search_menu( $wp_admin_bar ) {
	if ( is_admin() )
		return;

	$form  = '<form action="' . esc_url( home_url( '/' ) ) . '" method="get" id="adminbarsearch"><div>';
	$form .= '<input class="adminbar-input" name="s" id="adminbar-search" tabindex="10" type="text" value="" maxlength="150" />';
	$form .= '<input type="submit" class="adminbar-button" value="' . __( 'Search', 'slate' ) . '"/>';
	$form .= '</div></form>';

	$wp_admin_bar->add_menu( array(
		'parent' => 'top-secondary',
		'id'     => 'search',
		'title'  => $form,
		'meta'   => array(
			'class'    => 'admin-bar-search',
			'tabindex' => -1,
		)
	) );
}

function fix_admin_menu_search() {
	remove_action( 'admin_bar_menu', 'wp_admin_bar_search_menu', 4 );
	add_action( 'admin_bar_menu', 'wp_admin_bar_valid_search_menu', 4 );
}
add_action( 'add_admin_bar_menus', 'fix_admin_menu_search' );

*/

//Disable comments on pages by default
function theme_page_comment_status( $post_ID, $post, $update ) {
	if ( !$update ) {
		remove_action( 'save_post_page', 'theme_page_comment_status', 10 );
		wp_update_post( array(
			'ID' => $post->ID,
			'comment_status' => 'closed',
		) );
		add_action( 'save_post_page', 'theme_page_comment_status', 10, 3 );
	}
}
add_action( 'save_post_page', 'theme_page_comment_status', 10, 3 );

//custom excerpt
function theme_the_excerpt() {
	global $post;

	if ( trim( $post->post_excerpt ) ) {
		the_excerpt();
	} elseif ( strpos( $post->post_content, '<!--more-->' ) !== false ) {
		the_content();
	} else {
		the_excerpt();
	}
}


// date archive link
add_action( 'admin_init',
	function (){
		add_settings_section(
			'eg_setting_section',
			__( 'Date archive link', 'slate' ),
			function () {},
			'reading'
		);

		add_settings_field(
			'eg_setting_name',
			__( 'Type', 'slate' ),
			'eg_setting_callback_function',
			'reading',
			'eg_setting_section'
		);

		register_setting( 'reading', 'eg_date_archive_link_type' );
	}
);

function eg_setting_callback_function(){
	if ( get_option( 'eg_date_archive_link_type' ) ) $type = get_option( 'eg_date_archive_link_type' );
	else $type = "month";
	echo '
	 <select name="eg_date_archive_link_type">
		 <option ' . selected( $type, 'day', false ) . ' value="day">' . __( 'Day', 'slate' ).'</option>
		 <option ' . selected( $type, 'month', false ) . ' value="month">' . __( 'Month', 'slate' ).'</option>
		 <option ' . selected( $type, 'year', false ) . ' value="year">' . __( 'Year', 'slate' ).'</option>
	 </select>
	';
}

function get_date_archive_link(){
	if ( get_option( 'eg_date_archive_link_type' ) == "year" ){
		$res = get_year_link( get_the_date( "Y" ) );
	}
	elseif ( get_option( 'eg_date_archive_link_type' ) == "day" ){
		$res = get_day_link( get_the_date( "Y" ), get_the_date( "m" ), get_the_date( "d" ) );
	}
	else {
		$res = get_month_link( get_the_date( "Y" ), get_the_date( "m" ) );
	}
	return $res;
}

function defer_js( $tag, $handle, $src ){
	if( ! is_admin() )
		$tag = str_replace( ' src=', ' defer src=', $tag );

	return $tag;
}
# commented block below, because there may be errors with js, if need you can uncomment this block
// add_filter( 'script_loader_tag', 'defer_js', 99, 3 );

remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
add_filter('json_enabled', '__return_false');
add_filter('json_jsonp_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');

add_filter( 'upload_mimes', function( $t, $user ) {
                $t['svg'] = 'image/svg+xml';
                return $t;
        }, 10, 2 );

add_filter( 'getimagesize_mimes_to_exts', function( $types ) {
                $types['application/octet-stream'] = 'svg';
                return $types;
        } );
