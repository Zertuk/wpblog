<?php get_header(); ?> 

  <div class="row container">

    <?php while ( have_posts() ) : the_post(); ?>

    <div class="twelve columns wrap">
      <div class = "fill">
        <h4><?php the_title(); ?></h4>
      </div><!--fill-->

      <p class = "date">Posted on <?php the_date(); ?> by <?php the_author(); ?></p>

      <?php the_content(); ?>

    </div><!--columns-->

    <?php endwhile; ?>
    </div><!--container-->
    <div class = "row container archiveWrap">
      <div class = "fill">
        <h4>Post Archive</h4>
      </div><!--fill-->
      <div class = "archivePosts"><?php wp_get_archives('type=postbypost'); ?></div>
    </div>

  <?php get_footer(); ?>