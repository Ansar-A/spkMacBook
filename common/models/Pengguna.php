<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $id
 * @property string $username
 * @property string|null $password_hash
 * @property string $email
 * @property int $status
 * @property string|null $auth_key
 * @property string|null $password_reset_token
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $verification_token
 * @property int $jenis_kelamin
 * @property string $address
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $kabupaten
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'created_at', 'updated_at', 'jenis_kelamin', 'address', 'kelurahan', 'kecamatan', 'kabupaten'], 'required'],
            [['status', 'jenis_kelamin'], 'integer'],
            [['username'], 'string', 'max' => 50],
            [['password_hash', 'password_reset_token', 'verification_token', 'address'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 25],
            [['auth_key'], 'string', 'max' => 32],
            [['created_at', 'updated_at'], 'string', 'max' => 11],
            [['kelurahan', 'kecamatan', 'kabupaten'], 'string', 'max' => 100],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'email' => 'Email',
            'status' => 'Status',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'jenis_kelamin' => 'Jenis Kelamin',
            'address' => 'Address',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
        ];
    }
}
