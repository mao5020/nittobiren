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

  //変数の設定
  var $body = $('body');

  //スクロール量を保存
  var scrollTop;

  //スクロールを固定
  function bodyFixedOn() {
    scrollTop = $(window).scrollTop();
    $body.css({
      position: 'fixed',
      top: -scrollTop
    });
  }

  //スクロールの固定を解除
  function bodyFixedOff() {
    $body.css({
      position: '',
      top: ''
    });
    
    $(window).scrollTop(scrollTop);
  }

  // sp-modal 
  $(".open-modal").click(function () {
    $(this).toggleClass('is-active');
    $(".modal-sp").toggleClass('is-modal-active');
    $("body").toggleClass('no-scroll');
  });

  // lecture-modal
  $(".lecture-modal-open").on('click',function(){
    var target = $(this).data('target');
    var modal = document.getElementById(target);
    bodyFixedOn();
    $(modal).fadeIn();
    return false;
  })

  $(".lecture-modal-close").on("click", function(){
    bodyFixedOff();
    $('.lecture-modal').fadeOut();
  })

  h_uri = location.href.split("/");
  h_uri = h_uri[h_uri.length - 2];
  console.log(h_uri);
  $('#'+h_uri).addClass("is-h_active");
});