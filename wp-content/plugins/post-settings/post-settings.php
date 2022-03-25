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
		'Post Settings', // тайтл страницы
		'Post Settings', // текст ссылки в меню
		'manage_options', // права пользователя, необходимые для доступа к странице
		'true_post_sett', // ярлык страницы
		'true_post_settings_page_callback', // функция, которая выводит содержимое страницы
		'dashicons-admin-settings', // иконка, в данном случае из Dashicons
		5 // позиция в меню
	);
}

function true_post_settings_page_callback() {
	echo '<div class="wrap">
	<h1>' . get_admin_page_title() . '</h1>
	<h3>' . get_admin_page_title() . '</h3>
	<form method="post" action="options.php">';

	settings_fields( 'true_post_sett_settings' ); // название настроек
	do_settings_sections( 'true_post_sett' ); // ярлык страницы, не более
	submit_button(); // функция для вывода кнопки сохранения

	echo '</form></div>';
}

add_action( 'admin_init', 'true_post_sett_fields' );

function true_post_sett_fields() {

	// for Enter Jounals(Posts) Count
	register_setting(
		'true_post_sett_settings', // название настроек из предыдущего шага
		'jounals_count_number_of_post_sett', // ярлык опции
		'absint' // функция очистки
	);
	// for Enter Projects Count
	register_setting(
		'true_post_sett_settings', // название настроек из предыдущего шага
		'projects_count_number_of_post_sett', // ярлык опции
		'absint' // функция очистки
	);

	// добавляем секцию без заголовка
	add_settings_section(
		'jounals_count_post_sett_settings_section_id', // ID секции, пригодится ниже
		'', // заголовок (не обязательно)
		'', // функция для вывода HTML секции (необязательно)
		'true_post_sett' // ярлык страницы
	);
	// Enter Projects Count - projects_count
	add_settings_section(
		'projects_count_post_sett_settings_section_id', // ID секции, пригодится ниже
		'', // заголовок (не обязательно)
		'', // функция для вывода HTML секции (необязательно)
		'true_post_sett' // ярлык страницы
	);

	// добавление поля
	add_settings_field(
		'jounals_count_number_of_post_sett',
		'Enter Jounals(Posts) Count',
		'true_number_field', // название функции для вывода
		'true_post_sett', // ярлык страницы
		'projects_count_post_sett_settings_section_id', // // ID секции, куда добавляем опцию
		array(
			'label_for' => 'jounals_count_number_of_post_sett',
			'class'     => 'post-sett-class', // для элемента <tr>
			'name'      => 'jounals_count_number_of_post_sett', // любые доп параметры в колбэк функцию
		)
	);
	add_settings_field(
		'projects_count_number_of_post_sett',
		'Enter Projects Count',
		'true_projects_count_number_field', // название функции для вывода
		'true_post_sett', // ярлык страницы
		'projects_count_post_sett_settings_section_id', // ID секции, куда добавляем опцию
		array(
			'label_for' => 'projects_count_number_of_post_sett',
			'class'     => 'post-sett-class', // для элемента <tr>
			'name'      => 'projects_count_number_of_post_sett', // любые доп параметры в колбэк функцию
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
	// получаем значение из базы данных
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