<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DetailProdukSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-produk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_detail') ?>

    <?= $form->field($model, 'ketahanan') ?>

    <?= $form->field($model, 'performa') ?>

    <?= $form->field($model, 'kondisi') ?>

    <?= $form->field($model, 'keamanan') ?>

    <?php // echo $form->field($model, 'get_spk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
