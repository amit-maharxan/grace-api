<?php

function register_custom_page_endpoint() {
    register_rest_route('my-api/v2', '/homepage/', array(
        'methods'               => 'GET',
        'callback'              => 'custom_page_endpoint_handler',
        'permission_callback'   => '__return_true',
    ));

    register_rest_route('my-api/v2', '/services/', array(
        'methods'               => 'GET',
        'callback'              => 'custom_page_endpoint_handler_services',
        'permission_callback'   => '__return_true',
    ));

    register_rest_route('my-api/v2', '/about/', array(
        'methods'               => 'GET',
        'callback'              => 'custom_page_endpoint_handler_about',
        'permission_callback'   => '__return_true',
    ));

    register_rest_route('my-api/v2', '/contact/', array(
        'methods'               => 'GET',
        'callback'              => 'custom_page_endpoint_handler_contact',
        'permission_callback'   => '__return_true',
    ));

    register_rest_route('my-api/v2', '/services/(?P<slug>[a-zA-Z0-9-]+)', array(
        'methods'               => 'GET',
        'callback'              => 'service_post_detail_handler',
        'permission_callback'   => '__return_true',
    ));

    register_rest_route('my-api/v2', '/social_links', array(
        'methods'               => 'GET',
        'callback'              => 'social_links_endpoint_handler',
        'permission_callback'   => '__return_true',
    ));
    
    register_rest_route('my-api/v2', '/service-enquiry', array(
        'methods'               => 'POST',
        'callback'              => 'custom_page_endpoint_handler_service_enquiry',
        'permission_callback'   => '__return_true',
    ));
    
}
add_action('rest_api_init', 'register_custom_page_endpoint');