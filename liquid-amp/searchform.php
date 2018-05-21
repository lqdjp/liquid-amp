<div class="searchform">  
    <form action="<?php echo home_url( '/' ); ?>" method="get" class="search-form" target="_top">
        <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php esc_html_e( 'Search', 'liquid-amp' ); ?>" class="search-text">
    </form>
</div>