<?php
/**
 * Cleaning Expert: Customizer
 *
 * @subpackage Cleaning Expert
 * @since 1.0
 */

use WPTRT\Customize\Section\Cleaning_Expert_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Cleaning_Expert_Button::class );

	$manager->add_section(
		new Cleaning_Expert_Button( $manager, 'cleaning_expert_pro', [
			'title' => __( 'Cleaning Expert Pro', 'cleaning-expert' ),
			'priority' => 0,
			'button_text' => __( 'Go Pro', 'cleaning-expert' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/cleaning-services-wordpress-template/', 'cleaning-expert')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'cleaning-expert-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'cleaning-expert-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function cleaning_expert_customize_register( $wp_customize ) {

	$wp_customize->add_setting('cleaning_expert_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('cleaning_expert_logo_padding',array(
		'label' => __('Logo Margin','cleaning-expert'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('cleaning_expert_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'cleaning_expert_sanitize_float'
	));
	$wp_customize->add_control('cleaning_expert_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','cleaning-expert'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('cleaning_expert_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'cleaning_expert_sanitize_float'
	));
	$wp_customize->add_control('cleaning_expert_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','cleaning-expert'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('cleaning_expert_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'cleaning_expert_sanitize_float'
	));
	$wp_customize->add_control('cleaning_expert_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','cleaning-expert'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('cleaning_expert_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'cleaning_expert_sanitize_float'
 	));
 	$wp_customize->add_control('cleaning_expert_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','cleaning-expert'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('cleaning_expert_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'cleaning_expert_sanitize_checkbox'
	));
	$wp_customize->add_control('cleaning_expert_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','cleaning-expert'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('cleaning_expert_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'cleaning_expert_sanitize_checkbox'
	));
	$wp_customize->add_control('cleaning_expert_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','cleaning-expert'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_panel( 'cleaning_expert_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'cleaning-expert' ),
		'description' => __( 'Description of what this panel does.', 'cleaning-expert' ),
	) );

	$wp_customize->add_section( 'cleaning_expert_theme_options_section', array(
    	'title'      => __( 'General Settings', 'cleaning-expert' ),
		'priority'   => 30,
		'panel' => 'cleaning_expert_panel_id'
	) );

	$wp_customize->add_setting('cleaning_expert_theme_options',array(
		'default' => 'One Column',
		'sanitize_callback' => 'cleaning_expert_sanitize_choices'
	));
	$wp_customize->add_control('cleaning_expert_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','cleaning-expert'),
		'section' => 'cleaning_expert_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','cleaning-expert'),
		   'Right Sidebar' => __('Right Sidebar','cleaning-expert'),
		   'One Column' => __('One Column','cleaning-expert'),
		   'Grid Layout' => __('Grid Layout','cleaning-expert')
		),
	));

	$wp_customize->add_setting('cleaning_expert_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'cleaning_expert_sanitize_choices'
	));
	$wp_customize->add_control('cleaning_expert_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','cleaning-expert'),
        'section' => 'cleaning_expert_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','cleaning-expert'),
            'Right Sidebar' => __('Right Sidebar','cleaning-expert'),
            'One Column' => __('One Column','cleaning-expert')
        ),
	));

	$wp_customize->add_setting('cleaning_expert_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'cleaning_expert_sanitize_choices'
	));
	$wp_customize->add_control('cleaning_expert_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','cleaning-expert'),
        'section' => 'cleaning_expert_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','cleaning-expert'),
            'Right Sidebar' => __('Right Sidebar','cleaning-expert'),
            'One Column' => __('One Column','cleaning-expert')
        ),
	));

	$wp_customize->add_setting('cleaning_expert_archive_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'cleaning_expert_sanitize_choices'
	));
	$wp_customize->add_control('cleaning_expert_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','cleaning-expert'),
        'section' => 'cleaning_expert_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','cleaning-expert'),
            'Right Sidebar' => __('Right Sidebar','cleaning-expert'),
            'One Column' => __('One Column','cleaning-expert'),
            'Grid Layout' => __('Grid Layout','cleaning-expert')
        ),
	));

	//home page header
	$wp_customize->add_section( 'cleaning_expert_header_section' , array(
    	'title'    => __( 'Header Settings', 'cleaning-expert' ),
		'priority' => null,
		'panel' => 'cleaning_expert_panel_id'
	) );

    $wp_customize->add_setting('cleaning_expert_contact_btn_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cleaning_expert_contact_btn_text',array(
		'label'	=> __('Button Text','cleaning-expert'),
		'section' => 'cleaning_expert_header_section',
		'type' => 'text'
	));

    $wp_customize->add_setting('cleaning_expert_contact_btn_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('cleaning_expert_contact_btn_url',array(
		'label'	=> __('Button URL','cleaning-expert'),
		'section' => 'cleaning_expert_header_section',
		'type' => 'url'
	));

	//home page slider
	$wp_customize->add_section( 'cleaning_expert_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'cleaning-expert' ),
		'priority' => null,
		'panel' => 'cleaning_expert_panel_id'
	) );

	

	$wp_customize->add_setting('cleaning_expert_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'cleaning_expert_sanitize_checkbox'
	));
	$wp_customize->add_control('cleaning_expert_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','cleaning-expert'),
	   	'section' => 'cleaning_expert_slider_section',
	));

	$wp_customize->add_setting('cleaning_expert_sliderheading',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cleaning_expert_sliderheading',array(
		'label'	=> __('Slider Heading','cleaning-expert'),
		'section' => 'cleaning_expert_slider_section',
		'type' => 'text'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'cleaning_expert_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'cleaning_expert_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'cleaning_expert_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'cleaning-expert' ),
			'section' => 'cleaning_expert_slider_section',
			'type' => 'dropdown-pages'
		));
	}


	$wp_customize->add_setting('cleaning_expert_sliderleftboxtext',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cleaning_expert_sliderleftboxtext',array(
		'label'	=> __('Left Box Text','cleaning-expert'),
		'section' => 'cleaning_expert_slider_section',
		'type' => 'text'
	));

	$wp_customize->add_setting(
    	'cleaning_expert_sliderleftboximage',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'cleaning_expert_sliderleftboximage',
	        array(
			    'label'   		=> __('Left Box Image','cleaning-expert'),
	            'section' => 'cleaning_expert_slider_section',
	            'settings' => 'cleaning_expert_sliderleftboximage',
	        )
	    )
	);


	$wp_customize->add_setting( 'cleaning_expert_slider_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	   ));
	 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cleaning_expert_slider_color', array(
		   'label' => 'Text Color',
		'section' => 'cleaning_expert_slider_section',
	   )));


	//feature Section
	$wp_customize->add_section('cleaning_expert_feature_section',array(
		'title'	=> __('Feature Section','cleaning-expert'),
		'panel' => 'cleaning_expert_panel_id',
	));

	$wp_customize->add_setting('cleaning_expert_featuresection_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cleaning_expert_featuresection_title',array(
		'label'	=> __('Section Title','cleaning-expert'),
		'section' => 'cleaning_expert_feature_section',
		'type' => 'text'
	));


	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('cleaning_expert_featurecategory_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'cleaning_expert_sanitize_choices',
	));
	$wp_customize->add_control('cleaning_expert_featurecategory_setting',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','cleaning-expert'),
		'section' => 'cleaning_expert_feature_section',
	));

	$wp_customize->add_setting( 'cleaning_expert_feature_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	   ));
	 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cleaning_expert_feature_color', array(
		   'label' => 'Text Color',
		'section' => 'cleaning_expert_feature_section',
	   )));


	//Service Section
	$wp_customize->add_section('cleaning_expert_service_section',array(
		'title'	=> __('Service Section','cleaning-expert'),
		'description'=> __('<b>Note :</b> This section will appear below the Feature.','cleaning-expert'),
		'panel' => 'cleaning_expert_panel_id',
	));

 
    $wp_customize->add_setting('cleaning_expert_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cleaning_expert_section_title',array(
		'label'	=> __('Section Title','cleaning-expert'),
		'section' => 'cleaning_expert_service_section',
		'type' => 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('cleaning_expert_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'cleaning_expert_sanitize_choices',
	));
	$wp_customize->add_control('cleaning_expert_category_setting',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','cleaning-expert'),
		'section' => 'cleaning_expert_service_section',
	));

	$wp_customize->add_setting( 'cleaning_expert_service_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	   ));
	 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cleaning_expert_service_color', array(
		   'label' => 'Text Color',
		'section' => 'cleaning_expert_service_section',
	   )));

	//Footer
    $wp_customize->add_section( 'cleaning_expert_footer', array(
    	'title'  => __( 'Footer Text', 'cleaning-expert' ),
		'priority' => null,
		'panel' => 'cleaning_expert_panel_id'
	) );

	$wp_customize->add_setting('cleaning_expert_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'cleaning_expert_sanitize_checkbox'
    ));
    $wp_customize->add_control('cleaning_expert_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','cleaning-expert'),
       'section' => 'cleaning_expert_footer'
    ));

    $wp_customize->add_setting('cleaning_expert_footer_copy',array(
		'default' => 'Cleaning Expert WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cleaning_expert_footer_copy',array(
		'label'	=> __('Footer Text','cleaning-expert'),
		'section' => 'cleaning_expert_footer',
		'setting' => 'cleaning_expert_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting('cleaning_expert_footer_copylink',array(
		'default' => 'https://www.luzuk.com/themes/cleaning-expert-wordpress-theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cleaning_expert_footer_copylink',array(
		'label'	=> __('Footer Link','cleaning-expert'),
		'section' => 'cleaning_expert_footer',
		'setting' => 'cleaning_expert_footer_copylink',
		'type' => 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'cleaning_expert_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'cleaning_expert_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'cleaning_expert_customize_register' );

function cleaning_expert_customize_partial_blogname() {
	bloginfo( 'name' );
}

function cleaning_expert_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if (class_exists('WP_Customize_Control')) {

   	class cleaning_expert_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="cleaning-expert-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="cleaning-expert-icon-list clearfix">
	                <?php
	                $cleaning_expert_font_awesome_icon_array = cleaning_expert_font_awesome_icon_array();
	                foreach ($cleaning_expert_font_awesome_icon_array as $cleaning_expert_font_awesome_icon) {
	                   $icon_class = $this->value() == $cleaning_expert_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($cleaning_expert_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function cleaning_expert_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', get_template_directory_uri().'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'cleaning_expert_customizer_script' );