<div class="container">
 
  <h1 class="blog-post-title">
    <?php if(is_single()) : ?>
      <?php the_title(); ?>
    <?php else : ?>
        <?php the_title(); ?>
    <?php endif; ?>
  </h1>
  
  <?php if(has_post_thumbnail()) : ?>
    <div class="post-thumb">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <?php if(is_single()) : ?>
    <?php the_content(); ?>
  <?php else : ?>
    <?php the_excerpt(); ?>
  <?php endif; ?>

  <?php if(is_single()) : ?>
    <?php comments_template(); ?>
  <?php endif; ?>
  
</div><!-- /.blog-post -->
