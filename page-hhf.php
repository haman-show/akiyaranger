<?php
/*
Template Name: Humans of HAYAMA FACTORY のテンプレート
*/
?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<section class="main-content special-content">
  <div class="container-special">
    <div class="top-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/hhf_top2.jpg);">
      <h1>
	<span>Humans</span>
	<span>of</span>
	<span>HAYAMA</span>
	<span>FACTORY</span>
      </h1>
    </div>
    <div class="list clearfix">
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_1.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_2.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_3.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_4.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_5.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_6.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_1.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_2.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_3.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_4.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_5.jpg" class="responsive-img"></div>
      <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/human_6.jpg" class="responsive-img"></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
