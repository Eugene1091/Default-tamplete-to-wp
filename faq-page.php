<?php
/*
Template Name: F.A.Q page
*/


get_header(); ?>

		
        <div class="questions" id="questions">
			
			<div class="container">
                <div class="custom-page">

                <h1>HAVE A QUESTION?</h1>

                    <?php $args = array( 'post_type' => 'faq' ); ?>
                    <?php $loop = new WP_Query( $args ); ?>

                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="questions__elem">
                                <div class="questions__title" data-open="">
                                    <div><?php the_title(); ?></div>
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </div>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>


                        <?php endwhile; ?>
                        
                        <?php wp_reset_postdata(); ?>

                </div>
            </div>
		</div>

<?php get_footer(); ?>