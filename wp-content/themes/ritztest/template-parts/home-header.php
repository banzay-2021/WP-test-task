<?php
$isHome        = is_home() ? 'home-page' : 'not-home-page';
$hasFooterShop = has_nav_menu('footerShop');
?>
    <div id="top-menu" class="position-fixed py-2 w-100 zi-200 <?= $isHome; ?>">
        <div class="container px-md-4">
            <div class="row">
                <nav class="navbar navbar-expand-lg <?= is_home() ? 'navbar-dark' : 'navbar-light'; ?>">
                    <div class="container w-100 p-0">
                        <a href="/" class="navbar-brand">
                            <img class="logo" width="98" height="48"
                                 src="<?= get_template_directory_uri(); ?>/assets/images/Ritz_Logo_<?= is_home() ? 'Light' : 'Dark'; ?>.svg">
                        </a>
						<?php if ($hasFooterShop) { ?>
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
                                    <div class="top-search color-text-<?= is_home() ? 'white' : 'black'; ?>"
                                         data-bs-toggle="modal" data-bs-target="#search-modal">
                                        <i class="bi bi-search"></i>
                                    </div>
                            </div>
                            <div class="top-person color-text-<?= is_home() ? 'white' : 'black'; ?>">
                                <i class="bi bi-person"></i>
                            </div>
                            <div class="top-cart color-text-<?= is_home() ? 'white' : 'black'; ?>">
                                <i class="bi bi-cart3"></i>
                                <div class="count-items">2</div>
                            </div>
						<?php } ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<?php
$linkFacebook  = '#';
$linkInstagram = '#';

if (is_home()) {
	?>
    <div class="wp-custom-header position-relative">
        <div class="position-absolute header-text-body">
            <div class="header-text-mark">
                LET THE ADVENTURE BEGIN
            </div>
            <div class="">
                Malta's Largest dedicated Kayak and SUP store
            </div>
        </div>
        <div class="position-absolute w-100 header-social-body">
            <div class="container px-md-4">
                <div class="row">
                    <div class="col-12">
                        <a class="" href="<?= $linkFacebook; ?>">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook-light"></use>
                            </svg>
                        </a>
                        <a class="mx-3" href="<?= $linkInstagram; ?>">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram-light"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img class="home-top-pic" src="/wp-content/uploads/2022/03/Homepage-Video.png" alt="" sizes="100vw" width="1920"
             height="960">
    </div>
	<?php
} else {
	?>
    <div class="position-relative py-5"></div>
	<?php
}
?>