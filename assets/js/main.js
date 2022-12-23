(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 100, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

    const glightbox = GLightbox({
        selector: ".glightbox",
      });

    const glightboxMobile = GLightbox({
        selector: ".glightboxMobile",
      });


      var cardSlider = new Swiper('.trouble-slider', {
        autoplay: false,
        // {
        // 	delay: 4000,
        // 	disableOnInteraction: false
        // },
        direction: 'vertical',
        // loop: true,
        slidesPerView: 6    ,
        spaceBetween: 10,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            // when window is <= 991px
            991: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        }
    });
      var cardSlider = new Swiper('.tab-mobile-slider', {
        autoplay: false,
        // {
        // 	delay: 4000,
        // 	disableOnInteraction: false
        // },
        loop: true,
        slidesPerView: 2,
        spaceBetween: 10,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window is <= 991px
            991: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        }
    });


      var cardSlider = new Swiper('.analysis-slider', {
        autoplay:{
        	delay: 4000,
        	disableOnInteraction: false
        },
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        slidesPerView: 1,
        spaceBetween: 10,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            767: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window is <= 991px
            991: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        }
    });

    var cardSlider = new Swiper('.testimoni-slider', {
        autoplay: {
        	delay: 4000,
        	disableOnInteraction: false
        },
        
        direction: 'vertical',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 10,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            // when window is <= 991px
            991: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
        }
    });


    $('.tab-overage #tab-a').click(function() {
        var this_src = $(this).children('img').attr('src');
        $('#img-overage').attr('src',this_src);
    
        if ($(this).hasClass("active")) {
            $(".tab-overage #tab-a").removeClass("active");
        } else {
            $(".tab-overage #tab-a").removeClass("active");
            $(this).addClass("active");
        }
        return false;
    });

    $('.tab-overage-mobile #tab-a').click(function() {
        var this_src = $(this).children('img').attr('src');
        $('#img-overage').attr('src',this_src);
    
        if ($(this).hasClass("active")) {
            $(".tab-overage-mobile #tab-a").removeClass("active");
        } else {
            $(".tab-overage-mobile #tab-a").removeClass("active");
            $(this).addClass("active");
        }
        return false;
    });

    
})(jQuery);

