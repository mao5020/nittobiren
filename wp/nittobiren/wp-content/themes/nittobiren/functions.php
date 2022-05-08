<?php
function twpp_deregister_styles() {
  wp_deregister_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'twpp_deregister_styles' );

function post_has_archive($args, $post_type){
  if('post' == $post_type){
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
    $args['label'] = "お知らせ";
  }
  return $args;
}
add_filter('register_post_type_args','post_has_archive', 10, 2);
