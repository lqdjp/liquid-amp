<footer>
    <div class="row">
        <?php if(! dynamic_sidebar('liquid_footer')): ?>
         <!-- no widget -->
        <?php endif; ?>
    </div>
    <div class="copy">
        <?php esc_html_e( '(C)', 'liquid-amp' ); ?><?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a> <?php esc_html_e( 'All rights reserved.', 'liquid-amp' ); ?>
        <!-- Powered by -->
        <br><?php esc_html_e( 'Theme by', 'liquid-amp' ); ?> <a href="https://lqd.jp/wp/" rel="nofollow" target="_blank"><?php esc_html_e( 'LIQUID PRESS', 'liquid-amp' ); ?></a>
        <?php esc_html_e( 'Powered by', 'liquid-amp' ); ?> <a href="https://wordpress.org" target="_blank"><?php esc_html_e( 'WordPress', 'liquid-amp' ); ?></a>
        <!-- /Powered by -->
    </div>
</footer>

</div><!--/wrapper-->

<?php if ( has_nav_menu( 'global-menu' ) ){ ?>
<amp-sidebar id="navbar_sidebar"
    layout="nodisplay"
    side="right">
    <?php wp_nav_menu(array(
        'theme_location'  => 'global-menu',
        'menu_class'      => 'nav navbar-nav',
        'container'       => false,
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    )); ?>
</amp-sidebar>
<a on="tap:navbar_sidebar.toggle" class="navbar_sidebar_toggle">MENU</a>
<?php } ?>

</body>
</html>