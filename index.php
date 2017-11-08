<?php get_header(); ?>
	    <!-- Header -->
    <header class="masthead" style="background-color: <?php echo get_theme_mod('showcase_backgroud', '#18BC9C'); ?>; color: <?php echo get_theme_mod('showcase_corlor', '#FFF'); ?>">
      <div class="container">
        <img class="img-fluid" src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_directory')); ?>" alt="">
        <div class="intro-text">
          <span class="name"><?php echo get_theme_mod('showcase_heading', 'start bootstrap'); ?></span>
          <hr class="star-light">
          <span class="skills"><?php echo get_theme_mod('showcase_text', 'Web Developer – Graphic Artist – User Experience Designer'); ?></span>
        </div>
      </div>
    </header>
    <!-- Portfolio Grid Section -->
    <section id="portfolio" style="background-color: <?php echo get_theme_mod('portfolio_backgroud', '#FFF'); ?>">
      <style>
        hr.star-primary {
          border-color: <?php echo get_theme_mod('portfolio_color2', '#2c3e50'); ?>;
        }
        hr.star-primary:after {
          color: <?php echo get_theme_mod('portfolio_color2', '#2c3e50'); ?>;
          background-color:  <?php echo get_theme_mod('portfolio_backgroud', '#FFF'); ?>;
        }
      </style>
      <div class="container">
        <h2 class="text-center" style="color: <?php echo get_theme_mod('portfolio_color1', '#212529'); ?>"><?php echo get_theme_mod('portfolio_heading', 'Portfolio'); ?></h2>
        <hr class="star-primary">
        <div class="row" id="load_ajax">
          <?php
          if(have_posts()):while(have_posts()):the_post(); ?>
            <?php get_template_part('content',get_post_format());?>
          <?php endwhile; ?>
          <?php else: ?>
            <?php get_template_part( 'content', 'none' ); ?>
          <?php endif; ?>
      </div>
      <?php 
            if (  $wp_query->max_num_pages > 1 ){
          ?>
          <div class="col-lg-4 offset-lg-4">
            <div class="misha_loadmore">See more</div>
          </div>
          <?php } ?>
    </section>
         <!-- Portfolio Modals -->
    <?php
    if(have_posts()):while(have_posts()):the_post(); ?>
      <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $post->ID ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2><?php echo $post->post_title ?></h2>
                  <hr class="star-primary">
                  <?php post_thumbnail('large');  ?>
                  <p><?php echo $post->post_content ?></p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>