<!DOCTYPE html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122652960-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122652960-1');
  </script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge7">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <title>空家レンジャー</title>
  <?php if(is_front_page()):/*ホームが表示されている場合*/ ?>
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo home_url('/') ?>">
  <meta property="og:title" content="<?php bloginfo('name') ?>">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp_default.jpg">
  <?php else:/*ホーム以外のページが表示されている場合*/ ?>
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?php the_permalink() ?>">
  <meta property="og:title" content="<?php wp_title('', true, 'right'); ?> | <?php bloginfo('name') ?>">
  <?php if ( has_post_thumbnail() ) {
    $image_id = get_post_thumbnail_id ();
    $image_url = wp_get_attachment_image_src ($image_id, true);
    $ogp_image_path = $image_url[0];
  } else {
    $ogp_image_path = get_template_directory_uri() . '/images/ogp_default.jpg';
  } ?>
  <meta property="og:image" content="<?php echo $ogp_image_path; ?>">
  <?php endif; ?>
  <!--共通-->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:site_name"  content="<?php bloginfo() ?>">
  <meta property="og:description" content="<?php bloginfo('description') ?>">
  <!--Facebook-->
  <meta property="fb:app_id" content="886486831548457">
  <meta property="article:publisher" content="https://www.facebook.com/akiyaranger/">
  <!--twitter-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@akiyaranger">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.0&appId=1580726915563587&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
  <div class="container">
    <div class="menu">
      <div id="nav-drawer">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
          <div class="head">
            <label class="nav-unshown" for="nav-input">MENU</label>
          </div>
          <nav>
            <a href="<?php echo home_url(); ?>">
              <div class="jp">空家レンジャー</div>
              <hr>
              <div class="eng">AKIYA RANGER</div>
            </a>
            <a href="<?php echo home_url('/hayamafactory'); ?>">
              <div class="jp">葉山ファクトリー</div>
              <hr>
              <div class="eng">HAYAMA FACTORY</div>
            </a>
            <a href="<?php echo home_url('/hayamakitchen'); ?>">
              <div class="jp">葉山キッチン</div>
              <hr>
              <div class="eng">HAYAMA KITCHEN</div>
            </a>
            <a href="<?php echo home_url('/coworkingbar'); ?>">
              <div class="jp">逗子コワーキングスペース〇〇〇</div>
              <hr>
              <div class="eng">ZUSHI COWORKINGBAR</div>
            </a>
          </nav>
        </div>
      </div>
    </div>
    <div class="logo">
      <a href="<?php echo home_url() ?>">
        <img src="http://nogelab.sakura.ne.jp/akiyaranger/wp-content/uploads/2018/03/logo.png" width="50" height="50" alt="空家レンジャー">
      </a>
    </div>
    <div class="login"></div>
  </div>
</header>
