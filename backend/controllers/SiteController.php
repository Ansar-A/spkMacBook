<?php

namespace backend\controllers;

use backend\models\SignupForm;
use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use backend\models\ResendVerificationEmailForm;
use common\models\LoginForm;
use common\models\Pengguna;
use common\models\Produk;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use InvalidArgumentException;

use yii\web\BadRequestHttpException;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout',  'index'],
                'rules' => [
                    [
                        'actions' => ['login',  'error',  'profile', 'welcome', 'contact', 'forgot', 'request-password-reset', 'reset-password', 'loginAdmin'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            // 'auth' => [
            //     'class' => 'yii\authclient\AuthAction',
            //     'successCallback' => [$this, 'onAuthSuccess'],
            // ],
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            // 'regist' => [
            //     'class' => 'yii\authclient\AuthAction',
            //     'successCallback' => [$this, 'onRegistSuccess'],
            // ],
        ];
    }
    // public function onAuthSuccess($client)
    // {
    //     $attributes = $client->getUserAttributes();
    //     if (Yii::$app->user->isGuest) {
    //         $auth = Auth::findOne([
    //             'source_id' => (string)$attributes['id']
    //         ]);
    //         if (isset($auth) && isset($auth->user)) {
    //             Yii::$app->user->login($auth->user, 0);
    //         }
    //     } else {
    //         Yii::$app->session->setFlash('danger', 'Akun belum Terdaftar');
    //     }
    // }

    // public function onRegistSuccess($client)
    // {
    //     $attributes = $client->getUserAttributes();
    //     if (Yii::$app->user->isGuest) {
    //         $cekUser = User::findOne([
    //             'email' => $attributes['email']
    //         ]);
    //         if (!isset($cekUser)) {
    //             $user = new User;
    //             $user->username = $attributes['email'];
    //             $user->email = $attributes['email'];
    //             $user->status = User::STATUS_ACTIVE;
    //             $user->setPassword(Yii::$app->security->generateRandomString(6));
    //             $user->generateAuthKey();
    //             if ($user->save(false)) {
    //                 $auth = new Auth([
    //                     'user_id' => $user->id,
    //                     'source' => $client->getId(),
    //                     'source_id' => (string)$attributes['id'],
    //                 ]);
    //                 $auth->save();
    //                 Yii::$app->user->login($user, 0);
    //             } else {
    //                 Yii::$app->session->setFlash('error', 'Terjadi kesalahan membuat user');
    //             }
    //         } else {
    //             Yii::$app->session->setFlash('error', 'Akun telah terdaftar sebelumnya');
    //         }
    //     }
    // }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $DB = Yii::$app->db;
        $ts = $DB->createCommand("SELECT *, COUNT(id) AS total FROM `produk` GROUP BY nama_produk")->queryAll();
        $namaProduk = Produk::find()->groupBy("nama_produk")->all();
        return $this->render('index', compact("ts", "namaProduk"));
    }

    /**
     * Login action.
     *
     * @return string|Response
     */

    //LoginServicer
    public function actionLogin()
    {

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $this->layout = 'mainlogin';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $this->layout = 'mainwelcome';
            return $this->render('welcome');
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,

        ]);
    }

    public function actionSignup()
    {
        $this->layout = 'mainsignup';
        $model = new SignupForm();
        // $authItems = AuthItem::find()->all();
        if ($model->load($this->request->post())) {

            //$model->since = \Yii::$app->formatter->asDate($model->since, 'yyyy-MM-dd');
            $model->photo = UploadedFile::getInstance($model, 'photo');
            if ($model->validate()) {
                if (!is_null($model->photo)) {
                    $filename = 'photos/' . md5(microtime()) . '.' . $model->photo->extension;
                    $model->photo->saveAs($filename);
                    $model->photo = $filename;
                }
                $model->signup();

                return $this->goBack();
            }
        }
        return $this->render('signup', [
            'model' => $model,
            //'authItems' => $authItems,
        ]);
    }
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionWelcome()
    {
        $this->layout = 'mainwelcome';
        return $this->render('welcome');
    }
    // public function actionContact()
    // {
    //     $model = new ContactForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
    //             Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
    //         } else {
    //             Yii::$app->session->setFlash('error', 'There was an error sending your message.');
    //         }

    //         return $this->refresh();
    //     }

    //     return $this->render('contact', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionResetPassword($token)
    {
        $this->layout = 'mainresetpassword';
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'Kata sandi baru disimpan.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        $this->layout = 'mainrequestpassreset';
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Periksa email Anda untuk petunjuk lebih lanjut.');

                $this->layout = "mainnotifemail";
                return $this->render('notifemail');
            }
        }
        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
