<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

// use kartik\password\PasswordInput;


use yii\helpers\Url;
use kartik\form\ActiveForm;
use yii\helpers\Html;
use kartik\checkbox\CheckboxX;

$this->title = 'Login';
?>
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
        <?php if (Yii::$app->session->hasFlash('success')) : ?>
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <h4><i class="icon fa fa-check"></i>Success!</h4>
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif; ?>

        <div class="card-box p-0">
            <div class="profile-widget text-center">
                <div class="bg-custom bg-profile"></div>
                <img src="/yii-macbook/backend/web/purple/assets/images/users/mac.png" class="thumb-lg img-circle img-thumbnail" alt="img">
                <h4>
                    <font>SPK MacBook Bekas</font>
                </h4>
                <div class="container">
                    <div class="panel-body text-left">
                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                        ]); ?>
                        <?= $form->field($model, 'username', [
                            'addon' => ['prepend' => ['content' => '<i class="fa fa-duotone fa-user fa-sm" style="color: #874bc3;"></i>']]
                        ])->textInput(['autofocus' => true]); ?>
                        <?= $form->field($model, 'password', [
                            'addon' => ['prepend' => ['content' => '<i class="fa fa-sharp fa-regular fa-lock fa-lg" style="color: #874bc3;"></i>']]
                        ])->passwordInput([]); ?>

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
                                <div class="col-lg-4">
                                    <hr>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group text-center">
                                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block text-uppercase waves-effect waves-light', 'name' => 'login-button']) ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <hr>
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