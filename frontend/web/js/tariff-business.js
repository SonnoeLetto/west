$(document).ready(function() {
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
                breakpoint: 650,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    lidesToScroll: 1,
                }
            }
        ]
    });
    $('.business__tab').on('click', tabToggle);

    function tabToggle() {
        $('.tabs-list').not(this).find('.business__tab').removeClass('active');
        $(this).toggleClass('active');
    }

    $('.business__tab').click(function () {
        const group_id = $(this).data('group');
        $('.rate-slider__business')
            .slick('slickUnfilter')
            .slick('slickFilter', $(`.rate-item[data-id="${group_id}"]`).closest('.slick-slide'));
        $('#number_ip').attr("disabled", true);
        $('.options-connect__checkbox-input').prop('checked', false);
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
    });

    $('#group-select').change(function() {
        const id = $('#group-select').val();

        // const group_id = cities[city_id];
        let is_first = true;

        $('.tariff-tabs .nav li').each(function() {
            const tariff = tariffs.find(tariff => tariff.id == $(this).data('id'));
            if (tariff.group_id == id) {
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

    function filterSlider() {
        const id = $('#group-select').val();

        console.log(id)
        $('.rate-slider__business')
            .slick('slickUnfilter')
            .slick('slickFilter', $(`.rate-item[data-id="${id}"]`).closest('.slick-slide'));
    }
    filterSlider();


    $('#group-select').change(function() {
        filterSlider();
    });
});
