<?php

namespace backend\controllers;


use common\models\Produk;
use backend\models\ProdukSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * ProdukController implements the CRUD actions for Produk model.
 */
class ProdukController extends Controller
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
     * Lists all Produk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProdukSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        // editable
        if (Yii::$app->request->post('hasEditable')) {
            $id = Yii::$app->request->post('editableKey');
            $jenis = Produk::findOne($id);

            $out = Json::encode(['output' => '', 'message' => '']);
            $post = [];
            $posted = current($_POST['Produk']);
            $post['Produk'] = $posted;
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
     * Displays a single Produk model.
     * @param int $id ID
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
     * Creates a new Produk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Produk();
        $model->id_servicer = Yii::$app->user->identity->id;
        $model->scenario = 'update';
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->tahun_rilis = \Yii::$app->formatter->asDate($model->tahun_rilis, 'yyyy-MM-dd');
                $model->photo = UploadedFile::getInstance($model, 'photo');
                if ($model->validate()) {
                    if (!is_null($model->photo)) {
                        $filename = 'photos/' . md5(microtime()) . '.' . $model->photo->extension;
                        $model->photo->saveAs($filename);
                        $newfilename = 'photos/120x120/' . md5(microtime()) . '.' . $model->photo->extension;
                        Image::thumbnail('@webroot/' . $filename, 120, 120)
                            ->save(Yii::getAlias('@webroot/' . $newfilename), ['quality' => 80]);

                        $model->photo = $newfilename;
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
    }

    /**
     * Updates an existing Produk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update';
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                // $model->tahun_rilis = \Yii::$app->formatter->asDate($model->tahun_rilis, 'yyyy-MM-dd');
                $model->photo = UploadedFile::getInstance($model, 'photo');
                if ($model->validate()) {
                    if (!is_null($model->photo)) {
                        $filename = 'photos/' . md5(microtime()) . '.' . $model->photo->extension;
                        $model->photo->saveAs($filename);
                        $newfilename = 'photos/120x120/' . md5(microtime()) . '.' . $model->photo->extension;
                        Image::thumbnail('@webroot/' . $filename, 120, 120)
                            ->save(Yii::getAlias('@webroot/' . $newfilename), ['quality' => 100]);

                        $model->photo = $newfilename;
                        Yii::$app->getSession()->setFlash('success', '');
                    }
                    $model->save(false);
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    /**
     * Deletes an existing Produk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Produk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Produk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Produk::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
