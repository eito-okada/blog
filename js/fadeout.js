$(function(){
    var scrollend1 = $('#demo01__area').offset().top ; //ページ上部からの距離を取得
    var distance1 = 0;
    $(document).scroll(function(){
      distance1 = $(this).scrollTop(); //スクロールした距離を取得
      if (scrollend1 <= distance1) {
        $('#fade2').fadeIn();
        $('.fade').fadeOut();
      } else{

        $('.fade2').fadeOut();
        $('.fade').fadeIn();
      }
    });
  });