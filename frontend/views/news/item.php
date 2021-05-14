<?php
use yii\helpers\Html;
use yii\helpers\BaseStringHelper;
?>

<div class="mainCards__item ">
        <img class="news-slider__item-img" src="/uploads/news/<?= $news_item->img_small?>" alt="">
        <div class="news-slider__content">
            <h4 class="news-slider__item-title">
                <?= Html::a($news_item->name, ['/news/' . $news_item->slug])?>
            </h4>
            <?= Html::a(BaseStringHelper::truncate($news_item->text, 30), ['/news/' . $news_item->slug], ['class' => 'news-slider__item-link']) ?>

            <div class="news-slider__item-bottom-group">
                <div class="news-slider__item-date"><?= Yii::$app->formatter->asDate($news_item->created_at) ?></div>
                <div class="social__wrapper">
                    <a class="social-twitter" href="#"><img src="/img/image__social/twitter.svg"
                                                            alt=""></a>
                    <a class="social-facebook" href=""><img src="/img/image__social/facebook.svg"
                                                            alt=""></a>
                    <a class="social-linkendin" href=""><img src="/img/image__social/linken.svg"
                                                             alt=""></a>
                </div>
            </div>
        </div>
</div>
