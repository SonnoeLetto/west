$(document).ready(function(){
    $('.promotion-slider').slick({
        infinite: true,
        dots: true,
        arrows: false
    });

    $('.news-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.offer__case-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnFocus: true,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]

    });


    $('.burger').click(() => {
        $('.right-menu').toggleClass('right-menu__active');
        $('.menu__bg').css('display', 'block');
    })
    $('.right-menu__btn, .menu__bg').click(() => {
        $('.right-menu').removeClass('right-menu__active');
        $('.menu__bg').css('display', 'none');
    });


    $('.footer__accordion-item').on('click', accToggle);

    function accToggle() {
        $('.footer__accordion').not(this).find('.footer__accordion-item').removeClass('active');
        $(this).toggleClass('active');
    }


    $(window).on('load scroll', function () {
        const top = $(window).scrollTop();
        const menu = $('.bottom-line');
        if (top > 180) {
            menu.addClass('bottom-line-fixed');
        } else {
            menu.removeClass('bottom-line-fixed');
        }
    });


    $('.options-connect__form').submit(function() {
        console.log($(this).serialize());
        return false;
    });
});
