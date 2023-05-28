<?php  
/**
 * Header Default
 */
return array(
	'title'      => esc_html__( 'Header Transparent', 'digisell-fse' ),
	'categories' => array( 'digisell-fse', 'header' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"bottom":"0","top":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"width":"0px","style":"none","radius":"0px"},"position":{"type":"sticky","top":"0px"}},"className":"header-Fixed","layout":{"type":"constrained"}} -->
<div class="wp-block-group header-Fixed" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"topstrip","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group topstrip" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","left":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":873,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/icon-emailus.png' ) ) . '" alt="" class="wp-image-873"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color"><a href="mailto:agency@sitename.com">agency@sitename.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":872,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/icon-phone.png' ) ) . '" alt="" class="wp-image-872"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><strong>12345677890</strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|50","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50"},"blockGap":"0"},"color":{"background":"#6223cc"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#6223cc;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"foreground","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"my-site-logo","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group my-site-logo"><!-- wp:image {"id":916,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="'.home_url().'"><img src="' . esc_url( get_theme_file_uri( '/assets/images/logo.png' ) ) . '" alt="" class="wp-image-916"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:navigation {"icon":"menu","className":"site-navigation","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);