<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <  ]); ?>
<?php else : ?>
  <p><?php _e('No content found.', 'greg-strugach'); ?></p>
<?php endif; ?>

