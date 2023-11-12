<?php

namespace backend\controllers;

use common\models\UploadForm;
use common\models\SpkKelayakan;
use backend\models\SpkKelayakanSearch;
use Exception;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Yii;

use yii\web\UploadedFile;
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
        if (\Yii::$app->user->can('managePostSPK')) {
            $searchModel = new SpkKelayakanSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            \Yii::$app->getSession()->setFlash('error', 'Perlu izin Author');
            return $this->redirect(['spk-kelayakan/index']);
        }
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
        if ($this->request->isPost && $model->load($this->request->post())) {
            if ($model->save()) {
                return $this->redirect(['view', 'id_kelayakan' => $model->id_kelayakan]);
            }
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
    public function actionUpload()
    {
        $model = new UploadForm();
        // $model->scenario = UploadForm::SCENARIO_IMPORT;
        if (($model->load(Yii::$app->request->post()))) {
            $model->importFile = UploadedFile::getInstance($model, 'importFile');

            if ($model->upload()) {

                // $filename = 'berkas/' . md5(microtime()) . '.' . $model->importFile->extension;

                $file = Yii::getAlias('@webroot/' . $model->filename);
                $spreadsheet = IOFactory::load($file);
                $worksheet = $spreadsheet->getActiveSheet();
                $highestRow = $worksheet->getHighestRow();
                // $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $cellValue = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $cellValue = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $cellValue = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $cellValue = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $cellValue = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $cellValue = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $cellValue = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    // var_dump($cellValue);
                    $model = new SpkKelayakan();
                    $model->dataR = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $model->Rsquare = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $model->dataF = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $model->T_keamanan = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $model->T_ketahanan = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $model->T_kondisi = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $model->T_performa = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $model->save();
                }
                // die;
                Yii::$app->session->setFlash('success', 'Data berhasil diimpor');
                return $this->redirect(['index']);
            }
        }
        return $this->render('upload', [
            'model' => $model,

        ]);
    }

    // kode_otomatis


}
