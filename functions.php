<?php
// アイキャッチ画像を有効
add_theme_support('post-thumbnails');   // カスタム投稿タイプ humans で thumbnail を使うので追記

// カスタム投稿タイプ作成
function create_post_type() {
  $humansSupports = [
    'title',
    'editor',
    'thumbnail'
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

function add_human_fields() {
  add_meta_box( 'human_setting', '人の情報', 'insert_human_fields', 'humans', 'normal');
}
add_action('admin_menu', 'add_human_fields');
 
function insert_human_fields() {
  global $post;
  echo 'その1：<br><textarea name="human_information_1" rows="10" cols="50">'.get_post_meta($post->ID, 'human_information_1', true).'</textarea>';
}

function save_human_fields( $post_id ) {
  if(!empty($_POST['human_information_1'])){
    update_post_meta($post_id, 'human_information_1', $_POST['human_information_1'] );
  }else{
    delete_post_meta($post_id, 'human_information_1');
  }
}
add_action('save_post', 'save_human_fields');
?>
