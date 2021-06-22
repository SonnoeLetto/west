<?php
?>

<section class="phone-tariff">
    <div class="phone-tariff__content">
        <h5 class="middle__title phone-tariff__title">
            <?= Yii::t('phone', 'Домашній телефон.') . '<span>' . Yii::t('phone', 'Безлімітні і зручні опції') .'</span>'?>

        </h5>
        <div class="phone-tariff__name">ada</div>
        <ul class="phone-tariff__list">
            <li class="phone-tariff__list-item">
                <?= Yii::t('phone', 'Одеський міський телефонний номер') ?>
            </li>
            <li class="phone-tariff__list-item">
                <?= '<span>' . Yii::t('phone', 'Безлімітні дзвінки ') . '</span>'. Yii::t( 'phone','всередині мережі Westelecom') ?>

            </li>
            <li class="phone-tariff__list-item">
                <?= '<span>' . Yii::t('phone', 'Безлімітні дзвінки ') . '</span>' . Yii::t('phone','на Одеські міські номери') ?>
            </li>
            <li class="phone-tariff__list-item">
                <?= Yii::t('phone', 'Дзвінки по міжнародного та мобільного зв\'язку по Україні: 120 хвилин безкоштовно') ?>
            </li>
            <li class="phone-tariff__list-item">
                <?= Yii::t('phone', 'Дзвінки по міжміського зв\'язку по Україні понад ліміт: 0,44 грн / хв') ?>

            </li>
            <li class="phone-tariff__list-item">
                <?= Yii::t('phone', 'Дзвінки на номери мобільних операторів зв\'язку по Україні понад ліміт: 0,79 грн / хв') ?>

            </li>
            <li class="phone-tariff__list-item">
                <?= Yii::t('phone', 'Дзвінки з міжнародного зв\'язку оплачуються за діючими тарифами') ?>

            </li>
        </ul>
    </div>
    <div class="phone-tariff__card">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        <h6 class="phone-tariff__subtitle">
                            <?= Yii::t('phone', 'Додаткові послуги') ?>
                            <div class="phone-tariff__card-wrapper">
                                <div class="phone-tariff__card-item">
                                    <div class="img-wrap">
                                        <img class="phone-tariff__card" src="/img/phone-tariff-icon/icon1.svg" alt="">
                                    </div>
                                    <div class="phone-tariff__card-title">
                                        <?= Yii::t('phone', 'Гарний номер') ?>
                                    </div>
                                    <div class="phone-tariff__card-text">
                                        <?= Yii::t('phone', 'Можливість замовити  номер який запам\'ятовується(від 750-2х-хх до 750-5х-хх)') ?>
                                    </div>
                                </div>
                                <div class="phone-tariff__card-item">
                                    <div class="img-wrap">
                                        <img class="phone-tariff__card" src="/img/phone-tariff-icon/icon2.svg" alt="">
                                    </div>
                                    <div class="phone-tariff__card-title">
                                        <?= Yii::t('phone', 'Історія і статистика дзвінків') ?>
                                    </div>
                                    <div class="phone-tariff__card-text">
                                        <?= Yii::t('phone', 'Можливість отримати деталізований звіт (50грн за 1 деталізований звіт)') ?>
                                    </div>
                                </div>
                                <div class="phone-tariff__card-item">
                                    <div class="img-wrap">
                                        <img class="phone-tariff__card" src="/img/phone-tariff-icon/icon3.svg" alt="">
                                    </div>
                                    <div class="phone-tariff__card-title">
                                        <?= Yii::t('phone', 'Переадресація дзвінків') ?>
                                    </div>
                                    <div class="phone-tariff__card-text">
                                        <?= Yii::t('phone', 'Можливість переадресувати вхідний дзвінок на інший телефонний номер') ?>
                                    </div>
                                </div>
                                <div class="phone-tariff__card-item">
                                    <div class="img-wrap">
                                        <img class="phone-tariff__card" src="/img/phone-tariff-icon/icon4.svg" alt="">
                                    </div>
                                    <div class="phone-tariff__card-title">
                                        <?= Yii::t('phone', 'Заборона вихідних') ?>
                                    </div>
                                    <div class="phone-tariff__card-text">
                                        <?= Yii::t('phone', 'Можливість заборонити всі вихідні дзвінки, крім екстрених служб і номерів мережі Westelecom (15грн / міс)') ?>
                                    </div>
                                </div>
                                <div class="phone-tariff__card-item">
                                    <div class="img-wrap">
                                        <img class="phone-tariff__card" src="/img/phone-tariff-icon/icon5.svg" alt="">
                                    </div>
                                    <div class="phone-tariff__card-title">
                                        <?= Yii::t('phone', 'Заборона на міжмісто і мобільні') ?>
                                    </div>
                                    <div class="phone-tariff__card-text">
                                        <?= Yii::t('phone', 'Можливість заборонити вихідні дзвінки по міжміському зв\'язку і на моб телефони (15 грн / міс)') ?>
                                    </div>
                                </div>
                                <div class="phone-tariff__card-item">
                                    <div class="img-wrap">
                                        <img class="phone-tariff__card" src="/img/phone-tariff-icon/icon5.svg" alt="">
                                    </div>
                                    <div class="phone-tariff__card-title">
                                        <?= Yii::t('phone', 'Заборона на міжнародні') ?>
                                    </div>
                                    <div class="phone-tariff__card-text">
                                        <?= Yii::t('phone', 'Можливість заборонити вихідні дзвінки, при необхідності (безкоштовно)') ?>
                                    </div>
                                </div>
                            </div>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


