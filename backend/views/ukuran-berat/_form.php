<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\UkuranBerat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ukuran-berat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tinggi')->textInput() ?>

    <?= $form->field($model, 'panjang')->textInput() ?>

    <?= $form->field($model, 'lebar')->textInput() ?>

    <?= $form->field($model, 'berat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
