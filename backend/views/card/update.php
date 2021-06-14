<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Card */

$this->title = 'Редактировать';
$this->params['breadcrumbs'][] = ['label' => 'Карточки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
?>
<div class="card-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
