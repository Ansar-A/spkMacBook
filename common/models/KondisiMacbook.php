<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kondisi_macbook".
 *
 * @property int $id_kondisi
 * @property int $kondisi_layar
 * @property int $keyboard
 * @property int $tracpad
 * @property int $audio
 * @property int $kamera
 * @property int $koneksi
 * @property int $kondisi_port
 *
 * @property DetailProduk[] $detailProduks
 */
class KondisiMacbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kondisi_macbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kondisi_layar', 'keyboard', 'tracpad', 'audio', 'kamera', 'koneksi', 'kondisi_port'], 'required'],
            [['kondisi_layar', 'keyboard', 'tracpad', 'audio', 'kamera', 'koneksi', 'kondisi_port'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kondisi' => 'Id Kondisi',
            'kondisi_layar' => 'Kondisi Layar',
            'keyboard' => 'Keyboard',
            'tracpad' => 'Tracpad',
            'audio' => 'Audio',
            'kamera' => 'Kamera',
            'koneksi' => 'Koneksi',
            'kondisi_port' => 'Kondisi Port',
        ];
    }

    /**
     * Gets query for [[DetailProduks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailProduks()
    {
        return $this->hasMany(DetailProduk::class, ['kondisi' => 'id_kondisi']);
    }
}
