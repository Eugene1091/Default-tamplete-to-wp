<?php get_header(); ?>
   
<?php if( is_front_page() ): ?>

        <div class="main-banner col-xs-12 col-sm-12" id="main-banner" style="background-image: url('<?php header_image(); ?> ');">
			<div class="container">
			    <div class="main-wrapper-banenr clearfix">
                    <div class="left-wrapepr col-xs-12 col-sm-8">
                        <h1><?php echo get_theme_mod('banner_heading', 'BEST EXPERT WRITERS HERE'); ?></h1>
                        <div class="main-banner__description">
                            <?php echo get_theme_mod('banner_text', 'We offer best quality assignment writing service in Australia'); ?>
                        </div>
                        <div class="benefits">
                            <div class="benefits__elem">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Professional Writers
                            </div>
                            <div class="benefits__elem">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                100 % Authenticity
                            </div>
                            <div class="benefits__elem">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Guaranteed Confidentiality
                            </div>
                        </div>
                    </div>
                    <div class="right-wrapepr col-xs-12 col-sm-4">
                        <form action="">
                        <fieldset>
                            <label for="">E-mail</label>
                            <input name="your-email" type="text" class="aster_signup_email" data-aster-utm="?utm_source=paperesson.com&utm_medium=W">
                        </fieldset>
                        <fieldset class="arrow-font">
                           <label for="">I need</label>
                           <select name="" id="">
                                <option value="Essay (Any Type)">Essay (Any Type)</option>
                                <option value="Article (Any Type)">Article (Any Type)</option>
                                <option value="Content (Any Type)">Content (Any Type)</option>
                                <option value="Admission Essay">Admission Essay</option>
                                <option value="Annotated Bibliography">Annotated Bibliography</option>
                                <option value="Argumentative Essay">Argumentative Essay</option>
                                <option value="Article Review">Article Review</option>
                                <option value="Book/Movie Review">Book/Movie Review</option>
                                <option value="Business Plan">Business Plan</option>
                                <option value="Case Study">Case Study</option>
                                <option value="Coursework">Coursework</option>
                                <option value="Creative Writing">Creative Writing</option>
                                <option value="Critical Thinking">Critical Thinking</option>
                                <option value="Presentation or speech">Presentation or speech</option>
                                <option value="Q&amp;A">Q&amp;A</option>
                                <option value="Research Paper">Research Paper</option>
                                <option value="Research Proposal">Research Proposal</option>
                                <option value="Term Paper">Term Paper</option>
                                <option value="hesis/Dissertation Chapter">hesis/Dissertation Chapter</option>
                                <option value="Othe">Othe</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <input type="button" value="Order" class="btn-order aster_signup_submit">
                        </fieldset>
                        </form>
                    </div>
                </div>
			</div>
			<a href="#how-works" class="scroll page-scroll-btn">
                <span class="icon icon-arrow-down">&nbsp;</span>
            </a>
		</div>
		
        <div class="sheets clearfix" id="sheets">
                <div class="container">
                    <div class="sheets__elem">
                        <div class="sheets__ico">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                        </div>
                        <div class="sheets__title">Top quality</div>
                        <p>100% plagiarism free</p>
                    </div>
                    <div class="sheets__elem">
                        <div class="sheets__ico">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </div>
                        <div class="sheets__title">Money back guarantee</div>
                        <p>Trust worty company</p>
                    </div>
                    <div class="sheets__elem">
                        <div class="sheets__ico">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                        <div class="sheets__title">24/7 customer service</div>
                        <p>Feel free to contact us</p>
                    </div>
                </div>
			<div class="box-shadow-class"></div>
		</div>

        <div class="main-content-page" id="home-text">
            <div class="container">
               
                <article>

                    <?php get_template_part('template-part/content-page',get_post_format()); ?>

                </article>
                
            </div>
		</div>
		
		<div class="our-writers">
		    
            <div class="writers" id="writers">
			    <h2>PROFESSIONAL WRITERS</h2>
               
                <div class="container">
                <?php $args = array( 'post_type' => 'writers', 'posts_per_page' => 8 ); ?>
                <?php $loop = new WP_Query( $args ); ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                           <div class="writers__elem">
                                <div class="crop_photos"><?php the_post_thumbnail(array(150,150)); ?></div>
                               <div class="writers__name"><?php the_title(); ?></div>
                               <div class="writers__position"><?php the_content(); ?></div>
                            </div>
                        

                    <?php endwhile; ?>
                    
                <?php wp_reset_postdata(); ?>
                    
                </div>
                
		    </div>
		    
		</div>
		
        <div class="clients" id="clients">
			<h2>OUR HAPPY CLIENTS</h2>
			<div id="slider" class="container">
			
                <?php $args = array( 'post_type' => 'testimonial' ); ?>
                <?php $loop = new WP_Query( $args ); ?>
			
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                           
                       <div class="slider__elem">
                           
                            <div class="crop-testimonial"><?php the_post_thumbnail(array(100,100)); ?></div>

                            <div class="slider__sign"><div class="slider__name"><?php the_title(); ?></div></div>

                            <div class="slider__quote"><?php the_content(); ?></div>

                        </div>

                    <?php endwhile; ?>
                    
                    <?php wp_reset_postdata(); ?>
				
			</div>
		</div>

<?php endif; ?>

<?php get_footer(); ?>

