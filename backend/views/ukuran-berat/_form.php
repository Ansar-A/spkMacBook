<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\UkuranBerat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ukuran-berat-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'tinggi')->textInput(['type' => 'number']) ?>

            <?= $form->field($model, 'panjang')->textInput(['type' => 'number']) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'lebar')->textInput(['type' => 'number']) ?>

            <?= $form->field($model, 'berat')->textInput(['type' => 'number']) ?>
        </div>
    </div>

    <div class="form-group text-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['ukuran-berat/index']) ?>" type="button" class="btn btn-white waves-effect md md-reply"></a>
    </div>

    <?php ActiveForm::end(); ?>

</div>