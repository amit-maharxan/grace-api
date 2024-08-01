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

    $testimonial_title  = get_field('testimonial_title', 2);

    // Prepare the response
    $response = array(
        'ID'                    => $post_id,
        'banner_image'          => $image[0],
        'banner_title'          => $banner_title,
        'testimonial_title'     => $testimonial_title,
        'services_title'        => $services_title,
        'services_lists'        => $service_lists,
    );

    return rest_ensure_response($response);
}