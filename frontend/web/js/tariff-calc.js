$(document).ready(function() {
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

    $('#group-select2').change(function () {
        const id = $('#group-select2').val();
        const group_id = cities[id];
        const filterGroup = tariffs.filter(el => el.group_id === group_id);

        $('.ip__price').text(0);
        $('.tariff__price').text(filterGroup[0].price);
        calcInet()
    });


    $('.business__tab').click(function () {

        const id = $(this).data('group');
        const tariff = tariffs.find(tariff => tariff.group_id === id);

        $('.ip__price').text(0);

        priceValue(tariff.price);
        calcInet();
    });
});
