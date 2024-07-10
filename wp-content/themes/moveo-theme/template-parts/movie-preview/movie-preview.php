<?php
if (!isset($args['id']) || empty($args['id'])) {
    return;
}

$post_id = $args['id'];
$post = get_post($post_id);
setup_postdata($post);

$title = get_field('title', get_the_ID());
$permalink = get_permalink($post_id);
?>

<li class="movie-preview">
    <h2><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h2>
</li>
