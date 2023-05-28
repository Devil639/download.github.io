<?php

$default = kuza_classic_blog_get_default_theme_options();
/**
* Add Header Top Panel
*/
$wp_customize->add_panel( 'header_top_panel', array(
    'title'          => __( 'Header Top', 'kuza-classic-blog' ),
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
) );



/** Header contact info section */
$wp_customize->add_section(
    'top_bar_current_date_contact',
    array(
        'title'    => __( 'Date or Contact Information', 'kuza-classic-blog' ),
        'panel'    => 'header_top_panel',
        'priority' => 11,
        
    )
);
/** Topbar links control */
$wp_customize->add_setting( 'theme_options[show_topbar]',
    array(
        'default'           =>  $default['show_topbar'],
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'kuza_classic_blog_sanitize_switch_control',
    )
);
$wp_customize->add_control( new Kuza_Classic_Blog_Switch_Control( $wp_customize, 'theme_options[show_topbar]',
    array(
        'label'             => __('Enable/Disable Topbar', 'kuza-classic-blog'),
        'section'           => 'top_bar_current_date_contact',
         'settings'         => 'theme_options[show_topbar]',
        'on_off_label'      => kuza_classic_blog_switch_options(),
    )
) ); 

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[topbar_layout_option]', array(
    'default'           => $default['topbar_layout_option'],
    'sanitize_callback' => 'kuza_classic_blog_sanitize_select',
    'type'              => 'theme_mod',
) );

$wp_customize->add_control( 'theme_options[topbar_layout_option]', array(
    'label'             => esc_html__( 'Choose Date or Contact Information', 'kuza-classic-blog' ),
    'section'           => 'top_bar_current_date_contact',
    'type'              => 'radio',
    'choices'               => array( 
        'topbar-none'     => esc_html__( 'None', 'kuza-classic-blog' ), 
        'contact-info-option'     => esc_html__( 'Contact Info', 'kuza-classic-blog' ), 
        'current-date-option'     => esc_html__( ' Current Date ', 'kuza-classic-blog' ),
        )
) );

// Header contact enable control and setting
$wp_customize->add_setting( 'theme_options[show_current_date]', array(
    'default'           =>  $default['show_current_date'],
    'sanitize_callback' => 'kuza_classic_blog_sanitize_switch_control',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
) );

$wp_customize->add_control( new Kuza_Classic_Blog_Switch_Control( $wp_customize, 'theme_options[show_current_date]', array(
    'label'             => __( 'Show Contact Info', 'kuza-classic-blog' ),
    'section'           => 'top_bar_current_date',
    'settings'         => 'theme_options[show_current_date]',
    'on_off_label'      => kuza_classic_blog_switch_options(),
    'active_callback' => 'topbar_current_date_option',
) ) );


// Header contact enable control and setting
$wp_customize->add_setting( 'theme_options[show_header_contact_info]', array(
    'default'           =>  $default['show_header_contact_info'],
    'sanitize_callback' => 'kuza_classic_blog_sanitize_switch_control',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
) );

$wp_customize->add_control( new Kuza_Classic_Blog_Switch_Control( $wp_customize, 'theme_options[show_header_contact_info]', array(
    'label'             => __( 'Show Contact Info', 'kuza-classic-blog' ),
    'section'           => 'top_bar_current_date_contact',
    'settings'         => 'theme_options[show_header_contact_info]',
    'on_off_label'      => kuza_classic_blog_switch_options(),    
    'active_callback' => 'topbar_contact_info_option',
) ) );

/** Location */
$wp_customize->add_setting( 'theme_options[header_location]', array(
    'default'           => $default['header_location'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_location]',
    array(
        'label'           => __( 'Location', 'kuza-classic-blog' ),
        'description'     => __( 'Enter Location.', 'kuza-classic-blog' ),
        'section'         => 'top_bar_current_date_contact',
        'active_callback' => 'topbar_contact_info_option',
    )
);

/** Phone */
$wp_customize->add_setting( 'theme_options[header_phone]', array(
    'default'           => $default['header_phone'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_phone]',
    array(
        'label'           => __( 'Phone', 'kuza-classic-blog' ),
        'description'     => __( 'Enter phone number.', 'kuza-classic-blog' ),
        'section'         => 'top_bar_current_date_contact',
        'active_callback' => 'topbar_contact_info_option',
    )
);

/** Email */
$wp_customize->add_setting( 
    'theme_options[header_email]', 
    array(
        'default'           => $default['header_email'],
        'sanitize_callback' => 'sanitize_email',
    ) 
);

$wp_customize->add_control(
    'theme_options[header_email]',
    array(
        'label'           => __( 'Email', 'kuza-classic-blog' ),
        'description'     => __( 'Enter valid email address.', 'kuza-classic-blog' ),
        'section'         => 'top_bar_current_date_contact',
        'active_callback' => 'topbar_contact_info_option',
    )
);


/** Header social links section */
$wp_customize->add_section(
    'header_social_links_section',
    array(
        'title'    => __( 'Social Links', 'kuza-classic-blog' ),
        'panel'    => 'header_top_panel',
        'priority' => 20,
    )
);

/** Header social links control */
$wp_customize->add_setting( 'theme_options[show_header_social_links]',
    array(
        'default'           =>  $default['show_header_social_links'],
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'kuza_classic_blog_sanitize_switch_control',
    )
);
$wp_customize->add_control( new Kuza_Classic_Blog_Switch_Control( $wp_customize, 'theme_options[show_header_social_links]',
    array(
        'label'             => __('Show Social Links', 'kuza-classic-blog'),
        'section'           => 'header_social_links_section',
         'settings'         => 'theme_options[show_header_social_links]',
        'on_off_label'      => kuza_classic_blog_switch_options(),
    )
) );

for( $i=1; $i<=4; $i++ ){

    // Setting social_links.
    $wp_customize->add_setting('theme_options[header_social_link_'.$i.']', array(
            'sanitize_callback' => 'esc_url_raw',
        ) );

    $wp_customize->add_control('theme_options[header_social_link_'.$i.']', array(
        'label'             => esc_html__( 'Social Links', 'kuza-classic-blog' ),
        'section'           => 'header_social_links_section',
        'type'              => 'url',
    ) );
}


/** Header social links section */
$wp_customize->add_section(
    'header_search_section',
    array(
        'title'    => __( 'Search Form', 'kuza-classic-blog' ),
        'panel'    => 'header_top_panel',
        'priority' => 20,
    )
);

/** Header social links control */
$wp_customize->add_setting( 'theme_options[show_header_search]',
    array(
        'default'           =>  $default['show_header_search'],
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'kuza_classic_blog_sanitize_switch_control',
    )
);
$wp_customize->add_control( new Kuza_Classic_Blog_Switch_Control( $wp_customize, 'theme_options[show_header_search]',
    array(
        'label'             => __('Show Search', 'kuza-classic-blog'),
        'section'           => 'header_search_section',
         'settings'         => 'theme_options[show_header_search]',
        'on_off_label'      => kuza_classic_blog_switch_options(),
    )
) );
