<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kamera".
 *
 * @property int $id_kamera
 * @property string $kamera
 *
 * @property Produk[] $produks
 */
class Kamera extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kamera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kamera'], 'required'],
            [['kamera'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kamera' => 'Id Kamera',
            'kamera' => 'Kamera',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_kamera' => 'id_kamera']);
    }
}
