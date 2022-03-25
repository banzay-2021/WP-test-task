<?php

/**
 * Plugin name: Developer of this test
 * Author: Leonid Melenchuk
 * Description: Developer of this test task.
 * Version: 1.0
 * License: GPL2+
 * Requires PHP: 5.6
 */

function true_change_admin_footer() {
	$footerText =
		[
			'Thank you for creating with <a href="https://wordpress.org/">WordPress</a>.',
			'Developed by Leonid Melenchuk.',
		];

	return implode( ' - ', $footerText );
}

add_filter( 'admin_footer_text', 'true_change_admin_footer' );