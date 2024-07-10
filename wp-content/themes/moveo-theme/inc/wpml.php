<?php
function custom_language_switcher_names($languages)
{
    $current_lang = apply_filters('wpml_current_language', NULL);

    foreach ($languages as $key => $language) {
        if ($current_lang == 'he') {
            if ($language['language_code'] == 'en') {
                $languages[$key]['native_name'] = 'English';
            } elseif ($language['language_code'] == 'he') {
                $languages[$key]['native_name'] = 'עב';
            }
        } else {
            if ($language['language_code'] == 'en') {
                $languages[$key]['native_name'] = 'En';
            } elseif ($language['language_code'] == 'he') {
                $languages[$key]['native_name'] = 'עברית';
            }
        }
    }
    return $languages;
}

add_filter('icl_ls_languages', 'custom_language_switcher_names');