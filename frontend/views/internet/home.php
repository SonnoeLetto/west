<?php
use yii\bootstrap\Tabs;
use kartik\select2\Select2;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.05.21
 * Time: 8:50
 */
?>



<section class="tariff">
    <div class="tariff__inner">
        <div class="tariff-select">
            <?= Select2::widget([
                'name' => 'state_10',
//            'data' => $data,
                'options' => [
                    'placeholder' => 'Select provinces ...',
                    'multiple' => true
                ],
            ]);
            ?>
        </div>


        <?= $this->render('/internet/tab', [
                'title' => '<h5 class="tariff__title-home middle__title">' . Yii::t('internet',  'Домашній Інтернет ' ) . ' <span>' . Yii::t('internet',  'на супер швидкості' ) . '</span></h5>',
                'list__title' => 'tariff-content__title-color-home',
                'check__arrow' => 'tariff-content__checkbox-color-home',
            ]) ?>



<!--                    <div class="container">-->
<!--                        <div class="tariff__select">-->
<!--                            <div class="dropdown-select rate-variables__select-wrapper">-->
<!--                            <button class="dropdown__btn rate-variables__select" type="button">Одесса-->
<!--                            </button>-->
<!--                            <ul class="dropdown__list">-->
<!--                                <li class="dropdown__list-item" data-value="card">Одесса</li>-->
<!--                                <li class="dropdown__list-item" data-value="cash">Не Одесса</li>-->
<!--                            </ul>-->
<!--                            <input type="text" class="dropdown__input-hidden" value="" name="sel-category">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
<!--    [ 'title' => 'Домашний интернет', 'titleSpan' => 'на супер скорости']-->


    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="services-content">
                            <h5 class="middle__title services-content__title">
                                Вас обязательно заинтересует...
                            </h5>
                            <p class="services__text">
                                Для более комфортного использования интернета
                                выберите именно то, что вам необходимо
                            </p>
                        </div>
                        <div class="services-card">
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/card1.jpg" alt="card">
                                <a class="services-card__link" href="#">Неприлично быстрый Интернет
                                    для дома</a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/card2.jpg" alt="card">
                                <a class="services-card__link" href="#"><p>Ваш дом или квартира всегда
                                        в прямом эфире</p></a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/card3.jpg" alt="card">
                                <a class="services-card__link" href="#"><p>Смотрите ваши любимые
                                        фильмы и шоу c Trinity TV
                                        в сети Westelecom</p></a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/card4.jpg" alt="card">
                                <a class="services-card__link" href="#"><p>Домашний телефон стал
                                        более полезным</p></a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/card5.jpg" alt="card">
                                <a class="services-card__link" href="#"><p>Храните данные в самом
                                        безопасном месте</p></a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/card6.jpg" alt="card">
                                <a class="services-card__link" href="#"><p>Мощные роутеры для
                                        требовательных развлечений
                                        и работы</p></a>
                            </div>
                            <div class="services-card__item">
                                <img class="services-card__img" src="/img/image__servCard/card4.jpg" alt="card">
                                <a class="services-card__link" href="#"><p>Сделай комплимент близким!
                                        Подари интернет!</p></a>
                            </div>
                        </div>
                        <div class="services-plus">
                            <h5 class="middle__title services-plus__title">Дополнительные услуги</h5>
                            <div class="services-plus__card">
                                <div class="services-card__item">
                                    <img class="services-card__img" src="/img/image__servCard/cardPlus1.jpg" alt="card">
                                    <a class="services-card__link" href="#"><p>Уезжаете в отпуск? Активируйте
                                            услугу “Заморозка”</p></a>
                                </div>
                                <div class="services-card__item">
                                    <img class="services-card__img" src="/img/image__servCard/cardPlus2.jpg" alt="card">
                                    <a class="services-card__link" href="#"><p>Уезжаете в отпуск? Активируйте
                                            услугу “Заморозка”</p></a>
                                </div>
                                <div class="services-card__item">
                                    <img class="services-card__img" src="/img/image__servCard/cardPlus3.jpg" alt="card">
                                    <a class="services-card__link" href="#"><p>Уезжаете в отпуск? Активируйте
                                            услугу “Заморозка”</p></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
