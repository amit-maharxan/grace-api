<?php
/**
 * GRACE Template Hooks
 *
 * Action/filter hooks used for GRACE functions/templates
 *
 * @package 	GRACE
 *
 * @since     	GRACE 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*==================================================================================================
  Functions
  ==================================================================================================*/

if (!function_exists('grace_output_header')){
	function grace_output_header(){
		get_header();
	}
}

if (!function_exists('grace_output_header_content')){
	function grace_output_header_content(){
		get_template_part('template-parts/header/content', 'header');
	}
}

if (!function_exists('grace_output_footer')){
	function grace_output_footer(){
		get_footer();
	}
}

if (!function_exists('grace_output_footer_content')){
	function grace_output_footer_content(){
		get_template_part('template-parts/footer/content', 'footer');
	}
}

// GRACE Homepage Content Hooks
if (!function_exists('grace_homepage_contents')){
	function grace_homepage_contents(){
		get_template_part('template-parts/pages/homepage/page', 'contents');
	}
}

/*==================================================================================================
  Hooks
  ==================================================================================================*/


/**
 * Metas and Links
 * @see  grace_add_meta()
 * @see  grace_add_links()
 */
add_action( 'grace_meta', 'grace_add_meta' );
add_action( 'grace_links', 'grace_add_links' );

/**
* Header / Footer Content
* @see grace_output_header_content()
* @see grace_output_footer_content()
*/
 add_action('grace_header_content', 'grace_output_header_content', 10);
 add_action('grace_footer_content', 'grace_output_footer_content', 10);

/**
 * Header / Footer  
 */
add_action( 'grace_header', 'grace_output_header');
add_action( 'grace_footer', 'grace_output_footer');

/**
 * Homepage Hook
 */
add_action( 'grace_homepage_content', 'grace_homepage_contents', 10 );