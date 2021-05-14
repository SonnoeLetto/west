<?php
namespace frontend\controllers;
use common\models\News;
use Yii;
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
        Yii::$app->params['template_header'] = 'header_article';
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

    public function actionView($slug)
    {
        Yii::$app->params['template_header'] = 'header_article';
        $news = News::getNewsBySlug($slug);
        if (!$news) {
            throw new \yii\web\NotFoundHttpException(404);
        }
        return $this->render('view', [
            'news' => $news
        ]);
    }
}