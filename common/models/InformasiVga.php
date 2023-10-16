<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "informasi_vga".
 *
 * @property int $id
 * @property string $vga
 */
class InformasiVga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informasi_vga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vga'], 'required'],
            [['vga'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vga' => 'Vga',
        ];
    }
    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_informasi_vga' => 'id']);
    }
}
