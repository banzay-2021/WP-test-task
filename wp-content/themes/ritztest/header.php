<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?php wp_title('|', true, 'right'); ?></title>
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

<div class="container-fluid p-0 header position-relative">
	<?php
	get_template_part('template-parts/home-header');
	?>
</div>