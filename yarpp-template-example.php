<?php 
/*
YARPP Template: Simple
Author: YARPP Team
Description: A simple example YARPP template.
*/
?>
<?php if (have_posts()):?>
<div class="related">
	<?php while (have_posts()) : the_post(); ?>
	<?php if (has_post_thumbnail()):?>
	<div>
		<a href="<?php the_permalink() ?>">
			<img width="260" height="169" src="<?php echo get_the_post_thumbnail_url();?>"  alt="<?php esc_html ( the_title() ) ?>">
		</a>
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?><!-- (<?php the_score(); ?>)--></a>
		<a href="<?php the_permalink() ?>" class="btn">Read Article</a>
	</div>
	<?php endif; ?>
	<?php endwhile; ?>
</div>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
