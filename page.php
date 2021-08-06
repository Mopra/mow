<?php get_header(); ?>

<?php get_template_part( 'blocks/header' ); ?>


<?php while ( have_posts() ) : the_post(); ?>

<div class="postPage">

    <div class="headerContent">
        <?php
          if (has_post_thumbnail( $post->ID ) ):
          $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
        ?>
        <img width="341" height="208" class="post-thumbnail" src="<?php echo $url ?>" alt="<?php esc_html ( the_title() ) ?>" />
        <?php endif; ?>
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
          <img src="https://living-smarter.com/wp-content/uploads/2021/05/profil.jpg">
          <h4>Morten Pradsgaard</h4>
          <p>
            Morten has been working with technology, IoT and electronics for over a decade. His passion for technology is reflected into this blog to give you relevant and correct information.
          </p>
          <a class="uk-buitton uk-button-text" href="/about-living-smarter/"><span uk-icon="link"></span> Read more...</a>
        </div>
      </div>

    <div>

    <div class="spacer"></div>

</div>


<?php endwhile; ?>

<?php get_footer(); ?>
