<?php
/**
 * Category options.
 *
 * @package Kuza
 */

$default = kuza_classic_blog_get_default_theme_options();

// Category Author Section
$wp_customize->add_section( 'section_home_layout',
	array(
		'title'      => __( 'Homepage Layout', 'kuza-classic-blog' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[homepage_layout_options]', array(
	'default'           => $default['homepage_layout_options'],
	'sanitize_callback' => 'kuza_classic_blog_sanitize_select',
	'type'				=> 'theme_mod',
) );

$wp_customize->add_control( 'theme_options[homepage_layout_options]', array(
	'label'             => esc_html__( 'Choose HomePage Color Layout', 'kuza-classic-blog' ),
	'section'           => 'section_home_layout',
	'type'              => 'radio',
	'choices'				=> array( 
		'lite-layout'     => esc_html__( 'Lite HomePage', 'kuza-classic-blog' ), 
		'dark-layout'     => esc_html__( 'Dark HomePage', 'kuza-classic-blog' ),
		)
) );



$wp_customize->add_setting('theme_options[homepage_design_layout_options]', 
	array(
	'default' 			=> $default['homepage_design_layout_options'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'kuza_classic_blog_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[homepage_design_layout_options]', 
	array(
	'label'             => esc_html__( 'Choose HomePage Layout', 'kuza-classic-blog' ),
	'description' => __('Save & Refresh the customizer to see its effect.', 'kuza-classic-blog'),
	'section'     => 'section_home_layout',   
	'settings'    => 'theme_options[homepage_design_layout_options]',		
	'type'        => 'select',
	'choices'	  => array(  
		'home-fitness'     => esc_html__( 'Fitness HomePage', 'kuza-classic-blog' ),
		'home-medical'     => esc_html__( 'Medical HomePage', 'kuza-classic-blog' ), 
		'home-education'     => esc_html__( 'Education HomePage', 'kuza-classic-blog' ), 
		'home-nature'     => esc_html__( 'Slider HomePage', 'kuza-classic-blog' ), 
		'home-magazine'     => esc_html__( 'Magazine HomePage', 'kuza-classic-blog' ),
		'home-blog'     => esc_html__( 'Blog HomePage', 'kuza-classic-blog' ),
		'home-business'     => esc_html__( 'Business HomePage', 'kuza-classic-blog' ),
		'home-normal-magazine'     => esc_html__( 'Normal Magazine HomePage', 'kuza-classic-blog' ), 
		'home-corporate'     => esc_html__( 'Corporate HomePage', 'kuza-classic-blog' ),  
		'home-normal-blog'     => esc_html__( 'Normal Blog HomePage', 'kuza-classic-blog' ),  
		'home-minimal-blog'     => esc_html__( 'Minimal Blog HomePage', 'kuza-classic-blog' ), 
		'home-classic-blog'     => esc_html__( 'Classic Blog HomePage', 'kuza-classic-blog' ),
		),
	)
);

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[homepage_sidebar_position]', array(
	'default'           => $default['homepage_sidebar_position'],
	'sanitize_callback' => 'kuza_classic_blog_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[homepage_sidebar_position]', array(
	'label'             => esc_html__( 'Choose HomePage sidebar Layout', 'kuza-classic-blog' ),
	'section'           => 'section_home_layout',
	'type'              => 'radio',
	'active_callback'	=> 'kuza_classic_blog_home_magazine_enable',
	'choices'				=> array( 
		'home-no-sidebar'     => esc_html__( 'No Sidebar', 'kuza-classic-blog' ), 
		'home-right-sidebar'     => esc_html__( 'Right Sidebar', 'kuza-classic-blog' ),
		)
) );

