<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ResetPasswordForm $model */

use kartik\password\PasswordInput;
use yii\bootstrap\Html;
use kartik\form\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="card-box">

        <div class="profile-widget text-center">
            <div class="bg-custom bg-profile"></div>
            <img src="/yii-macbook/backend/web/purple/assets/images/users/mac.png" class="thumb-lg img-circle img-thumbnail" alt="img">
            <h4>SPK MacBook Bekas</h4>
            <p class="text-muted"><i class="fa fa-apple"></i> Reset password</p>
            <hr>
            <p>Silakan masukkan kata sandi baru Anda:</p>
            <div class="panel-body text-left">
                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
                <?= PasswordInput::widget(['model' => $model, 'attribute' => 'password']); ?>
                <p></p>
                <a class="text-dark"><?= Html::resetButton('', ['class' => 'fa fa-refresh m-r-5 btn btn-transparan']) ?>Reset</a>
            </div>
            <hr>
            <div class="form-group text-center m-t-40">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary btn-block text-uppercase waves-effect waves-light']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>
</div>