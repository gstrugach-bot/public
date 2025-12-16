<?php
/* Template Name: One Page Portfolio */
get_header();
?>

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center justify-content-center bg-dark text-white" style="min-height:100vh;">
  <div class="container text-center">
    <h1><?php bloginfo('name'); ?></h1>
    <p class="lead">Web Developer • WordPress • Bootstrap</p>
    <a href="#about" class="btn btn-primary">Learn More</a>
  </div>
</section>

<!-- About Section -->
<section id="about" class="d-flex align-items-center bg-light" style="min-height:100vh;">
  <div class="container">
    <h2>About Me</h2>
    <p><?php the_content(); ?></p>
  </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="d-flex align-items-center bg-secondary text-white" style="min-height:100vh;">
  <div class="container">
    <h2>My Projects</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <div class="card-body">
            <h5 class="card-title">Project 1</h5>
            <p class="card-text">Short description here.</p>
            <a href="#" class="btn btn-outline-light">View</a>
          </div>
        </div>
      </div>
      <!-- Repeat for more projects -->
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="d-flex align-items-center bg-light" style="min-height:100vh;">
  <div class="container">
    <h2>Contact Me</h2>
    <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); ?>
  </div>
</section>

<?php get_footer(); ?>
