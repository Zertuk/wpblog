<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?> 

  <div class="row container">

    <?php while ( have_posts() ) : the_post(); ?>

    <div class="twelve columns wrap">
      <div class = "fill">
        <h4><?php the_title(); ?></h4>
      </div>

      <p class = "date">Posted on <?php the_date(); ?> by <?php the_author(); ?></p>

      <?php the_content(); ?>

    </div>


    <?php endwhile; ?>

    <?php next_posts_link('<button class = "previousButton">Older</button>'); ?>
    <?php previous_posts_link('<button class = "nextButton">Newer</button>'); ?>




  </div>

  <?php get_footer(); ?>


        