<?php

namespace backend\controllers;

use common\models\UkuranBerat;
use backend\models\UkuranBeratSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UkuranBeratController implements the CRUD actions for UkuranBerat model.
 */
class UkuranBeratController extends Controller
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
     * Lists all UkuranBerat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UkuranBeratSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UkuranBerat model.
     * @param int $id_ukuranberat Id Ukuranberat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_ukuranberat)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_ukuranberat),
        ]);
    }

    /**
     * Creates a new UkuranBerat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UkuranBerat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_ukuranberat' => $model->id_ukuranberat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UkuranBerat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_ukuranberat Id Ukuranberat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_ukuranberat)
    {
        $model = $this->findModel($id_ukuranberat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ukuranberat' => $model->id_ukuranberat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UkuranBerat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_ukuranberat Id Ukuranberat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_ukuranberat)
    {
        $this->findModel($id_ukuranberat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UkuranBerat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_ukuranberat Id Ukuranberat
     * @return UkuranBerat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ukuranberat)
    {
        if (($model = UkuranBerat::findOne(['id_ukuranberat' => $id_ukuranberat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
