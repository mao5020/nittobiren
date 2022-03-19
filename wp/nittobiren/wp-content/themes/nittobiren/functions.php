<?php 
function register_stylesheet() { 
  wp_register_style('ress', get_stylesheet_directory_uri().'/css/ress.css');
  wp_register_style('style', get_stylesheet_directory_uri().'/style.css');

  }
  function add_stylesheet() { 
  register_stylesheet();
  wp_enqueue_style('ress', '', array(), '1.0', false);
  wp_enqueue_style('style', '', array(), '1.0', false);
  }
  add_action('wp_enqueue_scripts', 'add_stylesheet');

