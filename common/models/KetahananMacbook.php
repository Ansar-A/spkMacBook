<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ketahanan_macbook".
 *
 * @property int $id_ketahanan
 * @property int $baterai
 *
 * @property DetailProduk[] $detailProduks
 */
class KetahananMacbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ketahanan_macbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['baterai'], 'required'],
            [['baterai'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ketahanan' => 'Id Ketahanan',
            'baterai' => 'Baterai',
        ];
    }

    /**
     * Gets query for [[DetailProduks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailProduks()
    {
        return $this->hasMany(DetailProduk::class, ['ketahanan' => 'id_ketahanan']);
    }
}
