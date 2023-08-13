<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "koneksi_ekspansi".
 *
 * @property int $id_koneksi
 * @property string $koneksiEkspansi
 *
 * @property Produk[] $produks
 */
class KoneksiEkspansi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'koneksi_ekspansi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['koneksiEkspansi'], 'required'],
            [['koneksiEkspansi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_koneksi' => 'Id Koneksi',
            'koneksiEkspansi' => 'Koneksi Ekspansi',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_koneksiekspansi' => 'id_koneksi']);
    }
}
