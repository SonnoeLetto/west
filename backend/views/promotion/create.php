<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Promotion */

$this->title = 'Добавить Акцию';
$this->params['breadcrumbs'][] = ['label' => 'Акции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promotion-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
