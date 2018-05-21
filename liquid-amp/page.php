<?php get_header(); ?>

    <div class="detail page">
        <div class="container">
          <div class="row">
           <div class="mainarea">
          
           <?php if (have_posts()) : ?>
           <?php while (have_posts()) : the_post(); ?>
           
            <h1 class="ttl_h1"><?php the_title(); ?></h1>

            <!-- pan -->
            <nav aria-label="breadcrumb">
             <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
              <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="<?php echo esc_url( home_url() ); ?>" itemprop="item"><span itemprop="name"><?php esc_html_e( 'TOP', 'liquid-amp' ); ?></span></a><meta itemprop="position" content="1"></li>
              <?php $item_position = 1; ?>
              <?php if($post->post_parent) {
                $cat_name = get_the_title($post->post_parent);
                $cat_slug = get_page_link($post->post_parent); ?>
              <?php $item_position++; ?>
              <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="<?php esc_html_e($cat_slug); ?>" itemprop="item"><span itemprop="name"><?php esc_html_e($cat_name); ?></span></a><meta itemprop="position" content="<?php echo $item_position; ?>"></li>
              <?php } ?>
              <?php $item_position++; ?>
              <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page"><a title="<?php the_title(); ?>" itemprop="item"><span itemprop="name"><?php the_title(); ?></span></a><meta itemprop="position" content="<?php echo $item_position; ?>"></li>
             </ul>
            </nav>

            <div class="detail_text">
               
                <div class="post_meta">
                <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                </div>
                
                <div class="post_body">
                <?php //the_content
                $content = apply_filters( 'the_content', get_the_content() );
                $content = str_replace( ']]>', ']]&gt;', $content );
                if(preg_match('/<img/i', $content, $matches)){
                    $content = preg_replace('/<img/i', '<amp-img layout="responsive"', $content);
                    $f = 1;
                }
                if(preg_match('/style*=*(\".*?\")/i', $content, $matches)){
                    $content = preg_replace('/style*=*(\".*?\")/i', '', $content);
                    $f = 1;
                }
                if(!empty($f)){
                    echo $content;
                }else{
                    the_content();
                }
                ?>
                </div>
                
            </div>
            <?php endwhile; ?>
               
            <?php else : ?>
                <div class="col-12"><?php esc_html_e( 'No articles', 'liquid-amp' ); ?></div>
            <?php endif; ?>
           
            <?php
            // Paging
            $args = array(
                'before' => '<nav><ul class="page-numbers">', 
                'after' => '</ul></nav>', 
                'link_before' => '<li>', 
                'link_after' => '</li>'
            );
            wp_link_pages( $args );
            ?>
            
           </div><!-- /col -->
           <?php get_sidebar(); ?>
           
         </div>
        </div>
    </div>
   
<?php get_footer(); ?>
