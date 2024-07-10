<?php 
function moveo_get_template_part($slug, $name = null, $args = [])
{
    enqueue_template_part_scripts_styles($slug, $name);
    get_template_part($slug, $name, $args);
}

function enqueue_template_part_scripts_styles($slug, $name = null)
{
    $base_uri = get_stylesheet_directory_uri() . '/dist/';
    $base_path = get_stylesheet_directory() . '/dist/';

    $script_file_name = $slug . (isset($name) ? "-$name" : '') . '.js';
    $style_file_name = $slug . (isset($name) ? "-$name" : '') . '.css';

    $script_uri = $base_uri . $script_file_name;
    $style_uri = $base_uri . $style_file_name;
    $script_path = $base_path . $script_file_name;
    $style_path = $base_path . $style_file_name;

    if (file_exists($script_path)) {
        wp_enqueue_script($slug . (isset($name) ? "-$name" : '') . '-script', $script_uri, array('jquery'), null, true);
    }

    if (file_exists($style_path)) {
        wp_enqueue_style($slug . (isset($name) ? "-$name" : '') . '-style', $style_uri, array(), null);
    }
}