<?php 
/**
 * Header Inner Banner
 */
return array(
	'title'      => esc_html__( 'Inner Banner', 'digisell-fse' ),
	'categories' => array( 'digisell-fse', 'Inner Banner' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/inner-banner.jpg' ) ) . '","id":723,"dimRatio":20,"minHeight":350,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-723" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/inner-banner.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title?","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->',
);
