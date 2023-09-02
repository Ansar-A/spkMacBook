<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ketKomponent".
 *
 * @property int $id
 * @property string $ket_jenisProduk
 *
 * @property JenisProduk[] $jenisProduks
 */
class KetKomponent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ketKomponent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[
                'ket_jenisProduk', 'judul',
                'photo',
                'link',
            ], 'required'],
            [[
                'ket_jenisProduk', 'judul',
                'photo',
                'link',
            ], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ket_jenisProduk' => 'Ket Jenis Produk',
            'judul' => 'Judul',
            'photo' => 'Photo',
            'link' => 'Link',
        ];
    }

    /**
     * Gets query for [[JenisProduks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisProduks()
    {
        return $this->hasMany(JenisProduk::class, ['get_ket' => 'id']);
    }
}
