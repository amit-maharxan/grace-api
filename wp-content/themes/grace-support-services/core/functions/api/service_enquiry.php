<?php

function custom_page_endpoint_handler_service_enquiry($request) {

    $form_id = $request['id'];
    $params = $request->get_params();

    // Validate and sanitize the form inputs
    $name = sanitize_text_field($params['full_name']);
    $email = sanitize_email($params['email_address']);
    $contact = sanitize_text_field($params['contact_no']);
    $service_name = sanitize_text_field($params['service_name']);
    $message = sanitize_textarea_field($params['message']);

    // Send the email using wp_mail
    $to = 'amit.maharxan@gmail.com'; // You can change this to any email address
    $subject = 'New contact form inquiry received';
    $body = "Name: $name\nEmail: $email\nContact: $contact\nService Name: $service_name\nMessage:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    if($name && $email && $contact && $service_name){
        $mail_sent = wp_mail($to, $subject, $body, $headers);
    }
    
    if ($mail_sent) {
        return new WP_REST_Response('Success', 200);
    } else {
        return new WP_REST_Response('Failed', 500);
    }
    
}