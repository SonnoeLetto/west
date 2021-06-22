<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 27.04.21
 * Time: 12:24
 */

class VideoController extends Controller
{
    public function actionHome()
    {
        return $this->render('home');
    }

    public function actionHomeCalc()
    {
        return $this->render('home_calc');
    }

    public function actionBusiness()
    {
        Yii::$app->params['template_header'] = 'header_business';
        return $this->render('business');
    }
    public function actionBusinessCalc()
    {
        Yii::$app->params['template_header'] = 'header_business';
        return $this->render('business_calc');
    }
}