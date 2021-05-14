<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Promotion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="promotion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            'slug',
            'name_ru',
            'name_uk',
            'text_ru:ntext',
            'text_uk:ntext',
            'meta_title_ru',
            'meta_title_uk',
            'meta_description_ru:ntext',
            'meta_description_uk:ntext',
            'meta_keywords_ru',
            'meta_keywords_uk',
            'img_big',
            'img_middle',
            'img_small',
            'status',
        ],
    ]) ?>

</div>
