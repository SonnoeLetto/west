'use strict';

$(document).ready(function () {
    $('.promotion-slider').slick({
        infinite: true,
        dots: true,
        arrows: false
    });
    $('.rate-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
            breakpoint: 1200,
            settings: {
                arrows: false
            }
        }, {
            breakpoint: 992,
            settings: {
                arrows: false,
                slidesToShow: 2,
                lidesToScroll: 1
            }
        }, {
            breakpoint: 550,
            settings: {
                arrows: false,
                slidesToShow: 1,
                lidesToScroll: 1
            }
        }]
    });
    $('.news-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        responsive: [{
            breakpoint: 1200,
            settings: {
                arrows: false,
                slidesToShow: 2
            }
        }, {
            breakpoint: 600,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }]
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
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }]

    });

    $('.offer__case-slider--reverse').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $('.burger').click(function () {
        $('.right-menu').toggleClass('right-menu__active');
        $('.menu__bg').css('display', 'block');
    });
    $('.right-menu__btn, .menu__bg').click(function () {
        $('.right-menu').removeClass('right-menu__active');
        $('.menu__bg').css('display', 'none');
    });

    var accordion = document.querySelectorAll('.footer__accordion-item');

    accordion.forEach(function (item) {
        item.addEventListener('click', function () {
            if (this.classList.contains('active')) {
                this.classList.remove('active');
            } else {
                accordion.forEach(function (element) {
                    element.classList.remove('active');
                });
                this.classList.add('active');
                // this.classList.toggle('active');
            }
        });
    });

    $(window).on('load scroll', function () {
        var top = $(window).scrollTop();
        var menu = $('.bottom-line');
        if (top > 180) {
            menu.addClass('bottom-line-fixed');
        } else {
            menu.removeClass('bottom-line-fixed');
        }
    });

    $('.options-connect__checkbox-input').click(function () {
        $(this).toggleClass('activeChecbox');
        if ($('.options-connect__checkbox-input').hasClass('activeChecbox')) {
            $('#number_ip').attr("disabled", false);
        } else {
            $('#number_ip').attr("disabled", true);
            $('.ip__price').text(0);
            calcInet();
        }
    });

    $('#number_ip').change(function () {

        var result = $(this).val() * tariffs[0].ip;
        console.log(result);
        $('.ip__price').text(result);
        calcInet();
    });

    $('#chooseLocation').change(function () {
        $('.ip__price').text(0);
        $('.tariff__price').text(tariffs[0].price);
        calcInet();
    });
    //
    function calcInet() {
        var result = +$('.ip__price').text() + +$('.tariff__price').text();
        return $('.tariff__total').text(result);
    }

    $('.tariff-tabs li').click(function () {
        var id = $(this).data('id');
        var tariff = tariffs.find(function (tariff) {
            return tariff.id === id;
        });

        function priceValue() {
            return $('.tariff__price').text(tariff.price);
        }
        priceValue();
        calcInet();
    });

    $('.tariff-business__tabs > ul > li').click(function () {
        $('.ip__price').text(0);
        $('.tariff__price').text(tariffs[0].price);
        calcInet();

        // const a = ($('.tariff-tabs li').attr('class'));
        // console.log(a)

        // const y = $('.tariff-tabs li.active');
        // y.removeClass('active');
        // const a = ($('.tariff-tabs li'));
        // const b = $(a[0]).addClass('active');
    });

    $('#chooseLocation').change(function () {
        var city_id = $(this).val();
        var group_id = cities[city_id];
        var is_first = true;

        $('.tariff-tabs .nav li').each(function () {
            if ($(this).data('id') == group_id) {
                $(this).show();
                if (is_first) {
                    $(this).find('a').tab('show');
                    is_first = false;
                }
            } else {
                $(this).hide();
            }
        });
    });
});
// console.log($('.tariff-result > .tariff-result').attr('title'));