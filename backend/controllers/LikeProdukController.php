<?php

namespace backend\controllers;

use common\models\LikeProduk;
use backend\models\LikeProdukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LikeProdukController implements the CRUD actions for LikeProduk model.
 */
class LikeProdukController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all LikeProduk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LikeProdukSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LikeProduk model.
     * @param int $id_like Id Like
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_like)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_like),
        ]);
    }

    /**
     * Creates a new LikeProduk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new LikeProduk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_like' => $model->id_like]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LikeProduk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_like Id Like
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_like)
    {
        $model = $this->findModel($id_like);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_like' => $model->id_like]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LikeProduk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_like Id Like
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_like)
    {
        $this->findModel($id_like)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LikeProduk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_like Id Like
     * @return LikeProduk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_like)
    {
        if (($model = LikeProduk::findOne(['id_like' => $id_like])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
