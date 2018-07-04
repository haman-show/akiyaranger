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
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_1.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>コーヒーレンジャー</li>
              <li>究極のコーヒー焙煎</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_2.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>アースレンジャー</li>
              <li>葉山キッチン代表</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_3.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>パンプキンレンジャー</li>
              <li>みんなを笑顔にする</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_4.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>チャレンジャー</li>
              <li>スムーズなインパクトドライバー</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_5.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>オーロラレンジャー</li>
              <li>唯一無二の塗装</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_6.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>ピンクレンジャー</li>
              <li>空家レンジャー代表</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_1.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>コーヒーレンジャー</li>
              <li>ミスター葉山ファクトリー</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_2.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>アースレンジャー</li>
              <li>葉山キッチン代表</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_3.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>パンプキンレンジャー</li>
              <li>ママアフリカ</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_4.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>チャレンジャー</li>
              <li>廃材クリエイター</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_5.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>オーロラレンジャー</li>
              <li>カラーセラピスト</li>
            </ul>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url('/humans/001/'); ?>" class="box">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/human_6.jpg" class="responsive-img"></div>
	<div class="text">
          <div class="holder">
            <ul>
              <li>ピンクレンジャー</li>
              <li>空家レンジャー代表</li>
            </ul>
          </div>
        </div>
      </div>
    </a>
  </div>
</section>
<?php get_footer(); ?>
