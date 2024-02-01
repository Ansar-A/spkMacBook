<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

// use kartik\password\PasswordInput;

use common\models\AuthAssignment;
use yii\helpers\Url;
use kartik\form\ActiveForm;
use yii\helpers\Html;
use kartik\checkbox\CheckboxX;
use yii\helpers\ArrayHelper;

$this->title = 'Login';
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
<div class="wrapper-page">
    <div class="car-box">
        <?php if (Yii::$app->session->hasFlash('error')) : ?>
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <h4><i class="icon fa fa-check"></i>Error!</h4>
                <?= Yii::$app->session->getFlash('error') ?>
            </div>
        <?php endif; ?>
        <div class="card-box">
            <div class="profile-widget text-center">
                <div class="bg-custom bg-profile"></div>
                <img src="<?= Url::to('@web/purple/assets/images/users/mac.png') ?>" class="thumb-lg img-circle img-thumbnail" alt="img">
                <h5>
                    <font>SPK MacBook Bekas</font>
                </h5>
                <div class="container">
                    <div class="panel-body text-left">
                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'fieldConfig' => [
                                'showLabels' => false,
                            ],

                        ]); ?>
                        <div class="form-group" style="padding-bottom: 8px;">
                            <?= $form->field($model, 'username', [
                                'addon' => [
                                    'prepend' => ['content' => '<i class="fa fa-duotone fa-user fa-sm" style="color: #874bc3;"></i>']
                                ],
                                'inputOptions' => ['placeholder' => 'Username'],
                            ])->textInput(['autofocus' => true]); ?>
                        </div>

                        <div class="form-group" style="padding-bottom: 2px;">
                            <?= $form->field($model, 'password', [
                                'addon' => ['prepend' => ['content' => '<i class="fa fa-sharp fa-regular fa-lock fa-lg" style="color: #874bc3;"></i>']],
                                'inputOptions' => ['placeholder' => 'Password'],
                            ])->passwordInput([]); ?>
                        </div>

                        <!-- <?= $form->field($model, 'roles')->dropDownList($model->roles, ['prompt' => 'Select Role']) ?> -->
                        <div class="row">
                            <div class="col-md-6">
                                <?= Html::checkbox('reveal-password', false, [
                                    'id' => 'reveal-password',
                                ]) ?> <?= Html::label('', 'reveal-password') ?>
                                <?php
                                $this->registerJs("jQuery('#reveal-password').change(function(){jQuery('#loginform-password').attr('type',this.checked?'text':'password');})");
                                ?><font>Show password</font>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pull-right">
                                    <a class="text-dark"><i class="md md-lock-open m-r-5" style="color: #5c39ac;"></i></i><?= Html::a('Forgot password?', ['site/request-password-reset']) ?></a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-t-20 m-b-0">
                            <div class="col-sm-12 text-center">
                                <div class="form-group text-center">
                                    <?= Html::submitButton('Login', ['class' => 'bn632-hover bn20 btn-sm', 'name' => 'login-button']) ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2 has-success">
                                    <label class="cbx-label" for="kv-adv-119">
                                        <?= CheckboxX::widget([
                                            'name' => 'kv-adv-119',
                                            'initInputType' => CheckboxX::INPUT_CHECKBOX,
                                            'options' => ['id' => 'kv-adv-119'],
                                            'pluginOptions' => [
                                                'size' => 'xs',
                                                'enclosedLabel' => true
                                            ]
                                        ]); ?>
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <div class="container">
                <p>
                    &nbsp;
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>
                    <font>Tidak punya akun?</font> <a href="<?= Url::to(['site/signup']) ?>" class="text-primary m-l-5"><b>
                            <font>Sign Up</font>
                        </b></a>
                </p>
            </div>
        </div>
    </div>
</div>