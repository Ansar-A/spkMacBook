<?php

namespace backend\controllers;

use yii\filters\AccessControl;
use common\models\AuthAssignment;
use backend\models\AuthAssignmentSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * AuthAssignmentController implements the CRUD actions for AuthAssignment model.
 */
class AuthAssignmentController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                // 'access' => [
                //     'class' => AccessControl::class,
                //     'rules' => [
                //         [
                //             'allow' => true,
                //             'actions' => ['index'],
                //             'roles' => ['managePost'],
                //         ],
                //         [
                //             'allow' => true,
                //             'actions' => ['view'],
                //             'roles' => ['viewPost'],
                //         ],
                //         [
                //             'allow' => true,
                //             'actions' => ['create'],
                //             'roles' => ['createPost'],
                //         ],
                //         [
                //             'allow' => true,
                //             'actions' => ['update'],
                //             'roles' => ['updatePost'],
                //         ],
                //         [
                //             'allow' => true,
                //             'actions' => ['delete'],
                //             'roles' => ['deletePost'],
                //         ],
                //     ],
                // ],
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
     * Lists all AuthAssignment models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->can('managePost')) {
            $searchModel = new AuthAssignmentSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Displays a single AuthAssignment model.
     * @param string $item_name Item Name
     * @param string $user_id User ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($item_name, $user_id)
    {
        if (\Yii::$app->user->can('viewPost')) {
            return $this->render('view', [
                'model' => $this->findModel($item_name, $user_id),
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['auth-assignment/index']);
        }
    }

    /**
     * Creates a new AuthAssignment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('createPost')) {
            $model = new AuthAssignment();
            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'item_name' => $model->item_name, 'user_id' => $model->user_id]);
                }
            } else {
                $model->loadDefaultValues();
            }
            return $this->render('create', [
                'model' => $model,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['auth-assignment/index']);
        }
    }

    /**
     * Updates an existing AuthAssignment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $item_name Item Name
     * @param string $user_id User ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($item_name, $user_id)
    {
        if (\Yii::$app->user->can('updatePost')) {
            $model = $this->findModel($item_name, $user_id);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'item_name' => $model->item_name, 'user_id' => $model->user_id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['auth-assignment/index']);
        }
    }

    /**
     * Deletes an existing AuthAssignment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $item_name Item Name
     * @param string $user_id User ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($item_name, $user_id)
    {
        if (\Yii::$app->user->can('deletePost')) {
            $this->findModel($item_name, $user_id)->delete();
            return $this->redirect(['index']);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['auth-assignment/index']);
        }
    }

    /**
     * Finds the AuthAssignment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $item_name Item Name
     * @param string $user_id User ID
     * @return AuthAssignment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($item_name, $user_id)
    {
        if (($model = AuthAssignment::findOne(['item_name' => $item_name, 'user_id' => $user_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
