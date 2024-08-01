<?php

function custom_page_endpoint_handler_services($data) {

    $page_id = get_page_by_path('gservices');

    if (!$page_id) {
        return new WP_Error('no_page', 'Page not found', array('status' => 404));
    }

    $page = get_post($page_id);

    $banner_image       = get_field('banner_image', $page_id);
    $banner_title       = get_field('banner_title', $page_id);
    $banner_description = get_field('banner_description', $page_id);

    $contact_title      = get_field('contact_title', 2);
    $phone              = get_field('phone', 2);
    $email              = get_field('email', 2);
    $address            = get_field('address', 2);

    $service_lists = array();

    $wp_query = new WP_Query(array(
        'post_type'       => 'services',
        'posts_per_page'  => -1
    ));
    while ($wp_query->have_posts()) : $wp_query->the_post();

        global $post;
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
        $arrays = array(
            "title"         => get_the_title(),
            "slug"          => $post->post_name,
            "description"   => get_the_content(),
            "image"         => $image[0]
        );
        $service_lists[] = $arrays;

    endwhile; wp_reset_query();

    $response = array(
        'ID'                    => $page->ID,
        'banner_image'          => $banner_image,
        'banner_title'          => $banner_title,
        'banner_description'    => $banner_description,
        'services_title'        => 'Our Services',
        'services_lists'        => $service_lists,
        'contact_title'         => $contact_title,
        'phone'                 => $phone,
        'email'                 => $email,
        'address'               => $address
    );

    return rest_ensure_response($response);
}