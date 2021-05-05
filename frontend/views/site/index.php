<?php

use common\models\News;
use common\models\Slider;
?>

<section class="promotion">

        <div class="promotion-slider">
            <?php foreach (Slider::getActive() as $slider) { ?>
            <div class="promotion-slider__item promotion-slider__type<?= $slider->type ?>">
                <picture>
                    <source media="(max-width: 480px)" srcset="/uploads/sliders/<?=$slider->img_mobile?>">
                    <source media="(max-width: 1200px)" srcset="/uploads/sliders/<?=$slider->img_tablet?>">
                    <img class="promotion-slider__img" src="/uploads/sliders/<?= $slider->img_desktop ?>" alt="">
                </picture>

                <!--<div class="wrap-img">-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="promotion__content">
                                <div class="promotion__content-wrap">
                                    <h5 class="promotion__content-title" style="color: #<?=$slider->title_color ?>"><?= $slider->title ?></h5>
                                    <p class="promotion__content-text" style="color: #<?=$slider->text_color ?>"><?= $slider->text ?></p>
                                    <a class="promotion__content-btn"><?= $slider->linkText ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

<!--            <div class="promotion-slider__item">-->
<!---->
<!--                <img class="promotion-slider__img" src="img/slider_img/Карусель2.jpg" alt="">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="promotion__content">-->
<!--                                <h3 class="promotion__content-title">Без штрафов за превышение скорости по Одессе:)</h3>-->
<!--                                <a class="promotion__content-btn">Подключить</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="promotion-slider__item">-->
<!--                <img class="promotion-slider__img" src="img/slider_img/Карусель.jpg" alt="">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="promotion__content">-->
<!--                                <h3 class="promotion__content-title">Без штрафов за превышение скорости по Одессе:)</h3>-->
<!--                                <a class="promotion__content-btn">Подключить</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </section>

