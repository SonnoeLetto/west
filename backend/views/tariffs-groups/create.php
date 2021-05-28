<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TariffsGroups */

$this->title = 'Добавить группу тарифов';
$this->params['breadcrumbs'][] = ['label' => 'Группа тарифов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tariffs-groups-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
