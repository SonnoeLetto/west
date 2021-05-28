<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Promotion */

$this->title = 'Редактировать';
$this->params['breadcrumbs'][] = ['label' => 'Акции', 'url' => ['index']];
?>
<div class="promotion-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
