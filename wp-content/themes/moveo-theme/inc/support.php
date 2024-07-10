<?php

// Add SVG support
function add_upload_mimes_svg($mimes)
{
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
}
add_filter('upload_mimes', 'add_upload_mimes_svg');

// Add JSON support
function add_upload_mimes_json($types)
{
    $types['json'] = 'text/plain';

    return $types;
}

add_filter('upload_mimes', 'add_upload_mimes_json');

// Remove margin-top: 32px from html when user logged in
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

// Add support for thumbnails
add_theme_support('post-thumbnails');