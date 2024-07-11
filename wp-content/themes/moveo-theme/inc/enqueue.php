<?php

function mix($path)
{
    $manifestPath = get_template_directory() . '/mix-manifest.json';
    if (!file_exists($manifestPath)) {
        error_log('Mix manifest does not exist: ' . $manifestPath);
        return get_template_directory_uri() . $path;
    }
    $manifest = json_decode(file_get_contents($manifestPath), true);
    if (!isset($manifest[$path])) {
        error_log('Unable to locate Mix file: ' . $path);
        return get_template_directory_uri() . $path;
    }
    return get_template_directory_uri() . $manifest[$path];
}

function enqueue_dist_style($file_path, $deps = array())
{
    wp_enqueue_style($file_path, mix($file_path), $deps, null);
}

function enqueue_dist_scripts($file_path, $deps = array())
{
    wp_enqueue_script($file_path, mix($file_path), $deps, null, true);
}

function moveo_scripts_styles()
{
    // Scripts
    wp_enqueue_script('jquery');
    enqueue_dist_scripts('/dist/js-dist/main.js', array('jquery'));

    // Styles
    enqueue_dist_style('/dist/css-dist/style.css');
}

add_action('wp_enqueue_scripts', 'moveo_scripts_styles');
