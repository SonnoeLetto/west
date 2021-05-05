<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Slider */

$this->title = $model->title_ru;
$this->params['breadcrumbs'][] = ['label' => 'Слайдер', 'url' => ['index']];
?>
<div class="slider-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
