<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "data_spk".
 *
 * @property int $id_spk
 * @property int $rSquare
 * @property int $dataF
 * @property int $dataT
 *
 * @property DetailProduk[] $detailProduks
 */
class DataSpk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $akumulasi;

    public static function tableName()
    {
        return 'data_spk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['get_dataRKetahanan', 'get_dataRKeamanan', 'get_dataRKondisi', 'get_dataRPerforma',], 'required'],

            [['get_dataRKetahanan', 'get_dataRKeamanan', 'get_dataRKondisi', 'get_dataRPerforma'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_spk' => 'Id Spk',
            'get_dataRKetahanan' => 'Get DataR Ketahanan',
            'get_dataRKeamanan' => 'Get DataR Keamanan',
            'get_dataRKondisi' => 'Get DataR Kondisi',
            'get_dataRPerforma' => 'Get DataR Performa'
        ];
    }

    /**
     * Gets query for [[DetailProduks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_detaill' => 'id_spk']);
    }
    //get_spkKetahanan
    public function getSpkKeamanan()
    {
        return $this->hasOne(SpkKeamanan::class, ['id' => 'get_dataRKeamanan']);
    }
    //get_SpkKetahanan
    public function getSpkKetahanan()
    {
        return $this->hasOne(SpkKetahanan::class, ['id' => 'get_dataRKetahanan']);
    }
    //get_SpkKondisi
    public function getSpkKondisi()
    {
        return $this->hasOne(SpkKondisi::class, ['id' => 'get_dataRKondisi']);
    }
    //get_SpkPerforma
    public function getSpkPerforma()
    {
        return $this->hasOne(SpkPerforma::class, ['id' => 'get_dataRPerforma']);
    }
}
