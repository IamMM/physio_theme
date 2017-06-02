 <footer class="blog-footer">
    <div class="container-fluid top-footer hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <p>
              W. Richter<br/>
              Physiotherapeuten
            </p> 
          </div>
          <div class="col-md-3">
            <p>
              Tel: 030 / 76 76 488-2 <br/>
              E-Mail: wpphysio@web.de
            </p>  
          </div>
          <div class="col-md-3">
            <p>
              Karl-Marx-Str. 188<br/>
              12043 Berlin
            </p>
          </div>
          <div class="col-md-3">
            <p>
              Mo-Fr 8:00 - 21:00 Uhr<br/>
              Sa 8:00 - 18:00 Uhr
            </p>
          </div>
        </div>
      </div>  
    </div>
    
    <div class="container-fluid bottom-footer">
      <div class="container">
        <div class="row">
          <!--FOOTER NAV-->
          <div class="col-md-6">
            <?php
            wp_nav_menu( array(
                'menu'              => 'footer',
                'theme_location'    => 'footer',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'footer-nav',
                'container_id'      => 'footer-nav',
                'menu_class'        => 'list-inline footer-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
          </div>
          <div class="col-md-5 col-md-offset-1">
            <p>&copy;2017 WANJA RICHTER PHYSIOTHERAPEUTEN
      <p>
          </div>
        </div>
      </div>  
    </div>
  </footer>
    <?php wp_footer();?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/script.js"></script>

  </body>
</html>