<?php
/*
Template Name: Impressum
*/
?>

<?php get_header();?>

  <div class="container">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
              <div class="box grey" style="margin: 10px; padding: 10px;">
                <h4 style="text-align: left; text-transform: uppercase;"><?php the_title(); ?></h4>
                <hr class="left-divider"/> 
                
            <?php the_content(); ?>
          </div><!-- /.box -->          
        <?php endwhile; ?> 
      <?php else : ?>
        <p><?php __('Keine Beiträge gefunden'); ?></p>
      <?php endif; ?>
  </div><!-- /.container -->
      
  <?php get_footer();?>