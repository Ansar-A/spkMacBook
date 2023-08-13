<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "keamanan_macbook".
 *
 * @property int $id_keamanan
 * @property int $no_seri
 * @property int $garansi
 *
 * @property DetailProduk[] $detailProduks
 */
class KeamananMacbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keamanan_macbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_seri', 'garansi'], 'required'],
            [['no_seri', 'garansi'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_keamanan' => 'Id Keamanan',
            'no_seri' => 'No Seri',
            'garansi' => 'Garansi',
        ];
    }

    /**
     * Gets query for [[DetailProduks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailProduks()
    {
        return $this->hasMany(DetailProduk::class, ['keamanan' => 'id_keamanan']);
    }
}
