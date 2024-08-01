<?php

// Allow svg file tyoe upload from Media Upload
function grace_upload_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'grace_upload_mime_types');