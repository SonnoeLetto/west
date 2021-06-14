$(document).ready(function(){
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
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    lidesToScroll: 1,
                }
            },
            {
                breakpoint: 550,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    lidesToScroll: 1,
                }
            }
        ]
    });

    $('.rate-slider__business').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    lidesToScroll: 1,
                }
            },
            {
                breakpoint: 550,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    lidesToScroll: 1,
                }
            }
        ]
    });

    function filterSlider() {
        const city_id = $('#cities-select').val();
        const group_id = cities[city_id];

        $('.rate-slider')
            .slick('slickUnfilter')
            .slick('slickFilter', $(`.rate-item[data-id="${group_id}"]`).closest('.slick-slide'));
    }
    filterSlider();


    $('#cities-select').change(function() {
        filterSlider();
    });


    $('.business__tab').click(function () {
        const group_id = $(this).data('group');
        console.log(group_id)
        $('.rate-slider__business')
            .slick('slickUnfilter')
            .slick('slickFilter', $(`.rate-item[data-id="${group_id}"]`).closest('.slick-slide'));
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



    $('.options-connect__checkbox-input').click(function () {
        const price_ip = tariffs[0].price_ip
        const VALUE_INPT_CHECKED = $('input[name = checkbox]:checked').val();

        if (VALUE_INPT_CHECKED) {
            const IP_VALUE = $('#number_ip').val();

            $('#number_ip').attr("disabled", false);
            $('.ip__price').text(IP_VALUE * price_ip);

            calcInet()
        } else {
            $('#number_ip').attr("disabled", true);
            $('.ip__price').text(0);

            calcInet()
        }
    });

    $('#number_ip').change(function () {
        const IP_VALUE = $(this).val();
        const price_ip = tariffs[0].price_ip
        const result =IP_VALUE * price_ip;
        $('.ip__price').text(result);

        calcInet()
    });



    function calcInet() {
        const result = +($('.ip__price').text()) + +($('.tariff__price').text());

        return $('.tariff__total').text(result);
    }

    $('.tariff-tabs li').click(function() {
        const id = $(this).data('id');
        const tariff = tariffs.find(tariff => tariff.id === id);



        priceValue(tariff.price);
        calcInet();
    });

    function priceValue(price) {
        return $('.tariff__price').text(price);
    }




    $('#chooseLocation').change(function () {
        const city_id = $(this).val();
        const group_id = cities[city_id];
        const filterGroup = tariffs.filter(el => el.group_id === group_id);

        $('.ip__price').text(0);
        $('.tariff__price').text(filterGroup[0].price);
        calcInet()
    });

    $('#chooseLocation').change(function() {
        const city_id = $(this).val();

        const group_id = cities[city_id];
        let is_first = true;

        $('.tariff-tabs .nav li').each(function() {
            const tariff = tariffs.find(tariff => tariff.id == $(this).data('id'));
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

        const id = $(this).data('group');
        const tariff = tariffs.find(tariff => tariff.group_id === id);

        $('.ip__price').text(0);

        priceValue(tariff.price);
        calcInet();
    });


    $('.business__tab').click(function () {
        const group_id = $(this).data('group');
        let is_first = true;

        $('.tariff-tabs .nav li').each(function() {
            const tariff = tariffs.find(tariff => tariff.id == $(this).data('id'));
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
    })


});
