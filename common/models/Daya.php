<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "daya".
 *
 * @property int $id_daya
 * @property int $informasi_baterai
 *
 * @property Produk[] $produks
 */
class Daya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'daya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['informasi_baterai'], 'required'],
            [['informasi_baterai'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_daya' => 'Id Daya',
            'informasi_baterai' => 'Informasi Baterai',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_daya' => 'id_daya']);
    }
}
