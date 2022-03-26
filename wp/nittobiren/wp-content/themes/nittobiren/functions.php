<?php
function twpp_deregister_styles() {
  wp_deregister_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'twpp_deregister_styles' );