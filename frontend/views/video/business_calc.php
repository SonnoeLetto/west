<?php
?>

<?= $this->render('/video/calculation') ?>
<section class="consultation">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="consultation__inner">
                        <div class="consultation-content">
                            <h6 class="middle__title consultation__title-bus">
                                <?= Yii::t('site', 'Консультація з інженером')?>
                            </h6>
                            <p class="consultation__text">
                                <?= Yii::t('site', 'Ми будемо раді відповісти на будь-які ваші питання.')?>
                            </p>
                            <p class="consultation__subtext">
                                <?= Yii::t('site', 'Наші фахівці на сторожі вашого бізнесу 24/7/365')?>
                            </p>
                        </div>
                        <form class="main-form consultation-form" action="" method="get">
                            <input class="main-form__input" type="text" name="username"
                                   placeholder="<?= Yii::t('site', 'Ваше ім\'я')?>">
                            <input class="main-form__input" type="tel" name="Phone number"
                                   placeholder="<?= Yii::t('site', 'Номер телефону')?>">
                            <input class="main-form__input" type="email" name="email" placeholder="Email">
                            <button class="button button-primary video-form-btn" name="download"><?= Yii::t('site', 'Відправити')?></button>
                        </form>
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
                            <img class="services-card__img" src="/img/image__servCard/card_8.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Надійний, симетричний інтернет для роботи і гостей офісу')?>
                            </a>
                        </div>
                        <!--                            <div class="services-card__item">-->
                        <!--                                <img class="services-card__img" src="/img/image__servCard/card_1.jpg" alt="card">-->
                        <!--                                <a class="services-card__link" href="#">-->
                        <!--                                    --><?//= Yii::t('site', 'Ваш офіс, склад або ресторан завжди в прямому ефірі')?>
                        <!--                                </a>-->
                        <!--                            </div>-->
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
