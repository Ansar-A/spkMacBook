<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "detail_produk".
 *
 * @property int $id_detail
 * @property int $ketahanan
 * @property int $performa
 * @property int $kondisi
 * @property int $keamanan
 * @property int $get_spk
 *
 * @property DataSpk $getSpk
 * @property KeamananMacbook $keamanan0
 * @property KetahananMacbook $ketahanan0
 * @property KondisiMacbook $kondisi0
 * @property PerformaMacbook $performa0
 */
class DetailProduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ketahanan', 'performa', 'kondisi', 'keamanan', 'get_spk'], 'required'],
            [['ketahanan', 'performa', 'kondisi', 'keamanan', 'get_spk'], 'integer'],
            [['ketahanan'], 'exist', 'skipOnError' => true, 'targetClass' => KetahananMacbook::class, 'targetAttribute' => ['ketahanan' => 'id_ketahanan']],
            [['keamanan'], 'exist', 'skipOnError' => true, 'targetClass' => KeamananMacbook::class, 'targetAttribute' => ['keamanan' => 'id_keamanan']],
            [['kondisi'], 'exist', 'skipOnError' => true, 'targetClass' => KondisiMacbook::class, 'targetAttribute' => ['kondisi' => 'id_kondisi']],
            [['performa'], 'exist', 'skipOnError' => true, 'targetClass' => PerformaMacbook::class, 'targetAttribute' => ['performa' => 'id_performa']],
            [['get_spk'], 'exist', 'skipOnError' => true, 'targetClass' => DataSpk::class, 'targetAttribute' => ['get_spk' => 'id_spk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id Detail',
            'ketahanan' => 'Ketahanan',
            'performa' => 'Performa',
            'kondisi' => 'Kondisi',
            'keamanan' => 'Keamanan',
            'get_spk' => 'Get Spk',
        ];
    }

    /**
     * Gets query for [[GetSpk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGetSpk()
    {
        return $this->hasOne(DataSpk::class, ['id_spk' => 'get_spk']);
    }

    /**
     * Gets query for [[Keamanan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeamanan0()
    {
        return $this->hasOne(KeamananMacbook::class, ['id_keamanan' => 'keamanan']);
    }

    /**
     * Gets query for [[Ketahanan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKetahanan0()
    {
        return $this->hasOne(KetahananMacbook::class, ['id_ketahanan' => 'ketahanan']);
    }

    /**
     * Gets query for [[Kondisi0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKondisi0()
    {
        return $this->hasOne(KondisiMacbook::class, ['id_kondisi' => 'kondisi']);
    }

    /**
     * Gets query for [[Performa0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerforma0()
    {
        return $this->hasOne(PerformaMacbook::class, ['id_performa' => 'performa']);
    }
}
