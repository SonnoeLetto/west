<?php

use \yii\helpers\Html;
use frontend\components\LanguageWidget;
use yii\helpers\Url;

?>

<header>
    <div class="menu__bg"></div>
    <div class="right-menu">
        <div class="right-menu__close">
            <button type="button" class="right-menu__btn"></button>
        </div>
        <div class="right-menu__wrap">
            <div class="right-menu__tools">
                <a class="tools__item right-menu__tools-basket" href="#"><?= Yii::t('header', 'Кошик')?></a>
                <a class="tools__item right-menu__tools-personal" href="#"><?= Yii::t('header', 'Особистий кабінет')?></a>
            </div>
            <div class="right-menu-contacts">
                <a class="middle-line__tel">0 800 201 222</a>

                <a class="middle-line__email">hello@westelecom.ua</a>

            </div>
            <ul class="right-menu__category">
                <li class="category__item"><?= Yii::t('header', 'Для дому') ?></li>
                <li class="category__item"><?= Yii::t('header', 'Для бізнесу') ?></li>
                <li class="category__item"><?= Yii::t('header', 'Акції')?></li>
                <li class="category__item"><?= Yii::t('header', 'Магазин')?></li>
            </ul>
            <ul class="right-menu__list">
                <li class="right-menu__list-item">
                    <a class="right-line__link" href="<?=Url::to('/site/') ?>">
                        <svg class="right-line__icon">
                            <use xlink:href="img/sprite.svg#home"></use>
                        </svg>
                        <span class="right-line__link-text"><?= Yii::t('header', 'Головна')?></span>
                    </a>
                </li>
                <li class="right-menu__list-item">
                    <a class="right-line__link" href="">
                        <svg class="right-line__icon">
                            <use xlink:href="img/sprite.svg#wifi"></use>
                        </svg>
                        <span class="right-line__link-text"><?= Yii::t('header', 'Інтернет')?></span>
                    </a>
                </li>
                <li class="right-menu__list-item">
                    <a class="right-line__link" href="">
                        <svg class="right-line__icon">
                            <use xlink:href="img/sprite.svg#vision"></use>
                        </svg>
                        <span class="right-line__link-text"><?= Yii::t('header', 'Відеоспостереження')?></span>
                    </a>
                </li>
                <li class="right-menu__list-item">
                    <a class="right-line__link" href="">
                        <svg class="right-line__icon">
                            <use xlink:href="img/sprite.svg#tv"></use>
                        </svg>
                        <span class="right-line__link-text"><?= Yii::t('header', 'Цифрове TV')?></span>

                    </a>
                </li>
                <li class="right-menu__list-item">
                    <a class="right-line__link" href="">
                        <svg class="right-line__icon icon-phone">
                            <use xlink:href="img/sprite.svg#phone"></use>
                        </svg>
                        <span class="right-line__link-text"><?= Yii::t('header', 'Домашній телефон')?></span>

                    </a>
                </li>
                <li class="right-menu__list-item">
                    <a class="right-line__link" href="">
                        <svg class="right-line__icon">
                            <use xlink:href="img/sprite.svg#colocation"></use>
                        </svg>
                        <span class="right-line__link-text">Colocation</span>
                    </a>
                </li>
            </ul>


        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-line">



                    <div class="top-line__left">
                        <div class="top-line__left-lang"><?= LanguageWidget::widget() ?></div>

                        <div class="top-line__left-location"></div>
                    </div>

                    <ul class="top-line__menu">
                        <li class="top-line__menu-item">
                            <a href="" class="top-line__menu-link"><?= Yii::t('header', 'Для дому') ?></a>
                        </li>

                        <li class="top-line__menu-item">
                            <a href="" class="top-line__menu-link top-line__menu-link-forBusiness"><?= Yii::t('header', 'Для бізнесу') ?></a>
                        </li>

                        <li class="top-line__menu-item">
                            <?= Html::a(Yii::t('header', 'Акції'), ['/promotion/'], ['class' => 'top-line__menu-link'])?>
                        </li>

                        <li class="top-line__menu-item">
                            <a href="" class="top-line__menu-link"><?= Yii::t('header', 'Магазин')?></a>
                        </li>
                    </ul>

                    <div class="top-line__tools">
                        <a class="tools__item top-line__tools-basket" href="#"><?= Yii::t('header', 'Кошик')?></a>
                        <a class="tools__item top-line__tools-personal" href="#"><?= Yii::t('header', 'Особистий кабінет')?></a>
                    </div>

                    <div class="burger">
                        <div class="burger-item"></div>
                        <div class="burger-item"></div>
                        <div class="burger-item"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="middle-line">
                <div class="middle-line__wrapper-left">
                    <div class="logo">
                        <a href="<?=Url::to('/site/') ?>">
                            <img src="/img/Logo.svg" alt="Logo">
                        </a>
                    </div>
                    <p class="middle-line__promotion"><?= Yii::t('header', 'Непристойно швидкий інтернет на півдні України')?></p>
                </div>

                <div class="middle-line__wrapper-right">
                    <a class="middle-line__email">hello@westelecom.ua</a>
                    <a class="middle-line__tel">0 800 201 222</a>
                    <div class="middle-line__social-wrapper">
                        <a class="footer-link__social-item telegMarg">
                            <div class="footer-link__social-item__img">
                                <img src="/img/image__social/iconBig/Telegram.svg" alt="">
                            </div>
                        </a>
                        <a class="footer-link__social-item">
                            <div class="footer-link__social-item__img">
                                <img src="/img/image__social/iconBig/Viber.svg" alt="">
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="bottom-line">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <ul class="bottom-line__list">
                        <li class="bottom-line__list-item">
                            <a class="bottom-line__link" href="<?=Url::to('/site/') ?>">
                                <svg class="bottom-line__icon">
                                    <use xlink:href="/img/sprite.svg#home"></use>
                                </svg>
                                <span class="bottom-line__link-text"><?= Yii::t('header', 'Головна')?></span>
                            </a>
                        </li>
                        <li class="bottom-line__list-item">
                            <a class="bottom-line__link" href="<?=Url::to('/internet/') ?>">
                                <svg class="bottom-line__icon">
                                    <use xlink:href="/img/sprite.svg#wifi"></use>
                                </svg>
                                <span class="bottom-line__link-text"><?= Yii::t('header', 'Інтернет')?></span>
                            </a>
                        </li>
                        <li class="bottom-line__list-item">
                            <a class="bottom-line__link" href="">
                                <svg class="bottom-line__icon">
                                    <use xlink:href="/img/sprite.svg#vision"></use>
                                </svg>
                                <span class="bottom-line__link-text"><?= Yii::t('header', 'Відеоспостереження')?></span>
                            </a>
                        </li>
                        <li class="bottom-line__list-item">
                            <a class="bottom-line__link" href="">
                                <svg class="bottom-line__icon">
                                    <use xlink:href="/img/sprite.svg#tv"></use>
                                </svg>
                                <span class="bottom-line__link-text"><?= Yii::t('header', 'Цифрове TV')?></span>

                            </a>
                        </li>
                        <li class="bottom-line__list-item">
                            <a class="bottom-line__link" href="">
                                <svg class="bottom-line__icon-phone">
                                    <use xlink:href="/img/sprite.svg#phone"></use>
                                </svg>
                                <span class="bottom-line__link-text"><?= Yii::t('header', 'Домашній телефон')?></span>

                            </a>
                        </li>
                        <li class="bottom-line__list-item">
                            <a class="bottom-line__link" href="">
                                <svg class="bottom-line__icon">
                                    <use xlink:href="/img/sprite.svg#colocation"></use>
                                </svg>
                                <span class="bottom-line__link-text">Colocation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

