<?php

$arrFooterMenus = [
	[
		'theme_location' => 'footerShop',
		'hasFooterMenu'  => has_nav_menu( 'footerShop' )
	],
	[
		'theme_location' => 'footerServices',
		'hasFooterMenu'  => has_nav_menu( 'footerServices' )
	],
	[
		'theme_location' => 'footerAboutUs',
		'hasFooterMenu'  => has_nav_menu( 'footerAboutUs' )
	],
	[
		'theme_location' => 'footerContactUs',
		'hasFooterMenu'  => has_nav_menu( 'footerContactUs' )
	],
];
?>
<footer class="bg-col pt-5 mt-5 color-text-ritz">
    <div class="container pt-5 ps-md-4">
        <div class="row my-5">
            <div class="col-12 col-lg-4 mb-4 inline">
                <a href="/" class="align-items-center mb-3 px-md-2 link-dark text-decoration-none">
                    <img class="logo" width="98" height="48"
                         src="<?= get_template_directory_uri(); ?>/assets/images/Ritz_Logo_Dark.svg">
                </a>
            </div>
			<?php
			foreach ( $arrFooterMenus as $item ) {
				if ( $item['hasFooterMenu'] ) { ?>
                    <div class="col-6 col-md ps-md-4 mb-4">
                        <h5><?= wp_get_nav_menu_name( $item['theme_location'] ) ?></h5>
                        <ul class="nav flex-column opacity-60">
							<?php
							wp_nav_menu(
								array(
									'container'      => '',
									'depth'          => 1,
									'items_wrap'     => '%3$s',
									'theme_location' => $item['theme_location'],
									'walker'         => new FooterWalkerNavMenu(),
								)
							);
							?>
                        </ul>
                    </div>
					<?php
				}
			}
			?>

            <div class="col-6 col-md ps-md-4 mb-4">
                <h5>Contact Us</h5>
                <ul class="nav flex-column opacity-60">
                    <li class="nav-item mb-2">
                        <span href="#" class="nav-link p-0 text-muted">Malta: +356 7932 2092</span>
                    </li>
                    <li class="nav-item mb-2">
                        <span href="#" class="nav-link p-0 text-muted">Gozo: +356 7941 7177</span>
                    </li>
                    <li class="nav-item mb-2">
                        <span href="#" class="nav-link p-0 text-muted">info@ritzkayaks.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="facebook-dark" viewBox="0 0 24 24" width="24px" height="24px">
            <g id="facebook-dark" fill="#000000" fill-rule="nonzero">
                <path d="m17.738043,8.714709l-3.843535,0l0,-2.190217c0,-1.130152 0.091591,-1.841972 1.70424,-1.841972l2.036801,0l0,-3.482445c-0.991141,-0.10294 -1.987734,-0.153315 -2.985418,-0.151125c-2.958159,0 -5.11708,1.814595 -5.11708,5.145914l0,2.519844l-3.271093,0l0,4.380433l3.271093,-0.001095l0,9.85707l4.361458,0l0,-9.85926l3.343057,-0.001095l0.500477,-4.376053z"
            </g>
        </symbol>
        <symbol id="facebook-light" viewBox="0 0 24 24" width="24px" height="24px">
            <g id="facebook-light" fill="#FFFFFF" fill-rule="nonzero">
                <path d="m17.738043,8.714709l-3.843535,0l0,-2.190217c0,-1.130152 0.091591,-1.841972 1.70424,-1.841972l2.036801,0l0,-3.482445c-0.991141,-0.10294 -1.987734,-0.153315 -2.985418,-0.151125c-2.958159,0 -5.11708,1.814595 -5.11708,5.145914l0,2.519844l-3.271093,0l0,4.380433l3.271093,-0.001095l0,9.85707l4.361458,0l0,-9.85926l3.343057,-0.001095l0.500477,-4.376053z"
            </g>
        </symbol>
        <symbol id="instagram-dark" viewBox="0 0 24 24" width="24px" height="24px">
            <g id="instagram-dark" fill="#000000" fill-rule="nonzero">
                <path d="m12,0.20756c-3.234196,0 -3.640891,0.014741 -4.911628,0.070755c-1.270737,0.058962 -2.136268,0.256486 -2.894538,0.548348a5.835258,5.773874 0 0 0 -2.110942,1.360553a5.850155,5.788614 0 0 0 -1.375017,2.088736c-0.294966,0.74882 -0.496079,1.60672 -0.554178,2.859667c-0.05661,1.260317 -0.071507,1.66126 -0.071507,4.865856c0,3.201648 0.014897,3.602591 0.071507,4.85996c0.059589,1.255895 0.259212,2.112321 0.554178,2.862615c0.305394,0.775353 0.712089,1.432782 1.375017,2.088736c0.661438,0.655954 1.325856,1.059846 2.109452,1.360553c0.75976,0.291863 1.623802,0.49086 2.893048,0.548348c1.272226,0.056014 1.677432,0.070755 4.914607,0.070755s3.640891,-0.014741 4.913117,-0.070755c1.267757,-0.058962 2.136268,-0.256486 2.894538,-0.548348a5.833768,5.7724 0 0 0 2.109452,-1.360553c0.662928,-0.655954 1.069623,-1.313383 1.375017,-2.088736c0.293476,-0.750294 0.494589,-1.60672 0.554178,-2.862615c0.05661,-1.257369 0.071507,-1.658312 0.071507,-4.861434s-0.014897,-3.604065 -0.071507,-4.862908c-0.059589,-1.254421 -0.260702,-2.112321 -0.554178,-2.861141a5.848665,5.78714 0 0 0 -1.375017,-2.088736a5.82632,5.765029 0 0 0 -2.110942,-1.360553c-0.75976,-0.291863 -1.626781,-0.49086 -2.894538,-0.548348c-1.272226,-0.056014 -1.675942,-0.070755 -4.914607,-0.070755l0.004469,0l-0.00149,0zm-1.066644,2.125587l1.069623,0c3.182055,0 3.558956,0.010318 4.814795,0.067807c1.161987,0.051592 1.79363,0.244693 2.213733,0.405365c0.555668,0.213738 0.953425,0.470224 1.370548,0.882959c0.417123,0.412735 0.674846,0.804834 0.890856,1.356131c0.16387,0.414209 0.357534,1.039209 0.409675,2.188972c0.058099,1.242628 0.070017,1.615564 0.070017,4.762672s-0.011918,3.521518 -0.070017,4.764146c-0.05214,1.149763 -0.247295,1.773288 -0.409675,2.188972a3.679624,3.640916 0 0 1 -0.892346,1.354657c-0.417123,0.412735 -0.813391,0.667747 -1.370548,0.881485c-0.417123,0.162146 -1.048767,0.353773 -2.212244,0.406839c-1.255839,0.056014 -1.63274,0.069281 -4.814795,0.069281s-3.560446,-0.013266 -4.816285,-0.069281c-1.161987,-0.053066 -1.792141,-0.244693 -2.212244,-0.406839a3.691542,3.652708 0 0 1 -1.370548,-0.881485a3.694521,3.655657 0 0 1 -0.893836,-1.356131c-0.16238,-0.414209 -0.357534,-1.039209 -0.409675,-2.188972c-0.05661,-1.242628 -0.068527,-1.615564 -0.068527,-4.76562c0,-3.148582 0.011918,-3.520043 0.068527,-4.762672c0.05363,-1.149763 0.247295,-1.774762 0.411164,-2.190446c0.21601,-0.549823 0.475223,-0.943395 0.892346,-1.356131c0.417123,-0.412735 0.813391,-0.667747 1.370548,-0.881485c0.420103,-0.162146 1.050257,-0.353773 2.212244,-0.406839c1.099418,-0.050118 1.52548,-0.064858 3.746662,-0.066332l0,0.002948zm7.430755,1.957545a1.430137,1.415093 0 1 0 0,2.830186a1.430137,1.415093 0 0 0 0,-2.830186zm-6.361131,1.65389a6.121285,6.056892 0 1 0 0,12.11231a6.121285,6.056892 0 0 0 0,-12.11231zm0,2.124113a3.9731,3.931305 0 1 1 0,7.86261a3.9731,3.931305 0 0 1 0,-7.86261z"/>
            </g>
        </symbol>
        <symbol id="instagram-light" viewBox="0 0 24 24" width="24px" height="24px">
            <g id="instagram-light" fill="#FFFFFF" fill-rule="nonzero">
                <path d="m12,0.20756c-3.234196,0 -3.640891,0.014741 -4.911628,0.070755c-1.270737,0.058962 -2.136268,0.256486 -2.894538,0.548348a5.835258,5.773874 0 0 0 -2.110942,1.360553a5.850155,5.788614 0 0 0 -1.375017,2.088736c-0.294966,0.74882 -0.496079,1.60672 -0.554178,2.859667c-0.05661,1.260317 -0.071507,1.66126 -0.071507,4.865856c0,3.201648 0.014897,3.602591 0.071507,4.85996c0.059589,1.255895 0.259212,2.112321 0.554178,2.862615c0.305394,0.775353 0.712089,1.432782 1.375017,2.088736c0.661438,0.655954 1.325856,1.059846 2.109452,1.360553c0.75976,0.291863 1.623802,0.49086 2.893048,0.548348c1.272226,0.056014 1.677432,0.070755 4.914607,0.070755s3.640891,-0.014741 4.913117,-0.070755c1.267757,-0.058962 2.136268,-0.256486 2.894538,-0.548348a5.833768,5.7724 0 0 0 2.109452,-1.360553c0.662928,-0.655954 1.069623,-1.313383 1.375017,-2.088736c0.293476,-0.750294 0.494589,-1.60672 0.554178,-2.862615c0.05661,-1.257369 0.071507,-1.658312 0.071507,-4.861434s-0.014897,-3.604065 -0.071507,-4.862908c-0.059589,-1.254421 -0.260702,-2.112321 -0.554178,-2.861141a5.848665,5.78714 0 0 0 -1.375017,-2.088736a5.82632,5.765029 0 0 0 -2.110942,-1.360553c-0.75976,-0.291863 -1.626781,-0.49086 -2.894538,-0.548348c-1.272226,-0.056014 -1.675942,-0.070755 -4.914607,-0.070755l0.004469,0l-0.00149,0zm-1.066644,2.125587l1.069623,0c3.182055,0 3.558956,0.010318 4.814795,0.067807c1.161987,0.051592 1.79363,0.244693 2.213733,0.405365c0.555668,0.213738 0.953425,0.470224 1.370548,0.882959c0.417123,0.412735 0.674846,0.804834 0.890856,1.356131c0.16387,0.414209 0.357534,1.039209 0.409675,2.188972c0.058099,1.242628 0.070017,1.615564 0.070017,4.762672s-0.011918,3.521518 -0.070017,4.764146c-0.05214,1.149763 -0.247295,1.773288 -0.409675,2.188972a3.679624,3.640916 0 0 1 -0.892346,1.354657c-0.417123,0.412735 -0.813391,0.667747 -1.370548,0.881485c-0.417123,0.162146 -1.048767,0.353773 -2.212244,0.406839c-1.255839,0.056014 -1.63274,0.069281 -4.814795,0.069281s-3.560446,-0.013266 -4.816285,-0.069281c-1.161987,-0.053066 -1.792141,-0.244693 -2.212244,-0.406839a3.691542,3.652708 0 0 1 -1.370548,-0.881485a3.694521,3.655657 0 0 1 -0.893836,-1.356131c-0.16238,-0.414209 -0.357534,-1.039209 -0.409675,-2.188972c-0.05661,-1.242628 -0.068527,-1.615564 -0.068527,-4.76562c0,-3.148582 0.011918,-3.520043 0.068527,-4.762672c0.05363,-1.149763 0.247295,-1.774762 0.411164,-2.190446c0.21601,-0.549823 0.475223,-0.943395 0.892346,-1.356131c0.417123,-0.412735 0.813391,-0.667747 1.370548,-0.881485c0.420103,-0.162146 1.050257,-0.353773 2.212244,-0.406839c1.099418,-0.050118 1.52548,-0.064858 3.746662,-0.066332l0,0.002948zm7.430755,1.957545a1.430137,1.415093 0 1 0 0,2.830186a1.430137,1.415093 0 0 0 0,-2.830186zm-6.361131,1.65389a6.121285,6.056892 0 1 0 0,12.11231a6.121285,6.056892 0 0 0 0,-12.11231zm0,2.124113a3.9731,3.931305 0 1 1 0,7.86261a3.9731,3.931305 0 0 1 0,-7.86261z"/>
            </g>
        </symbol>
    </svg>
    <div class="footer-block-sec">
        <div class="container ps-md-4">
            <div class="row">
                <div class="d-flex justify-content-between ps-4 py-3">
                    <div class="opacity-60">
                        ©2022 Ritz Kayaks Marine
                        <a class="link-dark mx-3" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook-dark"></use>
                            </svg>
                        </a>
                        <a class="link-dark" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram-dark"></use>
                            </svg>
                        </a>
                    </div>
                    <ul class="list-unstyled d-flex m-0 ps-md-4">
                        <li class="opacity-80">
                            Designed and Developed by
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>