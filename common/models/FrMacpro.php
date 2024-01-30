<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fr_macpro".
 *
 * @property int $id
 * @property int $get_produk
 *
 * @property Produk $getProduk
 */
class FrMacpro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fr_macpro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['get_like'], 'required'],
            [['get_like'], 'integer'],
            [['get_like'], 'exist', 'skipOnError' => true, 'targetClass' => LikeProduk::class, 'targetAttribute' => ['get_like' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'get_like' => 'Get Like',
        ];
    }

    /**
     * Gets query for [[GetProduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLikeProduk()
    {
        return $this->hasOne(LikeProduk::class, ['id' => 'get_like']);
    }
}
