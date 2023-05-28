<?php
/**
 * Add theme page
 */
function gutenify_biz_menu() {
	add_theme_page( esc_html__( 'Gutenify Biz', 'gutenify-biz' ), esc_html__( 'Gutenify Theme', 'gutenify-biz' ), 'edit_theme_options', 'gutenify-biz-info', 'gutenify_biz_theme_page_display' );
}
add_action( 'admin_menu', 'gutenify_biz_menu' );

/**
 * Display About page
 */
function gutenify_biz_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function gutenify_biz_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'gutenify_biz_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		wp_enqueue_style( 'gutenify-biz-admin-style' );
		wp_enqueue_script( 'gutenify-biz-admin' );
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'gutenify_biz_admin_plugin_notice' );


function gutenify_biz_hide_theme_info_noticebar() {
	check_ajax_referer( 'gutenify_biz-nonce', 'gutenify_biz-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'gutenify_biz_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_gutenify_biz_hide_theme_info_noticebar', 'gutenify_biz_hide_theme_info_noticebar' );
