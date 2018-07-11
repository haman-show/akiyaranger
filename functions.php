<?php
// アイキャッチ画像を有効
add_theme_support('post-thumbnails');   // カスタム投稿タイプ humans で thumbnail を使うので追記

function replaceImagePath($arg) {
  $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
  return $content;
}  
add_action('the_content', 'replaceImagePath');

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
  add_meta_box( 'human_setting', '本文以外の要素', 'insert_human_fields', 'humans', 'normal');
}
add_action('admin_menu', 'add_human_fields');
 
function insert_human_fields() {
  global $post;
  echo 'レンジャーネーム(英)：<input type="text" name="human_name" value="'.get_post_meta($post->ID, 'human_name', true).'" size="50" /><br>';
  echo 'キャッチコピー：<input type="text" name="human_catch" value="'.get_post_meta($post->ID, 'human_catch', true).'" size="50" /><br>';
  echo '枠の中の説明文：<br><textarea name="human_information_1" rows="10" cols="50">'.get_post_meta($post->ID, 'human_information_1', true).'</textarea>';
}

function save_human_fields( $post_id ) {
  if(!empty($_POST['human_name'])){
    update_post_meta($post_id, 'human_name', $_POST['human_name'] );
  }else{
    delete_post_meta($post_id, 'human_name');
  }
  if(!empty($_POST['human_catch'])){
    update_post_meta($post_id, 'human_catch', $_POST['human_catch'] );
  }else{
    delete_post_meta($post_id, 'human_catch');
  }
  if(!empty($_POST['human_information_1'])){
    update_post_meta($post_id, 'human_information_1', $_POST['human_information_1'] );
  }else{
    delete_post_meta($post_id, 'human_information_1');
  }
}
add_action('save_post', 'save_human_fields');
?>
