<?php 

	$cleaning_expert_custom_style = '';

	// Logo Size
	$cleaning_expert_logo_top_padding = get_theme_mod('cleaning_expert_logo_top_padding');
	$cleaning_expert_logo_bottom_padding = get_theme_mod('cleaning_expert_logo_bottom_padding');
	$cleaning_expert_logo_left_padding = get_theme_mod('cleaning_expert_logo_left_padding');
	$cleaning_expert_logo_right_padding = get_theme_mod('cleaning_expert_logo_right_padding');

	if( $cleaning_expert_logo_top_padding != '' || $cleaning_expert_logo_bottom_padding != '' || $cleaning_expert_logo_left_padding != '' || $cleaning_expert_logo_right_padding != ''){
		$cleaning_expert_custom_style .=' .logo {';
			$cleaning_expert_custom_style .=' padding-top: '.esc_attr($cleaning_expert_logo_top_padding).'px; padding-bottom: '.esc_attr($cleaning_expert_logo_bottom_padding).'px; padding-left: '.esc_attr($cleaning_expert_logo_left_padding).'px; padding-right: '.esc_attr($cleaning_expert_logo_right_padding).'px;';
		$cleaning_expert_custom_style .=' }';
	}

//Slider color
$cleaning_expert_slider_color = get_theme_mod('cleaning_expert_slider_color');

if ( $cleaning_expert_slider_color != '') {
	$cleaning_expert_custom_style .=' #slider h2,#slider p {';
		$cleaning_expert_custom_style .=' color:'.esc_attr($cleaning_expert_slider_color).';';
	$cleaning_expert_custom_style .=' }';
}

//Feature color
$cleaning_expert_feature_color = get_theme_mod('cleaning_expert_feature_color');

if ( $cleaning_expert_feature_color != '') {
	$cleaning_expert_custom_style .=' #feature-section .features-area-data h4 a,#feature-section .hi-icon i {';
		$cleaning_expert_custom_style .=' color:'.esc_attr($cleaning_expert_feature_color).';';
	$cleaning_expert_custom_style .=' }';
}

//Service color
$cleaning_expert_service_color = get_theme_mod('cleaning_expert_service_color');

if ( $cleaning_expert_service_color != '') {
	$cleaning_expert_custom_style .=' .service-box .service-content h4 {';
		$cleaning_expert_custom_style .=' color:'.esc_attr($cleaning_expert_service_color).';';
	$cleaning_expert_custom_style .=' }';
}