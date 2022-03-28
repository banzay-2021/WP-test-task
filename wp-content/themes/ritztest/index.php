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

    <div class="container-fluid mt-5 position-relative home-about-us"
         style="background-image: url('/wp-content/uploads/2022/03/Homepage-About-Us-Image.png')">
        <div class="container position-absolute">
            <div class="row align-items-center">
                <div class="col-md-12 col-sm-12 col-lg-7"></div>
                <div class="col-md-12 col-sm-12 col-lg-5">
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
        <div id="carouselExampleControls" class="carousel px-4 slide" data-bs-ride="carousel">
            <div class="carousel-inner">
				<?php
				for ( $i = 0; $i < 1; $i ++ ) {
					?>
                    <div class="carousel-item <?php echo( ( $i == 0 ) ? 'active' : '' ); ?>">
                        <div class="row">
							<?php
							for ( $y = 0; $y < 4; $y ++ ) {
								?>
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-pic">
                                            <?php
                                            if ($y == 0) {
                                                ?>
                                                <div class="new-item">new</div>
                                                <?php
                                            }
                                            ;?>
                                            <img src="/wp-content/uploads/2022/03/i02.png" class="card-img-top" alt="1">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
								<?php
							}
							?>
                        </div>
                    </div>
					<?php
				}
				?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
				$arrPostsTemp['postId']      = $post->ID;
				$arrPostsTemp['postName']    = $post->post_title;
				$arrPostsTemp['postData']    = date( "d, M Y", strtotime( $post->post_date ) );
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
                <div class="col-6 col-sm my-3 home-top-categories-title">
                    Keep Updated
                </div>
                <div class="col-6 col-sm my-3 home-top-see-more">
                    <a href="#" class="btn btn-dark home-see-more-btn">See More</a>
                </div>
            </div>
        </div>
        <div class="container mt-2 mb-5">
            <div class="row align-items-top">
				<?php
				if ( count( $arrPosts ) > 0 ) {
					foreach ( $arrPosts as $post ) {
						?>
                        <div class="col-lg-4 col-md-12">
                            <div class="m-4 home-updated-col">
                                <div class="home-updated-pic"
                                     style="background-image: url('<?= $post['postPicLink']; ?>'">)">
                                </div>
                                <div class="home-updated-title-cat <?= get_post_meta( $post['postId'], 'color_mark', true ); ?>">
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