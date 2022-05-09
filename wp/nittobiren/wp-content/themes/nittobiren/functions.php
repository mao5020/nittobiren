<?php
function twpp_deregister_styles() {
  wp_deregister_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'twpp_deregister_styles' );

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );