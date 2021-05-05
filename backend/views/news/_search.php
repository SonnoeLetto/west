<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'slug') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_uk') ?>

    <?php // echo $form->field($model, 'text_ru') ?>

    <?php // echo $form->field($model, 'text_uk') ?>

    <?php // echo $form->field($model, 'meta_title_ru') ?>

    <?php // echo $form->field($model, 'meta_title_uk') ?>

    <?php // echo $form->field($model, 'meta_description_ru') ?>

    <?php // echo $form->field($model, 'meta_description_uk') ?>

    <?php // echo $form->field($model, 'meta_keywords_ru') ?>

    <?php // echo $form->field($model, 'meta_keywords_uk') ?>

    <?php // echo $form->field($model, 'img_big') ?>

    <?php // echo $form->field($model, 'img_middle') ?>

    <?php // echo $form->field($model, 'img_small') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
