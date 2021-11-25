$(function () {
    var footerscroll = $('#aboutblog').offset().top;
    var footerdistance = 0;
    $(document).scroll(function () {
        footerdistance = $(this).scrollTop();
        if (footerscroll <= footerdistance) {
            $('.footer-logo-link').css({
                transform: 'scale(1.5)',
                transition: '1s ease'
            })
        } else {
            $('.footer-logo-link').css({
                transform: 'scale(1)',
                transition: '1s ease-in-out'
            })
        }
    })
})