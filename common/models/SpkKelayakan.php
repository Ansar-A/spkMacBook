<?php

namespace common\models;

use Symfony\Contracts\Service\Attribute\Required;
use Yii;

/**
 * This is the model class for table "spk_kelayakan".
 *
 * @property int $id_kelayakan
 * @property int $dataRKetahanan
 * @property int $dataRKeamanan
 * @property int $dataRKondisi
 * @property int $dataRPerforma
 * @property int $RsquareKetahanan
 * @property int $RsquareKeamanan
 * @property int $RsquareKondisi
 * @property int $RsquarePerforma
 * @property int $dataFKetahanan
 * @property int $dataFKeamanan
 * @property int $dataFKondisi
 * @property int $dataFPerforma
 * @property float $T_cicleCount
 * @property float $T_kapasitasPengisian
 * @property float $T_noSeri
 * @property float $T_garansi
 * @property float $T_ram
 * @property float $T_vga
 * @property float $T_presesor
 * @property float $T_storage
 * @property float $T_layar
 * @property float $T_keyboard
 * @property float $T_tracpad
 * @property float $T_audio
 * @property float $T_kamera
 * @property float $T_koneksi
 * @property float $T_port
 * @property int $get_produk
 *
 * @property Produk $getProduk
 */
class SpkKelayakan extends \yii\db\ActiveRecord
{

    // public $status_produk;
    /**
     * {@inheritdoc}
     */
    // public $kode_produk;

    public static function tableName()
    {
        return 'spk_kelayakan';
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dataR', 'Rsquare', 'dataF',  'T_ketahanan', 'T_keamanan', 'T_kondisi', 'T_performa', 'nilai'], 'required'],
            [['get_produk'], 'integer'],

            [['nilai'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf', 'maxSize' => 20 * 1024, 'on' => 'update'],

            [['dataR', 'Rsquare', 'dataF', 'T_ketahanan', 'T_keamanan', 'T_kondisi', 'T_performa'], 'safe'],
            [['get_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::class, 'targetAttribute' => ['get_produk' => 'id']],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kelayakan' => 'Id Kelayakan',
            'dataR' => 'R Square',
            'Rsquare' => 'Adjusted R Square',
            'dataF' => 'Uji F',
            'T_ketahanan' => 'T RAM',
            'T_keamanan' => 'T Storage',
            'T_kondisi' => 'T Prosesor',
            'T_performa' => 'T CycleCount',
            'get_produk' => 'Get Produk',
            'importFile' => 'Import File',
            'nilai' => 'Nilai',
        ];
    }
    /**
     * Gets query for [[GetProduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLikeProduk()
    {
        return $this->hasMany(LikeProduk::class, ['produk_id' => 'id_kelayakan']);
    }
    public function getProduk()
    {
        return $this->hasOne(Produk::class, ['id' => 'get_produk']);
    }

    // public function beforeSave($insert)
    // {
    //     if ($this->isNewRecord) {
    //         $this->kode_produk = $this->generateKodeProduk();
    //     }
    //     return parent::beforeSave($insert);
    // }

    // protected function generateKodeProduk()
    // {
    //     $count = SpkKelayakan::find()->count();
    //     return 'BRG' . str_pad($count + 1, 4, '0', STR_PAD_LEFT);
    // }

}
