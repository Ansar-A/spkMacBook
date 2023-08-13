<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "performa_macbook".
 *
 * @property int $id_performa
 * @property int $ram
 * @property int $vga
 * @property int $prosesor
 * @property int $storage
 *
 * @property DetailProduk[] $detailProduks
 */
class PerformaMacbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'performa_macbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ram', 'vga', 'prosesor', 'storage'], 'required'],
            [['ram', 'vga', 'prosesor', 'storage'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_performa' => 'Id Performa',
            'ram' => 'Ram',
            'vga' => 'Vga',
            'prosesor' => 'Prosesor',
            'storage' => 'Storage',
        ];
    }

    /**
     * Gets query for [[DetailProduks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailProduks()
    {
        return $this->hasMany(DetailProduk::class, ['performa' => 'id_performa']);
    }
}
