<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\User $user */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
<div class="verify-email">
    <p>Hello <?= Html::encode($user->username) ?>,</p>

    <p>Ikuti tautan di bawah ini untuk mengatur ulang kata sandi Anda:</p>

    <p><?= Html::a(Html::encode($verifyLink), $verifyLink) ?></p>
</div>