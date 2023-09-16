<?php

namespace backend\controllers;

use common\models\DetailProduk;
use backend\models\DetailProdukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailProdukController implements the CRUD actions for DetailProduk model.
 */
class DetailProdukController extends Controller
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
     * Lists all DetailProduk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->can('managePostDetail')) {
            $searchModel = new DetailProdukSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Displays a single DetailProduk model.
     * @param int $id_detail Id Detail
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_detail)
    {
        if (\Yii::$app->user->can('viewPostDetail')) {
            return $this->render('view', [
                'model' => $this->findModel($id_detail),
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['detail-produk/index']);
        }
    }

    /**
     * Creates a new DetailProduk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('createPostDetail')) {
            $model = new DetailProduk();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id_detail' => $model->id_detail]);
                }
            } else {
                $model->loadDefaultValues();
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['detail-produk/index']);
        }
    }

    /**
     * Updates an existing DetailProduk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_detail Id Detail
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_detail)
    {
        if (\Yii::$app->user->can('updatePostDetail')) {
            $model = $this->findModel($id_detail);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_detail' => $model->id_detail]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['detail-produk/index']);
        }
    }

    /**
     * Deletes an existing DetailProduk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_detail Id Detail
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_detail)
    {
        if (\Yii::$app->user->can('deletePostDetail')) {
            $this->findModel($id_detail)->delete();

            return $this->redirect(['index']);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['detail-produk/index']);
        }
    }

    /**
     * Finds the DetailProduk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_detail Id Detail
     * @return DetailProduk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_detail)
    {
        if (($model = DetailProduk::findOne(['id_detail' => $id_detail])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
