<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis_so".
 *
 * @property int $id
 * @property string $jenis
 *
 * @property Produk[] $produks
 */
class JenisSo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_so';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis'], 'required'],
            [['jenis'], 'string', 'max' => 255],
            [['jenis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis' => 'Jenis Sistem Operasi',

        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['id_so' => 'id']);
    }
}
