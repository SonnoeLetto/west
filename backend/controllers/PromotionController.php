<?php

namespace backend\controllers;

use Yii;
use common\models\Promotion;
use backend\models\PromotionSearch;
use yii\helpers\Inflector;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PromotionController implements the CRUD actions for Promotion model.
 */
class PromotionController extends Controller
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
     * Lists all Promotion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PromotionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Promotion model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    /**
     * Creates a new Promotion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Promotion();

        $post = Yii::$app->request->post();
        if( $post && $model->load($post) ) {
            $model->image_big = UploadedFile::getInstance($model, 'image_big');
            $model->image_middle = UploadedFile::getInstance($model, 'image_middle');
            $model->image_small = UploadedFile::getInstance($model, 'image_small');
            if( $model->validate()) {
                $session = Yii::$app->session;
                $transaction = Yii::$app->db->beginTransaction();
                try {

                    $model->img_big = Inflector::slug($model->image_big->baseName) . '_' . time() . '.' . $model->image_big->extension;
                    $model->img_middle = Inflector::slug($model->image_middle->baseName) . '_' . time() . '.' . $model->image_middle->extension;
                    $model->img_small = Inflector::slug($model->image_small->baseName) . '_' . time() . '.' . $model->image_small->extension;

                    $model->save();

                    $model->image_big->saveAs('uploads/promotion/' . $model->img_big);
                    $model->image_middle->saveAs('uploads/promotion/' . $model->img_middle);
                    $model->image_small->saveAs('uploads/promotion/' . $model->img_small);

                    $transaction->commit();
                    return $this->redirect(['update', 'id' => $model->id]);
                } catch(Throwable $e) {
                    $transaction->rollBack();
                    $session->addFlash('danger', 'Не удалось создать акцию!');
                }
            }
        }

        return $this->render('create', ['model' => $model]);
    }

    /**
     * Updates an existing Promotion model.
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
            $model->image_big = UploadedFile::getInstance($model, 'image_big');
            $model->image_middle = UploadedFile::getInstance($model, 'image_middle');
            $model->image_small = UploadedFile::getInstance($model, 'image_small');

            if ($model->validate()) {
                $session = Yii::$app->session;
                $transaction = Yii::$app->db->beginTransaction();
                try {
                    if ($model->image_big) {
                        $model->img_big = Inflector::slug($model->image_big->baseName) . '_' . time() . '.' . $model->image_big->extension;
                    }
                    if ($model->image_middle) {
                        $model->img_middle = Inflector::slug($model->image_middle->baseName) . '_' . time() . '.' . $model->image_middle->extension;
                    }
                    if ($model->image_small) {
                        $model->img_small = Inflector::slug($model->image_small->baseName) . '_' . time() . '.' . $model->image_small->extension;
                    }

                    $model->save();

                    if ($model->image_big) {
                        $model->image_big->saveAs('uploads/promotion/' . $model->img_big);
                    }
                    if ($model->image_middle) {
                        $model->image_middle->saveAs('uploads/promotion/' . $model->img_middle);
                    }
                    if ($model->image_small) {
                        $model->image_small->saveAs('uploads/promotion/' . $model->img_small);
                    }

                    $transaction->commit();
                    $session->addFlash('success', 'Вы успешно редактировали акцию!');
                } catch (\Throwable $e) {
                    $transaction->rollBack();
                    $session->addFlash('danger', 'Не удалось редактировать акцию
                    !');
                }
                return $this->redirect(['update', 'id' => $model->id]);
            }
        }
        return $this->render('update', ['model' => $model]);
    }

    /**
     * Deletes an existing Promotion model.
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
     * Finds the Promotion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Promotion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Promotion::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
