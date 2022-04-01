<div id="top-menu" class="position-fixed py-2 w-100 zi-2">
    <div class="container px-md-4">
        <div class="row">
			<?php
			if ( is_home() ) {
				get_template_part( 'template-parts/home-top-menu' );
			} else {
				get_template_part( 'template-parts/other-top-menu' );
			}
			?>
        </div>
    </div>
</div>
<?php
if ( is_home() ) {
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
        <div class="position-absolute header-social-body">
            <div class="">
                <a class="mx-3" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook-light"></use>
                    </svg>
                </a>
                <a class="" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram-light"></use>
                    </svg>
                </a>
            </div>
        </div>
        <img class="home-top-pic" src="/wp-content/uploads/2022/03/Homepage-Video.png" alt="" sizes="100vw" width="1920"
             height="960">
    </div>
	<?php
}
?>