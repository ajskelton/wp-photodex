<div class="photodex-entry">
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_post_thumbnail_url() ?>">
			<?php the_post_thumbnail( $thumbnail_size ); ?>
		</a>
	<?php endif; ?>
</div>
