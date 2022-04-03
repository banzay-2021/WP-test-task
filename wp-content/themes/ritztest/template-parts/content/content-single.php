<div id="post-<?php the_ID(); ?>" class="container px-md-4 py-3">

	<div class="entry-header alignwide">
		<?php the_title( '<h1 class="mt-5 mb-3">', '</h1>' ); ?>
		<?php
         if ( is_singular() ) : ?>

        <figure class="post-thumbnail">
			<?php
			// Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
			the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
			?>
			<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
                <figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
			<?php endif; ?>
        </figure><!-- .post-thumbnail -->

		<?php else : ?>

        <figure class="post-thumbnail">
            <a class="post-thumbnail-inner alignwide" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php the_post_thumbnail( 'post-thumbnail' ); ?>
            </a>
			<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
                <figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
			<?php endif; ?>
        </figure>

		<?php endif; ?>

	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</div><!-- #post-<?php the_ID(); ?> -->