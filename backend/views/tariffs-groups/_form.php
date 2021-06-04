<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;


/* @var $this yii\web\View */
/* @var $model common\models\TariffsGroups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tariffs-groups-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->checkbox() ?>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid box-success">
                <div class="box-header">Название Группы</div>

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

        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
