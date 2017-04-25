<?php
/*
Template Name: Samples page
*/


get_header(); ?>

			<div class="container">
			
			    <h1>Samples of Papers</h1>
			
			    <div class="samples-page-posts">
			
                <?php $args = array( 'post_type' => 'samples' ); ?>
                <?php $loop = new WP_Query( $args ); ?>
			
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                           
                        <div class="bg-color-wrapp">   
        
                          <div class="clearfix main-wrapper-element">

                               <div class="wrapper-sample-post-image">

                                    <?php if ( has_post_thumbnail() ): ?>

                                        <?php the_post_thumbnail( array(300,300) ); ?>

                                    <?php endif; ?>

                              </div>

                              <div class="wrapper-meta-fields">

                                <h2><?php the_title(); ?></h2> 

                                 <ul>
                                     <li><span>Topic: </span><?php echo (get_post_meta($post->ID, 'Topic', $single = true)); ?></li>
                                     <li><span>Pages: </span><?php echo (get_post_meta($post->ID, 'Pages', $single = true)); ?></li>
                                     <li><span>Sources: </span><?php echo (get_post_meta($post->ID, 'Sources', $single = true)); ?></li>
                                     <li><a href="<?php echo (get_post_meta($post->ID, 'Url', $single = true)); ?>">View Sample</a></li>
                                 </ul> 



                              </div>


                          </div><!-- /.blog-post -->
                      
                        </div>


                    <?php endwhile; ?>
                    
                    <?php wp_reset_postdata(); ?>
                    
                </div>
                
			</div>

<?php get_footer(); ?>