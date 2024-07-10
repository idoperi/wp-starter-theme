<?php

function get_img_uri($img_file_name)
{
    return get_template_directory_uri() . "/assets/img/$img_file_name";
}

function get_icon_uri($icon_file_name)
{
    return get_template_directory_uri() . "/assets/icon/$icon_file_name";
}

function get_lottie_uri($lottie_file_name)
{
    return get_template_directory_uri() . "/assets/lottie/$lottie_file_name";
}