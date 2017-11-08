<?php
	function wpb_customize_contact($wp_customize){
		$wp_customize->add_section('page_contact', array(
	      'title'   => __('Page contact', 'bootstrap'),
	      'description' => __('Please go to contact to setup ','bootstrap'),
	      'priority'    => 170
	    ));

	    //edit heading name

	    $wp_customize->add_setting('contact_heading', array(
	      'default'   => _x('contact me', 'bootstrap'),
	      'type'      => 'theme_mod'
	    ));
	    $wp_customize->add_control('contact_heading', array(
	      'label'   => __('Heading', 'bootstrap'),
	      'section' => 'page_contact',
	      'priority'  => 1
	    ));

	    // Backgroud color

	    $wp_customize->add_setting('contact_backgroud', array(
	      'default'   => '#FFF',
	      'type'      => 'theme_mod'
	    ));
	    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'contact_backgroud',array(
	      'label'   => __('Backgroud','bootstrap'),
	      'section' => 'page_contact',
	      'settings' => 'contact_backgroud',
	      'priority'  => 2
	    )));
	    //color

	    $wp_customize->add_setting('contact_color', array(
	      'default'   => '#2C3E50',
	      'type'      => 'theme_mod'
	    ));
	    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'contact_color',array(
	      'label'   => __('color','bootstrap'),
	      'section' => 'page_contact',
	      'settings' => 'contact_color',
	      'priority'  => 3
	    )));


	}
	add_action('customize_register', 'wpb_customize_contact');