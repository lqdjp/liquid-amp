<?php get_header(); ?>

    <div class="detail search">
        <div class="container">
          <div class="row">
           <div class="mainarea">

            <h1 class="ttl_h1"><?php printf( __( 'Search: %s', 'liquid-amp' ), get_search_query() ); ?></h1>
			        
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
          
           </div><!-- /col -->
           <?php get_sidebar(); ?>
           
         </div>
        </div>
    </div>

<?php get_footer(); ?>
