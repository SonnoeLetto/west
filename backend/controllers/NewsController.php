<?php

namespace backend\controllers;

use Yii;
use common\models\News;
use backend\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Inflector;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
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
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

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

                    $model->image_big->saveAs('uploads/news/' . $model->img_big);
                    $model->image_middle->saveAs('uploads/news/' . $model->img_middle);
                    $model->image_small->saveAs('uploads/news/' . $model->img_small);

                    $transaction->commit();
                    return $this->redirect(['update', 'id' => $model->id]);
                } catch(\Throwable $e) {
                    $transaction->rollBack();
                    $session->addFlash('danger', 'Не удалось создать новость!');
                }
            }
        }

        return $this->render('create', ['model' => $model]);
    }

    /**
     * Updates an existing News model.
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
                        $model->image_big->saveAs('uploads/news/' . $model->img_big);
                    }
                    if ($model->image_middle) {
                        $model->image_middle->saveAs('uploads/news/' . $model->img_middle);
                    }
                    if ($model->image_small) {
                        $model->image_small->saveAs('uploads/news/' . $model->img_small);
                    }

                    $transaction->commit();
                    $session->addFlash('success', 'Вы успешно редактировали новость!');
                } catch (\Throwable $e) {
                    $transaction->rollBack();
                    $session->addFlash('danger', 'Не удалось редактировать новость!');
                }
                return $this->redirect(['update', 'id' => $model->id]);
            }
        }
        return $this->render('update', ['model' => $model]);

    }

    /**
     * Deletes an existing News model.
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
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
