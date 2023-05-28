<?php
/**
 * Kuza Classic Blog metabox file.
 *
 * This is the template that includes all the other files for metaboxes of Kuza Classic Blog theme
 *
 * @package Kuza
 * @since Kuza Classic Blog 0.1
 */

// Include Post subtitle meta
require get_template_directory() . '/inc/metabox/about-meta.php'; 

// Include Post subtitle meta
require get_template_directory() . '/inc/metabox/video-url.php'; 




if ( ! function_exists( 'kuza_classic_blog_custom_meta' ) ) : 
    /**
     * Adds meta box to the post editing screen
     */
    function kuza_classic_blog_custom_meta() {
        $post_type = array( 'post', 'page' );

        // POST Subtitle 
        add_meta_box( 'kuza_classic_blog_video_url', esc_html__( 'Video Links', 'kuza-classic-blog' ), 'kuza_classic_blog_video_url_callback', $post_type );
               
    }
endif;
add_action( 'add_meta_boxes', 'kuza_classic_blog_custom_meta' );


if ( ! function_exists( 'kuza_classic_blog_about_meta' ) ) : 
    /**
     * Adds meta box to the post editing screen
     */
    function kuza_classic_blog_about_meta() {
        $post_type = array( 'post' );

        // POST Subtitle 
        add_meta_box( 'kuza_classic_blog_about_meta', esc_html__( 'About Meta', 'kuza-classic-blog' ), 'kuza_classic_blog_about_meta_callback', $post_type );
               
    }
endif;
add_action( 'add_meta_boxes', 'kuza_classic_blog_about_meta' );


