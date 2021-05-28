<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <p>
        <?= Html::a('Добавить новость', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute' => 'Картинка',
                'filter' => false,
                'format' => 'raw',
                'hAlign' => 'center',
                'width' => '50px',
                'value' => function($model){
                    if($model->img_small){
                        return Html::img('/uploads/news/'.$model->img_small, ['width' => '250']);
                    } else {
                        return '';
                    }
                }
            ],
            [
                'attribute' => 'name_ru',
                'value' => function ($model) {
                    return StringHelper::truncate($model->name_uk, 50);
                }
            ],
            'created_at:datetime',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'
            ],
        ],
    ]); ?>


</div>
