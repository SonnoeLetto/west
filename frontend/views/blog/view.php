<?php
use yii\helpers\Html;
use common\models\Blog;
?>

<section class="cards-view">
            <div class="cards-view_item">

                <picture>
                    <source media="(max-width: 480px)" srcset="/uploads/blog/<?=$blog->img_small?>">
                    <source media="(max-width: 1200px)" srcset="/uploads/blog/<?=$blog->img_middle?>">
                    <img src="/uploads/blog/<?= $blog->img_big ?>"  class="cards-view_img" alt="">
                </picture>

            </div>




<div class="cards-view_content">
    <div class="container">
        <div class="cards-view_content-backLink-wrap">

<!--            <a class="news-view_content-backLink" href="#">Вернуться</a>-->
            <?= Html::a( Yii::t('article', 'Повернутися'), ['/blog/'], ['class' => 'cards-view_content-backLink']) ?>
        </div>

        <div class="content__wrap">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cards-view_content-title blog_content-title"><?= $blog->name ?></h1>
                    <h6 class="cards-view_content-subtitle"><?= $blog->subname ?></h6>
                    <div class="cards-view_content-wrap">
                        <div class="cards-view_content-date">
                            <?= Yii::$app->formatter->asDate($blog->created_at) ?>
                            <span></span>
                            <?= $blog->time_read ?>
                            <?= Yii::t('article', 'хв. читати')?>
                        </div>
                        <div class="card__wrapper">
                            <a class="social-twitter" href="#"><img src="/img/image__social/twitter.svg" alt="#"></a>
                            <a class="social-facebook" href="#"><img src="/img/image__social/facebook.svg" alt="#"></a>
                            <a class="social-linkendin" href="#"><img src="/img/image__social/linken.svg" alt="#"></a>
                        </div>
                    </div>
                    <div class="cards-view_content-wrap-text">
                        <p class="cards-view_content-item" href="#"><?= $blog->text ?></p>
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
                        <?php if ($last = $blog->lastBlog) { ?>
                            <?= Html::a(Yii::t('article', 'Попередний блог'), ['/blog/' . $last->slug], ['class' => 'cards-view_content-link-prev cards-view_nav-link']) ?>
                        <?php } ?>

                        <?php if ($next = $blog->nextBlog) { ?>
                            <?= Html::a(Yii::t('article', 'Наступний блог'), ['/blog/' . $next->slug], ['class' => 'cards-view_content-link-next cards-view_nav-link']) ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>

</div>
</section>