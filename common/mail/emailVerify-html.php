<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\User $user */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
<div class="verify-email">
    <p>Hello <?= Html::encode($user->username) ?>,</p>

    <p>Selamat datang di Website Sistem Pendukung Keputusan Penentuan MacBook Bekas, Silahkan klik tautan untuk login pada website.</p>
    <p>
        <a href="https://spkmacbook.online/administrator/site/login">click here to login</a>
    </p>
    <p>
        Jika akun anda belum dapat melakukan akses login, tunggu konfirmasi dari pihak admin.
    </p>
    <!-- <p><?= Html::a(Html::encode($verifyLink), $verifyLink) ?></p> -->
</div>