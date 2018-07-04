<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<?php if(have_posts()) {while(have_posts()){the_post(); ?>
<section class="main-content single-humans">
  <div class="container">
    <div class="upper">
      <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/example_1.jpg" class="responsive-img"></div>
      <div class="text">
        <div class="block">
          <p class="sub-title">Ranger</p>
          <h1><?php the_title(); ?></h1>
          <div class="text-read">
            <?php echo get_post_meta($post->ID, 'human_information_1', true); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="text-read main">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php }} ?>
<?php get_footer(); ?>
