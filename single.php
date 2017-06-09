<?php get_header();?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <div class ="container">
      <h1 style="text-align: left; margin: 50px 0 20px 0;"><?php the_title(); ?></h1>
  
      <?php //if(has_post_thumbnail()) : ?>
      <?php //the_post_thumbnail(); ?>
      <?php //endif; ?>
      
      <div style="margin-bottom: 50px;"><?php the_content(); ?></div>
      
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php__('Keinen Beitrag gefunden'); ?></p>
  <?php endif; ?>
</div>


<?php get_footer();?>