<?php

namespace backend\controllers;

use common\models\BuiltinApps;
use backend\models\BuiltinAppsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BuiltinAppsController implements the CRUD actions for BuiltinApps model.
 */
class BuiltinAppsController extends Controller
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
     * Lists all BuiltinApps models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BuiltinAppsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BuiltinApps model.
     * @param int $id_builtinApps Id Builtin Apps
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_builtinApps)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_builtinApps),
        ]);
    }

    /**
     * Creates a new BuiltinApps model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BuiltinApps();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_builtinApps' => $model->id_builtinApps]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BuiltinApps model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_builtinApps Id Builtin Apps
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_builtinApps)
    {
        $model = $this->findModel($id_builtinApps);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_builtinApps' => $model->id_builtinApps]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BuiltinApps model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_builtinApps Id Builtin Apps
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_builtinApps)
    {
        $this->findModel($id_builtinApps)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BuiltinApps model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_builtinApps Id Builtin Apps
     * @return BuiltinApps the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_builtinApps)
    {
        if (($model = BuiltinApps::findOne(['id_builtinApps' => $id_builtinApps])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
