<?php
namespace frontend\components;

use Yii;
use yii\widgets\LinkPager;

class PaginationWidget extends LinkPager
{
    public $page_size;
    private $page_from;
    private $page_to;

    public function init()
    {
        $this->lastPageLabel = false;
        $this->prevPageLabel = '<i class="fa fa-chevron-left"></i>';
        $this->nextPageLabel = '<i class="fa fa-chevron-right"></i>';

        $this->page_from = $this->pagination->totalCount > 0 ? $this->pagination->page * $this->page_size + 1 : 0;

        $page_to = $this->pagination->page * $this->page_size + $this->page_size;
        $this->page_to = $page_to > $this->pagination->totalCount ? $this->pagination->totalCount : $page_to;

        parent::init();
    }

    public function run()
    {
        echo '<div class="category__pagination news__pagination">
                    <span class="category__pagination-text">
                        '.Yii::t('category', '', [
                'page' => $this->page_from,
                'pages' => $this->page_to,
                'all' => $this->pagination->totalCount
            ]).'
                    </span>';

        parent::run();

        echo '</div>';
    }
}