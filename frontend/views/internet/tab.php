<?php
use yii\bootstrap\Tabs;

$items = [];
foreach ($tariffs as $tariff) {
//    if ($tariff->group_id == $group_id) {
        $items[] = [
            'label' => $tariff['speed'] . '<span class="tariff__label">Мб/c</span> ',
            'headerOptions' => [
                'data-id' => $tariff['id'],
                'style' => 'display: ' . ($tariff->group_id != $group_id ? 'none' : 'block')
            ],
            'content' => $this->render('/internet/view', [
                'tariff' => $tariff,
                'title' => $title,
                'list__title' => $list__title,
                'check__arrow' => $check__arrow,
            ]),
            'active' => $tariff->group_id != $group_id ? false : null,
            'encode' => false
        ];
//    }
}
//echo '<pre>';
//print_r($groups[0]->id);
//echo '</pre>';
?>

<div class="tariff-tabs">
    <?= Tabs::widget([
        'items' => $items,
    ]);
    ?>
</div>















