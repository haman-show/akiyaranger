<?php get_header(); ?>
<section class="main-content">
  <div class="container">
    <?php if(have_posts()) {while(have_posts()){the_post(); ?>
      <?php the_content(); ?>
    <?php }} ?>
  </div>
</section>
<?php get_footer(); ?>
