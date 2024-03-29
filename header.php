<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('author'); ?>">
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

    <!-- Bootstrap 3.3.7 core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
      
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/swiper.css">

    
    <?php wp_head();?>
 
  </head>

  <body>
      <div class='container blog-header'>
            <div class="row">
              <div class="col-sm-4">
                <div id="logo">
                  <a href="/" class="home-link">
                    <h1 class="blog-title"><?php bloginfo('name')?></h1>
                    <p class="lead blog-description"><?php bloginfo('description')?></p>
                  </a>
                </div>
              </div>
              <div class="col-sm-6 col-sm-offset-2">
                <div class="row hidden-xs">
                  <div class="hover-info">
                    <div> <p>030 / 76 76 488 - 2 <small> Bei Fragen sind wir für Sie da.</small></p></div>
                    <div> <p>Karl-Marx-Straße 188, 12043 Berlin</p></div>
                    <div> <p>kontakt@wanja-richter.de</p></div>
                    <div> <p>Mo-Fr 8:00 - 21:00 Uhr | Sa 8:00 - 18:00 Uhr</p></div>
                  </div>
                </div>
                <div class="row">
                  <ul id="icons" class="list-inline">
                    <li class="icon">
                      <a href="tel:03076764882">
                        <img src="<?php bloginfo('template_url')?>/icons/phone.svg" alt="Telefonnummer"><span class="hidden-xs hidden-sm">Telefon</span>
                      </a>
                    </li>
                    <li class="icon">
                      <a href="https://www.google.de/maps/place/W.+Richter+Physiotherapeuten/@52.47333,13.4383124,17z/data=!3m1!4b1!4m5!3m4!1s0x47a84f9f7b3f68e5:0xeabfb16095a4e7dc!8m2!3d52.47333!4d13.4405011" target="_blank">
                        <img src="<?php bloginfo('template_url')?>/icons/adress.svg" alt="Adresse"><span class="hidden-xs hidden-sm">Adresse</span>
                      </a>
                    </li>
                    <li class="icon">
                      <a href="mailto:kontakt@wanja-richter.de">
                        <img src="<?php bloginfo('template_url')?>/icons/email.svg" alt="Email"><span class="hidden-xs hidden-sm">E-Mail</span>
                      </a>
                    </li>
                    <li class="icon hidden-xs">
                      <a href="<?php bloginfo('blog_url')?>/kontakt">
                        <img src="<?php bloginfo('template_url')?>/icons/open.svg" alt="Öffnungszeiten"><span class=" hidden-xs hidden-sm">Öffnungszeiten</span>
                        <p class="visible-xs-inline">Mo-Fr 8:00 - 21:00 Uhr | Sa 8:00 - 18:00 Uhr</p>
                      </a>
                    </li>
                  </ul>
                  <div class="container visible-xs">
                    <p>Mo-Fr 8:00 - 21:00 Uhr | Sa 8:00 - 18:00 Uhr</p>
                  </div>
                </div>
              </div>
            </div>
      </div>

    <div class="blog-masthead">
    <div class="container" style="padding: 0;">
        
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!--<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                <?php wp_title(); ?>
            </a>-->
          <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        </div>
        </nav>
        
      </div>
    </div>