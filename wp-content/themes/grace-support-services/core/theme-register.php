<?php
/**
 * GRACE post-type register functions and definitions
 *
 * @package GRACE
 */

function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


/* custom options for additional data */
if( function_exists('acf_add_options_page') ) 
{ 
    acf_add_options_page('GRACE Options');
}

/* custom navigation menus for header and footer */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu-1' => __( 'Header Menu 1' ),
      'header-menu-2' => __( 'Header Menu 2' ),
      'footer-menu'   => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );