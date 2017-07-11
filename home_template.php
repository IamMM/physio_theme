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
    <li data-target="#welcome-carousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php the_field('carousel1'); ?>">
    </div>
    <div class="item">
      <img src="<?php the_field('carousel2'); ?>">
    </div>
    <div class="item">
      <img src="<?php the_field('carousel3'); ?>">
    </div>
    <div class="item">
      <img src="<?php the_field('carousel4'); ?>">
    </div>
  </div>
  
  <!-- Controls -->
  <a class="left carousel-control" href="#welcome-carousel" role="button" data-slide="prev">
    <img class="chevron-left" src="<?php bloginfo('template_url')?>/icons/arrow_left.svg">
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#welcome-carousel" role="button" data-slide="next">
    <img class="chevron-right" src="<?php bloginfo('template_url')?>/icons/arrow_right.svg">
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container box">
  <h2 class="uppercase"><?php the_field('heading',$post_id); ?></h3>
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
    <h2 class="uppercase">Aktuelles</h1>
    <hr class="orange-divider"/>
    <div class="centred" style="margin-bottom: 20px;">
      <p>Was gibt es Neues bei <i>W. Richter Physiotherapeuten?</i></p>
      <p>Hier finden Sie aktuelle Informationen rund um unsere Praxen:</p>
    </div>
    
    <div class="container">
      <!-- Slider main container -->
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

          <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="news-container">
              <div class="row" style="height: 100%">
                <div class="img-col col-xs-12 col-sm-5 col-md-5">
                    <div class="info-img" style="background-image: url(<?php the_field('img');  ?>"></div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0">
                  <h3 class ="swiper-title"><?php the_title(); ?></h3>
                  <p><?php the_field('preview'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1 btn-container">
                  <div class="btn-container">
                    <a href ="<?php the_field('link'); ?>" type="button" class="info-box-btn" ><img class="news-btn" src="<?php bloginfo('template_url')?>/icons/arrow_right.svg"></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- .swiper-slide -->

          <?php endwhile; ?>
          <?php else : ?>
          <p><?php__('Keine aktuellen Beiträge'); ?></p>
          <?php endif; ?>
            ...
        </div><!-- .swiper-wrapper -->
      </div><!-- .swiper-container -->
      
      <div class="swiper-nav">
        <!-- swiper-pagination -->
        <div class="swiper-pagination"></div>
        <!-- swiper navigation -->
        <div class="button-prev"><img src="<?php bloginfo('template_url')?>/icons/arrow_left.svg"></div>
        <div class="button-next"><img src="<?php bloginfo('template_url')?>/icons/arrow_right.svg"></div>
      </div>

    </div>
  </div>
</div>

<?php get_footer();?>