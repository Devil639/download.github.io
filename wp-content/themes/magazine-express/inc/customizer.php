<?php
/**
 * Magazine Express Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Magazine Express
 */

use WPTRT\Customize\Section\Magazine_Express_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Magazine_Express_Button::class );

    $manager->add_section(
        new Magazine_Express_Button( $manager, 'magazine_express_pro', [
            'title'       => __( 'Magazine Express Pro', 'magazine-express' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'magazine-express' ),
            'button_url'  => esc_url( 'https://www.themagnifico.net/themes/magazine-wordpress-theme/', 'magazine-express')
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'magazine-express-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'magazine-express-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function magazine_express_customize_register($wp_customize){
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        // Site title
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title',
            'render_callback' => 'magazine_express_customize_partial_blogname',
        ));
    }

    $wp_customize->add_setting('magazine_express_logo_title', array(
        'default' => true,
        'sanitize_callback' => 'magazine_express_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'magazine_express_logo_title',array(
        'label'          => __( 'Enable Disable Title', 'magazine-express' ),
        'section'        => 'title_tagline',
        'settings'       => 'magazine_express_logo_title',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('magazine_express_theme_description', array(
        'default' => false,
        'sanitize_callback' => 'magazine_express_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'magazine_express_theme_description',array(
        'label'          => __( 'Enable Disable Tagline', 'magazine-express' ),
        'section'        => 'title_tagline',
        'settings'       => 'magazine_express_theme_description',
        'type'           => 'checkbox',
    )));

    // Theme Color
    $wp_customize->add_section('magazine_express_color_option',array(
        'title' => esc_html__('Theme Color','magazine-express'),
        'description' => esc_html__('Change theme color on one click.','magazine-express'),
    ));

    $wp_customize->add_setting( 'magazine_express_theme_color_one', array(
        'default' => '#acdaf4',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'magazine_express_theme_color_one', array(
        'label' => esc_html__('First Color Option','magazine-express'),
        'section' => 'magazine_express_color_option',
        'settings' => 'magazine_express_theme_color_one'
    )));

    $wp_customize->add_setting( 'magazine_express_theme_color_two', array(
        'default' => '#ff83af',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'magazine_express_theme_color_two', array(
        'label' => esc_html__('Second Color Option','magazine-express'),
        'section' => 'magazine_express_color_option',
        'settings' => 'magazine_express_theme_color_two'
    )));

    // Header
    $wp_customize->add_section('magazine_express_header_top',array(
        'title' => esc_html__('Header','magazine-express'),
    ));

    $wp_customize->add_setting('magazine_express_trending_article_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('magazine_express_trending_article_text',array(
        'label' => esc_html__('Trending Article Text','magazine-express'),
        'section' => 'magazine_express_header_top',
        'setting' => 'magazine_express_trending_article_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'magazine_express_advertise_page', array(
        'default'           => '',
        'sanitize_callback' => 'magazine_express_sanitize_dropdown_pages'
    ) );
    $wp_customize->add_control( 'magazine_express_advertise_page', array(
        'label'    => __( 'Select Advertise Page', 'magazine-express' ),
        'description'    => __( 'Image Dimension ( 650px x 100px )', 'magazine-express' ),
        'section'  => 'magazine_express_header_top',
        'type'     => 'dropdown-pages'
    ) );

    $wp_customize->add_setting('magazine_express_subscribe_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('magazine_express_subscribe_text',array(
        'label' => esc_html__('Button Text','magazine-express'),
        'section' => 'magazine_express_header_top',
        'setting' => 'magazine_express_subscribe_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('magazine_express_subscribe_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('magazine_express_subscribe_url',array(
        'label' => esc_html__('Button Link','magazine-express'),
        'section' => 'magazine_express_header_top',
        'setting' => 'magazine_express_subscribe_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('magazine_express_sticky_header', array(
        'default' => false,
        'sanitize_callback' => 'magazine_express_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'magazine_express_sticky_header',array(
        'label'          => __( 'Show Sticky Header', 'magazine-express' ),
        'section'        => 'magazine_express_header_top',
        'settings'       => 'magazine_express_sticky_header',
        'type'           => 'checkbox',
    )));

    // General Settings
     $wp_customize->add_section('magazine_express_general_settings',array(
        'title' => esc_html__('General Settings','magazine-express'),
        'description' => esc_html__('General settings of our theme.','magazine-express'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('magazine_express_preloader_hide', array(
        'default' => false,
        'sanitize_callback' => 'magazine_express_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'magazine_express_preloader_hide',array(
        'label'          => __( 'Show Theme Preloader', 'magazine-express' ),
        'section'        => 'magazine_express_general_settings',
        'settings'       => 'magazine_express_preloader_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting( 'magazine_express_preloader_bg_color', array(
        'default' => '#000',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'magazine_express_preloader_bg_color', array(
        'label' => esc_html__('Preloader Background Color','magazine-express'),
        'section' => 'magazine_express_general_settings',
        'settings' => 'magazine_express_preloader_bg_color'
    )));

    $wp_customize->add_setting( 'magazine_express_preloader_dot_1_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'magazine_express_preloader_dot_1_color', array(
        'label' => esc_html__('Preloader First Dot Color','magazine-express'),
        'section' => 'magazine_express_general_settings',
        'settings' => 'magazine_express_preloader_dot_1_color'
    )));

    $wp_customize->add_setting( 'magazine_express_preloader_dot_2_color', array(
        'default' => '#ff83af',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'magazine_express_preloader_dot_2_color', array(
        'label' => esc_html__('Preloader Second Dot Color','magazine-express'),
        'section' => 'magazine_express_general_settings',
        'settings' => 'magazine_express_preloader_dot_2_color'
    )));

    $wp_customize->add_setting('magazine_express_scroll_hide', array(
        'default' => false,
        'sanitize_callback' => 'magazine_express_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'magazine_express_scroll_hide',array(
        'label'          => __( 'Show Theme Scroll To Top', 'magazine-express' ),
        'section'        => 'magazine_express_general_settings',
        'settings'       => 'magazine_express_scroll_hide',
        'type'           => 'checkbox',
    )));

    // Social Link
    $wp_customize->add_section('magazine_express_social_link',array(
        'title' => esc_html__('Social Links','magazine-express'),
    ));

    $wp_customize->add_setting('magazine_express_facebook_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('magazine_express_facebook_url',array(
        'label' => esc_html__('Facebook Link','magazine-express'),
        'section' => 'magazine_express_social_link',
        'setting' => 'magazine_express_facebook_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('magazine_express_twitter_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('magazine_express_twitter_url',array(
        'label' => esc_html__('Twitter Link','magazine-express'),
        'section' => 'magazine_express_social_link',
        'setting' => 'magazine_express_twitter_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('magazine_express_intagram_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('magazine_express_intagram_url',array(
        'label' => esc_html__('Intagram Link','magazine-express'),
        'section' => 'magazine_express_social_link',
        'setting' => 'magazine_express_intagram_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('magazine_express_linkedin_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('magazine_express_linkedin_url',array(
        'label' => esc_html__('Linkedin Link','magazine-express'),
        'section' => 'magazine_express_social_link',
        'setting' => 'magazine_express_linkedin_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('magazine_express_pintrest_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('magazine_express_pintrest_url',array(
        'label' => esc_html__('Pinterest Link','magazine-express'),
        'section' => 'magazine_express_social_link',
        'setting' => 'magazine_express_pintrest_url',
        'type'  => 'url'
    ));

    //Slider
    $wp_customize->add_section('magazine_express_top_slider',array(
        'title' => esc_html__('Post Category Slider','magazine-express'),
        'description' => esc_html__('Here you have to add 3 different post categories in below dropdown. Image Dimension ( 500px x 500px )','magazine-express')
    ));

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('magazine_express_top_post_category_1',array(
        'default'   => 'select',
        'sanitize_callback' => 'magazine_express_sanitize_choices',
    ));
    $wp_customize->add_control('magazine_express_top_post_category_1',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display slider post','magazine-express'),
        'section' => 'magazine_express_top_slider',
    ));

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('magazine_express_top_post_category_2',array(
        'default'   => 'select',
        'sanitize_callback' => 'magazine_express_sanitize_choices',
    ));
    $wp_customize->add_control('magazine_express_top_post_category_2',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display slider post','magazine-express'),
        'section' => 'magazine_express_top_slider',
    ));

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('magazine_express_top_post_category_3',array(
        'default'   => 'select',
        'sanitize_callback' => 'magazine_express_sanitize_choices',
    ));
    $wp_customize->add_control('magazine_express_top_post_category_3',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display slider post','magazine-express'),
        'section' => 'magazine_express_top_slider',
    ));

    //Featured Category
    $wp_customize->add_section('magazine_express_featured_category',array(
        'title' => esc_html__('Featured Category','magazine-express'),
        'description' => esc_html__('Here you have to select post category which will display perticular featured post in the home page. Image Dimension ( 500px x 500px )','magazine-express')
    ));

    $wp_customize->add_setting('magazine_express_featured_category_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('magazine_express_featured_category_title', array(
        'label' => __('Section Title', 'magazine-express'),
        'section' => 'magazine_express_featured_category',
        'priority' => 1,
        'type' => 'text',
    ));

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('magazine_express_featured_category_1',array(
        'default'   => 'select',
        'sanitize_callback' => 'magazine_express_sanitize_choices',
    ));
    $wp_customize->add_control('magazine_express_featured_category_1',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display box post','magazine-express'),
        'section' => 'magazine_express_featured_category',
    ));

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('magazine_express_featured_category_2',array(
        'default'   => 'select',
        'sanitize_callback' => 'magazine_express_sanitize_choices',
    ));
    $wp_customize->add_control('magazine_express_featured_category_2',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display sidebar post','magazine-express'),
        'section' => 'magazine_express_featured_category',
    ));

    // Footer
    $wp_customize->add_section('magazine_express_site_footer_section', array(
        'title' => esc_html__('Footer', 'magazine-express'),
    ));

    $wp_customize->add_setting('magazine_express_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('magazine_express_footer_text_setting', array(
        'label' => __('Replace the footer text', 'magazine-express'),
        'section' => 'magazine_express_site_footer_section',
        'priority' => 1,
        'type' => 'text',
    ));
}
add_action('customize_register', 'magazine_express_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function magazine_express_customize_partial_blogname(){
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function magazine_express_customize_partial_blogdescription(){
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function magazine_express_customize_preview_js(){
    wp_enqueue_script('magazine-express-customizer', esc_url(get_template_directory_uri()) . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'magazine_express_customize_preview_js');
