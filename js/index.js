 $(function () {
 	'use strict';

    /****************** NICE SCROLL **********************/
    /*$(function() {  
        $("body").niceScroll({cursorcolor:"#5c9ee4",
            cursoropacitymin: 0.7, 
            cursoropacitymax: 1,
            cursorwidth: "5px", 
            cursorborder: "1px solid #fff",
            zindex: "auto" | [10000],
            });
    });*/
    

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
 	/*$(window).resize(function() {
    $('.slider .carousel-inner').height($(window).height());
    $('.slider .item').height($(window).height());
    $('.slider .item img').height($(window).height());
    });
    
    $(window).trigger('resize');*/

    /******************* make the scoll down button ************/
    $(function() {
    	$('.scroll-down').click (function() {
    	$('html, body').animate({scrollTop: $('.about-us').offset().top-70 }, 'slow');
      	return false;
    	});
    });
    /****************** gallery section ***************/
    $('.all-list a').addClass("active-list-gallery");
    $(function() {
        $('.all-list').click (function() {
            $('.all-list a').addClass("active-list-gallery");
            $('.aicheve-list a').removeClass("active-list-gallery");
            $('.batches-list a').removeClass("active-list-gallery");
            $('.opening-list a').removeClass("active-list-gallery");
            /************* images hide or show **************/
            $('.gallery .gallery-images .aicheve').hide();
            $('.gallery .gallery-images .opening').hide();
            $('.gallery .gallery-images .batches').hide();
            $('.gallery .gallery-images .aicheve').show();
            $('.gallery .gallery-images .opening').show();
            $('.gallery .gallery-images .batches').show();
        });
        $('.aicheve-list').click (function() {
            $('.all-list a').removeClass("active-list-gallery");
            $('.aicheve-list a').addClass("active-list-gallery");
            $('.batches-list a').removeClass("active-list-gallery");
            $('.opening-list a').removeClass("active-list-gallery");
            /************* images hide or show **************/
            $('.gallery .gallery-images .aicheve').hide();
            $('.gallery .gallery-images .aicheve').show();
            $('.gallery .gallery-images .opening').hide();
            $('.gallery .gallery-images .batches').hide();
        });
        $('.batches-list').click (function() {
            $('.all-list a').removeClass("active-list-gallery");
            $('.aicheve-list a').removeClass("active-list-gallery");
            $('.batches-list a').addClass("active-list-gallery");
            $('.opening-list a').removeClass("active-list-gallery");
            /************* images hide or show **************/
            $('.gallery .gallery-images .aicheve').hide();
            $('.gallery .gallery-images .opening').hide();
            $('.gallery .gallery-images .batches').hide();
            $('.gallery .gallery-images .batches').show();
        });
        $('.opening-list').click (function() {
            $('.all-list a').removeClass("active-list-gallery");
            $('.aicheve-list a').removeClass("active-list-gallery");
            $('.batches-list a').removeClass("active-list-gallery");
            $('.opening-list a').addClass("active-list-gallery");
            /************* images hide or show **************/
            $('.gallery .gallery-images .aicheve').hide();
            $('.gallery .gallery-images .opening').hide();
            $('.gallery .gallery-images .opening').show();
            $('.gallery .gallery-images .batches').hide();
        });
    });

    /************** FACTS *******************/
    $('.count').each(function () {
        var $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.attr('data-stop') }, {
            duration: 1500,
            easing: 'swing',
            step: function (now) {
                $this.text(Math.ceil(now));
            }
        });
    });
});    