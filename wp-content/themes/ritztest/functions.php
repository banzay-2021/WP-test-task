<?php

class FooterWalkerNavMenu extends Walker_Nav_Menu {

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';
		$classes[]   = 'menu-item-' . $item->ID;
		$class_names = ' class="nav-item mb-2"';

		$output .= $indent . '<li' . $class_names . '>';

		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$attributes .= ' class="nav-link p-0 text-muted"';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'footer_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

class TopWalkerNavMenu extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="dropdown-menu">';
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

		$itemHasChildren = false;
		if ( !empty( $item->classes ) ) {
			foreach ( $item->classes as $class ) {
				if ( $class == 'menu-item-has-children' ) {
					$itemHasChildren = true;
				}
			}
		}


		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';
		$classes     = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[]   = 'menu-item-' . $item->ID;

		$class_names = ' class="nav-item';
		if ( $item->current ) {
			$class_names .= ' active';
		}
		if ($itemHasChildren) {
			$class_names .= ' parent';
		}
		$class_names .= '"';

		$output .= $indent . '<li' . $class_names . '>';

		$attributes = ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$attributes .= ' class="';
		if ( $item->menu_item_parent == '0' ) {
			$attributes .= 'nav-link color-text-white';
		} else {
			$attributes .= 'dropdown-item';
		}
		if ($itemHasChildren) {
			$attributes .= ' dropdown-toggle';
		}
		$attributes .= '"';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * Register navigation menus uses wp_nav_menu in five places.
 *
 * @since Ritzy 1.0
 */
function ritz_menus() {

	$locations = array(
		'primary'         => __( 'Desktop Horizontal Menu', 'ritz' ),
		'expanded'        => __( 'Desktop Expanded Menu', 'ritz' ),
		'mobile'          => __( 'Mobile Menu', 'ritz' ),
		'footerShop'      => __( 'Shop', 'ritz' ),
		'footerServices'  => __( 'Services', 'ritz' ),
		'footerAboutUs'   => __( 'About Us', 'ritz' ),
		'footerContactUs' => __( 'Contact Us', 'ritz' ),
		'social'          => __( 'Social Menu', 'ritz' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'ritz_menus' );

function load_bootstrap() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js' );
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/script.js' );


	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'stylesheet-css', get_template_directory_uri() . '/assets/css/stylesheet.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'load_bootstrap' );
