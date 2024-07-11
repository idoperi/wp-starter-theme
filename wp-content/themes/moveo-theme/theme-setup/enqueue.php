<?php

function theme_setup_scripts_styles()
{
    // Custom Page Templates
    if (is_page()) {
        $post_id = get_queried_object_id();
        $template_slug = get_page_template_slug($post_id);

        if (!empty($template_slug)) {
            $template_dir = pathinfo($template_slug, PATHINFO_DIRNAME);
            $file_base = pathinfo($template_slug, PATHINFO_FILENAME);

            $js_file = str_replace('/page-templates/', '/dist/page-templates/', $template_dir) . '/' . $file_base . '.js';
            $css_file = str_replace('/page-templates/', '/dist/page-templates/', $template_dir) . '/' . $file_base . '.css';

            $js_uri = get_template_directory_uri() . str_replace(get_template_directory(), '', $js_file);
            $css_uri = get_template_directory_uri() . str_replace(get_template_directory(), '', $css_file);

            if (file_exists($js_file)) {
                wp_enqueue_script($file_base . '-js', $js_uri, array('jquery'), null, true);
            }

            if (file_exists($css_file)) {
                wp_enqueue_style($file_base . '-css', $css_uri, array(), null);
            }
        }
    }

    // Custom Single Page
    if (is_singular()) {
        global $post;
        $post_type = $post->post_type;

        $style_path = get_template_directory_uri() . '/dist/single-pages/single-' . $post_type . '/single-' . $post_type . '.css';
        if (file_exists(get_template_directory() . '/dist/single-pages/single-' . $post_type . '/single-' . $post_type . '.css')) {
            wp_enqueue_style('single-' . $post_type . '-style', $style_path, [], '1.0.0', 'all');
        }

        $script_path = get_template_directory_uri() . '/dist/single-pages/single-' . $post_type . '/single-' . $post_type . '.js';
        if (file_exists(get_template_directory() . '/dist/single-pages/single-' . $post_type . '/single-' . $post_type . '.js')) {
            wp_enqueue_script('single-' . $post_type . '-script', $script_path, array('jquery'), '1.0.0', true);
        }
    }
}

add_action('wp_enqueue_scripts', 'theme_setup_scripts_styles');
