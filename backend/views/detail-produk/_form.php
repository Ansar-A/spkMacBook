<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\DetailProduk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-produk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ketahanan')->textInput() ?>

    <?= $form->field($model, 'performa')->textInput() ?>

    <?= $form->field($model, 'kondisi')->textInput() ?>

    <?= $form->field($model, 'keamanan')->textInput() ?>

    <?= $form->field($model, 'get_spk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
