<?php
/**
 * Register navigation menus uses wp_nav_menu in five places.
 *
 * @since Ritzy 1.0
 */
function ritz_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'ritz' ),
		'expanded' => __( 'Desktop Expanded Menu', 'ritz' ),
		'mobile'   => __( 'Mobile Menu', 'ritz' ),
		'footerShop'   => __( 'Shop', 'ritz' ),
		'footerServices'   => __( 'Services', 'ritz' ),
		'footerAboutUs'   => __( 'About Us', 'ritz' ),
		'footerContactUs'   => __( 'Contact Us', 'ritz' ),
		'social'   => __( 'Social Menu', 'ritz' ),
	);

	register_nav_menus( $locations );
}
add_action( 'init', 'ritz_menus' );

function load_bootstrap() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js' );


	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'stylesheet-css', get_template_directory_uri() . '/assets/css/stylesheet.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'load_bootstrap' );
