<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\TariffsGroups;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TariffsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тариф';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tariffs-index">


    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'group_id',
            'speed',
            'price',
            'price_ip',
            //'status',
            //'is_hot',
            //'for_new',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} {delete}'
            ],
        ],
    ]); ?>


</div>
