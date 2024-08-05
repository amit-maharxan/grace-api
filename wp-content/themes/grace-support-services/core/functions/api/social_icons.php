<?php

function social_links_endpoint_handler($data) {

    $x          =   get_field('x', 'option');
    $instagram  =   get_field('instagram', 'option');
    $tiktok     =   get_field('tiktok', 'option');
    $facebook   =   get_field('facebook', 'option');
    $threads    =   get_field('threads', 'option');
    $whatsapp   =   get_field('whatsapp', 'option');

    $response = array(
        'x'         => $x,
        'instagram' => $instagram,
        'tiktok'    => $tiktok,
        'facebook'  => $facebook,
        'threads'   => $threads,
        'whatsapp'  => $whatsapp
    );

    return rest_ensure_response($response);
}