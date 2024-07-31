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
if (!function_exists('grace_homepage_banner')){
	function grace_homepage_banner(){
		get_template_part('template-parts/pages/homepage/page', 'banner');
	}
}

if (!function_exists('grace_homepage_about')){
	function grace_homepage_about(){
		get_template_part('template-parts/pages/homepage/page', 'about');
	}
}

if (!function_exists('grace_homepage_treatment')){
	function grace_homepage_treatment(){
		get_template_part('template-parts/pages/homepage/page', 'treatment');
	}
}

if (!function_exists('grace_homepage_appointment')){
	function grace_homepage_appointment(){
		get_template_part('template-parts/pages/homepage/page', 'appointment');
	}
}

if (!function_exists('grace_homepage_testimonial')){
	function grace_homepage_testimonial(){
		get_template_part('template-parts/pages/homepage/page', 'testimonial');
	}
}

if (!function_exists('grace_about_contents')){
	function grace_about_contents(){
		get_template_part('template-parts/pages/about/page', 'contents');
	}
}

if (!function_exists('grace_policy_contents')){
	function grace_policy_contents(){
		get_template_part('template-parts/pages/policy/page', 'contents');
	}
}

if (!function_exists('grace_contact_contents')){
	function grace_contact_contents(){
		get_template_part('template-parts/pages/contact/page', 'contents');
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
add_action( 'grace_homepage_content', 'grace_homepage_banner', 10 );
add_action( 'grace_homepage_content', 'grace_homepage_about', 20 );
add_action( 'grace_homepage_content', 'grace_homepage_treatment', 30 );
add_action( 'grace_homepage_content', 'grace_homepage_appointment', 40 );
add_action( 'grace_homepage_content', 'grace_homepage_testimonial', 50 );

/**
 * About Hook
 */
add_action( 'grace_about_content', 'grace_about_contents', 10 );

/**
 * Policy Hook
 */
add_action( 'grace_policy_content', 'grace_policy_contents', 10 );

/**
 * Contact Hook
 */
add_action( 'grace_contact_content', 'grace_contact_contents', 10 );