<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Archive Hero', 'renovater' ),
	'categories' => array( 'renovater-core' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/work-architecture-structure-wood-house-window-959348-pxhere.com_.webp","id":84,"dimRatio":60,"className":"renovater-margin-top-n30","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<div class="wp-block-cover renovater-margin-top-n30" style="padding-top:80px;padding-bottom:80px"><img class="wp-block-cover__image-background wp-image-84" alt="" src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/work-architecture-structure-wood-house-window-959348-pxhere.com_.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"1290px","type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"heading-2"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
	'is_sync' => false,
);
