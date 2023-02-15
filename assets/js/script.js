$(function () {
    $('#destination_slider,#stay_slider').owlCarousel({
        loop: true,
        dragEndSpeed: false,
        stagePadding: 50,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1024: {
                items: 4
            }
        }
    });
    $('section.toprated .place_mainslider').owlCarousel({
        loop: true,
        dragEndSpeed: false,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: false,
        responsive: {
            0: {
                stagePadding: 20,
                margin: 10,
                items: 1
            },
            768: {
                stagePadding: 20,
                margin: 10,
                items: 2
            },
            1024: {
                stagePadding: 50,
                margin: 20,
                items: 2
            },
            1226: {
                stagePadding: 60,
                margin: 20,
                items: 4
            }
        }
    });
    $('section.stay .place_mainslider').owlCarousel({
        loop: true,
        dragEndSpeed: false,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: false,
        responsive: {
            0: {
                stagePadding: 10,
                margin: 10,
                items: 1
            },
            768: {
                stagePadding: 20,
                margin: 10,
                items: 2
            },
            1024: {
                stagePadding: 50,
                margin: 20,
                items: 2
            },
            1226: {
                stagePadding: 60,
                margin: 20,
                items: 3
            }
        }
    });
    $('.profileplace_mainslider').owlCarousel({
        loop: $('.profileplace_mainslider .item').size() >= 1 ? true:false,
        dragEndSpeed: false,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: false,
        responsive: {
            0: {
                stagePadding: 20,
                margin: 10,
                items: 1,
				loop:false,
            },
            768: {
                stagePadding: 20,
                margin: 10,
                items: 2
            },
            1024: {
                stagePadding: 50,
                margin: 20,
                items: 2
            },
            1226: {
                stagePadding: 50,
                margin: 20,
                items: 4
            }
        }
    });
    $('.commonplace_innerslider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        touchDrag: false,
        mouseDrag: false,
        dots: true,
        autoplay: true
    });
    $('#mostpopularslider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: false,
        dots: true,
        autoplay: true
    });
    $('.input_field .search_input input').on('click', function () {
        $(this).parents('.search_input').toggleClass('searchopen');
    })
});
