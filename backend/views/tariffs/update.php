<?php$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tariffs */

$this->title = 'Редактировать';
$this->params['breadcrumbs'][] = ['label' => 'Тарифы', 'url' => ['index']];
?>
<div class="tariffs-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
