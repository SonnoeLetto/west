<?php

namespace backend\controllers;

use Yii;
use common\models\Slider;
use backend\models\SliderSearch;
use yii\helpers\Inflector;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SliderController implements the CRUD actions for Slider model.
 */
class SliderController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Slider models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SliderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Slider model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Slider();

        $post = Yii::$app->request->post();
        if($post && $model->load($post)) {
            $model->image_desktop = UploadedFile::getInstance($model, 'image_desktop');
            $model->image_tablet = UploadedFile::getInstance($model, 'image_tablet');
            $model->image_mobile = UploadedFile::getInstance($model, 'image_mobile');
            if($model->validate()) {
                $session = Yii::$app->session;
                $transaction = Yii::$app->db->beginTransaction();
                try {
                    $model->img_desktop = Inflector::slug($model->image_desktop->baseName) . '_' . time() . '.' . $model->image_desktop->extension;
                    $model->img_tablet = Inflector::slug($model->image_tablet->baseName) . '_' . time() . '.' . $model->image_tablet->extension;
                    $model->img_mobile = Inflector::slug($model->image_mobile->baseName) . '_' . time() . '.' . $model->image_mobile->extension;

                    $model->save();

                    $model->image_desktop->saveAs('uploads/sliders/' . $model->img_desktop);
                    $model->image_tablet->saveAs('uploads/sliders/' . $model->img_tablet);
                    $model->image_mobile->saveAs('uploads/sliders/' . $model->img_mobile);

                    $transaction->commit();
                    return $this->redirect(['update', 'id' => $model->id]);
                } catch(\Throwable $e) {
                    $transaction->rollBack();
                    $session->addFlash('danger', 'Не удалось создать слайдер!');
                }
            }
        }
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Slider model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $post = Yii::$app->request->post();
        if( $post && $model->load($post) ) {
            $model->image_desktop = UploadedFile::getInstance($model, 'image_desktop');
            $model->image_tablet = UploadedFile::getInstance($model, 'image_tablet');
            $model->image_mobile = UploadedFile::getInstance($model, 'image_mobile');
            if( $model->validate()) {
                $session = Yii::$app->session;
                $transaction = Yii::$app->db->beginTransaction();
                try {
                    if($model->image_desktop) {
                        $model->img_desktop = Inflector::slug($model->image_desktop->baseName) . '_' . time() . '.' . $model->image_desktop->extension;
                    }
                    if($model->image_tablet) {
                        $model->img_tablet = Inflector::slug($model->image_tablet->baseName) . '_' . time() . '.' . $model->image_tablet->extension;
                    }
                    if($model->image_mobile) {
                        $model->img_mobile = Inflector::slug($model->image_mobile->baseName) . '_' . time() . '.' . $model->image_mobile->extension;
                    }


                    $model->save();

                    if($model->image_desktop) {
                        $model->image_desktop->saveAs('uploads/slider/' . $model->img_desktop);
                    }
                    if($model->image_tablet) {
                        $model->image_tablet->saveAs('uploads/slider/' . $model->img_tablet);
                    }
                    if($model->image_mobile) {
                        $model->image_mobile->saveAs('uploads/slider/' . $model->img_mobile);
                    }

                    $transaction->commit();
                    $session->addFlash('success', 'Вы успешно редактировали слайдер!');
                } catch(\Throwable $e) {
                    $transaction->rollBack();
                    $session->addFlash('danger', 'Не удалось редактировать слайдер!');
                }
                return $this->redirect(['update', 'id' => $model->id]);
            }
        }


            return $this->render('update', [
                'model' => $model,
            ]);

    }

    /**
     * Deletes an existing Slider model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Slider model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Slider the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Slider::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
