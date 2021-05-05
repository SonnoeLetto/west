<?php
namespace frontend\controllers;
use yii\web\Controller;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 27.04.21
 * Time: 12:24
 */

class VideoController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}