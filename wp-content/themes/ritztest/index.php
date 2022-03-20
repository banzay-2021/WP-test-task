<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="author" content="Leonid Melenchuk">
    <title>Ritz</title>

    <!-- CSS only -->

    <!-- Custom styles for this template -->

    <!-- Custom styles for this template -->

	<?php
	/*
	 *  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="<?=get_template_directory_uri();?>/assets/bootstrap.min.css" rel="stylesheet">
	<link href="wp-content/themes/ritztest/assets/css/bootstrap.css" rel="stylesheet">
	<link href="wp-content/themes/ritztest/assets/css/stylesheet.css" rel="stylesheet">
	<link href="wp-content/themes/ritztest/style.css" rel="stylesheet">
	*/
	?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
    <div class="wp-custom-header">
        <img src="/wp-content/uploads/2022/03/Homepage-Video.png" alt="" sizes="100vw" width="1920" height="960">
    </div>
</div>

<div class="container home-categories">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="m-4 home-categories-col"
                 style="background-image: url('/wp-content/uploads/2022/03/Kayak-Category-600x324.png')">
                <div class="home-categories-title">
                    Kayaks
                </div>
                <a class="home-categories-link">
                    Shop Kayaks <span class="icon icon-chevron-righ"></span>
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="m-4 home-categories-col"
                 style="background-image: url('/wp-content/uploads/2022/03/Marine-Category-600x324.png')">
                <div class="home-categories-title">
                    Marine
                </div>
                <a class="home-categories-link">
                    Shop Marine <span class="icon icon-chevron-righ"></span>
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="m-4 home-categories-col"
                 style="background-image: url('/wp-content/uploads/2022/03/Jetsurf-Category-600x324.png')">
                <div class="home-categories-title">
                    Jetsurf
                </div>
                <a class="home-categories-link">
                    Shop Jetsurf <span class="icon icon-chevron-righ"></span>
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="m-4 home-categories-col"
                 style="background-image: url('/wp-content/uploads/2022/03/Racks-Category-600x324.png')">
                <div class="home-categories-title">
                    Racks
                </div>
                <a class="home-categories-link">
                    Shop Racks <span class="icon icon-chevron-righ"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 position-relative home-about-as" style="background-image: url('/wp-content/uploads/2022/03/Homepage-About-Us-Image.png')">
    <div class="container position-absolute">
        <div class="row">
            <div class="col-lg-7"></div>
            <div class="col-lg-5">
                <div class="p-3 bg-white">
                    <div class="m-4 mark-bg home-about-as-mark" style="background: #F14C26">
                        About Us
                    </div>
                    <div class="m-4 home-about-as-title">
                        See What We’re All About
                    </div>
                    <p class="m-4">
                        We specialize in kayaks of all types and import several containers a year from various
                        countries. We believe we have some of the world’s top brands on sale!
                    </p>
                    <a href="#" class="btn btn-dark p-3 m-4 home-about-as-btn">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 home-top-categories-title">
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

<?php wp_footer(); ?>
</body>
</html>