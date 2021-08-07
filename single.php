<?php get_header(); ?>

<?php get_template_part( 'blocks/header' ); ?>



<?php while ( have_posts() ) : the_post(); ?>

<div class="postPage">

    <div class="headerContent">

      <img src="<?php echo get_the_post_thumbnail_url();?>"  alt="<?php esc_html ( the_title() ) ?>">

    </div>
    
    <?php the_category(); ?>

    <div class="mainContent">

      <div class="postPageContent">
        <?php the_title('<h1>','</h1>'); ?>
        <?php the_content(); ?>
      </div>
      
      <div class="postPageAside">
        <?php 

          if( have_rows('author', 'options') ):
            while( have_rows('author', 'options') ): the_row();

            $authorName = get_sub_field( 'author_name', 'options' );
            $authorDesc = get_sub_field( 'author_desc', 'options' );
            $authorUrl = get_sub_field( 'author_url', 'options' );
				?>

            <div>
              <h5>Author:<h5>
              <h4><?php if ($authorName): echo $authorName; endif; ?></h4>
              <p>
                <?php if ($authorDesc): echo $authorDesc; endif; ?>
              </p>
              <a href="<?php if ($authorUrl): echo $authorUrl; endif; ?>"> Read more...</a>
            </div>

        <?php
            endwhile;
          endif;
        ?>

        <div class="sidebar_middle_ad">
          <!-- Ezoic - sidebar_middle - sidebar_middle -->
          <div id="ezoic-pub-ad-placeholder-115"> </div>
          <!-- End Ezoic - sidebar_middle - sidebar_middle -->
        </div>

        <div class="sidebar_bottom_ad">
          <!-- Ezoic - sidebar_bottom - sidebar_bottom -->
          <div id="ezoic-pub-ad-placeholder-113"> </div>
          <!-- End Ezoic - sidebar_bottom - sidebar_bottom -->
        </div>

      </div>

      <div class="bottomContent">
        <?php related_posts(); ?>
      </div>

      <div class="bottom_of_page_ad">
        <!-- Ezoic - bottom_of_page - bottom_of_page -->
        <div id="ezoic-pub-ad-placeholder-114"> </div>
        <!-- End Ezoic - bottom_of_page - bottom_of_page -->
      </div>

    <div>

</div>


<?php endwhile; ?>


<?php get_footer(); ?>
