<?php
/*
Template Name: Archive Page
*/
?>

<?php get_header(); ?>

  <div class = "container">
    <div class="twelve columns wrap">
      <div class = "fill">
        <h4>Post Archive</h4>
      </div>
      <div class = "archivePosts"><?php wp_get_archives('type=postbypost'); ?></div>
    </div>
  </div><!--container-->

<?php get_footer(); ?>