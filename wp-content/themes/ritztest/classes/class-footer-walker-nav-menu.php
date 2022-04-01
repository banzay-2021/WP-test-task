<?php
/**
 * Customizer Footer Menu.
 *
 * @package WordPress
 * @subpackage Ritz
 * @since Ritz 1.0
 */
if ( ! class_exists( 'FooterWalkerNavMenu' ) ) {

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
}