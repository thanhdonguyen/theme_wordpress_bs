<?php
  function wpb_customize_register($wp_customize){
  	//Customize header
    //Section show header
    $wp_customize->add_section('showheader', array(
      'title'   => __('Control header', 'bootstrap'),
      'description' => sprintf(__('Options for show header','bootstrap')),
      'priority'    => 120
    ));

    //edit logo name

    $wp_customize->add_setting('logo_brand', array(
      'default'   => _x('start bootstrap', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('logo_brand', array(
      'label'   => __('Logo', 'bootstrap'),
      'section' => 'showheader',
      'priority'  => 1
    ));

    //edit color word

    $wp_customize->add_setting('header_corlor', array(
      'default'   => '#FFF',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'header_corlor',array(
    	'label'		=> __('Color','bootstrap'),
    	'section' => 'showheader',
    	'settings' => 'header_corlor',
    	'priority'  => 2
    )));

    //edit hover color menu

    $wp_customize->add_setting('header_hover_corlor', array(
      'default'   => '#18BC9C',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'header_hover_corlor',array(
    	'label'		=> __('Hover Color','bootstrap'),
    	'section' => 'showheader',
    	'settings' => 'header_hover_corlor',
    	'priority'  => 3
    )));

    //edit backgroud color header

    $wp_customize->add_setting('header_backgroud', array(
      'default'   => '#2C3E50',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'header_backgroud',array(
    	'label'		=> __('Backgroud color','bootstrap'),
    	'section' => 'showheader',
    	'settings' => 'header_backgroud',
    	'priority'  => 4
    )));

    // Section show slider

    $wp_customize->add_section('showcase', array(
      'title'   => __('Control slider', 'bootstrap'),
      'description' => sprintf(__('Options for show slider','bootstrap')),
      'priority'    => 130
    ));

    //edit title slider

    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('start bootstrap', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'bootstrap'),
      'section' => 'showcase',
      'priority'  => 4
    ));

    //edit text slider

    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('Web Developer – Graphic Artist – User Experience Designer', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'bootstrap'),
      'section' => 'showcase',
      'priority'  => 5
    ));

    //edit image profile

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/profile.png',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Image Profile', 'bootstrap'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));

    //edit backgroud slider

    $wp_customize->add_setting('showcase_backgroud', array(
      'default'   => '#18BC9C',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'showcase_backgroud',array(
    	'label'		=> __('Backgroud color','bootstrap'),
    	'section' => 'showcase',
    	'settings' => 'showcase_backgroud',
    	'priority'  => 2
    )));

    //edit color word slider

    $wp_customize->add_setting('showcase_corlor', array(
      'default'   => '#FFF',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'showcase_corlor',array(
    	'label'		=> __('Color','bootstrap'),
    	'section' => 'showcase',
    	'settings' => 'showcase_corlor',
    	'priority'  => 3
    )));

    //Customize portfolio

    $wp_customize->add_section('showPortfolio', array(
      'title'   => __('Control portfolio', 'bootstrap'),
      'description' => sprintf(__('Options for show header','bootstrap')),
      'priority'    => 140
    ));

    //edit title

    $wp_customize->add_setting('portfolio_heading', array(
      'default'   => _x('portfolio', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('portfolio_heading', array(
      'label'   => __('heading', 'bootstrap'),
      'section' => 'showPortfolio',
      'priority'  => 1
    ));

    //edit backgroud color

    $wp_customize->add_setting('portfolio_backgroud', array(
      'default'   => '#FFF',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'portfolio_backgroud',array(
    	'label'		=> __('Backgroud color','bootstrap'),
    	'section' => 'showPortfolio',
    	'settings' => 'portfolio_backgroud',
    	'priority'  => 2
    )));

    //edit color word 1

    $wp_customize->add_setting('portfolio_color1', array(
      'default'   => '#212529',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'portfolio_color1',array(
    	'label'		=> __('Color','bootstrap'),
    	'section' => 'showPortfolio',
    	'settings' => 'portfolio_color1',
    	'priority'  => 3
    )));

    //edit color word 2

    $wp_customize->add_setting('portfolio_color2', array(
      'default'   => '#2c3e50',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'portfolio_color2',array(
    	'section' => 'showPortfolio',
    	'settings' => 'portfolio_color2',
    	'priority'  => 4
    )));

    //Customize footer

    $wp_customize->add_section('showFooter', array(
      'title'   => __('Control footer', 'bootstrap'),
      'description' => sprintf(__('Options for show footer','bootstrap')),
      'priority'    => 140
    ));

    //edit backgroud color

    $wp_customize->add_setting('footer_backgroud', array(
      'default'   => '#2C3E50',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_backgroud',array(
      'label'   => __('Backgroud color','bootstrap'),
      'section' => 'showFooter',
      'settings' => 'footer_backgroud',
      'priority'  => 1
    )));

    //edit color word

    $wp_customize->add_setting('footer_color', array(
      'default'   => '#FFF',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_color',array(
      'label'   => __('Color','bootstrap'),
      'section' => 'showFooter',
      'settings' => 'footer_color',
      'priority'  => 2
    )));

    //edit color hover

    $wp_customize->add_setting('footer_color_hover', array(
      'default'   => '#FFF',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_color_hover',array(
      'label'   => __('Color hover','bootstrap'),
      'section' => 'showFooter',
      'settings' => 'footer_color',
      'priority'  => 2
    )));

    //edit footer location

    $wp_customize->add_setting('footer_location', array(
      'default'   => _x('location', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('footer_location', array(
      'label'   => __('Location', 'bootstrap'),
      'section' => 'showFooter',
      'priority'  => 3
    ));
    $wp_customize->add_setting( 'footer_address', array(
      'default' => _x('<p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>', 'bootstrap'),
      'type'      => 'theme_mod'
      ));

    $wp_customize->add_control( 'footer_address', array(
      'type' => 'textarea',
      'section' => 'showFooter', // // Add a default or your own section
      'priority'  => 4
    ) );

    //edit aroud

    $wp_customize->add_setting('footer_aroud', array(
      'default'   => _x('AROUND THE WEB', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('footer_aroud', array(
      'label'   => __('Around', 'bootstrap'),
      'section' => 'showFooter',
      'priority'  => 5
    ));
    //fb link
    $wp_customize->add_setting('fb_link', array(
      'default'   => _x('facebook.com', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('fb_link', array(
      'label'   => __('Facebook link', 'bootstrap'),
      'section' => 'showFooter',
      'priority'  => 6
    ));
    //google link
    $wp_customize->add_setting('g_link', array(
      'default'   => _x('google.com', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('g_link', array(
      'label'   => __('Google+ link', 'bootstrap'),
      'section' => 'showFooter',
      'priority'  => 7
    ));
    // tw link
    $wp_customize->add_setting('tw_link', array(
      'default'   => _x('twitter.com', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('tw_link', array(
      'label'   => __('Twitter link', 'bootstrap'),
      'section' => 'showFooter',
      'priority'  => 8
    ));
    //linkedin link
    $wp_customize->add_setting('in_link', array(
      'default'   => _x('linkedin.com', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('in_link', array(
      'label'   => __('Linkedin link', 'bootstrap'),
      'section' => 'showFooter',
      'priority'  => 9
    ));

    //Footer about

    $wp_customize->add_setting('about_title', array(
      'default'   => _x('ABOUT FREELANCER', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('about_title', array(
      'label'   => __('About', 'bootstrap'),
      'section' => 'showFooter',
      'priority'  => 10
    ));

    $wp_customize->add_setting('about_text', array(
      'default'   => _x('Freelance is a free to use, open source Bootstrap theme created by Start Bootstrap.', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('about_text', array(
      'type' => 'textarea',
      'section' => 'showFooter',
      'priority'  => 11
    ));
    //license
    $wp_customize->add_setting('license', array(
      'default'   => _x('Copyright © Your Website 2017', 'bootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('license', array(
      'label'   => __('License', 'bootstrap'),
      'section' => 'showFooter',
      'priority'  => 12
    ));
  }

  add_action('customize_register', 'wpb_customize_register');
