<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use common\models\TariffsGroups;

/* @var $this yii\web\View */
/* @var $model common\models\Cities */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cities-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="box box-solid box-success">
        <div class="box-header">Название</div>

        <div class="box-body">
            <?=  Tabs::widget([
                'items' => [
                    [
                        'label' => 'RU',
                        'content' => $form->field($model, 'name_ru')->textInput(['maxlength' => true])->label(false),
                        'active' => true
                    ],
                    [
                        'label' => 'UA',
                        'content' => $form->field($model, 'name_uk')->textInput(['maxlength' => true]) ->label(false)
                    ]
                ]
            ]) ?>
        </div>
    </div>



    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'firm')->dropDownList($model::FIRM, ['prompt' => 'Выбрать...']) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'group_id')->dropDownList(ArrayHelper::map(TariffsGroups::find()->all(), 'id', 'name')) ?>

        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
