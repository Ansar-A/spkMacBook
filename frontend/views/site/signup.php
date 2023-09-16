<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use kartik\date\DatePicker;
use kartik\file\FileInput;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\password\PasswordInput;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-pages"></div>
<div class="clearfix"></div>

<div class="content">
    <div class="container">
        <div class="row">

            <div class="wrapper-page">
                <div class="card-box">
                    <div class="row">
                        <div class="profile-widget">
                            <h1>
                                <font>Sign Up</font>
                            </h1>
                            <p>SPK MacBook Bekas Layak Pakai</p>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class' => 'form-horizontal m-t-20']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username') ?>

                            <?= $form->field($model, 'email')->textInput([])->label('Email') ?>

                            <?= $form->field($model, 'password')->widget(PasswordInput::classname(), [])->label('Password'); ?>


                            <?= $form->field($model, 'jenis_kelamin')->textInput()->label('Jenis Kelamin') ?>

                            <?= $form->field($model, 'address')->textInput()->label('Address') ?>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class=" col-xs-12">
                                            <?= Html::submitButton('SIGN UP', ['class' => 'btn btn-primary btn-block text-uppercase waves-effect waves-light', 'name' => 'signup-button']) ?>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="checkbox checkbox-primary text-center">
                                                <input id="checkbox-signup" type="checkbox" checked="checked">
                                                <label for="checkbox-signup">
                                                    <font>I accept</font> <a href="">
                                                        <font>syarat dan Ketentuan</font>
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
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

    </div>
</div>