$(document).ready(function() {
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

    $('#chooseLocation').change(function() {
        const city_id = $(this).val();

        const group_id = cities[city_id];
        $('#number_ip').attr("disabled", true);
        $('.options-connect__checkbox-input').prop('checked', false);
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
});
