<?php
function register_custom_templates($templates)
{
    $directory = get_stylesheet_directory() . '/page-templates/';

    $subdirectories = glob($directory . '*', GLOB_ONLYDIR);

    foreach ($subdirectories as $subdir) {
        $files = glob($subdir . '/*.php');
        foreach ($files as $file) {
            $template_name = basename($file, '.php');
            $template_name = ucwords(str_replace('-', ' ', $template_name));

            $templates[$file] = $template_name;
        }
    }

    return $templates;
}
add_filter('theme_page_templates', 'register_custom_templates');

function include_custom_templates($template)
{
    $post = get_post();
    $page_template_slug = get_page_template_slug($post);

    $page_templates_directory = get_stylesheet_directory() . '/page-templates/';

    if (strpos($page_template_slug, $page_templates_directory) === 0) {
        if (file_exists($page_template_slug)) {
            return $page_template_slug;
        }
    }

    return $template;
}
add_filter('template_include', 'include_custom_templates');