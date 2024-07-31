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
return 'GRACE';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

function register_custom_slug_route() {
    register_rest_route('wp/v2', '/services/(?P<slug>[a-zA-Z0-9_-]+)', array(
        'methods' 				=> 'GET',
        'callback' 				=> 'get_services_by_slug',
        'permission_callback' => '__return_true', // Adjust permissions as needed
    ));
}
add_action('rest_api_init', 'register_custom_slug_route');

function get_services_by_slug($data) {
    $slug = $data['slug'];
    
    $args = array(
        'post_type' 		=> 'services',
        'name' 			=> $slug,
        'post_status' 	=> 'publish',
        'numberposts' 	=> 1,
    );
    
    $posts = get_posts($args);
    
    if (empty($posts)) {
        return new WP_Error('no_service', 'No service found with this slug', array('status' => 404));
    }
    
    return $posts[0];
}

function add_featured_image_to_rest_api($response, $post, $context) {
    // Check if the post type supports thumbnails
    if (isset($post->ID) && has_post_thumbnail($post->ID)) {
        // Get the featured image ID
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        // Get the image URL
        $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'full');
        // Add the featured image URL to the response
        $response->data['featured_image'] = $thumbnail_url;
    }
    return $response;
}
add_filter('rest_prepare_services', 'add_featured_image_to_rest_api', 10, 3);

function acf_set_featured_image( $value, $post_id, $field  ){
    
    if($value != ''){
        //Add the value which is the image ID to the _thumbnail_id meta data for the current post
        add_post_meta($post_id, '_thumbnail_id', $value);
    }
 
    return $value;
}

// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=cursusfoto', 'acf_set_featured_image', 10, 3);