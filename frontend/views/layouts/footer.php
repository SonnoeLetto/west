<?php
use yii\helpers\Html;
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer__inner">
                    <div class="footer__item">
                        <h4 class="footer__title company__color"><?= Yii::t('footer', 'Компанія')?></h4>
                        <ul class="footer__list">
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Загальна інформація')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Сертифікати')?></a></li>
                            <li class="footer__list-item"> <?= Html::a(Yii::t('footer', 'Новини'), ['/news/'])?></li>
                            <li class="footer__list-item"><?= Html::a(Yii::t('footer', 'Блог'), ['/blog/'])?></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Договірна документація')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Політика конфіденційності')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Умови надання послуг')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Контакти')?></a></li>
                        </ul>
                    </div>
                    <div class="footer__item home__pad">
                        <h4 class="footer__title home__color"><?= Yii::t('footer', 'Для дому')?></h4>
                        <ul class="footer__list">
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Домашній інтернет')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Відеоспостереження')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Цифрове TV')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Домашній телефон')?></a></li>
                            <li class="footer__list-item"><a href="#">Colocation</a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Особистий кабінет')?></a></li>
                            <li class="footer__list-item"><a href="#">Магазин</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <h4 class="footer__title business__color"><?= Yii::t('footer', 'Для бізнесу')?></h4>
                        <ul class="footer__list">
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Інтернет для бізнесу')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Відеоспостереження')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Бізнес Телефонія')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Продаж/Оренда ВОЛЗ')?></a></li>
                            <li class="footer__list-item"><a href="#">VLAN</a></li>
                            <li class="footer__list-item"><a href="#">Colocation</a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Сисадмін')?></a></li>
                        </ul>
                    </div>


                </div>
                <div class="footer__accordion">
                    <div class="footer__accordion-item">
                        <h4 class="footer__title acc_Company acc__title"><?= Yii::t('footer', 'Компанія')?></h4>
                        <ul class="accordion__list">
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Загальна інформація')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Сертифікати')?></a></li>
                            <li class="footer__list-item"><?= Html::a(Yii::t('footer', 'Новини'), ['/news/'])?></li>
                            <li class="footer__list-item"><?= Html::a(Yii::t('footer', 'Блог'), ['/blog/'])?></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Договірна документація')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Політика конфіденційності')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Умови надання послуг')?></a></li>
                            <li class="footer__list-item"><a href="#"><a href="#"><?= Yii::t('footer', 'Контакти')?></a></li>
                        </ul>
                    </div>
                    <div class="footer__accordion-item">
                        <h4 class="footer__title acc__Home acc__title"><?= Yii::t('footer', 'Для дому')?></h4>
                        <ul class="accordion__list">
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Домашній інтернет')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Відеоспостереження')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Цифрове TV')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Домашній телефон')?></a></li>
                            <li class="footer__list-item"><a href="#">Colocation</a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Особистий кабінет')?></a></li>
                            <li class="footer__list-item"><a href="#">Магазин</a></li>
                        </ul>
                    </div>
                    <div class="footer__accordion-item">
                        <h4 class="footer__title acc__Business acc__title"><?= Yii::t('footer', 'Для бізнесу')?></h4>
                        <ul class="accordion__list">
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Інтернет для бізнесу')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Відеоспостереження')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Бізнес Телефонія')?></a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Продаж/Оренда ВОЛЗ')?></a></li>
                            <li class="footer__list-item"><a href="#">VLAN</a></li>
                            <li class="footer__list-item"><a href="#">Colocation</a></li>
                            <li class="footer__list-item"><a href="#"><?= Yii::t('footer', 'Сисадмін')?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-link">
                    <div class="footer-link__social">
                        <a class="footer-link__social-item" href="">
                            <div class="footer-link__social-item__img">
                                <img src="/img/image__social/iconBig/Instagram.svg" alt="">
                            </div>
                        </a>

                        <a class="footer-link__social-item" href="">
                            <div class="footer-link__social-item__img">
                                <img src="/img/image__social/iconBig/Facebook.svg" alt="">
                            </div>
                        </a>
                        <a class="footer-link__social-item telegMarg" href="">
                            <div class="footer-link__social-item__img">
                                <img src="/img/image__social/iconBig/Telegram.svg" alt="">
                            </div>
                        </a>
                        <a class="footer-link__social-item" href="">
                            <div class="footer-link__social-item__img">
                                <img src="/img/image__social/iconBig/Viber.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <a class="footer-link__speedTest speedT-pt">
                        <svg class="speedTest">
                            <use xlink:href="/img/sprite.svg#speed__test"></use>
                        </svg>
                    </a>
                    <div class="link__wrapper link_tp">
                        <a class="btn__link center_link" href=""><img src="/img/Appstore.svg" alt=""></a>
                        <a class="btn__link center_link" href=""><img src="/img/PlayMarket.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>