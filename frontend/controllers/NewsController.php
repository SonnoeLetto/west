<?php
namespace frontend\controllers;
use common\models\News;
use yii\data\Pagination;
use yii\web\Controller;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.04.21
 * Time: 13:53
 */

class NewsController extends Controller
{
    public function actionIndex($page=false)
    {
        $query = News::getNews();

        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => News::PAGE_SIZE,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);

        if($page > $pages->getPageCount() || $page == 1) {
            throw new \yii\web\NotFoundHttpException(404);
        }

        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->each();

        return $this->render('index',  [
            'news' => $news,
            'pages' => $pages,
        ]);
    }
}