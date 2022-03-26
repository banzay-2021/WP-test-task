<?php
/**
 * Plugin name: Post Settings
 * Author: Leonid Melenchuk
 * Description: Post Settings of this test task.
 * Version: 1.0
 * License: GPL2+
 * Requires PHP: 5.6
 */

add_action( 'admin_menu', 'true_top_menu_page_post_sett', 25 );

function true_top_menu_page_post_sett() {

	add_menu_page(
		'Post Settings', // page title
		'Post Settings', // menu link text
		'manage_options', // user rights required to access the page
		'true_post_sett', // page shortcut
		'true_post_settings_page_callback', // a function that displays the content of the page
		'dashicons-admin-settings', // icon, in this case from Dashicons
		5 // menu position
	);
}

function true_post_settings_page_callback() {
	echo '<div class="wrap">
	<h1>' . get_admin_page_title() . '</h1>
	<h3>' . get_admin_page_title() . '</h3>
	<form method="post" action="options.php">';

	settings_fields( 'true_post_sett_settings' ); // setting name
	do_settings_sections( 'true_post_sett' ); // page label, no more
	submit_button(); // function to display the save button

	echo '</form></div>';
}

add_action( 'admin_init', 'true_post_sett_fields' );

function true_post_sett_fields() {

	// for Enter Jounals(Posts) Count
	register_setting(
		'true_post_sett_settings', // the name of the settings from the previous step
		'jounals_count_number_of_post_sett', // option label
		'absint' // cleaning function
	);
	// for Enter Projects Count
	register_setting(
		'true_post_sett_settings', // the name of the settings from the previous step
		'projects_count_number_of_post_sett', // option label
		'absint' // cleaning function
	);

	// add section without heading
	add_settings_section(
		'jounals_count_post_sett_settings_section_id', // Section ID, useful below
		'', // title (optional)
		'', // function to output HTML section (optional)
		'true_post_sett' // page shortcut
	);
	// Enter Projects Count - projects_count
	add_settings_section(
		'projects_count_post_sett_settings_section_id', // Section ID, useful below
		'', // title (optional)
		'', // function to output HTML section (optional)
		'true_post_sett' // page shortcut
	);

	// добавление поля
	add_settings_field(
		'jounals_count_number_of_post_sett',
		'Enter Jounals(Posts) Count',
		'true_number_field', // function name to output
		'true_post_sett', // page shortcut
		'projects_count_post_sett_settings_section_id', // ID of the section where we add the option
		array(
			'label_for' => 'jounals_count_number_of_post_sett',
			'class'     => 'post-sett-class', // for the <tr> element
			'name'      => 'jounals_count_number_of_post_sett', // any additional parameters to the callback function
		)
	);
	add_settings_field(
		'projects_count_number_of_post_sett',
		'Enter Projects Count',
		'true_projects_count_number_field', // function name to output
		'true_post_sett', // page shortcut
		'projects_count_post_sett_settings_section_id', // ID of the section where we add the option
		array(
			'label_for' => 'projects_count_number_of_post_sett',
			'class'     => 'post-sett-class', // for the <tr> element
			'name'      => 'projects_count_number_of_post_sett', // any additional parameters to the callback function
		)
	);
}

function true_number_field( $args ) {
	// получаем значение из базы данных
	$value = get_option( $args['name'] );

	printf(
		'<input type="number" min="1" id="%s" name="%s" value="%d" />',
		esc_attr( $args['name'] ),
		esc_attr( $args['name'] ),
		absint( $value )
	);
}

function true_projects_count_number_field( $args ) {
	// get value from database
	$value = get_option( $args['name'] );

	printf(
		'<input type="number" min="1" id="%s" name="%s" value="%d" />',
		esc_attr( $args['name'] ),
		esc_attr( $args['name'] ),
		absint( $value )
	);
}

add_action( 'admin_notices', 'true_post_sett_notice' );

function true_post_sett_notice() {

	if (
		isset( $_GET['page'] )
		&& 'true_post_sett' == $_GET['page']
		&& isset( $_GET['settings-updated'] )
		&& true == $_GET['settings-updated']
	) {
		echo '<div class="notice notice-success is-dismissible"><p>Settings data saved!</p></div>';
	}

}