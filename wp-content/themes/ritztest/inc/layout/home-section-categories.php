<div class="container px-md-4 home-categories">
	<div class="row justify-content-between">
		<?php
		$categories = get_categories(
			[
				'taxonomy'   => 'product_cat',
				'order'      => 'ASC',
				'number'     => 0,
				'hide_empty' => false,
				'parent'     => '0',
			]
		);
		if ( count( $categories ) ) {
			foreach ( $categories as $category ) {
				$image = wp_get_attachment_url( get_term_meta( $category->term_id, 'thumbnail_id', true ) );
				?>
				<div class="col-lg-6">
					<div class="mb-4 home-categories-col"
					     style="background-image: url(<?= $image; ?>)">
                        <div class="home-categories-info position-absolute">
                            <div class="home-categories-title">
		                        <?= $category->name; ?>
                            </div>
                            <a href="<?= get_category_link( $category->term_id ); ?>"
                               class="home-categories-link">
                                Shop <?= $category->cat_name; ?> <span class="icon-chevron right"></span>
                            </a>
                        </div>
					</div>
				</div>
				<?php
			}
		} else {
			?>
			<div class="col-12 col-lg">No categories</div>
			<?php
		}
		?>
	</div>
</div>