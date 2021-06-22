<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.06.21
 * Time: 14:27
 */

namespace frontend\controllers;


use yii\base\Controller;
use Yii;
class PhoneController extends Controller
{
    public function actionHome()
    {
        return $this->render('home');
    }

    public function actionBusiness()
    {
        Yii::$app->params['template_header'] = 'header_business';
        return $this->render('business');
    }

    public function actionHomeView()
    {
        return $this->render('home_view');
    }
}