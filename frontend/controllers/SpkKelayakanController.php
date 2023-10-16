<?php

namespace frontend\controllers;

use Yii;
use common\models\Produk;
use common\models\SpkKelayakan;
use frontend\models\SpkKelayakanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SpkKelayakanController implements the CRUD actions for SpkKelayakan model.
 */
class SpkKelayakanController extends Controller
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
     * Lists all SpkKelayakan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SpkKelayakanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SpkKelayakan model.
     * @param int $id_kelayakan Id Kelayakan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kelayakan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kelayakan),
        ]);
    }

    /**
     * Creates a new SpkKelayakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SpkKelayakan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kelayakan' => $model->id_kelayakan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SpkKelayakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kelayakan Id Kelayakan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kelayakan)
    {
        $model = $this->findModel($id_kelayakan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kelayakan' => $model->id_kelayakan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SpkKelayakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kelayakan Id Kelayakan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kelayakan)
    {
        $this->findModel($id_kelayakan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SpkKelayakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kelayakan Id Kelayakan
     * @return SpkKelayakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kelayakan)
    {
        if (($model = SpkKelayakan::findOne(['id_kelayakan' => $id_kelayakan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionDetailProduk($id_kelayakan)
    {
        $model = SpkKelayakan::findOne($id_kelayakan);

        return $this->render('produkdetail',  ['model' => $model]);
    }
}
