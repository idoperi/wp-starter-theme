<?php
get_header(); ?>

<?php
$title = get_field('title', get_the_ID());
?>

<main id="main-content" class="main-layout single-movie">
    <h1><?php echo $title?></h1>
</main>
<?php get_footer(); ?>