<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "like_produk".
 *
 * @property int $id_like
 * @property int $get_likeProduk
 * @property int $get_pengguna
 *
 * @property Produk $getLikeProduk
 * @property Pengguna $getPengguna
 */
class LikeProduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'like_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['get_likeProduk', 'get_pengguna',], 'required'],
            [['get_likeProduk', 'get_pengguna',], 'integer'],
            [['get_likeProduk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::class, 'targetAttribute' => ['get_likeProduk' => 'id']],
            [['get_pengguna'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::class, 'targetAttribute' => ['get_pengguna' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_like' => 'Id Like',
            'get_likeProduk' => 'MacBook Like',
            'get_pengguna' => 'Pengguna',

        ];
    }

    /**
     * Gets query for [[GetLikeProduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGetLikeProduk()
    {
        return $this->hasOne(Produk::class, ['id' => 'get_likeProduk']);
    }

    /**
     * Gets query for [[GetPengguna]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGetPengguna()
    {
        return $this->hasOne(Pengguna::class, ['id' => 'get_pengguna']);
    }
}