<section class="offer">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">

                    <div class="offer__check">
                        <h5 class="offer__check-title"><?= Yii::t('site', 'Лідируючі підприємства Одеси і області вибирають рішення Westelecom,')?>
                            <span> <?= Yii::t('site', 'щоб працювати продуктивніше')?></span>
                        </h5>
                        <p class="offer__check-text">
                            <?= Yii::t('site', 'Увімкніть цифрові рішення в команду')?>
                        </p>

                        <form class="offer__check-form" action="" method="get">
                            <input class="offer__check-form-input" type="text" name="username"
                                   placeholder="<?= Yii::t('site', 'Ваше ім\'я')?>">
                            <input class="offer__check-form-input" type="tel" name="Phone number"
                                   placeholder="<?= Yii::t('site', 'Номер телефону')?>">
                            <button class="offer__check-form-btn" name="download"><?= Yii::t('site', 'Завантажити')?></button>
                        </form>

                    </div>

                    <div class="offer__case">
                        <p class="offer__case-text"><?= Yii::t('site', 'Завантажити комерційну пропозицію pdf для керівника')?></p>
                        <div class="offer__case-slider">
                            <div class="card" style="background: #FF375F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 1</div>
                                    <a class="card__btn-text">Подключение банковских
                                        терминалов и отделений банка
                                        к сети Интернет...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #FFA227">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 2</div>
                                    <a class="card__btn-text">РПодключение 5 медицинских
                                        центров по г. Одессе к сети
                                        Интернет с выделенным
                                        IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #00D37F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 3</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #2997FF">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 4</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #315EFB">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 5</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #BF5AF2">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 6</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP адресом
                                        и IPTV...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #FF375F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 7</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #FFA227">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 8</div>
                                    <a class="card__btn-text">Подключение к сети Интернет с
                                        выделенным IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #00D37F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 9</div>
                                    <a class="card__btn-text">Подключение к сети Интернет с
                                        выделенным IP адресом...</a>
                                </div>
                            </div>


                        </div>
                        <div class="offer__case-slider--reverse">
                            <div class="card" style="background: #FF375F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 1</div>
                                    <a class="card__btn-text">Подключение банковских
                                        терминалов и отделений банка
                                        к сети Интернет...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #FFA227">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 2</div>
                                    <a class="card__btn-text">РПодключение 5 медицинских
                                        центров по г. Одессе к сети
                                        Интернет с выделенным
                                        IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #00D37F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 3</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #2997FF">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 4</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #315EFB">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 5</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #BF5AF2">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 6</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP адресом
                                        и IPTV...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #FF375F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 7</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #FFA227">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 8</div>
                                    <a class="card__btn-text">Подключение к сети Интернет с
                                        выделенным IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #00D37F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 9</div>
                                    <a class="card__btn-text">Подключение к сети Интернет с
                                        выделенным IP адресом...</a>
                                </div>
                            </div>
                        </div>
                        <div class="offer__case-slider">
                            <div class="card" style="background: #FF375F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 1</div>
                                    <a class="card__btn-text">Подключение банковских
                                        терминалов и отделений банка
                                        к сети Интернет...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #FFA227">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 2</div>
                                    <a class="card__btn-text">РПодключение 5 медицинских
                                        центров по г. Одессе к сети
                                        Интернет с выделенным
                                        IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #00D37F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 3</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #2997FF">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 4</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #315EFB">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 5</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #BF5AF2">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 6</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP адресом
                                        и IPTV...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #FF375F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 7</div>
                                    <a class="card__btn-text">Подключение к сети Интернет
                                        с выделенным IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #FFA227">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 8</div>
                                    <a class="card__btn-text">Подключение к сети Интернет с
                                        выделенным IP адресом...</a>
                                </div>
                            </div>
                            <div class="card" style="background: #00D37F">
                                <div class="card__inner" href="">
                                    <div class="card__btn-title">Кейс 9</div>
                                    <a class="card__btn-text">Подключение к сети Интернет с
                                        выделенным IP адресом...</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="options">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="options__inner">
                        <div class="options__item options-connect">
                            <div class="options-connect__title-wrapper">
                                <h5 class="options-connect__title"><?= Yii::t('site', 'Експрес-заявка на підключення')?></h5>
                            </div>

                            <form class="options-connect__form" action="">

                                <div class="options-connect__select">
                                    <div class="dropdown-select">
                                        <button class="dropdown__btn" type="button"><span><?= Yii::t('site', 'Населений пункт')?></span>
                                        </button>
                                        <ul class="dropdown__list">
                                            <li class="dropdown__list-item" data-value="Odessa"> Одесса</li>
                                            <li class="dropdown__list-item" data-value="not od"> Не одесса</li>
                                        </ul>
                                        <input type="text" class="dropdown__input-hidden" value=""
                                               name="sel-category">
                                    </div>
                                </div>
                                <div class="options-connect__checkbox">
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox"><p>
                                                    <?= Yii::t('site', 'Інтернет')?></p></label>
                                        </div>
                                        <div class="options-connect__select-checkbox">
                                            <div class="dropdown-select">
                                                <button class="dropdown__btn" type="button">
                                                    500Мбит/с - 540грн/м</button>
                                                <ul class="dropdown__list">
                                                    <li class="dropdown__list-item" data-value="Odessa">500Мбит/с -
                                                        540грн/м
                                                    </li>
                                                    <li class="dropdown__list-item" data-value="not od">500Мбит/с -
                                                        540грн/м
                                                    </li>
                                                </ul>
                                                <input type="text" class="dropdown__input-hidden" value=""
                                                       name="sel-category">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox"><p>
                                                    <?= Yii::t('site', 'Відеоспостереження')?></p></label>
                                        </div>
                                        <input class="form-input checkbox-input" type="tel" readonly name="phone"
                                               placeholder="Инд.расчет">
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox"><p>
                                                    <?= Yii::t('site', 'Цифрове TV')?>
                                                    </p></label>
                                        </div>
                                        <div class="options-connect__select-checkbox">
                                            <div class="dropdown-select">
                                                <button class="dropdown__btn" type="button" >
                                                    Премиум - 159грн/м</button>
                                                <ul class="dropdown__list">
                                                    <li class="dropdown__list-item" data-value="Odessa">не премиум -
                                                        159грн/м
                                                    </li>
                                                    <li class="dropdown__list-item" data-value="not od"> премиум
                                                    </li>
                                                </ul>
                                                <input type="text" class="dropdown__input-hidden" value=""
                                                       name="sel-category">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox"><p>
                                                    <?= Yii::t('site', 'Домашній телефон ')?>
                                                    </p></label>
                                        </div>
                                        <div class="options-connect__select-checkbox">
                                            <div class="dropdown-select">
                                                <button class="dropdown__btn" type="button">
                                                    Премиум 120 - 89грн/м</button>
                                                <ul class="dropdown__list">
                                                    <li class="dropdown__list-item" data-value="Odessa">Премиум 120
                                                        - 89грн/м
                                                    </li>
                                                    <li class="dropdown__list-item" data-value="not od">Премиум 120
                                                        - 89грн/м
                                                    </li>
                                                </ul>
                                                <input type="text" class="dropdown__input-hidden" value=""
                                                       name="sel-category">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox"><p>
                                                    Colocation</p></label>
                                        </div>
                                        <input class="form-input checkbox-input" readonly type="tel" name="phone"
                                               placeholder="Инд.расчет">
                                    </div>
                                </div>


                                <input class="form-input options-connect-input" type="text" name="name"
                                       placeholder="<?= Yii::t('site', 'Ваше ім\'я')?>">
                                <input class="form-input options-connect-input" type="text" name="name"
                                       placeholder="<?= Yii::t('site', 'Номер телефону')?>">
                                <div class="agree__wrapper">
                                    <input class="options-connect__form-agree" type="checkbox" name="I_agree"
                                           value="agree" id="connect_agree">
                                    <label for="connect_agree" class="agree__label"></label>
                                    <label class="options-connect__form-agree-label" for="connect_agree">
                                        <?= Yii::t('site', 'Даю згоду на обробку персональних даних. (Ми використовуємо Ваші контакти тільки для зв\'язку, пропозицій і консультацій)')?>

                                </div>
                                <button class="btn__form"><?= Yii::t('site', 'Відправити')?></button>
                            </form>

                        </div>

                        <div class="options__item options-payment">
                            <h5 class="options-payment__title"><?= Yii::t('site', 'Онлайн Оплата')?></h5>

                            <form class="options-payment__form" action="">
                                <input class="form-input options-payment__input" type="text" name="personal_number"
                                       placeholder="<?= Yii::t('site', 'Номер особового рахунку')?>">

                                <p class="options-payment__form-text"><?= Yii::t('site', 'отримати')?> <a href=""><?= Yii::t('site', 'Три дні в борг')?></a> <?= Yii::t('site', 'якщо не встигли оплатити Інтернет')?></p>

                                <button class="btn__form"><?= Yii::t('site', 'Далі')?></button>
                            </form>

                        </div>
                    </div>
                </div
            </div>
        </div>

    </div>
