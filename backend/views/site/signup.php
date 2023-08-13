<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\helpers\Url;
use kartik\form\ActiveForm;
use yii\helpers\Html;
use kartik\password\PasswordInput;
use kartik\file\FileInput;

$this->title = 'Signup';
?>
<div class="account-pages"></div>
<div class="clearfix"></div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="wrapper-page signup-signin-page">
                    <div class="card-box">
                        <div class="row">
                            <div class="profile-widget text-center">
                                <div class="bg-custom bg-profile"></div>
                                <img src="<?= Url::to('@web/purple/assets/images/users/mac.png') ?>" class="thumb-lg img-circle img-thumbnail" alt="img">
                                <h3>
                                    <font face="Optima">SPK MacBook Bekas</font>
                                </h3>
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
                                </div>
                                <div class="col-md-6">
                                    <?= $form->field($model, 'hp', [
                                        'feedbackIcon' => [
                                            'prefix' => 'fa fa-phone',
                                            'default' => 'fa fa-phone',
                                            'success' => 'check-circle',
                                            'error' => 'exclamation-circle',
                                            'defaultOptions' => ['class' => 'text-custom']
                                        ]
                                    ])->widget('yii\widgets\MaskedInput', [
                                        'mask' => '999-999-999-999'
                                    ]);
                                    ?>
                                    <?= $form->field($model, 'photo')->widget(FileInput::classname(), [
                                        'options' => ['accept' => 'photos/*'],
                                        'pluginOptions' => [
                                            'showUpload' => false
                                        ],
                                    ]); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="form-group pull-right">
                                        <a class="text-dark"><?= Html::resetButton('', ['class' => 'fa fa-refresh m-r-5 btn btn-transparan']) ?>Reset</a>
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
                                            <?= Html::submitButton('SINGUP', ['class' => 'btn btn-block btn-primary', 'name' => 'signup-button']) ?>
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