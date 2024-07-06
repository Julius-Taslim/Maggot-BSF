<?php
 /**
  * Title: Single Post
  * Slug: advizecraft/single-post
  * Inserter: no
  */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg","id":12946,"dimRatio":80,"overlayColor":"accent-2","isUserOverlayColor":true,"minHeight":300,"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-accent-2-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-12946" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-large"} /-->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></main>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"},"padding":{"right":"20px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--30);padding-right:20px;padding-left:20px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"10px"}},"backgroundColor":"accent-2","textColor":"contrast","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-accent-2-background-color has-text-color has-background has-link-color" style="border-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image {"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-content /-->

<!-- wp:post-terms {"term":"category","prefix":"\u003cstrong\u003eCategories\u003c/strong\u003e: "} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-comments-form /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-left:var(--wp--preset--spacing--30);flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","theme":"advizecraft","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->