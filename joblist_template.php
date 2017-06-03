<?php
/*
Template Name: Job List
*/
?>

<?php get_header();?>
<?php query_posts('post_type=post') ?>

  <div class="container-fluid alternate" style="padding: 0;">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php if(in_category('jobanzeige')) : ?>
            <div >
              <div class="container box">
            <h1><?php the_title(); ?></h1>
            
            <?php the_content(); ?>
          </div><!-- /.box -->
    </div>
          <?php endif; ?>
          
        <?php endwhile; ?> 
      <?php else : ?>
        <p><?php __('Keine Beiträge gefunden'); ?></p>
      <?php endif; ?>
  </div><!-- /.container -->
      
  <?php get_footer();?>