<?php 

/*
Template Name: Reviews tamplate page
*/


get_header(); ?>

      <div class="container">
       
        <h1>Reviews</h1>
       
       <div class="samples-page-posts">
       
        <?php

        $args = array(
            'numberposts'       => 10,
            'category_name'     => 'reviews',
            'orderby'           => 'date',
            'order'             => 'DESC',
            'include'           => array(),
            'exclude'           => array(),
            'meta_key'          => '',
            'meta_value'        =>'',
            'post_type'         => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );

        $posts = get_posts( $args );

            foreach($posts as $post){ setup_postdata($post); ?>

                      <div class="bg-color-wrapp"> 

                          <div class="blog-post clearfix main-wrapper-element">

                               <div class="wrapper-blog-post-image wrapper-sample-post-image">

                                    <a href="<?php the_permalink(); ?>"> 

                                       <?php if ( has_post_thumbnail() ): ?>

                                            <?php the_post_thumbnail( array(300,300) ); ?>

                                        <?php endif; ?>

                                    </a>

                              </div>

                               <div class="wrapper-blog-post-content wrapper-meta-fields">
                                  
                                  <h2><a class="not-style" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    
                                   <?php the_excerpt(); ?>

                               </div>

                          </div><!-- /.blog-post -->

                    </div>


            <?php } ?>

        <?php wp_reset_postdata(); ?>
        
      </div>

    </div><!-- /.blog-main -->
                    
<?php get_footer(); ?>