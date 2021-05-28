<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14.05.21
 * Time: 9:52
 */
use yii\helpers\Html;
?>
<section class="cards-view">
            <div class="cards-view_item">

                <picture>
                    <source media="(max-width: 480px)" srcset="/uploads/promotion/<?=$promotion->img_small?>">
                    <source media="(max-width: 1200px)" srcset="/uploads/promotion/<?=$promotion->img_middle?>">
                    <img src="/uploads/promotion/<?= $promotion->img_big ?>"  class="cards-view_img" alt="">
                </picture>

            </div>




<div class="cards-view_content">
    <div class="container">
        <div class="cards-view_content-backLink-wrap">
            <?= Html::a( Yii::t('article', 'Повернутися'), ['/promotion/'], ['class' => 'cards-view_content-backLink']) ?>
        </div>

        <div class="content__wrap">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cards-view_content-title"><?= $promotion->name ?></h1>
                    <h6 class="cards-view_content-subtitle"><?= Yii::t('article', 'Акція проходить з '). Yii::$app->formatter->asDate($promotion->date_from) . ' по ' .  Yii::$app->formatter->asDate($promotion->date_to)?></h6>
                    <div class="cards-view_content-wrap">
                        <div class="cards-view_content-date">

                            <?= Yii::$app->formatter->asDate($promotion->created_at) ?>
                            <span></span>
                            <?= $promotion->time_read ?>
                            <?= Yii::t('article', 'хв. читати')?>
                        </div>
                        <div class="card__wrapper">
                            <a class="social-twitter" href="#"><img src="/img/image__social/twitter.svg" alt="#"></a>
                            <a class="social-facebook" href=""><img src="/img/image__social/facebook.svg" alt="#"></a>
                            <a class="social-linkendin" href=""><img src="/img/image__social/linken.svg" alt="#"></a>
                        </div>
                    </div>
                    <div class="cards-view_content-wrap-text">
                        <p class="cards-view_content-item" href=""><?= $promotion->text ?></p>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="cards-view_content-link">
        <div class="container">
            <div class="content__wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="cards-view_content-link-flex">
                        <?php if ($last = $promotion->lastPromotion) { ?>
                            <?= Html::a(Yii::t('article', 'Попередня акція'), ['/promotion/' . $last->slug], ['class' => 'cards-view_content-link-prev cards-view_nav-link']) ?>
                        <?php } ?>

                        <?php if ($next = $promotion->nextPromotion) { ?>
                            <?= Html::a(Yii::t('article', 'Наступна акція'), ['/promotion/' . $next->slug], ['class' => 'cards-view_content-link-next cards-view_nav-link']) ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>

</div>
</section>