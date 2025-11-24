<article <?php post_class('col-12 col-md-4'); ?>>
  <div class="card h-100">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
    <?php endif; ?>
    <div class="card-body">
      <h2 class="h5 card-title">
       _post( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
    </div>
  </div>
</article>