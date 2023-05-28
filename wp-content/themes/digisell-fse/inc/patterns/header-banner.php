<?php 
/**
 * Default Header Banner
 */
return array(
	'title'      => esc_html__( 'Header Banner', 'digisell-fse' ),
	'categories' => array( 'digisell-fse', 'Header Banner' ),
	'content'    => '<!-- wp:group {"className":"main-front-page","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group main-front-page"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/header-banner.jpg' ) ) . '","id":3531,"dimRatio":20,"focalPoint":{"x":0.5,"y":0.5},"minHeight":833,"minHeightUnit":"px","isDark":false,"className":"header-banner-cover","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}}} -->
<div class="wp-block-cover is-light header-banner-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:833px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3531" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/header-banner.jpg' ) ) . '" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"banner-caption","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group banner-caption"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|30"},"blockGap":"0","margin":{"top":"0"}}},"className":"bannerInfo","layout":{"type":"constrained","contentSize":"550px","justifyContent":"left"}} -->
<div class="wp-block-group bannerInfo" style="margin-top:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"foreground","fontSize":"small"} -->
<h6 class="wp-block-heading has-text-align-left has-foreground-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:500;text-transform:none">Digital Marketing Strategy</h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"55px","textTransform":"none","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"foreground"} -->
<h2 class="wp-block-heading has-text-align-left has-foreground-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:55px;font-style:normal;font-weight:700;text-transform:none">We Bring You New Customers</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","textColor":"primary","style":{"typography":{"fontSize":"16px"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:16px"><a class="wp-block-button__link has-primary-color has-foreground-background-color has-text-color has-background wp-element-button">Discover More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);