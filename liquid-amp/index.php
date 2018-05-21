<?php get_header(); ?>

<?php $img_options = get_theme_mod('img_options');
if( !empty( $img_options["img01"] ) ){ ?>
<amp-carousel width="1200"
  height="400"
  layout="responsive"
  type="slides">
  <amp-img src="<?php echo $img_options["img01"]; ?>"
    width="1200"
    height="400"
    layout="responsive"
    alt="a sample image"></amp-img>
  <?php if( !empty( $img_options["img02"] ) ){ ?>
  <amp-img src="<?php echo $img_options["img02"]; ?>"
    width="1200"
    height="400"
    layout="responsive"
    alt="another sample image"></amp-img>
  <?php } ?>
  <?php if( !empty( $img_options["img03"] ) ){ ?>
  <amp-img src="<?php echo $img_options["img03"]; ?>"
    width="1200"
    height="400"
    layout="responsive"
    alt="and another sample image"></amp-img>
  <?php } ?>
</amp-carousel>
<?php } ?>

<div class="mainpost">
    <?php if(! dynamic_sidebar('liquid_top_header')): ?>
     <!-- no widget -->
    <?php endif; ?>

    <div class="container">
      <div class="row" id="main">
         <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
           <article <?php post_class();?>>
               <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="post_links">
                   <span class="post_thumb">
                       <?php if(has_post_thumbnail($post->ID)) { the_post_thumbnail($post->ID); }else{ echo '<span class="noimage">'.esc_html__( 'no image', 'liquid-amp' ).'</span>'; } ?>
                   </span>
                   <span class="post_meta">
                       <span class="post_time"><?php the_time( get_option( 'date_format' ) ); ?></span>
                       <?php $cat = get_the_category(); if(!empty($cat[0])){ ?>
                       <span class="post_cat"><?php echo $cat[0]->cat_name; ?></span>
                       <?php } ?>
                   </span>
                   <h3 class="post_ttl"><?php the_title(); ?></h3>
               </a>
           </article>
         <?php 
            //endforeach;
            endwhile;
            endif;
          ?>          
     </div>

     <?php 
        // navigation
        liquid_paging_nav();
     ?>

    </div>
</div>

<?php get_footer(); ?>   
