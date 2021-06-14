<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Card */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
