<?php

namespace backend\controllers;

use common\models\KoneksiEkspansi;
use backend\models\KoneksiEkspansiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KoneksiEkspansiController implements the CRUD actions for KoneksiEkspansi model.
 */
class KoneksiEkspansiController extends Controller
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
     * Lists all KoneksiEkspansi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KoneksiEkspansiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KoneksiEkspansi model.
     * @param int $id_koneksi Id Koneksi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_koneksi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_koneksi),
        ]);
    }

    /**
     * Creates a new KoneksiEkspansi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KoneksiEkspansi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_koneksi' => $model->id_koneksi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KoneksiEkspansi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_koneksi Id Koneksi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_koneksi)
    {
        $model = $this->findModel($id_koneksi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_koneksi' => $model->id_koneksi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KoneksiEkspansi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_koneksi Id Koneksi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_koneksi)
    {
        $this->findModel($id_koneksi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KoneksiEkspansi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_koneksi Id Koneksi
     * @return KoneksiEkspansi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_koneksi)
    {
        if (($model = KoneksiEkspansi::findOne(['id_koneksi' => $id_koneksi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
