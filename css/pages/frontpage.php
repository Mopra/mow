<?php
/*
Template Name: frontpage
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'blocks/header' ); ?>
  

  	<?php if ( have_posts() ) : ?>

      <div class="postWall">

        <div class="featuredOne">
          <ul>
            <?php
              $query = new WP_Query( 'posts_per_page=2&tag=featuredOne&orderby=rand' );
              // The Loop
              while ( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'blocks/featuredOne', get_post_type() );
              }
              wp_reset_postdata();
            ?>
          </ul>
        </div>

        <div class="categories">
            <a href="/category/google-nest/"><h3>Google Nest</h3></a>
            <a href="/category/robot-vacuums/"><h3>Robot Vacuums</h3></a>
            <a href="/category/electric-cars/"><h3>EVs</h3></a>
            <a href="/category/smart-home/"><h3>Smart Home</h3></a>
        </div>

        <div class="featuredTwo">
          <ul>
            <?php
              $query = new WP_Query( 'posts_per_page=3&tag=featuredTwo&orderby=rand' );
              // The Loop
              while ( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'blocks/featuredTwo', get_post_type() );
              }
              wp_reset_postdata();
            ?>
          </ul>
        </div>

        <div class="posts">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'blocks/content', get_post_type() ); ?>
          <?php endwhile; ?>
        </div>

      </div>

      <div class="pagination"><?php get_template_part( 'blocks/custom-pager' ); ?></div>

<style>
	
	.postPage {
		padding: 5rem 0 10rem 0;
		width:100%;
		max-width:820px;
	}
	
</style>
<div class="postPage">
    <div class="mainContent">
        <div class="postPageContent">
            <?php the_content(); ?>
        </div>
    </div>
</div>
  		<?php else : ?>
  		<?php get_template_part( 'blocks/not_found' ); ?>

  	<?php endif; ?>

  

<?php get_footer(); ?>