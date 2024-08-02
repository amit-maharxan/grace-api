<?php
/**
 * GRACE functions and definitions
 *
 * @package GRACE
 * 
 * @since GRACE 1.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) { 
 	exit; // disable direct access 
 }

/*
 * Load theme constants
 */
require trailingslashit( get_template_directory() ) . 'core/theme-constants.php';

/**
 * Theme setup functions
 */
require_once ( DK_CORE.'/theme-setup.php' );

/**
 * Register widget area and nav.
 */
require_once ( DK_CORE.'/theme-register.php' );

/**
 * Enqueue scripts and styles.
 */
require_once ( DK_CORE.'/enqueue.php' );

/**
 * Theme functions
 */
require_once ( DK_FUNCTION.'/theme-functions.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
require_once ( DK_FUNCTION.'/extras.php' );
require_once ( DK_FUNCTION.'/ajax-functions.php' );

require_once ( DK_CORE.'/post_types/type_services.php' );
require_once ( DK_CORE.'/post_types/type_testimonials.php' );

/**
 * Theme Hooks
 */
require_once ( DK_CORE.'/theme-hooks.php' );

/**
 * Aqua Resizer
 */
require_once ( DK_CORE.'/lib/aq_resizer.php' );

/**
 * Customizer additions.
 */
require_once ( DK_CORE.'/lib/bs4navwalker.php');
require_once ( DK_CORE.'/lib/customizer.php');

/**
 * API functions
 */
require_once ( DK_FUNCTION.'/api/main.php' );
require_once ( DK_FUNCTION.'/api/homepage.php' );
require_once ( DK_FUNCTION.'/api/services.php' );
require_once ( DK_FUNCTION.'/api/about.php' );
require_once ( DK_FUNCTION.'/api/contact.php' );
require_once ( DK_FUNCTION.'/api/service-detail.php' );