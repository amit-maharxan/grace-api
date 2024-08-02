<?php

function service_post_detail_handler($data) {
    $slug = $data['slug'];

    // Get the post object by slug
    $post = get_page_by_path($slug, OBJECT, 'services');

    if (!$post) {
        return new WP_Error('no_post', 'Post not found', array('status' => 404));
    }

    $post_id 			= $post->ID;
	$image				= wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
    $banner_title       = get_the_title($post_id);

    $description_title      =   get_field('ser_title', $post_id);
    $description_content    =   get_field('ser_description', $post_id);
    $description_content    =   explode("\n", $description_content);
    $description_content    =   array_map('strip_tags', $description_content);

    $expectation_title      =   get_field('expectations_title', $post_id);
    $expectation_content    =   get_field('expectations_description', $post_id);

	$services_title     = 'Our Services';
	$service_lists 		= array();

    $wp_query = new WP_Query(array(
        'post_type'       => 'services',
        'posts_per_page'  => 3,
        'post__not_in'	  => array($post_id)
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

    $testimonial_title      = get_field('testimonial_title', 2);
    $testimonial_btn_url    = get_field('testimonial_button_url', 2);
    $testimonial_btn_text   = get_field('testimonial_button_text', 2);

    $testimonial_lists  = array();
    $wp_query = new WP_Query(array(
        'post_type'       => 'testimonials',
        'posts_per_page'  => 3,
        'meta_query'      => array(
            array(
                'key'     => 'select_service_testimonial',
                'value'   => $post_id,
                'compare' => '=',
            ),
        ),
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

    // Prepare the response
    $response = array(
        'ID'                    => $post_id,
        'banner_image'          => $image[0],
        'banner_title'          => $banner_title,
        'description_title'     => $description_title,
        'description_content'   => $description_content,
        'expectation_title'     => $expectation_title,
        'expectation_content'   => $expectation_content,
        'testimonial_title'     => $testimonial_title,
        'testimonial_btn_url'   => $testimonial_btn_url,
        'testimonial_btn_text'  => $testimonial_btn_text,
        'testimonial_lists'     => $testimonial_lists,
        'services_title'        => $services_title,
        'services_lists'        => $service_lists,
    );

    return rest_ensure_response($response);
}