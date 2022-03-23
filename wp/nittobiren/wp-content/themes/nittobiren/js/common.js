$(function() {
  // アンカーリンク処理
  var headerHeight = 100;//固定ヘッダーの高さを入れる
  $('[href^="#"]').click(function(){
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top-headerHeight; 
    $("html, body").animate({scrollTop:position}, 200, "swing");//200はスクロールの移動スピードです
    return false;
  });

  // let uri = location.href;
  // let l_uri = uri.split("/").filter(e => Boolean(e));
  let h_menu = [
    'index',
    'about',
    'report',
    'prefectures',
    'join',
    'support',
    'link',
    'evaluation'
  ]

  // let h_menu = document.getElementsByClassName('header-content-nav-list-item');
  let test = "aaa";
  console.log(h_menu);
});