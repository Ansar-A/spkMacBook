<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use common\models\AuthAssignment;
use common\models\AuthItem;
use common\models\SosialMedia;
use yii\helpers\Url;
use kartik\form\ActiveForm;
use yii\helpers\Html;
use kartik\password\PasswordInput;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;

// var_dump($model->getErrors());
// die();
$this->title = 'Signup';
?>
<html>

<head>
    <style>
        .bg-custom {
            background-image: linear-gradient(to right,
                    #667eea,
                    #8e37d7);
            box-shadow: 0 1px 5px 0 rgba(116, 79, 168, 0.75);
            border-top-left-radius: 30px;
            border-bottom-right-radius: 30px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .card-box {
            border-top-left-radius: 50px;
            border-bottom-right-radius: 30px;
        }

        .bn632-hover {
            width: 170px;
            font-size: 14px;
            font-weight: 450;
            color: #fff;
            cursor: pointer;
            margin: 5px;
            height: 45px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:hover {
            background-position: 100% 0;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:focus {
            outline: none;
        }

        .bn632-hover.bn20 {
            background-image: linear-gradient(to right,
                    #667eea,
                    #764ba2,
                    #6b8dd6,
                    #8e37d7);
            box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
        }
    </style>
</head>

</html>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="wrapper-page signup-signin-page" style="margin-left: 150px; margin-right: 150px;">
                    <div class="card-box">
                        <div class="row">
                            <div class="profile-widget text-center">
                                <div class="bg-custom bg-profile"></div>
                                <img src="<?= Url::to('@web/purple/assets/images/users/mac.png') ?>" class="thumb-lg img-circle img-thumbnail" alt="img">
                                <!-- <h4 style="padding-top: 20px;">
                                    <font>SPK MacBook Bekas</font>
                                </h4> -->
                                <div class="form-group m-t-20 m-b-0">
                                    <div class="col-sm-12 text-center">
                                        <div class="col-lg-4">
                                            <hr>
                                        </div>
                                        <div class="col-lg-4" style="padding-top: 2px;">
                                            <h5>
                                                <font>SPK MacBook Bekas</font>
                                            </h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                                <div class="col-md-6">
                                    <?= $form->field($model, 'username', [
                                        'feedbackIcon' => [
                                            'prefix' => 'fa fa-user',
                                            'default' => 'fa fa-user',
                                            'success' => 'check text-success',
                                            'error' => 'exclamation-triangle text-danger',
                                            'defaultOptions' => ['class' => 'text-custom']
                                        ]
                                    ])->textInput(['placeholder' => 'Enter username...']); ?>

                                    <?= $form->field($model, 'email', [
                                        'feedbackIcon' => [
                                            'prefix' => 'fa fa-envelope',
                                            'default' => 'fa fa-envelope',
                                            'success' => 'check text-success',
                                            'error' => 'exclamation-triangle text-danger',
                                            'defaultOptions' => ['class' => 'text-custom']
                                        ]
                                    ])->textInput(['placeholder' => 'Enter a valid email address...']); ?>

                                    <?= $form->field($model, 'password')->widget(PasswordInput::classname(), [
                                        'pluginOptions' => [
                                            'showMeter' => true,
                                            'toggleMask' => false
                                        ]
                                    ])->passwordInput(['placeholder' => 'Enter password...']); ?>

                                    <?= $form->field($model, 'address')->textarea(['placeholder' => 'Enter Address...']); ?>
                                    <?= $form->field($model, 'tentang')->textarea(['placeholder' => 'About me...']); ?>
                                </div>
                                <div class="col-md-6">
                                    <?= $form->field($model, 'photo')->widget(FileInput::classname(), [
                                        'options' => ['accept' => 'photos/*'],
                                        'pluginOptions' => [
                                            'showUpload' => false
                                        ],
                                    ]);
                                    ?>
                                    <?= $form->field($model, 'hp')->textInput(['type' => 'number']); ?>
                                    <?= $form->field($model, 'role')->dropDownList(['Toko' => 'Toko', 'Personal' => 'Personal', 'Administrator' => 'Administrator']); ?>


                                    <!-- <?= $form->field($model, 'fb')->textInput() ?> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="form-group pull-right">
                                        <a class="text-dark"><?= Html::resetButton('', ['class' => 'fa fa-refresh m-r-5 btn btn-transparan']) ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-t-20 m-b-0">
                                <div class="col-sm-12 text-center">
                                    <div class="col-lg-4">
                                        <hr>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <?= Html::submitButton('Signup', ['class' => 'bn632-hover bn20 btn-sm', 'name' => 'signup-button']) ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p>
                                <font>Sudah punya akun?</font><a href="<?= Url::to(['site/login']) ?>" class="text-primary m-l-5"><b>
                                        <font>Sign In</font>
                                    </b></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>