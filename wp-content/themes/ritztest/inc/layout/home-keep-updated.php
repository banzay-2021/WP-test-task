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
if (count($categories) > 0) {
	foreach ($categories as $category) {
		$arrPostsTemp            = [];
		$arrPostsTemp['catId']   = $category->term_id;
		$arrPostsTemp['catName'] = $category->cat_name;
		$posts                   = get_posts([
												 'numberposts'      => 1,
												 'category'         => $category->term_id,
												 'orderby'          => 'date',
												 'order'            => 'DESC',
												 'include'          => array(),
												 'exclude'          => array(),
												 'post_type'        => 'post',
												 'suppress_filters' => true,
											 ]);
		if (count($posts) > 0) {
			$arrPostsTemp['empty'] = false;
			foreach ($posts as $post) {
				$arrPostsTemp['postId']      = $post->ID;
				$arrPostsTemp['postName']    = $post->post_title;
				$arrPostsTemp['postData']    = date("d, M Y", strtotime($post->post_date));
				$arrPostsTemp['postLink']    = get_page_link($post->ID);
				$arrPostsTemp['postPicLink'] = get_post(get_post_thumbnail_id($post->ID))->guid;
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
			if (count($arrPosts) > 0) {
				foreach ($arrPosts as $post) {
					?>
                    <div class="col-lg-4 mb-5">
                        <div class="home-updated-col">
                            <div class="home-updated-pic">
                                <img src="<?= $post['postPicLink']; ?>"
                                     class="card-img-top"
                                     alt="<?= $post['postName']; ?>">
                            </div>
                            <div class="home-updated-title-cat <?= get_post_meta($post['postId'], 'color_mark', true); ?>">
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