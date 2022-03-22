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

<div class="container">
	<header class="blog-header py-3">
		<div class="row flex-nowrap justify-content-between align-items-center">
			<div class="col-4 pt-1">
				<a class="link-secondary" href="#">Subscribe</a>
			</div>
			<div class="col-4 text-center">
				<a class="blog-header-logo text-dark" href="#">Large</a>
			</div>
			<div class="col-4 d-flex justify-content-end align-items-center">
				<a class="link-secondary" href="#" aria-label="Search">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
				</a>
				<a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
			</div>
		</div>
	</header>

	<div class="nav-scroller py-1 mb-2">
		<nav class="nav d-flex justify-content-between">
			<a class="p-2 link-secondary" href="#">World</a>
			<a class="p-2 link-secondary" href="#">U.S.</a>
			<a class="p-2 link-secondary" href="#">Technology</a>
			<a class="p-2 link-secondary" href="#">Design</a>
			<a class="p-2 link-secondary" href="#">Culture</a>
			<a class="p-2 link-secondary" href="#">Business</a>
			<a class="p-2 link-secondary" href="#">Politics</a>
			<a class="p-2 link-secondary" href="#">Opinion</a>
			<a class="p-2 link-secondary" href="#">Science</a>
			<a class="p-2 link-secondary" href="#">Health</a>
			<a class="p-2 link-secondary" href="#">Style</a>
			<a class="p-2 link-secondary" href="#">Travel</a>
		</nav>
	</div>
</div>

	*/
	?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
    $hasFooterShop = has_nav_menu( 'footerShop' );
?>
<div class="header position-relative">
    <div class="position-fixed py-4 w-100 zi-1">
        <div class="container">
            <div class="row">
                <div class="d-flex align-items-center logo-top ps-4 ms-2">
                    <a href="/" class="d-flex link-dark text-decoration-none">
                        <img class="logo" width="98" height="48"
                             src="<?= get_template_directory_uri(); ?>/assets/images/Ritz_Logo_Light.svg">
                    </a>
                </div>

                <nav class="d-flex align-items-center col-6 col-lg-6 navbar-expand-lg navbar-header">

                    <?php if ( $hasFooterShop ) { ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">

	                            <?php
	                            wp_nav_menu(
		                            array(
			                            'container'      => '',
			                            'depth'          => 2,
			                            'items_wrap'     => '%3$s',
			                            'theme_location' => 'footerShop',
			                            'walker'         => new TopWalkerNavMenu(),
		                            )
	                            );
	                            ?>
                            </ul>
                        </div>
                    <?php } ?>
                </nav>

                <div class="d-flex align-items-center col-4 col-lg-4 ps-4">

                </div>
            </div>
        </div>
    </div>
    <div class="wp-custom-header position-relative">
        <div class="position-absolute header-text-body">
            <div class="header-text-mark">
                LET THE ADVENTURE BEGIN
            </div>
            <div class="">
                Malta's Largest dedicated Kayak and SUP store
            </div>
        </div>
        <img src="/wp-content/uploads/2022/03/Homepage-Video.png" alt="" sizes="100vw" width="1920" height="960">
    </div>
</div>