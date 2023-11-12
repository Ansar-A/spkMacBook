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
<section class="section1">
    <div class="container clearfix">
        <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top:180px">
                <h2 class="title">
                    <span>Welcome !</span>
                    <hr>
                </h2>
                <p>Selamat datang di Sistem Pendukung Keputusan Penentuan MacBook Bekas, aplikasi yang dapat membantu anda dalam menentukan MacBook bekas terbaik.</p>
                <p>Anda hanya perlu memasukkan budget yang anda miliki, aplikasi akan menampilkan MacBook bekas yang memiliki kualitas terbaik berdasarkan Performa, Keamanan, Ketahanan dan Kondisi komponen yang terbaik.</p>
                <p class="withpadding">Belum punya Akun? <a href="/yii-spk/frontend/web/site/signup">Click Here</a> untuk registrasi sekarang.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top:85px">
                <div class="wrapper-page">
                    <div class="card-box">
                        <div class="panel-body">
                            <h2 class="title">
                                <span>Login Form</span>
                            </h2>
                            <p>SPK MacBook Bekas</p>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                                    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username', 'autofocus' => true])->label('') ?>
                                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label('') ?>
                                    <hr>
                                    <!-- <?= $form->field($model, 'rememberMe')->checkbox(['template' => "<div class=\"col-lg-12\" style=\"padding-left: 0px\"> {input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>"])->label('Remember me') ?> -->
                                    <div class="form-group">
                                        <div class=" col-xs-5" style="padding-left:0%">
                                            <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block  waves-effect waves-light', 'name' => 'login-button']) ?>
                                        </div>
                                    </div>
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end login -->
            </div>
        </div>
        <!-- end content -->
    </div>
    <!-- end container -->
</section>