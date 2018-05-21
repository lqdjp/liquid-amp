<?php
/*
Author: LIQUID DESIGN Ltd.
Author URI: https://lqd.jp/wp/
*/

// ------------------------------------
// scripts and styles
// ------------------------------------
function liquid_scripts_styles() {
    return;
}
add_action( 'wp_enqueue_scripts', 'liquid_scripts_styles' );

// ------------------------------------
// widgets
// ------------------------------------
add_action( 'widgets_init', 'liquid_widgets_init' );
function liquid_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('sidebar', 'liquid-amp' ),
        'id' => 'liquid_sidebar',
        'before_title' => '<div class="ttl">',
        'after_title' => '</div>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('headline', 'liquid-amp' ),
        'id' => 'liquid_headline',
        'before_title' => '<div class="ttl">',
        'after_title' => '</div>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('main_head', 'liquid-amp' ),
        'id' => 'liquid_main_head',
        'before_title' => '<div class="ttl">',
        'after_title' => '</div>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('main_foot', 'liquid-amp' ),
        'id' => 'liquid_main_foot',
        'before_title' => '<div class="ttl">',
        'after_title' => '</div>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('top_header', 'liquid-amp' ),
        'id' => 'liquid_top_header',
        'before_title' => '<div class="ttl">',
        'after_title' => '</div>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('footer', 'liquid-amp' ),
        'id' => 'liquid_footer',
        'before_title' => '<div class="ttl">',
        'after_title' => '</div>',
        'before_widget' => '<div id="%1$s" class="widget %2$s col">',
        'after_widget'  => '</div>'
    ));
}

// body_class
add_filter('body_class', 'liquid_class_names');
function liquid_class_names($classes) {
    if (is_single()){
        $cat = get_the_category(); 
        if(!empty($cat)){
            $parent_cat_id = $cat[0]->parent;
            if(empty($parent_cat_id)){
                $parent_cat_id = $cat[0]->cat_ID;
            }
        }else{
            $parent_cat_id = "0";
        }    
        $classes[] = "category_".$parent_cat_id;
    }
    if (is_page()){
        $page = get_post( get_the_ID() );
        $slug = $page->post_name;
        $classes[] = "page_".$slug;
    }
	return $classes;
}

// widget_text
add_filter('widget_text', 'do_shortcode');

// add_theme_support
function liquid_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    if ( ! isset( $content_width ) ) $content_width = 1024;
    // languages
    load_theme_textdomain('liquid-amp', get_template_directory() . '/languages');
    // nav_menu
    register_nav_menus(array(
        'global-menu' => esc_html__('Global Menu', 'liquid-amp' )
    ));
    // custom-logo
    $defaults = array(
        'height'      => 60,
        'width'       => 320,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'liquid_theme_setup' );

// custom-header-callback
function liquid_admin_header_image() {
?>
    <p class="header_preview">
        <?php bloginfo('description'); ?>
    </p>
    <?php if(get_header_image()): ?>
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
    <?php else : ?>
        <h2 class="header_preview"><?php bloginfo('name'); ?></h2>
    <?php endif; ?>
<?php
}

function liquid_theme_customize_register($lqd_customize) {
    // Carousel
    $lqd_customize->add_section( 'img_sections' , array(
        'title'        => __('Carousel', 'liquid-amp' ),
        'priority'     => 100,
        'description' => __('Top Carousel Images', 'liquid-amp' ),
    ));
    $lqd_customize->add_setting( 'img_options[img01]' );
    $lqd_customize->add_control( new WP_Customize_Image_Control(
        $lqd_customize, 'img_options[img01]', array(
            'label' => 'image 1',
            'section' => 'img_sections',
            'settings' => 'img_options[img01]',
            'description' => __('Size: w1200 x h400', 'liquid-amp' ),
    )));
    $lqd_customize->add_setting( 'img_options[img02]' );
    $lqd_customize->add_control( new WP_Customize_Image_Control(
        $lqd_customize, 'img_options[img02]', array(
            'label' => 'image 2',
            'section' => 'img_sections',
            'settings' => 'img_options[img02]',
            'description' => __('Size: w1200 x h400', 'liquid-amp' ),
    )));
    $lqd_customize->add_setting( 'img_options[img03]' );
    $lqd_customize->add_control( new WP_Customize_Image_Control(
        $lqd_customize, 'img_options[img03]', array(
            'label' => 'image 3',
            'section' => 'img_sections',
            'settings' => 'img_options[img03]',
            'description' => __('Size: w1200 x h400', 'liquid-amp' ),
    )));
    //GA
    $lqd_customize->add_section('html_sections', array(
        'title'    => __('Google Analytics', 'liquid-amp' ),
        'description'=> __('amp-analytics', 'liquid-amp' ),
        'priority' => 109,
    ));
    $lqd_customize->add_setting('html_options[ga]', array('type'  => 'option',));
    $lqd_customize->add_control('html_options[ga]', array(
        'label'      => __('Tracking ID', 'liquid-amp' ),
        'description'=> __('UA-XXXXX-Y', 'liquid-amp' ),
        'section'    => 'html_sections',
        'settings'   => 'html_options[ga]',
        'type'       => 'text',
    ));
}
add_action( 'customize_register', 'liquid_theme_customize_register' );

// Remove p tags
remove_filter('term_description','wpautop');

// get_the_archive_title
function liquid_archive_title( $title ){
    if ( is_category() ) {
        $title = single_term_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'liquid_archive_title', 10 );

// add post class
function liquid_post_class( $classes ) {
    if( is_single() ){
        $classes[] = 'detail';
    }else{
        $classes[] = 'col';
    }
	return $classes;
}
add_filter( 'post_class', 'liquid_post_class' );

// amp-img
function liquid_custom_img( $html ){
    $html = preg_replace('/<img/', '<amp-img layout="responsive"', $html);
    $html = $html.'</amp-img>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'liquid_custom_img' );
//add_filter( 'get_image_tag', 'liquid_custom_img' );

// navigation
function liquid_paging_nav() {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $wp_query->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&lt; Prev', 'liquid-amp' ),
		'next_text' => __( 'Next &gt;', 'liquid-amp' ),
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<ul class="page-numbers">
			<li><?php echo $links; ?></li>
		</ul><!-- .pagination -->
	</nav><!-- .navigation -->
	<?php
	endif;
}

?>