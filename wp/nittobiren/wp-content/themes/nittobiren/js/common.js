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

  // sp-modal 
  $(".open-modal").click(function () {
    $(this).toggleClass('is-active');
    $(".modal-sp").toggleClass('is-modal-active')
});

  h_uri = location.href.split("/");
  h_uri = h_uri[h_uri.length - 2];
  console.log(h_uri);
  $('#'+h_uri).addClass("is-h_active");
});