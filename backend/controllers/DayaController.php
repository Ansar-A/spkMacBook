<?php

namespace backend\controllers;

use common\models\Daya;
use backend\models\DayaSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;


/**
 * DayaController implements the CRUD actions for Daya model.
 */
class DayaController extends Controller
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
     * Lists all Daya models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DayaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        if (Yii::$app->request->post('hasEditable')) {
            $id = Yii::$app->request->post('editableKey');
            $jenis = Daya::findOne($id);

            $out = Json::encode(['output' => '', 'message' => '']);
            $post = [];
            $posted = current($_POST['Daya']);
            $post['Daya'] = $posted;
            if ($jenis->load($post)) {
                $jenis->save();
            }
            echo $out;
            return;
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Daya model.
     * @param int $id_daya Id Daya
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_daya)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_daya),
        ]);
    }

    /**
     * Creates a new Daya model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Daya();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_daya' => $model->id_daya]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Daya model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_daya Id Daya
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_daya)
    {
        $model = $this->findModel($id_daya);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_daya' => $model->id_daya]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Daya model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_daya Id Daya
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_daya)
    {
        $this->findModel($id_daya)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Daya model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_daya Id Daya
     * @return Daya the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_daya)
    {
        if (($model = Daya::findOne(['id_daya' => $id_daya])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
