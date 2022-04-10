<?php get_header(); ?>
    <div class="container px-md-4 py-5">
        <h1><?php the_title(); ?></h1>
        <div class="row pt-5">
            <div class="col-12 col-md-6 post-img mb-3">
				<?php the_post_thumbnail(); ?>
            </div>
            <div class="col-12 col-md-6">
				<?php the_content(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>