<?php

class grace_services_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'ewhere_services_init' ) );
	}

	/**
	 * Register a custom post type called "services".
	 * @return void
	 */
	function ewhere_services_init() {
	    $labels = array(
	        'name'                  => _x( 'Services', 'Post type general name', 'grace_services' ),
	        'singular_name'         => _x( 'Service', 'Post type singular name', 'grace_services' ),
	        'menu_name'             => _x( 'Services', 'Admin Menu text', 'grace_services' ),
	        'name_admin_bar'        => _x( 'Services', 'Add New on Toolbar', 'grace_services' ),
	        'add_new'               => __( 'Add New', 'grace_services' ),
	        'add_new_item'          => __( 'Add New Service', 'grace_services' ),
	        'new_item'              => __( 'New Service', 'grace_services' ),
	        'edit_item'             => __( 'Edit Service', 'grace_services' ),
	        'view_item'             => __( 'View Services', 'grace_services' ),
	        'all_items'             => __( 'All Services', 'grace_services' ),
	        'search_items'          => __( 'Search Service', 'grace_services' ),
	        'parent_item_colon'     => __( 'Parent Services:', 'grace_services' ),
	        'not_found'             => __( 'No Service found.', 'grace_services' ),
	        'not_found_in_trash'    => __( 'No Service found in Trash.', 'grace_services' ),
	        'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grace_services' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grace_services' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grace_services' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grace_services' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'services' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
        	'show_in_rest'          => true, 
	        'supports'           	=> array( 'title', 'editor', 'thumbnail', 'page-attributes' ), // Add 'page-attributes' here
	        'menu_icon'				=> 'dashicons-marker',
	    );

	    register_post_type( 'services', $args );
	}

}
new grace_services_post_type();