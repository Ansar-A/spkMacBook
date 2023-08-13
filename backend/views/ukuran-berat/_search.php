<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\UkuranBeratSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ukuran-berat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ukuranberat') ?>

    <?= $form->field($model, 'tinggi') ?>

    <?= $form->field($model, 'panjang') ?>

    <?= $form->field($model, 'lebar') ?>

    <?= $form->field($model, 'berat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
