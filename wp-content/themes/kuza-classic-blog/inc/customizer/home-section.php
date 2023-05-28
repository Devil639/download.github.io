<?php
/**
 * Home Page Options.
 *
 * @package Kuza
 */

$default = kuza_classic_blog_get_default_theme_options();
$homepage_design_layout     = kuza_classic_blog_get_option( 'homepage_design_layout_options' );

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'kuza-classic-blog' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/

if ($homepage_design_layout=='home-classic-blog') {
	require get_template_directory() . '/inc/customizer/sections/header.php';
	require get_template_directory() . '/inc/customizer/sections/home-layout.php';
	require get_template_directory() . '/inc/customizer/sections/slider.php';
	require get_template_directory() . '/inc/customizer/sections/fitnesscat.php';
	require get_template_directory() . '/inc/customizer/sections/mustread.php';
}
