<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.04.21
 * Time: 15:17
 */

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller {

    public function actionIndex()
    {
        $hi = 'Hello, words!';
        $names = ['ivanov', 'petrov', 'sidorov'];
        return $this->render('index', ['hello' => $hi, 'names' => $names]);
    }
}