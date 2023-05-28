<?php
/**
 * Customizer section options.
 *
 * @package businesslab
 *
 */

function businesslab_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
		$wp_customize->add_setting(
			'aasta_footer_copright_text',
			array(
				'sanitize_callback' =>  'businesslab_sanitize_text',
				'default' => __('Copyright &copy; 2023 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> BusinessLab theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'businesslab'),
				'transport'         => $selective_refresh,
			)	
		);
		$wp_customize->add_control('aasta_footer_copright_text', array(
				'label' => esc_html__('Footer Copyright','businesslab'),
				'section' => 'aasta_footer_copyright',
				'priority'        => 10,
				'type'    =>  'textarea'
		));

}
add_action( 'customize_register', 'businesslab_customizer_theme_settings' );

function businesslab_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}