<?php
/**
 * Header Template
 * 
 * @package GRACE
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php 
	/**
	 * grace_meta hook
	 *
	 * @hooked grace_add_meta
	 */
	do_action('grace_meta');

	/**
	 * grace_links hook
	 *
	 * @hooked grace_add_links
	 */
	do_action('grace_links');

    // Keep it for plugins.
	wp_head(); ?> 

</head>

<body>
<main>

<?php

    /**
     * grace_header_content hook
     *
     * @hooked grace_output_header_content()
     *
     */
    do_action( 'grace_header_content' );

?>