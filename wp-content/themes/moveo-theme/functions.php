<?php

// ----- THEME SETUP ----- //
require_once get_template_directory() . '/theme-setup/theme-setup.php';
// ----------------------- //

// Include asset helper functions
require_once get_template_directory() . '/inc/asset-helpers.php';

// Include helper functions
require_once get_template_directory() . '/inc/helpers.php';

// Include Custom Hooks
require_once get_template_directory() . '/inc/custom-hooks.php';

// Include enqueue functions
require_once get_template_directory() . '/inc/enqueue.php';

// Include support functions
require_once get_template_directory() . '/inc/support.php';

// Include menus
require_once get_template_directory() . '/inc/menus.php';

// Include WPML
require_once get_template_directory() . '/inc/wpml.php';