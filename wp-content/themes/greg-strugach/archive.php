<?php get_header(); ?>

<header class="mb-4">
  <h1 class="h3"><?php the_archive_title(); ?></h1>
  <p class="text-muted"><?php the_archive_description(); ?></p>
</header>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('template-parts/content'); ?>
  <?php endwhile; ?>
  <?php the_posts_pagination(); ?>
<?php else : ?>
  <p><?php _e('No posts found.', 'greg-strugach'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
`` `search.php`
```php
<?php get_header(); ?>

<header class="mb-4">
  <h1 class="h3">
    <?php printf( esc_html__( 'Search results for: %s', 'greg-strugach' ), esc_html( get_search_query() ) ); ?>
  </h1>
</header>

<?php if ( have_posts() ) : ?>
  ?>