<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ukuran_berat".
 *
 * @property int $id_ukuranberat
 * @property float $tinggi
 * @property float $panjang
 * @property float $lebar
 * @property float $berat
 *
 * @property Produk[] $produks
 */
class UkuranBerat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ukuran_berat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tinggi', 'panjang', 'lebar', 'berat'], 'required'],
            [['tinggi', 'panjang', 'lebar', 'berat'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ukuranberat' => 'Id Ukuranberat',
            'tinggi' => 'Tinggi',
            'panjang' => 'Panjang',
            'lebar' => 'Lebar',
            'berat' => 'Berat',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_ukuranberat' => 'id_ukuranberat']);
    }
}
