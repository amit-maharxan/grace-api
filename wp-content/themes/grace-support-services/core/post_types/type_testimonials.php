<?php

class grace_testimonials_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'ewhere_testimonials_init' ) );
	}

	/**
	 * Register a custom post type called "testimonials".
	 * @return void
	 */
	function ewhere_testimonials_init() {
	    $labels = array(
	        'name'                  => _x( 'Testimonials', 'Post type general name', 'grace_testimonials' ),
	        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'grace_testimonials' ),
	        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'grace_testimonials' ),
	        'name_admin_bar'        => _x( 'Testimonials', 'Add New on Toolbar', 'grace_testimonials' ),
	        'add_new'               => __( 'Add New', 'grace_testimonials' ),
	        'add_new_item'          => __( 'Add New Testimonial', 'grace_testimonials' ),
	        'new_item'              => __( 'New Testimonial', 'grace_testimonials' ),
	        'edit_item'             => __( 'Edit Testimonial', 'grace_testimonials' ),
	        'view_item'             => __( 'View Testimonials', 'grace_testimonials' ),
	        'all_items'             => __( 'All Testimonials', 'grace_testimonials' ),
	        'search_items'          => __( 'Search Testimonial', 'grace_testimonials' ),
	        'parent_item_colon'     => __( 'Parent Testimonials:', 'grace_testimonials' ),
	        'not_found'             => __( 'No Testimonial found.', 'grace_testimonials' ),
	        'not_found_in_trash'    => __( 'No Testimonial found in Trash.', 'grace_testimonials' ),
	        'featured_image'        => _x( 'Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'grace_testimonials' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'grace_testimonials' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'grace_testimonials' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'grace_testimonials' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'testimonials' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
        	'show_in_rest'          => true, 
	        'supports'           	=> array( 'title', 'editor', 'thumbnail', 'page-attributes' ), // Add 'page-attributes' here
	        'menu_icon'				=> 'dashicons-marker',
	    );

	    register_post_type( 'testimonials', $args );
	}

}
new grace_testimonials_post_type();