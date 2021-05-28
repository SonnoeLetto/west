<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TariffsGroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Группа тарифов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tariffs-groups-index">


    <p>
        <?= Html::a('Добавить группу тарифов', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
