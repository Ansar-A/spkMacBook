<?php

namespace common\models;

use common\models\SpkKelayakan;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /** * @var UploadedFile */
    public $filename;
    public $importFile;
    // const SCENARIO_IMPORT = 'upload';
    // public function scenarios()
    // {
    //     return [
    //         self::SCENARIO_IMPORT => ['importFile']
    //     ];
    // }
    public function rules()
    {
        return [
            [
                // [['get_produk'], 'integer'],
                ['importFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'xlsx, xls',
                // [['get_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::class, 'targetAttribute' => ['get_produk' => 'id']],
            ],
            // [
            //     ['importFile'],  'required', 'on' => self::SCENARIO_IMPORT,
            //     'message' => '{attribute} Wajib di Isi',
            // ],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            // $filename = 'berkas/' . $this->importFile->baseName . '.' . $this->importFile->extension;
            $this->filename = 'berkas/' . $this->importFile->baseName . '.' . $this->importFile->extension;
            $this->importFile->saveAs($this->filename);
            return true;
        } else {
            return false;
        }
    }
}
