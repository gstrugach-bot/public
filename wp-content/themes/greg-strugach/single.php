<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('mb-4'); ?>>
    <h1 class="h2"><?php the_title(); ?></h1>
    <?php if ( has_post_thumbnail() ) : ?>
      <figure class="mb-3"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></figure>
    <?php endif; ?>
    <div class="entry-content"><?php the_content(); ?></div>
  </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>