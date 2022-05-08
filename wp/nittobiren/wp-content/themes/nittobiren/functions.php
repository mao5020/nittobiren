<?php
function twpp_deregister_styles() {
  wp_deregister_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'twpp_deregister_styles' );

// // クエリカスタマイズ【お知らせ新着表示】
// function foo_modify_main_queries ( $query ) {
//   if ( ! is_admin() && $query->is_main_query() ) { // 管理画面以外かつメインクエリーを対象とする
//     if ( $query->is_home() ) {
//       $query->set( 'post_type', array('news')); // 投稿とカスタム投稿（blog）を含める
//     }
//   }
// }
// add_action( 'pre_get_posts', 'foo_modify_main_queries' );