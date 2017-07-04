<?php require_once('wp-bootstrap-navwalker.php');
    
function theme_setup(){
    add_theme_support('post-thumbnails');
  
    //Nav Menus
    register_nav_menus(array(
    'primary' => __('Primary Menu')
    ));
    register_nav_menus(array(
    'footer' => __('Footer Menu')
    ));
}

add_action('after_setup_theme', 'theme_setup');

  // Filter the except length
  function wpdocs_custom_excerpt_length() {
    return 50;
  }
  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length');
  
  // Filter the excerpt "read more" string.
  function wpdocs_excerpt_more( $more ) {
      return ' [...]';
  }
  add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

  // Filter the excerpt "read more" link.
  function new_excerpt_more($output) {
      return $output . '<p><a href="'. get_permalink() . '">' . 'Weiter zur Anzeige...' . '</a></p>';
  }
  add_filter('get_the_excerpt', 'new_excerpt_more');
  
?>