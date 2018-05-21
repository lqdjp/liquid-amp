<!DOCTYPE html>
<html ⚡ <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<?php if ( is_home() ){ ?>
<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
<?php } else { ?>
<title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
<?php } ?>
<link rel="canonical" href="<?php echo get_permalink(); ?>">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
<?php $html_options = get_option('html_options'); ?>
<?php if (!empty( $html_options['ga'] )){ ?>
<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
<?php } ?>
<!-- amp-boilerplate -->
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<!-- amp-custom -->
<style amp-custom>
/*! normalize.css v8.0.0 | MIT License | github.com/necolas/normalize.css *//* Document   ========================================================================== *//** * 1. Correct the line height in all browsers. * 2. Prevent adjustments of font size after orientation changes in iOS. */html {  line-height: 1.15; /* 1 */  -webkit-text-size-adjust: 100%; /* 2 */}/* Sections   ========================================================================== *//** * Remove the margin in all browsers. */body {  margin: 0;}/** * Correct the font size and margin on `h1` elements within `section` and * `article` contexts in Chrome, Firefox, and Safari. */h1 {  font-size: 2em;  margin: 0.67em 0;}/* Grouping content   ========================================================================== *//** * 1. Add the correct box sizing in Firefox. * 2. Show the overflow in Edge and IE. */hr {  box-sizing: content-box; /* 1 */  height: 0; /* 1 */  overflow: visible; /* 2 */}/** * 1. Correct the inheritance and scaling of font size in all browsers. * 2. Correct the odd `em` font sizing in all browsers. */pre {  font-family: monospace, monospace; /* 1 */  font-size: 1em; /* 2 */}/* Text-level semantics   ========================================================================== *//** * Remove the gray background on active links in IE 10. */a {  background-color: transparent;}/** * 1. Remove the bottom border in Chrome 57- * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari. */abbr[title] {  border-bottom: none; /* 1 */  text-decoration: underline; /* 2 */  text-decoration: underline dotted; /* 2 */}/** * Add the correct font weight in Chrome, Edge, and Safari. */b,strong {  font-weight: bolder;}/** * 1. Correct the inheritance and scaling of font size in all browsers. * 2. Correct the odd `em` font sizing in all browsers. */code,kbd,samp {  font-family: monospace, monospace; /* 1 */  font-size: 1em; /* 2 */}/** * Add the correct font size in all browsers. */small {  font-size: 80%;}/** * Prevent `sub` and `sup` elements from affecting the line height in * all browsers. */sub,sup {  font-size: 75%;  line-height: 0;  position: relative;  vertical-align: baseline;}sub {  bottom: -0.25em;}sup {  top: -0.5em;}/* Embedded content   ========================================================================== *//** * Remove the border on images inside links in IE 10. */img {  border-style: none;}/* Forms   ========================================================================== *//** * 1. Change the font styles in all browsers. * 2. Remove the margin in Firefox and Safari. */button,input,optgroup,select,textarea {  font-family: inherit; /* 1 */  font-size: 100%; /* 1 */  line-height: 1.15; /* 1 */  margin: 0; /* 2 */}/** * Show the overflow in IE. * 1. Show the overflow in Edge. */button,input { /* 1 */  overflow: visible;}/** * Remove the inheritance of text transform in Edge, Firefox, and IE. * 1. Remove the inheritance of text transform in Firefox. */button,select { /* 1 */  text-transform: none;}/** * Correct the inability to style clickable types in iOS and Safari. */button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}/** * Remove the inner border and padding in Firefox. */button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}/** * Restore the focus styles unset by the previous rule. */button:-moz-focusring,[type="button"]:-moz-focusring,[type="reset"]:-moz-focusring,[type="submit"]:-moz-focusring {  outline: 1px dotted ButtonText;}/** * Correct the padding in Firefox. */fieldset {  padding: 0.35em 0.75em 0.625em;}/** * 1. Correct the text wrapping in Edge and IE. * 2. Correct the color inheritance from `fieldset` elements in IE. * 3. Remove the padding so developers are not caught out when they zero out *    `fieldset` elements in all browsers. */legend {  box-sizing: border-box; /* 1 */  color: inherit; /* 2 */  display: table; /* 1 */  max-width: 100%; /* 1 */  padding: 0; /* 3 */  white-space: normal; /* 1 */}/** * Add the correct vertical alignment in Chrome, Firefox, and Opera. */progress {  vertical-align: baseline;}/** * Remove the default vertical scrollbar in IE 10+. */textarea {  overflow: auto;}/** * 1. Add the correct box sizing in IE 10. * 2. Remove the padding in IE 10. */[type="checkbox"],[type="radio"] {  box-sizing: border-box; /* 1 */  padding: 0; /* 2 */}/** * Correct the cursor style of increment and decrement buttons in Chrome. */[type="number"]::-webkit-inner-spin-button,[type="number"]::-webkit-outer-spin-button {  height: auto;}/** * 1. Correct the odd appearance in Chrome and Safari. * 2. Correct the outline style in Safari. */[type="search"] {  -webkit-appearance: textfield; /* 1 */  outline-offset: -2px; /* 2 */}/** * Remove the inner padding in Chrome and Safari on macOS. */[type="search"]::-webkit-search-decoration {  -webkit-appearance: none;}/** * 1. Correct the inability to style clickable types in iOS and Safari. * 2. Change font properties to `inherit` in Safari. */::-webkit-file-upload-button {  -webkit-appearance: button; /* 1 */  font: inherit; /* 2 */}/* Interactive   ========================================================================== *//* * Add the correct display in Edge, IE 10+, and Firefox. */details {  display: block;}/* * Add the correct display in all browsers. */summary {  display: list-item;}/* Misc   ========================================================================== *//** * Add the correct display in IE 10+. */template {  display: none;}/** * Add the correct display in IE 10. */[hidden] {  display: none;}
    body {
        line-height: 1.2;
        color: #333;
        font-family: sans-serif;
        letter-spacing: 0.07rem;
        background-color: #f1f1f1;
    }
    a {
        color: #333;
        text-decoration: none;
        transition: all 0.5s;
        -moz-transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
    }
    a:hover, a:active {
        color: #000;
        background: #f1f1f1;
    }
    a:visited {
        color: #666;
    }
    .wrapper {
        padding-top: 7rem;
    }
    .container {
        padding: 1rem;
    }
    .row {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: flex-start;
        flex-wrap: wrap;
    }
    .row .card {
        background-color: #fff;
    }
    .row .col {
        width: calc(33.3% - 1rem);
        margin: .5rem;
    }
    .row .col amp-img {
        max-width: 100%;
    }
    .row .col .post_links {
        display: block;
        padding: .5rem;
    }
    .logo a {
        font-weight: bold;
        display: inline-block;
        margin-bottom: .5rem;
    }
    .subttl {
        margin: 0 0 .5rem 0;
        padding: 0;
        font-size: x-small;
        color: #999;
        font-weight: normal;
    }
    .headline {
        padding: 1rem 1rem .5rem 1rem;
        box-shadow: 0px 4px 4px -4px #999;
        -webkit-box-shadow: 0px 4px 4px -4px #999;
        -moz-box-shadow: 0px 4px 4px -4px #999;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 99;
        background: #fff;
        width: calc(100% - 2rem);
    }
    .navbar .navbar-nav {
        list-style-position: inside;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    .navbar .navbar-nav li {
        display: inline-block;
    }
    .navbar .navbar-nav li a {
        display: inline-block;
        padding: .5rem 1rem;
        font-size: small;
    }
    .navbar .sub-menu {
        display: none;
    }
    .navbar_sidebar_toggle {
        position: fixed;
        top: 1rem;
        right: 1rem;
        font-size: x-small;
        z-index: 999;
        cursor: pointer;
        height: 2.5rem;
        width: 2.5rem;
        border: 1px solid #ccc;
        line-height: 2.5rem;
        text-align: center;
        display: block;
        letter-spacing: 0;
    }
    .noimage {
        width: 100%;
        height: 120px;
        display: block;
        text-align: center;
        line-height: 120px;
        color: #33333333;
    }
    .aligncenter {
        display: block;
        margin: 0 auto;
        text-align: center;
    }
    .alignright { 
        float: right;
        margin-left: 1.5em;
        margin-bottom: 1em;
    }
    .alignleft {
        float: left;
        margin-right: 1.5em;
        margin-bottom: 1em;
    }
    .alignnone {
        clear: both;
    }
    .wp-caption {
        max-width: 100%;
    }
    amp-img, img {
        max-width: 100%;
    }
    amp-sidebar {
        padding-top: 3rem;
        z-index: 998;
    }
    amp-sidebar ul {
        list-style-type: none;
        list-style-position: inside;
        padding: 1rem;
    }
    amp-sidebar ul li a {
        display: block;
        padding: .5rem;
        margin-bottom: .5rem;
        background-color: #fff;
    }
    div[class*="sidebar-mask"] {
        z-index: 997;
    }
    .post_thumb {
        display: block;
        margin-bottom: .5rem;
    }
    .post_meta {
        display: block;
        font-size: small;
        margin-bottom: .5rem;
    }
    .post_ttl {
        font-size: medium;
        margin: 0;
    }
    .breadcrumb {
        list-style-position: inside;
        list-style-type: none;
        padding: 0;
    }
    .breadcrumb li {
        display: inline-block;
    }
    .breadcrumb-item+.breadcrumb-item::before {
        display: inline-block;
        padding-right: .5rem;
        color: #999;
        content: "/";
    }
    .mainarea {
        width: calc(70% - 2rem);
        padding: 1rem;
        background: #fff;
        overflow: hidden;
    }
    .mainarea a {
        color: #00A5D4;
    }
    .post_body {
        border-top: 1px solid #ccc;
        margin-top: 1rem;
    }
    .sidebar {
        width: calc(30% - 2rem);
        padding: 1rem;
    }
    .widget {
        margin-bottom: 1rem;
    }
    .widget ul {
        list-style-position: inside;
        list-style-type: none;
        padding: 0;
    }
    .widget ul li {
        padding: .5rem 0;
    }
    .widget .ttl {
        font-size: large;
        font-weight: bold;
        margin-bottom: 1rem;
    }
    .search-text {
        padding: .5rem 0;
        width: 100%;
    }
    .page-numbers {
        text-align: center;
        justify-content: space-between;
        list-style-position: inside;
        list-style-type: none;
        padding: 0;
    }
    .pagination {
        display: flex;
        justify-content: space-between;
        list-style-position: inside;
        list-style-type: none;
        padding: 0;
    }
    .pagination li, .page-numbers li {
        display: inline-block;
    }
    .pagination a, .page-numbers a {
        display: inline-block;
        padding: .5rem;
        margin: 0 .2rem .2rem 0;
        background: #fff;
        border: 1px solid #ccc;
    }
    .page-numbers span {
        display: inline-block;
        padding: .5rem;
        margin: .2rem;
        border: 1px solid #ccc;
    }
    footer {
        font-size: small;
        text-align: center;
        padding: 3rem 1rem;
        border-top: 1px solid #ccc;
    }
    footer .copy {
        padding: 1rem 0;
    }
    /* Tablets */
    @media (max-width: 991.98px) {
        .mainarea {
            width: calc(100% - 2rem);
        }
        .sidebar {
            width: calc(100% - 2rem);
        }
    }
    /* Smart phones */
    @media (max-width: 575.98px) {
        .navbar {
            display: none;
        }
        .wrapper {
            padding-top: 4.5rem;
        }
        .row .col {
            width: 100%;
            margin: 0 0 1rem 0;
        }
    }
</style>
<?php if ( is_singular() ){ ?>
<!-- JSON-LD -->
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "NewsArticle",
    "mainEntityOfPage":{
        "@type": "WebPage",
        "@id": "<?php the_permalink(); ?>"
    },
    "headline": "<?php the_title();?>",
    "image": {
        "@type": "ImageObject",
        "url": "<?php
        $image = get_post_thumbnail_id();
        $image = wp_get_attachment_image_src($image, 'full');
        echo $image[0];
        ?>",
        "width": <?php echo $image[1]; ?>,
        "height": <?php echo $image[2]; ?>
    },
    "datePublished": "<?php the_time('Y/m/d') ?>",
    "dateModified": "<?php the_modified_date('Y/m/d') ?>",
    "author": {
        "@type": "Person",
        "name": "<?php
        $post = get_the_ID();
        $post = get_post( $post );
        the_author_meta( 'display_name', $post->post_author ); 
        ?>"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?php bloginfo('name'); ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?php 
            $logo = get_theme_mod( 'custom_logo' );
            echo wp_get_attachment_url($logo);
            ?>",
            "width": 320,
            "height": 60
        }
    },
    "description": "<?php
	$excerpt = wp_html_excerpt( $post->post_content, 200, '...' );
	echo esc_attr( $excerpt );
    ?>"
}
</script>
<?php } ?>
</head>

