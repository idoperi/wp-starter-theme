<?php
function custom_single_template($single)
{
    global $post;

    $post_type = $post->post_type;

    if (file_exists(get_template_directory() . '/single-pages/single-' . $post_type . '/single-' . $post_type . '.php')) {
        return get_template_directory() . '/single-pages/single-' . $post_type . '/single-' . $post_type . '.php';
    }

    return $single;
}
add_filter('single_template', 'custom_single_template');