</section>

<section class="rate">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="rate-content">
                        <h5 class="rate-content__title"><span><?= Yii::t('site', 'Інтернет на високих обертах.')?></span></h5>
                        <p class="rate-content__text"><?= Yii::t('site', 'і підключіть Домашній Інтернет на супершвидкості')?></p>
                    </div>
                    <div class="rate-variables">
                        <div class="dropdown-select rate-variables__select-wrapper">
                            <button class="dropdown__btn rate-variables__select" type="button">Одесса
                            </button>
                            <ul class="dropdown__list">
                                <li class="dropdown__list-item" data-value="card">Одесса</li>
                                <li class="dropdown__list-item" data-value="cash">Не Одесса</li>
                            </ul>
                            <input type="text" class="dropdown__input-hidden" value="" name="sel-category">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="rate-slider">
                    <div class="rate-item">
                        <div class="rate-item__forNewClients">для новых клиентов</div>
                        <div class="hot__img"></div>
                        <h5 class="rate-item__title"><span>100</span> Мб/с</h5>
                        <ul class="rate-item__list">
                            <li class="rate-item__item">Симметричный канал</li>
                            <li class="rate-item__item">Гарантированная скорость</li>
                            <li class="rate-item__item">Подключение через
                                оптоволокно по технологии
                                <b>GPON</b></li>
                            <li class="rate-item__item">Доставка оборудования
                                и подключение - бесплатно
                            </li>
                            <li class="rate-item__item"><a href="">Подробнее</a></li>
                        </ul>
                        <div class="rate-item__price"><span>150</span> грн/мес</div>
                        <button class="btn__form">Подключить</button>
                    </div>
                    <div class="rate-item">
                        <div class="rate-item__forNewClients">для новых клиентов</div>
                        <div class="hot__img"></div>
                        <h5 class="rate-item__title"><span>200</span> Мб/с</h5>
                        <ul class="rate-item__list">
                            <li class="rate-item__item">Симметричный канал</li>
                            <li class="rate-item__item">Гарантированная скорость</li>
                            <li class="rate-item__item">Подключение через
                                оптоволокно по технологии
                                <b>GPON</b></li>
                            <li class="rate-item__item">Доставка оборудования
                                и подключение - бесплатно
                            </li>
                            <li class="rate-item__item"><a href="">Подробнее</a></li>
                        </ul>
                        <div class="rate-item__price"><span>180</span> грн/мес</div>
                        <button class="btn__form">Подключить</button>
                    </div>
                    <div class="rate-item">
                        <div class="rate-item__forNewClients">для новых клиентов</div>
                        <div class="hot__img"></div>
                        <h5 class="rate-item__title"><span>300</span> Мб/с</h5>
                        <ul class="rate-item__list">
                            <li class="rate-item__item">Симметричный канал</li>
                            <li class="rate-item__item">Гарантированная скорость</li>
                            <li class="rate-item__item">Подключение через
                                оптоволокно по технологии
                                <b>GPON</b></li>
                            <li class="rate-item__item">Доставка оборудования
                                и подключение - бесплатно
                            </li>
                            <li class="rate-item__item"><a href="">Подробнее</a></li>
                        </ul>
                        <div class="rate-item__price"><span>200</span> грн/мес</div>
                        <button class="btn__form">Подключить</button>
                    </div>
                    <div class="rate-item">
                        <div class="rate-item__forNewClients">для новых клиентов</div>
                        <div class="hot__img"></div>
                        <h5 class="rate-item__title"><span>100</span> Мб/с</h5>
                        <ul class="rate-item__list">
                            <li class="rate-item__item">Симметричный канал</li>
                            <li class="rate-item__item">Гарантированная скорость</li>
                            <li class="rate-item__item">Подключение через
                                оптоволокно по технологии
                                <b>GPON</b></li>
                            <li class="rate-item__item">Доставка оборудования
                                и подключение - бесплатно
                            </li>
                            <li class="rate-item__item"><a href="">Подробнее</a></li>
                        </ul>
                        <div class="rate-item__price"><span>150</span> грн/мес</div>
                        <button class="btn__form">Подключить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="router">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="router-content">
                    <h5 class="router-content__title"><?= Yii::t('site', 'Потужні роутери для дому та бізнесу')?></h5>
                    <p class="router-content__text"><?= Yii::t('site', 'Вибрати найбільш відповідний роутер для ваших повсякденних завдань')?></p>
                    <a class="router-content__link" href="#"><?= Yii::t('site', 'Докладніше')?></a>
                </div>
                <div class="router__image">

                </div>

            </div>
        </div>
    </div>
