<?php $sq = get_search_query() ? get_search_query() : __( 'Enter search terms&hellip;', 'slateui' ); ?>

 <div class="searchBar">
    <div>
        <h3>What do you search for?</h3>
        <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" name="s" placeholder="Search..." value="<?php echo get_search_query(); ?>" autofocus>
        </form>
    </div>
 </div>


