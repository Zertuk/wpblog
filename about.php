<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

  <div class="container">
    
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="twelve columns wrap">
      <div class = "fill">
        <h4><?php the_title(); ?></h4>
      </div>
      <?php the_content(); ?>

    </div>

    <?php endwhile; ?>

  </div>

<?php get_footer(); ?>