<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<?php if(have_posts()) {while(have_posts()){the_post(); ?>
<?php
    $slug = $post->post_name;
    $slug = strtoupper($slug);
?>
<section class="main-content">
  <div class="container">
    <div class="comp-page-title">
      <h1><?php the_title(); ?></h1>
      <hr>
      <h2><?php echo($slug); ?></h2>
    </div>
    <?php the_content(); ?>
  </div>
</section>
<?php }} ?>
<?php get_footer(); ?>
