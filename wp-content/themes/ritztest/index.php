<?php
get_header();
if ( is_home() ) {
	get_template_part( 'inc/layout/home-section-categories' );
	get_template_part( 'inc/layout/home-about-us' );
	get_template_part( 'inc/layout/home-our-favourites' );
	get_template_part( 'inc/layout/home-keep-updated' );
} else {

}
get_footer();
?>
