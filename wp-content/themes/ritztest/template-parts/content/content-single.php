<?php
//wc_get_template_part( 'content', 'single-product' );
global $product;
$id               = $product->get_id();
$price            = (float) $product->get_regular_price();
$priceText        = $price > 0 ? '<sapan class="old-price">€' . number_format( $price ) . '</sapan>' : '';
$singlePrice      = (float) $product->get_price();
$pricePriceText   = $singlePrice > 0 ? '<sapan class="new-price">€' . number_format( $singlePrice ) . '</sapan>' : '';
$salesPercent     = ceil( 100 - ( $singlePrice / $price ) * 100 );
$salesPercentText = '';
if ( $salesPercent > 0 ) {
	$salesPercentText .= '<div class="sales-indo mark-bg bg-red">' . $salesPercent . '% OFF</div>';
}

// wp-content/plugins/woocommerce/includes/wc-template-functions.php
//echo $product->get_regular_price();
//var_dump(woocommerce_get_product_thumbnail());
//woocommerce_show_product_images();
//woocommerce_show_product_thumbnails();
//woocommerce_template_single_price();
//do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );
//echo $product->get_total_sales();

?>


<div class="container px-md-4 pt-3">
	<?php
	if ( is_woocommerce() ) {
		/*
		$args = array(
                'delimiter' => ' / ',
                'home'      => '',
            );
		woocommerce_breadcrumb( $args );
		*/
		$breadcrumbs     = new WC_Breadcrumb();
		$arr             = $breadcrumbs->generate();
		$countArr        = count( $arr );
		$breadcrumbsHtml = '';
		if ( $countArr > 0 ) {
			$breadcrumbsHtml .= '<nav aria-label="breadcrumb">';
			$breadcrumbsHtml .= '<ol class="breadcrumb">';
			for ( $i = 0; $i < $countArr; $i ++ ) {
				if ( $i < ( $countArr - 1 ) ) {
					$breadcrumbsHtml .= '<li class="breadcrumb-item">';
					$breadcrumbsHtml .= '<a href="' . $arr[ $i ][1] . '">' . $arr[ $i ][0] . '</a>';
				} else {
					$breadcrumbsHtml .= '<li class="breadcrumb-item active" aria-current="page">';
					$breadcrumbsHtml .= $arr[ $i ][0];
				}
				$breadcrumbsHtml .= '</li>';
			}
			$breadcrumbsHtml .= '</ol>';
			$breadcrumbsHtml .= '</nav>';
		}

		echo $breadcrumbsHtml;
	}
	?>
</div>

<div id="post-<?php the_ID(); ?>" class="py-3 product">
    <div class="container px-md-4">
        <div class="row">
            <div class="col-12 col-lg-7">
				<?php

				$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
				$post_thumbnail_id = $product->get_image_id();
				$wrapper_classes   = apply_filters(
					'woocommerce_single_product_image_gallery_classes',
					array(
						'woocommerce-product-gallery',
						'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
						'woocommerce-product-gallery--columns-' . absint( $columns ),
						'images',
					)
				);
				?>

                <div class="row w-100 <?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>"
                     data-columns="<?php echo esc_attr( $columns ); ?>"
                     style="opacity: 0; transition: opacity .25s ease-in-out;">

                    <div class="col-2">
						<?php do_action( 'woocommerce_product_thumbnails' ); ?>
                    </div>
                    <div class="col-10 position-relative">
						<?php
						echo $salesPercentText;
						if ( $post_thumbnail_id ) {
							$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
						} else {
							$html = '<div class="woocommerce-product-gallery__image--placeholder">';
							$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
							$html .= '</div>';
						}
						?>
                        <figure class="woocommerce-product-gallery__wrapper">
							<?php
							echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
							?>
                        </figure>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-5">
				<?php
				$productType = get_post_meta( $id, 'product_type', true );
				$points      = get_post_meta( $id, 'points', true );
				?>
                <div class="card-touring"><?= $productType ?></div>
				<?php the_title( '<h1 class="text-justify">', '</h1>' ); ?>
                <div class="product-description-body py-2">
                    <div class="product-description-text position-relative">
						<?= $product->get_description(); ?>
                        <div class="gradient-description position-absolute"></div>
                    </div>
                    <div class="read-more">
                        Read More <span class="icon-chevron down"></span>
                    </div>
                </div>
                <div class="row price-points-box">
                    <div class="col-12 col-md-8">
                        <div class="price">
							<?= $pricePriceText; ?>
							<?= $priceText; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-md-end">
                        <div class="pts-bpx"><?= $points; ?>pts</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col py-4 add-to-cart-box">
	                    <?php
	                    do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );
	                    ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="entry-content">
			<?php
			//the_content();
			woocommerce_get_sidebar();
			?>
        </div><!-- .entry-content -->
    </div>

</div><!-- #post-<?php the_ID(); ?> -->