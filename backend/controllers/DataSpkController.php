<?php

namespace backend\controllers;

use common\models\DataSpk;
use backend\models\DataSpkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataSpkController implements the CRUD actions for DataSpk model.
 */
class DataSpkController extends Controller
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
     * Lists all DataSpk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataSpkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataSpk model.
     * @param int $id_spk Id Spk
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_spk)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_spk),
        ]);
    }

    /**
     * Creates a new DataSpk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataSpk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_spk' => $model->id_spk]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataSpk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_spk Id Spk
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_spk)
    {
        $model = $this->findModel($id_spk);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_spk' => $model->id_spk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataSpk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_spk Id Spk
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_spk)
    {
        $this->findModel($id_spk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataSpk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_spk Id Spk
     * @return DataSpk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_spk)
    {
        if (($model = DataSpk::findOne(['id_spk' => $id_spk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
