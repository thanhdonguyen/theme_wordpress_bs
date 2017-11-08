<?php
	function wpb_customize_about($wp_customize){
		$wp_customize->add_section('page_about', array(
	      'title'   => __('Page about', 'bootstrap'),
	      'description' => __('Please go to about to setup ','bootstrap'),
	      'priority'    => 160
	    ));

	    //edit heading name

	    $wp_customize->add_setting('about_heading', array(
	      'default'   => _x('about', 'bootstrap'),
	      'type'      => 'theme_mod'
	    ));
	    $wp_customize->add_control('about_heading', array(
	      'label'   => __('Heading', 'bootstrap'),
	      'section' => 'page_about',
	      'priority'  => 1
	    ));

	    //Backgroud color

	    $wp_customize->add_setting('about_backgroud', array(
	      'default'   => '#18BC9C',
	      'type'      => 'theme_mod'
	    ));
	    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'about_backgroud',array(
	      'label'   => __('Backgroud','bootstrap'),
	      'section' => 'page_about',
	      'settings' => 'about_backgroud',
	      'priority'  => 2
	    )));
	    //color

	    $wp_customize->add_setting('about_color', array(
	      'default'   => '#FFF',
	      'type'      => 'theme_mod'
	    ));
	    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'about_color',array(
	      'label'   => __('color','bootstrap'),
	      'section' => 'page_about',
	      'settings' => 'about_color',
	      'priority'  => 3
	    )));
	    //hover color

	    $wp_customize->add_setting('about_hover_color_bg', array(
	      'default'   => '#FFF',
	      'type'      => 'theme_mod'
	    ));
	    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'about_hover_color_bg',array(
	      'label'   => __('Hover color','bootstrap'),
	      'section' => 'page_about',
	      'settings' => 'about_hover_color_bg',
	      'priority'  => 3
	    )));

	    //hover color

	    $wp_customize->add_setting('about_hover_color', array(
	      'default'   => '#18BC9C',
	      'type'      => 'theme_mod'
	    ));
	    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'about_hover_color',array(
	      'section' => 'page_about',
	      'settings' => 'about_hover_color',
	      'priority'  => 3
	    )));


	}
	add_action('customize_register', 'wpb_customize_about');