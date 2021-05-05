<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Слайдер';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <p>
        <?= Html::a('Добавить слайдер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'img_desktop',
                'format' => 'raw',
                'width' => '200px',
                'value' => function($model) {
                    return '<img src="/uploads/sliders/' . $model->img_desktop . '" style="width:200px;" alt="">';
                }
            ],
            'title_ru',
            //'title_uk',
            //'text_ru:ntext',
            //'text_uk:ntext',
            //'link',
            //'status',
            //'type',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'
            ],
        ],
    ]); ?>


</div>
