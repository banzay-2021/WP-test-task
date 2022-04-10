<?php get_header(); ?>
    <div class="container px-md-4 py-5">
        <h1>Search by: "<?php echo strip_tags($_GET['s']); ?>"</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container py-2">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php the_content(''); ?>
            </div>
		<?php endwhile; else: ?>
            <p>The search has not given any results.</p>
		<?php endif; ?>
    </div>
<?php get_footer(); ?>