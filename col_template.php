<?php
/*
Template Name: Zeilen
*/
?>

<?php get_header();?>

<!-- START THE FEATURETTES -->
<div class="container-fluid box">
  <div class="container">
    <div class="row featurette">
      <div class="col-md-6 col-md-push-6">
        <h4 style="text-align: left;"><?php the_field('black1'); ?><span style="color:#ffcc67"><?php the_field('orange1'); ?></span></h4>
        <hr class="left-divider"/>
        <p><?php the_field('text1'); ?></p>
      </div>
      <div class="col-md-6 col-md-pull-6">
        <img class="featurette-image img-responsive center-block" src="<?php the_field('img1'); ?>" alt="" />
      </div>
    </div>
  </div>
</div>
<div class="container-fluid grey box">
  <div class="container">
    <div class="row featurette">
      <div class="col-md-6">
        <h4 style="text-align: left;"><?php the_field('black2'); ?><span style="color:#ffcc67"><?php the_field('orange2'); ?></span></h4>
        <hr class="left-divider"/>
        <p><?php the_field('text2'); ?></p>
      </div>
      <div class="col-md-6">
        <img class="featurette-image img-responsive center-block" src="<?php the_field('img2'); ?>" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- /END THE FEATURETTES -->

<?php get_footer();?>