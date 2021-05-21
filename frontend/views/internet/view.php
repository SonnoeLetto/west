<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.05.21
 * Time: 11:42
 */
?>

<div class="tariff-content" >
    <?= $title ?>

    <p class="rate-item__title tariff-speed"><span><?= $tariff['speed'] ?></span> Мб/с</p>
    <ul class="tariff-list">
        <li class="tariff-content__item">
            <h6 class="tariff-content__title"><?= Yii::t('internet', 'Гарантована швидкість доступу до мережі інтернет') ?></h6>
            <p class="tariff-content__text"><?= Yii::t('internet', 'Ми гарантуємо, що швидкість Інтернету буде відповідати тарифу: 100 Мбіт / сек для прийому, і 100 Мбіт / сек для передачі.') ?></p>
        </li>
        <li class="tariff-content__item">
            <h6 class="tariff-content__title"><?= Yii::t('internet', 'Мінімальний пінг') ?></h6>
            <p class="tariff-content__text"><?= Yii::t('internet', 'Мінімальний пінг ми забезпечуємо за допомогою п\'яти точок доступу до
магістральним провайдерам і правильної маршрутизації.') ?></p>
        </li>
        <li class="tariff-content__item">
            <h6 class="tariff-content__title"><?= Yii::t('internet', 'Симетричний канал') ?></h6>
            <p class="tariff-content__text"><?= Yii::t('internet', 'Швидкість передачі 100 Мбіт / сек завжди дорівнює гарантованої швидкості
прийому 100 Мбіт / сек.') ?></p>
        </li>
        <li class="tariff-content__item">
            <h6 class="tariff-content__title"><?= Yii::t('internet', 'Технологія підключення GPON') ?></h6>
            <p class="tariff-content__text"><?= Yii::t('internet', 'Мережа GPON продовжує працювати навіть, коли районна електрична мережа
                з якихось причин раптом відключає електрику. Якщо у користувача
                є резервні джерела живлення, він може продовжувати користуватися
                інтернетом навіть тоді, коли весь його селище або квартал
                відключили від світла.') ?></p>
        </li>
        <li class="tariff-content__item">
            <h6 class="tariff-content__title"><?= Yii::t('internet', 'Цілодобова служба підтримки') ?></h6>
            <p class="tariff-content__text"><?= Yii::t('internet', 'Ми не використовуємо телефонних роботів. жива консультація
оператора 24/7') ?></p>
        </li>
        <li class="tariff-content__item">
            <h6 class="tariff-content__title"><?= Yii::t('internet', 'Безкоштовна зміна ') ?><a
                        href="#"><?= Yii::t('internet', 'тарифного плану') ?></a></h6>
        </li>
        <li class="tariff-content__item">
            <h6 class="tariff-content__title"><?= Yii::t('internet', 'Три дня в борг') ?></h6>
            <p class="tariff-content__text"><?= Yii::t('internet', 'Перші три дні після терміну оплати ви можете користуватися Інтернетом
                в рахунок майбутніх оплат, навіть якщо на Вашому рахунку недостатньо коштів для
                оплати тарифу.') ?><a
                        href="#"><?= Yii::t('internet', 'Активувати послугу') ?></a> <?= Yii::t('internet', 'можна в особистому кабінеті') ?>
            </p>
        </li>
        <li class="tariff-content__item <?= $check__arrow ?>">
            <h6 class="tariff-content__title <?= $list__title ?> "><?= Yii::t('internet', 'Інтернет в подарунок') ?></h6>
            <p class="tariff-content__text"><?= Yii::t('internet', 'Місяць інтернету в подарунок - при оплаті за шість місяців відразу або два
                місяці в подарунок - при оплаті за рік!') ?></p>
        </li>
    </ul>

</div>
<div class="tariff-result">
    <div class="tariff-result__inner">
        <div class="tariff-result__checkbox-wrapper">
            <div class="tariff-result__checkbox">
                <input class="options-connect__checkbox-input" type="checkbox">
                <label class="options-connect__checkbox-label" for="checkbox"><p>
                        <?= Yii::t('internet', 'Виділений IP (32грн / міс)') ?>
                    </p></label>
            </div>

            <div class="tariff-result__select-checkbox">
                <div class="dropdown-select">
                    <button class="dropdown__btn tariff-result__dropdown" type="button">
                        1
                    </button>
                    <ul class="dropdown__list">
                        <li class="dropdown__list-item" data-value="Odessa">
                            2
                        </li>
                        <li class="dropdown__list-item" data-value="not od">
                            3
                        </li>
                    </ul>
                    <input type="text" class="dropdown__input-hidden" value=""
                           name="sel-category">
                </div>
            </div>
        </div>
        <div class="tariff-result__total">
            <div class="tariff-result__total-title"><?= Yii::t('internet', 'Разом:') ?></div>
            <ul class="tariff-result__total-list">
                <li class="total-list-item">
                    <p class="total-list-item-text"> <?= Yii::t('internet', 'Абонентська плата') ?></p>
                    <p class="total-list-item-text nowrap"> <?= $tariff['price'] ?><?= Yii::t('internet', 'грн / міс') ?></p>

                </li>
                <li class="total-list-item">
                    <p class="total-list-item-text"><?= Yii::t('internet', 'Виділений IP') ?></p>
                    <p class="total-list-item-text nowrap"><?= Yii::t('internet', '32грн / міс') ?></p>
                </li>
                <li class="total-list-item">
                    <p class="total-list-item-text item-text-main"><?= Yii::t('internet', 'Підсумкова абонентська оплата') ?></p>
                    <p class="total-list-item-text item-text-main nowrap"><?= Yii::t('internet', '182грн / міс') ?></p>
                </li>
            </ul>
        </div>
        <button class="btn__form"><?= Yii::t('internet', 'Підключити') ?></button>
    </div>

</div>
