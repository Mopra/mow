<article id="post-<?php the_ID(); ?>">
	<div class="post-has-image">
		<a href="<?php the_permalink(); ?>">
			<img src="<?php echo get_the_post_thumbnail_url();?>"  alt="<?php esc_html ( the_title() ) ?>">
		</a>
	</div>
	<div class="postContent">
		<a href="<?php the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
		<?php the_excerpt(); ?>
		<a class="btn" href="<?php the_permalink(); ?>">Read Article</a>
	</div>
</article>

