<?php
use common\models\Slider;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Tariffs;
use yii\web\View;
use \yii\helpers\Html;

$this->registerJs('var tariffs = ' . json_encode(ArrayHelper::toArray($tariffs)) . ';', View::POS_HEAD);

$this->registerJs('var cities = ' . json_encode(ArrayHelper::map($cities, 'id', 'group_id')) . ';', View::POS_HEAD);

?>

<section class="rate">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">

                    <div class="rate-content">
                        <?='<h5 class="tariff-title-business middle__title">' . Yii::t('internet', 'Інтернет ') . ' <span>' . Yii::t('internet', 'для вашого бізнесу') . '</span></h5>'?>
                        <?='<p class="rate__text">' . Yii::t('site', 'і підключіть Домашній Інтернет на супершвидкості') . '</p>'?>
                    </div>

                    <div class="tariff-business__tabs">
                        <ul class="tabs-list">
                            <?php foreach ($groups as $key => $group) { ?>

                                <li class="business__tab <?= $key == 0 ? 'active' : '' ?> " data-group=<?= $group->id ?>>
                                    <a class="" href="#"><?= $group->name ?></a>
                                </li>
                            <?php } ?>

                        </ul>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="rate-slider__business">

                    <?php $group_id = $groups[0]->id ?? null ?>
                    <?php foreach (Tariffs::getTariffs() as $tariff) { ?>
                        <div class="rate-item  rate-item__business-color" data-id="<?= $tariff->group_id ?>">
                            <?php if ($tariff->for_new){ ?>
                                <div class="rate-item__forNewClients forNewClients-color-business"><?= Yii::t('site', 'для нових клієнтів')?></div>
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
                                <li class="rate-item__item rate-item__link"><?= Html::a(Yii::t('site', 'Докладніше')) ?></li>
                            </ul>
                            <div class="rate-item__price price-color"><span><?=$tariff->price ?></span> <?= Yii::t('internet', 'грн / міс')?></div>
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
                    <h5 class="middle__title check-title__business">
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
                    <h5 class="info__title middle__title"><?= Yii::t('site', 'Надійний інтернет для вашого бізнесу. Гарантована, симетрична швидкість передачі даних.')?></h5>
                    <p class="info__text"><?= Yii::t('site', 'Підключення інтернету в вашому офісі з установкою і налаштуванням обладнання.')?>
                    </p>
                    <p class="info__text"><?= Yii::t('site', 'Ніяких "до ..." - швидкість завжди дорівнює вашого тарифного плану. кожному клієнту в офіс проводиться оптоволоконний кабель (GPON).')?>
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
<section class="block-info">
    <div class="block-info__bus-internet">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="middle__title block-info__title"><?= Yii::t('site', 'Переваги стабільного і швидкісного інтернету Westelecom')?></div>
                        <div class="block-info__inner">
                            <div class="block-info__column">
                                <img class="column__img" src="/img/Block_icon/icon1.svg" alt="">
                                <div class="column__title"><?= Yii::t('site', 'Працюйте з великими обсягами інформації')?></div>
                                <div class="column__text"><?= Yii::t('site', 'Передавайте об\'ємні файли і одночасно працюйте з хмарними сервісами, фото-відео контентом, базами даних, поштою. Блискавичне кешування і робота з сервісами Google')?></div>
                            </div>
                            <div class="block-info__column">
                                <img class="column__img" src="/img/Block_icon/icon2.svg" alt="">
                                <div class="column__title"><?= Yii::t('site', 'Збільшуйте лояльність клієнтів і залучайте нових')?></div>
                                <div class="column__text"><?= Yii::t('site', 'Утримуйте аудиторію лояльних клієнтів в сфері обслуговування за допомогою Wi-Fi і інших сервісів, що вимагає високих швидкостей')?></div>
                            </div>
                            <div class="block-info__column">
                                <img class="column__img" src="/img/Block_icon/icon3.svg" alt="">
                                <div class="column__title"><?= Yii::t('site', 'Працюйте в онлайн без збоїв')?></div>
                                <div class="column__text"><?= Yii::t('site', 'Працюйте ефективно в онлайн з швидким інтернетом без збоїв, що особливо актуально для тих, хто працює віддалено а також для магазинів і служб доставки')?></div>
                            </div>
                            <div class="block-info__column">
                                <img class="column__img" src="/img/Block_icon/icon4.svg" alt="">
                                <div class="column__title"><?= Yii::t('site', 'Підвищуйте конкурентноздатність')?></div>
                                <div class="column__text"><?= Yii::t('site', 'Використовуйте сучасні технології і надійний інтернет для беспередойной роботи цифрових сервісів')?></div>
                            </div>
                        </div>
                    </div>
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
                        <h5 class="middle__title services-content__title-business">
                            <?= Yii::t('site', 'Вас обов\'язково зацікавить ...')?>
                        </h5>
                        <p class="services__text">
                            <?= Yii::t('site', 'Для більш комфортного використання інтернету виберіть саме те, що вам необхідно')?>
                        </p>
                    </div>
                    <div class="services-card">
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card_1.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Ваш офіс, склад або ресторан завжди в прямому ефірі')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card_2.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Зв\'язок для вашого бізнесу за вигідними тарифами')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card_3.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Оптична, виділена лінія зв\'язку. Повна безпека, відсутність компромісів')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card_4.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Об\'єднайте ваші філії в єдину, виділену мережу')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card4.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Зберігайте дані в самому безпечному місці')?>
                            </a>
                        </div>
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card_5.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Ідеальний порядок вашої IT інфраструктури')?>
                            </a>
                        </div>
                    </div>
                    <div class="services-plus">
                        <h5 class="middle__title services-plus__title-business"><?= Yii::t('site', 'Додаткові послуги')?></h5>
                        <div class="services-card">
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/card_6.jpg" alt="card">
                                <a class="services-card__link" href="#">
                                    <?= Yii::t('site', 'З\'їжджаєте в новий офіс? Скористайтеся послугою "Заморожування"')?>
                                </a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/cardPlus2.jpg" alt="card">
                                <a class="services-card__link" href="#">
                                    <?= Yii::t('site', 'Чи працюєте з великим обсягом даних? Замовте "Виділений IP"')?>
                                </a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/card_7.jpg" alt="card">
                                <a class="services-card__link" href="#">
                                    <?= Yii::t('site', 'Потужні роутери для створення надійної, безшовної мережі вашого офісу')?>
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
                        <h5 class="middle__title howConnect__title--homeInt"><?= Yii::t('site', 'Як підключити Інтернет для бізнесу')?></h5>
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
                        <p class="howConnect-feedback__text howConnect-feedback--homeInt"><?= Yii::t('site', 'Зателефонуйте ') . '<a class="feedback-numb__business">0 800 201 222</a>' . Yii::t('site', 'або') .
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