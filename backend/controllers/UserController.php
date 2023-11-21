<?php

namespace backend\controllers;

use common\models\User;
use backend\models\UserSearch;
use common\models\AuthAssignment;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\web\UploadedFile;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     *
     * @return string
     */

    public function actionIndex()
    {
        if (\Yii::$app->user->can('managePostAdmin')) {
            $searchModel = new UserSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);
            $query = User::find();
            if (Yii::$app->request->post('hasEditable')) {
                $id = Yii::$app->request->post('editableKey');
                $status = User::findOne($id);

                $out = Json::encode(['output' => '', 'message' => '']);
                $post = [];
                $posted = current($_POST['User']);
                $post['User'] = $posted;
                if ($status->load($post)) {
                    $status->save();
                }
                echo $out;
                return;
            }
            return $this->render('index', [
                'query' => $query,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Displays a single User model.
     * @param int $id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (\Yii::$app->user->can('viewPostAdmin')) {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['user/index']);
        }
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('createPostAdmin')) {
            // create post
            $model = new User();
            $model->scenario = 'update';
            if ($this->request->isPost) {
                if ($model->load($this->request->post())) {
                    $model->photo = UploadedFile::getInstance($model, 'photo');
                    if ($model->validate()) {
                        if (!is_null($model->photo)) {
                            $filename = 'photos/' . md5(microtime()) . '.' . $model->photo->extension;
                            $model->photo->saveAs($filename);
                            $model->photo = $filename;
                            Yii::$app->getSession()->setFlash('success', '');
                        }
                        $model->save(false);
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
            } else {
                $model->loadDefaultValues();
            }
            return $this->renderAjax('create', [
                'model' => $model,

            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['user/index']);
        }
    }


    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (\Yii::$app->user->can('updatePostAdmin')) {
            $model = $this->findModel($id);
            $model->scenario = 'update';

            if ($model->load($this->request->post())) {
                $model->photo = UploadedFile::getInstance($model, 'photo');
                if ($model->validate()) {
                    if (!is_null($model->photo)) {
                        $filename = 'photos/' . md5(microtime()) . '.' . $model->photo->extension;
                        $model->photo->saveAs($filename);
                        $model->photo = $filename;
                    }

                    $model->save(false);

                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }

            return $this->render('update', [
                'model' => $model,

            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['user/index']);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id = '')
    {
        if (\Yii::$app->user->can('deletePostAdmin')) {

            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['user/index']);
        }
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
