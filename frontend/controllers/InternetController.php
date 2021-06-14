<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.05.21
 * Time: 8:48
 */
namespace frontend\controllers;
use common\models\Cities;
use common\models\TariffsGroups;
use yii\web\Controller;
use common\models\Tariffs;
use Yii;


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
        Yii::$app->params['template_header'] = 'header_business';
        return $this->render('business', [
            'groups' => TariffsGroups::getGroupsBusiness(),
            'tariffs' => Tariffs::getTariffs(),
            'cities' => Cities::find()->all()
        ]);
    }

    public function actionHomeView()
    {
        return $this->render('home_view', [
            'groups' => TariffsGroups::getGroupsBusiness(),
            'tariffs' => Tariffs::getTariffs(),
            'cities' => Cities::find()->all()
        ]);
    }

    public function actionBusinessView()
    {
        Yii::$app->params['template_header'] = 'header_business';
        return $this->render('business_view', [
            'groups' => TariffsGroups::getGroupsBusiness(),
            'tariffs' => Tariffs::getTariffs(),
            'cities' => Cities::find()->all()
        ]);
    }

    public function actionView()
    {
        return $this->render('view', [
            'groups' => TariffsGroups::getGroupsBusiness(),
            'tariffs' => Tariffs::getTariffs(),
            'cities' => Cities::find()->all()
        ]);
    }
}