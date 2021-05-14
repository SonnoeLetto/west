<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.05.21
 * Time: 9:45
 */
use common\models\Blog;
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
                        <?php foreach ($blog as $blog_item) { ?>
                        <div class="mainCards__item">
                            <img class="news-slider__item-img" src="/uploads/blog/<?= $blog_item->img_small?>" alt="">
                            <div class="news-slider__content">
                                <h4 class="news-slider__item-title">
                                    <?= Html::a($blog_item->name, ['/blog/' . $blog_item->slug])?>
                                </h4>
                                <?= Html::a(BaseStringHelper::truncate($blog_item->text, 30), ['/blog/' . $blog_item->slug], ['class' => 'news-slider__item-link']) ?>

                                <div class="news-slider__item-bottom-group">
                                    <div class="news-slider__item-date"><?= Yii::$app->formatter->asDate($blog_item->created_at) ?></div>
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
                        'page_size' => Blog::PAGE_SIZE
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
