<?php
/*
	Template Name: About
*/
	get_header();
?>
	<section class="success" id="about">
  <style>
    #about{
      background-color: <?php echo get_theme_mod('about_backgroud'); ?>;
      color: <?php echo get_theme_mod('about_color'); ?>;
    }
    hr.star-light:after{
      background-color: <?php echo get_theme_mod('about_backgroud'); ?>;
    }
    .btn-outline{
      color: <?php echo get_theme_mod('about_color'); ?>;
      border: 2px solid <?php echo get_theme_mod('about_color'); ?>;;
    }
    a.btn-outline:hover{
      background-color: <?php echo get_theme_mod('about_hover_color_bg'); ?>;;
      color: <?php echo get_theme_mod('about_hover_color'); ?>;;
      border: 2px solid <?php echo get_theme_mod('about_hover_color'); ?>;;
    }
    #about li.widget_text{
      list-style-type: none;
    }
  </style>
      <div class="container">
        <h2 class="text-center"><?php echo get_theme_mod('about_heading','ABOUT'); ?></h2>
        <hr class="star-light">
        <div class="row">
          <?php get_template_part('templates/sidebar','about') ?>
          <div class="col-lg-12 mx-auto text-center">
            <a href="#" class="btn btn-lg btn-outline">
              <i class="fa fa-download"></i>
              Download Theme
            </a>
          </div>
        </div>
      </div>
    </section>
	<?php get_footer(); ?>