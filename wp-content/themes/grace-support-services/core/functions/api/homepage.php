<?php

function register_custom_page_endpoint() {
    register_rest_route('my-api/v2', '/homepage/', array(
        'methods'               => 'GET',
        'callback'              => 'custom_page_endpoint_handler',
        'permission_callback'   => '__return_true', // Adjust permissions as needed
    ));
}
add_action('rest_api_init', 'register_custom_page_endpoint');



function custom_page_endpoint_handler($data) {
    // Example: Fetch a page by ID or slug
    $page_id = get_page_by_path('homepage'); // Replace 'example-page' with your actual page slug

    if (!$page_id) {
        return new WP_Error('no_page', 'Page not found', array('status' => 404));
    }

    // Get page data
    $page = get_post($page_id);

    $banner_image       = get_field('banner_image', $page_id);
    $banner_title       = get_field('banner_title', $page_id);
    $banner_description = get_field('banner_description', $page_id);
    $about_image        = get_field('about_image', $page_id);
    $about_title        = get_field('about_title', $page_id);
    $about_description  = get_field('about_description', $page_id);
    $services_title     = get_field('services_title', $page_id);
    $services_lists     = get_field('services_lists', $page_id);
    $testimonial_title  = get_field('testimonial_title', $page_id);
    $contact_title      = get_field('contact_title', $page_id);
    $why_grace_image    = get_field('why_grace_image', $page_id);
    $why_grace_title    = get_field('why_grace_title', $page_id);
    $why_grace_desc     = get_field('why_grace_desc', $page_id);
    $phone              = get_field('phone', $page_id);
    $email              = get_field('email', $page_id);
    $address            = get_field('address', $page_id);

    $homepage_service_lists = array();

    foreach($services_lists as $services_list) {
        // Create an associative array for each service
        $content_post = get_post($services_list);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        $content = strip_tags($content);
        $content = str_replace(array("\n", "\r"), '', $content);

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $services_list ), 'full' );
        $arrays = array(
            "title" => get_the_title($services_list),
            "slug"  =>  $content_post->post_name,
            "description"   => $content,
            "image" =>  $image[0]
        );

        // Add the associative array to the main array
        $homepage_service_lists[] = $arrays;
    }

    $response = array(
        'ID'                    => $page->ID,
        'banner_image'          => $banner_image,
        'banner_title'          => $banner_title,
        'banner_description'    => $banner_description,
        'about_image'           => $about_image,
        'about_title'           => $about_title,
        'about_description'     => $about_description,
        'services_title'        => $services_title,
        'services_lists'        => $homepage_service_lists,
        'testimonial_title'     => $testimonial_title,
        'contact_title'         => $contact_title,
        'why_grace_image'       => $why_grace_image,
        'why_grace_title'       => $why_grace_title,
        'why_grace_desc'        => $why_grace_desc,
        'phone'                 => $phone,
        'email'                 => $email,
        'address'               => $address
    );

    return rest_ensure_response($response);
}