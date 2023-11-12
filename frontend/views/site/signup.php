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
<section class="section1">
    <div class="container clearfix">
        <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top:180px">
                <h2 class="title">
                    <span>Welcome to Register!</span>
                    <hr>
                </h2>
                <p>Selamat datang di Sistem Pendukung Keputusan Penentuan MacBook Bekas, aplikasi yang dapat membantu anda dalam menentukan MacBook bekas terbaik.</p>
                <p>Anda hanya perlu memasukkan budget yang anda miliki, aplikasi akan menampilkan MacBook bekas yang memiliki kualitas terbaik berdasarkan Performa, Keamanan, Ketahanan dan Kondisi komponen yang terbaik.</p>
                <p class="withpadding">Sudah punya Akun? <a href="<?= Url::to(['site/login']) ?>" class="text-primary m-l-5">Click Here</a> untuk Login.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top:50px">
                <div class="card-box">
                    <div class="wrapper-page">
                        <div class="row">
                            <hr>
                            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class' => 'form-horizontal m-t-20']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label('') ?>

                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Input your email'])->label('') ?>

                            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(''); ?>

                            <?= $form->field($model, 'address')->textarea(['placeholder' => 'Alamat'])->label('') ?>
                            <hr>
                            <div class="form-group">

                                <div class="row">
                                    <div class=" col-xs-5">
                                        <?= Html::submitButton('Register Now', ['class' => 'btn btn-primary btn-block waves-effect waves-light', 'name' => 'signup-button']) ?>
                                    </div>
                                </div>

                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->
    </div>
    <!-- end container -->
</section>