<?php

/** @var yii\web\View $this */

use yii\bootstrap\Alert;

/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\Url;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">

    <div class="card-box">
        <div class="profile-widget text-center">
            <div class="bg-custom bg-profile"></div>
            <img src="/yii-macbook/backend/web/purple/assets/images/users/mac.png" class="thumb-lg img-circle img-thumbnail" alt="img">
            <h4>
                <font>SPK MacBook Bekas</font>
            </h4>
            <p>
                <font>Silakan isi email Anda. Tautan untuk mengatur ulang kata sandi.</font>
            </p>
            <div class="panel-body text-left">
                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email', [
                    'feedbackIcon' => [
                        'prefix' => 'fa fa-envelope',
                        'default' => 'fa fa-envelope',
                        'success' => 'check text-success',
                        'error' => 'exclamation-triangle text-danger',
                        'defaultOptions' => ['class' => 'text-custom']
                    ]
                ])->textInput(['placeholder' => 'Silahkan masukkan email anda...']); ?>
                <hr>

                <div class="form-group text-center m-t-40">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary btn-block text-uppercase waves-effect waves-light']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                <font>Back to</font> <a href="<?= Url::to(['site/login']) ?>" class="text-primary m-l-5"><b>
                        <font>Login</font>
                    </b></a>
            </p>
        </div>
    </div>
</div>