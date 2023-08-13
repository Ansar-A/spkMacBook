<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "nirkabel".
 *
 * @property int $id_nirkabel
 * @property string $wifi
 * @property string $bluetooth
 *
 * @property Produk[] $produks
 */
class Nirkabel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nirkabel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wifi', 'bluetooth'], 'required'],
            [['wifi', 'bluetooth'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_nirkabel' => 'Id Nirkabel',
            'wifi' => 'Wifi',
            'bluetooth' => 'Bluetooth',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_nirkabel' => 'id_nirkabel']);
    }
}
