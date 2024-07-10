<?php

function register_custom_blocks() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'homepage_hero_block',
            'title'             => __('Homepage Hero Block'),
            'render_template'   => 'acf-blocks/homepage-hero/homepage-hero.php',
            'enqueue_assets'  => function () {
                enqueue_dist_style('/dist/acf-blocks/homepage-hero/homepage-hero.css');
                enqueue_dist_style('/dist/acf-blocks/homepage-hero/homepage-hero.js', array('jquery'));
            },
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('custom', 'quote'),
        ));
    }
}

add_action('acf/init', 'register_custom_blocks');

