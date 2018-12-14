(function($, window) {
	$('#owl-vitrine').owlCarousel({
        loop: true,
        center: true,
        autoplay: true,
        margin:30,
        nav: false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-advogado').owlCarousel({
        loop: true,
        center: true,
        autoplay: true,
        margin:30,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $('#owl-depoimentos').owlCarousel({
        loop: true,
        center: true,
        autoplay: true,
        margin:30,
        nav: false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $(".navbar-header button").click(function(){
        $(".navbar-collapse").addClass("bounceInRight");
    });
})(jQuery, window);