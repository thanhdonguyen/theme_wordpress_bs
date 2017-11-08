<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name') ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory');?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php bloginfo('template_directory');?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/css/freelancer.css" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
    <?php wp_head();?>
  </head>

  <body id="page-top" <?php body_class();?>>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <style>
        #mainNav{
          background:<?php echo get_theme_mod('header_backgroud', '#2C3E50'); ?> ;
        }
        #mainNav a{
          color: <?php echo get_theme_mod('header_corlor', '#FFF'); ?>;
        }
        li.menu-item a:hover{
          color:  <?php echo get_theme_mod('header_hover_corlor', '#18BC9C'); ?> !important;
        }
      </style>
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" style="color: <?php echo get_theme_mod('header_corlor', '#FFF'); ?>" href="#page-top"><?php echo get_theme_mod('logo_brand', 'start bootstrap'); ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php
           wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location' => 'header-menu',
              'container' => false,
              'depth'             => 2,
              'container'         => false,
              'menu_class'        => 'navbar-nav ml-auto',
              'link_after'       => '<li class="nav-item nav-link js-scroll-trigger">',
              'link_beforce'     => '</li>',
             )
           );
       ?>
          <!-- <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.html">Contact</a>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>