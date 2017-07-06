<?php get_header();?>

<div class="container">
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
      
  <div class="row" style="padding: 20px 0;"> <!-- img with sub nav -->
    <div class="col-md-8 blog-main">
      <?php if(has_post_thumbnail()) : ?>
        <div class="head-img"> <?php the_post_thumbnail(); ?></div>
      <?php endif; ?>
    </div>
          
    <div class="hidden-xs col-md-4 blog-sidebar">
      <div>
        <?php $parent_title = get_the_title($post->post_parent); ?>
        <h4 style="text-align: left; text-transform: uppercase;"><?php echo $parent_title; ?></h4>
        <hr class="left-divider"/>
        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav side-nav">
            <?php
              if($post->post_parent) { //Die Seite ist "Kind-Seite"
                wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->post_parent);
              }
              elseif(wp_list_pages("child_of=".$post->ID."&echo=0")) { //Die Seite hat "Kinder"
                wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->ID);
              }
            ?>
          </ul>
        </div>
      </div> 
    </div><!-- /.sub nav -->
  </div> <!-- row -->
  
  <div class="row">
    <div class="col-sm-8">
        <h2><?php the_title();?></h2>
        <hr class="orange-divider"/>
    </div>
  </div><!-- row for heading -->
  
  <div class="row blog-post">
    <div class="col-sm-8">
        <?php the_content();?>
        <?php endwhile; ?>
        <?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
            
    </div><!-- /.blog-post -->
   
    <div class="col-sm-3 offset-sm-1 blog-sidebar">
    <?php
    $current = array (get_the_ID());
    query_posts(array('orderby' => 'rand', 'showposts' => 1, 'post_type' => 'page', 'category_name'  => 'Leistung', 'post__not_in' => $current ));
    if (have_posts()) :
    while (have_posts()) : the_post(); ?>

   <h4 class="uppercase" style="text-align: left;"><?php the_title(); ?></h4>

   <hr class="left-divider"/>
    <div class="grey">
            <?php the_post_thumbnail(); ?>
            <p style="padding: 10px;"><?php the_excerpt(); ?></p>
    </div>
    <?php endwhile;

    endif; ?>
          
    </div><!-- /.blog-sidebar -->
  </div><!-- row -->
</div><!-- /.container -->

<?php get_footer();?>