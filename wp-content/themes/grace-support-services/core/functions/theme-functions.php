<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package GRACE
 */


if( !function_exists( 'grace_add_meta' ) ) :
   /**
	* Add meta tags.
	*/
	function grace_add_meta() { ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php }
endif;

if ( !function_exists( 'grace_add_links' ) ) :
	/*
	* Add Google fonts, Pingback url, etc.
	*/
	function grace_add_links() { ?> 
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php }
endif;

function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'GRACE SUPPORT';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page( array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	) );

	acf_add_options_sub_page( array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	) );

	acf_add_options_sub_page( array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	) );

	acf_add_options_sub_page( array(
		'page_title' 	=> 'Social Settings',
		'menu_title'	=> 'Social',
		'parent_slug'	=> 'theme-general-settings',
	) );

}