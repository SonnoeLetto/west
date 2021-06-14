<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model common\models\Card */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'wi_fi_icon')->checkbox() ?>
            <?= $form->field($model, 'phone_icon')->checkbox() ?>

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'vols_icon')->checkbox() ?>

            <?= $form->field($model, 'vlan_icon')->checkbox() ?>
        </div>



    </div>

    <div class="box box-solid box-info">
        <div class="box-header">Текст превью</div>

        <div class="box-body">
            <?=  Tabs::widget([
                'items' => [
                    [
                        'label' => 'RU',
                        'content' => $form->field($model, 'text_preview_ru')->textInput(['maxlength' => true])->label(false),
                        'active' => true
                    ],
                    [
                        'label' => 'UA',
                        'content' => $form->field($model, 'text_preview_uk')->textInput(['maxlength' => true]) ->label(false)
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
                        'content' => $form->field($model, 'text_ru')->widget(CKEditor::className(), [
                            'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
                                'preset' => 'full',
                                'inline' => false,
                                'font_names' => 'roboto; playfairdisplaysc',
                                'allowedContent' => true,
                            ]),
                        ])->label(false),
                        'active' => true
                    ],
                    [
                        'label' => 'UA',
                        'content' => $form->field($model, 'text_uk')->widget(CKEditor::className(), [
                            'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
                                'preset' => 'full',
                                'inline' => false,
                                'font_names' => 'roboto; playfairdisplaysc',
                                'allowedContent' => true,
                            ]),
                        ])
                    ]
                ]
            ]) ?>
        </div>
    </div>






    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
