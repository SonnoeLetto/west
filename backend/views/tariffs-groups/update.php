<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TariffsGroups */

$this->title = 'Редактировать';
$this->params['breadcrumbs'][] = ['label' => 'Группа тарифов', 'url' => ['index']];
?>
<div class="tariffs-groups-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
