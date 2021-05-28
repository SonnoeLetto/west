<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TariffsGroups;
/* @var $this yii\web\View */
/* @var $model common\models\Tariffs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tariffs-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-2">
            <?= $form->field($model, 'is_hot')->checkbox() ?>


        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'for_new')->checkbox() ?>
        </div>

    </div>


    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'group_id')->dropDownList(ArrayHelper::map(TariffsGroups::find()->all(), 'id', 'name')) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'speed')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'price')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'price_ip')->textInput() ?>
        </div>


    </div>

    <div class="row">


        <div class="col-md-6">
            <?= $form->field($model, 'status')->textInput() ?>
        </div>

    </div>











    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
