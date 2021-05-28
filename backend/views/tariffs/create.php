<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tariffs */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Тарифы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tariffs-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
