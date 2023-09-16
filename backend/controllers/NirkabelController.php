<?php

namespace backend\controllers;

use common\models\Nirkabel;
use backend\models\NirkabelSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;

/**
 * NirkabelController implements the CRUD actions for Nirkabel model.
 */
class NirkabelController extends Controller
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
     * Lists all Nirkabel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new NirkabelSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        if (Yii::$app->request->post('hasEditable')) {
            $id = Yii::$app->request->post('editableKey');
            $jenis = Nirkabel::findOne($id);

            $out = Json::encode(['output' => '', 'message' => '']);
            $post = [];
            $posted = current($_POST['Nirkabel']);
            $post['Nirkabel'] = $posted;
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
     * Displays a single Nirkabel model.
     * @param int $id_nirkabel Id Nirkabel
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_nirkabel)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_nirkabel),
        ]);
    }

    /**
     * Creates a new Nirkabel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Nirkabel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_nirkabel' => $model->id_nirkabel]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Nirkabel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_nirkabel Id Nirkabel
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_nirkabel)
    {
        $model = $this->findModel($id_nirkabel);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_nirkabel' => $model->id_nirkabel]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Nirkabel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_nirkabel Id Nirkabel
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_nirkabel)
    {
        $this->findModel($id_nirkabel)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Nirkabel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_nirkabel Id Nirkabel
     * @return Nirkabel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_nirkabel)
    {
        if (($model = Nirkabel::findOne(['id_nirkabel' => $id_nirkabel])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
