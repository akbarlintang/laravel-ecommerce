require('./bootstrap');

if ($(window).width() > 992) {
    $(window).scroll(function(){
        if ($(this).scrollTop() > 40) {
            $('#navbar-top').addClass("fixed-top");
            $('body').css('padding-top', $('.top-nav').outerHeight() + 'px');
        } else {
            $('#navbar-top').removeClass("fixed-top");
            $('body').css('padding-top', '0');
        }
    });
}