<?php

namespace backend\controllers;

use common\models\Kamera;
use backend\models\KameraSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KameraController implements the CRUD actions for Kamera model.
 */
class KameraController extends Controller
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
     * Lists all Kamera models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KameraSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kamera model.
     * @param int $id_kamera Id Kamera
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kamera)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kamera),
        ]);
    }

    /**
     * Creates a new Kamera model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kamera();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kamera' => $model->id_kamera]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kamera model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kamera Id Kamera
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kamera)
    {
        $model = $this->findModel($id_kamera);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kamera' => $model->id_kamera]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kamera model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kamera Id Kamera
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kamera)
    {
        $this->findModel($id_kamera)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kamera model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kamera Id Kamera
     * @return Kamera the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kamera)
    {
        if (($model = Kamera::findOne(['id_kamera' => $id_kamera])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
