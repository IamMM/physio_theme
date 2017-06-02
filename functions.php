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

//Exerpz Lenght Control
function set_excerpt_length(){
  return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');


// Bootstrap pagination function

//function wp_bs_pagination($pages = '', $range = 4){  
//     $showitems = ($range * 2) + 1;  
//     global $paged;
//     if(empty($paged)) $paged = 1;
//     if($pages == ''){
//         global $wp_query; 
//		 $pages = $wp_query->max_num_pages;
//         if(!$pages){
//             $pages = 1;
//         }
//     }   
// 
//     if(1 != $pages){
//        echo '<div class="text-center">'; 
//        echo '<nav><ul class="pagination"><li class="disabled hidden-xs"><span><span aria-hidden="true">Page '.$paged.' of '.$pages.'</span></span></li>';
//
//         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";
//
//         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Previous</span></a></li>";
//       
//         for ($i=1; $i <= $pages; $i++){
//             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
//                 echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>
//
//    </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
//             }
//
//         }
//
//         if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Next </span>&rsaquo;</a></li>";  
//
//         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";
//
//         echo "</ul></nav>";
//         echo "</div>";
//     }
//}

function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}
?>