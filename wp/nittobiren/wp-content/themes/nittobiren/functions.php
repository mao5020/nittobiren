<?php
function twpp_deregister_styles() {
  wp_deregister_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'twpp_deregister_styles' );

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

function change_loginpage_username_label($label){
  if (in_array($GLOBALS['pagenow'], array('wp-login.php'))) {
    if ($label == 'ユーザー名またはメールアドレス') { 
      $label = 'ユーザー名';
    }
  }
  return $label;
}
add_filter( 'gettext', 'change_loginpage_username_label' );
function login_logo() {
echo '<style type="text/css">
#login h1 a {
background: none;

}
.login #backtoblog a, .login #nav a{
  display:none;
}
#language-switcher{
  display:none;
}
.wp-core-ui .button-primary{
  background-color: #000;
  border-block-color: #000;
}
.wp-core-ui .button, .wp-core-ui .button-secondary{
  border-block-color: #000;
}
.wp-core-ui .button-primary{
  background-color: #000;
  border-block-color: #000;
}
.wp-core-ui .button-primary{
  border-color: #000;
}
.wp-core-ui .button, .wp-core-ui .button-secondary{
  color:#000;
}
.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large{
  color:#fff;
}
.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover{
  background: #B50000;
  border-color: #B50000;
}
.button-secondary:hover{
  color:#B50000 !important;
}
input[type=checkbox]:focus, input[type=color]:focus, input[type=date]:focus, input[type=datetime-local]:focus, input[type=datetime]:focus, input[type=email]:focus, input[type=month]:focus, input[type=number]:focus, input[type=password]:focus, input[type=radio]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=time]:focus, input[type=url]:focus, input[type=week]:focus, select:focus, textarea:focus{
  border-color: #B50000;
  box-shadow: 0 0 0 1px #B50000;
}
.login .button.wp-hide-pw:focus{
  border-color: #B50000;
    box-shadow: 0 0 0 1px #B50000;
}
</style>';
}
add_action('login_head', 'login_logo');
?>