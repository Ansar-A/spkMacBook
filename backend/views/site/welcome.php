<?php

/** @var yii\web\View $this */

use yii\helpers\Url;


$this->title = 'Landing Page';
?>


<div class="wrapper-page">
    <div class="card-box">
        <div class="profile-widget text-center">
            <div class="bg-custom bg-profile"></div>
            <img src="<?= Url::to('@web/' . Yii::$app->user->identity->photo) ?>" class="thumb-lg img-circle img-thumbnail" alt="img">
            <p></p>
            <p class="text-muted">
                <font> Welcome to SPK MacBook Bekas</font>
            </p>
            <p><a href="<?= Url::to(['site/login']) ?>" type="button" class="btn btn-default btn-rounded waves-effect waves-light">
                    <font>Next</font>
                </a></p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                <font>Selamat datang <b><?= Yii::$app->user->identity->username ?></b>! Kami yakin Anda akan unggul dalam pekerjaan dan mencapai banyak hal hebat!</font>
            </p>
        </div>
    </div>
</div>