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


<section class="mainCards">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-mb-12">
                    <div class="mainCards__wrapper">
                        <?php foreach ($news as $news_item) { ?>
                            <?= $this->render('/news/item', ['news_item' => $news_item]) ?>
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
