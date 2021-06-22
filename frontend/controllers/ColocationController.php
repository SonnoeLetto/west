<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.06.21
 * Time: 10:13
 */

namespace frontend\controllers;


use yii\web\Controller;

class ColocationController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}