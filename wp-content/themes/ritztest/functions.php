<?php

function load_bootstrap() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js' );


	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'stylesheet-css', get_template_directory_uri() . '/assets/css/stylesheet.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'load_bootstrap' );
