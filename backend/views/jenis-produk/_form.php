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
    <?= $form->field($model, 'jenis')->textarea()->label("Jenis MacBook") ?>
    <div class="form-group text-right">
        <?= Html::submitButton('<i class="fa fa-save"></i> Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['jenis-produk/index']) ?>" type="button" class="btn btn-white waves-effect md md-reply"></a>
    </div>
    <?php ActiveForm::end(); ?>
</div>