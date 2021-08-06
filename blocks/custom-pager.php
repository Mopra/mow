<?php if ( have_posts() ) : ?>

<!-- Add the pagination functions here. -->

<!-- Start of the main loop. -->
<?php while ( have_posts() ) : the_post();  ?>

<!-- the rest of your theme's main loop -->

<?php endwhile; ?>
<!-- End of the main loop -->

<!-- Add the pagination functions here. -->



<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'posts_per_page' => 3,
  'paged'          => $paged
);

$the_query = new WP_Query( $args );

the_posts_pagination( array(
	'mid_size'  => 2,
	'prev_text' => __( '<span uk-pagination-previous></span>', 'textdomain' ),
	'next_text' => __( '<span uk-pagination-next></span>', 'textdomain' ),
) );
?>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
