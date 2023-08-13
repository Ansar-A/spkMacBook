<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\KondisiMacbookSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kondisi-macbook-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kondisi') ?>

    <?= $form->field($model, 'kondisi_layar') ?>

    <?= $form->field($model, 'keyboard') ?>

    <?= $form->field($model, 'tracpad') ?>

    <?= $form->field($model, 'audio') ?>

    <?php // echo $form->field($model, 'kamera') ?>

    <?php // echo $form->field($model, 'koneksi') ?>

    <?php // echo $form->field($model, 'kondisi_port') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
