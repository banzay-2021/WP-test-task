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
									<div class="card" style="width: 18rem;">
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
