<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception*/

use yii\helpers\Html;

$this->title = $name;
?>
<!-- <div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div> -->
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="ex-page-content text-center" style="padding-top: 120px;">
        <div class="text-error"><span class="text-primary">4</span><span class="text-pink">0</span><span class="text-info">4</span></div>
        <?= Html::encode($this->title) ?>
        <h2>Bad Request</h2><br>
        <p class="text-muted"><?= nl2br(Html::encode($message)) ?></p>
        <br>
    </div>
</div>