</section>

<section class="our-clients">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="our-clients__title"><?= Yii::t('site', 'Наші клієнти')?></h5>
                    <div class="our-clients__wrapper slick-our-clients">
                        <div class="our-clients__items-logo">
                            <div class="our-clients__img-wrap">
                                <img class="our-clients__img" src="img/BMW.svg" alt="">
                            </div>
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/toyota.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/infinity.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/nissan.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/odrex.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/intoSana.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/socar.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/novaya_poshta.svg"
                                                                  alt=""></div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/private.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/itaka.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/mozart_group.svg"
                                                                  alt=""></div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/tavriaB.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/diesel.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/walker.svg" alt="">
                        </div>
                        <div class="our-clients__items-logo"><img src="img/image__our-clients/eva.svg" alt=""></div>
                    </div>
                    <p class="our-clients__text"><?= Yii::t('site', 'більш ніж 10 000 підприємств...')?></p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mobile">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-content__wrapper">
                        <div class="mobile-content">
                            <h6 class="mobile-content__title"><?= Yii::t('site', 'Управляти послугами зручніше в додатку Westelecom')?></h6>
                            <h6 class="mobile-content__subtitle"><?= Yii::t('site', 'Завантаж і отримай максимум функцій')?></h6>
                            <p class="mobile-content__text"><?= Yii::t('site', 'Тримайте баланс під контролем, змінюйте тариф, сплачуйте послуги в пару кліків')?></p>
                            <a class="mobile-content__link" href="">
                                <p><?= Yii::t('site', 'Перейти в особистий кабінет')?></p>
                                <svg class="rightArr">
                                    <use xlink:href="img/sprite.svg#rightArrow"></use>
                                </svg>
                            </a>
                            <div class="link__wrapper mob__link">
                                <a class="btn__link" href=""><img src="img/Appstore.svg" alt=""></a>
                                <a class="btn__link" href=""><img src="img/PlayMarket.svg" alt=""></a>
                            </div>
                            <img class="mobile-content__image" src="img/image__mobile/iPhonePhoto.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="news-slider">
                        <?php foreach (News::getActive() as $news_item) { ?>
                        <div class="news-slider__item">
                            <img class="news-slider__item-img" src="/uploads/news/<?= $news_item->img_small?>" alt="">
                            <div class="news-slider__content">
                                <h4 class="news-slider__item-title"><?= $news_item->name ?></h4>
                                <a class="news-slider__item-link" href=""><?= $news_item->text ?></a>
                                <div class="news-slider__item-bottom-group">
                                    <div class="news-slider__item-date"><?= Yii::$app->formatter->asDate($news_item->created_at) ?></div>
                                    <div class="social__wrapper">
                                        <a class="social-twitter" href="#"><img src="img/image__social/twitter.svg"
                                                                                alt=""></a>
                                        <a class="social-facebook" href=""><img src="img/image__social/facebook.svg"
                                                                                alt=""></a>
                                        <a class="social-linkendin" href=""><img src="img/image__social/linken.svg"
                                                                                 alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
<!--                        <div class="news-slider__item">-->
<!--                            <img class="news-slider__item-img" src="img/image__news/ripe.jpg" alt="">-->
<!--                            <div class="news-slider__content">-->
<!--                                <h4 class="news-slider__item-title">Новости</h4>-->
<!--                                <a class="news-slider__item-link" href="">Westelecom получила-->
<!--                                    статус LIR!</a>-->
<!--                                <div class="news-slider__item-bottom-group">-->
<!--                                    <div class="news-slider__item-date">15 мар. 2021</div>-->
<!--                                    <div class="social__wrapper">-->
<!--                                        <a class="social-twitter" href="#"><img src="img/image__social/twitter.svg"-->
<!--                                                                                alt=""></a>-->
<!--                                        <a class="social-facebook" href=""><img src="img/image__social/facebook.svg"-->
<!--                                                                                alt=""></a>-->
<!--                                        <a class="social-linkendin" href=""><img src="img/image__social/linken.svg"-->
<!--                                                                                 alt=""></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!--                        </div>-->
<!--                        <div class="news-slider__item">-->
<!--                            <img class="news-slider__item-img" src="img/image__news/sertificate.jpg" alt="">-->
<!--                            <div class="news-slider__content">-->
<!--                                <h4 class="news-slider__item-title">Новости</h4>-->
<!--                                <a class="news-slider__item-link" href="">SWestelecom получила-->
<!--                                    статус LIR!</a>-->
<!--                                <div class="news-slider__item-bottom-group">-->
<!--                                    <div class="news-slider__item-date">15 мар. 2021</div>-->
<!--                                    <div class="social__wrapper">-->
<!--                                        <a class="social-twitter" href="#"><img src="img/image__social/twitter.svg"-->
<!--                                                                                alt=""></a>-->
<!--                                        <a class="social-facebook" href=""><img src="img/image__social/facebook.svg"-->
<!--                                                                                alt=""></a>-->
<!--                                        <a class="social-linkendin" href=""><img src="img/image__social/linken.svg"-->
<!--                                                                                 alt=""></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!--                        </div>-->
<!--                        <div class="news-slider__item">-->
<!--                            <img class="news-slider__item-img" src="img/image__news/sertificate.jpg" alt="">-->
<!--                            <div class="news-slider__content">-->
<!--                                <h4 class="news-slider__item-title">Новости</h4>-->
<!--                                <a class="news-slider__item-link" href="">Westelecom получила сертификат-->
<!--                                    качества ISO 9001:2015</a>-->
<!--                            </div>-->
<!--                            <div class="news-slider__item-bottom-group">-->
<!--                                <div class="news-slider__item-date">15 мар. 2021</div>-->
<!--                                <div class="social__wrapper">-->
<!--                                    <a class="social-twitter" href="#"><img src="img/image__social/twitter.svg"-->
<!--                                                                            alt=""></a>-->
<!--                                    <a class="social-facebook" href=""><img src="img/image__social/facebook.svg"-->
<!--                                                                            alt=""></a>-->
<!--                                    <a class="social-linkendin" href=""><img src="img/image__social/linken.svg"-->
<!--                                                                             alt=""></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>