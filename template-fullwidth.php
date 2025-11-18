<?php
/* Template Name: Full Width */
get_header();
?>

<main class="site-main" style="width:100%; padding:0; margin:0;">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
