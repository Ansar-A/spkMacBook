<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Warna $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="warna-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'warna')->textarea() ?>

    <div class="form-group text-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['warna/index']) ?>" type="button" class="btn btn-white waves-effect md md-reply"></a>
    </div>

    <?php ActiveForm::end(); ?>

</div>