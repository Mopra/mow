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
        <div>
          <h5>Auther:<h5>
          <h4>Morten Pradsgaard</h4>
          <p>
            Morten has been working with technology, IoT and electronics for over a decade. His passion for technology is reflected into this blog to give you relevant and correct information.
          </p>
          <a class="uk-buitton uk-button-text" href="/about-living-smarter/"><span uk-icon="link"></span> Read more...</a>
        </div>

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
