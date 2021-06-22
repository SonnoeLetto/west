<section class="calculate">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="middle__title calculate__title"><?= Yii::t('video', 'Розрахунок вартості відеоспостереження')?></div>
                <form class="calculate__form">
                    <fieldset class="calculate__form-item ">
                        <legend class="calculate__form-title ">
                            <?= Yii::t('video', 'Кількість IP-камер')?>

                        </legend>
                        <ul class="calculate__list" role="none">
                            <li class="calculate__list-item ">
                                <div class="calculate__list-item-content">
                                    <label  class="calculate__form-position">
                                        <?= Yii::t('video', 'всередині приміщення')?>

                                        <input type="number">

                                    </label>
                                </div>

                            </li>
                            <li class="calculate__list-item">
                                <div class="calculate__list-item-content">
                                    <label  class="calculate__form-position">
                                        <?= Yii::t('video', 'на вулиці')?>
                                        <input  type="number">
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </fieldset>

                    <fieldset class="calculate__form-item">
                        <legend class="calculate__form-title">
                            <?= Yii::t('video', 'Якість зображення')?>
                        </legend>
                        <ul class="calculate__list" role="none">
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    VGA (640x480)
                                </label>


                            </li>
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    HD (1280x720)
                                </label>
                            </li>
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    FullHD (1920x1080)
                                </label>

                            </li>
                        </ul>
                    </fieldset>
                    <fieldset class="calculate__form-item">
                        <legend class="calculate__form-title">
                            <?= Yii::t('video', 'Віддалений доступ до моніторингу')?>
                        </legend>
                        <ul class="calculate__list" role="none">
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    <?= Yii::t('video', 'реєстратора та камер')?>
                                </label>
                            </li>
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    <?= Yii::t('video', 'тільки реєстратор')?>
                                </label>
                            </li>
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    <?= Yii::t('video', 'тільки камера')?>
                                </label>

                            </li>
                        </ul>
                    </fieldset>
                    <fieldset class="calculate__form-item">
                        <legend class="calculate__form-title">
                            <?= Yii::t('video', 'Сховище відеозаписів')?>


                        </legend>
                        <ul class="calculate__list" role="none">
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-secondary__input" type="checkbox">
                                    <span class="check__box check-secondary__box"></span>
                                    <?= Yii::t('video', 'карта пам\'яті в камері')?>


                                </label>


                            </li>
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-secondary__input" type="checkbox">
                                    <span class="check__box check-secondary__box"></span>
                                    <?= Yii::t('video', 'жорсткий диск відеореєстратора')?>
                                </label>
                            </li>
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-secondary__input" type="checkbox">
                                    <span class="check__box check-secondary__box"></span>
                                    <?= Yii::t('video', 'віддалений сервер (хмарне рішення)')?>
                                </label>

                            </li>
                        </ul>
                    </fieldset>
                    <fieldset class="calculate__form-item">
                        <legend class="calculate__form-title">
                            <?= Yii::t('video', 'Запис звуку')?>
                        </legend>
                        <ul class="calculate__list" role="none">
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    <?= Yii::t('video', 'відео зі звуком')?>
                                </label>


                            </li>
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    <?= Yii::t('video', 'відео без звуку')?>

                                </label>
                            </li>
                        </ul>
                    </fieldset>
                    <fieldset class="calculate__form-item">
                        <legend class="calculate__form-title">
                            <?= Yii::t('video', 'Запис при реєстрації руху')?>
                        </legend>
                        <ul class="calculate__list" role="none">
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    <?= Yii::t('video', 'безперервний запис незалежно від руху')?>
                                </label>


                            </li>
                            <li class="calculate__list-item">
                                <label class="check">
                                    <input class="check__input check-primary__input" type="checkbox">
                                    <span class="check__box check-primary__box"></span>
                                    <?= Yii::t('video', 'запис тільки при реєстрації руху')?>
                                </label>
                            </li>
                        </ul>
                    </fieldset>
                    <fieldset class="calculate__form-item-last">
                        <div class="calculate__form-title">
                            <?= Yii::t('video', 'Термін зберігання запису (днів)')?>
                        </div>
                        <div class="calculate__list-item ">
                            <input type="number">

                        </div>
                    </fieldset>
                </form>
                <form class="post__data" action="">

                    <input class="form-input calc-input" type="text" name="name"

                           placeholder="<?= Yii::t('site', 'Ваше ім\'я')?>">

                    <input class="form-input calc-input" type="tel" name="tel"

                           placeholder="<?= Yii::t('site', 'Номер телефону')?>">
                    <input class="form-input calc-input" type="email" name="email"

                           placeholder="Email">
                    <button class="button button-secondary calc-btn-m"><?= Yii::t('site', 'Відправити')?></button>

                </form>
            </div>
        </div>
    </div>
</section>
