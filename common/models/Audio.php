<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "audio".
 *
 * @property int $id_audio
 * @property string $audio
 *
 * @property Produk[] $produks
 */
class Audio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['audio'], 'required'],
            [['audio'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_audio' => 'Id Audio',
            'audio' => 'Audio',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_audio' => 'id_audio']);
    }
}
