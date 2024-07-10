<?php
get_header(); ?>
<main id="main-content" class="main-layout cinema-page-template">
<?php
        $args = array(
            'post_type' => 'movie',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );

        $movies_query = new WP_Query($args);
        if ($movies_query->have_posts()):
            ?>
            <ul class="movie-list">
                <?php
                while ($movies_query->have_posts()):
                    $movies_query->the_post();
                    moveo_get_template_part('template-parts/movie-preview/movie-preview', null, ['id' => get_the_ID()]);
                endwhile;
                ?>
            </ul>
            <?php
            wp_reset_postdata();
        endif;
        ?>
</main>
<?php get_footer(); ?>