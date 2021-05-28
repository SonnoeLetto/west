<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.05.21
 * Time: 9:04
 */
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
                    <a class="right-line__link" href="">
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
                            <?= Html::a(Yii::t('header', 'Акції'), ['/promotion/'])?>
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
                        <a href="#">
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
                        <a class="footer-link__social-item viber__Left">
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
                            <a class="bottom-line__link" href="">
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
                                <svg class="bottom-line__icon-phone">
                                    <use xlink:href="/img/sprite.svg#phone"></use>
                                </svg>
                                <span class="bottom-line__link-text"><?= Yii::t('header', 'Домашній телефон')?></span>

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
                                <svg class="bottom-line__icon">
                                    <use xlink:href="#colocation"></use>
                                </svg>
                                <span class="bottom-line__link-text">Colocation</span>
                            </a>
                        </li>
                        <li class="bottom-line__list-item">
                            <a class="bottom-line__link" href="">
                                <svg class="bottom-line__icon">
                                    <use xlink:href="#sysAdmin"></use>
                                </svg>
                                <span class="bottom-line__link-text">Colocation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <svg class="svg__headerTypeTwo" xmlns="http://www.w3.org/2000/svg" >
        <symbol id="home"  viewBox="0 0 25 26" >
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.69075 1.11278C11.4682 -0.296057 13.9914 -0.296057 15.7688 1.11278L15.7718 1.1151L23.3117 7.12821C24.293 7.88304 24.8783 9.04247 24.8953 10.2811L24.8954 10.2983V20.307C24.8954 23.1877 22.54 25.5015 19.6611 25.5015H17.4536C17.444 25.5015 17.4343 25.5014 17.4246 25.5012C15.9899 25.4679 14.8238 24.3032 14.824 22.8529C14.824 22.8528 14.824 22.8531 14.824 22.8529V19.3236C14.824 19.1267 14.6593 18.9456 14.4295 18.9456H11.124C10.8968 18.9485 10.7349 19.1283 10.7349 19.3236V22.842C10.7349 22.9521 10.7207 23.0589 10.6939 23.1606C10.5352 24.4883 9.3971 25.5015 8.03906 25.5015H5.83166C2.95267 25.5015 0.59729 23.1877 0.59729 20.307V10.2968C0.609553 9.05556 1.19589 7.89277 2.18096 7.13908L9.69075 1.11278ZM8.23491 22.842V19.3237C8.23488 17.7299 9.53081 16.4561 11.1101 16.4456L11.1184 16.4456L14.4295 16.4456C16.0162 16.4456 17.324 17.7223 17.324 19.3236V22.8529C17.324 22.9203 17.3799 22.9955 17.4749 23.0015H19.6611C21.1831 23.0015 22.3954 21.7834 22.3954 20.307V10.3081C22.3868 9.84015 22.1639 9.39727 21.783 9.10637L21.7623 9.09022L14.2159 3.07197C14.2155 3.07165 14.2151 3.07132 14.2147 3.071C13.3479 2.38492 12.1135 2.38454 11.2463 3.06986L3.73333 9.09878C3.72429 9.10603 3.71515 9.11316 3.70592 9.12015C3.32534 9.40853 3.10352 9.85022 3.09729 10.3163V20.307C3.09729 21.7834 4.30963 23.0015 5.83166 23.0015H8.03906C8.14691 23.0015 8.21284 22.9183 8.21284 22.842H8.23491Z"/>
        </symbol>
        <symbol id="VOLS" viewBox="0 0 35 34">
            <path d="M10.0263 13.4492H4.8054C4.22872 13.4492 3.76123 13.9167 3.76123 14.4934V19.7143C3.76123 20.2909 4.22872 20.7584 4.8054 20.7584H10.0263C10.603 20.7584 11.0704 20.2909 11.0704 19.7143V14.4934C11.0704 13.9167 10.603 13.4492 10.0263 13.4492Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M28.8214 5.61768H22.5564C21.9797 5.61768 21.5122 6.08517 21.5122 6.66185V12.9269C21.5122 13.5036 21.9797 13.9711 22.5564 13.9711H28.8214C29.3981 13.9711 29.8656 13.5036 29.8656 12.9269V6.66185C29.8656 6.08517 29.3981 5.61768 28.8214 5.61768Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M28.8214 20.2363H22.5564C21.9797 20.2363 21.5122 20.7038 21.5122 21.2805V27.5455C21.5122 28.1222 21.9797 28.5897 22.5564 28.5897H28.8214C29.3981 28.5897 29.8656 28.1222 29.8656 27.5455V21.2805C29.8656 20.7038 29.3981 20.2363 28.8214 20.2363Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.0708 17.104H16.2917" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21.5124 24.4129H19.424C18.5932 24.4129 17.7965 24.0828 17.209 23.4954C16.6215 22.9079 16.2915 22.1111 16.2915 21.2803V12.927C16.2915 12.0962 16.6215 11.2994 17.209 10.7119C17.7965 10.1245 18.5932 9.79443 19.424 9.79443H21.5124" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </symbol>

        <symbol id="VLAN" viewBox="0 0 27 26">
            <path d="M25.0597 20.8189H17.1393C16.9479 20.2813 16.6393 19.7932 16.2359 19.3897C15.8325 18.9863 15.3443 18.6777 14.8068 18.4863V14.4108H23.7781C24.118 14.4108 24.444 14.2757 24.6843 14.0354C24.9247 13.795 25.0597 13.4691 25.0597 13.1292C25.0597 12.7892 24.9247 12.4633 24.6843 12.2229C24.444 11.9826 24.118 11.8475 23.7781 11.8475H22.4965V4.15784C22.4965 3.13812 22.0914 2.16017 21.3703 1.43912C20.6493 0.71807 19.6713 0.312988 18.6516 0.312988H8.39868C7.37897 0.312988 6.40101 0.71807 5.67996 1.43912C4.95891 2.16017 4.55383 3.13812 4.55383 4.15784V11.8475H3.27222C2.93231 11.8475 2.60633 11.9826 2.36598 12.2229C2.12563 12.4633 1.9906 12.7892 1.9906 13.1292C1.9906 13.4691 2.12563 13.795 2.36598 14.0354C2.60633 14.2757 2.93231 14.4108 3.27222 14.4108H12.2435V18.4863C11.706 18.6777 11.2178 18.9863 10.8144 19.3897C10.411 19.7932 10.1024 20.2813 9.91099 20.8189H1.9906C1.65069 20.8189 1.32471 20.9539 1.08436 21.1942C0.844011 21.4346 0.708984 21.7606 0.708984 22.1005C0.708984 22.4404 0.844011 22.7664 1.08436 23.0067C1.32471 23.2471 1.65069 23.3821 1.9906 23.3821H9.91099C10.1804 24.1243 10.6718 24.7656 11.3184 25.2188C11.965 25.672 12.7355 25.9152 13.5251 25.9152C14.3148 25.9152 15.0853 25.672 15.7319 25.2188C16.3785 24.7656 16.8699 24.1243 17.1393 23.3821H25.0597C25.3996 23.3821 25.7256 23.2471 25.9659 23.0067C26.2063 22.7664 26.3413 22.4404 26.3413 22.1005C26.3413 21.7606 26.2063 21.4346 25.9659 21.1942C25.7256 20.9539 25.3996 20.8189 25.0597 20.8189ZM7.11707 11.8475V4.15784C7.11707 3.81793 7.25209 3.49195 7.49244 3.2516C7.73279 3.01125 8.05878 2.87622 8.39868 2.87622H18.6516C18.9915 2.87622 19.3175 3.01125 19.5579 3.2516C19.7982 3.49195 19.9332 3.81793 19.9332 4.15784V11.8475H7.11707ZM13.5251 23.3821C13.2717 23.3821 13.0239 23.3069 12.8131 23.1661C12.6024 23.0253 12.4381 22.8251 12.3411 22.5909C12.2441 22.3567 12.2187 22.099 12.2682 21.8504C12.3176 21.6018 12.4397 21.3735 12.6189 21.1942C12.7981 21.015 13.0265 20.8929 13.2751 20.8435C13.5237 20.794 13.7814 20.8194 14.0156 20.9164C14.2498 21.0134 14.4499 21.1777 14.5908 21.3884C14.7316 21.5992 14.8068 21.847 14.8068 22.1005C14.8068 22.4404 14.6717 22.7664 14.4314 23.0067C14.191 23.2471 13.8651 23.3821 13.5251 23.3821Z" />
        </symbol>

        <symbol id="sysAdmin" viewBox="0 0 27 27">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.70838 17.3809C5.59254 16.7492 8.08757 16.559 10.6538 16.559C13.2358 16.559 15.7319 16.7567 17.6138 17.3966C18.56 17.7184 19.4239 18.1758 20.0599 18.8423C20.719 19.533 21.0913 20.4066 21.0913 21.4389C21.0913 22.4732 20.7158 23.3464 20.0529 24.0345C19.4139 24.6979 18.5469 25.1509 17.5999 25.4685C15.7159 26.1004 13.2208 26.2909 10.6538 26.2909C8.07265 26.2909 5.57653 26.0936 3.69446 25.4538C2.74818 25.1321 1.88412 24.6748 1.24795 24.0082C0.58872 23.3174 0.216309 22.4436 0.216309 21.4111C0.216309 20.3764 0.591962 19.5031 1.25493 18.8149C1.89416 18.1513 2.76123 17.6984 3.70838 17.3809ZM2.6953 20.2024C2.38407 20.5255 2.21631 20.9043 2.21631 21.4111C2.21631 21.9198 2.384 22.3017 2.69482 22.6274C3.02871 22.9773 3.56465 23.2973 4.33817 23.5602C5.89568 24.0897 8.11832 24.2909 10.6538 24.2909C13.1783 24.2909 15.4021 24.0962 16.9639 23.5723C17.7398 23.3121 18.2776 22.9946 18.6125 22.647C18.9237 22.3239 19.0913 21.9452 19.0913 21.4389C19.0913 20.9304 18.9238 20.5487 18.613 20.223C18.2792 19.8732 17.7433 19.5532 16.9699 19.2901C15.4125 18.7605 13.1899 18.559 10.6538 18.559C8.12989 18.559 5.90616 18.7534 4.34411 19.2771C3.56816 19.5373 3.03026 19.8547 2.6953 20.2024Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.60637 7.11157C3.60734 3.21932 6.76251 0.0644531 10.654 0.0644531C14.5472 0.0644531 17.7029 3.22014 17.7029 7.11336C17.7029 11.0066 14.5472 14.1623 10.654 14.1623H10.6129L10.6093 14.1623C6.72732 14.1484 3.59344 10.9921 3.60637 7.11157ZM10.654 2.06445C7.86677 2.06445 5.60637 4.32457 5.60637 7.11336V7.11694C5.59643 9.89306 7.83744 12.1514 10.6147 12.1623H10.654C13.4426 12.1623 15.7029 9.90202 15.7029 7.11336C15.7029 4.32471 13.4426 2.06445 10.654 2.06445Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.0047 7.90263C23.557 7.90263 24.0047 8.35034 24.0047 8.90263V14.2126C24.0047 14.7649 23.557 15.2126 23.0047 15.2126C22.4525 15.2126 22.0047 14.7649 22.0047 14.2126V8.90263C22.0047 8.35034 22.4525 7.90263 23.0047 7.90263Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2979 11.5574C19.2979 11.0051 19.7456 10.5574 20.2979 10.5574H25.7139C26.2661 10.5574 26.7139 11.0051 26.7139 11.5574C26.7139 12.1097 26.2661 12.5574 25.7139 12.5574H20.2979C19.7456 12.5574 19.2979 12.1097 19.2979 11.5574Z"/>

        </symbol>
    </svg>

</header>