<body <?php body_class(); ?>>

<?php if (!empty( $html_options['ga'] )){ ?>
<amp-analytics type="googleanalytics">
<script type="application/json">
{
  "vars": {
    "account": "<?php echo $html_options['ga']; ?>"
  },
  "triggers": {
    "trackPageview": {
      "on": "visible",
      "request": "pageview"
    }
  }
}
</script>
</amp-analytics>
<?php } ?>

<div class="wrapper">
   
<div class="headline">
    <div class="logo_text">
        <?php if ( is_singular() || is_category() ){ ?>
        <div class="subttl"><?php bloginfo('description'); ?></div>
        <?php } else { ?>
        <h1 class="subttl"><?php bloginfo('description'); ?></h1>
        <?php } ?>
    </div>
    <div class="logo">
        <?php if ( has_custom_logo() ) {
            $custom_logo = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo , 'full' );
        } ?>
        <a href="<?php bloginfo('url'); ?>"><amp-img width="160" height="30" src="<?php echo $image[0]; ?>" alt="<?php bloginfo('name'); ?>"></amp-img></a>
    </div>
    <?php if ( has_nav_menu( 'global-menu' ) ){ ?>
    <nav class="navbar">
        <?php wp_nav_menu(array(
            'theme_location'  => 'global-menu',
            'menu_class'      => 'nav navbar-nav',
            'container'       => false,
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
        )); ?>
    </nav>
    <?php } ?>
</div>

<?php if(! dynamic_sidebar('liquid_headline')){ ?>
<!-- no widget -->
<?php } ?>
