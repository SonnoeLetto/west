<?php

namespace frontend\controllers;
use yii\web\Controller;


/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22.04.21
 * Time: 10:52
 */

class InteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}