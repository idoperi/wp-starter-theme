<?php

// Creates menus
function register_theme_menus()
{
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
        )
    );
}

add_action('init', 'register_theme_menus');


function my_wp_nav_menu_social_icons($items, $args)
{
    foreach ($items as &$item) {
        // vars
        $icon = get_field('icon', $item);

        // append icon
        if ($icon) {
            $icon_img = '<img src="' . $icon . '" alt="" />';
            $item->title = $icon_img . ' ' . $item->title;
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_social_icons', 10, 2);