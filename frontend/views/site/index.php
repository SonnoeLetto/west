<?php

use common\models\News;
use common\models\Tariffs;
use common\models\Slider;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\web\View;

$this->registerJs('var cities = ' . json_encode(ArrayHelper::map($cities, 'id', 'group_id')) . ';', View::POS_HEAD);

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
        </div>
    </section>

<section class="offer">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="offer__check">
                        <h5 class="offer__check-title middle__title"><?= Yii::t('site', 'Лідируючі підприємства Одеси і області вибирають рішення Westelecom,') .
                            '<span>' . Yii::t('site', 'щоб працювати продуктивніше') . '</span>'?>
                        </h5>
                        <p class="offer__check-text">
                            <?= Yii::t('site', 'Увімкніть цифрові рішення в команду')?>
                        </p>

                        <form class="main-form" action="" method="get">
                            <input class="main-form__input" type="text" name="username"
                                   placeholder="<?= Yii::t('site', 'Ваше ім\'я')?>">
                            <input class="main-form__input" type="tel" name="Phone number"
                                   placeholder="<?= Yii::t('site', 'Номер телефону')?>">
                            <button class="main-form__btn" name="download"><?= Yii::t('site', 'Завантажити')?></button>
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
                                <h6 class="options-connect__title option-title"><?= Yii::t('site', 'Експрес-заявка на підключення')?></h6>
                            </div>

                            <form class="options-connect__form" action="">

                                <div class="options-connect__select">
                                    <?= Select2::widget([
                                        'name' => 'location',
                                        'id' => 'chooseLocation2',
                                        'data' => [
                                            1 => 'Одесса',
                                            2 => 'Не одесса',
                                        ],
                                        'hideSearch' => true,
                                        'options' => [
                                            'placeholder' => 'Населенный пункт'
                                        ],
                                    ]);
                                    ?>
                                </div>
                                <div class="options-connect__checkbox">
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox">
                                                    <?= Yii::t('site', 'Інтернет')?>
                                            </label>
                                        </div>
                                        <div class="options-connect__select-checkbox">
                                            <?= Select2::widget([
                                                'name' => 'location',
                                                'id' => 'choosespeed',
                                                'data' => [
                                                    1 => '500Мбит/с 540грн/м',
                                                    2 => '500Мбит/с 540грн/м',
                                                ],
                                                'hideSearch' => true,
                                                'options' => [
                                                    'placeholder' => 'Выберите тариф'
                                                ],
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox">
                                                    <?= Yii::t('site', 'Відеоспостереження')?>
                                            </label>
                                        </div>
                                        <input class="form-input checkbox-input" type="tel" readonly name="phone"
                                               placeholder="Инд.расчет">
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox">
                                                    <?= Yii::t('site', 'Цифрове TV')?>
                                            </label>
                                        </div>
                                        <div class="options-connect__select-checkbox">
                                            <?= Select2::widget([
                                                'name' => 'tariff',
                                                'id' => 'chooseTV',
                                                'data' => [
                                                    1 => 'Премиум - 159грн/м',
                                                    2 => 'не премиум - 159грн/м',
                                                ],
                                                'hideSearch' => true,
                                                'options' => [
                                                    'placeholder' => 'Выберите тариф'
                                                ],
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox">
                                                    <?= Yii::t('site', 'Домашній телефон ')?>
                                            </label>
                                        </div>
                                        <div class="options-connect__select-checkbox">
                                            <?= Select2::widget([
                                                'name' => 'tariff',
                                                'id' => 'choosePhone',
                                                'data' => [
                                                    1 => 'Премиум 120',
                                                    2 => 'Премиум 120',
                                                ],
                                                'hideSearch' => true,
                                                'options' => [
                                                    'placeholder' => 'Выберите тариф'
                                                ],
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox">
                                                    Colocation
                                            </label>
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
                            <h5 class="options-payment__title option-title"><?= Yii::t('site', 'Онлайн Оплата')?></h5>

                            <form class="options-payment__form" action="">
                                <input class="form-input options-payment__input" type="text" name="personal_number"
                                       placeholder="<?= Yii::t('site', 'Номер особового рахунку')?>">

                                <p class="options-payment__form-text">
                                    <?= Yii::t('site', 'Або отримати') . ' ' . '<a href="">' . Yii::t('site', 'Три дні в борг') .
                                    '</a>' . ' ' . Yii::t('site', 'якщо не встигли оплатити Інтернет')?>
                                </p>

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
                        <h5 class="rate__title middle__title"><span><?= Yii::t('site', 'Інтернет на високих обертах.') . '</span>' . Yii::t('site', 'Оберіть ваш населений пункт.')?></h5>
                                <?='<p class="rate__text">' . Yii::t('site', 'і підключіть Домашній Інтернет на супершвидкості') . '</p>'?>
                    </div>
                    <div class="rate-variables">
                        <div class="rate__select">
                            <?= Select2::widget([
                                'name' => 'location3',
                                'id' => 'cities-select',
                                'data' => ArrayHelper::map($cities, 'id', 'name'),
                                'value' => $cities[0]->id ?? null,
                                'hideSearch' => true,
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="rate-slider">

                    <?php $group_id = $cities[0]->group_id ?? null ?>
                    <?php foreach (Tariffs::getTariffs() as $tariff) { ?>
                        <div class="rate-item" data-id="<?= $tariff->group_id ?>">
                            <?php if ($tariff->for_new){ ?>
                            <div class="rate-item__forNewClients"><?= Yii::t('site', 'для нових клієнтів')?></div>
                            <?php } ?>
                            <?php if ($tariff->is_hot){ ?>
                            <div class="hot__img"></div>
                            <?php } ?>
                            <p class="rate-item__title"><span><?=$tariff->speed ?></span> Мб/с</p>
                            <ul class="rate-item__list">
                                <li class="rate-item__item"><?= Yii::t('site', 'Симетричний канал')?></li>
                                <li class="rate-item__item"><?= Yii::t('site', 'Гарантована швидкість')?></li>
                                <li class="rate-item__item"><?= Yii::t('site', 'Підключення через оптоволокно за технологією')?>
                                    <b>GPON</b></li>
                                <li class="rate-item__item"><?= Yii::t('site', 'Доставка обладнання і підключення - безкоштовно')?>
                                </li>
                                <li class="rate-item__item"><a href=""><?= Yii::t('site', 'Докладніше')?></a></li>
                            </ul>
                            <div class="rate-item__price"><span><?=$tariff->price ?></span> <?= Yii::t('internet', 'грн / міс')?></div>
                            <button class="btn__form"><?= Yii::t('internet', 'Підключити')?></button>
                        </div>
                    <?php } ?>


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
                    <h5 class="router__title middle__title"><?= Yii::t('site', 'Потужні роутери для дому та бізнесу')?></h5>
                    <p class="router__text"><?= Yii::t('site', 'Вибрати найбільш відповідний роутер для ваших повсякденних завдань')?></p>
                    <a class="router__link" href="#"><?= Yii::t('site', 'Докладніше')?></a>
                </div>
                <div class="router__image"></div>
            </div>
        </div>
    </div>
</section>

<section class="our-clients">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="our-clients__title middle__title"><?= Yii::t('site', 'Наші клієнти')?></h5>
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
                            <h6 class="mobile__title"><?= Yii::t('site', 'Управляти послугами зручніше в додатку Westelecom')?></h6>
                            <h6 class="mobile__subtitle"><?= Yii::t('site', 'Завантаж і отримай максимум функцій')?></h6>
                            <p class="mobile__text"><?= Yii::t('site', 'Тримайте баланс під контролем, змінюйте тариф, сплачуйте послуги в пару кліків')?></p>
                            <a class="mobile__link" href="">
                                <p><?= Yii::t('site', 'Перейти в особистий кабінет')?></p>
                                <svg class="rightArr">
                                    <use xlink:href="img/sprite.svg#rightArrow"></use>
                                </svg>
                            </a>
                            <div class="link__wrapper mob__link">
                                <a class="btn__link" href=""><img src="/img/Appstore.svg" alt=""></a>
                                <a class="btn__link" href=""><img src="/img/PlayMarket.svg" alt=""></a>
                            </div>
                            <img class="mobile__image" src="/img/image__mobile/iPhonePhoto.png" alt="">
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
                            <div class="news__card-item">
                                <?= $this->render('/news/item', ['news_item' => $news_item]) ?>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>