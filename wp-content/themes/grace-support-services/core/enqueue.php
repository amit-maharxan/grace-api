<?php
/**
 * GRACE enqueue functions and definitions
 *
 * @package GRACE
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Enqueue scripts and styles.
 */
function grace_scripts() {
	
}
add_action( 'wp_enqueue_scripts', 'grace_scripts' );