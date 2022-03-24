<?php
get_header();

?>
    <div class="container home-categories">
        <div class="row">
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
                    <div class="col-12 col-lg">
                        <div class="mb-5 home-categories-col"
                             style="background-image: url(<?= $image; ?>)">
                            <div class="home-categories-title">
								<?= $category->name; ?>
                            </div>
                            <a href="<?= get_category_link( $category->term_id ); ?>"
                               class="home-categories-link">
                                Shop <?= $category->cat_name; ?> <span class="icon-chevron right"></span>
                            </a>
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

    <div class="mt-5 position-relative home-about-us"
         style="background-image: url('/wp-content/uploads/2022/03/Homepage-About-Us-Image.png')">
        <div class="container position-absolute">
            <div class="row">
                <div class="col-7 col-sm-12 col-lg"></div>
                <div class="col-5 col-sm-12 col-lg">
                    <div class="bg-white home-about-us-block">
                        <div class="m-4 mark-bg home-about-us-mark" style="background: #F14C26">
                            About Us
                        </div>
                        <div class="m-4 home-about-us-title">
                            See What We’re All About
                        </div>
                        <p class="m-4">
                            We specialize in kayaks of all types and import several containers a year from various
                            countries. We believe we have some of the world’s top brands on sale!
                        </p>
                        <a href="#" class="btn btn-dark p-3 m-4 home-about-us-btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-lg-6 m-4 pt-5 home-top-categories-title">
                Our Favourites
            </div>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-3">
                <div class="m-4 home-favourites-col">
                    <div class="home-favourites-title">
                        Kayaks
                    </div>
                    <a class="home-favourites-link">
                        Shop Kayaks <span class="icon-chevron right"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="m-4 home-favourites-col">
                    <div class="home-favourites-title">
                        Kayaks
                    </div>
                    <a class="home-favourites-link">
                        Shop Kayaks <span class="icon-chevron right"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="m-4 home-favourites-col">
                    <div class="home-favourites-title">
                        Kayaks
                    </div>
                    <a class="home-favourites-link">
                        Shop Kayaks <span class="icon-chevron right"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="m-4 home-favourites-col">
                    <div class="home-favourites-title">
                        Kayaks
                    </div>
                    <a class="home-favourites-link">
                        Shop Kayaks <span class="icon-chevron right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
$categories = get_categories(
	[
		'taxonomy'   => 'category',
		'order'      => 'DESC',
		'number'     => 0,
		'hide_empty' => false,
		'child_of'   => 1,
	]
);
$arrPosts   = [];
if ( count( $categories ) > 0 ) {
	foreach ( $categories as $category ) {
		$arrPostsTemp            = [];
		$arrPostsTemp['catId']   = $category->term_id;
		$arrPostsTemp['catName'] = $category->cat_name;
		$posts                   = get_posts( [
			'numberposts'      => 1,
			'category'         => $category->term_id,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'include'          => array(),
			'exclude'          => array(),
			'post_type'        => 'post',
			'suppress_filters' => true,
		] );
		if ( count( $posts ) > 0 ) {
			$arrPostsTemp['empty'] = false;
			foreach ( $posts as $post ) {
				$arrPostsTemp['postName']    = $post->post_title;
				$arrPostsTemp['postData']    = $post->post_date;
				$arrPostsTemp['postLink']    = get_page_link( $post->ID );
				$arrPostsTemp['postPicLink'] = get_post( get_post_thumbnail_id( $post->ID ) )->guid;
			}
		} else {
			$arrPostsTemp['empty'] = true;
		}
		$arrPosts[] = $arrPostsTemp;
	}
}
?>

    <div class="bg-col py-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 m-3 home-top-categories-title">
                    Keep Updated
                </div>
            </div>
        </div>
        <div class="container mt-2 mb-5">
            <div class="row">
				<?php
				if ( count( $arrPosts ) > 0 ) {
					foreach ( $arrPosts as $post ) {
						?>
                        <div class="col-lg-4 col-md-12">
                            <div class="m-4 home-updated-col">
                                <div class="home-updated-pic" style="background-image: url('<?= $post['postPicLink']; ?>'">)"></div>
                                <div class="home-updated-title-cat bg-red">
	                                <?= $post['catName']; ?>
                                </div>
                                <div class="home-updated-data">
		                            <?= $post['postData']; ?>
                                </div>
                                <div class="home-updated-title">
                                    <a href="<?= $post['postLink']; ?>"><?= $post['postName']; ?></a>
                                </div>
                                <!--a class="home-updated-link">
                                    Shop Kayaks <span class="icon-chevron right"></span>
                                </a-->
                            </div>
                        </div>
						<?php
					}
				}
				?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>