<nav class="primary">
<div class="navToggle"><div class="closeScale"><div class="close icon"></div></div></div>
  <?php
    if( has_nav_menu( 'primary' ) ){
      wp_nav_menu( array(
        'container'      => false,
        'theme_location' => 'primary',
        'menu_class'     => 'nav',
        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'walker'         => new WPSE_78121_Sublevel_Walker
      ));
    }
  ?>
</nav>

<div class="searchOverlay">
  <div class="closeSearch"><div class="closeScale"><div class="close icon"></div></div></div>
  <?php get_search_form(); ?>
</div>

<div class="navToggleWrap">
<div class="toggleWrapOverlay"></div>
<header>

  <a href="<?php echo home_url(); ?>"><div class="blogName"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div></a><br>
  <div class="blogDesc"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></div>

  <div class="navToggle"><div class="navScale"><div class="menu icon"></div></div></div>
  <div class="searchScale searchToggle"><div class="search icon"></div></div>

</header>

<main>