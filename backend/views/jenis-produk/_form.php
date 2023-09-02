<?php

use yii\helpers\Html;
use yii\helpers\Url;
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
    </div>
    <?php ActiveForm::end(); ?>
</div>