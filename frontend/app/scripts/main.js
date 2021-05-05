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


$('.offer__case-slider--reverse').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
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
    $('.menu__bg').css('display', 'block')
})
$('.right-menu__btn, .menu__bg').click(() => {
    $('.right-menu').removeClass('right-menu__active');
    $('.menu__bg').css('display', 'none')
})

document.querySelectorAll('.dropdown-select').forEach(function (dropdown__wrapper) {
    dropdown__wrapper.querySelector('.dropdown__btn').addEventListener('click', function () {
        dropdown__wrapper.querySelector('.dropdown__list').classList.toggle('dropdown__list--visible');
    });

    dropdown__wrapper.querySelectorAll('.dropdown__list-item').forEach(function (listItem) {
        listItem.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdown__wrapper.querySelector('.dropdown__btn').innerText = this.innerText;
            dropdown__wrapper.querySelector('.dropdown__btn').style.color = '#1D1D1F';
            dropdown__wrapper.querySelector('.dropdown__btn').classList.add('dropdown__btn-arr-none');
            dropdown__wrapper.querySelector('.dropdown__input-hidden').value = this.dataset.value;
            dropdown__wrapper.querySelector('.dropdown__list').classList.remove('dropdown__list--visible')
        })
    });

    document.addEventListener('click', function (e) {
        if (e.target !== dropdown__wrapper.querySelector('.dropdown__btn')) {
            dropdown__wrapper.querySelector('.dropdown__list').classList.remove('dropdown__list--visible')
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Tab' || e.key === 'Escape') {
            dropdown__wrapper.querySelector('.dropdown__list').classList.remove('dropdown__list--visible');
        }
    });
});

const accordion = document.querySelectorAll('.footer__accordion-item');

accordion.forEach(item => {
    item.addEventListener('click', function () {
        if (this.classList.contains('active')) {
            this.classList.remove('active');
        } else {
            accordion.forEach(function (element) {
                element.classList.remove('active')
            });
            this.classList.add('active')
            // this.classList.toggle('active');
        }

    })
});
$(window).on('load scroll', function () {
    const top = $(window).scrollTop();
    const menu = $('.bottom-line');
    if (top > 180) {
        menu.addClass('bottom-line-fixed');
    } else {
        menu.removeClass('bottom-line-fixed');
    }
});