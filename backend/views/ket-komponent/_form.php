<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\KetKomponent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ket-komponent-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'ket_jenisProduk')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>