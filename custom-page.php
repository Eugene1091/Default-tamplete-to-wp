<?php
/*
Template Name: Custom essay writing
*/


get_header(); ?>

        <div class="main-banner col-xs-12 col-sm-12" id="main-banner" style="background-image: url('<?php echo get_theme_mod('custom_image', get_bloginfo('template_url').'/img/layer-2.jpg'); ?> ');">
			<div class="container">
			    <div class="main-wrapper-banenr clearfix">
                    <div class="left-wrapepr col-xs-12 col-sm-8">
                        <h1><?php echo get_theme_mod('custom_heading', 'BEST EXPERT LOREM TEXT'); ?></h1>
                        <div class="main-banner__description">
                            <?php echo get_theme_mod('custom_text', 'Lorem ipsum'); ?>
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
		


        <div class="main-content-page clearfix" id="home-text">
            <div class="container">
               
                <article>

                    <?php get_template_part('template-part/content-write-page',get_post_format()); ?>

                </article>
                
            </div>
		</div>
		

<?php get_footer(); ?>

