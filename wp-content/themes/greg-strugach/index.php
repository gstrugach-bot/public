<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('mb-4'); ?>>
    <h2 class="h3"><?php the_permalink(); ?><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
  </article>
<?php endwhile; else : ?>
  <p><?php _e('No content found.', 'greg-strugach'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

