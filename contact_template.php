<?php
/*
Template Name: Map
*/
?>

<?php get_header();?>
<div class="container">
    <div class="row box">
      <div class="col-md-4">
      <?php the_field('1'); ?>
      </div>
      <div class="col-md-8">
      <?php the_field('2'); ?>
      </div>
    </div>
    <div class="row box">
      <div class="col-md-6">
      <?php the_field('3'); ?>
      </div>
      <div class="col-md-6">
      <?php the_field('4'); ?>
      </div>
    </div>
  
</div>

<?php get_footer();?>