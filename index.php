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
			<?php 

				while ( have_rows('category_section_flexible', 'options') ) : the_row();
					if ( get_row_layout() == 'category_section_group' ) :

						$title = get_sub_field('title');
						$url = get_sub_field('url');
						$img = get_sub_field('img');
						?>

						<a href="<?php echo $url; ?>" style="background-image:url('<?php echo $img; ?>');">
							<h3>
								<?php echo $title; ?>asd
							</h3>
						</a>

						<?php
					endif;
				endwhile;

			?>
		</div>
			
        <!--<div class="categories">
            <a href="/category/google-nest/"><h3>Google Nest</h3></a>
            <a href="/category/robot-vacuums/"><h3>Robot Vacuums</h3></a>
            <a href="/category/electric-cars/"><h3>EVs</h3></a>
            <a href="/category/smart-home/"><h3>Smart Home</h3></a>
        </div>-->

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

	<div class="postPage index">
		<div class="mainContent">
				<div class="postPageContent">
					
					<?php 
						$fpc = get_field( 'frontpage_content', 'options' );
						if ($fpc):
							echo $fpc;
						endif;
					?>

				</div>
		</div>
	</div>

	<?php else : ?>
	<?php get_template_part( 'blocks/not_found' ); ?>

  	<?php endif; ?>

  

<?php get_footer(); ?>
