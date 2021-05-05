<?php

use yii\bootstrap\Tabs;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Slider;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'type')->dropDownList(Slider::TYPES) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="box box-solid box-info">
        <div class="box-header">Текст ссылки</div>

        <div class="box-body">
            <?=  Tabs::widget([
                'items' => [
                    [
                        'label' => 'RU',
                        'content' => $form->field($model, 'link_text_ua')->textInput(['maxlength' => true])->label(false),
                        'active' => true
                    ],
                    [
                        'label' => 'UA',
                        'content' => $form->field($model, 'link_text_ru')->textInput(['maxlength' => true])->label(false)
                    ]
                ]
            ]) ?>
        </div>
    </div>
    <div class="box box-solid box-success">
        <div class="box-header">Заголовок</div>

        <div class="box-body">
            <?=  Tabs::widget([
                'items' => [
                    [
                        'label' => 'RU',
                        'content' => $form->field($model, 'title_ru')->textInput(['maxlength' => true])->label(false),
                        'active' => true
                    ],
                    [
                        'label' => 'UA',
                        'content' => $form->field($model, 'title_ua')->textInput(['maxlength' => true])->label(false)
                    ]
                ]
            ]) ?>
        </div>
    </div>
    <div class="box box-solid box-primary">
        <div class="box-header">Текст</div>

        <div class="box-body">
            <?=  Tabs::widget([
                'items' => [
                    [
                        'label' => 'RU',
                        'content' => $form->field($model, 'text_ru')->textarea(['rows' => 6])->label(false),
                        'active' => true
                    ],
                    [
                        'label' => 'UA',
                        'content' => $form->field($model, 'text_ua')->textarea(['rows' => 6])->label(false)
                    ]
                ]
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title_color')->textInput(['maxlength' => true])?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'text_color')->textInput(['maxlength' => true])?>
        </div>
    </div>
    <?= $form->field($model, 'image_desktop')->widget(FileInput::classname(), [
        'options' => [
            'accept' => 'image/*'
        ],
        'pluginOptions' => [
            'initialPreview' => $model->img_desktop ? '/uploads/sliders/'.$model->img_desktop : false,
            'initialPreviewAsData' => true,
        ],
    ]) ?>



    <?= $form->field($model, 'image_tablet')->widget(FileInput::classname(), [
        'options' => [
            'accept' => 'image/*'
        ],
        'pluginOptions' => [
            'initialPreview' => $model->img_tablet ? '/uploads/sliders/'.$model->img_tablet : false,
            'initialPreviewAsData' => true,
        ],
    ]) ?>


    <?= $form->field($model, 'image_mobile')->widget(FileInput::classname(), [
        'options' => [
            'accept' => 'image/*'
        ],
        'pluginOptions' => [
            'initialPreview' => $model->img_mobile ? '/uploads/sliders/'.$model->img_mobile : false,
            'initialPreviewAsData' => true
        ],
    ]) ?>



    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
