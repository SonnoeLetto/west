<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.05.21
 * Time: 8:48
 */

namespace frontend\controllers;
use yii\web\Controller;

class InternetController extends Controller
{
    public function actionHome()
    {
        return $this->render('home');
    }

    public function actionBusiness()
    {
        return $this->render('business');
    }

    public function actionView()
    {
        return $this->render('view');
    }
}