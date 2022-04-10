<?php
get_header();

while (have_posts()) :
	the_post();
	if (is_woocommerce()) {
		get_template_part('template-parts/content/content-single-woocommerce');
	} else {
		get_template_part('template-parts/content/content-page');
	}
endwhile; // End of the loop.

get_footer();
?>