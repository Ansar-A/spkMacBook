<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "informasi_ram".
 *
 * @property int $id
 * @property string $ram
 *
 * @property Produk[] $produks
 */
class InformasiRam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informasi_ram';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ram'], 'required'],
            [['ram'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ram' => 'RAM',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_informasi_ram' => 'id']);
    }
}
