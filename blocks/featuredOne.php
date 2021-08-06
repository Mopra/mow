<li>
  <a href="<?php the_permalink(); ?>">
    <img src="<?php echo get_the_post_thumbnail_url();?>"  alt="<?php esc_html ( the_title() ) ?>">
  </a>
  <div class="postContent">
    <a href="<?php the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
    <a class="btn" href="<?php the_permalink(); ?>">Read Article</a>
  </div>
</li>
