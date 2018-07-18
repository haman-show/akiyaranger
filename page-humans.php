<?php
/*
Template Name: Humans of HAYAMA FACTORY のテンプレート
*/
?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<section class="main-content special-content">
  <div class="container-special">
    <div class="top-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/hhf_top2.jpg);" id="para1">
      <div class="text">
        <h1>
	  <span>Humans</span>
	  <span>of</span>
	  <span>HAYAMA</span>
	  <span>FACTORY</span>
        </h1>
        <p class="sub-title">葉山ファクトリーな人たち</p>
      </div>
      <div class="scroll">
        <a href="#list-top" class="scroll-link">SCROLL</a>
      </div>
    </div>
    <div class="list clearfix" id="list-top">
      <?php query_posts('post_type=humans'); ?>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="box">
	<div class="photo">
          <?php if (has_post_thumbnail()) { ?>
	  <?php the_post_thumbnail('full'); ?>
          <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/nophoto.gif" class="responsive-img">
          <?php } ?>
        </div>
	<div class="text">
          <div class="holder">
            <ul>
              <li><?php the_title(); ?></li>
	      <li><?php echo get_post_meta($post->ID, 'human_catch', true); ?></li>
            </ul>
          </div>
        </div>
      </a>
      <?php endwhile; endif; ?>
  </div>
</section>
<?php get_footer(); ?>
