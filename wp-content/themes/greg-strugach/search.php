<?php get_header(); ?>

<header class="mb-4">
  <h1 class="h3">
    <?php printf( esc_html__( 'Search results for: %s', 'greg-strugach' ), esc_html( get_search_query() ) ); ?>
  </h1>
</header>

<?php if ( have_posts() ) : ?>
  <div class="row g-4">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('template-parts/content'); ?>
    <?php endwhile; ?>
  </div>
  <?php the_posts_pagination(); ?>
<?php else : ?>
  <p><?php _e('No results found.', 'greg-strugach'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>