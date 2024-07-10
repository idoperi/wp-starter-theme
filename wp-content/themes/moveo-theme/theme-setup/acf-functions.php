<?php
function acf_save_json($path) {
    return get_stylesheet_directory() . '/acf-json';
}

function acf_load_json($paths) {
    // Append path
    $paths[] = get_stylesheet_directory() . '/acf-json';

    // Return
    return $paths;
}

add_filter('acfe/settings/json_save/all', 'acf_save_json');
add_filter('acfe/settings/json_load', 'acf_load_json');