<?php
//wc_get_template_part( 'content', 'single-product' );
global $product;
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
		$breadcrumbs = new WC_Breadcrumb();
		$arr         = $breadcrumbs->generate();
		$countArr    = count( $arr );
        $breadcrumbsHtml = '';
		if ( $countArr > 0 ) {
			$breadcrumbsHtml .= '<nav aria-label="breadcrumb">';
			$breadcrumbsHtml .= '<ol class="breadcrumb">';
			for ( $i = 0; $i < $countArr; $i ++ ) {
                if ( $i < ($countArr - 1)){
	                $breadcrumbsHtml .= '<li class="breadcrumb-item">';
	                $breadcrumbsHtml .= '<a href="' . $arr[$i][1] . '">' . $arr[$i][0] . '</a>';
                } else {
	                $breadcrumbsHtml .= '<li class="breadcrumb-item active" aria-current="page">';
	                $breadcrumbsHtml .= $arr[$i][0];
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

<div id="post-<?php the_ID(); ?>" class="py-3">
    <div class="container px-md-4">
        <div class="row">
            <div class="col col-lg-6">
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
                <div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>"
                     data-columns="<?php echo esc_attr( $columns ); ?>"
                     style="opacity: 0; transition: opacity .25s ease-in-out;">
                    <figure class="woocommerce-product-gallery__wrapper">
						<?php
						if ( $post_thumbnail_id ) {
							$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
						} else {
							$html = '<div class="woocommerce-product-gallery__image--placeholder">';
							$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
							$html .= '</div>';
						}

						echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

						do_action( 'woocommerce_product_thumbnails' );
						?>
                    </figure>
                </div>
            </div>
            <div class="col col-lg-6">
                <div class="card-touring">Performance Touring</div>
				<?php the_title( '<h1 class="mt-5 mb-3">', '</h1>' ); ?>
				<?php
				woocommerce_template_loop_price();
				?>
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