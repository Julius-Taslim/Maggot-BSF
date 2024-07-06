<?php
 /**
  * Title: Archive Product
  * Slug: advizecraft/archive-product
  * Inserter: no
  */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg","id":73,"overlayColor":"accent","isUserOverlayColor":true,"minHeight":232,"minHeightUnit":"px","tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:232px"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-100 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-73" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide"} /-->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-2-color has-text-color has-link-color"><!-- wp:woocommerce/breadcrumbs {"textColor":"accent-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}}} /--></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"className":"alignwide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"backgroundColor":"primary","textColor":"contrast","fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} /-->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"8px"} -->
<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>
     <?php echo esc_html__( 'No products were found matching your selection.', 'advizecraft' ); ?>  </p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"33px"} -->
<div style="height:33px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->