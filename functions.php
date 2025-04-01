<?php
function mytheme_enqueue_styles()
{
  // wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', array(), '1.0.0');
  wp_enqueue_style('css', get_theme_file_uri('/assets/css/style.css'));
  if (!wp_script_is('jquery', 'enqueued')) {
    wp_enqueue_script('jquery');
  }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// スラッグの日本語禁止
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
  if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
    $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
  }
  return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);

//サムネイルサイズ
function setup_post_thumbnails()
{
  add_theme_support('post-thumbnails', ['post']);
  add_image_size('small', 320, 213, true);
  add_image_size('heightImg', 1080, 507, true);
  add_image_size('widthlg', 640, 427, true);
}
add_action('after_setup_theme', 'setup_post_thumbnails');

//the_content()の<p>タグ挿入禁止
function remove_wpautop_content_filter()
{
  remove_filter('the_content', 'wpautop');
}
add_action('init', 'remove_wpautop_content_filter');

//デフォルト投稿関係
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
    $args['label'] = 'お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

remove_filter('the_excerpt', 'wpautop');

//JPG画像の品質を１００％でアップロード
function img_uncompressed()
{
  return 100;
}
add_filter('jpeg_quality', 'img_uncompressed');


// デフォルトの画像サイズを無効にする
function disable_default_image_sizes($sizes)
{
  unset($sizes['thumbnail']);
  unset($sizes['medium']);
  unset($sizes['medium_large']);
  unset($sizes['large']);
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'disable_default_image_sizes');

//日付変更
add_filter('wpcf7_support_html5_fallback', '__return_true');

// 投稿タイプ "post" に抜粋を有効化
add_post_type_support('post', 'excerpt');

//記事抜粋表示文字数
function custom_excerpt_length($length)
{
  return 38; // 表示する単語数
}
add_filter('excerpt_length', 'custom_excerpt_length');

//表示件数の変更
function change_set_garden($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if (isset($query->query['is_custom_query']) && $query->query['is_custom_query']) {
    return;
  }

  if (is_archive('news')) {
    $query->set('posts_per_page', -1);
    $query->set('orderby', 'date');
    $query->set('order', 'DESC');
  }
}
add_action('pre_get_posts', 'change_set_garden');

//コンタクトフォーム７のPタグ禁止
add_filter('wpcf7_autop_or_not', '__return_false');

function custom_wpcf7_validation_error_checkbox($result, $tag)
{
  if ('checkbox-685' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, 'プライバシーポリシーへの同意がないと送信できません。');
    }
  }
  return $result;
}
add_filter('wpcf7_validate_checkbox', 'custom_wpcf7_validation_error_checkbox', 10, 2);


function custom_wpcf7_validation_error_message($result, $tag)
{
  if ('your-company' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '会社名を入力してください。');
    }
  }
  if ('your-busyo' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '部署を入力してください。');
    }
  }
  if ('your-miyoji' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, 'ご担当者の苗字を入力してください。');
    }
  }
  if ('your-name' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, 'ご担当者の名前を入力してください。');
    }
  }
  return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validation_error_message', 10, 2);


function custom_wpcf7_validation_error_email($result, $tag)
{
    if ('your-email' == $tag->name) {
        if (empty($_POST[$tag->name])) {
            $result->invalidate($tag, 'メールアドレスを入力してください。');
        }
    }
        return $result;
}
add_filter('wpcf7_validate_email', 'custom_wpcf7_validation_error_email', 10, 2);

function custom_wpcf7_validation_error_tel($result, $tag)
{
    if ('your-tel' == $tag->name) {
        if (empty($_POST[$tag->name])) {
            $result->invalidate($tag, '電話番号を入力してください。');
        }
    }
        return $result;
}
add_filter('wpcf7_validate_tel', 'custom_wpcf7_validation_error_tel', 10, 2);

function custom_wpcf7_validation_error_textarea($result, $tag)
{
    if ('your-message' == $tag->name) {
        if (empty($_POST[$tag->name])) {
            $result->invalidate($tag, 'お問い合わせ内容・お悩みごとを入力してください。');
        }
    }
        return $result;
}
add_filter('wpcf7_validate_textarea', 'custom_wpcf7_validation_error_textarea', 10, 2);