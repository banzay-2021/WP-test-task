<?php
get_header();

$arrItems = [
	[
		'title' => 'Kayaks',
		'pic'   => '/wp-content/uploads/2022/03/Kayak-Category-600x324.png',
	],
	[
		'title' => 'Marine',
		'pic'   => '/wp-content/uploads/2022/03/Marine-Category-600x324.png',
	],
	[
		'title' => 'Jetsurf',
		'pic'   => '/wp-content/uploads/2022/03/Jetsurf-Category-600x324.png',
	],
	[
		'title' => 'Racks',
		'pic'   => '/wp-content/uploads/2022/03/Racks-Category-600x324.png'
	],
];
?>
<div class="container home-categories">
    <div class="row">
		<?php
		for ( $i = 0; $i < count( $arrItems ); $i ++ ) {
			?>
            <div class="col-12 col-lg">
                <div class="mb-5 home-categories-col"
                     style="background-image: url(<?php echo $arrItems[ $i ]['pic']; ?>)">
                    <div class="home-categories-title">
						<?php echo $arrItems[ $i ]['title']; ?>
                    </div>
                    <a class="home-categories-link">
                        Shop <?php echo $arrItems[ $i ]['title']; ?> <span class="icon icon-chevron-righ"></span>
                    </a>
                </div>
            </div>
			<?php
		}
		?>
    </div>
</div>

<div class="mt-5 position-relative home-about-us"
     style="background-image: url('/wp-content/uploads/2022/03/Homepage-About-Us-Image.png')">
    <div class="container position-absolute">
        <div class="row">
            <div class="col-lg-7"></div>
            <div class="col-lg-5">
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
                    Shop Kayaks <span class="icon icon-chevron-righ"></span>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="m-4 home-favourites-col">
                <div class="home-favourites-title">
                    Kayaks
                </div>
                <a class="home-favourites-link">
                    Shop Kayaks <span class="icon icon-chevron-righ"></span>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="m-4 home-favourites-col">
                <div class="home-favourites-title">
                    Kayaks
                </div>
                <a class="home-favourites-link">
                    Shop Kayaks <span class="icon icon-chevron-righ"></span>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="m-4 home-favourites-col">
                <div class="home-favourites-title">
                    Kayaks
                </div>
                <a class="home-favourites-link">
                    Shop Kayaks <span class="icon icon-chevron-righ"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="bg-col py-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 m-4 pt-5 home-top-categories-title">
                Keep Updated
            </div>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-4">
                <div class="m-4 home-updated-col">
                    <div class="home-updated-title">
                        Kayaks
                    </div>
                    <a class="home-updated-link">
                        Shop Kayaks <span class="icon icon-chevron-righ"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="m-4 home-updated-col">
                    <div class="home-updated-title">
                        Kayaks
                    </div>
                    <a class="home-updated-link">
                        Shop Kayaks <span class="icon icon-chevron-righ"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="m-4 home-updated-col">
                    <div class="home-updated-title">
                        Kayaks
                    </div>
                    <a class="home-updated-link">
                        Shop Kayaks <span class="icon icon-chevron-righ"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>