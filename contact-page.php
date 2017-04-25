<?php
/*
Template Name: Contacts page
*/


get_header(); ?>
    
    <div class="container">
       
       <div class="custom-page">
        
        <h1>Feel free to contact us 24/7</h1>
        
         <div class="col-xs-12">
            <div class="blog_content-block contacts_info">
                <?php echo do_shortcode( '[contact-form-7 id="174" title="Contact page"]' ) ?>
            </div>
        </div>
        
        </div>
        
    </div>
        
<?php get_footer(); ?>