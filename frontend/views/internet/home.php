<?php
use common\models\Slider;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Tariffs;
use yii\web\View;

$this->registerJs('var cities = ' . json_encode(ArrayHelper::map($cities, 'id', 'group_id')) . ';', View::POS_HEAD);

?>
<section class="promotion">
    <div class="promotion-slider">
        <div class="promotion-slider__item">
            <img class="promotion-slider__img" src="img/slider_img/prom__fast-internet.jpg" alt="">
            <!--<div class="wrap-img">-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="promotion__content">
                            <div class="promotion__content-wrap">
                                <h3 class="promotion__content-title" style="color: #ffffff">Без штрафов за
                                    превышение скорости по Одессе:)</h3>
                                <p class="promotion__content-text">А здесь, что нибудь очень продающее, важное,
                                    описывающее, как сильно и важно это
                                    купить.</p>
                                <a class="promotion__content-btn">Подключить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="promotion-slider__item">

            <img class="promotion-slider__img" src="img/slider_img/Карусель2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="promotion__content">
                            <h3 class="promotion__content-title">Без штрафов за превышение скорости по Одессе:)</h3>
                            <a class="promotion__content-btn">Подключить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promotion-slider__item">
            <img class="promotion-slider__img" src="img/slider_img/Карусель.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="promotion__content">
                            <h3 class="promotion__content-title">Без штрафов за превышение скорости по Одессе:)</h3>
                            <a class="promotion__content-btn">Подключить</a>
                        </div>
                    </div>
                </div>
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
                        <div class="rate-item rate-item__home-color" data-id="<?= $tariff->group_id ?>">
                            <?php if ($tariff->for_new){ ?>
                                <div class="rate-item__forNewClients forNewClients-color-home"><?= Yii::t('site', 'для нових клієнтів')?></div>
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
                            <button class="button button-secondary rate-btn-m"><?= Yii::t('internet', 'Підключити')?></button>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>


    </div>

</section>
<section class="connection-check">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper">
                    <h5 class="middle__title check-title">
                        <?= Yii::t('site', 'Перевірте, чи підключений ваш населений пункт до мережі Westelecom')?>
                    </h5>
                    <div class="connection-check__form">
                        <div class="connection-check__form-inner">
                            <input class="connection-check__form-input" type="text" placeholder="Одесса">
                            <button class="button button-primary connection-check-btn"><?= Yii::t('site', 'Перевірити')?></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<section class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper">
                    <h5 class="info__title middle__title"><?= Yii::t('site', 'Стабільний Інтернет, симетрична швидкість, мінімальний пінг')?></h5>
                    <p class="info__text"><?= Yii::t('site', 'Ніяких "до ..." - швидкість завжди дорівнює вашого тарифного плану. кожному клієнту в будинок проводиться оптоволоконний кабель (GPON).')?>
                    </p>
                    <p class="info__text">
                        <?= Yii::t('site', 'Мінімальний пінг, який забезпечується за допомогою п\'яти точок доступу до магістральних провайдерів і правильної маршрутизації.')?>
                    </p>
                    <p class="info__text">
                        <?= Yii::t('site', 'Розширені функції: заморозка інтернету до 6 місяців, послуга "3 дні в борг", виділений IP-адрес, безкоштовна зміна тарифного плану, зручна система оплати послуг.')?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="services-content">
                        <h5 class="middle__title services-content__title">
                            <?= Yii::t('site', 'Вас обов\'язково зацікавить ...')?>
                        </h5>
                        <p class="services__text">
                            <?= Yii::t('site', 'Для більш комфортного використання інтернету виберіть саме те, що вам необхідно')?>
                        </p>
                    </div>
                    <div class="services-card">
<!--                        <div class="services-card__item">-->
<!--                                <img class="services-card__img" src="/img/image__servCard/card1.jpg" alt="card">-->
<!--                                <a class="services-card__link" href="#">-->
<!--                                    --><?//= Yii::t('site', 'Непристойно швидкий Інтернет для дому')?>
<!--                                </a>-->
<!--                        </div>-->
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card2.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Ваш будинок або квартира завжди у прямому ефірі')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card3.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                    <?= Yii::t('site', 'Дивіться ваші улюблені фільми і шоу c Trinity TV в мережі Westelecom')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card6.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Домашній телефон став більш корисним')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card4.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Зберігайте дані в самому безпечному місці')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card5.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Потужні роутери для вимогливих розваг і роботи')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card7.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Зроби комплімент близьким! Подаруй інтернет!')?>
                            </a>
                        </div>
                    </div>
                    <div class="services-plus">
                        <h5 class="middle__title services-plus__title"><?= Yii::t('site', 'Додаткові послуги')?></h5>
                        <div class="services-card">
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/cardPlus1.jpg" alt="card">
                                <a class="services-card__link" href="#">
                                    <?= Yii::t('site', 'Їдете у відпустку? Активуйте послугу "Заморожування"')?>
                                </a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/cardPlus2.jpg" alt="card">
                                <a class="services-card__link" href="#">
                                    <?= Yii::t('site', 'Чи працюєте з великим обсягом даних? Замовте "Виділений IP"')?>
                                </a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/cardPlus3.jpg" alt="card">
                                <a class="services-card__link" href="#">
                                    <?= Yii::t('site', 'Потрібно налаштувати домашню мережу або щось не працює? Виклик майстра!')?>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="application">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="application-inner__wrapper">
                    <div class="application-capability          ">
                        <div class="capability-content">
                            <h3 class="capability-content__mainTitle">
                                <?= Yii::t('site', 'Особистий кабінет від Westelecom завжди з вами')?></h3>
                            <div class="capability-content__block">
                                <h6 class="capability-content__title"><?= Yii::t('site', 'Тримайте баланс під контролем')?></h6>
                                <p class="capability-content__text">
                                    <?= Yii::t('site', 'Відстежуйте стан балансу, контролюйте витрати, де б ви не знаходилися')?>
                                </p>
                            </div>
                            <div class="capability-content__block">
                                <h6 class="capability-content__title"><?= Yii::t('site', 'Керуйте послугами')?></h6>
                                <p class="capability-content__text">
                                    <?= Yii::t('site', 'Кастомізіруйте послуги під себе - замовляйте саме те, що вам необхідно')?>
                                </p>
                            </div>
                            <div class="capability-content__block">
                                <h6 class="capability-content__title"><?= Yii::t('site', 'Служба підтримки')?></h6>
                                <p class="capability-content__text">
                                    <?= Yii::t('site', 'У будь-який час доби ви можете звернутися до нас за отриманням необхідних консультацій. Оператори тех підтримки завжди на зв\'язку 24/7')?>В любое время суток вы можете обратиться к нам
                                </p>
                            </div>

                        </div>
                        <img class="capability-img" src="/img/iPhone12.png">
                    </div>
                    <div class="application-about">
                        <p class="about-text">
                            <?= Yii::t('site', 'Додаток «Westelecom» - це безкоштовний і зручний спосіб керувати послугами. Контролюйте баланс, підключайте послуги, міняйте тариф і багато іншого.')?>
                        </p>
                        <div class="about-link">
                            <a class="btn__link">
                                <img src="/img/Appstore.svg" alt="">
                            </a>
                            <a class="btn__link">
                                <img src="/img/PlayMarket.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="howConnect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="howConnect-content">
                        <h5 class="middle__title howConnect__title--homeInt"><?= Yii::t('site', 'Як підключити Домашній інтернет')?></h5>
                        <div class="howConnect__list">
                            <p class="howConnect__list-item"><?= Yii::t('site', '1. Залиште заявку') . '<br>'. Yii::t('site', 'Просто натисніть «Підключити» або заповніть форму зворотного зв\'язку.')?></p>
                            <p class="howConnect__list-item">
                                <?= Yii::t('site', '2. Консультація з оператором. Ви можете звернутися в будь-який день і в будь-який час. Наш колл-центр працює цілодобово, в будь-який день тижня. Підберіть найбільш вигідний тариф, зручний день і час монтажу.')?>
                            </p>
                            <p class="howConnect__list-item">
                                <?= Yii::t('site', '3. Сплачуйте без комісій. Через сайт, особистий кабінет або іншим, найбільш зручним для вас способом.')?>
                            </p>
                            <p class="howConnect__list-item">
                                <?= Yii::t('site', '4. Спеціаліст проведе монтаж та налаштує обладнання. Без шкоди для вашого ремонту підключить нтернет і налаштує обладнання.')?>
                            </p>
                        </div>

                    </div>
                    <div class="howConnect-feedback">
                        <h6 class="howConnect-feedback__title howConnect-feedback--homeInt"><?= Yii::t('site', 'Залишилися питання по підключенню?')?></h6>
                        <p class="howConnect-feedback__text howConnect-feedback--homeInt"><?= Yii::t('site', 'Зателефонуйте ') . '<a class="feedback-numb">0 800 201 222</a>' . Yii::t('site', 'або') .
                            '<a class="feedback-link">' . Yii::t('site', 'Заповніть форму зворотного зв\'язку')?>
                                <svg class="feedbckArr">
                                    <use xlink:href="/img/sprite.svg#rightArrow"></use>
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>