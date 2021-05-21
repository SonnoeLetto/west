<?php
use yii\helpers\Html;
use common\models\News;
?>

<section class="cards-view">
            <div class="cards-view_item">

                <picture>
                    <source media="(max-width: 480px)" srcset="/uploads/news/<?=$news->img_small?>">
                    <source media="(max-width: 1200px)" srcset="/uploads/news/<?=$news->img_middle?>">
                    <img class="cards-view_img" src="/uploads/news/<?= $news->img_big ?>" alt="">
                </picture>

            </div>



<div class="cards-view_content">
    <div class="container">
        <div class="cards-view_content-backLink-wrap">

<!--            <a class="news-view_content-backLink" href="#">Вернуться</a>-->
            <?= Html::a( Yii::t('article', 'Повернутися'), ['/news/'], ['class' => 'cards-view_content-backLink']) ?>
        </div>

        <div class="content__wrap">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cards-view_content-title"><?= $news->name ?></h1>
                    <div class="cards-view_content-wrap">
                        <div class="cards-view_content-date">

                            <?= Yii::$app->formatter->asDate($news->created_at) ?>
                            <span></span>
                            <?= $news->time_read ?>
                            <?= Yii::t('article', 'хв. читати')?>
                        </div>
                        <div class="card__wrapper">
                            <a class="social-twitter" href="#"><img src="/img/image__social/twitter.svg" alt="#"></a>
                            <a class="social-facebook" href=""><img src="/img/image__social/facebook.svg" alt="#"></a>
                            <a class="social-linkendin" href=""><img src="/img/image__social/linken.svg" alt="#"></a>
                        </div>
                    </div>
                    <div class="cards-view_content-wrap-text">
                        <p class="cards-view_content-item" href=""><?= $news->text ?> </p>

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
                        <?php if ($last = $news->lastNews) { ?>
                            <?= Html::a(Yii::t('article', 'Попередня новина'), ['/news/' . $last->slug], ['class' => 'cards-view_content-link-prev cards-view_nav-link']) ?>
                        <?php } ?>

                        <?php if ($next = $news->nextNews) { ?>
                        <?= Html::a(Yii::t('article', 'Наступна новина'), ['/news/' . $next->slug], ['class' => 'cards-view_content-link-next cards-view_nav-link']) ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>

</div>
</section>