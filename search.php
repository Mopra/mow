<?php get_header(); ?>

<?php get_template_part( 'blocks/header' ); ?>

<div class="archive">

    <h2><?php printf( __( 'Search Results for: %s', 'slate' ), '<span>' . get_search_query() . '</span>'); ?></h2>

  	<?php if ( have_posts() ) : ?>

      <div class="posts">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'blocks/content', get_post_type() ); ?>
        <?php endwhile; ?>
      </div>

      <div class="pagination">
    		  <?php get_template_part( 'blocks/custom-pager' ); ?>
      </div>

  		<?php else : ?>
  		<?php get_template_part( 'blocks/not_found' ); ?>
  	<?php endif; ?>

</div>

<div class="spacer"></div>

<?php get_footer(); ?>
