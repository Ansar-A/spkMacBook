<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="card-box">
        <div class="panel-heading">
            <h3 class="text-center"> Reset Password </h3>
        </div>
        <div class="panel-body">
            <div class="alert alert-info alert-dismissable text-center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×
                </button>
                Enter your <b>Email</b> and instructions will be sent to you!
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                    <div class="form-group m-b-0">
                        <div class="input-group">
                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Enter Email', 'autofocus' => true])->label('') ?>
                            <span class="input-group-btn"><?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?></span>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                <font>Back to</font> <a href="/yii-spk/frontend/web/site/login" class="text-primary m-l-5"><b>
                        <font>Login</font>
                    </b></a>
            </p>
        </div>
    </div>
</div>