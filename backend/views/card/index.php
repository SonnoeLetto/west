<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Карточки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card-index">


    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'текст превью',
                'value' => function ($model) {
                    return StringHelper::truncate($model->textPreview, 50);
                }
            ],
            [
                    'attribute' => 'текст',
                    'value' => function ($model) {
                        return StringHelper::truncate($model->text, 350);
                    }
            ],


            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'
            ],
        ],
    ]); ?>


</div>
