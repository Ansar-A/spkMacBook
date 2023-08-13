<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "warna".
 *
 * @property int $id_warna
 * @property string $warna
 *
 * @property Produk[] $produks
 */
class Warna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['warna'], 'required'],
            [['warna'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_warna' => 'Id Warna',
            'warna' => 'Warna',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_warna' => 'id_warna']);
    }
}
