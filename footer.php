<!-- Footer -->
    <footer class="text-center">
      <div class="footer-above" style="background-color: <?php echo get_theme_mod('footer_backgroud') ?>; color: <?php echo get_theme_mod('footer_color') ?>">
      <style>
        ul.list-inline i{
          color: <?php echo get_theme_mod('footer_color') ?>;
        }
        ul.list-inline a:hover{
          background-color: <?php echo get_theme_mod('footer_color_hover') ?>;
        }
        .btn-social{
          border: 2px solid <?php echo get_theme_mod('footer_color') ?>;
        }
      </style>
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3><?php echo get_theme_mod('footer_location','LOCATION'); ?></h3>
              <?php echo get_theme_mod('footer_address', '<p>3481 Melrose Place
                <br>Beverly Hills, CA 90210</p>'); ?>
            </div>
            <div class="footer-col col-md-4">
              <h3><?php echo get_theme_mod('footer_aroud','AROUND THE WEB') ?></h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="<?php echo get_theme_mod('fb_link') ?>">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="<?php echo get_theme_mod('g_link') ?>">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="<?php echo get_theme_mod('tw_link') ?>">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="<?php echo get_theme_mod('in_link') ?>">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3><?php echo get_theme_mod('about_title','ABOUT FREELANCER') ?></h3>
              <p><?php echo get_theme_mod('about_text','Freelance is a free to use, open source Bootstrap theme created by Start Bootstrap.') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below" style="background-color: <?php echo get_theme_mod('footer_backgroud') ?>; color: <?php echo get_theme_mod('footer_color') ?>">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <?php echo get_theme_mod('license') ?>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo('template_directory' ); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory' ); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo('template_directory' ); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php bloginfo('template_directory' ); ?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php bloginfo('template_directory' ); ?>/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php bloginfo('template_directory' ); ?>/js/freelancer.min.js"></script>
  <?php wp_footer(); ?>
  </body>

</html>