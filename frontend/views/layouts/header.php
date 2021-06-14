<?php

use \yii\helpers\Html;
use frontend\components\LanguageWidget;
use yii\helpers\Url;

?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-line">
                    <div class="top-line__left-lang"><?= LanguageWidget::widget() ?></div>

                    <ul class="top-line__menu">
                        <li class="top-line__menu-item">
                            <?= Html::a(Yii::t('header', 'Для дому'), ['/site/'], ['class' => 'top-line__menu-link top__link-Home'])?>
                        </li>

                        <li class="top-line__menu-item">
                            <?= Html::a(Yii::t('header', 'Для бізнесу'), ['/business/'], ['class' => 'top-line__menu-link top__link-Business'])?>
                        </li>

                        <li class="top-line__menu-item">
                            <?= Html::a(Yii::t('header', 'Магазин'), ['/promotion/'], ['class' => 'top-line__menu-link top__link-Magazine'])?>
                        </li>

                        <li class="top-line__menu-item">
                                <div class="more">
                                    <div class="more__text">
                                        <?= Yii::t('header', 'А також')?>
                                        <svg class="dots">
                                            <path d="M2.18537 5.13816C3.34659 5.13816 4.31605 4.19001 4.31605 3.00748C4.31605 1.84626 3.34659 0.887451 2.18537 0.887451C1.01349 0.887451 0.0546875 1.84626 0.0546875 3.00748C0.0546875 4.19001 1.01349 5.13816 2.18537 5.13816Z" "/>
                                            <path d="M10.6815 5.13816C11.8427 5.13816 12.8121 4.19001 12.8121 3.00748C12.8121 1.84626 11.8427 0.887451 10.6815 0.887451C9.50959 0.887451 8.55078 1.84626 8.55078 3.00748C8.55078 4.19001 9.50959 5.13816 10.6815 5.13816Z" "/>
                                            <path d="M19.1776 5.13816C20.3388 5.13816 21.3082 4.19001 21.3082 3.00748C21.3082 1.84626 20.3388 0.887451 19.1776 0.887451C18.0057 0.887451 17.0469 1.84626 17.0469 3.00748C17.0469 4.19001 18.0057 5.13816 19.1776 5.13816Z" "/>
                                        </svg>
                                    </div>

                                    <div class="more__dropdown">
                                        <?= Html::a(Yii::t('header', 'Акції'), ['/promotion/'], ['class' => 'more__dropdown-item'])?>
                                        <?= Html::a(Yii::t('header', 'Блог'), ['/blog/'], ['class' => 'more__dropdown-item'])?>
                                        <?= Html::a(Yii::t('footer', 'Новини'), ['/news/'], ['class' => 'more__dropdown-item'])?>
                                    </div>
                                </div>

                        </li>
                    </ul>

                    <div class="tools">
                        <svg class="personal__icon">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3558 17.6382C5.41885 17.6382 1.20282 18.3846 1.20282 21.374C1.20282 24.3634 5.39211 25.1366 10.3558 25.1366C15.2927 25.1366 19.5075 24.3889 19.5075 21.4008C19.5075 18.4126 15.3195 17.6382 10.3558 17.6382Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3558 13.3743C13.5956 13.3743 16.2215 10.7472 16.2215 7.50733C16.2215 4.2675 13.5956 1.6416 10.3558 1.6416C7.11598 1.6416 4.48886 4.2675 4.48886 7.50733C4.47792 10.7362 7.08681 13.3633 10.3145 13.3743H10.3558Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
<!--                        <a class="tools__item top-line__tools-basket" href="#">--><?//= Yii::t('header', 'Кошик')?><!--</a>-->
                        <a class="tools__item" href="#"><?= Yii::t('header', 'Особистий кабінет')?></a>
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
                        <a href="<?=Url::to('/site') ?>">
                            <img src="/img/Logo.svg" alt="Logo">
                        </a>
                    </div>
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
                            <a class="bottom-line__link" href="<?=Url::to('/internet/home') ?>">
                                <svg class="bottom-line__icon">
                                    <use xlink:href="/img/sprite.svg#wifi"></use>
                                </svg>
                                <span class="bottom-line__link-text"><?= Yii::t('header', 'Інтернет')?></span>
                            </a>
                        </li>
                        <li class="bottom-line__list-item">
                            <a class="bottom-line__link" href="<?=Url::to('/video/home') ?>">
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
    <div class="menu__bg"></div>
    <div class="right-menu">
        <div class="right-menu__close">
            <button type="button" class="right-menu__btn"></button>
        </div>
        <div class="right-menu__wrap">

            <ul class="right-menu__category">
                <li class="category__item right-menu__col-home">
                    <?= Html::a(Yii::t('header', 'Для дому'), ['/site/'])?>
                </li>
                <li class="category__item right-menu__col-business">
                    <?= Html::a(Yii::t('header', 'Для бізнесу'), ['/business/'])?>
                </li>
                <li class="category__item right-menu__col-magazine">
                    <?= Html::a(Yii::t('header', 'Магазин'), ['/promotion/'])?>
                </li>
                <li class="category__item right-menu__col-other">
                    <?= Html::a(Yii::t('header', 'Акції'), ['/promotion/'])?>
                </li>
                <li class="category__item right-menu__col-other">
                    <?= Html::a(Yii::t('header', 'Блог'), ['/blog/'])?>

                </li>
                <li class="category__item right-menu__col-other">
                    <?= Html::a(Yii::t('footer', 'Новини'), ['/news/'])?>
                </li>




            </ul>
            <ul class="right-menu__list">
                <li class="right-menu__list-item">
                    <a class="right-line__link" href="<?=Url::to('/site') ?>">
                        <svg class="right-line__icon">
                            <use xlink:href="img/sprite.svg#home"></use>
                        </svg>
                        <span class="right-line__link-text"><?= Yii::t('header', 'Головна')?></span>
                    </a>
                </li>
                <li class="right-menu__list-item">
                    <a class="right-line__link" href="<?=Url::to('/internet/home') ?>">
                        <svg class="right-line__icon">
                            <use xlink:href="img/sprite.svg#wifi"></use>
                        </svg>
                        <span class="right-line__link-text"><?= Yii::t('header', 'Інтернет')?></span>
                    </a>
                </li>
                <li class="right-menu__list-item">
                    <a class="right-line__link" href="<?=Url::to('/video/home') ?>">
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
                        <svg class=" icon-phone">
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
</header>

