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

    <div class="card-box">
        <div class="profile-widget text-center">
            <div class="bg-custom bg-profile"></div>
            <img src="<?= Url::to('@web/purple/assets/images/users/mac.png') ?>" class="thumb-lg img-circle img-thumbnail" alt="img">
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
                <div class="form-group text-center m-t-40">
                    <?= Html::submitButton('Send', ['class' => 'bn632-hover bn20 btn-sm']) ?>
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