<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cities */

$this->title = 'Редактировать';
$this->params['breadcrumbs'][] = ['label' => 'Населенный пункт', 'url' => ['index']];
?>
<div class="cities-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
