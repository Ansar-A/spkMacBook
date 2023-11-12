<?php

namespace frontend\controllers;

use Yii;
use common\models\LikeProduk;
use frontend\models\LikeProdukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LikeProdukController implements the CRUD actions for LikeProduk model.
 */
class LikeProdukController extends Controller
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
     * Lists all LikeProduk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LikeProdukSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LikeProduk model.
     * @param int $id Id Like
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new LikeProduk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new LikeProduk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LikeProduk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id Id Like
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LikeProduk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id Id Like
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LikeProduk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id Id Like
     * @return LikeProduk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LikeProduk::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //new
    public function actionLike($produk_id)
    {
        // Ambil ID pengguna yang sedang masuk
        $user_id = Yii::$app->user->id;
        // Simpan "like" ke dalam database
        $like = new LikeProduk();
        $like->user_id = $user_id;
        $like->produk_id = $produk_id;
        $like->save();

        // Redirect kembali ke halaman produk
        return $this->redirect(['spk-kelayakan/index', 'id' => $produk_id]);
    }

    public function actionUnlike($produk_id)
    {
        // Ambil ID pengguna yang sedang masuk
        $user_id = Yii::$app->user->id;

        // Hapus "like" dari database
        LikeProduk::deleteAll(['user_id' => $user_id, 'produk_id' => $produk_id]);

        // Redirect kembali ke halaman produk
        return $this->redirect(['spk-kelayakan/index', 'id' => $produk_id]);
    }
}
