<?php

namespace backend\controllers;

use common\models\PerformaMacbook;
use backend\models\PerformaMacbookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerformaMacbookController implements the CRUD actions for PerformaMacbook model.
 */
class PerformaMacbookController extends Controller
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
     * Lists all PerformaMacbook models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerformaMacbookSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerformaMacbook model.
     * @param int $id_performa Id Performa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_performa)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_performa),
        ]);
    }

    /**
     * Creates a new PerformaMacbook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerformaMacbook();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_performa' => $model->id_performa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerformaMacbook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_performa Id Performa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_performa)
    {
        $model = $this->findModel($id_performa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_performa' => $model->id_performa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerformaMacbook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_performa Id Performa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_performa)
    {
        $this->findModel($id_performa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerformaMacbook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_performa Id Performa
     * @return PerformaMacbook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_performa)
    {
        if (($model = PerformaMacbook::findOne(['id_performa' => $id_performa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
