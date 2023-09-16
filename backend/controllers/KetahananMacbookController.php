<?php

namespace backend\controllers;

use common\models\KetahananMacbook;
use backend\models\KetahananMacbookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KetahananMacbookController implements the CRUD actions for KetahananMacbook model.
 */
class KetahananMacbookController extends Controller
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
     * Lists all KetahananMacbook models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->can('managePostKetahanan')) {
            $searchModel = new KetahananMacbookSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);
            $query = KetahananMacbook::find();
            return $this->render('index', [
                'query' => $query,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Displays a single KetahananMacbook model.
     * @param int $id_ketahanan Id Ketahanan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_ketahanan)
    {
        if (\Yii::$app->user->can('viewPostKetahanan')) {
            return $this->render('view', [
                'model' => $this->findModel($id_ketahanan),
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['ketahanan-macbook/index']);
        }
    }

    /**
     * Creates a new KetahananMacbook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('createPostKetahanan')) {
            $model = new KetahananMacbook();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id_ketahanan' => $model->id_ketahanan]);
                }
            } else {
                $model->loadDefaultValues();
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['ketahanan-macbook/index']);
        }
    }

    /**
     * Updates an existing KetahananMacbook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_ketahanan Id Ketahanan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_ketahanan)
    {
        if (\Yii::$app->user->can('updatePostKetahanan')) {
            $model = $this->findModel($id_ketahanan);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_ketahanan' => $model->id_ketahanan]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['ketahanan-macbook/index']);
        }
    }

    /**
     * Deletes an existing KetahananMacbook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_ketahanan Id Ketahanan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_ketahanan)
    {
        if (\Yii::$app->user->can('deletePostKetahanan')) {
            $this->findModel($id_ketahanan)->delete();

            return $this->redirect(['index']);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['ketahanan-macbook/index']);
        }
    }

    /**
     * Finds the KetahananMacbook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_ketahanan Id Ketahanan
     * @return KetahananMacbook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ketahanan)
    {
        if (($model = KetahananMacbook::findOne(['id_ketahanan' => $id_ketahanan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
