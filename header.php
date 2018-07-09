<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge7">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <title>空家レンジャー</title>
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
