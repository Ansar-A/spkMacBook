<?php

namespace backend\controllers;

use common\models\KeamananMacbook;
use backend\models\KeamananMacbookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KeamananMacbookController implements the CRUD actions for KeamananMacbook model.
 */
class KeamananMacbookController extends Controller
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
     * Lists all KeamananMacbook models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KeamananMacbookSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KeamananMacbook model.
     * @param int $id_keamanan Id Keamanan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_keamanan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_keamanan),
        ]);
    }

    /**
     * Creates a new KeamananMacbook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KeamananMacbook();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_keamanan' => $model->id_keamanan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KeamananMacbook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_keamanan Id Keamanan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_keamanan)
    {
        $model = $this->findModel($id_keamanan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_keamanan' => $model->id_keamanan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KeamananMacbook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_keamanan Id Keamanan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_keamanan)
    {
        $this->findModel($id_keamanan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KeamananMacbook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_keamanan Id Keamanan
     * @return KeamananMacbook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_keamanan)
    {
        if (($model = KeamananMacbook::findOne(['id_keamanan' => $id_keamanan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
