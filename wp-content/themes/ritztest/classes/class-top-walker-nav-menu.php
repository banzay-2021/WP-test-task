<?php
/**
 * Customizer Top Menu.
 *
 * @package WordPress
 * @subpackage Ritz
 * @since Ritz 1.0
 */

if ( ! class_exists( 'TopWalkerNavMenu' ) ) {
	class TopWalkerNavMenu extends Walker_Nav_Menu {

		function start_lvl( &$output, $depth = 0, $args = null ) {
			$output .= '<ul class="dropdown-menu"  aria-labelledby="navbarDropdown">';
		}

		function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

			$colorTextWhite = is_home() ? 'color-text-white' : 'color-text-black';

			$itemHasChildren = false;
			if ( ! empty( $item->classes ) ) {
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
			if ( $itemHasChildren ) {
				$class_names .= ' parent dropdown';
			}
			$class_names .= '"';

			$output .= $indent . '<li' . $class_names . '>';

			$attributes = ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
			$attributes .= ' class="';
			if ( $item->menu_item_parent == '0' ) {
				$attributes .= 'nav-link ' . $colorTextWhite;
			} else {
				$attributes .= 'dropdown-item';
			}
			$attributesDropdown = '';
			if ( $itemHasChildren ) {
				$attributes         .= ' dropdown-toggle';
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
}