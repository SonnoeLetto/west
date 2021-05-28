<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.05.21
 * Time: 8:48
 */
namespace frontend\controllers;
use common\models\Cities;
use yii\web\Controller;
use common\models\Tariffs;


class InternetController extends Controller
{
    public function actionHome()
    {


        return $this->render('home', [
            'tariffs' => Tariffs::getTariffs(),
            'cities' => Cities::find()->all()
        ]);
    }

    public function actionBusiness()
    {

        return $this->render('business', [
            'tariffs' => Tariffs::getTariffs(),
            'cities' => Cities::find()->all()
        ]);
    }

    public function actionView()
    {
        return $this->render('view', [
            'tariffs' => Tariffs::getTariffs(),
            'cities' => Cities::find()->all()
        ]);
    }
}