<?php

namespace backend\controllers;

use common\models\KondisiMacbook;
use backend\models\KondisiMacbookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KondisiMacbookController implements the CRUD actions for KondisiMacbook model.
 */
class KondisiMacbookController extends Controller
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
     * Lists all KondisiMacbook models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->can('managePostKondisi')) {
            $searchModel = new KondisiMacbookSearch();
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
     * Displays a single KondisiMacbook model.
     * @param int $id_kondisi Id Kondisi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kondisi)
    {
        if (\Yii::$app->user->can('viewPostKondisi')) {
            return $this->render('view', [
                'model' => $this->findModel($id_kondisi),
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['kondisi-macbook/index']);
        }
    }

    /**
     * Creates a new KondisiMacbook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('createPostKondisi')) {
            $model = new KondisiMacbook();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id_kondisi' => $model->id_kondisi]);
                }
            } else {
                $model->loadDefaultValues();
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['kondisi-macbook/index']);
        }
    }

    /**
     * Updates an existing KondisiMacbook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kondisi Id Kondisi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kondisi)
    {
        if (\Yii::$app->user->can('updatePostKondisi')) {
            $model = $this->findModel($id_kondisi);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kondisi' => $model->id_kondisi]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['kondisi-macbook/index']);
        }
    }

    /**
     * Deletes an existing KondisiMacbook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kondisi Id Kondisi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kondisi)
    {
        if (\Yii::$app->user->can('deletePostKondisi')) {
            $this->findModel($id_kondisi)->delete();

            return $this->redirect(['index']);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['kondisi-macbook/index']);
        }
    }

    /**
     * Finds the KondisiMacbook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kondisi Id Kondisi
     * @return KondisiMacbook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kondisi)
    {
        if (($model = KondisiMacbook::findOne(['id_kondisi' => $id_kondisi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
