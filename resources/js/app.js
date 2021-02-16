require('./bootstrap');

if ($(window).width() > 992) {
    $(window).scroll(function(){  
        if ($(this).scrollTop() > 550) {
            $('#navbar-top').addClass("fixed-top");
            $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
        }else{
            $('#navbar-top').removeClass("fixed-top");
            $('body').css('padding-top', '0');
        }   
    });
}

if ($(window).width() < 800) {
    $(window).scroll(function(){  
        if ($(this).scrollTop() > 650) {
            $('#navbar-top').addClass("fixed-top");
            $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
        }else{
            $('#navbar-top').removeClass("fixed-top");
            $('body').css('padding-top', '0');
        }   
    });
}

if ($(window).width() < 768) {
    $('.navbar-nav').removeClass("ml-auto");
}