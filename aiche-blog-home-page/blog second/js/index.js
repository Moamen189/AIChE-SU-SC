 $(function () {
 	'use strict';


 	/******************* make the navbar change on scrolling    ******************/
    $(window).resize(function() {
        $('.logo-small').hide();
        $('.logo-big').show();
        $(window).scroll(function() {
        if ($(this).scrollTop() >= 5) { // this refers to window
            $('.navbar').addClass("navbar-scolled");
            $('.navbar-default .navbar-nav > li > a').addClass("scolled");
            $('.navbar-default .navbar-nav > .active > a').addClass("active");
            $('.logo-small').show();
            $('.logo-big').hide();
        }
        if ($(this).scrollTop() <= 100) { // this refers to window
            $('.navbar').removeClass("navbar-scolled");
            $('.navbar-default .navbar-nav > li > a').removeClass("scolled");
            $('.logo-small').hide();
            $('.logo-big').show();
        }

        });
    });   
    /******************* make the slider take the height of the screen ************/
 	$(window).resize(function() {
    $('.slider .carousel-inner').height(0.5*$(window).height());
    $('.slider .item').height(0.5*$(window).height());
    $('.slider .item img').height(0.5*$(window).height());
    });
    
    $(window).trigger('resize');

});    