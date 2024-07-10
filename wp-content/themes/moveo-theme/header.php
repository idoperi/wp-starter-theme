<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body>
    <header class="app-header">
        <?php
        if (has_nav_menu('main-menu')) {
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'main-menu-container',
                )
            );
        }
        ?>
    </header>