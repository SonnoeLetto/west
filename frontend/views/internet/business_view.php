<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.05.21
 * Time: 12:15
 */

use kartik\select2\Select2;
use yii\bootstrap\Tabs;
use \yii\web\View;
use yii\helpers\ArrayHelper;

$this->registerJs('var tariffs = ' . json_encode(ArrayHelper::toArray($tariffs)) . ';', View::POS_HEAD);
$this->registerJs('var cities = ' . json_encode(ArrayHelper::map($cities, 'id', 'group_id')) . ';', View::POS_HEAD);
$this->registerJsFile("js/tariff-business.js",[
    'depends' => [
        \yii\web\JqueryAsset::className()
    ]
]);
//$items = [];



//foreach ($groups as $group) {
//    $items[] = [
//
//            'label' => $group->name,
//            'headerOptions' => [
//                'data-id' => $group->id,
//                'class' => 'business__tab',
//                'data' => ArrayHelper::map($groups, 'id', 'name'),
//                'value' => $group->id ?? null,

//            ],
//            'content' => $this->render('/internet/tab', [
//
//                'title' => '<h5 class="tariff-title-business middle__title">' . Yii::t('internet', 'Інтернет ') . ' <span>' . Yii::t('internet', 'для вашого бізнесу') . '</span></h5>',
//                'list__title' => 'tariff-content__title-color-business',
//                'check__arrow' => 'tariff-content__checkbox-color-business',
//                'tariffs' => $tariffs,
//                'group_id' => $groups[0]->id,
//                'groups' => $groups
//            ]),
//
//            'active' => $group->id != $groups[0]->id ? false : null,
//            'encode' => false
//    ];
//    }
//}
//echo '<pre>';
//print_r($groups[0]->id);
//echo '</pre>';
?>

<!--<h5 class="tariff-title-business middle__title">--><?//= Yii::t('internet', 'Інтернет ') ?><!--<span>--><?//= Yii::t('internet', 'для вашого бізнесу') ?><!--</span></h5>-->




<section class="tariff">
    <div class="tariff__inner">


        <div class="tariff-business__tabs">
            <div class="rate-variables-business">
                <div class="rate__select">
                    <?= Select2::widget([
                        'name' => 'location3',
                        'id' => 'group-select2',
                        'data' => ArrayHelper::map($groups, 'id', 'name'),
                        'value' => $groups[0]->id ?? null,
                        'hideSearch' => true,
                    ]);
                    ?>
                </div>
            </div>
            <ul class="tabs-list">
               <?php foreach ($groups as $key => $group) { ?>

                <li class="business__tab <?= $key == 0 ? 'active' : '' ?> " data-group=<?= $group->id ?>>
                    <a class="" href="#"><?= $group->name ?></a>
                </li>
              <?php } ?>

            </ul>


        </div>

        <?= $this->render('/internet/tab', [
            'title' => '<h5 class="tariff-title-business middle__title">' . Yii::t('internet', 'Інтернет ') . ' <span>' . Yii::t('internet', 'для вашого бізнесу') . '</span></h5>',
            'list__title' => 'tariff-content__title-color-business',
            'check__arrow' => 'tariff-content__checkbox-color-business',
            'tariffs' => $tariffs,
            'group_id' => $groups[0]->id,
            'groups' => $groups
        ]) ?>

        <?= $this->render('/internet/calc', [
            'tariffs' => $tariffs,
            'cities' => $cities,
            'groups' => $groups,
            'group_id' => $groups[0]->id
        ]) ?>



    </div>
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