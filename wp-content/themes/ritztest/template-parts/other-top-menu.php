<?php
$hasFooterShop = has_nav_menu( 'footerShop' );
?>

<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container w-100 p-0">
		<a href="/" class="navbar-brand">
			<img class="logo" width="98" height="48"
			     src="<?= get_template_directory_uri(); ?>/assets/images/Ritz_Logo_Dark.svg">
		</a>
		<?php if ( $hasFooterShop ) { ?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
			        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			        aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-header">
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
				<form class="d-flex">

					<!--                                    <input class="form-control me-2" type="search" placeholder="Search"-->
					<!--                                           aria-label="Search">-->
					<!--                                    <button class="btn btn-outline-success" type="submit">Search</button>-->
					<div class="top-search color-text-black">
						<i class="bi bi-search"></i>
					</div>
					<div class="top-person color-text-black">
						<i class="bi bi-person"></i>
					</div>
					<div class="top-cart color-text-black">
						<i class="bi bi-cart3"></i>
						<div class="count-items">2</div>
					</div>
				</form>
			</div>
		<?php } ?>
	</div>
</nav>