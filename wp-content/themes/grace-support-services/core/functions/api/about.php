<?php

function custom_page_endpoint_handler_about($data) {

    $page_id = get_page_by_path('about');

    if (!$page_id) {
        return new WP_Error('no_page', 'Page not found', array('status' => 404));
    }

    $page = get_post($page_id);

    $banner_image       = get_field('banner_image', $page_id);
    $banner_title       = get_field('banner_title', $page_id);
    $banner_description = get_field('banner_description', $page_id);

    $about_image        = get_field('about_image', 2);
    $about_title        = get_field('about_title', 2);
    $about_description  = get_field('about_description', 2);
    $about_description  = explode("\r\n\r\n", $about_description);

    $services_title     = get_field('services_title', $page_id);
    $services_lists     = get_field('services_lists', $page_id);

    $testimonial_title      = get_field('testimonial_title', 2);
    $testimonial_btn_url    = get_field('testimonial_button_url', 2);
    $testimonial_btn_text   = get_field('testimonial_button_text', 2);

    $testimonial_lists  = array();
    $wp_query = new WP_Query(array(
        'post_type'       => 'testimonials',
        'posts_per_page'  => 3
    ));
    while ($wp_query->have_posts()) : $wp_query->the_post();

        global $post;
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
        $arrays = array(
            "name"      => get_the_title(),
            "date"      => get_field('review_date'),
            "stars"     => get_field('stars_count'),
            "image"     => $image[0],
            "reviews"   => get_the_content(),
        );
        $testimonial_lists[] = $arrays;

    endwhile; wp_reset_query();

    $contact_title      = get_field('contact_title', 2);
    $why_grace_image    = get_field('why_grace_image', 2);
    $why_grace_title    = get_field('why_grace_title', 2);
    $why_grace_desc     = get_field('why_grace_desc', 2);

    $phone              = get_field('phone', 2);
    $email              = get_field('email', 2);
    $address            = get_field('address', 2);

    $service_lists = array();

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
        $service_lists[] = $arrays;
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
        'services_lists'        => $service_lists,
        'testimonial_title'     => $testimonial_title,
        'testimonial_btn_url'   => $testimonial_btn_url,
        'testimonial_btn_text'  => $testimonial_btn_text,
        'testimonial_lists'     => $testimonial_lists,
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