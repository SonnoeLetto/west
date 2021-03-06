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
                        <h5 class="offer__check-title middle__title"><?= Yii::t('site', '?????????????????? ???????????????????????? ?????????? ?? ?????????????? ?????????????????? ?????????????? Westelecom,') .
                            '<span>' . Yii::t('site', '?????? ?????????????????? ??????????????????????????') . '</span>'?>
                        </h5>
                        <p class="offer__check-text">
                            <?= Yii::t('site', '?????????????????? ?????????????? ?????????????? ?? ??????????????')?>
                        </p>
                        <p class="offer__case-text"><?= Yii::t('site', '?????????????????????? ???????????????????? ???????????????????? pdf ?????? ??????????????????')?></p>

                        <form class="main-form" action="" method="get">
                            <input class="main-form__input" type="text" name="username"
                                   placeholder="<?= Yii::t('site', '???????? ????\'??')?>">
                            <input class="main-form__input" type="tel" name="Phone number"
                                   placeholder="<?= Yii::t('site', '?????????? ????????????????')?>">
                            <button class="button offer-btn-m button-primary" name="download"><?= Yii::t('site', '??????????????????????')?></button>
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
                        <div class="offer__ourClients-title middle__title"><?= Yii::t('site', '?????????? ?????????????? Westelecom')?></div>
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
                                        <div class="offer__case-title middle__title"><?= Yii::t('site', '?????????????????????? ?????????????? Westelecom')?></div>


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
                                <h6 class="options-connect__title option-title"><?= Yii::t('site', '??????????????-???????????? ???? ??????????????????????')?></h6>
                            </div>

                            <form class="options-connect__form" action="">

                                <div class="options-connect__select">
                                    <?= Select2::widget([
                                        'name' => 'location',
                                        'id' => 'chooseLocation2',
                                        'data' => [
                                            1 => '????????????',
                                            2 => '???? ????????????',
                                        ],
                                        'hideSearch' => true,
                                        'options' => [
                                            'placeholder' => '???????????????????? ??????????'
                                        ],
                                    ]);
                                    ?>
                                </div>
                                <div class="options-connect__checkbox">
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox">
                                                    <?= Yii::t('site', '????????????????')?>
                                            </label>
                                        </div>
                                        <div class="options-connect__select-checkbox">
                                            <?= Select2::widget([
                                                'name' => 'location',
                                                'id' => 'choosespeed',
                                                'data' => [
                                                    1 => '500????????/?? 540??????/??',
                                                    2 => '500????????/?? 540??????/??',
                                                ],
                                                'hideSearch' => true,
                                                'options' => [
                                                    'placeholder' => '???????????????? ??????????'
                                                ],
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox">
                                                    <?= Yii::t('site', '????????????????????????????????????')?>
                                            </label>
                                        </div>
                                        <input class="form-input checkbox-input" type="tel" readonly name="phone"
                                               placeholder="??????.????????????">
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox">
                                                    <?= Yii::t('site', '?????????????? TV')?>
                                            </label>
                                        </div>
                                        <div class="options-connect__select-checkbox">
                                            <?= Select2::widget([
                                                'name' => 'tariff',
                                                'id' => 'chooseTV',
                                                'data' => [
                                                    1 => '?????????????? - 159??????/??',
                                                    2 => '???? ?????????????? - 159??????/??',
                                                ],
                                                'hideSearch' => true,
                                                'options' => [
                                                    'placeholder' => '???????????????? ??????????'
                                                ],
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="options-connect__checkbox-wrapper">
                                        <div class="options-connect__switch">
                                            <input class="options-connect__checkbox-input" type="checkbox">
                                            <label class="options-connect__checkbox-label" for="checkbox">
                                                    <?= Yii::t('site', '???????????????? ?????????????? ')?>
                                            </label>
                                        </div>
                                        <div class="options-connect__select-checkbox">
                                            <?= Select2::widget([
                                                'name' => 'tariff',
                                                'id' => 'choosePhone',
                                                'data' => [
                                                    1 => '?????????????? 120',
                                                    2 => '?????????????? 120',
                                                ],
                                                'hideSearch' => true,
                                                'options' => [
                                                    'placeholder' => '???????????????? ??????????'
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
                                               placeholder="??????.????????????">
                                    </div>
                                </div>


                                <input class="form-input options-connect-input" type="text" name="name"
                                       placeholder="<?= Yii::t('site', '???????? ????\'??')?>">
                                <input class="form-input options-connect-input" type="text" name="name"
                                       placeholder="<?= Yii::t('site', '?????????? ????????????????')?>">
                                <div class="agree__wrapper">
                                    <input class="options-connect__form-agree" type="checkbox" name="I_agree"
                                           value="agree" id="connect_agree">
                                    <label for="connect_agree" class="agree__label"></label>
                                    <label class="options-connect__form-agree-label" for="connect_agree">
                                        <?= Yii::t('site', '?????? ?????????? ???? ?????????????? ???????????????????????? ??????????. (???? ???????????????????????????? ???????? ???????????????? ???????????? ?????? ????\'????????, ???????????????????? ?? ????????????????????????)')?>

                                </div>
                                <button class="button button-secondary options-btn-m"><?= Yii::t('site', '????????????????????')?></button>
                            </form>

                        </div>

                        <div class="options__item options-payment">
                            <h5 class="options-payment__title option-title"><?= Yii::t('site', '???????????? ????????????')?></h5>

                            <form class="options-payment__form" action="">
                                <input class="form-input options-payment__input" type="text" name="personal_number"
                                       placeholder="<?= Yii::t('site', '?????????? ?????????????????? ??????????????')?>">

                                <p class="options-payment__form-text">
                                    <?= Yii::t('site', '?????? ????????????????') . ' ' . '<a href="">' . Yii::t('site', '?????? ?????? ?? ????????') .
                                    '</a>' . ' ' . Yii::t('site', '???????? ???? ?????????????? ???????????????? ????????????????')?>
                                </p>

                                <button disabled class="button button-secondary options-btn-m"><?= Yii::t('site', '????????')?></button>
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
                        <?= Yii::t('site', '???? ??????????????, ???????? ?????????????????? ????????????, ???? ???????????????? ???? ?????????? ??????????????????!')?></h4>
                    <p class="rate__main-text"><?= Yii::t('site', '??????????????? ?? ????????!')?></p>
                    <div class="button-wrap">
                        <a class="button button-secondary rate-btn-m"><?= Yii::t('site', '???????????? ??????????')?></a>

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
                    <h5 class="router__title middle__title"><?= Yii::t('site', '?????????????? ?????????????? ?????? ???????? ???? ??????????????')?></h5>
                    <p class="router__text"><?= Yii::t('site', '?????????????? ???????????????? ?????????????????????? ???????????? ?????? ?????????? ???????????????????????? ??????????????')?></p>
                    <a class="router__link" href="#"><?= Yii::t('site', '????????????????????')?></a>
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
                            <h6 class="mobile__title"><?= Yii::t('site', '?????????????????? ?????????????????? ???????????????? ?? ?????????????? Westelecom')?></h6>
                            <h6 class="mobile__subtitle"><?= Yii::t('site', '???????????????? ?? ?????????????? ???????????????? ??????????????')?></h6>
                            <p class="mobile__text"><?= Yii::t('site', '???????????????? ???????????? ?????? ??????????????????, ???????????????? ??????????, ?????????????????? ?????????????? ?? ???????? ????????????')?></p>
                            <a class="mobile__link" href="">
                                <p><?= Yii::t('site', '?????????????? ?? ?????????????????? ??????????????')?></p>
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