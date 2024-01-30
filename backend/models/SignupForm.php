<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $photo;
    public $address;
    public $hp;
    public $tentang;
    public $get_sosial;
    public $fb;
    public $role;
    // public $get_auth;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username',  'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            [['username'], 'string', 'min' => 2, 'max' => 255],
            [['fb',], 'string', 'min' => 2, 'max' => 255],
            [['role'], 'string'],
            ['email', 'trim'],
            ['email',  'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['address', 'required', 'message' => 'Address cannot be blank'],
            ['hp', 'required', 'message' => 'No Telp cannot be blank'],
            ['tentang', 'required', 'message' => 'No Telp cannot be blank'],
            // ['get_sosial', 'required'],
            [['photo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, png, jpeg', 'on' => 'update'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
        ];
    }
    // public function getRoleOptions()
    // {
    //     return [
    //         'Admin' => 'Admin',
    //         'Personal' => 'Personal',
    //         'Super Admin' => 'Super Admin',

    //     ];
    // }
    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->photo = $this->photo;
        $user->address = $this->address;
        $user->hp = $this->hp;
        $user->tentang = $this->tentang;
        $user->fb = $this->fb;
        $user->role = $this->role;
        // $user->get_auth = $this->get_auth;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
