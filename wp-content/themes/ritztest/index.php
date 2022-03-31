<?php
get_header();

?>
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

<?php
$args =
	[
		'post_type'      => 'product',
		'meta_key'       => 'show_at_our_favourites',
		'meta_value'     => '1',
		'orderby'        => [ 'post_modified' => 'DESC' ],
		'posts_per_page' => 16
	];

$query    = new WP_Query( $args );
$arrPosts = [];
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		$id                          = $query->post->ID;
		$points                      = get_post_meta( $id, 'points', true );
		$arrPostsTemp                = [];
		$arrPostsTemp['new']         = ( get_post_meta( $id, 'status_new', true ) == '1' ) ? true : false;
		$arrPostsTemp['pts']         = ( (int) $points > 0 ) ? $points : false;
		$arrPostsTemp['mark']        = true;
		$arrPostsTemp['touring']     = 'Performance Touring';
		$arrPostsTemp['postId']      = $id;
		$arrPostsTemp['postName']    = $query->post->post_title;
		$arrPostsTemp['postLink']    = get_page_link( $id );
		$arrPostsTemp['postPicLink'] = get_post( get_post_thumbnail_id( $id ) )->guid;
		$arrPostsTemp['postPrice']   = number_format( get_post_meta( $id, '_sale_price', true ) );
		$arrPosts[]                  = $arrPostsTemp;
	}
}
wp_reset_postdata();
$colInRow   = 4;
$countPosts = count( $arrPosts );
$countRows  = ceil( $countPosts / $colInRow );
?>
    <div class="container mt-5 pt-5 px-md-4">
        <div class="row">
            <div class="col-lg-6 my-4 pt-5 home-top-categories-title">
                Our Favourites
            </div>
        </div>
    </div>
    <div class="container mt-2 px-md-4 home-favourites-box">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
				<?php
				if ( $countPosts > 0 ) {
					for ( $i = 0; $i < $countRows; $i ++ ) {
						?>
                        <div class="carousel-item <?php echo( ( $i == 0 ) ? 'active' : '' ); ?>">
                            <div class="row justify-content-around">
								<?php
								for ( $y = 0; $y < $colInRow; $y ++ ) {
									$idArr = $i * $colInRow + $y;
									if ( $idArr >= $countPosts ) {
										?>
                                        <div class="col mb-3 home-favourites-col"></div>
										<?php
										continue;
									}
									?>
                                    <div class="col mb-3 home-favourites-col">
                                        <div class="card">
                                            <a href="<?= $arrPosts[ $idArr ]['postLink']; ?>" class="card-hover"></a>
                                            <div class="card-pic">
												<?php
												if ( $arrPosts[ $idArr ]['new'] ) {
													?>
                                                    <div class="new-item">new</div>
													<?php
												}; ?>
                                                <img src="<?= $arrPosts[ $idArr ]['postPicLink']; ?>"
                                                     class="card-img-top"
                                                     alt="<?= $arrPosts[ $idArr ]['postName']; ?>">
												<?php
												if ( $arrPosts[ $idArr ]['pts'] ) {
													?>
                                                    <div class="pts-bpx"><?= $arrPosts[ $idArr ]['pts']; ?>pts</div>
													<?php
												}
												?>

												<?php
												if ( $arrPosts[ $idArr ]['mark'] ) {
													?>
                                                    <div class="mark-item"
                                                         style="background-image: url('/wp-content/uploads/2022/03/markitem.png')"></div>
													<?php
												}
												?>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-touring"><?= $arrPosts[ $idArr ]['touring']; ?></div>
                                                <h5 class="card-title"><?= $arrPosts[ $idArr ]['postName']; ?></h5>
                                                <div class="card-price">€<?= $arrPosts[ $idArr ]['postPrice']; ?></div>
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
				}
				?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                <i class="bi bi-chevron-compact-left"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                <i class="bi bi-chevron-compact-right"></i>
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
        <div class="container mt-4 pt-5 px-md-4">
            <div class="row">
                <div class="col-lg-6 col my-4 home-top-categories-title">
                    Keep Updated
                </div>
                <div class="col-lg-6 col my-4 home-top-see-more">
                    <a href="#" class="btn btn-dark home-see-more-btn">See More</a>
                </div>
            </div>
        </div>
        <div class="container mt-2 mb-5 px-md-4">
            <div class="row align-items-top justify-content-between">
				<?php
				if ( count( $arrPosts ) > 0 ) {
					foreach ( $arrPosts as $post ) {
						?>
                        <div class="col-lg-4 mb-5">
                            <div class="home-updated-col">
                                <div class="home-updated-pic">
                                    <img src="<?= $post['postPicLink']; ?>"
                                         class="card-img-top"
                                         alt="<?= $post['postName']; ?>">
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