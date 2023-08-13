<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "builtinApps".
 *
 * @property int $id_builtinApps
 * @property string $builtinApp
 *
 * @property Produk[] $produks
 */
class BuiltinApps extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'builtinApps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['builtinApp'], 'required'],
            [['builtinApp'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_builtinApps' => 'Id Builtin Apps',
            'builtinApp' => 'Builtin App',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::class, ['get_builtinApps' => 'id_builtinApps']);
    }
}
