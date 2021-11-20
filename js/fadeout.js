$(function(){
    var scrollend = $('#demo01__area').offset().top ; //ページ上部からの距離を取得
    var distance = 0;
    $(document).scroll(function(){
      distance = $(this).scrollTop(); //スクロールした距離を取得
      if (scrollend <= distance) {
        $('.fade').fadeOut();
      } else{
        $('.fade').fadeIn();
      }
    });
  });