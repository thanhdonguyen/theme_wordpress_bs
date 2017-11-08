<?php
  register_nav_menu ( 'header-menu', __('Header Menu', 'bootstrap') );
  require get_template_directory(). '/inc/customizer_index.php';
  require get_template_directory(). '/inc/customizer_about.php';
  require get_template_directory(). '/inc/customizer_contact.php';
  // Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
      'name'  => 'About box 1',
      'id'    => 'about1',
      'description' => __( 'Widgets in this area will be shown data about page. Please choose text.', 'startbootstrap' ),
    ));
  register_sidebar(array(
      'name'  => 'About box 2',
      'id'    => 'about2',
      'description' => __( 'Widgets in this area will be shown data about page. Please choose text.', 'startbootstrap' ),
    ));
}
add_action('widgets_init', 'wpb_init_widgets');

if (!function_exists('post_theme_setup')) {
    add_theme_support('post-thumbnails');
  }
add_action('save_image', 'post_theme_setup');

if ( ! function_exists( 'post_thumbnail' ) ) {
  function post_thumbnail( $size ) {
    if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
      <?php the_post_thumbnail( $size ); ?><?php
    endif;
  }
}

add_filter('widget_text', 'do_shortcode');

function misha_my_load_more_scripts() {
 
  global $wp_query; 
 
  // In most cases it is already included on the page and this line can be removed
  wp_enqueue_script('jquery');
 
  // register our main script but do not enqueue it yet
  wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );
 
  // now the most interesting part
  // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
  // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
  wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
    'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
    'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
    'max_page' => $wp_query->max_num_pages
  ) );
 
  wp_enqueue_script( 'my_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){
 
  // prepare our arguments for the query
  $args = json_decode( stripslashes( $_POST['query'] ), true );
  $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
  $args['post_status'] = 'publish';
 
  // it is always better to use WP_Query but not here
  query_posts( $args );
 
  if( have_posts() ) :
 
    // run the loop
    while( have_posts() ): the_post();
 
      // look into your theme code how the posts are inserted, but you can use your own HTML of course
      // do you remember? - my example is adapted for Twenty Seventeen theme
      // get_template_part( 'template-parts/post/content', get_post_format() );
      // for the test purposes comment the line above and uncomment the below one
      // the_title();
      get_template_part('content',get_post_format());
 
 
    endwhile;
 
  endif;
  die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
?>