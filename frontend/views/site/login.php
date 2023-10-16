<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="card-box">
        <div class="bg-custom bg-profile"></div>
        <!-- <img src="/yii-macbook/backend/web/purple/assets/images/users/mac.png" class="thumb-lg img-circle img-thumbnail pull-center" alt="img"> -->
        <div class="panel-body">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>SPK MacBook Bekas Layak Pakai</p>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username', 'autofocus' => true])->label('') ?>

                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label('') ?>

                    <!-- <?= $form->field($model, 'rememberMe')->checkbox(['type' => 'checkbox']) ?> -->
                    <?= $form->field($model, 'rememberMe')->checkbox(['template' => "<div class=\"col-lg-12\" style=\"padding-left: 0px\"> {input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>"]) ?>
                    <div class="form-group text-center m-t-40">
                        <?= Html::submitButton('LOG IN', ['class' => 'btn btn-primary btn-block text-uppercase waves-effect waves-light', 'name' => 'login-button']) ?>
                    </div>
                    <!-- <div class="my-1 mx-0" style="color:#999;">
                        <i class="fa fa-lock m-r-5"></i><?= Html::a('forgot password ?', ['site/request-password-reset']) ?>
                        <br>
                        Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                    </div> -->
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                <font>Tidak punya akun?</font> <a href="/yii-spk/frontend/web/site/signup" class="text-primary m-l-5"><b>
                        <font>Sign Up</font>
                    </b></a>
            </p>
        </div>
    </div>
</div>