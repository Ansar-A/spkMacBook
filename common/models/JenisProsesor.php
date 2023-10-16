<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis_prosesor".
 *
 * @property int $id
 * @property string $jenis
 *
 * @property Produk[] $produks
 */
class JenisProsesor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_prosesor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenisProsesor'], 'required'],
            [['jenisProsesor'], 'string', 'max' => 255],
            [['jenisProsesor'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenisProsesor' => 'jenisProsesor',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['id_prosesor' => 'id']);
    }
}
