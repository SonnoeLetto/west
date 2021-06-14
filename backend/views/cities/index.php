<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CitiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Населенные пункты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cities-index">


    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'group_id',
            'name_ru',
            'name_uk',
            'firm',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} {delete}'
            ],
        ],
    ]); ?>


</div>
