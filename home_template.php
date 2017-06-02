<?php
/*
Template Name: Startseite
*/
?>

<?php get_header();?>

<?php $post_id = 51; //Post ID der Startseite?>

<div id="welcome-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#welcome-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#welcome-carousel" data-slide-to="1"></li>
    <li data-target="#welcome-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php bloginfo('template_url'); ?>/img/welcome.jpg" alt="Eingangsbereich">
    </div>
    <div class="item">
      <img src="<?php bloginfo('template_url'); ?>/img/placeholder_1200x400.png" alt="...">
    </div>
    <div class="item">
      <img src="<?php bloginfo('template_url'); ?>/img/placeholder_1200x400.png" alt="...">
    </div>
  </div>
  
  <!-- Controls -->
  <a class="left carousel-control" href="#welcome-carousel" role="button" data-slide="prev">
    <img class="glyphicon-chevron-left" src="<?php bloginfo('template_url')?>/icons/arrow_left.svg">
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#welcome-carousel" role="button" data-slide="next">
    <img class="glyphicon-chevron-right" src="<?php bloginfo('template_url')?>/icons/arrow_right.svg">
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container box">
  <h2><?php the_field('heading',$post_id); ?></h2>
  <hr class="orange-divider"/>
  <div class="centred">
    <p><?php the_field('text1', $pos_id); ?></p>
  </div>
</div>

<!-- START THE FEATURETTES -->
<div class="container-fluid grey box">
  <div class="container">
    <div class="row featurette">
      <div class="col-md-6 col-md-push-6">
        <h2 class="featurette-heading"><img src="<?php bloginfo('template_url')?>/icons/house.svg"></h2>
        <p><?php the_field('featurette_text1', $post_id); ?></p>
      </div>
      <div class="col-md-6 col-md-pull-6">
        <img class="featurette-image img-responsive center-block" src="<?php the_field('featurette_img1', $post_id); ?>" alt="" />
      </div>
    </div>
  </div>
</div>
<div class="container-fluid box">
  <div class="container">
    <div class="row featurette">
      <div class="col-md-6">
        <h2 class="featurette-heading"> <img src="<?php bloginfo('template_url')?>/icons/team.svg"></h2>
        <p><?php the_field('featurette_text2', $post_id); ?></p>
      </div>
      <div class="col-md-6">
        <img class="featurette-image img-responsive center-block" src="<?php the_field('featurette_img2', $post_id); ?>" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- /END THE FEATURETTES -->

<!-- AKTUELLES Post Lop-->
<?php // Display blog posts on any page @ https://m0n.co/l
$temp = $wp_query; $wp_query= null;
$wp_query = new WP_Query(); $wp_query->query('posts_per_page=8' . '&paged='.$paged);?>

<div class="container-fluid grey box">
  <div class="container">
    <h1>AKTUELLES</h1>
    <hr class="orange-divider"/>
    <div class="centred" style="margin-bottom: 20px;">
      <p>Was gibt es neues bei <i>W. Richter Physiotherapeuten?</i></p>
      <p>Hier finden Sie akuelle Informationen rund um die Praxis</p>
    </div>
    
    <div class="container">
    <?php echo do_shortcode("[adl-post-slider id='135']"); ?>
    </div>
  </div>
</div>

<?php get_footer();?>