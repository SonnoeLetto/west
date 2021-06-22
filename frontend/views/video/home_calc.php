<?php


?>

<?= $this->render('/video/calculation') ?>

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
                        <div class="services-card__item">
                            <img class="services-card__img" src="/img/image__servCard/card1.jpg" alt="card">
                            <a class="services-card__link" href="#">
                                <?= Yii::t('site', 'Непристойно швидкий Інтернет для дому')?>
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
<section class="consultation">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="consultation__inner">
                        <div class="consultation-content">
                            <h6 class="middle__title consultation__title">
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

