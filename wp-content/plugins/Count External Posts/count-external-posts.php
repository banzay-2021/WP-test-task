<?php
/**
 * Plugin name: Count External Posts
 * Author: Leonid Melenchuk
 * Description: A new sub-menu item to the Posts section called ‘Count External Posts’. of this test task.
 * Version: 1.0
 * License: GPL2+
 * Requires PHP: 5.6
 */

add_action( 'admin_menu', 'true_external_posts_page', 25 );
function true_external_posts_page() {

	add_submenu_page(
		'post.php',
		'Count External Posts', // тайтл страницы
		'Count External Posts', // текст ссылки в меню
		'manage_options', // права пользователя, необходимые для доступа к странице
		'true_external_posts', // ярлык страницы
		'true_external_posts_page_callback' // функция, которая выводит содержимое страницы
	);
}

function true_external_posts_page_callback() {

	echo '
	<style>
		#external-posts {
		color: red;
		}
	</style>
	<div class="wrap">
	<h1>' . get_admin_page_title() . ' for API</h1>
	<h3>' . get_admin_page_title() . ': <span id="external-posts">0</span></h3>
	<script>
		const externalPosts = document.getElementById("external-posts");
		const url = "https://jsonplaceholder.typicode.com/posts";		
		fetch(url, {
	            credentials: "omit",
	            method: "GET"
            })
			.then((response) => response.json())
			.then((json) => json.length)
			.then(function (data){
                if (typeof externalPosts.innerText !== "undefined") {
				    // IE8-
				    externalPosts.innerText = data;
				} else {
				    // Нормальные браузеры
				    externalPosts.textContent = data;
				}
			});
	</script>';
}