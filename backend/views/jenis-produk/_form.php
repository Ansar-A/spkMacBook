<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\JenisProduk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jenis-produk-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Save', ['class' => 'btn btn-success']) ?>
        <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Cancel</button>
    </div>
    <?php ActiveForm::end(); ?>
</div>