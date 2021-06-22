<?php

use common\models\News;
use common\models\Card;
use yii\helpers\BaseStringHelper;
use common\models\Slider;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\web\View;


//$this->registerJs('var cities = ' . json_encode(ArrayHelper::map($cities, 'id', 'group_id')) . ';', View::POS_HEAD);
$this->registerJsFile("js/popup.js",[
    'depends' => [
        \yii\web\JqueryAsset::className()
    ]
]);

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
                        <p class="offer__case-text"><?= Yii::t('site', 'Завантажити комерційну пропозицію pdf для керівника')?></p>

                        <form class="main-form" action="" method="get">
                            <input class="main-form__input" type="text" name="username"
                                   placeholder="<?= Yii::t('site', 'Ваше ім\'я')?>">
                            <input class="main-form__input" type="tel" name="Phone number"
                                   placeholder="<?= Yii::t('site', 'Номер телефону')?>">
                            <button class="button offer-btn-m button-primary" name="download"><?= Yii::t('site', 'Завантажити')?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offer__ourClients">
        <div class="container">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="offer__ourClients-title middle__title"><?= Yii::t('site', 'Діючі клієнти Westelecom')?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offer__ourClients-back"></div>
    </div>
                    <div class="offer__case">
                        <div class="container">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="offer__case-title middle__title"><?= Yii::t('site', 'Реалізовані проекти Westelecom')?></div>


                            <?php
                            $cards = Card::find()->all();
                            $count = [];
                            $count[0] = ceil(count($cards) / 3) - 1;
                            $count[1] = $count[0] * 2 + 1;
                            ?>

                                    <div class="offer__case-slider">
                                    <?php foreach ($cards as $key => $card) { ?>
                                        <div class="card">
                                            <div class="card__inner" href="">
                                                <div class="card__top">
                                                    <div class="card__top-number"><?= $key + 1 ?></div>
                                                    <div class="card__top-wrap">
                                                        <img src="/img/icons/icon_1.svg"  class="card__top-item" style="display: <?=$card->wi_fi_icon ? '' : 'none'  ?>">
                                                        <img src="/img/icons/icon_2.svg" class="card__top-item" style="display: <?=$card->phone_icon ? '' : 'none'  ?>">
                                                        <img src="/img/icons/icon_3.svg" class="card__top-item" style="display: <?=$card->vols_icon ? '' : 'none'  ?>">
                                                        <img src="/img/icons/icon_4.svg" class="card__top-item" style="display: <?=$card->vlan_icon ? '' : 'none'  ?>">
                                                    </div>
                                                </div>
                                                <a class="card__btn-text"><?= $card->textPreview?></a>
                                                <div class="card__text" style="display: none;"><?=$card->text ?></div>

                                            </div>
                                        </div>
                                        <?= in_array($key, $count) ? '</div><div class="offer__case-slider">' : '' ?>
                                    <?php } ?>
                                    </div>





                                        <div id="popup" class="popup">
                                            <div class="popup__body">
                                                <button href="#" class="popup__close"></button>
                                                <div class="popup__content">

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
                                <button class="button button-secondary options-btn-m"><?= Yii::t('site', 'Відправити')?></button>
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

                                <button disabled class="button button-secondary options-btn-m"><?= Yii::t('site', 'Далі')?></button>
                            </form>

                        </div>
                    </div>
                </div
            </div>
        </div>

    </div>
</section>

<section class="chooseTariffs">
    <div class="blur"></div>
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="rate__main-title">
                        <?= Yii::t('site', 'Те почуття, коли поспішаєш додому, де Інтернет на Супер Швидкості!')?></h4>
                    <p class="rate__main-text"><?= Yii::t('site', 'Знайоме? Є таке!')?></p>
                    <div class="button-wrap">
                        <a class="button button-secondary rate-btn-m"><?= Yii::t('site', 'Обрати Тариф')?></a>

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
                    <h5 class="router__title middle__title"><?= Yii::t('site', 'Потужні роутери для дому та бізнесу')?></h5>
                    <p class="router__text"><?= Yii::t('site', 'Вибрати найбільш відповідний роутер для ваших повсякденних завдань')?></p>
                    <a class="router__link" href="#"><?= Yii::t('site', 'Докладніше')?></a>
                </div>
                <div class="router__image"></div>
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
                            <img class="mobile__image" src="/img/image__mobile/phone.png" alt="">
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