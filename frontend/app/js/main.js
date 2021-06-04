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

    function filterSlider() {
        var city_id = $('#cities-select').val();
        var group_id = cities[city_id];

        $('.rate-slider').slick('slickUnfilter').slick('slickFilter', $('.rate-item[data-id="' + group_id + '"]').closest('.slick-slide'));
    }
    filterSlider();

    $('#cities-select').change(function () {
        filterSlider();
    });

    // $('.rate-slider').slick('slickUnfilter');
    // $('.rate-slider').slick('slickFilter', foo);
    //
    // function foo() {
    //
    //    const result = $('.rate-item').each(function () {
    //         $(this).data('id') != cities[1];
    //     });
    //    return result
    // }

    // $('.rate-slider').slick('slickUnfilter', );
    // console.log($(this).data('id') != cities[1]);
    // $('.rate-slider').slick('slickFilter', $(this).data('id') == cities[1]);


    // $('.rate-slider').slick('slickUnfilter', function () {
    //     $('.rate-item').each(function () {
    //         $(this).data('id') != cities[1]
    //     })
    // });


    // $('.rate-slider').slick('slickFilter', function () {
    //     $('.rate-item').each(function () {
    //         $(this).data('id') == cities[1]
    //     })
    // });

    // const id_index = $('.rate-item').data('id') != cities[1];

    // $('.rate-item').each(function () {
    //     $('.rate-slider').slick('slickUnfilter')
    //     if ( $(this).data('id') == cities[1]) {
    //         console.log($(this).data('id'));
    //         console.log(cities[1]);
    //         $('.rate-slider').slick('slickFilter', $(this))
    //     }
    // })


    // const id_index = $('.rate-item').each(function () {
    //     if (o) {
    //
    //     }
    // });
    // console.log(id_index);


    // $('.rate-slider').slick('slickFilter', id_index);

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

    $('.footer__accordion-item').on('click', accToggle);

    function accToggle() {
        $('.footer__accordion').not(this).find('.footer__accordion-item').removeClass('active');
        $(this).toggleClass('active');
    }

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
        var price_ip = tariffs[0].price_ip;
        var VALUE_INPT_CHECKED = $('input[name = checkbox]:checked').val();

        if (VALUE_INPT_CHECKED) {
            var IP_VALUE = $('#number_ip').val();

            $('#number_ip').attr("disabled", false);
            $('.ip__price').text(IP_VALUE * price_ip);

            calcInet();
        } else {
            $('#number_ip').attr("disabled", true);
            $('.ip__price').text(0);

            calcInet();
        }
    });

    $('#number_ip').change(function () {
        var IP_VALUE = $(this).val();
        var price_ip = tariffs[0].price_ip;
        var result = IP_VALUE * price_ip;
        $('.ip__price').text(result);

        calcInet();
    });

    function calcInet() {
        var result = +$('.ip__price').text() + +$('.tariff__price').text();

        return $('.tariff__total').text(result);
    }

    $('.tariff-tabs li').click(function () {
        var id = $(this).data('id');
        var tariff = tariffs.find(function (tariff) {
            return tariff.id === id;
        });

        priceValue(tariff.price);
        calcInet();
    });

    function priceValue(price) {
        return $('.tariff__price').text(price);
    }

    $('#chooseLocation').change(function () {
        var city_id = $(this).val();
        var group_id = cities[city_id];
        var filterGroup = tariffs.filter(function (el) {
            return el.group_id === group_id;
        });

        $('.ip__price').text(0);
        $('.tariff__price').text(filterGroup[0].price);
        calcInet();
    });

    $('#chooseLocation').change(function () {
        var city_id = $(this).val();

        var group_id = cities[city_id];
        var is_first = true;

        $('.tariff-tabs .nav li').each(function () {
            var _this = this;

            var tariff = tariffs.find(function (tariff) {
                return tariff.id == $(_this).data('id');
            });
            if (tariff.group_id == group_id) {
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

    $('.business__tab').on('click', tabToggle);

    function tabToggle() {
        $('.tabs-list').not(this).find('.business__tab').removeClass('active');
        $(this).toggleClass('active');
    }

    $('.business__tab').click(function () {

        var id = $(this).data('group');
        var tariff = tariffs.find(function (tariff) {
            return tariff.group_id === id;
        });

        $('.ip__price').text(0);

        priceValue(tariff.price);
        calcInet();
    });

    $('.business__tab').click(function () {
        var group_id = $(this).data('group');
        console.log(group_id);
        var is_first = true;

        $('.tariff-tabs .nav li').each(function () {
            var _this2 = this;

            var tariff = tariffs.find(function (tariff) {
                return tariff.id == $(_this2).data('id');
            });
            if (tariff.group_id == group_id) {
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