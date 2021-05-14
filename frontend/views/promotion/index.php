<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14.05.21
 * Time: 8:37
 */
use common\models\Promotion;
use yii\helpers\Html;
use yii\helpers\BaseStringHelper;
use frontend\components\PaginationWidget;
?>

<section class="mainCards">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-mb-12">
                    <div class="mainCards__wrapper">
                        <?php foreach ($promotion as $promotion_item) { ?>
                            <div class="mainCards__item">
                                <img class="news-slider__item-img" src="/uploads/promotion/<?= $promotion_item->img_small?>" alt="">
                                <div class="news-slider__content">
                                    <h4 class="news-slider__item-title">
                                        <?= Html::a($promotion_item->name, ['/promotion/' . $promotion_item->slug])?>
                                    </h4>
                                    <?= Html::a(BaseStringHelper::truncate($promotion_item->text, 30), ['/promotion/' . $promotion_item->slug], ['class' => 'news-slider__item-link']) ?>

                                    <div class="news-slider__item-bottom-group">
                                        <div class="news-slider__item-date"><?= Yii::$app->formatter->asDate($promotion_item->created_at) ?></div>
                                        <div class="social__wrapper">
                                            <a class="social-twitter" href="#"><img src="img/image__social/twitter.svg"
                                                                                    alt=""></a>
                                            <a class="social-facebook" href=""><img src="img/image__social/facebook.svg"
                                                                                    alt=""></a>
                                            <a class="social-linkendin" href=""><img src="img/image__social/linken.svg"
                                                                                     alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <?=PaginationWidget::widget([
                        'pagination' => $pages,
                        'page_size' => Promotion::PAGE_SIZE
                    ]) ?>
                </div>
            </div>
        </div>
    </div>