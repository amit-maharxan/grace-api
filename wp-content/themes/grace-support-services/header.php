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

<?php if(is_front_page()){
    $class_name = 'home_page';
} else if(is_page(8)){
    $class_name = 'about_page';
} else if(is_page(10)){
    $class_name = 'community_page';
} else if(is_page(13)){
    $class_name = 'team_page';
} else {
    $class_name = '';
} ?>

<body class="<?php echo $class_name;?>">
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