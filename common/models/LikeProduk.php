<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "like_produk".
 *
 * @property int $id
 * @property int $produk_id
 * @property int $produk_id
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
            [['produk_id', 'user_id'], 'required'],
            [['id', 'produk_id', 'user_id',], 'integer'],
            ['created_at', 'time']
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Like',
            'produk_id' => 'Kode Produk',
            'user_id' => 'Pengguna',
            'created_at' => 'Time'
        ];
    }
    /**
     * Gets query for [[GetLikeProduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelayakan()
    {
        return $this->hasOne(SpkKelayakan::class, ['id_kelayakan' => 'produk_id']);
    }
    /**
     * Gets query for [[GetPengguna]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengguna()
    {
        return $this->hasOne(Pengguna::class, ['id' => 'user_id']);
    }

    public function safeUp()
    {
        $this->createTable('like_produk', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'produk_id' => $this->integer()->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('like_produk');
    }
    public function getFrMacpro()
    {
        return $this->hasMany(FrMacpro::class, ['get_like' => 'id']);
    }
}
