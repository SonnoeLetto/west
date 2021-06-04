<?php
use kartik\select2\Select2;
use yii\web\View;
use yii\helpers\ArrayHelper;

$this->registerJs('var tariffs = ' . json_encode(ArrayHelper::toArray($tariffs)) . ';', View::POS_HEAD);
$this->registerJs('var cities = ' . json_encode(ArrayHelper::map($cities, 'id', 'group_id')) . ';', View::POS_HEAD);
?>

<section class="tariff">
    <div class="tariff__inner">
        <div class="tariff-select">
            <?= Select2::widget([
                'name' => 'state_10',
                'id' => 'chooseLocation',
                'data' => ArrayHelper::map($cities, 'id', 'name'),
                'value' => $cities[0]->id ?? null,
                'options' => [
                    'placeholder' => 'Населенный пункт',

                ],
            ]);
            ?>
        </div>

        <?php if ($cities) { ?>
        <?= $this->render('/internet/tab', [
            'title' => '<h5 class="tariff__title-home middle__title">' . Yii::t('internet', 'Домашній Інтернет ') . ' <span>' . Yii::t('internet', 'на супер швидкості') . '</span></h5>',
            'list__title' => 'tariff-content__title-color-home',
            'check__arrow' => 'tariff-content__checkbox-color-home',
            'tariffs' => $tariffs,
            'group_id' => $cities[0]->group_id,
//                'groups' => $groups
        ]) ?>
        <?php } ?>

        <?= $this->render('/internet/calc', [
                'tariffs' => $tariffs,
                'cities' => $cities,
                'group_id' => $cities[0]->group_id
            ]) ?>

        <div class="services">
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
                                <div class="services-card__item">
                                    <img class="services-card__img" src="/img/image__servCard/card1.jpg" alt="card">
                                    <a class="services-card__link" href="#">
                                        <?= Yii::t('site', 'Непристойно швидкий Інтернет для дому')?>
                                    </a>
                                </div>
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
                                    <img class="services-card__img" src="/img/image__servCard/card4.jpg" alt="card">
                                    <a class="services-card__link" href="#">
                                        <?= Yii::t('site', 'Домашній телефон став більш корисним')?>
                                    </a>
                                </div>
                                <div class="services-card__item">
                                    <img class="services-card__img" src="/img/image__servCard/card5.jpg" alt="card">
                                    <a class="services-card__link" href="#">
                                        <?= Yii::t('site', 'Зберігайте дані в самому безпечному місці')?>
                                    </a>
                                </div>
                                <div class="services-card__item">
                                    <img class="services-card__img" src="/img/image__servCard/card6.jpg" alt="card">
                                    <a class="services-card__link" href="#">
                                        <?= Yii::t('site', 'Потужні роутери для вимогливих розваг і роботи')?>
                                    </a>
                                </div>
                                <div class="services-card__item">
                                    <img class="services-card__img" src="/img/image__servCard/card4.jpg" alt="card">
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
        </div>
</section>
