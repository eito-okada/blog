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
    var footerscroll = $('#aboutblog').offset().top;
    var footerdistance = 0;
    $(document).scroll(function() {
      footerdistance = $(this).scrollTop();
      if (footerscroll <= footerdistance) {
        $('.footer-logo').css({
          transform: 'scale(1.5)',
          transition: '0.3s ease'
        })
      } else {
        $('.footer-logo').css( {
          transform:'scale(1)',
          transition: '0.2s ease'
        })
      }
    })
  });