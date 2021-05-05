<?php
use common\models\News;
use frontend\components\PaginationWidget;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.04.21
 * Time: 14:03
 */
?>


<section class="mainNews">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-mb-12">
                    <div class="mainNews__wrapper">
                        <?php foreach ($news as $news_item) { ?>
                            <div class="mainNews__item news-slider__item">
                                <img class="news-slider__item-img" src="/uploads/news/<?= $news_item->img_small?>" alt="">
                                <div class="news-slider__content">
                                    <h4 class="news-slider__item-title"><?= $news_item->name ?></h4>
                                    <a class="news-slider__item-link" href=""><?= $news_item->text ?></a>
                                    <div class="news-slider__item-bottom-group">
                                        <div class="news-slider__item-date"><?= Yii::$app->formatter->asDate($news_item->created_at) ?></div>
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
                        'page_size' => News::PAGE_SIZE
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

</section>
