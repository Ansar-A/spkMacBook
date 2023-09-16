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
            [['rSquare', 'dataF', 'dataT'], 'required'],
            [['dataF', 'rSquare',  'dataT'], 'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_spk' => 'Id Spk',
            'rSquare' => 'R Square',
            'dataF' => 'Data F',
            'dataT' => 'Data T',
        ];
    }

    /**
     * Gets query for [[DetailProduks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailProduks()
    {
        return $this->hasMany(DetailProduk::class, ['get_spk' => 'id_spk']);
    }
}
