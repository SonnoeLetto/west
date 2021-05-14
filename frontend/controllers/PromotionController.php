<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14.05.21
 * Time: 8:36
 */

namespace frontend\controllers;


use common\models\Promotion;
use yii\data\Pagination;
use yii\web\Controller;

class PromotionController extends Controller
{
    public function actionIndex($page=false) {

        $query = Promotion::getPromotion();

        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => Promotion::PAGE_SIZE,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);

        if($page > $pages->getPageCount() || $page == 1) {
            throw new \yii\web\NotFoundHttpException(404);
        }

        $promotion = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->each();

        return $this->render('index',  [
            'promotion' => $promotion,
            'pages' => $pages,
        ]);
    }

    public function actionView($slug)
    {
        $promotion = Promotion::getPromotionBySlug($slug);
        if (!$promotion) {
            throw new \yii\web\NotFoundHttpException(404);
        }
        return $this->render('view', [
            'promotion' => $promotion
        ]);
    }
}