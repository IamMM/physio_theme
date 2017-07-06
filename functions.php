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

  // Tags and Category for pages
  // add tag and category support to pages
function tags_categories_support_all() {
  register_taxonomy_for_object_type('post_tag', 'page');
  register_taxonomy_for_object_type('category', 'page');  
}

// ensure all tags and categories are included in queries
function tags_categories_support_query($wp_query) {
  if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
  if ($wp_query->get('category_name')) $wp_query->set('post_type', 'any');
}

// tag and category hooks
add_action('init', 'tags_categories_support_all');
add_action('pre_get_posts', 'tags_categories_support_query');
  
?>