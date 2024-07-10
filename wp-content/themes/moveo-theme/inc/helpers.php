<?php

function get_embed_video_url($video_url, $is_autoplay_video)
{
    $embed_url = '';

    if (preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&\/\?]+)/', $video_url, $matches)) {
        $video_id = $matches[1];
        $embed_url = "https://www.youtube.com/embed/$video_id";
        if ($is_autoplay_video) {
            $embed_url .= '?autoplay=1&mute=1';
        }
    } else if (preg_match('/(?:https?:\/\/)?(?:vimeo\.com\/)([^&\/\?]+)/', $video_url, $matches)) {
        $video_id = $matches[1];
        $embed_url = "https://player.vimeo.com/video/$video_id";
        if ($is_autoplay_video) {
            $embed_url .= '?autoplay=1&muted=1';
        }
    } else {
        $embed_url = $video_url;
        if ($is_autoplay_video) {
            $embed_url .= '?autoplay=1&muted=1';
        }
    }

    return $embed_url;
}

function truncate_title($title, $limit = 83, $appendix = '...')
{
    if (mb_strlen($title) > $limit) {
        return mb_substr($title, 0, $limit) . '<span>' . $appendix . '</span>';
    }
    return $title;
}