<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<?php if(have_posts()) {while(have_posts()){the_post(); ?>
<section class="main-content single-humans">
  <div class="container">
    <div class="upper">
      <div class="photo">
        <?php if (has_post_thumbnail()) { ?>
	<?php the_post_thumbnail('full'); ?>
        <?php } else { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/no_photo.gif" class="responsive-img">
        <?php } ?>
      </div>
      <div class="text">
        <div class="block">
	  <p class="sub-title">
            <?php echo get_post_meta($post->ID, 'human_name', true); ?> Ranger
          </p>
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
    <a href="<?php echo home_url('/humans'); ?>" class="btn-back">一覧にもどる</a>
  </div>
</section>
<?php }} ?>
<?php get_footer(); ?>
