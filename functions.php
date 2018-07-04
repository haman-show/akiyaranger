<?php
// アイキャッチ画像を有効
add_theme_support('post-thumbnails');   // カスタム投稿タイプ humans で thumbnail を使うので追記

// カスタム投稿タイプ作成
function create_post_type() {
  $humansSupports = [
    'title',
    'editor',
    'thumbnail',
    'revisions'
  ];

  // add post type
  register_post_type( 'humans',
    array(
      'labels' => [
        'name' => '特設コンテンツ',
	'singular_name' => 'humans'
      ],
      'public' => true,
      'menu_position' => 5,
      'supports' => $humansSupports
    )
  );

}

add_action( 'init', 'create_post_type' );
?>
