<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="section01">
    <div class="container clearfix">
        <div class="col-sm-12">
            <p></p>
            <?php if (Yii::$app->session->hasFlash('success')) : ?>
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-check"></i> Pesan Berhasil Terkirim</h4>
                    <?= Yii::$app->session->getFlash('success') ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
            <div class="col-lg-6 col-md-6 col-sm-6">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
                </p>

                <div class="row">
                    <div class="col-lg-12">
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('your Message') ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h4 class="title">Contact Details</h4>
                <p>Selamat datang di Website Sistem Pendukung Keputusan MacBook Bekas, silahkan hubungi kami untuk memberikan saran dan masukan demi keberlangsungan website ini.</p>
                <ul class="contact_details">
                    <li><i class="fa fa-envelope-o"></i> ansarkenshin@gmail.com</li>
                    <li><i class="fa fa-phone-square"></i> +62813-4762-6103</li>
                    <li><i class="fa fa-home"></i> Lambai, Kec. Lambai, Kab. Kolaka Utara</li>
                </ul>
                <!-- contact_details -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>