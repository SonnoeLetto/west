<?php

use yii\bootstrap\Tabs;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model common\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?php if(!$model->isNewRecord) { ?>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'slug')->textInput(['maxlength' => true, 'disabled' => true]) ?>
            </div>
            <div class="col-md-3">
                <label class="control-label">Дата создания</label>
                <div class="form-control"><?=Yii::$app->formatter->asDatetime($model->created_at)?></div>
            </div>

        </div>
    <?php } ?>

    <div class="row">
        <div class="col-md-1">
            <?= $form->field($model, 'time_read')->textInput() ?>
        </div>
    </div>

    <div class="box box-solid box-success">
        <div class="box-header">Название Блога</div>

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

    <div class="box box-solid box-info">
        <div class="box-header">Подназвание Блога</div>

        <div class="box-body">
            <?=  Tabs::widget([
                'items' => [
                    [
                        'label' => 'RU',
                        'content' => $form->field($model, 'sub_name_ru')->textInput(['maxlength' => true])->label(false),
                        'active' => true
                    ],
                    [
                        'label' => 'UA',
                        'content' => $form->field($model, 'sub_name_uk')->textInput(['maxlength' => true]) ->label(false)
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

    <div class="box box-solid box-warning">
        <div class="box-header">meta_title</div>

        <div class="box-body">
            <?=  Tabs::widget([
                'items' => [
                    [
                        'label' => 'RU',
                        'content' => $form->field($model, 'meta_title_ru')->textInput(['maxlength' => true])->label(false),
                        'active' => true
                    ],
                    [
                        'label' => 'UA',
                        'content' => $form->field($model, 'meta_title_uk')->textInput(['maxlength' => true])->label(false)
                    ]
                ]
            ]) ?>
        </div>
    </div>

    <div class="box box-solid box-danger">
        <div class="box-header">meta_description</div>

        <div class="box-body">
            <?=  Tabs::widget([
                'items' => [
                    [
                        'label' => 'RU',
                        'content' => $form->field($model, 'meta_description_ru')->textarea(['rows' => 6])->label(false),
                        'active' => true
                    ],
                    [
                        'label' => 'UA',
                        'content' => $form->field($model, 'meta_description_uk')->textarea(['rows' => 6])->label(false)
                    ]
                ]
            ]) ?>
        </div>
    </div>
        <div class="box box-solid box-info">
            <div class="box-header">meta_description</div>

            <div class="box-body">
                <?=  Tabs::widget([
                    'items' => [
                        [
                            'label' => 'RU',
                            'content' => $form->field($model, 'meta_keywords_ru')->textInput(['maxlength' => true])->label(false),
                            'active' => true
                        ],
                        [
                            'label' => 'UA',
                            'content' => $form->field($model, 'meta_keywords_uk')->textInput(['maxlength' => true])->label(false)
                        ]
                    ]
                ]) ?>
            </div>
        </div>


        <?= $form->field($model, 'image_big')->widget(FileInput::classname(), [
            'options' => [
                'accept' => 'image/*'
            ],
            'pluginOptions' => [
                'initialPreview' => $model->img_big ? '/uploads/promotion/'.$model->img_big : false,
                'initialPreviewAsData' => true,
            ],
        ]) ?>

        <?= $form->field($model, 'image_middle')->widget(FileInput::classname(), [
            'options' => [
                'accept' => 'image/*'
            ],
            'pluginOptions' => [
                'initialPreview' => $model->img_middle ? '/uploads/promotion/'.$model->img_middle : false,
                'initialPreviewAsData' => true,
            ],
        ]) ?>

        <?= $form->field($model, 'image_small')->widget(FileInput::classname(), [
            'options' => [
                'accept' => 'image/*'
            ],
            'pluginOptions' => [
                'initialPreview' => $model->img_small ? '/uploads/promotion/'.$model->img_small : false,
                'initialPreviewAsData' => true,
            ],
        ]) ?>






    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
