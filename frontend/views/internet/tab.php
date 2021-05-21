<?php
use yii\bootstrap\Tabs;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.05.21
 * Time: 14:28
 */
$tariffs = [
    [
        'id' => 1,
        'speed' => 100,
        'price' => 150,
    ],
    [
        'id' => 1,
        'speed' => 200,
        'price' => 30,
    ],
    [
        'id' => 1,
        'speed' => 100,
        'price' => 40,
    ],
    [
        'id' => 1,
        'speed' => 100,
        'price' => 1,
    ],
    [
        'id' => 1,
        'speed' => 100,
        'price' => 1,
    ],
    [
        'id' => 1,
        'speed' => 100,
        'price' => 1,
    ],


];
$items = [];
foreach ($tariffs as $tariff) {
    $items[] = [
        'label' => $tariff['speed'] . '<span class="tariff__label">Мб/c</span> ',
        'content' => $this->render('/internet/view', [
                'tariff' => $tariff,
                'title' => $title,
                'list__title' => $list__title,
                'check__arrow' => $check__arrow
        ]) ,
        'encode' => false
    ];
}
?>

<div class="tariff-tabs">


    <?= Tabs::widget([
        'items' => $items,
    ]);
    ?>
</div>














