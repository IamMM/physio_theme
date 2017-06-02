<?php get_header();?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <div class ="container">
      <h1><?php the_title(); ?></h1>
  <?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail(); ?>
  <?php endif; ?>
  <p><?php the_content(); ?></p>
<?php endwhile; ?>
<?php else : ?>
  <p><?php__('No Posts Found'); ?></p>
<?php endif; ?>
</div>


<?php get_footer();?>