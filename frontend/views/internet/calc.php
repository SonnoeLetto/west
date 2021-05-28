<?php

use kartik\select2\Select2;




?>

<?php foreach ($tariffs as $tariff) { ?>
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
                <?= Select2::widget([
                    'name' => 'state_10',
                    'id' => 'number_ip',
                    'data' => [
                        1 => '1',
                        2 => '2',
                        3 => '3'
                    ],
                    'disabled' => true,
                    'hideSearch' => true,
                    'options' => [

                    ],
                ]);
                ?>
            </div>
        </div>
        <div class="tariff-result__total">
            <div class="tariff-result__total-title"><?= Yii::t('internet', 'Разом:') ?></div>
            <ul class="tariff-result__total-list">
                <li class="total-list-item">
                    <p class="total-list-item-text"> <?= Yii::t('internet', 'Абонентська плата') ?></p>
                    <p class="total-list-item-text nowrap"><span
                                class="tariff__price"><?= $tariff['price'] ?></span> <?= Yii::t('internet', 'грн / міс') ?>
                    </p>

                </li>
                <li class="total-list-item">
                    <p class="total-list-item-text"><?= Yii::t('internet', 'Виділений IP') ?></p>
                    <p class="total-list-item-text nowrap"><span
                                class="ip__price">0</span> <?= Yii::t('internet', 'грн / міс') ?></p>
                </li>
                <li class="total-list-item">
                    <p class="total-list-item-text item-text-main"><?= Yii::t('internet', 'Підсумкова абонентська оплата') ?></p>
                    <p class="total-list-item-text item-text-main nowrap"><span
                                class="tariff__total"><?= $tariff['price'] ?></span> <?= Yii::t('internet', 'грн / міс') ?>
                    </p>
                </li>
            </ul>
        </div>
        <button class="btn__form"><?= Yii::t('internet', 'Підключити') ?></button>
    </div>

</div>
<?php } ?>