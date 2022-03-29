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
		$output .= '<ul class="dropdown-menu"  aria-labelledby="navbarDropdown">';
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
			$class_names .= ' parent dropdown';
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
		$attributesDropdown = '';
		if ($itemHasChildren) {
			$attributes .= ' dropdown-toggle';
			$attributesDropdown .= ' id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"';
		}
		$attributes .= '"' . $attributesDropdown;

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
	wp_enqueue_style( 'bootstrap-icons-css', get_template_directory_uri() . '/assets/css/bootstrap-icons.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'load_bootstrap' );

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_623ce778c1a22',
		'title' => 'Color Mark',
		'fields' => array(
			array(
				'key' => 'field_623ce8e31e79a',
				'label' => 'Color Mark',
				'name' => 'color_mark',
				'type' => 'text',
				'instructions' => 'Marker color for Post Category
bg-red, bg-blue, bg-solid, bg-black',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => 10,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_category',
					'operator' => '==',
					'value' => 'category:ritz',
				),
			),
			array(
				array(
					'param' => 'post_category',
					'operator' => '==',
					'value' => 'category:kayaks',
				),
			),
			array(
				array(
					'param' => 'post_category',
					'operator' => '==',
					'value' => 'category:marine',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'discussion',
			1 => 'comments',
			2 => 'slug',
			3 => 'author',
			4 => 'featured_image',
		),
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

	acf_add_local_field_group(array(
		'key' => 'group_62430d0ecd673',
		'title' => 'Our Favourites',
		'fields' => array(
			array(
				'key' => 'field_6243538f74e6e',
				'label' => 'Status New',
				'name' => 'status_new',
				'type' => 'text',
				'instructions' => '0 - old product
1- NEW product',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62430e668a764',
				'label' => 'Show at Our Favourites',
				'name' => 'show_at_our_favourites',
				'type' => 'text',
				'instructions' => '0 - product NO show at section Our Favourites
1 - product show at section Our Favourites',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62435dac2f64f',
				'label' => 'Points',
				'name' => 'points',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62435dba2f650',
				'label' => 'Product Type',
				'name' => 'product_type',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62435e3f2f651',
				'label' => 'Colour',
				'name' => 'colour',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62435e492f652',
				'label' => 'Construction',
				'name' => 'construction',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page',
					'operator' => '==',
					'value' => '6',
				),
			),
			array(
				array(
					'param' => 'post_category',
					'operator' => '==',
					'value' => 'category:keep-updated',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

endif;