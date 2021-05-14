<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.05.21
 * Time: 9:44
 */

namespace frontend\controllers;
use common\models\Blog;
use yii\data\Pagination;
use yii\web\Controller;

class BlogController extends Controller
{
    public function actionIndex($page=false)
    {
        $query = Blog::getBlog();

        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => Blog::PAGE_SIZE,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        if($page > $pages->getPageCount() || $page == 1) {
            throw new \yii\web\NotFoundHttpException(404);
        }

        $blog = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->each();

        return $this->render('index',  [
            'blog' => $blog,
            'pages' => $pages,
        ]);

    }

    public function actionView($slug)
    {
        $blog = Blog::getBlogBySlug($slug);
        if (!$blog) {
            throw new \yii\web\NotFoundHttpException(404);
        }
        return $this->render('view', [
            'blog' => $blog
        ]);
    }
}