<?php

namespace backend\controllers;

use common\models\Warna;
use backend\models\WarnaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WarnaController implements the CRUD actions for Warna model.
 */
class WarnaController extends Controller
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
     * Lists all Warna models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WarnaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Warna model.
     * @param int $id_warna Id Warna
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_warna)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_warna),
        ]);
    }

    /**
     * Creates a new Warna model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Warna();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_warna' => $model->id_warna]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Warna model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_warna Id Warna
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_warna)
    {
        $model = $this->findModel($id_warna);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_warna' => $model->id_warna]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Warna model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_warna Id Warna
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_warna)
    {
        $this->findModel($id_warna)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Warna model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_warna Id Warna
     * @return Warna the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_warna)
    {
        if (($model = Warna::findOne(['id_warna' => $id_warna])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
