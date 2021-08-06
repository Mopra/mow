</main>

<footer>

  <div class="recent">
    <h6>Recent posts</h6>
    <hr>
    <ul>
      <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 5, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
        ));
        foreach($recent_posts as $post) : ?>
        <li>
            <a href="<?php echo get_permalink($post['ID']) ?>">
                <?php echo $post['post_title'] ?>
            </a>
        </li>
      <?php endforeach; wp_reset_query(); ?>
    </ul>
  </div>

  <div class="categories">
    <h6>Popular categories</h6>
    <hr>
    <?php
      if( has_nav_menu( 'secondary' ) ){
        wp_nav_menu( array(
          'container'      => false,
          'theme_location' => 'secondary',
          'menu_class'     => 'uk-nav uk-nav-default tags',
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ));
      }
    ?>
  </div>

  <div class="legal">
    <a href="<?php echo home_url(); ?>"><h5><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h5></a>
    <a href="https://g.ezoic.net/privacy/living-smarter.com"><h5>Privacy Policy</h5></a>
  </div>

</footer>

<?php wp_footer(); ?>

</div>
</body>
</html>
