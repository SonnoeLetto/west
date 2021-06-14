$(document).ready(function() {
    $('.card__btn-text').click(function (event) {
        $('.popup').fadeIn();
        $('.popup').addClass('disabled');
        $('.popup__content').html($(this).next().html())
    })

    $('.popup__close').click(function() {
        $('.popup').fadeOut();
    });

    $(document).mouseup(function (e) {
        let popup = $('.popup__body');
        if(e.target!=popup[0]&&popup.has(e.target).length === 0) {
            $('.popup').fadeOut();
        }
    });
});