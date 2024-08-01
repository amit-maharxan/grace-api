<?php

function custom_page_endpoint_handler_contact($data) {

    $page_id = get_page_by_path('contact');

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

    $response = array(
        'ID'                    => $page->ID,
        'banner_image'          => $banner_image,
        'banner_title'          => $banner_title,
        'banner_description'    => $banner_description,
        'contact_title'         => $contact_title,
        'phone'                 => $phone,
        'email'                 => $email,
        'address'               => $address
    );

    return rest_ensure_response($response);
}